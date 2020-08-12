<?php
/* --------------------------------------------------------------
   $Id: customers_status.php 1062 2005-07-21 19:57:29Z gwinger $   

   XT-Commerce - community made shopping
   http://www.xt-commerce.com

   Copyright (c) 2003 XT-Commerce
   --------------------------------------------------------------
   based on: 
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(customers.php,v 1.76 2003/05/04); www.oscommerce.com 
   (c) 2003	 nextcommerce (customers_status.php,v 1.12 2003/08/14); www.nextcommerce.org

   Released under the GNU General Public License 
   --------------------------------------------------------------*/

define('HEADING_TITLE', 'Grupos/Tarifas');

define('ENTRY_CUSTOMERS_FSK18','&iquest;Prohibir compras de productos para mayores18?');
define('ENTRY_CUSTOMERS_FSK18_DISPLAY','&iquest;Mostrar art&iacute;culos mayores18?');
define('ENTRY_CUSTOMERS_STATUS_ADD_TAX','Mostrar impuestos en la factura');
define('ENTRY_CUSTOMERS_STATUS_MIN_ORDER','Pedido m&iacute;nimo:');
define('ENTRY_CUSTOMERS_STATUS_MAX_ORDER','Pedido m&aacute;ximo:');
define('ENTRY_CUSTOMERS_STATUS_BT_PERMISSION','Giro bancario');
define('ENTRY_CUSTOMERS_STATUS_CC_PERMISSION','Tarjeta de cr&eacute;dito');
define('ENTRY_CUSTOMERS_STATUS_COD_PERMISSION','Contra reembolso');
define('ENTRY_CUSTOMERS_STATUS_DISCOUNT_ATTRIBUTES','Descuento');
define('ENTRY_CUSTOMERS_STATUS_PAYMENT_UNALLOWED','Introduce formas de pago no permitidas');
define('ENTRY_CUSTOMERS_STATUS_PUBLIC','P&uacute;blico');
define('ENTRY_CUSTOMERS_STATUS_SHIPPING_UNALLOWED','Introduce formas de env&iacute;os no permitidos');
define('ENTRY_CUSTOMERS_STATUS_SHOW_PRICE','Precio');
define('ENTRY_CUSTOMERS_STATUS_SHOW_PRICE_TAX','I.V.A. incl.');
define('ENTRY_CUSTOMERS_STATUS_WRITE_REVIEWS','&iquest;Permitir escribir opiniones sobre el producto?');
define('ENTRY_CUSTOMERS_STATUS_READ_REVIEWS','&iquest;Permitir leer opiniones?');
define('ENTRY_CUSTOMERS_STATUS_REVIEWS_STATUS','Produktrezensionen automatisch freischalten?');
define('ENTRY_GRADUATED_PRICES','Precios escalonados');
define('ENTRY_NO','No');
define('ENTRY_OT_XMEMBER', '&iquest;Descuento sobre el valor total del pedido? :');
define('ENTRY_YES','Si');

define('ERROR_REMOVE_DEFAULT_CUSTOMER_STATUS', 'Error: Este grupo no se puede borrar (esta marcado como grupo por defecto). Bitte legen Sie zuerst eine andere Standard Kundengruppe an, und versuchen Sie es erneut.');
define('ERROR_REMOVE_DEFAULT_CUSTOMERS_STATUS','ACHTUNG! Eine Standard Kundengruppe kann nicht gel&ouml;scht werden');
define('ERROR_STATUS_USED_IN_CUSTOMERS', 'Error: Diese Kundengruppe ist zur Zeit bei Kunden in Verwendung.');
define('ERROR_STATUS_USED_IN_HISTORY', 'Error: Diese Kundengruppe wird zur Zeit in der Bestell&uuml;bersicht verwendet.');

