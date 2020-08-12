<?php
/* -----------------------------------------------------------------------------------------
   $Id: easycredit.php 11083 2018-03-13 09:54:38Z GTB $

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   -----------------------------------------------------------------------------------------
   Released under the GNU General Public License
   ---------------------------------------------------------------------------------------*/


$lang_array = array(
  'MODULE_PAYMENT_EASYCREDIT_TEXT_TITLE' => 'alquiler con opci&oacute;n a compra por parte de easyCredit',
  'MODULE_PAYMENT_EASYCREDIT_TEXT_INFO' => '',
  'MODULE_PAYMENT_EASYCREDIT_TEXT_DESCRIPTION' => '',
  'MODULE_PAYMENT_EASYCREDIT_ALLOWED_TITLE' => 'Zonas permitidas',
  'MODULE_PAYMENT_EASYCREDIT_ALLOWED_DESC' => 'Por favor, introduzca las zonas <b>por separado</b> que deben ser permitidas para utilizar este m&oacute;dulo (por ejemplo, AT, DE (deje vac&iacute;o si quiere permitir todas las zonas))',
  'MODULE_PAYMENT_EASYCREDIT_STATUS_TITLE' => 'Activar el m&oacute;dulo',
  'MODULE_PAYMENT_EASYCREDIT_STATUS_DESC' => '&iquest;Le gustar&iacute;a aceptar pagos con ratenkauf de easyCredit?',
  'MODULE_PAYMENT_EASYCREDIT_SORT_ORDER_TITLE' => 'Secuencia de visualizaci&oacute;n',
  'MODULE_PAYMENT_EASYCREDIT_SORT_ORDER_DESC' => 'Mostrar secuencia. El d&iacute;gito m&aacute;s peque&ntilde;o aparece primero.',
  'MODULE_PAYMENT_EASYCREDIT_ZONE_TITLE' => 'Zona de pago',
  'MODULE_PAYMENT_EASYCREDIT_ZONE_DESC' => 'Si se selecciona una zona, el m&eacute;todo de pago s&oacute;lo es v&aacute;lido para esta zona.',
  'MODULE_PAYMENT_EASYCREDIT_ORDER_STATUS_ID_TITLE' => 'Estado de la orden temporal',
  'MODULE_PAYMENT_EASYCREDIT_ORDER_STATUS_ID_DESC' => 'Especifique el estado de la orden para las &oacute;rdenes no confirmadas.',
  'MODULE_PAYMENT_EASYCREDIT_ORDER_STATUS_SUCCESS_ID_TITLE' => 'Estado del pedido exitoso',
  'MODULE_PAYMENT_EASYCREDIT_ORDER_STATUS_SUCCESS_ID_DESC' => 'Indique el estado del pedido para los pedidos exitosos.',
  'MODULE_PAYMENT_EASYCREDIT_SHOP_ID_TITLE' => 'ID de la tienda virtual',
  'MODULE_PAYMENT_EASYCREDIT_SHOP_ID_DESC' => 'Encontrar&aacute; su identificaci&oacute;n de tienda web en la interfaz de comerciante de easyCredit, en Administraci&oacute;n de tiendas.',
  'MODULE_PAYMENT_EASYCREDIT_SHOP_TOKEN_TITLE' => 'Contrase&ntilde;a de la API',
  'MODULE_PAYMENT_EASYCREDIT_SHOP_TOKEN_DESC' => 'Usted mismo establece la contrase&ntilde;a de la API en la interfaz de comerciante de easyCredit en el submen&uacute; Administraci&oacute;n de la tienda.',
  'MODULE_PAYMENT_EASYCREDIT_LOG_LEVEL_TITLE' => 'Nivel de registro',
  'MODULE_PAYMENT_EASYCREDIT_LOG_LEVEL_DESC' => 'Especifique el nivel de registro. Por defecto: "error"',

  'MODULE_PAYMENT_EASYCREDIT_TEXT_ERROR_HEADING' => 'Nota',
  'MODULE_PAYMENT_EASYCREDIT_TEXT_ERROR_MESSAGE' => 'El pago con ratenkauf por parte de easyCredit fue cancelado',
  'MODULE_PAYMENT_EASYCREDIT_TEXT_ERROR_CHECKBOX' => 'Por favor, acepte los acuerdos adicionales necesarios para la compra a plazos por parte de easyCredit',
  'MODULE_PAYMENT_EASYCREDIT_TEXT_LEGAL' => 'La informaci&oacute;n precontractual sobre las compras a plazos se puede encontrar aqu&iacute;',

  'TEXT_EASYCREDIT_TBAID' => 'Identificaci&oacute;n del proceso',
  'TEXT_EASYCREDIT_RATING_PLAN' => 'Financiaci&oacute;n de %s en %s Plazos con compra a plazos por easyCredit',
  'TEXT_EASYCREDIT_RATING_PLAN_SHORT' => 'Financiaci&oacute;n de %s por mes',
  'TEXT_EASYCREDIT_RATING_PLAN_CALC' => 'm&aacute;s informaci&oacute;n sobre la compra a plazos',
  'TEXT_EASYCREDIT_LEGAL' => 'Ejemplo representativo seg&uacute;n &sect; 6a PAngV',
  'TEXT_EASYCREDIT_NOMINAL_RATE' => 'Tasa de inter&eacute;s deudor p.a. fijada para todo el plazo',
  'TEXT_EASYCREDIT_EFFECTIVE_RATE' => 'tasa de porcentaje anual',
  'TEXT_EASYCREDIT_TOTAL_COST' => 'La cantidad total',
  'TEXT_EASYCREDIT_TOTAL_NETTO' => 'La cantidad neta del pr&eacute;stamo',
  'TEXT_EASYCREDIT_TOTAL_INTEREST' => 'La cantidad de inter&eacute;s',
  'TEXT_EASYCREDIT_MONTHLY_PAYMENT' => 'cuotas mensuales de',
  'TEXT_EASYCREDIT_LAST_PAYMENT' => '&uacute;ltima cuota',  
);


foreach ($lang_array as $key => $val) {
  defined($key) or define($key, $val);
}
?>