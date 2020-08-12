<?php
/* -----------------------------------------------------------------------------------------
   $Id: moneybookers_csi.php 3598 2012-09-06 06:22:36Z dokuman $

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   -----------------------------------------------------------------------------------------
   based on:
   (c) 2006 xt:Commerce; www.xt-commerce.com

   Released under the GNU General Public License
   ---------------------------------------------------------------------------------------*/

define('MODULE_PAYMENT_MONEYBOOKERS_CSI_TEXT_TITLE', 'CartaSi');
$_var = 'CartaSi v&iacute;a Skrill';
if (_PAYMENT_MONEYBOOKERS_EMAILID=='') {
  $_var.='<br /><br /><b><font color="red">&iexcl;Por favor, configurar la configuraci&oacute;n de skrill.com primero! &iexcl;(Configuraci&oacute;n avanzada -> Socio -> Skrill.com)!</font></b>';
}
define('MODULE_PAYMENT_MONEYBOOKERS_CSI_TEXT_DESCRIPTION', $_var);
define('MODULE_PAYMENT_MONEYBOOKERS_CSI_NOCURRENCY_ERROR', '&iexcl;No hay ninguna moneda aceptada por los Skrill instalada!');
define('MODULE_PAYMENT_MONEYBOOKERS_CSI_ERRORTEXT1', 'payment_error=');
define('MODULE_PAYMENT_MONEYBOOKERS_CSI_TEXT_INFO','');
define('MODULE_PAYMENT_MONEYBOOKERS_CSI_ERRORTEXT2', '&error=&iexcl;Hubo un error durante su pago en Skrill!');
define('MODULE_PAYMENT_MONEYBOOKERS_CSI_ORDER_TEXT', 'Fecha de la orden: ');
define('MODULE_PAYMENT_MONEYBOOKERS_CSI_TEXT_ERROR', '&iexcl;Error de pago!');
define('MODULE_PAYMENT_MONEYBOOKERS_CSI_CONFIRMATION_TEXT', '&iexcl;Gracias por su pedido!');
define('MODULE_PAYMENT_MONEYBOOKERS_CSI_TRANSACTION_FAILED_TEXT', 'Su transacci&oacute;n de pago en Skrill ha fallado. &iexcl;Por favor, int&eacute;ntelo de nuevo, o seleccione otra opci&oacute;n de pago!');

define('MODULE_PAYMENT_MONEYBOOKERS_CSI_STATUS_TITLE', 'Habilitar Skrill');
define('MODULE_PAYMENT_MONEYBOOKERS_CSI_STATUS_DESC', '&iquest;Quiere aceptar pagos a trav&eacute;s de Skrill?');
define('MODULE_PAYMENT_MONEYBOOKERS_CSI_SORT_ORDER_TITLE', 'Ordenar el orden de exhibici&oacute;n.');
define('MODULE_PAYMENT_MONEYBOOKERS_CSI_SORT_ORDER_DESC', 'Ordenar el orden de exhibici&oacute;n. El m&aacute;s bajo se muestra primero.');
define('MODULE_PAYMENT_MONEYBOOKERS_CSI_ZONE_TITLE', 'Zona de pago');
define('MODULE_PAYMENT_MONEYBOOKERS_CSI_ZONE_DESC', 'Si se selecciona una zona, s&oacute;lo se debe habilitar este m&eacute;todo de pago para esa zona.');
define('MODULE_PAYMENT_MONEYBOOKERS_CSI_ALLOWED_TITLE' , 'Zonas permitidas');
define('MODULE_PAYMENT_MONEYBOOKERS_CSI_ALLOWED_DESC' , 'Por favor, introduzca las zonas <b>por separado</b> que deben ser permitidas para utilizar este m&oacute;dulo (por ejemplo, AT, DE (deje vac&iacute;o si quiere permitir todas las zonas))');
?>