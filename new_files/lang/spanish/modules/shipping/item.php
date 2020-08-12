<?php
/* -----------------------------------------------------------------------------------------
   $Id: item.php 5118 2013-07-18 10:58:36Z Tomcraft $   

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   -----------------------------------------------------------------------------------------
   based on: 
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(item.php,v 1.6 2003/02/16); www.oscommerce.com 
   (c) 2003	 nextcommerce (item.php,v 1.4 2003/08/13); www.nextcommerce.org
   (c) 2006 xt:Commerce; www.xt-commerce.com

   Released under the GNU General Public License 
   ---------------------------------------------------------------------------------------*/

define('MODULE_SHIPPING_ITEM_TEXT_TITLE', 'Por cada art&iacute;culo');
define('MODULE_SHIPPING_ITEM_TEXT_DESCRIPTION', 'Por cada art&iacute;culo');
define('MODULE_SHIPPING_ITEM_TEXT_WAY', 'La mejor manera');
define('MODULE_SHIPPING_ITEM_INVALID_ZONE', 'Desafortunadamente no es posible enviar a este pa&iacute;s');

define('MODULE_SHIPPING_ITEM_STATUS_TITLE' , 'Habilitar el env&iacute;o de art&iacute;culos');
define('MODULE_SHIPPING_ITEM_STATUS_DESC' , '&iquest;Quiere ofrecer una tarifa de env&iacute;o por art&iacute;culo?');
define('MODULE_SHIPPING_ITEM_ALLOWED_TITLE' , 'Zonas permitidas');
define('MODULE_SHIPPING_ITEM_ALLOWED_DESC' , 'Por favor, introduzca las zonas <b>por separado</b> a las que se les debe permitir usar este m&oacute;dulo (por ejemplo, AT,DE (d&eacute;jelo vac&iacute;o si quiere permitir todas las zonas))');
define('MODULE_SHIPPING_ITEM_TAX_CLASS_TITLE' , 'Clase de impuestos');
define('MODULE_SHIPPING_ITEM_TAX_CLASS_DESC' , 'Utilice la siguiente clase de impuestos en la tarifa de env&iacute;o.');
define('MODULE_SHIPPING_ITEM_ZONE_TITLE' , 'Zona de env&iacute;o');
define('MODULE_SHIPPING_ITEM_ZONE_DESC' , 'Si se selecciona una zona, s&oacute;lo se debe habilitar este m&eacute;todo de env&iacute;o para esa zona.');
define('MODULE_SHIPPING_ITEM_SORT_ORDER_TITLE' , 'Orden de clasificaci&oacute;n');
define('MODULE_SHIPPING_ITEM_SORT_ORDER_DESC' , 'Ordenar el orden de exhibici&oacute;n.');
define('MODULE_SHIPPING_ITEM_NUMBER_ZONES_TITLE' , 'N&uacute;mero de zonas');
define('MODULE_SHIPPING_ITEM_NUMBER_ZONES_DESC' , 'N&uacute;mero de zonas a utilizar');
define('MODULE_SHIPPING_ITEM_DISPLAY_TITLE' , 'Habilitar la pantalla');
define('MODULE_SHIPPING_ITEM_DISPLAY_DESC' , '&iquest;Desea mostrar, si el env&iacute;o a destino no es posible o si los costos de env&iacute;o no pueden ser calculados?');

if (defined('MODULE_SHIPPING_ITEM_NUMBER_ZONES')) {
  for ($module_shipping_item_i = 1; $module_shipping_item_i <= MODULE_SHIPPING_ITEM_NUMBER_ZONES; $module_shipping_item_i ++) {
    define('MODULE_SHIPPING_ITEM_COUNTRIES_'.$module_shipping_item_i.'_TITLE' , '<hr/>Pa&iacute;ses de la Zona '.$module_shipping_item_i);
    define('MODULE_SHIPPING_ITEM_COUNTRIES_'.$module_shipping_item_i.'_DESC' , 'Lista separada por comas de c&oacute;digos de pa&iacute;s ISO de dos caracteres que forman parte de la Zona '.$module_shipping_item_i.' (Entre en WORLD para el resto del mundo.)');
    define('MODULE_SHIPPING_ITEM_COST_'.$module_shipping_item_i.'_TITLE' , 'Tabla de env&iacute;o de la Zona 1 '.$module_shipping_item_i);
    define('MODULE_SHIPPING_ITEM_COST_'.$module_shipping_item_i.'_DESC' , 'Las tarifas de env&iacute;o a la zona '.$module_shipping_item_i.' se multiplicar&aacute;n por el n&uacute;mero de art&iacute;culos de un pedido que utilice este m&eacute;todo de env&iacute;o.');
    define('MODULE_SHIPPING_ITEM_HANDLING_'.$module_shipping_item_i.'_TITLE' , 'Cuota de manejo de la zona '.$module_shipping_item_i);
    define('MODULE_SHIPPING_ITEM_HANDLING_'.$module_shipping_item_i.'_DESC' , 'Cuota de manipulaci&oacute;n para esta zona de env&iacute;o');
  }
}
?>
