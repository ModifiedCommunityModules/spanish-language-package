<?php
/* -----------------------------------------------------------------------------------------
   $Id: fedexeu.php 5123 2013-07-18 11:49:11Z Tomcraft $

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



define('MODULE_SHIPPING_FEDEXEU_TEXT_TITLE', 'FedEx Express Europa');
define('MODULE_SHIPPING_FEDEXEU_TEXT_DESCRIPTION', 'FedEx Express Europa');
define('MODULE_SHIPPING_FEDEXEU_TEXT_WAY', 'Despacho a');
define('MODULE_SHIPPING_FEDEXEU_TEXT_UNITS', 'kg');
define('MODULE_SHIPPING_FEDEXEU_INVALID_ZONE', 'Desafortunadamente no es posible enviar a este pa&iacute;s');
define('MODULE_SHIPPING_FEDEXEU_UNDEFINED_RATE', 'Los gastos de env&iacute;o no pueden ser calculados por el momento.');

define('MODULE_SHIPPING_FEDEXEU_STATUS_TITLE' , 'FedEx Express Europe');
define('MODULE_SHIPPING_FEDEXEU_STATUS_DESC' , '&iquest;Quieres ofrecer el env&iacute;o por FedEx Express Europa?');
define('MODULE_SHIPPING_FEDEXEU_HANDLING_TITLE' , 'Cuota de manejo');
define('MODULE_SHIPPING_FEDEXEU_HANDLING_DESC' , 'Gastos de tramitaci&oacute;n para este m&eacute;todo de env&iacute;o en euros');
define('MODULE_SHIPPING_FEDEXEU_TAX_CLASS_TITLE' , 'Tasa de impuestos');
define('MODULE_SHIPPING_FEDEXEU_TAX_CLASS_DESC' , 'Utilice la siguiente clase de impuestos en la tarifa de env&iacute;o.');
define('MODULE_SHIPPING_FEDEXEU_ZONE_TITLE' , 'Zona de env&iacute;o');
define('MODULE_SHIPPING_FEDEXEU_ZONE_DESC' , 'Si se selecciona una zona, s&oacute;lo se debe habilitar este m&eacute;todo de env&iacute;o para esa zona.');
define('MODULE_SHIPPING_FEDEXEU_SORT_ORDER_TITLE' , 'Orden de clasificaci&oacute;n');
define('MODULE_SHIPPING_FEDEXEU_SORT_ORDER_DESC' , 'Ordenar el orden de exhibici&oacute;n.');
define('MODULE_SHIPPING_FEDEXEU_ALLOWED_TITLE' , 'Zonas de env&iacute;o permitidas');
define('MODULE_SHIPPING_FEDEXEU_ALLOWED_DESC' , 'Por favor, introduzca las zonas <b>por separado</b> que deben ser permitidas para utilizar este m&oacute;dulo (por ejemplo, AT, DE (deje vac&iacute;o si quiere permitir todas las zonas))');

define('MODULE_SHIPPING_FEDEXEU_COUNTRIES_1_TITLE' , 'Pa&iacute;ses de la Zona 1 de Europa');
define('MODULE_SHIPPING_FEDEXEU_COUNTRIES_1_DESC' , 'Lista separada por comas de los c&oacute;digos de pa&iacute;s ISO de dos caracteres que forman parte de la Zona 1 (Entra en WORLD para el resto del mundo.).');
define('MODULE_SHIPPING_FEDEXEU_COST_PAK_1_TITLE' , 'Tabla de env&iacute;o para la zona 1 hasta 2,50 kg PAK');
define('MODULE_SHIPPING_FEDEXEU_COST_PAK_1_DESC' , 'Tabla de env&iacute;o para la Zona 1, basada en <b>\'PAK\'</b> hasta 2,50 kg de peso de env&iacute;o.');
define('MODULE_SHIPPING_FEDEXEU_COST_ENV_1_TITLE' , 'Tabla de env&iacute;o para la Zona 1 hasta 0.50 kg ENV');
define('MODULE_SHIPPING_FEDEXEU_COST_ENV_1_DESC' , 'Tabla de env&iacute;o para la zona 1, basada en <b>\'ENV\'</b> hasta 60 p&aacute;ginas DIN A4 y 0,50 kg de peso de env&iacute;o.');
define('MODULE_SHIPPING_FEDEXEU_COST_BOX_1_TITLE' , 'Tabla de env&iacute;o para la zona 1 hasta 10 kg BOX');
define('MODULE_SHIPPING_FEDEXEU_COST_BOX_1_DESC' , 'Tabla de env&iacute;o para la zona 1, basado en <b>\'BOX\'</b> hasta 10 kg de peso de env&iacute;o.');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_20_1_TITLE' , 'Cargo extra hasta 20 kg BOX');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_20_1_DESC' , 'Cargo extra por cada 0,50 kg. adicionales en EUR');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_40_1_TITLE' , 'Cargo extra hasta 40 kg BOX');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_40_1_DESC' , 'Cargo extra por cada 0,50 kg. adicionales en EUR');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_70_1_TITLE' , 'Cargo extra hasta 70 kg BOX');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_70_1_DESC' , 'Cargo extra por cada 0,50 kg. adicionales en EUR');

define('MODULE_SHIPPING_FEDEXEU_COUNTRIES_2_TITLE' , 'Pa&iacute;ses de la Zona 2 de Europa');
define('MODULE_SHIPPING_FEDEXEU_COUNTRIES_2_DESC' , 'Lista separada por comas de los c&oacute;digos de pa&iacute;s ISO de dos caracteres que forman parte de la Zona 2 (Entra en WORLD para el resto del mundo.).');
define('MODULE_SHIPPING_FEDEXEU_COST_PAK_2_TITLE' , 'Tabla de env&iacute;o para la zona 2 hasta 2,50 kg PAK');
define('MODULE_SHIPPING_FEDEXEU_COST_PAK_2_DESC' , 'Tabla de env&iacute;o para la Zona 2, basada en <b>\'PAK\'</b> hasta 2,50 kg de peso de env&iacute;o.');
define('MODULE_SHIPPING_FEDEXEU_COST_ENV_2_TITLE' , 'Tabla de env&iacute;o para la Zona 2 hasta 0.50 kg ENV');
define('MODULE_SHIPPING_FEDEXEU_COST_ENV_2_DESC' , 'Tabla de env&iacute;o para la zona 2, basada en <b>\'ENV\'</b> hasta 60 p&aacute;ginas DIN A4 y 0,50 kg de peso de env&iacute;o.');
define('MODULE_SHIPPING_FEDEXEU_COST_BOX_2_TITLE' , 'Tabla de env&iacute;o para la zona 2 hasta 10 kg BOX');
define('MODULE_SHIPPING_FEDEXEU_COST_BOX_2_DESC' , 'Tabla de env&iacute;o para la zona 2, basado en <b>\'BOX\'</b> hasta 10 kg de peso de env&iacute;o.');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_20_2_TITLE' , 'Cargo extra hasta 20 kg BOX');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_20_2_DESC' , 'Cargo extra por cada 0,50 kg. adicionales en EUR');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_40_2_TITLE' , 'Cargo extra hasta 40 kg BOX');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_40_2_DESC' , 'Cargo extra por cada 0,50 kg. adicionales en EUR');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_70_2_TITLE' , 'Cargo extra hasta 70 kg BOX');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_70_2_DESC' , 'Cargo extra por cada 0,50 kg. adicionales en EUR');

define('MODULE_SHIPPING_FEDEXEU_COUNTRIES_3_TITLE' , 'Pa&iacute;ses de la Zona 3 de Europa');
define('MODULE_SHIPPING_FEDEXEU_COUNTRIES_3_DESC' , 'Lista separada por comas de los c&oacute;digos de pa&iacute;s ISO de dos caracteres que forman parte de la Zona 3 (Entra en WORLD para el resto del mundo.).');
define('MODULE_SHIPPING_FEDEXEU_COST_PAK_3_TITLE' , 'Tabla de env&iacute;o para la zona 3 hasta 2,50 kg PAK');
define('MODULE_SHIPPING_FEDEXEU_COST_PAK_3_DESC' , 'Tabla de env&iacute;o para la Zona 3, basada en <b>\'PAK\'</b> hasta 2,50 kg de peso de env&iacute;o.');
define('MODULE_SHIPPING_FEDEXEU_COST_ENV_3_TITLE' , 'Tabla de env&iacute;o para la Zona 3 hasta 0.50 kg ENV');
define('MODULE_SHIPPING_FEDEXEU_COST_ENV_3_DESC' , 'Tabla de env&iacute;o para la zona 3, basada en <b>\'ENV\'</b> hasta 60 p&aacute;ginas DIN A4 y 0,50 kg de peso de env&iacute;o.');
define('MODULE_SHIPPING_FEDEXEU_COST_BOX_3_TITLE' , 'Tabla de env&iacute;o para la zona 3 hasta 10 kg BOX');
define('MODULE_SHIPPING_FEDEXEU_COST_BOX_3_DESC' , 'Tabla de env&iacute;o para la zona 3, basado en <b>\'BOX\'</b> hasta 10 kg de peso de env&iacute;o.');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_20_3_TITLE' , 'Cargo extra hasta 20 kg BOX');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_20_3_DESC' , 'Cargo extra por cada 0,50 kg. adicionales en EUR');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_40_3_TITLE' , 'Cargo extra hasta 40 kg BOX');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_40_3_DESC' , 'Cargo extra por cada 0,50 kg. adicionales en EUR');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_70_3_TITLE' , 'Cargo extra hasta 70 kg BOX');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_70_3_DESC' , 'Cargo extra por cada 0,50 kg. adicionales en EUR');

define('MODULE_SHIPPING_FEDEXEU_COUNTRIES_4_TITLE' , 'Pa&iacute;ses de la Zona A del mundo');
define('MODULE_SHIPPING_FEDEXEU_COUNTRIES_4_DESC' , 'Lista separada por comas de los c&oacute;digos de pa&iacute;s ISO de dos caracteres que forman parte del Mundo de la Zona A (Entra en WORLD para el resto del mundo.).');
define('MODULE_SHIPPING_FEDEXEU_COST_PAK_4_TITLE' , 'Tabla de env&iacute;o para la zona A hasta 2,50 kg PAK');
define('MODULE_SHIPPING_FEDEXEU_COST_PAK_4_DESC' , 'Tabla de env&iacute;o para la Zona A, basada en <b>\'PAK\'</b> hasta 2,50 kg de peso de env&iacute;o.');
define('MODULE_SHIPPING_FEDEXEU_COST_ENV_4_TITLE' , 'Tabla de env&iacute;o para la Zona A hasta 0.50 kg ENV');
define('MODULE_SHIPPING_FEDEXEU_COST_ENV_4_DESC' , 'Tabla de env&iacute;o para la zona A, basada en <b>\'ENV\'</b> hasta 60 p&aacute;ginas DIN A4 y 0,50 kg de peso de env&iacute;o.');
define('MODULE_SHIPPING_FEDEXEU_COST_BOX_4_TITLE' , 'Tabla de env&iacute;o para la zona A hasta 10 kg BOX');
define('MODULE_SHIPPING_FEDEXEU_COST_BOX_4_DESC' , 'Tabla de env&iacute;o para la zona A, basado en <b>\'BOX\'</b> hasta 10 kg de peso de env&iacute;o.');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_20_4_TITLE' , 'Cargo extra hasta 20 kg BOX');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_20_4_DESC' , 'Cargo extra por cada 0,50 kg. adicionales en EUR');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_40_4_TITLE' , 'Cargo extra hasta 40 kg BOX');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_40_4_DESC' , 'Cargo extra por cada 0,50 kg. adicionales en EUR');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_70_4_TITLE' , 'Cargo extra hasta 70 kg BOX');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_70_4_DESC' , 'Cargo extra por cada 0,50 kg. adicionales en EUR');

define('MODULE_SHIPPING_FEDEXEU_COUNTRIES_5_TITLE' , 'Pa&iacute;ses de la Zona B del mundo');
define('MODULE_SHIPPING_FEDEXEU_COUNTRIES_5_DESC' , 'Lista separada por comas de los c&oacute;digos de pa&iacute;s ISO de dos caracteres que forman parte del Mundo de la Zona B (Entra en WORLD para el resto del mundo.).');
define('MODULE_SHIPPING_FEDEXEU_COST_PAK_5_TITLE' , 'Tabla de env&iacute;o para la zona B hasta 2,50 kg PAK');
define('MODULE_SHIPPING_FEDEXEU_COST_PAK_5_DESC' , 'Tabla de env&iacute;o para la Zona B, basada en <b>\'PAK\'</b> hasta 2,50 kg de peso de env&iacute;o.');
define('MODULE_SHIPPING_FEDEXEU_COST_ENV_5_TITLE' , 'Tabla de env&iacute;o para la Zona B hasta 0.50 kg ENV');
define('MODULE_SHIPPING_FEDEXEU_COST_ENV_5_DESC' , 'Tabla de env&iacute;o para la zona B, basada en <b>\'ENV\'</b> hasta 60 p&aacute;ginas DIN A4 y 0,50 kg de peso de env&iacute;o.');
define('MODULE_SHIPPING_FEDEXEU_COST_BOX_5_TITLE' , 'Tabla de env&iacute;o para la zona B hasta 10 kg BOX');
define('MODULE_SHIPPING_FEDEXEU_COST_BOX_5_DESC' , 'Tabla de env&iacute;o para la zona B, basado en <b>\'BOX\'</b> hasta 10 kg de peso de env&iacute;o.');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_20_5_TITLE' , 'Cargo extra hasta 20 kg BOX');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_20_5_DESC' , 'Cargo extra por cada 0,50 kg. adicionales en EUR');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_40_5_TITLE' , 'Cargo extra hasta 40 kg BOX');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_40_5_DESC' , 'Cargo extra por cada 0,50 kg. adicionales en EUR');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_70_5_TITLE' , 'Cargo extra hasta 70 kg BOX');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_70_5_DESC' , 'Cargo extra por cada 0,50 kg. adicionales en EUR');

define('MODULE_SHIPPING_FEDEXEU_COUNTRIES_6_TITLE' , 'Pa&iacute;ses de la Zona C del mundo');
define('MODULE_SHIPPING_FEDEXEU_COUNTRIES_6_DESC' , 'Lista separada por comas de los c&oacute;digos de pa&iacute;s ISO de dos caracteres que forman parte del Mundo de la Zona C (Entra en WORLD para el resto del mundo.).');
define('MODULE_SHIPPING_FEDEXEU_COST_PAK_6_TITLE' , 'Tabla de env&iacute;o para la zona C hasta 2,50 kg PAK');
define('MODULE_SHIPPING_FEDEXEU_COST_PAK_6_DESC' , 'Tabla de env&iacute;o para la Zona C, basada en <b>\'PAK\'</b> hasta 2,50 kg de peso de env&iacute;o.');
define('MODULE_SHIPPING_FEDEXEU_COST_ENV_6_TITLE' , 'Tabla de env&iacute;o para la Zona C hasta 0.50 kg ENV');
define('MODULE_SHIPPING_FEDEXEU_COST_ENV_6_DESC' , 'Tabla de env&iacute;o para la zona C, basada en <b>\'ENV\'</b> hasta 60 p&aacute;ginas DIN A4 y 0,50 kg de peso de env&iacute;o.');
define('MODULE_SHIPPING_FEDEXEU_COST_BOX_6_TITLE' , 'Tabla de env&iacute;o para la zona C hasta 10 kg BOX');
define('MODULE_SHIPPING_FEDEXEU_COST_BOX_6_DESC' , 'Tabla de env&iacute;o para la zona C, basado en <b>\'BOX\'</b> hasta 10 kg de peso de env&iacute;o.');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_20_6_TITLE' , 'Cargo extra hasta 20 kg BOX');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_20_6_DESC' , 'Cargo extra por cada 0,50 kg. adicionales en EUR');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_40_6_TITLE' , 'Cargo extra hasta 40 kg BOX');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_40_6_DESC' , 'Cargo extra por cada 0,50 kg. adicionales en EUR');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_70_6_TITLE' , 'Cargo extra hasta 70 kg BOX');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_70_6_DESC' , 'Cargo extra por cada 0,50 kg. adicionales en EUR');

define('MODULE_SHIPPING_FEDEXEU_COUNTRIES_7_TITLE' , 'Pa&iacute;ses de la Zona D del mundo');
define('MODULE_SHIPPING_FEDEXEU_COUNTRIES_7_DESC' , 'Lista separada por comas de los c&oacute;digos de pa&iacute;s ISO de dos caracteres que forman parte del Mundo de la Zona D (Entra en WORLD para el resto del mundo.).');
define('MODULE_SHIPPING_FEDEXEU_COST_PAK_7_TITLE' , 'Tabla de env&iacute;o para la zona D hasta 2,50 kg PAK');
define('MODULE_SHIPPING_FEDEXEU_COST_PAK_7_DESC' , 'Tabla de env&iacute;o para la Zona D, basada en <b>\'PAK\'</b> hasta 2,50 kg de peso de env&iacute;o.');
define('MODULE_SHIPPING_FEDEXEU_COST_ENV_7_TITLE' , 'Tabla de env&iacute;o para la Zona D hasta 0.50 kg ENV');
define('MODULE_SHIPPING_FEDEXEU_COST_ENV_7_DESC' , 'Tabla de env&iacute;o para la zona D, basada en <b>\'ENV\'</b> hasta 60 p&aacute;ginas DIN A4 y 0,50 kg de peso de env&iacute;o.');
define('MODULE_SHIPPING_FEDEXEU_COST_BOX_7_TITLE' , 'Tabla de env&iacute;o para la zona D hasta 10 kg BOX');
define('MODULE_SHIPPING_FEDEXEU_COST_BOX_7_DESC' , 'Tabla de env&iacute;o para la zona D, basado en <b>\'BOX\'</b> hasta 10 kg de peso de env&iacute;o.');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_20_7_TITLE' , 'Cargo extra hasta 20 kg BOX');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_20_7_DESC' , 'Cargo extra por cada 0,50 kg. adicionales en EUR');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_40_7_TITLE' , 'Cargo extra hasta 40 kg BOX');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_40_7_DESC' , 'Cargo extra por cada 0,50 kg. adicionales en EUR');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_70_7_TITLE' , 'Cargo extra hasta 70 kg BOX');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_70_7_DESC' , 'Cargo extra por cada 0,50 kg. adicionales en EUR');

define('MODULE_SHIPPING_FEDEXEU_COUNTRIES_8_TITLE' , 'Pa&iacute;ses de la Zona E del mundo');
define('MODULE_SHIPPING_FEDEXEU_COUNTRIES_8_DESC' , 'Lista separada por comas de los c&oacute;digos de pa&iacute;s ISO de dos caracteres que forman parte del Mundo de la Zona E (Entra en WORLD para el resto del mundo.).');
define('MODULE_SHIPPING_FEDEXEU_COST_PAK_8_TITLE' , 'Tabla de env&iacute;o para la zona E hasta 2,50 kg PAK');
define('MODULE_SHIPPING_FEDEXEU_COST_PAK_8_DESC' , 'Tabla de env&iacute;o para la Zona E, basada en <b>\'PAK\'</b> hasta 2,50 kg de peso de env&iacute;o.');
define('MODULE_SHIPPING_FEDEXEU_COST_ENV_8_TITLE' , 'Tabla de env&iacute;o para la Zona E hasta 0.50 kg ENV');
define('MODULE_SHIPPING_FEDEXEU_COST_ENV_8_DESC' , 'Tabla de env&iacute;o para la zona E, basada en <b>\'ENV\'</b> hasta 60 p&aacute;ginas DIN A4 y 0,50 kg de peso de env&iacute;o.');
define('MODULE_SHIPPING_FEDEXEU_COST_BOX_8_TITLE' , 'Tabla de env&iacute;o para la zona E hasta 10 kg BOX');
define('MODULE_SHIPPING_FEDEXEU_COST_BOX_8_DESC' , 'Tabla de env&iacute;o para la zona E, basado en <b>\'BOX\'</b> hasta 10 kg de peso de env&iacute;o.');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_20_8_TITLE' , 'Cargo extra hasta 20 kg BOX');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_20_8_DESC' , 'Cargo extra por cada 0,50 kg. adicionales en EUR');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_40_8_TITLE' , 'Cargo extra hasta 30 kg BOX');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_40_8_DESC' , 'Cargo extra por cada 0,50 kg. adicionales en EUR');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_70_8_TITLE' , 'Cargo extra hasta 50 kg BOX');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_70_8_DESC' , 'Cargo extra por cada 0,50 kg. adicionales en EUR');
?>