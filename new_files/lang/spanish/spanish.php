<?php
/* -----------------------------------------------------------------------------------------
   $Id: spanish.php 10597 27-01-2017 13:28:06Z Carloslakes $

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   -----------------------------------------------------------------------------------------
   based on:
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(spanish.php,v 1.119 2003/05/19); www.oscommerce.com
   (c) 2003 nextcommerce (spanish.php,v 1.25 2003/08/25); www.nextcommerce.org
   (c) 2006 XT-Commerce
   
   Released under the GNU General Public License 
   ---------------------------------------------------------------------------------------*/

/*
 * 
 *  DATE / TIME
 * 
 */
 
define('HTML_PARAMS','dir="ltr" xml:lang="es" xmlns="http://www.w3.org/1999/xhtml"');
@setlocale(LC_TIME, 'es_ES.UTF-8' ,'es_ES@euro', 'es_ES', 'es-ES', 'es', 'esp', 'es_ES.ISO_8859-1', 'Spain','es_ES.ISO_8859-15');

define('DATE_FORMAT_SHORT', '%d.%m.%Y');  // this is used for strftime()
define('DATE_FORMAT_LONG', '%A, %d. %B %Y'); // this is used for strftime()
define('DATE_FORMAT', 'd.m.Y');  // this is used for strftime()
define('DATE_TIME_FORMAT', DATE_FORMAT_SHORT . ' %H:%M:%S');
define('DOB_FORMAT_STRING', 'tt.mm.jjjj');

function xtc_date_raw($date, $reverse = false) {
  if ($reverse) {
    return substr($date, 0, 2) . substr($date, 3, 2) . substr($date, 6, 4);
  } else {
    return substr($date, 6, 4) . substr($date, 3, 2) . substr($date, 0, 2);
  }
}

require_once(DIR_FS_INC.'auto_include.inc.php');
foreach(auto_include(DIR_WS_LANGUAGES.'spanish/extra/','php') as $file) require ($file);

define('TITLE', STORE_NAME);
define('HEADER_TITLE_TOP', 'INICIO');
define('HEADER_TITLE_CATALOG', 'Tienda');

// if USE_DEFAULT_LANGUAGE_CURRENCY is true, use the following currency when changing language, 
// instead of staying with the applications default currency
define('LANGUAGE_CURRENCY', 'EUR');

define('MALE', 'Se&ntilde;or');
define('FEMALE', 'Se&ntilde;ora');
define('DIVERSE', 'Diverso');
/*
 * 
 *  BOXES
 * 
 */

// text for gift voucher redeeming
define('IMAGE_REDEEM_GIFT','Canjear vale!');

define('BOX_TITLE_STATISTICS','Estad&iacute;stica:');
define('BOX_ENTRY_CUSTOMERS','Clientes:');
define('BOX_ENTRY_PRODUCTS','Art&iacute;culos:');
define('BOX_ENTRY_REVIEWS','Opiniones:');
define('TEXT_VALIDATING','Sin confirmar');

// manufacturer box text
define('BOX_MANUFACTURER_INFO_HOMEPAGE', '%s Homepage');
define('BOX_MANUFACTURER_INFO_OTHER_PRODUCTS', 'M&aacute;s art&iacute;culos');

define('BOX_HEADING_ADD_PRODUCT_ID','A&ntilde;adir a la cesta');
  
define('BOX_LOGINBOX_STATUS','Grupo de clientes: ');
define('BOX_LOGINBOX_DISCOUNT','Descuento art&iacute;culo');
define('BOX_LOGINBOX_DISCOUNT_TEXT','Descuento');
define('BOX_LOGINBOX_DISCOUNT_OT','');

// reviews box text in includes/boxes/reviews.php
define('BOX_REVIEWS_WRITE_REVIEW', 'Opina sobre este art&iacute;culo!');
define('BOX_REVIEWS_NO_WRITE_REVIEW', 'No es posible opinar.');
define('BOX_REVIEWS_TEXT_OF_5_STARS', '%s de 5 estrellas!');

// pull down default text
define('PULL_DOWN_DEFAULT', 'Selecciona por favor');

// javascript messages
define('JS_ERROR', 'Faltan datos necesarios! Por favor rellena los campos correctamente.\n\n');

define('JS_REVIEW_TEXT', '* El campo debe tener min. ' . REVIEW_TEXT_MIN_LENGTH . ' letras.\n\n');
define('JS_REVIEW_RATING', '* Da Tu opini&oacute;n.\n\n');
define('JS_ERROR_NO_PAYMENT_MODULE_SELECTED', '* Por favor selecciona una forma de pago.\n');
define('JS_ERROR_SUBMITTED', 'Esta p&aacute;gina ya a sido confirmada. Haga clic en OK y espera hasta que el proceso llegue a su f&iacute;n.');
define('ERROR_NO_PAYMENT_MODULE_SELECTED', '* Por favor selecciona una forma de pago para su pedido.');
define('JS_ERROR_NO_SHIPPING_MODULE_SELECTED', '* Por favor selecciona una forma de env&iacute;o para su pedido.\n');
define('JS_ERROR_CONDITIONS_NOT_ACCEPTED', '* Si no aceptas nuestros t&eacute;rminos y condiciones de empresa,\nno podemos procesar Tu pedido!\n\n');
define('JS_ERROR_REVOCATION_NOT_ACCEPTED', '* Si no aceptas extinci&oacute;n del derecho de desistimiento en los art&iacute;culos virtuales,\nno podemos procesar Tu pedido!\n\n');
define('JS_ERROR_PRIVACY_NOTICE_NOT_ACCEPTED', '* Desafortunadamente no podemos aceptar su pedido\na menos que confirme nuestro aviso de privacidad!\n\n');
define('JS_REVIEW_AUTHOR', '* Por favor pon Tu nombre.\n\n');

/*
 * 
 * ACCOUNT FORMS
 * 
 */

