<?php
// $Id:

/**
 * @file
 * Template for se32po2lr bracket design
 *
 * Available variables:
 * - $node: The node object for the bracket to be rendered.
 */
drupal_add_css(drupal_get_path('module', 'bracket') . '/designs/se32po2lr/bracket-se32po2lr.css', 'theme', 'all', FALSE);
?>

<div class="bracket-block">
  <?php if ($node->subtitle) { ?>
  <div class="bracket-subtitle"><?php print filter_xss_admin($node->subtitle) ?></div>
  <?php } ?>
  <?php if ($node->comments) { ?>
  <div class="bracket-comments"><?php print nl2br(filter_xss_admin($node->comments)) ?></div>
  <?php } ?>
  <div id="round-1-left" class="bracket-round">
    <div class="bracket-round-comment"><?php print filter_xss_admin($node->round[1]->comment) ?></div>
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
    <div class="bracket-footer"><?php print nl2br(filter_xss_admin($node->footer)) ?></div>
  </div>
  <div id="round-2-left" class="bracket-round">
    <div class="bracket-round-comment"><?php print filter_xss_admin($node->round[2]->comment) ?></div>
    <div id="round-2-spacer"></div>
    <?php print theme('bracket_match', $node, 2, 1, 'left') ?>
    <div class="bracket-round-2-match-spacer"></div>
    <?php print theme('bracket_match', $node, 2, 2, 'left') ?>
    <div class="bracket-round-2-match-spacer"></div>
    <?php print theme('bracket_match', $node, 2, 3, 'left') ?>
    <div class="bracket-round-2-match-spacer"></div>
    <?php print theme('bracket_match', $node, 2, 4, 'left') ?>
  </div>
  <div id="results-left" class="bracket-results">
    <div id="results-spacer"></div>
    <?php print theme('bracket_result', $node, 1, 'left') ?>
    <?php print theme('bracket_result', $node, 2, 'left') ?>
    <?php print theme('bracket_result', $node, 3, 'left') ?>
    <?php print theme('bracket_result', $node, 4, 'left') ?>
  </div>
  <div id="round-spacer" class="bracket-round">&nbsp;</div>
  <div id="results-right" class="bracket-results">
    <div id="results-spacer"></div>
    <?php print theme('bracket_result', $node, 5, 'right') ?>
    <?php print theme('bracket_result', $node, 6, 'right') ?>
    <?php print theme('bracket_result', $node, 7, 'right') ?>
    <?php print theme('bracket_result', $node, 8, 'right') ?>
  </div>
  <div id="round-2-right" class="bracket-round">
    <div class="bracket-round-comment"><?php print filter_xss_admin($node->round[2]->comment) ?></div>
    <div id="round-2-spacer"></div>
    <?php print theme('bracket_match', $node, 2, 5, 'right') ?>
    <div class="bracket-round-2-match-spacer"></div>
    <?php print theme('bracket_match', $node, 2, 6, 'right') ?>
    <div class="bracket-round-2-match-spacer"></div>
    <?php print theme('bracket_match', $node, 2, 7, 'right') ?>
    <div class="bracket-round-2-match-spacer"></div>
    <?php print theme('bracket_match', $node, 2, 8, 'right') ?>
  </div>
  <div id="round-1-right" class="bracket-round">
    <div class="bracket-round-comment"><?php print filter_xss_admin($node->round[1]->comment) ?></div>
    <div id="round-1-spacer"></div>
    <?php print theme('bracket_match', $node, 1, 9, 'right') ?>
    <div class="bracket-round-1-match-spacer"></div>
    <?php print theme('bracket_match', $node, 1, 10, 'right') ?>
    <div class="bracket-round-1-match-spacer"></div>
    <?php print theme('bracket_match', $node, 1, 11, 'right') ?>
    <div class="bracket-round-1-match-spacer"></div>
    <?php print theme('bracket_match', $node, 1, 12, 'right') ?>
    <div class="bracket-round-1-match-spacer"></div>
    <?php print theme('bracket_match', $node, 1, 13, 'right') ?>
    <div class="bracket-round-1-match-spacer"></div>
    <?php print theme('bracket_match', $node, 1, 14, 'right') ?>
    <div class="bracket-round-1-match-spacer"></div>
    <?php print theme('bracket_match', $node, 1, 15, 'right') ?>
    <div class="bracket-round-1-match-spacer"></div>
    <?php print theme('bracket_match', $node, 1, 16, 'right') ?>
  </div>
  <?php print theme('bracket_images', $node) ?>
</div>


