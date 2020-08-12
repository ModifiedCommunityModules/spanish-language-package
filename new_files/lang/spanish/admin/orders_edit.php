<?php
/* --------------------------------------------------------------
   $Id: orders_edit.php,v 1.0 

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   --------------------------------------------------------------
   based on: 
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(orders.php,v 1.27 2003/02/16); www.oscommerce.com 
   (c) 2003	 nextcommerce (orders.php,v 1.7 2003/08/14); www.nextcommerce.org
   (c) 2006 XT-Commerce (orders_edit.php)

   Released under the GNU General Public License 
   --------------------------------------------------------------*/

// Allgemeine Texte
define('TABLE_HEADING', 'Editar los datos del pedido');
define('TABLE_HEADING_ORDER', 'Orden No:&nbsp;');
define('TEXT_SAVE_ORDER', 'Terminar el procesamiento de la orden y recalcular la orden.&nbsp;');

define('TEXT_EDIT_ADDRESS', 'Direcci&oacute;n y datos del cliente');
define('TEXT_EDIT_PRODUCTS', 'Art&iacute;culos, opciones de art&iacute;culos y precios');
define('TEXT_EDIT_OTHER', 'Gastos de env&iacute;o, formas de pago, monedas, idiomas, sumas, IVA, descuentos, etc.');
define('TEXT_EDIT_GIFT', 'Vales y descuentos');
define('TEXT_EDIT_ADDRESS_SUCCESS', 'El cambio de direcci&oacute;n fue guardado.');

define('IMAGE_EDIT_ADDRESS', 'Editar o insertar direcciones');
define('IMAGE_EDIT_PRODUCTS', 'Editar o insertar art&iacute;culos y opciones');
define('IMAGE_EDIT_OTHER', 'Editar o insertar los gastos de env&iacute;o, pago, vales, etc.');

// Adressaenderung
define('TEXT_INVOICE_ADDRESS', 'Direcci&oacute;n del cliente');
define('TEXT_SHIPPING_ADDRESS', 'Direcci&oacute;n de env&iacute;o');
define('TEXT_BILLING_ADDRESS', 'Direcci&oacute;n de facturaci&oacute;n');

define('TEXT_COMPANY', 'Compa&ntilde;&iacute;a:');
define('TEXT_NAME', 'Nombre:');
define('TEXT_STREET', 'Calle');
define('TEXT_ZIP', 'C&oacute;DIGO POSTAL:');
define('TEXT_CITY', 'Ciudad:');
define('TEXT_COUNTRY', 'Pa&iacute;s:');
define('TEXT_CUSTOMER_GROUP', 'Grupo de clientes en el pedido');
define('TEXT_CUSTOMER_EMAIL', 'Correo electr&oacute;nico:');
define('TEXT_CUSTOMER_TELEPHONE', 'Tel&eacute;fono:');
define('TEXT_CUSTOMER_UST', 'N&uacute;mero de identificaci&oacute;n del IVA.:');
define('TEXT_CUSTOMER_CID', 'N&uacute;mero de cliente:');
define('TEXT_ORDERS_ADDRESS_EDIT_INFO', 'Tenga en cuenta que los datos introducidos aqu&iacute; s&oacute;lo se cambian en el pedido y no en la cuenta del cliente!');

// Artikelbearbeitung

define('TEXT_SMALL_NETTO', '(Net)');
define('TEXT_PRODUCT_ID', 'pID:');
define('TEXT_PRODUCTS_MODEL', 'Art.Nr:');
define('TEXT_QUANTITY', 'Cantidad:');
define('TEXT_PRODUCT', 'Art&iacute;culo:');
define('TEXT_TAX', 'IVA.:');
define('TEXT_PRICE', 'Precio:');
define('TEXT_FINAL', 'Total:');
define('TEXT_PRODUCT_SEARCH', 'B&uacute;squeda de art&iacute;culos:');

