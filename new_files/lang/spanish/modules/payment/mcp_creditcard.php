<?php
/**
 *
 * @package    micropayment
 * @copyright  Copyright (c) 2015 Micropayment GmbH (http://www.micropayment.de)
 * @author     micropayment GmbH <shop-plugins@micropayment.de>
 */
require_once('mcp_service.php');
define('MODULE_PAYMENT_MCP_CREDITCARD_TEXT_DESCRIPTION', 'micropayment&trade; M&oacute;dulo de la tarjeta de cr&eacute;dito
<br /><br />
enlaces<br />
<b>herramientas</b><br />
<a target="_new" href="../callback/micropayment/cleanup.php">
    <input type="button" value="limpiar las viejas &oacute;rdenes">
</a><br />
<br />
<b>Extern</b><br />
<a href="http://ecommerce.micropayment.de/download/modified/micropayment_modified-shop_2.x.pdf?version=2.1.0">
    <input type="button" value="Manual">
</a>&nbsp;
<a target="_new" href="https://r120.micropayment.de">
    <input type="button" value="Registro de Micropayment">
    </a>'
);
define('MODULE_PAYMENT_MCP_CREDITCARD_TEXT_TITLE', 'micropayment&trade; Tarjeta de cr&eacute;dito');
define('MODULE_PAYMENT_MCP_CREDITCARD_TEXT_TITLE_EXTERN', 'Tarjeta de cr&eacute;dito');
define('MODULE_PAYMENT_MCP_CREDITCARD_TEXT_INFO', '
<div style="margin:10px;">
<div style="float:right;"><img src="./images/micropayment/logo_small.png" width="150"/></div><div style="float:left;">
<b>Por favor, tenga a mano los datos de su tarjeta de cr&eacute;dito.</b><br />
Para concluir su pedido, ser&aacute; remitido a nuestro proveedor de servicios de pago, micropayment&trade;.<br /><br />
&#10004; seguro &nbsp; &#10004; simple &nbsp; &#10004; no registration needed</div>
');

define('MODULE_PAYMENT_MCP_CREDITCARD_STATUS_TITLE','Creditcard');
define('MODULE_PAYMENT_MCP_CREDITCARD_STATUS_DESC','Los siguientes ajustes de configuraci&oacute;n se utilizan globalmente para todos los m&oacute;dulos de micropayment&trade; de pago y s&oacute;lo necesitan ser configurados una vez<br />M&oacute;dulo de tarjeta de cr&eacute;dito por micropayment&trade;');
define('MODULE_PAYMENT_MCP_CREDITCARD_MINIMUM_AMOUNT_TITLE','Cantidad m&iacute;nima');
define('MODULE_PAYMENT_MCP_CREDITCARD_MINIMUM_AMOUNT_DESC','Cantidad m&iacute;nima');
define('MODULE_PAYMENT_MCP_CREDITCARD_MAXIMUM_AMOUNT_TITLE','Cantidad m&aacute;xima');
define('MODULE_PAYMENT_MCP_CREDITCARD_MAXIMUM_AMOUNT_DESC','Cantidad m&aacute;xima');
define('MODULE_PAYMENT_MCP_CREDITCARD_SORT_ORDER_TITLE','Posicionamiento');
define('MODULE_PAYMENT_MCP_CREDITCARD_SORT_ORDER_DESC','Posicionamiento en la selecci&oacute;n de la forma de pago');
define('MODULE_PAYMENT_MCP_CREDITCARD_ALLOWED_TITLE','Selecci&oacute;n del pa&iacute;s');
define('MODULE_PAYMENT_MCP_CREDITCARD_ALLOWED_DESC','Permitir pedidos s&oacute;lo de estos pa&iacute;ses (Lista separada por comas DE,EN)');
