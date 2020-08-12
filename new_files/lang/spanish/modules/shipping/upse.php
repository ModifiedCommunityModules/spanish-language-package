<?php
/* -----------------------------------------------------------------------------------------
   $Id: upse.php 4200 2013-01-10 19:47:11Z Tomcraft1980 $   

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   -----------------------------------------------------------------------------------------
   based on: 
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce( fedexeu.php,v 1.01 2003/02/18 03:25:00); www.oscommerce.com 
   (c) 2003	 nextcommerce (fedexeu.php,v 1.5 2003/08/1); www.nextcommerce.org
   (c) 2006 xt:Commerce; www.xt-commerce.com

   Released under the GNU General Public License 
   -----------------------------------------------------------------------------------------
   Third Party contributions:
   fedex_europe_1.02        	Autor:	Copyright (C) 2002 - 2003 TheMedia, Dipl.-Ing Thomas Pl�nkers | http://www.themedia.at & http://www.oscommerce.at

   Released under the GNU General Public License 
   ---------------------------------------------------------------------------------------*/



define('MODULE_SHIPPING_UPSE_TEXT_TITLE', 'United Parcel Service Express');
define('MODULE_SHIPPING_UPSE_TEXT_DESCRIPTION', 'United Parcel Service Express - M&oacute;dulo de env&iacute;o');
define('MODULE_SHIPPING_UPSE_TEXT_WAY', 'Despacho a');
define('MODULE_SHIPPING_UPSE_TEXT_UNITS', 'kg');
define('MODULE_SHIPPING_UPSE_INVALID_ZONE', 'Desafortunadamente no es posible enviar a este pa&iacute;s');
define('MODULE_SHIPPING_UPSE_UNDEFINED_RATE', 'Los gastos de env&iacute;o no pueden ser calculados por el momento');

define('MODULE_SHIPPING_UPSE_STATUS_TITLE' , 'UPS Express');
define('MODULE_SHIPPING_UPSE_STATUS_DESC' , '&iquest;Le gustar&iacute;a ofrecer el env&iacute;o con UPS Express?');
define('MODULE_SHIPPING_UPSE_HANDLING_TITLE' , 'Cuota de manejo');
define('MODULE_SHIPPING_UPSE_HANDLING_DESC' , 'Tasa de tramitaci&oacute;n en euros');
define('MODULE_SHIPPING_UPSE_TAX_CLASS_TITLE' , 'Impuesto');
define('MODULE_SHIPPING_UPSE_TAX_CLASS_DESC' , 'Por favor, elija la tasa de impuestos para el env&iacute;o.');
define('MODULE_SHIPPING_UPSE_ZONE_TITLE' , 'Zona de env&iacute;o');
define('MODULE_SHIPPING_UPSE_ZONE_DESC' , 'Si eliges una zona s&oacute;lo se utilizan estas zonas de env&iacute;o.');
define('MODULE_SHIPPING_UPSE_SORT_ORDER_TITLE' , 'Orden de exhibici&oacute;n');
define('MODULE_SHIPPING_UPSE_SORT_ORDER_DESC' , 'El m 	&aacute;s bajo se muestra primero.');
define('MODULE_SHIPPING_UPSE_ALLOWED_TITLE' , 'Zonas de embarque individuales');
define('MODULE_SHIPPING_UPSE_ALLOWED_DESC' , 'Por favor, introduzca las zonas por separado que deben ser permitidas para utilizar este m&oacute;dulo (por ejemplo, AT, DE (deje vac&iacute;o si quiere permitir todas las zonas))');




/* UPS Express

*/

define('MODULE_SHIPPING_UPSE_COUNTRIES_1_TITLE' , 'Pa&iacute;ses de la Zona 1 de UPS Express');
define('MODULE_SHIPPING_UPSE_COUNTRIES_1_DESC' , 'Lista separada por comas de c&oacute;digos de pa&iacute;s ISO de dos caracteres que forman parte de la Zona 1 (Entre en WORLD para el resto del mundo.)');
define('MODULE_SHIPPING_UPSE_COST_1_TITLE' , 'Tabla de env&iacute;o de UPS Express Zone 1');
define('MODULE_SHIPPING_UPSE_COST_1_DESC' , 'Las tarifas de env&iacute;o a los destinos de la Zona 1 se basan en un rango de pesos de los pedidos. Ejemplo: 0.5:22.7,... Pesos/Total menor o igual a 0.5 costar&iacute;a 22.70 para destinos de la Zona 1.');

