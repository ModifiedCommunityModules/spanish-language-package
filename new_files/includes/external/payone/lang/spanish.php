<?php
/* -----------------------------------------------------------------------------------------
   $Id: english.php 11739 2019-04-11 11:32:27Z GTB $

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   -----------------------------------------------------------------------------------------
 	 based on:
	  (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
	  (c) 2002-2003 osCommerce - www.oscommerce.com
	  (c) 2001-2003 TheMedia, Dipl.-Ing Thomas Plänkers - http://www.themedia.at & http://www.oscommerce.at
	  (c) 2003 XT-Commerce - community made shopping http://www.xt-commerce.com
    (c) 2013 Gambio GmbH - http://www.gambio.de
  
   Released under the GNU General Public License
   ---------------------------------------------------------------------------------------*/

// error messages
define('NOTE_ADDRESS_CHANGED', 'La direcci&oacute;n ha cambiado.');
define('ADDRESSES_MUST_BE_EQUAL','Con el m&eacute;todo de pago elegido la direcci&oacute;n de facturaci&oacute;n y de entrega debe corresponder!');
define('INSTALLMENT_TYPE_NOT_SELECTED', 'No hay ning&uacute;n tipo seleccionado.');
define('PAYDATA_INCOMPLETE', 'Las indicaciones para el m&eacute;todo de pago son incompletas.');
define('PAYMENT_ERROR', 'Se produjo un error durante el procesamiento.');
define('ERROR_MUST_CONFIRM_MANDATE', 'Por favor, confirme que quiere conceder la orden de domiciliaci&oacute;n bancaria de la SEPA.');
 
// credit risk check
define('CREDIT_RISK_HEADING', 'Verificaci&oacute;n de cr&eacute;dito');
defined('BUTTON_CONFIRM') OR define('BUTTON_CONFIRM', 'S&iacute;, realice una verificaci&oacute;n de cr&eacute;dito');
define('BUTTON_NOCONFIRM', 'No, no ejecute una verificaci&oacute;n');
define('TEXT_CREDIT_RISK_INFO', 'Se est&aacute; ejecutando una evaluaci&oacute;n crediticia.');
define('TEXT_CREDIT_RISK_COMFIRM', '&iquest;Quieres estar de acuerdo con esto?');
define('CREDIT_RISK_FAILED', 'Por favor, elija otro m&eacute;todo de pago.');
define('CREDIT_RISK_CONFIGURATION', 'Verificaci&oacute;n de cr&eacute;dito');
define('CR_ACTIVE', 'activo');
define('CR_OPERATING_MODE', 'Modo de funcionamiento');
define('CR_TIMEOFCHECK', 'Momento de la evaluaci&oacute;n');
define('CR_TIMEOFCHECK_BEFORE', 'antes de la elecci&oacute;n del m&eacute;todo de pago');
define('CR_TIMEOFCHECK_AFTER', 'despu&eacute;s de la elecci&oacute;n del m&eacute;todo de pago');
define('CR_TYPEOFCHECK', 'M&eacute;todo de evaluaci&oacute;n');
define('CR_TYPEOFCHECK_ISCOREHARD', 'Infoscore (criterios duros)');
define('CR_TYPEOFCHECK_ISCOREALL', 'Infoscore (todos los criterios)');
define('CR_TYPEOFCHECK_ISCOREBSCORE', 'Infoscore (todos los criterios + puntuaci&oacute;n de boni)');
define('CR_NEWCLIENTDEFAULT', 'Valor por defecto para los nuevos clientes');
define('CR_VALIDITY', 'Validez');
define('CR_MIN_CART_VALUE', 'Valor m&iacute;nimo de las mercanc&iacute;as');
define('CR_MAX_CART_VALUE', 'Valor m&aacute;ximo de las mercanc&iacute;as');
define('CR_CHECKFORGENRE', 'Evaluaci&oacute;n con');
define('CR_ERROR_MODE', 'Comportamiento de error');
define('CR_ERROR_MODE_ABORT', 'Cancelar el proceso');
define('CR_ERROR_MODE_CONTINUE', 'Contin&uacute;a');
define('CR_NOTICE', 'Aviso');
define('CR_CONFIRMATION', 'Solicitud de aprobaci&oacute;n');
define('CR_ABTEST', 'Pruebas A/B');
 
