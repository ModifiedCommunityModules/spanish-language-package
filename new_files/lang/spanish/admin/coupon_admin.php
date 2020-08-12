<?php
/* -----------------------------------------------------------------------------------------
   $Id: coupon_admin.php 2094 2011-08-15 14:56:49Z web28 $

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   -----------------------------------------------------------------------------------------
   based on:
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(coupon_admin.php,v 1.1.2.5 2003/05/13); www.oscommerce.com
   (c) 2006 XT-Commerce

   Released under the GNU General Public License
   -----------------------------------------------------------------------------------------
   Third Party contributions:

   Credit Class/Gift Vouchers/Discount Coupons (Version 5.10)
   http://www.oscommerce.com/community/contributions,282
   Copyright (c) Strider | Strider@oscworks.com
   Copyright (c) Nick Stanko of UkiDev.com, nick@ukidev.com
   Copyright (c) Andre ambidex@gmx.net
   Copyright (c) 2001,2002 Ian C Wilson http://www.phesis.org

   Released under the GNU General Public License
   ---------------------------------------------------------------------------------------*/

define('TOP_BAR_TITLE', 'Estad&iacute;sticas');
define('HEADING_TITLE', 'Cupones Rabatt');
define('HEADING_TITLE_STATUS', 'Estado : ');
define('TEXT_CUSTOMER', 'Kunde:');
define('TEXT_COUPON', 'Nombre del cup&oacute;n');
define('TEXT_COUPON_ALL', 'Todos los cupones');
define('TEXT_COUPON_ACTIVE', 'Cupones activos');
define('TEXT_COUPON_INACTIVE', 'Cupones inaugurales');
define('TEXT_SUBJECT', 'Asunto:');
define('TEXT_FROM', 'de:');
define('TEXT_FREE_SHIPPING', 'Env&iacute;o gratuito');
define('TEXT_MESSAGE', 'Mensaje:');
define('TEXT_SELECT_CUSTOMER', 'Seleccione el cliente');
define('TEXT_ALL_CUSTOMERS', 'Todos los clientes');
define('TEXT_NEWSLETTER_CUSTOMERS', 'Todos los suscriptores del bolet&iacute;n de noticias');
define('TEXT_CONFIRM_DELETE', 'Si este cup&oacute;n realmente fuera cancelado?');

define('TEXT_TO_REDEEM', 'Puede canjear el vale con su pedido. Para ello, introduzca el c&oacute;digo del vale en el campo previsto y haga clic en el bot&oacute;n "Canjear".');
define('TEXT_IN_CASE', ' Si, en contra de lo esperado, hay problemas con la publicaci&oacute;n.');
define('TEXT_VOUCHER_IS', 'El c&oacute;digo del vale es: ');
define('TEXT_REMEMBER', 'Mantenga su c&oacute;digo del vale seguro para que pueda beneficiarse de esta oferta');
define('TEXT_VISIT', 'si quiere decirnos la pr&oacute;xima vez ' . HTTP_SERVER . DIR_WS_CATALOG. ' visite.');
define('TEXT_ENTER_CODE', ' e introducir el c&oacute;digo ');

define('TABLE_HEADING_ACTION', 'Acci&oacute;n');

define('CUSTOMER_ID', 'Cliente No.');
define('CUSTOMER_NAME', 'Nombre del cliente');
define('REDEEM_DATE', 'se sorte&oacute; en');
define('IP_ADDRESS', 'Direcci&oacute;n IP');

define('TEXT_REDEMPTIONS', 'Sorteo');
define('TEXT_REDEMPTIONS_TOTAL', 'Total:');
define('TEXT_REDEMPTIONS_CUSTOMER', 'Para estos clientes:');
define('TEXT_NO_FREE_SHIPPING', 'No libre de gastos de env&iacute;o');

define('NOTICE_EMAIL_SENT_TO', 'Nota: Correo electr&oacute;nico enviado a: %s');
define('ERROR_NO_CUSTOMER_SELECTED', 'Error: No se ha seleccionado ning&uacute;n cliente.');
define('COUPON_NAME', 'Nombre del cup&oacute;n');
define('COUPON_AMOUNT', 'Valor del cup&oacute;n');
define('COUPON_CODE', 'C&oacute;digo del cup&oacute;n');
define('COUPON_STARTDATE', 'v&aacute;lido desde');
define('COUPON_FINISHDATE', 'v&aacute;lido hasta');
define('COUPON_FREE_SHIP', 'Env&iacute;o gratuito');
define('COUPON_DESC', 'Descripci&oacute;n del cup&oacute;n');
define('COUPON_MIN_ORDER', 'Valor m&iacute;nimo del pedido del cup&oacute;n');
define('COUPON_USES_COUPON', 'N&uacute;mero/usos por cup&oacute;n');
define('COUPON_USES_USER', 'N&uacute;mero/usos por cliente');
define('COUPON_PRODUCTS', 'Lista de art&iacute;culos v&aacute;lidos');
define('COUPON_CATEGORIES', 'Lista de categor&iacute;as v&aacute;lidas');
define('COUPON_CUSTOMERS', 'Lista de grupos de clientes v&aacute;lidos');
define('VOUCHER_NUMBER_USED', 'N&uacute;mero usado');
define('DATE_CREATED', 'creado en');
define('DATE_MODIFIED', 'cambiado en');
define('TEXT_HEADING_NEW_COUPON', 'Crear un nuevo cup&oacute;n');
define('TEXT_NEW_INTRO', 'Por favor, proporcione la siguiente informaci&oacute;n para el nuevo cup&oacute;n.<br />');

