<?php
/* -----------------------------------------------------------------------------------------
   $Id: ups.php 5121 2013-07-18 11:38:19Z Tomcraft $   

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   -----------------------------------------------------------------------------------------
   based on: 
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(UPS.php,v 1.4 2003/02/18 04:28:00); www.oscommerce.com 
   (c) 2003	 nextcommerce (UPS.php,v 1.5 2003/08/13); www.nextcommerce.org
   (c) 2006 xt:Commerce; www.xt-commerce.com
+
   Released under the GNU General Public License 
   -----------------------------------------------------------------------------------------
   Third Party contributions:
   German Post (Deutsche Post WorldNet)
   Autor:	Copyright (C) 2002 - 2003 TheMedia, Dipl.-Ing Thomas Pl�nkers | http://www.themedia.at & http://www.oscommerce.at
   Changes for personal use: Copyright (C) 2004 Comm4All, Bernd Blazynski | http://www.comm4all.com & http://www.cheapshirt.de

   Released under the GNU General Public License 
   ---------------------------------------------------------------------------------------*/


define('MODULE_SHIPPING_UPS_TEXT_TITLE', 'United Parcel Service Standard');
define('MODULE_SHIPPING_UPS_TEXT_DESCRIPTION', 'United Parcel Service Standard - M&oacute;dulo de env&iacute;o');
define('MODULE_SHIPPING_UPS_TEXT_WAY', 'Despacho a');
define('MODULE_SHIPPING_UPS_TEXT_UNITS', 'kg');
define('MODULE_SHIPPING_UPS_TEXT_FREE', 'Env&iacute;o gratis pedido m&iacute;nimo: EUR ' . ((defined('MODULE_SHIPPING_UPS_FREEAMOUNT')) ? MODULE_SHIPPING_UPS_FREEAMOUNT : ''));
define('MODULE_SHIPPING_UPS_TEXT_LOW', 'Desde EUR ' . ((defined('MODULE_SHIPPING_UPS_FREEAMOUNT')) ? MODULE_SHIPPING_UPS_FREEAMOUNT : '') . ' valor del pedido, enviamos su pedido a un costo de env&iacute;o reducido!');
define('MODULE_SHIPPING_UPS_INVALID_ZONE', 'Desafortunadamente no es posible enviar a este pa&iacute;s');
define('MODULE_SHIPPING_UPS_UNDEFINED_RATE', 'Los gastos de env&iacute;o no pueden ser calculados por el momento');

define('MODULE_SHIPPING_UPS_STATUS_TITLE' , 'UPS Standard');
define('MODULE_SHIPPING_UPS_STATUS_DESC' , '&iquest;Le gustar&iacute;a ofrecer el env&iacute;o con UPS Standard?');
define('MODULE_SHIPPING_UPS_HANDLING_TITLE' , 'Cuota de manejo');
define('MODULE_SHIPPING_UPS_HANDLING_DESC' , 'Tasa de tramitaci&oacute;n en Euros');
define('MODULE_SHIPPING_UPS_TAX_CLASS_TITLE' , 'Impuesto');
define('MODULE_SHIPPING_UPS_TAX_CLASS_DESC' , 'Por favor, elija la tasa de impuestos para el env&iacute;o.');
define('MODULE_SHIPPING_UPS_ZONE_TITLE' , 'Zona de env&iacute;o');
define('MODULE_SHIPPING_UPS_ZONE_DESC' , 'Si eliges una zona s&oacute;lo se utilizan estas zonas de env&iacute;o.');
define('MODULE_SHIPPING_UPS_SORT_ORDER_TITLE' , 'Orden de exhibici&oacute;n');
define('MODULE_SHIPPING_UPS_SORT_ORDER_DESC' , 'El m&aacute;s bajo se muestra primero.');
define('MODULE_SHIPPING_UPS_ALLOWED_TITLE' , 'Zonas de embarque individuales');
define('MODULE_SHIPPING_UPS_ALLOWED_DESC' , 'Por favor, introduzca las zonas <b>por separado </b> a las que se les debe permitir usar este m&oacute;dulo (por ejemplo, AT,DE (d&eacute;jelo vac&iacute;o si quiere permitir todas las zonas))');
define('MODULE_SHIPPING_UPS_FREEAMOUNT_TITLE' , 'Env&iacute;o gratuito para los pedidos nacionales de m&aacute;s de');
define('MODULE_SHIPPING_UPS_FREEAMOUNT_DESC' , 'Valor m&iacute;nimo del pedido para el env&iacute;o nacional gratuito y el env&iacute;o reducido al extranjero.');

define('MODULE_SHIPPING_UPS_COUNTRIES_1_TITLE' , 'Pa&iacute;ses de la Zona 1 de UPS Standard');
define('MODULE_SHIPPING_UPS_COUNTRIES_1_DESC' , 'Lista separada por comas de c&oacute;digos de pa&iacute;s ISO de dos caracteres que forman parte de la Zona 1 (Entre en MUNDO para el resto del mundo.)');
define('MODULE_SHIPPING_UPS_COST_1_TITLE' , 'Tabla de env&iacute;o de la Zona 1 de UPS Standard');
define('MODULE_SHIPPING_UPS_COST_1_DESC' , 'Las tarifas de env&iacute;o a los destinos de la Zona 1 se basan en un rango de pesos de los pedidos. Ejemplo: 4:5.15,... Pesos/Total menor o igual a 4 costar&iacute;a 5.15 para los destinos de la Zona 1.');