// address check
define('TEXT_ADDRESS_CHECK_HEADING', 'Direcci&oacute;n correcta');
define('TEXT_ADDRESS_CHECK_CHANGED', 'corregido');
define('AC_ACTIVE', 'activo');
define('AC_OPERATING_MODE', 'Modo de funcionamiento');
define('AC_BILLING_ADDRESS', 'Direcci&oacute;n de facturaci&oacute;n');
define('AC_DELIVERY_ADDRESS', 'Direcci&oacute;n de env&iacute;o');
define('AC_AUTOMATIC_CORRECTION', 'Correcci&oacute;n autom&aacute;tica');
define('AC_ERROR_MODE', 'Comportamiento de error');
define('AC_MIN_CART_VALUE', 'Valor m&iacute;nimo de las mercanc&iacute;as');
define('AC_MAX_CART_VALUE', 'Valor m&aacute;ximo de las mercanc&iacute;as');
define('AC_VALIDITY', 'Validez');
define('AC_ERROR_MESSAGE', 'Mensaje de error');
define('AC_PSTATUS_MAPPING', 'Cartograf&iacute;a de la situaci&oacute;n de las personas');
define('AC_BACHECK_NONE', 'no lo compruebes');
define('AC_BACHECK_BASIC', 'B&aacute;sico');
define('AC_BACHECK_PERSON', 'Persona (s&oacute;lo DE!)');
define('AC_AUTOMATIC_CORRECTION_NO', 'no');
define('AC_AUTOMATIC_CORRECTION_YES', 's&iacute;');
define('AC_AUTOMATIC_CORRECTION_USER', 'La decisi&oacute;n de los usuarios');
define('AC_ERROR_MODE_ABORT', 'Cancelar el proceso');
define('AC_ERROR_MODE_REENTER', 'Reescribir');
define('AC_ERROR_MODE_CHECK', 'Realice una verificaci&oacute;n de cr&eacute;dito posterior');
define('AC_ERROR_MODE_CONTINUE', 'Contin&uacute;a');
define('DAYS', 'D&iacute;as');
define('ERROR_MESSAGE_INFO', 'Usar {payone_error} como marcador de posici&oacute;n para la respuesta de la plataforma PAYONE');
define('AC_PSTATUS_NOPCHECK', 'No se ha ejecutado ninguna auditor&iacute;a');
define('AC_PSTATUS_FULLNAMEKNOWN', 'El nombre y el apellido son conocidos');
define('AC_PSTATUS_LASTNAMEKNOWN', 'El apellido es conocido');
define('AC_PSTATUS_NAMEUNKNOWN', 'Nombre y apellido desconocidos');
define('AC_PSTATUS_NAMEADDRAMBIGUITY', 'Ambig&uuml;edad en el nombre a la direcci&oacute;n');
define('AC_PSTATUS_UNDELIVERABLE', 'no se puede entregar (ya)');
define('AC_PSTATUS_DEAD', 'Persona fallecida');
define('AC_PSTATUS_POSTALERROR', 'Direcci&oacute;n postal equivocada');
 
// api
define('STATUS_UPDATED_BY_PAYONE', 'Estado actualizado por PAYONE');
define('COMMENT_ERROR', 'comment_error');
define('COMMENT_REDIRECTION_INITIATED', 'comment_redirection_initiated');
define('COMMENT_AUTH_APPROVED', 'Pago aprobado');
define('COMMENT_PREAUTH_APPROVED', 'Pago aprobado');
define('VOUCHER_OR_DISCOUNT', 'voucher_or_discount');
define('MISC_HANDLING', 'misc_handling');
define('SHIPPING_COST', 'shipping_cost');
 
