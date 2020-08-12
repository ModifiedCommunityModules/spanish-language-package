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


### Plugin ###
define('SHOPGATE_CONFIG_EXTENDED_ENCODING', 'La codificaci&oacute;n del sistema de la tienda');
define('SHOPGATE_CONFIG_EXTENDED_ENCODING_DESCRIPTION', 'Elija la codificaci&oacute;n del sistema de su tienda. Esta suele ser "ISO-8859-15" para las versiones anteriores a la 1.06.');

### Menu ###
define('BOX_SHOPGATE', 'Shopgate');
define('BOX_SHOPGATE_INFO', '&iquest;Qu&eacute; es Shopgate?');
define('BOX_SHOPGATE_HELP', 'Ayuda a la instalaci&oacute;n');
define('BOX_SHOPGATE_CONFIG', 'Ajustes');

### Links ###
define('SHOPGATE_LINK_HOME', 'https://www.shopgate.com/en/?partner=30051');
define('SHOPGATE_LINK_WIKI', 'https://support.shopgate.com/hc/en-us/articles/202911763');

### Configuration ###
define('SHOPGATE_CONFIG_TITLE', 'SHOPGATE');
define('SHOPGATE_CONFIG_ERROR', 'ERROR:');
define('SHOPGATE_CONFIG_ERROR_SAVING', 'Error al guardar la configuraci&oacute;n. ');
define('SHOPGATE_CONFIG_ERROR_LOADING', 'Error al cargar la configuraci&oacute;n. ');
define('SHOPGATE_CONFIG_ERROR_READ_WRITE', 'Por favor, compruebe los permisos (777) para la carpeta &quot;/shopgate_library/config&quot; del plugin de Shopgate.');
define('SHOPGATE_CONFIG_ERROR_INVALID_VALUE', 'Por favor, compruebe su entrada en los siguientes campos: ');
define('SHOPGATE_CONFIG_ERROR_DUPLICATE_SHOP_NUMBERS', 'Hay m&uacute;ltiples configuraciones con el mismo n&uacute;mero de tienda. &iexcl;Esto puede causar grandes problemas imprevistos!');
define('SHOPGATE_CONFIG_INFO_MULTIPLE_CONFIGURATIONS', 'Las configuraciones para m&uacute;ltiples mercados est&aacute;n activas.');
define('SHOPGATE_CONFIG_SAVE', 'Guardar');
define('SHOPGATE_CONFIG_GLOBAL_CONFIGURATION', 'Configuraci&oacute;n global');
define('SHOPGATE_CONFIG_USE_GLOBAL_CONFIG', 'Utilice la configuraci&oacute;n global para este idioma.');
define('SHOPGATE_CONFIG_MULTIPLE_SHOPS_BUTTON', 'Configurar m&uacute;ltiples mercados de Shopgate');
define(
'SHOPGATE_CONFIG_LANGUAGE_SELECTION',
    'En Shopgate necesitas una tienda para cada mercado restringida a un idioma y una moneda. Aqu&iacute; puedes asignar los idiomas configurados a tus tiendas Shopgate en diferentes '
    .
    'mercados. Elija un idioma e introduzca las credenciales de su tienda Shopgate en el mercado correspondiente. Si no tienes una tienda Shopgate para un determinado idioma '
    .
    'la configuraci&oacute;n global se usar&aacute; para este.'
);

### Connection Settings ###
define('SHOPGATE_CONFIG_CONNECTION_SETTINGS', 'Configuraci&oacute;n de la conexi&oacute;n');

define('SHOPGATE_CONFIG_CUSTOMER_NUMBER', 'N&uacute;mero de cliente');
define('SHOPGATE_CONFIG_CUSTOMER_NUMBER_DESCRIPTION', 'Puede encontrar su n&uacute;mero de cliente en la secci&oacute;n &quot;Integraci&oacute;n&quot; de su tienda.');

define('SHOPGATE_CONFIG_SHOP_NUMBER', 'N&uacute;mero de la tienda');
define('SHOPGATE_CONFIG_SHOP_NUMBER_DESCRIPTION', 'Usted puede encontrar el n&uacute;mero de la tienda en la secci&oacute;n &quot;Integraci&oacute;n&quot; de su tienda.');

define('SHOPGATE_CONFIG_APIKEY', 'Clave API');
define('SHOPGATE_CONFIG_APIKEY_DESCRIPTION', 'Puedes encontrar la clave API en la secci&oacute;n &quot;Integraci&oacute;n&quot; de tu tienda.');

### Mobile Redirect ###
define('SHOPGATE_CONFIG_MOBILE_REDIRECT_SETTINGS', 'Redireccionamiento m&oacute;vil');

