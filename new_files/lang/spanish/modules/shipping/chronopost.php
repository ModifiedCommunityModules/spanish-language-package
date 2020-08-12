<?php
/* -----------------------------------------------------------------------------------------
   $Id: chronopost.php 5121 2013-07-18 11:38:19Z Tomcraft $   

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   -----------------------------------------------------------------------------------------
   based on: 
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(chronopost.php,v 1.0 2002/04/01 07:07:45); www.oscommerce.com 
   (c) 2003	 nextcommerce (chronopost.php,v 1.4 2003/08/13); www.nextcommerce.org
   (c) 2006 xt:Commerce; www.xt-commerce.com

   Released under the GNU General Public License 
   -----------------------------------------------------------------------------------------
   Third Party contributions: 
   chronopost-1.0.1       	Autor:	devteam@e-network.fr | www.oscommerce-fr.info

   Released under the GNU General Public License 
   ---------------------------------------------------------------------------------------*/
   


define('MODULE_SHIPPING_CHRONOPOST_TEXT_TITLE', 'Chronopost Zone Rates');
define('MODULE_SHIPPING_CHRONOPOST_TEXT_DESCRIPTION', 'Chronopost Zone Based Rates');
define('MODULE_SHIPPING_CHRONOPOST_TEXT_WAY', 'Env&iacute;o a');
define('MODULE_SHIPPING_CHRONOPOST_TEXT_UNITS', 'kg');
define('MODULE_SHIPPING_CHRONOPOST_INVALID_ZONE', 'Chronopost No hay env&iacute;o disponible para el pa&iacute;s seleccionado');
define('MODULE_SHIPPING_CHRONOPOST_UNDEFINED_RATE', 'Chronopost La tarifa de env&iacute;o no puede ser determinada en este momento');

define('MODULE_SHIPPING_CHRONOPOST_STATUS_TITLE' , 'Activer Chronopost');
define('MODULE_SHIPPING_CHRONOPOST_STATUS_DESC' , '&iquest;Le gustar&iacute;a activar el env&iacute;o a trav&eacute;s de Chronopost?  (True, False)');
define('MODULE_SHIPPING_CHRONOPOST_HANDLING_TITLE' , 'Aranceles');
define('MODULE_SHIPPING_CHRONOPOST_HANDLING_DESC' , 'Tarifas de env&iacute;o a trav&eacute;s de chronopost');
define('MODULE_SHIPPING_CHRONOPOST_TAX_CLASS_TITLE' , 'Clase de impuestos');
define('MODULE_SHIPPING_CHRONOPOST_TAX_CLASS_DESC' , 'Utilice la siguiente clase de impuestos en la tarifa de env&iacute;o.');
define('MODULE_SHIPPING_CHRONOPOST_ZONE_TITLE' , 'Zona de env&iacute;o');
define('MODULE_SHIPPING_CHRONOPOST_ZONE_DESC' , 'Si se selecciona una zona, s&oacute;lo se debe habilitar este m&eacute;todo de env&iacute;o para esa zona.');
define('MODULE_SHIPPING_CHRONOPOST_SORT_ORDER_TITLE' , 'Orden de clasificaci&oacute;n');
define('MODULE_SHIPPING_CHRONOPOST_SORT_ORDER_DESC' , 'Ordenar el orden de exhibici&oacute;n.');
define('MODULE_SHIPPING_CHRONOPOST_ALLOWED_TITLE' , 'Zonas de embarque individuales');
define('MODULE_SHIPPING_CHRONOPOST_ALLOWED_DESC' , 'Especificar <b>individualmente</b> las zonas a las que se puede despachar. Por ejemplo, AT,DE');

define('MODULE_SHIPPING_CHRONOPOST_COUNTRIES_1_TITLE' , 'Chronopost Zone 1 (paga)');
define('MODULE_SHIPPING_CHRONOPOST_COUNTRIES_1_DESC' , 'Inserte una coma entre 2 c&oacute;digos ISO de pa&iacute;ses que forman parte de la misma zona (Registrar WORLD para el resto del mundo.).');
define('MODULE_SHIPPING_CHRONOPOST_COST_1_TITLE' , 'Chronopost Zone 1 (peso:precios)');
define('MODULE_SHIPPING_CHRONOPOST_COST_1_DESC' , 'Tarifas de Chronopost para destinos de la Zona 1. Principio: un rango de peso (gramos) seguido de la tarifa (euros con impuestos incluidos). Ejemplo: 0-2000:28.71,2000-5000:34.38,... A los paquetes que pesen menos de 2 kg se les cobrar&aacute; 28,71 euros, incluidos los impuestos para los destinos en');

