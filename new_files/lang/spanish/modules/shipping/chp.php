<?php
/* -----------------------------------------------------------------------------------------
   $Id: chp.php 5123 2013-07-18 11:49:11Z Tomcraft $   

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   -----------------------------------------------------------------------------------------
   based on: 
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(chp.php,v 1.01 2003/02/18 03:30:00); www.oscommerce.com 
   (c) 2003	 nextcommerce (chp.php,v 1.4 2003/08/1); www.nextcommerce.org
   (c) 2006 xt:Commerce; www.xt-commerce.com

   Released under the GNU General Public License 
   -----------------------------------------------------------------------------------------
   Third Party contributions:
   swiss_post_1.02       	Autor:	Copyright (C) 2002 - 2003 TheMedia, Dipl.-Ing Thomas Pl�nkers | http://www.themedia.at & http://www.oscommerce.at

   Released under the GNU General Public License 
   ---------------------------------------------------------------------------------------*/


define('MODULE_SHIPPING_CHP_TEXT_TITLE', 'Swiss Post');
define('MODULE_SHIPPING_CHP_TEXT_DESCRIPTION', 'Swiss Post');
define('MODULE_SHIPPING_CHP_TEXT_WAY', 'Despacho a');
define('MODULE_SHIPPING_CHP_TEXT_UNITS', 'kg');
define('MODULE_SHIPPING_CHP_INVALID_ZONE', 'Desafortunadamente no es posible enviar a este pa&iacute;s');
define('MODULE_SHIPPING_CHP_UNDEFINED_RATE', 'Los gastos de env&iacute;o no pueden ser calculados por el momento.');

define('MODULE_SHIPPING_CHP_STATUS_TITLE' , 'Swiss Post');
define('MODULE_SHIPPING_CHP_STATUS_DESC' , '&iquest;Le gustar&iacute;a ofrecer el env&iacute;o con The Swiss Post?');
define('MODULE_SHIPPING_CHP_HANDLING_TITLE' , 'Cuota de manejo');
define('MODULE_SHIPPING_CHP_HANDLING_DESC' , 'Tarifa de manejo en CHF');
define('MODULE_SHIPPING_CHP_TAX_CLASS_TITLE' , 'Impuesto');
define('MODULE_SHIPPING_CHP_TAX_CLASS_DESC' , 'Por favor, elija la tasa de impuestos para el env&iacute;o.');
define('MODULE_SHIPPING_CHP_ZONE_TITLE' , 'Zona de env&iacute;o');
define('MODULE_SHIPPING_CHP_ZONE_DESC' , 'Si eliges una zona s&oacute;lo se utilizan estas zonas de env&iacute;o.');
define('MODULE_SHIPPING_CHP_SORT_ORDER_TITLE' , 'Orden de exhibici&oacute;n');
define('MODULE_SHIPPING_CHP_SORT_ORDER_DESC' , 'El m&aacute;s bajo se muestra primero.');
define('MODULE_SHIPPING_CHP_ALLOWED_TITLE' , 'Zonas de embarque individuales');
define('MODULE_SHIPPING_CHP_ALLOWED_DESC' , 'Por favor, introduzca las zonas <b>por separado</b> que deben ser permitidas para utilizar este m&oacute;dulo (por ejemplo, AT, DE (deje vac&iacute;o si quiere permitir todas las zonas))');

define('MODULE_SHIPPING_CHP_COUNTRIES_1_TITLE' , 'Pa&iacute;ses de la zona 0');
define('MODULE_SHIPPING_CHP_COUNTRIES_1_DESC' , 'Zona interior');
define('MODULE_SHIPPING_CHP_COST_ECO_1_TITLE' , 'Tabla de la Zona 0 para env&iacute;os de hasta 30 kg ECO');
define('MODULE_SHIPPING_CHP_COST_ECO_1_DESC' , 'Tabla de env&iacute;o para la zona interior, basada en <b>\'ECO\'</b> hasta 30 kg de peso de env&iacute;o.');
define('MODULE_SHIPPING_CHP_COST_PRI_1_TITLE' , 'Tabla de la Zona 0 para env&iacute;os de hasta 30 kg PRI');
define('MODULE_SHIPPING_CHP_COST_PRI_1_DESC' , 'Tabla de env&iacute;o para la zona interior, basada en el <b>\'PRI\'</b> hasta 30 kg de peso de env&iacute;o.');

