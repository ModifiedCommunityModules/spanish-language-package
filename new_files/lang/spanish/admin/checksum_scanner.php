<?php
/* --------------------------------------------------------------
   $Id: checksum_scanner.php (language de) 2007-10-02 kunigunde $

   Self-Commerce 
   http://www.self-commerce.de

   Copyright (c) 2007 Self-Commerce
   --------------------------------------------------------------
   based on:
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(manufacturers.php,v 1.14 2003/02/16); www.oscommerce.com
   (c) 2003 nextcommerce (manufacturers.php,v 1.4 2003/08/14); www.nextcommerce.org
   (c) 2006 xt:Commerce; www.xt-commerce.com

   Released under the GNU General Public License
   --------------------------------------------------------------*/

define('MODULE_CHECKSUM_SCANNER_TEXT_TITLE','Esc&aacute;ner Checksum'); 
define('MODULE_CHECKSUM_SCANNER_TEXT_DESCRIPTION','Vigilar los archivos en busca de cambios');
define('MODULE_CHECKSUM_SCANNER_TEXT_LONG_DESCRIPTION','<b>Declaraci&oacute;n sobre este m&oacute;dulo:</b><br />Este esc&aacute;ner crea una suma de comprobaci&oacute;n para cada archivo CSS, HTML, JS y PHP de la tienda, cuando se hace clic en &quot;Reset&quot;.<br />Entonces siempre se tiene la posibilidad con &quot;Display&quot; de determinar si los archivos han cambiado desde la &uacute;ltima creaci&oacute;n de las sumas de comprobaci&oacute;n o no. <Esto le permite controlar si los archivos han cambiado sin que usted mismo haya editado nada.'); 

define('MODULE_CHECKSUM_SCANNER_BUTTON_SHOW','Anuncios'); 
define('MODULE_CHECKSUM_SCANNER_TOOLTIP_SHOW','Comprobando los archivos para ver si hay cambios'); 

define('MODULE_CHECKSUM_SCANNER_BUTTON_RESET','Reiniciar'); 
define('MODULE_CHECKSUM_SCANNER_TOOLTIP_RESET','Restablecer las sumas de control'); 

define('MODULE_CHECKSUM_SCANNER_RESET1','El '); 
define('MODULE_CHECKSUM_SCANNER_RESET2',' Las sumas de prueba se han restablecido!'); 
define('MODULE_CHECKSUM_SCANNER_RESET_ERROR1','Se trata de un error de la base de datos al reiniciar el ');
define('MODULE_CHECKSUM_SCANNER_RESET_ERROR2',' Las sumas de los cheques se produjeron!');
define('MODULE_CHECKSUM_SCANNER_SHOW_ERROR1','Hay un error en la base de datos al leer el ');
define('MODULE_CHECKSUM_SCANNER_SHOW_ERROR2',' Las sumas de los cheques se produjeron!');

define('MODULE_CHECKSUM_SCANNER_TH_STATUS','Estado'); 
define('MODULE_CHECKSUM_SCANNER_TH_FILE','Archivo');
define('MODULE_CHECKSUM_SCANNER_TH_SIZE','Tama&ntilde;o[B]');
define('MODULE_CHECKSUM_SCANNER_TH_LASTSIZE','El &uacute;ltimo tama&ntilde;o[B]');
define('MODULE_CHECKSUM_SCANNER_TH_FILEDATE','Fecha del archivo');
define('MODULE_CHECKSUM_SCANNER_TH_DATEADDED','A&ntilde;adido');
define('MODULE_CHECKSUM_SCANNER_TH_LASTCHECK','&Uacute;ltima comprobaci&oacute;n');

define('MODULE_CHECKSUM_SCANNER_STATUS_DELETE','El archivo fue eliminado'); 
define('MODULE_CHECKSUM_SCANNER_STATUS_CHANGE','El archivo fue cambiado'); 

define('MODULE_CHECKSUM_SCANNER_STATUS_OK','OK'); 
define('MODULE_CHECKSUM_SCANNER_MAKE_SELECTION','Por favor, haga su elecci&oacute;n...'); 