<?php
/* -----------------------------------------------------------------------------------------
   $Id: gls.php 5121 2013-07-18 11:38:19Z Tomcraft $   

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   -----------------------------------------------------------------------------------------
   based on: 
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(dp.php,v 1.4 2003/02/18 04:28:00); www.oscommerce.com 
   (c) 2003	nextcommerce (dp.php,v 1.5 2003/08/13); www.nextcommerce.org
   (c) 2009	shd-media (gls.php 899 27.05.2009);

   Released under the GNU General Public License 
   -----------------------------------------------------------------------------------------
   Third Party contributions:
   GLS (German Logistic Service) based on DP (Deutsche Post)        
   (c) 2002 - 2003 TheMedia, Dipl.-Ing Thomas Pl&auml;nkers | http://www.themedia.at & http://www.oscommerce.at
    
   GLS contribution made by shd-media (c) 2009 shd-media - www.shd-media.de
   Released under the GNU General Public License 
   ---------------------------------------------------------------------------------------*/

define('MODULE_SHIPPING_GLS_TEXT_TITLE', 'GLS');
define('MODULE_SHIPPING_GLS_TEXT_DESCRIPTION', 'GLS - M&oacute;dulo de env&iacute;o europeo');
define('MODULE_SHIPPING_GLS_TEXT_WAY', 'entregar a');
define('MODULE_SHIPPING_GLS_POSTCODE_INFO_TEXT', 'Incluido el recargo de la isla');
define('MODULE_SHIPPING_GLS_TEXT_UNITS', 'kg');
define('MODULE_SHIPPING_GLS_INVALID_ZONE', 'Desafortunadamente no es posible entregar a este pa&iacute;s');
define('MODULE_SHIPPING_GLS_UNDEFINED_RATE', 'Los gastos de env&iacute;o no pueden ser calculados por el momento');

define('MODULE_SHIPPING_GLS_STATUS_TITLE' , 'GLS');
define('MODULE_SHIPPING_GLS_STATUS_DESC' , '&iquest;Quieres ofrecer el env&iacute;o a trav&eacute;s de GLS?');
define('MODULE_SHIPPING_GLS_HANDLING_TITLE' , 'Cuota de manejo');
define('MODULE_SHIPPING_GLS_HANDLING_DESC' , 'Gastos de manipulaci&oacute;n para este tipo de env&iacute;o en euros.');
define('MODULE_SHIPPING_GLS_TAX_CLASS_TITLE' , 'Tasa de impuestos');
define('MODULE_SHIPPING_GLS_TAX_CLASS_DESC' , 'Elija el tipo de impuesto para este tipo de env&iacute;o');
define('MODULE_SHIPPING_GLS_ZONE_TITLE' , 'Zona de env&iacute;o');
define('MODULE_SHIPPING_GLS_ZONE_DESC' , 'Si elige una zona, el tipo de env&iacute;o se ofrecer&aacute; s&oacute;lo en esta zona.');
define('MODULE_SHIPPING_GLS_SORT_ORDER_TITLE' , 'Orden de exhibici&oacute;n');
define('MODULE_SHIPPING_GLS_SORT_ORDER_DESC' , 'Primero se mostrar&aacute; Lowerst.');
define('MODULE_SHIPPING_GLS_ALLOWED_TITLE' , 'Zonas &uacute;nicas de env&iacute;o');
define('MODULE_SHIPPING_GLS_ALLOWED_DESC' , 'Entra en las zonas <b>una por una</b>, en las que el env&iacute;o debe ser posible, por ejemplo: AT,DE');

define('MODULE_SHIPPING_GLS_COUNTRIES_1_TITLE' , 'Pa&iacute;ses de la Zona 1 del GLS');
define('MODULE_SHIPPING_GLS_COUNTRIES_1_DESC' , 'Lista separada por comas de c&oacute;digos de pa&iacute;s ISO de dos caracteres que forman parte de la Zona 1 (Entre en WORLD para el resto del mundo.)');
define('MODULE_SHIPPING_GLS_COST_1_TITLE' , 'Mesa de env&iacute;o GLS Zona 1');
define('MODULE_SHIPPING_GLS_COST_1_DESC' , 'Las tarifas de env&iacute;o a los destinos de la Zona 1 se basan en un rango de pesos de los pedidos. Ejemplo: 0-3:8.50,3-7:10.50,... Pesos mayores que 0 y menores o iguales a 3 costar&iacute;an 8.50 para los destinos de la Zona 1.');

