<?php
// $Id:

/**
 * @file
 * Template for bracket match
 *
 * Available variables:
 *  $node: the node object for the bracket to be rendered.
 *  $round_index: the round index
 *  $match_index: the match index
 *  $orientation: the orientation of the match in the bracket - 'left' or 'right'
 */
?>
<div id="round-<?php print $round_index ?>-match-<?php print $match_index ?>" class="bracket-match">
  <div class="bracket-match-competitor-block">
    <div class="bracket-match-competitor bracket-match-competitor-<?php print $orientation ?>"><?php print $node->round[$round_index]->match[$match_index]->cname[1] ? filter_xss_admin($node->round[$round_index]->match[$match_index]->cname[1]) : '&nbsp;' ?></div>
    <div class="bracket-match-score bracket-match-score-<?php print $orientation ?>"><?php print filter_xss_admin($node->round[$round_index]->match[$match_index]->score[1]) ?></div>
  </div>
  <div class="round-<?php print $round_index ?>-match bracket-match-block bracket-match-block-<?php print $orientation ?>">
    <div class="bracket-match-competitor-comment-block">
      <div class="bracket-match-competitor-comment bracket-match-competitor-comment-<?php print $orientation ?>"><?php print filter_xss_admin($node->round[$round_index]->match[$match_index]->comp_comment[1]) ?></div>                
      <div class="bracket-match-home bracket-match-home-<?php print $orientation ?>"><?php if ($node->round[$round_index]->match[$match_index]->home[1]) print 'H' ?></div>
    </div>
    <div class="round-<?php print $round_index ?>-match-comment-block bracket-match-comment-block">
      <div class="bracket-match-comment bracket-match-comment"><?php print filter_xss_admin($node->round[$round_index]->match[$match_index]->comment[1]) ?></div>
      <div class="bracket-match-comment bracket-match-comment"><?php print filter_xss_admin($node->round[$round_index]->match[$match_index]->comment[2]) ?></div>
    </div>
    <?php if ($node->options['show_match_id']) { ?>
    <div class="bracket-match-id bracket-match-id-<?php print $orientation ?>">#<?php print $node->round[$round_index]->match[$match_index]->id ?></div>
    <?php } ?>
    <div class="bracket-match-competitor-block bracket-match-bottom-competitor-block">
      <div class="bracket-match-competitor bracket-match-competitor-<?php print $orientation ?>"><?php print $node->round[$round_index]->match[$match_index]->cname[2] ? filter_xss_admin($node->round[$round_index]->match[$match_index]->cname[2]) : '&nbsp;' ?></div>
      <div class="bracket-match-score bracket-match-score-<?php print $orientation ?>"><?php print filter_xss_admin($node->round[$round_index]->match[$match_index]->score[2]) ?></div>
    </div>
  </div>
  <div class="bracket-match-competitor-comment-block">
    <div class="bracket-match-competitor-comment bracket-match-competitor-comment-<?php print $orientation ?>"><?php print filter_xss_admin($node->round[$round_index]->match[$match_index]->comp_comment[2]) ?></div>                
    <div class="bracket-match-home bracket-match-home-<?php print $orientation ?>"><?php if ($node->round[$round_index]->match[$match_index]->home[2]) print 'H' ?></div>
  </div>
</div>
