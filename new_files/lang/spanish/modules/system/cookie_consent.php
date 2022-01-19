<?php
  /* --------------------------------------------------------------
   $Id: cookie_consent.js.php $

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2019 [www.modified-shop.org]
   --------------------------------------------------------------
   Released under the GNU General Public License
   --------------------------------------------------------------*/

  define('MODULE_COOKIE_CONSENT_STATUS_TITLE', 'Estado del m&oacute;dulo');
  define('MODULE_COOKIE_CONSENT_STATUS_DESC', 'Habilitar m&oacute;dulo?');
  define('MODULE_COOKIE_CONSENT_SET_READABLE_COOKIE_TITLE', 'Utilizar una cookie legible');
  define('MODULE_COOKIE_CONSENT_SET_READABLE_COOKIE_DESC', '');

  define('MODULE_COOKIE_CONSENT_SET_READABLE_COOKIE_DETAIL', 'Si utiliza el Google Tag Manager u otro software, s&oacute;lo pueden insertar scripts y cookies si el visitante lo permite. Se puede establecer una cookie adicional y legible para que el gestor de etiquetas pueda leer la solicitud del cliente.<br /><br />Configuraci&oacute;n en Google Tag Manager:<br />Vaya al men&uacute; "Variables" y cree una nueva variable en "Variables definidas por el usuario". N&oacute;mbrala, por ejemplo, "Cookie Consent".<br />A continuaci&oacute;n, haz clic en "Configurar variable" y selecciona el tipo "First-Party-Cookie". Introduzca el nombre de la cookie "MODOilTrack".<br /><br />A continuaci&oacute;n, puede editar su "trigger".<br />Configure el tipo de trigger "Pageview" y seleccione la opci&oacute;n "Some pageviews".<br />Introduzca lo siguiente como condici&oacute;n: <em>"Cookieconsent"</em> (nombre de la variable) contiene <em>["1": true]</em>. El valor contenido por cookie se puede encontrar en la configuraci&oacute;n de consentimiento de cookies.<br /><br />Puede encontrar instrucciones ilustradas aqu&iacute;: <a href="https://www.dair-media.net/blog/dsgvo-cookie-einwilligung-im-google-tag-manager-beruecksichtigen/" target="_blank">https://www.dair-media.net/blog/dsgvo-cookie-einwilligung-im-google-tag-manager-beruecksichtigen/</a>');

  define('MODULE_COOKIE_CONSENT_EXTENDED_DESCRIPTION', '<strong><font color="red">ATENCI&Oacute;N:</font></strong> Por favor, establezca la configuraci&oacute;n del consentimiento de cookies en "Configuraci&oacute;n" -> <a href="'.xtc_href_link(FILENAME_COOKIE_CONSENT).'"><strong>"Consentimiento de cookies"</strong></a>!');
  define('MODULE_COOKIE_CONSENT_MORE_INFO', 'M&aacute;s informaci&oacute;n:');