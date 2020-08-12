<?php
/* -----------------------------------------------------------------------------------------
   $Id: table.php 5118 2013-07-18 10:58:36Z Tomcraft $   

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   -----------------------------------------------------------------------------------------
   based on:
   (c) 2000-2001 The Exchange Project (earlier name of osCommerce)
   (c) 2002-2003 osCommerce (table.php,v 1.6 2003/02/16); www.oscommerce.com 
   (c) 2003 nextcommerce (table.php,v 1.4 2003/08/13); www.nextcommerce.org
   (c) 2006 XT-Commerce

   Released under the GNU General Public License 
   ---------------------------------------------------------------------------------------*/

define('MODULE_SHIPPING_TABLE_TEXT_TITLE', 'Tasa de la tabla');
define('MODULE_SHIPPING_TABLE_TEXT_DESCRIPTION', 'Tasa de la tabla');
define('MODULE_SHIPPING_TABLE_TEXT_WAY', 'La mejor manera (%01.2f kg)');
define('MODULE_SHIPPING_TABLE_TEXT_WEIGHT', 'Peso');
define('MODULE_SHIPPING_TABLE_TEXT_AMOUNT', 'Cantidad');
define('MODULE_SHIPPING_TABLE_UNDEFINED_RATE', '&iexcl;No hay env&iacute;o disponible para el pa&iacute;s seleccionado!');
define('MODULE_SHIPPING_TABLE_INVALID_ZONE', 'La tasa de env&iacute;o no puede determinarse en este momento.');

define('MODULE_SHIPPING_TABLE_STATUS_TITLE' , 'Habilitar el m&eacute;todo de la tabla');
define('MODULE_SHIPPING_TABLE_STATUS_DESC' , '&iquest;Quieres ofrecer el env&iacute;o de la tarifa de la mesa?');
define('MODULE_SHIPPING_TABLE_ALLOWED_TITLE' , 'Zonas permitidas');
define('MODULE_SHIPPING_TABLE_ALLOWED_DESC' , 'Por favor, introduzca las zonas <b>por separado</b> a las que se les debe permitir usar este m&oacute;dulo (por ejemplo, AT,DE (d&eacute;jelo vac&iacute;o si quiere permitir todas las zonas))');
define('MODULE_SHIPPING_TABLE_MODE_TITLE' , 'M&eacute;todo de la mesa');
define('MODULE_SHIPPING_TABLE_MODE_DESC' , 'El costo de env&iacute;o se basa en el total del pedido o el peso total de los art&iacute;culos pedidos.');
define('MODULE_SHIPPING_TABLE_TAX_CLASS_TITLE' , 'Clase de impuestos');
define('MODULE_SHIPPING_TABLE_TAX_CLASS_DESC' , 'Utilice la siguiente clase de impuestos en la tarifa de env&iacute;o.');
define('MODULE_SHIPPING_TABLE_ZONE_TITLE' , 'Zona de env&iacute;o');
define('MODULE_SHIPPING_TABLE_ZONE_DESC' , 'Si se selecciona una zona, s&oacute;lo se debe habilitar este m&eacute;todo de env&iacute;o para esa zona.');
define('MODULE_SHIPPING_TABLE_SORT_ORDER_TITLE' , 'Orden de clasificaci&oacute;n');
define('MODULE_SHIPPING_TABLE_SORT_ORDER_DESC' , 'Ordenar el orden de exhibici&oacute;n.');
define('MODULE_SHIPPING_TABLE_NUMBER_ZONES_TITLE' , 'N&uacute;mero de zonas');
define('MODULE_SHIPPING_TABLE_NUMBER_ZONES_DESC' , 'N&uacute;mero de zonas a utilizar');
define('MODULE_SHIPPING_TABLE_DISPLAY_TITLE' , 'Habilitar la pantalla');
define('MODULE_SHIPPING_TABLE_DISPLAY_DESC' , '&iquest;Desea mostrar, si el env&iacute;o a destino no es posible o si los costos de env&iacute;o no pueden ser calculados?');

if (defined('MODULE_SHIPPING_TABLE_NUMBER_ZONES')) {
  for ($module_shipping_table_i = 1; $module_shipping_table_i <= MODULE_SHIPPING_TABLE_NUMBER_ZONES; $module_shipping_table_i ++) {
    define('MODULE_SHIPPING_TABLE_COUNTRIES_'.$module_shipping_table_i.'_TITLE' , '<hr/>Pa&iacute;ses de la Zona '.$module_shipping_table_i);
    define('MODULE_SHIPPING_TABLE_COUNTRIES_'.$module_shipping_table_i.'_DESC' , 'Lista separada por comas de los c&oacute;digos de pa&iacute;s ISO de dos caracteres que forman parte de la Zona '.$module_shipping_table_i.' (Entra en WORLD para el resto del mundo.).');
    define('MODULE_SHIPPING_TABLE_COST_'.$module_shipping_table_i.'_TITLE' , 'Tabla de env&iacute;o de la Zona '.$module_shipping_table_i);
    define('MODULE_SHIPPING_TABLE_COST_'.$module_shipping_table_i.'_DESC' , 'Las tarifas de env&iacute;o a los destinos de la Zona '.$module_shipping_table_i.' se basan en un grupo de pesos m&aacute;ximos de pedido o en el total del pedido. Ejemplo: 3:8.50,7:10.50,... Pesos/Total menor o igual a 3 costar&iacute;a 8.50 para los destinos de la Zona '.$module_shipping_table_i);
    define('MODULE_SHIPPING_TABLE_HANDLING_'.$module_shipping_table_i.'_TITLE' , 'Cuota de manejo de la zona '.$module_shipping_table_i);
    define('MODULE_SHIPPING_TABLE_HANDLING_'.$module_shipping_table_i.'_DESC' , 'Cuota de manipulaci&oacute;n para esta zona de env&iacute;o');
  }
}
?>
