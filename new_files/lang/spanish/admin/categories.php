<?php
/* --------------------------------------------------------------
   $Id: categories.php 3392 2012-08-06 12:45:26Z web28 $   

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   --------------------------------------------------------------
   based on: 
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(categories.php,v 1.22 2002/08/17); www.oscommerce.com 
   (c) 2003	 nextcommerce (categories.php,v 1.10 2003/08/14); www.nextcommerce.org
   (c) 2006 xt:Commerce; www.xt-commerce.com

   Released under the GNU General Public License 
   --------------------------------------------------------------*/
   
// BOF - Tomcraft - 2009-11-02 - Admin language tabs
define('TEXT_EDIT_STATUS', 'Estado activo');
// BOF - Tomcraft - 2009-11-02 - Admin language tabs
define('HEADING_TITLE', 'Categor&iacute;a');
define('HEADING_TITLE_SEARCH', 'Buscar: ');
define('HEADING_TITLE_GOTO', 'Ir a:');

define('TABLE_HEADING_ID', 'ID');
define('TABLE_HEADING_CATEGORIES_PRODUCTS', 'Categor&iacute;as / Art&iacute;culos');
define('TABLE_HEADING_ACTION', 'Acci&oacute;n');
define('TABLE_HEADING_STATUS', 'Estado');
define('TABLE_HEADING_STARTPAGE', 'TOP');
define('TABLE_HEADING_STOCK','Stock almac&eacute;n');
define('TABLE_HEADING_SORT','Clas.');
define('TABLE_HEADING_EDIT','Editar');
// BOF - Tomcraft - 2010-04-07 - Added definition for products model
define('TABLE_HEADING_PRODUCTS_MODEL','N&ordm;. Art&iacute;culo');
// EOF - Tomcraft - 2010-04-07 - Added definition for products model

// BOF - Hendrik - 2010-08-11 - Thumbnails in admin products list
define('TABLE_HEADING_IMAGE','Imagen');
// EOF - Hendrik - 2010-08-11 - Thumbnails in admin products list

define('TEXT_ACTIVE_ELEMENT','Elemento activo');
define('TEXT_MARKED_ELEMENTS','Elementos marcados');
define('TEXT_INFORMATIONS','Informaciones');
define('TEXT_INSERT_ELEMENT','Elemento nuevo');

define('TEXT_WARN','Aviso falta stock:');
define('TEXT_WARN_MAIN','Art&iacute;culo principal');
define('TEXT_NEW_PRODUCT', 'Nuevo art&iacute;culo en &quot;%s&quot;');
define('TEXT_EDIT_PRODUCT', 'Modificar art&iacute;culo en &quot;%s&quot;');
define('TEXT_CATEGORIES', 'Categor&iacute;as:');
define('TEXT_PRODUCTS', 'Productos:');
define('TEXT_PRODUCTS_PRICE_INFO', 'Precios:');
define('TEXT_PRODUCTS_TAX_CLASS', 'Grupo de impuesto:');
define('TEXT_PRODUCTS_AVERAGE_RATING', 'Promedio valoraci&oacute;n:');
define('TEXT_PRODUCTS_QUANTITY_INFO', 'Stock almac&eacute;n:');
define('TEXT_PRODUCTS_DISCOUNT_ALLOWED_INFO', 'Descuento m&aacute;x. permitido:');
define('TEXT_DATE_ADDED', 'A&ntilde;adido el :');
define('TEXT_DATE_AVAILABLE', 'Disponibilidad:');
define('TEXT_LAST_MODIFIED', '&uacute;ltima modificaci&oacute;n:');
define('TEXT_IMAGE_NONEXISTENT', 'Imagen no existe');
define('TEXT_NO_CHILD_CATEGORIES_OR_PRODUCTS', 'Por favor a&ntilde;ade una nueva categor&iacute;a o un nuevo art&iacute;culo en <strong>%s</strong>.');
define('TEXT_PRODUCT_MORE_INFORMATION', 'Para m&aacute;s informaciones, visita por favor la <a href="http://%s" target="_blank"><u>P&aacute;gina pr&iacute;ncipal</u></a> del productor.');
define('TEXT_PRODUCT_DATE_ADDED', 'Este art&iacute;culo lo tenemos en nuestro cat&aacute;logo desde el %s.');
define('TEXT_PRODUCT_DATE_AVAILABLE', 'Este art&iacute;culo esta disponible desde el %s.');
define('TEXT_PRODUCTS_HEADING_TITLE', 'Productos:');

