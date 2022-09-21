<?php
/* --------------------------------------------------------------
   $Id: spanish.php 14517 2022-06-11 08:49:23Z GTB $

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   --------------------------------------------------------------
   based on:
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(spanish.php,v 1.99 2003/05/28); www.oscommerce.com
   (c) 2003 nextcommerce (spanish.php,v 1.24 2003/08/24); www.nextcommerce.org
   (c) 2006 XT-Commerce (spanish.php)

   Released under the GNU General Public License
   --------------------------------------------------------------
   Third Party contributions:
   Customers Status v3.x (c) 2002-2003 Copyright Elari elari@free.fr | www.unlockgsm.com/dload-osc/ | CVS : http://cvs.sourceforge.net/cgi-bin/viewcvs.cgi/elari/?sortby=date#dirlist

   Released under the GNU General Public License
   --------------------------------------------------------------*/

// look in your $PATH_LOCALE/locale directory for available locales..
// on RedHat6.0 I used 'es_ES'
// on FreeBSD 4.0 I use 'es_ES.ISO_8859-1'
// this may not work under win32 environments..

@setlocale(LC_TIME, 'es_ES.UTF-8', 'es_ES', 'es-ES', 'es', 'Spanish');

define('DATE_LOCALE', 'es_ES');
define('DATE_FORMAT_SHORT', 'd.m.Y');
define('DATE_FORMAT_LONG', 'l, d. F Y');
define('DATE_FORMAT', DATE_FORMAT_SHORT);
define('PHP_DATE_TIME_FORMAT',  DATE_FORMAT_SHORT . ' H:i:s');
define('DATE_TIME_FORMAT', DATE_FORMAT_SHORT . ' H:i:s');

// Return date in raw format
// $date should be in format mm/dd/yyyy
// raw date is in format YYYYMMDD, or DDMMYYYY
function xtc_date_raw($date, $reverse = false) {
  if ($reverse) {
    return substr($date, 0, 2) . substr($date, 3, 2) . substr($date, 6, 4);
  } else {
    return substr($date, 6, 4) . substr($date, 3, 2) . substr($date, 0, 2);
  }
}

require_once(DIR_FS_INC.'auto_include.inc.php');
foreach(auto_include(DIR_FS_LANGUAGES.'spanish/extra/admin/','php') as $file) require ($file);

// Global entries for the <html> tag
define('HTML_PARAMS','dir="ltr" lang="es"');

// page title
define('TITLE', defined('PROJECT_VERSION') ? PROJECT_VERSION : 'undefined');

// header text in includes/header.php
define('HEADER_TITLE_TOP', 'Administraci&oacute;n');
define('HEADER_TITLE_SUPPORT_SITE', 'P&aacute;gina de soporte t&eacute;cnico');
define('HEADER_TITLE_ONLINE_CATALOG', 'Catalogo on-line');
define('HEADER_TITLE_ADMINISTRATION', 'Administraci&oacute;n');

// text for gender
define('MALE', 'Se&ntilde;or');
define('FEMALE', 'Se&ntilde;ora');
define('DIVERSE', 'Diverso');

// text for date of birth example
define('DOB_FORMAT_STRING', 'tt.mm.jjjj');

// configuration box text in includes/boxes/configuration.php

define('BOX_HEADING_CONFIGURATION','Configuraci&oacute;n');
define('BOX_HEADING_MODULES','M&oacute;dulos');
define('BOX_HEADING_PARTNER_MODULES','M&oacute;dulos de socios');
define('BOX_HEADING_ZONE','Pa&iacute;s/Impuestos');
define('BOX_HEADING_CUSTOMERS','Clientes');
define('BOX_HEADING_PRODUCTS','Catalogo');
define('BOX_HEADING_STATISTICS','Estad&iacute;sticas');
define('BOX_HEADING_TOOLS','Utilidades');
define('BOX_HEADING_LOCALIZATION', 'Idiomas/Divisas');
define('BOX_HEADING_TEMPLATES','Plantillas');
define('BOX_HEADING_LOCATION_AND_TAXES', 'Pa&iacute;s/Impuesto');
define('BOX_HEADING_CATALOG', 'Catalogo');
define('BOX_MODULE_NEWSLETTER','Newsletter');

define('BOX_CONTENT','Editor contenidos');
define('TEXT_ALLOWED', 'Permisos');
define('TEXT_ACCESS', '&Aacute;rea de acceso');
define('BOX_CONFIGURATION', 'Ajustes Generales');
define('BOX_CONFIGURATION_1', 'Ajustes Tienda');
define('BOX_CONFIGURATION_2', 'Valores m&iacute;nimos');
define('BOX_CONFIGURATION_3', 'Valores m&aacute;ximos');
define('BOX_CONFIGURATION_4', 'Ajustes Im&aacute;genes');
define('BOX_CONFIGURATION_5', 'Ajustes Clientes');
define('BOX_CONFIGURATION_6', 'Ajustes M&oacute;dulos');
define('BOX_CONFIGURATION_7', 'Ajustes Env&iacute;os');
define('BOX_CONFIGURATION_8', 'Ajustes Art&iacute;culos');
define('BOX_CONFIGURATION_9', 'Ajustes Almac&eacute;n');
define('BOX_CONFIGURATION_10', 'Ajustes Acceso');
define('BOX_CONFIGURATION_11', 'Ajustes Cache');
define('BOX_CONFIGURATION_12', 'Ajustes E-Mail');
define('BOX_CONFIGURATION_13', 'Ajustes Descargas');
define('BOX_CONFIGURATION_14', 'Comprimir');
define('BOX_CONFIGURATION_15', 'Sesiones');
define('BOX_CONFIGURATION_16', 'M&aacute;quinas de b&uacute;squeda');
define('BOX_CONFIGURATION_17', 'Otros m&oacute;dulos');
define('BOX_CONFIGURATION_18', 'Impuestos');
define('BOX_CONFIGURATION_19', 'Socios');
define('BOX_CONFIGURATION_22', 'Ajustes de b&uacute;squeda');
define('BOX_CONFIGURATION_24', 'PIWIK, Google Analytics &amp; Facebook');
define('BOX_CONFIGURATION_25', 'Captcha');
define('BOX_CONFIGURATION_31', 'Skrill');
define('BOX_CONFIGURATION_40', 'Ajustes popup');
define('BOX_CONFIGURATION_1000', 'Ajustes Administraci&oacute;n');

