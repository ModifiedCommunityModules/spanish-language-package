<?php
/* -----------------------------------------------------------------------------------------
   $Id: configuration.php 3130 2012-06-28 11:17:12Z Tomcraft1980 $

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   -----------------------------------------------------------------------------------------
   based on:
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(configuration.php,v 1.8 2002/01/04); www.oscommerce.com
   (c) 2003  nextcommerce (configuration.php,v 1.16 2003/08/25); www.nextcommerce.org
   (c) 2006 XT-Commerce

   Released under the GNU General Public License
   ---------------------------------------------------------------------------------------*/

define('TABLE_HEADING_CONFIGURATION_TITLE', 'Nombre');
define('TABLE_HEADING_CONFIGURATION_VALUE', 'Valor');
define('TABLE_HEADING_ACTION', 'Acci&oacute;n');

define('TEXT_INFO_EDIT_INTRO', 'Por favor haz todos los cambios necesarios');
define('TEXT_INFO_DATE_ADDED', 'a&ntilde;adido el:');
define('TEXT_INFO_LAST_MODIFIED', '&uacute;ltima modificaci&oacute;n:');

// language definitions for config
define('STORE_NAME_TITLE' , 'Nombre de la tienda');
define('STORE_NAME_DESC' , 'Pon aqu&iacute; el nombre de la tienda on-line');
define('STORE_OWNER_TITLE' , 'Propietario');
define('STORE_OWNER_DESC' , 'El nombre del propietario');
define('STORE_OWNER_EMAIL_ADDRESS_TITLE' , 'Direcci&oacute;n E-Mail');
define('STORE_OWNER_EMAIL_ADDRESS_DESC' , 'La direcci&oacute;n E-Mail del propietario de la tienda on-line');

define('EMAIL_FROM_TITLE' , 'E-Mail de');
define('EMAIL_FROM_DESC' , 'Direcci&oacute;n E-Mail, que se usa para enviar (sendmail).');

define('STORE_COUNTRY_TITLE' , 'Pa&iacute;s');
define('STORE_COUNTRY_DESC' , 'Sitio donde se encuentra la tienda on-line <br /><br /><b>Aviso: No olvides configurar bien la provincia.</b>');
define('STORE_ZONE_TITLE' , 'Provincia');
define('STORE_ZONE_DESC' , 'La provincia de donde se puede localizar la tienda on-line');

define('EXPECTED_PRODUCTS_SORT_TITLE' , 'Orden de clasificaci&oacute;n de art&iacute;culos nuevos');
define('EXPECTED_PRODUCTS_SORT_DESC' , 'Esta es la orden de clasificaci&oacute;n que tienen que llevar los art&iacute;culos nuevos.');
define('EXPECTED_PRODUCTS_FIELD_TITLE' , 'Campo de clasificaci&oacute;n para art&iacute;culos nuevos');
define('EXPECTED_PRODUCTS_FIELD_DESC' , 'Esto es un campo que sirve para clasificar la orden de aparici&oacute;n de los art&iacute;culos nuevos.');

define('USE_DEFAULT_LANGUAGE_CURRENCY_TITLE' , 'Cambiar autom&aacute;ticamente a la divisa del pa&iacute;s');
define('USE_DEFAULT_LANGUAGE_CURRENCY_DESC' , 'Si se cambia el ajuste del idioma, se cambiar&aacute; autom&aacute;ticamente a la divisa del Pa&iacute;s seleccionado.');

define('SEND_EXTRA_ORDER_EMAILS_TO_TITLE' , 'Enviar un extra E-mail de pedido a:');
define('SEND_EXTRA_ORDER_EMAILS_TO_DESC' , 'Si quieres que se env&iacute;e una copia del pedido a otro destino, tienes que poner aqui la direcci&oacute;n del receptor en esta orden: Nombre 1 &lt;E-Mail@direcci&oacute;n1&gt;, Nombre 2 &lt;E-Mail@direcci&oacute;n2&gt;');

define('SEARCH_ENGINE_FRIENDLY_URLS_TITLE' , 'Usar URLs de motores de b&uacute;squeda amigables?');
define('SEARCH_ENGINE_FRIENDLY_URLS_DESC' , 'Los URLs de las p&aacute;ginas pueden ser configuradas para sean optimizadas para m&aacute;quinas de b&uacute;squeda.<br /><br /><strong>Atenci&oacute;n:</strong> Para URLs optimizadas tiene que renombrar el fichero _.htaccess en el directorio Principal de la tienda a .htaccess! Ademas el servidor debe permitir el modo <a href="http://www.modrewrite.de/" target="_blank">mod_rewrite</a>! (Pregunta a Tu administrador del Web, si no puedes comprobarlo Tu mismo.)');

define('DISPLAY_CART_TITLE' , 'Mostrar la cesta de compra al hacer compras?');
define('DISPLAY_CART_DESC' , 'Si quieres que se muestre la cesta de compra al insertar un art&iacute;culo, activalo. De lo contrario el cliente sigue comprando?');

define('ALLOW_GUEST_TO_TELL_A_FRIEND_TITLE' , 'Permitir a Visitas que informen a conocidos por e-mail?');
define('ALLOW_GUEST_TO_TELL_A_FRIEND_DESC' , 'Quieres permitir a visitas que le env&iacute;en por E-Mail informaciones sobre art&iacute;culos?');

define('ADVANCED_SEARCH_DEFAULT_OPERATOR_TITLE' , 'Operadores de b&uacute;squeda');
define('ADVANCED_SEARCH_DEFAULT_OPERATOR_DESC' , 'Operador est&aacute;ndar para unir palabras de b&uacute;squedas.');

define('STORE_NAME_ADDRESS_TITLE' , 'Direcci&oacute;n de empresa y n&uacute;mero tel&eacute;fono etc.');
define('STORE_NAME_ADDRESS_DESC' , 'Ponga aqu&iacute; los datos de la empresa como si fuese un membrete.');

define('SHOW_COUNTS_TITLE' , 'Cantidad de art&iacute;culos despu&eacute;s del nombre de la categor&iacute;a?');
define('SHOW_COUNTS_DESC' , 'Muestra de forma recursiva la cantidad de los art&iacute;culos por grupo, y muestra la cantidad (x) despu&eacute;s del nombre de la categor&iacute;a');

define('DISPLAY_PRICE_WITH_TAX_TITLE' , 'Mostrar precio con IVA incluido');
define('DISPLAY_PRICE_WITH_TAX_DESC' , 'Mostrar precios den impuestos incluidos (true) o a&ntilde;adir impuestos al final (false)');

define('DEFAULT_CUSTOMERS_STATUS_ID_ADMIN_TITLE' , 'Estatus de cliente (Grupo de clientes) para administradores en el Frontend');
define('DEFAULT_CUSTOMERS_STATUS_ID_ADMIN_DESC' , 'Elige el estatus de cliente que quieres asignarle a los administrador en el Frontend.');
define('DEFAULT_CUSTOMERS_STATUS_ID_GUEST_TITLE' , 'Estatus de cliente (Grupo de clientes) para visitas');
define('DEFAULT_CUSTOMERS_STATUS_ID_GUEST_DESC' , 'Elige el estatus de cliente que quieras asignar a las Visitas!');
define('DEFAULT_CUSTOMERS_STATUS_ID_TITLE' , 'Estatus de cliente para clientes nuevos');
define('DEFAULT_CUSTOMERS_STATUS_ID_DESC' , 'Elige el estatus de cliente que debe ser asignado autom&aacute;ticamente a un cliente nuevo!<br />Consejo: Puedes crear en los ajustes de grupos un grupo para hacer una oferta semanal: Por ejemplo: Esta semana 10% descuento para clientes nuevos?');

define('ALLOW_ADD_TO_CART_TITLE' , 'Permitir, a&ntilde;adir art&iacute;culos a la cesta de compra');
define('ALLOW_ADD_TO_CART_DESC' , 'Permite a&ntilde;adir art&iacute;culos al carro de compra, aun que este desactivada la opci&oacute;n "Ver precios" en el grupo de clientes');
define('ALLOW_DISCOUNT_ON_PRODUCTS_ATTRIBUTES_TITLE' , 'Contemplar los descuentos tambi&eacute;n en los atributos de los art&iacute;culos?');
define('ALLOW_DISCOUNT_ON_PRODUCTS_ATTRIBUTES_DESC' , 'Permite, que el descuento ajustado tambi&eacute;n se contemple en los atributos de los art&iacute;culos. (Solo si el art&iacute;culo no esta marcado como "Rebaja")');
define('CURRENT_TEMPLATE_TITLE' , 'Tema (Theme)');
define('CURRENT_TEMPLATE_DESC' , 'Elige el tema que quieres usar en Tu tienda(Theme). El tema debe encontrarse en el directorio www.su-dominio.com/templates/ .');

define('ENTRY_FIRST_NAME_MIN_LENGTH_TITLE' , 'Nombre');
define('ENTRY_FIRST_NAME_MIN_LENGTH_DESC' , 'Longitud m&iacute;nimo del Nombre');
define('ENTRY_LAST_NAME_MIN_LENGTH_TITLE' , 'Apellidos');
define('ENTRY_LAST_NAME_MIN_LENGTH_DESC' , 'Longitud m&iacute;nima del apellido');
define('ENTRY_DOB_MIN_LENGTH_TITLE' , 'Fecha de nacimiento');
define('ENTRY_DOB_MIN_LENGTH_DESC' , 'Longitud m&iacute;nima de fecha de nacimiento');
define('ENTRY_EMAIL_ADDRESS_MIN_LENGTH_TITLE' , 'Direcci&oacute;n e-mail');
define('ENTRY_EMAIL_ADDRESS_MIN_LENGTH_DESC' , 'Longitud m&iacute;nima de la direcci&oacute;n');
define('ENTRY_STREET_ADDRESS_MIN_LENGTH_TITLE' , 'Calle');
define('ENTRY_STREET_ADDRESS_MIN_LENGTH_DESC' , 'Longitud m&iacute;nima del nombre de la calle');
define('ENTRY_COMPANY_MIN_LENGTH_TITLE' , 'Empresa');
define('ENTRY_COMPANY_MIN_LENGTH_DESC' , 'Longitud m&iacute;nima del nombre de la empresa');
define('ENTRY_POSTCODE_MIN_LENGTH_TITLE' , 'C&oacute;digo postal');
define('ENTRY_POSTCODE_MIN_LENGTH_DESC' , 'Longitud m&iacute;nima del c&oacute;digo postal');
define('ENTRY_CITY_MIN_LENGTH_TITLE' , 'Localidad');
define('ENTRY_CITY_MIN_LENGTH_DESC' , 'Longitud m&iacute;nima de la localidad');
define('ENTRY_STATE_MIN_LENGTH_TITLE' , 'Provincia');
define('ENTRY_STATE_MIN_LENGTH_DESC' , 'Longitud m&iacute;nima del nomre de la provincia');
define('ENTRY_TELEPHONE_MIN_LENGTH_TITLE' , 'N&uacute;mero tel&eacute;fono');
define('ENTRY_TELEPHONE_MIN_LENGTH_DESC' , 'Longitud m&iacute;nima del n&uacute;mero de tel&eacute;fono');
define('ENTRY_PASSWORD_MIN_LENGTH_TITLE' , 'Contrase&ntilde;a');
define('ENTRY_PASSWORD_MIN_LENGTH_DESC' , 'Longitud m&iacute;nima de la contrase&ntilde;a');

define('REVIEW_TEXT_MIN_LENGTH_TITLE' , 'Valoraciones');
define('REVIEW_TEXT_MIN_LENGTH_DESC' , 'Longitud m&iacute;nima del texto');

define('MIN_DISPLAY_BESTSELLERS_TITLE' , 'Lo m&aacute;s vendido');
define('MIN_DISPLAY_BESTSELLERS_DESC' , 'Cantidad m&iacute;nima a mostrar en art&iacute;culos m&aacute;s vendidos');
define('MIN_DISPLAY_ALSO_PURCHASED_TITLE' , 'Tambi&eacute;n comprado');
define('MIN_DISPLAY_ALSO_PURCHASED_DESC' , 'Cantidad m&iacute;nima a mostrar de los art&iacute;culos que tambi&eacute;n han sido comprados en combinaci&oacute;n con otros');

define('MAX_ADDRESS_BOOK_ENTRIES_TITLE' , 'Entradas direcciones');
define('MAX_ADDRESS_BOOK_ENTRIES_DESC' , 'Cantidad m&aacute;xima de direcciones que se pueden a&ntilde;adir por cliente');
define('MAX_DISPLAY_SEARCH_RESULTS_TITLE' , 'Cantidad art&iacute;culos');
define('MAX_DISPLAY_SEARCH_RESULTS_DESC' , 'Cantidad de art&iacute;culos a mostrar en los listados de produktos');
define('MAX_DISPLAY_PAGE_LINKS_TITLE' , 'Pasar p&aacute;ginas');
define('MAX_DISPLAY_PAGE_LINKS_DESC' , 'Cantidad de p&aacute;ginas a mostrar, para cual hay que mostrar un enlace;');
define('MAX_DISPLAY_SPECIAL_PRODUCTS_TITLE' , 'Rebajas');
define('MAX_DISPLAY_SPECIAL_PRODUCTS_DESC' , 'Cantidad m&aacute;xima de art&iacute;culos con ofertas que hay que mostrar');
define('MAX_DISPLAY_NEW_PRODUCTS_TITLE' , 'Nuevos art&iacute;culos');
define('MAX_DISPLAY_NEW_PRODUCTS_DESC' , 'Cantidad m&aacute;xima de art&iacute;culos nuevos que hay que mostrar en las categor&iacute;as de art&iacute;culos');
define('MAX_DISPLAY_UPCOMING_PRODUCTS_TITLE' , 'Art&iacute;culos pr&oacute;ximamente');
define('MAX_DISPLAY_UPCOMING_PRODUCTS_DESC' , 'Cantidad m&aacute;xima de los art&iacute;culos que entran pr&oacute;ximamente, cuales quieres que se muestren en la p&aacute;gina principal');
define('MAX_DISPLAY_MANUFACTURERS_IN_A_LIST_TITLE' , 'Listado de productores (v. umbral)');
define('MAX_DISPLAY_MANUFACTURERS_IN_A_LIST_DESC' , 'En cuadro de los productores; Si la cantidad de los productores sobrepasan el valor umbral, se mostrar&aacute; una lista Drop-Down  (dependiendo del valor que esta configurado en "Lista productores").');
define('MAX_MANUFACTURERS_LIST_TITLE' , 'Listado de productores');
define('MAX_MANUFACTURERS_LIST_DESC' , 'En el cuadro de productores; Si el valor es "1", El box se mostrar&aacute; como una lista Drop Down. De lo contrario se mostrar&aacute; un listado con el valor de las lineas configurado.');
define('MAX_DISPLAY_MANUFACTURER_NAME_LEN_TITLE' , 'Longitud del nombre del productor');
define('MAX_DISPLAY_MANUFACTURER_NAME_LEN_DESC' , 'En el cuadro del productor: Cantidad m&aacute;xima de nombres en el cuadro de productores');
define('MAX_DISPLAY_NEW_REVIEWS_TITLE' , 'Nuevas valoraciones');
define('MAX_DISPLAY_NEW_REVIEWS_DESC' , 'Cantidad m&aacute;xima de valoraciones a mostrar');
define('MAX_RANDOM_SELECT_REVIEWS_TITLE' , 'Valoraciones aleatorias');
define('MAX_RANDOM_SELECT_REVIEWS_DESC' , 'De cuantas valoraciones quieres que se creen aleatorias de las valoraciones, para mostrarlas en el cuadro?');
define('MAX_RANDOM_SELECT_NEW_TITLE' , 'Aleatorio de art&iacute;culos nuevos');
define('MAX_RANDOM_SELECT_NEW_DESC' , 'De cuantos art&iacute;culos quieres que se creen aleatorias de art&iacute;culos nuevos, para mostrarlas en el cuadro?');
define('MAX_RANDOM_SELECT_SPECIALS_TITLE' , 'Aleatorio de rebajas');
define('MAX_RANDOM_SELECT_SPECIALS_DESC' , 'De cuantas rebajas quieres que se muestren las rebajas aleatorias?');
define('MAX_DISPLAY_CATEGORIES_PER_ROW_TITLE' , 'Cantidad de categor&iacute;as por linea');
define('MAX_DISPLAY_CATEGORIES_PER_ROW_DESC' , 'Cantidad de categor&iacute;as, que se muestran por linea.');
define('MAX_DISPLAY_PRODUCTS_NEW_TITLE' , 'Lista de art&iacute;culos nuevos');
define('MAX_DISPLAY_PRODUCTS_NEW_DESC' , 'Cantidad m&aacute;xima a mostrar de los art&iacute;culos nuevos.');
define('MAX_DISPLAY_BESTSELLERS_TITLE' , 'Lo m&aacute;s vendido');
define('MAX_DISPLAY_BESTSELLERS_DESC' , 'Cantidad m&aacute;xima a mostrar de los art&iacute;culos m&aacute;s vendidos');
define('MAX_DISPLAY_BESTSELLERS_DAYS_TITLE' , 'Cantidad de d&iacute;as para Bestsellers');
define('MAX_DISPLAY_BESTSELLERS_DAYS_DESC' , 'Cantidad m&aacute;xima en d&iacute;as que se mostrar&aacute;n art&iacute;culos nuevos');
define('MAX_DISPLAY_ALSO_PURCHASED_TITLE' , 'Tambi&eacute;n comprado');
define('MAX_DISPLAY_ALSO_PURCHASED_DESC' , 'Cantidad m&aacute;xima de art&iacute;culos que se compraron junto con otros art&iacute;culos');
define('MAX_DISPLAY_ALSO_PURCHASED_ORDERS_TITLE' , 'N&uacute;mero de pedidos Tambi&eacute;n comprados');
define('MAX_DISPLAY_ALSO_PURCHASED_ORDERS_DESC' , 'N&uacute;mero m&aacute;ximo de pedidos para buscar productos tambi&eacute;n comprados');
define('MAX_DISPLAY_PRODUCTS_IN_ORDER_HISTORY_BOX_TITLE' , 'Cuadro de resumen de pedidos');
define('MAX_DISPLAY_PRODUCTS_IN_ORDER_HISTORY_BOX_DESC' , 'Cantidad m&aacute;xima a mostrar en el cuadro de productos pedidos.');
define('MAX_DISPLAY_ORDER_HISTORY_TITLE' , 'Resumen de pedidos');
define('MAX_DISPLAY_ORDER_HISTORY_DESC' , 'Cantidad m&aacute;xima de pedidos a mostrar en la secci&oacute;n del cliente.');
define('MAX_PRODUCTS_QTY_TITLE', 'Cantidad m&aacute;xima de productos');
define('MAX_PRODUCTS_QTY_DESC', 'Cantidad m&aacute;xima permitida de un art&iacute;culo en la cesta de compras');
define('MAX_DISPLAY_NEW_PRODUCTS_DAYS_TITLE' , 'Cantidad de d&iacute;as para productos nuevos');
define('MAX_DISPLAY_NEW_PRODUCTS_DAYS_DESC' , 'Cantidad m&aacute;ximas por d&iacute;as, para mostrar art&iacute;culos nuevos');

define('PRODUCT_IMAGE_MINI_WIDTH_TITLE' , 'Anchura de las mini im&aacute;genes del producto');
define('PRODUCT_IMAGE_MINI_WIDTH_DESC' , 'Ancho m&aacute;ximo del mini producto (en p&iacute;xeles) (Est&aacute;ndar: 80). Para valores m&aacute;s grandes posiblemente "productPreviewImage" se ajusta en el archivo stylesheet.css de las plantillas.');
define('PRODUCT_IMAGE_MINI_HEIGHT_TITLE' , 'Altura de las mini im&aacute;genes del producto');
define('PRODUCT_IMAGE_MINI_HEIGHT_DESC' , 'Altura m&aacute;xima del mini producto (en p&iacute;xeles) (Est&aacute;ndar: 80).');

define('PRODUCT_IMAGE_THUMBNAIL_WIDTH_TITLE' , 'Anchura de im&aacute;genes miniaturas');
define('PRODUCT_IMAGE_THUMBNAIL_WIDTH_DESC' , 'Anchura m&aacute;xima en p&iacute;xel de las im&aacute;genes miniaturas de los art&iacute;culos (Por defecto: 160). Si se usan valores superiores hay que ajustar "productPreviewImage" en la stylesheet.css del tema correspondiente.');
define('PRODUCT_IMAGE_THUMBNAIL_HEIGHT_TITLE' , 'Altura de im&aacute;genes miniaturas');
define('PRODUCT_IMAGE_THUMBNAIL_HEIGHT_DESC' , 'Altura m&aacute;xima en p&iacute;xel de las im&aacute;genes miniaturas de los art&iacute;culos (Por defecto: 160)');

