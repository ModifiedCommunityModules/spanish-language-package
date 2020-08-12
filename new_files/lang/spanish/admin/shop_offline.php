<?php
/* --------------------------------------------------------------
   $Id: countries.php 899 2005-04-29 02:40:57Z hhgag $   

   XT-Commerce - community made shopping
   http://www.xt-commerce.com

   Copyright (c) 2003 XT-Commerce
   --------------------------------------------------------------
   based on: 
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(countries.php,v 1.8 2002/01/19); www.oscommerce.com 
   (c) 2003	 nextcommerce (countries.php,v 1.4 2003/08/14); www.nextcommerce.org

   Released under the GNU General Public License 
   --------------------------------------------------------------*/

define('HEADING_TITLE',	'Activar / Desactivar tienda on-line');
define('HEADING_SUB_TITLE',	'Configuraci&oacute;n');
define('BOX_SHOP_OFFLINE', 'Activar / Desactivar tienda on-line - vale para todos los idiomas');
define('SETTINGS_OFFLINE', 'Desactivar tienda <br /><span class="col-red">(Acceso solo con datos de administraci&oacute;n a trav&eacute;s de  <a href="'. HTTP_SERVER.DIR_WS_CATALOG.'login_admin.php" target="_blank"><span class="col-red">'. HTTP_SERVER.DIR_WS_CATALOG.'login_admin.php</span></a>)</span>');
define('SETTINGS_OFFLINE_MSG', 'P&aacute;gina que aparece cuando la tiene esta desactivada');

define('SHOP_OFFLINE_ALLOWED_CUSTOMERS_GROUPS_TXT', '<b>Grupos que tienen acceso: </b><br />(Aqu&iacute; puedes ajustar que grupos siguen teniendo acceso a la tienda)');
define('SHOP_OFFLINE_ALLOWED_CUSTOMERS_EMAILS_TXT', '<b>Direcciones E-mails permitidas (separadas por un coma):</b> <br />(Direcciones de correo que tienen acceso a la tienda)');
?>