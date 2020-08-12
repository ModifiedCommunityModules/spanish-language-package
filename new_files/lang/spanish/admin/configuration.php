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
   (c) 2003	 nextcommerce (configuration.php,v 1.16 2003/08/25); www.nextcommerce.org
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
define('MAX_DISPLAY_PRODUCTS_IN_ORDER_HISTORY_BOX_TITLE' , 'Cuadro de resumen de pedidos');
define('MAX_DISPLAY_PRODUCTS_IN_ORDER_HISTORY_BOX_DESC' , 'Cantidad m&aacute;xima a mostrar en el cuadro de productos pedidos.');
define('MAX_DISPLAY_ORDER_HISTORY_TITLE' , 'Resumen de pedidos');
define('MAX_DISPLAY_ORDER_HISTORY_DESC' , 'Cantidad m&aacute;xima de pedidos a mostrar en la secci&oacute;n del cliente.');
define('MAX_PRODUCTS_QTY_TITLE', 'Cantidad m&aacute;xima de productos');
define('MAX_PRODUCTS_QTY_DESC', 'Cantidad m&aacute;xima permitida de un art&iacute;culo en la cesta de compras');
define('MAX_DISPLAY_NEW_PRODUCTS_DAYS_TITLE' , 'Cantidad de d&iacute;as para productos nuevos');
define('MAX_DISPLAY_NEW_PRODUCTS_DAYS_DESC' , 'Cantidad m&aacute;ximas por d&iacute;as, para mostrar art&iacute;culos nuevos');

define('PRODUCT_IMAGE_THUMBNAIL_WIDTH_TITLE' , 'Anchura de im&aacute;genes miniaturas');
define('PRODUCT_IMAGE_THUMBNAIL_WIDTH_DESC' , 'Anchura m&aacute;xima en p&iacute;xel de las im&aacute;genes miniaturas de los art&iacute;culos (Por defecto: 160). Si se usan valores superiores hay que ajustar "productPreviewImage" en la stylesheet.css del tema correspondiente.');
define('PRODUCT_IMAGE_THUMBNAIL_HEIGHT_TITLE' , 'Altura de im&aacute;genes miniaturas');
define('PRODUCT_IMAGE_THUMBNAIL_HEIGHT_DESC' , 'Altura m&aacute;xima en p&iacute;xel de las im&aacute;genes miniaturas de los art&iacute;culos (Por defecto: 160)');

define('PRODUCT_IMAGE_INFO_WIDTH_TITLE' , 'Anchura de info-im&aacute;genes');
define('PRODUCT_IMAGE_INFO_WIDTH_DESC' , 'Anchura m&aacute;xima en p&iacute;xel de las im&aacute;genes que se muestran en la p&aacute;gina de descripci&oacute;n del art&iacute;culo (Por defecto: 230).');
define('PRODUCT_IMAGE_INFO_HEIGHT_TITLE' , 'Altura de info-im&aacute;genes');
define('PRODUCT_IMAGE_INFO_HEIGHT_DESC' , 'Altura m&aacute;xima en p&iacute;xel de las im&aacute;genes que se muestran en la p&aacute;gina de descripci&oacute;n del art&iacute;culo (Por defecto: 230).');

define('PRODUCT_IMAGE_POPUP_WIDTH_TITLE' , 'Anchura de im&aacute;genes popup');
define('PRODUCT_IMAGE_POPUP_WIDTH_DESC' , 'Anchura m&aacute;xima en p&iacute;xel de las im&aacute;genes que se muestran los popup del art&iacute;culo (Por defecto: 800)');
define('PRODUCT_IMAGE_POPUP_HEIGHT_TITLE' , 'Altura de im&aacute;genes popup');
define('PRODUCT_IMAGE_POPUP_HEIGHT_DESC' , 'Altura m&aacute;xima en p&iacute;xel de las im&aacute;genes que se muestran los popup del art&iacute;culo (Por defecto: 800)');

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
define('SHIPPING_MAX_WEIGHT_DESC' , 'Versandpartner (Post/UPS etc.) haben ein maximales Paketgewicht. Geben Sie einen Wert daf&uuml;r ein.');
define('SHIPPING_BOX_WEIGHT_TITLE' , 'Paketleergewicht');
define('SHIPPING_BOX_WEIGHT_DESC' , 'Wie hoch ist das Gewicht eines durchschnittlichen kleinen bis mittleren Leerpaketes?');
define('SHIPPING_BOX_PADDING_TITLE' , 'Bei gr&ouml;sseren Leerpaketen - Gewichtszuwachs in %');
define('SHIPPING_BOX_PADDING_DESC' , 'F&uuml;r etwa 10% geben Sie 10 ein');
define('SHOW_SHIPPING_TITLE' , 'Anzeige Versandkosten');
define('SHOW_SHIPPING_DESC' , 'Verlinkte Anzeige von "zzgl. Versandkosten"');
define('SHIPPING_INFOS_TITLE' , 'Versandkosten');
define('SHIPPING_INFOS_DESC' , 'W&auml;hle den Content zur Anzeige der Versandkosten');
define('SHIPPING_DEFAULT_TAX_CLASS_METHOD_TITLE' , 'Berechnungsmethode der Default-Steuerklasse');
define('SHIPPING_DEFAULT_TAX_CLASS_METHOD_DESC' , 'keine: keine Versandkostensteuer ausweisen<br />auto proportional: Versandkostensteuer anteilig zur Bestellung ausweisen<br />auto max: Steuersatz der gr&ouml;&szlig;ten Umsatzgruppe als Versandkostensteuer ausweisen');

define('PRODUCT_LIST_FILTER_TITLE' , 'Anzeige der Sortierungsfilter in Produktlisten?');
define('PRODUCT_LIST_FILTER_DESC' , 'Anzeige der Sortierungsfilter f&uuml;r Warengruppen/Hersteller etc. Filter (false=inaktiv; true=aktiv)');

define('STOCK_CHECK_TITLE' , '&Uuml;berpr&uuml;fen des Warenbestandes');
define('STOCK_CHECK_DESC' , 'Pr&uuml;fen ob noch genug Ware zum Ausliefern von Bestellungen verf&uuml;gbar ist.');

define('ATTRIBUTE_STOCK_CHECK_TITLE' , '&Uuml;berpr&uuml;fen des Artikelattribut Bestandes');
define('ATTRIBUTE_STOCK_CHECK_DESC' , '&Uuml;berpr&uuml;fen des Bestandes an Ware mit bestimmten Artikelattributen');
define('STOCK_LIMITED_TITLE' , 'Warenmenge abziehen');
define('STOCK_LIMITED_DESC' , 'Warenmenge im Warenbestand abziehen, wenn die Ware bestellt wurde');
define('STOCK_ALLOW_CHECKOUT_TITLE' , 'Einkaufen nicht vorr&auml;tiger Ware erlauben');
define('STOCK_ALLOW_CHECKOUT_DESC' , 'M&ouml;chten Sie auch dann erlauben zu bestellen, wenn bestimmte Ware laut Warenbestand nicht verf&uuml;gbar ist?');
define('STOCK_MARK_PRODUCT_OUT_OF_STOCK_TITLE' , 'Kennzeichnung vergriffener Artikel');
define('STOCK_MARK_PRODUCT_OUT_OF_STOCK_DESC' , 'Dem Kunden kenntlich machen, welche Artikel nicht mehr verf&uuml;gbar sind.');
define('STOCK_REORDER_LEVEL_TITLE' , 'Meldung an den Admin dass ein Artikel nachbestellt werden muss');
define('STOCK_REORDER_LEVEL_DESC' , 'Ab welcher St&uuml;ckzahl soll diese Meldung erscheinen? (GEPLANTE FUNKTION)');
define('STORE_PAGE_PARSE_TIME_TITLE' , 'Speichern der Berechnungszeit des Shop-Seitenaufbaus');
define('STORE_PAGE_PARSE_TIME_DESC' , 'Speicher der Zeit die ben&ouml;tigt wird, um Skripte bis zum Output der Seite zu berechnen');
define('STORE_PARSE_DATE_TIME_FORMAT_TITLE' , 'Datumsformat in der Log-Datei');
define('STORE_PARSE_DATE_TIME_FORMAT_DESC' , 'Das Datumsformat f&uuml;r Logging (Standard: %d/%m/%Y %H:%M:%S)');
define('STORE_DB_SLOW_QUERY_TITLE' , 'Slow Query Log');
define('STORE_DB_SLOW_QUERY_DESC' , 'Sollen nur SQL Queries gespeichert werden die eine l&auml;ngere Zeit ben&ouml;tigen.<br/><strong>Achtung: Es muss das Speichern der Datenbank Abfragen aktiviert sein!</strong>.<br/><strong>Achtung: Datei kann bei l&auml;ngerer Laufzeit sehr gro&szlig; werden!</strong>.<br/><br/>Die Logdatei wird im Ordner /log im Hauptverzeichnis gespeichert.');
define('STORE_DB_SLOW_QUERY_TIME_TITLE' , 'Slow Query Log - Zeit');
define('STORE_DB_SLOW_QUERY_TIME_DESC' , 'Bitte die Zeit eintragen, ab welcher die SQL Queries in das Logfile geschrieben werden.');

define('DISPLAY_PAGE_PARSE_TIME_TITLE' , 'Berechnungszeiten der Seiten anzeigen');
define('DISPLAY_PAGE_PARSE_TIME_DESC' , 'Wenn das Speichern der Berechnungszeiten f&uuml;r Seiten eingeschaltet ist, k&ouml;nnen diese im Footer angezeigt werden.<br /><strong>deaktiviert</strong>: Deaktiviert die Anzeige komplett<br /><strong>admin</strong>: Nur der Admin sieht die Berechnungszeiten<br /><strong>all</strong>: Jeder sieht die Berechnungszeiten');
define('STORE_DB_TRANSACTIONS_TITLE' , 'Speichern der Datenbank Abfragen');
define('STORE_DB_TRANSACTIONS_DESC' , 'Speichern der einzelnen Datenbank Abfragen im Logfile f&uuml;r Berechnungszeiten<br/><strong>Achtung: Datei kann bei l&auml;ngerer Laufzeit sehr gro&szlig; werden!</strong>.<br/><br/>Die Logdatei wird im Ordner /log im Hauptverzeichnis gespeichert.');

define('USE_CACHE_TITLE' , 'Cache benutzen');
define('USE_CACHE_DESC' , 'Die Cache Features verwenden');

define('DB_CACHE_TITLE','DB Cache');
define('DB_CACHE_DESC','Datenbank-Abfragen k&ouml;nnen vom Shop gecached werden, um die Datenbank-Last zu verringern und die Geschwindigkeit zu erh&ouml;hen');

define('DB_CACHE_EXPIRE_TITLE','DB Cache Lebenszeit');
define('DB_CACHE_EXPIRE_DESC','Zeit in Sekunden, bevor Cache Datein mit Daten aus der Datenbank automatisch &Uuml;berschrieben werden.');

define('DIR_FS_CACHE_TITLE' , 'Cache Ordner');
define('DIR_FS_CACHE_DESC' , 'Der Ordner, wo die gecachten Files gespeichert werden sollen');

