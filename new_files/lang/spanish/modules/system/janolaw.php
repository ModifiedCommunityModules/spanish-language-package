<?php
/* -----------------------------------------------------------------------------------------
   $Id: janolaw.php 2011-11-24 modified-shop $

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   -----------------------------------------------------------------------------------------
   based on:
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(cod.php,v 1.28 2003/02/14); www.oscommerce.com
   (c) 2003   nextcommerce (invoice.php,v 1.6 2003/08/24); www.nextcommerce.org
   (c) 2005 XT-Commerce - community made shopping http://www.xt-commerce.com ($Id: billiger.php 950 2005-05-14 16:45:21Z mz $)
   (c) 2008 Gambio OHG (billiger.php 2008-11-11 gambio)

   Released under the GNU General Public License
   ---------------------------------------------------------------------------------------*/

define('MODULE_JANOLAW_TEXT_TITLE', 'janolaw AGB Hosting-Servicio');
define('MODULE_JANOLAW_TEXT_DESCRIPTION', '<a href="http://www.janolaw.de/internetrecht/agb/agb-hosting-service/modified/index.html?partnerid=8764#menu" target="_blank"><img src="images/janolaw/janolaw_185x35.png" border=0></a><br /><br />El gran portal de derechos legales de Alemania janolaw ofrece soluciones personalizadas a sus problemas legales, desde la l&iacute;nea directa de abogados hasta contratos individuales con garant&iacute;a de abogados. Con el servicio de alojamiento de AGB para tiendas en Internet, puede ajustar los documentos b&aacute;sicos legales T&eacute;rminos, Condiciones, Descargo de Responsabilidad y Declaraci&oacute;n de Privacidad a la medida de su tienda y actualizarlos continuamente a trav&eacute;s del equipo de janolaw. No es posible una mayor protecci&oacute;n.<br /><br /><a href="http://www.janolaw.de/internetrecht/agb/agb-hosting-service/modified/index.html?partnerid=8764#menu" target="_blank"><strong><u>Haga clic aqu&iacute; para la oferta<u></strong></a>');
define('MODULE_JANOLAW_USER_ID_TITLE', '<hr noshade>User-ID');
define('MODULE_JANOLAW_USER_ID_DESC', 'Su User-ID');
define('MODULE_JANOLAW_SHOP_ID_TITLE', 'Shop-ID');
define('MODULE_JANOLAW_SHOP_ID_DESC', 'Su Shop-ID');
define('MODULE_JANOLAW_STATUS_DESC', '&iquest;Habilitar el m&oacute;dulo?');
define('MODULE_JANOLAW_STATUS_TITLE', 'Estado');
define('MODULE_JANOLAW_TYPE_TITLE', '<hr noshade>Guardar como');
define('MODULE_JANOLAW_TYPE_DESC', '&iquest;Almacenar en un archivo o en la base de datos?');
define('MODULE_JANOLAW_FORMAT_TITLE', 'Tipo de formato');
define('MODULE_JANOLAW_FORMAT_DESC', 'Guardar como texto o HTML');
define('MODULE_JANOLAW_UPDATE_INTERVAL_TITLE', '<hr noshade>Intervalo de actualizaci&oacute;n');
define('MODULE_JANOLAW_UPDATE_INTERVAL_DESC', '&iquest;Con qu&eacute; frecuencia deben actualizarse los datos?');
define('MODULE_JANOLAW_ERROR', 'Por favor, compruebe la asignaci&oacute;n de los documentos.');

define('MODULE_JANOLAW_TYPE_DATASECURITY_TITLE', '<hr noshade>Texto legal Aviso de privacidad');
define('MODULE_JANOLAW_TYPE_DATASECURITY_DESC', 'S&iacute;rvase especificar el contenido de este texto jur&iacute;dico que se insertar&aacute;.');
define('MODULE_JANOLAW_PDF_DATASECURITY_TITLE', 'PDF como Download');
define('MODULE_JANOLAW_PDF_DATASECURITY_DESC', '&iquest;Guarda el documento y a&ntilde;ade un enlace al documento?<br/><b>Importante:</b> &iexcl;Esto s&oacute;lo funciona con la versi&oacute;n HTML!');
define('MODULE_JANOLAW_MAIL_DATASECURITY_TITLE', 'E-Mail Adjunto');
define('MODULE_JANOLAW_MAIL_DATASECURITY_DESC', '&iquest;Enviar el PDF como adjunto con la confirmaci&oacute;n de la orden?');

