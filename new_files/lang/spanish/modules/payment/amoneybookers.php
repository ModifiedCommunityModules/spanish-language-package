<?php

/* -----------------------------------------------------------------------------------------
   $Id: amoneybookers.php 85 2007-01-14 15:19:44Z mzanier $

   xt:Commerce - community made shopping
   http://www.xt-commerce.com

   Copyright (c) 2006 xt:Commerce
   -----------------------------------------------------------------------------------------
   based on:
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(moneybookers.php,v 1.01 2003/01/20); www.oscommerce.com

   Released under the GNU General Public License
   -----------------------------------------------------------------------------------------
   Third Party contributions:
   Moneybookers v1.0                       Autor:    Gabor Mate  <gabor(at)jamaga.hu>

   Released under the GNU General Public License
   ---------------------------------------------------------------------------------------*/

define('MODULE_PAYMENT_AMONEYBOOKERS_TEXT_TITLE', 'Pago seguro a trav&eacute;s de Skrill');
//define('MODULE_PAYMENT_AMONEYBOOKERS_TEXT_DESCRIPTION', 'Skrill<br /><br /><img src="images/icon_arrow_right.gif"> <b><a href="http://www.xt-commerce.com/index.php?option=com_content&task=view&id=76&lang=en" target="_blank">Help / Explanation</a></b>');
define('MODULE_PAYMENT_AMONEYBOOKERS_TEXT_DESCRIPTION', 'Skrill');
define('MODULE_PAYMENT_AMONEYBOOKERS_NOCURRENCY_ERROR', 'No hay ninguna moneda aceptada por los Skrill instalada!');
define('MODULE_PAYMENT_AMONEYBOOKERS_ERRORTEXT1', 'payment_error=');
define('MODULE_PAYMENT_AMONEYBOOKERS_TEXT_INFO','');
define('MODULE_PAYMENT_AMONEYBOOKERS_ERRORTEXT2', '&error=Hubo un error durante su pago en Skrill!');
define('MODULE_PAYMENT_AMONEYBOOKERS_ORDER_TEXT', 'Fecha de la orden: ');
define('MODULE_PAYMENT_AMONEYBOOKERS_TEXT_ERROR', 'Error de pago!');
define('MODULE_PAYMENT_AMONEYBOOKERS_CONFIRMATION_TEXT', 'Gracias por su pedido!');
define('MODULE_PAYMENT_AMONEYBOOKERS_TRANSACTION_FAILED_TEXT', 'Su transacci&oacute;n de pago en Skrill ha fallado. Por favor, int&eacute;ntelo de nuevo, o seleccione otra opci&oacute;n de pago!');
define('MODULE_PAYMENT_AMONEYBOOKERS_TEXT_INFO_2', '<b>100% seguridad</b> - Todas las transacciones de datos son seguras con la tecnolog&iacute;a de seguridad m&aacute;s moderna de los Skrill.');
define('MODULE_PAYMENT_AMONEYBOOKERS_TEXT_INFO_3', '<b>100% protecci&oacute;n de datos</b> - Sus datos personales ser&aacute;n almacenados en Skrill y no ser&aacute;n pasados a la tienda.');
define('MODULE_PAYMENT_AMONEYBOOKERS_TEXT_INFO_4', '<b>M&aacute;ximo confort</b> - Una vez que tenga una cuenta Skrill, s&oacute;lo necesitar&aacute; su direcci&oacute;n de correo electr&oacute;nico y su contrase&ntilde;a para todas las transacciones futuras');
define('MODULE_PAYMENT_AMONEYBOOKERS_TEXT_INFO_5', '<b>Amplia aceptaci&oacute;n</b> - Con Skrill, puedes pagar en varios miles de tiendas');
define('MODULE_PAYMENT_AMONEYBOOKERS_TEXT_INFO_1', '<br /><br />Pague al instante por...');

define('MB_TEXT_MBDATE', '&Uacute;ltimo cambio:');
define('MB_TEXT_MBTID', 'TR ID:');
define('MB_TEXT_MBERRTXT', 'Estado:');

define('MODULE_PAYMENT_AMONEYBOOKERS_PROCESSED_STATUS_ID_TITLE', 'Estado del pedido - Procesado');
define('MODULE_PAYMENT_AMONEYBOOKERS_PROCESSED_STATUS_ID_DESC', '');

define('MODULE_PAYMENT_AMONEYBOOKERS_PENDING_STATUS_ID_TITLE', 'Estado del pedido - Programado');
define('MODULE_PAYMENT_AMONEYBOOKERS_PENDING_STATUS_ID_DESC', '');