define('BOX_MODULES', 'M&oacute;dulos de Pagos/Env&iacute;os');
define('BOX_PAYMENT', 'Opciones de pago');
define('BOX_SHIPPING', 'Tipo de env&iacute;o');
define('BOX_ORDER_TOTAL', 'Resumen');
define('BOX_CATEGORIES', 'Categor&iacute;as/Art&iacute;culos');
define('BOX_PRODUCTS_ATTRIBUTES', 'Caracter&iacute;sticas del art&iacute;culo');
define('BOX_MANUFACTURERS', 'Productor');
define('BOX_REVIEWS', 'Valoraciones sobre el producto');
define('BOX_CAMPAIGNS', 'Campa&ntilde;as');
define('BOX_XSELL_PRODUCTS', 'Marketing cruzado');
define('BOX_SPECIALS', 'Ofertas');
define('BOX_PRODUCTS_EXPECTED', 'Pr&oacute;ximamente');
define('BOX_CUSTOMERS', 'Clientes');
define('BOX_ACCOUNTING', 'Gestionar derechos de administrador');
define('BOX_CUSTOMERS_STATUS','Grupos de clientes');
define('BOX_ORDERS', 'Pedidos');
define('BOX_COUNTRIES', 'Pa&iacute;s');
define('BOX_ZONES', 'Provincias');
define('BOX_GEO_ZONES', 'Zonas de impuestos');
define('BOX_TAX_CLASSES', 'Clase de impuesto');
define('BOX_TAX_RATES', 'Tipo de impuesto');
define('BOX_HEADING_REPORTS', 'Informes');
define('BOX_PRODUCTS_VIEWED', 'Art&iacute;culos visitados');
define('BOX_STOCK_WARNING','Informe almac&eacute;n');
define('BOX_PRODUCTS_PURCHASED', 'Art&iacute;culos vendidos');
define('BOX_STATS_CUSTOMERS', 'Estad&iacute;sticas de pedidos');
define('BOX_BACKUP', 'Gestor bases de datos');
define('BOX_BANNER_MANAGER', 'Gestor Publicidad');
define('BOX_CACHE', 'Gestor Cache');
define('BOX_DEFINE_LANGUAGE', 'Definir idiomas');
define('BOX_FILE_MANAGER', 'Gestor de Ficheros');
define('BOX_MAIL', 'Enviar E-mail');
define('BOX_NEWSLETTERS', 'Gestor Newsletter');
define('BOX_SERVER_INFO', 'Informaci&oacute;n del servidor');
define('BOX_WHOS_ONLINE', 'Quien esta online');
define('BOX_TPL_BOXES','Orden de los Box');
define('BOX_CURRENCIES', 'Divisas');
define('BOX_LANGUAGES', 'Idiomas');
define('BOX_ORDERS_STATUS', 'Estados de pedido');
define('BOX_ATTRIBUTES_MANAGER','Gestor de atributos');
define('BOX_SHIPPING_STATUS','Estado de env&iacute;o');
define('BOX_SALES_REPORT','Estad&iacute;sticas de ventas');
define('BOX_MODULE_EXPORT','M&oacute;dulos de exportaci&oacute;n');
define('BOX_MODULE_SYSTEM','M&oacute;dulos del sistema');
define('BOX_HEADING_GV_ADMIN', 'Cupones/Vales');
define('BOX_GV_ADMIN_QUEUE', 'Vales a la espera');
define('BOX_GV_ADMIN_MAIL', 'Vales v&iacute;a E-Mail');
define('BOX_GV_ADMIN_SENT', 'Env&iacute;o de vales');
define('BOX_COUPON_ADMIN','Cup&oacute;n Administrador');
define('BOX_TOOLS_BLACKLIST','Lista negra de TC');
define('BOX_IMPORT','Importaci&oacute;n/Exportaci&oacute;n');
define('BOX_PRODUCTS_VPE','Unidad de embalaje');
define('BOX_CAMPAIGNS_REPORT','Estad&iacute;sticas campa&ntilde;a');
define('BOX_ORDERS_XSELL_GROUP','Grupos de Cross-Marketing');
define('BOX_REMOVEOLDPICS','Borrar im&aacute;genes viejas'); // Remove old pictures - franky_n - 20110105
define('BOX_JANOLAW','janolaw AGB Hosting'); // Tomcraft - 2011-06-17 - Added janolaw AGB hosting service
define('BOX_HAENDLERBUND','Federaci&oacute;n de distribuidores AGB Service'); // Tomcraft - 2012-12-08 - Added haendlerbund AGB interface
define('BOX_SHOP','Tienda');
define('BOX_LOGOUT','Desconectar');
define('BOX_CREDITS','Cr&eacute;ditos');
define('BOX_UPDATE','Comprobar versi&oacute;n');
define('BOX_GV_CUSTOMERS','Saldo clientes');
define('BOX_IT_RECHT_KANZLEI', 'IT Despacho derechos');
define('BOX_PROTECTEDSHOPS', 'Tiendas protegidas - Servicio AGB');
define('BOX_CLEVERREACH', 'CleverReach');
define('BOX_SUPERMAILER', 'SuperMailer');
define('BOX_OFFLINE', 'Tienda desactivada');
define('BOX_LOGS', 'Archivos de registro');
define('BOX_SHIPCLOUD', 'shipcloud');
define('BOX_SHIPCLOUD_PICKUP', 'shipcloud - Recogida');
define('BOX_PRODUCTS_TAGS', 'Propiedades del art&iacute;culo');
define('BOX_TRUSTEDSHOPS', 'Tiendas de confianza');
define('BOX_NEWSLETTER_RECIPIENTS', 'Destinatarios del bolet&iacute;n de noticias');
define('BOX_DSGVO_EXPORT', 'Exportaci&oacute;n del PBI');
define('BOX_SUPPORT', 'Apoyo');
define('BOX_CACHING', 'Cach&eacute;');
define('BOX_COOKIE_CONSENT', 'Consentimiento de cookies');
define('BOX_SEMKNOX', 'B&uacute;squeda en el sitio 360 B&uacute;squeda de productos');
define('BOX_PAGES_CONTENT', 'Sitios de contenido');
define('BOX_PRODUCTS_CONTENT', 'Productos adjuntos');
define('BOX_CONTENT_CONTENT', 'Adjuntos de contenido');
define('BOX_EMAIL_CONTENT', 'Archivos adjuntos al correo electrónico');
define('BOX_DHL', 'DHL Shipping &amp; Creación de etiquetas');

define('TXT_GROUPS','<b>Grupos</b>:');
define('TXT_SYSTEM','Sistema');
define('TXT_CUSTOMERS','Clientes/Pedidos');
define('TXT_PRODUCTS','Art&iacute;culos/Categor&iacute;as');
define('TXT_STATISTICS','Herramientas para estad&iacute;sticas');
define('TXT_TOOLS','M&aacute;s programas');
define('TEXT_ACCOUNTING','Derechos de acceso para:');

