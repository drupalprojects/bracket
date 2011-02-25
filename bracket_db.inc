<?php

/**
 * @file
 * This file contains the database helper functions for the bracket module
 *
 * @author Jim Bullington <jimb@jrbcs.com>
 */

/**
 * Load a bracket node into this bracket object
 *
 * @param $node
 *   the node to contain the bracket
 * @return
 *   the loaded bracket object, if it exists
 */
function bracket_db_load($node) {

  // make a bracket
  $bracket = new Bracket();

  // try to load from the db
  if ($row = db_fetch_object(db_query("SELECT * FROM {bracket} WHERE nid = %d", $node->nid))) {

    // copy info
    $bracket->subtitle = $row->subtitle;
    $bracket->comments = $row->comments;
    $bracket->sport = $row->sport;
    $bracket->division = $row->division;
    $bracket->season = $row->season;
    $bracket->brgroup = $row->brgroup;
    $bracket->footer = $row->footer;
    $bracket->logopath = $row->logopath;
    $bracket->sponsorlogopath = $row->sponsorlogopath;
    $bracket->design = $row->design;
    $bracket->options = unserialize($row->options);

    // convert options to new format if needed    
    if (!isset($bracket->options['image_options'])) {
      $bracket->options['image_options']['image_fonts'] = $bracket->options['image_fonts'];
      $bracket->options['image_options']['bg_color'] = $bracket->options['bg_color'];
      $bracket->options['image_options']['fg_color'] = $bracket->options['fg_color'];
      $bracket->options['image_options']['bar_bg_color'] = $bracket->options['bar_bg_color'];
      $bracket->options['image_options']['bar_fg_color'] = $bracket->options['bar_fg_color'];
      $bracket->options['image_options']['show_bracket_bar'] = $bracket->options['show_bracket_bar'];
      $bracket->options['image_options']['pdf_font'] = $bracket->options['pdf_font'];
      unset($bracket->options['image_fonts']);
      unset($bracket->options['bg_color']);
      unset($bracket->options['fg_color']);
      unset($bracket->options['bar_bg_color']);
      unset($bracket->options['bar_fg_color']);
      unset($bracket->options['show_bracket_bar']);
      unset($bracket->options['pdf_font']);
    }

    // load competitors
    $rs = db_query("SELECT * FROM {bracket_comp} WHERE nid = %d ORDER BY id", $node->nid);
    while ($row = db_fetch_object($rs)) {
      $c = new Bracket_Competitor();
      $c->name = $row->name;
      $c->seedin = $row->seedin;
      $bracket->comp[$row->id] = $c;
    }

    // load rounds
    $rs = db_query("SELECT * FROM {bracket_round} WHERE nid = %d ORDER BY id", $node->nid);
    while ($row = db_fetch_object($rs)) {

      // add round
      $r = new Bracket_Round();
      $r->id = $row->id;
      $r->name = $row->round;
      $r->loser = $row->loser;
      $r->first = $row->first;
      $r->comment = $row->comment;
      $bracket->round[$row->id] = $r;

      // load matches for this round
      $rs2 = db_query("SELECT m.*, r.loser
                       FROM {bracket_match} m
                       JOIN {bracket_round} r on r.id = m.roundid
                       WHERE m.nid = %d AND m.roundid = %d
                       ORDER BY m.seq", $node->nid, $row->id);
      while ($row2 = db_fetch_object($rs2)) {

        // add the match
        $m = new Bracket_Match();
        $m->id = $row2->id;
        $m->compid[1] = $row2->compid1;
        if ($m->compid[1] > 0) {
          $m->cname[1] = $bracket->comp[$m->compid[1]]->name;
        }
        $m->score[1] = $row2->score1;
        $m->home[1] = $row2->home1;
        $m->win[1] = $row2->win1;
        $m->comp_comment[1] = $row2->comp1_comment;
        $m->compid[2] = $row2->compid2;
        if ($m->compid[2] > 0)
          $m->cname[2] = $bracket->comp[$m->compid[2]]->name;
        $m->score[2] = $row2->score2;
        $m->home[2] = $row2->home2;
        $m->win[2] = $row2->win2;
        $m->comp_comment[2] = $row2->comp2_comment;
        $m->roundid = $row2->roundid;
        $m->comment[1] = $row2->match_comment1;
        $m->comment[2] = $row2->match_comment2;
        $m->winner_match = $row2->winner_match;
        $m->winner_comp = $row2->winner_comp;
        $m->loser_match = $row2->loser_match;
        $m->loser_comp = $row2->loser_comp;
        $m->winner_result = $row2->winner_result;
        $m->loser_result = $row2->loser_result;
        $m->win_use_result = $row2->win_use_result;

        $bracket->round[$r->id]->match[$row2->seq] = $m;
      }
    }

    // load results
    $rs = db_query("SELECT * FROM {bracket_result} WHERE nid = %d ORDER BY id", $node->nid);
    while ($row = db_fetch_object($rs)) {
      $s = new Bracket_Result();
      $s->compid = $row->compid;
      if ($s->compid > 0) {
        $s->cname = $bracket->comp[$s->compid]->name;
      }
      $s->comment = $row->comment;
      $s->seedout = $row->seedout;
      $bracket->result[$row->id] = $s;
    }
  }

  // load the design if set
  if ($bracket->design != '') {
    bracket_design_load($bracket->design);
  }

  // return the bracket
  return $bracket;
}

/**
 * insert a new bracket node to the db
 *
 * @param $node
 *   the node containing the bracket
 */
function bracket_db_insert($node) {

  bracket_db_update_tree($node);

  db_query("INSERT INTO {bracket} (nid, subtitle, comments, sport, division, season, brgroup, footer, design,
                                   logopath, sponsorlogopath, options)
            VALUES (%d, '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s')",
            $node->nid, $node->subtitle, $node->comments, $node->sport, $node->division, $node->season,
            $node->brgroup, $node->footer, $node->design, $node->logopath, $node->sponsorlogopath, serialize($node->options));
}

