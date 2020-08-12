<?php
/* --------------------------------------------------------------
   $Id: whos_online.php 3072 2012-06-18 15:01:13Z hhacker $   

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   --------------------------------------------------------------
   based on: 
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(whos_online.php,v 1.7 2002/03/30); www.oscommerce.com 
   (c) 2003	 nextcommerce (whos_online.php,v 1.4 2003/08/14); www.nextcommerce.org
   (c) 2006 xt:Commerce; www.xt-commerce.com

   Released under the GNU General Public License 
   --------------------------------------------------------------*/

define('HEADING_TITLE', 'Clientes en l&iacute;nea');

define('TABLE_HEADING_ONLINE', 'En l&iacute;nea');
define('TABLE_HEADING_CUSTOMER_ID', 'ID');
define('TABLE_HEADING_FULL_NAME', 'Nombre');
define('TABLE_HEADING_IP_ADDRESS', 'Direcci&oacute;n-IP');
define('TABLE_HEADING_COUNTRY', 'Pa&iacute;s');
define('TABLE_HEADING_ENTRY_TIME', 'Online desde');
define('TABLE_HEADING_LAST_CLICK', '&Uacute;ltimo Klick');
define('TABLE_HEADING_LAST_PAGE_URL', '&Uacute;ltimo enlace');
define('TABLE_HEADING_HTTP_REFERER', 'HTTP Referer');
define('TABLE_HEADING_ACTION', 'Acci&oacute;n');
define('TABLE_HEADING_SHOPPING_CART', 'Carrito');
define('TEXT_SHOPPING_CART_SUBTOTAL', 'Total');
define('TEXT_NUMBER_OF_CUSTOMERS', 'Por el momento hay %s clientes conectados');
define('TEXT_EMPTY_CART', 'Carrito de compra esta vac&iacute;o');
define('TEXT_SESSION_IS_ENCRYPTED', '<hr><b>AVISO</b>:<br />No se puede mostrar lo que contiene el carro de compra.<br />La sesi&oacute;n esta c&oacute;ificada<br />(suhosin.session.encrypt = On)<br />Para desactivar la codificaci&oacute;n contacta con Tu proveedor.');
define('TEXT_ACTIVATE_WHOS_ONLINE', '&iquest;Activar quien esta ONLINE?:');
?>