define('MODULE_SHIPPING_CHP_COUNTRIES_2_TITLE' , 'Pa&iacute;ses de la zona 1');
define('MODULE_SHIPPING_CHP_COUNTRIES_2_DESC' , 'Lista separada por comas de los c&oacute;digos de pa&iacute;s ISO de dos caracteres que forman parte de la Zona 1 (Entra en WORLD para el resto del mundo.).');
define('MODULE_SHIPPING_CHP_COST_ECO_2_TITLE' , 'Tabla de la Zona 1 para env&iacute;os de hasta 30 kg ECO');
define('MODULE_SHIPPING_CHP_COST_ECO_2_DESC' , 'Tabla de env&iacute;o para la Zona 1, basada en <b>\'ECO\'</b> hasta 30 kg de peso de env&iacute;o.');
define('MODULE_SHIPPING_CHP_COST_PRI_2_TITLE' , 'Tabla de la Zona 1 para env&iacute;os de hasta 30 kg PRI');
define('MODULE_SHIPPING_CHP_COST_PRI_2_DESC' , 'Tabla de env&iacute;o para la Zona 1, Tabla de env&iacute;o para la Zona 1, basada en <b>\'PRI\'</b> hasta 30 kg de peso de env&iacute;o.');
define('MODULE_SHIPPING_CHP_COST_URG_2_TITLE' , 'Tabla de la Zona 1 para env&iacute;os de hasta 30 kg URG');
define('MODULE_SHIPPING_CHP_COST_URG_2_DESC' , 'Tabla de env&iacute;o para la Zona 1, basada en <b>\'URG\'</b> hasta 30 kg de peso de env&iacute;o.');

define('MODULE_SHIPPING_CHP_COUNTRIES_3_TITLE' , 'Pa&iacute;ses de la zona 2');
define('MODULE_SHIPPING_CHP_COUNTRIES_3_DESC' , 'Lista separada por comas de los c&oacute;digos de pa&iacute;s ISO de dos caracteres que forman parte de la Zona 2 (Entra en WORLD para el resto del mundo.).');
define('MODULE_SHIPPING_CHP_COST_ECO_3_TITLE' , 'Tabla de la Zona 2 para env&iacute;os de hasta 30 kg ECO');
define('MODULE_SHIPPING_CHP_COST_ECO_3_DESC' , 'Tabla de env&iacute;o para la Zona 2, basada en <b>\'ECO\'</b> hasta 30 kg de peso de env&iacute;o.');
define('MODULE_SHIPPING_CHP_COST_PRI_3_TITLE' , 'Tabla de la Zona 2 para env&iacute;os de hasta 30 kg PRI');
define('MODULE_SHIPPING_CHP_COST_PRI_3_DESC' , 'Tabla de env&iacute;o para la Zona 2, Tabla de env&iacute;o para la Zona 1, basada en <b>\'PRI\'</b> hasta 30 kg de peso de env&iacute;o.');
define('MODULE_SHIPPING_CHP_COST_URG_3_TITLE' , 'Tabla de la Zona 2 para env&iacute;os de hasta 30 kg URG');
define('MODULE_SHIPPING_CHP_COST_URG_3_DESC' , 'Tabla de env&iacute;o para la Zona 2, basada en <b>\'URG\'</b> hasta 30 kg de peso de env&iacute;o.');

define('MODULE_SHIPPING_CHP_COUNTRIES_4_TITLE' , 'Pa&iacute;ses de la zona 3');
define('MODULE_SHIPPING_CHP_COUNTRIES_4_DESC' , 'Lista separada por comas de los c&oacute;digos de pa&iacute;s ISO de dos caracteres que forman parte de la Zona 3 (Entra en WORLD para el resto del mundo.).');
define('MODULE_SHIPPING_CHP_COST_ECO_4_TITLE' , 'Tabla de la Zona 3 para env&iacute;os de hasta 30 kg ECO');
define('MODULE_SHIPPING_CHP_COST_ECO_4_DESC' , 'Tabla de env&iacute;o para la Zona 3, basada en <b>\'ECO\'</b> hasta 30 kg de peso de env&iacute;o.');
define('MODULE_SHIPPING_CHP_COST_PRI_4_TITLE' , 'Tabla de la Zona 3 para env&iacute;os de hasta 30 kg PRI');
define('MODULE_SHIPPING_CHP_COST_PRI_4_DESC' , 'Tabla de env&iacute;o para la Zona 3, Tabla de env&iacute;o para la Zona 1, basada en <b>\'PRI\'</b> hasta 30 kg de peso de env&iacute;o.');
define('MODULE_SHIPPING_CHP_COST_URG_4_TITLE' , 'Tabla de la Zona 3 para env&iacute;os de hasta 30 kg URG');
define('MODULE_SHIPPING_CHP_COST_URG_4_DESC' , 'Tabla de env&iacute;o para la Zona 3, basada en <b>\'URG\'</b> hasta 30 kg de peso de env&iacute;o.');

