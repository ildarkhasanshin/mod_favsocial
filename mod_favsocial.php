<?php

/**
*   FavSocial
*
*   Responsive and customizable Joomla!3 module
*
*   @version        1.7.1
*   @link           http://extensions.favthemes.com/favsocial
*   @author         FavThemes - http://www.favthemes.com
*   @copyright      Copyright (C) 2012-2017 FavThemes.com. All Rights Reserved.
*   @license        Licensed under GNU/GPLv3, see http://www.gnu.org/licenses/gpl-3.0.html
*/

// no direct access

defined('_JEXEC') or die;

$module_align                           = $params->get('module_align');

for ($i=1;$i<11;$i++) {

${'show_icon'.$i}                       = $params->get('show_icon'.$i);
${'icon_name'.$i}                       = $params->get('icon_name'.$i);
${'icon_color'.$i}                      = $params->get('icon_color'.$i);
${'icon_bg_color'.$i}                   = $params->get('icon_bg_color'.$i);
${'icon_font_size'.$i}                  = $params->get('icon_font_size'.$i);
${'icon_link'.$i}                       = $params->get('icon_link'.$i);
${'icon_link_target'.$i}                = $params->get('icon_link_target'.$i);
${'icon_padding'.$i}                    = $params->get('icon_padding'.$i);
${'icon_border_radius'.$i}              = $params->get('icon_border_radius'.$i);

}

$custom_id = rand(10000,20000);

// Load Bootstrap

// check if favth-bootstrap already loaded
$jhead = JFactory::getDocument();
$lscripts = $jhead->_scripts;
$load_favthb = true;
foreach ($lscripts as $k => $v) { if (strpos($k, 'favth-bootstrap') !== false) { $load_favthb = false; break; } }
// end check if favth-bootstrap already loaded

if ($load_favthb) {
  JHTML::stylesheet('modules/mod_favsocial/theme/bootstrap/favth-bootstrap.css');
  JHTML::script('modules/mod_favsocial/theme/bootstrap/favth-bootstrap.js');
}

// END Load Bootstrap

// Module CSS
JHTML::stylesheet('modules/mod_favsocial/theme/css/favsocial.min.css');
JHTML::stylesheet('//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');

?>

<div id="favsocial-<?php echo $custom_id; ?>"
    class="favth-clearfix"
    style="width: 100%;">

  <ul id="favsocial-list"
      class="<?php echo $module_align; ?>">

    <?php

      for ($i=1;$i<11;$i++) {
      if ((${'show_icon'.$i}) !=0) { ?>

      <li id="favsocial-icon<?php echo $i; ?>">
        <a href="<?php echo ${'icon_link'.$i}; ?>" target="_<?php echo ${'icon_link_target'.$i}; ?>" rel="nofollow"
          style="background-color: #<?php echo ${'icon_bg_color'.$i}; ?>;
                padding: <?php echo ${'icon_padding'.$i}; ?>;
                -webkit-border-radius: <?php echo ${'icon_border_radius'.$i}; ?>;
                -moz-border-radius: <?php echo ${'icon_border_radius'.$i}; ?>;
                border-radius: <?php echo ${'icon_border_radius'.$i}; ?>">

          <span class="favsocial">
            <i class="fa <?php echo ${'icon_name'.$i}; ?>"
              style="color: #<?php echo ${'icon_color'.$i}; ?>;
                    font-size: <?php echo ${'icon_font_size'.$i}; ?>;">
            </i>
          </span>

        </a>
      </li>

    <?php } } ?>

  </ul>

</div>
