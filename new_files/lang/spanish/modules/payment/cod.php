<?php
/* -----------------------------------------------------------------------------------------
   $Id: cod.php 11649 2019-03-28 14:36:34Z GTB $   

   XT-Commerce - community made shopping
   http://www.xt-commerce.com

   Copyright (c) 2003 XT-Commerce
   -----------------------------------------------------------------------------------------
   based on: 
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(cod.php,v 1.7 2002/04/17); www.oscommerce.com 
   (c) 2003	 nextcommerce (cod.php,v 1.5 2003/08/13); www.nextcommerce.org

   Released under the GNU General Public License 
   ---------------------------------------------------------------------------------------*/

define('MODULE_PAYMENT_COD_TEXT_TITLE', 'Contra reembolso');
define('MODULE_PAYMENT_COD_TEXT_DESCRIPTION', 'Pago mediante pago contra reembolso');
define('MODULE_PAYMENT_COD_TEXT_INFO','Por favor, tenga en cuenta que hay que pagar 2 euros adicionales por la entrega en el lugar de la entrega.');
define('MODULE_PAYMENT_COD_ZONE_TITLE' , 'Zona de pago');
define('MODULE_PAYMENT_COD_ZONE_DESC' , 'Si se selecciona una zona, s&oacute;lo se debe habilitar este m&eacute;todo de pago para esa zona.');
define('MODULE_PAYMENT_COD_ALLOWED_TITLE' , 'Zonas permitidas');
define('MODULE_PAYMENT_COD_ALLOWED_DESC' , 'Por favor, introduzca las zonas <b>por separado</b> que deben ser permitidas para utilizar este m&oacute;dulo (por ejemplo, AT, DE (deje vac&iacute;o si quiere permitir todas las zonas))');
define('MODULE_PAYMENT_COD_STATUS_TITLE' , 'Habilitar el m&oacute;dulo de pago contra reembolso');
define('MODULE_PAYMENT_COD_STATUS_DESC' , '&iquest;Quiere aceptar los pagos de Cash On Delevery?');
define('MODULE_PAYMENT_COD_SORT_ORDER_TITLE' , 'Orden de visualizaci&oacute;n de la orden');
define('MODULE_PAYMENT_COD_SORT_ORDER_DESC' , 'Ordenar el orden de exhibici&oacute;n. El m&aacute;s bajo se muestra primero.');
define('MODULE_PAYMENT_COD_ORDER_STATUS_ID_TITLE' , 'Establecer el estado de la orden');
define('MODULE_PAYMENT_COD_ORDER_STATUS_ID_DESC' , 'Ponga el estado de los pedidos realizados con este m&oacute;dulo de pago a este valor');
define('MODULE_PAYMENT_COD_LIMIT_ALLOWED_TITLE', 'Cantidad m&aacute;xima');
define('MODULE_PAYMENT_COD_LIMIT_ALLOWED_DESC', '&iquest;De qu&eacute; cantidad no se permitir&aacute; el bacalao?<br />El valor introducido se comparar&aacute; con el subtotal que se redondear&aacute;.<br />Esto significa que s&oacute;lo se tendr&aacute; en cuenta el valor de la mercanc&iacute;a pura, sin gastos de env&iacute;o y sin posibles tasas adicionales.');
define('MODULE_PAYMENT_COD_DISPLAY_INFO_TITLE', 'Mostrar en la caja');
define('MODULE_PAYMENT_COD_DISPLAY_INFO_DESC', '&iquest;Despachar una nota sobre los costos adicionales en la caja?');
define('MODULE_PAYMENT_COD_DISPLAY_INFO_TEXT', 'Por favor, tenga en cuenta que se debe pagar una cuota adicional de 2 euros por la entrega en el lugar de la entrega.<br/>');
?>