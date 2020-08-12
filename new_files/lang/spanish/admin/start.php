<?php
/* --------------------------------------------------------------
   $Id: start.php 2585 2012-01-03 14:25:49Z dokuman $

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   --------------------------------------------------------------
   based on:
   (c) 2003 nextcommerce (start.php,v 1.1 2003/08/19); www.nextcommerce.org
   (c) 2006 xt:Commerce (start.php 890 2005-04-27); www.xt-commerce.com

   Released under the GNU General Public License
   --------------------------------------------------------------*/

define('ATTENTION_TITLE','! ATENCI&Oacute;N !');

// text for Warnings:
if (!defined('APS_INSTALL')) { //DokuMan - use alternative text for TEXT_FILE_WARNING when using APS package installation
  define('TEXT_FILE_WARNING_WRITABLE','<b>ADVERTENCIA:</b><br />Los siguientes archivos pueden ser escritos por el servidor. Por favor, cambie los permisos de este archivo por razones de seguridad. <b>(444)</b> en unix, <b>(s&oacute;lo lectura)</b> en Win32.');
} else {
  define('TEXT_FILE_WARNING_WRITABLE','<b>ADVERTENCIA:</b><br />Los siguientes archivos pueden ser escritos por el servidor. Por favor, cambie los permisos de este archivo por razones de seguridad. <b>(444)</b> en unix, <b>(s&oacute;lo lectura)</b> en Win32.<br />Si la instalaci&oacute;n fue llevada a cabo por un paquete de software de un proveedor, los derechos de acceso pueden tener que ser ajustados de manera diferente (HostEurope: <b>CHMOD 400</b> o)');
}
define('TEXT_FILE_WARNING','<b>ADVERTENCIA:</b><br />Los siguientes archivos deben ser escritos por el servidor. Por favor, cambie los permisos de estos archivos. <b>(777)</b> en unix, <b>(lectura-escritura)</b> en Win32.');
define('TEXT_FOLDER_WARNING','<b>ADVERTENCIA:</b><br />Los siguientes directorios deben ser escritos por el servidor. Por favor, cambie los permisos de estos directorios. <b>(777)</b> en unix, <b>(lectura-escritura)</b> en Win32.');
define('REPORT_GENERATED_FOR','Informe de pieles:');
define('REPORT_GENERATED_ON','Creado en:');
define('FIRST_VISIT_ON','Primera visita:');
define('HEADING_QUICK_STATS','Breve resumen');
define('VISITS_TODAY','Las visitas de hoy:');
define('UNIQUE_TODAY','Visitantes individuales:');
define('DAILY_AVERAGE','Promedio diario:');
define('TOTAL_VISITS','Total de visitas:');
define('TOTAL_UNIQUE','N&uacute;mero total de visitantes individuales:');
define('TOP_REFFERER','El mejor chaquet&oacute;n:');
define('TOP_ENGINE','El principal motor de b&uacute;squeda:');
define('DAY_SUMMARY','30 d&iacute;as Visi&oacute;n general:');
define('VERY_LAST_VISITORS','Los &uacute;ltimos 10 visitantes:');
define('TODAY_VISITORS','los visitantes de hoy:');
define('LAST_VISITORS','Los &uacute;ltimos 100 visitantes:');
define('ALL_LAST_VISITORS','Todos los visitantes:');
define('DATE_TIME','Fecha y hora:');
define('IP_ADRESS','Direcci&oacute;n IP:');
define('OPERATING_SYSTEM','Sistema operativo:');
define('REFFERING_HOST','Anfitri&oacute;n de referencia:');
define('ENTRY_PAGE','P&aacute;gina de entrada:');
define('HOURLY_TRAFFIC_SUMMARY','Resumen de tr&aacute;fico por hora');
define('WEB_BROWSER_SUMMARY','Visi&oacute;n general del navegador de Internet');
define('OPERATING_SYSTEM_SUMMARY','Visi&oacute;n general del sistema operativo');
define('TOP_REFERRERS','Los 10 principales remitentes');
define('TOP_HOSTS','Los diez mejores anfitriones');
define('LIST_ALL','Mostrar todo');
define('SEARCH_ENGINE_SUMMARY','Resumen de los motores de b&uacute;squeda');
define('SEARCH_ENGINE_SUMMARY_TEXT',' ( Los porcentajes se basan en el n&uacute;mero total de visitas a trav&eacute;s de los motores de b&uacute;squeda. )');
define('SEARCH_QUERY_SUMMARY','Resumen de las consultas de b&uacute;squeda');
define('SEARCH_QUERY_SUMMARY_TEXT',' ) ( Los porcentajes se basan en el n&uacute;mero total de b&uacute;squedas que se registraron. )');
define('REFERRING_URL','puntuaci&oacute;n de la url');
define('HITS','Visita');
define('PERCENTAGE','Porcentaje de participaci&oacute;n');
define('HOST','Anfitri&oacute;n');

