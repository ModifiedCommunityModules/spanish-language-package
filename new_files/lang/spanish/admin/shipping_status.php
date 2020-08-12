<?php
/* --------------------------------------------------------------
   $Id: shipping_status.php 899 2005-04-29 02:40:57Z hhgag $

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

define('HEADING_TITLE', 'Estado de la entrega');

define('TABLE_HEADING_SHIPPING_STATUS_IMAGE', 'Foto');
define('TABLE_HEADING_SHIPPING_STATUS', 'Estado de la entrega');
define('TABLE_HEADING_SORT', 'Clasificaci&oacute;n');
define('TABLE_HEADING_ACTION', 'Acci&oacute;n');

define('TEXT_INFO_EDIT_INTRO', 'Por favor, haga los cambios necesarios');
define('TEXT_INFO_SHIPPING_STATUS_NAME', 'Estado de la entrega:');
define('TEXT_INFO_INSERT_INTRO', 'Por favor, introduzca el nuevo estado de entrega con todos los datos relevantes');
define('TEXT_INFO_DELETE_INTRO', '&iquest;Est&aacute;s seguro de que quieres deshacerte de este estado de entrega?');
define('TEXT_INFO_HEADING_NEW_SHIPPING_STATUS', 'Nuevo estado de la entrega');
define('TEXT_INFO_HEADING_EDIT_SHIPPING_STATUS', 'Editar el estado de la entrega');
define('TEXT_INFO_SHIPPING_STATUS_IMAGE', 'Foto:');
define('TEXT_INFO_HEADING_DELETE_SHIPPING_STATUS', 'Borrar el estado de la entrega');
define('TEXT_DELETE_IMAGE', 'Eliminar la imagen');
define('TEXT_INFO_SHIPPING_STATUS_SORT_ORDER', 'Clasificaci&oacute;n:');

define('ERROR_REMOVE_DEFAULT_SHIPPING_STATUS', 'Error: El estado de entrega est&aacute;ndar no puede ser eliminado. Por favor, defina un nuevo estado de entrega est&aacute;ndar y repita el proceso..');
define('ERROR_STATUS_USED_IN_ORDERS', 'Error: Este estado de entrega se sigue utilizando actualmente para los art&iacute;culos.');
define('ERROR_STATUS_USED_IN_HISTORY', 'Error: Este estado de entrega se sigue utilizando actualmente para los art&iacute;culos.');
?>