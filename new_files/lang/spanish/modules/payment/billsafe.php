<?php
/* -----------------------------------------------------------------------------------------
   $Id: billsafe_2.php 4200 2013-01-10 19:47:11Z Tomcraft1980 $

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   -----------------------------------------------------------------------------------------
   based on:
   Copyright (c) 2013 PayPal SE and Bernd Blazynski

   Released under the GNU General Public License
   ---------------------------------------------------------------------------------------*/

/*
* id = billsafe_2.php
* location = /lang/german/modules/payment
*
* This program is free software; you can redistribute it and/or modify
* it under the terms of the GNU General Public License, version 2, as
* published by the Free Software Foundation.
*
* This program is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
* GNU General Public License for more details.
*
* @package BillSAFE_2
* @copyright (C) 2013 Bernd Blazynski
* @license GPLv2
*/

// BOF - Changed to white label solution
/*
define('MODULE_PAYMENT_BILLSAFE_2_TEXT_TITLE', 'Kauf auf Rechnung mit BillSAFE');
define('MODULE_PAYMENT_BILLSAFE_2_CHECKOUT_TEXT_INFO', 'Bezahlen Sie bequem per Rechnung. Ganz einfach und unb&uuml;rokratisch mit BillSAFE, einem Service von PayPal.');
*/
define('MODULE_PAYMENT_BILLSAFE_2_TEXT_TITLE', 'Factura');
define('MODULE_PAYMENT_BILLSAFE_2_CHECKOUT_TEXT_INFO', 'Compre ahora a cuenta y examine sus ingresos en paz antes de pagar.');
// EOF - Changed to white label solution
define('MODULE_PAYMENT_BILLSAFE_2_SCHG_TEXT_INFO', 'Por este m&eacute;todo de pago cobramos un recargo de: ');
define('MODULE_PAYMENT_BILLSAFE_2_ERROR_MESSAGE_COMMON', 'Leider ist der Rechnungskauf &uuml;ber BillSAFE nicht m&ouml;glich. Bitte w&auml;hlen Sie eine andere Zahlungsweise.');
define('MODULE_PAYMENT_BILLSAFE_2_ERROR_MESSAGE_101', 'Desafortunadamente no es posible comprar a cuenta a trav&eacute;s de BillSAFE. Por favor, elija otro m&eacute;todo de pago.');
define('MODULE_PAYMENT_BILLSAFE_2_ERROR_MESSAGE_102', 'Se ha producido un error durante la transmisi&oacute;n de datos. Por favor, cont&aacute;ctenos.');
define('MODULE_PAYMENT_BILLSAFE_2_ERROR_MESSAGE_215', 'No todos los par&aacute;metros requeridos se transfirieron durante la transferencia de datos. Por favor, cont&aacute;ctenos.');
define('MODULE_PAYMENT_BILLSAFE_2_ERROR_MESSAGE_216', 'Durante la transferencia de datos se transfirieron par&aacute;metros no v&aacute;lidos. Por favor, cont&aacute;ctenos.');
define('MODULE_PAYMENT_BILLSAFE_2_ERROR_MESSAGE_COMPANY', 'El pago a trav&eacute;s de BillSAFE es, por desgracia, s&oacute;lo posible para los particulares.');
define('MODULE_PAYMENT_BILLSAFE_2_ERROR_MESSAGE_ADDRESS', 'El pago a trav&eacute;s de BillSAFE lamentablemente no es posible si la direcci&oacute;n de entrega es diferente.');
define('MODULE_PAYMENT_BILLSAFE_2_ERROR_MESSAGE_INLINE', 'No ha proporcionado todos los detalles obligatorios. Por favor, compruebe sus datos para el m&eacute;todo de pago elegido!');
define('MODULE_PAYMENT_BILLSAFE_2_STATUS_TEXT', 'Estado');
define('MODULE_PAYMENT_BILLSAFE_2_TRANSACTIONID', 'Identificaci&oacute;n de la transacci&oacute;n de BillSAFE');
define('MODULE_PAYMENT_BILLSAFE_2_CODE_TEXT', 'C&oacute;digo');
define('MODULE_PAYMENT_BILLSAFE_2_MESSAGE_TEXT', 'Mensaje');
define('MODULE_PAYMENT_BILLSAFE_2_TEXT_DESCRIPTION', '<img src="images/icon_popup.gif" border="0" />&nbsp;<a href="https://client.billsafe.de" target="_blank" style="text-decoration: underline; font-weight: bold;">A la p&aacute;gina web de BillSAFE</a>');
define('MODULE_PAYMENT_BILLSAFE_2_STATUS_TITLE', 'Activar la compra de facturas de BillSAFE');
define('MODULE_PAYMENT_BILLSAFE_2_STATUS_DESC', '&iquest;Le gustar&iacute;a ofrecer la compra a cuenta con BillSAFE?');
define('MODULE_PAYMENT_BILLSAFE_2_MERCHANT_ID_TITLE', 'Identificaci&oacute;n del comerciante');
define('MODULE_PAYMENT_BILLSAFE_2_MERCHANT_ID_DESC', 'El ID de comerciante usado con el API de BillSAFE.');
define('MODULE_PAYMENT_BILLSAFE_2_MERCHANT_LICENSE_TITLE', 'Licencia de comerciante');
define('MODULE_PAYMENT_BILLSAFE_2_MERCHANT_LICENSE_DESC', 'La licencia de comerciante utilizada con la API de BillSAFE.');
define('MODULE_PAYMENT_BILLSAFE_2_PKEY_TITLE', 'Clave p&uacute;blica');
define('MODULE_PAYMENT_BILLSAFE_2_PKEY_DESC', 'C&oacute;digo de seguridad proporcionado por BillSAFE. Puedes ver tu c&oacute;digo en el portal del manejador.');
define('MODULE_PAYMENT_BILLSAFE_2_MIN_ORDER_TITLE', 'Valor m&iacute;nimo del pedido');
define('MODULE_PAYMENT_BILLSAFE_2_MIN_ORDER_DESC', 'Cantidad de la que se ofrece la compra a cuenta con BillSAFE.');
define('MODULE_PAYMENT_BILLSAFE_2_MAX_ORDER_TITLE', 'El valor de pedido m&aacute;s alto');
define('MODULE_PAYMENT_BILLSAFE_2_MAX_ORDER_DESC', 'Cantidad hasta la cual se ofrece la compra a cuenta con BillSAFE.');
define('MODULE_PAYMENT_BILLSAFE_2_BILLSAFE_LOGO_URL_TITLE', 'URL del logo de BillSAFE');
define('MODULE_PAYMENT_BILLSAFE_2_BILLSAFE_LOGO_URL_DESC', 'Lugar de almacenamiento del logotipo de BillSAFE.');
define('MODULE_PAYMENT_BILLSAFE_2_SHOP_LOGO_URL_TITLE', 'URL del logo de la tienda');
define('MODULE_PAYMENT_BILLSAFE_2_SHOP_LOGO_URL_DESC', 'El lugar de almacenamiento del logotipo de la tienda.');
define('MODULE_PAYMENT_BILLSAFE_2_SERVER_TITLE', 'Servidor BillSAFE');
define('MODULE_PAYMENT_BILLSAFE_2_SERVER_DESC', 'Utilice la pasarela "LIVE" o "SANDBOX" para el procesamiento de los pagos.?');
define('MODULE_PAYMENT_BILLSAFE_2_ZONE_TITLE', 'Zona de pago');
define('MODULE_PAYMENT_BILLSAFE_2_ZONE_DESC', 'Si se selecciona una zona, el m&eacute;todo de pago s&oacute;lo es v&aacute;lido para esta zona.');
define('MODULE_PAYMENT_BILLSAFE_2_ORDER_STATUS_ID_TITLE', 'Establecer el estado de la orden');
define('MODULE_PAYMENT_BILLSAFE_2_ORDER_STATUS_ID_DESC', 'Poner las &oacute;rdenes, que se hacen con este m&oacute;dulo, en este estado.');
define('MODULE_PAYMENT_BILLSAFE_2_SORT_ORDER_TITLE', 'Secuencia de visualizaci&oacute;n');
define('MODULE_PAYMENT_BILLSAFE_2_SORT_ORDER_DESC', 'Mostrar secuencia. El d&iacute;gito m&aacute;s peque&ntilde;o se muestra primero.');
define('MODULE_PAYMENT_BILLSAFE_2_ALLOWED_TITLE', 'Zonas permitidas');
define('MODULE_PAYMENT_BILLSAFE_2_ALLOWED_DESC', 'Especifique <b>individual</b> las zonas que deben ser permitidas para este m&oacute;dulo. (por ejemplo AT,DE (si est&aacute; vac&iacute;o, todas las zonas est&aacute;n permitidas))');
define('MODULE_PAYMENT_BILLSAFE_2_MESSAGE_FSHIPMENT', 'El parto completo fue exitoso');
define('MODULE_PAYMENT_BILLSAFE_2_MESSAGE_PSHIPMENT', 'El parto parcial fue exitoso');
define('MODULE_PAYMENT_BILLSAFE_2_MESSAGE_FSTORNO', 'La cancelaci&oacute;n completa fue exitosa');
define('MODULE_PAYMENT_BILLSAFE_2_MESSAGE_PSTORNO', 'La cancelaci&oacute;n parcial fue exitosa');
define('MODULE_PAYMENT_BILLSAFE_2_MESSAGE_FRETOURE', 'El regreso completo fue exitoso');
define('MODULE_PAYMENT_BILLSAFE_2_MESSAGE_PRETOURE', 'El retorno parcial fue exitoso');
define('MODULE_PAYMENT_BILLSAFE_2_MESSAGE_VOUCHER', 'El cr&eacute;dito del proveedor tuvo &eacute;xito');
define('MODULE_PAYMENT_BILLSAFE_2_MESSAGE_PAUSETRANSACTION', 'La pausa de pago fue exitosa');
define('MODULE_PAYMENT_BILLSAFE_2_DETAILS', 'Detalles de BillSAFE');
define('MODULE_PAYMENT_BILLSAFE_2_BADDRESS', 'Direcci&oacute;n de facturaci&oacute;n (BillSAFE)');
define('MODULE_PAYMENT_BILLSAFE_2_SADDRESS', 'Direcci&oacute;n de env&iacute;o');
define('MODULE_PAYMENT_BILLSAFE_2_EMAIL', 'Correo electr&oacute;nico');
define('MODULE_PAYMENT_BILLSAFE_2_BANK_DETAILS', 'Detalles del banco');
define('MODULE_PAYMENT_BILLSAFE_2_BANK_CODE', 'El c&oacute;digo del banco');
define('MODULE_PAYMENT_BILLSAFE_2_BANK_NAME', 'Nombre del banco');
define('MODULE_PAYMENT_BILLSAFE_2_ACCOUNT_NUMBER', 'N&uacute;mero de cuenta');
define('MODULE_PAYMENT_BILLSAFE_2_RECIPIENT', 'Payee');
define('MODULE_PAYMENT_BILLSAFE_2_BIC', 'BIC');
define('MODULE_PAYMENT_BILLSAFE_2_IBAN', 'IBAN');
define('MODULE_PAYMENT_BILLSAFE_2_REFERENCE', 'Uso previsto');
define('MODULE_PAYMENT_BILLSAFE_2_REFERENCE2', 'Uso previsto 2');
define('MODULE_PAYMENT_BILLSAFE_2_NOTE', 'Nota');
define('MODULE_PAYMENT_BILLSAFE_2_AMOUNT', 'Cantidad a pagar');
define('MODULE_PAYMENT_BILLSAFE_2_PRODUCTS', 'Art&iacute;culo');
define('MODULE_PAYMENT_BILLSAFE_2_MODEL', 'Art&iacute;culo no.');
define('MODULE_PAYMENT_BILLSAFE_2_TAX', 'IVA');
define('MODULE_PAYMENT_BILLSAFE_2_PRICE_EX', 'Precio (excl.)');
define('MODULE_PAYMENT_BILLSAFE_2_PRICE_INC', 'Precio (incl.)');
define('MODULE_PAYMENT_BILLSAFE_2_CHECK', 'Selecci&oacute;n');
define('MODULE_PAYMENT_BILLSAFE_2_INC', 'incl. ');
define('MODULE_PAYMENT_BILLSAFE_2_TOTAL', 'La cantidad total');
define('MODULE_PAYMENT_BILLSAFE_2_FREPORT_SHIPMENT', 'Entrega completa');
define('MODULE_PAYMENT_BILLSAFE_2_PREPORT_SHIPMENT', 'Entrega parcial');
define('MODULE_PAYMENT_BILLSAFE_2_UPDATEARTICLELISTSTORNOFULL', 'Cancelaci&oacute;n completa');
define('MODULE_PAYMENT_BILLSAFE_2_UPDATEARTICLELISTSTORNOPART', 'Cancelaci&oacute;n parcial');
define('MODULE_PAYMENT_BILLSAFE_2_UPDATEARTICLELISTRETOUREFULL', 'Komplettretoure');
define('MODULE_PAYMENT_BILLSAFE_2_UPDATEARTICLELISTRETOUREPART', 'Retorno parcial');
define('MODULE_PAYMENT_BILLSAFE_2_UPDATEARTICLELISTVOUCHER', 'Nota de cr&eacute;dito del proveedor');
define('MODULE_PAYMENT_BILLSAFE_2_PREPORT_METHOD', 'M&eacute;todo');
define('MODULE_PAYMENT_BILLSAFE_2_PREPORT_DATE', 'Fecha');
define('MODULE_PAYMENT_BILLSAFE_2_JALERT', 'Por favor, seleccione al menos un producto.');
define('MODULE_PAYMENT_BILLSAFE_2_NO_ORDERID', 'No se pudo encontrar el n&uacute;mero de pedido.');
define('MODULE_PAYMENT_BILLSAFE_2_VAT', '% IVA.');
define('MODULE_PAYMENT_BILLSAFE_2_VALUE', 'Valor de los bienes');
define('MODULE_PAYMENT_BILLSAFE_2_LOG_TITLE', 'Activar el registro');
define('MODULE_PAYMENT_BILLSAFE_2_LOG_DESC', 'Usar la retroalimentaci&oacute;n del servidor de BillSAFE para la soluci&oacute;n de problemas.');
define('MODULE_PAYMENT_BILLSAFE_2_LOG_TYPE_TITLE', 'Seleccione el tipo de registro: Eco, haz que lo env&iacute;en por eMail o gu&aacute;rdalo como un archivo en el directorio "/export"..');
define('MODULE_PAYMENT_BILLSAFE_2_LOG_TYPE_DESC', '<b>Atenci&oacute;n</b>: "Eco" es s&oacute;lo para fines de prueba en la parte trasera de la tienda. <b>No hay &oacute;rdenes posibles!</b>');
define('MODULE_PAYMENT_BILLSAFE_2_LOG_ADDR_TITLE', 'Direcci&oacute;n(es) de correo electr&oacute;nico para el registro');
define('MODULE_PAYMENT_BILLSAFE_2_LOG_ADDR_DESC', 'Separe las m&uacute;ltiples direcciones de correo electr&oacute;nico con ",".');
define('MODULE_PAYMENT_BILLSAFE_2_PAUSETRANSACTION', 'Pausa de pago');
define('MODULE_PAYMENT_BILLSAFE_2_PAUSEDAYS', 'D&iacute;as');
define('MODULE_PAYMENT_BILLSAFE_2_SCHG_TITLE', 'Recargo por m&eacute;todos de pago');
define('MODULE_PAYMENT_BILLSAFE_2_SCHG_DESC', 'Recargo por el pago de BillSAFE. Sin recargo dejar el campo vac&iacute;o. Recargo fijo como cantidad neta, recargo porcentual con el signo "%" (por ejemplo, 3%). <b>Atenci&oacute;n: El recargo debe ser acordado con BillSAFE y no puede exceder el valor almacenado all&iacute;!</b>');
define('MODULE_PAYMENT_BILLSAFE_2_SCHGTAX_TITLE', 'Tasa de impuesto para el recargo de los m&eacute;todos de pago');
define('MODULE_PAYMENT_BILLSAFE_2_SCHGTAX_DESC', 'Seleccione el tipo de impuesto deseado.');
define('MODULE_PAYMENT_BILLSAFE_2_MP', 'Portal del manipulador');
define('MODULE_PAYMENT_BILLSAFE_2_BUTTON', 'A BillSAFE');
define('MODULE_PAYMENT_BILLSAFE_2_DPAYMENT', 'Pago directo por parte de los clientes');
define('MODULE_PAYMENT_BILLSAFE_2_REPORT_DPAYMENT', 'Informe el pago directo ahora');
define('MODULE_PAYMENT_BILLSAFE_2_MESSAGE_DPAYMENT', 'El pago directo del mensaje tuvo &eacute;xito');
define('MODULE_PAYMENT_BILLSAFE_2_DAY', 'D&iacute;a');
define('MODULE_PAYMENT_BILLSAFE_2_MONTH', 'mes');
define('MODULE_PAYMENT_BILLSAFE_2_YEAR', 'A&ntilde;o');
define('MODULE_PAYMENT_BILLSAFE_2_LAYER_TITLE', 'Capa de pago');
define('MODULE_PAYMENT_BILLSAFE_2_LAYER_DESC', '&iquest;Le gustar&iacute;a activar el modo de capa para los pagos a trav&eacute;s de BillSAFE? <b>Nota: No funciona junto con Inline-Checkout! Atenci&oacute;n: Es esencial establecer el par&aacute;metro <i>Preferir usar cookies en las <i>Sesiones</i> a <i>Falso</i>!</b>');
define('MODULE_PAYMENT_BILLSAFE_2_INLINE_TITLE', 'Comprobaci&oacute;n en el lugar de trabajo');
define('MODULE_PAYMENT_BILLSAFE_2_INLINE_DESC', '&iquest;Quiere activar el Onsite Checkout para los pagos a trav&eacute;s de BillSAFE? <b>Nota: No trabaja junto con la capa de pago! Para esta funcionalidad se requiere un acuerdo adicional con BillSAFE.</b>');
define('MODULE_PAYMENT_BILLSAFE_2_DOB', 'Por favor, introduzca su fecha de nacimiento aqu&iacute; (por ejemplo, 21.05.1970):');
define('MODULE_PAYMENT_BILLSAFE_2_TC', '<b>Estoy de acuerdo con el <a class="info" href="https://www.billsafe.de/privacy-policy/buyer" target="_blank">Datenschutzgrunds&auml;tzen</a> y el <a class="info" href="https://www.billsafe.de/privacy-policy/credit-check" target="_blank">Evaluaci&oacute;n del cr&eacute;dito</a> de <a class="info" href="https://www.billsafe.de/imprint" target="_blank">PayPal</a> cerrado. El <a class="info" href="https://www.billsafe.de/resources/docs/pdf/Kaeufer_AGB.pdf" target="_blank">Condiciones generales</a> de uso para la compra a cuenta.</b>');
?>