define('ACCOUNT_OPTIONS_TITLE','Art der Kontoerstellung');
define('ACCOUNT_OPTIONS_DESC','Wie m&ouml;chten Sie die Anmeldeprozedur in Ihrem Shop gestalten?<br />Sie haben die Wahl zwischen regul&auml;ren Kundenkonten und "Einmalbestellungen" ohne Erstellung eines Kundenkontos (es wird ein Konto erstellt, aber dies ist f&uuml;r den Kunden nicht ersichtlich)');

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
define('SMTP_AUTO_TLS_TITLE' , 'SMTP-Automatic TLS connection');
define('SMTP_AUTO_TLS_DESC' , 'Connection automatically with STARTTLS if SMTP-SECURE is deactivated? <br> In case of transmission problems deactivate the automatic TLS connection!');
define('SMTP_DEBUG_TITLE' , 'SMTP-Debug Log-Level');
define('SMTP_DEBUG_DESC' , '<b>0</b>: no output; <b>1</b>: commands; <b>2</b>: data and commands; <b>3</b>: as 2 plus connection status; <b>4</b>: as 3 plus low-level data output<br>In case of sending problems set to 2, a log is created in the log directory.');


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
define('MODULE_ORDER_MAIL_STEP_SUBJECT_TITLE','Billing - Order Confirmation Mail Subject');
define('MODULE_ORDER_MAIL_STEP_SUBJECT_DESC','Please enter a subject for order confirmation mails. (For example <b>Your order {$nr} from {$date}</b>)<br />You can use: {$nr},{$date},{$firstname},{$lastname}');


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

define('DISPLAY_CONDITIONS_ON_CHECKOUT_TITLE' , 'Unterzeichnen der AGB');
define('DISPLAY_CONDITIONS_ON_CHECKOUT_DESC' , 'Anzeigen und Unterzeichnen der AGB beim Bestellvorgang');

define('SIGN_CONDITIONS_ON_CHECKOUT_TITLE' , 'Sign Conditions on Checkout');
define('SIGN_CONDITIONS_ON_CHECKOUT_DESC' , 'Request approval of terms and conditions and on checkout.<br/><b>Attention:</b> "Display Conditions on Checkout" must be enabled.');


define('META_MIN_KEYWORD_LENGTH_TITLE' , 'Minimum L&auml;nge Meta-Keywords');
define('META_MIN_KEYWORD_LENGTH_DESC' , 'Minimum L&auml;nge der automatisch erzeugten Meta-Keywords (Artikelbeschreibung)');
define('META_KEYWORDS_NUMBER_TITLE' , 'Anzahl der Meta-Keywords');
define('META_KEYWORDS_NUMBER_DESC' , 'Anzahl der Meta-Keywords');
define('META_AUTHOR_TITLE' , 'author');
define('META_AUTHOR_DESC' , '<meta name="author">');
define('META_PUBLISHER_TITLE' , 'publisher');
define('META_PUBLISHER_DESC' , '<meta name="publisher">');
define('META_COMPANY_TITLE' , 'company');
define('META_COMPANY_DESC' , '<meta name="company">');
define('META_TOPIC_TITLE' , 'page-topic');
define('META_TOPIC_DESC' , '<meta name="page-topic">');
define('META_REPLY_TO_TITLE' , 'reply-to');
define('META_REPLY_TO_DESC' , '<meta name="reply-to">');
define('META_REVISIT_AFTER_TITLE' , 'revisit-after');
define('META_REVISIT_AFTER_DESC' , '<meta name="revisit-after">');
define('META_ROBOTS_TITLE' , 'robots');
define('META_ROBOTS_DESC' , '<meta name="robots">');
define('META_DESCRIPTION_TITLE' , 'Description');
define('META_DESCRIPTION_DESC' , '<meta name="description">');
define('META_KEYWORDS_TITLE' , 'Keywords');
define('META_KEYWORDS_DESC' , '<meta name="keywords">');

define('MODULE_PAYMENT_INSTALLED_TITLE' , 'Installierte Zahlungsmodule');
define('MODULE_PAYMENT_INSTALLED_DESC' , 'Liste der Zahlungsmodul-Dateinamen (getrennt durch einen Strichpunkt (;)). Diese wird automatisch aktualisiert, daher ist es nicht notwendig diese zu editieren. (Beispiel: cc.php;cod.php;paypal.php)');
define('MODULE_ORDER_TOTAL_INSTALLED_TITLE' , 'Installierte Order Total-Module');
define('MODULE_ORDER_TOTAL_INSTALLED_DESC' , 'Liste der Order-Total-Modul-Dateinamen (getrennt durch einen Strichpunkt (;)). Diese wird automatisch aktualisiert, daher ist es nicht notwendig diese zu editieren. (Beispiel: ot_subtotal.php;ot_tax.php;ot_shipping.php;ot_total.php)');
define('MODULE_SHIPPING_INSTALLED_TITLE' , 'Installierte Versand Module');
define('MODULE_SHIPPING_INSTALLED_DESC' , 'Liste der Versandmodul-Dateinamen (getrennt durch einen Strichpunkt (;)). Diese wird automatisch aktualisiert, daher ist es nicht notwendig diese zu editieren. (Beispiel: ups.php;flat.php;item.php)');

define('CACHE_LIFETIME_TITLE','Cache Lebenszeit');
define('CACHE_LIFETIME_DESC','Zeit in Sekunden, bevor Cache Datein automatisch &uuml;berschrieben werden.');
define('CACHE_CHECK_TITLE','Pr&uuml;fe ob Cache modifiziert');
define('CACHE_CHECK_DESC','Wenn "true", dann werden If-Modified-Since headers bei ge-cache-tem Content ber&uuml;cksichtigt, und passende HTTP headers werden ausgegeben. Somit werden regelm&auml;ssig aufgerufene Seiten nicht jedesmal neu an den Client versandt.');

define('PRODUCT_REVIEWS_VIEW_TITLE','Rezensionen in Artikeldetails');
define('PRODUCT_REVIEWS_VIEW_DESC','Anzahl der angezeigten Rezensionen in der Artikeldetailansicht');

define('DELETE_GUEST_ACCOUNT_TITLE','L&ouml;schen von Gast-Konten');
define('DELETE_GUEST_ACCOUNT_DESC','Sollen Gast-Konten nach erfolgter Bestellung gel&ouml;scht werden? (Bestelldaten bleiben erhalten)');

define('USE_WYSIWYG_TITLE','WYSIWYG-Editor aktivieren');
define('USE_WYSIWYG_DESC','WYSIWYG-Editor f&uuml;r CMS und Artikel aktivieren?');

define('PRICE_IS_BRUTTO_TITLE','Brutto Admin');
define('PRICE_IS_BRUTTO_DESC','Erm&ouml;glicht die Eingabe der Bruttopreise im Admin');

define('PRICE_PRECISION_TITLE','Brutto/Netto Dezimalstellen');
define('PRICE_PRECISION_DESC','Umrechnungsgenauigkeit (Hat keinen Einfluss auf die Anzeige im Shop, dort werden immer 2 Nachkommastellen angezeigt.)');

define('CHECK_CLIENT_AGENT_TITLE','Spider Sessions vermeiden?');
define('CHECK_CLIENT_AGENT_DESC','Bekannte Suchmaschinen Spider ohne Session auf die Seite lassen.');
define('SHOW_IP_LOG_TITLE','IP-Log im Checkout?');
define('SHOW_IP_LOG_DESC','Text "Ihre IP wird aus Sicherheitsgr&uuml;nden gespeichert", beim Checkout anzeigen?');

define('ACTIVATE_GIFT_SYSTEM_TITLE','Gutscheinsystem aktivieren?');
define('ACTIVATE_GIFT_SYSTEM_DESC','Gutscheinsystem aktivieren?<br/><br/><b>Hinweis: </b>Es m&uuml;ssen noch die Module ot_coupon <a href="'.xtc_href_link(FILENAME_MODULES, 'set=ordertotal&module=ot_coupon').'"><b>hier</b></a> und ot_gv <a href="'.xtc_href_link(FILENAME_MODULES, 'set=ordertotal&module=ot_gv').'"><b>hier</b></a> aktiviert werden.');

define('SECURITY_CODE_LENGTH_TITLE', 'Length of Gift Voucher Code');
define('SECURITY_CODE_LENGTH_DESC', 'Enter here the length of the Gift Voucher Code (max. 16 characters)');

define('NEW_SIGNUP_GIFT_VOUCHER_AMOUNT_TITLE', 'Welcome Gift Voucher Amount');
define('NEW_SIGNUP_GIFT_VOUCHER_AMOUNT_DESC', 'Welcome Gift Voucher Amount: If you do not wish to send a Gift Voucher in your create account E-Mail, put 0 for no amount, else place the amount here, i.e. 10.00 or 50.00, no currency signs');
define('NEW_SIGNUP_DISCOUNT_COUPON_TITLE', 'Welcome Discount Coupon Code');
define('NEW_SIGNUP_DISCOUNT_COUPON_DESC', 'Welcome Discount Coupon Code: if you do not want to send a Discount Coupon in your create account E-Mail, leave this field blank, else place the coupon code here you wish to use.<br /><b>Attention:</b> The coupon code must be created in the <a href="'.xtc_href_link(FILENAME_COUPON_ADMIN).'"><b>Coupon Admin</b></a> before.');


define('ACTIVATE_SHIPPING_STATUS_TITLE','Versandstatusanzeige aktivieren?');
define('ACTIVATE_SHIPPING_STATUS_DESC','Versandstatusanzeige aktivieren? (Verschiedene Versandzeiten k&ouml;nnen f&uuml;r einzelne Artikel festgelegt werden. Nach Aktivierung erscheint ein neuer Punkt <b>Lieferstatus</b> bei der Artikeleingabe)');

define('IMAGE_QUALITY_TITLE','Bildqualit&auml;t');
define('IMAGE_QUALITY_DESC','Bildqualit&auml;t (0= h&ouml;chste Kompression, 100=beste Qualit&auml;t)');

define('GROUP_CHECK_TITLE','Kundengruppencheck');
define('GROUP_CHECK_DESC','Nur bestimmten Kundengruppen Zugang zu einzelnen Kategorien, Produkten, Contentelementen erlauben? (Nach Aktivierung erscheinen Eingabem&ouml;glichkeiten bei Artikeln, Kategorien und im Contentmanager)');

define('ACTIVATE_REVERSE_CROSS_SELLING_TITLE', 'Reverse Cross-Selling');
define('ACTIVATE_REVERSE_CROSS_SELLING_DESC', 'Activate reverse Cross-selling?');
define('ACTIVATE_CROSS_SELLING_TITLE', 'Cross-Selling');
define('ACTIVATE_CROSS_SELLING_DESC', 'Activate Cross-selling?');

define('ACTIVATE_NAVIGATOR_TITLE','Artikelnavigator aktivieren?');
define('ACTIVATE_NAVIGATOR_DESC','Artikelnavigator in der Artikeldetailansicht aktivieren/deaktivieren (aus Performancegr&uuml;nden bei hoher Artikelanzahl)');

define('QUICKLINK_ACTIVATED_TITLE','Multilink/Kopierfunktion aktivieren');
define('QUICKLINK_ACTIVATED_DESC','Die Multilink/Kopierfunktion erleichtert das Kopieren/Verlinken eines Artikels in mehrere Kategorien, durch die M&ouml;glichkeit einzelne Kategorien per Checkbox zu selektieren');

define('ACTIVATE_REVERSE_CROSS_SELLING_TITLE','Reverse Cross-Marketing');
define('ACTIVATE_REVERSE_CROSS_SELLING_DESC','Reverse Cross-Marketing Funktion aktivieren?');

define('DOWNLOAD_UNALLOWED_PAYMENT_TITLE', 'Unerlaubte Download-Zahlungsmodule');
define('DOWNLOAD_UNALLOWED_PAYMENT_DESC', '<strong>NICHT</strong> Erlaubte Zahlungsweisen f&uuml;r Downloadprodukte durch Komma getrennt. Z.B. {banktransfer,cod,invoice,moneyorder}');
define('DOWNLOAD_MIN_ORDERS_STATUS_TITLE', 'Bestellstatus');
define('DOWNLOAD_MIN_ORDERS_STATUS_DESC', 'Bestellstatus, mit dem bestellte Downloads freigegeben sind.');