// payment
define('paymenttype_visa', 'Visa');
define('paymenttype_mastercard', 'Mastercard');
define('paymenttype_amex', 'American Express');
define('paymenttype_cartebleue', 'Carte Bleue');
define('paymenttype_dinersclub', 'Diners Club');
define('paymenttype_discover', 'Discover');
define('paymenttype_jcb', 'JCB');
define('paymenttype_maestro', 'Maestro');
define('paymenttype_billsafe', 'BillSAFE');
define('paymenttype_klarna', 'Klarna');
define('paymenttype_commerzfinanz', 'CommerzFinanz');
define('paymenttype_lastschrift', 'D&eacute;bito directo');
define('paymenttype_invoice', 'Venta a cuenta');
define('paymenttype_prepay', 'Efectivo por adelantado');
define('paymenttype_cod', 'Pago contra reembolso');
define('paymenttype_paypal', 'PayPal');
define('paymenttype_paydirekt', 'PayDirekt');
define('paymenttype_sofortueberweisung', 'Transferencia bancaria en l&iacute;nea');
define('paymenttype_giropay', 'GiroPay');
define('paymenttype_eps', 'EPS');
define('paymenttype_pfefinance', 'Post-Finance EFinance');
define('paymenttype_pfcard', 'Post-Finance Card');
define('paymenttype_ideal', 'iDEAL');
 
// payment form
define('selection_type', 'M&eacute;todo de pago:');
define('customers_dob', 'Fecha de nacimiento (DD.MM.YYYY):');
define('customers_telephone', 'Tel&eacute;fono:');
define('personalid', 'Identificaci&oacute;n personal:');
define('addressaddition', 'Direcci&oacute;n adicional:');
 
// installment
define('TEXT_KLARNA_CONFIRM', ' Estoy de acuerdo con el procesamiento de datos necesario para la ejecuci&oacute;n de la venta a cuenta y una verificaci&oacute;n de identidad y cr&eacute;dito por parte de Klarna. Puedo revocar mis %s en cualquier momento con efecto para el futuro. Se aplican los t&eacute;rminos y condiciones del distribuidor.');
define('TEXT_KLARNA_ERROR_CONDITIONS', 'Si no acepta las condiciones de la factura de Klarna, lamentablemente no podemos aceptar su pedido!');
define('TEXT_KLARNA_INVOICE', 'Para m&aacute;s informaci&oacute;n sobre la venta a cuenta, v&eacute;ase el');
define('KLARNA_STOREID', 'Klarna SoreID');
define('KLARNA_COUNTRIES', 'Pa&iacute;ses de Klarna');
 
// otrans
define('onlinetransfer_type', 'Escriba:');
define('bankaccountholder', 'El titular de la cuenta:');
define('iban', 'IBAN:');
define('bic', 'BIC:');
define('ideal', 'Grupo bancario:');
define('eps', 'Grupo bancario:');
define('bankaccount', 'N&uacute;mero de cuenta:');
define('bankcode', 'El c&oacute;digo del banco:');
 
// ELV
define('SEPA_MANDATE_HEADING', 'D&eacute;bito directo de la SEPA');
define('SEPA_MANDATE_INFO', 'Para canjear el monto por d&eacute;bito directo de su cuenta bancaria, necesitamos una orden de d&eacute;bito directo de la SEPA.');
define('SEPA_MANDATE_CONFIRM_LABEL', 'Deseo otorgar un mandato (transmisi&oacute;n electr&oacute;nica)');
define('NOTE_GERMAN_ACCOUNT', 'o pague como de costumbre con sus datos bancarios conocidos (s&oacute;lo para cuentas bancarias alemanas)');
define('ELV_IBAN', 'IBAN:');
define('ELV_BIC', 'BIC:');
define('ELV_ACCOUNT_HOLDER', 'El titular de la cuenta:');
define('ELV_BANKCODE', 'El c&oacute;digo del banco:');
define('ELV_ACCOUNT_NUMBER', 'N&uacute;mero de cuenta:');
define('ELV_COUNTRY', 'Pa&iacute;s:');
define('ELV_COUNTRY_DE', 'Alemania');
define('ELV_COUNTRY_AT', 'Austria');
define('ELV_COUNTRY_NL', 'Pa&iacute;ses Bajos');
define('SEPA_COUNTRIES', 'Lista de los pa&iacute;ses de d&eacute;bito directo de la SEPA que reciben apoyo');
define('SEPA_DISPLAY_KTOBLZ', 'Campos adicionales cuenta bancaria/c&oacute;digo bancario');
define('SEPA_DISPLAY_KTOBLZ_NOTE', 'Mostrar campos adicionales para el n&uacute;mero de cuenta/c&oacute;digo bancario (s&oacute;lo cuentas bancarias alemanas)');
define('SEPA_USE_MANAGEMANDATE', 'Habilitar el otorgamiento del mandato');
define('SEPA_USE_MANAGEMANDATE_NOTE', 'El otorgamiento del mandato tiene lugar con la solicitud cargada "managemandate". La solicitud incluye un cheque de cuenta bancaria. Sin embargo, no es posible realizar una consulta para la lista de bloqueo del POS con esto.');
define('SEPA_DOWNLOAD_PDF', 'Descargar el mandato en PDF');
define('SEPA_DOWNLOAD_PDF_NOTE', 'Ofrezca la descarga de la orden de domiciliaci&oacute;n bancaria de la SEPA como archivo PDF (s&oacute;lo disponible si ha cargado el producto "&oacute;rdenes de domiciliaci&oacute;n bancaria de la SEPA como PDF" en PAYONE)');
define('DOWNLOAD_MANDATE_HERE', 'Ahora puede descargar el mandato como parte del pago por d&eacute;bito directo de la SEPA aqu&iacute;: ');
define('MANDATE_PDF', 'Archivo PDF');
define('CHECK_BANKDATA', 'Datos de la cuenta de cheques');
define('DONT_CHECK', 'no compruebe los datos de la cuenta');
define('CHECK_BASIC', 'B&aacute;sico');
define('CHECK_POS', 'con la lista de bloqueo del punto de venta');
 