// javascript messages
define('JS_ERROR', 'Ha ocurrido un error!\nDebes corregir lo siguiente:\n\n');

define('JS_OPTIONS_VALUE_PRICE', '* Tienes que adjudicarle a este valor un precio\n');
define('JS_OPTIONS_VALUE_PRICE_PREFIX', '* Tienes que introducir un auspicio para el precio (+/-)\n');

define('JS_PRODUCTS_NAME', '* Falta el nombre del art&iacute;culo nuevo\n');
define('JS_PRODUCTS_DESCRIPTION', '* Falta la descripci&oacute;n para el art&iacute;culo nuevo\n');
define('JS_PRODUCTS_PRICE', '* Al art&iacute;culo nuevo le tienes que poner un precio\n');
define('JS_PRODUCTS_WEIGHT', '* Falta introducir el peso para el art&iacute;culo nuevo\n');
define('JS_PRODUCTS_QUANTITY', '* Debes poner las existencias disponible del art&iacute;culo nuevo\n');
define('JS_PRODUCTS_MODEL', '* Debes poner al art&iacute;culo nuevo el n&uacute;mero de art&iacute;culo\n');
define('JS_PRODUCTS_IMAGE', '* Debes adjudicar al art&iacute;culo nuevo una imagen\n');

define('JS_SPECIALS_PRODUCTS_PRICE', '* Hay que poner un precio nuevo para este art&iacute;culo.\n');

define('JS_GENDER', '* Hay que marcar el \'Tratamiento\'.\n');
define('JS_FIRST_NAME', '* El \'Nombre\' debe contener m&iacute;nimo ' . ENTRY_FIRST_NAME_MIN_LENGTH . ' caracteres.\n');
define('JS_LAST_NAME', '* El \'Apellido\' debe contener m&iacute;nimo ' . ENTRY_LAST_NAME_MIN_LENGTH . ' caracteres.\n');
define('JS_DOB', '* La \'Fecha de nacimiento\' debe contener este formato: xx.xx.xxxx (D&iacute;a/Mes/A&ntilde;o).\n');
define('JS_EMAIL_ADDRESS', '* El \'Correo E-Mail\' debe contener m&iacute;nimo ' . ENTRY_EMAIL_ADDRESS_MIN_LENGTH . ' caracteres.\n');
define('JS_ADDRESS', '* La \'Calle\' debe contener m&iacute;nimo ' . ENTRY_STREET_ADDRESS_MIN_LENGTH . ' caracteres.\n');
define('JS_POST_CODE', '* El \'C&oacute;digo postal\' debe contener m&iacute;nimo ' . ENTRY_POSTCODE_MIN_LENGTH . ' caracteres.\n');
define('JS_CITY', '* La \'Ciudad\' debe contener m&iacute;nimo ' . ENTRY_CITY_MIN_LENGTH . ' caracteres.\n');
define('JS_STATE', '* Debes elegir una \'Provincia\'.\n');
define('JS_STATE_SELECT', '-- Elige por favor --');
define('JS_ZONE', '* Debes elegir la \'Provincia\' de la lista de este pa&iacute;s.');
define('JS_COUNTRY', '* Debes elegir el \'Pa&iacute;s\'.\n');
define('JS_TELEPHONE', '* El \'N&uacute;mero Tel&eacute;fono\' debe contener m&iacute;nimo ' . ENTRY_TELEPHONE_MIN_LENGTH . ' caracteres.\n');
define('JS_PASSWORD', '* La \'Contrase&ntilde;a\' y la \'Confirmar contrase&ntilde;a\' deben ser autenticas y deben contener m&iacute;nimo ' . ENTRY_PASSWORD_MIN_LENGTH . ' caracteres.\n');

define('JS_ORDER_DOES_NOT_EXIST', 'N&uacute;mero de pedido no existe!');

define('CATEGORY_PERSONAL', 'Datos personales');
define('CATEGORY_ADDRESS', 'Direcci&oacute;n');
define('CATEGORY_CONTACT', 'Contacto');
define('CATEGORY_COMPANY', 'Empresa');
define('CATEGORY_OPTIONS', 'Otras opciones');

define('ENTRY_GENDER', 'Trato:');
define('ENTRY_GENDER_ERROR', '&nbsp;<span class="errorText">Entrada necesaria</span>');
define('ENTRY_FIRST_NAME', 'Nombre:');
define('ENTRY_FIRST_NAME_ERROR', '&nbsp;<span class="errorText">m&iacute;nimo ' . ENTRY_FIRST_NAME_MIN_LENGTH . ' letras</span>');
define('ENTRY_LAST_NAME', 'Apellidos:');
define('ENTRY_LAST_NAME_ERROR', '&nbsp;<span class="errorText">m&iacute;nimo ' . ENTRY_LAST_NAME_MIN_LENGTH . ' letras</span>');
define('ENTRY_DATE_OF_BIRTH', 'Fecha de nacimiento:');
define('ENTRY_DATE_OF_BIRTH_ERROR', '&nbsp;<span class="errorText">(p.e. 21.05.1970)</span>');
define('ENTRY_EMAIL_ADDRESS', 'Direcci&oacute;n E-Mail:');
define('ENTRY_EMAIL_ADDRESS_ERROR', '&nbsp;<span class="errorText">m&iacute;nimo ' . ENTRY_EMAIL_ADDRESS_MIN_LENGTH . ' letras</span>');
define('ENTRY_EMAIL_ADDRESS_CHECK_ERROR', '&nbsp;<span class="errorText">Direcci&oacute;n E-Mail no v&aacute;lida! (No se aceptan letras con acentos o tilde ne direcciones E-Mail.)</span>');
define('ENTRY_EMAIL_ADDRESS_ERROR_EXISTS', '&nbsp;<span class="errorText">Este correo electr&oacute;nico ya existe!</span>');
define('ENTRY_COMPANY', 'Nombre de la empresa:');
define('ENTRY_STREET_ADDRESS', 'Calle:');
define('ENTRY_STREET_ADDRESS_ERROR', '&nbsp;<span class="errorText">M&iacute;nimo ' . ENTRY_STREET_ADDRESS_MIN_LENGTH . ' letras</span>');
define('ENTRY_SUBURB', 'Otra direcci&oacute;n:');
define('ENTRY_POST_CODE', 'C&oacute;d. Postal:');
define('ENTRY_POST_CODE_ERROR', '&nbsp;<span class="errorText">M&iacute;nimo ' . ENTRY_POSTCODE_MIN_LENGTH . ' cifras</span>');
define('ENTRY_CITY', 'Ciudad:');
define('ENTRY_CITY_ERROR', '&nbsp;<span class="errorText">M&iacute;nimo ' . ENTRY_CITY_MIN_LENGTH . ' letras</span>');
define('ENTRY_STATE', 'Provincia:');
define('ENTRY_STATE_ERROR', '&nbsp;<span class="errorText">Entrada necesaria</font></small>');
define('ENTRY_COUNTRY', 'Pa&iacute;s:');
define('ENTRY_COUNTRY_ERROR', 'Elija su pa&iacute;s.');
define('ENTRY_TELEPHONE_NUMBER', 'Telef&oacute;no:');
define('ENTRY_TELEPHONE_NUMBER_ERROR', '&nbsp;<span class="errorText">M&iacute;nimo ' . ENTRY_TELEPHONE_MIN_LENGTH . ' cifras</span>');
define('ENTRY_FAX_NUMBER', 'N&uacute;mero de Fax:');
define('ENTRY_NEWSLETTER', 'Newsletter:');
define('ENTRY_CUSTOMERS_STATUS', 'Grupo de clientes:');
define('ENTRY_NEWSLETTER_YES', 'Abonado');
define('ENTRY_NEWSLETTER_NO', 'No abonado');
define('ENTRY_MAIL_ERROR','&nbsp;<span class="errorText">Por favor elige una opci&oacute;n</span>');
define('ENTRY_PASSWORD','Contrase&ntilde;a (creada autom&aacute;ticamente)');
define('ENTRY_PASSWORD_ERROR','&nbsp;<span class="errorText">La contrase&ntilde;a debe contener m&iacute;nimo ' . ENTRY_PASSWORD_MIN_LENGTH . ' caracteres.</span>');
define('ENTRY_MAIL_COMMENTS','Comentarios para e-mail:');

