<?php
/* -----------------------------------------------------------------------------------------
   $Id: zones.php 5118 2013-07-18 10:58:36Z Tomcraft $   

    modified eCommerce Shopsoftware
    http://www.modified-shop.org

    Copyright (c) 2009 - 2013 [www.modified-shop.org]
   -----------------------------------------------------------------------------------------
   based on: 
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(zones.php,v 1.3 2002/04/17); www.oscommerce.com 
   (c) 2003	 nextcommerce (zones.php,v 1.4 2003/08/13); www.nextcommerce.org
   (c) 2003  xt-commerce.com (zones.php  2005-04-29); www.xt-commerce.com

   Released under the GNU General Public License 
   ---------------------------------------------------------------------------------------*/

define('MODULE_SHIPPING_ZONES_TEXT_TITLE', 'Tarifas de la zona');
define('MODULE_SHIPPING_ZONES_TEXT_DESCRIPTION', 'Tarifas basadas en la zona');
define('MODULE_SHIPPING_ZONES_TEXT_WAY', 'Env&iacute;o a:');
define('MODULE_SHIPPING_ZONES_TEXT_UNITS', 'kg');
define('MODULE_SHIPPING_ZONES_INVALID_ZONE', '&iexcl;No hay env&iacute;o disponible para el pa&iacute;s seleccionado!');
define('MODULE_SHIPPING_ZONES_UNDEFINED_RATE', 'La tasa de env&iacute;o no puede determinarse en este momento.');

define('MODULE_SHIPPING_ZONES_STATUS_TITLE' , 'M&eacute;todo de Habilitar Zonas');
define('MODULE_SHIPPING_ZONES_STATUS_DESC' , '&iquest;Quiere ofrecer una tarifa de env&iacute;o por zonas?');
define('MODULE_SHIPPING_ZONES_ALLOWED_TITLE' , 'Zonas permitidas');
define('MODULE_SHIPPING_ZONES_ALLOWED_DESC' , 'Por favor, introduzca las zonas <b>por separado</b> que deben ser permitidas para utilizar este m&oacute;dulo (por ejemplo, AT, DE (deje vac&iacute;o si quiere permitir todas las zonas))');
define('MODULE_SHIPPING_ZONES_TAX_CLASS_TITLE' , 'Clase de impuestos');
define('MODULE_SHIPPING_ZONES_TAX_CLASS_DESC' , 'Utilice la siguiente clase de impuestos en la tarifa de env&iacute;o.');
define('MODULE_SHIPPING_ZONES_ZONE_TITLE' , 'Zona de env&iacute;o');
define('MODULE_SHIPPING_ZONES_ZONE_DESC' , 'Si eliges una zona s&oacute;lo se utilizan estas zonas de env&iacute;o.');
define('MODULE_SHIPPING_ZONES_SORT_ORDER_TITLE' , 'Orden de clasificaci&oacute;n');
define('MODULE_SHIPPING_ZONES_SORT_ORDER_DESC' , 'Ordenar el orden de exhibici&oacute;n.');
define('MODULE_SHIPPING_ZONES_NUMBER_ZONES_TITLE' , 'N&uacute;mero de zonas');
define('MODULE_SHIPPING_ZONES_NUMBER_ZONES_DESC' , 'N&uacute;mero de zonas a utilizar');
define('MODULE_SHIPPING_ZONES_DISPLAY_TITLE' , 'Habilitar la pantalla');
define('MODULE_SHIPPING_ZONES_DISPLAY_DESC' , '&iquest;Desea mostrar, si el env&iacute;o a destino no es posible o si los costos de env&iacute;o no pueden ser calculados?');

if (defined('MODULE_SHIPPING_ZONES_NUMBER_ZONES')) {
  for ($module_shipping_zones_i = 1; $module_shipping_zones_i <= MODULE_SHIPPING_ZONES_NUMBER_ZONES; $module_shipping_zones_i ++) {
    define('MODULE_SHIPPING_ZONES_COUNTRIES_'.$module_shipping_zones_i.'_TITLE' , '<hr/>Pa&iacute;ses de la Zona '.$module_shipping_zones_i);
    define('MODULE_SHIPPING_ZONES_COUNTRIES_'.$module_shipping_zones_i.'_DESC' , 'Lista separada por comas de c&oacute;digos de pa&iacute;s ISO de dos caracteres que forman parte de la Zona '.$module_shipping_zones_i.' (Entre en MUNDO para el resto del mundo.)');
    define('MODULE_SHIPPING_ZONES_COST_'.$module_shipping_zones_i.'_TITLE' , 'Tabla de env&iacute;o de la Zona '.$module_shipping_zones_i);
    define('MODULE_SHIPPING_ZONES_COST_'.$module_shipping_zones_i.'_DESC' , 'Las tarifas de env&iacute;o a los destinos de la Zona '.$module_shipping_zones_i.' se basan en un grupo de pesos m&aacute;ximos de pedido. Ejemplo: 3:8.50,7:10.50,... Pesos menores o iguales a 3 costar&iacute;an 8.50 para los destinos de la Zona '.$module_shipping_zones_i.'.');
    define('MODULE_SHIPPING_ZONES_HANDLING_'.$module_shipping_zones_i.'_TITLE' , 'Cuota de manejo de la zona '.$module_shipping_zones_i);
    define('MODULE_SHIPPING_ZONES_HANDLING_'.$module_shipping_zones_i.'_DESC' , 'Cuota de manipulaci&oacute;n para esta zona de env&iacute;o');
  }
}
?>