define('PRODUCT_IMAGE_MIDI_WIDTH_TITLE' , 'Anchura de las im&aacute;genes Midi del producto');
define('PRODUCT_IMAGE_MIDI_WIDTH_DESC' , 'Ancho m&aacute;ximo del midi del producto (en p&iacute;xeles) (Est&aacute;ndar: 160). Para valores m&aacute;s grandes posiblemente "productPreviewImage" se ajusta en el archivo stylesheet.css de las plantillas.');
define('PRODUCT_IMAGE_MIDI_HEIGHT_TITLE' , 'Altura de las im&aacute;genes Midi del producto');
define('PRODUCT_IMAGE_MIDI_HEIGHT_DESC' , 'Altura m&aacute;xima del producto midi (en p&iacute;xeles) (Est&aacute;ndar: 160).');

define('PRODUCT_IMAGE_INFO_WIDTH_TITLE' , 'Anchura de info-im&aacute;genes');
define('PRODUCT_IMAGE_INFO_WIDTH_DESC' , 'Anchura m&aacute;xima en p&iacute;xel de las im&aacute;genes que se muestran en la p&aacute;gina de descripci&oacute;n del art&iacute;culo (Por defecto: 230).');
define('PRODUCT_IMAGE_INFO_HEIGHT_TITLE' , 'Altura de info-im&aacute;genes');
define('PRODUCT_IMAGE_INFO_HEIGHT_DESC' , 'Altura m&aacute;xima en p&iacute;xel de las im&aacute;genes que se muestran en la p&aacute;gina de descripci&oacute;n del art&iacute;culo (Por defecto: 230).');

define('PRODUCT_IMAGE_POPUP_WIDTH_TITLE' , 'Anchura de im&aacute;genes popup');
define('PRODUCT_IMAGE_POPUP_WIDTH_DESC' , 'Anchura m&aacute;xima en p&iacute;xel de las im&aacute;genes que se muestran los popup del art&iacute;culo (Por defecto: 800)');
define('PRODUCT_IMAGE_POPUP_HEIGHT_TITLE' , 'Altura de im&aacute;genes popup');
define('PRODUCT_IMAGE_POPUP_HEIGHT_DESC' , 'Altura m&aacute;xima en p&iacute;xel de las im&aacute;genes que se muestran los popup del art&iacute;culo (Por defecto: 800)');

define('CATEGORIES_IMAGE_WIDTH_TITLE' , 'Anchura de las im&aacute;genes de la categor&iacute;a');
define('CATEGORIES_IMAGE_WIDTH_DESC' , 'Ancho m&aacute;ximo de las im&aacute;genes de la categor&iacute;a (en p&iacute;xeles) (Est&aacute;ndar: 985).');
define('CATEGORIES_IMAGE_HEIGHT_TITLE' , 'Altura de las im&aacute;genes de la categor&iacute;a');
define('CATEGORIES_IMAGE_HEIGHT_DESC' , 'Altura m&aacute;xima de las im&aacute;genes de la categor&iacute;a (en p&iacute;xeles) (Est&aacute;ndar: 370).');

define('CATEGORIES_IMAGE_MOBILE_WIDTH_TITLE' , 'Anchura de las im&aacute;genes de la categor&iacute;a M&oacute;vil');
define('CATEGORIES_IMAGE_MOBILE_WIDTH_DESC' , 'Ancho m&aacute;ximo de las im&aacute;genes de categor&iacute;a m&oacute;vil (en p&iacute;xeles) (Est&aacute;ndar: 600).');
define('CATEGORIES_IMAGE_MOBILE_HEIGHT_TITLE' , 'Altura de las im&aacute;genes de la categor&iacute;a m&oacute;vil');
define('CATEGORIES_IMAGE_MOBILE_HEIGHT_DESC' , 'Altura m&aacute;xima de las im&aacute;genes de categor&iacute;a m&oacute;vil (en p&iacute;xeles) (Est&aacute;ndar: 400).');

define('CATEGORIES_IMAGE_LIST_WIDTH_TITLE' , 'Anchura del listado de im&aacute;genes de la categor&iacute;a');
define('CATEGORIES_IMAGE_LIST_WIDTH_DESC' , 'Ancho m&aacute;ximo del listado de im&aacute;genes de la categor&iacute;a (en p&iacute;xeles) (Est&aacute;ndar: 225).');
define('CATEGORIES_IMAGE_LIST_HEIGHT_TITLE' , 'Altura del listado de im&aacute;genes de la categor&iacute;a');
define('CATEGORIES_IMAGE_LIST_HEIGHT_DESC' , 'Altura m&aacute;xima del listado de im&aacute;genes de la categor&iacute;a (en p&iacute;xeles) (Est&aacute;ndar: 170).');

define('MANUFACTURER_IMAGE_WIDTH_TITLE' , 'Anchura de las im&aacute;genes del fabricante');
define('MANUFACTURER_IMAGE_WIDTH_DESC' , 'Ancho m&aacute;ximo de las im&aacute;genes del fabricante (en p&iacute;xeles) (Est&aacute;ndar: 100).');
define('MANUFACTURER_IMAGE_HEIGHT_TITLE' , 'Altura de las im&aacute;genes del fabricante');
define('MANUFACTURER_IMAGE_HEIGHT_DESC' , 'Altura m&aacute;xima de las im&aacute;genes del fabricante (en p&iacute;xeles) (Est&aacute;ndar: 60).');

define('BANNERS_IMAGE_WIDTH_TITLE' , 'Anchura de las im&aacute;genes de los banners');
define('BANNERS_IMAGE_WIDTH_DESC' , 'Ancho m&aacute;ximo de las im&aacute;genes del banner (en p&iacute;xeles) (Est&aacute;ndar: 985).');
define('BANNERS_IMAGE_HEIGHT_TITLE' , 'Altura de las im&aacute;genes de los banners');
define('BANNERS_IMAGE_HEIGHT_DESC' , 'Altura m&aacute;xima de las im&aacute;genes del banner (en p&iacute;xeles) (Est&aacute;ndar: 370).');

define('BANNERS_IMAGE_MOBILE_WIDTH_TITLE' , 'Anchura de las im&aacute;genes de los banners M&oacute;viles');
define('BANNERS_IMAGE_MOBILE_WIDTH_DESC' , 'Ancho m&aacute;ximo de las im&aacute;genes del banner m&oacute;vil (en p&iacute;xeles) (Est&aacute;ndar: 600).');
define('BANNERS_IMAGE_MOBILE_HEIGHT_TITLE' , 'Altura de las im&aacute;genes del banner m&oacute;vil');
define('BANNERS_IMAGE_MOBILE_HEIGHT_DESC' , 'Altura m&aacute;xima de las im&aacute;genes del banner m&oacute;vil (en p&iacute;xeles) (Est&aacute;ndar: 600).');

define('SMALL_IMAGE_WIDTH_TITLE' , 'Anchura de las im&aacute;genes');
define('SMALL_IMAGE_WIDTH_DESC' , 'Anchura en p&iacute;xeles de las im&aacute;genes de los art&iacute;culos');
define('SMALL_IMAGE_HEIGHT_TITLE' , 'Altura de las im&aacute;genes');
define('SMALL_IMAGE_HEIGHT_DESC' , 'Altura en p&iacute;xeles de las im&aacute;genes de los art&iacute;culos');

define('HEADING_IMAGE_WIDTH_TITLE' , 'Anchura del t&iacute;tulo de las im&aacute;genes');
define('HEADING_IMAGE_WIDTH_DESC' , 'Anchura m&aacute;xima en p&iacute;xeles del texto de la im&aacute;genes');
define('HEADING_IMAGE_HEIGHT_TITLE' , 'Altura del t&iacute;tulo de las im&aacute;genes');
define('HEADING_IMAGE_HEIGHT_DESC' , 'Altura m&aacute;xima en p&iacute;xeles del texto de la im&aacute;genes');

define('SUBCATEGORY_IMAGE_WIDTH_TITLE' , 'Anchura de las im&aacute;genes sub-categor&iacute;as');
define('SUBCATEGORY_IMAGE_WIDTH_DESC' , 'Anchura m&aacute;xima en p&iacute;xeles de las im&aacute;genes de las Sub_Categor&iacute;as');
define('SUBCATEGORY_IMAGE_HEIGHT_TITLE' , 'Altura de las im&aacute;genes sub-categor&iacute;as');
define('SUBCATEGORY_IMAGE_HEIGHT_DESC' , 'Anchura m&aacute;xima en p&iacute;xeles de las im&aacute;genes de las Sub_Categor&iacute;as');

define('CONFIG_CALCULATE_IMAGE_SIZE_TITLE' , 'Re-calcular tama&ntilde;o de imagen');
define('CONFIG_CALCULATE_IMAGE_SIZE_DESC' , 'Quieres dejar re-calcular el tama&ntilde;o de las im&aacute;genes?');

define('IMAGE_REQUIRED_TITLE' , 'Se necesitan im&aacute;genes?');
define('IMAGE_REQUIRED_DESC' , 'Si configuras aqu&iacute; "1", se mostrar&aacute;n en caso de no existir im&aacute;genes, un marco. Esto es bueno para programadores.');

define('MO_PICS_TITLE', 'Cantidad de im&aacute;genes por art&iacute;culo');
define('MO_PICS_DESC', 'Cantidad de im&aacute;genes por art&iacute;culo a subir y que se muestrar&aacute;n en product info.');

//This is for the Images showing your products for preview. All the small stuff.

define('PRODUCT_IMAGE_MINI_MERGE_TITLE' , 'Mini im&aacute;genes del producto:Fusi&oacute;n<br /><img src="images/config_merge.gif">');
define('PRODUCT_IMAGE_MINI_MERGE_DESC' , 'Producto Mini Im&aacute;genes:Fusionar<br /><br />Valores por defecto: (overlay.gif,10,-50,60,FF0000)<br /><br />Superponer imagen de fusi&oacute;n<br />Uso:<br />(imagen de fusi&oacute;n,inicio x [neg = desde la derecha],inicio y [neg = desde la base],opacidad, color transparente en la imagen de fusi&oacute;n)');


define('PRODUCT_IMAGE_THUMBNAIL_BEVEL_TITLE' , 'Im&aacute;genes miniaturas:Bevel<br /><img src="images/config_bevel.gif">');
define('PRODUCT_IMAGE_THUMBNAIL_BEVEL_DESC' , 'Im&aacute;genes miniaturas:Bevel<br /><br />Valor por defecto: (8,FFCCCC,330000)<br /><br />shaded bevelled edges<br />Utilizaci&oacute;n:<br />(edge width,hex light colour,hex dark colour)');

define('PRODUCT_IMAGE_THUMBNAIL_GREYSCALE_TITLE' , 'Im&aacute;genes miniaturas:Greyscale<br /><img src="images/config_greyscale.gif">');
define('PRODUCT_IMAGE_THUMBNAIL_GREYSCALE_DESC' , 'Im&aacute;genes miniaturas:Greyscale<br /><br />Valor por defecto: (32,22,22)<br /><br />basic black n white<br />Utilizaci&oacute;n:<br />(int red,int green,int blue)');

define('PRODUCT_IMAGE_THUMBNAIL_ELLIPSE_TITLE' , 'Im&aacute;genes miniaturas:Ellipse<br /><img src="images/config_eclipse.gif">');
define('PRODUCT_IMAGE_THUMBNAIL_ELLIPSE_DESC' , 'Im&aacute;genes miniaturas:Ellipse<br /><br />Valor por defecto: (FFFFFF)<br /><br />ellipse on bg colour<br />Utilizaci&oacute;n:<br />(hex background colour)');

define('PRODUCT_IMAGE_THUMBNAIL_ROUND_EDGES_TITLE' , 'Im&aacute;genes miniaturas:Round-edges<br /><img src="images/config_edge.gif">');
define('PRODUCT_IMAGE_THUMBNAIL_ROUND_EDGES_DESC' , 'Im&aacute;genes miniaturas:Round-edges<br /><br />Valor por defecto: (5,FFFFFF,3)<br /><br />corner trimming<br />Utilizaci&oacute;n:<br />(edge_radius,background colour,anti-alias width)');

define('PRODUCT_IMAGE_THUMBNAIL_MERGE_TITLE' , 'Im&aacute;genes miniaturas:Merge<br /><img src="images/config_merge.gif">');
define('PRODUCT_IMAGE_THUMBNAIL_MERGE_DESC' , 'Im&aacute;genes miniaturas:Merge<br /><br />Valor por defecto: (overlay.gif,10,-50,60,FF0000)<br /><br />overlay merge image<br />Utilizaci&oacute;n:<br />(merge image,x start [neg = from right],y start [neg = from base],opacity, transparent colour on merge image)');

define('PRODUCT_IMAGE_MIDI_MERGE_TITLE' , 'Im&aacute;genes Midi del producto:Fusi&oacute;n');
define('PRODUCT_IMAGE_MIDI_MERGE_DESC' , 'Producto Midi Images:Merge<br /><br />Valores por defecto: (overlay.gif,10,-50,60,FF0000)<br /><br />Superponer imagen de fusi&oacute;n<br />Uso:<br />(imagen de fusi&oacute;n,inicio x [neg = desde la derecha],inicio y [neg = desde la base],opacidad, color transparente en la imagen de fusi&oacute;n)');

define('PRODUCT_IMAGE_THUMBNAIL_FRAME_TITLE' , 'Im&aacute;genes miniaturas:Frame<br /><img src="images/config_frame.gif">');
define('PRODUCT_IMAGE_THUMBNAIL_FRAME_DESC' , 'Im&aacute;genes miniaturas:Frame<br /><br />Valor por defecto: (FFFFFF,000000,3,EEEEEE)<br /><br />plain raised border<br />Utilizaci&oacute;n:<br />(hex light colour,hex dark colour,int width of mid bit,hex frame colour [optional - defaults to half way between light and dark edges])');

define('PRODUCT_IMAGE_THUMBNAIL_DROP_SHADOW_TITLE' , 'Im&aacute;genes miniaturas:Drop-Shadow<br /><img src="images/config_shadow.gif">');
define('PRODUCT_IMAGE_THUMBNAIL_DROP_SHADOW_DESC' , 'Im&aacute;genes miniaturas:Drop-Shadow<br /><br />Valor por defecto: (3,333333,FFFFFF)<br /><br />more like a dodgy motion blur [semi buggy]<br />Utilizaci&oacute;n:<br />(shadow width,hex shadow colour,hex background colour)');

define('PRODUCT_IMAGE_THUMBNAIL_MOTION_BLUR_TITLE' , 'Im&aacute;genes miniaturas:Motion-Blur<br /><img src="images/config_motion.gif">');
define('PRODUCT_IMAGE_THUMBNAIL_MOTION_BLUR_DESC' , 'Im&aacute;genes miniaturas:Motion-Blur<br /><br />Valor por defecto: (4,FFFFFF)<br /><br />fading parallel lines<br />Utilizaci&oacute;n:<br />(int number of lines,hex background colour)');

//And this is for the Images showing your products in single-view

define('PRODUCT_IMAGE_INFO_BEVEL_TITLE' , 'Im&aacute;genes Info:Bevel');
define('PRODUCT_IMAGE_INFO_BEVEL_DESC' , 'Im&aacute;genes Info:Bevel<br /><br />Valor por defecto: (8,FFCCCC,330000)<br /><br />shaded bevelled edges<br />Utilizaci&oacute;n:<br />(edge width, hex light colour, hex dark colour)');

define('PRODUCT_IMAGE_INFO_GREYSCALE_TITLE' , 'Im&aacute;genes Info:Greyscale');
define('PRODUCT_IMAGE_INFO_GREYSCALE_DESC' , 'Im&aacute;genes Info:Greyscale<br /><br />Valor por defecto: (32,22,22)<br /><br />basic black n white<br />Utilizaci&oacute;n:<br />(int red, int green, int blue)');

define('PRODUCT_IMAGE_INFO_ELLIPSE_TITLE' , 'Im&aacute;genes Info:Ellipse');
define('PRODUCT_IMAGE_INFO_ELLIPSE_DESC' , 'Im&aacute;genes Info:Ellipse<br /><br />Valor por defecto: (FFFFFF)<br /><br />ellipse on bg colour<br />Utilizaci&oacute;n:<br />(hex background colour)');

define('PRODUCT_IMAGE_INFO_ROUND_EDGES_TITLE' , 'Im&aacute;genes Info:Round-edges');
define('PRODUCT_IMAGE_INFO_ROUND_EDGES_DESC' , 'Im&aacute;genes Info:Round-edges<br /><br />Valor por defecto: (5,FFFFFF,3)<br /><br />corner trimming<br />Utilizaci&oacute;n:<br />( edge_radius, background colour, anti-alias width)');

define('PRODUCT_IMAGE_INFO_MERGE_TITLE' , 'Im&aacute;genes Info:Merge');
define('PRODUCT_IMAGE_INFO_MERGE_DESC' , 'Im&aacute;genes Info:Merge<br /><br />Valor por defecto: (overlay.gif,10,-50,60,FF0000)<br /><br />overlay merge image<br />Utilizaci&oacute;n:<br />(merge image,x start [neg = from right],y start [neg = from base],opacity,transparent colour on merge image)');

define('PRODUCT_IMAGE_INFO_FRAME_TITLE' , 'Im&aacute;genes Info:Frame');
define('PRODUCT_IMAGE_INFO_FRAME_DESC' , 'Im&aacute;genes Info:Frame<br /><br />Valor por defecto: (FFFFFF,000000,3,EEEEEE)<br /><br />plain raised border<br />Utilizaci&oacute;n:<br />(hex light colour,hex dark colour,int width of mid bit,hex frame colour [optional - defaults to half way between light and dark edges])');

define('PRODUCT_IMAGE_INFO_DROP_SHADOW_TITLE' , 'Im&aacute;genes Info:Drop-Shadow');
define('PRODUCT_IMAGE_INFO_DROP_SHADOW_DESC' , 'Im&aacute;genes Info:Drop-Shadow<br /><br />Valor por defecto: (3,333333,FFFFFF)<br /><br />more like a dodgy motion blur [semi buggy]<br />Utilizaci&oacute;n:<br />(shadow width,hex shadow colour,hex background colour)');

define('PRODUCT_IMAGE_INFO_MOTION_BLUR_TITLE' , 'Im&aacute;genes Info:Motion-Blur');
define('PRODUCT_IMAGE_INFO_MOTION_BLUR_DESC' , 'Im&aacute;genes Info:Motion-Blur<br /><br />Valor por defecto: (4,FFFFFF)<br /><br />fading parallel lines<br />Utilizaci&oacute;n:<br />(int number of lines,hex background colour)');

define('PRODUCT_IMAGE_POPUP_BEVEL_TITLE' , 'Im&aacute;genes PopUp:Bevel');
define('PRODUCT_IMAGE_POPUP_BEVEL_DESC' , 'Im&aacute;genes PopUp:Bevel<br /><br />Valor por defecto: (8,FFCCCC,330000)<br /><br />shaded bevelled edges<br />Utilizaci&oacute;n:<br />(edge width,hex light colour,hex dark colour)');

define('PRODUCT_IMAGE_POPUP_GREYSCALE_TITLE' , 'Im&aacute;genes PopUp:Greyscale');
define('PRODUCT_IMAGE_POPUP_GREYSCALE_DESC' , 'Im&aacute;genes PopUp:Greyscale<br /><br />Valor por defecto: (32,22,22)<br /><br />basic black n white<br />Utilizaci&oacute;n:<br />(int red,int green,int blue)');

define('PRODUCT_IMAGE_POPUP_ELLIPSE_TITLE' , 'Im&aacute;genes PopUp:Ellipse');
define('PRODUCT_IMAGE_POPUP_ELLIPSE_DESC' , 'Im&aacute;genes PopUp:Ellipse<br /><br />Valor por defecto: (FFFFFF)<br /><br />ellipse on bg colour<br />Utilizaci&oacute;n:<br />(hex background colour)');