// Vat ID
define('STORE_OWNER_VAT_ID_TITLE' , 'UST ID des Shopbetreibers');
define('STORE_OWNER_VAT_ID_DESC' , 'Die Umsatzsteuer ihres Unternehmens');
define('DEFAULT_CUSTOMERS_VAT_STATUS_ID_TITLE' , 'Kundenstatus f&uuml;r UST ID gepr&uuml;fte Kunden (Ausland)');
define('DEFAULT_CUSTOMERS_VAT_STATUS_ID_DESC' , 'W&auml;hlen Sie den Kundenstatus(Gruppe) f&uuml;r UST ID gepr&uuml;fte Kunden aus!');
define('ACCOUNT_COMPANY_VAT_CHECK_TITLE' , 'Umsatzsteuer ID abfragen');
define('ACCOUNT_COMPANY_VAT_CHECK_DESC' , 'Die Umsatzsteuer ID soll durch Kunden eingegeben werden k&ouml;nnen. Bei false wird das Eingabefeld nicht mehr angezeigt.');
define('ACCOUNT_COMPANY_VAT_LIVE_CHECK_TITLE' , 'Umsatzsteuer ID online auf Plausibilit&auml;t &uuml;berpr&uuml;fen');
define('ACCOUNT_COMPANY_VAT_LIVE_CHECK_DESC' , 'Die Umsatzsteuer ID wird online auf Plausibilit&auml;t &uuml;berpr&uuml;ft. Dazu wird der Webservice des Steuerportals der EU (<a href="http://ec.europa.eu/taxation_customs" style="font-style:italic">http://ec.europa.eu/taxation_customs</a>).<br/>Ben&ouml;tigt PHP5 mit aktivierter "SOAP" Unterst&uuml;tzung!<br/><br/><span class="messageStackSuccess">Die "PHP5 SOAP"-Unterst&uuml;tzung ist derzeit '.(in_array ('soap', get_loaded_extensions()) ? '' : '<span class="messageStackError">NICHT</span>').' aktiviert!</span><br/><br/>');
define('ACCOUNT_COMPANY_VAT_GROUP_TITLE' , 'Kundengruppe nach UST ID Check anpassen?');
define('ACCOUNT_COMPANY_VAT_GROUP_DESC' , 'Durch Einschalten dieser Option wird die Kundengruppe nach einen postiven UST ID Check ge&auml;ndert');
define('ACCOUNT_VAT_BLOCK_ERROR_TITLE' , 'Eintragung falscher oder ungepr&uuml;fter USt-IdNr. Nummern sperren?');
define('ACCOUNT_VAT_BLOCK_ERROR_DESC' , 'Durch Einschalten dieser Option werden nur gepr&uuml;fte und richtige USt-IdNr. eingetragen');
define('DEFAULT_CUSTOMERS_VAT_STATUS_ID_LOCAL_TITLE','Kundenstatus f&uuml;r UST ID Gepr&uuml;fte Kunden (Inland)');
define('DEFAULT_CUSTOMERS_VAT_STATUS_ID_LOCAL_DESC','W&auml;hlen Sie den Kundenstatus(Gruppe) f&uuml;r UST ID gepr&uuml;fte Kunden aus!');

// Google Conversion
define('GOOGLE_CONVERSION_TITLE','Google Conversion-Tracking');
define('GOOGLE_CONVERSION_DESC','Die Aufzeichnung von Conversions-Keywords bei Bestellungen');
define('GOOGLE_CONVERSION_ID_TITLE','Conversion ID');
define('GOOGLE_CONVERSION_ID_DESC','Ihre Google Conversion ID');
define('GOOGLE_LANG_TITLE','Google Sprache');
define('GOOGLE_LANG_DESC','ISO Code der verwendeten Sprache');
define('GOOGLE_CONVERSION_LABEL_TITLE','Google Conversion Label');
define('GOOGLE_CONVERSION_LABEL_DESC','Ihr Google Conversion Label');

// Afterbuy
define('AFTERBUY_ACTIVATED_TITLE','Aktiv');
define('AFTERBUY_ACTIVATED_DESC','Afterbuyschnittstelle aktivieren');
define('AFTERBUY_PARTNERID_TITLE','Partner ID');
define('AFTERBUY_PARTNERID_DESC','Ihre Afterbuy Partner ID');
define('AFTERBUY_PARTNERPASS_TITLE','Partner Passwort');
define('AFTERBUY_PARTNERPASS_DESC','Ihr Partner Passwort f&uuml;r die Afterbuy XML Schnittstelle');
define('AFTERBUY_USERID_TITLE','User ID');
define('AFTERBUY_USERID_DESC','Ihre Afterbuy User ID');
define('AFTERBUY_ORDERSTATUS_TITLE','Bestellstatus');
define('AFTERBUY_ORDERSTATUS_DESC','Bestellstatus nach erfolgreicher &Uuml;betragung der Bestelldaten');
define('AFTERBUY_URL','Eine Beschreibung von Afterbuy finden Sie hier: <a href="http://www.afterbuy.de" target="new">http://www.afterbuy.de</a>');
define('AFTERBUY_DEALERS_TITLE', 'Als H&auml;ndler markieren');
define('AFTERBUY_DEALERS_DESC', 'geben Sie hier die Gruppen IDs der H&auml;ndler ein, die in Afterbuy als H&auml;ndler eingehen sollen.<br />Beispiel: <em>6,5,8</em>. Es d&uuml;rfen keine Leerzeichen enhalten sein!');
define('AFTERBUY_IGNORE_GROUPE_TITLE', 'Kundengruppe ignorieren');
define('AFTERBUY_IGNORE_GROUPE_DESC', 'welche Kundengruppen sollen ignoiert werden?<br />Beispiel: <em>6,5,8</em>. Es d&uuml;rfen keine Leerzeichen enhalten sein!');

// Search-Options
define('SEARCH_MIN_LENGTH_TITLE', 'Search number of characters');
define('SEARCH_MIN_LENGTH_DESC', 'Minimum number of characters for the search');

define('SEARCH_IN_DESC_TITLE','Suche in Produktbeschreibungen');
define('SEARCH_IN_DESC_DESC','Aktivieren um die Suche in den Produktbeschreibungen (Kurz + Lang) zu erm&ouml;glichen');
define('SEARCH_IN_ATTR_TITLE','Suche in Produkt- Attributen');
define('SEARCH_IN_ATTR_DESC','Aktivieren um die Suche in den Produktattributen (z.B. Farbe, L&auml;nge) zu erm&ouml;glichen');
define('SEARCH_IN_MANU_TITLE','Suche in Hersteller');
define('SEARCH_IN_MANU_DESC','Aktivieren um die Suche in den Herstellern zu erm&ouml;glichen');

define('ADMIN_SEARCH_IN_DESC_TITLE','Search in products descriptions');
define('ADMIN_SEARCH_IN_DESC_DESC','Include products descriptions when searching');
define('ADMIN_SEARCH_IN_ATTR_TITLE','Search in products attributes');
define('ADMIN_SEARCH_IN_ATTR_DESC','Include products attributes when searching');


// changes for 3.0.4 SP2
define('REVOCATION_ID_TITLE','Widerrufsrecht');
define('REVOCATION_ID_DESC','W&auml;hle den Content zur Anzeige des Widerrufrechts');
define('DISPLAY_REVOCATION_ON_CHECKOUT_TITLE','Anzeige Widerrufrecht?');
define('DISPLAY_REVOCATION_ON_CHECKOUT_DESC','Widerrufrecht auf checkout_confirmation anzeigen?');

// BOF - Tomcraft - 2009-10-03 - Paypal Express Modul
define('PAYPAL_MODE_TITLE','PayPal-Modus:');
define('PAYPAL_MODE_DESC','Live (Normal) oder Testbetrieb (Sandbox). Je nach Modus muss bei PayPal zun&auml;chst ein API-Zugriff erstellt werden: <br/>Link: <a href="https://www.paypal.com/de/cgi-bin/webscr?cmd=_get-api-signature&generic-flow=true" target="_blank"><strong>API-Zugriff f&uuml;r live-Modus einrichten</strong></a><br/>Link: <a href="https://www.sandbox.paypal.com/de/cgi-bin/webscr?cmd=_get-api-signature&generic-flow=true" target="_blank"><strong>API-Zugriff f&uuml;r sandbox-Modus einrichten</strong></a><br/>Sie haben noch gar kein PayPal Konto? <a href="https://www.paypal.com/de/cgi-bin/webscr?cmd=_registration-run" target="_blank"><strong>Klicken Sie hier, um eins zu erstellen.</strong></a>');
define('PAYPAL_API_USER_TITLE','PayPal-API-Benutzer (Live)');
define('PAYPAL_API_USER_DESC','Tragen Sie hier den Benutzernamen ein.');
define('PAYPAL_API_PWD_TITLE','PayPal-API-Passwort (Live)');
define('PAYPAL_API_PWD_DESC','Tragen Sie hier das Passwort ein.');
define('PAYPAL_API_SIGNATURE_TITLE','PayPal-API-Signatur (Live)');
define('PAYPAL_API_SIGNATURE_DESC','Tragen Sie hier die API Signatur ein.');
define('PAYPAL_API_SANDBOX_USER_TITLE','PayPal-API-Benutzer (Sandbox)');
define('PAYPAL_API_SANDBOX_USER_DESC','Tragen Sie hier den Benutzernamen ein.');
define('PAYPAL_API_SANDBOX_PWD_TITLE','PayPal-API-Passwort (Sandbox)');
define('PAYPAL_API_SANDBOX_PWD_DESC','Tragen Sie hier das Passwort ein.');
define('PAYPAL_API_SANDBOX_SIGNATURE_TITLE','PayPal-API-Signatur (Sandbox)');
define('PAYPAL_API_SANDBOX_SIGNATURE_DESC','Tragen Sie hier die API Signatur ein.');
define('PAYPAL_API_VERSION_TITLE','PayPal-API-Version');
define('PAYPAL_API_VERSION_DESC','Tragen Sie hier die aktuelle PayPal API Version ein - z.B.: 119.0');
define('PAYPAL_API_IMAGE_TITLE','PayPal Shop-Logo');
define('PAYPAL_API_IMAGE_DESC','Tragen Sie hier die Logo-Datei ein, die bei PayPal angezeigt werden soll.<br />Achtung: Wird nur &uuml;bertragen, wenn der Shop mit SSL arbeitet.<br />Das Bild darf max. 750px breit und 90px hoch sein.<br />Aufgerufen wird die Datei aus: '.DIR_WS_CATALOG.'templates/'.CURRENT_TEMPLATE.'/img/');
define('PAYPAL_API_CO_BACK_TITLE','PayPal Hintergrund-Farbe');
define('PAYPAL_API_CO_BACK_DESC','Tragen Sie hier die Hintergrundfarbe ein, die bei PayPal angezeigt werden soll. z.B. FEE8B9');
define('PAYPAL_API_CO_BORD_TITLE','PayPal Rahmen-Farbe');
define('PAYPAL_API_CO_BORD_DESC','Tragen Sie hier die Rahmenfarbe ein, die bei PayPal angezeigt werden soll. z.B. E4C558');
define('PAYPAL_ERROR_DEBUG_TITLE','PayPal Fehler Anzeige');
define('PAYPAL_ERROR_DEBUG_DESC','Soll der original PayPal Fehler angezeigt werden? Normal=false');
define('PAYPAL_ORDER_STATUS_TMP_ID_TITLE','Bestellstatus "abgebrochen"');
define('PAYPAL_ORDER_STATUS_TMP_ID_DESC','W&auml;hlen Sie den Bestellstatus f&uuml;r eine abgebrochene Aktion aus (z.B. PayPal Abbruch)');
define('PAYPAL_ORDER_STATUS_SUCCESS_ID_TITLE','Bestellstatus OK');
define('PAYPAL_ORDER_STATUS_SUCCESS_ID_DESC','W&auml;hlen Sie den Bestellstatus f&uuml;r eine erfolgreiche Transaktion aus (z.B. Offen PP bezahlt)');
define('PAYPAL_ORDER_STATUS_PENDING_ID_TITLE','Bestellstatus "in Bearbeitung"');
define('PAYPAL_ORDER_STATUS_PENDING_ID_DESC','W&auml;hlen Sie den Bestellstatus f&uuml;r eine Transaktion aus, die noch nicht von PayPal bearbeitet wurde (z.B. Offen PP wartend)');
define('PAYPAL_ORDER_STATUS_REJECTED_ID_TITLE','Bestellstatus "abgewiesen"');
define('PAYPAL_ORDER_STATUS_REJECTED_ID_DESC','W&auml;hlen Sie den Bestellstatus f&uuml;r eine abgelehnte Transaktion aus (z.B. PayPal abgelehnt)');
define('PAYPAL_COUNTRY_MODE_TITLE','PayPal-L&auml;ndermodus');
define('PAYPAL_COUNTRY_MODE_DESC','W&auml;hlen Sie hier die Einstellung f&uuml;r den L&auml;ndermodus. Verschiedene Funktionen von PayPal sind nur in UK m&ouml;glich (z.b. DirectPayment )');
define('PAYPAL_EXPRESS_ADDRESS_CHANGE_TITLE','PayPal-Express-Adressdaten');
define('PAYPAL_EXPRESS_ADDRESS_CHANGE_DESC','Erlaubt das &Auml;ndern der von PayPal &uuml;bermittelten Adressdaten');
define('PAYPAL_EXPRESS_ADDRESS_OVERRIDE_TITLE','Lieferadresse &uuml;berschreiben');
define('PAYPAL_EXPRESS_ADDRESS_OVERRIDE_DESC','Erlaubt das &Auml;ndern der von PayPal &uuml;bermittelten Adressdaten (bestehendes Konto)');
define('PAYPAL_INVOICE_TITLE','Shop-Pr&auml;fix f&uuml;r PayPal Rechnungs-Nr.');
define('PAYPAL_INVOICE_DESC','Frei w&auml;hlbare Buchstabenfolge (Pr&auml;fix), die der Bestellnummer vorangestellt und f&uuml;r die Erzeugung der PayPal-Rechnungsnummer genutzt wird.<br />Dadurch k&ouml;nnen mehrere Shops mit nur einem PayPal Konto arbeiten. Konflikte bei gleichen Bestellnummern werden vermieden. Jede Bestellung erh&auml;lt eine eigene Rechnungs-Nummer im PayPal Konto.');
define('PAYPAL_BRANDNAME_TITLE','PayPal Shop-Name');
define('PAYPAL_BRANDNAME_DESC','Tragen Sie hier den den Namen ein, der bei PayPal angezeigt werden soll.');
// EOF - Tomcraft - 2009-10-03 - Paypal Express Modul

