<?php
// $Id:

/**
 * @file
 * Template for a center bracket match with left and right branches
 *
 * Available variables:
 *  $node: the node object for the bracket to be rendered.
 *  $round_index: the round index
 *  $match_index: the match index
 */
?>
<div id="round-<?php print $round_index ?>-match-<?php print $match_index ?>-left" class="bracket-result-block bracket-result-block-left">
  <div id="round-<?php print $round_index ?>-match-<?php print $match_index ?>-competitor-1-block" class="bracket-result bracket-result-left">
    <div id="round-<?php print $round_index ?>-match-<?php print $match_index ?>-competitor-1" class="bracket-match-competitor bracket-match-competitor-left"><?php print $node->round[$round_index]->match[$match_index]->cname[1] ? filter_xss_admin($node->round[$round_index]->match[$match_index]->cname[1]) : '&nbsp;' ?></div>
    <div id="round-<?php print $round_index ?>-match-<?php print $match_index ?>-competitor-1-score" class="bracket-match-score bracket-match-score-left"><?php print filter_xss_admin($node->round[$round_index]->match[$match_index]->score[1]) ?></div>
  </div>
  <div id="round-<?php print $round_index ?>-match-<?php print $match_index ?>-branch-1" class="bracket-final-branch">
    <div id="round-<?php print $round_index ?>-match-<?php print $match_index ?>-competitor-1-comment" class="bracket-match-competitor-comment bracket-match-competitor-comment-left"><?php print $node->round[$round_index]->match[$match_index]->comp_comment[1] ? filter_xss_admin($node->round[$round_index]->match[$match_index]->comp_comment[1]) : '&nbsp;' ?></div>
    <div id="round-<?php print $round_index ?>-match-<?php print $match_index ?>-competitor-1-home" class="bracket-match-home bracket-match-home-left"><?php print $node->round[$round_index]->match[$match_index]->home[1] ? 'H' : '&nbsp;' ?></div>
  </div>
</div>
<div id="round-<?php print $round_index ?>-match-<?php print $match_index ?>-comment-block" class="bracket-match-comment-block">
  <div id="round-<?php print $round_index ?>-match-<?php print $match_index ?>-comment-1" class="bracket-match-comment"><?php print filter_xss_admin($node->round[$round_index]->match[$match_index]->comment[1]) ?></div>
  <div id="round-<?php print $round_index ?>-match-<?php print $match_index ?>-comment-2" class="bracket-match-comment"><?php print filter_xss_admin($node->round[$round_index]->match[$match_index]->comment[2]) ?></div>
</div>
<?php if ($node->options['show_match_id']) { ?>
<div id="round-<?php print $round_index ?>-match-<?php print $match_index ?>-id" class="bracket-match-id">#<?php print $node->round[$round_index]->match[$match_index]->id ?></div>
<?php } ?>
<div id="round-<?php print $round_index ?>-match-<?php print $match_index ?>-right" class="bracket-result-block bracket-result-block-right">
  <div id="round-<?php print $round_index ?>-match-<?php print $match_index ?>-competitor-2-block" class="bracket-result bracket-result-right">
    <div id="round-<?php print $round_index ?>-match-<?php print $match_index ?>-competitor-2" class="bracket-match-competitor bracket-match-competitor-right"><?php print $node->round[$round_index]->match[$match_index]->cname[2] ? filter_xss_admin($node->round[$round_index]->match[$match_index]->cname[2]) : '&nbsp;' ?></div>
    <div id="round-<?php print $round_index ?>-match-<?php print $match_index ?>-competitor-2-score" class="bracket-match-score bracket-match-score-right"><?php print filter_xss_admin($node->round[$round_index]->match[$match_index]->score[2]) ?></div>
  </div>
  <div id="round-<?php print $round_index ?>-match-<?php print $match_index ?>-branch-2" class="bracket-final-branch">
    <div id="round-<?php print $round_index ?>-match-<?php print $match_index ?>-competitor-2-comment" class="bracket-match-competitor-comment bracket-match-competitor-comment-right"><?php print $node->round[$round_index]->match[$match_index]->comp_comment[2] ? filter_xss_admin($node->round[$round_index]->match[$match_index]->comp_comment[2]) : '&nbsp;' ?></div>
    <div id="round-<?php print $round_index ?>-match-<?php print $match_index ?>-competitor-2-home" class="bracket-match-home bracket-match-home-right"><?php print $node->round[$round_index]->match[$match_index]->home[2] ? 'H' : '&nbsp;' ?></div>
  </div>
</div>