define('MODULE_SHIPPING_UPS_COUNTRIES_2_TITLE' , 'Pa&iacute;ses de la Zona 3 de UPS Standard');
define('MODULE_SHIPPING_UPS_COUNTRIES_2_DESC' , 'Lista separada por comas de c&oacute;digos de pa&iacute;s ISO de dos caracteres que forman parte de la Zona 3 (Entre en MUNDO para el resto del mundo.)');
define('MODULE_SHIPPING_UPS_COST_2_TITLE' , 'Tabla de env&iacute;o de la Zona 3 de UPS Standard');
define('MODULE_SHIPPING_UPS_COST_2_DESC' , 'Las tarifas de env&iacute;o a los destinos de la Zona 3 se basan en un rango de pesos de los pedidos. Ejemplo: 4:13.75,... Pesos/Total menor o igual a 4 costar&iacute;a 13.75 para destinos de la Zona 3.');

define('MODULE_SHIPPING_UPS_COUNTRIES_3_TITLE' , 'Pa&iacute;ses de la Zona 31 de UPS Standard');
define('MODULE_SHIPPING_UPS_COUNTRIES_3_DESC' , 'Lista separada por comas de c&oacute;digos de pa&iacute;s ISO de dos caracteres que forman parte de la Zona 31 (Entre en MUNDO para el resto del mundo.)');
define('MODULE_SHIPPING_UPS_COST_3_TITLE' , 'Tabla de env&iacute;o de la Zona 31 de UPS Standard');
define('MODULE_SHIPPING_UPS_COST_3_DESC' , 'Las tarifas de env&iacute;o a los destinos de la zona 31 se basan en un rango de pesos de los pedidos. Ejemplo: 4:23.50,... Pesos/Total menor o igual a 4 costar&iacute;a 23.50 para los destinos de la Zona 31.');

define('MODULE_SHIPPING_UPS_COUNTRIES_4_TITLE' , 'Pa&iacute;ses de la Zona 4 de UPS Standard');
define('MODULE_SHIPPING_UPS_COUNTRIES_4_DESC' , 'Lista separada por comas de c&oacute;digos de pa&iacute;s ISO de dos caracteres que forman parte de la Zona 4 (Entre en MUNDO para el resto del mundo.)');
define('MODULE_SHIPPING_UPS_COST_4_TITLE' , 'Tabla de env&iacute;o de la Zona 4 de UPS Standard');
define('MODULE_SHIPPING_UPS_COST_4_DESC' , 'Las tarifas de env&iacute;o a los destinos de la zona 4 se basan en un rango de pesos de los pedidos. Ejemplo: 4:25.40,... Pesos/Total menor o igual a 4 costar&iacute;a 25.40 para destinos de la Zona 4.');

define('MODULE_SHIPPING_UPS_COUNTRIES_5_TITLE' , 'Pa&iacute;ses de la Zona 41 de UPS Standard');
define('MODULE_SHIPPING_UPS_COUNTRIES_5_DESC' , 'Lista separada por comas de c&oacute;digos de pa&iacute;s ISO de dos caracteres que forman parte de la Zona 41 (Entre en MUNDO para el resto del mundo.)');
define('MODULE_SHIPPING_UPS_COST_5_TITLE' , 'Tabla de env&iacute;o de la Zona 41 de UPS Standard');
define('MODULE_SHIPPING_UPS_COST_5_DESC' , 'Las tarifas de env&iacute;o a los destinos de la Zona 41 se basan en un rango de pesos de los pedidos. Ejemplo: 4:30.00,... Pesos/Total menor o igual a 4 costar&iacute;a 30.00 para los destinos de la Zona 41.');

define('MODULE_SHIPPING_UPS_COUNTRIES_6_TITLE' , 'Pa&iacute;ses de la Zona 5 de UPS Standard');
define('MODULE_SHIPPING_UPS_COUNTRIES_6_DESC' , 'Lista separada por comas de c&oacute;digos de pa&iacute;s ISO de dos caracteres que forman parte de la Zona 5 (Entre en MUNDO para el resto del mundo.)');
define('MODULE_SHIPPING_UPS_COST_6_TITLE' , 'Tabla de env&iacute;o de la Zona 5 de UPS Standard');
define('MODULE_SHIPPING_UPS_COST_6_DESC' , 'Las tarifas de env&iacute;o a los destinos de la zona 5 se basan en un rango de pesos de los pedidos. Ejemplo: 4:34.35,... Pesos/Total menor o igual a 4 costar&iacute;a 34.35 para destinos de la Zona 5.');

define('MODULE_SHIPPING_UPS_COUNTRIES_7_TITLE' , 'Pa&iacute;ses de la Zona 6 de UPS Standard');
define('MODULE_SHIPPING_UPS_COUNTRIES_7_DESC' , 'Lista separada por comas de c&oacute;digos de pa&iacute;s ISO de dos caracteres que forman parte de la Zona 6 (Entre en MUNDO para el resto del mundo.)');
define('MODULE_SHIPPING_UPS_COST_7_TITLE' , 'Tabla de env&iacute;o de la Zona 6 de UPS Standard');
define('MODULE_SHIPPING_UPS_COST_7_DESC' , 'Las tarifas de env&iacute;o a los destinos de la Zona 6 se basan en un rango de pesos de los pedidos. Ejemplo: 4:37.10,... Pesos/Total menor o igual a 4 costar&iacute;a 37.10 para destinos de la Zona 6.');
?>