define('ENTRY_COMPANY_ERROR', '');
define('ENTRY_COMPANY_TEXT', '');
define('ENTRY_GENDER_ERROR', 'Selecciona tratamiento por favor.');
define('ENTRY_GENDER_TEXT', '*');
define('ENTRY_FIRST_NAME_ERROR', 'Tu nombre tiene que tener al menos ' . ENTRY_FIRST_NAME_MIN_LENGTH . ' caracteres.');
define('ENTRY_FIRST_NAME_TEXT', '*');
define('ENTRY_LAST_NAME_ERROR', 'Tu apellido tiene que tener al menos ' . ENTRY_LAST_NAME_MIN_LENGTH . ' caracteres.');
define('ENTRY_LAST_NAME_TEXT', '*');
define('ENTRY_DATE_OF_BIRTH_ERROR', 'La fecha de nacimiento tiene que tener este formato DD.MM.AAAA (p.E. 21.05.1970)');
define('ENTRY_DATE_OF_BIRTH_TEXT', '* (p.E. 21.05.1970)');
define('ENTRY_EMAIL_ADDRESS_ERROR', 'Tu direcci&oacute;n E-Mail tiene que tener min. ' . ENTRY_EMAIL_ADDRESS_MIN_LENGTH . ' caracteres.');
define('ENTRY_EMAIL_ADDRESS_CHECK_ERROR', 'El direcci&oacute;n E-Mail no esta v&aacute;lida - por favor repasala. (Por el momento no se permiten accentos en direcciones E-Mail.)');
define('ENTRY_EMAIL_ERROR_NOT_MATCHING', 'Las direcciones de correo E-Mail no coinciden.');
define('ENTRY_EMAIL_ADDRESS_ERROR_EXISTS', 'La direcci&oacute;n E-mail ya existe - por favor repasala.');
define('ENTRY_EMAIL_ADDRESS_TEXT', '*');
define('ENTRY_STREET_ADDRESS_ERROR', 'Calle/N&ordm;. tiene que contener min. ' . ENTRY_STREET_ADDRESS_MIN_LENGTH . ' caracteres.');
define('ENTRY_STREET_ADDRESS_TEXT', '*');
define('ENTRY_SUBURB_TEXT', '');
define('ENTRY_POST_CODE_ERROR', 'El c&oacute;digo postal debe contener al menos ' . ENTRY_POSTCODE_MIN_LENGTH . ' caracteres.');
define('ENTRY_POST_CODE_TEXT', '*');
define('ENTRY_CITY_ERROR', 'Poblaci&oacute;n debe contener al menos ' . ENTRY_CITY_MIN_LENGTH . ' caracteres.');
define('ENTRY_CITY_TEXT', '*');
define('ENTRY_STATE_ERROR', 'La provincia debe contener al menos ' . ENTRY_STATE_MIN_LENGTH . ' caracteres.');
define('ENTRY_STATE_ERROR_SELECT', 'Por favor elige la provincia.');
define('ENTRY_STATE_TEXT', '*');
define('ENTRY_COUNTRY_ERROR', 'Por favor elige el Pa&iacute;s.');
define('ENTRY_COUNTRY_TEXT', '*');
define('ENTRY_TELEPHONE_NUMBER_ERROR', 'El n&uacute;mero de tel&eacute;fono debe contener al menos ' . ENTRY_TELEPHONE_MIN_LENGTH . ' caracteres.');
define('ENTRY_TELEPHONE_NUMBER_TEXT', '*');
define('ENTRY_FAX_NUMBER_TEXT', '');
define('ENTRY_NEWSLETTER_TEXT', '');
define('ENTRY_PASSWORD_ERROR', 'La contrase&ntilde;a debe contener al menos ' . ENTRY_PASSWORD_MIN_LENGTH . ' caracteres.');
define('ENTRY_PASSWORD_ERROR_MIN_LOWER', 'La contrase&ntilde;a debe contener al menos %s letra min&uacute;scula.');
define('ENTRY_PASSWORD_ERROR_MIN_UPPER', 'La clavo debe contener al menos %s letra may&uacute;scula.');
define('ENTRY_PASSWORD_ERROR_MIN_NUM', 'La contrase&ntilde;a debe contener al menos %s n&uacute;mero.');
define('ENTRY_PASSWORD_ERROR_MIN_CHAR', 'La contrase&ntilde;a debe contener al menos %s caracter especial.');
define('ENTRY_PASSWORD_ERROR_NOT_MATCHING', 'Las contrase&ntilde;as introducidas no coinciden.');
define('ENTRY_PASSWORD_TEXT', '*');
define('ENTRY_PASSWORD_CONFIRMATION_TEXT', '*');
define('ENTRY_PASSWORD_CURRENT_TEXT', '*');
define('ENTRY_PASSWORD_CURRENT_ERROR', 'La contrase&ntilde;a debe contener al menos ' . ENTRY_PASSWORD_MIN_LENGTH . ' caracteres.');
define('ENTRY_PASSWORD_NEW_TEXT', '*');
define('ENTRY_PASSWORD_NEW_ERROR', 'La contrase&ntilde;a nueva debe contener al menos ' . ENTRY_PASSWORD_MIN_LENGTH . ' caracteres.');
define('ENTRY_PASSWORD_NEW_ERROR_NOT_MATCHING', 'Las contrase&ntilde;as introducidas no coinciden.');

/*
 * 
 *  RESULT PAGES
 * 
 */
 
define('TEXT_RESULT_PAGE', 'P&aacute;ginas:');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS', 'Se muestran <strong>%d</strong> a <strong>%d</strong> (de un total de <strong>%d</strong> art&iacute;culos)');
define('TEXT_DISPLAY_NUMBER_OF_ORDERS', 'Se muestran <strong>%d</strong> a <strong>%d</strong> (de un total de <strong>%d</strong> pedidos)');
define('TEXT_DISPLAY_NUMBER_OF_REVIEWS', 'Se muestran <strong>%d</strong> a <strong>%d</strong> (de un total de <strong>%d</strong> opiniones)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_NEW', 'Se muestran <strong>%d</strong> a <strong>%d</strong> (de un total de <strong>%d</strong> art&iacute;culos nuevos)');
define('TEXT_DISPLAY_NUMBER_OF_SPECIALS', 'Se muestran <strong>%d</strong> a <strong>%d</strong> (de un total de <strong>%d</strong> Ofertas)');

/*
 * 
 * SITE NAVIGATION
 * 
 */

define('PREVNEXT_TITLE_PREVIOUS_PAGE', 'p&aacute;gina anterior');
define('PREVNEXT_TITLE_NEXT_PAGE', 'pr&oacute;xima p&aacute;gina');
define('PREVNEXT_TITLE_PAGE_NO', 'P&aacute;gina %d');
define('PREVNEXT_TITLE_PREV_SET_OF_NO_PAGE', '%d P&aacute;ginas anteriores');
define('PREVNEXT_TITLE_NEXT_SET_OF_NO_PAGE', '%d P&aacute;ginas posteriores');

/*
 * 
 * PRODUCT NAVIGATION
 * 
 */

define('PREVNEXT_BUTTON_PREV', '&laquo;');
define('PREVNEXT_BUTTON_NEXT', '&raquo;');

/*
 * 
 * IMAGE BUTTONS
 * 
 */

define('IMAGE_BUTTON_ADD_ADDRESS', 'Nueva direcci&oacute;n');
define('IMAGE_BUTTON_BACK', 'Volver');
define('IMAGE_BUTTON_CHANGE_ADDRESS', 'Editar direcci&oacute;n');
define('IMAGE_BUTTON_CHECKOUT', 'Caja');
define('IMAGE_BUTTON_CONFIRM_ORDER', 'Comprar');
define('IMAGE_BUTTON_CONTINUE', 'Seguir');
define('IMAGE_BUTTON_DELETE', 'Borrar');
define('IMAGE_BUTTON_LOGIN', 'Entrar');
define('IMAGE_BUTTON_IN_CART', 'Al carro de compra');
define('IMAGE_BUTTON_SEARCH', 'Buscar');
define('IMAGE_BUTTON_UPDATE', 'Actualizar');
define('IMAGE_BUTTON_UPDATE_CART', 'Actualizar cesta de compra');
define('IMAGE_BUTTON_WRITE_REVIEW', 'Tu opini&oacute;n');
define('IMAGE_BUTTON_ADMIN', 'Administrador'); 
define('IMAGE_BUTTON_PRODUCT_EDIT', 'Editar producto');
define('IMAGE_BUTTON_SEND', 'Enviar');
define('IMAGE_BUTTON_CONTINUE_SHOPPING', 'Seguir comprando');
define('IMAGE_BUTTON_CHECKOUT_STEP2', 'Seguir al paso 2');
define('IMAGE_BUTTON_CHECKOUT_STEP3', 'Seguir al paso 3');

