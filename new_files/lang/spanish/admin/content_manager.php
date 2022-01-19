<?php
/* --------------------------------------------------------------
   $Id: content_manager.php 899 2005-04-29 02:40:57Z hhgag $   

   XT-Commerce - community made shopping
   http://www.xt-commerce.com

   Copyright (c) 2003 XT-Commerce
   --------------------------------------------------------------
   based on:
   (c) 2003  nextcommerce (content_manager.php,v 1.8 2003/08/25); www.nextcommerce.org
   
   Released under the GNU General Public License 
   --------------------------------------------------------------*/
   
 defined('HEADING_TITLE') OR define('HEADING_TITLE','Gestor de contenidos');
 define('HEADING_CONTENT','Seiten Content');
 define('HEADING_PRODUCTS_CONTENT','Contenido del art&iacute;culo');
 define('HEADING_CONTENT_MANAGER_CONTENT','El contenido del sitio');
 define('HEADING_EMAIL_CONTENT','Contenido del correo electr&oacute;nico');
 define('TABLE_HEADING_CONTENT_ID','ID');
 define('TABLE_HEADING_CONTENT_TITLE','Titel');
 define('TABLE_HEADING_CONTENT_FILE','Datei');
 define('TABLE_HEADING_CONTENT_STATUS','Visible en la caja');
 define('TABLE_HEADING_CONTENT_BOX','Caja');
 define('TABLE_HEADING_PRODUCTS_ID','ID');
 define('TABLE_HEADING_PRODUCTS','Art&iacute;culo');
 define('TABLE_HEADING_PRODUCTS_CONTENT_ID','ID');
 define('TABLE_HEADING_CONTENT_MANAGER_ID','ID');
 define('TABLE_HEADING_CONTENT_MANAGER','Seiten');
 define('TABLE_HEADING_CONTENT_MANAGER_CONTENT_ID','ID');
 define('TABLE_HEADING_EMAIL_ID','ID');
 define('TABLE_HEADING_EMAIL','E-Mail');
 define('TABLE_HEADING_LANGUAGE','Idioma');
 define('TABLE_HEADING_CONTENT_NAME','Nombre/Nombre de archivo');
 define('TABLE_HEADING_CONTENT_LINK','Enlace');
 define('TABLE_HEADING_CONTENT_HITS','Visita');
 define('TABLE_HEADING_CONTENT_GROUP','coID');
 define('TABLE_HEADING_CONTENT_SORT','Ordene');
 defined('TEXT_YES') OR define('TEXT_YES','S&iacute;');
 defined('TEXT_NO') OR define('TEXT_NO', 'No');
 define('TABLE_HEADING_CONTENT_ACTION','Acci&oacute;n');
 defined('TEXT_DELETE') OR define('TEXT_DELETE','L&ouml;schen');
 define('TEXT_EDIT','Edita');
 define('TEXT_PREVIEW','Vista previa');
 define('CONFIRM_DELETE','&iquest;Realmente quieres tirar el contenido?');
 define('CONTENT_NOTE','El contenido marcado con <span class="col-red">*</span> pertenece al sistema y no puede ser borrado!');

 
 // edit
 define('TEXT_LANGUAGE','Idioma:');
 define('TEXT_STATUS','Visible:');
 define('TEXT_STATUS_DESCRIPTION','Mostrar el enlace en el cuadro de informaci&oacute;n?');
 define('TEXT_TITLE','T&iacute;tulo:');
 define('TEXT_TITLE_FILE','T&iacute;tulo/Nombre de archivo:');
 define('TEXT_SELECT','-Por favor, seleccione-');
 define('TEXT_HEADING','Pie de foto:');
 define('TEXT_CONTENT','Texto:');
 define('TEXT_UPLOAD_FILE','Subir archivo:');
 define('TEXT_UPLOAD_FILE_LOCAL','(de su sistema local)');
 define('TEXT_CHOOSE_FILE','Seleccione el archivo:');
 define('TEXT_CHOOSE_FILE_DESC','Tambi&eacute;n puede seleccionar un archivo ya utilizado de la lista.');
 defined('TEXT_NO_FILE') OR define('TEXT_NO_FILE','Selecci&oacute;n Borrar');
 define('TEXT_CHOOSE_FILE_SERVER','(Si ha guardado sus archivos usted mismo a trav&eacute;s de FTP en su servidor <i>(media/content)</i>, puedes seleccionar el archivo aqu&iacute;.');
 define('TEXT_CURRENT_FILE','Archivo actual:');
 define('TEXT_FILE_DESCRIPTION','<b>Informaci&oacute;n:</b><br />Tambi&eacute;n tienes la opci&oacute;n de <b>.html</b> o <b>.htm</b> Incluir el archivo como contenido.<br /> Si seleccionas o subes un archivo, el texto en el campo de texto ser&aacute; ignorado.<br /><br />');
 define('ERROR_FILE','Formato de archivo incorrecto (s&oacute;lo .html o .htm)');
 define('ERROR_TITLE','Por favor, introduzca un t&iacute;tulo');
 define('ERROR_COMMENT','Por favor, introduzca una descripci&oacute;n del archivo!');
 define('TEXT_FILE_FLAG','Box:');
 define('TEXT_PARENT','Documento principal:');
 define('TEXT_PARENT_DESCRIPTION','Asignar este documento como subcontenido');
 define('TEXT_PRODUCT','Art&iacute;culo:');
 define('TEXT_LINK','Enlace:');
 defined('TEXT_SORT_ORDER') OR define('TEXT_SORT_ORDER','Clasificaci&oacute;n:');
 define('TEXT_GROUP','coID:');
 define('TEXT_GROUP_DESC','Con esta identificaci&oacute;n se enlazan los mismos temas de diferentes idiomas entre s&iacute;.');
 
 define('TEXT_CONTENT_DESCRIPTION','Con este gestor de contenidos tienes la posibilidad de a&ntilde;adir cualquier tipo de archivo a un art&iacute;culo. <br />Por ejemplo, descripciones de art&iacute;culos, manuales, hojas de datos t&eacute;cnicos, horproben, etc...<br /> Estos elementos se muestran en la vista detallada del art&iacute;culo.<br /><br />');
  define('TEXT_CONTENT_MANAGER_CONTENT', 'Contenido:');
 define('TEXT_CONTENT_MANAGER_DESCRIPTION','Con este gestor de contenidos puede a&ntilde;adir cualquier tipo de archivo a una p&aacute;gina de contenidos.<br />Por ejemplo, PDF para textos legales, etc...<br />Estos elementos se mostrar&aacute;n en la p&aacute;gina de contenidos.<br /><br />');
 define('TEXT_EMAIL_CONTENT', 'Contenido del correo electr&oacute;nico:');
 define('TEXT_EMAIL_DESCRIPTION', 'Con este gestor de contenidos puede a&ntilde;adir cualquier tipo de archivo como adjunto al correo electr&oacute;nico.<br />Por ejemplo, PDF para textos legales, etc...<br /><br />');
 define('TEXT_FILENAME','Usar el archivo:');
 define('TEXT_FILE_DESC','Descripci&oacute;n:');
 define('USED_SPACE','El espacio de almacenamiento usado:');
 define('TABLE_HEADING_CONTENT_FILESIZE','Tama&ntilde;o del archivo');
 define('TEXT_CONTENT_NOINDEX','noindex (El robot de b&uacute;squeda no debe incluir el sitio web en el &iacute;ndice)');
 define('TEXT_CONTENT_NOFOLLOW','nofollow (El robot de b&uacute;squeda puede tomar el sitio web, pero no debe seguir los hiperv&iacute;nculos de la p&aacute;gina).');
 define('TEXT_CONTENT_NOODP','noodp (El motor de b&uacute;squeda no debe utilizar los textos descriptivos de DMOZ (ODP) en la p&aacute;gina de resultados)');
 define('TEXT_CONTENT_META_ROBOTS','meta-robots');
 
 define('TABLE_HEADING_STATUS_ACTIVE', 'Estado');
 define('TEXT_STATUS_ACTIVE', 'Estado activo:');    
 define('TEXT_STATUS_ACTIVE_DESCRIPTION', 'Activar el contenido?');
  
 define('TEXT_CONTENT_DOUBLE_GROUP_INDEX', '&iexcl;Doble &iacute;ndice de grupo de contenido! Por favor, salva de nuevo. Esto resolver&aacute; autom&aacute;ticamente el problema!');
 defined('TEXT_CHARACTERS') OR define('TEXT_CHARACTERS','Se&ntilde;ales');
 define('TEXT_KEEP_FILENAME', 'Mantener el nombre del archivo:');
 ?>