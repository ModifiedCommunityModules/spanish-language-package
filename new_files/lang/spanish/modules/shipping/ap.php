<?php
/* -----------------------------------------------------------------------------------------
   $Id: ap.php 5118 2013-07-18 10:58:36Z Tomcraft $   

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   -----------------------------------------------------------------------------------------
   based on: 
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(ap.php,v 1.02 2003/02/18); www.oscommerce.com 
   (c) 2003	 nextcommerce (ap.php,v 1.4 2003/08/13); www.nextcommerce.org
   (c) 2006 xt:Commerce; www.xt-commerce.com

   Released under the GNU General Public License 
   -----------------------------------------------------------------------------------------
   Third Party contributions:
   austrian_post_1.05       	Autor:	Copyright (C) 2002 - 2003 TheMedia, Dipl.-Ing Thomas Pl�nkers | http://www.themedia.at & http://www.oscommerce.at

   Released under the GNU General Public License 
   ---------------------------------------------------------------------------------------*/
   

define('MODULE_SHIPPING_AP_TEXT_TITLE', 'Austriaco Post AG');
define('MODULE_SHIPPING_AP_TEXT_DESCRIPTION', 'Austriaco Post AG - Despacho mundial');
define('MODULE_SHIPPING_AP_TEXT_WAY', 'Despacho a');
define('MODULE_SHIPPING_AP_TEXT_UNITS', 'kg');
define('MODULE_SHIPPING_AP_INVALID_ZONE', 'Desafortunadamente no es posible enviar a este pa&iacute;s');
define('MODULE_SHIPPING_AP_UNDEFINED_RATE', 'Los gastos de env&iacute;o no pueden ser calculados por el momento.');

define('MODULE_SHIPPING_AP_STATUS_TITLE' , 'Austriaco Post AG');
define('MODULE_SHIPPING_AP_STATUS_DESC' , '&iquest;Quieres ofrecer el env&iacute;o de Austrian Post AG?');
define('MODULE_SHIPPING_AP_ALLOWED_TITLE' , 'Zonas permitidas');
define('MODULE_SHIPPING_AP_ALLOWED_DESC' , 'Por favor, introduzca las zonas <b>por separado</b> a las que se debe permitir el uso de este m&oacute;dulo (por ejemplo, AT,DE (d&eacute;jelo vac&iacute;o si quiere permitir todas las zonas))');
define('MODULE_SHIPPING_AP_TAX_CLASS_TITLE' , 'Clase de impuestos');
define('MODULE_SHIPPING_AP_TAX_CLASS_DESC' , 'Utilice la siguiente clase de impuestos en la tarifa de env&iacute;o.');
define('MODULE_SHIPPING_AP_ZONE_TITLE' , 'Zona de env&iacute;o');
define('MODULE_SHIPPING_AP_ZONE_DESC' , 'Si se selecciona una zona, s&oacute;lo se debe habilitar este m&eacute;todo de env&iacute;o para esa zona.');
define('MODULE_SHIPPING_AP_SORT_ORDER_TITLE' , 'Orden de clasificaci&oacute;n');
define('MODULE_SHIPPING_AP_SORT_ORDER_DESC' , 'Ordenar el orden de exhibici&oacute;n.');
define('MODULE_SHIPPING_AP_NUMBER_ZONES_TITLE' , 'N&uacute;mero de zonas');
define('MODULE_SHIPPING_AP_NUMBER_ZONES_DESC' , 'N&uacute;mero de zonas a utilizar');
define('MODULE_SHIPPING_AP_DISPLAY_TITLE' , 'Activar pantalla');
define('MODULE_SHIPPING_AP_DISPLAY_DESC' , '&iquest;Quiere mostrar si el env&iacute;o al destino no es posible o si no se pueden calcular los gastos de env&iacute;o?');
define('MODULE_SHIPPING_AP_ALLOWED_TITLE' , 'Zonas permitidas');
define('MODULE_SHIPPING_AP_ALLOWED_DESC' , 'Por favor, introduzca las zonas <b>por separado</b> que deben ser permitidas para utilizar este m&oacute;dulo (por ejemplo, AT, DE (deje vac&iacute;o si quiere permitir todas las zonas))');
define('MODULE_SHIPPING_AP_NUMBER_ZONES_TITLE' , 'N&uuml;mero de zonas');
define('MODULE_SHIPPING_AP_NUMBER_ZONES_DESC' , 'N&uuml;mero de zonas a utilizar');
define('MODULE_SHIPPING_AP_DISPLAY_TITLE' , 'Habilitar la pantalla');
define('MODULE_SHIPPING_AP_DISPLAY_DESC' , '&iquest;Desea mostrar, si el env&iacute;o a destino no es posible o si los costos de env&iacute;o no pueden ser calculados?');

if (defined('MODULE_SHIPPING_AP_NUMBER_ZONES')) {
  for ($module_shipping_ap_i = 1; $module_shipping_ap_i <= MODULE_SHIPPING_AP_NUMBER_ZONES; $module_shipping_ap_i ++) {
    define('MODULE_SHIPPING_AP_COUNTRIES_'.$module_shipping_ap_i.'_TITLE' , '<hr/>Pa&iacute;ses de la Zona '.$module_shipping_ap_i);
    define('MODULE_SHIPPING_AP_COUNTRIES_'.$module_shipping_ap_i.'_DESC' , 'Lista separada por comas de los c&oacute;digos de pa&iacute;s ISO de dos caracteres que forman parte de la Zona '.$module_shipping_ap_i.' (Entra en WORLD para el resto del mundo.).');
    define('MODULE_SHIPPING_AP_COST_'.$module_shipping_ap_i.'_TITLE' , 'Tabla de env&iacute;o de la Zona '.$module_shipping_ap_i);
    define('MODULE_SHIPPING_AP_COST_'.$module_shipping_ap_i.'_DESC' , 'Las tarifas de env&iacute;o a la zona '.$module_shipping_ap_i.' se multiplicar&aacute;n por el n&uuml;mero de art&iacute;culos de un pedido que utilice este m&eacute;todo de env&iacute;o.');
    define('MODULE_SHIPPING_AP_HANDLING_'.$module_shipping_ap_i.'_TITLE' , 'Cuota de manejo de la zona '.$module_shipping_ap_i);
    define('MODULE_SHIPPING_AP_HANDLING_'.$module_shipping_ap_i.'_DESC' , 'Cuota de manipulaci&oacute;n para esta zona de env&iacute;o');
  }
}
?>