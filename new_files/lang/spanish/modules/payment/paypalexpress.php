<?php
/* -----------------------------------------------------------------------------------------
   $Id: paypalexpress.php 14303 2022-04-13 08:17:35Z GTB $

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   -----------------------------------------------------------------------------------------
   Released under the GNU General Public License
   ---------------------------------------------------------------------------------------*/


$lang_array = array(
  'MODULE_PAYMENT_PAYPALEXPRESS_TEXT_TITLE' => 'PayPal exprés',
  'MODULE_PAYMENT_PAYPALEXPRESS_TEXT_ADMIN_TITLE' => 'PayPal exprés',
  'MODULE_PAYMENT_PAYPALEXPRESS_TEXT_INFO' => ((!defined('RUN_MODE_ADMIN') && function_exists('xtc_href_link')) ? '<img src="'.xtc_href_link(DIR_WS_ICONS.'paypal.png', '', 'SSL', false).'" />' : ''),
  'MODULE_PAYMENT_PAYPALEXPRESS_TEXT_DESCRIPTION' => 'Pago exprés de PayPal: el botón de PayPal en el carro de la compra y en la página del producto para obtener la máxima conversión.<br/>Puede encontrar más información sobre el atajo de PayPal exprés <a target="_blank" href="https://www.paypal.com/de/webapps/mpp/express-checkout">aquí</a>.',
  'MODULE_PAYMENT_PAYPALEXPRESS_ALLOWED_TITLE' => 'Zonas permitidas',
  'MODULE_PAYMENT_PAYPALEXPRESS_ALLOWED_DESC' => 'Por favor, introduzca las zonas <b>por separado</b> a las que se debe permitir el uso de este módulo (por ejemplo, AT,DE (déjelo vacío si quiere permitir todas las zonas))',
  'MODULE_PAYMENT_PAYPALEXPRESS_STATUS_TITLE' => 'Activar PayPal Express',
  'MODULE_PAYMENT_PAYPALEXPRESS_STATUS_DESC' => '¿Desea aceptar los pagos de PayPal Express?',
  'MODULE_PAYMENT_PAYPALEXPRESS_SORT_ORDER_TITLE' => 'Orden de clasificación',
  'MODULE_PAYMENT_PAYPALEXPRESS_SORT_ORDER_DESC' => 'Orden de la vista. El número más bajo se mostrará primero',
  'MODULE_PAYMENT_PAYPALEXPRESS_ZONE_TITLE' => 'Zona de pago',
  'MODULE_PAYMENT_PAYPALEXPRESS_ZONE_DESC' => 'Si se elige una zona, el método de pago será válido sólo para esta zona.',
  'MODULE_PAYMENT_PAYPALEXPRESS_LP' => '<br /><br /><a target="_blank" href="http://www.paypal.com/de/webapps/mpp/referral/paypal-business-account2?partner_id=EHALBVD4M2RQS"><strong>Cree una cuenta PayPal ahora.</strong></a>',

  'MODULE_PAYMENT_PAYPALEXPRESS_TEXT_EXTENDED_DESCRIPTION' => '<strong><font color="red">ATENCIÓN:</font></strong> Por favor, establezca la configuración de PayPal en "Módulos para socios" -> "PayPal" -> <a href="'.xtc_href_link('paypal_config.php').'"><strong>"Configuración de PayPal"</strong></a>!',

  'MODULE_PAYMENT_PAYPALEXPRESS_TEXT_ERROR_HEADING' => 'Nota',
  'MODULE_PAYMENT_PAYPALEXPRESS_TEXT_ERROR_MESSAGE' => 'El pago de PayPal ha sido cancelado',

  'TEXT_PAYPAL_CART_ACCOUNT_CREATED' => 'Hemos creado una cuenta de cliente con su dirección de correo electrónico de PayPal. Puede solicitar la contraseña de su nueva cuenta de cliente más adelante mediante la función "Contraseña olvidada".',
);


foreach ($lang_array as $key => $val) {
  defined($key) or define($key, $val);
}
?>
