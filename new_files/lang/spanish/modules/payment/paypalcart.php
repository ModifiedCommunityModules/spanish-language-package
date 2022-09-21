<?php
/* -----------------------------------------------------------------------------------------
   $Id: paypalcart.php 11030 2017-12-08 07:50:06Z GTB $

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   -----------------------------------------------------------------------------------------
   Released under the GNU General Public License
   ---------------------------------------------------------------------------------------*/


$lang_array = array(
  'MODULE_PAYMENT_PAYPALCART_TEXT_TITLE' => 'PayPal exprés',
  'MODULE_PAYMENT_PAYPALCART_TEXT_INFO' => '<img src="https://www.paypal.com/de_DE/DE/i/logo/lockbox_150x47.gif" />',
  'MODULE_PAYMENT_PAYPALCART_TEXT_DESCRIPTION' => 'Pago expr&eacute;s de PayPal: el bot&oacute;n de PayPal en el carro de la compra y en la p&aacute;gina del art&iacute;culo para una conversi&oacute;n m&aacute;xima.<br/>Puede encontrar m&aacute;s informaci&oacute;n sobre el acceso directo a PayPal Express <a target="_blank" href="https://www.paypal.com/de/webapps/mpp/express-checkout">aqu&iacute;</a>.',
  'MODULE_PAYMENT_PAYPALCART_ALLOWED_TITLE' => 'Zonas permitidas',
  'MODULE_PAYMENT_PAYPALCART_ALLOWED_DESC' => 'Por favor, introduzca las zonas <b>por separado</b> que deben ser permitidas para utilizar este m&oacute;dulo (por ejemplo, AT,DE (dejar vac&iacute;o si desea permitir todas las zonas))',
  'MODULE_PAYMENT_PAYPALCART_STATUS_TITLE' => 'Habilitar PayPal Express',
  'MODULE_PAYMENT_PAYPALCART_STATUS_DESC' => '&iquest;Desea aceptar los pagos de PayPal Express?',
  'MODULE_PAYMENT_PAYPALCART_SORT_ORDER_TITLE' => 'Orden de clasificaci&oacute;n',
  'MODULE_PAYMENT_PAYPALCART_SORT_ORDER_DESC' => 'Ordenar la vista. El n&uacute;mero m&aacute;s bajo se mostrar&aacute; primero',
  'MODULE_PAYMENT_PAYPALCART_ZONE_TITLE' => 'Zona de pago',
  'MODULE_PAYMENT_PAYPALCART_ZONE_DESC' => 'Si se elige una zona, el m&eacute;todo de pago ser&aacute; v&aacute;lido s&oacute;lo para esta zona.',
  'MODULE_PAYMENT_PAYPALCART_LP' => '<br /><br /><a target="_blank" href="http://www.paypal.com/de/webapps/mpp/referral/paypal-business-account2?partner_id=EHALBVD4M2RQS"><strong>Cree una cuenta PayPal ahora.</strong></a>',

  'MODULE_PAYMENT_PAYPALCART_TEXT_EXTENDED_DESCRIPTION' => '<strong><font color="red">ATENCI&Oacute;N:</font></strong> Por favor, configure PayPal en "M&oacute;dulos de socios" -> "PayPal" -> <a href="'.xtc_href_link('paypal_config.php').'"><strong>"Configuraci&oacute;n de PayPal"</strong></a>!',

  'MODULE_PAYMENT_PAYPALCART_TEXT_ERROR_HEADING' => 'Nota',
  'MODULE_PAYMENT_PAYPALCART_TEXT_ERROR_MESSAGE' => 'El pago de PayPal ha sido cancelado',

  'TEXT_PAYPAL_CART_ACCOUNT_CREATED' => 'Hemos creado una cuenta de cliente con su direcci&oacute;n de correo electr&oacute;nico de PayPal. Puede solicitar la contrase&ntilde;a para su nueva cuenta de cliente m&aacute;s tarde utilizando la funci&oacute;n "Contrase&ntilde;a olvidada".',
);


foreach ($lang_array as $key => $val) {
  defined($key) or define($key, $val);
}
?>