/**
 * update a bracket node to the db
 *
 * @param $node
 *   the node containing the bracket
 */
function bracket_db_update($node) {

  bracket_db_update_tree($node);

  db_query("UPDATE {bracket}
            SET subtitle = '%s', comments = '%s', sport = '%s', division = '%s', season = '%s', brgroup = '%s',
                footer = '%s', logopath ='%s', sponsorlogopath = '%s', options = '%s'
            WHERE nid = %d",
           $node->subtitle, $node->comments, $node->sport, $node->division, $node->season, $node->brgroup,
           $node->footer, $node->logopath, $node->sponsorlogopath, serialize($node->options), $node->nid);
}

/**
 * update the db bracket tree from the node
 *
 * @param $node
 *   the node containing the bracket
 */
function bracket_db_update_tree($node) {

  // clear the bracket tree
  bracket_db_delete_tree($node);

  // insert competitors
  for ($i=1; $i<=count($node->comp); $i++) {
    $c = $node->comp[$i];
    db_query("INSERT INTO {bracket_comp} (nid, id, name, seedin)
              VALUES (%d, %d, '%s', '%s')",
              $node->nid, $i, $c->name, $c->seedin);
  }

  // insert rounds
  for ($i=1; $i<=count($node->round); $i++) {
    $r = $node->round[$i];
    db_query("INSERT INTO {bracket_round} (nid, id, round, loser, first, comment)
              VALUES (%d, %d, '%s', %d, %d, '%s')",
              $node->nid, $i, $r->name, $r->loser, $r->first, $r->comment);
    // insert matches for this round
    for ($j=1; $j<=count($r->match); $j++) {
      $m = $r->match[$j];
      db_query("INSERT INTO {bracket_match} (nid, id, roundid, seq, compid1, score1, home1, win1, comp1_comment,
                                             compid2, score2, home2, win2, comp2_comment,
                                             match_comment1, match_comment2, winner_match, winner_comp,
                                             loser_match, loser_comp, winner_result, loser_result, win_use_result)
                VALUES (%d, %d, %d, %d, %d, '%s', %d, %d, '%s', %d, '%s', %d, %d, '%s', '%s', '%s', %d, %d, %d, %d, %d, %d, %d)",
                $node->nid, $m->id, $i, $j, $m->compid[1], $m->score[1], $m->home[1], $m->win[1], $m->comp_comment[1],
                $m->compid[2], $m->score[2], $m->home[2], $m->win[2], $m->comp_comment[2],
                $m->comment[1], $m->comment[2], $m->winner_match, $m->winner_comp, $m->loser_match, $m->loser_comp,
                $m->winner_result, $m->loser_result, $m->win_use_result);
    }
  }
  // insert results
  for ($i=1; $i<=count($node->result); $i++) {
    $s = $node->result[$i];
    db_query("INSERT INTO {bracket_result} (nid, id, compid, comment, seedout)
              VALUES (%d, %d, %d, '%s', '%s')",
              $node->nid, $i, $s->compid, $s->comment, $s->seedout);
  }
}

/**
 * delete a bracket node from the db
 *
 * @param $node
 *   the node containing the bracket
 */
function bracket_db_delete($node) {

  bracket_db_delete_tree($node);

  db_query("DELETE FROM {bracket} WHERE nid = %d", $node->nid);
}

/**
 * delete the db bracket tree
 *
 * @param $node
 *   the node containing the bracket
 */
function bracket_db_delete_tree($node) {

  db_query("DELETE FROM {bracket_comp} WHERE nid = %d", $node->nid);
  db_query("DELETE FROM {bracket_match} WHERE nid = %d", $node->nid);
  db_query("DELETE FROM {bracket_round} WHERE nid = %d", $node->nid);
  db_query("DELETE FROM {bracket_result} WHERE nid = %d", $node->nid);
}
