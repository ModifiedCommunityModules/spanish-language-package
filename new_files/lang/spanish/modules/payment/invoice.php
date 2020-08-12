<?php
/* -----------------------------------------------------------------------------------------
   $Id: invoice.php 1101 2005-07-24 14:51:13Z mz $   

   XT-Commerce - community made shopping
   http://www.xt-commerce.com

   Copyright (c) 2003 XT-Commerce
   -----------------------------------------------------------------------------------------
   based on:
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(cod.php,v 1.28 2003/02/14); www.oscommerce.com
   (c) 2003	 nextcommerce (invoice.php,v 1.4 2003/08/13); www.nextcommerce.org

   Released under the GNU General Public License
   ---------------------------------------------------------------------------------------*/

define('MODULE_PAYMENT_INVOICE_TEXT_DESCRIPTION', 'Factura');
define('MODULE_PAYMENT_INVOICE_TEXT_TITLE', 'Factura');
define('MODULE_PAYMENT_INVOICE_TEXT_INFO','');
define('MODULE_PAYMENT_INVOICE_STATUS_TITLE' , 'Habilitar el m&oacute;dulo de facturas');
define('MODULE_PAYMENT_INVOICE_STATUS_DESC' , '&iquest;Quiere aceptar las facturas como pagos?');
define('MODULE_PAYMENT_INVOICE_ORDER_STATUS_ID_TITLE' , 'Establecer el estado de la orden');
define('MODULE_PAYMENT_INVOICE_ORDER_STATUS_ID_DESC' , 'Ponga el estado de los pedidos realizados con este m&oacute;dulo de pago a este valor.');
define('MODULE_PAYMENT_INVOICE_SORT_ORDER_TITLE' , 'Ordenar el orden de exhibici&oacute;n.');
define('MODULE_PAYMENT_INVOICE_SORT_ORDER_DESC' , 'Ordenar el orden de exhibici&oacute;n. El m&aacute;s bajo se muestra primero.');
define('MODULE_PAYMENT_INVOICE_ZONE_TITLE' , 'Zona de pago');
define('MODULE_PAYMENT_INVOICE_ZONE_DESC' , 'Si se selecciona una zona, s&oacute;lo se debe habilitar este m&eacute;todo de pago para esa zona.');
define('MODULE_PAYMENT_INVOICE_ALLOWED_TITLE' , 'Zonas permitidas');
define('MODULE_PAYMENT_INVOICE_ALLOWED_DESC' , 'Por favor, introduzca las zonas por separado que deben ser permitidas para utilizar este m&oacute;dulo (por ejemplo, AT, DE (deje vac&iacute;o si quiere permitir todas las zonas))');
define('MODULE_PAYMENT_INVOICE_MIN_ORDER_TITLE' , '&oacute;rdenes m&iacute;nimas');
define('MODULE_PAYMENT_INVOICE_MIN_ORDER_DESC' , 'Pedidos m&iacute;nimos para que un cliente pueda ver este m&eacute;todo de pago.');
define('MODULE_PAYMENT_INVOICE_MIN_ORDER_STATUS_ID_TITLE' , 'Estado de la orden para el c&aacute;lculo');
define('MODULE_PAYMENT_INVOICE_MIN_ORDER_STATUS_ID_DESC' , 'Seleccione el estado de las &oacute;rdenes de compra aqu&iacute;, que debe ser considerado para el n&uacute;mero introducido en "Pedidos M&iacute;nimos".');
define('MODULE_PAYMENT_INVOICE_MAX_AMOUNT_TITLE' , 'Cantidad m&aacute;xima');
define('MODULE_PAYMENT_INVOICE_MAX_AMOUNT_DESC' , 'Por favor, introduzca la cantidad m&aacute;xima de pago por factura.');
?>