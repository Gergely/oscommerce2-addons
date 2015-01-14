<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2013 osCommerce

  Released under the GNU General Public License
*/

  class cfgm_character_convert {
    var $code = 'character_convert';
    var $directory;
    var $language_directory;
    var $key = 'MODULE_ADMIN_CHARACTER_CONVERT_INSTALLED';
    var $title;
    var $template_integration = false;

    function cfgm_character_convert() {
      $this->directory = DIR_FS_ADMIN . 'includes/modules/character_convert/';
      $this->language_directory = DIR_FS_ADMIN . 'includes/languages/';
      $this->title = MODULE_CFG_MODULE_CHARACTER_CONVERT_TITLE;
    }
  }
?>
