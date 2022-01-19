<?php
/* --------------------------------------------------------------
   $Id: customers.php 2666 2012-02-23 11:38:17Z dokuman $   

   XT-Commerce - community made shopping
   http://www.xt-commerce.com

   Copyright (c) 2003 XT-Commerce
   --------------------------------------------------------------
   based on: 
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(customers.php,v 1.13 2002/06/15); www.oscommerce.com 
   (c) 2003 nextcommerce (customers.php,v 1.8 2003/08/15); www.nextcommerce.org

   Released under the GNU General Public License 
   --------------------------------------------------------------*/

define('HEADING_TITLE', 'Clientes');
define('HEADING_TITLE_SEARCH', 'Buscar:');

define('TABLE_HEADING_CUSTOMERSCID','N&ordm; Cliente');
define('TABLE_HEADING_FIRSTNAME', 'Nombre');
define('TABLE_HEADING_LASTNAME', 'Apellido');
define('TABLE_HEADING_ACCOUNT_CREATED', 'Fecha de alta');
define('TABLE_HEADING_ACTION', 'Acci&oacute;n');
define('TABLE_HEADING_EDIT','Editar');

define('TEXT_DATE_ACCOUNT_CREATED', 'Fecha de alta:');
define('TEXT_DATE_ACCOUNT_LAST_MODIFIED', '&Uacute;ltima modificaci&oacute;n:');
define('TEXT_INFO_DATE_LAST_LOGON', '&Uacute;ltima visita:');
define('TEXT_INFO_NUMBER_OF_LOGONS', 'Visitas:');
define('TEXT_INFO_COUNTRY', 'Pa&iacute;s:');
define('TEXT_INFO_NUMBER_OF_REVIEWS', 'Cantidad de valoraciones de producto:');
define('TEXT_DELETE_INTRO', 'Seguro que quieres borrar este cliente?');
define('TEXT_DELETE_REVIEWS', 'Borrar %s Valoraci&oacute;n(es)');
define('TEXT_INFO_HEADING_DELETE_CUSTOMER', 'Eliminar cliente');
define('TYPE_BELOW', 'Por favor introducir abajo');
define('PLEASE_SELECT', 'Elegir');
define('HEADING_TITLE_STATUS','Grupo de clientes');
define('TEXT_ALL_CUSTOMERS','Todos los grupos');
define('TEXT_INFO_HEADING_STATUS_CUSTOMER','Grupo');
define('TABLE_HEADING_NEW_VALUE','Estado nuevo');
define('TABLE_HEADING_DATE_ADDED','Fecha');
define('TEXT_NO_CUSTOMER_HISTORY','--Sin modificaciones--');
define('TABLE_HEADING_GROUPIMAGE','Icono');
define('ENTRY_MEMO','Nota');
define('TEXT_DATE','Fecha');
define('TEXT_TITLE','Asunto');
define('TEXT_POSTER','Autor');
define('ENTRY_PASSWORD_CUSTOMER','Clave:');
define('TABLE_HEADING_ACCOUNT_TYPE','Cuenta');
define('TEXT_ACCOUNT','S&iacute;');
define('TEXT_GUEST','No');
define('NEW_ORDER','Pedido nuevo?');
define('ENTRY_PAYMENT_UNALLOWED','Formas de pagos no permitidas:');
define('ENTRY_SHIPPING_UNALLOWED','Formas de env&iacute;o no permitidas:');
define('ENTRY_NEW_PASSWORD','Clave nueva:');

// NEU HINZUGEFUEGT 04.12.2008 - UMSATZANZEIGE BEI KUNDEN 03.12.2008
define('TABLE_HEADING_UMSATZ','Ventas');

// BOF - web28 - 2010-05-28 - added  customers_email_address
define('TABLE_HEADING_EMAIL','E-Mail');
// EOF - web28 - 2010-05-28 - added  customers_email_address

define('TEXT_INFO_HEADING_ADRESS_BOOK', 'Libro de direcciones');
define('TEXT_INFO_DELETE', '<b>Borrar esta entrada?</b>');
define('TEXT_INFO_DELETE_DEFAULT', '<b>Esta entrada no se puede eliminar!</b>'); 

define('TABLE_HEADING_AMOUNT','Saldo');
define('WARNING_CUSTOMER_ALREADY_EXISTS', 'Grupo de clientes no se puede modificar. Este E-Mail ya esta en uso en nuestro sistema.');

define('TEXT_SORT_ASC','Ascendente');
define('TEXT_SORT_DESC','Descendente');

define('TEXT_INFO_HEADING_STATUS_NEW_ORDER','Nueva orden');
define('TEXT_INFO_PAYMENT','Pago:');
define('TEXT_INFO_SHIPPING','Env&iacute;o:');
define('TEXT_INFO_NEWSLETTER_AT_REGISTRATION', 'Bolet&iacute;n de noticias en el momento de la inscripci&oacute;n:');
define('TEXT_INFO_NEWSLETTER_STATUS', 'Bolet&iacute;n de noticias suscrito:');

define('TEXT_ACTIVE_ELEMENT','Elemento activo');
define('TEXT_MARKED_ELEMENTS','Elementos marcados');
define('TEXT_INFO_HEADING_DELETE_ELEMENTS', 'Eliminar elementos');
define('TEXT_INFO_HEADING_STATUS_ELEMENTS', 'Elementos del grupo de clientes');
define('TEXT_DELETE_REVIEWS_ELEMENTS', 'Borrar opiniones');
?>