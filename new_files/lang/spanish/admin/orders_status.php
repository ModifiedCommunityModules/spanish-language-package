<?php
/* --------------------------------------------------------------
   $Id: orders_status.php 899 2005-04-29 02:40:57Z hhgag $   

   XT-Commerce - community made shopping
   http://www.xt-commerce.com

   Copyright (c) 2003 XT-Commerce
   --------------------------------------------------------------
   based on: 
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(orders_status.php,v 1.7 2002/01/30); www.oscommerce.com 
   (c) 2003	 nextcommerce (orders_status.php,v 1.4 2003/08/14); www.nextcommerce.org

   Released under the GNU General Public License 
   --------------------------------------------------------------*/

define('HEADING_TITLE', 'Estado del pedido');

define('TABLE_HEADING_ORDERS_STATUS', 'Estado del pedido');
define('TABLE_HEADING_SORT', 'Clasificaci&oacute;n');
define('TABLE_HEADING_ACTION', 'Acci&oacute;n');

define('TEXT_INFO_EDIT_INTRO', 'Por favor, haga todos los cambios necesarios');
define('TEXT_INFO_ORDERS_STATUS_NAME', 'Estado del pedido:');
define('TEXT_INFO_INSERT_INTRO', 'Por favor, introduzca el estado del nuevo pedido con todos los datos relevantes');
define('TEXT_INFO_DELETE_INTRO', '&iquest;Est&aacute;s seguro de que quieres cancelar el estado de este pedido?');
define('TEXT_INFO_HEADING_NEW_ORDERS_STATUS', 'Estado de la nueva orden');
define('TEXT_INFO_HEADING_EDIT_ORDERS_STATUS', 'Editar el estado del pedido');
define('TEXT_INFO_HEADING_DELETE_ORDERS_STATUS', 'Borrar el estado de la orden');
define('TEXT_INFO_ORDERS_STATUS_SORT_ORDER', 'Clasificaci&oacute;n:');

define('ERROR_REMOVE_DEFAULT_ORDER_STATUS', 'Error: El estado del pedido est&aacute;ndar no puede ser eliminado. Por favor, defina un nuevo estado de pedido est&aacute;ndar y repita el proceso.');
define('ERROR_STATUS_USED_IN_ORDERS', 'Error: Este estado de la orden se sigue utilizando actualmente para las &oacute;rdenes.');
define('ERROR_STATUS_USED_IN_HISTORY', 'Error: Este estado del pedido se sigue utilizando actualmente en el historial del pedido.');
?>