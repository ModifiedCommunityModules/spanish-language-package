<?php

/* Default Messages */
define('MODULE_PAYMENT_BILLPAY_TEXT_TITLE', 'BillPay - Factura');
define('MODULE_PAYMENT_BILLPAY_TEXT_DESCRIPTION', 'BillPay - Factura');
define('MODULE_PAYMENT_BILLPAY_TEXT_ERROR_MESSAGE', 'Mensaje de error de BillPay');
define('MODULE_PAYMENT_BILLPAY_TEXT_INFO', '<div style="margin-top:6px"><img src="https://www.billpay.de/wp-content/uploads/2011/04/LogoSmall_0.png" alt="BillPay Logo" title="BillPay Logo" /></div>');

define('MODULE_PAYMENT_BILLPAY_ALLOWED_TITLE' , 'Pa&iacute;ses permitidos');
define('MODULE_PAYMENT_BILLPAY_ALLOWED_DESC' , 'Introduzca los pa&iacute;ses (p.ej. AT, DE) permitidos para utilizar este m&eacute;todo de pago. Si est&aacute; vac&iacute;o, todos los pa&iacute;ses est&aacute;n permitidos');

define('MODULE_PAYMENT_BILLPAY_LOGGING_TITLE' , 'Ruta absoluta para el archivo de registro');
define('MODULE_PAYMENT_BILLPAY_LOGGING_DESC' , 'El m&oacute;dulo de pago escribir&aacute; toda la comunicaci&oacute;n con el servidor de BillPay en el archivo. Si est&aacute; vac&iacute;o, usar&aacute; la ruta por defecto (/includes/external/billpay/log).');

define('MODULE_PAYMENT_BILLPAY_DATA_PROVIDED_BY_BILLPAY' , 'Datos proporcionados por BillPay');
define('MODULE_PAYMENT_BILLPAY_GS_MERCHANT_ID_TITLE' , 'Comerciante  ID');
define('MODULE_PAYMENT_BILLPAY_GS_MERCHANT_ID_DESC' , MODULE_PAYMENT_BILLPAY_DATA_PROVIDED_BY_BILLPAY);

define('MODULE_PAYMENT_BILLPAY_ORDER_STATUS_TITLE' , 'Estado del pedido por defecto');
define('MODULE_PAYMENT_BILLPAY_ORDER_STATUS_DESC' , 'Todos los pedidos realizados con este m&eacute;todo de pago y aprobados por BillPay, se crear&aacute;n con este estado. (ajuste predeterminado: "BillPay pendiente")');

define('MODULE_PAYMENT_BILLPAY_GS_PORTAL_ID_TITLE' , 'Portal ID');
define('MODULE_PAYMENT_BILLPAY_GS_PORTAL_ID_DESC' , MODULE_PAYMENT_BILLPAY_DATA_PROVIDED_BY_BILLPAY);

define('MODULE_PAYMENT_BILLPAY_GS_SECURE_TITLE' , 'API contrase&ntilde;a');
define('MODULE_PAYMENT_BILLPAY_GS_SECURE_DESC' , MODULE_PAYMENT_BILLPAY_DATA_PROVIDED_BY_BILLPAY);

define('MODULE_PAYMENT_BILLPAY_GS_PUBLIC_API_KEY_TITLE', 'Clave API p&uacute;blica');
define('MODULE_PAYMENT_BILLPAY_GS_PUBLIC_API_KEY_DESC', MODULE_PAYMENT_BILLPAY_DATA_PROVIDED_BY_BILLPAY);

define('MODULE_PAYMENT_BILLPAY_SORT_ORDER_TITLE' , 'Orden de exhibici&oacute;n');
define('MODULE_PAYMENT_BILLPAY_SORT_ORDER_DESC' , 'Orden de exhibici&oacute;n. El n&uacute;mero m&aacute;s peque&ntilde;o se muestra primero.');

define('MODULE_PAYMENT_BILLPAY_STATUS_TITLE' , 'Habilitado');
define('MODULE_PAYMENT_BILLPAY_STATUS_DESC' , '&iquest;Quiere habilitar esta forma de pago?');

define('MODULE_PAYMENT_BILLPAY_GS_TESTMODE_TITLE' , 'Habilitar el modo de prueba');
define('MODULE_PAYMENT_BILLPAY_GS_TESTMODE_DESC' , 'En el modo de prueba, se muestran mensajes de error detallados. Debe ser desactivado en el entorno de producci&oacute;n.');