define('MODULE_SHIPPING_UPSE_COUNTRIES_2_TITLE' , 'Pa&iacute;ses de la Zona 2 de UPS Express');
define('MODULE_SHIPPING_UPSE_COUNTRIES_2_DESC' , 'Lista separada por comas de c&oacute;digos de pa&iacute;s ISO de dos caracteres que forman parte de la Zona 2 (Entre en WORLD para el resto del mundo.)');
define('MODULE_SHIPPING_UPSE_COST_2_TITLE' , 'Tabla de env&iacute;o de UPS Express Zone 2');
define('MODULE_SHIPPING_UPSE_COST_2_DESC' , 'Las tarifas de env&iacute;o a los destinos de la Zona 2 se basan en un rango de pesos de los pedidos. Ejemplo: 0.5:51.55,... Pesos/Total menor o igual a 0.5 costar&iacute;a 51.55 para destinos de la Zona 2.');

define('MODULE_SHIPPING_UPSE_COUNTRIES_3_TITLE' , 'Pa&iacute;ses de la Zona 3 de UPS Express');
define('MODULE_SHIPPING_UPSE_COUNTRIES_3_DESC' , 'Lista separada por comas de c&oacute;digos de pa&iacute;s ISO de dos caracteres que forman parte de la Zona 3 (Entre en WORLD para el resto del mundo.)');
define('MODULE_SHIPPING_UPSE_COST_3_TITLE' , 'Tabla de env&iacute;o de UPS Express Zone 3');
define('MODULE_SHIPPING_UPSE_COST_3_DESC' , 'Las tarifas de env&iacute;o a los destinos de la Zona 3 se basan en un rango de pesos de los pedidos. Ejemplo: 0.5:60.70,... Pesos/Total menor o igual a 0.5 costar&iacute;a 60.70 para destinos de la Zona 3.');

define('MODULE_SHIPPING_UPSE_COUNTRIES_4_TITLE' , 'Pa&iacute;ses de la Zona 4 de UPS Express');
define('MODULE_SHIPPING_UPSE_COUNTRIES_4_DESC' , 'Lista separada por comas de c&oacute;digos de pa&iacute;s ISO de dos caracteres que forman parte de la Zona 4 (Entre en WORLD para el resto del mundo.)');
define('MODULE_SHIPPING_UPSE_COST_4_TITLE' , 'Tabla de env&iacute;o de UPS Express Zone 4');
define('MODULE_SHIPPING_UPSE_COST_4_DESC' , 'Las tarifas de env&iacute;o a los destinos de la zona 4 se basan en un rango de pesos de los pedidos. Ejemplo: 0.5:66.90,... Pesos/Total menor o igual a 0.5 costar&iacute;a 66.90 para destinos de la Zona 4.');

define('MODULE_SHIPPING_UPSE_COUNTRIES_5_TITLE' , 'Pa&iacute;ses de la Zona 41 de UPS Express');
define('MODULE_SHIPPING_UPSE_COUNTRIES_5_DESC' , 'Lista separada por comas de c&oacute;digos de pa&iacute;s ISO de dos caracteres que forman parte de la Zona 41 (Entre en WORLD para el resto del mundo.)');
define('MODULE_SHIPPING_UPSE_COST_5_TITLE' , 'Tabla de env&iacute;o de UPS Express Zone 41');
define('MODULE_SHIPPING_UPSE_COST_5_DESC' , 'Las tarifas de env&iacute;o a los destinos de la Zona 41 se basan en un rango de pesos de los pedidos. Ejemplo: 0.5:82.10,... Pesos/Total menor o igual a 0.5 costar&iacute;a 82.10 para los destinos de la Zona 41.');