define('MODULE_SHIPPING_CHRONOPOST_COUNTRIES_2_TITLE' , 'Chronopost Zone 2 (paga)');
define('MODULE_SHIPPING_CHRONOPOST_COUNTRIES_2_DESC' , 'Inserte una coma entre 2 c&oacute;digos ISO de pa&iacute;ses que forman parte de la misma zona (Registrar WORLD para el resto del mundo.).');
define('MODULE_SHIPPING_CHRONOPOST_COST_2_TITLE' , 'Chronopost Zone 2 (peso:precios)');
define('MODULE_SHIPPING_CHRONOPOST_COST_2_DESC' , 'Tarifas de Chronopost para destinos de la Zona 2. Principio: un rango de peso (gramos) seguido de la tarifa (euros con impuestos incluidos). Ejemplo: 0-2000:28.71,2000-5000:34.38,... A los paquetes que pesen menos de 2 kg se les cobrar&aacute; 28,71 euros, incluidos los impuestos para los destinos en');

define('MODULE_SHIPPING_CHRONOPOST_COUNTRIES_3_TITLE' , 'Chronopost Zone 3 (paga)');
define('MODULE_SHIPPING_CHRONOPOST_COUNTRIES_3_DESC' , 'Inserte una coma entre 2 c&oacute;digos ISO de pa&iacute;ses que forman parte de la misma zona (Registrar WORLD para el resto del mundo.).');
define('MODULE_SHIPPING_CHRONOPOST_COST_3_TITLE' , 'Chronopost Zone 3 (peso:precios)');
define('MODULE_SHIPPING_CHRONOPOST_COST_3_DESC' , 'Tarifas de Chronopost para destinos de la Zona 3. Principio: un rango de peso (gramos) seguido de la tarifa (euros con impuestos incluidos). Ejemplo: 0-2000:28.71,2000-5000:34.38,... A los paquetes que pesen menos de 2 kg se les cobrar&aacute; 28,71 euros, incluidos los impuestos para los destinos en');

define('MODULE_SHIPPING_CHRONOPOST_COUNTRIES_4_TITLE' , 'Chronopost Zone 4 (paga)');
define('MODULE_SHIPPING_CHRONOPOST_COUNTRIES_4_DESC' , 'Inserte una coma entre 2 c&oacute;digos ISO de pa&iacute;ses que forman parte de la misma zona (Registrar WORLD para el resto del mundo.).');
define('MODULE_SHIPPING_CHRONOPOST_COST_4_TITLE' , 'Chronopost Zone 4 (peso:precios)');
define('MODULE_SHIPPING_CHRONOPOST_COST_4_DESC' , 'Tarifas de Chronopost para destinos de la Zona 4. Principio: un rango de peso (gramos) seguido de la tarifa (euros con impuestos incluidos). Ejemplo: 0-2000:28.71,2000-5000:34.38,... A los paquetes que pesen menos de 2 kg se les cobrar&aacute; 28,71 euros, incluidos los impuestos para los destinos en');

define('MODULE_SHIPPING_CHRONOPOST_COUNTRIES_5_TITLE' , 'Chronopost Zone 5 (paga)');
define('MODULE_SHIPPING_CHRONOPOST_COUNTRIES_5_DESC' , 'Inserte una coma entre 2 c&oacute;digos ISO de pa&iacute;ses que forman parte de la misma zona (Registrar WORLD para el resto del mundo.).');
define('MODULE_SHIPPING_CHRONOPOST_COST_5_TITLE' , 'Chronopost Zone 5 (peso:precios)');
define('MODULE_SHIPPING_CHRONOPOST_COST_5_DESC' , 'Tarifas de Chronopost para destinos de la Zona 5. Principio: un rango de peso (gramos) seguido de la tarifa (euros con impuestos incluidos). Ejemplo: 0-2000:28.71,2000-5000:34.38,... A los paquetes que pesen menos de 2 kg se les cobrar&aacute; 28,71 euros, incluidos los impuestos para los destinos en');