// NEU HINZUGEFUEGT 04.12.2008 - Neue Startseite im Admin BOF

// BOF - vr 2010-04-01 -  Added missing definitions, see below
// define('HEADING_TITLE', 'Bestellungen');
// EOF - vr 2010-04-01 -  Added missing definitions
define('HEADING_TITLE_SEARCH', 'Orden no.:');
define('HEADING_TITLE_STATUS', 'Estado:');
define('TABLE_HEADING_AFTERBUY', 'Afterbuy'); //Dokuman - 2009-05-27 - added missing definition
define('TABLE_HEADING_CUSTOMERS', 'Clientes');
define('TABLE_HEADING_ORDER_TOTAL', 'Valor total');
define('TABLE_HEADING_DATE_PURCHASED', 'Fecha del pedido');
define('TABLE_HEADING_STATUS', 'Estado');
//define('TABLE_HEADING_ACTION', 'Aktion');
define('TABLE_HEADING_QUANTITY', 'Cantidad');
define('TABLE_HEADING_PRODUCTS_MODEL', 'Art&iacute;culo no.');
define('TABLE_HEADING_PRODUCTS', 'Art&iacute;culo');
define('TABLE_HEADING_TAX', 'IVA.');
define('TABLE_HEADING_TOTAL', 'La cantidad total');
define('TABLE_HEADING_DATE_ADDED', 'a&ntilde;adido:');
define('ENTRY_CUSTOMER', 'Cliente:');
define('TEXT_DATE_ORDER_CREATED', 'Fecha del pedido:');
define('TEXT_INFO_PAYMENT_METHOD', 'M&eacute;todo de pago:');
define('TEXT_VALIDATING','No est&aacute; confirmado');
define('TEXT_ALL_ORDERS', 'Todas las &oacute;rdenes');
define('TEXT_NO_ORDER_HISTORY', 'No hay historial de pedidos disponible');
define('TEXT_DATE_ORDER_LAST_MODIFIED','&uacute;ltimo cambio');

// BOF - Tomcraft - 2009-11-25 - Added missing definitions for /admin/start.php/
define('TOTAL_CUSTOMERS','Total de clientes');
define('TOTAL_SUBSCRIBERS','Suscripciones al bolet&iacute;n de noticias');
define('TOTAL_PRODUCTS_ACTIVE','Art&iacute;culos activos');
define('TOTAL_PRODUCTS_INACTIVE','Art&iacute;culos inactivos');
define('TOTAL_PRODUCTS','Art&iacute;culo total');
define('TOTAL_SPECIALS','Ofertas especiales');
// EOF - Tomcraft - 2009-11-25 - Added missing definitions for /admin/start.php/
// BOF - Tomcraft - 2009-11-30 - Added missing definitions for /admin/start.php/
define('UNASSIGNED', 'No asignado');
define('TURNOVER_TODAY', 'El volumen de negocios de hoy');
define('TURNOVER_YESTERDAY', 'El volumen de negocios de ayer');
define('TURNOVER_THIS_MONTH', 'mes actual');
define('TURNOVER_LAST_MONTH', 'el mes pasado (todos)');
define('TURNOVER_LAST_MONTH_PAID', 'el mes pasado (pagado)');
define('TOTAL_TURNOVER', 'Volumen de negocios total');
// EOF - Tomcraft - 2009-11-30 - Added missing definitions for /admin/start.php/