// cc
define('TEXT_CARDOWNER', 'El titular de la tarjeta:');
define('TEXT_CARDTYPE', 'Tipo de tarjeta:');
define('TEXT_CARDNO', 'N&uacute;mero de tarjeta:');
define('TEXT_CARDEXPIRES', 'V&aacute;lido hasta (Mes / A&ntilde;o):');
define('TEXT_CARDCHECKNUM', 'D&iacute;gito de control:');
define('TEXT_CHECK_DATA', 'Por favor, compruebe sus datos.');
 
// orders status
define('ORDERS_STATUS_CONFIGURATION', 'Configuraci&oacute;n del estado de las &oacute;rdenes');
define('ORDERS_STATUS_TMP', 'estado temporal');
define('ORDERS_STATUS_PENDING', 'Recibo de pago inseguro/ esperado');
define('ORDERS_STATUS_PAID', 'El pago ha sido exitoso');
define('ORDERS_STATUS_DENIED', 'El pago fall&oacute; o fue rechazado');
define('ORDERS_STATUS_APPROVED', 'Pago aprobado');
define('ORDERS_STATUS_APPOINTED', 'Pago designado');
define('ORDERS_STATUS_CAPTURE', 'Captura de pagos');
define('ORDERS_STATUS_UNDERPAID', 'El pago es insuficiente');
define('ORDERS_STATUS_CANCELATION', 'Pago cancelado');
define('ORDERS_STATUS_REFUND', 'Reembolso del pago');
define('ORDERS_STATUS_DEBIT', 'Cobro de pagos');
define('ORDERS_STATUS_TRANSFER', 'Transacci&oacute;n de pago');
define('ORDERS_STATUS_REMINDER', 'Recordatorio de pago');
define('ORDERS_STATUS_VAUTHORIZATION', 'Pago vAuth');
define('ORDERS_STATUS_VSETTLEMENT', 'Pago vSoluci&oacute;n');
define('ORDERS_STATUS_INVOICE', 'Pago de la venta a cuenta');
define('ORDERS_STATUS_NONE', 'no hay cambios');
define('TEXT_EXTERN_CALLBACK_URL', 'Reenv&iacute;o del estado de la URL');
define('TEXT_EXTERN_CALLBACK_TIMEOUT', 'Tiempo de espera');
 
// global
define('TEXT_YES', 'S&iacute;');
define('TEXT_NO', 'No');
define('ERROR_OCCURED', 'Se produjo un error');
define('BOX_PAYONE_CONFIG', 'Configuraci&oacute;n de PAYONE');
define('BOX_PAYONE_LOGS', 'Registro de la API de PAYONE');
define('PAYONE_CONFIG_TITLE', 'Configuraci&oacute;n de PAYONE');
define('PAYMENT_CONFIGURATION', 'Configuraci&oacute;n de pago');
define('GLOBAL_CONFIGURATION', 'Par&aacute;metros globales');
define('MERCHANT_ID', 'Merchant-ID');
define('PORTAL_ID', 'Portal-ID');
define('SUBACCOUNT_ID', 'Subcuenta-ID');
define('KEY', 'Clave');
define('OPERATING_MODE', 'Modo de funcionamiento');
define('OPMODE_TEST', 'Modo de prueba');
define('OPMODE_LIVE', 'Modo en vivo');
define('AUTHORIZATION_METHOD', 'M&eacute;todo de autorizaci&oacute;n');
define('AUTHMETHOD_AUTH', 'Autorizaci&oacute;n instant&aacute;nea');
define('AUTHMETHOD_PREAUTH', 'Autorizaci&oacute;n previa');
define('SEND_CART', 'Carro de transferencia');
 
