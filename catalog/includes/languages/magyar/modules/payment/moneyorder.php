<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2013 osCommerce

  Released under the GNU General Public License
*/

  define('MODULE_PAYMENT_MONEYORDER_TEXT_TITLE', 'Csekkes fizetés/előre utalás');
  define('MODULE_PAYMENT_MONEYORDER_TEXT_DESCRIPTION', 'Hajtson végre egy befizetést:&nbsp;' . (defined('MODULE_PAYMENT_MONEYORDER_PAYTO' ) ? MODULE_PAYMENT_MONEYORDER_PAYTO : '' ) . '<br /><br />Cél:<br />' . nl2br(STORE_NAME_ADDRESS) . '<br /><br />' . 'A megrendelés nem kerül teljesítésre a kifizetésig.');
  define('MODULE_PAYMENT_MONEYORDER_TEXT_EMAIL_FOOTER', "Hajtson végre egy befizetést: " . (defined('MODULE_PAYMENT_MONEYORDER_PAYTO' ) ? MODULE_PAYMENT_MONEYORDER_PAYTO : '' ) . "\n\nCél:\n" . STORE_NAME_ADDRESS . "\n\n" . 'A megrendelés nem kerül teljesítésre a kifizetésig.');
?>
