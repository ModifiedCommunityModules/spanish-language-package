<?php
/* -----------------------------------------------------------------------------------------
   $Id: ot_coupon.php 2096 2011-08-15 15:42:57Z Tomcraft1980 $

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   -----------------------------------------------------------------------------------------
   based on:
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(t_coupon.php,v 1.1.2.2 2003/05/15); www.oscommerce.com
   (c) 2006 XT-Commerce (ot_coupon.php 899 2005-04-29)

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

  define('MODULE_ORDER_TOTAL_COUPON_TITLE', 'Cupones Rabatt');
  define('MODULE_ORDER_TOTAL_COUPON_HEADER', 'Vales / Cupones de descuento');
  define('MODULE_ORDER_TOTAL_COUPON_DESCRIPTION', 'Cupones Rabatt');
  define('SHIPPING_NOT_INCLUDED', ' [El env&iacute;o no est&aacute; incluido]');
  define('TAX_NOT_INCLUDED', ' [IVA no incluido]');
  define('MODULE_ORDER_TOTAL_COUPON_USER_PROMPT', '');
  define('ERROR_NO_INVALID_REDEEM_COUPON', 'C&oacute;digo del vale inv&aacute;lido');
  //BOF - DokuMan - 2010-08-31 - constants already defined in german.php
  //define('ERROR_INVALID_STARTDATE_COUPON', 'Dieser Gutschein ist noch nicht verf&uuml;gbar');
  //define('ERROR_INVALID_FINISDATE_COUPON', 'Dieser Gutschein ist nicht mehr g&uuml;ltig');
  //define('ERROR_INVALID_USES_COUPON', 'Dieser Gutschein kann nur ');
  //define('TIMES', ' mal benutzt werden.');
  //define('ERROR_INVALID_USES_USER_COUPON', 'Die maximale Nutzung dieses Gutscheines wurde erreicht.');
  //define('REDEEMED_COUPON', 'ein Gutschein &uuml;ber ');
  //EOF - DokuMan - 2010-08-31 - constants already defined in german.php
  define('REDEEMED_MIN_ORDER', 'para las mercanc&iacute;as de m&aacute;s de ');
  define('REDEEMED_RESTRICTIONS', ' [Art&iacute;culo / Categor&iacute;a Restricciones]');
  define('TEXT_ENTER_COUPON_CODE', 'Introduzca el c&oacute;digo del vale aqu&iacute; &nbsp;&nbsp;');
  
  define('MODULE_ORDER_TOTAL_COUPON_STATUS_TITLE', 'Valor de la pantalla');
  define('MODULE_ORDER_TOTAL_COUPON_STATUS_DESC', '&iquest;Le gustar&iacute;a mostrar el valor del cup&oacute;n de descuento?');
  define('MODULE_ORDER_TOTAL_COUPON_SORT_ORDER_TITLE', 'Orden de clasificaci&oacute;n');
  define('MODULE_ORDER_TOTAL_COUPON_SORT_ORDER_DESC', 'Secuencia de visualizaci&oacute;n.');
  define('MODULE_ORDER_TOTAL_COUPON_INC_SHIPPING_TITLE', 'Incluyendo los gastos de env&iacute;o');
  define('MODULE_ORDER_TOTAL_COUPON_INC_SHIPPING_DESC', 'A&ntilde;adir los gastos de env&iacute;o al valor de las mercanc&iacute;as');
  define('MODULE_ORDER_TOTAL_COUPON_INC_TAX_TITLE', 'Incluyendo el IVA');
  define('MODULE_ORDER_TOTAL_COUPON_INC_TAX_DESC', 'Permitir el IVA sobre el valor de los bienes');
  define('MODULE_ORDER_TOTAL_COUPON_CALC_TAX_TITLE', 'Recalcular el IVA');
  define('MODULE_ORDER_TOTAL_COUPON_CALC_TAX_DESC', 'Recalcular el IVA');
  define('MODULE_ORDER_TOTAL_COUPON_TAX_CLASS_TITLE', 'MwSt.-Satz');
  define('MODULE_ORDER_TOTAL_COUPON_TAX_CLASS_DESC', 'El siguiente IVA Utilice la tasa si utiliza el cup&oacute;n de descuento como cr&eacute;dito.');
  //BOF - web28 - 2010-06-20 - no discount for special offers
  define('MODULE_ORDER_TOTAL_COUPON_SPECIAL_PRICES_TITLE', 'Descuento en ofertas especiales');
  define('MODULE_ORDER_TOTAL_COUPON_SPECIAL_PRICES_DESC', 'Permitir el descuento en ofertas especiales');
  //EOF - web28 - 2010-06-20 - no discount for special offers
?>