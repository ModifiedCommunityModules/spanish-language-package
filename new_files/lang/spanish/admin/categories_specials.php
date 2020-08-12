<?php
/* --------------------------------------------------------------
   $Id: specials.php 899 2005-04-29 02:40:57Z hhgag $   

   XT-Commerce - community made shopping
   http://www.xt-commerce.com

   Copyright (c) 2003 XT-Commerce
   --------------------------------------------------------------
   based on: 
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(specials.php,v 1.10 2002/01/31); www.oscommerce.com 
   (c) 2003	 nextcommerce (specials.php,v 1.4 2003/08/14); www.nextcommerce.org

   Released under the GNU General Public License 
   --------------------------------------------------------------*/

define('SPECIALS_TITLE', 'Ofertas especiales ');

define('TEXT_SPECIALS_PRODUCT', 'Art&iacute;culo:');
define('TEXT_SPECIALS_SPECIAL_PRICE', 'Precio oferta:');
define('TEXT_SPECIALS_SPECIAL_QUANTITY', 'Cantidad:');
define('TEXT_SPECIALS_START_DATE', 'V&aacute;lida desde: <small>(AAAA-MM-DD)</small>');
define('TEXT_SPECIALS_EXPIRES_DATE', 'V&aacute;lida hasta: <small>(AAA-MM-DD)</small>');

define('TEXT_INFO_DATE_ADDED', 'a&ntilde;adido el:');
define('TEXT_INFO_LAST_MODIFIED', '&uacute;ltima modificaci&oacute;n:');
define('TEXT_INFO_NEW_PRICE', 'Precio nuevo:');
define('TEXT_INFO_ORIGINAL_PRICE', 'Precio antiguo:');
define('TEXT_INFO_PERCENTAGE', 'Porciento:');
define('TEXT_INFO_START_DATE', 'V&aacute;lido desde:');
define('TEXT_INFO_EXPIRES_DATE', 'V&aacute;lido hasta:');

define('TEXT_INFO_HEADING_DELETE_SPECIALS', 'Borrar oferta');
define('TEXT_INFO_DELETE_INTRO', 'Estas seguro que quieres borrar la oferta especial?');

define('TEXT_SPECIALS_NO_PID', 'Primero hay que guardar el art&iacute;culo, a lo contrario no se puede mostrar la oferta correctamente!');

define('TEXT_CATSPECIALS_START_DATE_TT', 'Introduce la fecha, a partir de cuando quieres que la oferta sea activa.<br>');
define('TEXT_CATSPECIALS_EXPIRES_DATE_TT', 'Si dejas el campo <strong>V&aacute;lido hasta </strong> vac&iacute;o, la oferta estar&aacute; siempre activa.<br>');
define('TEXT_CATSPECIALS_SPECIAL_QUANTITY_TT', 'En el campo <strong>Cantidad</strong> puedes insertar una cantidad, para la que quiere poner la oferta.<br>Si dejas el campo <strong>Cantidad</strong> vac&iacute;o, la cantidad es ilimitada.');
define('TEXT_CATSPECIALS_SPECIAL_PRICE_TT', 'Tambi&eacute;n puedes poner en el campo de Precio Oferta una valor porcentual, por ejemplo:: <strong>20%</strong><br>Si insertas un precio nuevo, los decimales tienen que estar separados por un \'.\', por ejemplo: <strong>49.99</strong>');
?>