define('ENTRY_MAIL','Enviar al cliente E-Mail con contrase&ntilde;a?');
define('YES','si');
define('NO','no');
define('SAVE_ENTRY','Guardar cambios?');
define('TEXT_CHOOSE_INFO_TEMPLATE','Plantilla para detalles de art&iacute;culo');
define('TEXT_CHOOSE_OPTIONS_TEMPLATE','Plantilla para opciones de art&iacute;culo');
define('TEXT_SELECT','-- Elige por favor --');
define('PULL_DOWN_DEFAULT', 'Por favor, seleccione');

// BOF - Tomcraft - 2009-06-10 - added some missing alternative text on admin icons
// Icons
define('ICON_ARROW_RIGHT','Marcado');
define('ICON_BIG_WARNING','Atenci&oacute;n!');
define('ICON_CROSS', 'Err&oacute;neo');
define('ICON_CURRENT_FOLDER', 'Carpeta actual');
define('ICON_DELETE', 'Borrar');
define('ICON_EDIT','Editar');
define('ICON_ERROR', 'Error');
define('ICON_FILE', 'Fichero');
define('ICON_FILE_DOWNLOAD', 'Descargar');
define('ICON_FOLDER', 'Carpeta');
define('ICON_LOCKED', 'Bloqueado');
define('ICON_POPUP','Pre-visualizar Banner');
define('ICON_PREVIOUS_LEVEL', 'Nivel anterior');
define('ICON_PREVIEW', 'Pre-visualizaci&oacute;n');
define('ICON_STATISTICS', 'Estad&iacute;sticas');
define('ICON_SUCCESS', '&eacute;xito');
define('ICON_TICK', 'Verdadero');
define('ICON_UNLOCKED', 'Desbloqueado');
define('ICON_WARNING', 'Advertencia');
// EOF - Tomcraft - 2009-06-10 - added some missing alternative text on admin icons

// constants for use in tep_prev_next_display function
define('TEXT_RESULT_PAGE', 'P&aacute;gina %s de %d');
define('TEXT_DISPLAY_NUMBER_OF_BANNERS', 'Se muestran <b>%d</b> bis <b>%d</b> (de un total de <b>%d</b> Bannern)');
define('TEXT_DISPLAY_NUMBER_OF_COUNTRIES', 'Se muestran <b>%d</b> bis <b>%d</b> (de un total de <b>%d</b> Pa&iacute;ses)');
define('TEXT_DISPLAY_NUMBER_OF_CUSTOMERS', 'Se muestran <b>%d</b> bis <b>%d</b> (de un total de <b>%d</b> Clientes)');
define('TEXT_DISPLAY_NUMBER_OF_CURRENCIES', 'Se muestran <b>%d</b> bis <b>%d</b> (de un total de <b>%d</b> Divisas)');
define('TEXT_DISPLAY_NUMBER_OF_LANGUAGES', 'Se muestran <b>%d</b> bis <b>%d</b> (de un total de <b>%d</b> Idiomas)');
define('TEXT_DISPLAY_NUMBER_OF_MANUFACTURERS', 'Se muestran <b>%d</b> bis <b>%d</b> (de un total de <b>%d</b> Productores)');
define('TEXT_DISPLAY_NUMBER_OF_NEWSLETTERS', 'Se muestran <b>%d</b> bis <b>%d</b> (de un total de <b>%d</b> Newsletter)');
define('TEXT_DISPLAY_NUMBER_OF_NEWSLETTERS_RECIPIENTS', 'Mostrando del <b>%d</b> al <b>%d</b> (de <b>%d</b> destinatarios del bolet&iacute;n)');
define('TEXT_DISPLAY_NUMBER_OF_ORDERS', 'Se muestran <b>%d</b> bis <b>%d</b> (de un total de <b>%d</b> Pedidos)');
define('TEXT_DISPLAY_NUMBER_OF_ORDERS_STATUS', 'Se muestran <b>%d</b> bis <b>%d</b> (de un total de <b>%d</b> Estado del pedido)');
define('TEXT_DISPLAY_NUMBER_OF_XSELL_GROUP', 'Se muestran <b>%d</b> bis <b>%d</b> (de un total de <b>%d</b> Grupos Cross-Marketing)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_VPE', 'Se muestran <b>%d</b> bis <b>%d</b> (de un total de <b>%d</b> Unidades)');
define('TEXT_DISPLAY_NUMBER_OF_SHIPPING_STATUS', 'Se muestran <b>%d</b> bis <b>%d</b> (de un total de <b>%d</b> Estado de env&iacute;o)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS', 'Se muestran <b>%d</b> bis <b>%d</b> (de un total de <b>%d</b> Art&iacute;culos)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_EXPECTED', 'Se muestran <b>%d</b> bis <b>%d</b> (de un total de <b>%d</b> art&iacute;culos que est&aacute;n por recibir)');
define('TEXT_DISPLAY_NUMBER_OF_REVIEWS', 'Se muestran <b>%d</b> bis <b>%d</b> (de un total de <b>%d</b> valoraciones)');
define('TEXT_DISPLAY_NUMBER_OF_SPECIALS', 'Se muestran <b>%d</b> bis <b>%d</b> (de un total de <b>%d</b> Ofertas)');
define('TEXT_DISPLAY_NUMBER_OF_TAX_CLASSES', 'Se muestran <b>%d</b> bis <b>%d</b> (de un total de <b>%d</b> Clases de impuestos)');
define('TEXT_DISPLAY_NUMBER_OF_TAX_ZONES', 'Se muestran <b>%d</b> bis <b>%d</b> (de un total de <b>%d</b> Zonas de impuestos)');
define('TEXT_DISPLAY_NUMBER_OF_TAX_RATES', 'Se muestran <b>%d</b> bis <b>%d</b> (de un total de <b>%d</b> Tipo de impuestos)');
define('TEXT_DISPLAY_NUMBER_OF_ZONES', 'Se muestran <b>%d</b> bis <b>%d</b> (de un total de <b>%d</b> Provincias)');
define('TEXT_DISPLAY_NUMBER_OF_WHOS_ONLINE', 'Se muestran <b>%d</b> bis <b>%d</b> (de un total de <b>%d</b> clientes que est&aacute;n conectados)');