// BOF - Tomcraft - 2009-11-02 - New admin top menu
define('USE_ADMIN_TOP_MENU_TITLE' , 'Admin Top Navigation');
define('USE_ADMIN_TOP_MENU_DESC' , 'Admin Top Navigation aktivieren? Ansonsten wird das Men&uuml; am linken Rand angezeigt (klassisch)');
// EOF - Tomcraft - 2009-11-02 - New admin top menu

// BOF - Tomcraft - 2009-11-02 - Admin language tabs
define('USE_ADMIN_LANG_TABS_TITLE' , 'Sprachtabs bei Kategorien/Artikel');
define('USE_ADMIN_LANG_TABS_DESC' , 'Sprachtabs bei den Eingabefeldern f&uuml;r Kategorien/Artikel aktivieren?');
// EOF - Tomcraft - 2009-11-02 - Admin language tabs

// BOF - Hendrik - 2010-08-11 - Thumbnails in admin products list
define('USE_ADMIN_THUMBS_IN_LIST_TITLE' , 'Produktlisten Bilder');
define('USE_ADMIN_THUMBS_IN_LIST_DESC' , 'In der Admin Produktliste eine zus&auml;tzliche Spalte mit Bildern der Kategorien / Artikel anzeigen?');
define('USE_ADMIN_THUMBS_IN_LIST_STYLE_TITLE', 'Produktlisten Bilder CSS-Style');
define('USE_ADMIN_THUMBS_IN_LIST_STYLE_DESC', 'Hier k&ouml;nnen einfache CSS Style Angaben eingegeben werden - z.B. f&uuml;r die maximale Breite: max-width:90px;');
// EOF - Hendrik - 2010-08-11 - Thumbnails in admin products list

// BOF - Tomcraft - 2009-11-05 - Advanced contact form
//define('USE_CONTACT_EMAIL_ADDRESS_TITLE' , 'Kontaktformular - Sendeoption'); // not needed anymore!
//define('USE_CONTACT_EMAIL_ADDRESS_DESC' , 'Kontakt-E-Mail-Adresse des Shops zum Versenden des Kontaktformulars verwenden (wichtig f&uuml;r einige Provider z.B Hosteurope)'); // not needed anymore!
// EOF - Tomcraft - 2009-11-05 - Advanced contact form

// BOF - Dokuman - 2010-02-04 - delete cache files in admin section
define('DELETE_CACHE_SUCCESSFUL', 'Cache erfolgreich geleert.');
define('DELETE_TEMP_CACHE_SUCCESSFUL', 'Templatecache erfolgreich geleert.');
define('DELETE_LOGS_SUCCESSFUL', 'Logfiles erfolgreich gel&ouml;scht.');
// EOF - Dokuman - 2010-02-04 - delete cache files in admin section

// BOF - DokuMan - 2010-08-13 - set Google RSS Feed in admin section
define('GOOGLE_RSS_FEED_REFID_TITLE' , 'Google RSS Feed - refID');
define('GOOGLE_RSS_FEED_REFID_DESC' , 'Tragen Sie hier die Kampagnen-ID ein. Diese wird jedem Link des Google RSS Feeds automatisch hinzugef&uuml;gt.');
// EOF - DokuMan - 2010-08-13 - set Google RSS Feed in admin section

// BOF - web28 - 2010-08-17 -  Bildgroessenberechnung kleinerer Bilder
define('PRODUCT_IMAGE_NO_ENLARGE_UNDER_DEFAULT_TITLE','Skalierung von Bildern mit geringer Aufl&ouml;sung');
define('PRODUCT_IMAGE_NO_ENLARGE_UNDER_DEFAULT_DESC','Aktivieren Sie die Einstellung <strong>Nein</strong> um zu verhindern, dass Produktbilder geringerer Aufl&ouml;sung auf die eingestellten default Werte f&uuml;r Breite und H&ouml;he skaliert werden. Aktivieren Sie die Einstellung <strong>Ja</strong>, werden auch Bilder geringerer Aufl&ouml;sung auf die eingestellten default Bildgr&ouml;&szlig;enwerte skaliert. In diesem Fall k&ouml;nnen diese Bilder aber sehr unscharf und p&iacute;xelig dargestellt werden.');
// EOF - web28 - 2010-08-17 -  Bildgroessenberechnung kleinerer Bilder

//BOF - hendrik - 2011-05-14 - independent invoice number and date
//define('IBN_BILLNR_TITLE', 'N&auml;chste Rechnungsnummer');
//define('IBN_BILLNR_DESC', 'Beim Zuweisung einer Bestellung wird diese Nummer als n&auml;chstes vergeben.');
//define('IBN_BILLNR_FORMAT_TITLE', 'Rechnungsnummer Format');       //ibillnr
//define('IBN_BILLNR_FORMAT_DESC', 'Aufbauschema Rechn.Nr.: {n}=laufende Nummer, {d}=Tag, {m}=Monat, {y}=Jahr, <br>z.B. "100{n}-{d}-{m}-{y}" ergibt "10099-28-02-2007"');
//EOF - hendrik - 2011-05-14 - independent invoice number and date

//BOC - h-h-h - 2011-12-23 - Button "Buy Now" optional - default off
define('SHOW_BUTTON_BUY_NOW_TITLE', 'Zeige "Warenkorb"-Button in den Produktlisten');
define('SHOW_BUTTON_BUY_NOW_DESC', '<span class="col-red"><strong>ACHTUNG:</strong></span> Dies kann zu Abmahnungen f&uuml;hren, wenn dem Kunden nicht alle wesentlichen Artikelmerkmale bereits in den Produktlisten-Seiten gezeigt werden!');
//EOC - h-h-h - 2011-12-23 - Button "Buy Now" optional - default off

//split page results
define('MAX_DISPLAY_ORDER_RESULTS_TITLE', 'Anzahl der Bestellungen pro Seite');
define('MAX_DISPLAY_ORDER_RESULTS_DESC', 'Maximum Anzahl der Bestellungen die in der &Uuml;bersicht pro Seite angezeigt werden sollen.');
define('MAX_DISPLAY_LIST_PRODUCTS_TITLE', 'Anzahl der Artikel pro Seite');
define('MAX_DISPLAY_LIST_PRODUCTS_DESC', 'Maximum Anzahl der Artikel die in der &Uuml;bersicht pro Seite angezeigt werden sollen.');
define('MAX_DISPLAY_LIST_CUSTOMERS_TITLE', 'Anzahl der Kunden pro Seite');
define('MAX_DISPLAY_LIST_CUSTOMERS_DESC', 'Maximum Anzahl der Kunden die in der &Uuml;bersicht pro Seite angezeigt werden sollen.');
define('MAX_ROW_LISTS_ATTR_OPTIONS_TITLE', 'Artikelmerkmale: Anzahl der Artikelmerkmale pro Seite');
define('MAX_ROW_LISTS_ATTR_OPTIONS_DESC', 'Maximum Anzahl der Artikelmerkmale (Optionen) die pro Seite angezeigt werden sollen.');
define('MAX_ROW_LISTS_ATTR_VALUES_TITLE', 'Artikelmerkmale: Anzahl der Optionswerte pro Seite');
define('MAX_ROW_LISTS_ATTR_VALUES_DESC', 'Maximum Anzahl der Optionswerte die pro Seite angezeigt werden sollen.');
define('MAX_DISPLAY_STATS_RESULTS_TITLE', 'Anzahl der Statistikergebnisse pro Seite');
define('MAX_DISPLAY_STATS_RESULTS_DESC', 'Maximum Anzahl der Ergebnisse die in den Statistiken pro Seite angezeigt werden sollen.');
define('MAX_DISPLAY_COUPON_RESULTS_TITLE', 'Anzahl der Couponergebnisse pro Seite');
define('MAX_DISPLAY_COUPON_RESULTS_DESC', 'Maximum Anzahl der Ergebnisse die bei den Coupons pro Seite angezeigt werden sollen.');

//whos online
define('WHOS_ONLINE_TIME_LAST_CLICK_TITLE', 'Wer ist Online - Anzeigezeitraum in Sek.');
define('WHOS_ONLINE_TIME_LAST_CLICK_DESC', 'Anzeigedauer der Online-Benutzer in der "Wer ist Online" Tabelle, nach dieser Zeit werden die Eintr&auml;ge gel&ouml;scht. (min. Wert: 900)');