define('MODULE_SHIPPING_UPSE_COUNTRIES_6_TITLE' , 'Pa&iacute;ses de la Zona 42 de UPS Express');
define('MODULE_SHIPPING_UPSE_COUNTRIES_6_DESC' , 'Lista separada por comas de c&oacute;digos de pa&iacute;s ISO de dos caracteres que forman parte de la Zona 42 (Entre en WORLD para el resto del mundo.)');
define('MODULE_SHIPPING_UPSE_COST_6_TITLE' , 'Tabla de env&iacute;o de UPS Express Zone 42');
define('MODULE_SHIPPING_UPSE_COST_6_DESC' , 'Las tarifas de env&iacute;o a los destinos de la Zona 42 se basan en un rango de pesos de los pedidos. Ejemplo: 0.5:82.90,... Pesos/Total menor o igual a 0.5 costar&iacute;a 82.90 para destinos de la Zona 42.');

define('MODULE_SHIPPING_UPSE_COUNTRIES_7_TITLE' , 'Pa&iacute;ses de la Zona 5 de UPS Express');
define('MODULE_SHIPPING_UPSE_COUNTRIES_7_DESC' , 'Lista separada por comas de c&oacute;digos de pa&iacute;s ISO de dos caracteres que forman parte de la Zona 5 (Entre en WORLD para el resto del mundo.)');
define('MODULE_SHIPPING_UPSE_COST_7_TITLE' , 'Tabla de env&iacute;o de UPS Express Zone 5');
define('MODULE_SHIPPING_UPSE_COST_7_DESC' , 'Las tarifas de env&iacute;o a los destinos de la zona 5 se basan en un rango de pesos de los pedidos. Ejemplo: 0.5:59.00,... Pesos/Total menor o igual a 0.5 costar&iacute;a 59.00 para destinos de la Zona 5.');

define('MODULE_SHIPPING_UPSE_COUNTRIES_8_TITLE' , 'Pa&iacute;ses de la Zona 6 de UPS Express');
define('MODULE_SHIPPING_UPSE_COUNTRIES_8_DESC' , 'Lista separada por comas de c&oacute;digos de pa&iacute;s ISO de dos caracteres que forman parte de la Zona 6 (Entre en WORLD para el resto del mundo.)');
define('MODULE_SHIPPING_UPSE_COST_8_TITLE' , 'Tabla de env&iacute;o de UPS Express Zone 6');
define('MODULE_SHIPPING_UPSE_COST_8_DESC' , 'Las tarifas de env&iacute;o a los destinos de la Zona 6 se basan en un rango de pesos de los pedidos. Ejemplo: 0.5:84.50,... Pesos/Total menor o igual a 0.5 costar&iacute;a 84.50 para los destinos de la Zona 6.');

define('MODULE_SHIPPING_UPSE_COUNTRIES_9_TITLE' , 'Pa&iacute;ses de la Zona 7 de UPS Express');
define('MODULE_SHIPPING_UPSE_COUNTRIES_9_DESC' , 'Lista separada por comas de c&oacute;digos de pa&iacute;s ISO de dos caracteres que forman parte de la Zona 7 (Entre en WORLD para el resto del mundo.)');
define('MODULE_SHIPPING_UPSE_COST_9_TITLE' , 'Tabla de env&iacute;o de UPS Express Zone 7');
define('MODULE_SHIPPING_UPSE_COST_9_DESC' , 'Las tarifas de env&iacute;o a los destinos de la Zona 7 se basan en un rango de pesos de los pedidos. Ejemplo: 0.5:71.85,... Pesos/Total menor o igual a 0.5 costar&iacute;a 71.85 para destinos de la Zona 7.');

define('MODULE_SHIPPING_UPSE_COUNTRIES_10_TITLE' , 'Pa&iacute;ses de la Zona 8 de UPS Express');
define('MODULE_SHIPPING_UPSE_COUNTRIES_10_DESC' , 'Lista separada por comas de c&oacute;digos de pa&iacute;s ISO de dos caracteres que forman parte de la Zona 8 (Entre en WORLD para el resto del mundo.)');
define('MODULE_SHIPPING_UPSE_COST_10_TITLE' , 'Tabla de env&iacute;o de UPS Express Zone 8');
define('MODULE_SHIPPING_UPSE_COST_10_DESC' , 'Las tarifas de env&iacute;o a los destinos de la Zona 8 se basan en un rango de pesos de los pedidos. Ejemplo: 0.5:80.05,... Pesos/Total menor o igual a 0.5 costar&iacute;a 80.05 para destinos de la Zona 8.');