define('SHOPGATE_CONFIG_ALIAS', 'El alias de la tienda');
define('SHOPGATE_CONFIG_ALIAS_DESCRIPTION', 'Puedes encontrar el alias en la secci&oacute;n &quot;Integraci&oacute;n&quot; de tu tienda.');

define('SHOPGATE_CONFIG_CNAME', 'URL personalizado a la p&aacute;gina web del m&oacute;vil (CNAME) incl. http://');
define(
'SHOPGATE_CONFIG_CNAME_DESCRIPTION',
    'Introduce una URL personalizada (definida por CNAME) para tu sitio web m&oacute;vil. Puedes encontrar la URL en la secci&oacute;n &quot;Integraci&oacute;n&quot; de tu tienda '
    .
    'despu&eacute;s de haber activado esta opci&oacute;n en la secci&oacute;n &quot;Ajustes&quot; &quot;Sitio web m&oacute;vil / webapp&quot;.'
);

define('SHOPGATE_CONFIG_REDIRECT_LANGUAGES', 'Idiomas redirigidos');
define(
'SHOPGATE_CONFIG_REDIRECT_LANGUAGES_DESCRIPTION',
'Elija los idiomas que deben ser redirigidos a esta tienda Shopgate. Al menos un idioma debe ser seleccionado. Mantenga pulsada la tecla CTRL para seleccionar varias entradas.'
);

### Export ###
define('SHOPGATE_CONFIG_EXPORT_SETTINGS', 'Categor&iacute;as y productos de exportaci&oacute;n');

define('SHOPGATE_CONFIG_LANGUAGE', 'Idioma');
define('SHOPGATE_CONFIG_LANGUAGE_DESCRIPTION', 'Elegir el idioma en el que deben exportarse las categor&iacute;as y los productos.');

define('SHOPGATE_CONFIG_EXTENDED_CURRENCY', 'Moneda');
define('SHOPGATE_CONFIG_EXTENDED_CURRENCY_DESCRIPTION', 'Elegir la moneda para la exportaci&oacute;n de productos.');

define('SHOPGATE_CONFIG_EXTENDED_COUNTRY', 'Pa&iacute;s');
define('SHOPGATE_CONFIG_EXTENDED_COUNTRY_DESCRIPTION', 'Elija el pa&iacute;s al que deben exportarse sus productos');

define('SHOPGATE_CONFIG_EXTENDED_TAX_ZONE', 'Zona de impuestos para Shopgate');
define('SHOPGATE_CONFIG_EXTENDED_TAX_ZONE_DESCRIPTION', 'Elija la zona de impuestos v&aacute;lida para Shopgate.');

define('SHOPGATE_CONFIG_EXTENDED_REVERSE_CATEGORIES_SORT_ORDER', 'Invertir el orden de clasificaci&oacute;n de las categor&iacute;as');
define('SHOPGATE_CONFIG_EXTENDED_REVERSE_CATEGORIES_SORT_ORDER_ON', 'S&iacute;');
define('SHOPGATE_CONFIG_EXTENDED_REVERSE_CATEGORIES_SORT_ORDER_OFF', 'No');
define(
'SHOPGATE_CONFIG_EXTENDED_REVERSE_CATEGORIES_SORT_ORDER_DESCRIPTION',
'Elige "S&iacute;" si el orden de clasificaci&oacute;n de las categor&iacute;as de tu tienda m&oacute;vil aparece al rev&eacute;s.'
);

define('SHOPGATE_CONFIG_EXTENDED_REVERSE_ITEMS_SORT_ORDER', 'Invertir el orden de clasificaci&oacute;n de los productos');
define('SHOPGATE_CONFIG_EXTENDED_REVERSE_ITEMS_SORT_ORDER_ON', 'S&iacute;');
define('SHOPGATE_CONFIG_EXTENDED_REVERSE_ITEMS_SORT_ORDER_OFF', 'No');
define(
'SHOPGATE_CONFIG_EXTENDED_REVERSE_ITEMS_SORT_ORDER_DESCRIPTION',
'Elija "S&iacute;" si el orden de clasificaci&oacute;n de los productos de su tienda m&oacute;vil aparece al rev&eacute;s.'
);