//sessions
define('SESSION_LIFE_ADMIN_TITLE', 'Session Lebenszeit Admin');
define('SESSION_LIFE_ADMIN_DESC', 'Zeitdauer in Sekunden nach der die Sessionzeit f&uuml;r Admins abl&auml;uft (wird ausgeloggt) - Standard 7200<br />Der hier gesetzte Wert greift nur wenn das Session-Handling db-basiert ist (configure.php => define(\'STORE_SESSIONS\', \'mysql\');)<br />H&ouml;chstwert: 14400');
define('SESSION_LIFE_CUSTOMERS_TITLE', 'Session Lebenszeit Kunden');
define('SESSION_LIFE_CUSTOMERS_DESC', 'Zeitdauer in Sekunden nach der die Sessionzeit f&uuml;r Kunden abl&auml;uft (wird ausgeloggt) - Standard 1440<br />Der hier gesetzte Wert greift nur wenn das Session-Handling db-basiert ist (configure.php => define(\'STORE_SESSIONS\', \'mysql\');)<br />H&ouml;chstwert: 14400');

//checkout confirmation options
define('CHECKOUT_USE_PRODUCTS_SHORT_DESCRIPTION_TITLE','Bestellbest&auml;tigungsseite: Kurzbeschreibung');
define('CHECKOUT_USE_PRODUCTS_SHORT_DESCRIPTION_DESC','Soll auf der Bestellbest&auml;tigungsseite die Artikel-Kurzbeschreibung angezeigt werden? Hinweis: Die Kurzbeschreibung wird dann angezeigt, wenn es KEINE Artikel-Bestellbeschreibung gibt. Mit False wird die Kurzbeschreibung grunds&auml;tzlich nicht angezeigt!');
define('CHECKOUT_USE_PRODUCTS_DESCRIPTION_FALLBACK_LENGTH_TITLE','L&auml;nge der Beschreibung, wenn Kurzbeschreibung leer');
define('CHECKOUT_USE_PRODUCTS_DESCRIPTION_FALLBACK_LENGTH_DESC','Ab welcher L&auml;nge soll die Beschreibung abgeschnitten werden, wenn keine Kurzbeschreibung verf&uuml;gbar ist?');
define('CHECKOUT_SHOW_PRODUCTS_IMAGES_TITLE','Bestellbest&auml;tigungsseite: Produktbilder');
define('CHECKOUT_SHOW_PRODUCTS_IMAGES_DESC','Sollen auf der Bestellbest&auml;tigungsseite die Artikelbilder angezeigt werden?');
define('CHECKOUT_SHOW_PRODUCTS_MODEL_TITLE','Bestellbest&auml;tigungsseite: Artikel-Nr.');
define('CHECKOUT_SHOW_PRODUCTS_MODEL_DESC','Sollen auf der Bestellbest&auml;tigungsseite die Artikel-Nr. angezeigt werden?');

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
define('POPUP_SHIPPING_LINK_PARAMETERS_TITLE', 'Versandkosten Popup Fenster URL-Parameter');
define('POPUP_SHIPPING_LINK_PARAMETERS_DESC', 'Hier k&ouml;nnen die URL-Parameter eingegeben werden - Standard: &KeepThis=true&TB_iframe=true&height=400&width=600');
define('POPUP_SHIPPING_LINK_CLASS_TITLE', 'Versandkosten Popup Fenster CSS-Klasse');
define('POPUP_SHIPPING_LINK_CLASS_DESC', 'Hier k&ouml;nnen CSS-Klassen eingegeben werden - Standard: thickbox');
define('POPUP_CONTENT_LINK_PARAMETERS_TITLE', 'Content-Seiten Popup Fenster URL-Parameter');
define('POPUP_CONTENT_LINK_PARAMETERS_DESC', 'Hier k&ouml;nnen die URL-Parameter eingegeben werden - Standard: &KeepThis=true&TB_iframe=true&height=400&width=600');
define('POPUP_CONTENT_LINK_CLASS_TITLE', 'Content-Seiten Popup Fenster CSS-Klasse');
define('POPUP_CONTENT_LINK_CLASS_DESC', 'Hier k&ouml;nnen CSS-Klassen eingegeben werden - Standard: thickbox');
define('POPUP_PRODUCT_LINK_PARAMETERS_TITLE', 'Produkt-Seiten Popup Fenster URL-Parameter');
define('POPUP_PRODUCT_LINK_PARAMETERS_DESC', 'Hier k&ouml;nnen die URL-Parameter eingegeben werden - Standard: &KeepThis=true&TB_iframe=true&height=450&width=750');
define('POPUP_PRODUCT_LINK_CLASS_TITLE', 'Produkt-Seiten Popup Fenster CSS-Klasse');
define('POPUP_PRODUCT_LINK_CLASS_DESC', 'Hier k&ouml;nnen CSS-Klassen eingegeben werden - Standard: thickbox');
define('POPUP_COUPON_HELP_LINK_PARAMETERS_TITLE', 'Coupon Hilfe Popup Fenster URL-Parameter');
define('POPUP_COUPON_HELP_LINK_PARAMETERS_DESC', 'Hier k&ouml;nnen die URL-Parameter eingegeben werden - Standard: &KeepThis=true&TB_iframe=true&height=400&width=600');
define('POPUP_COUPON_HELP_LINK_CLASS_TITLE', 'Coupon Hilfe Popup Fenster CSS-Klasse');
define('POPUP_COUPON_HELP_LINK_CLASS_DESC', 'Hier k&ouml;nnen CSS-Klassen eingegeben werden - Standard: thickbox');

define('POPUP_PRODUCT_PRINT_SIZE_TITLE', 'Produkt Druckansicht Fenstergr&ouml;&szlig;e');
define('POPUP_PRODUCT_PRINT_SIZE_DESC', 'Hier kann die Gr&ouml;&szlig;e des Popup-Fensters definiert werden - Standard: width=640, height=600');
define('POPUP_PRINT_ORDER_SIZE_TITLE', 'Bestellung Druckansicht Fenstergr&ouml;&szlig;e');
define('POPUP_PRINT_ORDER_SIZE_DESC', 'Hier kann die Gr&ouml;&szlig;e des Popup-Fensters definiert werden - Standard: width=640, height=600');

define('TRACKING_COUNT_ADMIN_ACTIVE_TITLE' , 'Seitenaufrufe des Shopbetreibers mitz&auml;hlen');
define('TRACKING_COUNT_ADMIN_ACTIVE_DESC' , 'Wird diese Option aktiviert, so werden auch alle Zugriffe des Administrators mitgez&auml;hlt, die (durch die h&auml;ufigeren Zugriffe auf den Shop) die Besucherstatistik verf&auml;lschen k&ouml;nnen.');

define('TRACKING_GOOGLEANALYTICS_ACTIVE_TITLE' , 'Google Analytics Tracking aktivieren');
define('TRACKING_GOOGLEANALYTICS_ACTIVE_DESC' , 'Wird diese Option aktiviert, so werden alle Seitenaufrufe an Google Analytics &uuml;bermittelt und k&ouml;nnen sp&auml;ter ausgewertet werden. Dazu ist vorher die Anlage eines Kontos bei <a href="http://www.google.com/analytics/" target="_blank"><b>Google Analytics</b></a> erforderlich.');
define('TRACKING_GOOGLEANALYTICS_ID_TITLE' , 'Google Analytics Kontonummer');
define('TRACKING_GOOGLEANALYTICS_ID_DESC' , 'Tragen Sie hier die Google Analytics Kontonummer im Format "UA-XXXXXXXX-X" ein, die Sie nach einer erfolgreichen Kontoerstellen bekommen haben.');

define('TRACKING_PIWIK_ACTIVE_TITLE' , 'PIWIK Web-Analytics Tracking aktivieren');
define('TRACKING_PIWIK_ACTIVE_DESC' , 'Um PIWIK nutzen zu k&ouml;nnen, m&uuml;ssen Sie es zun&auml;chst herunterladen und auf Ihrem Webspace installieren, siehe auch <a href="http://http://de.piwik.org/" target="_blank"><b>PIWIK Web-Analytics</b></a>. Im Gegensatz zu Google Analytics werden die Daten lokal gespeichert, d.h. Sie als Shopbetreiber haben die Datenhoheit.');
define('TRACKING_PIWIK_LOCAL_PATH_TITLE' , 'PIWIK Installationsverzeichnis (ohne "http://")');
define('TRACKING_PIWIK_LOCAL_PATH_DESC' , 'Tragen Sie hier das Verzeichnis ein, nachdem PIWIK erfolgreich installiert worden ist. Als Pfad ist hier der komplette Domainname ohne "http://" einzutragen, z.B. "www.domain.de/piwik".');
define('TRACKING_PIWIK_ID_TITLE' , 'PIWIK Seiten-ID');
define('TRACKING_PIWIK_ID_DESC' , 'In der PIWIK Administrationsoberfl&auml;che wird pro angelegter Domain wird eine ID vergeben (meist "1")');
define('TRACKING_PIWIK_GOAL_TITLE' , 'PIWIK Kampagnen-Nummer (optional)');
define('TRACKING_PIWIK_GOAL_DESC' , 'Tragen Sie hier eine Kampagnen-Nummer ein, wenn Sie vordefinierte Ziele nachverfolgen m&ouml;chten. Details siehe <a href="http://piwik.org/docs/tracking-goals-web-analytics/" target="_blank"><b>PIWIK: Tracking Goal Conversions</b></a>');

define('CONFIRM_SAVE_ENTRY_TITLE', 'Best&auml;tigungsabfrage beim Speichern von Artikeln/Kategorien');
define('CONFIRM_SAVE_ENTRY_DESC', 'Soll eine Best&auml;tigungsabfrage beim Speichern von Artikeln/Kategorien erfolgen? Standard: true (ja)');

define('WHOS_ONLINE_IP_WHOIS_SERVICE_TITLE', 'Wer ist Online - Whois Lookup URL');
define('WHOS_ONLINE_IP_WHOIS_SERVICE_DESC', 'http://www.utrace.de/?query= oder http://whois.domaintools.com/');

define('STOCK_CHECKOUT_UPDATE_PRODUCTS_STATUS_TITLE', 'Bestellabschlu&szlig; - Ausverkaufte Artikel deaktivieren');
define('STOCK_CHECKOUT_UPDATE_PRODUCTS_STATUS_DESC', 'Soll ein ausverkaufter Artikel (Lagermenge 0) am Ende der Bestellung automatisch deaktiviert werden? Der Artikel ist dann nicht mehr im Shop sichtbar!<br />Bei Artikeln die in K&uuml;rze wieder lieferbar sind, sollte die Option auf "false" gesetzt werden');

define('SEND_EMAILS_DOUBLE_OPT_IN_TITLE','Confirmar alta en Bolet&iacute;n de noticias');
define('SEND_EMAILS_DOUBLE_OPT_IN_DESC','Si esta activado, el cliente recibe un E-Mail para que confirme a trav&eacute;s de un enlace el alta del bolet&iacute;n de noticias. Para ello debe estar activado el env&iacute;o de E-Mails.');

define('USE_ADMIN_FIXED_TOP_TITLE', 'Admin Seitenkopf fixieren?');
define('USE_ADMIN_FIXED_TOP_DESC', 'Soll der Seitenkopf beim Scrollen immer sichtbar sein?');
define('USE_ADMIN_FIXED_SEARCH_TITLE', 'Admin Suchleiste anzeigen?');
define('USE_ADMIN_FIXED_SEARCH_DESC', 'Soll die Suchleiste immer sichtbar sein?');

