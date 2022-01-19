<?php
  /* --------------------------------------------------------------
   $Id: cookie_consent.php 13006 2020-12-06 15:26:30Z GTB $

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2019 [www.modified-shop.org]
   --------------------------------------------------------------
   Copyright (c) 2019, Andreas Guder [info@andreas-guder.de]     
   --------------------------------------------------------------   
   Released under the GNU General Public License
   --------------------------------------------------------------*/

  define('HEADING_TITLE', 'Cookie-Consentimiento');
  define('HEADING_TITLE_DETAIL', 'Consentimiento de cookies - Cookies');
  define('TABLE_HEADING_ACTION', 'Acci&oacute;n');
  define('TABLE_HEADING_STATUS', 'Estado');
  define('TABLE_HEADING_SORT', 'Ordenar');
  define('TABLE_HEADING_VALUES_CONTENT', 'Cookies/Grupo');
  define('TABLE_HEADING_VALUES_NAME', 'Nombre');
  define('TABLE_HEADING_VALUES_DESCRIPTION', 'Descripci&oacute;n');
  define('TABLE_HEADING_VALUES_COOKIES', 'Cookies');
  define('TABLE_HEADING_OPTIONS_NAME', 'Nombre');
  define('TABLE_HEADING_OPTIONS_DESCRIPTION', 'Descripci&oacute;n');
  define('TEXT_INFO_DATE_ADDED', 'Fecha a&ntilde;adida:');
  define('TEXT_INFO_LAST_MODIFIED', '&Uacute;ltima modificaci&oacute;n:');
  define('TEXT_INFO_VALUE_NAME', 'Nombre:');
  define('TEXT_INFO_VALUE_DESCRIPTION', 'Descripci&oacute;n:');
  define('TEXT_INFO_VALUE_COOKIES', 'Galletas:');
  define('TEXT_INFO_VALUE_SORT', 'Ordenar:');
  define('TEXT_INFO_VALUE_COOKIES_DESC', 'Introduzca el nombre de la cookie a eliminar. Se pueden especificar varios nombres separados por comas. Tambi&eacute;n puede introducir s&oacute;lo los primeros caracteres de los nombres, pero no deben solaparse con otras cookies para no borrar la cookie equivocada.');
  define('TEXT_INFO_HEADING_NEW_VALUE', 'Nueva cookie/grupo');
  define('TEXT_INFO_NEW_VALUE_INTRO', 'Por favor, introduzca la nueva cookie incluyendo todos los datos relevantes');
  define('TEXT_INFO_HEADING_EDIT_VALUE', 'editar galleta');
  define('TEXT_INFO_EDIT_VALUE_INTRO', 'Por favor, haga los cambios necesarios.');
  define('TEXT_INFO_HEADING_DELETE_VALUE', 'eliminar la cookie/grupo');
  define('TABLE_HEADING_VALUES_PURPOSEID', 'prop&oacute;sito-id');
  define('TEXT_INFO_HEADING_JSCRIPT_SRC', 'Javascript-Tag para incluir scripts');
  define('TEXT_INFO_HEADING_JSCRIPT_DIRECT', 'Etiqueta Javascript para scripts en l&iacute;nea');
  define('TEXT_INFO_HEADING_JSCRIPT_OTHER_CODE', 'C&oacute;digo para otros elementos de seguimiento');
  define('TEXT_INFO_DELETE_VALUE_INTRO', '&iquest;Est&aacute; seguro de que quiere eliminar esta cookie?');
  define('TEXT_INFO_HEADING_EXTERNAL_TRIGGER', '&quot;MODOilTrack&quot; contiene');
  define('TEXT_DISPLAY_NUMBER_OF_VALUES', 'Mostrando del <b>%d</b> al <b>%d</b> (de <b>%d</b> galletas)');
  define('TEXT_INFO_WARNING_COOKIES', '<b>ADVERTENCIA:</b> &iexcl;Todav&iacute;a hay %s cookies asociadas a esta categor&iacute;a! Estas cookies se eliminan junto con la categor&iacute;a.');
  define('TEXT_INFO_OPTION_NAME', 'Nombre:');
  define('TEXT_INFO_OPTION_DESCRIPTION', 'Descripci&oacute;n:');
  define('TEXT_INFO_OPTION_SORT', 'Ordenar:');
  define('TEXT_INFO_NUMBER_OPTION', 'N&uacute;mero de cookies:');
  define('TEXT_INFO_HEADING_NEW_OPTION', 'nueva categor&iacute;a');
  define('TEXT_INFO_NEW_OPTION_INTRO', 'Por favor, introduzca la nueva categor&iacute;a incluyendo todos los datos relevantes');
  define('TEXT_INFO_HEADING_EDIT_OPTION', 'editar categor&iacute;a');
  define('TEXT_INFO_EDIT_OPTION_INTRO', 'Por favor, haga los cambios necesarios.');
  define('TEXT_INFO_HEADING_DELETE_OPTION', 'Borrar categor&iacute;a');
  define('TEXT_INFO_DELETE_OPTION_INTRO', '&iquest;Est&aacute; seguro de que quiere eliminar esta categor&iacute;a?');
  define('TEXT_DISPLAY_NUMBER_OF_OPTIONS', 'Se muestran de <b>%d</b> a <b>%d</b> (de un total de <b>%d</b> propiedades)');
  define('SORT_ORDER','Orden de clasificaci&oacute;n');
  define('TEXT_SORTORDER', 'Clasificaci&oacute;n');
  define('BUTTON_COOKIES', 'Galletas');