define('SHOPGATE_CONFIG_EXTENDED_PRODUCTSDESCRIPTION', 'Descripci&oacute;n de los productos');
define('SHOPGATE_CONFIG_EXTENDED_PRODUCTSDESCRIPTION_DESC_ONLY', 'S&oacute;lo la descripci&oacute;n');
define('SHOPGATE_CONFIG_EXTENDED_PRODUCTSDESCRIPTION_SHORTDESC_ONLY', 'S&oacute;lo una breve descripci&oacute;n');
define('SHOPGATE_CONFIG_EXTENDED_PRODUCTSDESCRIPTION_DESC_SHORTDESC', 'Descripci&oacute;n y breve descripci&oacute;n');
define('SHOPGATE_CONFIG_EXTENDED_PRODUCTSDESCRIPTION_SHORTDESC_DESC', 'Breve descripci&oacute;n y descripci&oacute;n');
define('SHOPGATE_CONFIG_EXTENDED_PRODUCTSDESCRIPTION_DESCRIPTION', 'Por favor, seleccione el m&eacute;todo que se utilizar&aacute; para construir las descripciones de la tienda m&oacute;vil.');

define('SHOPGATE_CONFIG_EXTENDED_CUSTOMER_PRICE_GROUP', 'Grupo de precios para Shopgate');
define('SHOPGATE_CONFIG_EXTENDED_CUSTOMER_PRICE_GROUP_DESCRIPTION', 'Seleccione el grupo de precios v&aacute;lido para Shopgate (el grupo de clientes del que se toma la informaci&oacute;n de precios para la exportaci&oacute;n de productos).');
define('SHOPGATE_CONFIG_EXTENDED_CUSTOMER_PRICE_GROUP_OFF', '-- Desactivado --');

define('SHOPGATE_CONFIG_EXPORT_NEW_PRODUCTS_CATEGORY', 'Exportar la categor&iacute;a "Nueva"');
define('SHOPGATE_CONFIG_EXPORT_NEW_PRODUCTS_CATEGORY_DESCRIPTION', 'Este sistema de tienda permite mostrar todos los nuevos productos en una categor&iacute;a virtual. Con esta opci&oacute;n es posible exportar los nuevos productos en una categor&iacute;a real. Por lo tanto, puede utilizar el campo de entrada para cambiar el id de la categor&iacute;a.');
define('SHOPGATE_CONFIG_EXPORT_NEW_PRODUCTS_CATEGORY_ON', 'S&iacute;');
define('SHOPGATE_CONFIG_EXPORT_NEW_PRODUCTS_CATEGORY_OFF', 'No');
define('SHOPGATE_CONFIG_EXPORT_NEW_PRODUCTS_CATEGORY_MAX_ID', 'Actualmente la m&aacute;s alta categor&iacute;a de identificaci&oacute;n en el sistema de tiendas');

define('SHOPGATE_CONFIG_EXPORT_OPTIONS_AS_INPUT_FIELD', 'Opciones de productos a exportar como campos de entrada');
define('SHOPGATE_CONFIG_EXPORT_OPTIONS_AS_INPUT_FIELD_DESCRIPTION', 'A&ntilde;ada los ID de opci&oacute;n (v&eacute;ase "Opciones de productos") que deben exportarse como campos de entrada. Ejemplo: 1,2,3');

define('SHOPGATE_CONFIG_EXPORT_SPECIAL_PRODUCTS_CATEGORY', 'Exportar la categor&iacute;a "Especial');
define('SHOPGATE_CONFIG_EXPORT_SPECIAL_PRODUCTS_CATEGORY_DESCRIPTION', 'Este sistema de tienda permite mostrar todos los productos especiales en una categor&iacute;a virtual. Con esta opci&oacute;n es posible exportar los nuevos productos en una categor&iacute;a real. Por lo tanto, puede utilizar el campo de entrada para cambiar el id de la categor&iacute;a.');
define('SHOPGATE_CONFIG_EXPORT_SPECIAL_PRODUCTS_CATEGORY_ON', 'S&iacute;');
define('SHOPGATE_CONFIG_EXPORT_SPECIAL_PRODUCTS_CATEGORY_OFF', 'No');
define('SHOPGATE_CONFIG_EXPORT_SPECIAL_PRODUCTS_CATEGORY_MAX_ID', 'Actualmente la m&aacute;s alta categor&iacute;a de identificaci&oacute;n en el sistema de tiendas');
define('SHOPGATE_PLUGIN_FIELD_AVAILABLE_TEXT_AVAILABLE_ON_DATE', 'Disponible en #Fecha#');

### Orders Import ###
define('SHOPGATE_CONFIG_ORDER_IMPORT_SETTINGS', '&oacute;rdenes de importaci&oacute;n');
defined('SHOPGATE_ORDER_CUSTOM_FIELD') OR define('SHOPGATE_ORDER_CUSTOM_FIELD', 'Campo(s) personalizado(s) de este pedido de Shopgate:');

define('SHOPGATE_CONFIG_EXTENDED_CUSTOMER_GROUP', 'Grupo de clientes');
define('SHOPGATE_CONFIG_EXTENDED_CUSTOMER_GROUP_DESCRIPTION', 'Elija el grupo de clientes Shopgate (el grupo de clientes que todos los clientes invitados se establecer&aacute;n en los pedidos de importaci&oacute;n).');

