<?php
/**
 *
 * @package    micropayment
 * @copyright  Copyright (c) 2015 Micropayment GmbH (http://www.micropayment.de)
 * @author     micropayment GmbH <shop-plugins@micropayment.de>
 */

define('MODULE_PAYMENT_MCP_SERVICE_STATUS_TITLE','Estado');
define('MODULE_PAYMENT_MCP_SERVICE_STATUS_DESC','Habilitar el m&oacute;dulo de micropayment&trade;');
define('MODULE_PAYMENT_MCP_SERVICE_SORT_ORDER_TITLE','Posicionamiento');
define('MODULE_PAYMENT_MCP_SERVICE_SORT_ORDER_DESC','Posici&oacute;n en la lista');
define('MODULE_PAYMENT_MCP_SERVICE_ACCOUNT_ID_TITLE','<div style="color:#850000;font-style: italic;">Los siguientes ajustes de configuraci&oacute;n se utilizan globalmente para todos los m&oacute;dulos de micropayment&trade; de pago y s&oacute;lo necesitan ser configurados una vez</div><br />Cuenta-ID');
define('MODULE_PAYMENT_MCP_SERVICE_ACCOUNT_ID_DESC','Cuenta-ID de micropayment&trade;');
define('MODULE_PAYMENT_MCP_SERVICE_ACCESS_KEY_TITLE','Clave de acceso');
define('MODULE_PAYMENT_MCP_SERVICE_ACCESS_KEY_DESC','Clave de acceso del micropayment&trade;');
define('MODULE_PAYMENT_MCP_SERVICE_PROJECT_CODE_TITLE','C&oacute;digo del proyecto');
define('MODULE_PAYMENT_MCP_SERVICE_PROJECT_CODE_DESC','C&oacute;digo de proyecto de micropayment&trade;');
define('MODULE_PAYMENT_MCP_SERVICE_PAYTEXT_TITLE','Texto de pago');
define('MODULE_PAYMENT_MCP_SERVICE_PAYTEXT_DESC','Esta opci&oacute;n se muestra en la factura y en el t&iacute;tulo de la p&aacute;gina de la ventana de pago. Con el titular del lugar #ORDEN# es posible integrar autom&aacute;ticamente el OrderID en la ventana de la factura o del pago. Por ejemplo, "Orden": #ORDEN#" mostrar&iacute;a "Orden: 0000023"');

define('MODULE_PAYMENT_MCP_SERVICE_THEME_TITLE','Tema');
define('MODULE_PAYMENT_MCP_SERVICE_THEME_DESC','El tema de las ventanas de pago, por defecto es x1');

define('MODULE_PAYMENT_MCP_SERVICE_GFX_TITLE','C&oacute;digo de Logotipo');
define('MODULE_PAYMENT_MCP_SERVICE_GFX_DESC','Por favor, inserte su Logo-C&oacute;digo aqu&iacute;');

define('MODULE_PAYMENT_MCP_SERVICE_BGGFX_TITLE','Par&aacute;metro de la imagen de fondo');
define('MODULE_PAYMENT_MCP_SERVICE_BGGFX_DESC','Por favor, inserte su par&aacute;metro de imagen de fondo aqu&iacute;.');

define('MODULE_PAYMENT_MCP_SERVICE_BGCOLOR_TITLE','Color de fondo');
define('MODULE_PAYMENT_MCP_SERVICE_BGCOLOR_DESC','Por favor, inserte su color de fondo en HEX aqu&iacute;.');

define('MODULE_PAYMENT_MCP_SERVICE_SECRET_FIELD_TITLE','Nombre del campo de seguridad');
define('MODULE_PAYMENT_MCP_SERVICE_SECRET_FIELD_DESC','Para mayor seguridad en la comunicaci&oacute;n entre servidores, por favor, introduzca un nombre que s&oacute;lo usted conozca.Para mayor seguridad en la comunicaci&oacute;n entre servidores, por favor, introduzca un nombre que s&oacute;lo usted conozca.');

define('MODULE_PAYMENT_MCP_SERVICE_SECRET_FIELD_VALUE_TITLE','Valor del campo de seguridad');
define('MODULE_PAYMENT_MCP_SERVICE_SECRET_FIELD_VALUE_DESC','Por favor, introduzca un c&oacute;digo de seguridad privado que no debe ser pasado a los clientes. El servidor de micropayment&trade; procesar&aacute; este c&oacute;digo con cada notificaci&oacute;n para mejorar la seguridad.');

define('MODULE_PAYMENT_MCP_SERVICE_SUCCESS_TRANSACTION','La orden ha sido pagada. El c&oacute;digo de autorizaci&oacute;n es: %s');
define('MODULE_PAYMENT_MCP_SERVICE_IP_NOT_ALLOWED','La direcci&oacute;n IP es inv&aacute;lida.');
define('MODULE_PAYMENT_MCP_SERVICE_ERROR_TERMINATED','La petici&oacute;n es inv&aacute;lida.');
define('MODULE_PAYMENT_MCP_SERVICE_ERROR_UNKNOWN_ORDER_ID','Este orden no existe');
define('MODULE_PAYMENT_MCP_SERVICE_ERROR_SECRET_FIELD_MISSMATCH','&iexcl;Campo de seguridad equivocado!');
define('MODULE_PAYMENT_MCP_SERVICE_ERROR_AMOUNT_MISSMATCH','&iexcl;La suma no se corresponde con la cantidad pagada! Actual: %s  Saldo pendiente: %s');
define('MODULE_PAYMENT_MCP_SERVICE_PAYIN_MESSAGE','%s %s se ha pagado.');
define('MODULE_PAYMENT_MCP_SERVICE_UNKNOWN_FUNCTION','funci&oacute;n desconocida');
define('MODULE_PAYMENT_MCP_SERVICE_ERROR_INVALID_AUTH_CODE','c&oacute;digo de autorizaci&oacute;n inv&aacute;lido');
define('MODULE_PAYMENT_MCP_SERVICE_ERROR_INVALID_AMOUNT_VALUE','cantidad inv&aacute;lida');