define('SMTP_SECURE_TITLE' , 'SMTP SECURE');
define('SMTP_SECURE_DESC' , 'Erfordert der SMTP-Server eine sichere Verbindung? Die notwendigen Einstellungen erfahren Sie bei Ihrem Provider.');

define('DISPLAY_ERROR_REPORTING_TITLE', 'Error Reporting');
define('DISPLAY_ERROR_REPORTING_DESC', 'Soll das Error Reporting als formatierte Liste im Footer angezeigt werden?');

define('DISPLAY_BREADCRUMB_OPTION_TITLE', 'Breadcrumb Navigation');
define('DISPLAY_BREADCRUMB_OPTION_DESC', '<strong>name:</strong> In der Breadcrumb Navigation wird der komplette Artikelname angezeigt angezeigt.<br /><strong>model:</strong> In der Breadcrumb Navigation wird die Artikelnummer angezeigt, sofern sie vorhanden ist. Ansonsten Fallback auf auf Artikelname.');

define('EMAIL_WORD_WRAP_TITLE', 'Ajuste de texto para los e-mails');
define('EMAIL_WORD_WRAP_DESC', 'Introducir aqu&iacute; la cantidad de caracteres por linea en el texto del e-mail (solo n&uacute;meros enteros).<br /><strong>Atenci&oacute;n:</strong> Un n&uacute;mero posterior al 76 puede tener como consecuencia, que los correos electr&oacute;nicos sean declarados como SPAM! Para m&aacute;s informaci&oacute;n pulse <a href="http://wiki.apache.org/spamassassin/Rules/MIME_QP_LONG_LINE" target="_blank">aqu&iacute;</a>.');

define('USE_PAGINATION_LIST_TITLE', 'Pagination Liste');
define('USE_PAGINATION_LIST_DESC', 'Verwende eine HTML Liste (ul / li Tag) f&uuml;r die Pagination / Seitenschaltung.<br/><b>Achtung:</b> Das funktioniert nur mit einem f&uuml;r Shopversion 2.00 kompatiblem Template!');

define('ORDER_STATUSES_FOR_SALES_STATISTICS_TITLE', 'Umsatzstatistik Filter');
define('ORDER_STATUSES_FOR_SALES_STATISTICS_DESC', 'Hier die Bestellstati ausw&auml;hlen, die f&uuml;r die Umsatzstatistik auf der Admin-Startseite und im Status-Dowpdown bei Verwendung des Status "Umsatzstatistik Filter" ber&uuml;cksichtig werden sollen.<br />(Um nur anzuzeigen was effektiv an Umsatz gemacht wurde, den Status w&auml;hlen, der bei abgeschlossener Bestellung verwendet wird.)<br /><b>Hinweis:</b> Damit der Filter "Umsatzstatistik Filter" im Umsatzstatistik-Dropdown angezeigt wird, sind mindestens zwei Stati zu w&auml;hlen. Ansonsten kann &uuml;ber das Dropdown der gew&uuml;nschte Status direkt ausgew&auml;hlt werden.');

define('SAVE_IP_LOG_TITLE', 'IP-Adresse speichern');
define('SAVE_IP_LOG_DESC', 'Soll die IP-Adresse in der Datenbank gespeichert werden?<br/>Bei der Option xxx werden die letzten Stellen der IP anonymisiert.');

define('META_MAX_KEYWORD_LENGTH_TITLE', 'Maximum L&auml;nge Meta-Keywords');
define('META_MAX_KEYWORD_LENGTH_DESC', 'Maximum L&auml;nge der automatisch erzeugten Meta-Keywords (Artikelbeschreibung)');
define('META_DESCRIPTION_LENGTH_TITLE', 'L&auml;nge Meta-Description');
define('META_DESCRIPTION_LENGTH_DESC', 'Maximum L&auml;nge der Beschreibung (in Buchstaben)');
define('META_STOP_WORDS_TITLE', 'Stop Words');
define('META_STOP_WORDS_DESC', 'Bitte geben Sie hier Keywords als kommagetrennte Liste ein, die nicht verwendet werden sollen.');
define('META_GO_WORDS_TITLE', 'Go Words');
define('META_GO_WORDS_DESC', 'Bitte geben Sie hier Keywords als kommagetrennte Liste ein, die explizit erlaubt sind.');

//BOC added text constants for group id 20, noRiddle
define('CSV_CATEGORY_DEFAULT_TITLE','Kategorie f&uuml;r den Import');
define('CSV_CATEGORY_DEFAULT_DESC','Alle Artikel, die in der CSV-Importdatei <b>keine</b> Kategorie zugeordnet haben und noch nicht im Shop vorhanden sind, werden in diese Kategorie importiert.<br/><b>Wichtig:</b> Wenn Sie Artikel ohne Kategorie in der CSV-Importdatei nicht importieren m&ouml;chten, dann w&auml;hlen Sie Kategorie "Top" aus, da in diese Kategorie keine Artikel importiert werden.');
define('CSV_TEXTSIGN_TITLE','Texterkennungszeichen');
define('CSV_TEXTSIGN_DESC','Z.B. " &nbsp; | &nbsp;<span style="color:#c00;">Bei Semikolon als Trennzeichen sollte das Texterkennungszeichen auf " gesetzt werden!</span>');
define('CSV_SEPERATOR_TITLE','Trennzeichen');
define('CSV_SEPERATOR_DESC','Z.B. ; &nbsp; | &nbsp;<span style="color:#c00;">wird das Eingabefeld leer gelassen wird beim Export/Import per default \\t (= Tab) benutzt!</span>');
define('COMPRESS_EXPORT_TITLE','Kompression');
define('COMPRESS_EXPORT_DESC','Kompression der exportierten Daten');
define('CSV_CAT_DEPTH_TITLE','Kategorietiefe');
define('CSV_CAT_DEPTH_DESC','Wie tief soll der Kategoriebaum gehen? (z.B. bei Default-Einstellung 4: Hauptkategorie und drei Unterkategorien)<br />Diese Einstellung ist wichtig um die in der CSV angelegten Kategorien auch korrekt importiert zu bekommen. Das gleiche gilt f&uuml;r den Export.<br /><span style="color:#c00;">Mehr als 4 kann zu Performance-Einbu&szlig;en f&uuml;hren und ist evtl. nicht kundenfreundlich!');
//EOC added text constants for group id 20, noRiddle

define('MIN_GROUP_PRICE_STAFFEL_TITLE', 'Zus&auml;tzliche Anzahl Staffelpreise');
define('MIN_GROUP_PRICE_STAFFEL_DESC', 'Zus&auml;tzliche Anzahl der Staffelpreise die angezeigt werden');

define('MODULE_CAPTCHA_ACTIVE_TITLE', 'Captcha aktivieren');
define('MODULE_CAPTCHA_ACTIVE_DESC', 'F&uuml;r welche Shopsektionen soll das Captcha aktiviert werden?');
define('MODULE_CAPTCHA_LOGGED_IN_TITLE', 'Angemeldete Kunden');
define('MODULE_CAPTCHA_LOGGED_IN_DESC', 'Anzeige des Captcha f&uuml;r angemeldete Kunden');
define('MODULE_CAPTCHA_USE_COLOR_TITLE', 'Zuf&auml;llige Farben');
define('MODULE_CAPTCHA_USE_COLOR_DESC', 'Anzeige der Linien und Zeichen in zuf&auml;lligen Farben');
define('MODULE_CAPTCHA_USE_SHADOW_TITLE', 'Schatten');
define('MODULE_CAPTCHA_USE_SHADOW_DESC', 'Zus&auml;tzliche Schatten der Zeichen im Captcha.');
define('MODULE_CAPTCHA_CODE_LENGTH_TITLE', 'Captcha L&auml;nge');
define('MODULE_CAPTCHA_CODE_LENGTH_DESC', 'Anzahl der Zeichen im Captcha<br/>(default: 6)');
define('MODULE_CAPTCHA_NUM_LINES_TITLE', 'Anzahl an Linien');
define('MODULE_CAPTCHA_NUM_LINES_DESC', 'Anzahl der Linien im Captcha<br/>(default: 70)');
define('MODULE_CAPTCHA_MIN_FONT_TITLE', 'Minimale Schriftgr&ouml;sse');
define('MODULE_CAPTCHA_MIN_FONT_DESC', 'Angabe in p&iacute;xel f&uuml;r die kleinsten Zeichen im Captcha.<br/>(default: 24)');
define('MODULE_CAPTCHA_MAX_FONT_TITLE', 'Maximale Schriftgr&ouml;sse');
define('MODULE_CAPTCHA_MAX_FONT_DESC', 'Angabe in p&iacute;xel f&uuml;r die gr&ouml;ssten Zeichen im Captcha.<br/>(default: 28)');
define('MODULE_CAPTCHA_BACKGROUND_RGB_TITLE', 'Hintergrundfarbe');
define('MODULE_CAPTCHA_BACKGROUND_RGB_DESC', 'Angabe der Hintergrundfarbe in RGB erfolgen.<br/>(default: 192,192,192)');
define('MODULE_CAPTCHA_LINES_RGB_TITLE', 'Linienfarbe');
define('MODULE_CAPTCHA_LINES_RGB_DESC', 'Angabe der Linienfarbe in RGB erfolgen.<br/>(default: 220,148,002)');
define('MODULE_CAPTCHA_CHARS_RGB_TITLE', 'Zeichenfarbe');
define('MODULE_CAPTCHA_CHARS_RGB_DESC', 'Angabe der Zeichenfarbe in RGB erfolgen.<br/>(default: 112,112,112)');
define('MODULE_CAPTCHA_WIDTH_TITLE', 'Breite');
define('MODULE_CAPTCHA_WIDTH_DESC', 'Angabe in p&iacute;xel f&uuml;r die Breite des Captcha.');
define('MODULE_CAPTCHA_HEIGHT_TITLE', 'H&ouml;he');
define('MODULE_CAPTCHA_HEIGHT_DESC', 'Angabe in p&iacute;xel f&uuml;r die H&ouml;he des Captcha.');

define('SHIPPING_STATUS_INFOS_TITLE', 'Lieferzeit');
define('SHIPPING_STATUS_INFOS_DESC', 'W&auml;hle den Content zur Anzeige der Informationen zur Lieferzeit');

define('USE_SHORT_DATE_FORMAT_TITLE', 'Datum im Kurzformat anzeigen');
define('USE_SHORT_DATE_FORMAT_DESC', 'Datum immer im Kurzformat anzeigen: <b>01.03.2014</b> anstatt <b>Samstag, 01. M&auml;rz 2014</b><br />Empfohlen bei Darstellungsfehlern mit dem langen Datumsformat, wie falscher Sprache oder Umlautproblemem!');

define('MAX_DISPLAY_PRODUCTS_CATEGORY_TITLE', 'Maximale Artikel');
define('MAX_DISPLAY_PRODUCTS_CATEGORY_DESC', 'Maximale Anzahl an Artikeln aus der gleichen Kategorie');
define('MAX_DISPLAY_ADVANCED_SEARCH_RESULTS_TITLE', 'Anzahl Suchergebnisse');
define('MAX_DISPLAY_ADVANCED_SEARCH_RESULTS_DESC', 'Anzahl der Artikel in den Suchergebnissen');
define('MAX_DISPLAY_PRODUCTS_HISTORY_TITLE' , 'Anzahl der History');
define('MAX_DISPLAY_PRODUCTS_HISTORY_DESC' , 'Maximum Anzahl an Artikel die zuletzt besucht wurden im Account anzeigen');

