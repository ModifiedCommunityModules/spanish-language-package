<?php
/* -----------------------------------------------------------------------------------------
   $Id$

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   -----------------------------------------------------------------------------------------
   Released under the GNU General Public License
   ---------------------------------------------------------------------------------------*/

define('MODULE_EXCLUDE_PAYMENT_TEXT_TITLE', 'M&eacute;todos de pago seg&uacute;n el m&eacute;todo de env&iacute;o');
define('MODULE_EXCLUDE_PAYMENT_TEXT_DESCRIPTION', '');
define('MODULE_EXCLUDE_PAYMENT_STATUS_TITLE' , 'Estado');
define('MODULE_EXCLUDE_PAYMENT_STATUS_DESC' , '&iquest;Habilitar el m&oacute;dulo?');
define('MODULE_EXCLUDE_PAYMENT_NUMBER_TITLE' , 'N&uacute;mero de m&eacute;todos de env&iacute;o');
define('MODULE_EXCLUDE_PAYMENT_NUMBER_DESC' , 'N&uacute;mero de opciones de entrega a configurar.');

if (defined('MODULE_EXCLUDE_PAYMENT_NUMBER')) {
  for ($module_exclude_payment_i = 1; $module_exclude_payment_i <= (int)MODULE_EXCLUDE_PAYMENT_NUMBER; $module_exclude_payment_i ++) {
    define('MODULE_EXCLUDE_PAYMENT_SHIPPING_'.$module_exclude_payment_i.'_TITLE' , '<hr noshade>'.$module_exclude_payment_i.'. m&eacute;todo de env&iacute;o');
    define('MODULE_EXCLUDE_PAYMENT_SHIPPING_'.$module_exclude_payment_i.'_DESC' , 'Seleccione el m&eacute;todo de entrega en el que desea excluir un m&eacute;todo de pago.');
    define('MODULE_EXCLUDE_PAYMENT_PAYMENT_'.$module_exclude_payment_i.'_TITLE' , $module_exclude_payment_i.'. m&eacute;todo de pago excluido');
    define('MODULE_EXCLUDE_PAYMENT_PAYMENT_'.$module_exclude_payment_i.'_DESC' , 'Seleccione el m&eacute;todo de pago que desea excluir.');
  }
}
?>