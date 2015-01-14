<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2013 osCommerce

  Released under the GNU General Public License
*/

define('HEADING_TITLE', 'Kategóriák / Termékek');
define('HEADING_TITLE_SEARCH', 'Keresés:');
define('HEADING_TITLE_GOTO', 'Ugrás:');

define('TABLE_HEADING_ID', 'Azonosító');
define('TABLE_HEADING_CATEGORIES_PRODUCTS', 'Kategóriák / Termékek');
define('TABLE_HEADING_ACTION', 'Műveletek');
define('TABLE_HEADING_STATUS', 'Státusz');

define('TEXT_NEW_PRODUCT', 'Új termékek &quot;%s&quot;');
define('TEXT_CATEGORIES', 'Kategóriák:');
define('TEXT_SUBCATEGORIES', 'Alkategóriák:');
define('TEXT_PRODUCTS', 'Termékek:');
define('TEXT_PRODUCTS_PRICE_INFO', 'Ár:');
define('TEXT_PRODUCTS_TAX_CLASS', 'Adó osztály:');
define('TEXT_PRODUCTS_AVERAGE_RATING', 'Átlag osztályzat:');
define('TEXT_PRODUCTS_QUANTITY_INFO', 'Mennyiség:');
define('TEXT_DATE_ADDED', 'hozzáadás dátuma:');
define('TEXT_DATE_AVAILABLE', 'Elérhetőség dátuma:');
define('TEXT_LAST_MODIFIED', 'Utolsó módosítás:');
define('TEXT_NO_CHILD_CATEGORIES_OR_PRODUCTS', 'Adja meg a kategória nevét, vagy a termék nevét ezen a szinten!');
define('TEXT_PRODUCT_MORE_INFORMATION', 'Mégtöbb információért keresse fel az oldal <a href="http://%s" target="blank"><u>üzemeltetőjét</u></a>.');
define('TEXT_PRODUCT_DATE_ADDED', 'Ez a termék  %s -i dátummal került be az adatbázisba.');
define('TEXT_PRODUCT_DATE_AVAILABLE', 'Ez a termék eddig várható, hogy raktárkészletben marad: %s.');

define('TEXT_EDIT_INTRO', 'Adatok felvitele / módosítása');
define('TEXT_EDIT_CATEGORIES_ID', 'Kategória ID:');
define('TEXT_EDIT_CATEGORIES_NAME', 'Kategória neve:');
define('TEXT_EDIT_CATEGORIES_IMAGE', 'Kategória képe:');
define('TEXT_EDIT_SORT_ORDER', 'Sorbarendezés:');

define('TEXT_INFO_COPY_TO_INTRO', 'Adjon meg egy kategóriát ahová másolni kívánja a terméket!');
define('TEXT_INFO_CURRENT_CATEGORIES', 'Létező kategóriák:');

define('TEXT_INFO_HEADING_NEW_CATEGORY', 'Új kategória');
define('TEXT_INFO_HEADING_EDIT_CATEGORY', 'Kategória szerkesztése');
define('TEXT_INFO_HEADING_DELETE_CATEGORY', 'Kategória törlése');
define('TEXT_INFO_HEADING_MOVE_CATEGORY', 'Kategória áthelyezése');
define('TEXT_INFO_HEADING_DELETE_PRODUCT', 'Termék törlése');
define('TEXT_INFO_HEADING_MOVE_PRODUCT', 'Termék áthelyezése');
define('TEXT_INFO_HEADING_COPY_TO', 'Másolás');

define('TEXT_DELETE_CATEGORY_INTRO', 'Biztos, hogy el kívánja távolítani ezt a kategóriát?');
define('TEXT_DELETE_PRODUCT_INTRO', 'Biztos, hogy el kívánja távolítani a terméket az adatbázisból?');

define('TEXT_DELETE_WARNING_CHILDS', '<strong>WARNING:</strong> There are %s (child-)categories still linked to this category!');
define('TEXT_DELETE_WARNING_PRODUCTS', '<strong>WARNING:</strong> There are %s products still linked to this category!');