define('SMALL_IMAGE_BUTTON_DELETE', 'Borrar');
define('SMALL_IMAGE_BUTTON_EDIT', 'Cambiar');
define('SMALL_IMAGE_BUTTON_VIEW', 'Mostrar');

define('ICON_ARROW_RIGHT', 'Mostrar m&aacute;s');
define('ICON_CART', 'A la cesta');
define('ICON_SUCCESS', 'exitoso');
define('ICON_WARNING', 'Advertencia');
define('ICON_ERROR', 'Error');

define('TEXT_PRINT', 'Imprimir');

define('BUTTON_RESET', 'Reiniciar');
define('BUTTON_UPDATE', 'Actualizaci&oacute;n');


/*
 * 
 *  GREETINGS
 * 
 */

define('TEXT_GREETING_PERSONAL', 'Bienvenido de nuevo <span class="greetUser">%s!</span>    Para ver nuestros art&iacute;culos nuevos <a href="%s">pulsa aqu&iacute;</a>');
define('TEXT_GREETING_PERSONAL_RELOGON', '<small>Si no eres %s, por favor entra <a href="%s">aqui</a> con tus datos.</small>');
define('TEXT_GREETING_GUEST', 'Bienvenido <span class="greetUser">Visitante!</span> Si ya estas registrado en nuestra tienda on-line <a href="%s">Pulsa aqu&iacute;</a>. &iquest;Y si a&uacute;n no lo estas <a href="%s">Registrate</a> como cliente nuevo?');

define('TEXT_SORT_PRODUCTS', 'La ordenaci&oacute;n de los art&iacute;culos es ');
define('TEXT_DESCENDINGLY', 'descendente A-Z');
define('TEXT_ASCENDINGLY', 'ascendente Z-A');
define('TEXT_BY', ' por ');

define('TEXT_OF_5_STARS', '%s de 5 estrellas!');
define('TEXT_REVIEW_BY', 'de %s');
define('TEXT_REVIEW_WORD_COUNT', '%s Palabras');
define('TEXT_REVIEW_RATING', 'Valoraci&oacute;n: %s [%s]');
define('TEXT_REVIEW_DATE_ADDED', 'A&ntilde;adido el : %s');
define('TEXT_NO_REVIEWS', 'Hasta ahora no hay valoraciones.');
define('TEXT_NO_NEW_PRODUCTS', 'No hay art&iacute;culos nuevos desde los &uacute;ltimos '.MAX_DISPLAY_NEW_PRODUCTS_DAYS.' d&iacute;as. En su lugar puede ver aqui los &uacute;ltimos articulos a&ntilde;adidos.');
define('TEXT_UNKNOWN_TAX_RATE', 'Tasa de impuesto desconocida');

/*
 * 
 * WARNINGS
 * 
 */

define('WARNING_INSTALL_DIRECTORY_EXISTS', 'Advertencia: El directorio de instalaci&oacute;n sigue existiendo en: %s. Por razones de seguridad, borra por favor este directorio!');
define('WARNING_CONFIG_FILE_WRITEABLE', 'Advertencia: El software de modified eCommerce puede escribir en el fichero de configuraci&oacute;n: %s. Esto tienes que corregirlo. Pon el permiso de acceso 444 a este fichero!');
define('WARNING_SESSION_DIRECTORY_NON_EXISTENT', 'Advertencia: El directorio de sesi&oacute;n no existe: ' . xtc_session_save_path() . '. Las sesiones no funcionar&aacute;n hasta que se cree el directorio!');
define('WARNING_SESSION_DIRECTORY_NOT_WRITEABLE', 'Advertencia: El software de modified eCommerce no puede escribir en el directorio de sesiones: ' . xtc_session_save_path() . '. Las sesiones no funcionar&aacute;n hasta que pongan los permisos correctos!');
define('WARNING_SESSION_AUTO_START', 'Advertencia: session.auto_start esta activado(enabled) - Por favor desactiva(disabled) esta opci&oacute;n PHP en la php.ini y arranque de nuevo el servidor-web!');
define('WARNING_DOWNLOAD_DIRECTORY_NON_EXISTENT', 'Advertencia: El directorio para los art&iacute;culos descargables no existe: ' . DIR_FS_DOWNLOAD . '. Por favor crea el directorio. Si no, no funcionara esta opci&oacute;n!');

define('SUCCESS_ACCOUNT_UPDATED', 'Tu cuenta a sido actualizada con &eacute;xito.');
define('SUCCESS_PASSWORD_UPDATED', 'Tu contrase&ntilde;a a sido cambiada con &eacute;xito!');
define('ERROR_CURRENT_PASSWORD_NOT_MATCHING', 'La contrase&ntilde;a introducida no coincide con la que esta guardada actualmente. Int&eacute;ntalo otra vez.');
define('TEXT_MAXIMUM_ENTRIES', '<strong>Aviso:</strong> Puedo poner hasta %s direcciones!');
define('SUCCESS_ADDRESS_BOOK_ENTRY_DELETED', 'La entrada seleccionada ha sido borrada correctamente.');
define('SUCCESS_ADDRESS_BOOK_ENTRY_UPDATED', 'El libro de direcciones ha sido actualizado correctamente!');
define('WARNING_PRIMARY_ADDRESS_DELETION', 'La direcci&oacute;n por defecto, no se puede borrar. Primero tienes que elegir otra direcci&oacute;n por defecto. Despu&eacute;s podr&aacute;s borrar la entrada seleccionada.');
define('ERROR_NONEXISTING_ADDRESS_BOOK_ENTRY', 'Esta direcci&oacute;n no existe.');
define('ERROR_ADDRESS_BOOK_FULL', 'Ya no puedes poner m&aacute;s direcciones. Tienes que borrar alguna de las direcciones que ya no usas. Despu&eacute;s podr&aacute;s a&ntilde;adir una direcci&oacute;n nueva.');
define('ERROR_CHECKOUT_SHIPPING_NO_METHOD', 'Por favor activa una forma de env&iacute;o.');
define('ERROR_CHECKOUT_SHIPPING_NO_MODULE', 'Por favor activa una forma de pago.');

//  conditions check

define('ERROR_CONDITIONS_NOT_ACCEPTED', '* Si no aceptas nuestros t&eacute;rminos y condiciones de empresa,\nno podemos procesar Tu pedido!!');
define('ERROR_REVOCATION_NOT_ACCEPTED', '* Si no aceptas extinci&oacute;n del derecho de desistimiento en los art&iacute;culos virtuales,\nno podemos procesar Tu pedido!');
define('ERROR_PRIVACY_NOTICE_NOT_ACCEPTED', 'Por favor, confirme que ha le&iacute;do nuestro aviso de privacidad.');

define('SUB_TITLE_OT_DISCOUNT','Descuento:');

define('TAX_ADD_TAX','incl. ');
define('TAX_NO_TAX','m&aacute;s ');

define('NOT_ALLOWED_TO_SEE_PRICES','Debe estar registrado para poder ver los precios.');
define('NOT_ALLOWED_TO_SEE_PRICES_TEXT','Hay que registrarse para poder ver los precios.');

define('TEXT_DOWNLOAD','Descarga');
define('TEXT_VIEW','Ver');

