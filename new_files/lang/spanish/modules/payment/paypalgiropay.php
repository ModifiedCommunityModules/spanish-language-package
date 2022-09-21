<?php
/* -----------------------------------------------------------------------------------------
   $Id: paypalgiropay.php 14303 2022-04-13 08:17:35Z GTB $

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   -----------------------------------------------------------------------------------------
   Released under the GNU General Public License
   ---------------------------------------------------------------------------------------*/


$lang_array = array(
  'MODULE_PAYMENT_PAYPALGIROPAY_TEXT_TITLE' => 'Giropay a través de PayPal',
  'MODULE_PAYMENT_PAYPALGIROPAY_TEXT_ADMIN_TITLE' => 'Giropay a través de PayPal',
  'MODULE_PAYMENT_PAYPALGIROPAY_TEXT_INFO' => '<img src="https://www.paypalobjects.com/images/checkout/alternative_payments/paypal_giropay_color.svg" />',
  'MODULE_PAYMENT_PAYPALGIROPAY_TEXT_DESCRIPTION' => 'Después de "confirmar" será dirigido a Giropay para pagar su pedido.<br />De vuelta en la tienda recibirá su pedido por correo electrónico.<br />PayPal es la forma más segura de pagar en línea. Mantenemos tus datos a salvo de otros y podemos ayudarte a recuperar tu dinero si algo va mal.',
  'MODULE_PAYMENT_PAYPALGIROPAY_ALLOWED_TITLE' => 'Zonas permitidas',
  'MODULE_PAYMENT_PAYPALGIROPAY_ALLOWED_DESC' => 'Por favor, introduzca las zonas <b>por separado</b> a las que se debe permitir el uso de este módulo (por ejemplo, AT,DE (déjelo vacío si quiere permitir todas las zonas))',
  'MODULE_PAYMENT_PAYPALGIROPAY_STATUS_TITLE' => 'Activar Giropay a través de PayPal',
  'MODULE_PAYMENT_PAYPALGIROPAY_STATUS_DESC' => '¿Quiere aceptar los pagos de PayPal Giropay?',
  'MODULE_PAYMENT_PAYPALGIROPAY_SORT_ORDER_TITLE' => 'Orden de clasificación',
  'MODULE_PAYMENT_PAYPALGIROPAY_SORT_ORDER_DESC' => 'Orden de la vista. El número más bajo se mostrará primero',
  'MODULE_PAYMENT_PAYPALGIROPAY_ZONE_TITLE' => 'Zona de pago',
  'MODULE_PAYMENT_PAYPALGIROPAY_ZONE_DESC' => 'Si se elige una zona, el método de pago será válido sólo para esta zona.',
  'MODULE_PAYMENT_PAYPALGIROPAY_LP' => '<br /><br /><a target="_blank" href="http://www.paypal.com/de/webapps/mpp/referral/paypal-business-account2?partner_id=EHALBVD4M2RQS"><strong>Cree una cuenta PayPal ahora.</strong></a>',

  'MODULE_PAYMENT_PAYPALGIROPAY_TEXT_EXTENDED_DESCRIPTION' => '<strong><font color="red">ATENCIÓN:</font></strong> Por favor, establezca la configuración de PayPal en "Módulos para socios" -> "PayPal" -> <a href="'.xtc_href_link('paypal_config.php').'"><strong>"Configuración de PayPal"</strong></a>!',

  'MODULE_PAYMENT_PAYPALGIROPAY_TEXT_ERROR_HEADING' => 'Nota',
  'MODULE_PAYMENT_PAYPALGIROPAY_TEXT_ERROR_MESSAGE' => 'El pago con Giropay a través de PayPal fue cancelado',
);


foreach ($lang_array as $key => $val) {
  defined($key) or define($key, $val);
}
?>
