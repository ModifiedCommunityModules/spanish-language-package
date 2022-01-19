<?php
/** no longer used */
  define('MODULE_ORDER_TOTAL_BILLPAYTC_SURCHARGE_TITLE', 'C&aacute;lculo de la tarifa para la compra a plazos (BillPay)');
  define('MODULE_ORDER_TOTAL_BILLPAYTC_SURCHARGE_FEE_STATUS_TITLE', '');
  define('MODULE_ORDER_TOTAL_BILLPAYTC_SURCHARGE_DESCRIPTION', 'C&aacute;lculo de la tarifa para los pedidos con el m&eacute;todo de pago de compra a plazos mediante BillPay');

  define('MODULE_ORDER_TOTAL_BILLPAYTC_SURCHARGE_STATUS_TITLE','C&aacute;lculo de la tarifa para la compra a plazos (BillPay)');
  define('MODULE_ORDER_TOTAL_BILLPAYTC_SURCHARGE_STATUS_DESC','&iexcl;Cuidado! Tan pronto como este m&oacute;dulo de resumen sea desactivado, la compra a plazos con BillPay ya no funcionar&aacute;! Por favor, s&oacute;lo desactiva este m&oacute;dulo si NO quieres ofrecer la compra a plazos a trav&eacute;s de BillPay!');

  define('MODULE_ORDER_TOTAL_BILLPAYTC_SURCHARGE_SORT_ORDER_TITLE','Orden de clasificaci&oacute;n');
  define('MODULE_ORDER_TOTAL_BILLPAYTC_SURCHARGE_SORT_ORDER_DESC','Secuencia de visualizaci&oacute;n');

  define('MODULE_ORDER_TOTAL_BILLPAYTC_SURCHARGE_TAX_CLASS_TITLE','Clase de impuestos');
  define('MODULE_ORDER_TOTAL_BILLPAYTC_SURCHARGE_TAX_CLASS_DESC','Elija una clase de impuesto.');

  require_once('ot_billpay_fee.php');

  $prefix = 'MODULE_ORDER_TOTAL_BILLPAYTC_SURCHARGE_';
  $parent = 'MODULE_ORDER_TOTAL_BILLPAY_';

  define($prefix.'FEE_TITLE', 'Geb&uuml;hrenberechnung Ratenkauf (BillPay)');
  define($prefix.'FEE_DESCRIPTION', 'Berechnung der Geb&uuml;hr f&uuml;r Bestellungen mit der Zahlart Ratenkauf &uuml;ber BillPay');

  // config options
  $fields = array(
      'FEE_STATUS_DESC', 'FEE_SORT_ORDER_TITLE', 'FEE_SORT_ORDER_DESC',
      'FEE_TYPE_TITLE', 'FEE_TYPE_DESC', 'FEE_PERCENT_TITLE', 'FEE_PERCENT_DESC', 'FEE_VALUE_TITLE', 'FEE_VALUE_DESC',
      'FEE_TAX_CLASS_TITLE', 'FEE_TAX_CLASS_DESC',
      'FEE_FROM_TOTAL'
  );
  foreach ($fields as $field)
  {
      defined($prefix.$field) OR define($prefix.$field, constant($parent.$field));
  }

  // new
  defined('MODULE_ORDER_TOTAL_BILLPAYTC_SURCHARGE') OR define('MODULE_ORDER_TOTAL_BILLPAYTC_SURCHARGE', 'Prima de inter&eacute;s');
  defined('MODULE_ORDER_TOTAL_BILLPAYTRANSACTIONCREDIT_TRANSACTION_FEE') OR define('MODULE_ORDER_TOTAL_BILLPAYTRANSACTIONCREDIT_TRANSACTION_FEE', 'Cuota de procesamiento');
  defined('MODULE_ORDER_TOTAL_BILLPAYTRANSACTIONCREDIT_TOTAL') OR define('MODULE_ORDER_TOTAL_BILLPAYTRANSACTIONCREDIT_TOTAL', 'Cantidad total de la compra a plazos');
  
  defined('MODULE_ORDER_TOTAL_BILLPAYTRANSACTIONCREDIT_TRANSACTION_FEE_TAX1') OR define('MODULE_ORDER_TOTAL_BILLPAYTRANSACTIONCREDIT_TRANSACTION_FEE_TAX1', 'inkl.');
  defined('MODULE_ORDER_TOTAL_BILLPAYTRANSACTIONCREDIT_TRANSACTION_FEE_TAX2') OR define('MODULE_ORDER_TOTAL_BILLPAYTRANSACTIONCREDIT_TRANSACTION_FEE_TAX2', 'IVA');
