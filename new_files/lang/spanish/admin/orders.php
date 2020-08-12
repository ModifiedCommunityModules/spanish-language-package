<?php
/* --------------------------------------------------------------
   $Id: orders.php 1185 2010-08-20 09:00:29Z web28 $   

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   -----------------------------------------------------------------------------------------
   based on: 
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce; www.oscommerce.com 
   (c) 2003      nextcommerce; www.nextcommerce.org
   (c) 2006      xt:Commerce; www.xt-commerce.com

   Released under the GNU General Public License 
   --------------------------------------------------------------*/
define('TEXT_BANK', 'Tour de la banca');
define('TEXT_BANK_OWNER', 'Titular de la cuenta:');
define('TEXT_BANK_NUMBER', 'N&ordm; de cuenta:');
define('TEXT_BANK_BLZ', 'C&oacute;digo Banco:');
define('TEXT_BANK_NAME', 'Banco:');
define('TEXT_BANK_BIC', 'BIC:');
define('TEXT_BANK_IBAN', 'IBAN:');
define('TEXT_BANK_FAX', 'La orden de domiciliaci&oacute;n te la confirmamos por correo electr&oacute;nico');
define('TEXT_BANK_STATUS', 'Estado de verificaci&oacute;n:');
define('TEXT_BANK_PRZ', 'Proceso de verificaci&oacute;n:');
define('TEXT_BANK_OWNER_EMAIL', 'Titular de la cuenta E-Mail:');

define('TEXT_BANK_ERROR_1', 'N&uacute;mero de cuenta no coincide con el c&oacute;digo del Banco!');
define('TEXT_BANK_ERROR_2', 'No se ha definido algun proceso de verificaci&oacute;n para este n&uacute;mero de cuenta!');
define('TEXT_BANK_ERROR_3', 'Imposible verificar n&uacute;mero de cuenta');
define('TEXT_BANK_ERROR_4', 'N&uacute;mero de cuenta t&eacute;cnicamente no verificable!');
define('TEXT_BANK_ERROR_5', 'No se encuentra c&oacute;digo del banco!');
define('TEXT_BANK_ERROR_8', 'No has introducido c&oacute;digo del banco!');
define('TEXT_BANK_ERROR_9', 'No has introducido n&ordm;. de cuenta!');
define('TEXT_BANK_ERRORCODE', 'C&oacute;digo de error:');

define('HEADING_TITLE', 'Pedidos');
define('HEADING_TITLE_SEARCH', 'Pedido N&ordm;.:');
define('HEADING_TITLE_STATUS', 'Estado:');

define('TABLE_HEADING_COMMENTS', 'Comentario');
define('TABLE_HEADING_CUSTOMERS', 'Clientes');
define('TABLE_HEADING_ORDER_TOTAL', 'Valor total');
define('TABLE_HEADING_DATE_PURCHASED', 'Fecha del pedido');
define('TABLE_HEADING_ACTION', 'Acci&oacute;n');
define('TABLE_HEADING_QUANTITY', 'Cantidad');
define('TABLE_HEADING_PRODUCTS_MODEL', 'N&ordm;. Art&iacute;culo');
define('TABLE_HEADING_PRODUCTS', 'Art&iacute;culo');
define('TABLE_HEADING_TAX', 'IVA.');
define('TABLE_HEADING_TOTAL', 'Suma Total');
define('TABLE_HEADING_STATUS', 'Estado');
define('TABLE_HEADING_PRICE_EXCLUDING_TAX', 'Precio sin IVA');
define('TABLE_HEADING_PRICE_INCLUDING_TAX', 'Preis  con IVA)');
define('TABLE_HEADING_TOTAL_EXCLUDING_TAX', 'Total  sin IVA)');
define('TABLE_HEADING_TOTAL_INCLUDING_TAX', 'Total');
define('TABLE_HEADING_AFTERBUY','Afterbuy');

define('TABLE_HEADING_STATUS', 'Estado');
define('TABLE_HEADING_CUSTOMER_NOTIFIED', 'Cliente notificado');
define('TABLE_HEADING_DATE_ADDED', 'A&ntilde;adido el:');