define('MODULE_SHIPPING_CHRONOPOST_COUNTRIES_6_TITLE' , 'Chronopost Zone 6 (paga)');
define('MODULE_SHIPPING_CHRONOPOST_COUNTRIES_6_DESC' , 'Inserte una coma entre 2 c&oacute;digos ISO de pa&iacute;ses que forman parte de la misma zona (Registrar WORLD para el resto del mundo.).');
define('MODULE_SHIPPING_CHRONOPOST_COST_6_TITLE' , 'Chronopost Zone 6 (peso:precios)');
define('MODULE_SHIPPING_CHRONOPOST_COST_6_DESC' , 'Tarifas de Chronopost para destinos de la Zona 6. Principio: un rango de peso (gramos) seguido de la tarifa (euros con impuestos incluidos). Ejemplo: 0-2000:28.71,2000-5000:34.38,... A los paquetes que pesen menos de 2 kg se les cobrar&aacute; 28,71 euros, incluidos los impuestos para los destinos en');

define('MODULE_SHIPPING_CHRONOPOST_COUNTRIES_7_TITLE' , 'Chronopost Zone 7 (paga)');
define('MODULE_SHIPPING_CHRONOPOST_COUNTRIES_7_DESC' , 'Inserte una coma entre 2 c&oacute;digos ISO de pa&iacute;ses que forman parte de la misma zona (Registrar WORLD para el resto del mundo.).');
define('MODULE_SHIPPING_CHRONOPOST_COST_7_TITLE' , 'Chronopost Zone 7 (peso:precios)');
define('MODULE_SHIPPING_CHRONOPOST_COST_7_DESC' , 'Tarifas de Chronopost para destinos de la Zona 7. Principio: un rango de peso (gramos) seguido de la tarifa (euros con impuestos incluidos). Ejemplo: 0-2000:28.71,2000-5000:34.38,... A los paquetes que pesen menos de 2 kg se les cobrar&aacute; 28,71 euros, incluidos los impuestos para los destinos en');

define('MODULE_SHIPPING_CHRONOPOST_COUNTRIES_8_TITLE' , 'Chronopost Zone 8 (paga)');
define('MODULE_SHIPPING_CHRONOPOST_COUNTRIES_8_DESC' , 'Inserte una coma entre 2 c&oacute;digos ISO de pa&iacute;ses que forman parte de la misma zona (Registrar WORLD para el resto del mundo.).');
define('MODULE_SHIPPING_CHRONOPOST_COST_8_TITLE' , 'Chronopost Zone 8 (peso:precios)');
define('MODULE_SHIPPING_CHRONOPOST_COST_8_DESC' , 'Tarifas de Chronopost para destinos de la Zona 8. Principio: un rango de peso (gramos) seguido de la tarifa (euros con impuestos incluidos). Ejemplo: 0-2000:28.71,2000-5000:34.38,... A los paquetes que pesen menos de 2 kg se les cobrar&aacute; 28,71 euros, incluidos los impuestos para los destinos en');

define('MODULE_SHIPPING_CHRONOPOST_COUNTRIES_9_TITLE' , 'Chronopost Zone 9 (paga)');
define('MODULE_SHIPPING_CHRONOPOST_COUNTRIES_9_DESC' , 'Inserte una coma entre 2 c&oacute;digos ISO de pa&iacute;ses que forman parte de la misma zona (Registrar WORLD para el resto del mundo.).');
define('MODULE_SHIPPING_CHRONOPOST_COST_9_TITLE' , 'Chronopost Zone 9 (peso:precios)');
define('MODULE_SHIPPING_CHRONOPOST_COST_9_DESC' , 'Tarifas de Chronopost para destinos de la Zona 9. Principio: un rango de peso (gramos) seguido de la tarifa (euros con impuestos incluidos). Ejemplo: 0-2000:28.71,2000-5000:34.38,... A los paquetes que pesen menos de 2 kg se les cobrar&aacute; 28,71 euros, incluidos los impuestos para los destinos en');

define('MODULE_SHIPPING_CHRONOPOST_COUNTRIES_10_TITLE' , 'Chronopost Zone 10 (paga)');
define('MODULE_SHIPPING_CHRONOPOST_COUNTRIES_10_DESC' , 'Inserte una coma entre 2 c&oacute;digos ISO de pa&iacute;ses que forman parte de la misma zona (Registrar WORLD para el resto del mundo.).');
define('MODULE_SHIPPING_CHRONOPOST_COST_10_TITLE' , 'Chronopost Zone 10 (peso:precios)');
define('MODULE_SHIPPING_CHRONOPOST_COST_10_DESC' , 'Tarifas de Chronopost para destinos de la Zona 10. Principio: un rango de peso (gramos) seguido de la tarifa (euros con impuestos incluidos). Ejemplo: 0-2000:28.71,2000-5000:34.38,... A los paquetes que pesen menos de 2 kg se les cobrar&aacute; 28,71 euros, incluidos los impuestos para los destinos en');
?>