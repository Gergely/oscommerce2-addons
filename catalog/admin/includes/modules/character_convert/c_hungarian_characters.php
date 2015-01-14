<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2010 osCommerce

  Released under the GNU General Public License
*/

  class c_hungarian_characters {
    var $code = 'c_hungarian_characters';
    var $title;
    var $description;
    var $instructions;
    var $sort_order;
    var $enabled = false;

    function c_hungarian_characters() {
      $this->title = MODULE_ADMIN_CHARACTER_CONVERT_HUNGARIAN_CHARACTERS_TITLE;
      $this->description = MODULE_ADMIN_CHARACTER_CONVERT_HUNGARIAN_CHARACTERS_DESCRIPTION;
      $this->instructions = MODULE_ADMIN_CHARACTER_CONVERT_HUNGARIAN_CHARACTERS_INSTRUCTIONS;

      if ( defined('MODULE_ADMIN_CHARACTER_CONVERT_HUNGARIAN_CHARACTERS_STATUS') ) {
        $this->sort_order = MODULE_ADMIN_CHARACTER_CONVERT_HUNGARIAN_CHARACTERS_SORT_ORDER;
        $this->enabled = (MODULE_ADMIN_CHARACTER_CONVERT_HUNGARIAN_CHARACTERS_STATUS == 'True');
      }
    }

    function getOutput() {

      $output = array('õ' => 'ő', 'û' => 'ű', 'Õ' => 'Ő', 'Û' => 'Ű');

      return $output;
    }

    function getCode() {
      return $this->code;
    }

    function getTitle() {
      return $this->title;
    }

    function getInstructions() {
      return $this->instructions;
    }

    function isEnabled() {
      return $this->enabled;
    }

    function check() {
      return defined('MODULE_ADMIN_CHARACTER_CONVERT_HUNGARIAN_CHARACTERS_STATUS');
    }

    function install() {
      tep_db_query("insert into " . TABLE_CONFIGURATION . " (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, set_function, date_added) values ('Enable Security Checks Module', 'MODULE_ADMIN_CHARACTER_CONVERT_HUNGARIAN_CHARACTERS_STATUS', 'True', 'Do you want to enable hungarian conversions module?', '6', '1', 'tep_cfg_select_option(array(\'True\', \'False\'), ', now())");
      tep_db_query("insert into " . TABLE_CONFIGURATION . " (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, date_added) values ('Sort Order', 'MODULE_ADMIN_CHARACTER_CONVERT_HUNGARIAN_CHARACTERS_SORT_ORDER', '0', 'Sort order of display. Lowest is displayed first.', '6', '0', now())");
    }

    function remove() {
      tep_db_query("delete from " . TABLE_CONFIGURATION . " where configuration_key in ('" . implode("', '", $this->keys()) . "')");
    }

    function keys() {
      return array('MODULE_ADMIN_CHARACTER_CONVERT_HUNGARIAN_CHARACTERS_STATUS', 'MODULE_ADMIN_CHARACTER_CONVERT_HUNGARIAN_CHARACTERS_SORT_ORDER');
    }
  }
?>
