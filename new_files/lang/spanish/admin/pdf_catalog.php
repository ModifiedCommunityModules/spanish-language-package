<?php
// Spracheinstellungen für Seiteneinstellungen
define('MODULE_PDF_CATALOG_TEXT_TITLE','Cat&aacute;logo en PDF'); 
define('MODULE_PDF_CATALOG_TEXT_DESCRIPTION','Crea un cat&aacute;logo en PDF'); 
define('MODULE_PDF_CATALOG_HEADING_TITLE', 'Cat&aacute;logo en PDF');
define('MODULE_PDF_CATALOG_HEADING_SUBTITLE', 'Marketing');
define('MODULE_PDF_CATALOG_MAKE_PDF_SETTINGS', 'Hacer ajustes');

// Spracheinstellungen für die Texte innerhalb der PDF-Datei
define('MODULE_PDF_CATALOG_FILE_CATALOG_NAME', 'Cat&aacute;logo');
define('MODULE_PDF_CATALOG_FILE_TOC_TITLE', 'Tabla de contenido');
define('MODULE_PDF_CATALOG_FILE_MODEL', 'Art.No.: ');
define('MODULE_PDF_CATALOG_FILE_MANUFACTURER', 'Fabricante: ');
define('MODULE_PDF_CATALOG_FILE_DATE_ADDED', 'A&ntilde;adido: ');
define('MODULE_PDF_CATALOG_FILE_UVP', 'EIA: ');
define('MODULE_PDF_CATALOG_FILE_TAX_INCL', 'inkl. %s%% IVA m&aacute;s gastos de env&iacute;o');
define('MODULE_PDF_CATALOG_FILE_TAX_EXCL', 'exkl. %s%% IVA m&aacute;s gastos de env&iacute;o');
define('MODULE_PDF_CATALOG_FILE_NO_TAX', 'Precio final seg&uacute;n § 19 UStG. m&aacute;s gastos de env&iacute;o');
define('MODULE_PDF_CATALOG_FILE_PIECE', 'Estuco');
define('MODULE_PDF_CATALOG_FILE_FROM', 'de');
define('MODULE_PDF_CATALOG_FILE_ALL', 'Todos');

// Spracheinstellungen Global
define('MODULE_PDF_CATALOG_GLOBAL_TOGGLEBOX_SETTINGS', 'Ajustes globales');
define('MODULE_PDF_CATALOG_GLOBAL_PATH_TITLE', 'Ubicaci&oacute;n de almacenamiento de los archivos PDF');
define('MODULE_PDF_CATALOG_GLOBAL_PATH_DESC', '&iquest;D&oacute;nde deben guardarse los cat&aacute;logos en PDF? <br />nombre de la carpeta en el servidor!');
define('MODULE_PDF_CATALOG_GLOBAL_SEO_TITLE', 'Enlaces optimizados para los motores de b&uacute;squeda');
define('MODULE_PDF_CATALOG_GLOBAL_SEO_DESC', '0 = Sin URLs de SEO<br />1 = URLs modificadas<br />2 = URLs de ShopStat');
define('MODULE_PDF_CATALOG_GLOBAL_DOMAIN_TITLE', 'Dominio');
define('MODULE_PDF_CATALOG_GLOBAL_DOMAIN_DESC', 'A qu&eacute; dominio debe vincularse (sin http://)?');
define('MODULE_PDF_CATALOG_GLOBAL_ORIENTATION_TITLE', 'Orientaci&oacute;n de la p&aacute;gina');
define('MODULE_PDF_CATALOG_GLOBAL_ORIENTATION_DESC', 'P = Formato de retrato (retrato)<br />L = Formato de paisaje  (Paisaje)');
define('MODULE_PDF_CATALOG_GLOBAL_UNIT_TITLE', 'Unidad de medida');
define('MODULE_PDF_CATALOG_GLOBAL_UNIT_DESC', '&iquest;En qu&eacute; unidad de medida debe hacerse el c&aacute;lculo? Est&aacute;ndar = mm');
define('MODULE_PDF_CATALOG_GLOBAL_FORMAT_TITLE', 'El tama&ntilde;o del papel');
define('MODULE_PDF_CATALOG_GLOBAL_FORMAT_DESC', 'El tama&ntilde;o del papel del cat&aacute;logo. Est&aacute;ndar = A4');
define('MODULE_PDF_CATALOG_GLOBAL_BACKGROUND_COLOR_TITLE', 'El color de fondo del cat&aacute;logo');
define('MODULE_PDF_CATALOG_GLOBAL_BACKGROUND_COLOR_DESC', 'Color de fondo de cada una de las hojas de todo el cat&aacute;logo.<br />Nota: Este ajuste se ignora tan pronto como se selecciona una imagen como fondo.');
define('MODULE_PDF_CATALOG_GLOBAL_DEFAULT_IMAGE_TITLE', 'Imagen del art&iacute;culo est&aacute;ndar');
define('MODULE_PDF_CATALOG_GLOBAL_DEFAULT_IMAGE_DESC', '&iquest;Qu&eacute; imagen se debe usar si no hay una imagen del art&iacute;culo?<br />Pfad: images/product_images/info_images/');
define('MODULE_PDF_CATALOG_GLOBAL_EXIST_FILES_TITLE', 'Mostrar el men&uacute; de archivos a la derecha');
define('MODULE_PDF_CATALOG_GLOBAL_EXIST_FILES_DESC', '&iquest;Deber&iacute;a mostrarse el men&uacute; de los cat&aacute;logos creados en el lado derecho?<br />0 = No (recomendado para nombres de archivos m&aacute;s largos...)<br />1 = Si');

