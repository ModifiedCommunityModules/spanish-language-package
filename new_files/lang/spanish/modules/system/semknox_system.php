<?php
  define('MODULE_SEMKNOX_SYSTEM_TEXT_TITLE', 'B&uacute;squeda en el sitio 360 Productsearch');
  define('MODULE_SEMKNOX_SYSTEM_TEXT_DESCRIPTION', 'Revolucionaria b&uacute;squeda de productos de nueva generaci&oacute;n para su empresa con un procesamiento de datos totalmente autom&aacute;tico.');
  define('MODULE_SEMKNOX_SYSTEM_STATUS_TITLE', 'Estado del m&oacute;dulo');
  define('MODULE_SEMKNOX_SYSTEM_STATUS_DESC', 'Activar Site Search 360 Productsearch');
  define('MODULE_SEMKNOX_SYSTEM_DEFAULT_CSS_TITLE', 'CSS por defecto');
  define('MODULE_SEMKNOX_SYSTEM_DEFAULT_CSS_DESC', '&iquest;Desea cargar el CSS predeterminado de Site Search 360?');
  define('MODULE_SEMKNOX_SYSTEM_COLOR_TITLE', 'Color de acento');
  define('MODULE_SEMKNOX_SYSTEM_COLOR_DESC', 'Especifique el color de acento para el t&iacute;tulo y los botones (la configuraci&oacute;n s&oacute;lo funciona si se carga el CSS est&aacute;ndar).');  
  $languages = xtc_get_languages();
  foreach ($languages as $language) {
    define('MODULE_SEMKNOX_SYSTEM_API_'.$language['id'].'_TITLE', '['.strtoupper($language['code']).'] Clave API');
    define('MODULE_SEMKNOX_SYSTEM_API_'.$language['id'].'_DESC', 'Clave API para '.strtoupper($language['code']).'');
    define('MODULE_SEMKNOX_SYSTEM_PROJECT_'.$language['id'].'_TITLE', '['.strtoupper($language['code']).'] Identificaci&oacute;n del proyecto');
    define('MODULE_SEMKNOX_SYSTEM_PROJECT_'.$language['id'].'_DESC', 'Identificaci&oacute;n del proyecto para '.strtoupper($language['code']).'');
  }