define('TEXT_BUY', '1 x \'');
define('TEXT_NOW', '\' pedir');
define('TEXT_GUEST',' Visita');
define('TEXT_SEARCH_ENGINE_AGENT','M&aacute;quina de b&uacute;squeda');

/*
 * 
 * ADVANCED SEARCH
 * 
 */

define('TEXT_AC_ALL_CATEGORIES', 'Todos');
define('TEXT_ALL_CATEGORIES', 'Todas las categor&iacute;as');
define('TEXT_ALL_MANUFACTURERS', 'Todos los productores');
define('JS_AT_LEAST_ONE_INPUT', '* Tienes que rellenar uno de los siguientes campos:\nPalabras contrase&ntilde;a\nPrecio desde\nPrecio hasta\n');
define('AT_LEAST_ONE_INPUT', 'Tienes que rellenar uno de los siguientes campos::<br />Palabra contrase&ntilde;a con min. tres caracteres<br />Precio desde<br />Precio hasta<br />');
define('TEXT_SEARCH_TERM','La b&uacute;squeda de: ');
define('JS_INVALID_FROM_DATE', '* Fecha no es v&aacute;lida(desde)\n');
define('JS_INVALID_TO_DATE', '* Fecha no es v&aacute;lida (hasta)\n');
define('JS_TO_DATE_LESS_THAN_FROM_DATE', '* La fecha (desde) tiene que ser posterior o igual a la fecha de (hasta)\n');
define('JS_PRICE_FROM_MUST_BE_NUM', '* \"Precio desde\" tiene que ser una cifra\n\n');
define('JS_PRICE_TO_MUST_BE_NUM', '* \"Precio hasta\" tiene que ser una cifra\n\n');
define('JS_PRICE_TO_LESS_THAN_PRICE_FROM', '* Precio "hasta" tiene que ser m&aacute;s alto o igual que el precio "desde".\n');
define('JS_INVALID_KEYWORDS', '* T&eacute;rmino de b&uacute;squeda no permitido\n');
define('TEXT_LOGIN_ERROR', '<b>ERROR:</b> Ninguna coincidencia en \'Direcci&oacute;n E-Mail\' y/o en la \'contrase&ntilde;a\'.');
define('TEXT_RELOGIN_NEEDED', 'Por favor, inicie sesi&oacute;n de nuevo.');
//define('TEXT_NO_EMAIL_ADDRESS_FOUND', '<span class="color_error_message"><b>ATENCION:</b></span> El E-Mail introducido no esta registrado. Por favor, prueba otra vez.'); // Not used anymore as we do not give a hint that an e-mail address is or is not in the database!
define('TEXT_PASSWORD_SENT', 'Se ha enviado una contrase&ntilde;a nueva por correo electr&oacute;nico.');
define('TEXT_PRODUCT_NOT_FOUND', 'El art&iacute;culo no se ha encontrado!');
define('TEXT_MORE_INFORMATION', 'Para m&aacute;s informaci&oacute;n puedes visitar la <a href="%s" onclick="window.open(this.href); return false;">Homepage</a> sobre este art&iacute;culo.');
define('TEXT_DATE_ADDED', 'Este art&iacute;culo lo hemos a&ntilde;adido el %s.');
define('TEXT_DATE_AVAILABLE', '<span class="color_error_message">Este art&iacute;culo estar&aacute; probablemente disponible de nuevo a partir del %s.</span>');
define('SUB_TITLE_SUB_TOTAL', 'Sub-Total:');

define('OUT_OF_STOCK_CANT_CHECKOUT', 'Lo sentimos, pero no hay disponibilidad suficiente de los art&iacute;culos marcados con ' . STOCK_MARK_PRODUCT_OUT_OF_STOCK . '.<br />Por favor reduce la cantidad pedida del art&iacute;culo marcado. Muchas gracias');
define('OUT_OF_STOCK_CAN_CHECKOUT', 'Lo sentimos, pero no hay disponibilidad suficiente de los art&iacute;culos marcados con ' . STOCK_MARK_PRODUCT_OUT_OF_STOCK . ' .<br />La cantidad pedida ser&aacute; entregada a corto plazo. Si lo deseas podemos mandar parte del pedido.');

define('MINIMUM_ORDER_VALUE_NOT_REACHED_1', 'Pedido minimo que tienes que hacer: ');
define('MINIMUM_ORDER_VALUE_NOT_REACHED_2', '<br />Aun tienes que comprar por un valor de: ');
define('MAXIMUM_ORDER_VALUE_REACHED_1', 'El valor del importe m&aacute;ximo de los pedidos es de: ');
define('MAXIMUM_ORDER_VALUE_REACHED_2', '<br /> Por favor reduce el importe del pedido: ');

define('ERROR_INVALID_PRODUCT', 'No hemos encontrado el art&iacute;culo seleccionado!');
define('JS_KEYWORDS_MIN_LENGTH', 'El t&eacute;rmino de b&uacute;squeda debe tener al menos ' . (int)SEARCH_MIN_LENGTH . ' caracteres de longitud.\n');

/*
 * 
 * NAVBAR TITLE
 * 
 */

