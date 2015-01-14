<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2013 osCommerce

  Released under the GNU General Public License
*/

define('WARNING_SESSION_DIRECTORY_NON_EXISTENT', 'Figyelem: A folyamatok könyvtára nem létezik: ' . tep_session_save_path() . ' A folyamatok nem hajtódnak végre míg létre nem hozod a könyvtárat.');
define('WARNING_SESSION_DIRECTORY_NOT_WRITEABLE', 'Figyelem: A folyamatok könyvtár írható: ' . tep_session_save_path() . '. A folyamatok nem hajtódnak végre amíg be nem állítod a helyes hozzáférési jogokat.');
?>
