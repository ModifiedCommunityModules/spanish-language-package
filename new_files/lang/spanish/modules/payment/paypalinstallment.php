<?php
/* -----------------------------------------------------------------------------------------
   $Id: paypalinstallment.php 11168 2018-05-30 13:54:19Z Tomcraft $

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   -----------------------------------------------------------------------------------------
   Released under the GNU General Public License
   ---------------------------------------------------------------------------------------*/


$lang_array = array(
  'MODULE_PAYMENT_PAYPALINSTALLMENT_TEXT_TITLE' => 'Pago a plazos potenciado por PayPal',
  'MODULE_PAYMENT_PAYPALINSTALLMENT_TEXT_INFO' => '<img src="https://www.paypal.com/de_DE/DE/i/logo/lockbox_150x47.gif" />',
  'MODULE_PAYMENT_PAYPALINSTALLMENT_TEXT_DESCRIPTION' => 'Instalar con PayPal<br/>Puede encontrar m&aacute;s informaci&oacute;n acerca de Instalar con PayPal <a target="_blank" href="https://www.paypal.com/de/webapps/mpp/installments">aqu&iacute;</a>.',
  'MODULE_PAYMENT_PAYPALINSTALLMENT_ALLOWED_TITLE' => 'Zonas permitidas',
  'MODULE_PAYMENT_PAYPALINSTALLMENT_ALLOWED_DESC' => 'Por favor, introduzca las zonas <b>por separado</b> que deben ser permitidas para utilizar este m&oacute;dulo (por ejemplo, AT,DE (dejar vac&iacute;o si desea permitir todas las zonas))',
  'MODULE_PAYMENT_PAYPALINSTALLMENT_STATUS_TITLE' => 'Habilitar pago a plazos potenciado por PayPal',
  'MODULE_PAYMENT_PAYPALINSTALLMENT_STATUS_DESC' => '&iquest;Quieres aceptar pago a plazos potenciado por PayPal pagos?',
  'MODULE_PAYMENT_PAYPALINSTALLMENT_SORT_ORDER_TITLE' => 'Orden de clasificaci&oacute;n',
  'MODULE_PAYMENT_PAYPALINSTALLMENT_SORT_ORDER_DESC' => 'Ordenar la vista. El n&uacute;mero m&aacute;s bajo se mostrar&aacute; primero',
  'MODULE_PAYMENT_PAYPALINSTALLMENT_ZONE_TITLE' => 'Zona de pago',
  'MODULE_PAYMENT_PAYPALINSTALLMENT_ZONE_DESC' => 'Si se elige una zona, el m&eacute;todo de pago ser&aacute; v&aacute;lido s&oacute;lo para esta zona.',
  'MODULE_PAYMENT_PAYPALINSTALLMENT_LP' => '<br /><br /><a target="_blank" href="http://www.paypal.com/de/webapps/mpp/referral/paypal-business-account2?partner_id=EHALBVD4M2RQS"><strong>Cree una cuenta PayPal ahora.</strong></a>',

  'MODULE_PAYMENT_PAYPALINSTALLMENT_TEXT_EXTENDED_DESCRIPTION' => '<strong><font color="red">ATENCI&Oacute;N:</font></strong> Por favor, configure PayPal en "M&oacute;dulos de socios" -> "PayPal" -> <a href="'.xtc_href_link('paypal_config.php').'"><strong>"Configuraci&oacute;n de PayPal"</strong></a>!',

  'MODULE_PAYMENT_PAYPALINSTALLMENT_TEXT_ERROR_HEADING' => 'Nota',
  'MODULE_PAYMENT_PAYPALINSTALLMENT_TEXT_ERROR_MESSAGE' => 'El pago de PayPal ha sido cancelado',

  'MODULE_PAYMENT_PAYPALINSTALLMENT_TEXT_CHECKBOX' => 'Acepto que mis datos sean compartidos con PayPal.',
  'MODULE_PAYMENT_PAYPALINSTALLMENT_TEXT_ERROR_CHECKBOX' => 'Por favor, acepta que tus datos sean compartidos con PayPal.',
);


foreach ($lang_array as $key => $val) {
  defined($key) or define($key, $val);
}
?>