// Spracheinstellungen für den Kopfbereich- und Fußbereich
define('MODULE_PDF_CATALOG_HECOFO_CREATE', 'Creaci&oacute;n de un cat&aacute;logo');
define('MODULE_PDF_CATALOG_HECOFO_TOGGLEBOX', 'Ajustes para el encabezado, contenido &amp; pie de p&aacute;gina');
define('MODULE_PDF_CATALOG_HECOFO_FONT_TYPE', 'Fuente');
define('MODULE_PDF_CATALOG_HECOFO_FONT_COLOR', 'Color de la fuente');
define('MODULE_PDF_CATALOG_HECOFO_FONT_SIZE', 'Tama&ntilde;o de la fuente');
define('MODULE_PDF_CATALOG_HECOFO_FONT_STYLE', 'Formato de la fuente');
define('MODULE_PDF_CATALOG_HECOFO_FONT_BOLD', 'Grasa');
define('MODULE_PDF_CATALOG_HECOFO_FONT_ITALIC', 'Cursiva');
define('MODULE_PDF_CATALOG_HECOFO_FONT_CELL', 'La altura de la c&eacute;lula');

// Spracheinstellungen für den Kopfbereich
define('MODULE_PDF_CATALOG_HE_HEADER', '&aacute;rea de cabecera');
define('MODULE_PDF_CATALOG_HE_PAGE_TITLE', 'Nombre del encabezado del cat&aacute;logo:');
define('MODULE_PDF_CATALOG_HE_PAGE_TITLE_HINT', xtc_image(DIR_WS_ICONS.'pdf_catalog/hint_he_page_title.png'));
define('MODULE_PDF_CATALOG_HE_CATEGORY_COLOR', 'Color de fondo de la categor&iacute;a T&iacute;tulo:');
define('MODULE_PDF_CATALOG_HE_CATEGORY_COLOR_HINT', xtc_image(DIR_WS_ICONS.'pdf_catalog/hint_he_category_color.png'));
define('MODULE_PDF_CATALOG_HE_DATE_FORMAT', 'Formato de la fecha: 05/2016');
define('MODULE_PDF_CATALOG_HE_DATE_FORMAT_HINT', xtc_image(DIR_WS_ICONS.'pdf_catalog/hint_he_date_format.png'));

define('MODULE_PDF_CATALOG_HE_CATALOG_HEADER', 'T&iacute;tulos del cat&aacute;logo:');
define('MODULE_PDF_CATALOG_HE_CATALOG_HEADER_HINT', xtc_image(DIR_WS_ICONS.'pdf_catalog/hint_he_catalog_header.png'));
define('MODULE_PDF_CATALOG_HE_STARTPAGE', 'P&aacute;gina web:');
define('MODULE_PDF_CATALOG_HE_STARTPAGE_HINT', xtc_image(DIR_WS_ICONS.'pdf_catalog/hint_he_startpage.png'));
define('MODULE_PDF_CATALOG_HE_TOC_HEADING', '&iacute;ndice Encabezamiento:');
define('MODULE_PDF_CATALOG_HE_TOC_HEADING_HINT', xtc_image(DIR_WS_ICONS.'pdf_catalog/hint_he_toc_heading.png'));
define('MODULE_PDF_CATALOG_HE_TOC', 'Tabla de contenido:');
define('MODULE_PDF_CATALOG_HE_TOC_HINT', xtc_image(DIR_WS_ICONS.'pdf_catalog/hint_he_toc.png'));
define('MODULE_PDF_CATALOG_HE_DATE', 'Fecha:');
define('MODULE_PDF_CATALOG_HE_DATE_HINT', xtc_image(DIR_WS_ICONS.'pdf_catalog/hint_he_date.png'));
define('MODULE_PDF_CATALOG_HE_CATEGORY_FONT', 'Categor&iacute;a Encabezamiento:');
define('MODULE_PDF_CATALOG_HE_CATEGORY_FONT_HINT', xtc_image(DIR_WS_ICONS.'pdf_catalog/hint_he_category_font.png'));