define('TEXT_PRODUCT_OPTION', 'Caracter&iacute;sticas del art&iacute;culo:');
define('TEXT_PRODUCT_OPTION_VALUE', 'Valor de la opci&oacute;n:');
define('TEXT_PRICE_PREFIX', 'prefijo de precio:');
define('TEXT_SAVE_ORDER', 'Complete el pedido y vuelva a calcular');
define('TEXT_INS', 'A&ntilde;ade:');
define('TEXT_SHIPPING', 'M&oacute;dulo de gastos de env&iacute;o');
define('TEXT_COD_COSTS', 'Pago en efectivo de los gastos de env&iacute;o');
define('TEXT_VALUE', 'Precio');
define('TEXT_DESC', 'Lechada');

// Sonstiges

define('TEXT_PAYMENT', 'M&eacute;todo de pago:');
define('TEXT_SHIPPING', 'M&eacute;todo de env&iacute;o:');
define('TEXT_LANGUAGE', 'Idioma:');
define('TEXT_CURRENCIES', 'Monedas:');
define('TEXT_ORDER_TOTAL', 'Resumen:');
define('TEXT_SAVE', 'Guardar');
define('TEXT_ACTUAL', 'Hasta la fecha: ');
define('TEXT_NEW', 'Nuevo: ');
define('TEXT_PRICE', 'Costos: ');

define('TEXT_ADD_TAX','incl. ');
define('TEXT_NO_TAX','m&aacute;s. ');

define('TEXT_ORDERS_EDIT_INFO', '<b>Notas importantes:</b><br />
Por favor, seleccione el grupo de clientes correcto para la direcci&oacute;n/datos del cliente.<br />
Si el grupo de clientes cambia, todas las partidas de la factura deben ser guardadas de nuevo!<br />
Los gastos de env&iacute;o tienen que ser cambiados manualmente!<br />
Seg&uacute;n el grupo de clientes, los gastos de env&iacute;o deben introducirse brutos o netos!<br />
');

define('TEXT_CUSTOMER_GROUP_INFO', ' Si el grupo de clientes se modifica, todas las partidas de la factura deben ser grabadas de nuevo!');

define('TEXT_ORDER_TITLE', 'T&iacute;tulo:');
define('TEXT_ORDER_VALUE', 'Valor:');
define('ERROR_INPUT_TITLE', 'No hay ninguna entrada para el t&iacute;tulo');
define('ERROR_INPUT_EMPTY', 'No hay ninguna entrada para el t&iacute;tulo y el valor');
define('ERROR_INPUT_SHIPPING_TITLE', 'A&uacute;n no se ha seleccionado ning&uacute;n m&oacute;dulo de gastos de env&iacute;o!');

// note for graduated prices
define('TEXT_ORDERS_PRODUCT_EDIT_INFO', '<b>Nota:</b> Para los precios graduados, el precio unitario debe ser ajustado manualmente!');

define('TEXT_FIRSTNAME', 'Nombre de pila:');
define('TEXT_LASTNAME', 'Apellido:');

define('TEXT_GENDER', 'Saludo:'); 
define('TEXT_MR', 'Sr'); 
define('TEXT_MRS', 'Sra'); 

define('TEXT_SAVE_CUSTOMERS_DATA', 'Guardar los datos del cliente');

define('TEXT_PRODUCTS_SEARCH_INFO', ' Nombre del art&iacute;culo o n&uacute;mero de art&iacute;culo o GTIN/EAN');
define('TEXT_PRODUCTS_STATUS', 'Estado:');
define('TEXT_PRODUCTS_IMAGE', 'Foto del art&iacute;culo:');
define('TEXT_PRODUCTS_QTY', 'Inventario:');
define('TEXT_PRODUCTS_EAN', 'GTIN/EAN:');
define('TEXT_PRODUCTS_TAX_RATE', 'Tasa de impuestos:');
define('TEXT_PRODUCTS_DATE_AVAILABLE', 'Fecha de publicaci&oacute;n:');
define('TEXT_IMAGE_NONEXISTENT', '---');
?>