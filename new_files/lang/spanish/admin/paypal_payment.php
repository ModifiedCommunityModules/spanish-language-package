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
  'TEXT_PAYPAL_PAYMENT_HEADING_TITLE' => 'Transacciones de PayPal',
  
  'TABLE_HEADING_DATE' => 'Fecha',
  'TABLE_HEADING_NAME' => 'Nombre del cliente',
  'TABLE_HEADING_EMAIL' => 'Direcci&oacute;n de correo electr&oacute;nico del cliente',
  'TABLE_HEADING_INTENT' => 'Intenci&oacute;n',
  'TABLE_HEADING_STATUS' => 'Estado',
  'TABLE_HEADING_ID' => 'ID de la transacci&oacute;n',
  'TABLE_HEADING_TOTAL' => 'Cantidad',
  'TABLE_HEADING_ORDER' => 'N&uacute;mero de pedido',

  'TEXT_PAYPAL_PAYMENT_INFO' => 'No hay transacciones disponibles',
);


foreach ($lang_array as $key => $val) {
  defined($key) or define($key, $val);
}
?>