define('PRODUCT_IMAGE_POPUP_ROUND_EDGES_TITLE' , 'Im&aacute;genes PopUp:Round-edges');
define('PRODUCT_IMAGE_POPUP_ROUND_EDGES_DESC' , 'Im&aacute;genes PopUp:Round-edges<br /><br />Valor por defecto: (5,FFFFFF,3)<br /><br />corner trimming<br />Utilizaci&oacute;n:<br />(edge_radius,background colour,anti-alias width)');

define('PRODUCT_IMAGE_POPUP_MERGE_TITLE' , 'Im&aacute;genes PopUp:Merge');
define('PRODUCT_IMAGE_POPUP_MERGE_DESC' , 'Im&aacute;genes PopUp:Merge<br /><br />Valor por defecto: (overlay.gif,10,-50,60,FF0000)<br /><br />overlay merge image<br />Utilizaci&oacute;n:<br />(merge image,x start [neg = from right],y start [neg = from base],opacity,transparent colour on merge image)');

define('PRODUCT_IMAGE_POPUP_FRAME_TITLE' , 'Im&aacute;genes PopUp:Frame');
define('PRODUCT_IMAGE_POPUP_FRAME_DESC' , 'Im&aacute;genes PopUp:Frame<br /><br />Valor por defecto: (FFFFFF,000000,3,EEEEEE)<br /><br />plain raised border<br />Utilizaci&oacute;n:<br />(hex light colour,hex dark colour,int width of mid bit,hex frame colour [optional - defaults to half way between light and dark edges])');

define('PRODUCT_IMAGE_POPUP_DROP_SHADOW_TITLE' , 'Im&aacute;genes PopUp:Drop-Shadow');
define('PRODUCT_IMAGE_POPUP_DROP_SHADOW_DESC' , 'Im&aacute;genes PopUp:Drop-Shadow<br /><br />Valor por defecto: (3,333333,FFFFFF)<br /><br />more like a dodgy motion blur [semi buggy]<br />Utilizaci&oacute;n:<br />(shadow width,hex shadow colour,hex background colour)');

define('PRODUCT_IMAGE_POPUP_MOTION_BLUR_TITLE' , 'Im&aacute;genes PopUp:Motion-Blur');
define('PRODUCT_IMAGE_POPUP_MOTION_BLUR_DESC' , 'Im&aacute;genes PopUp:Motion-Blur<br /><br />Valor por defecto: (4,FFFFFF)<br /><br />fading parallel lines<br />Utilizaci&oacute;n:<br />(int number of lines,hex background colour)');

define('IMAGE_MANIPULATOR_TITLE','GDlib processing');
define('IMAGE_MANIPULATOR_DESC','Manipulador de im&aacute;genes para GD2 o GD1<br /><br /><b>AVISO:</b> image_manipulator_GD2_advanced.php soporta im&aacute;genes PNG transparentes\'s');


define('ACCOUNT_GENDER_TITLE' , 'Trato');
define('ACCOUNT_GENDER_DESC' , 'Requerir tratamiento de persona (Se&ntilde;or/Se&ntilde;ora)');
define('ACCOUNT_DOB_TITLE' , 'Fecha de nacimiento');
define('ACCOUNT_DOB_DESC' , 'Requerir fecha de nacimiento');
define('ACCOUNT_COMPANY_TITLE' , 'Empresa');
define('ACCOUNT_COMPANY_DESC' , 'Requerir nombre de la empresa');
define('ACCOUNT_SUBURB_TITLE' , 'Pueblo/Ciudad');
define('ACCOUNT_SUBURB_DESC' , 'Requerir nombre del pueblo/Ciudad');
define('ACCOUNT_STATE_TITLE' , 'Provincia');
define('ACCOUNT_STATE_DESC' , 'Requerir nombre de la provincia');

define('DEFAULT_CURRENCY_TITLE' , 'Divisa por defecto');
define('DEFAULT_CURRENCY_DESC' , 'Divisa que se usara por defecto');
define('DEFAULT_LANGUAGE_TITLE' , 'Idioma por defecto');
define('DEFAULT_LANGUAGE_DESC' , 'Idioma que se usara por defecto');
define('DEFAULT_ORDERS_STATUS_ID_TITLE' , 'Estado del pedido cuando se hace uno');
define('DEFAULT_ORDERS_STATUS_ID_DESC' , 'Cuando se hace un pedido nuevo, el estado se cambiara al que se configure aqui.');

define('SHIPPING_MAX_WEIGHT_TITLE' , 'Peso m&aacute;ximo permitido de un paquete a enviar');
define('SHIPPING_MAX_WEIGHT_DESC' , 'Los socios de env&iacute;o (Correos/UPS, etc.) tienen un peso m&aacute;ximo de paquete. Introduzca un valor para este.');
define('SHIPPING_BOX_WEIGHT_TITLE' , 'Peso del paquete vac&iacute;o');
define('SHIPPING_BOX_WEIGHT_DESC' , '&iquest;Cu&aacute;l es el peso medio de un envase vac&iacute;o peque&ntilde;o o mediano?');
define('SHIPPING_BOX_PADDING_TITLE' , 'Para paquetes vac&iacute;os m&aacute;s grandes - aumento de peso en %.');
define('SHIPPING_BOX_PADDING_DESC' , 'Para el 10% aproximadamente, introduzca el 10');
define('SHOW_SHIPPING_TITLE' , 'Mostrar los gastos de env&iacute;o');
define('SHOW_SHIPPING_DESC' , 'Visualizaci&oacute;n vinculada de "m&aacute;s gastos de env&iacute;o".');
define('SHIPPING_INFOS_TITLE' , 'Gastos de env&iacute;o');
define('SHIPPING_INFOS_DESC' , 'Seleccione el contenido para mostrar los gastos de env&iacute;o');
define('SHIPPING_DEFAULT_TAX_CLASS_METHOD_TITLE' , 'M&eacute;todo de c&aacute;lculo de la clase de impuesto por defecto');
define('SHIPPING_DEFAULT_TAX_CLASS_METHOD_DESC' , 'ninguno: no mostrar ning&uacute;n impuesto de env&iacute;o<br />autoproporcional: mostrar el impuesto de env&iacute;o proporcional al pedido<br />autom&aacute;ximo: mostrar el tipo impositivo del mayor grupo de ventas como impuesto de env&iacute;o');

define('SHOW_SHIPPING_MODULE_TITLE_TITLE' , 'T&iacute;tulo de los gastos de env&iacute;o');
define('SHOW_SHIPPING_MODULE_TITLE_DESC' , 'Elija el t&iacute;tulo de los gastos de env&iacute;o en el total del pedido');
define('CUSTOM_SHIPPING_TITLE_TITLE' , 'Gastos de env&iacute;o de t&iacute;tulos individuales');
define('CUSTOM_SHIPPING_TITLE_DESC' , 'Introduzca un nombre. Esta configuraci&oacute;n s&oacute;lo se aplica si los gastos de env&iacute;o del t&iacute;tulo est&aacute;n configurados como "Personalizados".');
define('CFG_TXT_SHIPPING_DEFAULT', 'Est&aacute;ndar');
define('CFG_TXT_SHIPPING_TITLE', 'T&iacute;tulo');
define('CFG_TXT_SHIPPING_CUSTOM', 'Personalizado');

define('CAPITALIZE_ADDRESS_FORMAT_TITLE' , 'Direcci&oacute;n en may&uacute;sculas');
define('CAPITALIZE_ADDRESS_FORMAT_DESC' , 'Mostrar los nombres de pa&iacute;ses y ciudades en may&uacute;sculas');

define('PRODUCT_LIST_FILTER_TITLE' , '&iquest;Mostrar los filtros de clasificaci&oacute;n en las listas de productos?');
define('PRODUCT_LIST_FILTER_DESC' , 'Visualizaci&oacute;n de filtros de clasificaci&oacute;n para grupos de productos/fabricantes, etc. Filtro (false=inactivo; true=activo)');

define('STOCK_CHECK_TITLE' , 'Comprobaci&oacute;n de las existencias');
define('STOCK_CHECK_DESC' , 'Compruebe si todav&iacute;a hay suficiente mercanc&iacute;a disponible para entregar los pedidos.');

define('ATTRIBUTE_STOCK_CHECK_TITLE' , 'Comprobaci&oacute;n del inventario de atributos del art&iacute;culo');
define('ATTRIBUTE_STOCK_CHECK_DESC' , 'Comprobaci&oacute;n de las existencias de mercanc&iacute;as con determinados atributos de los art&iacute;culos');
define('STOCK_LIMITED_TITLE' , 'Deducci&oacute;n de la cantidad de bienes');
define('STOCK_LIMITED_DESC' , 'Deducir la cantidad de bienes en stock si los bienes fueron pedidos');
define('STOCK_LIMITED_DOWNLOADS_TITLE' , 'Reste las existencias para las descargas');
define('STOCK_LIMITED_DOWNLOADS_DESC' , '&iquest;Debe deducirse tambi&eacute;n el importe de los bienes para los art&iacute;culos de descarga?');
define('STOCK_ALLOW_CHECKOUT_TITLE' , 'Permitir la compra de productos que no est&aacute;n en stock');
define('STOCK_ALLOW_CHECKOUT_DESC' , '&iquest;Desea permitir que se realicen pedidos incluso si determinados productos no est&aacute;n disponibles seg&uacute;n el inventario?');
define('STOCK_MARK_PRODUCT_OUT_OF_STOCK_TITLE' , 'Marcado de art&iacute;culos agotados');
define('STOCK_MARK_PRODUCT_OUT_OF_STOCK_DESC' , 'Deje claro al cliente qu&eacute; art&iacute;culos ya no est&aacute;n disponibles.');
define('STOCK_REORDER_LEVEL_TITLE' , 'Mensaje al administrador de que un art&iacute;culo necesita ser reordenado');
define('STOCK_REORDER_LEVEL_DESC' , '&iquest;A partir de qu&eacute; n&uacute;mero de piezas debe aparecer este mensaje? (FUNCI&Oacute;N PLANIFICADA)');
define('STORE_PAGE_PARSE_TIME_TITLE' , 'Speichern der Berechnungszeit des Shop-Seitenaufbaus');
define('STORE_PAGE_PARSE_TIME_DESC' , 'Memoria del tiempo necesario para calcular los scripts hasta la salida de la p&aacute;gina.');
define('STORE_PARSE_DATE_TIME_FORMAT_TITLE' , 'Formato de la fecha en el archivo de registro');
define('STORE_PARSE_DATE_TIME_FORMAT_DESC' , 'El formato de fecha para el registro (por defecto: %d/%m/%Y %H:%M:%S)');
define('STORE_DB_SLOW_QUERY_TITLE' , 'Registro de consultas lentas');
define('STORE_DB_SLOW_QUERY_DESC' , 'S&oacute;lo deben guardarse las consultas SQL que requieran m&aacute;s tiempo.<br/><strong>Atenci&oacute;n: &iexcl;guardar las consultas de la base de datos debe estar activado!</strong>.<br/><strong>Atenci&oacute;n: &iexcl;El archivo puede llegar a ser muy grande con un tiempo de ejecuci&oacute;n m&aacute;s largo!.<br/><br/>El archivo de registro se guarda en la carpeta /log del directorio principal.');
define('STORE_DB_SLOW_QUERY_TIME_TITLE' , 'Registro de consultas lentas - Tiempo');
define('STORE_DB_SLOW_QUERY_TIME_DESC' , 'Introduzca la hora a partir de la cual las consultas SQL se escriben en el archivo de registro..');

define('DISPLAY_PAGE_PARSE_TIME_TITLE' , 'Mostrar los tiempos de c&aacute;lculo de las p&aacute;ginas');
define('DISPLAY_PAGE_PARSE_TIME_DESC' , 'Si se habilita el almacenamiento de los tiempos de c&aacute;lculo de las p&aacute;ginas, &eacute;stos pueden aparecer en el pie de p&aacute;gina.<br /><strong>desactivado</strong>: Desactiva la pantalla por completo<br /><strong>admin</strong>: S&oacute;lo el administrador ve los tiempos de c&aacute;lculo<br /><strong>todos</strong>: Todo el mundo ve los tiempos de c&aacute;lculo');
define('STORE_DB_TRANSACTIONS_TITLE' , 'Guardar las consultas de la base de datos');
define('STORE_DB_TRANSACTIONS_DESC' , 'Guardar las consultas individuales de la base de datos en el archivo de registro para los tiempos de c&aacute;lculo<br/><strong>Atenci&oacute;n: ¡El archivo puede llegar a ser muy grande con un tiempo de ejecuci&oacute;n m&aacute;s largo!</strong>.<br/><br/>El archivo de registro se guarda en la carpeta /log del directorio principal.');

define('USE_CACHE_TITLE' , 'Utilizar el cach&eacute;');
define('USE_CACHE_DESC' , 'Utilizar las funciones de cach&eacute;');

define('DB_CACHE_TITLE','Cach&eacute; de BD');
define('DB_CACHE_DESC','Las consultas a la base de datos pueden ser almacenadas en cach&eacute; por la tienda para reducir la carga de la base de datos y aumentar la velocidad');

define('DB_CACHE_EXPIRE_TITLE','Duraci&oacute;n de la cach&eacute; de la base de datos');
define('DB_CACHE_EXPIRE_DESC','Tiempo en segundos antes de que los archivos de la cach&eacute; se sobrescriban autom&aacute;ticamente con datos de la base de datos.');

define('DIR_FS_CACHE_TITLE' , 'Carpeta de cach&eacute;');
define('DIR_FS_CACHE_DESC' , 'La carpeta donde se almacenar&aacute;n los archivos en cach&eacute;.');

define('ACCOUNT_OPTIONS_TITLE','Tipo de creaci&oacute;n de la cuenta');
define('ACCOUNT_OPTIONS_DESC','&iquest;C&oacute;mo quiere dise&ntilde;ar el procedimiento de registro en su tienda?<br />Puede elegir entre cuentas de cliente regulares y "pedidos &uacute;nicos" sin crear una cuenta de cliente (se crea una cuenta, pero &eacute;sta no es visible para el cliente).');

define('EMAIL_TRANSPORT_TITLE' , 'M&eacute;todo de env&iacute;o de E-Mail');
define('EMAIL_TRANSPORT_DESC' , '<b>Recomendaci&oacute;n: smtp</b> - Define si el servidor usa "para el programa sendmail" una conexi&oacute;n local, o si necesita una conex&iacute;on SMTP a trav&eacute;s de TCP/IP. Servidores que usan Windows o Mac OS, deber&iacute;an usar SMTP.');

define('EMAIL_LINEFEED_TITLE' , 'E-Mail-Linefeeds');
define('EMAIL_LINEFEED_DESC' , 'Define los caracteres que se usar&aacute;n para separar los E-Mail-Header.');
define('EMAIL_USE_HTML_TITLE' , 'Usar MIME HTML cuando se env&iacute;en correos electr&oacute;nicos');
define('EMAIL_USE_HTML_DESC' , 'Enviar correos electr&oacute;nicos en formato HTML');
define('ENTRY_EMAIL_ADDRESS_CHECK_TITLE' , 'Comprobar las direcciones E-Mail a trav&eacute;s de DNS');
define('ENTRY_EMAIL_ADDRESS_CHECK_DESC' , 'Las direcciones de E-Mail se pueden comprobar a trav&eacute;s de un servidor DNS');
define('SEND_EMAILS_TITLE' , 'Env&iacute;o de E-Mails');
define('SEND_EMAILS_DESC' , 'Env&iacute;o de E-Mail a clientes (en pedidos etc.)');
define('SENDMAIL_PATH_TITLE' , 'La ruta de Sendmail');
define('SENDMAIL_PATH_DESC' , 'Si Usted usa Sendmail, introduzca aqu&iacute; la ruta en donde se encuentra el programa (normalmente: /usr/bin/sendmail):');
define('USE_SENDMAIL_OPTIONS_TITLE', 'Opciones de Sendmail');
define('USE_SENDMAIL_OPTIONS_DESC', 'Si mail() utiliza un MTA totalmente compatible con sendmail');
define('SMTP_MAIN_SERVER_TITLE' , 'Direcci&oacute;n del servidor SMTP');
define('SMTP_MAIN_SERVER_DESC' , 'Introduzca aqu&iacute; la direcci&oacute;n del servidor SMTP principal.');
define('SMTP_BACKUP_SERVER_TITLE' , 'Direcci&oacute;n del SMTP-Backup-Servidor');
define('SMTP_BACKUP_SERVER_DESC' , 'Introduzca aqu&iacute; la direcci&oacute;n del servidor SMTP que se encarga de las copias de seguridad.');
define('SMTP_USERNAME_TITLE' , 'Nombre de usuario SMTP');
define('SMTP_USERNAME_DESC' , 'Introduzca aqu&iacute; el nombre de usuario de su cuenta SMTP.');
define('SMTP_PASSWORD_TITLE' , 'Contrase&ntilde;a SMTP');
define('SMTP_PASSWORD_DESC' , 'Introduzca aqu&iacute; la contrase&ntilde;a de su cuenta SMTP.');
define('SMTP_AUTH_TITLE' , 'SMTP-Auth');
define('SMTP_AUTH_DESC' , 'Necesita el servidor SMTP una autentificaci&oacute;n -Server eine sichere autenticaci&oacute;n?');
define('SMTP_PORT_TITLE' , 'SMTP-Port');
define('SMTP_PORT_DESC' , 'Introduzca aqu&iacute; el puerto SMTP del servidor SMTP (por defecto: 25)?');
define('SMTP_AUTO_TLS_TITLE' , 'Conexi&oacute;n SMTP-Autom&aacute;tica TLS');
define('SMTP_AUTO_TLS_DESC' , '&iquest;Conexi&oacute;n autom&aacute;tica con STARTTLS si SMTP-SECURE est&aacute; desactivado? <br> En caso de problemas de transmisi&oacute;n, desactive la conexi&oacute;n autom&aacute;tica TLS.');
define('SMTP_DEBUG_TITLE' , 'Nivel de registro de depuraci&oacute;n SMTP');
define('SMTP_DEBUG_DESC' , '<b>0</b>: sin salida; <b>1</b>: commands; <b>2</b>: datos y comandos; <b>3</b>: como 2 m&aacute;s estado de conexi&oacute;n; <b>4</b>: como 3 m&aacute;s la salida de datos de bajo nivel<br>En caso de problemas de env&iacute;o fijados en 2, se crea un registro en el directorio log.');

//DokuMan - 2011-09-20 - E-Mail SQL errors
define('EMAIL_SQL_ERRORS_TITLE','Enviar avisos de errores SQL como E-Mail');
define('EMAIL_SQL_ERRORS_DESC','En caso de "Si" se le enviar&aacute; al E-Mail del due&ntilde;o de la tienda online una notificaci&oacute;n del error SQL y los clientes no ver&aacute;n ning&uacute;n aviso. <br />Si esta en "No" se mostrar&aacute; para todo el mundo el error en pantalla (Por defecto).');

//Constants for contact_us
define('CONTACT_US_EMAIL_ADDRESS_TITLE' , 'Formulario contacto - E-Mail');
define('CONTACT_US_EMAIL_ADDRESS_DESC' , 'Introduce aqu&iacute; el E-Mail del remitente en el formulario "Contacto".');
define('CONTACT_US_NAME_TITLE' , 'Formulario Contacto - E-Mail nombre');
define('CONTACT_US_NAME_DESC' , 'Introduce aqu&iacute; el nombre del remitente del E-Mail.');
define('CONTACT_US_FORWARDING_STRING_TITLE' , 'Formulario contacto - E-Mail reenv&iacute;o');
define('CONTACT_US_FORWARDING_STRING_DESC' , 'Introduce aqu&iacute; las direcciones e-mail (separados por un coma), lo que deben recibir una copia recibida del formulario de contacto.');
define('CONTACT_US_REPLY_ADDRESS_TITLE' , 'Formulario contacto - E-Mail respuesta');
define('CONTACT_US_REPLY_ADDRESS_DESC' , 'Introduce aqu&iacute; la direcci&oacute;n e-mail a donde quieres que contesten los clientes.');
define('CONTACT_US_REPLY_ADDRESS_NAME_TITLE' , 'Formulario contacto - Nombre E-Mail respuesta.');
define('CONTACT_US_REPLY_ADDRESS_NAME_DESC' , 'Pon aqu&iacute; el nombre del E-Mail al cual contestaran los clientes.');
define('CONTACT_US_EMAIL_SUBJECT_TITLE' , 'Formulario contacto - Asunto en E-mail');
define('CONTACT_US_EMAIL_SUBJECT_DESC' , 'Asunto que aparece en los correos electr&oacute;nicos recibido a trav&eacute;s del formulario "Contacto"');