define('PRODUCT_IMAGE_SHOW_NO_IMAGE_TITLE', 'Artikel noimage.gif');
define('PRODUCT_IMAGE_SHOW_NO_IMAGE_DESC', 'Anzeige des noimage.gif wenn kein Artikelbild angegeben wurde');
define('CATEGORIES_IMAGE_SHOW_NO_IMAGE_TITLE', 'Kategorie noimage.gif');
define('CATEGORIES_IMAGE_SHOW_NO_IMAGE_DESC', 'Anzeige des noimage.gif wenn kein Kategoriebild angegeben wurde');
define('MANUFACTURER_IMAGE_SHOW_NO_IMAGE_TITLE', 'Hersteller noimage.gif');
define('MANUFACTURER_IMAGE_SHOW_NO_IMAGE_DESC', 'Anzeige des noimage.gif wenn kein Herstellerbild angegeben wurde');

define('MODULE_SMALL_BUSINESS_TITLE', 'Kleinunternehmer');
define('MODULE_SMALL_BUSINESS_DESC', 'Soll der Shop umgestellt werden auf Kleinunternehmer nach &sect; 19 UStG.?<br /><b>Wichtig:</b> Unter "Module" -> "Zusammenfassung" muss das Modul "ot_tax" <a href="'.xtc_href_link(FILENAME_MODULES, 'set=ordertotal&module=ot_tax').'"><b>hier</b></a> deaktiviert oder deinstalliert werden. Zudem muss in den einzelnen <a href="'.xtc_href_link(FILENAME_CUSTOMERS_STATUS, '').'"><b>Kundengruppen</b></a> "Preise inkl. MwSt." auf "Nein" gesetzt werden.');

define('COMPRESS_HTML_OUTPUT_TITLE', 'HTML Komprimierung');
define('COMPRESS_HTML_OUTPUT_DESC', 'Soll der HTML Output vom Template komprimiert ausgeliefert werden?');
define('COMPRESS_STYLESHEET_TITLE', 'CSS Komprimierung');
define('COMPRESS_STYLESHEET_DESC', 'Soll ein komprimiertes Stylesheet ausgeliefert werden?<br/><b>Achtung:</b> Das funktioniert nur mit einem f&uuml;r Shopversion 2.00 kompatiblem Template!');

define('COMPRESS_JAVASCRIPT_TITLE', 'JavaScript Compression');
define('COMPRESS_JAVASCRIPT_DESC', 'Compress JavaScript?<br/><b>Attention:</b> This only works with a shop version 2.0.1.0 compatible template!');

define('USE_ATTRIBUTES_IFRAME_TITLE', 'Attribute editieren in iframe');
define('USE_ATTRIBUTES_IFRAME_DESC', '&Ouml;ffnet die Attribut Verwaltung in der Kategorie/Artikelansicht in einem iframe');

define('ADMIN_HEADER_X_FRAME_OPTIONS_TITLE', 'Admin Clickjacking Schutz');
define('ADMIN_HEADER_X_FRAME_OPTIONS_DESC', 'Adminbereich mit dem Header "X-Frame-Options: SAMEORIGIN" sch&uuml;tzen<br>Supported Browsers: FF 3.6.9+ Chrome 4.1.249.1042+ IE 8+ Safari 4.0+ Opera 10.50+ ');

define('SEND_MAIL_ACCOUNT_CREATED_TITLE', 'Confirmar registro al cliente');
define('SEND_MAIL_ACCOUNT_CREATED_DESC', 'Si esta activado, el cliente recibir&aacute; un E-Mail con un aviso de que ha sido creada la cuenta.');

define('STATUS_EMAIL_SENT_COPY_TO_ADMIN_TITLE', 'Confirmar cambio de estado del pedido');
define('STATUS_EMAIL_SENT_COPY_TO_ADMIN_DESC', 'Si esta activado, el cliente recibir&aacute; un E-Mail con el nuevo estado del pedido.');

define('STOCK_CHECK_SPECIALS_TITLE', '&Uuml;berpr&uuml;fen der Sonderangebote');
define('STOCK_CHECK_SPECIALS_DESC', 'Pr&uuml;fen ob noch genug Sonderangebote zum Ausliefern der Bestellung verf&uuml;gbar sind.<br/><br/><b>ACHTUNG:</b> Sollten nicht gen&uuml;gend Sonderangebote zur Verf&uuml;gung stehen, kann die Bestellung erst nach einer Reduzierung der Menge abgeschlossen werden.');

define('DOWNLOAD_SHOW_LANG_DROPDOWN_TITLE', 'L&auml;nderdropdown im Warenkorb');
define('DOWNLOAD_SHOW_LANG_DROPDOWN_DESC', 'Soll das L&auml;nderdropdown im Warenkorb angezeigt werden, wenn nur Download Artikel gekauft werden?');

define('GUEST_ACCOUNT_EDIT_TITLE', 'Gastkonten bearbeiten');
define('GUEST_ACCOUNT_EDIT_DESC', 'D&uuml;rfen G&auml;ste ihre Accountdetails sehen und bearbeiten?');

define('EMAIL_SIGNATURE_ID_TITLE', 'Firma de E-Mail');
define('EMAIL_SIGNATURE_ID_DESC', 'Elija aqu&iacute; en contenido que quiere que se use como firma en los correos electr&oacute;nicos procedente de la tienda on-line.');

define('TEXT_PAYPAL_NOT_INSTALLED', '<div class="important_info">PayPal wurde noch nicht installiert. Dies kann <a href="'.xtc_href_link(FILENAME_MODULES, 'set=payment&module=paypal').'">hier</a> gemacht werden.</div>');

define('POLICY_MIN_LOWER_CHARS_TITLE', 'Passwort Kleinbuchstaben');
define('POLICY_MIN_LOWER_CHARS_DESC', 'Wie viele Kleinbuchstaben soll das Passwort mindestens haben?');
define('POLICY_MIN_UPPER_CHARS_TITLE', 'Passwort Grossbuchstaben');
define('POLICY_MIN_UPPER_CHARS_DESC', 'Wie viele Grossbuchstaben soll das Passwort mindestens haben?');
define('POLICY_MIN_NUMERIC_CHARS_TITLE', 'Passwort Zahlen');
define('POLICY_MIN_NUMERIC_CHARS_DESC', 'Wie viele Zahlen soll das Passwort mindestens haben?');
define('POLICY_MIN_SPECIAL_CHARS_TITLE', 'Passwort Sonderzeichen');
define('POLICY_MIN_SPECIAL_CHARS_DESC', 'Wie viele Sonderzeichen soll das Passwort mindestens haben?');

define('SHOW_SHIPPING_EXCL_TITLE', 'Versandkosten zzgl.');
define('SHOW_SHIPPING_EXCL_DESC', 'Anzeige von zzgl. oder inkl. Versandkosten');

define('ACCOUNT_TELEPHONE_OPTIONAL_TITLE', 'Telefonnummer optional');
define('ACCOUNT_TELEPHONE_OPTIONAL_DESC', 'Soll die Telefonnummer nur optional abgefragt werden?');

define('TRACKING_GOOGLEANALYTICS_UNIVERSAL_TITLE' , 'Google Universal Analytics');
define('TRACKING_GOOGLEANALYTICS_UNIVERSAL_DESC' , 'Soll der Google Universal Analytics Code verwendet werden?<br/><br/><b>Achtung:</b> Sobald Sie in Ihrem Google Analytics Konto auf den neuen Google Universal Analytics Code umstellen, kann das bisherige Google Analytics nicht mehr verwendet werden!');
define('TRACKING_GOOGLEANALYTICS_DOMAIN_TITLE' , 'Google Universal Analytics Shop-URL');
define('TRACKING_GOOGLEANALYTICS_DOMAIN_DESC' , 'Tragen Sie hier Standard-Shop-URL ein (example.com oder www.example.com). Funktioniert nur f&uuml;r Google Universal Analytics.');
define('TRACKING_GOOGLE_LINKID_TITLE' , 'Google Universal Analytics LinkID');
define('TRACKING_GOOGLE_LINKID_DESC' , 'Sie k&ouml;nnen separate Informationen zu mehreren Links auf einer Seite sehen, die alle dasselbe Ziel haben. Wenn es zum Beispiel zwei Links auf derselben Seite gibt, die beide auf die Seite Kontakt f&uuml;hren, sehen Sie separate Klickinformationen f&uuml;r jeden Link. Funktioniert nur f&uuml;r Google Universal Analytics.');
define('TRACKING_GOOGLE_DISPLAY_TITLE' , 'Google Universal Analytics Displayfeature');
define('TRACKING_GOOGLE_DISPLAY_DESC' , 'Die Bereiche zu demografischen Merkmalen und zum Interesse enthalten eine &Uuml;bersicht sowie neue Berichte zur Leistung nach Alter, Geschlecht und Interessenkategorien. Funktioniert nur f&uuml;r Google Universal Analytics.');
define('TRACKING_GOOGLE_ECOMMERCE_TITLE' , 'Google Universal Analytics E-Commerce');
define('TRACKING_GOOGLE_ECOMMERCE_DESC' , 'Setzen Sie E-Commerce-Tracking ein, um herauszufinden, was Besucher &uuml;ber Ihre Website oder App kaufen. Zudem erhalten Sie folgende Informationen:<br><br><strong>Produkte:</strong> Gekaufte Produkte sowie die Mengen und die mit diesen Produkten erzielten Ums&auml;tze<br><strong>Transaktionen:</strong> Informationen zu Umsatz, Steuern, Versandkosten und Mengen f&uuml;r jede Transaktion<br><strong>Zeit bis zum Kauf:</strong> Anzahl von Tagen und Besuchen, beginnend von der aktuellen Kampagne bis zum Abschluss der Transaktion. Funktioniert nur f&uuml;r Google Universal Analytics.');

define('NEW_ATTRIBUTES_STYLING_TITLE', 'Attribut Verwaltung Styling');
define('NEW_ATTRIBUTES_STYLING_DESC', 'In der Attribut Verwaltung das Styling bei den Checkboxen/Dropdowns aktivieren? Bei sehr vielen Attributen und Performanceproblemen auf Nein/false setzen.');

define('DB_CACHE_TYPE_TITLE', 'Cache Engine');
define('DB_CACHE_TYPE_DESC', 'W&auml;hlen sie eine der verf&uuml;gbaren Engines zum Cachen');