define('MODULE_SHIPPING_CHP_COUNTRIES_5_TITLE' , 'Pa&iacute;ses de la zona 4');
define('MODULE_SHIPPING_CHP_COUNTRIES_5_DESC' , 'Lista separada por comas de los c&oacute;digos de pa&iacute;s ISO de dos caracteres que forman parte de la Zona 4 (Entra en WORLD para el resto del mundo.).');
define('MODULE_SHIPPING_CHP_COST_ECO_5_TITLE' , 'Tabla de la Zona 4 para env&iacute;os de hasta 30 kg ECO');
define('MODULE_SHIPPING_CHP_COST_ECO_5_DESC' , 'Tabla de env&iacute;o para la Zona 4, basada en <b>\'ECO\'</b> hasta 30 kg de peso de env&iacute;o.');
define('MODULE_SHIPPING_CHP_COST_PRI_5_TITLE' , 'Tabla de la Zona 4 para env&iacute;os de hasta 30 kg PRI');
define('MODULE_SHIPPING_CHP_COST_PRI_5_DESC' , 'Tabla de env&iacute;o para la Zona 4, Tabla de env&iacute;o para la Zona 1, basada en <b>\'PRI\'</b> hasta 30 kg de peso de env&iacute;o.');
define('MODULE_SHIPPING_CHP_COST_URG_5_TITLE' , 'Tabla de la Zona 4 para env&iacute;os de hasta 30 kg URG');
define('MODULE_SHIPPING_CHP_COST_URG_5_DESC' , 'Tabla de env&iacute;o para la Zona 4, basada en <b>\'URG\'</b> hasta 30 kg de peso de env&iacute;o.');

define('MODULE_SHIPPING_CHP_COUNTRIES_6_TITLE' , 'Pa&iacute;ses de la zona 4');
define('MODULE_SHIPPING_CHP_COUNTRIES_6_DESC' , 'Lista separada por comas de los c&oacute;digos de pa&iacute;s ISO de dos caracteres que forman parte de la Zona 4 (Entra en WORLD para el resto del mundo.).');
define('MODULE_SHIPPING_CHP_COST_ECO_6_TITLE' , 'Tabla de la Zona 4 para env&iacute;os de hasta 30 kg ECO');
define('MODULE_SHIPPING_CHP_COST_ECO_6_DESC' , 'Tabla de env&iacute;o para la Zona 4, basada en <b>\'ECO\'</b> hasta 30 kg de peso de env&iacute;o.');
define('MODULE_SHIPPING_CHP_COST_PRI_6_TITLE' , 'Tabla de la Zona 4 para env&iacute;os de hasta 30 kg PRI');
define('MODULE_SHIPPING_CHP_COST_PRI_6_DESC' , 'Tabla de env&iacute;o para la Zona 4, Tabla de env&iacute;o para la Zona 1, basada en <b>\'PRI\'</b> hasta 30 kg de peso de env&iacute;o.');
define('MODULE_SHIPPING_CHP_COST_URG_6_TITLE' , 'Tabla de la Zona 4 para env&iacute;os de hasta 30 kg URG');
define('MODULE_SHIPPING_CHP_COST_URG_6_DESC' , 'Tabla de env&iacute;o para la Zona 4, basada en <b>\'URG\'</b> hasta 30 kg de peso de env&iacute;o.');

define('MODULE_SHIPPING_CHP_COUNTRIES_7_TITLE' , 'Pa&iacute;ses de la zona 5');
define('MODULE_SHIPPING_CHP_COUNTRIES_7_DESC' , 'Lista separada por comas de los c&oacute;digos de pa&iacute;s ISO de dos caracteres que forman parte de la Zona 5 (Entra en WORLD para el resto del mundo.).');
define('MODULE_SHIPPING_CHP_COST_ECO_7_TITLE' , 'Tabla de la Zona 5 para env&iacute;os de hasta 30 kg ECO');
define('MODULE_SHIPPING_CHP_COST_ECO_7_DESC' , 'Tabla de env&iacute;o para la Zona 5, basada en <b>\'ECO\'</b> hasta 30 kg de peso de env&iacute;o.');
define('MODULE_SHIPPING_CHP_COST_PRI_7_TITLE' , 'Tabla de la Zona 5 para env&iacute;os de hasta 30 kg PRI');
define('MODULE_SHIPPING_CHP_COST_PRI_7_DESC' , 'Tabla de env&iacute;o para la Zona 5, Tabla de env&iacute;o para la Zona 1, basada en <b>\'PRI\'</b> hasta 30 kg de peso de env&iacute;o.');
define('MODULE_SHIPPING_CHP_COST_URG_7_TITLE' , 'Tabla de la Zona 5 para env&iacute;os de hasta 30 kg URG');
define('MODULE_SHIPPING_CHP_COST_URG_7_DESC' , 'Tabla de env&iacute;o para la Zona 5, basada en <b>\'URG\'</b> hasta 30 kg de peso de env&iacute;o.');
?>