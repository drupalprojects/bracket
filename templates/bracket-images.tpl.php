<?php
// $Id:

/**
 * @file
 * Template for bracket images
 *
 * Available variables:
 *  $node: the node object for the bracket to be rendered.
 */
?>
 
<?php if ($node->logopath) { ?>
  <div id="logo-image" class="bracket-logo-image"><img src="<?php print bracket_logo_url($node->logopath) ?>" /></div>
<?php } ?>
<?php if ($node->sponsorlogopath) { ?>
  <div id="sponsorlogo-image" class="bracket-sponsorlogo-image"><img src="<?php print bracket_logo_url($node->sponsorlogopath) ?>" /></div>
<?php } ?>