define('MODULE_JANOLAW_TYPE_TERMS_TITLE', '<hr noshade>Texto jur&iacute;dico Condiciones de uso');
define('MODULE_JANOLAW_TYPE_TERMS_DESC', 'S&iacute;rvase especificar el contenido de este texto jur&iacute;dico que se insertar&aacute;.');
define('MODULE_JANOLAW_PDF_TERMS_TITLE', 'PDF como Download');
define('MODULE_JANOLAW_PDF_TERMS_DESC', '&iquest;Guarda el documento y a&ntilde;ade un enlace al documento?<br/><b>Importante:</b> &iexcl;Esto s&oacute;lo funciona con la versi&oacute;n HTML!');
define('MODULE_JANOLAW_MAIL_TERMS_TITLE', 'PDF como E-Mail Adjunto');
define('MODULE_JANOLAW_MAIL_TERMS_DESC', '&iquest;Enviar el PDF como adjunto con la confirmaci&oacute;n de la orden?');

define('MODULE_JANOLAW_TYPE_LEGALDETAILS_TITLE', '<hr noshade>Rechtstext Impressum');
define('MODULE_JANOLAW_TYPE_LEGALDETAILS_DESC', 'S&iacute;rvase especificar el contenido de este texto jur&iacute;dico que se insertar&aacute;.');
define('MODULE_JANOLAW_PDF_LEGALDETAILS_TITLE', 'PDF como Download');
define('MODULE_JANOLAW_PDF_LEGALDETAILS_DESC', '&iquest;Guarda el documento y a&ntilde;ade un enlace al documento?<br/><b>Importante:</b> &iexcl;Esto s&oacute;lo funciona con la versi&oacute;n HTML!');
define('MODULE_JANOLAW_MAIL_LEGALDETAILS_TITLE', 'PDF como E-Mail Adjunto');
define('MODULE_JANOLAW_MAIL_LEGALDETAILS_DESC', '&iquest;Enviar el PDF como adjunto con la confirmaci&oacute;n de la orden?');

define('MODULE_JANOLAW_TYPE_REVOCATION_TITLE', '<hr noshade>Rechtstext Widerruf');
define('MODULE_JANOLAW_TYPE_REVOCATION_DESC', 'S&iacute;rvase especificar el contenido de este texto jur&iacute;dico que se insertar&aacute;.');
define('MODULE_JANOLAW_PDF_REVOCATION_TITLE', 'PDF como Download');
define('MODULE_JANOLAW_PDF_REVOCATION_DESC', '&iquest;Guarda el documento y a&ntilde;ade un enlace al documento?<br/><b>Importante:</b> &iexcl;Esto s&oacute;lo funciona con la versi&oacute;n HTML!');
define('MODULE_JANOLAW_MAIL_REVOCATION_TITLE', 'PDF como E-Mail Adjunto');
define('MODULE_JANOLAW_MAIL_REVOCATION_DESC', '&iquest;Enviar el PDF como adjunto con la confirmaci&oacute;n de la orden?');

define('MODULE_JANOLAW_TYPE_WITHDRAWAL_TITLE', '<hr noshade>Rechtstext Widerrufsformular');
define('MODULE_JANOLAW_TYPE_WITHDRAWAL_DESC', 'S&iacute;rvase especificar el contenido de este texto jur&iacute;dico que se insertar&aacute;.<br/><br/><b>Importante:</b> esto funciona a partir de la versi&oacute;n 3. Los cambios se pueden hacer en Janolaw.');
define('MODULE_JANOLAW_PDF_WITHDRAWAL_TITLE', 'PDF como Download');
define('MODULE_JANOLAW_PDF_WITHDRAWAL_DESC', '&iquest;Guarda el documento y a&ntilde;ade un enlace al documento?<br/><b>Importante:</b> &iexcl;Esto s&oacute;lo funciona con la versi&oacute;n HTML!');
define('MODULE_JANOLAW_MAIL_WITHDRAWAL_TITLE', 'PDF como E-Mail Adjunto');
define('MODULE_JANOLAW_MAIL_WITHDRAWAL_DESC', '&iquest;Enviar el PDF como adjunto con la confirmaci&oacute;n de la orden?');
define('MODULE_JANOLAW_WITHDRAWAL_COMBINE_TITLE', 'Revocaci&oacute;n combinada con formulario de retirada');
define('MODULE_JANOLAW_WITHDRAWAL_COMBINE_DESC', 'Crear un formulario combinado de revocaci&oacute;n con retirada');

?>