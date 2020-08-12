<?php
/*
  $Id: backup.php,v 1.16 2002/03/16 21:30:02 hpdl Exp $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2002 osCommerce

  Released under the GNU General Public License
*/

define('HEADING_TITLE', 'Administraci&oacute;n de copias de seguridad de bases de datos');

define('TEXT_INFO_DO_BACKUP', 'Se esta creando una copia de seguridad de la base de datos!');
define('TEXT_INFO_DO_BACKUP_OK', 'La copia de seguridad de la base de datos ha sido creada correctamente!');
define('TEXT_INFO_DO_GZIP', 'Comprimiendo el fichero de copia de seguridad!');
define('TEXT_INFO_WAIT', 'Por favor espera!');

define('TEXT_INFO_DO_RESTORE', 'Restaurando la Base de datos!');
define('TEXT_INFO_DO_RESTORE_OK', 'La Base de Datos ha sido restaurada con &eacute;xito!');
define('TEXT_INFO_DO_GUNZIP', 'Descomprimiendo la base de datos!');

define('ERROR_BACKUP_DIRECTORY_DOES_NOT_EXIST', 'Error: El directorio para la copia de seguridad no existe. Por favor arregla el fallo en la configure.php.');
define('ERROR_BACKUP_DIRECTORY_NOT_WRITEABLE', 'Error: No se puede escribir en el directorio donde se hacen las copias de seguridad.');
define('ERROR_DOWNLOAD_LINK_NOT_ACCEPTABLE', 'Error: El enlace de descarga no es v&aacute;lido.');
define('ERROR_DECOMPRESSOR_NOT_AVAILABLE', 'Error: Ning&uacute;n descomprimidor disponible.');
define('ERROR_UNKNOWN_FILE_TYPE', 'Error: Tipo de fichero desconocido.');
define('ERROR_RESTORE_FAILES', 'Error: Restauraci&oacute;n fallida.');
define('ERROR_DATABASE_SAVED', 'Error: La base de datos no se pudo guardar.');
define('ERROR_TEXT_PATH', 'Error: no se pudo encontrar el directorio a mysqldump!');

define('SUCCESS_LAST_RESTORE_CLEARED', 'La &uacute;ltima fecha de recuperaci&oacute;n ha sido borrada con &eacute;xito.');
define('SUCCESS_DATABASE_SAVED', 'La base de datos a sido guardada con &eacute;xito.');
define('SUCCESS_DATABASE_RESTORED', 'La base de datos a sido restaurada con &eacute;xito.');
define('SUCCESS_BACKUP_DELETED', 'La copia ha sido borrada con &eacute;xito.');

define('TEXT_BACKUP_UNCOMPRESSED', 'La copia de seguridad a sido descomprimida: ');

define('TEXT_SIMULATION', '<br>(Simulaci&oacute;n con el fichero Log)');

?>