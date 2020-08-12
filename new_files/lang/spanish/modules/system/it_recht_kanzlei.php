<?php
/* -----------------------------------------------------------------------------------------
   $Id$

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   -----------------------------------------------------------------------------------------
   Released under the GNU General Public License
   ---------------------------------------------------------------------------------------*/

require_once(DIR_FS_CATALOG.'api/it-recht-kanzlei/classes/class.api_it_recht_kanzlei.php');
$api_it_recht_kanzlei = new api_it_recht_kanzlei();

define('MODULE_API_IT_RECHT_KANZLEI_TEXT_TITLE', 'IT-Recht Kanzlei AGB-Schnittstelle v'.$api_it_recht_kanzlei->modulversion);
define('MODULE_API_IT_RECHT_KANZLEI_TEXT_DESCRIPTION', 'IT-Recht Kanzlei - Actualizaci&oacute;n autom&aacute;tica de textos legales autom&aacute;ticos<br/><br/><b>Atenci&oacute;n:</b> Antes de usar el m&oacute;dulo, hay que hacer la asignaci&oacute;n de las p&aacute;ginas de contenido.<hr noshade>');
define('MODULE_API_IT_RECHT_KANZLEI_STATUS_TITLE', 'Estado');
define('MODULE_API_IT_RECHT_KANZLEI_STATUS_DESC', 'Estado del m&oacute;dulo');
define('MODULE_API_IT_RECHT_KANZLEI_TOKEN_TITLE', 'Autentificaci&oacute;n-Token');
define('MODULE_API_IT_RECHT_KANZLEI_TOKEN_DESC', 'Autentificaci&oacute;n-Token tienes que dec&iacute;rselo al IT-Recht Kanzlei.');
define('MODULE_API_IT_RECHT_KANZLEI_VERSION_TITLE', 'API Versi&oacute;n');
define('MODULE_API_IT_RECHT_KANZLEI_VERSION_DESC', 'Esto s&oacute;lo deber&iacute;a cambiarse si el IT-Recht Kanzlei le dice que lo haga. (Por defecto: 1.0)');
define('MODULE_API_IT_RECHT_KANZLEI_TYPE_AGB_TITLE', '<hr noshade>Texto legal T&eacute;rminos');
define('MODULE_API_IT_RECHT_KANZLEI_TYPE_AGB_DESC', 'Por favor, especifique en qu&eacute; p&aacute;gina debe insertarse autom&aacute;ticamente este texto legal.');
define('MODULE_API_IT_RECHT_KANZLEI_TYPE_DSE_TITLE', 'Texto legal Revocaci&oacute;n');
define('MODULE_API_IT_RECHT_KANZLEI_TYPE_DSE_DESC', 'Por favor, especifique en qu&eacute; p&aacute;gina debe insertarse autom&aacute;ticamente este texto legal.');
define('MODULE_API_IT_RECHT_KANZLEI_TYPE_WRB_TITLE', 'Texto legal Pie de imprenta');
define('MODULE_API_IT_RECHT_KANZLEI_TYPE_WRB_DESC', 'Por favor, especifique en qu&eacute; p&aacute;gina debe insertarse autom&aacute;ticamente este texto legal.');
define('MODULE_API_IT_RECHT_KANZLEI_TYPE_IMP_TITLE', 'Rechtstext Impressum');
define('MODULE_API_IT_RECHT_KANZLEI_TYPE_IMP_DESC', 'Por favor, especifique en qu&eacute; p&aacute;gina debe insertarse autom&aacute;ticamente este texto legal.');
define('MODULE_API_IT_RECHT_KANZLEI_PDF_AGB_TITLE', '<hr noshade>Selecci&oacute;n de t&eacute;rminos PDF');
define('MODULE_API_IT_RECHT_KANZLEI_PDF_AGB_DESC', 'Instrucci&oacute;n sobre si el texto legal de las Condiciones estar&aacute; disponible en formato PDF.');
define('MODULE_API_IT_RECHT_KANZLEI_PDF_DSE_TITLE', 'Privacy Policy selection PDF');
define('MODULE_API_IT_RECHT_KANZLEI_PDF_DSE_DESC', 'Instrucci&oacute;n sobre si el texto legal de la Pol&iacute;tica de Privacidad estar&aacute; disponible en formato PDF.');
define('MODULE_API_IT_RECHT_KANZLEI_PDF_WRB_TITLE', 'Selecci&oacute;n de revocaci&oacute;n PDF');
define('MODULE_API_IT_RECHT_KANZLEI_PDF_WRB_DESC', 'Instrucci&oacute;n sobre si el texto legal de la revocaci&oacute;n debe estar disponible en formato PDF.');
define('MODULE_API_IT_RECHT_KANZLEI_PDF_FILE_TITLE', '<hr noshade>Ubicaci&oacute;n PDF');
define('MODULE_API_IT_RECHT_KANZLEI_PDF_FILE_DESC', 'Especifique la ubicaci&oacute;n de los textos legales en PDF.');

?>