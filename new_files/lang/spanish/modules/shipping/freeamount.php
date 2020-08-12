<?php
/* -----------------------------------------------------------------------------------------
   $Id: freeamount.php 4855 2013-06-03 12:15:20Z Tomcraft $   

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   -----------------------------------------------------------------------------------------
   based on: 
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce( freeamount.php,v 1.01 2002/01/24 03:25:00); www.oscommerce.com 
   (c) 2003	 nextcommerce (freeamount.php,v 1.4 2003/08/13); www.nextcommerce.org
   (c) 2006 xt:Commerce; www.xt-commerce.com

   Released under the GNU General Public License 
   -----------------------------------------------------------------------------------------
   Third Party contributions:
   freeamountv2-p1         	Autor:	dwk

   Released under the GNU General Public License 
   ---------------------------------------------------------------------------------------*/

define('MODULE_SHIPPING_FREEAMOUNT_TEXT_TITLE', 'Transporte gratuito');
define('MODULE_SHIPPING_FREEAMOUNT_TEXT_DESCRIPTION', 'Transporte incluido');
define('MODULE_SHIPPING_FREEAMOUNT_TEXT_WAY', 'a partir de %s');
define('MODULE_SHIPPING_FREEAMOUNT_INVALID_ZONE', 'Ha este pa&iacute;s no podemos enviar');
define('MODULE_SHIPPING_FREEAMOUNT_SORT_ORDER', 'Ord&eacute;n de visuaizacioacute;n');

define('MODULE_SHIPPING_FREEAMOUNT_ALLOWED_TITLE' , 'Zonas permitidas');
define('MODULE_SHIPPING_FREEAMOUNT_ALLOWED_DESC' , 'Introduce aqu&iacute; <b>una por una</b> las zonas a donde quiere aplicar esta opcioacute;n. (p. ej. ES,PT (si dejas este campo vac&iacute;o, se aplica a todas las zonas))');
define('MODULE_SHIPPING_FREEAMOUNT_STATUS_TITLE' , 'Activar');
define('MODULE_SHIPPING_FREEAMOUNT_STATUS_DESC' , '&iquest;Quieres activar la opcioacute;n de env&iacute;o gratuito?');
define('MODULE_SHIPPING_FREEAMOUNT_DISPLAY_TITLE' , 'Mostrar aviso');
define('MODULE_SHIPPING_FREEAMOUNT_DISPLAY_DESC' , '&iquest;Quieres que al cliente se le muestre un aviso del importe m&iacute;nimo a comprar,  para que no se le cobre el transporte?');
define('MODULE_SHIPPING_FREEAMOUNT_ZONE_TITLE' , 'Zonas permitidas');
define('MODULE_SHIPPING_FREEAMOUNT_ZONE_DESC' , 'Si eliges una zona, solo ser&aacute; permitido este tipo de env&iacute;o a la zona elegida.');
define('MODULE_SHIPPING_FREEAMOUNT_SORT_ORDER_TITLE' , 'Orden');
define('MODULE_SHIPPING_FREEAMOUNT_SORT_ORDER_DESC' , 'Orden de como mostrarel tipo de env&iacute;o');
define('MODULE_SHIPPING_FREEAMOUNT_NUMBER_ZONES_TITLE' , 'Cantidad de zonas');
define('MODULE_SHIPPING_FREEAMOUNT_NUMBER_ZONES_DESC' , 'Cantidad de zonas a cuales quiere aplicar este servicio');
define('MODULE_SHIPPING_FREEAMOUNT_DISPLAY_TITLE' , 'Activar aviso si zona no disponible');
define('MODULE_SHIPPING_FREEAMOUNT_DISPLAY_DESC' , '&iquest;Quieres que al cliente se le muestre un aviso de que no se puede enviar a esta zona?');

if (defined('MODULE_SHIPPING_FREEAMOUNT_NUMBER_ZONES')) {
  for ($module_shipping_freeamount_i = 1; $module_shipping_freeamount_i <= MODULE_SHIPPING_FREEAMOUNT_NUMBER_ZONES; $module_shipping_freeamount_i ++) {
    define('MODULE_SHIPPING_FREEAMOUNT_COUNTRIES_'.$module_shipping_freeamount_i.'_TITLE' , '<hr/>Zonas '.$module_shipping_freeamount_i.' Paises');
    define('MODULE_SHIPPING_FREEAMOUNT_COUNTRIES_'.$module_shipping_freeamount_i.'_DESC' , 'Introducir coacute;digos ISO de los paises (2 signos), cuales forman parte de la Zona '.$module_shipping_freeamount_i.' (Introducir WORLD para el resto del mundo.).');
    define('MODULE_SHIPPING_FREEAMOUNT_AMOUNT_'.$module_shipping_freeamount_i.'_TITLE' , 'Zona '.$module_shipping_freeamount_i.' Importe m&iacute;nimo');
    define('MODULE_SHIPPING_FREEAMOUNT_AMOUNT_'.$module_shipping_freeamount_i.'_DESC' , 'Introducir el importe m&iacute;nimo a comprar para que el transporte de la zona '.$module_shipping_freeamount_i.' sea gratuito.');
  }
}
?>
