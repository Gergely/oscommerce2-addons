<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2010 osCommerce

  Released under the GNU General Public License
*/

  class c_xhtml_validations {
    var $code = 'c_xhtml_validations';
    var $title;
    var $description;
    var $instructions;
    var $sort_order;
    var $enabled = false;
    var $file = 'character_convert/templates/xhtml_validations_data.csv';

    function c_xhtml_validations() {
      $this->title = MODULE_ADMIN_CHARACTER_CONVERT_XHTML_VALIDATIONS_TITLE;
      $this->description = MODULE_ADMIN_CHARACTER_CONVERT_XHTML_VALIDATIONS_DESCRIPTION;
      $this->instructions = MODULE_ADMIN_CHARACTER_CONVERT_XHTML_VALIDATIONS_INSTRUCTIONS;

      if ( defined('MODULE_ADMIN_CHARACTER_CONVERT_XHTML_VALIDATIONS_STATUS') ) {
        $this->sort_order = MODULE_ADMIN_CHARACTER_CONVERT_XHTML_VALIDATIONS_SORT_ORDER;
        $this->enabled = (MODULE_ADMIN_CHARACTER_CONVERT_XHTML_VALIDATIONS_STATUS == 'True');
      }
    }

    function getOutput() {

      $input = file(DIR_WS_MODULES . $this->file, FILE_IGNORE_NEW_LINES);

      $output = array();

      if ( file_exists(DIR_WS_MODULES . $this->file) ) {
        foreach ( $input as $key => $value ) {
          $value_array = explode("=>", $value);
          if ( tep_not_null($value_array[0]) ) {
            $output[$value_array[0]] = $value_array[1];
          }
        }
      }

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
      return defined('MODULE_ADMIN_CHARACTER_CONVERT_XHTML_VALIDATIONS_STATUS');
    }

    function install() {
      tep_db_query("insert into " . TABLE_CONFIGURATION . " (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, set_function, date_added) values ('Enable XHTML Validations Module', 'MODULE_ADMIN_CHARACTER_CONVERT_XHTML_VALIDATIONS_STATUS', 'True', 'Do you want to enable XHTML validations module?', '6', 'tep_cfg_select_option(array(\'True\', \'False\'), ', now())");
      tep_db_query("insert into " . TABLE_CONFIGURATION . " (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, date_added) values ('Sort Order', 'MODULE_ADMIN_CHARACTER_CONVERT_XHTML_VALIDATIONS_SORT_ORDER', '0', 'Sort order of display. Lowest is displayed first.', '6', now())");
    }

    function remove() {
      tep_db_query("delete from " . TABLE_CONFIGURATION . " where configuration_key in ('" . implode("', '", $this->keys()) . "')");
    }

    function keys() {
      return array('MODULE_ADMIN_CHARACTER_CONVERT_XHTML_VALIDATIONS_STATUS', 'MODULE_ADMIN_CHARACTER_CONVERT_XHTML_VALIDATIONS_SORT_ORDER');
    }
  }
?>
