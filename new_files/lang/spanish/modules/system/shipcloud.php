<?php
/* -----------------------------------------------------------------------------------------
   $Id$

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   -----------------------------------------------------------------------------------------
   Released under the GNU General Public License
   ---------------------------------------------------------------------------------------*/

if (defined('_VALID_XTC')) {
  define('MODULE_SHIPCLOUD_TEXT_TITLE', 'shipcloud - la nueva generaci&oacute;n de env&iacute;o de paquetes');
  define('MODULE_SHIPCLOUD_TEXT_DESCRIPTION', 'Imprime las etiquetas de los paquetes directamente desde la tienda.');
  define('MODULE_SHIPCLOUD_STATUS_TITLE', 'Estado');
  define('MODULE_SHIPCLOUD_STATUS_DESC', '&iquest;M&oacute;dulo activado?');
  define('MODULE_SHIPCLOUD_API_TITLE', '<hr noshade>API');
  define('MODULE_SHIPCLOUD_API_DESC', 'API Key de shipcloud');
  define('MODULE_SHIPCLOUD_PARCEL_TITLE', '<hr noshade>Tama&ntilde;o del paquete');
  define('MODULE_SHIPCLOUD_PARCEL_DESC', 'Por favor, defina el tama&ntilde;o del paquete as&iacute;: largo, ancho, alto;<br/>Puedes definir m&aacute;s tama&ntilde;os separados por punto y coma (;). Exapple: 20,40,30;15,20,20;');
  define('MODULE_SHIPCLOUD_COMPANY_TITLE', '<hr noshade>Datos del cliente<br/>');
  define('MODULE_SHIPCLOUD_COMPANY_DESC', 'Compa&ntilde;&iacute;a:');
  define('MODULE_SHIPCLOUD_FIRSTNAME_TITLE', '');
  define('MODULE_SHIPCLOUD_FIRSTNAME_DESC', 'Nombre:');
  define('MODULE_SHIPCLOUD_LASTNAME_TITLE', '');
  define('MODULE_SHIPCLOUD_LASTNAME_DESC', 'Apellido:');
  define('MODULE_SHIPCLOUD_ADDRESS_TITLE', '');
  define('MODULE_SHIPCLOUD_ADDRESS_DESC', 'Direcci&oacute;n:');
  define('MODULE_SHIPCLOUD_POSTCODE_TITLE', '');
  define('MODULE_SHIPCLOUD_POSTCODE_DESC', 'Zip:');
  define('MODULE_SHIPCLOUD_CITY_TITLE', '');
  define('MODULE_SHIPCLOUD_CITY_DESC', 'Ciudad:');
  define('MODULE_SHIPCLOUD_TELEPHONE_TITLE', '');
  define('MODULE_SHIPCLOUD_TELEPHONE_DESC', 'Tel&eacute;fono:');
  define('MODULE_SHIPCLOUD_ACCOUNT_IBAN_TITLE', '');
  define('MODULE_SHIPCLOUD_ACCOUNT_IBAN_DESC', 'IBAN:');
  define('MODULE_SHIPCLOUD_ACCOUNT_BIC_TITLE', '');
  define('MODULE_SHIPCLOUD_ACCOUNT_BIC_DESC', 'BIC:');
  define('MODULE_SHIPCLOUD_BANK_NAME_TITLE', '<hr noshade>Los detalles del banco<br/>');
  define('MODULE_SHIPCLOUD_BANK_NAME_DESC', 'Banco:');
  define('MODULE_SHIPCLOUD_BANK_HOLDER_TITLE', '');
  define('MODULE_SHIPCLOUD_BANK_HOLDER_DESC', 'Titular:');
  define('MODULE_SHIPCLOUD_LOG_TITLE', '<hr noshade>Registro');
  define('MODULE_SHIPCLOUD_LOG_DESC', 'el archivo de registro se almacena en la carpeta / log.');
  define('MODULE_SHIPCLOUD_EMAIL_TITLE', '<hr noshade>E-Mail notificaci&oacute;n');
  define('MODULE_SHIPCLOUD_EMAIL_DESC', '&iquest;Notificar al cliente por E-Mail?');
  define('MODULE_SHIPCLOUD_EMAIL_TYPE_TITLE', '<hr noshade>Notificaci&oacute;n');
  define('MODULE_SHIPCLOUD_EMAIL_TYPE_DESC', '&iquest;Debe el cliente ser notificado por la tienda o shipcloud?<br><Nota:</b>Para una notificaci&oacute;n de la Tienda debe establecer un Webhook a esta URL: '.xtc_catalog_href_link('callback/shipcloud/callback.php', '', 'SSL', false).' en shipcloud.');
}

define('SHIPMENT.TRACKING.SHIPCLOUD_LABEL_CREATED', 'El env&iacute;o creado en shipcloud');
define('SHIPMENT.TRACKING.LABEL_CREATED', 'Se ha creado una etiqueta');
define('SHIPMENT.TRACKING.PICKED_UP', 'El env&iacute;o fue recogido por el transportista');
define('SHIPMENT.TRACKING.TRANSIT', 'El env&iacute;o est&aacute; en tr&aacute;nsito');
define('SHIPMENT.TRACKING.OUT_FOR_DELIVERY', 'Sali&oacute; para la entrega');
define('SHIPMENT.TRACKING.DELIVERED', 'Entregado');
define('SHIPMENT.TRACKING.AWAITS_PICKUP_BY_RECEIVER', 'Esperando ser recogido por el receptor');
define('SHIPMENT.TRACKING.CANCELED', 'se ha eliminado la etiqueta');
define('SHIPMENT.TRACKING.DELAYED', 'La entrega se retrasar&aacute;');
define('SHIPMENT.TRACKING.EXCEPTION', 'Hay un problema con el env&iacute;o');
define('SHIPMENT.TRACKING.NOT_DELIVERED', 'No entregado');
define('SHIPMENT.TRACKING.NOTIFICATION', 'Notificaci&oacute;n interna del transportista: El seguimiento de los eventos dentro del env&iacute;o llevar&aacute; informaci&oacute;n m&aacute;s elaborada.');
define('SHIPMENT.TRACKING.UNKNOWN', 'Estado desconocido');
?>