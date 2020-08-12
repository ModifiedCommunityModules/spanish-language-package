<?php

/* -----------------------------------------------------------------------------------------
   $Id: cash.php 11578 2019-03-21 09:41:25Z GTB $

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

define('MODULE_PAYMENT_CASH_TEXT_DESCRIPTION', 'Dinero en efectivo');
define('MODULE_PAYMENT_CASH_TEXT_TITLE', 'Dinero en efectivo');
define('MODULE_PAYMENT_CASH_TEXT_INFO', '');
define('MODULE_PAYMENT_CASH_STATUS_TITLE', 'Habilitar el m&oacute;dulo de dinero en efectivo');
define('MODULE_PAYMENT_CASH_STATUS_DESC', '&iquest;Quiere aceptar dinero en efectivo como pago?');
define('MODULE_PAYMENT_CASH_ORDER_STATUS_ID_TITLE', 'Establecer el estado de la orden');
define('MODULE_PAYMENT_CASH_ORDER_STATUS_ID_DESC', 'Ponga el estado de los pedidos realizados con este m&oacute;dulo de pago a este valor');
define('MODULE_PAYMENT_CASH_SORT_ORDER_TITLE', 'Orden de visualizaci&oacute;n de la orden.');
define('MODULE_PAYMENT_CASH_SORT_ORDER_DESC', 'Ordenar el orden de exhibici&oacute;n. El m&aacute;s bajo se muestra primero.');
define('MODULE_PAYMENT_CASH_ZONE_TITLE', 'Zona de pago');
define('MODULE_PAYMENT_CASH_ZONE_DESC', 'Si se selecciona una zona, s&oacute;lo se debe habilitar este m&eacute;todo de pago para esa zona.');
define('MODULE_PAYMENT_CASH_ALLOWED_TITLE', 'Zonas permitidas');
define('MODULE_PAYMENT_CASH_ALLOWED_DESC', 'Por favor, introduzca las zonas <b>separadas</b> a las que se les debe permitir usar este m&oacute;dulo (por ejemplo, AT,DE (d&eacute;jelas vac&iacute;as si quiere permitir todas las zonas))');

define('MODULE_PAYMENT_CASH_TEXT_EMAIL_FOOTER', 'Usted paga por el pedido al recogerlo.');
?>