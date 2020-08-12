<?php
/* --------------------------------------------------------------
   $Id: modules.php 2957 2012-05-31 11:55:56Z Tomcraft1980 $

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   --------------------------------------------------------------
   based on:
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(modules.php,v 1.8 2002/04/09); www.oscommerce.com
   (c) 2003 nextcommerce (modules.php,v 1.5 2003/08/14); www.nextcommerce.org
   (c) 2006 XT-Commerce (modules.php 899 2005-04-29)

   Released under the GNU General Public License
   --------------------------------------------------------------*/

define('HEADING_TITLE_MODULES_PAYMENT', 'Formas de pago');
define('HEADING_TITLE_MODULES_SHIPPING', 'Tipos de env&iacute;o');
define('HEADING_TITLE_MODULES_ORDER_TOTAL', 'M&oacute;dulo Order Total');

define('TABLE_HEADING_MODULES', 'M&oacute;dulos');
define('TABLE_HEADING_SORT_ORDER', 'Orden clasificaci&oacute;n');
define('TABLE_HEADING_STATUS', 'Estado');
define('TABLE_HEADING_ACTION', 'Acci&oacute;n');

define('TEXT_MODULE_DIRECTORY', 'Directorio de m&oacute;dulos:');
define('TEXT_MODULE_FILE_MISSING', '<b>Falta el archivo de idioma "%s", No se puede mostrar el m&oacute;dulo "%s"!</b>');
define('TABLE_HEADING_FILENAME','Nombre del m&oacute;dulo (para uso interno)');

// BOF - Tomcraft - 2009-10-03 - Paypal Express Modul
define('TEXT_INFO_DELETE_PAYPAL', 'Si borras este m&oacute;dulo, se borrar&aacute;n todas las transacciones hechas hasta ahora!<br />Si quieres conservar estos datos, pulsa cancelar y solo desactiva el m&oacute;dulo. (Modulo activado = False)');
// EOF - Tomcraft - 2009-10-03 - Paypal Express Modul
define('TABLE_HEADING_MODULES_INSTALLED', 'M&oacute;dulos instalados');
define('TABLE_HEADING_MODULES_PREFERRED', 'M&oacute;dulos preferidos');
define('TABLE_HEADING_MODULES_NOT_INSTALLED', 'M&oacute;dulos disponibles');
define('TEXT_MODULE_UPDATE_NEEDED', 'Estos m&oacute;dulos han sido actualizados, y necesitan una actualizaci&oacute;n de la base de datos. Para ello guarda la configuraci&oacute;n y instala el m&oacute;dulo otra vez.');
?>