define('MODULE_PAYMENT_BILLPAY_ZONE_TITLE' , 'Zona de impuestos');
define('MODULE_PAYMENT_BILLPAY_ZONE_DESC' , '');

define('MODULE_PAYMENT_BILLPAY_GS_API_URL_BASE_TITLE' , 'API url base');
define('MODULE_PAYMENT_BILLPAY_GS_API_URL_BASE_DESC' , 'Datos proporcionados por BillPay. Advertencia: Las URLs para los sistemas en vivo y los sistemas de prueba son diferentes.');

define('MODULE_PAYMENT_BILLPAY_GS_TESTAPI_URL_BASE_TITLE' , 'Prueba de la base de la url API');
define('MODULE_PAYMENT_BILLPAY_GS_TESTAPI_URL_BASE_DESC' , 'Datos proporcionados por BillPay. Advertencia: Las URLs para los sistemas en vivo y los sistemas de prueba son diferentes.');

define('MODULE_PAYMENT_BILLPAY_LOGGING_ENABLE_TITLE' , 'Registro habilitado');
define('MODULE_PAYMENT_BILLPAY_LOGGING_ENABLE_DESC' , 'Si se activa, toda la comunicaci&oacute;n se escribir&aacute; en un archivo de registro.');

define('MODULE_PAYMENT_BILLPAY_MIN_AMOUNT_TITLE', 'Valor m&iacute;nimo del pedido');
define('MODULE_PAYMENT_BILLPAY_MIN_AMOUNT_DESC', 'Para los pedidos por debajo de este valor, este m&eacute;todo de pago ser&aacute; ocultado.');

define('MODULE_PAYMENT_BILLPAY_LOGPATH_TITLE', 'Ruta de registro');
define('MODULE_PAYMENT_BILLPAY_LOGPATH_DESC', '');

define('MODULE_PAYMENT_BILLPAY_GS_HTTP_X_TITLE', 'X_FORWARDED_FOR permitir');
define('MODULE_PAYMENT_BILLPAY_GS_HTTP_X_DESC', 'Active esta funci&oacute;n si su tienda est&aacute; usando el sistema de nubes');

define('MODULE_PAYMENT_BILLPAY_HTTP_X_TITLE', 'X_FORWARDED_FOR permite');
define('MODULE_PAYMENT_BILLPAY_HTTP_X_DESC', 'Active esta funci&oacute;n si su tienda utiliza Cloud System');

// Payment selection texts
define('MODULE_PAYMENT_BILLPAY_TEXT_BIRTHDATE', 'Fecha de nacimiento');


define('MODULE_PAYMENT_BILLPAY_TEXT_ENTER_BIRTHDATE', 'Por favor, establezca su fecha de nacimiento en la p&aacute;gina de la cuenta.');
define('MODULE_PAYMENT_BILLPAY_TEXT_PHONE', 'N&uacute;mero de tel&eacute;fono');
define('MODULE_PAYMENT_BILLPAY_TEXT_EULA_CHECK',    'Estoy de acuerdo con la transferencia de los datos necesarios para la tramitaci&oacute;n de la compra a cuenta y una comprobaci&oacute;n de identidad y cr&eacute;dito al <a href="https://www.billpay.de/endkunden/" target="blank">BillPay GmbH</a>. <a href="%s" target="_blank">Se aplican las normas de protecci&oacute;n</a> de datos de BillPay.');
define('MODULE_PAYMENT_BILLPAY_TEXT_EULA_CHECK_CH', '<label for="billpay_eula">Aqu&iacute; confirmo la <a href="https://www.billpay.de/kunden/agb-ch" target="_blank">AGB</a> y <a href="https://www.billpay.de/kunden/agb-ch#datenschutz" target="_blank">las normas de protecci&oacute;n de datos</a> de BillPay GmbH </label> <br />');