//Constants for support system
define('EMAIL_SUPPORT_ADDRESS_TITLE' , 'Soporte t&eacute;cnico - E-mail');
define('EMAIL_SUPPORT_ADDRESS_DESC' , 'Introduce aqu&iacute; el e-mail del soporte t&eacute;cnico <b>Soporte Sistema</b>(Olvidado contrase&ntilde;a, Nueva alta).');
define('EMAIL_SUPPORT_NAME_TITLE' , 'Soporte t&eacute;cnico - Nombre E-Mail');
define('EMAIL_SUPPORT_NAME_DESC' , 'Introduce aqu&iacute; el nombre del soporte t&eacute;cnico).');
define('EMAIL_SUPPORT_FORWARDING_STRING_TITLE' , 'Soporte t&eacute;cnico - E-Mail reenvio');
define('EMAIL_SUPPORT_FORWARDING_STRING_DESC' , 'Introduce aqu&iacute; las direcciones e-mail (separados por un coma) de los que quieres que reciba una copia del e-mail enviado al soporte t&eacute;cnico del sistema.');
define('EMAIL_SUPPORT_REPLY_ADDRESS_TITLE' , 'Soporte t&eacute;cnico - E-Mail respuesta');
define('EMAIL_SUPPORT_REPLY_ADDRESS_DESC' , 'Introduce aqui la direcci&oacute;n E-Mail para respuestas.');
define('EMAIL_SUPPORT_REPLY_ADDRESS_NAME_TITLE' , 'Soporte t&eacute;cnico - Nombre del E-Mail respuesta');
define('EMAIL_SUPPORT_REPLY_ADDRESS_NAME_DESC' , 'Pon aqu&iacute; el nombre del E-Mail al cual contestaran los clientes.');
define('EMAIL_SUPPORT_SUBJECT_TITLE' , 'Soporte t&eacute;cnico - Asunto en e-mail');
define('EMAIL_SUPPORT_SUBJECT_DESC' , 'Asunto que aparece en los correos electr&oacute;nicos recibido a trav&eacute;s de <b>Soporte-Sistema</b>.');
define('MODULE_ORDER_MAIL_STEP_SUBJECT_TITLE','Facturaci&oacute;n - Asunto del correo de confirmaci&oacute;n del pedido');
define('MODULE_ORDER_MAIL_STEP_SUBJECT_DESC','Por favor, introduzca un asunto para los correos de confirmaci&oacute;n del pedido. (Por ejemplo <b>Su pedido {$nr} de {$date}</b>)<br />Puede utilizar: {$nr},{$date},{$firstname},{$lastname}');


//Constants for Billing system
define('EMAIL_BILLING_ADDRESS_TITLE' , 'Administraci&oacute;n - E-mail');
define('EMAIL_BILLING_ADDRESS_DESC' , 'Introduce aqu&iacute; la direcci&oacute;n e-mail para los env&iacute;os de los correos electr&oacute;nicos a trav&eacute;s de <b>Administraci&oacute;n</b> (Confirmaci&oacute;n de pedidos, cambio de estados,..).');
define('EMAIL_BILLING_NAME_TITLE' , 'Administraci&oacute;n - E-mail Nombre');
define('EMAIL_BILLING_NAME_DESC' , 'Introduce aqu&iacute; el nombre del administrador para <b>Administraci&oacute;n</b> (Confirmaci&oacute;n de pedidos, cambio de estados,..).');
define('EMAIL_BILLING_FORWARDING_STRING_TITLE' , 'Administraci&oacute;n - E-Mail reenv&iacute;o');
define('EMAIL_BILLING_FORWARDING_STRING_DESC' , 'Introduce aqu&iacute; las direcciones e-mail (separados por un coma) de los que quieres que reciba una copia del e-mail enviado administraci&oacute;n.');
define('EMAIL_BILLING_REPLY_ADDRESS_TITLE' , 'Administraci&oacute;n - E-Mail respuesta');
define('EMAIL_BILLING_REPLY_ADDRESS_DESC' , 'Introduce aqu&iacute; la direcci&oacute;n E-Mail para respuestas.');
define('EMAIL_BILLING_REPLY_ADDRESS_NAME_TITLE' , 'Administraci&oacute;n - Nombre, E-Mail respuesta');
define('EMAIL_BILLING_REPLY_ADDRESS_NAME_DESC' , 'Pon aqu&iacute; el nombre del E-Mail al cual contestaran los clientes.');
define('EMAIL_BILLING_SUBJECT_TITLE' , 'Administraci&oacute;n - Asunto cambio de estado');
define('EMAIL_BILLING_SUBJECT_DESC' , 'Introduce aqu&iacute; el asunto, el cual aparecer&aacute; en los e-mails que se env&iacute;an desde el sistema. (En los cambios de estado de pedido).');
define('EMAIL_BILLING_SUBJECT_ORDER_TITLE','Administraci&oacute;n - Asunto para pedidos');
define('EMAIL_BILLING_SUBJECT_ORDER_DESC','Introduce aqu&iacute; el asunto que aparece cuando se env&iacute;an e-mails de respuesta a los pedidos recibidos. (z.B.: <b>Tu pedido {$nr}, del {$date}</b>) Variables disponibles: {$nr},{$date},{$firstname},{$lastname}');

define('DOWNLOAD_ENABLED_TITLE' , 'Download von Artikeln erlauben');
define('DOWNLOAD_ENABLED_DESC' , 'Die Artikel Download Funktionen einschalten (Software etc.).');
define('DOWNLOAD_BY_REDIRECT_TITLE' , 'Download durch Redirection');
define('DOWNLOAD_BY_REDIRECT_DESC' , 'Browser-Umleitung f&uuml;r Artikeldownloads benutzen. Auf nicht Linux/Unix Systemen ausschalten.');
define('DOWNLOAD_MAX_DAYS_TITLE' , 'Verfallsdatum der Download Links(Tage)');
define('DOWNLOAD_MAX_DAYS_DESC' , 'Anzahl an Tagen, die ein Download Link f&uuml;r den Kunden aktiv bleibt. 0 bedeutet ohne Limit.');
define('DOWNLOAD_MAX_COUNT_TITLE' , 'Maximale Anzahl der Downloads eines gekauften Medienproduktes');
define('DOWNLOAD_MAX_COUNT_DESC' , 'Stellen Sie die maximale Anzahl an Downloads ein, die Sie dem Kunden erlauben, der einen Artikel dieser Art erworben hat. 0 bedeutet kein Download.');
define('DOWNLOAD_MULTIPLE_ATTRIBUTES_ALLOWED_TITLE' , 'Mehrfache Attribute f&uuml;r Downloads');
define('DOWNLOAD_MULTIPLE_ATTRIBUTES_ALLOWED_DESC' , 'Sollen mehrfache Attribute bei Download Artikeln erlaubt sein, damit die Versandart &uuml;bersprungen wird.');

define('GZIP_COMPRESSION_TITLE' , 'GZip Komprimierung einschalten');
define('GZIP_COMPRESSION_DESC' , 'Schalten Sie HTTP GZip Komprimierung ein um die Seitenaufbaugeschwindigkeit zu optimieren.');
define('GZIP_LEVEL_TITLE' , 'Komprimierungs-Level');
define('GZIP_LEVEL_DESC' , 'W&auml;hlen Sie einen Komprimierung-Level zwischen 0-9 (0 = Minimum, 9 = Maximum).');

define('SESSION_WARNING', '<br /><br /><span class="col-red"><strong>ACHTUNG:</strong></span> Diese Funktion kann eventuell die Funktionsf&auml;higkeit des Shops beeinflussen. Bitte nur &auml;ndern, wenn man sich &uuml;ber die m&ouml;glichen Folgen im Klaren ist und der Server diese Funktion auch wirklich unterst&uuml;tzt!');

define('SESSION_WRITE_DIRECTORY_TITLE' , 'Session Speicherort');
define('SESSION_WRITE_DIRECTORY_DESC' , 'Wenn Sessions als Files gespeichert werden sollen, benutzen Sie folgenden Ordner.');
define('SESSION_FORCE_COOKIE_USE_TITLE' , 'Cookie Benutzung bevorzugen');
define('SESSION_FORCE_COOKIE_USE_DESC' , 'Session starten, falls Cookies vom Browser erlaubt werden. (Standard &quot;false&quot;)'.SESSION_WARNING);
define('SESSION_CHECK_SSL_SESSION_ID_TITLE' , 'Checken der SSL-Session-ID');
define('SESSION_CHECK_SSL_SESSION_ID_DESC' , '&Uuml;berpr&uuml;fen der SSL_SESSION_ID bei jedem HTTPS Seitenaufruf. (Standard &quot;false&quot;)'.SESSION_WARNING);
define('SESSION_CHECK_USER_AGENT_TITLE' , '&Uuml;berpr&uuml;fen des Useragents');
define('SESSION_CHECK_USER_AGENT_DESC' , '&Uuml;berpr&uuml;fen des Browser-Useragents des Benutzers bei jedem Seitenaufruf. (Standard &quot;false&quot;)'.SESSION_WARNING);
define('SESSION_CHECK_IP_ADDRESS_TITLE' , 'Checken der IP-Adresse');
define('SESSION_CHECK_IP_ADDRESS_DESC' , '&Uuml;berpr&uuml;fen der IP-Adresse des Benutzers bei jedem Seitenaufruf. (Standard &quot;false&quot;)'.SESSION_WARNING);
define('SESSION_RECREATE_TITLE' , 'Session erneuern');
define('SESSION_RECREATE_DESC' , 'Erneuern der Session und Zuweisung einer neuen Session-ID sobald sich ein Benutzer einloggt oder registriert (PHP >=4.1 needed). (Standard &quot;false&quot;)'.SESSION_WARNING);

define('DISPLAY_CONDITIONS_ON_CHECKOUT_TITLE' , 'Firma de las CGC');
define('DISPLAY_CONDITIONS_ON_CHECKOUT_DESC' , 'Mostrar y firmar las CGC durante el proceso de pedido');

define('SIGN_CONDITIONS_ON_CHECKOUT_TITLE' , 'Firmar las condiciones de pago');
define('SIGN_CONDITIONS_ON_CHECKOUT_DESC' , 'Solicitar la aprobaci&oacute;n de los t&eacute;rminos y condiciones y en el pago.<br/><b>Atenci&oacute;n:</b> "La opci&oacute;n "Mostrar condiciones en el pago" debe estar activada.');


define('META_MIN_KEYWORD_LENGTH_TITLE' , 'Longitud m&iacute;nima de las meta palabras clave');
define('META_MIN_KEYWORD_LENGTH_DESC' , 'Longitud m&iacute;nima de las meta palabras clave generadas autom&aacute;ticamente (descripci&oacute;n del art&iacute;culo)');
define('META_KEYWORDS_NUMBER_TITLE' , 'N&uacute;mero de meta palabras clave');
define('META_KEYWORDS_NUMBER_DESC' , 'N&uacute;mero de meta palabras clave');
define('META_AUTHOR_TITLE' , 'autor');
define('META_AUTHOR_DESC' , '<meta name="author">');
define('META_PUBLISHER_TITLE' , 'editor');
define('META_PUBLISHER_DESC' , '<meta name="publisher">');
define('META_COMPANY_TITLE' , 'empresa');
define('META_COMPANY_DESC' , '<meta name="company">');
define('META_TOPIC_TITLE' , 'p&aacute;gina-tema');
define('META_TOPIC_DESC' , '<meta name="page-topic">');
define('META_REPLY_TO_TITLE' , 'Responder a');
define('META_REPLY_TO_DESC' , '<meta name="reply-to">');
define('META_REVISIT_AFTER_TITLE' , 'revisit-after');
define('META_REVISIT_AFTER_DESC' , '<meta name="revisit-after">');
define('META_ROBOTS_TITLE' , 'robots');
define('META_ROBOTS_DESC' , '<meta name="robots">');
define('META_DESCRIPTION_TITLE' , 'Descripci&oacute;n');
define('META_DESCRIPTION_DESC' , '<meta name="description">');
define('META_KEYWORDS_TITLE' , 'Palabras clave');
define('META_KEYWORDS_DESC' , '<meta name="keywords">');

define('MODULE_PAYMENT_INSTALLED_TITLE' , 'M&oacute;dulos de pago instalados');
define('MODULE_PAYMENT_INSTALLED_DESC' , 'Lista de nombres de archivos de m&oacute;dulos de pago (separados por un punto y coma (;)). Se actualiza autom&aacute;ticamente, por lo que no es necesario editarlo. (Ejemplo: cc.php;cod.php;paypal.php)');
define('MODULE_ORDER_TOTAL_INSTALLED_TITLE' , 'Orden instalada Total de m&oacute;dulos');
define('MODULE_ORDER_TOTAL_INSTALLED_DESC' , 'Lista de nombres de archivos del m&oacute;dulo Order-Total (separados por un punto y coma (;)). Se actualiza autom&aacute;ticamente, por lo que no es necesario editarlo. (Ejemplo: ot_subtotal.php;ot_tax.php;ot_shipping.php;ot_total.php)');
define('MODULE_SHIPPING_INSTALLED_TITLE' , 'M&oacute;dulos de env&iacute;o instalados');
define('MODULE_SHIPPING_INSTALLED_DESC' , 'Lista de nombres de archivos de m&oacute;dulos de env&iacute;o (separados por un punto y coma (;)). Se actualiza autom&aacute;ticamente, por lo que no es necesario editarlo. (Ejemplo: ups.php;flat.php;item.php)');

define('CACHE_LIFETIME_TITLE','Duraci&oacute;n de la cach&eacute;');
define('CACHE_LIFETIME_DESC','Tiempo en segundos antes de que los archivos de la cach&eacute; se sobrescriban autom&aacute;ticamente.');
define('CACHE_CHECK_TITLE','Comprobar si se ha modificado la cach&eacute;');
define('CACHE_CHECK_DESC','Si es "true", las cabeceras If-Modified-Since se tienen en cuenta para el contenido en cach&eacute;, y se emiten las cabeceras HTTP que coincidan. Esto significa que las p&aacute;ginas a las que se accede regularmente no se reenv&iacute;an al cliente cada vez.');

define('PRODUCT_REVIEWS_VIEW_TITLE','Comentarios en los detalles del art&iacute;culo');
define('PRODUCT_REVIEWS_VIEW_DESC','Anzahl der angezeigten Rezensionen in der Artikeldetailansicht');

define('DELETE_GUEST_ACCOUNT_TITLE','Eliminaci&oacute;n de la cuenta de invitado');
define('DELETE_GUEST_ACCOUNT_DESC','&iquest;Deben eliminarse las cuentas de invitados despu&eacute;s de realizar un pedido? (Los datos del pedido permanecen)');

define('USE_WYSIWYG_TITLE','Activar el editor WYSIWYG');
define('USE_WYSIWYG_DESC','&iquest;Activar el editor WYSIWYG para el CMS y los art&iacute;culos?');

define('PRICE_IS_BRUTTO_TITLE','Administraci&oacute;n bruta');
define('PRICE_IS_BRUTTO_DESC','Permite introducir los precios brutos en la Administraci&oacute;n');

define('PRICE_PRECISION_TITLE','Decimales brutos/netos');
define('PRICE_PRECISION_DESC','Precisi&oacute;n de la conversi&oacute;n (no influye en la visualizaci&oacute;n en la tienda, siempre se muestran 2 decimales).');

define('CHECK_CLIENT_AGENT_TITLE','&iquest;Evitar las sesiones de la ara&ntilde;a?');
define('CHECK_CLIENT_AGENT_DESC','Permitir que las ara&ntilde;as de los motores de b&uacute;squeda conocidos accedan al sitio sin una sesi&oacute;n.');
define('SHOW_IP_LOG_TITLE','&iquest;Registro de IP en la caja?');
define('SHOW_IP_LOG_DESC','&iquest;Mostrar el texto "Su IP se almacena por razones de seguridad" en la compra?');

define('ACTIVATE_GIFT_SYSTEM_TITLE','&iquest;Activar el sistema de vales?');
define('ACTIVATE_GIFT_SYSTEM_DESC','&iquest;Activar el sistema de vales?<br/><br/><b>Nota: </b>Los m&oacute;dulos ot_coupon deben seguir siendo <a href="'.xtc_href_link(FILENAME_MODULES, 'set=ordertotal&module=ot_coupon').'"><b>aqu&iacute;</b></a> y ot_gv <a href="'.xtc_href_link(FILENAME_MODULES, 'set=ordertotal&module=ot_gv').'"><b>aqu&iacute;</b></a> activarse.');

define('SECURITY_CODE_LENGTH_TITLE', 'Duraci&oacute;n del c&oacute;digo del cheque regalo');
define('SECURITY_CODE_LENGTH_DESC', 'Introduzca aqu&iacute; la longitud del c&oacute;digo del cheque regalo (m&aacute;x. 16 caracteres)');

define('NEW_SIGNUP_GIFT_VOUCHER_AMOUNT_TITLE', 'Importe del cheque regalo de bienvenida');
define('NEW_SIGNUP_GIFT_VOUCHER_AMOUNT_DESC', 'Cantidad del Vale de Regalo de Bienvenida: Si no desea enviar un Cheque Regalo en su correo electr&oacute;nico de creaci&oacute;n de cuenta, ponga 0 para que no haya importe, si no, ponga aqu&iacute; el importe, es decir, 10,00 o 50,00, sin signos de moneda');
define('NEW_SIGNUP_DISCOUNT_COUPON_TITLE', 'C&oacute;digo de descuento de bienvenida');
define('NEW_SIGNUP_DISCOUNT_COUPON_DESC', 'C&oacute;digo de cup&oacute;n de descuento de bienvenida: si no desea enviar un cup&oacute;n de descuento en el correo electr&oacute;nico de creaci&oacute;n de la cuenta, deje este campo en blanco; de lo contrario, coloque aqu&iacute; el c&oacute;digo de cup&oacute;n que desea utilizar. <br /><b>Atenci&oacute;n:</b> El c&oacute;digo del cup&oacute;n debe ser creado en el <a href="'.xtc_href_link(FILENAME_COUPON_ADMIN).'"><b>Administraci&oacute;n de cupones</b></a> antes de.');


define('ACTIVATE_SHIPPING_STATUS_TITLE','&iquest;Activar la visualizaci&oacute;n del estado del env&iacute;o?');
define('ACTIVATE_SHIPPING_STATUS_DESC','&iquest;Activar la visualizaci&oacute;n del estado del env&iacute;o? (Verschiedene Versandzeiten konnen fur einzelne Artikel festgelegt werden. Nach Aktivierung erscheint ein neuer Punkt <b>Lieferstatus</b> bei der Artikeleingabe)');

define('IMAGE_QUALITY_TITLE','Calidad de imagen');
define('IMAGE_QUALITY_DESC','Calidad de la imagen (0=mayor compresi&oacute;n, 100=mejor calidad)');

define('GROUP_CHECK_TITLE','Comprobaci&oacute;n del grupo de clientes');
define('GROUP_CHECK_DESC','&iquest;Permitir que s&oacute;lo ciertos grupos de clientes accedan a categor&iacute;as individuales, productos, elementos de contenido? (Despu&eacute;s de la activaci&oacute;n, las opciones de entrada aparecen para los art&iacute;culos, las categor&iacute;as y en el gestor de contenidos)');

define('ACTIVATE_REVERSE_CROSS_SELLING_TITLE', 'Venta cruzada inversa');
define('ACTIVATE_REVERSE_CROSS_SELLING_DESC', '&iquest;Activar la venta cruzada inversa?');
define('ACTIVATE_CROSS_SELLING_TITLE', 'Venta cruzada');
define('ACTIVATE_CROSS_SELLING_DESC', '&iquest;Activar la venta cruzada?');

define('ACTIVATE_NAVIGATOR_TITLE','&iquest;Activar el navegador de art&iacute;culos?');
define('ACTIVATE_NAVIGATOR_DESC','Activar/desactivar el navegador de art&iacute;culos en la vista detallada de art&iacute;culos (por razones de rendimiento con un n&uacute;mero elevado de art&iacute;culos).');

define('QUICKLINK_ACTIVATED_TITLE','Activar la funci&oacute;n multilink/copia');
define('QUICKLINK_ACTIVATED_DESC','La funci&oacute;n de multienlace/copia facilita la copia/vinculaci&oacute;n de un art&iacute;culo en varias categor&iacute;as, gracias a la posibilidad de seleccionar categor&iacute;as individuales mediante una casilla de verificaci&oacute;n.');