define('NAVBAR_TITLE_ACCOUNT', 'Tu cuenta personal');
define('NAVBAR_TITLE_1_ACCOUNT_EDIT', 'Tu cuenta');
define('NAVBAR_TITLE_2_ACCOUNT_EDIT', 'Cambiar los datos personales');
define('NAVBAR_TITLE_1_ACCOUNT_HISTORY', 'Tu cuenta');
define('NAVBAR_TITLE_2_ACCOUNT_HISTORY', 'Pedidos realizados');
define('NAVBAR_TITLE_1_ACCOUNT_HISTORY_INFO', 'Tu cuenta');
define('NAVBAR_TITLE_2_ACCOUNT_HISTORY_INFO', 'Pedido realizado');
define('NAVBAR_TITLE_3_ACCOUNT_HISTORY_INFO', 'Pedido N&ordm;¨: %s');
define('NAVBAR_TITLE_1_ACCOUNT_PASSWORD', 'Tu cuenta');
define('NAVBAR_TITLE_2_ACCOUNT_PASSWORD', 'Cambiar contrase&ntilde;a');
define('NAVBAR_TITLE_1_ADDRESS_BOOK', 'Tu cuenta');
define('NAVBAR_TITLE_2_ADDRESS_BOOK', 'Libreta de direcciones');
define('NAVBAR_TITLE_1_ADDRESS_BOOK_PROCESS', 'Tu cuenta');
define('NAVBAR_TITLE_2_ADDRESS_BOOK_PROCESS', 'Direcciones');
define('NAVBAR_TITLE_ADD_ENTRY_ADDRESS_BOOK_PROCESS', 'A&ntilde;adir direcci&oacute;n');
define('NAVBAR_TITLE_MODIFY_ENTRY_ADDRESS_BOOK_PROCESS', 'Editar direcci&oacute;n');
define('NAVBAR_TITLE_DELETE_ENTRY_ADDRESS_BOOK_PROCESS', 'Borrar direcci&oacute;n');
define('NAVBAR_TITLE_ADVANCED_SEARCH', 'B&uacute;squeda avanzada');
define('NAVBAR_TITLE1_ADVANCED_SEARCH', 'B&uacute;squeda avanzada');
define('NAVBAR_TITLE2_ADVANCED_SEARCH', 'Resultados de b&uacute;squeda');
define('NAVBAR_TITLE_1_CHECKOUT_CONFIRMATION', 'Caja');
define('NAVBAR_TITLE_2_CHECKOUT_CONFIRMATION', 'Confirmar');
define('NAVBAR_TITLE_1_CHECKOUT_PAYMENT', 'Caja');
define('NAVBAR_TITLE_2_CHECKOUT_PAYMENT', 'Forma de pago');
define('NAVBAR_TITLE_1_PAYMENT_ADDRESS', 'Caja');
define('NAVBAR_TITLE_2_PAYMENT_ADDRESS', 'Cambiar direcci&oacute;n de facturaci&oacute;n');
define('NAVBAR_TITLE_1_CHECKOUT_SHIPPING', 'Caja');
define('NAVBAR_TITLE_2_CHECKOUT_SHIPPING', 'Informaci&oacute;n de env&iacute;o');
define('NAVBAR_TITLE_1_CHECKOUT_SHIPPING_ADDRESS', 'Caja');
define('NAVBAR_TITLE_2_CHECKOUT_SHIPPING_ADDRESS', 'Cambiar direcci&oacute;n de env&iacute;o');
define('NAVBAR_TITLE_1_CHECKOUT_SUCCESS', 'Caja');
define('NAVBAR_TITLE_2_CHECKOUT_SUCCESS', 'Terminado');
define('NAVBAR_TITLE_CREATE_ACCOUNT', 'Crear cuenta');
define('NAVBAR_TITLE_LOGIN', 'Entrar');
define('NAVBAR_TITLE_LOGOFF','Hasta pronto');
define('NAVBAR_TITLE_PRODUCTS_NEW', 'Novedades');
define('NAVBAR_TITLE_SHOPPING_CART', 'Cesta de compra');
define('NAVBAR_TITLE_SPECIALS', 'Ofertas');
define('NAVBAR_TITLE_COOKIE_USAGE', 'Uso de Cookie');
define('NAVBAR_TITLE_PRODUCT_REVIEWS', 'Opiniones');
define('NAVBAR_TITLE_REVIEWS_WRITE', 'Opiniones');
define('NAVBAR_TITLE_REVIEWS','Opiniones');
define('NAVBAR_TITLE_SSL_CHECK', 'Aviso de seguridad');
define('NAVBAR_TITLE_CREATE_GUEST_ACCOUNT','Tu direcci&oacute;n');
define('NAVBAR_TITLE_PASSWORD_DOUBLE_OPT','&iquest;Has olvidado la contrase&ntilde;a?');
define('NAVBAR_TITLE_NEWSLETTER','Bolet&iacute;n de noticias');
define('NAVBAR_GV_REDEEM', 'Canjear vale');
define('NAVBAR_GV_SEND', 'Enviar vale');
define('NAVBAR_TITLE_DOWNLOAD', 'Descargas');

/*
 * 
 *  MISC
 * 
 */

define('TEXT_NEWSLETTER','&iquest;Quieres estar siempre al corriente?<br />Sin problema, darte de alta en nuestro Bolet&iacute;n de noticias y estar&aacute;s informado de todas las novedades en nuestra tienda on-line.');
define('TEXT_EMAIL_INPUT','Tu correo electr&oacute;nico a sido a&ntilde;adido a nuestro sistema.<br />Al mismo tiempo recibir&aacute;s un correo electr&oacute;nico con un enlace de activaci&oacute;n. Por favor pulsa sobre el enlace para confirmar el alta. Si no lo haces, de lo contrario, no recibir&aacute;s boletines de noticias de nuestro sistema!');

define('TEXT_WRONG_CODE','El c&oacute;digo de seguridad que has introducido no coincide con el que se muestra en la pantalla. Por favor int&eacute;ntalo otra vez.');
define('TEXT_EMAIL_EXIST_NO_NEWSLETTER','Esta direcci&oacute;n de correo electr&oacute;nico ya existe en nuestra base de datos, pero a&uacute;n no esta activado para recibir noticias nuevas -Newsletter-!');
define('TEXT_EMAIL_EXIST_NEWSLETTER','Esta direcci&oacute;n de correo electr&oacute;nico ya existe en nuestra base de datos y esta activado para recibir noticias nuevas -Newsletter-!');
define('TEXT_EMAIL_NOT_EXIST','Esta direcci&oacute;n de correo electr&oacute;nico no existe en nuestra base de datos!');
define('TEXT_EMAIL_DEL','Tu E-Mail ha sido borrado de la base de datos del Newsletter.');
define('TEXT_EMAIL_DEL_ERROR','Ha ocurrido un error, Tu E-Mail no ha sido borrado!');
define('TEXT_EMAIL_ACTIVE','Hemos activado con &eacute;xito el env&iacute;o de newsletter a su E-Mail!');
define('TEXT_EMAIL_ACTIVE_ERROR','Ha ocurrido un error, no hemos podido activar Tu correo E-Mail para poder recibir noticias nuevas de nuestro sistema!');
define('TEXT_EMAIL_SUBJECT','Tu alta en el bolet&iacute;n de noticias');

define('TEXT_CUSTOMER_GUEST',' Visita');

define('TEXT_LINK_MAIL_SENDED','La solicitud para obtener una contrase&ntilde;a nueva tiene que ser confirmada.<br />Por eso le hemos mandado un correo electr&oacute;nico con un enlace de activaci&oacute;n. Por favor pulse sobre el enlace cuando reciba el E-Mail. A lo contrario no le podemos enviar una contrase&ntilde;a nueva! <br/><br/>El enlace estar&aacute; activo para solo %s minutos.');
define('TEXT_PASSWORD_MAIL_SENDED','Te hemos enviado un E-Mail con una nueva contrase&ntilde;a.<br />Por favor cambia la contrase&ntilde;a a su gusto, en su pr&oacute;xima visita.');
define('TEXT_CODE_ERROR','Por favor introduzca Tu E-Mail y el c&oacute;digo de seguridad de nuevo. <br />&iexcl;Introduce los datos correctamente!');
define('TEXT_EMAIL_ERROR','Por favor introduzca Tu E-Mail y el c&oacute;digo de seguridad de nuevo. <br />&iexcl;Introduce los datos correctamente!');
define('TEXT_NO_ACCOUNT','Desgraciadamente tenemos que avisarte, de que la petici&oacute;n a obtener una nueva contrase&ntilde;a, era inv&aacute;lida o que ha sobrepasado el tiempo de v&aacute;lidez.<br />Por favor, int&eacute;ntalo otra vez.');
define('HEADING_PASSWORD_FORGOTTEN','&iquest;Has olvidado la contrase&ntilde;a?');
define('TEXT_PASSWORD_FORGOTTEN','Cambia Tu contrase&ntilde;a en tres pasos f&aacute;ciles.');
define('TEXT_EMAIL_PASSWORD_FORGOTTEN','Confirmaci&oacute;n para cambio de contrase&ntilde;a'); // ä und ü für korrekte E-Mail Betreffszeile lassen!
define('TEXT_EMAIL_PASSWORD_NEW_PASSWORD','Tu contrase&ntilde;a nueva');
define('ERROR_MAIL','Por favor revisa los datos introducidos en el formulario.');

define('CATEGORIE_NOT_FOUND','No se ha encontradp la categor&iacute;a');

