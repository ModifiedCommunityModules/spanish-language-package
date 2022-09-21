<?php
/* -----------------------------------------------------------------------------------------
   $Id: paypalacdc.php 14303 2022-04-13 08:17:35Z GTB $

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   -----------------------------------------------------------------------------------------
   Released under the GNU General Public License
   ---------------------------------------------------------------------------------------*/


$lang_array = array(
  'MODULE_PAYMENT_PAYPALACDC_TEXT_TITLE' => 'Tarjeta de crédito',
  'MODULE_PAYMENT_PAYPALACDC_TEXT_ADMIN_TITLE' => 'Tarjeta de crédito (sin nota a PayPal)',
  'MODULE_PAYMENT_PAYPALACDC_TEXT_INFO' => ((!defined('RUN_MODE_ADMIN') && function_exists('xtc_href_link')) ? '<img src="'.xtc_href_link(DIR_WS_ICONS.'paypal_creditcard.png', '', 'SSL', false).'" />' : ''),
  'MODULE_PAYMENT_PAYPALACDC_TEXT_DESCRIPTION' => 'En el último paso del proceso de compra, se le pedirá que introduzca los datos de su tarjeta de crédito para pagar su pedido.',
  'MODULE_PAYMENT_PAYPALACDC_ALLOWED_TITLE' => 'Zonas permitidas',
  'MODULE_PAYMENT_PAYPALACDC_ALLOWED_DESC' => 'Por favor, introduzca las zonas <b>por separado</b> a las que se debe permitir el uso de este módulo (por ejemplo, AT,DE (déjelo vacío si quiere permitir todas las zonas))',
  'MODULE_PAYMENT_PAYPALACDC_STATUS_TITLE' => 'Activar la tarjeta de crédito',
  'MODULE_PAYMENT_PAYPALACDC_STATUS_DESC' => '¿Quiere aceptar pagos con tarjeta de crédito de PayPal?',
  'MODULE_PAYMENT_PAYPALACDC_SORT_ORDER_TITLE' => 'Orden de clasificación',
  'MODULE_PAYMENT_PAYPALACDC_SORT_ORDER_DESC' => 'Orden de la vista. El número más bajo se mostrará primero',
  'MODULE_PAYMENT_PAYPALACDC_ZONE_TITLE' => 'Zona de pago',
  'MODULE_PAYMENT_PAYPALACDC_ZONE_DESC' => 'Si se elige una zona, el método de pago será válido sólo para esta zona.',
  'MODULE_PAYMENT_PAYPALACDC_LP' => '<br /><br /><a target="_blank" href="http://www.paypal.com/de/webapps/mpp/referral/paypal-business-account2?partner_id=EHALBVD4M2RQS"><strong>Cree una cuenta PayPal ahora.</strong></a>',

  'MODULE_PAYMENT_PAYPALACDC_TEXT_EXTENDED_DESCRIPTION' => '<strong><font color="red">ATENCIÓN:</font></strong> Por favor, establezca la configuración de PayPal en "Módulos para socios" -> "PayPal" -> <a href="'.xtc_href_link('paypal_config.php').'"><strong>"Configuración de PayPal"</strong></a>!',

  'MODULE_PAYMENT_PAYPALACDC_TEXT_ERROR_HEADING' => 'Nota',
  'MODULE_PAYMENT_PAYPALACDC_TEXT_ERROR_MESSAGE' => 'El pago con tarjeta de crédito fue cancelado',
  'MODULE_PAYMENT_PAYPALACDC_TEXT_ERROR_MSG' => 'Lamentablemente, el pago no puede realizarse.',

  'MODULE_PAYMENT_PAYPALACDC_TEXT_CARDNUMBER' => 'Número de tarjeta',
  'MODULE_PAYMENT_PAYPALACDC_TEXT_CARDHOLDER' => 'Titular de la tarjeta',
  'MODULE_PAYMENT_PAYPALACDC_TEXT_EXPIRATION' => 'Válido hasta',
  'MODULE_PAYMENT_PAYPALACDC_TEXT_CVV' => 'CVV',

  'MODULE_PAYMENT_PAYPALACDC_TEXT_CARDNUMBER_PLACEHOLDER' => 'Número de tarjeta',
  'MODULE_PAYMENT_PAYPALACDC_TEXT_EXPIRATION_PLACEHOLDER' => 'MM/YY',
  'MODULE_PAYMENT_PAYPALACDC_TEXT_CVV_PLACEHOLDER' => 'CVV',
);


foreach ($lang_array as $key => $val) {
  defined($key) or define($key, $val);
}
?>
