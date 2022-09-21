<?php
/* -----------------------------------------------------------------------------------------
   $Id: paypalpui.php 14373 2022-04-26 07:53:38Z GTB $

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   -----------------------------------------------------------------------------------------
   Released under the GNU General Public License
   ---------------------------------------------------------------------------------------*/


$lang_array = array(
  'MODULE_PAYMENT_PAYPALPUI_TEXT_TITLE' => 'Pagar al recibir la factura',
  'MODULE_PAYMENT_PAYPALPUI_TEXT_ADMIN_TITLE' => 'Pagar al recibir la factura a través de PayPal',
  'MODULE_PAYMENT_PAYPALPUI_TEXT_INFO' => 'Al hacer clic en el botón, acepta las <a target="_blank" href="https://www.ratepay.com/legal-payment-terms">condiciones de pago</a> y <a target="_blank" href="https://www.ratepay.com/legal-payment-dataprivacy">realización de una comprobación de riesgos</a> del socio de pago, Ratepay. También acepta la <a target="_blank" href="https://www.paypal.com/de/webapps/mpp/ua/privacy-full?locale.x=eng_DE&_ga=1.187051880.1362749179.1647260107">declaración de privacidad</a> de PayPal. Si se acepta su solicitud de compra contra factura, la reclamación del precio de compra se asignará a Ratepay, y usted sólo podrá pagar a Ratepay, no al comerciante.',
  'MODULE_PAYMENT_PAYPALPUI_TEXT_DESCRIPTION' => '<strong><font color="red">ATENCIÓN:</font></strong> Para que el pago de la factura funcione correctamente, deben establecerse los siguientes webhooks en la configuración de PayPal para que el estado se cambie correctamente:<ul><li>PAYMENT.CAPTURE.COMPLETED</li><li>PAYMENT.CAPTURE.DENIED</li></ul>',
  'MODULE_PAYMENT_PAYPALPUI_ALLOWED_TITLE' => 'Zonas permitidas',
  'MODULE_PAYMENT_PAYPALPUI_ALLOWED_DESC' => 'Por favor, introduzca las zonas <b>por separado</b> a las que se debe permitir el uso de este módulo (por ejemplo, AT,DE (déjelo vacío si quiere permitir todas las zonas))',
  'MODULE_PAYMENT_PAYPALPUI_STATUS_TITLE' => 'Habilitar el pago de la factura a través de PayPal',
  'MODULE_PAYMENT_PAYPALPUI_STATUS_DESC' => '¿Desea aceptar el pago de facturas con PayPal?',
  'MODULE_PAYMENT_PAYPALPUI_SORT_ORDER_TITLE' => 'Orden de clasificación',
  'MODULE_PAYMENT_PAYPALPUI_SORT_ORDER_DESC' => 'Orden de la vista. El número más bajo se mostrará primero',
  'MODULE_PAYMENT_PAYPALPUI_ZONE_TITLE' => 'Zona de pago',
  'MODULE_PAYMENT_PAYPALPUI_ZONE_DESC' => 'Si se elige una zona, el método de pago será válido sólo para esta zona.',
  'MODULE_PAYMENT_PAYPALPUI_LP' => '<br /><br /><a target="_blank" href="http://www.paypal.com/de/webapps/mpp/referral/paypal-business-account2?partner_id=EHALBVD4M2RQS"><strong>Cree una cuenta PayPal ahora.</strong></a>',

  'MODULE_PAYMENT_PAYPALPUI_TEXT_EXTENDED_DESCRIPTION' => '<strong><font color="red">ATENCIÓN:</font></strong> Por favor, establezca la configuración de PayPal en "Módulos para socios" -> "PayPal" -> <a href="'.xtc_href_link('paypal_config.php').'"><strong>"Configuración de PayPal"</strong></a>!',

  'MODULE_PAYMENT_PAYPALPUI_TEXT_ERROR_HEADING' => 'Nota',
  'MODULE_PAYMENT_PAYPALPUI_TEXT_ERROR_MESSAGE' => 'El pago contra factura no está disponible en este momento, por favor elija otro método de pago.',

  'MODULE_PAYMENT_PAYPALPUI_PAYMENT_SOURCE_INFO_CANNOT_BE_VERIFIED' => 'La combinación de su nombre y dirección no ha podido ser validada. Por favor, corrija sus datos y vuelva a intentarlo. Puede encontrar más información en la <a target="_blank" href="https://www.ratepay.com/legal-payment-dataprivacy">Declaración de privacidad de datos de Ratepay</a> o puede ponerse en contacto con Ratepay mediante este <a target="_blank" href="https://www.ratepay.com/kontakt">formulario de contacto</a>.',
  'MODULE_PAYMENT_PAYPALPUI_PAYMENT_SOURCE_DECLINED_BY_PROCESSOR' => 'No es posible utilizar el método de pago seleccionado. Esta decisión se basa en el tratamiento automatizado de datos. Puede encontrar más información en la <a target="_blank" href="https://www.ratepay.com/legal-payment-dataprivacy">Declaración de privacidad de datos de Ratepay</a> o puede ponerse en contacto con Ratepay mediante este <a target="_blank" href="https://www.ratepay.com/kontakt">formulario de contacto</a>.',
  'MODULE_PAYMENT_PAYPALPUI_PAYMENT_SOURCE_CANNOT_BE_USED' => 'No es posible utilizar el método de pago seleccionado. Esta decisión se basa en el tratamiento automatizado de datos. Puede encontrar más información en la <a target="_blank" href="https://www.ratepay.com/legal-payment-dataprivacy">Declaración de privacidad de datos de Ratepay</a> o puede ponerse en contacto con Ratepay mediante este <a target="_blank" href="https://www.ratepay.com/kontakt">formulario de contacto</a>.',
  'MODULE_PAYMENT_PAYPALPUI_BILLING_ADDRESS_INVALID' => 'No se ha podido validar su dirección de facturación.',
  'MODULE_PAYMENT_PAYPALPUI_SHIPPING_ADDRESS_INVALID' => 'No se ha podido validar su dirección de envío.',

  'MALFORMED_REQUEST_JSON' => 'No es posible utilizar el método de pago seleccionado. Esta decisión se basa en el tratamiento automatizado de datos. Puede encontrar más información en la <a target="_blank" href="https://www.ratepay.com/legal-payment-dataprivacy">Declaración de privacidad de datos de Ratepay</a> o puede ponerse en contacto con Ratepay mediante este <a target="_blank" href="https://www.ratepay.com/kontakt">formulario de contacto</a>.',

  'MODULE_PAYMENT_PAYPALPUI_TEXT_DOB' => 'Fecha de nacimiento (por ejemplo, 21/05/1970):',
  'MODULE_PAYMENT_PAYPALPUI_TEXT_TELEPHONE' => 'Número de teléfono:',
  'MODULE_PAYMENT_PAYPALPUI_TEXT_SERVICE' => 'Servicio de atención al cliente: %s',

  'JS_DOB_ERROR' => 'Su fecha de nacimiento debe introducirse de la siguiente forma DD/MM/AAAA (por ejemplo, 21/05/1970)',
  'JS_TELEPHONE_ERROR' => 'Para este método de pago necesitamos su número de teléfono.',

  'MODULE_PAYMENT_PAYPALPUI_TEXT_LEGAL' => 'Al hacer clic en el botón, acepta las <a target="_blank" href="https://www.ratepay.com/legal-payment-terms">condiciones de pago</a> y <a target="_blank" href="https://www.ratepay.com/legal-payment-dataprivacy">realización de una comprobación de riesgos</a> del socio de pago, Ratepay. También acepta la <a target="_blank" href="https://www.paypal.com/de/webapps/mpp/ua/privacy-full?locale.x=eng_DE&_ga=1.187051880.1362749179.1647260107">declaración de privacidad</a> de PayPal. Si se acepta su solicitud de compra contra factura, la reclamación del precio de compra se asignará a Ratepay, y usted sólo podrá pagar a Ratepay, no al comerciante.',
);


foreach ($lang_array as $key => $val) {
  defined($key) or define($key, $val);
}
?>