define('MODULE_SHIPPING_UPSE_COUNTRIES_11_TITLE' , 'Pa&iacute;ses de la Zona 9 de UPS Express');
define('MODULE_SHIPPING_UPSE_COUNTRIES_11_DESC' , 'Lista separada por comas de c&oacute;digos de pa&iacute;s ISO de dos caracteres que forman parte de la Zona 9 (Entre en WORLD para el resto del mundo.)');
define('MODULE_SHIPPING_UPSE_COST_11_TITLE' , 'Tabla de env&iacute;o de UPS Express Zone 9');
define('MODULE_SHIPPING_UPSE_COST_11_DESC' , 'Las tarifas de env&iacute;o a los destinos de la zona 9 se basan en un rango de pesos de los pedidos. Ejemplo: 0.5:85.20,... Pesos/Total menor o igual a 0.5 costar&iacute;a 85.20 para destinos de la Zona 9.');

define('MODULE_SHIPPING_UPSE_COUNTRIES_12_TITLE' , 'Pa&iacute;ses de la Zona 10 de UPS Express');
define('MODULE_SHIPPING_UPSE_COUNTRIES_12_DESC' , 'Lista separada por comas de c&oacute;digos de pa&iacute;s ISO de dos caracteres que forman parte de la Zona 10 (Entre en WORLD para el resto del mundo.)');
define('MODULE_SHIPPING_UPSE_COST_12_TITLE' , 'Tabla de env&iacute;o de UPS Express Zone 10');
define('MODULE_SHIPPING_UPSE_COST_12_DESC' , 'Las tarifas de env&iacute;o a los destinos de la zona 10 se basan en un rango de pesos de los pedidos. Ejemplo: 0.5:93.10,... Pesos/Total menor o igual a 0.5 costar&iacute;a 93.10 para los destinos de la Zona 10.');

define('MODULE_SHIPPING_UPSE_COUNTRIES_13_TITLE' , 'Pa&iacute;ses de la Zona 11 de UPS Express');
define('MODULE_SHIPPING_UPSE_COUNTRIES_13_DESC' , 'Lista separada por comas de c&oacute;digos de pa&iacute;s ISO de dos caracteres que forman parte de la Zona 11 (Entre en WORLD para el resto del mundo.)');
define('MODULE_SHIPPING_UPSE_COST_13_TITLE' , 'Tabla de env&iacute;o de UPS Express Zone 11');
define('MODULE_SHIPPING_UPSE_COST_13_DESC' , 'Las tarifas de env&iacute;o a los destinos de la zona 11 se basan en un rango de pesos de los pedidos. Ejemplo: 0.5:103.50,... Pesos/Total menor o igual a 0.5 costar&iacute;a 103.50 para los destinos de la Zona 11.');

define('MODULE_SHIPPING_UPSE_COUNTRIES_14_TITLE' , 'Pa&iacute;ses de la Zona 12 de UPS Express');
define('MODULE_SHIPPING_UPSE_COUNTRIES_14_DESC' , 'Lista separada por comas de c&oacute;digos de pa&iacute;s ISO de dos caracteres que forman parte de la Zona 12 (Entre en WORLD para el resto del mundo.)');
define('MODULE_SHIPPING_UPSE_COST_14_TITLE' , 'Tabla de env&iacute;o de UPS Express Zone 12');
define('MODULE_SHIPPING_UPSE_COST_14_DESC' , 'Las tarifas de env&iacute;o a los destinos de la zona 12 se basan en un rango de pesos de los pedidos. Ejemplo: 0.5:105.20,... Pesos/Total menor o igual a 0.5 costar&iacute;a 105.20 para destinos de la Zona 12.');
?>
