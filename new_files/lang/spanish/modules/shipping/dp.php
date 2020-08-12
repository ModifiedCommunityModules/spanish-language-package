<?php
/* -----------------------------------------------------------------------------------------
   $Id: dp.php 5122 2013-07-18 11:47:17Z Tomcraft $

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   -----------------------------------------------------------------------------------------
   based on:
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(dp.php,v 1.4 2003/02/18 04:28:00); www.oscommerce.com
   (c) 2003 nextcommerce (dp.php,v 1.5 2003/08/13); www.nextcommerce.org
   (c) 2006 xt:Commerce; www.xt-commerce.com

   Released under the GNU General Public License
   -----------------------------------------------------------------------------------------
   Third Party contributions:
   German Post (Deutsche Post WorldNet)         	Autor:	Copyright (C) 2002 - 2003 TheMedia, Dipl.-Ing Thomas Pl�nkers | http://www.themedia.at & http://www.oscommerce.at

   Released under the GNU General Public License
   -----------------------------------------------------------------------------------------
   enhanced on 2010-12-08 18:17:30Z franky_n
   ---------------------------------------------------------------------------------------*/

define('MODULE_SHIPPING_DP_TEXT_TITLE', 'German Post');
define('MODULE_SHIPPING_DP_TEXT_DESCRIPTION', 'German Post - M&oacute;dulo de env&iacute;o mundial');
define('MODULE_SHIPPING_DP_TEXT_WAY', 'Despacho a');
define('MODULE_SHIPPING_DP_TEXT_UNITS', 'kg');
define('MODULE_SHIPPING_DP_INVALID_ZONE', 'Desafortunadamente no es posible enviar a este pa&iacute;s');
define('MODULE_SHIPPING_DP_UNDEFINED_RATE', 'Los gastos de env&iacute;o no pueden ser calculados por el momento');

define('MODULE_SHIPPING_DP_STATUS_TITLE' , 'German Post WorldNet');
define('MODULE_SHIPPING_DP_STATUS_DESC' , '&iquest;Le gustar&iacute;a ofrecer el env&iacute;o con German Post WorldNet?');
define('MODULE_SHIPPING_DP_HANDLING_TITLE' , 'Cuota de manejo');
define('MODULE_SHIPPING_DP_HANDLING_DESC' , 'Tasa de tramitaci&oacute;n en euros');
define('MODULE_SHIPPING_DP_TAX_CLASS_TITLE' , 'Impuesto');
define('MODULE_SHIPPING_DP_TAX_CLASS_DESC' , 'Por favor, elija la tasa de impuestos para el env&iacute;o.');
define('MODULE_SHIPPING_DP_ZONE_TITLE' , 'Zona de env&iacute;o');
define('MODULE_SHIPPING_DP_ZONE_DESC' , 'Si eliges una zona s&oacute;lo se utilizan estas zonas de env&iacute;o.');
define('MODULE_SHIPPING_DP_SORT_ORDER_TITLE' , 'Orden de exhibici&oacute;n');
define('MODULE_SHIPPING_DP_SORT_ORDER_DESC' , 'El m&aacute;s bajo se muestra primero.');
define('MODULE_SHIPPING_DP_ALLOWED_TITLE' , 'Zonas de embarque individuales');
define('MODULE_SHIPPING_DP_ALLOWED_DESC' , 'Por favor, introduzca las zonas <p>por separado</p> que deben ser permitidas para utilizar este m&oacute;dulo (por ejemplo, AT, DE (deje vac&iacute;o si quiere permitir todas las zonas))');
define('MODULE_SHIPPING_DP_NUMBER_ZONES_TITLE' , 'N&uacute;mero de zonas');
define('MODULE_SHIPPING_DP_NUMBER_ZONES_DESC' , 'N&uacute;mero de zonas a utilizar');
define('MODULE_SHIPPING_DP_DISPLAY_TITLE' , 'Habilitar la pantalla');
define('MODULE_SHIPPING_DP_DISPLAY_DESC' , '&iquest;Desea mostrar, si el env&iacute;o a destino no es posible o si los costos de env&iacute;o no pueden ser calculados?');

if (defined('MODULE_SHIPPING_FREEAMOUNT_NUMBER_ZONES')) {
  for ($module_shipping_dp_i = 1; $module_shipping_dp_i <= MODULE_SHIPPING_DP_NUMBER_ZONES; $module_shipping_dp_i ++) {
    define('MODULE_SHIPPING_DP_COUNTRIES_'.$module_shipping_dp_i.'_TITLE' , '<hr/>Pa&iacute;ses de la zona '.$module_shipping_dp_i.' del DP');
    define('MODULE_SHIPPING_DP_COUNTRIES_'.$module_shipping_dp_i.'_DESC' , 'Lista separada por comas de c&oacute;digos de pa&iacute;s ISO de dos caracteres que forman parte de la Zona '.$module_shipping_dp_i.' (Entre en WORLD para el resto del mundo.)');
    define('MODULE_SHIPPING_DP_COST_'.$module_shipping_dp_i.'_TITLE' , 'Mesa de env&iacute;o de la Zona '.$module_shipping_dp_i.' DP');
    define('MODULE_SHIPPING_DP_COST_'.$module_shipping_dp_i.'_DESC' , 'Las tarifas de env&iacute;o a los destinos de la Zona '.$module_shipping_dp_i.' se basan en un rango de pesos de los pedidos. Ejemplo: 3:8.50,7:10.50,99999:12.00... Los pesos mayores de 0 y menores de 3 costar&iacute;an 8.50, los menores de 7 costar&iacute;an 10.50 para los destinos de la Zona '.$module_shipping_dp_i.'.');
  }
}
?>