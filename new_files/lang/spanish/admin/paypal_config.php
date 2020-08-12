<?php
/* -----------------------------------------------------------------------------------------
   $Id$

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   -----------------------------------------------------------------------------------------
   Released under the GNU General Public License
   ---------------------------------------------------------------------------------------*/


$lang_array = array(
  'TEXT_PAYPAL_CONFIG_HEADING_TITLE' => 'Configuraci&oacute;n de PayPal',
  'TEXT_PAYPAL_CONFIG_SECRET_SANDBOX' => 'Caja de arena secreta:',

  'TEXT_PAYPAL_CONFIG_CLIENT_LIVE' => 'Cliente de Live ID:',
  'TEXT_PAYPAL_CONFIG_CLIENT_LIVE_INFO' => 'Cree una nueva aplicaci&oacute;n para estos datos en su cuenta de PayPal.',

  'TEXT_PAYPAL_CONFIG_SECRET_LIVE' => 'La vida secreta:',
  'TEXT_PAYPAL_CONFIG_SECRET_LIVE_INFO' => 'Cree una nueva aplicaci&oacute;n para estos datos en su cuenta de PayPal.',

  'TEXT_PAYPAL_APPINATOR_LIVE' => 'Solicitar datos en vivo',
  'TEXT_PAYPAL_APPINATOR_SANDBOX' => 'Solicitar datos de la caja de arena',

  'TEXT_PAYPAL_CONFIG_CLIENT_SANDBOX' => 'Caja de arena de identificaci&oacute;n de clientes:',
  'TEXT_PAYPAL_CONFIG_CLIENT_SANDBOX_INFO' => 'Cree una nueva aplicaci&oacute;n para estos datos en su cuenta de PayPal.',

  'TEXT_PAYPAL_CONFIG_SECRET_SANDBOX' => 'Caja de arena secreta:',
  'TEXT_PAYPAL_CONFIG_SECRET_SANDBOX_INFO' => 'Cree una nueva aplicaci&oacute;n para estos datos en su cuenta de PayPal.',
  'TEXT_PAYPAL_CONFIG_CART_INFO' => '&iquest;Transferir los detalles del carro de la compra a PayPal? <br/><br/><b>Nota:</b> Esta configuraci&oacute;n puede causar problemas al utilizar los ot-m&oacute;dulos en "M&oacute;dulos" -> "Total del pedido", que conceden un descuento o recargo ("Descuento [ot_discount]", "Cupones de descuento [ot_coupon]", "Vales de regalo [ot_gv]", "Tipo de pago descuento &amp; recargo [ot_payment]", etc.).<br/>Configuraci&oacute;n recomendada: "no"',

  'TEXT_PAYPAL_INSTALLMENT_BANNER_DISPLAY' => 'Banner de cr&eacute;dito:',
  'TEXT_PAYPAL_INSTALLMENT_BANNER_DISPLAY_INFO' => 'Mostrar la bandera de cr&eacute;dito?<br/><br/><b>Nota:</b> El pago a plazos de PayPal s&oacute;lo est&aacute; disponible si se aprueba su cuenta de PayPal.',

  'TEXT_PAYPAL_INSTALLMENT_BANNER_COLOR' => 'Color de la bandera:',
  'TEXT_PAYPAL_INSTALLMENT_BANNER_COLOR_INFO' => 'Elija el color para el banner.',

  'TEXT_PAYPAL_CONFIG_MODE' => 'Modus:',
  'TEXT_PAYPAL_CONFIG_MODE_INFO' => '',

  'TEXT_PAYPAL_CONFIG_INVOICE_PREFIX' => 'Prefijo del n&uacute;mero de orden:',
  'TEXT_PAYPAL_CONFIG_INVOICE_PREFIX_INFO' => 'Cadena de caracteres de libre elecci&oacute;n (prefijo), que precede al n&uacute;mero de pedido y se utiliza para generar el n&uacute;mero de factura de PayPal.<br />Esto permite que varias tiendas trabajen con una sola aplicaci&oacute;n de PayPal. Se evitan los conflictos con los mismos n&uacute;meros de orden. Cada pedido recibe su propio n&uacute;mero de factura en la cuenta de PayPal.',

  'TEXT_PAYPAL_CONFIG_TRANSACTION' => 'Transacci&oacute;n:',
  'TEXT_PAYPAL_CONFIG_TRANSACTION_INFO' => 'Seleccione el tipo de transacci&oacute;n.<br/><br/><b>Nota:</b> Con PayPal Plus siempre hay una venta.',

  'TEXT_PAYPAL_CONFIG_CAPTURE' => 'Entrada manual:',
  'TEXT_PAYPAL_CONFIG_CAPTURE_INFO' => '&iquest;Desea capturar los pagos en PayPal manualmente (Captura)?<br/><br/><b>Nota:</b> Para ello, es necesario que la transacci&oacute;n se fije en Autorizar.',

  'TEXT_PAYPAL_CONFIG_CART' => 'Carro de la compra.:',
  'TEXT_PAYPAL_CONFIG_CART_INFO' => 'Si el carro de la compra se transfiere a PayPal?',

  'TEXT_PAYPAL_CONFIG_STATE_SUCCESS' => 'Estado Exitoso:',
  'TEXT_PAYPAL_CONFIG_STATE_SUCCESS_INFO' => 'Estado con un pedido exitoso',

  'TEXT_PAYPAL_CONFIG_STATE_REJECTED' => 'Estado Rechazado:',
  'TEXT_PAYPAL_CONFIG_STATE_REJECTED_INFO' => 'Estado de la orden rechazada',

  'TEXT_PAYPAL_CONFIG_STATE_PENDING' => 'Estado de espera:',
  'TEXT_PAYPAL_CONFIG_STATE_PENDING_INFO' => 'Estado de un pedido exitoso, que a&uacute;n no ha sido confirmado por PayPal',

  'TEXT_PAYPAL_CONFIG_STATE_CAPTURED' => 'Estado registrado:',
  'TEXT_PAYPAL_CONFIG_STATE_CAPTURED_INFO' => 'Estado desencadenado por una captura',
  
  'TEXT_PAYPAL_CONFIG_STATE_REFUNDED' => 'Reembolso del estado:',
  'TEXT_PAYPAL_CONFIG_STATE_REFUNDED_INFO' => 'Estado dibujado por un Reembolso',
  
  'TEXT_PAYPAL_CONFIG_STATE_TEMP' => 'Estado Temp:',
  'TEXT_PAYPAL_CONFIG_STATE_TEMP_INFO' => 'Estado de una orden no confirmada',

  'TEXT_PAYPAL_CONFIG_LOG' => 'Bit&aacute;cora:',
  'TEXT_PAYPAL_CONFIG_LOG_INFO' => 'Si se va a escribir un registro?',

  'TEXT_PAYPAL_CONFIG_LOG_LEVEL' => 'Nivel de registro:',
  'TEXT_PAYPAL_CONFIG_LOG_LEVEL_INFO' => '<b>Nota:</b> En el modo en vivo, el registro s&oacute;lo es posible hasta el nivel FINE.',
  
  'BUTTON_PAYPAL_STATUS_INSTALL' => 'Instalar estados de pedidos',
);


foreach ($lang_array as $key => $val) {
  defined($key) or define($key, $val);
}


// orders status
$PAYPAL_INST_ORDER_STATUS_TMP_NAME = 'PayPal abgebrochen';
$PAYPAL_INST_ORDER_STATUS_SUCCESS_NAME = 'PayPal bezahlt';
$PAYPAL_INST_ORDER_STATUS_PENDING_NAME = 'PayPal wartend';
$PAYPAL_INST_ORDER_STATUS_CAPTURED_NAME = 'PayPal erfasst';
$PAYPAL_INST_ORDER_STATUS_REFUNDED_NAME = 'PayPal erstattet';
$PAYPAL_INST_ORDER_STATUS_REJECTED_NAME = 'PayPal abgelehnt';
$PAYPAL_INST_ORDER_STATUS_ACCEPTED_NAME = 'PayPal aceptado';
?>