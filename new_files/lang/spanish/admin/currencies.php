<?php
/* --------------------------------------------------------------
   $Id: currencies.php 899 2005-04-29 02:40:57Z hhgag $   

   XT-Commerce - community made shopping
   http://www.xt-commerce.com

   Copyright (c) 2003 XT-Commerce
   --------------------------------------------------------------
   based on: 
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(currencies.php,v 1.15 2003/05/02); www.oscommerce.com 
   (c) 2003	 nextcommerce (currencies.php,v 1.4 2003/08/14); www.nextcommerce.org

   Released under the GNU General Public License 
   --------------------------------------------------------------*/
   
define('HEADING_TITLE', 'Monedas');

define('TABLE_HEADING_CURRENCY_NAME', 'W&auml;hrung');
define('TABLE_HEADING_CURRENCY_CODES', 'Protecci&oacute;n');
define('TABLE_HEADING_CURRENCY_VALUE', 'Valor');
define('TABLE_HEADING_ACTION', 'Acci&oacute;n');
define('TABLE_HEADING_CURRENCY_STATUS', 'Estado');

define('TEXT_INFO_EDIT_INTRO', 'Por favor, haga todos los cambios necesarios');
define('TEXT_INFO_CURRENCY_TITLE', 'Nombre:');
define('TEXT_INFO_CURRENCY_CODE', 'C&oacute;digo de moneda seg&uacute;n ISO 4217:');
define('TEXT_INFO_CURRENCY_SYMBOL_LEFT', 'S&iacute;mbolo a la izquierda:');
define('TEXT_INFO_CURRENCY_SYMBOL_RIGHT', 'S&iacute;mbolo a la derecha:');
define('TEXT_INFO_CURRENCY_DECIMAL_POINT', 'Punto decimal:');
define('TEXT_INFO_CURRENCY_THOUSANDS_POINT', 'mil puntos:');
define('TEXT_INFO_CURRENCY_DECIMAL_PLACES', 'Los decimales:');
define('TEXT_INFO_CURRENCY_LAST_UPDATED', '&uacute;ltimo cambio:');
define('TEXT_INFO_CURRENCY_VALUE', 'Valor:');
define('TEXT_INFO_CURRENCY_EXAMPLE', 'Ejemplo:');
define('TEXT_INFO_INSERT_INTRO', 'Por favor, introduzca la nueva protecci&oacute;n con todos los datos relevantes');
define('TEXT_INFO_DELETE_INTRO', '&iquest;Est&aacute;s seguro de que quieres perder esa protecci&oacute;n');
define('TEXT_INFO_HEADING_NEW_CURRENCY', 'nuevo respeto');
define('TEXT_INFO_HEADING_EDIT_CURRENCY', 'Editar una salvaguarda');
define('TEXT_INFO_HEADING_DELETE_CURRENCY', 'Perder la protecci&oacute;n');
define('TEXT_INFO_SET_AS_DEFAULT', TEXT_SET_DEFAULT . ' (Se requiere la actualizaci&oacute;n manual de los tipos de cambio.)');
define('TEXT_INFO_CURRENCY_UPDATED', 'El tipo de cambio %s (%s) se actualiz&oacute; con &eacute;xito');

define('ERROR_REMOVE_DEFAULT_CURRENCY', 'Error: El ajuste predeterminado no debe ser eliminado. Por favor, defina una nueva versi&oacute;n est&aacute;ndar y repita el procedimiento.');
define('ERROR_CURRENCY_INVALID', 'Error: El tipo de cambio para %s (%s) no fue actualizado. &iquest;Es este un c&oacute;digo de moneda v&aacute;lido?');
define('WARNING_PRIMARY_SERVER_FAILED', 'El servicio primario "%s" no pudo determinar el tipo de cambio %s (%s) o no est&aacute; disponible. Se intenta de nuevo a trav&eacute;s del servicio secundario.');
?>