define('TEXT_EDIT_INTRO', 'Por favor haz todos los cambios necesarios.');
define('TEXT_EDIT_CATEGORIES_ID', 'ID Categor&iacute;a:');
define('TEXT_EDIT_CATEGORIES_NAME', 'Nombre de la categor&iacute;a:');
define('TEXT_EDIT_CATEGORIES_HEADING_TITLE', 'Encabezamiento categor&iacute;a:');
define('TEXT_EDIT_CATEGORIES_DESCRIPTION', 'Descripci&oacute;n categor&iacute;a:');
define('TEXT_EDIT_CATEGORIES_IMAGE', 'Imagen categor&iacute;a:');
define('TEXT_EDIT_CATEGORIES_IMAGE_LIST', 'Listado de im&aacute;genes de la categor&iacute;a:');
define('TEXT_EDIT_CATEGORIES_IMAGE_MOBILE', 'Categor&iacute;a Imagen M&oacute;vil:');
define('TEXT_EDIT_SORT_ORDER', 'Orden:');

define('TEXT_INFO_COPY_TO_INTRO', 'Por favor elige una categor&iacute;a nueva, en la cual quiere copiar los art&iacute;culos:');
define('TEXT_INFO_CURRENT_CATEGORIES', 'Categor&iacute;as actuales:');

define('TEXT_INFO_HEADING_NEW_CATEGORY', 'Nueva categor&iacute;a en &quot;%s&quot;');
define('TEXT_INFO_HEADING_EDIT_CATEGORY', 'Modificar la categor&iacute;a &quot;%s&quot;');
define('TEXT_INFO_HEADING_DELETE_CATEGORY', 'Eliminar categor&iacute;a');
define('TEXT_INFO_HEADING_MOVE_CATEGORY', 'Mover categor&iacute;a');
define('TEXT_INFO_HEADING_DELETE_PRODUCT', 'Borrar art&iacute;culo');
define('TEXT_INFO_HEADING_MOVE_PRODUCT', 'Mover art&iacute;culo');
define('TEXT_INFO_HEADING_COPY_TO', 'Copiar hac&iacute;a');
define('TEXT_INFO_HEADING_MOVE_ELEMENTS', 'Mover elementos');
define('TEXT_INFO_HEADING_DELETE_ELEMENTS', 'Borrar elementos');

define('TEXT_DELETE_CATEGORY_INTRO', 'Estas seguro de querer borrar la categor&iacute;a?');
define('TEXT_DELETE_PRODUCT_INTRO', 'Estas seguro de querer borrar este art&iacute;culo?');

define('TEXT_DELETE_WARNING_CHILDS', '<b>ATENCION:</b> A&uacute;n existen %s (Sub-)Categor&iacute;as, las cuales est&aacute;n asociadas a esta categor&iacute;a!');
define('TEXT_DELETE_WARNING_PRODUCTS', '<b>ATENCION:</b> A&uacute;n existen %s art&iacute;culos, los cuales est&aacute;n asociados a esta categor&iacute;a!');

define('TEXT_MOVE_WARNING_CHILDS', '<b>Informaci&oacute;n:</b> A&uacute;n existen %s (Sub-)Categor&iacute;as, las cuales est&aacute;n asociadas a esta categor&iacute;a!');
define('TEXT_MOVE_WARNING_PRODUCTS', '<b>Informaci&oacute;n:</b> A&uacute;n existen %s art&iacute;culos, los cuales est&aacute;n asociados a esta categor&iacute;a!');

define('TEXT_MOVE_PRODUCTS_INTRO', 'Por favor elige una categor&iacute;a, a la que quieres mover <b>%s</b>');
define('TEXT_MOVE_CATEGORIES_INTRO', 'Por favor elige una categor&iacute;a, a la que quieres mover <b>%s</b>');
define('TEXT_MOVE', 'Mover <b>%s</b> hacia:');
define('TEXT_MOVE_ALL', 'Mover todo hacia:');

define('TEXT_NEW_CATEGORY_INTRO', 'Por favor rellena todos los campos relevantes a la nueva categor&iacute;a.');
define('TEXT_CATEGORIES_NAME', 'Nombre categor&iacute;a:');
define('TEXT_CATEGORIES_IMAGE', 'Imagen categor&iacute;a:');

