<?php
/* -----------------------------------------------------------------------------------------
   $Id: paypalpluslink.php 11030 2017-12-08 07:50:06Z GTB $

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   -----------------------------------------------------------------------------------------
   Released under the GNU General Public License
   ---------------------------------------------------------------------------------------*/


$lang_array = array(
  'MODULE_PAYMENT_PAYPALPLUSLINK_TEXT_TITLE' => 'PayPal Plus Link',
  'MODULE_PAYMENT_PAYPALPLUSLINK_TEXT_INFO' => '<img src="https://www.paypal.com/de_DE/DE/i/logo/lockbox_150x47.gif" />',
  'MODULE_PAYMENT_PAYPALPLUSLINK_TEXT_DESCRIPTION' => 'PayPal como un enlace de pago para el cliente despu&eacute;s de que el pedido se haya completado. Decida usted mismo donde el cliente recibe la solicitud de pago.<br/>PayPal Plus - las cuatro formas de pago m&aacute;s populares de los compradores alemanes: PayPal, domiciliaci&oacute;n bancaria, tarjeta de cr&eacute;dito y factura.<br/>Puede encontrar m&aacute;s informaci&oacute;n sobre PayPal Plus <a target="_blank" href="https://www.paypal.com/de/webapps/mpp/paypal-plus">aqu&iacute;</a>.',
  'MODULE_PAYMENT_PAYPALPLUSLINK_ALLOWED_TITLE' => 'Zonas permitidas',
  'MODULE_PAYMENT_PAYPALPLUSLINK_ALLOWED_DESC' => 'Por favor, introduzca las zonas <b>por separado</b> que deber&iacute;an estar permitidas para usar este m&oacute;dulo (por ejemplo, AT,DE (d&eacute;jelo vac&iacute;o si quiere permitir todas las zonas))',
  'MODULE_PAYMENT_PAYPALPLUSLINK_STATUS_TITLE' => 'Habilitar PayPal Plus Link',
  'MODULE_PAYMENT_PAYPALPLUSLINK_STATUS_DESC' => '&iquest;Desea aceptar los pagos de PayPal Plus Link?',
  'MODULE_PAYMENT_PAYPALPLUSLINK_SORT_ORDER_TITLE' => 'Orden de clasificaci&oacute;n',
  'MODULE_PAYMENT_PAYPALPLUSLINK_SORT_ORDER_DESC' => 'Ordenar la vista. El n&uacute;mero m&aacute;s bajo se mostrar&aacute; primero',
  'MODULE_PAYMENT_PAYPALPLUSLINK_ZONE_TITLE' => 'Zona de pago',
  'MODULE_PAYMENT_PAYPALPLUSLINK_ZONE_DESC' => 'Si se elige una zona, el m&eacute;todo de pago ser&aacute; v&aacute;lido s&oacute;lo para esta zona.',
  'MODULE_PAYMENT_PAYPALPLUSLINK_LP' => '<br /><br /><a target="_blank" href="http://www.paypal.com/de/webapps/mpp/referral/paypal-business-account2?partner_id=EHALBVD4M2RQS"><strong>Cree una cuenta PayPal ahora.</strong></a>',

  'MODULE_PAYMENT_PAYPALPLUSLINK_TEXT_EXTENDED_DESCRIPTION' => '<strong><font color="red">ATENCI&Oacute;N:</font></strong> Por favor, configure PayPal en "M&oacute;dulos de socios" -> "PayPal" -> <a href="'.xtc_href_link('paypal_config.php').'"><strong>"Configuraci&oacute;n de PayPal"</strong></a>!',

  'MODULE_PAYMENT_PAYPALPLUSLINK_TEXT_ERROR_HEADING' => 'Nota',
  'MODULE_PAYMENT_PAYPALPLUSLINK_TEXT_ERROR_MESSAGE' => 'El pago de PayPal ha sido cancelado',
  
  'MODULE_PAYMENT_PAYPALPLUSLINK_TEXT_SUCCESS' => 'Pague ahora con PayPal. Por favor, haga clic en el siguiente enlace:<br/> %s',
  'MODULE_PAYMENT_PAYPALPLUSLINK_TEXT_COMPLETED' => 'Gracias por pagar con PayPal.',
);


foreach ($lang_array as $key => $val) {
  defined($key) or define($key, $val);
}
?>