define('ACTIVATE_REVERSE_CROSS_SELLING_TITLE','Marketing cruzado inverso');
define('ACTIVATE_REVERSE_CROSS_SELLING_DESC','&iquest;Activar la funci&oacute;n de marketing cruzado inverso?');

define('DOWNLOAD_UNALLOWED_PAYMENT_TITLE', 'M&oacute;dulos de pago de descargas no autorizadas');
define('DOWNLOAD_UNALLOWED_PAYMENT_DESC', '<strong>NO</strong> M&eacute;todos de pago permitidos para los productos de descarga separados por comas. Por ejemplo, {banktransfer,cod,invoice,moneyorder}');
define('DOWNLOAD_MIN_ORDERS_STATUS_TITLE', 'Estado del pedido');
define('DOWNLOAD_MIN_ORDERS_STATUS_DESC', 'Estado del pedido con el que se liberan las descargas solicitadas.');

// Vat ID
define('STORE_OWNER_VAT_ID_TITLE' , 'ID de UST del operador de la tienda');
define('STORE_OWNER_VAT_ID_DESC' , 'El impuesto sobre el volumen de negocios de su empresa');
define('DEFAULT_CUSTOMERS_VAT_STATUS_ID_TITLE' , 'Estado del cliente para los clientes comprobados por UST ID (en el extranjero)');
define('DEFAULT_CUSTOMERS_VAT_STATUS_ID_DESC' , 'Seleccione el estado del cliente (grupo) para los clientes con identificaci&oacute;n UST comprobada.');
define('ACCOUNT_COMPANY_VAT_CHECK_TITLE' , 'Consulta del CIF');
define('ACCOUNT_COMPANY_VAT_CHECK_DESC' , 'El CIF debe poder ser introducido por los clientes. Si es falso, el campo de entrada ya no se muestra.');
define('ACCOUNT_COMPANY_VAT_LIVE_CHECK_TITLE' , 'Comprobar la plausibilidad del CIF en l&iacute;nea');
define('ACCOUNT_COMPANY_VAT_LIVE_CHECK_DESC' , 'Se comprueba en l&iacute;nea la verosimilitud del CIF. Para ello, el servicio web del portal fiscal de la UE (<a href="http://ec.europa.eu/taxation_customs" style="font-style:italic">http://ec.europa.eu/taxation_customs</a>).<br/>Requiere PHP5 con soporte "SOAP" activado.<br/><br/><span class="messageStackSuccess">El soporte de "PHP5 SOAP" es actualmente '.(in_array ('soap', get_loaded_extensions()) ? '' : '<span class="messageStackError">NO</span>').' activa!</span><br/><br/>');
define('ACCOUNT_COMPANY_VAT_GROUP_TITLE' , '&iquest;Ajustar el grupo de clientes despu&eacute;s de la comprobaci&oacute;n del UST ID?');
define('ACCOUNT_COMPANY_VAT_GROUP_DESC' , 'Si se activa esta opci&oacute;n, se cambiar&aacute; el grupo de clientes despu&eacute;s de una comprobaci&oacute;n positiva del UST ID.');
define('ACCOUNT_VAT_BLOCK_ERROR_TITLE' , '&iquest;Bloqueo del registro de n&uacute;meros de IVA incorrectos o no comprobados?');
define('ACCOUNT_VAT_BLOCK_ERROR_DESC' , 'Al activar esta opci&oacute;n, s&oacute;lo se introducen los n&uacute;meros de IVA comprobados y correctos.');
define('DEFAULT_CUSTOMERS_VAT_STATUS_ID_LOCAL_TITLE','Estado del cliente para los clientes con identificaci&oacute;n UST (nacional)');
define('DEFAULT_CUSTOMERS_VAT_STATUS_ID_LOCAL_DESC','Seleccione el estado del cliente (grupo) para los clientes con identificaci&oacute;n UST comprobada.');

// Google Conversion
define('GOOGLE_CONVERSION_TITLE','Seguimiento de conversiones de Google');
define('GOOGLE_CONVERSION_DESC','El registro de las palabras clave de conversi&oacute;n de los pedidos');
define('GOOGLE_CONVERSION_ID_TITLE','Identificaci&oacute;n de la conversi&oacute;n');
define('GOOGLE_CONVERSION_ID_DESC','Su ID de conversi&oacute;n de Google');
define('GOOGLE_LANG_TITLE','Google Language');
define('GOOGLE_LANG_DESC','C&oacute;digo ISO de la lengua utilizada');
define('GOOGLE_CONVERSION_LABEL_TITLE','Google Conversion Label');
define('GOOGLE_CONVERSION_LABEL_DESC','Su etiqueta de conversi&oacute;n de Google');

// Afterbuy
define('AFTERBUY_ACTIVATED_TITLE','Activo');
define('AFTERBUY_ACTIVATED_DESC','Activar la interfaz de poscompra');
define('AFTERBUY_PARTNERID_TITLE','ID de socio');
define('AFTERBUY_PARTNERID_DESC','Su ID de socio de Afterbuy');
define('AFTERBUY_PARTNERPASS_TITLE','Contrase&ntilde;a de socio');
define('AFTERBUY_PARTNERPASS_DESC','Su contrase&ntilde;a de socio para la interfaz XML de Afterbuy');
define('AFTERBUY_USERID_TITLE','ID de usuario');
define('AFTERBUY_USERID_DESC','Su ID de usuario de Afterbuy');
define('AFTERBUY_ORDERSTATUS_TITLE','Estado del pedido');
define('AFTERBUY_ORDERSTATUS_DESC','Estado de la orden despu&eacute;s de la transmisi&oacute;n exitosa de los datos de la orden');
define('AFTERBUY_URL','Puede encontrar una descripci&oacute;n de Afterbuy aqu&iacute;: <a href="http://www.afterbuy.de" target="new">http://www.afterbuy.de</a>');
define('AFTERBUY_DEALERS_TITLE', 'Marcar como gestor');
define('AFTERBUY_DEALERS_DESC', 'Introduzca aqu&iacute; los identificadores de grupo de los manipuladores que deben entrar en Afterbuy como manipuladores..<br />Ejemplo: <em>6,5,8</em>. No debe haber espacios.');
define('AFTERBUY_IGNORE_GROUPE_TITLE', 'Ignorar el grupo de clientes');
define('AFTERBUY_IGNORE_GROUPE_DESC', '&iquest;Qu&eacute; grupos de clientes deben ser ignorados?<br />Ejemplo: <em>6,5,8</em>. No debe haber espacios!');

// Search-Options
define('SEARCH_MIN_LENGTH_TITLE', 'No debe haber espacios');
define('SEARCH_MIN_LENGTH_DESC', 'N&uacute;mero m&iacute;nimo de caracteres para la b&uacute;squeda');

define('SEARCH_IN_DESC_TITLE','Buscar en las descripciones de los productos');
define('SEARCH_IN_DESC_DESC','Activar para habilitar la b&uacute;squeda en las descripciones de los productos (corta + larga).');
define('SEARCH_IN_ATTR_TITLE','B&uacute;squeda en los atributos del producto');
define('SEARCH_IN_ATTR_DESC','Activar para habilitar la b&uacute;squeda en los atributos del producto (por ejemplo, color, longitud).');
define('SEARCH_IN_MANU_TITLE','Buscar en el fabricante');
define('SEARCH_IN_MANU_DESC','Activar para habilitar la b&uacute;squeda en los fabricantes');

define('ADMIN_SEARCH_IN_DESC_TITLE','Buscar en las descripciones de los productos');
define('ADMIN_SEARCH_IN_DESC_DESC','Incluir las descripciones de los productos en las b&uacute;squedas');
define('ADMIN_SEARCH_IN_ATTR_TITLE','Buscar en los atributos de los productos');
define('ADMIN_SEARCH_IN_ATTR_DESC','Incluir los atributos de los productos en las b&uacute;squedas');


// changes for 3.0.4 SP2
define('REVOCATION_ID_TITLE','Derecho de desistimiento');
define('REVOCATION_ID_DESC','Wahle den Content zur Anzeige des Widerrufrechts');
define('DISPLAY_REVOCATION_ON_CHECKOUT_TITLE','&iquest;Derecho de desistimiento?');
define('DISPLAY_REVOCATION_ON_CHECKOUT_DESC','&iquest;Mostrar el derecho de desistimiento en checkout_confirmation?');

// BOF - Tomcraft - 2009-10-03 - Paypal Express Modul
define('PAYPAL_MODE_TITLE','Modo PayPal:');
define('PAYPAL_MODE_DESC','En vivo (normal) o en modo de prueba (sandbox). Dependiendo del modo, se debe crear primero un acceso a la API en PayPal: <br/>Enlace: <a href="https://www.paypal.com/de/cgi-bin/webscr?cmd=_get-api-signature&generic-flow=true" target="_blank"><strong>Configurar el acceso a la API para el modo directo</strong></a><br/>Enlace: <a href="https://www.sandbox.paypal.com/de/cgi-bin/webscr?cmd=_get-api-signature&generic-flow=true" target="_blank"><strong>Configurar el acceso a la API para el modo sandbox</strong></a><br/>&iquest;Todav&iacute;a no tiene una cuenta PayPal? <a href="https://www.paypal.com/de/cgi-bin/webscr?cmd=_registration-run" target="_blank"><strong>Haga clic aqu&iacute; para crear uno.</strong></a>');
define('PAYPAL_API_USER_TITLE','Usuario de la API de PayPal (en directo)');
define('PAYPAL_API_USER_DESC','Introduzca aqu&iacute; el nombre de usuario.');
define('PAYPAL_API_PWD_TITLE','Contrase&ntilde;a de la API de PayPal (en vivo)');
define('PAYPAL_API_PWD_DESC','Introduzca la contrase&ntilde;a aqu&iacute;.');
define('PAYPAL_API_SIGNATURE_TITLE','Firma de la API de PayPal (en directo)');
define('PAYPAL_API_SIGNATURE_DESC','Introduzca aqu&iacute; la firma de la API.');
define('PAYPAL_API_SANDBOX_USER_TITLE','Usuario de la API de PayPal (Sandbox)');
define('PAYPAL_API_SANDBOX_USER_DESC','Introduzca aqu&iacute; el nombre de usuario.');
define('PAYPAL_API_SANDBOX_PWD_TITLE','Contrase&ntilde;a de la API de PayPal (Sandbox)');
define('PAYPAL_API_SANDBOX_PWD_DESC','Introduzca aqu&iacute; la contrase&ntilde;a.');
define('PAYPAL_API_SANDBOX_SIGNATURE_TITLE','Firma de la API de PayPal (Sandbox)');
define('PAYPAL_API_SANDBOX_SIGNATURE_DESC','Introduzca aqu&iacute; la firma de la API.');
define('PAYPAL_API_VERSION_TITLE','Versi&oacute;n de la API de PayPal');
define('PAYPAL_API_VERSION_DESC','Introduzca aqu&iacute; la versi&oacute;n actual de la API de PayPal, por ejemplo: 119.0');
define('PAYPAL_API_IMAGE_TITLE','Logotipo de la tienda de PayPal');
define('PAYPAL_API_IMAGE_DESC','Introduzca aqu&iacute; el archivo del logotipo que se mostrar&aacute; en PayPal.<br />Atenci&oacute;n: S&oacute;lo se transmitir&aacute; si la tienda funciona con SSL.<br />La imagen puede tener un m&aacute;ximo de 750px de ancho y 90px de alto.<br />El archivo se llama desde: '.DIR_WS_CATALOG.'templates/'.CURRENT_TEMPLATE.'/img/');
define('PAYPAL_API_CO_BACK_TITLE','Color de fondo de PayPal');
define('PAYPAL_API_CO_BACK_DESC','Introduzca aqu&iacute; el color de fondo que se mostrar&aacute; en PayPal. Por ejemplo, FEE8B9');
define('PAYPAL_API_CO_BORD_TITLE','Color del marco de PayPal');
define('PAYPAL_API_CO_BORD_DESC','Introduzca aqu&iacute; el color del marco que se mostrar&aacute; en PayPal. Por ejemplo, E4C558');
define('PAYPAL_ERROR_DEBUG_TITLE','Pantalla de error de PayPal');
define('PAYPAL_ERROR_DEBUG_DESC','&iquest;Debe mostrarse el error original de PayPal? Normal=false');
define('PAYPAL_ORDER_STATUS_TMP_ID_TITLE','Estado del pedido "cancelado"');
define('PAYPAL_ORDER_STATUS_TMP_ID_DESC','Seleccione el estado de la orden para una acci&oacute;n cancelada (por ejemplo, cancelaci&oacute;n de PayPal).');
define('PAYPAL_ORDER_STATUS_SUCCESS_ID_TITLE','Estado del pedido OK');
define('PAYPAL_ORDER_STATUS_SUCCESS_ID_DESC','Seleccione el estado de la orden para una transacci&oacute;n exitosa (por ejemplo, Abierto PP pagado).');
define('PAYPAL_ORDER_STATUS_PENDING_ID_TITLE','Estado del pedido "en proceso');
define('PAYPAL_ORDER_STATUS_PENDING_ID_DESC','Seleccione el estado del pedido para una transacci&oacute;n que a&uacute;n no ha sido procesada por PayPal (por ejemplo, Abierto PP en espera).');
define('PAYPAL_ORDER_STATUS_REJECTED_ID_TITLE','Estado del pedido "rechazado"');
define('PAYPAL_ORDER_STATUS_REJECTED_ID_DESC','Seleccione el estado del pedido para una transacci&oacute;n rechazada (por ejemplo, PayPal rechazado).');
define('PAYPAL_COUNTRY_MODE_TITLE','Modo de aterrizaje de PayPal');
define('PAYPAL_COUNTRY_MODE_DESC','Seleccione aqu&iacute; la configuraci&oacute;n del modo pa&iacute;s. Algunas funciones de PayPal s&oacute;lo est&aacute;n disponibles en el Reino Unido (por ejemplo, DirectPayment).');
define('PAYPAL_EXPRESS_ADDRESS_CHANGE_TITLE','Datos de la direcci&oacute;n de PayPal Express');
define('PAYPAL_EXPRESS_ADDRESS_CHANGE_DESC','Le permite cambiar los datos de la direcci&oacute;n proporcionados por PayPal.');
define('PAYPAL_EXPRESS_ADDRESS_OVERRIDE_TITLE','Sobrescribir la direcci&oacute;n de entrega');
define('PAYPAL_EXPRESS_ADDRESS_OVERRIDE_DESC','Permite cambiar los datos de direcci&oacute;n transmitidos por PayPal (cuenta existente).');
define('PAYPAL_INVOICE_TITLE','Shop-Prafix para la factura de PayPal-No.');
define('PAYPAL_INVOICE_DESC','Secuencia de letras de libre elecci&oacute;n (prafix) que precede al n&uacute;mero de pedido y se utiliza para generar el n&uacute;mero de factura de PayPal.<br />Esto permite que varias tiendas trabajen con una sola cuenta de PayPal. Se evitan los conflictos con n&uacute;meros de pedido id&eacute;nticos. Cada pedido recibe su propio n&uacute;mero de factura en la cuenta de PayPal.');
define('PAYPAL_BRANDNAME_TITLE','Nombre de la tienda de PayPal');
define('PAYPAL_BRANDNAME_DESC','Introduzca el nombre que se mostrar&aacute; en PayPal.');
// EOF - Tomcraft - 2009-10-03 - Paypal Express Modul

// BOF - Tomcraft - 2009-11-02 - New admin top menu
define('USE_ADMIN_TOP_MENU_TITLE' , 'Navegaci&oacute;n superior de la administraci&oacute;n');
define('USE_ADMIN_TOP_MENU_DESC' , '&iquest;Activar la navegaci&oacute;n superior del administrador? De lo contrario, el men&uacute; se muestra en el borde izquierdo (cl&aacute;sico)');
// EOF - Tomcraft - 2009-11-02 - New admin top menu

// BOF - Tomcraft - 2009-11-02 - Admin language tabs
define('USE_ADMIN_LANG_TABS_TITLE' , 'Fichas de idiomas para las categor&iacute;as/art&iacute;culos');
define('USE_ADMIN_LANG_TABS_DESC' , '&iquest;Activar las pesta&ntilde;as de idiomas en los campos de entrada de las categor&iacute;as/art&iacute;culos?');
// EOF - Tomcraft - 2009-11-02 - Admin language tabs

// BOF - Hendrik - 2010-08-11 - Thumbnails in admin products list
define('USE_ADMIN_THUMBS_IN_LIST_TITLE' , 'Im&aacute;genes de listas de productos');
define('USE_ADMIN_THUMBS_IN_LIST_DESC' , '&iquest;Mostrar una columna adicional con im&aacute;genes de las categor&iacute;as / art&iacute;culos en la lista de productos de la Administraci&oacute;n?');
define('USE_ADMIN_THUMBS_IN_LIST_STYLE_TITLE', 'Listas de productos Im&aacute;genes Estilo CSS');
define('USE_ADMIN_THUMBS_IN_LIST_STYLE_DESC', 'Aqu&iacute; puede introducir simples especificaciones de estilo CSS - por ejemplo, para el ancho m&aacute;ximo: max-width:90px;');
// EOF - Hendrik - 2010-08-11 - Thumbnails in admin products list

// BOF - Tomcraft - 2009-11-05 - Advanced contact form
//define('USE_CONTACT_EMAIL_ADDRESS_TITLE' , 'Kontaktformular - Sendeoption'); // not needed anymore!
//define('USE_CONTACT_EMAIL_ADDRESS_DESC' , 'Kontakt-E-Mail-Adresse des Shops zum Versenden des Kontaktformulars verwenden (wichtig f&uuml;r einige Provider z.B Hosteurope)'); // not needed anymore!
// EOF - Tomcraft - 2009-11-05 - Advanced contact form

// BOF - Dokuman - 2010-02-04 - delete cache files in admin section
define('DELETE_CACHE_SUCCESSFUL', 'Cach&eacute; borrado con &eacute;xito.');
define('DELETE_TEMP_CACHE_SUCCESSFUL', 'Cach&eacute; de plantillas borrada con &eacute;xito.');
define('DELETE_LOGS_SUCCESSFUL', 'Archivos de registro eliminados con &eacute;xito.');
// EOF - Dokuman - 2010-02-04 - delete cache files in admin section

// BOF - DokuMan - 2010-08-13 - set Google RSS Feed in admin section
define('GOOGLE_RSS_FEED_REFID_TITLE' , 'Google RSS Feed - refID');
define('GOOGLE_RSS_FEED_REFID_DESC' , 'Introduzca aqu&iacute; el ID de la campa&ntilde;a. Esto se a&ntilde;adir&aacute; autom&aacute;ticamente a cada enlace del canal RSS de Google.');
// EOF - DokuMan - 2010-08-13 - set Google RSS Feed in admin section

// BOF - web28 - 2010-08-17 -  Bildgroessenberechnung kleinerer Bilder
define('PRODUCT_IMAGE_NO_ENLARGE_UNDER_DEFAULT_TITLE','Escalado de im&aacute;genes con baja resoluci&oacute;n');
define('PRODUCT_IMAGE_NO_ENLARGE_UNDER_DEFAULT_DESC','Aktivieren Sie die Einstellung <strong>Nein</strong> um zu verhindern, dass Produktbilder geringerer Auflosung auf die eingestellten default Werte fur Breite und Hohe skaliert werden. Si activa el ajuste <strong>S&iacute;</strong>, las im&aacute;genes de menor resoluci&oacute;n tambi&eacute;n se escalar&aacute;n a los valores de tama&ntilde;o de imagen por defecto establecidos. En este caso, sin embargo, estas im&aacute;genes pueden mostrarse muy borrosas y pixeladas.');
// EOF - web28 - 2010-08-17 -  Bildgroessenberechnung kleinerer Bilder

//BOF - hendrik - 2011-05-14 - independent invoice number and date
//define('IBN_BILLNR_TITLE', 'N&auml;chste Rechnungsnummer');
//define('IBN_BILLNR_DESC', 'Beim Zuweisung einer Bestellung wird diese Nummer als n&auml;chstes vergeben.');
//define('IBN_BILLNR_FORMAT_TITLE', 'Rechnungsnummer Format');       //ibillnr
//define('IBN_BILLNR_FORMAT_DESC', 'Aufbauschema Rechn.Nr.: {n}=laufende Nummer, {d}=Tag, {m}=Monat, {y}=Jahr, <br>z.B. "100{n}-{d}-{m}-{y}" ergibt "10099-28-02-2007"');
//EOF - hendrik - 2011-05-14 - independent invoice number and date