define('TEXT_META_TITLE', 'Meta t&iacute;tulo:');
define('TEXT_META_DESCRIPTION', 'Meta descripci&oacute;n:');
define('TEXT_META_KEYWORDS', 'Meta Keywords:');

define('TEXT_SORT_ORDER', 'Orden clasificaci&oacute;n:');

define('TEXT_PRODUCTS_STATUS', 'Estado del articulo:');
define('TEXT_PRODUCTS_STARTPAGE', 'Mostrar en p&aacute;gina principal:');
define('TEXT_PRODUCTS_STARTPAGE_YES', 'Si');
define('TEXT_PRODUCTS_STARTPAGE_NO', 'No');
define('TEXT_PRODUCTS_STARTPAGE_SORT', 'Orden de clasificaci&oacute;n(P&aacute;gina principal):');
define('TEXT_PRODUCTS_DATE_AVAILABLE', 'Fecha de disponibilidad:');
// BOF - Hetfield - 2010-01-28 - Changing product available in correctly names for status
define('TEXT_PRODUCT_AVAILABLE', 'Activado');
define('TEXT_PRODUCT_NOT_AVAILABLE', 'Desactivado');
// EOF - Hetfield - 2010-01-28 - Changing product available in correctly names for status
define('TEXT_PRODUCTS_MANUFACTURER', 'Productor del art&iacute;culo:');
define('TEXT_PRODUCTS_MANUFACTURER_MODEL', 'N&ordm;. Art. del productor. (HAN/MPN):');
define('TEXT_PRODUCTS_NAME', 'Nombre del art&iacute;culo:');
define('TEXT_PRODUCTS_HEADING_TITLE', 'R&uacute;brica de productos:');
define('TEXT_PRODUCTS_DESCRIPTION', 'Descripci&oacute;n del art&iacute;culo:');
define('TEXT_PRODUCTS_QUANTITY', 'Stock:');
define('TEXT_PRODUCTS_MODEL', 'N&ordm;. Art&iacute;culo:');
define('TEXT_PRODUCTS_IMAGE', 'Imagen del art&iacute;culo:');
define('TEXT_PRODUCTS_URL', 'Enlace del productor:');
define('TEXT_PRODUCTS_URL_WITHOUT_HTTP', '<small>(sin poner al principio http://)</small>');
define('TEXT_PRODUCTS_PRICE', 'Precio:');
define('TEXT_PRODUCTS_WEIGHT', 'Peso:');
define('TEXT_PRODUCTS_EAN','GTIN/EAN');
define('TEXT_PRODUCT_LINKED_TO','Enlazado en:');
define('TEXT_DELETE', 'Eliminar');
define('EMPTY_CATEGORY', 'Categor&iacute;a vac&iacute;a');

define('TEXT_HOW_TO_COPY', 'M&eacute;todo de copiado para art&iacute;culos:');
define('TEXT_COPY_AS_LINK', 'Enlazar');
define('TEXT_COPY_AS_DUPLICATE', 'Duplicar');

define('ERROR_CANNOT_LINK_TO_SAME_CATEGORY', 'Error: Art&iacute;culos no se pueden enlazar en la misma categor&iacute;a.');
define('ERROR_CATALOG_IMAGE_DIRECTORY_NOT_WRITEABLE', 'Error: El directorio \'images\' en el directorio del catalogo esta protegido contra escritura: ' . DIR_FS_CATALOG_IMAGES);
define('ERROR_CATALOG_IMAGE_DIRECTORY_DOES_NOT_EXIST', 'Error: El directorio \'images\' en el directorio del catalogo no existe: ' . DIR_FS_CATALOG_IMAGES);

define('TEXT_PRODUCTS_DISCOUNT_ALLOWED','Descuento m&aacute;x. permitido:');
define('HEADING_PRICES_OPTIONS','<b>Opciones de precio</b>');
define('HEADING_PRODUCT_IMAGES','<b>Im&aacute;genes de art&iacute;culos</b>');
define('TEXT_PRODUCTS_WEIGHT_INFO','<small>(kg)</small>');
define('TEXT_PRODUCTS_SHORT_DESCRIPTION','Descripci&oacute;n corta:');
define('TEXT_PRODUCTS_KEYWORDS', 'Concepto de b&uacute;squeda adicionales:');
define('TXT_STK','Uds.: ');
define('TXT_PRICE','a :');
define('TXT_NETTO','Precio neto: ');
define('TXT_STAFFELPREIS','Precios escalonados');


