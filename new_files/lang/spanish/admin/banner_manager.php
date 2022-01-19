<?php
/* --------------------------------------------------------------
   $Id: banner_manager.php 5100 2013-07-17 13:25:47Z Tomcraft $   

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   --------------------------------------------------------------
   based on: 
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(banner_manager.php,v 1.25 2003/02/16); www.oscommerce.com 
   (c) 2003	 nextcommerce (banner_manager.php,v 1.4 2003/08/14); www.nextcommerce.org
   (c) 2006 xt:Commerce; www.xt-commerce.com

   Released under the GNU General Public License 
   --------------------------------------------------------------*/

define('HEADING_TITLE', 'Administraci&oacute;n de publicidad (Banner)');

define('TABLE_HEADING_BANNERS', 'Banner');
define('TABLE_HEADING_GROUPS', 'Grupo');
define('TABLE_HEADING_STATISTICS', 'Vistas / clics');
define('TABLE_HEADING_STATUS', 'Estado');
define('TABLE_HEADING_ACTION', 'Acci&oacute;n');
define('TABLE_HEADING_LANGUAGE', 'Idioma');
define('TABLE_HEADING_SORT', 'Clasificaci&oacute;n');
define('TABLE_HEADING_IMAGE', 'Imagen');

define('TEXT_BANNERS_TITLE', 'T&iacute;tulo del Banner:'); 
define('TEXT_BANNERS_URL', 'Banner-URL:'); 
define('TEXT_BANNERS_URL_NOTE', 'Destino del enlace al pulsar sobre el Banner.'); 
define('TEXT_BANNERS_REDIRECT', 'Vinculaci&oacute;n directa:'); 
define('TEXT_BANNERS_REDIRECT_NOTE', 'El banner se enlazar&aacute; directamente a la URL del banner dado y no usando "redirect.php?action=banner&goto=xxx".<br /><strong>CAUCI&Oacute;N:</strong> &iexcl;Los "Displays / Clics" ya no pueden ser contados si el "Direct Linking" est&aacute; activado!');
define('TEXT_BANNERS_GROUP', 'Grupo del Banner:'); 
define('TEXT_BANNERS_NEW_GROUP', 'Elige (en caso de que existiese) el grupo a cual pertenece el Banner o introduce abajo un nuevo grupo para este Banner.'); 
define('TEXT_BANNERS_NEW_GROUP_NOTE', 'Para que se pueda mostrar un Banner en un Template, hay que modificar el Template.<br/>Ejemplo: Si el Grupo del Banner fuese banner, habr&iacute;a que a&ntilde;adir en la index.html del template: {$BANNER} para que sea visible'); 
define('TEXT_BANNERS_IMAGE', 'Imagen (Fichero):');
define('TEXT_BANNERS_IMAGE_MOBILE', 'Imagen m&oacute;vil:');  
define('TEXT_BANNERS_IMAGE_LOCAL', 'Elige la imagen deseada pulsando en "Buscar" o inserte abajo la ruta en donde se encuentra el directorio local de Tu servidor &quot;' . DIR_FS_CATALOG_IMAGES.'banner/&quot; an.<br /><strong>Tipos de ficheros permitidos:</strong> jpg, jpeg, jpe, gif, png, bmp, tiff, tif, bmp, swf, cab'); 
define('TEXT_BANNERS_IMAGE_TARGET', 'Destino de la imagen (Guardar en):'); 
define('TEXT_BANNERS_HTML_TEXT', 'Texto HTML:');
define('TEXT_BANNERS_HTML_TEXT_NOTE', 'Aqu&iacute; se puede poner el c&oacute;digo HTML de un afiliado para el muestreo del Banner.');
define('TEXT_BANNERS_EXPIRES_ON', 'V&aacute;lido hasta:');
define('TEXT_BANNERS_OR_AT', ', o en');
define('TEXT_BANNERS_IMPRESSIONS', 'Impresiones/Mostrar.');
define('TEXT_BANNERS_SCHEDULED_AT', 'V&aacute;lido a partir del:');
define('TEXT_BANNERS_BANNER_NOTE', '<b>Aviso sobre los Banner:</b><ul><li>Puedes usar Banner de im&aacute;genes o Banner de c&oacute;digo HTML, las dos opciones juntas no son posibles.</li><li>Si usas las 2 opciones a la vez, solo se mostrar&aacute; la opci&oacute;n con el c&oacute;digo HTML.</li></ul>');
define('TEXT_BANNERS_INSERT_NOTE', '<b>Aviso:</b><ul><li>El directorio de las im&aacute;genes no puede estar protegido contra escritura!</li><li>No rellenes el campo \'Destino de im&aacute;genes (Guardar hacia)\', si no quieres enviar im&aacute;genes al servidor (p.Ej. si la imagen ya se encuentra en el servidor).</li><li>El \'El campo de destino de la imagen (Guardar en)\' tiene que ser un directorio existenten con \'/\' al final (p.Ej. banners/).</li></ul>'); 
define('TEXT_BANNERS_EXPIRCY_NOTE', '<b>Aviso sobre validez:</b><ul><li>Solo rellenar un campo!</li><li>En caso de que el Banner este activo sin limite de tiempo, deja estos campos vac&iacute;os.</li></ul>');
define('TEXT_BANNERS_SCHEDULE_NOTE', '<b>Aviso sobre v&aacute;lido desde:</b><ul><li>Si usas esta opci&oacute;n, el Banner estar&aacute; activo a partir de la fecha configurada.</li><li>Todos los Banner con esta funci&oacute;n, se mostrar&aacute;n desactivados hasta que se activen.</li></ul>');