//BOC - h-h-h - 2011-12-23 - Button "Buy Now" optional - default off
define('SHOW_BUTTON_BUY_NOW_TITLE', 'Mostrar el bot&oacute;n "cesta de la compra" en las listas de productos');
define('SHOW_BUTTON_BUY_NOW_DESC', '<span class="col-red"><strong>ATENCI&oacute;N:</strong></span> Esto puede dar lugar a advertencias si no se muestran al cliente todas las caracter&iacute;sticas esenciales del art&iacute;culo en las p&aacute;ginas de la lista de productos.');
//EOC - h-h-h - 2011-12-23 - Button "Buy Now" optional - default off

//split page results
define('MAX_DISPLAY_ORDER_RESULTS_TITLE', 'N&uacute;mero de pedidos por p&aacute;gina');
define('MAX_DISPLAY_ORDER_RESULTS_DESC', 'N&uacute;mero m&aacute;ximo de pedidos a mostrar en el resumen por p&aacute;gina.');
define('MAX_DISPLAY_LIST_PRODUCTS_TITLE', 'N&uacute;mero de art&iacute;culos por p&aacute;gina');
define('MAX_DISPLAY_LIST_PRODUCTS_DESC', 'N&uacute;mero m&aacute;ximo de art&iacute;culos a mostrar en el resumen por p&aacute;gina.');
define('MAX_DISPLAY_LIST_CUSTOMERS_TITLE', 'N&uacute;mero de clientes por p&aacute;gina');
define('MAX_DISPLAY_LIST_CUSTOMERS_DESC', 'N&uacute;mero m&aacute;ximo de clientes que se mostrar&aacute;n en el resumen por p&aacute;gina.');
define('MAX_ROW_LISTS_ATTR_OPTIONS_TITLE', 'Caracter&iacute;sticas del art&iacute;culo: N&uacute;mero de caracter&iacute;sticas del art&iacute;culo por p&aacute;gina');
define('MAX_ROW_LISTS_ATTR_OPTIONS_DESC', 'N&uacute;mero m&aacute;ximo de caracter&iacute;sticas de los art&iacute;culos (opciones) que se mostrar&aacute;n por p&aacute;gina.');
define('MAX_ROW_LISTS_ATTR_VALUES_TITLE', 'Caracter&iacute;sticas del art&iacute;culo: N&uacute;mero de valores de opci&oacute;n por p&aacute;gina');
define('MAX_ROW_LISTS_ATTR_VALUES_DESC', 'N&uacute;mero m&aacute;ximo de valores de opci&oacute;n que se mostrar&aacute;n por p&aacute;gina.');
define('MAX_DISPLAY_STATS_RESULTS_TITLE', 'N&uacute;mero de resultados estad&iacute;sticos por p&aacute;gina');
define('MAX_DISPLAY_STATS_RESULTS_DESC', 'N&uacute;mero m&aacute;ximo de resultados a mostrar en las estad&iacute;sticas por p&aacute;gina.');
define('MAX_DISPLAY_COUPON_RESULTS_TITLE', 'N&uacute;mero de resultados de cupones por p&aacute;gina');
define('MAX_DISPLAY_COUPON_RESULTS_DESC', 'N&uacute;mero m&aacute;ximo de resultados que se mostrar&aacute;n para los cupones por p&aacute;gina.');

//whos online
define('WHOS_ONLINE_TIME_LAST_CLICK_TITLE', 'Wer ist Online - Anzeigezeitraum in Sek.');
define('WHOS_ONLINE_TIME_LAST_CLICK_DESC', 'Muestra el tiempo de los usuarios conectados en la tabla "Qui&eacute;n est&aacute; conectado", despu&eacute;s de este tiempo las entradas se borran. (valor m&iacute;nimo: 900)');

//sessions
define('SESSION_LIFE_ADMIN_TITLE', 'Duraci&oacute;n de la sesi&oacute;n Admin');
define('SESSION_LIFE_ADMIN_DESC', 'Tiempo en segundos despu&eacute;s del cual el tiempo de la sesi&oacute;n para los administradores expira (se cierra la sesi&oacute;n) - por defecto 7200<br />El valor establecido aqu&iacute; s&oacute;lo se aplica si el manejo de la sesi&oacute;n est&aacute; basado en db (configure.php => define(\'STORE_SESSIONS\', \'mysql\');)<br />Valor m&aacute;ximo: 14400');
define('SESSION_LIFE_CUSTOMERS_TITLE', 'Clientes de la sesi&oacute;n de vida');
define('SESSION_LIFE_CUSTOMERS_DESC', 'Tiempo en segundos despu&eacute;s del cual el tiempo de sesi&oacute;n para los clientes expira (se cierra la sesi&oacute;n) - por defecto 1440<br />El valor establecido aqu&iacute; s&oacute;lo se aplica si el manejo de la sesi&oacute;n est&aacute; basado en db (configure.php => define(\'STORE_SESSIONS\', \'mysql\');)<br />Valor m&aacute;ximo: 14400');

//checkout confirmation options
define('CHECKOUT_USE_PRODUCTS_SHORT_DESCRIPTION_TITLE','P&aacute;gina de confirmaci&oacute;n del pedido: Breve descripci&oacute;n');
define('CHECKOUT_USE_PRODUCTS_SHORT_DESCRIPTION_DESC','&iquest;Debe aparecer la descripci&oacute;n breve del art&iacute;culo en la p&aacute;gina de confirmaci&oacute;n del pedido? Nota: La descripci&oacute;n corta se muestra si NO hay descripci&oacute;n del pedido del art&iacute;culo. Con False, la descripci&oacute;n corta generalmente no se muestra.');
define('CHECKOUT_USE_PRODUCTS_DESCRIPTION_FALLBACK_LENGTH_TITLE','Longitud de la descripci&oacute;n, si la descripci&oacute;n corta est&aacute; vac&iacute;a');
define('CHECKOUT_USE_PRODUCTS_DESCRIPTION_FALLBACK_LENGTH_DESC','&iquest;A partir de qu&eacute; longitud debe cortarse la descripci&oacute;n si no se dispone de una descripci&oacute;n corta?');
define('CHECKOUT_SHOW_PRODUCTS_IMAGES_TITLE','P&aacute;gina de confirmaci&oacute;n del pedido: Im&aacute;genes del producto');
define('CHECKOUT_SHOW_PRODUCTS_IMAGES_DESC','&iquest;Deben aparecer las im&aacute;genes de los art&iacute;culos en la p&aacute;gina de confirmaci&oacute;n del pedido?');
define('CHECKOUT_SHOW_PRODUCTS_MODEL_TITLE','P&aacute;gina de confirmaci&oacute;n del pedido: Nº de art&iacute;culo');
define('CHECKOUT_SHOW_PRODUCTS_MODEL_DESC','&iquest;Debe aparecer el n&uacute;mero de art&iacute;culo en la p&aacute;gina de confirmaci&oacute;n del pedido?');

// email billing attachments
define('EMAIL_BILLING_ATTACHMENTS_TITLE', 'Administraci&oacute;n - Ficheros para a&ntilde;adir a los pedidos ');
define('EMAIL_BILLING_ATTACHMENTS_DESC', 'Ejemplo para adjuntos - en caso de que los ficheros se encuentren en el directorio del shop <b>/media/content/</b>. Si quieres enviar mas ficheros hay que separarlos por coma: media/content/fichero1.pdf,media/content/condiciones.pdf');

// email images
define('SHOW_IMAGES_IN_EMAIL_TITLE', 'A&ntilde;adir im&aacute;genes en los pedidos');
define('SHOW_IMAGES_IN_EMAIL_DESC', 'A&ntilde;adir im&aacute;genes de los art&iacute;culos en las confirmaciones de pedidos (aumenta el riesgo que el el e-mail sea clasificado como SPAM)');
define('SHOW_IMAGES_IN_EMAIL_DIR_TITLE', 'Directorio de e-mail im&aacute;genes ');
define('SHOW_IMAGES_IN_EMAIL_DIR_DESC', 'Elecci&oacute;n de la carpeta en la cual se encuentras las im&aacute;genes para el env&iacute;o en E-Mails');
define('SHOW_IMAGES_IN_EMAIL_STYLE_TITLE', 'E-Mail-CSS-Style de im&aacute;genes ');
define('SHOW_IMAGES_IN_EMAIL_STYLE_DESC', 'Aqu&iacute; puede introducir simples CSS-Style - p. ej. para la anchura m&aacute;xima de las im&aacute;genes: max-width:90px;');

//popup windows configuration
define('POPUP_SHIPPING_LINK_PARAMETERS_TITLE', 'Par&aacute;metros de la URL de la ventana emergente de gastos de env&iacute;o');
define('POPUP_SHIPPING_LINK_PARAMETERS_DESC', 'Aqu&iacute; se pueden introducir los par&aacute;metros de la URL - Est&aacute;ndar: &KeepThis=true&TB_iframe=true&height=400&width=600');
define('POPUP_SHIPPING_LINK_CLASS_TITLE', 'Clase CSS de la ventana emergente de gastos de env&iacute;o');
define('POPUP_SHIPPING_LINK_CLASS_DESC', 'Aqu&iacute; se pueden introducir las clases CSS - por defecto: thickbox');
define('POPUP_CONTENT_LINK_PARAMETERS_TITLE', 'P&aacute;ginas de contenido Ventana emergente Par&aacute;metros URL');
define('POPUP_CONTENT_LINK_PARAMETERS_DESC', 'Aqu&iacute; puede introducir los par&aacute;metros de la URL - por defecto: &KeepThis=true&TB_iframe=true&height=400&width=600');
define('POPUP_CONTENT_LINK_CLASS_TITLE', 'Clase CSS de la ventana emergente de las p&aacute;ginas de contenido');
define('POPUP_CONTENT_LINK_CLASS_DESC', 'Aqu&iacute; se pueden introducir las clases CSS - por defecto: thickbox');
define('POPUP_PRODUCT_LINK_PARAMETERS_TITLE', 'Par&aacute;metros de la URL de la ventana emergente de las p&aacute;ginas de productos');
define('POPUP_PRODUCT_LINK_PARAMETERS_DESC', 'Aqu&iacute; puede introducir los par&aacute;metros de la URL - por defecto: &KeepThis=true&TB_iframe=true&height=450&width=750');
define('POPUP_PRODUCT_LINK_CLASS_TITLE', 'Clase CSS de la ventana emergente de las p&aacute;ginas de productos');
define('POPUP_PRODUCT_LINK_CLASS_DESC', 'Aqu&iacute; se pueden introducir las clases CSS - por defecto: thickbox');
define('POPUP_COUPON_HELP_LINK_PARAMETERS_TITLE', 'Par&aacute;metros de la URL de la ventana emergente de ayuda del cup&oacute;n');
define('POPUP_COUPON_HELP_LINK_PARAMETERS_DESC', 'Aqu&iacute; puede introducir los par&aacute;metros de la URL - por defecto: &KeepThis=true&TB_iframe=true&height=400&width=600');
define('POPUP_COUPON_HELP_LINK_CLASS_TITLE', 'Clase CSS de la ventana emergente de ayuda del cup&oacute;n');
define('POPUP_COUPON_HELP_LINK_CLASS_DESC', 'Aqu&iacute; se pueden introducir las clases CSS - por defecto: thickbox');

define('POPUP_PRODUCT_PRINT_SIZE_TITLE', 'Producto Vista de impresi&oacute;n Tama&ntilde;o de la ventana');
define('POPUP_PRODUCT_PRINT_SIZE_DESC', 'Aqu&iacute; puede definir el tama&ntilde;o de la ventana emergente - por defecto: width=640, height=600');
define('POPUP_PRINT_ORDER_SIZE_TITLE', 'Ordenar Vista de impresi&oacute;n Tama&ntilde;o de la ventana');
define('POPUP_PRINT_ORDER_SIZE_DESC', 'Aqu&iacute; puede definir el tama&ntilde;o de la ventana emergente - por defecto: width=640, height=600');

define('TRACKING_COUNT_ADMIN_ACTIVE_TITLE' , 'Contar las impresiones de la p&aacute;gina del operador de la tienda');
define('TRACKING_COUNT_ADMIN_ACTIVE_DESC' , 'Si esta opci&oacute;n est&aacute; activada, tambi&eacute;n se contabilizan todos los accesos del administrador, lo que (debido a los accesos m&aacute;s frecuentes a la tienda) puede distorsionar las estad&iacute;sticas de visitas.');

define('TRACKING_GOOGLEANALYTICS_ACTIVE_TITLE' , 'Activar el seguimiento de Google Analytics');
define('TRACKING_GOOGLEANALYTICS_ACTIVE_DESC' , 'Si esta opci&oacute;n est&aacute; activada, todas las visitas a la p&aacute;gina se transmiten a Google Analytics y pueden ser analizadas posteriormente. Esto requiere la creaci&oacute;n previa de una cuenta con <a href="http://www.google.com/analytics/" target="_blank"><b>Google Analytics</b></a>.');
define('TRACKING_GOOGLEANALYTICS_ID_TITLE' , 'N&uacute;mero de cuenta de Google Analytics');
define('TRACKING_GOOGLEANALYTICS_ID_DESC' , 'Introduzca el n&uacute;mero de cuenta de Google Analytics en el formato "UA-XXXXXX-X" que recibi&oacute; despu&eacute;s de crear una cuenta con &eacute;xito.');

define('TRACKING_PIWIK_ACTIVE_TITLE' , 'Activar el seguimiento de PIWIK Web Analytics');
define('TRACKING_PIWIK_ACTIVE_DESC' , 'Para utilizar PIWIK, primero debe descargarlo e instalarlo en su espacio web, v&eacute;ase tambi&eacute;n <a href="http://http://de.piwik.org/" target="_blank"><b>PIWIK Web-Analytics</b></a>. A diferencia de Google Analytics, los datos se almacenan localmente, es decir, usted como operador de la tienda tiene la soberan&iacute;a de los datos.');
define('TRACKING_PIWIK_LOCAL_PATH_TITLE' , 'Directorio de instalaci&oacute;n de PIWIK (sin "http://")');
define('TRACKING_PIWIK_LOCAL_PATH_DESC' , 'Introduzca aqu&iacute; el directorio despu&eacute;s de que PIWIK se haya instalado con &eacute;xito. Introduzca el nombre de dominio completo sin "http://" como ruta, por ejemplo, "www.domain.de/piwik".');
define('TRACKING_PIWIK_ID_TITLE' , 'PIWIK Page ID');
define('TRACKING_PIWIK_ID_DESC' , 'En la interfaz de administraci&oacute;n de PIWIK, se asigna un ID para cada dominio creado (normalmente "1").');
define('TRACKING_PIWIK_GOAL_TITLE' , 'N&uacute;mero de campa&ntilde;a PIWIK (opcional)');
define('TRACKING_PIWIK_GOAL_DESC' , 'Introduzca aqu&iacute; un n&uacute;mero de campa&ntilde;a si desea hacer un seguimiento de los objetivos predefinidos. Para m&aacute;s detalles, v&eacute;ase <a href="http://piwik.org/docs/tracking-goals-web-analytics/" target="_blank"><b>PIWIK: Seguimiento de las conversiones de objetivos</b></a>');

define('CONFIRM_SAVE_ENTRY_TITLE', 'Consulta de confirmaci&oacute;n al guardar art&iacute;culos/categor&iacute;as');
define('CONFIRM_SAVE_ENTRY_DESC', '&iquest;Debe hacerse una consulta de confirmaci&oacute;n al guardar art&iacute;culos/categor&iacute;as? Por defecto: true (s&iacute;)');

define('WHOS_ONLINE_IP_WHOIS_SERVICE_TITLE', 'Qui&eacute;n est&aacute; en l&iacute;nea - Whois Lookup URL');
define('WHOS_ONLINE_IP_WHOIS_SERVICE_DESC', 'http://www.utrace.de/?query= o http://whois.domaintools.com/');

define('STOCK_CHECKOUT_UPDATE_PRODUCTS_STATUS_TITLE', 'Finalizaci&oacute;n de pedidos - Desactivaci&oacute;n de art&iacute;culos agotados');
define('STOCK_CHECKOUT_UPDATE_PRODUCTS_STATUS_DESC', '&iquest;Debe desactivarse autom&aacute;ticamente un art&iacute;culo agotado (cantidad de existencias 0) al final del pedido? El art&iacute;culo ya no es visible en la tienda!<br />Para los art&iacute;culos que volver&aacute;n a estar disponibles en breve, la opci&oacute;n debe establecerse en "false".');

define('SEND_EMAILS_DOUBLE_OPT_IN_TITLE','Confirmar alta en Boletin de noticias');
define('SEND_EMAILS_DOUBLE_OPT_IN_DESC','Si esta activado, el cliente recibe un E-Mail para que confirme a trav&eacute;s de un enlace el alta del bolet&iacute;n de noticias. Para ello debe estar activado el env&iacute;o de E-Mails.');

define('USE_ADMIN_FIXED_TOP_TITLE', '&iquest;Administrar el encabezado de la p&aacute;gina?');
define('USE_ADMIN_FIXED_TOP_DESC', '&iquest;Debe estar siempre visible la cabecera de la p&aacute;gina al desplazarse?');
define('USE_ADMIN_FIXED_SEARCH_TITLE', '&iquest;Mostrar la barra de b&uacute;squeda del administrador?');
define('USE_ADMIN_FIXED_SEARCH_DESC', '&iquest;Debe estar siempre visible la barra de b&uacute;squeda?');

define('SMTP_SECURE_TITLE' , 'SMTP SEGURO');
define('SMTP_SECURE_DESC' , '&iquest;El servidor SMTP requiere una conexi&oacute;n segura? Puede consultar los ajustes necesarios con su proveedor.');

define('DISPLAY_ERROR_REPORTING_TITLE', 'Informe de errores');
define('DISPLAY_ERROR_REPORTING_DESC', '&iquest;Debe mostrarse el informe de errores como una lista formateada en el pie de p&aacute;gina?');

define('DISPLAY_BREADCRUMB_OPTION_TITLE', 'Navegaci&oacute;n con migas de pan');
define('DISPLAY_BREADCRUMB_OPTION_DESC', '<strong>nombre:</strong> El nombre completo del art&iacute;culo se muestra en la navegaci&oacute;n de migas de pan.<br /><strong>modelo:</strong> El n&uacute;mero del art&iacute;culo se muestra en la navegaci&oacute;n de migas de pan si est&aacute; disponible. Ansonsten Fallback auf auf Artikelname.');

define('EMAIL_WORD_WRAP_TITLE', 'Ajuste de texto para los e-mails');
define('EMAIL_WORD_WRAP_DESC', 'Introducir aqu&iacute; la cantidad de caracteres por linea en el texto del e-mail (solo n&uacute;meros enteros).<br /><strong>Atenci&oacute;n:</strong> Un n&uacute;mero posterior al 76 puede tener como consecuencia, que los correos electr&oacute;nicos sean declarados como SPAM! Para m&aacute;s informaci&oacute;n pulse <a href="http://wiki.apache.org/spamassassin/Rules/MIME_QP_LONG_LINE" target="_blank">aqu&iacute;</a>.');

define('USE_PAGINATION_LIST_TITLE', 'Lista de paginaci&oacute;n');
define('USE_PAGINATION_LIST_DESC', 'Utilice una lista HTML (etiqueta ul / li) para la paginaci&oacute;n / cambio de p&aacute;gina.<br /><b>Atenci&oacute;n:</b> ¡Esto s&oacute;lo funciona con una plantilla compatible con la versi&oacute;n 2.00 de la tienda!');

define('ORDER_STATUSES_FOR_SALES_STATISTICS_TITLE', 'Filtro de estad&iacute;sticas de rotaci&oacute;n');
define('ORDER_STATUSES_FOR_SALES_STATISTICS_DESC', 'Aqu&iacute; puede seleccionar los estados del pedido que se tendr&aacute;n en cuenta para las estad&iacute;sticas de facturaci&oacute;n en la p&aacute;gina de inicio del administrador y en el desplegable de estados cuando se utilice el estado "Filtro de estad&iacute;sticas de facturaci&oacute;n". <br />(Para mostrar solo la facturaci&oacute;n real, seleccione el estado utilizado cuando el pedido se haya completado.)<br /><b>Nota:</b> Deben seleccionarse al menos dos estados para que el "Filtro de estad&iacute;sticas de facturaci&oacute;n" se muestre en el desplegable de estad&iacute;sticas de facturaci&oacute;n. De lo contrario, el estado deseado puede seleccionarse directamente a trav&eacute;s del desplegable.');

