<?php
/**
 * @file
 * Returns the HTML for the footer region.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728140
 */
?>
<?php if ($content): ?>
  <footer id="footer" class="<?php print $classes; ?>" style="padding:12px;">
  <a href="http://www.mirecc.va.gov/visn19" target="_blank"><img src="/sites/all/themes/zen_rsvp/images/mirecc-logo.png" style="float:left; max-width:134px; margin-right:6%;margin-bottom:16px;" alt="Rocky Mountain MIRECC (Mental Illness Research, Education and Clinical Center)" /></a>
  
   <a href="http://www.va.gov" target="_blank"><img src="/sites/all/themes/zen_rsvp/images/VA_Seal_Logo.png" style="float:left; max-width:250px; margin-right:6%;margin-bottom:16px;" alt="Veteran's Affairs Seal | U.S Department of Veterans Affiars" /></a>
   
    <a href="http://wiche.edu" target="_blank"><img src="/sites/all/themes/zen_rsvp/images/wiche-logo.png" style="float:left;width:100%; max-width:185px; margin-right:5%;margin-top:10px;margin-bottom:16px;" alt="Western Interstate Commission for Higher Education" /></a>
    

    <div style="float:right;"><?php print $content; ?></div>
    <div style="clear:both;></div>
  </footer>
<?php endif; ?>
