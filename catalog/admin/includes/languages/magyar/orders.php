<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2013 osCommerce

  Released under the GNU General Public License
*/

define('HEADING_TITLE', 'Megrendelések');
define('HEADING_TITLE_SEARCH', 'Megrendelő ID:');
define('HEADING_TITLE_STATUS', 'Állapot:');

define('TABLE_HEADING_COMMENTS', 'Üzenet a vásárlónak');
define('TABLE_HEADING_CUSTOMERS', 'Vásárlók');
define('TABLE_HEADING_ORDER_TOTAL', 'Összes megrendelt termék');
define('TABLE_HEADING_DATE_PURCHASED', 'Vásárlás dátuma');
define('TABLE_HEADING_STATUS', 'Státusz');
define('TABLE_HEADING_ACTION', 'Műveletek');
define('TABLE_HEADING_QUANTITY', 'Mennyiség.');
define('TABLE_HEADING_PRODUCTS_MODEL', 'Modell');
define('TABLE_HEADING_PRODUCTS', 'Termékek');
define('TABLE_HEADING_TAX', 'Adó');
define('TABLE_HEADING_TOTAL', 'Összes');
define('TABLE_HEADING_PRICE_EXCLUDING_TAX', 'Ár (nettó)');
define('TABLE_HEADING_PRICE_INCLUDING_TAX', 'Ár (bruttó)');
define('TABLE_HEADING_TOTAL_EXCLUDING_TAX', 'Összes (nettó)');
define('TABLE_HEADING_TOTAL_INCLUDING_TAX', 'Összes (bruttó)');

define('TABLE_HEADING_CUSTOMER_NOTIFIED', 'Vásárlói adatok');
define('TABLE_HEADING_DATE_ADDED', 'Belépés dátuma');

define('ENTRY_CUSTOMER', 'Vásárló:');
define('ENTRY_SOLD_TO', 'Eladva:');
define('ENTRY_DELIVERY_TO', 'Kézbesítés:');
define('ENTRY_SHIP_TO', 'SZÁLLÍTÁS:');
define('ENTRY_SHIPPING_ADDRESS', 'Szállítási címe:');
define('ENTRY_BILLING_ADDRESS', 'Számlázási cím:');
define('ENTRY_PAYMENT_METHOD', 'Fizetési mód:');
define('ENTRY_CREDIT_CARD_TYPE', 'Bankkártya típusa:');
define('ENTRY_CREDIT_CARD_OWNER', 'Bankkártya tulajdonsa:');
define('ENTRY_CREDIT_CARD_NUMBER', 'Bankkártya száma:');
define('ENTRY_CREDIT_CARD_EXPIRES', 'Bankkártya érvényességi ideje:');
define('ENTRY_SUB_TOTAL', 'Részösszeg:');
define('ENTRY_TAX', 'Adó:');
define('ENTRY_SHIPPING', 'Kiszállítás:');
define('ENTRY_TOTAL', 'Összesen:');
define('ENTRY_DATE_PURCHASED', 'Vásárlás ideje:');
define('ENTRY_STATUS', 'Állapot:');
define('ENTRY_DATE_LAST_UPDATED', 'Utolsó módosítás:');
define('ENTRY_NOTIFY_CUSTOMER', 'Vásárló értesítése:');
define('ENTRY_NOTIFY_COMMENTS', 'Üzenet rögzítése:');
define('ENTRY_PRINTABLE', 'Számla/árujegyzék kinyomtatás');

define('TEXT_INFO_HEADING_DELETE_ORDER', 'Megrendelés eltávolítása');
define('TEXT_INFO_DELETE_INTRO', 'Biztos, hogy el kívánja távolítani a rendszerből ezt az megrendelést?');
define('TEXT_INFO_RESTOCK_PRODUCT_QUANTITY', 'Új árukészlet feltöltése');
define('TEXT_DATE_ORDER_CREATED', 'Létrehozás dátuma:');
define('TEXT_DATE_ORDER_LAST_MODIFIED', 'Utoljára módosítva:');
define('TEXT_INFO_PAYMENT_METHOD', 'Fizetési mód:');

define('TEXT_ALL_ORDERS', 'Összes megrendelés');
define('TEXT_NO_ORDER_HISTORY', 'Nincs elérhető adat a megrendelésekről');


define('EMAIL_SEPARATOR', '------------------------------------------------------');
define('EMAIL_TEXT_SUBJECT', 'Értékesítői frissítések');
define('EMAIL_TEXT_ORDER_NUMBER', 'Rendelések száma:');
define('EMAIL_TEXT_INVOICE_URL', 'Számla/árujegyzék részletei:');
define('EMAIL_TEXT_DATE_ORDERED', 'Értékesítési dátum:');
define('EMAIL_TEXT_STATUS_UPDATE', 'Az új értékesítői adatok frissítve.' . "\n\n" . 'Az új értékesítési státusz.: %s' . "\n\n" . 'Ha bármilyen kérdésse van, küldjön e-mailt.' . "\n");
define('EMAIL_TEXT_COMMENTS_UPDATE', 'Értékesítők hozzászólásai' . "\n\n%s\n\n");

define('ERROR_ORDER_DOES_NOT_EXIST', 'HIBA!: Rendelés nem létezik!');
define('SUCCESS_ORDER_UPDATED', 'Siker: Rendelési adatok frissítése siekresen megtörtént.');
define('WARNING_ORDER_NOT_UPDATED', 'Hiba!: Nem sikerült a módosítás! (Esetleg válassz másik státuszt)');
?>
