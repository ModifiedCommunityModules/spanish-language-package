<?php
	// ImageSlider - (c) Copyright 2008-2016 by Hetfield - www.MerZ-IT-SerVice.de
	// only original from https://www.merz-it-service.de/Installation-ImageSlider-v1-5::74.html
		
	define('HEADING_TITLE_IMAGESLIDERS', 'ImageSlider v2.01 <small style="font-weight:normal;font-size:0.6em;">&copy; 2008-2016 by <a href="http://www.merz-it-service.de/" target="_blank">Hetfield</a></small>');
	define('HEADING_SUBTITLE_IMAGESLIDERS', '<a href="https://www.merz-it-service.de/" target="_blank"><img src="'.DIR_WS_EXTERNAL.'mits_imageslider/images/merz-it-service.png" border="0" alt="" style="display:block;max-width:100%;height:auto;max-height:40px;margin-top:6px;margin-bottom:6px;" /></a>');
	define('TABLE_HEADING_IMAGESLIDERS', 'ImageSlider');
	define('TABLE_HEADING_SLIDERGROUP', 'ImageSlider-Gruppe');
	define('TABLE_HEADING_SORTING', 'Clasificaci&oacute;n');
	define('TABLE_HEADING_STATUS', 'Estado');
	define('TABLE_HEADING_ACTION', 'Acci&oacute;n');
	define('TEXT_HEADING_NEW_IMAGESLIDER', 'Nueva imagen');
	define('TEXT_HEADING_EDIT_IMAGESLIDER', 'Editar la imagen');
	define('TEXT_HEADING_DELETE_IMAGESLIDER', 'Eliminar la imagen');
	define('TEXT_IMAGESLIDERS', 'Foto:');
	define('TEXT_DATE_ADDED', 'a&ntilde;adido:');
	define('TEXT_LAST_MODIFIED', '&uacute;ltimo cambio en:');
	define('TEXT_IMAGE_NONEXISTENT', 'IMAGEN NO DISPONIBLE');
	define('TEXT_NEW_INTRO', 'Por favor, inserte la nueva imagen con todos los datos relevantes.');
	define('TEXT_EDIT_INTRO', 'Por favor, haga todos los cambios necesarios');
	define('TEXT_IMAGESLIDERS_TITLE', 'T&iacute;tulo de piel Bild:');
	define('TEXT_IMAGESLIDERS_NAME', 'T&iacute;tulo de piel Bild:');
	define('TEXT_IMAGESLIDERS_IMAGE', 'Foto:');
	define('TEXT_IMAGESLIDERS_URL', 'Imagen de enlace: ');
	define('TEXT_TARGET', 'Ventana del objetivo:');
	define('TEXT_TYP', 'Tipo de enlace:');
	define('TEXT_URL', 'Direcci&oacute;n del enlace:');
	define('NONE_TARGET', 'No fijes un objetivo');
	define('TARGET_BLANK', '_blank');
	define('TARGET_TOP', '_top');
	define('TARGET_SELF', '_self');
	define('TARGET_PARENT', '_parent');
	define('TYP_PRODUCT', 'Enlace al producto (por favor, introduzca s&oacute;lo el productID en la direcci&oacute;n del enlace)');
	define('TYP_CATEGORIE', 'Enlace a la categor&iacute;a (por favor, introduzca s&oacute;lo el catID en la direcci&oacute;n del enlace)');
	define('TYP_CONTENT', 'Enlace a la p&aacute;gina de contenido (por favor, introduzca s&oacute;lo el coID en la direcci&oacute;n del enlace)');
	define('TYP_INTERN', 'Enlace interno de la tienda (por ejemplo, account.php o newsletter.php)');
	define('TYP_EXTERN', 'Enlace externo (z.B. http://www.example.org)');
	define('TEXT_IMAGESLIDERS_DESCRIPTION', 'Descripci&oacute;n de la imagen:');
	define('TEXT_DELETE_INTRO', '&iquest;Est&aacute;s seguro de que quieres deshacerte de esta foto?');
	define('TEXT_DELETE_IMAGE', '&iquest;Borrar la foto tambi&eacute;n?');
	define('ERROR_DIRECTORY_NOT_WRITEABLE', 'Error: El directorio %s est&aacute; protegido contra escritura. Por favor, corrija los derechos de acceso a este directorio!');
	define('ERROR_DIRECTORY_DOES_NOT_EXIST', 'Error: El directorio %s no existe!');
	define('TEXT_DISPLAY_NUMBER_OF_IMAGESLIDERS', '<b>%d</b> a <b>%d</b> (de un total de <b>%d</b> entradas de ImageSlider)');
	define('IMAGE_ICON_STATUS_GREEN', 'Activo');
	define('IMAGE_ICON_STATUS_GREEN_LIGHT', 'Activar');
	define('IMAGE_ICON_STATUS_RED', 'No est&aacute; activo');
	define('IMAGE_ICON_STATUS_RED_LIGHT', 'Desactivar');
	define('MITS_ACTIVE','Activar');
	define('MITS_NOTACTIVE','Desactivar');
	define('TEXT_IMAGESLIDERS_GROUP', 'ImageSlider-Gruppe:'); 
    define('TEXT_IMAGESLIDERS_NEW_GROUP', 'Seleccione el grupo ImageSlider deseado en el cuadro desplegable (si est&aacute; disponible) o introduzca un nuevo grupo ImageSlider en el campo de texto que aparece a continuaci&oacute;n.'); 
    define('TEXT_IMAGESLIDERS_NEW_GROUP_NOTE', 'Para que un Deslizador de Imagen se muestre en la plantilla, &eacute;sta debe ser extendida.<br/>Ejemplo: El grupo ImageSlider es mits_imageslider, entonces este ImageSlider con la variable Smarty {$MITS_IMAGESLIDER} puede ser mostrado en la posici&oacute;n deseada en el index.html de la plantilla'); 
	define('ERROR_IMAGESLIDER_NAME_REQUIRED', 'Error: Se requiere un t&iacute;tulo.');
	define('ERROR_IMAGESLIDER_GROUP_REQUIRED', 'Error: Se requiere un grupo ImageSlider.');
	define('ERROR_IMAGESLIDER_IMAGE_REQUIRED', 'Error: Se necesita una imagen, por supuesto.');
?>