define('TEXT_BANNERS_DATE_ADDED', 'A&ntilde;adido el:');
define('TEXT_BANNERS_SCHEDULED_AT_DATE', 'Activo desde: <b>%s</b>');
define('TEXT_BANNERS_EXPIRES_AT_DATE', 'Activo hasta el : <b>%s</b>');
define('TEXT_BANNERS_EXPIRES_AT_IMPRESSIONS', 'V&aacute;lido hasta: <b>%s</b> impresiones/mostrar');
define('TEXT_BANNERS_STATUS_CHANGE', 'Estado modificado: %s');

define('TEXT_BANNERS_DATA', 'D<br />A<br />T<br />T<br />S');
define('TEXT_BANNERS_LAST_3_DAYS', '&uacute;ltimos 3 d&iacute;as');
define('TEXT_BANNERS_BANNER_VIEWS', 'Visitas banner');
define('TEXT_BANNERS_BANNER_CLICKS', 'Bannerclics');
define('TEXT_BANNERS_SORT', 'Clasificaci&oacute;n:');
define('TEXT_BANNERS_SORT_NOTE', 'La orden s&oacute;lo afecta a los deslizadores din&aacute;micos y no a los banners est&aacute;ticos.');

define('TEXT_INFO_DELETE_INTRO', 'Estas seguro que quieres borrar este banner?');
define('TEXT_INFO_DELETE_IMAGE', 'Borrar imagen del banner');

define('SUCCESS_BANNER_INSERTED', 'Se a a&ntilde;adido el banner con &eacute;xito.');
define('SUCCESS_BANNER_UPDATED', 'El banner ha sido actualizado con &eacute;xito.');
define('SUCCESS_BANNER_REMOVED', 'El banner ha sido borrado con &eacute;xito.');
define('SUCCESS_BANNER_STATUS_UPDATED', 'En estado del banner ha sido actualizado.');

define('ERROR_BANNER_TITLE_REQUIRED', 'Error: Se necesita un t&iacute;tulo para el banner.');
define('ERROR_BANNER_GROUP_REQUIRED', 'Error: Hay que elegir/crear un grupo de banner.');
define('ERROR_BANNER_IMAGE_HTML_REQUIRED', 'Error: Es necesario incluir una imagen para el banner.');
define('ERROR_IMAGE_DIRECTORY_DOES_NOT_EXIST', 'Error: El directorio %s no existe.');
define('ERROR_IMAGE_DIRECTORY_NOT_WRITEABLE', 'Error: El directorio %s no tiene permiso de escritura.');
define('ERROR_IMAGE_DOES_NOT_EXIST', 'Error: Imagen no existe.');
define('ERROR_IMAGE_IS_NOT_WRITEABLE', 'Error: No se puede borrar la imagen.');
define('ERROR_UNKNOWN_STATUS_FLAG', 'Error: Estado desconocido del Flag.');

define('ERROR_GRAPHS_DIRECTORY_DOES_NOT_EXIST', 'Error: El directorio \'graphs\' no existe! Por favor, crea el directorio \'graphs\' en el directorio \'images\'.');
define('ERROR_GRAPHS_DIRECTORY_NOT_WRITEABLE', 'Error: El directorio \'graphs\' esta protegido contra escritura!');

// BOF - Tomcraft - 2009-11-06 - Use variable TEXT_BANNERS_DATE_FORMAT
define('TEXT_BANNERS_DATE_FORMAT', 'AAAA-MM-DD');
// EOF - Tomcraft - 2009-11-06 - Use variable TEXT_BANNERS_DATE_FORMAT

define('TEXT_BANNERS_LANGUAGE', 'Idioma:');
define('TEXT_BANNERS_LANGUAGE_NOTE', 'Para que idioma quieres que aparezca el banner?');
define('TEXT_NO_FILE', '-- no hay archivo --');
?>