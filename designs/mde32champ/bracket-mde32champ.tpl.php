<?php
// $Id:

/**
 * @file
 * Template for mde32champ bracket design
 *
 * Available variables:
 * - $node: The node object for the bracket to be rendered.
 */
drupal_add_css(drupal_get_path('module', 'bracket') . '/designs/mde32champ/bracket-mde32champ.css', 'theme', 'all', FALSE);
?>

<div class="bracket-block">
  <?php if ($node->subtitle) { ?>
  <div class="bracket-subtitle"><?php print filter_xss_admin($node->subtitle) ?></div>
  <?php } ?>
  <?php if ($node->comments) { ?>
  <div class="bracket-comments"><?php print nl2br(filter_xss_admin($node->comments)) ?></div>
  <?php } ?>
  <div id="round-1" class="bracket-round">
    <div class="bracket-round-comment"><?php print $node->round[1]->comment ? filter_xss_admin($node->round[1]->comment) : '&nbsp;' ?></div>
    <div id="round-1-spacer"></div>
    <?php print theme('bracket_match', $node, 1, 1, 'left') ?>
    <div class="bracket-round-1-match-spacer"></div>
    <?php print theme('bracket_match', $node, 1, 2, 'left') ?>
    <div class="bracket-round-1-match-spacer"></div>
    <?php print theme('bracket_match', $node, 1, 3, 'left') ?>
    <div class="bracket-round-1-match-spacer"></div>
    <?php print theme('bracket_match', $node, 1, 4, 'left') ?>
    <div class="bracket-round-1-match-spacer"></div>
    <?php print theme('bracket_match', $node, 1, 5, 'left') ?>
    <div class="bracket-round-1-match-spacer"></div>
    <?php print theme('bracket_match', $node, 1, 6, 'left') ?>
    <div class="bracket-round-1-match-spacer"></div>
    <?php print theme('bracket_match', $node, 1, 7, 'left') ?>
    <div class="bracket-round-1-match-spacer"></div>
    <?php print theme('bracket_match', $node, 1, 8, 'left') ?>
    <div class="bracket-round-1-match-spacer"></div>
    <?php print theme('bracket_match', $node, 1, 9, 'left') ?>
    <div class="bracket-round-1-match-spacer"></div>
    <?php print theme('bracket_match', $node, 1, 10, 'left') ?>
    <div class="bracket-round-1-match-spacer"></div>
    <?php print theme('bracket_match', $node, 1, 11, 'left') ?>
    <div class="bracket-round-1-match-spacer"></div>
    <?php print theme('bracket_match', $node, 1, 12, 'left') ?>
    <div class="bracket-round-1-match-spacer"></div>
    <?php print theme('bracket_match', $node, 1, 13, 'left') ?>
    <div class="bracket-round-1-match-spacer"></div>
    <?php print theme('bracket_match', $node, 1, 14, 'left') ?>
    <div class="bracket-round-1-match-spacer"></div>
    <?php print theme('bracket_match', $node, 1, 15, 'left') ?>
    <div class="bracket-round-1-match-spacer"></div>
    <?php print theme('bracket_match', $node, 1, 16, 'left') ?>
    <div id="round-1-loser-round-spacer"></div>
    <?php print theme('bracket_match', $node, 6, 1, 'left') ?>
    <div class="bracket-round-6-match-spacer"></div>
    <?php print theme('bracket_match', $node, 6, 2, 'left') ?>
    <div class="bracket-round-6-match-spacer"></div>
    <?php print theme('bracket_match', $node, 6, 3, 'left') ?>
    <div class="bracket-round-6-match-spacer"></div>
    <?php print theme('bracket_match', $node, 6, 4, 'left') ?>
    <div class="bracket-round-6-match-spacer"></div>
    <?php print theme('bracket_match', $node, 6, 5, 'left') ?>
    <div class="bracket-round-6-match-spacer"></div>
    <?php print theme('bracket_match', $node, 6, 6, 'left') ?>
    <div class="bracket-round-6-match-spacer"></div>
    <?php print theme('bracket_match', $node, 6, 7, 'left') ?>
    <div class="bracket-round-6-match-spacer"></div>
    <?php print theme('bracket_match', $node, 6, 8, 'left') ?>
    <div class="bracket-footer"><?php print nl2br(filter_xss_admin($node->footer)) ?></div>
  </div>
  <div id="round-2" class="bracket-round">
    <div class="bracket-round-comment"><?php print $node->round[2]->comment ? filter_xss_admin($node->round[2]->comment) : '&nbsp;' ?></div>
    <div id="round-2-spacer"></div>
    <?php print theme('bracket_match', $node, 2, 1, 'left') ?>
    <div class="bracket-round-2-match-spacer"></div>
    <?php print theme('bracket_match', $node, 2, 2, 'left') ?>
    <div class="bracket-round-2-match-spacer"></div>
    <?php print theme('bracket_match', $node, 2, 3, 'left') ?>
    <div class="bracket-round-2-match-spacer"></div>
    <?php print theme('bracket_match', $node, 2, 4, 'left') ?>
    <div class="bracket-round-2-match-spacer"></div>
    <?php print theme('bracket_match', $node, 2, 5, 'left') ?>
    <div class="bracket-round-2-match-spacer"></div>
    <?php print theme('bracket_match', $node, 2, 6, 'left') ?>
    <div class="bracket-round-2-match-spacer"></div>
    <?php print theme('bracket_match', $node, 2, 7, 'left') ?>
    <div class="bracket-round-2-match-spacer"></div>
    <?php print theme('bracket_match', $node, 2, 8, 'left') ?>
    <div id="round-2-loser-round-spacer"></div>
    <?php print theme('bracket_match', $node, 7, 1, 'left') ?>
    <div class="bracket-round-7-match-spacer"></div>
    <?php print theme('bracket_match', $node, 7, 2, 'left') ?>
    <div class="bracket-round-7-match-spacer"></div>
    <?php print theme('bracket_match', $node, 7, 3, 'left') ?>
    <div class="bracket-round-7-match-spacer"></div>
    <?php print theme('bracket_match', $node, 7, 4, 'left') ?>
    <div class="bracket-round-7-match-spacer"></div>
    <?php print theme('bracket_match', $node, 7, 5, 'left') ?>
    <div class="bracket-round-7-match-spacer"></div>
    <?php print theme('bracket_match', $node, 7, 6, 'left') ?>
    <div class="bracket-round-7-match-spacer"></div>
    <?php print theme('bracket_match', $node, 7, 7, 'left') ?>
    <div class="bracket-round-7-match-spacer"></div>
    <?php print theme('bracket_match', $node, 7, 8, 'left') ?>
  </div>
  <div id="round-3" class="bracket-round">
    <div class="bracket-round-comment"><?php print $node->round[3]->comment ? filter_xss_admin($node->round[3]->comment) : '&nbsp;' ?></div>
    <div id="round-3-spacer"></div>
    <?php print theme('bracket_match', $node, 3, 1, 'left') ?>
    <div class="bracket-round-3-match-spacer"></div>
    <?php print theme('bracket_match', $node, 3, 2, 'left') ?>
    <div class="bracket-round-3-match-spacer"></div>
    <?php print theme('bracket_match', $node, 3, 3, 'left') ?>
    <div class="bracket-round-3-match-spacer"></div>
    <?php print theme('bracket_match', $node, 3, 4, 'left') ?>
    <div id="round-3-loser-round-spacer"></div>
    <?php print theme('bracket_match', $node, 8, 1, 'left') ?>
    <div class="bracket-round-8-match-spacer"></div>
    <?php print theme('bracket_match', $node, 8, 2, 'left') ?>
    <div class="bracket-round-8-match-spacer"></div>
    <?php print theme('bracket_match', $node, 8, 3, 'left') ?>
    <div class="bracket-round-8-match-spacer"></div>
    <?php print theme('bracket_match', $node, 8, 4, 'left') ?>
  </div>
  <div id="round-4" class="bracket-round">
    <div class="bracket-round-comment"><?php print $node->round[4]->comment ? filter_xss_admin($node->round[4]->comment) : '&nbsp;' ?></div>
    <div id="round-4-spacer"></div>
    <?php print theme('bracket_match', $node, 4, 1, 'left') ?>
    <div class="bracket-round-4-match-spacer"></div>
    <?php print theme('bracket_match', $node, 4, 2, 'left') ?>
    <div id="round-4-loser-round-spacer"></div>
    <?php print theme('bracket_match', $node, 9, 1, 'left') ?>
    <div class="bracket-round-9-match-spacer"></div>
    <?php print theme('bracket_match', $node, 9, 2, 'left') ?>
    <div class="bracket-round-9-match-spacer"></div>
    <?php print theme('bracket_match', $node, 9, 3, 'left') ?>
    <div class="bracket-round-9-match-spacer"></div>
    <?php print theme('bracket_match', $node, 9, 4, 'left') ?>
  </div>
  <div id="round-5" class="bracket-round">
    <div class="bracket-round-comment"><?php print $node->round[5]->comment ? filter_xss_admin($node->round[5]->comment) : '&nbsp;' ?></div>
    <div id="round-5-spacer"></div>
    <?php print theme('bracket_match', $node, 5, 1, 'left') ?>
    <div id="round-5-loser-round-spacer"></div>
    <?php print theme('bracket_match', $node, 10, 1, 'left') ?>
    <div class="bracket-round-10-match-spacer"></div>
    <?php print theme('bracket_match', $node, 10, 2, 'left') ?>
  </div>
  <div id="round-11" class="bracket-round">
    <div id="results-spacer"></div>
    <?php print theme('bracket_result', $node, 1, 'left') ?>
    <div class="bracket-result-spacer"></div>
    <?php print theme('bracket_result', $node, 2, 'left') ?>
    <div id="round-11-spacer"></div>
    <?php print theme('bracket_match', $node, 11, 1, 'left') ?>
    <div class="bracket-round-11-match-spacer"></div>
    <?php print theme('bracket_match', $node, 11, 2, 'left') ?>
  </div>
  <div id="round-12" class="bracket-round">
    <div id="round-12-spacer"></div>
    <?php print theme('bracket_match', $node, 12, 1, 'left') ?>
  </div>
  <div id="loser-results" class="bracket-results bracket-results-left">
    <div id="loser-results-spacer"></div>
    <?php print theme('bracket_result', $node, 3, 'left') ?>
    <div class="bracket-result-spacer"></div>
    <?php print theme('bracket_result', $node, 4, 'left') ?>
  </div>
  <?php print theme('bracket_images', $node) ?>
</div>