define('COUPON_NAME_HELP', 'Una abreviatura para el cup&oacute;n');
define('COUPON_AMOUNT_HELP', 'Introduzca el descuento para este cup&oacute;n aqu&iacute;. Una cantidad fija o un porcentaje de descuento como el 10%.');
define('COUPON_CODE_HELP', 'Aqu&iacute; puedes introducir tu propio c&oacute;digo (m&aacute;ximo 16 caracteres). Si deja el campo en blanco, este c&oacute;digo se generar&aacute; autom&aacute;ticamente.');
define('COUPON_STARTDATE_HELP', 'La fecha a partir de la cual el cup&oacute;n es v&aacute;lido.<br>');
define('COUPON_FINISHDATE_HELP', 'La fecha de vencimiento del cup&oacute;n.<br>');
define('COUPON_FREE_SHIP_HELP', 'Un cup&oacute;n para una entrega gratuita. <strong>Atenci&oacute;n:</strong> El valor del cup&oacute;n es <b>no</b> al otro lado. El valor m&iacute;nimo del pedido sigue siendo v&aacute;lido.');
define('COUPON_DESC_HELP', 'Descripci&oacute;n del cup&oacute;n para el cliente');
define('COUPON_MIN_ORDER_HELP', 'Valor m&iacute;nimo de pedido a partir del cual este cup&oacute;n es v&aacute;lido');
define('COUPON_USES_COUPON_HELP', 'Introduzca aqu&iacute; la frecuencia con la que este cup&oacute;n puede ser canjeado. Deje el campo en blanco, entonces el uso es ilimitado.');
define('COUPON_USES_USER_HELP', 'Introduzca aqu&iacute; la frecuencia con la que un cliente puede canjear este cup&oacute;n. Deje el campo en blanco, entonces el uso es ilimitado.');
define('COUPON_PRODUCTS_HELP', 'Una lista separada por comas de los art&iacute;culos para los que este cup&oacute;n es v&aacute;lido. Un campo vac&iacute;o significa que no hay restricciones.');
define('COUPON_CATEGORIES_HELP', 'Una lista separada por comas de las categor&iacute;as de identificaci&oacute;n para las que este cup&oacute;n es v&aacute;lido. Un campo vac&iacute;o significa que no hay restricciones.');
define('COUPON_CUSTOMERS_HELP', 'Elija los grupos de clientes v&aacute;lidos para este cup&oacute;n.');

define('COUPON_ID', 'cID');
define('BUTTON_DELETE_NO_CONFIRM', 'empezar sin provocar');
define('TEXT_NONE', 'ninguna restricci&oacute;n');
define('TEXT_COUPON_DELETE', 'Loschen');
define('TEXT_COUPON_STATUS', 'Estado');
define('TEXT_COUPON_DETAILS', 'Datos de los cupones');
define('TEXT_COUPON_EMAIL', 'env&iacute;o de correo electr&oacute;nico');
define('TEXT_COUPON_OVERVIEW', 'Visi&oacute;n general');
define('TEXT_COUPON_EMAIL_PREVIEW', 'Confirmaci&oacute;n');
define('TEXT_COUPON_MINORDER', 'Valor m&iacute;nimo del pedido');
define('TEXT_VIEW', 'Vista de lista');
define('TEXT_VIEW_SHORT', 'Pantalla');
//BOF - web28 - 2011-04-13 - ADD Coupon message infos
define('COUPON_MINORDER_INFO', "\nMindestbestellwert: ");
define('COUPON_RESTRICT_INFO', "\nEste cup&oacute;n s&oacute;lo es v&aacute;lido para ciertos art&iacute;culos!");
define('COUPON_INFO', "\nCouponwert: ");
define('COUPON_FREE_SHIPPING', 'Valor m&iacute;nimo del pedido');
define('COUPON_LINK_TEXT', '\n\nDetalles');
define('COUPON_CATEGORIES_RESTRICT', '\nV&aacute;lido para estas categor&iacute;as');
define('COUPON_PRODUCTS_RESTRICT', '\nV&aacute;lido para estos art&iacute;culos');
define('COUPON_NO_RESTRICT', '\nV&aacute;lido para todos los art&iacute;culos');
//EOF - web28 - 2011-04-13 - ADD Coupon message infos

//BOF - web28 - 2011-07-05 - ADD error message
define('ERROR_NO_COUPON_NAME', 'FEHLER: Kein Nombre de cup&oacute;n ');
define('ERROR_NO_COUPON_AMOUNT', 'Kein Couponwert');
//EOF - web28 - 2011-07-05 - ADD error message

define('COUPON_DATE_START_TT', 'Comienza a las 00:00:00');
define('COUPON_DATE_END_TT', 'Termina a medianoche (23:59:59)');
define('ERROR_COUPON_DATE', 'La fecha final es posterior a la fecha de inicio.');
define('TEXT_OT_COUPON_STATUS_INFO', 'El m&oacute;dulo de cupones (ot_coupon) todav&iacute;a tiene que ser instalado (M&oacute;dulo -> <a href="'.xtc_href_link('modules.php','set=ordertotal').'">Total de la orden</a>)');

?>