define('GV_FAQ', 'Preguntas frecuentes sobre cupones');
define('ERROR_NO_REDEEM_CODE', 'Tienes que introducir un c&oacute;digo.');
define('ERROR_NO_INVALID_REDEEM_GV', 'C&oacute;digo no v&aacute;lido');
define('TABLE_HEADING_CREDIT', 'Saldo');
define('EMAIL_GV_TEXT_SUBJECT', 'Un regalo de %s');
define('MAIN_MESSAGE', 'Te has decidido de regalar un cup&oacute;n con un valor de %s para enviarlo a %s, que tiene la direcci&oacute;n de correo electr&oacute;nico %s.<br /><br />Este texto aparecer&aacute; en el correo E-Mail:<br /><br />Hola %s,<br /><br />te han regalado un cup&oacute;n de un valor de %s. Se lo a regalado %s.');
define('REDEEMED_AMOUNT','Tu cup&oacute;n a sido contabilizado correctamente a Tu cuenta. Valor del cup&oacute;n:');
define('REDEEMED_COUPON','Tu cup&oacute;n a sido contabilizado correctamente y ser&aacute; descontado autom&aacute;ticamente en Tu pr&oacute;ximo pedido.');

define('ERROR_INVALID_USES_USER_COUPON','Puedes canjear este cup&oacute;n solo  ');
define('ERROR_INVALID_USES_COUPON','Este cup&oacute;n puede canjear los clientes solo ');
define('TIMES',' vez..');
define('ERROR_INVALID_STARTDATE_COUPON','Tu cup&oacute;n ya no esta disponible.');
define('ERROR_INVALID_FINISDATE_COUPON','Ha transcurrido el tiempo de validez.');
define('ERROR_INVALID_MINIMUM_ORDER_COUPON', 'Este cup&oacute;n solo puede ser canjeado si compras por un importe min. de %s!');
define('ERROR_INVALID_MINIMUM_ORDER_COUPON_ADD','<br/>Al alcanzar el importe min. de pedidos, tienes que introducir de nuevo el c&oacute;digo del cup&oacute;n!');
define('ERROR_COUPON_REQUIRES_ACCOUNT', 'Para canjear el vale necesitas una cuenta de cliente.');
define('PERSONAL_MESSAGE', '%s escribe:');

define('TEXT_LINK_TITLE_INFORMATION', 'Informaci&oacute;n');

/*
 * 
 *  COUPON POPUP
 * 
 */
 
define('TEXT_CLOSE_WINDOW', 'Cerrar ventana [x]');
define('TEXT_COUPON_HELP_HEADER', 'Tu Vale/Cup&oacute;n ha sido canjeado correctamente.');
define('TEXT_COUPON_HELP_NAME', '<br /><br />Descripci&oacute;n del Vale/Cup&oacute;n: %s');
define('TEXT_COUPON_HELP_SPECIALS', '<br /><br />Su cup&oacute;n no se puede utilizar en ofertas especiales.');
define('TEXT_COUPON_HELP_FIXED', '<br /><br />El valor del cup&oacute;n/vale es de %s ');
define('TEXT_COUPON_HELP_MINORDER', '<br /><br />El valor min. del pedido es %s ');
define('TEXT_COUPON_HELP_FREESHIP', '<br /><br />Vale para env&iacute;o gratuito');
define('TEXT_COUPON_HELP_DESC', '<br /><br />Descripci&oacute;n del cup&oacute;n: %s');
define('TEXT_COUPON_HELP_DATE', '<br /><br />Este cup&oacute;n tiene validez desde %s hasta %s');
define('TEXT_COUPON_HELP_RESTRICT', '<br /><br />Restricciones para art&iacute;culos / categor&iacute;as');
define('TEXT_COUPON_HELP_CATEGORIES', 'Categor&iacute;a');
define('TEXT_COUPON_HELP_PRODUCTS', 'Art&iacute;culo');
define('ERROR_ENTRY_AMOUNT_CHECK', 'El importe introducido para el cup&oacute;n no es v&aacute;lido');
define('ERROR_ENTRY_EMAIL_ADDRESS_CHECK', 'La direcci&oacute;n del correo electr&oacute;nico no es v&aacute;lida');
define('TEXT_COUPON_PRODUCTS_RESTRICT', 'Su vale/cup&oacute;n est&aacute; limitado a algunos productos.');
define('TEXT_COUPON_CATEGORIES_RESTRICT', 'Su vale/cup&oacute;n est&aacute; limitado a algunas categor&iacute;as.');

// VAT Reg No
define('ENTRY_VAT_TEXT', 'S&oacute;lo para Espa&ntilde;a y UE!');
define('ENTRY_VAT_ERROR', 'El n&uacute;mero fiscal introducido no es v&aacute;lido o no se puede verificar en estos momentos! Por favor introduce un n&uacute;mero v&aacute;lido o deja el campo vac&iacute;o.');
define('MSRP','PVP');
define('YOUR_PRICE','Tu precio ');
define('UNIT_PRICE','Precio por unidad ');
define('ONLY',' Ahora solo ');// DokuMan - Werbung mit durchgestrichenen Statt-Preisen ist zulässig
define('FROM','desde ');
define('YOU_SAVE','Te ahorras ');
define('INSTEAD','Nuestro precio anterior ');// DokuMan - Werbung mit durchgestrichenen Statt-Preisen ist zulässig
define('TXT_PER',' por ');
define('TAX_INFO_INCL','incl. %s I.V.A');
define('TAX_INFO_EXCL','excl. %s I.V.A');
define('TAX_INFO_ADD','m&aacute;s %s I.V.A');
define('SHIPPING_EXCL','m&aacute;s');
define('SHIPPING_INCL','incl.');
define('SHIPPING_COSTS','gastos de env&iacute;o');

define('SHIPPING_TIME','Tiempo de entrega: ');
define('MORE_INFO','[M&aacute;s]');

define('ENTRY_PRIVACY_ERROR','Por favor acepta nuestra pol&iacute;tica de privacidad!');
define('TEXT_PAYMENT_FEE','Tasa por forma de pago');

define('_MODULE_INVALID_SHIPPING_ZONE', 'Desgraciadamente no se hacen env&iacute;os a este pa&iacute;s');
define('_MODULE_UNDEFINED_SHIPPING_RATE', 'Los gastos de env&iacute;o no se pueden calcular en estos momentos');

define('NAVBAR_TITLE_1_ACCOUNT_DELETE', 'Tu cuenta');
define('NAVBAR_TITLE_2_ACCOUNT_DELETE', 'Borrar cuenta');
	
//contact-form error messages
define('ERROR_EMAIL','<p><b>Tu direcci&oacute;n de correo electr&oacute;nico:</b> Entrada no v&aacute;lida!</p>');
define('ERROR_VVCODE','<p><b>C&oacute;digo de seguridad:</b> No coinciden, por favor introduzca de nuevo el c&oacute;digo de seguridad!</p>');
define('ERROR_MSG_BODY','<p><b>Tu mensaje:</b> S&iacute;n entrada!</p>');	

//Table Header checkout_confirmation.php
define('HEADER_QTY', 'Cantidad');
define('HEADER_ARTICLE', 'Art&iacute;culo');    
define('HEADER_SINGLE', 'Precio unidad');
define('HEADER_TOTAL','Suma');
define('HEADER_MODEL', 'N&ordm; art&iacute;culo.');