define('HEADING_PRODUCTS_MEDIA','<b>Medio de art&iacute;culo</b>');
define('TABLE_HEADING_PRICE','Precio');

define('TEXT_FSK18','A&ntilde;os 18:');
define('TEXT_CHOOSE_INFO_TEMPLATE_CATEGORIE','Plantilla para mostrar categor&iacute;as');
define('TEXT_CHOOSE_INFO_TEMPLATE_LISTING','Plantilla para mostrar art&iacute;culos');
// BOF - Tomcraft - 2009-11-02 - Admin language tabs
//define('TEXT_PRODUCTS_SORT','Reihung:');
define('TEXT_PRODUCTS_SORT','Orden:');
// EOF - Tomcraft - 2009-11-02 - Admin language tabs
define('TEXT_EDIT_PRODUCT_SORT_ORDER','Orden de articulo');
define('TXT_PRICES','Precio');
define('TXT_NAME','Nombre del art&iacute;culo');
define('TXT_ORDERED','Art&iacute;culos pedidos');
// BOF - Tomcraft - 2009-11-02 - Admin language tabs
define('TXT_SORT','Orden');
// EOF - Tomcraft - 2009-11-02 - Admin language tabs
define('TXT_WEIGHT','Peso');
define('TXT_QTY','Stock');
// BOF - Tomcraft - 2009-09-12 - add option to sort by date and products model
define('TXT_DATE','Fecha de alta');
define('TXT_MODEL','N&ordm; art&iacute;culo');
// EOF - Tomcraft - 2009-09-12 - add option to sort by date and products model

define('TEXT_MULTICOPY','M&uacute;ltiple');
define('TEXT_MULTICOPY_DESC','Copiar elementos en la siguiente categor&iacute;a:<br />(Si esta seleccionado, la configuraci&oacute;n de "Simple" es ignorada.)');
define('TEXT_SINGLECOPY','Simple');
define('TEXT_SINGLECOPY_DESC','Copiar elementos en la siguiente categor&iacute;a:<br />(Para esta opci&oacute;n no puede estar activado "M&uacute;ltiple".)');
define('TEXT_SINGLECOPY_CATEGORY','Categoria:');

define('TEXT_PRODUCTS_VPE','Unidades');
define('TEXT_PRODUCTS_VPE_VISIBLE','Mostrar unidades:');
define('TEXT_PRODUCTS_VPE_VALUE',' Valor:');

define('CROSS_SELLING_1','Ventas cruzadas');
define('CROSS_SELLING_2','para art&iacute;culo');
define('CROSS_SELLING_SEARCH','B&uacute;squeda art&iacute;culos:<br/><small><i>poner N&ordm;. Art&iacute;culo</i></small>');
define('BUTTON_EDIT_CROSS_SELLING','Cross Selling');
define('HEADING_DEL','Borrar');
define('HEADING_ADD','A&ntilde;adir?');
define('HEADING_GROUP','Grupo');
define('HEADING_SORTING','Orden');
define('HEADING_MODEL','N&ordm;. Art&iacute;culo');
define('HEADING_NAME','Art&iacute;culo');
define('HEADING_CATEGORY','Categor&iacute;a');
define('HEADING_IMAGE','Imagen');

// BOF - Tomcraft - 2009-11-02 - Admin language tabs
define('TEXT_SORT_ASC','ascendente');
define('TEXT_SORT_DESC','descendende');
// EOF - Tomcraft - 2009-11-02 - Admin language tabs

// BOF - Tomcraft - 2009-11-06 - Use variable TEXT_PRODUCTS_DATE_FORMAT
define('TEXT_PRODUCTS_DATE_FORMAT', 'AAAA-MM-DD');
// EOF - Tomcraft - 2009-11-06 - Use variable TEXT_PRODUCTS_DATE_FORMAT

// BOF - web28 - 2010-08-03 - add metatags max charakters info
define('TEXT_CHARACTERS','Caracteres');
// EOF - web28 - 2010-08-03 - add metatags max charakters info

