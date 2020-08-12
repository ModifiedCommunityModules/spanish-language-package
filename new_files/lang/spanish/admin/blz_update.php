<?php
/* --------------------------------------------------------------
   $Id: blz_update.php 3499 2012-08-23 09:12:40Z dokuman $

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   --------------------------------------------------------------

   Released under the GNU General Public License
   --------------------------------------------------------------*/

define('HEADING_TITLE', 'Actualizar c&oacute;digos bancarios alemanes');
define('BLZ_INFO_TEXT', '<p>Este formulario actualiza la tabla de los c&oacute;digos bancarios de Alemania para el software modified eCommerce Shopsoftware. Esta tabla la usa el sistema para comprobar la validez de la cuenta cuando hay un pedido. <br/>El Banco Alem&aacute;n actualiza cada 3 meses estos datos y la pone a disposici&oacute;n de los usuarios.</p><p><strong>Aviso de actualizaci&oacute;n:</strong></p><p>Para actualizar pulsa aqu&iacute; <a href="http://www.bundesbank.de/Redaktion/DE/Standardartikel/Kerngeschaeftsfelder/Unbarer_Zahlungsverkehr/bankleitzahlen_download.html" target="_blank"><strong>P&aacute;gina de descarga de Banco de alemania</strong></a></p>');
define('BLZ_LINK_NOT_GIVEN_TEXT', '<span class="messageStackError">No se ha asignado alg&uacute;n enlace para en enlace Web del fichero BLZ del Bundesbank alem&aacute;n!</span><br /><br />');
define('BLZ_LINK_INVALID_TEXT', '<span class="messageStackError">Enlace al Fichero BLZ no v&aacute;lido.<br/><br/>Solo est&aacute;n permitidos ficheros de texto de la p&aacute;gina WEB del Bundesbank (www.bundesbank.de)!</span><br /><br />');
define('BLZ_DOWNLOADED_COUNT_TEXT', 'Cantidad <u>claramente</u> reconocidas en c&oacute;digos de Bancos (sin duplicados!)');
define('BLZ_PHP_FILE_ERROR_TEXT', '<p><strong><span class="messageStackError">El par&aacute;metro PHP "allow_url_fopen" esta desactivado ("off"). Este es necesario para la PHP-funci&oacute;n. <i>file( )</i> Para la actualizaci&oacute;n autom&aacute;tica tienes que poner el par&aacute;metro en "on".</span></strong></p>');
define('BLZ_UPDATE_SUCCESS_TEXT', ' Los datos han sido actualizados en la Base De Datos con &eacute;xito!');
define('BLZ_UPDATE_ERROR_TEXT', 'Ha ocurrido un error!');
define('BLZ_LINK_ERROR_TEXT', '<span class="messageStackError">El enlace que has puesto, no existe! Por favor compru&eacute;balo de nuevo en la p&aacute;gina anterior.</span>');
define('BLZ_LINES_PROCESSED_TEXT',' Se han importado los c&oacute;digo de los bancos.');
define('BLZ_SOURCE_TEXT','Origen: ');
?>