// payment genre
define('PAYMENT_GENRE', 'M&eacute;todo de pago');
define('PAYMENTGENRE_CONFIGURATION', 'Configuraci&oacute;n de los m&eacute;todos de pago');
define('PG_ACTIVE', 'activo');
define('PG_ORDER', 'Orden de clasificaci&oacute;n');
define('PG_NAME', 'Nombre interno');
define('PG_MIN_CART_VALUE', 'Valor m&iacute;nimo de las mercanc&iacute;as');
define('PG_MAX_CART_VALUE', 'Valor m&aacute;ximo de las mercanc&iacute;as');
define('PG_OPERATING_MODE', 'Modo de funcionamiento');
define('PG_GLOBAL_OVERRIDE', 'anular los par&aacute;metros globales');
define('PG_COUNTRIES', 'pa&iacute;ses activos');
define('PG_SCORING_ALLOWED', 'valores de puntuaci&oacute;n permitidos');
define('PG_RED', 'rojo');
define('PG_YELLOW', 'amarillo');
define('PG_GREEN', 'verde');
define('PG_PAYMENT_TYPES', 'Tipos de m&eacute;todos de pago');
define('PG_PAYMENTTYPE_VISA', 'Visa');
define('PG_PAYMENTTYPE_MASTERCARD', 'Mastercard');
define('PG_PAYMENTTYPE_AMEX', 'American Express');
define('PG_PAYMENTTYPE_CARTEBLEUE', 'Carte Bleue');
define('PG_PAYMENTTYPE_DINERSCLUB', 'Diners Club');
define('PG_PAYMENTTYPE_DISCOVER', 'Descubre');
define('PG_PAYMENTTYPE_JCB', 'JCB');
define('PG_PAYMENTTYPE_MAESTRO', 'Maestro');
define('PG_PAYMENTTYPE_LASTSCHRIFT', 'D&eacute;bito directo');
define('PG_PAYMENTTYPE_INVOICE', 'Venta a cuenta');
define('PG_PAYMENTTYPE_PREPAY', 'Efectivo por adelantado');
define('PG_PAYMENTTYPE_COD', 'Pago contra reembolso');
define('PG_PAYMENTTYPE_PAYPAL', 'PayPal');
define('PG_PAYMENTTYPE_BILLSAFE', 'BillSAFE');
define('PG_PAYMENTTYPE_COMMERZFINANZ', 'CommerzFinanz');
define('PG_TYPE_ACTIVE', 'activo');
define('PG_CHECK_CAV', 'Consulta de d&iacute;gitos de control');
define('PG_PAYMENTTYPE_SOFORTUEBERWEISUNG', 'Transferencia bancaria en l&iacute;nea (transferencia por Sofort.)');
define('PG_PAYMENTTYPE_GIROPAY', 'GiroPay');
define('PG_PAYMENTTYPE_EPS', 'EPS');
define('PG_PAYMENTTYPE_PFEFINANCE', 'Post-Finanzas EFinance');
define('PG_PAYMENTTYPE_PFCARD', 'Tarjeta Post-Financiera');
define('PG_PAYMENTTYPE_IDEAL', 'iDEAL');
define('OVERRIDE_DATA', 'Par&aacute;metros locales');
define('ADD_PAYMENT_GENRE', 'A&ntilde;ade el m&eacute;todo de pago');
define('PAYGENRE_CREDITCARD', 'Tarjetas de cr&eacute;dito');
define('PAYGENRE_ONLINETRANSFER', 'Transacci&oacute;n en l&iacute;nea');
define('PAYGENRE_EWALLET', 'e-Wallet');
define('PAYGENRE_ACCOUNTBASED', 'M&eacute;todos de pago basados en cuentas bancarias');
define('PAYGENRE_INSTALLMENT', 'Contratar compra/factoraje');
 