define('SAVE_IP_LOG_TITLE', 'Guardar la direcci&oacute;n IP');
define('SAVE_IP_LOG_DESC', '&iquest;Debe almacenarse la direcci&oacute;n IP en la base de datos?<br/>Si se selecciona la opci&oacute;n xxx, se anonimizan los &uacute;ltimos d&iacute;gitos de la IP.');

define('META_MAX_KEYWORD_LENGTH_TITLE', 'Longitud m&aacute;xima de las meta palabras clave');
define('META_MAX_KEYWORD_LENGTH_DESC', 'Longitud m&aacute;xima de las meta palabras clave generadas autom&aacute;ticamente (descripci&oacute;n del art&iacute;culo)');
define('META_DESCRIPTION_LENGTH_TITLE', 'Longitud de la Meta-Descripci&oacute;n');
define('META_DESCRIPTION_LENGTH_DESC', 'Longitud m&aacute;xima de la descripci&oacute;n (en letras)');
define('META_STOP_WORDS_TITLE', 'Palabras clave');
define('META_STOP_WORDS_DESC', 'Por favor, introduzca aqu&iacute; las palabras clave en forma de lista separada por comas que no se van a utilizar.');
define('META_GO_WORDS_TITLE', 'Ir a las palabras');
define('META_GO_WORDS_DESC', 'Por favor, introduzca aqu&iacute; las palabras clave en forma de lista separada por comas que est&aacute;n expl&iacute;citamente permitidas.');

//BOC added text constants for group id 20, noRiddle
define('CSV_CATEGORY_DEFAULT_TITLE','Categor&iacute;a para la importaci&oacute;n');
define('CSV_CATEGORY_DEFAULT_DESC','Todos los art&iacute;culos que no tengan una categor&iacute;a asignada en el archivo de importaci&oacute;n CSV y que a&uacute;n no existan en la tienda se importar&aacute;n a esta categor&iacute;a.<b>Importante:</b> Si no desea importar art&iacute;culos sin categor&iacute;a en el archivo de importaci&oacute;n CSV, seleccione la categor&iacute;a "Top", ya que no se importar&aacute; ning&uacute;n art&iacute;culo a esta categor&iacute;a.');
define('CSV_TEXTSIGN_TITLE','Identificador de texto');
define('CSV_TEXTSIGN_DESC','Por ejemplo, " &nbsp; | &nbsp;<span style="color:#c00;">Cuando se utiliza el punto y coma como separador, el identificador de texto debe ser "!</span>.');
define('CSV_SEPERATOR_TITLE','Separador');
define('CSV_SEPERATOR_DESC','Por ejemplo ; &nbsp; | &nbsp;<span style="color:#c00;">si el campo de entrada se deja vac&iacute;o, se utiliza por defecto el \t (= Tab) durante la exportaci&oacute;n/importaci&oacute;n!</span>');
define('COMPRESS_EXPORT_TITLE','Compresi&oacute;n');
define('COMPRESS_EXPORT_DESC','Compresi&oacute;n de los datos exportados');
define('CSV_CAT_DEPTH_TITLE','Categor&iacute;a de profundidad');
define('CSV_CAT_DEPTH_DESC','&iquest;Qu&eacute; profundidad debe tener el &aacute;rbol de categor&iacute;as? (por ejemplo, configuraci&oacute;n por defecto 4: categor&iacute;a principal y tres subcategor&iacute;as) Esta configuraci&oacute;n es importante para importar correctamente las categor&iacute;as creadas en el CSV. Lo mismo se aplica a la exportaci&oacute;n.<br /><span style="color:#c00;">¡M&aacute;s de 4 puede llevar a p&eacute;rdidas de rendimiento y puede que no sea agradable para el cliente!');
//EOC added text constants for group id 20, noRiddle

define('MIN_GROUP_PRICE_STAFFEL_TITLE', 'N&uacute;mero adicional Precios de la escala');
define('MIN_GROUP_PRICE_STAFFEL_DESC', 'N&uacute;mero adicional de precios graduados que se muestran');

define('MODULE_CAPTCHA_ACTIVE_TITLE', 'Activar el captcha');
define('MODULE_CAPTCHA_ACTIVE_DESC', '&iquest;Para qu&eacute; secciones de la tienda se debe activar el captcha?');
define('MODULE_CAPTCHA_LOGGED_IN_TITLE', 'Clientes registrados');
define('MODULE_CAPTCHA_LOGGED_IN_DESC', 'Mostrar Captcha para clientes registrados');

define('MODULE_CAPTCHA_LOGIN_NUM_TITLE', 'Intentos de inicio de sesi&oacute;n');
define('MODULE_CAPTCHA_LOGIN_NUM_DESC', 'N&uacute;mero de intentos fallidos de inicio de sesi&oacute;n antes de que se muestre el captcha.');
define('CAPTCHA_MOD_CLASS_TITLE', 'M&oacute;dulo Captcha');
define('CAPTCHA_MOD_CLASS_DESC', 'Elija el m&oacute;dulo Captcha a utilizar. Aseg&uacute;rese de que el m&oacute;dulo tambi&eacute;n est&aacute; instalado.');
define('CFG_TXT_MODIFIED_CAPTCHA', 'Est&aacute;ndar');
define('CFG_TXT_PHP_CAPTCHA', 'PhpCaptcha');

define('MODULE_CAPTCHA_USE_COLOR_TITLE', 'Colores aleatorios');
define('MODULE_CAPTCHA_USE_COLOR_DESC', 'Visualizaci&oacute;n de l&iacute;neas y caracteres en colores aleatorios');
define('MODULE_CAPTCHA_USE_SHADOW_TITLE', 'Sombra');
define('MODULE_CAPTCHA_USE_SHADOW_DESC', 'Sombras adicionales de los caracteres del captcha.');
define('MODULE_CAPTCHA_CODE_LENGTH_TITLE', 'Longitud del captcha');
define('MODULE_CAPTCHA_CODE_LENGTH_DESC', 'N&uacute;mero de caracteres del captcha<br/>(por defecto: 6)');
define('MODULE_CAPTCHA_NUM_LINES_TITLE', 'N&uacute;mero de l&iacute;neas');
define('MODULE_CAPTCHA_NUM_LINES_DESC', 'N&uacute;mero de l&iacute;neas del captcha<br/>(por defecto: 70)');
define('MODULE_CAPTCHA_MIN_FONT_TITLE', 'Tama&ntilde;o m&iacute;nimo de letra');
define('MODULE_CAPTCHA_MIN_FONT_DESC', 'Especificaci&oacute;n en p&iacuteginas para los caracteres m&aacute;s peque&ntilde;os del captcha.<br/>(por defecto: 24)');
define('MODULE_CAPTCHA_MAX_FONT_TITLE', 'Tama&ntilde;o m&aacute;ximo de letra');
define('MODULE_CAPTCHA_MAX_FONT_DESC', 'Especificaci&oacute;n en p&iacutea;xel para los caracteres m&aacute;s grandes del captcha.<br/>(por defecto: 28)');
define('MODULE_CAPTCHA_BACKGROUND_RGB_TITLE', 'Color de fondo');
define('MODULE_CAPTCHA_BACKGROUND_RGB_DESC', 'Especifica el color de fondo en RGB.<br/>(por defecto: 192,192,192)');
define('MODULE_CAPTCHA_LINES_RGB_TITLE', 'Color de la l&iacute;nea');
define('MODULE_CAPTCHA_LINES_RGB_DESC', 'Especifica el color de la l&iacute;nea en RGB.<br/>(por defecto: 220.148.002)');
define('MODULE_CAPTCHA_CHARS_RGB_TITLE', 'Dibujar el color');
define('MODULE_CAPTCHA_CHARS_RGB_DESC', 'Indicaci&oacute;n del color del car&aacute;cter en RGB.<br/>(por defecto: 112,112,112)');
define('MODULE_CAPTCHA_WIDTH_TITLE', 'Amplia');
define('MODULE_CAPTCHA_WIDTH_DESC', 'Especificaci&oacute;n en p&iacutexel para el ancho del captcha.');
define('MODULE_CAPTCHA_HEIGHT_TITLE', 'H&ouml;he');
define('MODULE_CAPTCHA_HEIGHT_DESC', 'Especificaci&oacute;n en p&iacuteginas para la altura del captcha.');

define('SHIPPING_STATUS_INFOS_TITLE', 'Plazo de entrega');
define('SHIPPING_STATUS_INFOS_DESC', 'Seleccione el contenido para mostrar la informaci&oacute;n del tiempo de entrega.');

define('USE_SHORT_DATE_FORMAT_TITLE', 'Mostrar la fecha en formato corto');
define('USE_SHORT_DATE_FORMAT_DESC', 'Mostrar siempre la fecha en formato corto: 01.03.2014 en lugar de <b>S&aacute;bado, 01 de marzo de 2014</b><br />¡Recomendado para errores de visualizaci&oacute;n con el formato de fecha largo, como problemas de idioma o di&eacute;resis!');

define('MAX_DISPLAY_PRODUCTS_CATEGORY_TITLE', 'M&aacute;ximo de art&iacute;culos');
define('MAX_DISPLAY_PRODUCTS_CATEGORY_DESC', 'N&uacute;mero m&aacute;ximo de art&iacute;culos de la misma categor&iacute;a');
define('MAX_DISPLAY_ADVANCED_SEARCH_RESULTS_TITLE', 'N&uacute;mero de resultados de b&uacute;squeda');
define('MAX_DISPLAY_ADVANCED_SEARCH_RESULTS_DESC', 'N&uacute;mero de art&iacute;culos en los resultados de la b&uacute;squeda');
define('MAX_DISPLAY_PRODUCTS_HISTORY_TITLE' , 'N&uacute;mero de historial');
define('MAX_DISPLAY_PRODUCTS_HISTORY_DESC' , 'Mostrar el n&uacute;mero m&aacute;ximo de art&iacute;culos visitados por &uacute;ltima vez en la cuenta');

define('PRODUCT_IMAGE_SHOW_NO_IMAGE_TITLE', 'Art&iacute;culo noimage.gif');
define('PRODUCT_IMAGE_SHOW_NO_IMAGE_DESC', 'Visualizaci&oacute;n del noimage.gif si no se ha especificado ninguna imagen del art&iacute;culo');
define('CATEGORIES_IMAGE_SHOW_NO_IMAGE_TITLE', 'Categor&iacute;a noimage.gif');
define('CATEGORIES_IMAGE_SHOW_NO_IMAGE_DESC', 'Visualizaci&oacute;n del noimage.gif si no se ha especificado ninguna imagen de categor&iacute;a');
define('MANUFACTURER_IMAGE_SHOW_NO_IMAGE_TITLE', 'Fabricante noimage.gif');
define('MANUFACTURER_IMAGE_SHOW_NO_IMAGE_DESC', 'Visualizaci&oacute;n del archivo noimage.gif si no se ha especificado ninguna imagen del fabricante');

define('MODULE_SMALL_BUSINESS_TITLE', 'Peque&ntilde;a empresa');
define('MODULE_SMALL_BUSINESS_DESC', '&iquest;Debe convertirse la tienda en una peque&ntilde;a empresa de acuerdo con el &sect; 19 UStG?<br /><b>Importante:</b> En "M&oacute;dulos" -> "Resumen", el m&oacute;dulo "ot_tax" debe ser <a href="'.xtc_href_link(FILENAME_MODULES, 'set=ordertotal&module=ot_tax').'"><b>aqu&iacute;</b></a> desactivarse o desinstalarse. Adem&aacute;s, en el individuo <a href="'.xtc_href_link(FILENAME_CUSTOMERS_STATUS, '').'"><b>Grupos de clientes</b></a> "Precios con IVA incluido" puede ajustarse a "No.');

define('COMPRESS_HTML_OUTPUT_TITLE', 'Compresi&oacute;n HTML');
define('COMPRESS_HTML_OUTPUT_DESC', '&iquest;La salida HTML de la plantilla debe entregarse comprimida?');
define('COMPRESS_STYLESHEET_TITLE', 'Compresi&oacute;n CSS');
define('COMPRESS_STYLESHEET_DESC', '&iquest;Debe entregarse una hoja de estilo comprimida?<br/><b>Atenci&oacute;n:</b> Esto s&oacute;lo funciona con una plantilla compatible con la versi&oacute;n 2.00 de la tienda.');

define('COMPRESS_JAVASCRIPT_TITLE', 'Compresi&oacute;n de JavaScript');
define('COMPRESS_JAVASCRIPT_DESC', '&iquest;Comprimir JavaScript?<br/><b>Atenci&oacute;n:</b> Esto s&oacute;lo funciona con una plantilla compatible con la versi&oacute;n 2.0.1.0 de la tienda.');

define('USE_ATTRIBUTES_IFRAME_TITLE', 'Editar atributos en iframe');
define('USE_ATTRIBUTES_IFRAME_DESC', 'Abre la gesti&oacute;n de atributos en la vista de categor&iacute;a/art&iacute;culo en un iframe');

define('ADMIN_HEADER_X_FRAME_OPTIONS_TITLE', 'Administrador Clickjacking Schutz');
define('ADMIN_HEADER_X_FRAME_OPTIONS_DESC', 'Proteja el &aacute;rea de administraci&oacute;n con la cabecera "X-Frame-Options: SAMEORIGIN"<br>Navegadores compatibles: FF 3.6.9+ Chrome 4.1.249.1042+ IE 8+ Safari 4.0+ Opera 10.50+ ');

define('SEND_MAIL_ACCOUNT_CREATED_TITLE', 'Confirmar registro al cliente');
define('SEND_MAIL_ACCOUNT_CREATED_DESC', 'Si esta activado, el cliente recibir&aacute; un E-Mail con un aviso de que ha sido creada la cuenta.');

define('STATUS_EMAIL_SENT_COPY_TO_ADMIN_TITLE', 'Confirmar cambio de estado del pedido');
define('STATUS_EMAIL_SENT_COPY_TO_ADMIN_DESC', 'Si esta activado, el cliente recibir&aacute; un E-Mail con el nuevo estado del pedido.');

define('ORDER_EMAIL_SEND_COPY_TO_ADMIN_TITLE', 'Confirmaci&oacute;n del pedido por correo electr&oacute;nico al administrador');
define('ORDER_EMAIL_SEND_COPY_TO_ADMIN_DESC', '&iquest;Enviar una copia del correo electr&oacute;nico de confirmaci&oacute;n del pedido al administrador?');

define('STOCK_CHECK_SPECIALS_TITLE', 'Comprobaci&oacute;n de las ofertas especiales');
define('STOCK_CHECK_SPECIALS_DESC', 'Compruebe si todav&iacute;a hay suficientes ofertas especiales disponibles para entregar el pedido.<br/><br/><b>ATENCI&Oacute;N:</b> Si no hay suficientes ofertas especiales disponibles, el pedido s&oacute;lo podr&aacute; completarse tras una reducci&oacute;n de la cantidad.');

define('DOWNLOAD_SHOW_LANG_DROPDOWN_TITLE', 'Despliegue del pa&iacute;s en la cesta de la compra');
define('DOWNLOAD_SHOW_LANG_DROPDOWN_DESC', '&iquest;Debe aparecer el desplegable del pa&iacute;s en la cesta de la compra cuando s&oacute;lo se compran art&iacute;culos de descarga?');

define('GUEST_ACCOUNT_EDIT_TITLE', 'Editar las cuentas de los invitados');
define('GUEST_ACCOUNT_EDIT_DESC', '&iquest;Pueden los invitados ver y editar los datos de su cuenta?');

define('EMAIL_SIGNATURE_ID_TITLE', 'Empresa de E-mail');
define('EMAIL_SIGNATURE_ID_DESC', 'Elija aqu&iacute; en contenido que quiere que se use como firma en los correos electr&oacute;nicos procedente de la tienda on-line.');

define('TEXT_PAYPAL_NOT_INSTALLED', '<div class="important_info">PayPal a&uacute;n no se ha instalado. Esto puede se haga <a href="'.xtc_href_link(FILENAME_MODULES, 'set=payment&module=paypal').'"> aqu&iacute;</a>.</div>');

define('POLICY_MIN_LOWER_CHARS_TITLE', 'Contrase&ntilde;a en min&uacute;sculas');
define('POLICY_MIN_LOWER_CHARS_DESC', '&iquest;Cu&aacute;ntas letras min&uacute;sculas debe tener la contrase&ntilde;a como m&iacute;nimo?');
define('POLICY_MIN_UPPER_CHARS_TITLE', 'Contrase&ntilde;a May&uacute;sculas');
define('POLICY_MIN_UPPER_CHARS_DESC', '&iquest;Cu&aacute;ntas may&uacute;sculas debe tener la contrase&ntilde;a como m&iacute;nimo?');
define('POLICY_MIN_NUMERIC_CHARS_TITLE', 'N&uacute;meros de contrase&ntilde;a');
define('POLICY_MIN_NUMERIC_CHARS_DESC', '&iquest;Cu&aacute;ntos n&uacute;meros debe tener la contrase&ntilde;a como m&iacute;nimo?');
define('POLICY_MIN_SPECIAL_CHARS_TITLE', 'Caracteres especiales de la contrase&ntilde;a');
define('POLICY_MIN_SPECIAL_CHARS_DESC', '&iquest;Cu&aacute;ntos caracteres especiales debe tener la contrase&ntilde;a como m&iacute;nimo?');

define('SHOW_SHIPPING_EXCL_TITLE', 'Gastos de env&iacute;o m&aacute;s.');
define('SHOW_SHIPPING_EXCL_DESC', 'Visualizaci&oacute;n de los gastos de env&iacute;o m&aacute;s o menos');

define('ACCOUNT_TELEPHONE_OPTIONAL_TITLE', 'N&uacute;mero de tel&eacute;fono opcional');
define('ACCOUNT_TELEPHONE_OPTIONAL_DESC', '&iquest;Debe solicitarse el n&uacute;mero de tel&eacute;fono s&oacute;lo como opci&oacute;n?');

define('TRACKING_GOOGLEANALYTICS_UNIVERSAL_TITLE' , 'Google Universal Analytics');
define('TRACKING_GOOGLEANALYTICS_UNIVERSAL_DESC' , '&iquest;Se debe utilizar el c&oacute;digo de Google Universal Analytics?<br/><br/><b>Atenci&oacute;n:</b> En cuanto cambie al nuevo c&oacute;digo de Google Universal Analytics en su cuenta de Google Analytics, ya no se podr&aacute; utilizar el Google Analytics anterior.');
define('TRACKING_GOOGLEANALYTICS_DOMAIN_TITLE' , 'URL de la tienda de Google Universal Analytics');
define('TRACKING_GOOGLEANALYTICS_DOMAIN_DESC' , 'Introduzca aqu&iacute; la URL est&aacute;ndar de la tienda (ejemplo.com o www.example.com). S&oacute;lo funciona para Google Universal Analytics.');
define('TRACKING_GOOGLE_LINKID_TITLE' , 'LinkID de Google Universal Analytics');
define('TRACKING_GOOGLE_LINKID_DESC' , 'Puede ver informaci&oacute;n separada para m&uacute;ltiples enlaces en una p&aacute;gina que tienen el mismo destino. Por ejemplo, si hay dos enlaces en la misma p&aacute;gina que van ambos a la p&aacute;gina de Contacto, ver&aacute; informaci&oacute;n de clics separada para cada enlace. S&oacute;lo funciona para Google Universal Analytics.');
define('TRACKING_GOOGLE_DISPLAY_TITLE' , 'Funci&oacute;n de visualizaci&oacute;n de Google Universal Analytics');
define('TRACKING_GOOGLE_DISPLAY_DESC' , 'Las secciones demogr&aacute;ficas y de intereses incluyen una visi&oacute;n general y nuevos informes sobre los resultados por edad, sexo y categor&iacute;as de intereses. S&oacute;lo funciona para Google Universal Analytics.');
define('TRACKING_GOOGLE_ECOMMERCE_TITLE' , 'Google Universal Analytics E-Commerce');
define('TRACKING_GOOGLE_ECOMMERCE_DESC' , 'Utilice el seguimiento del comercio electr&oacute;nico para saber qu&eacute; compran los visitantes a trav&eacute;s de su sitio web o aplicaci&oacute;n. Tambi&eacute;n recibir&aacute; la siguiente informaci&oacute;n:<br><br><strong>Productos:</strong> Los productos adquiridos y las cantidades y el volumen de negocio generado con estos productos<br><strong>Transacciones:</strong> Informaci&oacute;n sobre la facturaci&oacute;n, los impuestos, los gastos de env&iacute;o y las cantidades de cada transacci&oacute;n<br><strong>Tiempo hasta la compra:</strong> N&uacute;mero de d&iacute;as y visitas, a partir de la campa&ntilde;a actual hasta que se complete la transacci&oacute;n. S&oacute;lo funciona para Google Universal Analytics.');
define('TRACKING_GOOGLEANALYTICS_GTAG_TITLE' , 'Google Analytics GTAG');
define('TRACKING_GOOGLEANALYTICS_GTAG_DESC' , '&iquest;Utilizar la etiqueta global del sitio de Google?');