define('ENTRY_CUSTOMER', 'Cliente:');
define('ENTRY_SOLD_TO', 'Direcci&oacute;n Fiscal:');
define('ENTRY_STREET_ADDRESS', 'Calle:');
define('ENTRY_SUBURB', 'Barrio/plaza:');
define('ENTRY_CITY', 'Ciudad:');
define('ENTRY_POST_CODE', 'C&oacute;digo postal:');
define('ENTRY_STATE', 'Provincia:');
define('ENTRY_COUNTRY', 'Pa&iacute;s:');
define('ENTRY_TELEPHONE', 'Tel&eacute;fono:');
define('ENTRY_EMAIL_ADDRESS', 'Direcci&oacute;n E-Mail:');
define('ENTRY_DELIVERY_TO', 'Direcci&oacute;n de entrega:');
define('ENTRY_SHIP_TO', 'Direcci&oacute;n de entrega:');
define('ENTRY_SHIPPING_ADDRESS', 'Direcci&oacute;n de entrega:');
define('ENTRY_BILLING_ADDRESS', 'Direcci&oacute;n de env&iacute;o de factura:');
define('ENTRY_PAYMENT_METHOD', 'Forma de pago:');
define('ENTRY_SHIPPING_METHOD', 'Forma de env&iacute;o:');
define('ENTRY_CREDIT_CARD_TYPE', 'Tipo de tarjeta de cr&eacute;dito:');
define('ENTRY_CREDIT_CARD_OWNER', 'Titular de la tarjeta de cr&eacute;dito:');
define('ENTRY_CREDIT_CARD_NUMBER', 'N&uacute;mero de la tarjeta de cr&eacute;dito:');
define('ENTRY_CREDIT_CARD_CVV', 'C&oacute;digo de seguridad (CVV)):');
define('ENTRY_CREDIT_CARD_EXPIRES', 'V&aacute;lida hasta el :');
define('ENTRY_SUB_TOTAL', 'Subtotal:');
define('ENTRY_TAX', 'IVA.:');
define('ENTRY_SHIPPING', 'Gastos de env&iacute;o:');
define('ENTRY_TOTAL', 'Total:');
define('ENTRY_DATE_PURCHASED', 'Fecha del pedido:');
define('ENTRY_STATUS', 'Estado:');
define('ENTRY_DATE_LAST_UPDATED', 'Actualizado el:');
define('ENTRY_NOTIFY_CUSTOMER', 'Avisar cliente:');
define('ENTRY_NOTIFY_COMMENTS', 'Incluir comentarios:');
define('ENTRY_PRINTABLE', 'Imprimir factura');

define('TEXT_INFO_HEADING_DELETE_ORDER', 'Borrar pedido');
define('TEXT_INFO_DELETE_INTRO', '&iquest;Estas seguro que quieres borrar el pedido?');
define('TEXT_INFO_RESTOCK_PRODUCT_QUANTITY', '&iquest;Devolver los art&iacute;culos en almacen?');
define('TEXT_DATE_ORDER_CREATED', 'Creado el:');
define('TEXT_DATE_ORDER_LAST_MODIFIED', '&uacute;ltima modificaci&oacute;n:');
define('TEXT_INFO_PAYMENT_METHOD', 'Forma de pago:');
define('TEXT_INFO_SHIPPING_METHOD', 'Forma de env&iacute;o:');

define('TEXT_ALL_ORDERS', 'Todos los pedidos');
define('TEXT_NO_ORDER_HISTORY', 'Aun no se han hecho pedidos');

define('EMAIL_SEPARATOR', '------------------------------------------------------');
define('EMAIL_TEXT_SUBJECT', 'Cambio del estado del pedido');
define('EMAIL_TEXT_ORDER_NUMBER', 'Pedido N&ordm;.:');
define('EMAIL_TEXT_INVOICE_URL', 'El pedido lo puede ver en este enlace:');
define('EMAIL_TEXT_DATE_ORDERED', 'Fecha del pedido:');
define('EMAIL_TEXT_STATUS_UPDATE', 'Ha sido actualizado el estado del pedido.' . "\n\n" . 'Estado nuevo: %s' . "\n\n" . 'Si tienes dudas sobre este pedido, puedes contestar a este e-mail.' . "\n\n" . 'Atentamente' . "\n");
define('EMAIL_TEXT_COMMENTS_UPDATE', 'Notas sobre Tu pedido:' . "\n\n%s\n\n");

define('ERROR_ORDER_DOES_NOT_EXIST', 'Error: El pedido no existe!.');
define('SUCCESS_ORDER_UPDATED', 'El pedido ha sido actualizado correctamente.');
define('WARNING_ORDER_NOT_UPDATED', 'Aviso: No ha sido modificado nada.');

define('TABLE_HEADING_DISCOUNT','Descuento');
define('ENTRY_CUSTOMERS_GROUP','GrupoCliente:');
define('ENTRY_CUSTOMERS_VAT_ID','CIF/NIV:');
define('TEXT_VALIDATING','No confirmado');

// BOF - Tomcraft - 2009-10-03 - Paypal Express Modul
define('TEXT_INFO_PAYPAL_DELETE', 'Borrar tambi&eacute;n los datos de transacci&oacute;n de PayPal.');
// EOF - Tomcraft - 2009-10-03 - Paypal Express Modul

// BOF - Tomcraft - 2010-04-22 - Added a missing language definition
define('TEXT_PRODUCTS', 'Art&iacute;culos');
// EOF - Tomcraft - 2010-04-22 - Added a missing language definition