// Spracheinstellungen für den Inhaltsbereich
define('MODULE_PDF_CATALOG_CO_CONTENT', '&aacute;rea de contenido');
define('MODULE_PDF_CATALOG_CO_DATA', 'Subt&iacute;tulo del art&iacute;culo,<br />Descripci&oacute;n del art&iacute;culo &amp; Precios:');
define('MODULE_PDF_CATALOG_CO_DATA_HINT', xtc_image(DIR_WS_ICONS.'pdf_catalog/hint_co_date.png'));

// Spracheinstellungen für den Fußbereich
define('MODULE_PDF_CATALOG_FO_FOOTER', '&aacute;rea de pie de p&aacute;gina');
define('MODULE_PDF_CATALOG_FO_FONT_SIZE', 'Tama&ntilde;o de la fuente');
define('MODULE_PDF_CATALOG_FO_PAGES', 'N&uacute;mero de p&aacute;gina:');
define('MODULE_PDF_CATALOG_FO_PAGES_HINT', xtc_image(DIR_WS_ICONS.'pdf_catalog/hint_fo_pages.png'));

// Spracheinstellungen für den Zeichensatz
define('MODULE_PDF_CATALOG_CHARSET', 'Ajustes para el conjunto de personajes y los precios de la escala');
define('MODULE_PDF_CATALOG_CHARSET_TEXT_ISO1', 'Usar el juego de caracteres ISO para el t&iacute;tulo y la descripci&oacute;n del art&iacute;culo?');
define('MODULE_PDF_CATALOG_CHARSET_HINT_ISO1', 'Si tiene problemas con la representaci&oacute;n de las di&eacute;resis, por favor use el juego de caracteres ISO y pruebe de nuevo.<br />default = no');
define('MODULE_PDF_CATALOG_CHARSET_TEXT_ISO2', 'Usar el juego de caracteres ISO para los precios de la escala?');
define('MODULE_PDF_CATALOG_CHARSET_HINT_ISO2', 'Incluso si la tienda est&aacute; configurada en UTF8, es posible que los precios de la escala no se muestren (correctamente). En este caso, por favor use el conjunto de caracteres ISO.<br />est&aacute;ndar = no');
define('MODULE_PDF_CATALOG_CHARSET_TEXT_ISO3', 'Usar el juego de caracteres ISO para los nombres de las categor&iacute;as?');
define('MODULE_PDF_CATALOG_CHARSET_HINT_ISO3', 'Si tiene problemas con la representaci&oacute;n de las di&eacute;resis, por favor use el juego de caracteres ISO y pruebe de nuevo.<br />default = no');

// Spracheinstellungen für bereits vorhandene Dateien
define('MODULE_PDF_CATALOG_EXFI_TOGGLEBOX_EXIST_FILES', 'Los archivos ya existentes');
define('MODULE_PDF_CATALOG_EXFI_DELETE_FILE', 'Eliminar el archivo?');
define('MODULE_PDF_CATALOG_EXFI_SUCCESSFULLY_DELETED', ' eliminado con &eacute;xito!');

