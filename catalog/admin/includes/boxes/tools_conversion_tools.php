<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2013 osCommerce

  Released under the GNU General Public License
*/

  foreach ( $cl_box_groups as &$group ) {
    if ( $group['heading'] == BOX_HEADING_TOOLS ) {
      $group['apps'][] = array('code' => 'conversion_tools.php',
                               'title' => MODULES_ADMIN_MENU_TOOLS_CONVERSION_TOOLS,
                               'link' => tep_href_link('conversion_tools.php'));

      break;
    }
  }
?>