define('MODULE_PAYMENT_BILLPAY_TEXT_EULA_CHECK_SEPA', "Estoy de acuerdo con la transferencia de los datos necesarios para la tramitaci&oacute;n del pago y una comprobaci&oacute;n de identidad y cr&eacute;dito a la <a href='https://www.billpay.de/endkunden/' target='_blank'>BillPay GmbH</a>. La <a href='%s' target='_blank'>normativa de protecci&oacute;n de datos</a> de BillPay.<br/><br/> Entrego a BillPay una orden de domiciliaci&oacute;n SEPA (<a href='#' class='bpy-btn-details'>detalles</a>) para el cobro de los pagos adeudados y doy instrucciones a mi entidad financiera para que cobre las domiciliaciones.");
define('MODULE_PAYMENT_BILLPAY_TEXT_EULA_CHECK_SEPA_AT', "Estoy de acuerdo con la transferencia de los datos necesarios para la tramitaci&oacute;n del pago y la comprobaci&oacute;n de la identidad y la solvencia a <a href='https://www.billpay.de/endkunden/' target='_blank'>BillPay GmbH</a>. La <a href='%s' target='_blank'>normativa de protecci&oacute;n de datos</a> de BillPay.<br/><br/> Concedo a BillPay y al <a href='https://www.privatbank1891.com/' target='_blank'>net-m privatbank 1891 AG</a> un Mandato de Adeudo Directo SEPA (<a href='#' class='bpy-btn-details'>details</a>) para el cobro de los pagos pendientes y doy instrucciones a mi entidad financiera para que cobre los adeudos directos.");

define('MODULE_PAYMENT_BILLPAY_UTF8_ENCODE_TITLE', 'Activar la codificaci&oacute;n UTF8');
define('MODULE_PAYMENT_BILLPAY_UTF8_ENCODE_DESC', 'Desactive esta opci&oacute;n si utiliza la codificaci&oacute;n UTF-8 en su tienda online');

define('MODULE_PAYMENT_BILLPAY_TEXT_ENTER_GENDER', 'Por favor, establece tu g&eacute;nero en la p&aacute;gina de la cuenta.');
define('MODULE_PAYMENT_BILLPAY_TEXT_ENTER_TITLE', 'Por favor, introduzca su t&iacute;tulo');
define('MODULE_PAYMENT_BILLPAY_TEXT_ENTER_BIRTHDATE_AND_GENDER', 'Por favor, establezca su fecha de nacimiento y sexo en la p&aacute;gina de la cuenta.');
define('MODULE_PAYMENT_BILLPAY_TEXT_ENTER_PHONE', 'Por favor, introduzca su n&uacute;mero de tel&eacute;fono.');
define('MODULE_PAYMENT_BILLPAY_TEXT_NOTE', '');
define('MODULE_PAYMENT_BILLPAY_TEXT_REQ', '');
define('MODULE_PAYMENT_BILLPAY_TEXT_GENDER', 'G&eacute;nero');
define('MODULE_PAYMENT_BILLPAY_TEXT_SALUTATION', 'Saludo');
define('MODULE_PAYMENT_BILLPAY_TEXT_MALE', 'macho');
define('MODULE_PAYMENT_BILLPAY_TEXT_FEMALE', 'mujer');
define('MODULE_PAYMENT_BILLPAY_TEXT_MR', 'Sr.');
define('MODULE_PAYMENT_BILLPAY_TEXT_MRS', 'Sra.');

define('JS_BILLPAY_EULA', '* Por favor, acepte que el EULA contin&uacute;e.\n\n');
define('JS_BILLPAY_DOBDAY', '* Por favor, establezca su fecha de nacimiento en la p&aacute;gina de la cuenta.\n\n');
define('JS_BILLPAY_DOBMONTH', JS_BILLPAY_DOBDAY);
define('JS_BILLPAY_DOBYEAR', JS_BILLPAY_DOBDAY);
define('JS_BILLPAY_GENDER', '* Por favor, establezca su g&eacute;nero en la p&aacute;gina de la cuenta.\n\n');

define('JS_BILLPAY_CODE', '* Por favor, proporcione el c&oacute;digo de la cuenta bancaria.\n\n');
define('JS_BILLPAY_NUMBER', '* Por favor, proporcione el n&uacute;mero de cuenta bancaria.\n\n');
define('JS_BILLPAY_NAME', '* S&iacute;rvase proporcionar el nombre del titular de la cuenta bancaria seleccionada.\n\n');
define('JS_BILLPAY_PHONE', '* Por favor, proporcione su n&uacute;mero de tel&eacute;fono.\n\n');

