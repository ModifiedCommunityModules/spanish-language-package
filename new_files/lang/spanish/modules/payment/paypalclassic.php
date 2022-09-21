<?php
/* -----------------------------------------------------------------------------------------
   $Id: paypalclassic.php 11170 2018-05-30 14:28:24Z GTB $

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   -----------------------------------------------------------------------------------------
   Released under the GNU General Public License
   ---------------------------------------------------------------------------------------*/


$lang_array = array(
  'MODULE_PAYMENT_PAYPALCLASSIC_TEXT_TITLE' => 'PayPal',
  'MODULE_PAYMENT_PAYPALCLASSIC_TEXT_ADMIN_TITLE' => 'PayPal con PayPal Express',
  'MODULE_PAYMENT_PAYPALCLASSIC_TEXT_INFO' => '<img src="https://www.paypal.com/de_DE/DE/i/logo/lockbox_150x47.gif" />',
  'MODULE_PAYMENT_PAYPALCLASSIC_TEXT_DESCRIPTION' => 'Despu&eacute;s de "confirmar" ser&aacute; enviado a PayPal para pagar su pedido.<br />De vuelta a la tienda, recibir&aacute;s tu pedido por correo.<br />PayPal es la forma m&aacute;s segura de pagar en l&iacute;nea. Mantenemos sus datos a salvo de otros y podemos ayudarle a recuperar su dinero si algo sale mal.',
  'MODULE_PAYMENT_PAYPALCLASSIC_ALLOWED_TITLE' => 'Zonas permitidas',
  'MODULE_PAYMENT_PAYPALCLASSIC_ALLOWED_DESC' => 'Por favor, introduzca las zonas <b>por separado</b> que deben ser permitidas para utilizar este m&oacute;dulo (por ejemplo, AT,DE (dejar vac&iacute;o si desea permitir todas las zonas))',
  'MODULE_PAYMENT_PAYPALCLASSIC_STATUS_TITLE' => 'Habilitar PayPal',
  'MODULE_PAYMENT_PAYPALCLASSIC_STATUS_DESC' => '&iquest;Desea aceptar pagos de PayPal?',
  'MODULE_PAYMENT_PAYPALCLASSIC_SORT_ORDER_TITLE' => 'Orden de clasificaci&oacute;n',
  'MODULE_PAYMENT_PAYPALCLASSIC_SORT_ORDER_DESC' => 'Ordenar la vista. El n&uacute;mero m&aacute;s bajo se mostrar&aacute; primero',
  'MODULE_PAYMENT_PAYPALCLASSIC_ZONE_TITLE' => 'Zona de pago',
  'MODULE_PAYMENT_PAYPALCLASSIC_ZONE_DESC' => 'Si se elige una zona, el m&eacute;todo de pago ser&aacute; v&aacute;lido s&oacute;lo para esta zona.',
  'MODULE_PAYMENT_PAYPALCLASSIC_LP' => '<br /><br /><a target="_blank" href="http://www.paypal.com/de/webapps/mpp/referral/paypal-business-account2?partner_id=EHALBVD4M2RQS"><strong>Cree una cuenta PayPal ahora.</strong></a>',

  'MODULE_PAYMENT_PAYPALCLASSIC_TEXT_EXTENDED_DESCRIPTION' => '<strong><font color="red">ATENCI&Oacute;N:</font></strong> Por favor, configure PayPal en "M&oacute;dulos de socios" -> "PayPal" -> <a href="'.xtc_href_link('paypal_config.php').'"><strong>"Configuraci&oacute;n de PayPal"</strong></a>!',

  'MODULE_PAYMENT_PAYPALCLASSIC_TEXT_ERROR_HEADING' => 'Nota',
  'MODULE_PAYMENT_PAYPALCLASSIC_TEXT_ERROR_MESSAGE' => 'El pago de PayPal ha sido cancelado',
);


foreach ($lang_array as $key => $val) {
  defined($key) or define($key, $val);
}
?>