// BOF - vr 2010-04-01 -  Added missing definitions
// main heading
define('HEADING_TITLE', 'Bienvenido al &aacute;rea de administraci&oacute;n');
// users online
define('TABLE_CAPTION_USERS_ONLINE', 'En l&iacute;nea');
define('TABLE_CAPTION_USERS_ONLINE_HINT', '***para obtener informaci&oacute;n sobre un usuario - haga clic en el nombre del usuario***');
define('TABLE_HEADING_USERS_ONLINE_SINCE', 'En l&iacute;nea desde');
define('TABLE_HEADING_USERS_ONLINE_NAME', 'Nombre');
define('TABLE_HEADING_USERS_ONLINE_LAST_CLICK', '&uacute;ltimo clic.');
define('TABLE_HEADING_USERS_ONLINE_INFO', 'Informaci&oacute;n');
define('TABLE_CELL_USERS_ONLINE_INFO', 'm&aacute;s...');
// new customers
define('TABLE_CAPTION_NEW_CUSTOMERS', 'Clientes');
define('TABLE_CAPTION_NEW_CUSTOMERS_COMMENT', '(el &uacute;ltimo 15)');
define('TABLE_HEADING_NEW_CUSTOMERS_LASTNAME', 'Nombre');
define('TABLE_HEADING_NEW_CUSTOMERS_FIRSTNAME', 'Nombre de pila');
define('TABLE_HEADING_NEW_CUSTOMERS_REGISTERED', 'registrado en');
define('TABLE_HEADING_NEW_CUSTOMERS_EDIT', 'editar');
define('TABLE_HEADING_NEW_CUSTOMERS_ORDERS', 'Ordenes');
define('TABLE_CELL_NEW_CUSTOMERS_EDIT', 'editar...');
define('TABLE_CELL_NEW_CUSTOMERS_DELETE', 'loschen...');
define('TABLE_CELL_NEW_CUSTOMERS_ORDERS', 'mostrar...');
// new orders
define('TABLE_CAPTION_NEW_ORDERS', 'Ordenes');
define('TABLE_CAPTION_NEW_ORDERS_COMMENT', '(el &uacute;ltimo 20)');
define('TABLE_HEADING_NEW_ORDERS_ORDER_NUMBER', 'N&uacute;mero de pedido');
define('TABLE_HEADING_NEW_ORDERS_ORDER_DATE', 'Fecha del pedido');
define('TABLE_HEADING_NEW_ORDERS_CUSTOMERS_NAME', 'Nombre del cliente');
define('TABLE_HEADING_NEW_ORDERS_EDIT', 'editar');
define('TABLE_HEADING_NEW_ORDERS_DELETE', 'loschen');
// newsfeed
define('TABLE_CAPTION_NEWSFEED', 'Visite el');
// birthdays
define('TABLE_CAPTION_BIRTHDAYS', 'Lista de cumplea&ntilde;os');
define('TABLE_CELL_BIRTHDAYS_TODAY', 'Los clientes que cumplen a&ntilde;os hoy');
define('TABLE_CELL_BIRTHDAYS_THIS_MONTH', 'Los clientes, que tienen su cumplea&ntilde;os todav&iacute;a en este mes');
// EOF - vr 2010-04-01 -  Added missing definitions
define('HEADING_CAPTION_STATISTIC', 'Estad&iacute;sticas');
// security check

// DB version check
define('ERROR_DB_VERSION_UPDATE', '<strong>ADVERTENCIA:</strong> Su DB debe ser actualizada, por favor, ejecute el <a href="'.DIR_WS_CATALOG.'_installer/">instalador</a> :');
define('ERROR_DB_VERSION_UPDATE_INFO', 'La base de datos debe ser actualizada de %s a %s de liberaci&oacute;n.');

// EMail check
define('ERROR_EMAIL_CHECK', '<strong>ADVERTENCIA:</strong> Las siguientes direcciones de correo electr&oacute;nico son aparentemente incorrectas:');
define('ERROR_EMAIL_CHECK_INFO', '%s: &lt;%s&gt;');

// security check DB FILE permission
define('WARNING_DB_FILE_PRIVILEGES', '<strong>ADVERTENCIA:</strong> Los privilegios de los archivos se almacenan en la base de datos &rsquo;'.DB_DATABASE.'&lsquo; para el usuario de la tienda &rsquo;'.DB_SERVER_USERNAME.'&lsquo; activada!');

// register_globals check
define('WARNING_REGISTER_GLOBALS', '<strong>ADVERTENCIA:</strong> Esta caracter&iacute;stica est&aacute; disponible desde PHP 5.3.0 <strong>DEPRECATED</strong> (depreciado) y desde PHP 5.4.0 <strong>REMOVIDO</strong>. Por favor, p&oacute;ngase en contacto con su anfitri&oacute;n para &quot;register_globals&quot; para desactivar.');
// domain check
define('WARNING_DOMAIN_INVALID', '<strong>ADVERTENCIA:</strong> El dominio de su tienda no pudo ser validado (Posibles razones: Formato inv&aacute;lido o nombre de dominio internacionalizado (IDN))');

?>