define('MODULE_PAYMENT_AMONEYBOOKERS_CANCELED_STATUS_ID_TITLE', 'Estado del pedido - Cancelado');
define('MODULE_PAYMENT_AMONEYBOOKERS_CANCELED_STATUS_ID_DESC', '');

define('MODULE_PAYMENT_AMONEYBOOKERS__TMP_STATUS_ID_TITLE', 'Estado del pedido - Temp');
define('MODULE_PAYMENT_AMONEYBOOKERS__TMP_STATUS_ID_DESC', '');

define('MODULE_PAYMENT_AMONEYBOOKERS_ICONS_TITLE', 'Iconos');
define('MODULE_PAYMENT_AMONEYBOOKERS_ICONS_DESC', '');

define('MODULE_PAYMENT_AMONEYBOOKERS_STATUS_TITLE', 'Habilitar Skrill');
//define('MODULE_PAYMENT_AMONEYBOOKERS_STATUS_DESC', 'Do you want to accept payments through Skrill?<br /><br /><img src="images/icon_arrow_right.gif"> <b><a href="http://www.xt-commerce.com/index.php?option=com_content&task=view&id=76&lang=en" target="_blank">Help / Explanation</a></b>');
define('MODULE_PAYMENT_AMONEYBOOKERS_STATUS_DESC', '&iquest;Quieres aceptar pagos a trav&eacute;s de Skrill?');
define('MODULE_PAYMENT_AMONEYBOOKERS_EMAILID_TITLE', 'Direcci&oacute;n de correo electr&oacute;nico');
define('MODULE_PAYMENT_AMONEYBOOKERS_EMAILID_DESC', 'La direcci&oacute;n de correo electr&oacute;nico que ha registrado en Skrill. <font color="#ff0000">* Requerido</font>');
define('MODULE_PAYMENT_AMONEYBOOKERS_PWD_TITLE', 'Palabra secreta de los Skrill');
define('MODULE_PAYMENT_AMONEYBOOKERS_PWD_DESC', 'La palabra secreta se puede encontrar en su perfil Skrill (&iexcl;&eacute;sta no es su contrase&ntilde;a!)');
define('MODULE_PAYMENT_AMONEYBOOKERS_MERCHANTID_TITLE', 'Comerciante ID');
define('MODULE_PAYMENT_AMONEYBOOKERS_MERCHANTID_DESC', 'Identificaci&oacute;n de comerciante de su cuenta Skrill <font color="#ff0000">* Requerido</font>');
define('MODULE_PAYMENT_AMONEYBOOKERS_SORT_ORDER_TITLE', 'Orden de visualizaci&oacute;n de la orden.');
define('MODULE_PAYMENT_AMONEYBOOKERS_SORT_ORDER_DESC', 'Ordenar el orden de exhibici&oacute;n. El m&aacute;s bajo se muestra primero.');
define('MODULE_PAYMENT_AMONEYBOOKERS_CURRENCY_TITLE', 'Moneda de transacci&oacute;n');
define('MODULE_PAYMENT_AMONEYBOOKERS_CURRENCY_DESC', 'Si la moneda del usuario no est&aacute; disponible en Skrill, esta moneda se utilizar&aacute; para el pago.');
define('MODULE_PAYMENT_AMONEYBOOKERS_LANGUAGE_TITLE', 'Lenguaje de transacci&oacute;n');
define('MODULE_PAYMENT_AMONEYBOOKERS_LANGUAGE_DESC', 'Si el idioma del usuario no est&aacute; disponible en Skrill este idioma se utilizar&aacute; para el pago.');
define('MODULE_PAYMENT_AMONEYBOOKERS_ZONE_TITLE', 'Zona de pago');
define('MODULE_PAYMENT_AMONEYBOOKERS_ZONE_DESC', 'Si se selecciona una zona, s&oacute;lo se debe habilitar este m&eacute;todo de pago para esa zona.');
define('MODULE_PAYMENT_AMONEYBOOKERS_ALLOWED_TITLE' , 'Zonas permitidas');
define('MODULE_PAYMENT_AMONEYBOOKERS_ALLOWED_DESC' , 'Por favor, introduzca las zonas <b>separadas</b> a las que se les debe permitir usar este m&oacute;dulo (por ejemplo, AT,DE (d&eacute;jelas vac&iacute;as si quiere permitir todas las zonas))');
?>