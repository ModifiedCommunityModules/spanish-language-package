<?php
/* -----------------------------------------------------------------------------------------
   $Id: paypallink.php 12400 2019-11-08 13:28:49Z Tomcraft $

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   -----------------------------------------------------------------------------------------
   Released under the GNU General Public License
   ---------------------------------------------------------------------------------------*/


$lang_array = array(
  'MODULE_PAYMENT_PAYPALSUBSCRIPTION_TEXT_TITLE' => 'Suscripci&oacute;n a PayPal',
  'MODULE_PAYMENT_PAYPALSUBSCRIPTION_TEXT_INFO' => '<img src="https://www.paypal.com/de_DE/DE/i/logo/lockbox_150x47.gif" />',
  'MODULE_PAYMENT_PAYPALSUBSCRIPTION_TEXT_DESCRIPTION' => 'PayPal como enlace de pago que s&oacute;lo est&aacute; disponible para el cliente una vez completado el pedido. Decida usted mismo d&oacute;nde recibe el cliente la solicitud de pago.',
  'MODULE_PAYMENT_PAYPALSUBSCRIPTION_ALLOWED_TITLE' => 'Zonas permitidas',
  'MODULE_PAYMENT_PAYPALSUBSCRIPTION_ALLOWED_DESC' => 'Especifica <b>individualmente</b> las zonas que deben ser permitidas para este m&oacute;dulo. (por ejemplo, AT,DE (si est&aacute; vac&iacute;o, se permiten todas las zonas)).',
  'MODULE_PAYMENT_PAYPALSUBSCRIPTION_STATUS_TITLE' => 'Activar la suscripci&oacute;n a PayPal',
  'MODULE_PAYMENT_PAYPALSUBSCRIPTION_STATUS_DESC' => '&iquest;Desea aceptar pagos a trav&eacute;s de la Suscripci&oacute;n de PayPal?',
  'MODULE_PAYMENT_PAYPALSUBSCRIPTION_SORT_ORDER_TITLE' => 'Orden de visualizaci&oacute;n',
  'MODULE_PAYMENT_PAYPALSUBSCRIPTION_SORT_ORDER_DESC' => 'Orden de visualizaci&oacute;n. El d&iacute;gito m&aacute;s peque&ntilde;o aparece primero',
  'MODULE_PAYMENT_PAYPALSUBSCRIPTION_ZONE_TITLE' => 'Zona de pago',
  'MODULE_PAYMENT_PAYPALSUBSCRIPTION_ZONE_DESC' => 'Cuando se selecciona una zona, el m&eacute;todo de pago s&oacute;lo es v&aacute;lido para esa zona.',
  'MODULE_PAYMENT_PAYPALSUBSCRIPTION_LP' => '<br /><br /><a target="_blank" href="http://www.paypal.com/de/webapps/mpp/referral/paypal-business-account2?partner_id=EHALBVD4M2RQS"><strong>Cree una cuenta PayPal aqu&iacute;.</strong></a>',

  'MODULE_PAYMENT_PAYPALSUBSCRIPTION_TEXT_EXTENDED_DESCRIPTION' => '<strong><font color="red">ATENCI&Oacute;N:</font></strong> Por favor, siga haciendo los ajustes en "M&oacute;dulos para socios" -> "PayPal" -> <a href="'.xtc_href_link('paypal_config.php').'"><strong>"Configuraci&oacute;n de PayPal"</strong></a> vor!',

  'MODULE_PAYMENT_PAYPALSUBSCRIPTION_TEXT_ERROR_HEADING' => 'Nota',
  'MODULE_PAYMENT_PAYPALSUBSCRIPTION_TEXT_ERROR_MESSAGE' => 'El pago de PayPal fue cancelado',  
);


foreach ($lang_array as $key => $val) {
  defined($key) or define($key, $val);
}
?>