define('MODULE_PAYMENT_BILLPAY_TEXT_ERROR_EULA', '* Por favor, acepte que el EULA contin&uacute;e.');
define('MODULE_PAYMENT_BILLPAY_TEXT_ERROR_DOB', '&iexcl;Has introducido una fecha de nacimiento incorrecta!');
define('MODULE_PAYMENT_BILLPAY_TEXT_ERROR_DOB_UNDER', 'Debes ser mayor de 18 a&ntilde;os para utilizar BillPay..');
define('MODULE_PAYMENT_BILLPAY_TEXT_ERROR_DEFAULT', 'Error interno, por favor elija otro m&eacute;todo de pago.');
define('MODULE_PAYMENT_BILLPAY_TEXT_ERROR_SHORT', 'Error interno, por favor elija otro m&eacute;todo de pago.');
define('MODULE_PAYMENT_BILLPAY_TEXT_INVOICE_CREATED_COMMENT', 'Se ha creado una factura.');
define('MODULE_PAYMENT_BILLPAY_TEXT_CANCEL_COMMENT', 'La orden ha sido cancelada por BillPay.');
define('MODULE_PAYMENT_BILLPAY_TEXT_ERROR_DUEDATE', 'El pago no puede iniciarse porque la fecha de vencimiento est&aacute; vac&iacute;a.');

define('MODULE_PAYMENT_BILLPAY_TEXT_ERROR_CODE', '* Por favor, corrija el c&oacute;digo de la cuenta bancaria.');
define('MODULE_PAYMENT_BILLPAY_TEXT_ERROR_NUMBER', '* Por favor, corrija el n&uacute;mero de cuenta bancaria.');
define('MODULE_PAYMENT_BILLPAY_TEXT_ERROR_NAME', '* Por favor, corrija el nombre del titular de la cuenta bancaria seleccionada.');

define('MODULE_PAYMENT_BILLPAY_TEXT_ERROR_PHONE', '* Por favor, proporcione su n&uacute;mero de tel&eacute;fono.');

define('MODULE_PAYMENT_BILLPAY_TEXT_CREATE_INVOICE', 'Crear la factura de BillPay ahora?');
define('MODULE_PAYMENT_BILLPAY_TEXT_CANCEL_ORDER', 'Cancele el pago de BillPay ahora?');

define('MODULE_PAYMENT_BILLPAY_TEXT_ACCOUNT_HOLDER', 'El titular de la cuenta');
define('MODULE_PAYMENT_BILLPAY_TEXT_IBAN', 'IBAN');
define('MODULE_PAYMENT_BILLPAY_TEXT_BANK_NAME', 'Banco');
define('MODULE_PAYMENT_BILLPAY_TEXT_BIC', 'BIC');
define('MODULE_PAYMENT_BILLPAY_TEXT_INVOICE_REFERENCE', 'N&uacute;mero de factura');
define('MODULE_PAYMENT_BILLPAY_TEXT_PHONE', 'N&uacute;mero de tel&eacute;fono');

define('MODULE_PAYMENT_BILLPAY_TEXT_BANKDATA', 'Por favor, proporcione los datos de su cuenta bancaria.');

define('MODULE_PAYMENT_BILLPAY_DUEDATE_TITLE', 'Fecha de vencimiento');

define('MODULE_PAYMENT_BILLPAY_TEXT_PURPOSE', 'Uso');

define('MODULE_PAYMENT_BILLPAY_TEXT_ADD', 'm&aacute;s');
define('MODULE_PAYMENT_BILLPAY_TEXT_FEE', 'Tarifa');

define('MODULE_PAYMENT_BILLPAY_TEXT_SANDBOX', 'Est&aacute;s en un modo de caja de arena:');
define('MODULE_PAYMENT_BILLPAY_TEXT_CHECK', 'Est&aacute; en el modo de aceptaci&oacute;n:');
define('MODULE_PAYMENT_BILLPAY_UNLOCK_INFO', 'La informaci&oacute;n de un servidor en vivo');