//BOF - web28 - 2010-03-20 - Send Order by Admin
define('COMMENT_SEND_ORDER_BY_ADMIN' , 'Confirmaci&oacute;n del pedido enviada'); //ACHTUNG hier  keine HTML-Entities verwenden
define('BUTTON_ORDER_CONFIRMATION', 'Enviar confirmaci&oacute;n del pedido');
define('SUCCESS_ORDER_SEND', 'La confirmaci&oacute;n del pedido a sido enviada correctamente');
//EOF - web28 - 2010-03-20 - Send Order by Admin

// web28 2010-12-07 add new defines
define('ENTRY_CUSTOMERS_ADDRESS', 'Direcci&oacute;n del Cliente:');
define('TEXT_ORDER', 'Pedido:');
define('TEXT_ORDER_HISTORY', 'Pedidos realizados:');
define('TEXT_ORDER_STATUS', 'Estado del pedido:');

define('TABLE_HEADING_ORDERS_ID', 'Pedido N&ordm;.: ');
define('TEXT_SHIPPING_TO', 'Env&iacute;o a ');

define('TABLE_HEADING_COMMENTS_SENT', 'Comentario enviado');

define('TABLE_HEADING_TRACK_TRACE', 'Track &amp; Trace:');
define('TABLE_HEADING_CARRIER', 'Forma de env&iacute;o');
define('TABLE_HEADING_PARCEL_LINK', 'Enlace del tracking');

define('TEXT_INFO_HEADING_REVERSE_ORDER', 'Anular pedido');
define('TEXT_INFO_REVERSE_INTRO', '&iquest;Estas seguro que quieres anular el pedido?');

define('TABLE_HEADING_SHIPCLOUD', 'Shipcloud:');
define('TABLE_HEADING_PARCEL_ID', 'N&uacute;mero de seguimiento del paquete');
define('TEXT_SHIPCLOUD_STANDARD', 'Est&aacute;ndar');
define('TEXT_SHIPCLOUD_ONE_DAY', 'Express');
define('TEXT_SHIPCLOUD_ONE_DAY_EARLY', 'Express 10:00');
define('TEXT_SHIPCLOUD_RETURNS', 'Retour');
define('TEXT_SHIPCLOUD_LETTER', 'Carta postal');
define('TEXT_SHIPCLOUD_BOOKS', 'Libro de Correos');
define('TEXT_SHIPCLOUD_PARCEL_LETTER', 'Carta postal');
define('TEXT_WEIGHT_PLACEHOLDER', 'Peso / Kg');
define('TEXT_SHIPCLOUD_INSURANCE_NO', 'seguro m&aacute;s alto no');
define('TEXT_SHIPCLOUD_INSURANCE_YES', 'un seguro m&aacute;s alto s&iacute;');
define('TEXT_SHIPCLOUD_BULK', 'Bulk');
define('TEXT_SHIPCLOUD_PARCEL', 'Parcel');
define('DOWNLOAD_LABEL', 'Descargar n&uacute;mero de seguimiento del paquete');
define('CREATE_LABEL', 'Crear n&uacute;mero seguimiento del paquete');
define('TEXT_DELETE_SHIPMENT_SUCCESS', 'Eliminado del n&uacute;mero shipcloud de seguimiento del paquete.');
define('TEXT_LABEL_CREATED', 'N&uacute;mero de seguimiento creado correctamente.');
define('TEXT_CARRIER_ERROR', 'Compa&ntilde;&iacute;a de transporte no esta habilitada en Tu cuenta shipcloud o la API-Key no es v&aacute;lida.');
define('TEXT_CARRIER_PLACEHOLDER_1', 'Descripci&oacute;n del paquete');
define('TEXT_CARRIER_PLACEHOLDER_2', 'Descripci&oacute;n del env&iacute;o');
define('TEXT_CARRIER_PLACEHOLDER', 'Descripci&oacute;n (opcional)');

define('TEXT_DOWNLOADS', 'Descargas');
define('TABLE_HEADING_FILENAME', 'Nombre del fichero');
define('TABLE_HEADING_EXPIRES', 'Fecha de caducidad');
define('TABLE_HEADING_DOWNLOADS', 'Cantidad descargas');
define('TABLE_HEADING_DAYS', 'D&iacute;as');

define('ENTRY_SEND_TRACKING_INFO', 'Informaciones de env&iacute;o:');

define('TEXT_ORDERS_STATUS_FILTER', 'Filtro del estado del env&iacute;o');
define('TABLE_HEADING_DATE', 'Fecha');

define('BUTTON_ORDER_MAIL_STEP', 'Env&iacute;e el correo de pedido');
define('COMMENT_SEND_ORDER_MAIL_STEP' , 'El correo de la orden se env&iacute;a');
define('SUCCESS_ORDER_MAIL_STEP_SEND', 'El correo del pedido se ha enviado con &eacute;xito');

define('BILLPAY_ORDER_UPDATE_HIGH', 'Error: El nuevo valor total no puede ser m&aacute;s alto que el antiguo valor total en pagos de facturas');

?>