define('PREVNEXT_BUTTON_PREV', '&laquo;');
define('PREVNEXT_BUTTON_NEXT', '&raquo;');

define('TEXT_DEFAULT', 'Por defecto');
define('TEXT_SET_DEFAULT', 'Definir como por defecto');
define('TEXT_FIELD_REQUIRED', '&nbsp;<span class="fieldRequired">* Necesario</span>');

define('ERROR_NO_DEFAULT_CURRENCY_DEFINED', 'Error: No se ha definido ninguna divisa por defecto. Por favor defina en administraci&oacute;n -> Idiomas/Divisas -> Divisa por defecto.');

define('TEXT_CACHE_CATEGORIES', 'Box Categor&iacute;as');
define('TEXT_CACHE_MANUFACTURERS', 'Box Productores');
define('TEXT_CACHE_ALSO_PURCHASED', 'M&oacute;dulo de -Tambi&eacute;n han comprado-');

define('TEXT_NONE', '--ninguno--');
define('TEXT_AUTO_PROPORTIONAL', '--auto proporcional--');
define('TEXT_AUTO_MAX', '--auto m&aacute;ximo--');
define('TEXT_TOP', 'Top');

define('ERROR_DESTINATION_DOES_NOT_EXIST', 'Error: No existe el sitio de guardar.');
define('ERROR_DESTINATION_NOT_WRITEABLE', 'Error: Destino para guardar co tiene permiso de escritura.');
define('ERROR_FILE_NOT_SAVED', 'Error: Fichero no a sido guardado.');
define('ERROR_FILETYPE_NOT_ALLOWED', 'Error: Tipo de fichero no esta permitido.');
define('SUCCESS_FILE_SAVED_SUCCESSFULLY', 'Fichero ha sido guardado con &eacute;xito.');
define('WARNING_NO_FILE_UPLOADED', 'Atenci&oacute;n: Ning&uacute;n fichero enviado.');
define('ERROR_FILE_NOT_REMOVEABLE', 'Error: Fichero no se pudo borrar.');

define('DELETE_ENTRY','Borrar entrada?');
define('TEXT_PAYMENT_ERROR','<b>ATENCION:</b> Por favor activa un m&oacute;dulo de forma de pago!');
define('TEXT_SHIPPING_ERROR','<b>ATENCION:</b> Por favor activa un m&oacute;dulo de forma de env&iacute;o!');
define('TEXT_PAYPAL_CONFIG','<b>ATENCION:</b> Puedes configurar los pagos con PayPal del "Live Modus" en: <a href="%s"><strong>Socios -> PayPal</strong></a>'); //DokuMan - 2012-05-31 - show warning if PayPal payment module activated, but not configured for live mode yet
define('TEXT_NETTO','Neto: ');
define('TEXT_DUPLICATE_CONFIG_ERROR','<b>ADVERTENCIA:</b> Clave de configuraci&oacute;n duplicada: ');

define('ENTRY_CID','N&ordm;. de Cliente:');
define('IP','IP del pedido:');
define('CUSTOMERS_MEMO','Memos:');
define('DISPLAY_MEMOS','Mostrar/Escribir');
define('TITLE_MEMO','MEMO Clientes');
define('ENTRY_LANGUAGE','Idioma:');
define('CATEGORIE_NOT_FOUND','Categor&iacute;a no existe');

// BOF - Tomcraft - 2009-06-10 - added some missing alternative text on admin icons
// Image Icons
define('IMAGE_RELEASE', 'Canjear vale de descuento');
define('IMAGE_ICON_STATUS_GREEN_STOCK','disponible');
define('IMAGE_ICON_STATUS_GREEN','activo');
define('IMAGE_ICON_STATUS_GREEN_LIGHT','activar');
define('IMAGE_ICON_STATUS_RED','inactivo');
define('IMAGE_ICON_STATUS_RED_LIGHT','desactivar');
define('IMAGE_ICON_INFO','elegir');
// EOF - Tomcraft - 2009-06-10 - added some missing alternative text on admin icons

define('_JANUARY', 'Enero');
define('_FEBRUARY', 'Febrero');
define('_MARCH', 'Marzo');
define('_APRIL', 'Abril');
define('_MAY', 'Mayo');
define('_JUNE', 'Junio');
define('_JULY', 'Julio');
define('_AUGUST', 'Agosto');
define('_SEPTEMBER', 'Septiembre');
define('_OCTOBER', 'Octubre');
define('_NOVEMBER', 'Noviembre');
define('_DECEMBER', 'Diciembre');

// Beschreibung f&uuml;r Abmeldelink im Newsletter
define('TEXT_NEWSLETTER_REMOVE', 'Para darte de baja del Newsletter pulsa aqu&iacute;:');

define('TEXT_DISPLAY_NUMBER_OF_GIFT_VOUCHERS', 'Se muestran <b>%d</b> hasta <b>%d</b> (de un total de <b>%d</b> Veles de descuento)');
define('TEXT_DISPLAY_NUMBER_OF_COUPONS', 'Se muestran <b>%d</b> hasta <b>%d</b> (de un total de <b>%d</b> Cupones)');
define('TEXT_VALID_PRODUCTS_LIST', 'Lista art&iacute;culos');
define('TEXT_VALID_PRODUCTS_ID', 'ID-Art&iacute;culo');
define('TEXT_VALID_PRODUCTS_NAME', 'Nombre Art&iacute;culo');
define('TEXT_VALID_PRODUCTS_MODEL', 'N&ordm;. Art&iacute;culo');