define('MODULE_PAYMENT_BILLPAY_B2BCONFIG_TITLE', 'Tipo de clientes');
define('MODULE_PAYMENT_BILLPAY_B2BCONFIG_DESC', '&iquest;Quiere ofrecer un m&eacute;todo de pago para clientes privados (B2C), empresas (B2B) o ambos (AMBOS)?');
define('MODULE_PAYMENT_BILLPAY_B2B_COMPANY_NAME_TEXT', 'Nombre de la empresa');
define('MODULE_PAYMENT_BILLPAY_B2B_COMPANY_LEGAL_FORM_TEXT', 'Forma legal');
define('MODULE_PAYMENT_BILLPAY_B2B_COMPANY_LEGAL_FORM_SELECT_HTML', "");
define('MODULE_PAYMENT_BILLPAY_B2B_CHOOSE_CLIENT_TEXT', 'Cliente t&iacute;pico');
define('MODULE_PAYMENT_BILLPAY_B2B_PRIVATE_CLIENT_TEXT', 'Cliente privado');
define('MODULE_PAYMENT_BILLPAY_B2B_BUSINESS_CLIENT_TEXT', 'Cliente comercial');
define('MODULE_PAYMENT_BILLPAY_B2B_COMPANY_FIELD_EMPTY', 'Por favor, introduzca el nombre de la empresa');
define('MODULE_PAYMENT_BILLPAY_B2B_LEGAL_FORM_FIELD_EMPTY', 'Por favor, proporcione la forma legal');
define('MODULE_PAYMENT_BILLPAY_B2B_HOLDER_NAME_EMPTY', 'Por favor, proporcione el nombre del titular');
define('MODULE_PAYMENT_BILLPAY_B2B_REGISTER_NUMBER_EMPTY', 'Por favor, proporcione el n&uacute;mero de registro');
define('MODULE_PAYMENT_BILLPAY_B2B_TAX_NUMBER_EMPTY', 'Por favor, proporcione una identificaci&oacute;n fiscal');

define('MODULE_PAYMENT_BILLPAY_B2B_LEGALFORM_VALUES', 'ag:AG (sociedad an&oacute;nima)|eg:eG (cooperativa registrada)|ek:EK (comerciante registrado)|ev:e.V. (asociaci&oacute;n registrada) (asociaci&oacute;n registrada)|freelancer:Aut&oacute;nomo/peque&ntilde;o empresario/representante comercial|gbr:GbR/BGB (sociedad civil)|gmbh:GmbH (sociedad de responsabilidad limitada)|gmbh_ig:GmbH in Grundung|gmbh_co_kg:GmbH & Co. KG|kg:KG (sociedad limitada)|ltd:Limitada|ltd_co_kg:Limitada & Co. KG|ohg:OHG (sociedad colectiva)|public_inst:Instituci&oacute;n p&uacute;blica|misc_capital:Otra sociedad an&oacute;nima|misc:Otra sociedad colectiva|fundaci&oacute;n:Fundaci&oacute;n|ug:UG (sociedad de responsabilidad limitada)');

define('MODULE_PAYMENT_BILLPAY_B2B_REGISTER_NUMBER_TEXT', 'N&uacute;mero de registro');
define('MODULE_PAYMENT_BILLPAY_B2B_TAX_NUMBER_TEXT', 'Tax-ID');
define('MODULE_PAYMENT_BILLPAY_B2B_HOLDER_NAME_TEXT', 'Nombre del titular');
define('MODULE_PAYMENT_BILLPAY_B2B_CONTACT_PERSON_TEXT', 'Persona de contacto');

define('MODULE_ORDER_TOTAL_BILLPAY_FEE_FROM_TOTAL', 'del importe de la factura');

define('MODULE_PAYMENT_BILLPAY_GS_UTF8_ENCODE_TITLE', 'Codificaci&oacute;n local');
define('MODULE_PAYMENT_BILLPAY_GS_UTF8_ENCODE_DESC', '&iquest;Utiliza su sitio web una codificaci&oacute;n local (que no sea utf-8)?');

define('MODULE_PAYMENT_BILLPAY_ACTIVATE_ORDER', 'La orden no ha sido activada por BillPay. Por favor, active la orden inmediatamente antes de su env&iacute;o en la que establezca el estado apropiado.');
define('MODULE_PAYMENT_BILLPAY_ACTIVATE_ORDER_WARNING', '<strong style="color:red">Advertencia: El pago a&uacute;n no ha sido iniciado por BillPay!</strong><br/>');

