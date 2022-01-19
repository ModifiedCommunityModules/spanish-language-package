<?php
/* -----------------------------------------------------------------------------------------
   $Id: image_processing_step.php 2992 2012-06-07 16:59:49Z web28 $

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   -----------------------------------------------------------------------------------------
   based on:
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(cod.php,v 1.28 2003/02/14); www.oscommerce.com
   (c) 2003	 nextcommerce (invoice.php,v 1.6 2003/08/24); www.nextcommerce.org
   (c) 2006 XT-Commerce (image_processing_step.php 950 2005-05-14; www.xt-commerce.com
   --------------------------------------------------------------
   Contribution
   image_processing_step (step-by-step Variante B) by INSEH 2008-03-26

   new javascript reload / only missing image/ max images  by web28 2011-03-17

   Released under the GNU General Public License
   ---------------------------------------------------------------------------------------*/

define('MODULE_STEP_IMAGE_PROCESS_TEXT_DESCRIPTION', 'Todas las im&aacute;genes de estos directorios<br /><br />
/images/product_images/popup_images/<br />
/images/product_images/info_images/<br />
/images/product_images/midi_images/<br />
/images/product_images/thumbnail_images/ <br /> <br /> est&aacute;n siendo procesados.<br /> <br />
/images/product_images/mini_images/ <br /> 
/images/categories/ <br /> 
/images/manufacturers/ <br /> 
/images/banner/ <br />
<br /> se est&aacute;n procesando.<br /> <br />
Para ello, el gui&oacute;n utiliza s&oacute;lo un n&uacute;mero limitado de im&aacute;genes de %s y se llama a s&iacute; mismo despu&eacute;s de nuevo.<br /> <br />');
define('MODULE_STEP_IMAGE_PROCESS_TEXT_TITLE', 'Procesamiento de im&aacute;genes - im&aacute;genes de productos');
define('MODULE_STEP_IMAGE_PROCESS_STATUS_DESC','Estado del m&oacute;dulo');
define('MODULE_STEP_IMAGE_PROCESS_STATUS_TITLE','Estado');
define('IMAGE_EXPORT','Pulse Start para iniciar el procesamiento. Este proceso puede tomar alg&uacute;n tiempo - &iexcl;no lo interrumpa en ning&uacute;n caso!');
define('IMAGE_EXPORT_TYPE','<hr noshade><strong>Procesamiento por lotes:</strong>');
define('IMAGE_STEP_INFO','Im&aacute;genes creadas: ');
define('IMAGE_STEP_INFO_READY',' - &iexcl;Acabado!');
define('TEXT_MAX_IMAGES','im&aacute;genes m&aacute;ximas para cada recarga');
define('TEXT_PROCESS_TYPE', '<b>Tratamiento de im&aacute;genes:</b>');
define('TEXT_SETTINGS', '<b>Ajustes:</b>');
define('TEXT_LOGGING', '<b>Registro:</b>');
define('TEXT_ONLY_MISSING_IMAGES','Crear s&oacute;lo las im&aacute;genes que faltan');
define('MODULE_STEP_READY_STYLE_TEXT', '<div class="ready_info">%s</div>');
define('MODULE_STEP_READY_STYLE_BACK', MODULE_STEP_READY_STYLE_TEXT);
define('TEXT_LOWER_FILE_EXT','Convierte la extensi&oacute;n del archivo a min&uacute;sculas. Ejemplo: <b> JPG -> jpg</b>');
define('IMAGE_COUNT_INFO','El n&uacute;mero de im&aacute;genes en %s: %s piezas. ');
define('TEXT_PRODUCTS_MINI_IMAGES','Mini im&aacute;genes');
define('TEXT_PRODUCTS_THUMBNAIL_IMAGES','Im&aacute;genes en miniatura');
define('TEXT_PRODUCTS_MIDI_IMAGES','Im&aacute;genes Midi');
define('TEXT_PRODUCTS_INFO_IMAGES','Im&aacute;genes de informaci&oacute;n');
define('TEXT_PRODUCTS_POPUP_IMAGES','Im&aacute;genes emergentes');
define('TEXT_CATEGORIES_IMAGES','Categor&iacute;a de im&aacute;genes');
define('TEXT_CATEGORIES_LIST_IMAGES','Listado de im&aacute;genes de la categor&iacute;a');
define('TEXT_CATEGORIES_MOBILE_IMAGES','Categor&iacute;a Im&aacute;genes M&oacute;viles');
define('TEXT_BANNERS_IMAGES','Im&aacute;genes de la pancarta');
define('TEXT_BANNERS_MOBILE_IMAGES','Im&aacute;genes de banners para m&oacute;viles');
define('TEXT_MANUFACTURERS_IMAGES','Im&aacute;genes del fabricante');
define('TEXT_PRODUCTS','Productos');
define('TEXT_CATEGORIES','Categor&iacute;as');
define('TEXT_MANUFACTURERS','Fabricantes');
define('TEXT_BANNERS','Pancartas');
define('TEXT_LOGFILE','Habilitar el registro, &uacute;til para la depuraci&oacute;n. El archivo de registro se guarda en la carpeta /log en el directorio ra&iacute;z.');
?>