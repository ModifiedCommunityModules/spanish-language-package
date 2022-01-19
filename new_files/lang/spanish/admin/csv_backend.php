<?php
/* --------------------------------------------------------------
   $Id: csv_backend.php 5217 2013-07-22 14:47:23Z Tomcraft $

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   --------------------------------------------------------------
   based on:
   (c) 2006 xt:Commerce; www.xt-commerce.com

   Released under the GNU General Public License
   --------------------------------------------------------------*/

define('TITLE','CSV Backend');
define('IMPORT','Import');
define('EXPORT','Exportaci&oacute;n');
define('UPLOAD','Subir el archivo al servidor');
define('SELECT','Seleccione el archivo a importar y realice la importaci&oacute;n (directorio /import)');
define('SAVE','Guardar en el servidor (directorio /export)');
define('LOAD','Enviar archivo al navegador');
define('CSV_TEXTSIGN_TITLE','Car&aacute;cter de reconocimiento de texto');
define('CSV_TEXTSIGN_DESC','Z.B. " &nbsp; | &nbsp;<span style="color:#c00;">Bei Semikolon als Trennzeichen sollte das Texterkennungszeichen auf " gesetzt werden!</span>');
define('CSV_SEPERATOR_TITLE','Separador');
define('CSV_SEPERATOR_DESC','Z.B. ; &nbsp; | &nbsp;<span style="color:#c00;">el campo de entrada se deja vac&iacute;o durante la exportaci&oacute;n/importaci&oacute;n por defecto \\t (= Tab) usado !</span>');
define('COMPRESS_EXPORT_TITLE','Compresi&oacute;n');
define('COMPRESS_EXPORT_DESC','Compresi&oacute;n de los datos exportados');
define('CSV_SETUP','Ajustes');
define('TEXT_IMPORT','');
define('TEXT_PRODUCTS','Productos');
define('TEXT_EXPORT','El archivo exportado se guarda en el directorio /exportado');
define('CSV_CATEGORY_DEFAULT_TITLE','Categor&iacute;a de importaci&oacute;n');
define('CSV_CATEGORY_DEFAULT_DESC','Alle Artikel, die in der CSV-Importdatei <b>keine</b> Kategorie zugeordnet haben und noch nicht im Shop vorhanden sind, werden in diese Kategorie importiert.<br/><b>Wichtig:</b> Wenn Sie Artikel ohne Kategorie in der CSV-Importdatei nicht importieren m&ouml;chten, dann w&auml;hlen Sie Kategorie "Top" aus, da in diese Kategorie keine Artikel importiert werden.');
define('CSV_CAT_DEPTH_TITLE','Kategorietiefe');
define('CSV_CAT_DEPTH_DESC','&iquest;Qu&eacute; tan profundo debe ser el &aacute;rbol de categor&iacute;as? (por ejemplo, con el ajuste predeterminado 4: Categor&iacute;a principal y tres subcategor&iacute;as)<br /> Este ajuste es importante para que las categor&iacute;as creadas en el CSV se importen correctamente. Lo mismo se aplica a la exportaci&oacute;n.<br /><span style="color:#c00;">M&aacute;s de 4 puede llevar a p&eacute;rdidas de rendimiento y puede no ser amigable para el cliente!');
?>