define('TABLE_HEADING_ACTION','Aktion');
define('TABLE_HEADING_CUSTOMERS_GRADUATED','Precio graduado');
define('TABLE_HEADING_CUSTOMERS_STATUS','Grupo de clientes');
define('TABLE_HEADING_CUSTOMERS_UNALLOW','m&eacute;todos de pago no autorizados');
define('TABLE_HEADING_CUSTOMERS_UNALLOW_SHIPPING','tipos de env&iacute;o no permitidos');
define('TABLE_HEADING_DISCOUNT','Descuento');
define('TABLE_HEADING_TAX_PRICE','Precio / IVA');

define('TAX_NO','excl.');
define('TAX_YES','incl.');

define('TEXT_DISPLAY_NUMBER_OF_CUSTOMERS_STATUS', 'Grupos de clientes existentes:');

define('TEXT_INFO_CUSTOMERS_FSK18_DISPLAY_INTRO','<strong>FSK18 Art&iacute;culo</strong>');
define('TEXT_INFO_CUSTOMERS_FSK18_INTRO','<strong>FSK18 Bloqueo</strong>');
define('TEXT_INFO_CUSTOMERS_STATUS_ADD_TAX_INTRO','<strong>Si el precio incluye el impuesto = fijado en "No"</strong>');
define('TEXT_INFO_CUSTOMERS_STATUS_MIN_ORDER_INTRO','<strong>Introduzca un valor m&iacute;nimo de pedido o deje este campo vac&iacute;o.</strong>');
define('TEXT_INFO_CUSTOMERS_STATUS_MAX_ORDER_INTRO','<strong>Introduzca un valor de pedido m&aacute;ximo o deje este campo vac&iacute;o.</strong>');
define('TEXT_INFO_CUSTOMERS_STATUS_BT_PERMISSION_INTRO', '<strong>&iquest;Desea permitir que este grupo de clientes pague por domiciliaci&oacute;n bancaria?</strong>');
define('TEXT_INFO_CUSTOMERS_STATUS_CC_PERMISSION_INTRO', '<strong>&iquest;Desea permitir que este grupo de clientes pague con tarjeta de cr&eacute;dito?</strong>');
define('TEXT_INFO_CUSTOMERS_STATUS_COD_PERMISSION_INTRO', '<strong>&iquest;Le gustar&iacute;a permitir a este grupo de clientes pagar contra reembolso?</strong>');
define('TEXT_INFO_CUSTOMERS_STATUS_DISCOUNT_ATTRIBUTES_INTRO','<strong>Descuento en los atributos del art&iacute;culo</strong><br />(Aplicar el m&aacute;ximo % de descuento a un art&iacute;culo)');
define('TEXT_INFO_CUSTOMERS_STATUS_DISCOUNT_OT_XMEMBER_INTRO','<strong>Descuento en el pedido total</strong>');
define('TEXT_INFO_CUSTOMERS_STATUS_DISCOUNT_PRICE', 'Descuento (0 a 100%):');
define('TEXT_INFO_CUSTOMERS_STATUS_DISCOUNT_PRICE_INTRO', '<strong>Descuento m&aacute;ximo en los productos (dependiendo del descuento establecido en el producto).</strong>');
define('TEXT_INFO_CUSTOMERS_STATUS_GRADUATED_PRICES_INTRO','<strong>Precios graduados</strong>');
define('TEXT_INFO_CUSTOMERS_STATUS_IMAGE', '<strong>Foto del grupo de clientes:</strong>');
define('TEXT_INFO_CUSTOMERS_STATUS_NAME','<strong>Nombre del grupo</strong>');
define('TEXT_INFO_CUSTOMERS_STATUS_PAYMENT_UNALLOWED_INTRO','<strong>M&eacute;todos de pago no permitidos</strong>');
define('TEXT_INFO_CUSTOMERS_STATUS_PUBLIC_INTRO','<strong>Grupo P&uacute;blico ?</strong>');
define('TEXT_INFO_CUSTOMERS_STATUS_SHIPPING_UNALLOWED_INTRO','<strong>Tipos de env&iacute;o no permitidos</strong>');
define('TEXT_INFO_CUSTOMERS_STATUS_SHOW_PRICE_INTRO','<strong>Exhibici&oacute;n de precios en la tienda</strong>');
define('TEXT_INFO_CUSTOMERS_STATUS_SHOW_PRICE_TAX_INTRO', '<strong>&iquest;Le gustar&iacute;a ver los precios con o sin impuestos?</strong>');
define('TEXT_INFO_CUSTOMERS_STATUS_WRITE_REVIEWS_INTRO','<strong>Escribir rese&ntilde;as de productos</strong>');
define('TEXT_INFO_CUSTOMERS_STATUS_READ_REVIEWS_INTRO', '<strong>Lea las rese&ntilde;as de los productos</strong>');
define('TEXT_INFO_CUSTOMERS_STATUS_REVIEWS_STATUS_INTRO', '<strong>Desbloquee las revisiones del producto</strong>');