define('NEW_ATTRIBUTES_STYLING_TITLE', 'Estilos de gesti&oacute;n de atributos');
define('NEW_ATTRIBUTES_STYLING_DESC', '&iquest;Activar el estilo de las casillas de verificaci&oacute;n/despliegue en la gesti&oacute;n de atributos? Establecer como no/falso para muchos atributos y problemas de rendimiento.');

define('DB_CACHE_TYPE_TITLE', 'Motor de cach&eacute;');
define('DB_CACHE_TYPE_DESC', 'Elija uno de los motores disponibles para el almacenamiento en cach&eacute;');

define('META_PRODUCTS_KEYWORDS_LENGTH_TITLE', 'Longitud de los t&eacute;rminos adicionales para la b&uacute;squeda');
define('META_PRODUCTS_KEYWORDS_LENGTH_DESC', 'Longitud m&aacute;xima de los t&eacute;rminos adicionales para la b&uacute;squeda (en letras)');
define('META_KEYWORDS_LENGTH_TITLE', 'Meta palabras clave largas');
define('META_KEYWORDS_LENGTH_DESC', 'Longitud m&aacute;xima de las palabras clave (en letras)');
define('META_TITLE_LENGTH_TITLE', 'Longitud Meta-T&iacute;tulo');
define('META_TITLE_LENGTH_DESC', 'Longitud m&aacute;xima del t&iacute;tulo (en letras)');
define('META_CAT_SHOP_TITLE_TITLE', 'Categor&iacute;as de t&iacute;tulos de la tienda');
define('META_CAT_SHOP_TITLE_DESC', '&iquest;A&ntilde;adir el t&iacute;tulo de la tienda a las categor&iacute;as?');
define('META_PROD_SHOP_TITLE_TITLE', 'Comprar productos con t&iacute;tulo');
define('META_PROD_SHOP_TITLE_DESC', '&iquest;C&oacute;mo puedo a&ntilde;adir un t&iacute;tulo de tienda a un producto?');
define('META_CONTENT_SHOP_TITLE_TITLE', 'T&iacute;tulo de la tienda Contenido');
define('META_CONTENT_SHOP_TITLE_DESC', '&iquest;C&oacute;mo a&ntilde;adir un t&iacute;tulo de tienda a los contenidos?');
define('META_SPECIALS_SHOP_TITLE_TITLE', 'Ofertas especiales del t&iacute;tulo de la tienda');
define('META_SPECIALS_SHOP_TITLE_DESC', '&iquest;Mostrar los t&iacute;tulos de las tiendas para las ofertas especiales?');
define('META_NEWS_SHOP_TITLE_TITLE', 'T&iacute;tulo de la tienda Nuevos productos');
define('META_NEWS_SHOP_TITLE_DESC', '&iquest;Mostrar el t&iacute;tulo de la tienda para los nuevos productos?');
define('META_SEARCH_SHOP_TITLE_TITLE', 'B&uacute;squeda de t&iacute;tulos en la tienda');
define('META_SEARCH_SHOP_TITLE_DESC', '&iquest;Mostrar el t&iacute;tulo de la tienda en los resultados de la b&uacute;squeda?');
define('META_OTHER_SHOP_TITLE_TITLE', 'T&iacute;tulo de la tienda &uuml;otras p&aacute;ginas');
define('META_OTHER_SHOP_TITLE_DESC', '&iquest;Mostrar el t&iacute;tulo de la tienda en todas las dem&aacute;s p&aacute;ginas?');
define('META_GOOGLE_VERIFICATION_KEY_TITLE', 'Clave de verificaci&oacute;n de Google');
define('META_GOOGLE_VERIFICATION_KEY_DESC', '<meta name="verifiy-v1">');
define('META_BING_VERIFICATION_KEY_TITLE', 'Clave de verificaci&oacute;n de Bing');
define('META_BING_VERIFICATION_KEY_DESC', '<meta name="msvalidate.01">');

define('GOOGLE_CONVERSION_TITLE','Seguimiento de conversiones de Google');
define('GOOGLE_CONVERSION_DESC','Seguimiento de las palabras clave de conversi&oacute;n en los pedidos');
define('GOOGLE_CONVERSION_ID_TITLE','Identificaci&oacute;n de la conversi&oacute;n');
define('GOOGLE_CONVERSION_ID_DESC','Su ID de conversi&oacute;n de Google');

define('TRACKING_FACEBOOK_ACTIVE_TITLE', 'Activar el seguimiento de conversiones de Facebook');
define('TRACKING_FACEBOOK_ACTIVE_DESC', 'Si esta opci&oacute;n est&aacute; activada, todas las compras se transmiten a Facebook y pueden ser evaluadas posteriormente. Para ello es necesario crear previamente una cuenta en  <a href="https://www.facebook.com" target="_blank"><b>Facebook</b></a>.');
define('TRACKING_FACEBOOK_ID_TITLE', 'ID de conversi&oacute;n de Facebook');
define('TRACKING_FACEBOOK_ID_DESC', 'Tu ID de conversi&oacute;n de Facebook');

define('NEW_SELECT_CHECKBOX_TITLE', 'Estilo del &aacute;rea de administraci&oacute;n');
define('NEW_SELECT_CHECKBOX_DESC', 'En el &aacute;rea de administraci&oacute;n, active el estilo de las casillas de verificaci&oacute;n/despliegue.');
define('CSRF_TOKEN_SYSTEM_TITLE', 'Sistema de fichas de administraci&oacute;n');
define('CSRF_TOKEN_SYSTEM_DESC', '&iquest;Debe utilizarse el sistema de fichas en la administraci&oacute;n?<br/><b>Atenci&oacute;n:</b> El sistema de fichas se introdujo para aumentar la seguridad..');

define('DISPLAY_FILTER_INDEX_TITLE', 'Visualizaci&oacute;n de filtros por p&aacute;gina - Art&iacute;culo');
define('DISPLAY_FILTER_INDEX_DESC', 'Introduzca los posibles valores de la selecci&oacute;n, separados por una coma. Para todos los elementos introduzca all.<br/>Ejemplo: 3,12,27,all');
define('DISPLAY_FILTER_SPECIALS_TITLE', 'Visualizaci&oacute;n de filtros por p&aacute;gina - Ofertas especiales');
define('DISPLAY_FILTER_SPECIALS_DESC', 'Introduzca los posibles valores de la selecci&oacute;n, separados por una coma. Para todos los elementos introduzca all.<br/>Ejemplo: 3,12,27,all');
define('DISPLAY_FILTER_PRODUCTS_NEW_TITLE', 'Visualizaci&oacute;n de filtros por p&aacute;gina - Nuevos art&iacute;culos');
define('DISPLAY_FILTER_PRODUCTS_NEW_DESC', 'Por favor, introduzca los posibles valores de la selecci&oacute;n separados por una coma. Para todos los elementos introduzca all.<br/>Ejemplo: 3,12,27,all');
define('DISPLAY_FILTER_ADVANCED_SEARCH_RESULT_TITLE', 'Visualizaci&oacute;n de filtros por p&aacute;gina - Resultados de la b&uacute;squeda');
define('DISPLAY_FILTER_ADVANCED_SEARCH_RESULT_DESC', 'Por favor, introduzca los posibles valores de la selecci&oacute;n separados por una coma. Para todos los elementos introduzca all.<br/>Ejemplo: 4,12,32,all');

define('USE_BROWSER_LANGUAGE_TITLE' , 'Cambiar al idioma del navegador autom&aacute;ticamente');
define('USE_BROWSER_LANGUAGE_DESC' , 'Cambiar autom&aacute;ticamente el idioma al idioma del navegador del cliente.');

define('WYSIWYG_SKIN_TITLE' , 'Skin del editor WYSIWYG');
define('WYSIWYG_SKIN_DESC' , 'Elija el skin del editor WYSIWYG.');

define('CHECK_CHEAPEST_SHIPPING_MODUL_TITLE', 'Pre-seleccione el m&eacute;todo de env&iacute;o m&aacute;s barato');
define('CHECK_CHEAPEST_SHIPPING_MODUL_DESC', '&iquest;Debe preseleccionarse el m&eacute;todo de env&iacute;o m&aacute;s rentable para el cliente en la caja?');

define('DISPLAY_PRIVACY_CHECK_TITLE', 'Mostrar la casilla de privacidad');
define('DISPLAY_PRIVACY_CHECK_DESC', '&iquest;Debe aparecer la casilla de privacidad durante la creaci&oacute;n de la cuenta? (¡Obligatorio para las transacciones B2C!)');

define('SHOW_SELFPICKUP_FREE_TITLE', 'M&oacute;dulo de env&iacute;o "auto recogida" para "libre de gastos de env&iacute;o');
define('SHOW_SELFPICKUP_FREE_DESC', '&iquest;Debe mostrarse el m&oacute;dulo de env&iacute;o "selfpickup" cuando se alcanza el importe establecido en el m&oacute;dulo "gastos de env&iacute;o (ot_shiping)" para el "env&iacute;o gratuito"?');

define('CHECK_FIRST_PAYMENT_MODUL_TITLE', 'Pre-seleccionar la primera opci&oacute;n de pago');
define('CHECK_FIRST_PAYMENT_MODUL_DESC', '&iquest;Debe preseleccionarse la primera opci&oacute;n de pago para el cliente en la caja?');

define('ATTRIBUTES_VALID_CHECK_TITLE', 'Validar atributos');
define('ATTRIBUTES_VALID_CHECK_DESC', 'Comprueba si los art&iacute;culos de la cesta de la compra del cliente tienen atributos que ya no son v&aacute;lidos. <br/>(Esto puede ocurrir si un cliente vuelve a entrar en la tienda despu&eacute;s de un largo periodo de tiempo y quiere comprar un art&iacute;culo que se qued&oacute; en la cesta de la compra de una visita anterior.)<br/><b>Nota:</b> Para las extensiones que posteriormente ampl&iacute;an los atributos, como el campo de texto, esta comprobaci&oacute;n debe desactivarse.');

define('ATTRIBUTE_MODEL_DELIMITER_TITLE', 'Separador de art&iacute;culos/atributos');
define('ATTRIBUTE_MODEL_DELIMITER_DESC', 'Separador entre el n&uacute;mero de art&iacute;culo &amp; atributo n&uacute;mero de art&iacute;culo');

define('STORE_PAGE_PARSE_TIME_THRESHOLD_TITLE' , 'Valor umbral para ahorrar el tiempo de c&aacute;lculo del dise&ntilde;o de la p&aacute;gina');
define('STORE_PAGE_PARSE_TIME_THRESHOLD_DESC' , 'Establece el valor del umbral en segundos a partir del cual se debe escribir una entrada para el tiempo de c&aacute;lculo del dise&ntilde;o de la p&aacute;gina.');

define('SEARCH_IN_FILTER_TITLE', 'Buscar en las propiedades del art&iacute;culo');
define('SEARCH_IN_FILTER_DESC', 'Activar para habilitar la b&uacute;squeda en las propiedades del art&iacute;culo.');
define('SEARCH_AC_STATUS_TITLE','Tarea de autocompletar');
define('SEARCH_AC_STATUS_DESC','Activar para habilitar la b&uacute;squeda autocompletada');
define('SEARCH_AC_MIN_LENGTH_TITLE', 'N&uacute;mero de caracteres de la b&uacute;squeda autocompletada');
define('SEARCH_AC_MIN_LENGTH_DESC', '&iquest;A partir de qu&eacute; n&uacute;mero de caracteres deben aparecer los primeros resultados de la b&uacute;squeda?');
define('SEARCH_AC_CATEGORIES_TITLE', 'Despliegue de categor&iacute;as en el cuadro de b&uacute;squeda');
define('SEARCH_AC_CATEGORIES_DESC', 'Activar para mostrar un desplegable de categor&iacute;as delante del campo de b&uacute;squeda en el cuadro de b&uacute;squeda.');

define('DISPLAY_PRIVACY_ON_CHECKOUT_TITLE', 'Mostrar el aviso de privacidad en la compra');
define('DISPLAY_PRIVACY_ON_CHECKOUT_DESC', 'Si desea que se muestre una casilla de verificaci&oacute;n adicional, debe configurar "Firmar aviso de privacidad" en "S&iacute;".');

define('DISPLAY_REVOCATION_VIRTUAL_ON_CHECKOUT_TITLE', 'Mostrar el derecho de desistimiento Descargas');
define('DISPLAY_REVOCATION_VIRTUAL_ON_CHECKOUT_DESC', '&iquest;Debe aparecer una casilla de verificaci&oacute;n en la caja que indique que el derecho de desistimiento expira?');
define('ORDER_STATUSES_DISPLAY_DEFAULT_TITLE', 'Mostrar pedidos');
define('ORDER_STATUSES_DISPLAY_DEFAULT_DESC', '&iquest;Qu&eacute; estado del pedido debe mostrarse por defecto?');

define('INVOICE_INFOS_TITLE', 'Datos de la factura');
define('INVOICE_INFOS_DESC', 'Seleccione una p&aacute;gina de contenido. El contenido se muestra en la impresi&oacute;n de la factura.');

define('CATEGORIES_SHOW_PRODUCTS_SUBCATS_TITLE', 'Mostrar art&iacute;culos de subcategor&iacute;as');
define('CATEGORIES_SHOW_PRODUCTS_SUBCATS_DESC', '&iquest;Deben aparecer en el listado todos los art&iacute;culos de las subcategor&iacute;as existentes?');

define('SEO_URL_MOD_CLASS_TITLE', 'M&oacute;dulo URL');
define('SEO_URL_MOD_CLASS_DESC', 'Elija un m&oacute;dulo URL.');

define('MODULE_BANNER_MANAGER_STATUS_TITLE', 'Gestor de banners');
define('MODULE_BANNER_MANAGER_STATUS_DESC', '&iquest;Activar Banner Manager?');

define('MODULE_NEWSLETTER_STATUS_TITLE', 'Bolet&iacute;n de noticias');
define('MODULE_NEWSLETTER_STATUS_DESC', '&iquest;Activar el sistema de bolet&iacute;n de noticias?');

define('GOOGLE_CERTIFIED_SHOPS_MERCHANT_ACTIVE_TITLE', 'Activaci&oacute;n de tiendas certificadas por Google');
define('GOOGLE_CERTIFIED_SHOPS_MERCHANT_ACTIVE_DESC', '&iquest;Se debe utilizar el c&oacute;digo de comerciante de las tiendas certificadas de Google?<br/><br/><b>Atenci&oacute;n:</b> Esto s&oacute;lo funciona con una plantilla compatible con la versi&oacute;n 2.0.1.0 o superior de la tienda.');
define('GOOGLE_SHOPPING_ID_TITLE', 'ID de Google Shopping');
define('GOOGLE_SHOPPING_ID_DESC', 'Su ID de Google Shopping');
define('GOOGLE_TRUSTED_ID_TITLE', 'ID de confianza de Google');
define('GOOGLE_TRUSTED_ID_DESC', 'Tu ID de confianza de Google');

define('EMAIL_ARCHIVE_ADDRESS_TITLE', 'Archivero - Correo electr&oacute;nico');
define('EMAIL_ARCHIVE_ADDRESS_DESC', 'Introduce aqu&iacute; un correo electr&oacute;nico (ser&aacute; del tipo BCC) a donde se enviar&aacute; siempre una copia de todos los E-Mails salientes del sistema.');

define('DISPLAY_HEADQUARTER_ON_CHECKOUT_TITLE', 'Firmensitz im Checkout');
define('DISPLAY_HEADQUARTER_ON_CHECKOUT_DESC', 'Soll der Firmensitz im Checkout angezeigt werden?');

define('MODULE_CAPTCHA_LOGIN_NUM_TITLE', 'Intentos de acceso');
define('MODULE_CAPTCHA_LOGIN_NUM_DESC', 'N&uacute;mero de intentos de acceso fallidos antes de que se muestre el captcha.');
define('CAPTCHA_MOD_CLASS_TITLE', 'M&oacute;dulo Captcha');
define('CAPTCHA_MOD_CLASS_DESC', 'Elija el m&oacute;dulo Captcha para utilizarlo. Aseg&uacute;rese de que el m&oacute;dulo tambi&eacute;n est&aacute; instalado.');
define('CFG_TXT_MODIFIED_CAPTCHA', 'Est&aacute;ndar');
define('CFG_TXT_PHP_CAPTCHA', 'PhpCaptcha');

define('TRACKING_GOOGLEANALYTICS_GTAG_TITLE' , 'Google Analytics GTAG');
define('TRACKING_GOOGLEANALYTICS_GTAG_DESC' , '&iquest;Utilizar la etiqueta de sitio global de Google?');
define('GOOGLE_CONVERSION_TITLE','Seguimiento de la conversi&oacute;n de Google');
define('GOOGLE_CONVERSION_DESC','Rastrear las palabras clave de conversi&oacute;n en los pedidos');
define('GOOGLE_CONVERSION_ID_TITLE','Conversi&oacute;n ID');
define('GOOGLE_CONVERSION_ID_DESC','Tu ID de conversi&oacute;n de Google');
define('SEARCH_AC_STATUS_DESC','Activar para b&uacute;squeda autocompleta<br/><b>Attention:</b> &iexcl;Esto s&oacute;lo funciona con una plantilla compatible con la versi&oacute;n 2.0.0.0 de la tienda!');
define('SEARCH_AC_MIN_LENGTH_TITLE', 'Autocompletar el n&uacute;mero de caracteres');
define('SEARCH_AC_MIN_LENGTH_DESC', 'N&uacute;mero de caracteres para mostrar los primeros resultados de la b&uacute;squeda<br/><b>Atenci&oacute;n:</b> Esto s&oacute;lo funciona con una plantilla compatible con la versi&oacute;n 2.0.0.0 de la tienda!');
define('SEARCH_AC_CATEGORIES_TITLE', 'Desplegable de categor&iacute;as en el cuadro de b&uacute;squeda');
define('SEARCH_AC_CATEGORIES_DESC', 'Activar para mostrar un desplegable de categor&iacute;as delante del campo de b&uacute;squeda en el cuadro de b&uacute;squeda.');

define('DISPLAY_PRIVACY_ON_CHECKOUT_TITLE', 'Mostrar el aviso de privacidad en la caja');
define('DISPLAY_PRIVACY_ON_CHECKOUT_DESC', 'Mostrar un aviso de privacidad adicional en la caja?<br/><b>Atenci&oacute;n:</b> Si se muestra una casilla de verificaci&oacute;n adicional, debe establecer "Firmar aviso de privacidad" en "S&iacute;"');
define('MODULE_NEWSLETTER_VOUCHER_AMOUNT_TITLE', 'Cantidad del cup&oacute;n del bolet&iacute;n informativo');
define('MODULE_NEWSLETTER_VOUCHER_AMOUNT_DESC', 'Para el registro del bolet&iacute;n de noticias, ponga la cantidad, ponga 0 para ninguna cantidad.');
define('MODULE_NEWSLETTER_DISCOUNT_COUPON_TITLE', 'C&oacute;digo de cup&oacute;n del bolet&iacute;n de noticias');
define('MODULE_NEWSLETTER_DISCOUNT_COUPON_DESC', 'Para el cup&oacute;n de registro en el bolet&iacute;n informativo coloque el c&oacute;digo del cup&oacute;n que desea utilizar o deje este campo en blanco para desactivar.');

define('ADMIN_START_TAB_SELECTED_TITLE', 'P&aacute;gina de inicio de las pesta&ntilde;as');
define('ADMIN_START_TAB_SELECTED_DESC', '&iquest;Qu&eacute; pesta&ntilde;a de la p&aacute;gina de inicio debe ser seleccionada por defecto?');

define('CACHE_LIFETIME_NOTE', '<b>Atenci&oacute;n:</b> Si el cach&eacute; est&aacute; activado, los cambios s&oacute;lo ser&aacute;n visibles en la tienda despu&eacute;s de que la vida del cach&eacute; expire!');
?>