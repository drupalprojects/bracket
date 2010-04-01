<?php
// $Id$

/**
 * @file
 * This file contains the class definitions for the bracket module
 *
 * @author Jim Bullington <jimb@jrbcs.com>
 */

/**
 * Class to contain info attached to a bracket node
 */
class Bracket {

  var $subtitle;
  var $comments;
  var $sport;
  var $division;
  var $season;
  var $brgroup;
  var $footer;
  var $logopath;
  var $sponsorlogopath;
  var $design;
  var $comp;
  var $round;
  var $result;
  var $options;

  function Bracket() {

    $this->subtitle = '';       // bracket comments, etc
    $this->comments = '';
    $this->sport = '';
    $this->division = '';
    $this->season = '';
    $this->brgroup = '';
    $this->footer = '';
    $this->logopath = '';       // paths to logo image files
    $this->sponsorlogopath = '';
    $this->design = '';         // bracket design (module name)
    $this->comp = array();      // bracket competitors
    $this->round = array();     // bracket rounds
    $this->result = array();    // bracket results
    $this->options = array();   // bracket options
  }
}

/**
 * Class to contain competitor info
 */
class Bracket_Competitor {

  var $name;
  var $seedin;

  function Bracket_Competitor() {

    $this->name = '';           // competitor name
    $this->seedin = '';         // competitor seed
  }
}

/**
 * Class to contain round info
 */
class Bracket_Round {

  var $id;
  var $name;
  var $loser;
  var $comment;
  var $match;

  function Bracket_Round() {

      $this->id = 0;            // round id (index)
      $this->name = '';         // round name
      $this->loser = FALSE;     // round is a loser round if true
      $this->first = FALSE;     // round is a first found if true
      $this->comment = '';      // round comment
      $this->match = array();   // round matches
  }
}

/**
 * Class to contain match info
 */
class Bracket_Match {

  var $id;
  var $compid;
  var $cname;
  var $comp_comment;
  var $score;
  var $home;
  var $win;
  var $comment;
  var $winner_match;
  var $winner_comp;
  var $loser_match;
  var $loser_comp;
  var $winner_result;
  var $loser_result;
  var $win_use_result;

  function Bracket_Match() {

    $this->compid = array();
    $this->cname = array();
    $this->comp_comment = array();
    $this->score = array();
    $this->home = array();
    $this->win = array();
    $this->comment = array();

    $this->id = 0;              // match id
    $this->compid[1] = 0;       // competitor 1 id (index)
    $this->cname[1] = '';       // competitor 1 name
    $this->comp_comment[1] = '';// competitor 1 comment
    $this->score[1] = '';       // competitor 1 score
    $this->home[1] = FALSE;     // competitor 1 home indicator
    $this->win[1] = FALSE;      // competitor 1 win indicator
    $this->compid[2] = 0;       // competitor 2 ...
    $this->cname[2] = '';
    $this->comp_comment[2] = '';
    $this->score[2] = '';
    $this->home[2] = FALSE;
    $this->win[2] = FALSE;
    $this->comment[1] = '';     // match comments
    $this->comment[2] = '';
    $this->winner_match = 0;    // route winner to this match id
    $this->winner_comp = 0;     // and competitor (1 or 2)
    $this->loser_match = 0;     // route loser to this match id
    $this->loser_comp = 0;      // and competitor (1 or 2)
    $this->winner_result = 0;   // route winner to this result (place)
    $this->loser_result = 0;    // route loser to this result (place)
    $this->win_use_result = 0;  // a win by this competitor (1 or 2) places and completes the bracket, otherwise routing is used
  }
}

/**
 * Class to contain result info
 */
class Bracket_Result {

  var $compid;
  var $cname;
  var $comment;
  var $seedout;

  function Bracket_Result() {

    $this->compid = 0;          // competitor id (index)
    $this->cname = '';          // competitor name
    $this->comment = '';        // result comment
    $this->seedout = '';        // result seed
  }
}