define('MODULE_SHIPPING_GLS_COUNTRIES_2_TITLE' , 'Pa&iacute;ses de la Zona 2 del GLS');
define('MODULE_SHIPPING_GLS_COUNTRIES_2_DESC' , 'Lista separada por comas de c&oacute;digos de pa&iacute;s ISO de dos caracteres que forman parte de la Zona 2 (Entre en WORLD para el resto del mundo.)');
define('MODULE_SHIPPING_GLS_COST_2_TITLE' , 'Mesa de env&iacute;o GLS Zona 2');
define('MODULE_SHIPPING_GLS_COST_2_DESC' , 'Las tarifas de env&iacute;o a los destinos de la Zona 2 se basan en un rango de pesos de los pedidos. Ejemplo: 0-3:8.50,3-7:10.50,... Pesos mayores que 0 y menores o iguales a 3 costar&iacute;an 8.50 para destinos de la Zona 2.');

define('MODULE_SHIPPING_GLS_COUNTRIES_3_TITLE' , 'Pa&iacute;ses de la Zona 3 del GLS');
define('MODULE_SHIPPING_GLS_COUNTRIES_3_DESC' , 'Lista separada por comas de c&oacute;digos de pa&iacute;s ISO de dos caracteres que forman parte de la Zona 3 (Entre en WORLD para el resto del mundo.)');
define('MODULE_SHIPPING_GLS_COST_3_TITLE' , 'Mesa de env&iacute;o GLS Zona 3');
define('MODULE_SHIPPING_GLS_COST_3_DESC' , 'Las tarifas de env&iacute;o a los destinos de la Zona 3 se basan en un rango de pesos de los pedidos. Ejemplo: 0-3:8.50,3-7:10.50,... Pesos mayores que 0 y menores o iguales a 3 costar&iacute;an 8.50 para los destinos de la Zona 3.');

define('MODULE_SHIPPING_GLS_COUNTRIES_4_TITLE' , 'Pa&iacute;ses de la Zona 4 del GLS');
define('MODULE_SHIPPING_GLS_COUNTRIES_4_DESC' , 'Lista separada por comas de c&oacute;digos de pa&iacute;s ISO de dos caracteres que forman parte de la Zona 4 (Entre en WORLD para el resto del mundo.)');
define('MODULE_SHIPPING_GLS_COST_4_TITLE' , 'Mesa de env&iacute;o GLS Zona 4');
define('MODULE_SHIPPING_GLS_COST_4_DESC' , 'Las tarifas de env&iacute;o a los destinos de la zona 4 se basan en un rango de pesos de los pedidos. Ejemplo: 0-3:8.50,3-7:10.50,... Pesos mayores que 0 y menores o iguales a 3 costar&iacute;an 8.50 para destinos de la Zona 4.');

define('MODULE_SHIPPING_GLS_COUNTRIES_5_TITLE' , 'Pa&iacute;ses de la Zona 5 del GLS');
define('MODULE_SHIPPING_GLS_COUNTRIES_5_DESC' , 'Lista separada por comas de c&oacute;digos de pa&iacute;s ISO de dos caracteres que forman parte de la Zona 5 (Entre en WORLD para el resto del mundo.)');
define('MODULE_SHIPPING_GLS_COST_5_TITLE' , 'Mesa de env&iacute;o GLS Zona 5');
define('MODULE_SHIPPING_GLS_COST_5_DESC' , 'Las tarifas de env&iacute;o a los destinos de la zona 5 se basan en un rango de pesos de los pedidos. Ejemplo: 0-3:8.50,3-7:10.50,... Pesos mayores que 0 y menores o iguales a 3 costar&iacute;an 8.50 para destinos de la Zona 5.');

define('MODULE_SHIPPING_GLS_COUNTRIES_6_TITLE' , 'Pa&iacute;ses de la Zona 6 del GLS');
define('MODULE_SHIPPING_GLS_COUNTRIES_6_DESC' , 'Lista separada por comas de c&oacute;digos de pa&iacute;s ISO de dos caracteres que forman parte de la Zona 6 (Entre en WORLD para el resto del mundo.)');
define('MODULE_SHIPPING_GLS_COST_6_TITLE' , 'Mesa de env&iacute;o GLS Zona 6');
define('MODULE_SHIPPING_GLS_COST_6_DESC' , 'Las tarifas de env&iacute;o a los destinos de la Zona 6 se basan en un rango de pesos de los pedidos. Ejemplo: 0-3:8.50,3-7:10.50,... Pesos mayores que 0 y menores o iguales a 3 costar&iacute;an 8.50 para los destinos de la Zona 6.');

define('MODULE_SHIPPING_GLS_POSTCODE_TITLE' , 'Recargo de la isla GLS - c&oacute;digos postales');
define('MODULE_SHIPPING_GLS_POSTCODE_DESC' , 'Zonas de c&oacute;digo postal');
define('MODULE_SHIPPING_GLS_POSTCODE_EXTRA_COST_TITLE' , 'Recargo de la isla GLS - costos');
define('MODULE_SHIPPING_GLS_POSTCODE_EXTRA_COST_DESC' , 'La isla surchage: Introduzca la cantidad, cu&aacute;nto debe a&ntilde;adirse a los gastos de env&iacute;o, cuando la direcci&oacute;n de env&iacute;o se encuentra en una de las islas alemanas.');
?>