define('TEXT_ATTRIBUTE_COPY', 'Copiar tambi&eacute;n atributos del art&iacute;culo');
define('TEXT_ATTRIBUTE_COPY_INFO', 'Copiar atributos de art&iacute;culo<br/ >Se aconseja hacerlo solo cuando se copia 1 art&iacute;culo');

define('TEXT_PRODUCTS_ORDER_DESCRIPTION','Descripci&oacute;n del pedido - Mostrar al final del pedido, en E-mail del pedido y al imprimir el pedido');

define('TEXT_HOW_TO_LINK', '<b>Enlazar p&aacute;gina despu&eacute;s de copiar/enlazar</b>');
define('TEXT_HOW_TO_LINK_INFO', 'M&aacute;scara de entrada de art&iacute;culo<br/ >(En caso de varios art&iacute;culos, a&ntilde;adir al &uacute;ltimo de la lista)');

define('TEXT_SET_GROUP_PERMISSIONS', 'Incluir los permisos de grupo de clientes a todas las subcarpetas y art&iacute;culos?');

define('HEADING_TITLE_ONLY_INACTIVE_PRODUCTS', 'Solo mostrar art&iacute;culos inactivos'); 

// BOF - Timo Paul (mail[at]timopaul[dot]biz) - 2014-01-17 - duplicate products content and links
define('TEXT_CONTENT_COPY', 'Copiar tambi&eacute;n el content del art&iacute;culo');
define('TEXT_CONTENT_COPY_INFO', 'Copiar content del art&iacute;culo<br/ >Se aconseja hacerlo solo cuando se copia 1 art&iacute;culo');
define('TEXT_LINKS_COPY', 'Copiar enlaces de art&iacute;culos');
define('TEXT_LINKS_COPY_INFO', 'Copiar enlaces de art&iacute;culos<br/ >Se aconseja hacerlo solo cuando se copia 1 art&iacute;culo');
// EOF - Timo Paul (mail[at]timopaul[dot]biz) - 2014-01-17 - duplicate products content and links

define('TEXT_GRADUATED_PRICES_INFO', 'La cantidad de los campos para los precios escalados se puede modificar en: "<b>Configuraci&oacute;n - Ajustes administraci&oacute;n - Campos adicionales precios escalonados</b>".');
define('TEXT_CATEGORY_SETTINGS', 'Ajustes categor&iacute;a:');

define('ERROR_QTY_SAVE_CHANGED', 'Durante la modificaci&oacute;n del art&iacute;culo se cambi&oacute; el stock y no ha sido guardado la configuraci&oacute;n.');

define('TEXT_NO_MOVE_POSSIBLE', 'Art&iacute;culo no se puede mover.');

define('TEXT_IN', 'en:');

define('TEXT_PRODUCTS_ATTRIBUTES_RECALCULATE', 'Calcular de nuevo los atributos si se cambia el tipo de IVA');

define('HEADING_TITLE_CAT_BREADCRUMB', ' en &quot;%s&quot;');

define('TEXT_PRODUCTS_TAGS', 'Caracter&iacute;sticas del art&iacute;culo');

define('TEXT_GRADUATED_PRICES_GROUP_INFO', 'Este grupo de clientes no tiene permiso para ver los precios escalonados. Esto se puede cambiar en cualquier momento en los ajustes de grupo de clientes.');

define('TEXT_NO_FILE', 'No existe plantilla!');

define('ERROR_COPY_METHOD_NOT_SPECIFIED', 'M&eacute;todo de copia no permitido.');
define('ERROR_COPY_METHOD_NOT_ALLOWED', 'M&eacute;todo de copia "enlazar" no esta permitido en esta categor&iacute;a.');

define('TEXT_TAGS_COPY', 'Copiar tambi&eacute;n caracter&iacute;sticas del art&iacute;culo');
define('TEXT_TAGS_COPY_INFO', 'Copiar caracter&iacute;sticas del art&iacute;culo<br/ >Se aconseja usar solo cuando se copia (1 Art&iacute;culo)');

define('TEXT_PRODUCTS_LAST_MODIFIED', 'Ultima actualizaci&oacute;n:');
define('TEXT_STOCK_UPDATE_SUCCESS', 'Acciones guardadas');
define('TEXT_STOCK_UPDATE_ERROR', 'Stock no guardado');
?>