// config
define('ACTIVE', 'activo');
define('CONFIG_SAVE', 'Guardar la configuraci&oacute;n');
define('NO_PAYMENTGENRE_CONFIGURED', 'No hay ning&uacute;n m&eacute;todo de pago configurado todav&iacute;a.');
define('ADDRESS_CHECK_CONFIGURATION', 'Verificaci&oacute;n de la direcci&oacute;n');
define('SELECT_ALL_COUNTRIES', 'activar todos los pa&iacute;ses');
define('SELECT_NO_COUNTRY', 'desactivar todos los pa&iacute;ses');
define('REMOVE_PAYMENT_GENRE', 'Eliminar el m&eacute;todo de pago');
define('REMOVE_THIS_GENRE', 'Elimine este m&eacute;todo de pago al ahorrar');
define('CONFIGURATION_SAVED', 'Configuraci&oacute;n guardada');
define('PAYMENTGENRE_ADDED', 'Se ha a&ntilde;adido un m&eacute;todo de pago');
define('PAYONE_ORDERS_HEADING', 'Pago de PAYONE');
define('TRANSACTIONS', 'Transacciones');
define('TXID', 'Transacciones-ID');
define('USERID', 'Identificaci&oacute;n de usuario');
define('CREATED', 'creado');
define('LAST_MODIFIED', '&uacute;ltima modificaci&oacute;n');
define('STATUS', 'Estado');
define('TRANSACTION_STATUS', 'Estado de la transacci&oacute;n');
define('NO_TRANSACTION_STATUS_RECEIVED', 'no se ha recibido a&uacute;n el estado de la transacci&oacute;n');
define('ERROR_OCCURRED', 'Se produjo un error');
define('ERROR_ADDRESSES_MUST_BE_EQUAL', 'Con el m&eacute;todo de pago elegido la direcci&oacute;n de facturaci&oacute;n y de entrega debe corresponder!');
define('TABLE_HEADING_CHECK', 'Elija');
define('DUMP_CONFIG', 'Configuraci&oacute;n de exportaci&oacute;n');
define('CONFIGURATION_DUMPED_TO', 'Configuraci&oacute;n guardada en un archivo');
define('ERROR_DUMPING_CONFIGURATION', 'Hubo un error durante la exportaci&oacute;n de la configuraci&oacute;n.');
define('INSTALL_CONFIG', 'Instalar PAYONE');
 
// Capture
define('CAPTURE_TRANSACTION', 'Capturar el pago');
define('CAPTURE_AMOUNT', 'Cantidad');
define('CAPTURE_SUBMIT', 'Capturar ahora');
define('AMOUNT_CAPTURED', 'Cantidad capturada');
 
// Clearing
define('CLEARING_INTRO', 'Por favor, transfiera el importe de la factura a la siguiente cuenta bancaria:');
define('CLEARING_OUTRO', 'Su pedido no ser&aacute; enviado hasta que recibamos su pago en nuestra cuenta bancaria.');
define('CLEARING_ACCOUNTHOLDER', 'El titular de la cuenta: ');
define('CLEARING_ACCOUNT', 'N&uacute;mero de cuenta: ');
define('CLEARING_BANKCODE', 'El c&oacute;digo del banco: ');
define('CLEARING_IBAN', 'IBAN: ');
define('CLEARING_BIC', 'BIC: ');
define('CLEARING_BANK', 'Banco: ');
define('CLEARING_AMOUNT', 'Cantidad');
define('CLEARING_TEXT', 'Referencia: ');
 