### PayPal API Modul
define('NAVBAR_TITLE_PAYPAL_CHECKOUT','PayPal-Checkout');
define('PAYPAL_ERROR','Cancelar PayPal');
define('PAYPAL_NOT_AVIABLE','PayPal Express por el momento no esta disponible.<br />Por favor selecciona otra forma de pago<br />o int&eacute;ntelo m&aacute;s tarde otra vez.<br />Pedimos disculpas.<br />');
define('ERROR_ADDRESS_NOT_ACCEPTED', 'Por favor, confirme su direcci&oacute;n para que podamos procesar su pedido.');
define('PAYPAL_FEHLER','PayPal avisa de un problema en la transacci&oacute;n.<br />Su pedido esta registrado, pero no se puede llegar a cabo.<br />Por favor haga un nuevo pedido.<br />Pedimos disculpas.<br />');
define('PAYPAL_WARTEN','PayPal avisa de un problema en la transacci&oacute;n.<br />Tiene que ir de nuevo a PayPal, pagar pagar el pedido.<br />M&aacute;s abajo puede ver el pedido guardado.<br />Pedimos disculpas.<br />Por favor pulsa de nuevo el bot&oacute;n PayPal Express.<br />');
define('PAYPAL_NEUBUTTON','Por favor, pulsa otra vez para pagar el pedido.<br />Cualquier otra tecla interrumpe la transacci&oacute;n del pedido.');
define('ERROR_ADDRESS_NOT_ACCEPTED', '* Hasta que no aceptes la direcci&oacute;n de env&iacute;o y la direcci&oacute;n de env&iacute;o de factura,\n no podemos llevar a cabo el procedimiento de env&iacute;o del pedido!\n\n');
define('PAYPAL_GS','Cup&oacute;n/Vale');
define('PAYPAL_TAX','I.V.AMwSt.');
define('PAYPAL_EXP_WARN','Atenci&oacute;n! Gastos posibles de transportes, ser&aacute;n calculados cuando se haga el procedimiento de pago.');
define('PAYPAL_EXP_VORL','Gastos de env&iacute;o provisionales');
define('PAYPAL_EXP_VERS','6.90');
define('PAYPAL_ADRESSE','El pa&iacute;s que pone en la direcci&oacute;n de env&iacute;o en PayPal, no lo tenemos en nuestro sistema.<br />Por favor, ponte en contacto con nosotros.<br />Pedimos disculpas.<br />Pa&iacute;s para env&iacute;o en PayPal: ');
define('PAYPAL_AMMOUNT_NULL','La suma total (sin gastos de env&iacute;o) es igual a 0.<br />No se puede usar PayPal Express para este pago.<br />Por favor, elige otra forma de pago.<br />Pedimos disculpas.<br />');
### PayPal API Modul

define('BASICPRICE_VPE_TEXT','comprando esta cantidad solo ');
define('GRADUATED_PRICE_MAX_VALUE', 'A partir de ');
define('_SHIPPING_TO', 'Env&iacute;o a ');

define('ERROR_SQL_DB_QUERY','Pedimos disculpas, tenemos problemas con la base de datos.');
define('ERROR_SQL_DB_QUERY_REDIRECT','En %s segundos ser&aacute;s reenviado a nuestra p&aacute;gina principal!');

define('TEXT_AGB_CHECKOUT','Por favor acepte nuestros T&eacute;rminos y Condiciones Generales %s asi como nuestros plazos de cancelaci&oacute;n de pedidos %s.');
define('TEXT_REVOCATION_CHECKOUT', ', Pol&iacute;tica de cancelaci&oacute;n %s');
define('DOWNLOAD_NOT_ALLOWED', '<h1>Forbidden</h1>This server could not verify that you are authorized to access the document requested. Either you supplied the wrong credentials (e.g., bad password), or your browser does not understand how to supply the credentials required.');

define('TEXT_INFO_DETAILS', ' Detalles');
define('TEXT_SAVED_BASKET', 'Por favor revisa Tu cesta de compra. Aun contiene art&iacute;culos de una visita anterior.');
//define('TEXT_PRODUCTS_QTY_REDUCED', 'Die maximal erlaubte St&uuml;ckzahl f&uuml;r den zuletzt hinzugef&uuml;gten bzw. ge&auml;nderten Artikel wurde &uuml;berschritten. Die St&uuml;ckzahl wurde automatisch auf die maximal erlaubte St&uuml;ckzahl reduziert.'); // Now we use MAX_PROD_QTY_EXCEEDED

define('ERROR_REVIEW_TEXT', 'El texto para escribir una opini&oacute;n debe contener min. ' . REVIEW_TEXT_MIN_LENGTH . ' caracteres.');
define('ERROR_REVIEW_RATING', 'Por favor a&ntilde;ade Tu valoraci&oacute;n.');
define('ERROR_REVIEW_AUTHOR', 'Por favor introduce Tu nombre.');

define('GV_NO_PAYMENT_INFO', '<div class="infomessage">Con el Saldo actual puedes pagar el pedido completo. Si no quieres pagar con el saldo de Tu cuenta, desactiva la casilla de Saldo y elige una forma de pago!</div>');
define('GV_ADD_PAYMENT_INFO', '<div class="errormessage">Tu Saldo actual no es suficiente para pagar todo el pedido. Por favor a&ntilde;ade adem&aacute;s und forma de pago!</div>');

define('_SHIPPING_FREE','Env&iacute;o gratuito');
define('TEXT_INFO_FREE_SHIPPING_COUPON', 'Los gastos de env&iacute;o est&aacute;n cubiertos por su cup&oacute;n.');

define('TEXT_CONTENT_NOT_FOUND', 'Esta p&aacute;gina no ha sido encontrada.!');
define('TEXT_SITE_NOT_FOUND', 'Esta p&aacute;gina no ha sido encontrada!');

// error message for exceeded product quantity, noRiddle
define('MAX_PROD_QTY_EXCEEDED', 'La cantidad m&aacute;xima permitida de ' .MAX_PRODUCTS_QTY. ' para <span style="font-style:italic;">"%s"</span> se ha sobrepasado.<br />La cantidad se ha reducido autom&aacute;ticamente a la cantidad m&aacute;xima permitido.');

define('IMAGE_BUTTON_CONTENT_EDIT', 'Modificar contenidos');
define('PRINTVIEW_INFO', 'Imprimir caracter&iacute;sticas');
define('PRODUCTS_REVIEW_LINK', 'Escribir opini&oacute;n');

define('TAX_INFO_SMALL_BUSINESS', 'Precio final');
define('TAX_INFO_SMALL_BUSINESS_FOOTER', 'Debido al estatus de la empresa, no se a&ntilde;aden impuestos ni se mencionan en los pedidos.');

define('NEED_CHANGE_PWD', 'Por favor cambia Tu contrase&ntilde;a.');
define('TEXT_REQUEST_NOT_VALID', 'El enlace ya no es v&aacute;lido. Por favor solicita de nuevo una contrase&ntilde;a.');

define('NAVBAR_TITLE_WISHLIST', 'Recordatorio');
define('TEXT_TO_WISHLIST', 'Recordar');
define('IMAGE_BUTTON_TO_WISHLIST', 'Recordar');