define('TEXT_MOVE_PRODUCTS_INTRO', 'Please select which category you wish <strong>%s</strong> to reside in');
define('TEXT_MOVE_CATEGORIES_INTRO', 'Please select which category you wish <strong>%s</strong> to reside in');
define('TEXT_MOVE', 'A <strong>%s</strong> mozgatása ide:');

define('TEXT_NEW_CATEGORY_INTRO', 'Kérem adja meg a következő információkat az új kategóriához');
define('TEXT_CATEGORIES_NAME', 'Kategória neve:');
define('TEXT_CATEGORIES_IMAGE', 'Kategória képe:');
define('TEXT_SORT_ORDER', 'Sorrend:');

define('TEXT_PRODUCTS_STATUS', 'Termék státusz:');
define('TEXT_PRODUCTS_DATE_AVAILABLE', 'Rendelkezésre álló idő:');
define('TEXT_PRODUCT_AVAILABLE', 'Raktárkészleten van');
define('TEXT_PRODUCT_NOT_AVAILABLE', 'Beszállítás alatt');
define('TEXT_PRODUCTS_MANUFACTURER', 'Termék gyártója:');
define('TEXT_PRODUCTS_NAME', 'Termék neve:');
define('TEXT_PRODUCTS_DESCRIPTION', 'Termékleírás:');
define('TEXT_PRODUCTS_QUANTITY', 'Termék mennyisége (készletben):');
define('TEXT_PRODUCTS_MODEL', 'Termék modell/cikkszám:');
define('TEXT_PRODUCTS_IMAGE', 'Termék fotója:');
define('TEXT_PRODUCTS_MAIN_IMAGE', 'Fő termék fotó');
define('TEXT_PRODUCTS_LARGE_IMAGE', 'Nagy termék fotó');
define('TEXT_PRODUCTS_LARGE_IMAGE_HTML_CONTENT', 'HTML tartalom (popuphoz)');
define('TEXT_PRODUCTS_ADD_LARGE_IMAGE', 'Nagy termék fotó hozzáadása');
define('TEXT_PRODUCTS_LARGE_IMAGE_DELETE_TITLE', 'Törlöd a nagy termék fotót?');
define('TEXT_PRODUCTS_LARGE_IMAGE_CONFIRM_DELETE', 'Kérlek, erősítsd meg a nagy termék fotó eltávolítását.');
define('TEXT_PRODUCTS_URL', 'Termék URL címe:');
define('TEXT_PRODUCTS_URL_WITHOUT_HTTP', '<small>(http:// nélkül)</small>');
define('TEXT_PRODUCTS_PRICE_NET', 'Termék ára (nettó):');
define('TEXT_PRODUCTS_PRICE_GROSS', 'Termék ára (bruttó):');
define('TEXT_PRODUCTS_WEIGHT', 'Termék tömege:');

define('EMPTY_CATEGORY', 'Kategória kiürítése');

define('TEXT_HOW_TO_COPY', 'Másolási eljárás:');
define('TEXT_COPY_AS_LINK', 'Termék linkelése');
define('TEXT_COPY_AS_DUPLICATE', 'Termék másolása');

define('ERROR_CANNOT_LINK_TO_SAME_CATEGORY', 'HIBA!: Nem linkelhető ugyanaz a termék egy kategórián belül!');
define('ERROR_CATALOG_IMAGE_DIRECTORY_NOT_WRITEABLE', 'HIBA!: Termék képeinek könyvtára nem írható: ' . DIR_FS_CATALOG_IMAGES);
define('ERROR_CATALOG_IMAGE_DIRECTORY_DOES_NOT_EXIST', 'HIBA!: Nem létezik a termékkategória könyvtára: ' . DIR_FS_CATALOG_IMAGES);
define('ERROR_CANNOT_MOVE_CATEGORY_TO_PARENT', 'HIBA! Szülő kategóriában lévő kategóriát nem lehet eltávolítani.');
?>