// Spracheinstellungen für den Datenbereich
define('MODULE_PDF_CATALOG_DATA_PICTURE_SETTINGS', 'Ajustes de la imagen');
define('MODULE_PDF_CATALOG_DATA_ARTICLE_SETTINGS', 'Configuraci&oacute;n de los art&iacute;culos');
define('MODULE_PDF_CATALOG_DATA_PRICE_SETTINGS', 'Los ajustes del precio');
define('MODULE_PDF_CATALOG_DATA_SHOW_IMAGES', 'Mostrar im&aacute;genes?');
define('MODULE_PDF_CATALOG_DATA_MAX_IMAGE_WIDTH', 'anchura m&aacute;xima de la imagen: ');
define('MODULE_PDF_CATALOG_DATA_MAX_IMAGE_HEIGHT', 'altura m&aacute;xima de la imagen: ');
define('MODULE_PDF_CATALOG_DATA_RESIZE_IMAGES', 'Recalcular las im&aacute;genes?');
define('MODULE_PDF_CATALOG_DATA_SIZE_BORDER_IMAGE', 'Enmarcar las fotos? ');
define('MODULE_PDF_CATALOG_DATA_SHOW_MANUFACTURER', 'Mostrar el fabricante?');
define('MODULE_PDF_CATALOG_DATA_USE_POPUP_IMAGES', 'Usar im&aacute;genes popup?');
define('MODULE_PDF_CATALOG_DATA_USE_POPUP_IMAGES_HINT', '<strong>Usar im&aacute;genes emergentes en lugar de im&aacute;genes de informaci&oacute;n:</strong><br />El efecto que la opci&oacute;n activada tiene en el servidor web al crear el cat&aacute;logo depende del n&uacute;mero de art&iacute;culos en las categor&iacute;as y el tiempo de ejecuci&oacute;n permitido para los scripts PHP.<br />As&iacute; que es muy posible que un mensaje de error como:<br /><strong>Fatal error: Tama&ntilde;o de memoria permitido de xxxxxx bytes agotados...</strong>');
define('MODULE_PDF_CATALOG_DATA_SHOW_NAME', 'Mostrar el nombre del producto?');
define('MODULE_PDF_CATALOG_DATA_NAME_COLOR', 'Color de fondo Nombre: ');
define('MODULE_PDF_CATALOG_DATA_PRODUCT_BORDER', 'Enmarcar el texto? ');
define('MODULE_PDF_CATALOG_DATA_SHOW_MODEL', 'Mostrar n&uacute;mero de parte?');
define('MODULE_PDF_CATALOG_DATA_SHOW_DESCRIPTION', 'Mostrar descripci&oacute;n?');
define('MODULE_PDF_CATALOG_DATA_SHOW_SHORT_DESCRIPTION', 'Mostrar una breve descripci&oacute;n?');
define('MODULE_PDF_CATALOG_DATA_SHOW_PRICES', 'Mostrar los precios?');
define('MODULE_PDF_CATALOG_DATA_VAT', 'Uglypreise?');
define('MODULE_PDF_CATALOG_DATA_CURRENCY', 'Protecci&oacute;n: ');
define('MODULE_PDF_CATALOG_DATA_SHOW_SPECIAL_PRICES', 'Mostrar ofertas especiales?');
define('MODULE_PDF_CATALOG_DATA_SPECIALS_PRICE_COLOR', 'Oferta especial de color: ');
define('MODULE_PDF_CATALOG_DATA_SHOW_TAX_INFO', 'Mostrar la informaci&oacute;n fiscal?');
define('MODULE_PDF_CATALOG_DATA_SHOW_ATTRIBUTES', 'Mostrar los atributos?');
define('MODULE_PDF_CATALOG_DATA_SHOW_GROUP_PRICES', 'Mostrar precios de escala?');
define('MODULE_PDF_CATALOG_DATA_CUSTOMER_GROUP', 'Grupo de clientes: ');
define('MODULE_PDF_CATALOG_DATA_SORT_PRICES', 'La visualizaci&oacute;n de los precios: ');
define('MODULE_PDF_CATALOG_DATA_SORT_PRICES_HINT', 'Las siguientes reglas se aplican para la clasificaci&oacute;n de precios:<br /><fuerte>S = precio de oferta especial<br />G = precio escalonado/grupo de clientes<br />N = precio normal</fuerte>>br />Est&aacute;ndar es &quot;SGN&quot; es decir, se prefieren los precios de oferta especial, luego sigue el precio escalonado y finalmente el precio normal. <S&oacute;lo uno de los tres se muestra siempre, y siempre el que golpea primero.<br />Si no hay precio de oferta especial, se usa el precio de escala, si no hay precio de escala, entonces se usa el precio normal.<br />Si se prefiere el precio de escala, la orden debe ser &quot;GSN&quot;.');
define('MODULE_PDF_CATALOG_DATA_SHOW_DATE_ADDED', 'Ajuste de la fecha de la pantalla?');
define('MODULE_PDF_CATALOG_DATA_SHOW_UVP', 'Mostrar UVP?');

// Spracheinstellungen für welche Kategorie soll der Katalog erstellt werden
define('MODULE_PDF_CATALOG_CREATE_SELECT_CATEGORY', '&iquest;Para qu&eacute; categor&iacute;a deber&iacute;a crearse el cat&aacute;logo? <br />(Top = todas las categor&iacute;as)');
define('MODULE_PDF_CATALOG_CREATE_SAVE', '&iquest;Quieres guardar los valores cambiados?');
define('MODULE_PDF_CATALOG_CREATE_SUCCESSFULLY', ' creado con &eacute;xito...');
?>