define('MODULE_PAYMENT_BILLPAY_HISTORY_ERROR_ADDRESS', 'Esta direcci&oacute;n no est&aacute; permitida en los pedidos con BillPay.');
define('MODULE_PAYMENT_BILLPAY_HISTORY_ERROR_PRODUCT', 'Este producto no est&aacute; permitido en los pedidos con BillPay.');
define('MODULE_PAYMENT_BILLPAY_HISTORY_ERROR_PAYMENT', 'Este pago no est&aacute; permitido en los pedidos con BillPay.');
define('MODULE_PAYMENT_BILLPAY_HISTORY_ERROR_CURRENCY', 'Esta moneda no est&aacute; permitida en los pedidos con BillPay.');
define('MODULE_PAYMENT_BILLPAY_HISTORY_ERROR_GENERAL', 'No puedes hacer esto por el m&eacute;todo de pago BillPay.');

define('MODULE_PAYMENT_BILLPAY_HISTORY_ERROR_HIGHER_QUANTITY', 'No puedes pedir m&aacute;s productos que en el pedido original con BillPay');
define('MODULE_PAYMENT_BILLPAY_HISTORY_ERROR_NEGATIVE_QUANTITY', 'No puedes pedir una cantidad negativa de productos con BillPay.');
define('MODULE_PAYMENT_BILLPAY_HISTORY_ERROR_TAX', 'No se permite ajustar la tasa de impuestos por orden.');
define('MODULE_PAYMENT_BILLPAY_HISTORY_ERROR_PRICE', 'No se permite ajustar el precio del pedido.');
define('MODULE_PAYMENT_BILLPAY_HISTORY_ERROR_ID', 'No se permite ajustar la identificaci&oacute;n del producto para el pedido.');
define('MODULE_PAYMENT_BILLPAY_HISTORY_ERROR_ZERO_REDUCTION', 'No se permite la reducci&oacute;n a cero por orden.');
define('MODULE_PAYMENT_BILLPAY_HISTORY_ERROR_NEGATIVE_REDUCTION', 'No se permite la reducci&oacute;n negativa por orden.');

define('MODULE_PAYMENT_BILLPAY_HISTORY_ERROR_NEGATIVE_SHIPPING', 'No se permite el env&iacute;o negativo de pedidos.');
define('MODULE_PAYMENT_BILLPAY_HISTORY_ERROR_INCREASED_SHIPPING', 'No se permite el aumento de los env&iacute;os por encargo.');
define('MODULE_PAYMENT_BILLPAY_HISTORY_ERROR_ADDED_SHIPPING', 'No se permite el env&iacute;o adicional para el pedido.');

define('MODULE_PAYMENT_BILLPAY_HISTORY_ERROR_FORBIDDEN', 'Esta acci&oacute;n no est&aacute; permitida en las &oacute;rdenes con BillPay.');
define('MODULE_PAYMENT_BILLPAY_PARTIAL_CANCEL_NOT_PROCESSED', '&iexcl;Atenci&oacute;n! La adaptaci&oacute;n de los pedidos sin art&iacute;culos de impuestos no se env&iacute;an autom&aacute;ticamente a BillPay debido a un error en el software de la tienda. Por favor, ajuste el importe manualmente en la oficina de BillPay (https://admin.billpay.de)!');
define('MODULE_PAYMENT_BILLPAY_PARTIAL_CANCEL_ERROR_CUSTOMER_CARE', 'La adaptaci&oacute;n del orden con BillPay ha fallado. Por favor, contacte inmediatamente con nuestro servicio de atenci&oacute;n al cliente (haendler@billpay.de)!');

define('MODULE_PAYMENT_BILLPAY_HISTORY_ERROR_ADJUST_CHARGEABLE', 'No se permite la personalizaci&oacute;n de una opci&oacute;n de producto de pago.');
define('MODULE_PAYMENT_BILLPAY_HISTORY_ERROR_ADD_CHARGEABLE', 'No se permite la personalizaci&oacute;n de una opci&oacute;n de producto de pago.');
define('MODULE_PAYMENT_BILLPAY_HISTORY_ERROR_REMOVE_CHARGEABLE', 'No se permite la personalizaci&oacute;n de una opci&oacute;n de producto de pago.');

define('MODULE_PAYMENT_BILLPAY_HISTORY_ERROR_CONTACT_BILLPAY', 'Se ha producido un error. Por favor, p&oacute;ngase en contacto con el servicio de atenci&oacute;n al cliente de BillPay (haendler@billpay.de).');



