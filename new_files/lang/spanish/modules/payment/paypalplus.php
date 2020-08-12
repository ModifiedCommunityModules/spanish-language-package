<?php
/* -----------------------------------------------------------------------------------------
   $Id: paypalplus.php 11170 2018-05-30 14:28:24Z GTB $

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   -----------------------------------------------------------------------------------------
   Released under the GNU General Public License
   ---------------------------------------------------------------------------------------*/


$lang_array = array(
  'MODULE_PAYMENT_PAYPALPLUS_TEXT_TITLE' => 'PayPal Plus',
  'MODULE_PAYMENT_PAYPALPLUS_TEXT_ADMIN_TITLE' => 'PayPal Plus con PayPal Express',
  'MODULE_PAYMENT_PAYPALPLUS_TEXT_INFO' => 'Por favor, seleccione uno de los m&eacute;todos de pago que figuran aqu&iacute; haciendo clic.',
  'MODULE_PAYMENT_PAYPALPLUS_TEXT_DESCRIPTION' => 'PayPal Plus: las cuatro formas de pago m&aacute;s populares de los compradores alemanes: PayPal, d&eacute;bito directo, tarjeta de cr&eacute;dito y factura.<br/>Puede encontrar m&aacute;s informaci&oacute;n sobre PayPal Plus <a target="_blank" href="https://www.paypal.com/de/webapps/mpp/paypal-plus">aqu&iacute;</a>.',
  'MODULE_PAYMENT_PAYPALPLUS_ALLOWED_TITLE' => 'Zonas permitidas',
  'MODULE_PAYMENT_PAYPALPLUS_ALLOWED_DESC' => 'Por favor, introduzca las zonas <b>por separado</b> que deber&iacute;an estar permitidas para usar este m&oacute;dulo (por ejemplo, AT,DE (d&eacute;jelo vac&iacute;o si quiere permitir todas las zonas))',
  'MODULE_PAYMENT_PAYPALPLUS_STATUS_TITLE' => 'Habilitar PayPal Plus',
  'MODULE_PAYMENT_PAYPALPLUS_STATUS_DESC' => '&iquest;Quiere aceptar PayPal, tarjeta de cr&eacute;dito, domiciliaci&oacute;n bancaria o pago de facturas?',
  'MODULE_PAYMENT_PAYPALPLUS_SORT_ORDER_TITLE' => 'Orden de clasificaci&oacute;n',
  'MODULE_PAYMENT_PAYPALPLUS_SORT_ORDER_DESC' => 'Ordenar la vista. El n&uacute;mero m&aacute;s bajo se mostrar&aacute; primero',
  'MODULE_PAYMENT_PAYPALPLUS_ZONE_TITLE' => 'Zona de pago',
  'MODULE_PAYMENT_PAYPALPLUS_ZONE_DESC' => 'Si se elige una zona, el m&eacute;todo de pago ser&aacute; v&aacute;lido s&oacute;lo para esta zona.',
  'MODULE_PAYMENT_PAYPALPLUS_LP' => '<br /><br /><a target="_blank" href="http://www.paypal.com/de/webapps/mpp/referral/paypal-business-account2?partner_id=EHALBVD4M2RQS"><strong>Cree una cuenta PayPal ahora.</strong></a>',

  'MODULE_PAYMENT_PAYPALPLUS_TEXT_EXTENDED_DESCRIPTION' => '<strong><font color="red">ATENCI&Oacute;N:</font></strong> Por favor, configure PayPal en "M&oacute;dulos de socios" -> "PayPal" -> <a href="'.xtc_href_link('paypal_config.php').'"><strong>"Configuraci&oacute;n de PayPal"</strong></a>!',

  'MODULE_PAYMENT_PAYPALPLUS_TEXT_ERROR_HEADING' => 'Nota',
  'MODULE_PAYMENT_PAYPALPLUS_TEXT_ERROR_MESSAGE' => 'El pago de PayPal ha sido cancelado',

  'MODULE_PAYMENT_PAYPALPLUS_INVOICE' => 'Pague sobre la factura',
);


foreach ($lang_array as $key => $val) {
  defined($key) or define($key, $val);
}
?>