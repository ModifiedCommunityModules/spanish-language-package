<?php
/* --------------------------------------------------------------
   $Id: backup.php 899 2005-04-29 02:40:57Z hhgag $   

   XT-Commerce - community made shopping
   http://www.xt-commerce.com

   Copyright (c) 2003 XT-Commerce
   --------------------------------------------------------------
   based on: 
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(backup.php,v 1.21 2002/06/15); www.oscommerce.com 
   (c) 2003	 nextcommerce (backup.php,v 1.4 2003/08/14); www.nextcommerce.org

   Released under the GNU General Public License 
   --------------------------------------------------------------*/

define('HEADING_TITLE', 'Copias de seguridad de la Base de datos'); 

define('TABLE_HEADING_TITLE', 'Nombre');
define('TABLE_HEADING_FILE_DATE', 'Fecha');
define('TABLE_HEADING_FILE_SIZE', 'Tama&ntilde;o');
define('TABLE_HEADING_ACTION', 'Acci&oacute;n');

define('TEXT_INFO_HEADING_NEW_BACKUP', 'Hacer copia');
define('TEXT_INFO_HEADING_RESTORE_LOCAL', 'Restaurar copia local');
define('TEXT_INFO_NEW_BACKUP', 'Por favor BAJO NING&uacute;N CONCEPTO se debe interrumpir el proceso de copia de seguridad. El proceso puede tardar algunos minutos.');
define('TEXT_INFO_UNPACK', '<br /><br />(una vez se hayan extraidos los ficheros del archivo)');
define('TEXT_INFO_RESTORE', 'Por favor BAJO NINGUN CONCEPTO se debe interrumpir el proceso de restauraci&oacute;n de la copia de seguridad.<br /><br />Dependiendo del tama&ntilde;o de la copia de seguridad, la restauraci&oacute;n puede tardar m&aacute;s tiempo o menos tiempo.!<br /><br />Por favor, si es posible usa el cliente mysql.<br /><br />Ejemplo:<br /><br /><b>mysql -h' . DB_SERVER . ' -u' . DB_SERVER_USERNAME . ' -p ' . DB_DATABASE . ' < %s </b> %s');
define('TEXT_INFO_RESTORE_LOCAL', 'Por favor BAJO NINGUN CONCEPTO se debe interrumpir el proceso de restauraci&oacute;n de la copia de seguridad.<br /><br />Dependiendo del tama&ntilde;o de la copia de seguridad, la restauraci&oacute;n puede tardar m&aacute;s tiempo o menos tiempo!');
define('TEXT_INFO_RESTORE_LOCAL_RAW_FILE', 'El fichero que se suba, debe de ser un fichero raw sql (solo texto).');
define('TEXT_INFO_DATE', 'Fecha:');
define('TEXT_INFO_SIZE', 'Tama&ntilde;o:');
define('TEXT_INFO_COMPRESSION', 'Comprimir:');
define('TEXT_INFO_USE_GZIP', 'Con GZIP');
define('TEXT_INFO_USE_ZIP', 'Con ZIP');
define('TEXT_INFO_USE_NO_COMPRESSION', 'Sin comprimir (Raw SQL)');
define('TEXT_INFO_DOWNLOAD_ONLY', 'Solo descargar (no guardar en el servidor)');
define('TEXT_INFO_BEST_THROUGH_HTTPS', 'Usar conexi&oacute;n segura HTTPS!');
define('TEXT_DELETE_INTRO', '&iquest;Est&aacute;s seguro de que quieres eliminar esta copia de seguridad?');
define('TEXT_NO_EXTENSION', 'Ninguna');
define('TEXT_BACKUP_DIRECTORY', 'Directorio de las copias de seguridad:');
define('TEXT_LAST_RESTORATION', '&Uacute;ltima restauraci&oacute;n:');
define('TEXT_FORGET', '(<u>olvidado</u>)');
define('TEXT_DELETE_INTRO', 'Estas seguro que quieres borrarla copia de seguridad?');

define('ERROR_BACKUP_DIRECTORY_DOES_NOT_EXIST', 'Error: El directorio de las copias de seguridad no &eacute;xiste.');
define('ERROR_BACKUP_DIRECTORY_NOT_WRITEABLE', 'Error: El directorio de las copias de seguridad esta protegido contra escritura.');
define('ERROR_DOWNLOAD_LINK_NOT_ACCEPTABLE', 'Error: El enlace de descarga no es v&aacute;lido.');

define('SUCCESS_LAST_RESTORE_CLEARED', 'La &uacute;ltima fecha de restauraci&oacute;n a sido borrada.');
define('SUCCESS_DATABASE_SAVED', 'La copia de seguridad de la base de dados se a creado con &eacute;xito.');
define('SUCCESS_DATABASE_RESTORED', 'La base de datos ha sido restaurada con &eacute;xito.');
define('SUCCESS_BACKUP_DELETED', 'La copia de seguridad a sido borrada.');
define('SUCCESS_BACKUP_UPLOAD', 'La copia de seguridad a sido enviada correctamente.');

//TEXT_COMPLETE_INSERTS
define('TEXT_COMPLETE_INSERTS', "<b>Nombre de campos completos 'INSERT's</b><br> - ser&aacute;n insertado en cada linea-INSERT (El tama&ntilde;o del Backup incrementar&aacute;)");

define('TEXT_INFO_TABLES_IN_BACKUP', '<br />' . "\n" .'<b>Tablas en esta copia:</b>' . "\n");
define('TEXT_INFO_NO_INFORMATION', 'No se encuentran informaciones');
//UTF-8 convert
define('TEXT_CONVERT_TO_UTF', 'Convertir Base de datos a UTF-8');
define('TEXT_IMPORT_UTF', 'Restaurar base de datos UTF-8');

//TEXT_REMOVE_COLLATE
define('TEXT_REMOVE_COLLATE', "<b> Sin codificaci&oacute;n de caracteres 'COLLATE' y 'DEFAULT CHARSET'</b><br> - La informaci&oacute;n sobre la codificaci&oacute;n de caracteres no ser&aacute;n insertadas. Pr&aacute;ctico al migrar con otros caracteres codificados en una base de datos.");

//TEXT_REMOVE_ENGINE
define('TEXT_REMOVE_ENGINE', "<b>sin motores de almacenamiento 'ENGINE'</b><br> - Las declaraciones del motor de almacenamiento (MyISAM,InnoDB) no est&aacute;n siendo insertadas.");

define('TEXT_IMPORT_UTF8_NOTICE', '<b>Atenci&oacute;n:</b> la base de datos se convierte a UTF-8.');
define('TEXT_INFO_CHARSET', 'Juego de caracteres:');

define('TEXT_TABLES_BACKUP_TYPE', '<b>Copia de seguridad</b><br> - &iquest;Qu&eacute; tablas deben guardarse?');
define('TEXT_BACKUP_ALL', 'Todas las mesas');
define('TEXT_BACKUP_CUSTOM', 'Tablas seleccionadas');
define('TEXT_TABLES_TO_BACKUP', '<b>Las siguientes tablas deben ser guardadas:</b>');
?>