define('TEXT_VALID_CATEGORIES_LIST', 'Lista categor&iacute;as');
define('TEXT_VALID_CATEGORIES_ID', 'ID-Categor&iacute;a');
define('TEXT_VALID_CATEGORIES_NAME', 'Nobre Categor&iacute;a');

define('TXT_ALL','Todos');

// UST ID
define('HEADING_TITLE_VAT','N&uacute;mero I.V.A.');
define('ENTRY_VAT_ID','N&ordm;. I.V.A.:');
define('ENTRY_CUSTOMERS_VAT_ID', 'N&ordm;. I.V.A.:');
define('TEXT_VAT_FALSE','<span class="messageStackError">Verificado/N&ordm;. IVA no es v&aacute;lido!</span>');
define('TEXT_VAT_TRUE','<span class="messageStackSuccess">Verificado/N&ordm;. IVA es v&aacute;lido</span>');
define('TEXT_VAT_UNKNOWN_COUNTRY','<span class="messageStackError">No verificado/Pa&iacute;s desconocidot!</span>');
define('TEXT_VAT_INVALID_INPUT','<span class="messageStackError">No verificado/El c&oacute;digo del pa&iacute;s no es v&aacute;lido o el campo del N&ordm;. IVA esta vac&iacute;o!</span>');
define('TEXT_VAT_SERVICE_UNAVAILABLE','<span class="messageStackError">No verificado/El servicio SOAP no es accesible, prueba lo m&aacute;s tarde otra vez!</span>');
define('TEXT_VAT_MS_UNAVAILABLE','<span class="messageStackError">No verificado/El servicio del pa&iacute;s-miembro no es accesible, prueba lo m&aacute;s tarde otra vez con otro pa&iacute;s-miembro!</span>');
define('TEXT_VAT_TIMEOUT','<span class="messageStackError">No verificado/El servicio del miembro-pa&iacute;s era inaccesible (timeout), prueba lo m&aacute;s tarde de nuevo con otro pa&iacute;s-miembro!</span>');
define('TEXT_VAT_SERVER_BUSY','<span class="messageStackError">No verificado/El servicio no pudo tramitar la consulta. Prueba lo m&aacute;s tarde otra vez!</span>');
define('TEXT_VAT_NO_PHP5_SOAP_SUPPORT','<span class="messageStackError">No verificado/No hay soporte para PHP5 SOAP!</span>');
define('TEXT_VAT_CONNECTION_NOT_POSSIBLE','<span class="messageStackError">ERROR: Conexi&oacute;n al servicio WEB no es posible (ERROR-SOAP)!</span>');

define('ERROR_GIF_MERGE','Falta soporte Gif GDlib, no es posible usar la marca de agua(Merge)');
define('ERROR_GIF_UPLOAD','Falta soporte Gif GDlib, no es posible el env&iacute;o de Im&aacute;genes GIF');

// BOF - Tomcraft - 2009-06-17 Google Sitemap
define('BOX_GOOGLE_SITEMAP', 'Google Sitemap');
// EOF - Tomcraft - 2009-06-17 Google Sitemap

// BOF - Tomcraft - 2009-10-03 - Paypal Express Modul
define('BOX_PAYPAL','PayPal');
// EOF - Tomcraft - 2009-10-03 - Paypal Express Modul

// BOF - Dokuman - 2009-10-02 - added moneybookers payment module version 2.4
define('_PAYMENT_MONEYBOOKERS_EMAILID_TITLE','Direcci&oacute;n E-mail Moneybookers');
define('_PAYMENT_MONEYBOOKERS_EMAILID_DESC','Direcci&oacute;n E-Mail con la que estas registrado en Moneybookers.com.<br />Si a&uacute;n do dispones de una cuenta, <b>puedes registrarte</b> en <a href="https://www.moneybookers.com/app/register.pl" target="_blank"><b>Moneybookers</b></a> <b>gratis</b> an.');
define('_PAYMENT_MONEYBOOKERS_MERCHANTID_TITLE','ID-Moneybookers');
define('_PAYMENT_MONEYBOOKERS_MERCHANTID_DESC','Tu ID comercial en Moneybookers.com');
define('_PAYMENT_MONEYBOOKERS_PWD_TITLE','Palabra secreta Moneybookers');
define('_PAYMENT_MONEYBOOKERS_PWD_DESC','Al indtroducir la palabra secreta, la conexi&oacute;n para el procedimiento del pago ser&aacute; codificada. As&iacute; podemos asegurar m&aacute;xima seguridad. Introduce la palabra secreta (esta no es Tu clave!). La palabra secreta solo puede contener letras min&uacute;sculas y cifras. Puedes definir la palabra secreta <b><span class="col-red">una vez activada</b></span> en Tu cuenta de usuario de Moneybookers (Configuraci&oacute;n comercial).<br /><br /><span class="col-red">As&iacute; puede activar el procedimientos de pagos en la cuenta de Moneybookers.com!</span><br /><br />Adjunta una direcci&oacute;n E-Mail:<br/>- del Dominio de Tu tienda online<br/>- Tu Moneybookers E-Mail<br /><br />Para: <a href="mailto:ecommerce@moneybookers.com?subject=modified eCommerce Shopsoftware: activado para Moneybookers Quick Checkout">ecommerce@moneybookers.com</a>');
define('_PAYMENT_MONEYBOOKERS_TMP_STATUS_ID_TITLE','Estado del pedido - Proceso de pago');
define('_PAYMENT_MONEYBOOKERS_TMP_STATUS_ID_DESC',' En el momento que el cliente de la tienda pulse sobre "Enviar pedido", se creara un "pedido temporal". Esto tiene la ventaja. de que aunque un usuario cancele el procedimiento de pago en Moneybookes,  se quedara el pedido guardado.');
define('_PAYMENT_MONEYBOOKERS_PROCESSED_STATUS_ID_TITLE','Estado del pedido - Pagado');
define('_PAYMENT_MONEYBOOKERS_PROCESSED_STATUS_ID_DESC','Esto aparecer&aacute; cuando Moneybookers confirme el pago.');
define('_PAYMENT_MONEYBOOKERS_PENDING_STATUS_ID_TITLE','Estado del pedido - Pago en proceso');
define('_PAYMENT_MONEYBOOKERS_PENDING_STATUS_ID_DESC','Si el cliente no tuviese saldo a su favor, el cobro estar&iacute;a a la espera hasta que el cliente tenga saldo suficiente en su cuenta de Moneybookers.');
define('_PAYMENT_MONEYBOOKERS_CANCELED_STATUS_ID_TITLE','Estado del pedido - Pago anulado');
define('_PAYMENT_MONEYBOOKERS_CANCELED_STATUS_ID_DESC','Se mostrar&aacute; cuando por ejemplo una tarjeta de cr&eacute;dito sea rechazada');
define('MB_ERROR_NO_MERCHANT','No existe una cuenta en Moneybookers.com con esta direcci&oacute;n E-Mail!');
define('MB_MERCHANT_OK','La cuenta en Moneybookers.com es correcta. La ID-comercial %s en Moneybookers.com puede recibir y guardar.');
define('MB_INFO','<img src="../images/icons/moneybookers/MBbanner.jpg" /><br /><br />Ahora puedes aceptar directamente Tarjetas de cr&eacute;dito, Cargos en cuenta, Transferencias, Giropay as&iacute; como cualquier forma de pagos locales importantes, con una simple activaci&oacute;n en la tienda. Con Moneybookers como All-in-One soluci&oacute;n no necesitas contratos individuales para cada forma de pago. Lo &uacute;nico que necesitas es una cuenta en <a href="https://www.moneybookers.com/app/register.pl" target="_blank"><b>Moneybookers Account</b></a>, para aceptar todas la formas de pagos importantes.');
// EOF - Dokuman - 2009-10-02 - added moneybookers payment module version 2.4

