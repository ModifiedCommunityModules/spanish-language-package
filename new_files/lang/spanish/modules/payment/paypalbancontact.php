<?php
/* -----------------------------------------------------------------------------------------
   $Id: paypalbancontact.php 14303 2022-04-13 08:17:35Z GTB $

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   -----------------------------------------------------------------------------------------
   Released under the GNU General Public License
   ---------------------------------------------------------------------------------------*/


$lang_array = array(
  'MODULE_PAYMENT_PAYPALBANCONTACT_TEXT_TITLE' => 'Bancontact a través de PayPal',
  'MODULE_PAYMENT_PAYPALBANCONTACT_TEXT_ADMIN_TITLE' => 'Bancontact a través de PayPal',
  'MODULE_PAYMENT_PAYPALBANCONTACT_TEXT_INFO' => '<img src="https://www.paypalobjects.com/images/checkout/alternative_payments/paypal_bancontact_color.svg" />',
  'MODULE_PAYMENT_PAYPALBANCONTACT_TEXT_DESCRIPTION' => 'Después de "confirmar" será dirigido a Bancontact para pagar su pedido.<br />De vuelta en la tienda recibirá su pedido por correo electrónico.<br />PayPal es la forma más segura de pagar en Internet. Mantenemos tus datos a salvo de terceros y podemos ayudarte a recuperar tu dinero si algo va mal.',
  'MODULE_PAYMENT_PAYPALBANCONTACT_ALLOWED_TITLE' => 'Zonas permitidas',
  'MODULE_PAYMENT_PAYPALBANCONTACT_ALLOWED_DESC' => 'Por favor, introduzca las zonas <b>por separado</b> a las que se debe permitir el uso de este módulo (por ejemplo, AT,DE (déjelo vacío si quiere permitir todas las zonas))',
  'MODULE_PAYMENT_PAYPALBANCONTACT_STATUS_TITLE' => 'Habilitar Bancontact a través de PayPal',
  'MODULE_PAYMENT_PAYPALBANCONTACT_STATUS_DESC' => '¿Desea aceptar los pagos de PayPal Bancontact?',
  'MODULE_PAYMENT_PAYPALBANCONTACT_SORT_ORDER_TITLE' => 'Orden de clasificación',
  'MODULE_PAYMENT_PAYPALBANCONTACT_SORT_ORDER_DESC' => 'Orden de la vista. El número más bajo se mostrará primero',
  'MODULE_PAYMENT_PAYPALBANCONTACT_ZONE_TITLE' => 'Zona de pago',
  'MODULE_PAYMENT_PAYPALBANCONTACT_ZONE_DESC' => 'Si se elige una zona, el método de pago será válido sólo para esta zona.',
  'MODULE_PAYMENT_PAYPALBANCONTACT_LP' => '<br /><br /><a target="_blank" href="http://www.paypal.com/de/webapps/mpp/referral/paypal-business-account2?partner_id=EHALBVD4M2RQS"><strong>Cree una cuenta PayPal ahora.</strong></a>',

  'MODULE_PAYMENT_PAYPALBANCONTACT_TEXT_EXTENDED_DESCRIPTION' => '<strong><font color="red">ATENCIÓN:</font></strong> Por favor, establezca la configuración de PayPal en "Módulos para socios" -> "PayPal" -> <a href="'.xtc_href_link('paypal_config.php').'"><strong>"Configuración de PayPal"</strong></a>!',

  'MODULE_PAYMENT_PAYPALBANCONTACT_TEXT_ERROR_HEADING' => 'Nota',
  'MODULE_PAYMENT_PAYPALBANCONTACT_TEXT_ERROR_MESSAGE' => 'El pago con Bancontact a través de PayPal fue cancelado',
);


foreach ($lang_array as $key => $val) {
  defined($key) or define($key, $val);
}
?>