define('META_PRODUCTS_KEYWORDS_LENGTH_TITLE', 'L&auml;nge der Zusatz-Begriffe f&uuml;r Suche');
define('META_PRODUCTS_KEYWORDS_LENGTH_DESC', 'Maximum L&auml;nge der Zusatz-Begriffe f&uuml;r Suche (in Buchstaben)');
define('META_KEYWORDS_LENGTH_TITLE', 'L&auml;nge Meta-Keywords');
define('META_KEYWORDS_LENGTH_DESC', 'Maximum L&auml;nge der Keywords (in Buchstaben)');
define('META_TITLE_LENGTH_TITLE', 'L&auml;nge Meta-Title');
define('META_TITLE_LENGTH_DESC', 'Maximum L&auml;nge des Titles (in Buchstaben)');
define('META_CAT_SHOP_TITLE_TITLE', 'Shop-Titel Kategorien');
define('META_CAT_SHOP_TITLE_DESC', 'Shop-Titel bei Kategorien anh&auml;ngen?');
define('META_PROD_SHOP_TITLE_TITLE', 'Shop-Titel Produkte');
define('META_PROD_SHOP_TITLE_DESC', 'Shop-Titel bei Produkten anh&auml;ngen?');
define('META_CONTENT_SHOP_TITLE_TITLE', 'Shop-Titel Contents');
define('META_CONTENT_SHOP_TITLE_DESC', 'Shop-Titel bei Contents anh&auml;ngen?');
define('META_SPECIALS_SHOP_TITLE_TITLE', 'Shop-Titel Sonderangebote');
define('META_SPECIALS_SHOP_TITLE_DESC', 'Shop-Titel bei Sonderangeboten anh&auml;ngen?');
define('META_NEWS_SHOP_TITLE_TITLE', 'Shop-Titel Neue Produkte');
define('META_NEWS_SHOP_TITLE_DESC', 'Shop-Titel bei neuen Produkten anh&auml;ngen?');
define('META_SEARCH_SHOP_TITLE_TITLE', 'Shop-Titel Suche');
define('META_SEARCH_SHOP_TITLE_DESC', 'Shop-Titel bei Ergebnissen der Shopsuche anh&auml;ngen?');
define('META_OTHER_SHOP_TITLE_TITLE', 'Shop-Titel &uuml;brige Seiten');
define('META_OTHER_SHOP_TITLE_DESC', 'Shop-Titel bei allen anderen Seiten anh&auml;ngen?');
define('META_GOOGLE_VERIFICATION_KEY_TITLE', 'Google Verification Key');
define('META_GOOGLE_VERIFICATION_KEY_DESC', '<meta name="verifiy-v1">');
define('META_BING_VERIFICATION_KEY_TITLE', 'Bing Verification Key');
define('META_BING_VERIFICATION_KEY_DESC', '<meta name="msvalidate.01">');

define('TRACKING_FACEBOOK_ACTIVE_TITLE', 'Facebook Conversion-Tracking aktivieren');
define('TRACKING_FACEBOOK_ACTIVE_DESC', 'Wird diese Option aktiviert, so werden alle K&auml;ufe an Facebook &uuml;bermittelt und k&ouml;nnen sp&auml;ter ausgewertet werden. Dazu ist vorher die Anlage eines Kontos bei <a href="https://www.facebook.com" target="_blank"><b>Facebook</b></a> erforderlich.');
define('TRACKING_FACEBOOK_ID_TITLE', 'Facebook Conversion ID');
define('TRACKING_FACEBOOK_ID_DESC', 'Ihre Facebook Conversion ID');

define('NEW_SELECT_CHECKBOX_TITLE', 'Adminbereich Styling');
define('NEW_SELECT_CHECKBOX_DESC', 'Im Adminbereich das Styling bei den Checkboxen/Dropdowns aktivieren?');
define('CSRF_TOKEN_SYSTEM_TITLE', 'Admin Token System');
define('CSRF_TOKEN_SYSTEM_DESC', 'Soll das Token System in Admin verwendet werden?<br/><b>Achtung:</b> das Token System wurde zur Erh&ouml;hung der Sicherheit eingef&uuml;hrt.');

define('DISPLAY_FILTER_INDEX_TITLE', 'Filter Anzeige pro Seite - Artikel');
define('DISPLAY_FILTER_INDEX_DESC', 'Bitte geben Sie die m&ouml;glichen Werte f&uuml;r die Auswahl separiert durch ein Komma ein. F&uuml;r alle Artikel geben Sie all ein.<br/>Bsp.: 3,12,27,all');
define('DISPLAY_FILTER_SPECIALS_TITLE', 'Filter Anzeige pro Seite - Sonderangebote');
define('DISPLAY_FILTER_SPECIALS_DESC', 'Bitte geben Sie die m&ouml;glichen Werte f&uuml;r die Auswahl separiert durch ein Komma ein. F&uuml;r alle Artikel geben Sie all ein.<br/>Bsp.: 3,12,27,all');
define('DISPLAY_FILTER_PRODUCTS_NEW_TITLE', 'Filter Anzeige pro Seite - Neue Artikel');
define('DISPLAY_FILTER_PRODUCTS_NEW_DESC', 'Bitte geben Sie die m&ouml;glichen Werte f&uuml;r die Auswahl separiert durch ein Komma ein. F&uuml;r alle Artikel geben Sie all ein.<br/>Bsp.: 3,12,27,all');
define('DISPLAY_FILTER_ADVANCED_SEARCH_RESULT_TITLE', 'Filter Anzeige pro Seite - Suchergebnisse');
define('DISPLAY_FILTER_ADVANCED_SEARCH_RESULT_DESC', 'Bitte geben Sie die m&ouml;glichen Werte f&uuml;r die Auswahl separiert durch ein Komma ein. F&uuml;r alle Artikel geben Sie all ein.<br/>Bsp.: 4,12,32,all');

define('USE_BROWSER_LANGUAGE_TITLE' , 'Auf die Browsersprache automatisch umstellen');
define('USE_BROWSER_LANGUAGE_DESC' , 'Automatisch die Sprache auf die Browsersprache des Kunden umstellen.');

define('WYSIWYG_SKIN_TITLE' , 'WYSIWYG-Editor Skin');
define('WYSIWYG_SKIN_DESC' , 'W&auml;hlen Sie das WYSIWYG-Editor Skin.');

define('CHECK_CHEAPEST_SHIPPING_MODUL_TITLE', 'G&uuml;nstigste Versandart vorausw&auml;hlen');
define('CHECK_CHEAPEST_SHIPPING_MODUL_DESC', 'Soll im Checkout die kosteng&uuml;nstigste Versandart f&uuml;r den Kunden vorausgew&auml;hlt werden?');

define('DISPLAY_PRIVACY_CHECK_TITLE', 'Privatsph&auml;re Checkbox anzeigen');
define('DISPLAY_PRIVACY_CHECK_DESC', 'Soll w&auml;hrend der Konto-Erstellung die Privatsph&auml;re-Checkbox angezeigt werden? (Bei B2C-Gesch&auml;ften Pflicht!)');

define('SHOW_SELFPICKUP_FREE_TITLE', 'Versandmodul "Selbstabholung" bei "versandkostenfrei"');
define('SHOW_SELFPICKUP_FREE_DESC', 'Soll das Versandmodul "Selbstabholung (selfpickup)" bei Erreichen des im Modul "Versandkosten (ot_shiping)" eingestellten Betrages f&uuml;r "versandkostenfrei" angezeigt werden?');

define('CHECK_FIRST_PAYMENT_MODUL_TITLE', 'Erste Zahlungsoption vorausw&auml;hlen');
define('CHECK_FIRST_PAYMENT_MODUL_DESC', 'Soll im Checkout die erste Zahlungsoption f&uuml;r den Kunden vorausgew&auml;hlt werden?');

define('ATTRIBUTES_VALID_CHECK_TITLE', 'Attribute validieren');
define('ATTRIBUTES_VALID_CHECK_DESC', 'Pr&uuml;ft Artikel im Warenkorb des Kunden auf nicht mehr g&uuml;ltige Attribute.<br/>(Das kann vorkommen, wenn sich ein Kunde nach l&auml;ngerer Zeit wieder in den Shop einloggt und einen aus einem fr&uuml;heren Besuch im Warenkorb verbliebenen Artikel kaufen m&ouml;chte.)<br/><b>Hinweis:</b> Bei Erweiterungen, die im Nachhinein Attribute erweitern, wie z.B. Textfeld, muss dieser Check deaktiviert werden.');

define('ATTRIBUTE_MODEL_DELIMITER_TITLE', 'Artikel-/Attribut-Nr.-Trennzeichen');
define('ATTRIBUTE_MODEL_DELIMITER_DESC', 'Trennzeichen zwischen Artikelnummer &amp; Attribut-Artikelnummer');

define('STORE_PAGE_PARSE_TIME_THRESHOLD_TITLE' , 'Schwellwert f&uuml;r das Speichern der Berechnungszeit des Seitenaufbaus');
define('STORE_PAGE_PARSE_TIME_THRESHOLD_DESC' , 'Legt den Schwellwert in Sekunden fest, ab dem ein Eintrag f&uuml;r die Berechnungszeit des Seitenaufbaus geschrieben werden soll.');

define('SEARCH_IN_FILTER_TITLE', 'Suche in Artikeleigenschaften');
define('SEARCH_IN_FILTER_DESC', 'Aktivieren um die Suche in den Artikeleigenschaften zu erm&ouml;glichen');
define('SEARCH_AC_STATUS_TITLE','Autocomplete Suche');
define('SEARCH_AC_STATUS_DESC','Aktivieren um die Autocomplete Suche zu aktivieren');
define('SEARCH_AC_MIN_LENGTH_TITLE', 'Autocomplete Suche Zeichenanzahl');
define('SEARCH_AC_MIN_LENGTH_DESC', 'Ab welchen Zeichenanzahl sollen die ersten Suchergebnisse angezeigt werden?');

define('DISPLAY_REVOCATION_VIRTUAL_ON_CHECKOUT_TITLE', 'Anzeige Widerrufsrecht Downloads');
define('DISPLAY_REVOCATION_VIRTUAL_ON_CHECKOUT_DESC', 'Soll eine Checkbox im Checkout angezeigt werden, mit welcher darauf hingewiesen wird, dass das Widerrufsrecht erlischt?');
define('ORDER_STATUSES_DISPLAY_DEFAULT_TITLE', 'Anzeige Bestellungen');
define('ORDER_STATUSES_DISPLAY_DEFAULT_DESC', 'Bestellungen mit welchem Bestellstatus sollen standardm&auml;&szlig;ig angezeigt werden?');

define('INVOICE_INFOS_TITLE', 'Rechnungsdaten');
define('INVOICE_INFOS_DESC', 'W&auml;hlen sie eine Contentseite. Der Inhalt wird auf dem Rechnungsdruck angezeigt.');

define('CATEGORIES_SHOW_PRODUCTS_SUBCATS_TITLE', 'Artikel aus Unterkategorien anzeigen');
define('CATEGORIES_SHOW_PRODUCTS_SUBCATS_DESC', 'Sollen alle Artikel aus vorhandenen Unterkategorien im Listing angezeigt werden?');

define('SEO_URL_MOD_CLASS_TITLE', 'URL Modul');
define('SEO_URL_MOD_CLASS_DESC', 'W&auml;hlen Sie ein URL Modul.');

define('MODULE_BANNER_MANAGER_STATUS_TITLE', 'Banner Manager');
define('MODULE_BANNER_MANAGER_STATUS_DESC', 'Banner Manager aktivieren?');

define('MODULE_NEWSLETTER_STATUS_TITLE', 'Bolet&iacute;n de noticias');
define('MODULE_NEWSLETTER_STATUS_DESC', '&iquest;Activar el sistema de bolet&iacute;n de noticias?');

define('GOOGLE_CERTIFIED_SHOPS_MERCHANT_ACTIVE_TITLE', 'Google Certified Shops Merchant aktivieren');
define('GOOGLE_CERTIFIED_SHOPS_MERCHANT_ACTIVE_DESC', 'Soll der Google Certified Shops Merchant Code verwendet werden?<br/><br/><b>Achtung:</b> Das funktioniert nur mit einem ab Shopversion 2.0.1.0 kompatiblem Template!');
define('GOOGLE_SHOPPING_ID_TITLE', 'Google Shopping ID');
define('GOOGLE_SHOPPING_ID_DESC', 'Ihre Google Shopping ID');
define('GOOGLE_TRUSTED_ID_TITLE', 'Google Trusted ID');
define('GOOGLE_TRUSTED_ID_DESC', 'Ihre Google Trusted ID');

define('EMAIL_ARCHIVE_ADDRESS_TITLE', 'Archivar - E-Mail');
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