// Refund
define('REFUND_TRANSACTION', 'Asesoramiento de cr&eacute;dito');
define('REFUND_SUBMIT', 'Procesar la asesor&iacute;a crediticia');
define('REFUND_AMOUNT', 'Cantidad');
define('REFUND_BANKCOUNTRY', 'Pa&iacute;s');
define('REFUND_COUNTRY_DE', 'Alemania');
define('REFUND_COUNTRY_FR', 'Francia');
define('REFUND_COUNTRY_NL', 'Pa&iacute;ses Bajos');
define('REFUND_COUNTRY_AT', 'Austria');
define('REFUND_COUNTRY_CH', 'Suiza');
define('REFUND_BANKACCOUNT', 'N&uacute;mero de cuenta');
define('REFUND_BANKCODE', 'El c&oacute;digo del banco');
define('REFUND_BANKBRANCHCODE', 'Rama');
define('REFUND_BANKCHECKDIGIT', 'D&iacute;gito de control');
define('REFUND_IBAN', 'IBAN');
define('REFUND_BIC', 'BIC');
define('AMOUNT_REFUNDED', 'Cantidad acreditada');
 
// Log
define('PAYONE_LOGS_TITLE', 'Registro de la API de PAYONE');
define('EVENT_ID', 'Event-ID');
define('DATETIME', 'Punto de tiempo');
define('CUSTOMER', 'Cliente (siempre que se conozca)');
define('START_DATE', 'Comienza');
define('END_DATE', 'Fin');
define('PAGE', 'P&aacute;gina');
define('SEARCH', 'Busca en');
define('SHOW', 'mostrar');
define('EVENT_LOG_COUNT', 'Subevento-No.');
define('NO_LOGS', 'No hay entradas para el per&iacute;odo elegido.');
define('API', 'API');

// Payolution
define('PAYOLUTION_CHANNELID', 'Identificaci&oacute;n del canal de pago');
define('PAYOLUTION_CHANNELPWD', 'Contrase&ntilde;a del canal de pago');

define('paymenttype_payolution_debit', 'D&eacute;bito directo de la soluci&oacute;n de pago');
define('paymenttype_payolution_invoice', 'Factura de pago');
define('paymenttype_payolution_monthly', 'Factura mensual de pago');
define('paymenttype_payolution_financing', 'Financiaci&oacute;n de la soluci&oacute;n de pago');

define('company_uid', 'IVA (opcional):');
define('company_trade_registry_number', 'Registro mercantil (opcional):');
define('company_register_key', 'Identificaci&oacute;n de registro (opcional):');

define('TEXT_PAYOLUTION_ERROR_CONDITIONS', 'Si no est&aacute; de acuerdo con la transferencia de sus datos para la liquidaci&oacute;n de la compra, lamentablemente no podemos aceptar su pedido!');
define('TEXT_PAYOLUTION_CONFIRM_SEPA', 'Autorizo a la <a target="_blank" href="%s">mandato de d&eacute;bito directo de la SEPA</a>');
define('TEXT_PAYOLUTION_CONFIRM', 'Estoy de acuerdo con la verificaci&oacute;n de los datos necesarios para la realizaci&oacute;n de la compra en la factura y una verificaci&oacute;n de la identidad y el cr&eacute;dito.<br/>Puedo revocar <a class="'.((defined('TPL_POPUP_SHIPPING_LINK_CLASS')) ? TPL_POPUP_SHIPPING_LINK_CLASS : POPUP_PRODUCT_LINK_CLASS).'" href="https://payment.payolution.com/payolution-payment/infoport/dataprivacydeclaration?lang=en&mId='.base64_encode(STORE_OWNER).((defined('TPL_POPUP_CONTENT_LINK_PARAMETERS')) ? TPL_POPUP_CONTENT_LINK_PARAMETERS : POPUP_PRODUCT_LINK_PARAMETERS).'">mi permiso </a> con efecto para el futuro en cualquier momento.');

define('TEXT_EACH_MONTH', 'por mes');
define('TEXT_RATES', 'tarifas');
define('TEXT_DURATION', 'Duraci&oacute;n');
define('TEXT_DURATION_MONTHS', 'meses');
define('TEXT_FINANCING_AMOUNT', 'La cantidad de financiaci&oacute;n');
define('TEXT_TOTAL_AMOUNT', 'La cantidad total');
define('TEXT_INTERESTRATE', 'Interesado');
define('TEXT_EFFECTIVE_INTERESTRATE', 'Inter&eacute;s efectivo');
define('TEXT_MONTHLY_RATES', 'Tasa mensual');
define('TEXT_RATES_PLAN', 'Plan de tarifas');
define('TEXT_RATES_DUE', 'tasa debida');
define('TEXT_CONTRACT', 'Contrato');
define('TEXT_DOWNLOAD_CONTRACT', 'descargar');
?>