define('MODULE_PAYMENT_BILLPAY_HISTORY_INFO_PARTIAL_CANCEL', 'Cancelaci&oacute;n parcial enviada con &eacute;xito a BillPay.');
define('MODULE_PAYMENT_BILLPAY_HISTORY_INFO_EDIT_CART_CONTENT', 'Editar el contenido del carro de la compra enviado con &eacute;xito a BillPay.');

define('MODULE_PAYMENT_BILLPAY_TRANSACTION_MODE_TEST' , 'Modo de prueba');
define('MODULE_PAYMENT_BILLPAY_TRANSACTION_MODE_LIVE' , 'En vivo y en directo');


// -- Order States
// waiting for prepayment or decision
define('MODULE_PAYMENT_BILLPAY_STATUS_PENDING_TITLE_EN' , 'BillPay pendiente');
define('MODULE_PAYMENT_BILLPAY_STATUS_PENDING_TITLE_DE' , 'No se ha completado el pago de la factura');

// ready to activate
define('MODULE_PAYMENT_BILLPAY_STATUS_APPROVED_TITLE_EN' , 'BillPay aprobado');
define('MODULE_PAYMENT_BILLPAY_STATUS_APPROVED_TITLE_DE' , 'BillPay aprobado');

// invoice created
define('MODULE_PAYMENT_BILLPAY_STATUS_ACTIVATED_TITLE_EN' , 'BillPay activado');
define('MODULE_PAYMENT_BILLPAY_STATUS_ACTIVATED_TITLE_DE' , 'BillPay activado');

// order cancelled or timed out from pending
define('MODULE_PAYMENT_BILLPAY_STATUS_CANCELLED_TITLE_EN' , 'BillPay cancelado');
define('MODULE_PAYMENT_BILLPAY_STATUS_CANCELLED_TITLE_DE' , 'BillPay cancelado');

// error in order
define('MODULE_PAYMENT_BILLPAY_STATUS_ERROR_TITLE_EN' , '&iexcl;Error de BillPay!');
define('MODULE_PAYMENT_BILLPAY_STATUS_ERROR_TITLE_DE' , '&iexcl;Error de BillPay!');
// -- end of Order States


define('MODULE_PAYMENT_BILLPAY_STATUS_PENDING_DESC', 'BillPay - esperando la aprobaci&oacute;n');
define('MODULE_PAYMENT_BILLPAY_STATUS_APPROVED_DESC', 'BillPay - aprobado');
define('MODULE_PAYMENT_BILLPAY_STATUS_ACTIVATED_DESC', 'BillPay - activado');
define('MODULE_PAYMENT_BILLPAY_STATUS_CANCELLED_DESC', 'BillPay - cancelado');
define('MODULE_PAYMENT_BILLPAY_STATUS_ERROR_DESC', 'BillPay - BillPay - Debido a un error, esta orden requiere una correcci&oacute;n manual. Por favor, contacte con el soporte de BillPay');

define('MODULE_PAYMENT_BILLPAY_SALUTATION_MALE', MODULE_PAYMENT_BILLPAY_TEXT_MR);
define('MODULE_PAYMENT_BILLPAY_SALUTATION_FEMALE', MODULE_PAYMENT_BILLPAY_TEXT_MRS);
define('MODULE_PAYMENT_BILLPAY_TEXT_SEPA_INFORMATION', 'El n&uacute;mero de identificaci&oacute;n de acreedor de BillPay es DE19ZZ00000237180. El n&uacute;mero de referencia del mandato se me comunicar&aacute; por correo electr&oacute;nico m&aacute;s adelante. Nota: Puedo solicitar el reembolso del importe cargado en un plazo de ocho semanas a partir de la fecha del cargo. Se aplican las condiciones acordadas con mi entidad financiera. Tenga en cuenta que la solicitud de reembolso sigue siendo v&aacute;lida incluso en el caso de una nota de d&eacute;bito devuelta. Puede encontrar m&aacute;s informaci&oacute;n en <a href="https://www.billpay.de/sepa" target="_blank">https://www.billpay.de/sepa</a>.');
define('MODULE_PAYMENT_BILLPAY_TEXT_SEPA_INFORMATION_AT', "El n&uacute;mero de identificaci&oacute;n de acreedor de BillPay es DE19ZZZ00000237180, el n&uacute;mero de identificaci&oacute;n de acreedor de net-m privatbank AG es DE62ZZZ00000009232. El n&uacute;mero de referencia del mandato se me comunicar&aacute; posteriormente por correo electr&oacute;nico junto con un modelo de mandato escrito. Tambi&eacute;n firmar&eacute; este mandato escrito y lo enviar&eacute; a BillPay. Nota: Puedo solicitar la devoluci&oacute;n del importe cargado en un plazo de ocho semanas a partir de la fecha de cargo. Se aplican las condiciones acordadas con mi entidad financiera. Tenga en cuenta que la solicitud de reembolso sigue siendo v&aacute;lida incluso en el caso de una nota de d&eacute;bito devuelta. Puede encontrar m&aacute;s informaci&oacute;n en <a href='https://www.billpay.de/sepa' target='_blank'>https://www.billpay.de/sepa</a>.");