define('SHOPGATE_CONFIG_EXTENDED_SHIPPING', 'M&eacute;todo de env&iacute;o');
define('SHOPGATE_CONFIG_EXTENDED_SHIPPING_DESCRIPTION', 'Elija el m&eacute;todo de env&iacute;o para la importaci&oacute;n de los pedidos. Esto se utilizar&aacute; para calcular el impuesto para los gastos de env&iacute;o.');
define('SHOPGATE_CONFIG_EXTENDED_SHIPPING_NO_SELECTION', '-- no hay selecci&oacute;n --');

define('SHOPGATE_CONFIG_EXTENDED_STATUS_ORDER_SHIPPING_APPROVED', 'El env&iacute;o no est&aacute; bloqueado');
define('SHOPGATE_CONFIG_EXTENDED_STATUS_ORDER_SHIPPING_APPROVED_DESCRIPTION', 'Elija el estado de los pedidos que no est&aacute;n bloqueados para su env&iacute;o por Shopgate.');

define('SHOPGATE_CONFIG_EXTENDED_STATUS_ORDER_SHIPPING_BLOCKED', 'Env&iacute;o bloqueado');
define('SHOPGATE_CONFIG_EXTENDED_STATUS_ORDER_SHIPPING_BLOCKED_DESCRIPTION', 'Elija el estado de los pedidos que est&aacute;n bloqueados para su env&iacute;o por Shopgate.');

define('SHOPGATE_CONFIG_EXTENDED_STATUS_ORDER_SENT', 'Enviado a');
define('SHOPGATE_CONFIG_EXTENDED_STATUS_ORDER_SENT_DESCRIPTION', 'Elija el estatus que aplica a los pedidos que han sido enviados.');

define('SHOPGATE_CONFIG_EXTENDED_STATUS_ORDER_CANCELED', 'Cancelado');
define('SHOPGATE_CONFIG_EXTENDED_STATUS_ORDER_CANCELED_NOT_SET', '- Estado no establecido -');
define('SHOPGATE_CONFIG_EXTENDED_STATUS_ORDER_CANCELED_DESCRIPTION', 'Elija el estado de las &oacute;rdenes que han sido canceladas.');

define('SHOPGATE_CONFIG_SEND_ORDER_EMAIL', 'Correo de confirmaci&oacute;n');
define('SHOPGATE_CONFIG_SEND_ORDER_EMAIL_ON', 'S&iacute;');
define('SHOPGATE_CONFIG_SEND_ORDER_EMAIL_OFF', 'No');
define('SHOPGATE_CONFIG_SEND_ORDER_EMAIL_DESCRIPTION', 'Despu&eacute;s de que un pedido en la tienda se haya completado con &eacute;xito, se enviar&aacute; un correo de confirmaci&oacute;n al cliente. Si los productos se han podido descargar, el enlace de descarga se incluye en este correo.');

define('SHOPGATE_CONFIG_PAYMENT_NAME_MAPPING', 'Mostrar los nombres de los m&eacute;todos de pago');
define('SHOPGATE_CONFIG_PAYMENT_NAME_MAPPING_DESCRIPTION', "Nombres individuales para los m&eacute;todos de pago, que se utilizan en la importaci&oacute;n de pedidos. Definido por '=' y separado por ';'.<br/>(Ejemplo: PREPAY=Prepago;SHOPGATE=Manejado por Shopgate)<br/>");
define('SHOPGATE_CONFIG_PAYMENT_NAME_MAPPING_LINK', 'https://support.shopgate.com/hc/en-us/articles/202911763-Connecting-to-modified-eCommerce#4.4');
define('SHOPGATE_CONFIG_PAYMENT_NAME_MAPPING_LINK_DESCRIPTION', "Enlace a la p&aacute;gina de apoyo");

### System Settings ###
define('SHOPGATE_CONFIG_SYSTEM_SETTINGS', 'Ajustes del sistema');

define('SHOPGATE_CONFIG_SERVER_TYPE', 'El servidor de Shopgate');
define('SHOPGATE_CONFIG_SERVER_TYPE_LIVE', 'En vivo');
define('SHOPGATE_CONFIG_SERVER_TYPE_PG', 'Zona de juegos');
define('SHOPGATE_CONFIG_SERVER_TYPE_CUSTOM', 'Personalizado');
define('SHOPGATE_CONFIG_SERVER_TYPE_CUSTOM_URL', 'URL personalizada del servidor de Shopgate');
define('SHOPGATE_CONFIG_SERVER_TYPE_DESCRIPTION', 'Elija el servidor de Shopgate para conectarse.');