// BOF - Tomcraft - 2009-11-02 - set global customers-group-permissions
define('BOX_CUSTOMERS_GROUP','Derechos-KG');
// EOF - Tomcraft - 2009-11-02 - set global customers-group-permissions

// BOF - Tomcraft - 2009-11-02 - New admin top menu
define('TEXT_ADMIN_START', 'Inicio');
define('BOX_HEADING_CONFIGURATION2','Config. avanzada');
// EOF - Tomcraft - 2009-11-02 - New admin top menu

//BOF - web28 - 2010-04-10 - ADMIN SEARCH BAR
define('ASB_QUICK_SEARCH_CUSTOMER','Buscar por cliente...');
define('ASB_QUICK_SEARCH_ORDER','&Oacute;rdenes de b&uacute;squeda...');
define('ASB_QUICK_SEARCH_ORDER_ID','Buscar por N&ordm;. de pedido...');
define('ASB_QUICK_SEARCH_ARTICLE','Buscar por art&iacute;culo/categor&iacute;a...');
define('ASB_QUICK_SEARCH_EMAIL', 'Buscar por direcci&oacute;n E-Mail...');
define('ASB_QUICK_SEARCH_ARTICLE_ID','Buscar por ID de art&iacute;culo/categor&iacute;a...');
define('ASB_QUICK_SEARCH_ORDER_OR_INVOICE','Buscar pedidos ID/factura No....');
//EOF - web28 - 2010-04-10 - ADMIN SEARCH BAR

//BOF - web28 - 2010.05.30 - accounting - set all checkboxes , countries - set all flags
define('BUTTON_SET','Activar todos');
define('BUTTON_UNSET','Desactivar todos');
//EOF - web28 - 2010.05.30 - accounting - set all checkboxes

//BOF - DokuMan - 2010-08-12 - added possibility to reset admin statistics
define('TEXT_ROWS','Linea');
define('TABLE_HEADING_RESET','Resetear estad&iacute;sticas');
//EOF - DokuMan - 2010-08-12 - added possibility to reset admin statistics

//BOF - web28 - 2010-11-13 - added BUTTON_CLOSE_WINDOW
define('BUTTON_CLOSE_WINDOW' , 'Cerrar ventana');
//EOF - web28 - 2010-11-13 - added BUTTON_CLOSE_WINDOW

//BOF - hendrik - 2011-05-14 - independent invoice number and date
define('ENTRY_INVOICE_NUMBER',  'N&ordm;. de factura:');
define('ENTRY_INVOICE_DATE',    'Fecha de factura:');
//EOF - hendrik - 2011-05-14 - independent invoice number and date

//BOF - web28 - 2010-07-06 - added missing error text
define('ENTRY_VAT_ERROR', '&nbsp;<span class="errorText">N&ordm;. I.V.A. no v&aacute;lido</span>');
//EOF - web28 - 2010-07-06 - added missing error text

define('CONFIG_INT_VALUE_ERROR', '"%s" ERROR: Por favor introducir solo cifras! La entrada %s fue ignorada!');
define('CONFIG_MAX_VALUE_WARNING', '"%s" ATENCION: Entrada %s a sido ignorada! [M&aacute;ximo: %s]');
define('CONFIG_MIN_VALUE_WARNING', '"%s" ATENCION: Entrada %s a sido ignorada! [M&iacute;nimo: %s]');

define('WHOS_ONLINE_TIME_LAST_CLICK_INFO', 'Per&iacute;odo de visualizaci&oacute;n en segundos: %s. Despu&eacute;s de este tiempo se eliminar&aacute;n las entradas.');

define('TEXT_GLOBAL_PRODUCTS_MODEL', 'N&ordm;.-Art.');

define('TEXT_INFO_MODULE_RESTORE', 'Quieres recuperar las configuraciones guardadas?<br /><br /><b>ATENCION</b>: Se sobre escribir&aacute; toda la configuraci&oacute;n actual!');
define('TEXT_INFO_MODULE_REMOVE', 'Quieres des-instalar el m&oacute;dulo?<br /><br /><b>ATENCION</b>: Toda la configuraci&oacute;n del m&oacute;dulo se sobre escribir&aacute;n!');
define('TEXT_INFO_MODULE_BACKUP', 'Quieres guardar los ajustes del m&oacute;dulo?');
define('MODULE_BACKUP_CONFIRM', 'Los ajustes han sido guardados con &eacute;xito!');
define('MODULE_RESTORE_CONFIRM', 'los ajustes del m&oacute;dulo ha sido restaurada con &eacute;xito!');
define('MODULE_UPDATE_CONFIRM', 'Los ajustes del m&oacute;dulo han sido actualizados con &eacute;xito!');

/* magnalister v1.0.0 */
define('BOX_HEADING_MAGNALISTER', 'magnalister');
define('BOX_MAGNALISTER', 'magnalister Admin');
/* END magnalister */

define('CHARS_LEFT', 'quedan caracteres');
define('CHARS_MAX', 'de un m&aacute;ximo de.');

define('DISPLAY_PER_PAGE', 'Mostrar por p&aacute;gina: ');

define('SPECIALS_DATE_START_TT', 'Iniciar ofertas a las 00:00:00 horas');
define('SPECIALS_DATE_END_TT', 'Ofertas terminan a las (23:59:59 horas)');

define('BOX_PARCEL_CARRIERS', 'Transportista');
define('TEXT_DISPLAY_NUMBER_OF_CARRIERS', 'Se muestran <b>%d</b> hasta <b>%d</b> (de un total de <b>%d</b> Transportistas)');