define('TEXT_INFO_DELETE_INTRO', '&iquest;Est&aacute;s seguro de que quieres deshacerte de este grupo de clientes?');
define('TEXT_INFO_EDIT_INTRO', 'Por favor, haga todos los ajustes necesarios');
define('TEXT_INFO_INSERT_INTRO', 'Por favor, cree un nuevo grupo de clientes con los ajustes deseados');

define('TEXT_INFO_HEADING_DELETE_CUSTOMERS_STATUS', 'Eliminar el grupo de clientes');
define('TEXT_INFO_HEADING_EDIT_CUSTOMERS_STATUS','Editar los datos del grupo');
define('TEXT_INFO_HEADING_NEW_CUSTOMERS_STATUS', 'Nuevo grupo de clientes');

define('TEXT_INFO_CUSTOMERS_STATUS_BASE', '<strong>Grupo de clientes de base para los precios de los art&iacute;culos</strong>');
define('ENTRY_CUSTOMERS_STATUS_BASE', 'Asume los precios del grupo de clientes del siguiente grupo de clientes. Si Selecci&oacute;n = Administraci&oacute;n, no se aplican precios al nuevo grupo de clientes.');
define('ENTRY_CUSTOMERS_STATUS_BASE_EDIT', 'Los precios del grupo de clientes del siguiente grupo de clientes. Si Selecci&oacute;n = Admin, no se tomar&aacute; ning&uacute;n precio para el grupo de clientes.<br /><span class="col-red"><strong>ATENCI&oacute;N:</strong></span> Por la presente se sobrescriben todos los precios ya existentes del grupo de clientes!');

define('TEXT_INFO_CUSTOMERS_GROUP_ADOPT_PERMISSION', '<strong>Asumir los derechos de visibilidad de otro grupo de clientes</strong>');
define('ENTRY_CUSTOMERS_GROUP_ADOPT_PERMISSION', 'Asumir los derechos de visibilidad de la categor&iacute;a, el art&iacute;culo y el contenido del siguiente grupo de clientes:');
define('CUSTOMERS_GROUP_ADOPT_PERMISSIONS', 'No asuma ning&uacute;n derecho');

define('TEXT_INFO_CUSTOMERS_STATUS_SHOW_PRICE_TAX_TOTAL', '<b>Mostrar el IVA del importe de la compra</b>');
define('ENTRY_CUSTOMERS_STATUS_SHOW_PRICE_TAX_TOTAL', 'Cantidad m&iacute;nima de compra');

define('TABLE_HEADING_CUSTOMERS_SPECIALS', 'Ofertas especiales');
define('TEXT_INFO_CUSTOMERS_STATUS_SPECIALS_INTRO', '<strong>Ofertas especiales</strong>');
define('ENTRY_CUSTOMERS_STATUS_SPECIALS', 'El grupo de clientes permite ver las ofertas especiales?');
define('CUSTOMERS_GROUP_PUBLIC','p&uacute;blico');
?>