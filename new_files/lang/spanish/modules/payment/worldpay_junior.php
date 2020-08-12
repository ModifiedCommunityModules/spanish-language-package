<?php
/* -----------------------------------------------------------------------------------------
   $Id: worldpay_junior.php 4762 2013-05-10 16:12:34Z Tomcraft $

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   -----------------------------------------------------------------------------------------
   based on: 
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2008 osCommerce(worldpay_junior.php 1807 2008-01-13 ); www.oscommerce.com

   Released under the GNU General Public License 
   ---------------------------------------------------------------------------------------*/

  define('MODULE_PAYMENT_WORLDPAY_JUNIOR_TEXT_DESCRIPTION', '<img src="images/icon_popup.gif" border="0">&nbsp;<a href="http://www.worldpay.com" target="_blank" style="text-decoration: underline; font-weight: bold;">Visite el sitio web de WorldPay</a>');
  define('MODULE_PAYMENT_WORLDPAY_JUNIOR_TEXT_WARNING_DEMO_MODE', 'En revisi&oacute;n: Transacci&oacute;n realizada en modo de demostraci&oacute;n.');
  define('MODULE_PAYMENT_WORLDPAY_JUNIOR_TEXT_SUCCESSFUL_TRANSACTION', '&iexcl;La transacci&oacute;n de pago se ha realizado con &eacute;xito!');
  define('MODULE_PAYMENT_WORLDPAY_JUNIOR_TEXT_UNSUCCESSFUL_TRANSACTION', '&iexcl;Su pago no ha tenido &eacute;xito!');
  define('MODULE_PAYMENT_WORLDPAY_JUNIOR_TEXT_CONTINUE_BUTTON', 'Haga clic aqu&iacute; para continuar con los %s');

  define('MODULE_PAYMENT_WORLDPAY_JUNIOR_TEXT_TITLE', 'WorldPay Junior');
  define('MODULE_PAYMENT_WORLDPAY_JUNIOR_TEXT_DESC', 'M&oacute;dulo de pago Worldpay');
  
  define('MODULE_PAYMENT_WORLDPAY_JUNIOR_STATUS_TITLE', 'Activar el m&oacute;dulo WorldPay');
  define('MODULE_PAYMENT_WORLDPAY_JUNIOR_STATUS_DESC', '&iquest;Quiere habilitar los pagos de WorldPay?');

  define('MODULE_PAYMENT_WORLDPAY_JUNIOR_ALLOWED_TITLE' , 'Zonas permitidas');
  define('MODULE_PAYMENT_WORLDPAY_JUNIOR_ALLOWED_DESC' , 'Por favor, introduzca las zonas por separado que deben ser permitidas para utilizar este m&oacute;dulo (por ejemplo, AT, DE (deje vac&iacute;o si quiere permitir todas las zonas))');

  define('MODULE_PAYMENT_WORLDPAY_JUNIOR_INSTALLATION_ID_TITLE', 'Instalaci&oacute;n de Worldpay ID');
  define('MODULE_PAYMENT_WORLDPAY_JUNIOR_INSTALLATION_ID_DESC', 'Su ID de instalaci&oacute;n de WorldPay');

  define('MODULE_PAYMENT_WORLDPAY_JUNIOR_CALLBACK_PASSWORD_TITLE', 'Contrase&ntilde;a de respuesta de pago');
  define('MODULE_PAYMENT_WORLDPAY_JUNIOR_CALLBACK_PASSWORD_DESC', 'Una contrase&ntilde;a que se devuelve en la respuesta a la llamada (especificada en el Sistema de Gesti&oacute;n de Clientes de WorldPay)');

  define('MODULE_PAYMENT_WORLDPAY_JUNIOR_MD5_PASSWORD_TITLE', 'Secreto MD5 para las transacciones Contrase&ntilde;a');
  define('MODULE_PAYMENT_WORLDPAY_JUNIOR_MD5_PASSWORD_DESC', 'La contrase&ntilde;a de cifrado secreto MD5 utilizada para validar las respuestas de las transacciones con (especificadas en el Sistema de Gesti&oacute;n de Clientes de WorldPay)');

  define('MODULE_PAYMENT_WORLDPAY_JUNIOR_TRANSACTION_METHOD_TITLE', 'M&eacute;todo de transacci&oacute;n');
  define('MODULE_PAYMENT_WORLDPAY_JUNIOR_TRANSACTION_METHOD_DESC', 'El m&eacute;todo de procesamiento a utilizar para cada transacci&oacute;n');

  define('MODULE_PAYMENT_WORLDPAY_JUNIOR_TESTMODE_TITLE', 'Modo de prueba');
  define('MODULE_PAYMENT_WORLDPAY_JUNIOR_TESTMODE_DESC', '&iquest;Procesar las transacciones en modo de prueba?');

  define('MODULE_PAYMENT_WORLDPAY_JUNIOR_SORT_ORDER_TITLE', 'Ordenar el orden de exhibici&oacute;n.');
  define('MODULE_PAYMENT_WORLDPAY_JUNIOR_SORT_ORDER_DESC', 'Ordenar el orden de exhibici&oacute;n. El m&aacute;s bajo se muestra primero.');

  //define('MODULE_PAYMENT_WORLDPAY_JUNIOR_PREAUTH_TITLE', 'Pre-Auth'); // Wird nicht benutzt
  //define('MODULE_PAYMENT_WORLDPAY_JUNIOR_PREAUTH_DESC', 'El modo en el que est&aacute;s trabajando (A = Paga ahora, E = Pre Auth). Ignorado si el uso de PreAuth es falso.'); // Wird nicht benutzt

  define('MODULE_PAYMENT_WORLDPAY_JUNIOR_ZONE_TITLE', 'Zona de pago');
  define('MODULE_PAYMENT_WORLDPAY_JUNIOR_ZONE_DESC', 'Si se selecciona una zona, s&oacute;lo se debe habilitar este m&eacute;todo de pago para esa zona.');
  
  define('MODULE_PAYMENT_WORLDPAY_JUNIOR_PREPARE_ORDER_STATUS_ID_TITLE', 'Establecer el estado de preparaci&oacute;n de la orden');
  define('MODULE_PAYMENT_WORLDPAY_JUNIOR_PREPARE_ORDER_STATUS_ID_DESC', 'Poner en este valor el estado de los pedidos preparados con este m&oacute;dulo de pago');
  
  define('MODULE_PAYMENT_WORLDPAY_JUNIOR_ORDER_STATUS_ID_TITLE', 'Establecer el estado de la orden');
  define('MODULE_PAYMENT_WORLDPAY_JUNIOR_ORDER_STATUS_ID_DESC', 'Ponga el estado de los pedidos realizados con este m&oacute;dulo de pago a este valor');
?>