define('RSS_FEED_TITLE', 'Informaciones actuales del blog del software modified eCommerce');
define('RSS_FEED_DESCRIPTION', 'Informaciones actuales del foro de modified eCommerce');
define('RSS_FEED_LINK', 'http://www.modified-shop.org/blog');
define('RSS_FEED_ALTERNATIVE', 'Desgraciadamente no se pueden mostrar noticias actuales en el RSS Feed. Por favor visite nuestro bloq en <a href="'.RSS_FEED_LINK.'">www.modified-shop.org/blog</a> para ver noticias importantes sobre estos temas: <ul><li>Actualizaciones importantes</li><li>Nuevas opciones</li><li>Novedades</li><li>Cambios</li><li>Y otras cosas</li></ul>');
define('RSS_FEED_NOT_REACHABLE', 'La fuente de noticias no pudo ser actualizada por mucho tiempo.<br>No te pierdas ninguna noticia importante, ofertas y mucho m&aacute;s.  Vis&aacute;tenos en <a target="_blank" href="https://www.modified-shop.org/blog">www.modified-shop.org/blog</a><br>');
define('TEXT_DISPLAY_NUMBER_OF_NEWSFEED', 'Se muestran <b>%d</b> hasta <b>%d</b> (de un total de <b>%d</b> )');

define('CFG_TXT_YES', 'Si');
define('CFG_TXT_NO', 'No');
define('CFG_TXT_OR', 'o');
define('CFG_TXT_AND', 'y');
define('CFG_TXT_ASC', 'Ascendente');
define('CFG_TXT_DESC', 'Descendente');
define('CFG_TXT_PRODUCTS_NAME', 'Nombre Art&iacute;culo');
define('CFG_TXT_PRODUCTS_MODEL', 'N&ordm;. Art&iacute;culo');
define('CFG_TXT_DATE_EXPECTED', 'Disponible a partir de');
define('CFG_TXT_ACCOUNT', 'Cuenta cliente');
define('CFG_TXT_GUEST', 'Cuenta Visita');
define('CFG_TXT_BOTH', 'Ambos');
define('CFG_TXT_NONE', 'Desactivado');
define('CFG_TXT_ADMIN', 'Administrador');
define('CFG_TXT_ALL', 'Todos');
define('CFG_TXT_WEIGHT', 'Peso');
define('CFG_TXT_PRICE', 'Precio');
define('CFG_TXT_ITEM', 'Unidad');
define('CFG_TXT_WHOS_ONLINE', 'En l&iacute;nea');
define('CFG_TXT_ORDERS', 'Ordenes');
define('CFG_TXT_CUSTOMERS', 'Clientes');
define('CFG_TXT_SALES_REPORT', 'Estad&iacute;sticas');
define('CFG_TXT_BLOG', 'Blog');
define('CFG_TXT_P.PRODUCTS_PRICE', 'Precio');
define('CFG_TXT_PD.PRODUCTS_NAME', 'Nombre del producto');
define('CFG_TXT_P.PRODUCTS_DATE_ADDED', 'Fecha de publicación');
define('CFG_TXT_P.PRODUCTS_MODEL', 'Productos Modelo');
define('CFG_TXT_P.PRODUCTS_ORDERED', 'Productos solicitados');
define('CFG_TXT_P.PRODUCTS_SORT', 'Orden de clasificación');
define('CFG_TXT_P.PRODUCTS_WEIGHT', 'Peso');
define('CFG_TXT_P.PRODUCTS_QUANTITY', 'En stock');
define('CFG_TXT_S.SPECIALS_DATE_ADDED', 'Fecha de publicación');

define('CSRF_TOKEN_MANIPULATION', 'CSRFToken Manipulaci&oacute;n (Por razones de seguridad no se admite en la zona del administrador, trabajar con diferentes.)');
define('CSRF_TOKEN_NOT_DEFINED', 'CSRFToken No esta definido(Por razones de seguridad no se admite en la zona del administrador, trabajar con diferentes.)');

define('TEXT_ACCOUNTING_INFO','Al administrador principal [1] no se le pueden quitar los derechos de acceso!');

define('JAVASCRIPT_DISABLED_INFO', 'En Tu navegador esta desactivado el JavaScript. Por favor activa JavaScript, para que se puedan usar todas la funciones y para que se puedan mostrar todos los contenidos.');

define('BOX_MODULE_TYPE', 'Extensiones de clases para m&oacute;dulos');

define('MULTIPLE_INSTALLATION', '<span style="color:red">[Multi-Instalaci&oacute;n: %s]</span>');

define('FILEUPLOAD_INPUT_TXT', 'Ning&uacute;n fichero');
define('FILEUPLOAD_BTN_TXT', 'B&uacute;squeda');

define('CHECK_LABEL_PRICE', 'Consultar precio');

define('TEXT_PAYPAL_TAB_CONFIG', 'Configuraci&oacute;n Paypal');
define('TEXT_PAYPAL_TAB_PROFILE', 'Profil PayPal');
define('TEXT_PAYPAL_TAB_WEBHOOK', 'PayPal Webhook');
define('TEXT_PAYPAL_TAB_MODULE', 'PayPal M&oacute;dulos');
define('TEXT_PAYPAL_TAB_INFO', 'Informaci&oacute;n de paypal');

define('TEXT_DEFAULT_SORT_ORDER_TITLE', 'Orden');
define('TEXT_DEFAULT_SORT_ORDER_DESC', 'Orden de muestreo. Cifra mas baja se muestra primero.');
define('TEXT_DEFAULT_STATUS_TITLE', 'Activar m&oacute;dulo?');
define('TEXT_DEFAULT_STATUS_DESC', 'Estado');

define('TEXT_HOUR', 'Hora');
define('TEXT_HOURS', 'Horas');

define('DELETE_LOGS_SUCCESSFUL', 'Los archivos de registro han sido borrado.');

define('BOX_BLACKLIST_LOGS', 'Archivo de registros de la lista negra');

define('CONTINUE_WITHOUT_SAVE', 'Cambios realizados se pueden perder.');

define('TEXT_SORT_ASC','ascendente');
define('TEXT_SORT_DESC','descendiendo');

define('MSRP','MSRP');
define('YOUR_PRICE','tu precio ');
define('UNIT_PRICE','precio unitario ');
define('ONLY',' Ahora s&oacute;lo ');
define('FROM','de ');
define('YOU_SAVE','usted salva ');
define('INSTEAD','Nuestro precio anterior ');
define('TXT_PER',' por ');
define('TEXT_NO_PAYMENT', 'No hay forma de pago');
?>
