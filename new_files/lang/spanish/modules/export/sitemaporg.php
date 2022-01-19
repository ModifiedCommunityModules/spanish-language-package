<?php
/* -----------------------------------------------------------------------------------------
   
   $Id: sitemaporg.php 
   XML-Sitemap.org for xt:Commerce SP2.1a
   by Mathis Klooss
   V1.2
   -----------------------------------------------------------------------------------------
      Original Script:
   $Id: gsitemaps.php 
   Google Sitemaps by hendrik.koch@gmx.de
   V1.1 August 2006
   -----------------------------------------------------------------------------------------
   XT-Commerce - community made shopping
   http://www.xt-commerce.com

   -----------------------------------------------------------------------------------------
   based on: 
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(cod.php,v 1.28 2003/02/14); www.oscommerce.com 
   (c) 2003	 nextcommerce (invoice.php,v 1.6 2003/08/24); www.nextcommerce.org

   Released under the GNU General Public License 
   ---------------------------------------------------------------------------------------*/

define('MODULE_SITEMAPORG_TEXT_DESCRIPTION', 'La definici&oacute;n est&aacute;ndar se puede encontrar aqu&iacute;: <a href="http://www.sitemaps.org/" target="_blank">www.sitemap.org</a>');
define('MODULE_SITEMAPORG_TEXT_TITLE', 'XML Sitemap.org');
define('MODULE_SITEMAPORG_FILE_TITLE' , '<hr />Archivo');
define('MODULE_SITEMAPORG_FILE_DESC' , 'Introduzca un nombre de archivo para el mapa del sitio, si quiere que se guarde localmente<br />(Directorio "export/")');
define('MODULE_SITEMAPORG_STATUS_DESC','Estado del m&oacute;dulo');
define('MODULE_SITEMAPORG_STATUS_TITLE','Estado');
define('MODULE_SITEMAPORG_ROOT_TITLE', '<hr /><b>Instalaci&oacute;n en Shoproot?</b>');
define('MODULE_SITEMAPORG_ROOT_DESC', 'Guardar el archivo del mapa del sitio en el directorio ra&iacute;z?');
define('MODULE_SITEMAPORG_GZIP_TITLE', '<b>&iquest;Utilizar la compresi&oacute;n gzip?</b>');
define('MODULE_SITEMAPORG_GZIP_DESC', 'La extensi&oacute;n de archivo ".gz" se ampl&iacute;a autom&aacute;ticamente!');
define('MODULE_SITEMAPORG_EXPORT_TITLE', '<hr /><b>Descargar?</b>');
define('MODULE_SITEMAPORG_EXPORT_DESC', '&iquest;Desea descargar el archivo?');
define('MODULE_SITEMAPORG_CUSTOMERS_STATUS_TITLE', 'Grupo de clientes');
define('MODULE_SITEMAPORG_CUSTOMERS_STATUS_DESC','Introduzca aqu&iacute; qu&eacute; grupo de clientes debe utilizarse para la exportaci&oacute;n de sitemap.xml.');
define('MODULE_SITEMAPORG_LANGUAGE_TITLE', 'Lengua');
define('MODULE_SITEMAPORG_LANGUAGE_DESC','Introduzca aqu&iacute; el idioma que debe utilizarse para la exportaci&oacute;n del sitemap.xml.');
?>