define('GUEST_REDEEM_NOT_ALLOWED', 'Como visitante no puede canjear cupones/vales.');
define('GUEST_VOUCHER_NOT_ALLOWED', 'Como visitante no se puede comprar vales/cupones.');

define('TEXT_FILTER_SETTING_DEFAULT', 'Art&iacute;culos por p&aacute;gina');
define('TEXT_FILTER_SETTING', '%s art&iacute;culos por p&aacute;gina');
define('TEXT_FILTER_SETTING_ALL', 'Mostrar todos los art&iacute;culos');
define('TEXT_SHOW_ALL', ' (mostrar todos)');
define('TEXT_FILTER_SORTING_DEFAULT', 'Ordenar por ...');
define('TEXT_FILTER_SORTING_ABC_ASC', 'A - Z');
define('TEXT_FILTER_SORTING_ABC_DESC', 'Z - A');
define('TEXT_FILTER_SORTING_PRICE_ASC', 'Precio ascendente');
define('TEXT_FILTER_SORTING_PRICE_DESC', 'Precio descendente');
define('TEXT_FILTER_SORTING_DATE_DESC', 'Productos nuevos primero');
define('TEXT_FILTER_SORTING_DATE_ASC', 'Productos antiguos primero');
define('TEXT_FILTER_SORTING_ORDER_DESC', 'Lo m&aacute;s vendido');

define('NAVBAR_TITLE_ACCOUNT_CHECKOUT_EXPRESS_EDIT', 'Configuraci&oacute;n para mi compra r&aacute;pida');
define('SUCCESS_CHECKOUT_EXPRESS_UPDATED', 'Se han guardado los ajustes para mi compra r&aacute;pida.');
define('TEXT_ERROR_CHECKOUT_EXPRESS_SHIPPING_ADDRESS', 'Elige una direcci&oacute;n de env&iacute;o');
define('TEXT_ERROR_CHECKOUT_EXPRESS_SHIPPING_MODULE', 'Elige una forma de env&iacute;o');
define('TEXT_ERROR_CHECKOUT_EXPRESS_PAYMENT_ADDRESS', 'Elige una direcci&oacute;n de para env&iacute;o de facturas');
define('TEXT_ERROR_CHECKOUT_EXPRESS_PAYMENT_MODULE', 'Elige una forma de pago');
define('TEXT_CHECKOUT_EXPRESS_INFO_LINK', 'Compra expres');
define('TEXT_CHECKOUT_EXPRESS_INFO_LINK_MORE', 'M&aacute;s informaciones sobre Mi compra r&aacute;pida &raquo;');
define('TEXT_CHECKOUT_EXPRESS_CHECK_CHEAPEST', 'Siempre elegir la forma de env&iacute;o m&aacute;s econ&oacute;mica');

define('AC_SHOW_PAGE', 'P&aacute;gina ');
define('AC_SHOW_PAGE_OF', ' de ');

define('FREE_SHIPPING_INFO', 'a partir de %s del valor del pedido, no cobraremos gastos de env&iacute;o');

define('MANUFACTURER_NOT_FOUND', 'No se ha encontrado el proveedor');
define('ENTRY_TOKEN_ERROR', 'Por favor, revisa los datos introducidos.');

define('IMAGE_BUTTON_CONFIRM', 'Confirmar'); // Needed for PayPal

// ***************************************************
//  Kontodaten-PrŸfung
// ***************************************************
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_0', 'Los datos bancarios son correctos.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_1', 'N&ordm; de cuenta y y/o c&oacute;digo bancario incorrecto. No coinciden!');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_2', 'El n&uacute;mero de cuenta no se puede comprobar autom&aacute;ticamente.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_3', 'El n&uacute;mero de cuenta no se puede comprobar.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_4', 'N&uacute;mero de cuenta no se puede comprobar! Por favor repasa los datos de nuevo.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_5', 'Este c&oacute;digo bancario no existe, por favor corrigelo.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_8', 'Error en c&oacute;digo bancario o falta el dato!');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_9', 'Debes introducir el n&ordm; de cuenta!');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_10', 'Falta el titular de la cuenta.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_128', 'Error interno al comprobar los datos bancarios.');

// Fehlermeldungen alle IBAN-Nummern 
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_1000', 'La identificaci&oacute;n del Pa&iacute;s en el n&uacute;mero de IBAN no es correcto.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_1010', 'IBAN-Tama&ntilde;o incorrecto. Demasiado largo.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_1020', 'IBAN-Tama&ntilde;o incorrecto. Faltan n&uacute;meros.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_1030', 'El formato del IBAN no coincide para este pa&iacute;s.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_1040', 'Los d&iacute;gitos 3 y 4 del IBAN no son correctos -> Repasa el IBAN.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_1050', 'El BIC no tiene un formato v&aacute;lido.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_1060', 'Tama&ntilde;o del BIC err&oacute;neo: Demasiados caracteres. Son necesarios 8 o 11 caracteres.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_1070', 'Tama&ntilde;o del BIC err&oacute;neo: Faltan caracteres. Son necesarios 8 o 11 caracteres.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_1080', 'Tama&ntilde;o del BIC no v&aacute;lido: Son necesarios 8 o 11 caracteres.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_1200', 'Desgraciadamente no podemos aceptar n&uacute;meros IBAN de este Pa&iacute;s.');

// Fehlermeldungen fŸr deutsche Kontonummern 
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_2001', 'Los n&uacute;meros (posiciones 13 al 22) y/o los del c&oacute;digo bancario (posiciones 5 al 12) no son v&aacute;lidos o no coinciden .');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_2002', 'Los n&uacute;meros (posiciones 13 al 22) no se pueden comprobar autom&aacute;ticamente.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_2003', 'Para los n&uacute;meros de las posiciones 13 al 22 del IBAN no est&aacute;n definidos procesos de comprobaci&oacute;n.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_2004', 'Los n&uacute;meros (posiciones 13 al 22) del IBAN no se pueden comprobar!');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_2005', 'C&oacute;digo del Banco (posiciones 5 al 12) no existen!');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_2008', 'Error en c&oacute;digo del banco (Posiciones 5 al 12 del IBAN) o no se ha introducido nada!');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_2009', 'No se ha introducido n&uacute;mero de cuenta (posici&oacute;n 13 al 22 del IBAN)!');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_2010', 'Hay que poner el nombre del titular de la cuenta.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_2020', 'BIC no v&aacute;lido: Con este BIC no existe ning&uacute;n Banco.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_2128', 'Error interior al comprobar los datos Bancarios.');

define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_UNKNOWN', 'Error desconocido al comprobar el banco.');

define('PRODUCT_REVIEWS_SUCCESS', 'Gracias por su revisi&oacute;n.');
define('PRODUCT_REVIEWS_SUCCESS_WAITING', 'Gracias por su revisi&oacute;n. Esto ser&aacute; revisado antes de que se publique.');

define('TITLE_PRODUCTS_NEW', 'Nuevos productos');
define('TITLE_SPECIALS', 'Ofertas especiales');

define('SITEMAP_ERROR_400', 'Error 400: Mala petici&oacute;n.');
define('SITEMAP_ERROR_401', 'Error 401: No autorizado.');
define('SITEMAP_ERROR_403', 'Error 403: Prohibido.');
define('SITEMAP_ERROR_404', 'Error 404: No se encuentra!');
define('SITEMAP_ERROR_500', 'Error 500: Error interno del servidor.');
?>