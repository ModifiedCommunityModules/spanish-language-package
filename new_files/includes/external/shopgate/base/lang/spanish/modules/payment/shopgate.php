<?php
/**
 * Shopgate GmbH
 *
 * URHEBERRECHTSHINWEIS
 *
 * Dieses Plugin ist urheberrechtlich geschützt. Es darf ausschließlich von Kunden der Shopgate GmbH
 * zum Zwecke der eigenen Kommunikation zwischen dem IT-System des Kunden mit dem IT-System der
 * Shopgate GmbH über www.shopgate.com verwendet werden. Eine darüber hinausgehende Vervielfältigung, Verbreitung,
 * öffentliche Zugänglichmachung, Bearbeitung oder Weitergabe an Dritte ist nur mit unserer vorherigen
 * schriftlichen Zustimmung zulässig. Die Regelungen der §§ 69 d Abs. 2, 3 und 69 e UrhG bleiben hiervon unberührt.
 *
 * COPYRIGHT NOTICE
 *
 * This plugin is the subject of copyright protection. It is only for the use of Shopgate GmbH customers,
 * for the purpose of facilitating communication between the IT system of the customer and the IT system
 * of Shopgate GmbH via www.shopgate.com. Any reproduction, dissemination, public propagation, processing or
 * transfer to third parties is only permitted where we previously consented thereto in writing. The provisions
 * of paragraph 69 d, sub-paragraphs 2, 3 and paragraph 69, sub-paragraph e of the German Copyright Act shall remain unaffected.
 *
 * @author Shopgate GmbH <interfaces@shopgate.com>
 */

define('MODULE_PAYMENT_SHOPGATE_TEXT_TITLE', 'Shopgate');
define('MODULE_PAYMENT_SHOPGATE_TEXT_DESCRIPTION', 'Shopgate - Compras por m&oacute;vil.');
define('MODULE_PAYMENT_SHOPGATE_TEXT_INFO', 'Los pedidos ya est&aacute;n pagados en Shopgate.');

define('MODULE_PAYMENT_SHOPGATE_ORDER_LINE_TEXT_SHIPPING', 'Env&iacute;o');
define('MODULE_PAYMENT_SHOPGATE_ORDER_LINE_TEXT_SUBTOTAL', 'Subtotal');
define('MODULE_PAYMENT_SHOPGATE_ORDER_LINE_TEXT_PAYMENTFEE', 'Honorarios de pago');
define('MODULE_PAYMENT_SHOPGATE_ORDER_LINE_TEXT_TOTAL', 'Total');

define('MODULE_PAYMENT_SHOPGATE_TEXT_EMAIL_FOOTER', "");
define('MODULE_PAYMENT_SHOPGATE_STATUS_TITLE', 'El m&oacute;dulo de pago de Shopgate activado:');

define('MODULE_PAYMENT_SHOPGATE_STATUS_DESC', '');
define('MODULE_PAYMENT_SHOPGATE_ALLOWED_TITLE', '');
define('MODULE_PAYMENT_SHOPGATE_ALLOWED_DESC', '');
define('MODULE_PAYMENT_SHOPGATE_PAYTO_TITLE', '');
define('MODULE_PAYMENT_SHOPGATE_PAYTO_DESC', '');
define('MODULE_PAYMENT_SHOPGATE_SORT_ORDER_TITLE', 'Orden de visualizaci&oacute;n de la orden');
define('MODULE_PAYMENT_SHOPGATE_SORT_ORDER_DESC', 'Ordenar el orden de exhibici&oacute;n. El m&aacute;s bajo se muestra primero.');
define('MODULE_PAYMENT_SHOPGATE_ZONE_TITLE', '');
define('MODULE_PAYMENT_SHOPGATE_ZONE_DESC', '');
define('MODULE_PAYMENT_SHOPGATE_ORDER_STATUS_ID_TITLE', 'Estado');
define('MODULE_PAYMENT_SHOPGATE_ORDER_STATUS_ID_DESC', 'Establezca el estado de los pedidos importados por este m&oacute;dulo en:');
define('MODULE_PAYMENT_SHOPGATE_ERROR_READING_LANGUAGES', 'Error en la configuraci&oacute;n del idioma.');
define('MODULE_PAYMENT_SHOPGATE_ERROR_LOADING_CONFIG', 'Error al cargar la configuraci&oacute;n.');
define(
'MODULE_PAYMENT_SHOPGATE_ERROR_SAVING_CONFIG',
    'Error al guardar la configuraci&oacute;n. ' .
    'Por favor, compruebe los permisos (777) para la carpeta ' .
    '&quot;/shopgate_library/config&quot;  del plugin de Shopgate.'
);

define("MODULE_PAYMENT_SHOPGATE_LABEL_NEW_PRODUCTS", "Nuevos productos");
define("MODULE_PAYMENT_SHOPGATE_LABEL_SPECIAL_PRODUCTS", "Productos especiales");
defined('SHOPGATE_ORDER_CUSTOM_FIELD') OR define('SHOPGATE_ORDER_CUSTOM_FIELD', 'Campo(s) personalizado(s) de este pedido de Shopgate:');

define("SHOPGATE_COUPON_ERROR_NEED_ACCOUNT", "Necesitas estar conectado para usar este cup&oacute;n");
define("SHOPGATE_COUPON_ERROR_RESTRICTED_PRODUCTS", "Este cup&oacute;n est&aacute; restringido a productos especiales");
define("SHOPGATE_COUPON_ERROR_RESTRICTED_CATEGORIES", "Este cup&oacute;n est&aacute; restringido a categor&iacute;as especiales");
define("SHOPGATE_COUPON_ERROR_MINIMUM_ORDER_AMOUNT_NOT_REACHED", "su cup&oacute;n tiene una cantidad m&iacute;nima de pedido que no ha sido alcanzada");
