<?php
/* -----------------------------------------------------------------------------------------
   $Id: ot_gv.php 899 2005-04-29 02:40:57Z hhgag $

   XT-Commerce - community made shopping
   http://www.xt-commerce.com

   Copyright (c) 2003 XT-Commerce
   -----------------------------------------------------------------------------------------
   based on:
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(ot_gv.php,v 1.1.2.1 2003/05/15); www.oscommerce.com

   Released under the GNU General Public License
   -----------------------------------------------------------------------------------------
   Third Party contributions:

   Credit Class/Gift Vouchers/Discount Coupons (Version 5.10)
   http://www.oscommerce.com/community/contributions,282
   Copyright (c) Strider | Strider@oscworks.com
   Copyright (c  Nick Stanko of UkiDev.com, nick@ukidev.com
   Copyright (c) Andre ambidex@gmx.net
   Copyright (c) 2001,2002 Ian C Wilson http://www.phesis.org

   Released under the GNU General Public License
   ---------------------------------------------------------------------------------------*/

  define('MODULE_ORDER_TOTAL_GV_TITLE', 'Vales de regalo');
  define('MODULE_ORDER_TOTAL_GV_HEADER', 'Vales de regalo');
  define('MODULE_ORDER_TOTAL_GV_DESCRIPTION', 'Vales de descuento para las pr&oacute;ximas compras');
  define('SHIPPING_NOT_INCLUDED', ' [Gastos de env&iacute;o no incluido]');
  define('TAX_NOT_INCLUDED', ' [IVA no incluido]');
  define('MODULE_ORDER_TOTAL_GV_USER_PROMPT', 'Selecciona la casilla si quieres usar su cr&eacute;dito para descontar en factura');
  define('TEXT_ENTER_GV_CODE', 'Por favor introduce aqui el c&oacute;digo del vale;');

  define('MODULE_ORDER_TOTAL_GV_STATUS_TITLE', 'Mostrar valor');
  define('MODULE_ORDER_TOTAL_GV_STATUS_DESC', '&iquest;Quieres mostrar el valor del vale de descuento?');
  define('MODULE_ORDER_TOTAL_GV_SORT_ORDER_TITLE', 'Orden de clasificaci&oacute;n');
  define('MODULE_ORDER_TOTAL_GV_SORT_ORDER_DESC', 'Orden de visualizaci&oacute;n');
  define('MODULE_ORDER_TOTAL_GV_QUEUE_TITLE', 'Listado de confirmaci&oacute;n');
  define('MODULE_ORDER_TOTAL_GV_QUEUE_DESC', '&iquest;Quieres que los vales de descuento para regalo, antes de enviarlo sean verificados manualmente?');
  define('MODULE_ORDER_TOTAL_GV_INC_SHIPPING_TITLE', 'Gastos de env&iacute;o incluidos');
  define('MODULE_ORDER_TOTAL_GV_INC_SHIPPING_DESC', 'Imputar gastos de env&iacute;o al valor de la mercanc&iacute;a');
  define('MODULE_ORDER_TOTAL_GV_INC_TAX_TITLE', 'Impuesto incluido');
  define('MODULE_ORDER_TOTAL_GV_INC_TAX_DESC', 'Imputar impuesto al valor de la mercanc&iacute;a.');
  define('MODULE_ORDER_TOTAL_GV_CALC_TAX_TITLE', 'Re-calcular  IVA');
  define('MODULE_ORDER_TOTAL_GV_CALC_TAX_DESC', '.Re-calcular  IVA');
  define('MODULE_ORDER_TOTAL_GV_TAX_CLASS_TITLE', 'R&eacute;gimen de IVA');
  define('MODULE_ORDER_TOTAL_GV_TAX_CLASS_DESC', 'Usar este tipo de IVA cuando se usa el Vale de descuento como un abono.');
  define('MODULE_ORDER_TOTAL_GV_CREDIT_TAX_TITLE', 'Saldo incluye IVA.');
  define('MODULE_ORDER_TOTAL_GV_CREDIT_TAX_DESC', 'Imputar IVA al valor del Vale de descuento');
    define('MODULE_ORDER_TOTAL_GV_UNALLOWED_PAYMENT_TITLE', 'M&oacute;dulos de pago no permitidos');
  define('MODULE_ORDER_TOTAL_GV_UNALLOWED_PAYMENT_DESC', '<strong>NO SE PERMITE</strong> m&oacute;dulos de pago para productos de regalo.');
?>