define('MODULE_PAYMENT_MCP_SERVICE_PENDING_PAYMENT','Pago pendiente. Cancelaci&oacute;n autom&aacute;tica %s');
define('MODULE_PAYMENT_MCP_PREPAY_EXPIRED','Sin recibo de pago, cancelaci&oacute;n autom&aacute;tica');

define('MODULE_PAYMENT_MCP_SERVICE_REFUND_COMMENT','El reembolso se eleva.');

define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_PENDING_PAYMENT_ID_TITLE','Estado del pedido: en proceso');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_PENDING_PAYMENT_ID_DESC','El cliente est&aacute; pagando el pedido');

define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_PROCESSING_ID_TITLE','Estado del pedido: pagado');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_PROCESSING_ID_DESC','El cliente ha pagado con &eacute;xito.');

define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_CANCELLED_ID_TITLE','Estado de la orden: Cancelado / Error');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_CANCELLED_ID_DESC','Si se produce una contabilizaci&oacute;n retroactiva, se fija este status');

define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_REFUNDED_ID_TITLE','Estado de la orden: Reembolsado');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_REFUNDED_ID_DESC','Si un reembolso se eleva, se establece este estado.');

define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_PAYMENT_REVIEW_ID_TITLE','Estado de la orden: Revisi&oacute;n del pago');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_PAYMENT_REVIEW_ID_DESC','Esta situaci&oacute;n se establece si se ha producido un problema y es necesario revisar el pago');

define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_CONFLICT_ID_TITLE','Estado de la orden: conflicto');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_CONFLICT_ID_DESC','el flujo de pago l&oacute;gico se ha interrumpido. Por favor, revise esta orden.');

define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_PARTPAY_ID_TITLE',' Estado de la orden: Prepago - pago parcial');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_PARTPAY_ID_DESC','esta orden tiene un pago parcial, pero no ha sido pagada en su totalidad.');

define('MODULE_PAYMENT_MCP_SERVICE_NEW_VERSION','%s<div class="mcp_notice_register">Nueva versi&oacute;n de micropayment&trade; Los m&oacute;dulos de pago est&aacute;n disponibles. <a href="http://ecommerce.micropayment.de/modifiedshop/?lang=EN" target="_new">Haga clic aqu&iacute; para descargar.</a></div>');

define('MODULE_PAYMENT_MCP_SERVICE_NO_ACCOUNT','%s<div class="mcp_notice_register">Para asegurar la funcionalidad de los m&oacute;dulos de pago de micropayment&trade;, por favor primero registre una cuenta y cree un proyecto. <a href="https://%s.micropayment.de" target="blank">Haga clic aqu&iacute; para registrarse.</a></div>');
define('MODULE_PAYMENT_MCP_SERVICE_CSS','
<style type="text/css">
.mcp_notice_register {
    margin-bottom: 5px;
    background-image: url("../images/micropayment/logo_small.png");
	background-position: 10px 10px;
	background-color: #ffdede;
    background-repeat: no-repeat;
    background-size: 100px;
    height: 40px;
	padding-left:130px;
	padding-top: 18px;
	border: 1px #cdcdcd solid;
}
</style>
');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_PENDING_PAYMENT_GERMAN_TITLE','El pago est&aacute; pendiente');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_PARTPAY_GERMAN_TITLE','Pago anticipado, pago parcial');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_PROCESSING_GERMAN_TITLE','en proceso');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_CANCELLED_GERMAN_TITLE','Cancelado');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_PAYMENT_REVIEW_GERMAN_TITLE','Comprobar el orden');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_CONFLICT_GERMAN_TITLE','&iexcl;Problema de eventos!');

define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_PENDING_PAYMENT_ENGLISH_TITLE','pendiente de pago');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_PARTPAY_ENGLISH_TITLE','prepago, pago parcial');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_PROCESSING_ENGLISH_TITLE','procesamiento');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_CANCELLED_ENGLISH_TITLE','cancelado');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_PAYMENT_REVIEW_ENGLISH_TITLE','revisi&oacute;n del pago');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_CONFLICT_ENGLISH_TITLE','conflicto de eventos!');

define('MODULE_PAYMENT_MCP_SERVICE_EXPIRE_DAYS_TITLE','Eliminaci&oacute;n de los pedidos no pagados');
define('MODULE_PAYMENT_MCP_SERVICE_EXPIRE_DAYS_DESC','&iquest;Cu&aacute;ntos d&iacute;as puede tener un pedido con el estado "pendiente de pago" antes de ser borrado por el bot&oacute;n "borrar pedidos antiguos"? Importante: Las &oacute;rdenes de prepago no ser&aacute;n borradas.');