define('MODULE_PAYMENT_BILLPAY_TEXT_INVOICE_INFO',              'Por favor, transfiera el importe total con el n&uacute;mero de transacci&oacute;n de BillPay (%1$s) dentro del plazo de pago de %2$02s.%3$02s.%4$04s a la siguiente cuenta:');
define('MODULE_PAYMENT_BILLPAY_TEXT_INVOICE_INFO_NO_DUEDATE',   'Por favor, transfiera el importe total con el n&uacute;mero de transacci&oacute;n de BillPay (%1$s) dentro del plazo de pago escrito en la factura a la siguiente cuenta:');
define('MODULE_PAYMENT_BILLPAY_TEXT_INVOICE_INFO1', 'Ha elegido comprar a cuenta con BillPay. Por favor, transfiera la cantidad total por ');
define('MODULE_PAYMENT_BILLPAY_TEXT_INVOICE_INFO2', ' a la siguiente cuenta: ');
define('MODULE_PAYMENT_BILLPAY_TEXT_INVOICE_INFO3', 'La fecha de vencimiento que recibe con la factura');
define('MODULE_PAYMENT_BILLPAY_TEXT_INVOICE_INFO_MAIL', '<br/>Por favor, transfiera el importe total, indicando el n&uacute;mero de transacci&oacute;n de BillPay en el motivo del pago (%s), a la siguiente cuenta antes de la fecha de vencimiento que recibe con la factura:');

define('MODULE_PAYMENT_BILLPAY_TEXT_FEE_INFO1', 'Para este pedido por factura una tarifa de ');
define('MODULE_PAYMENT_BILLPAY_TEXT_FEE_INFO2', ' recogido');

// Plugin 1.7
define('MODULE_PAYMENT_BILLPAY_THANK_YOU_TEXT', 'Gracias por elegir BillPay Invoice al hacer su compra.');
define('MODULE_PAYMENT_BILLPAY_PAY_UNTIL_TEXT', 'Por favor, transfiera %1$s %2$s por %3$s, indicando la referencia, a la siguiente cuenta:');
define('MODULE_PAYMENT_BILLPAY_PAY_UNTIL_TEXT_NO_DUE_DATE', 'Por favor, transfiera la cantidad de %1$s %2$s dentro del plazo de pago, indicando la finalidad del mismo, a la siguiente cuenta');
define('MODULE_PAYMENT_BILLPAY_PAY_UNTIL_TEXT_ADD_CH', 'Los pagos en el mostrador de la Oficina de Correos incurrir&aacute;n en gastos adicionales. Al hacer un pago a trav&eacute;s de un recibo de dep&oacute;sito, por favor transfiera un %1$s %2$s adicional.');
define('MODULE_PAYMENT_BILLPAY_TEXT_PAYEE', 'Receptor del pago');
define('MODULE_PAYMENT_BILLPAY_TEXT_PAYEE_CH', 'Sucursal Suiza (Regensdorf)');
define('MODULE_PAYMENT_BILLPAY_TEXT_IBAN_CH', 'N&uacute;mero de cuenta');
define('MODULE_PAYMENT_BILLPAY_TEXT_BIC_CH', 'N&uacute;mero BC');
define('MODULE_PAYMENT_BILLPAY_TEXT_BANK', 'Banco');
define('MODULE_PAYMENT_BILLPAY_TEXT_TOTAL_AMOUNT', 'Cantidad');
define('MODULE_PAYMENT_BILLPAY_UPDATE_AVAILABLE', 'La versi&oacute;n %2$s del Plugin de Pago de Facturas est&aacute; disponible (actualmente instalado: %1$s). Haga clic en <a href="%3$s">aqu&iacute;</a> para descargar.');