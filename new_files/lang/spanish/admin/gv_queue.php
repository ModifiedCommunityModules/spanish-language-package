<?php
/* -----------------------------------------------------------------------------------------
   $Id: gv_queue.php 899 2005-04-29 02:40:57Z hhgag $

   XT-Commerce - community made shopping
   http://www.xt-commerce.com

   Copyright (c) 2003 XT-Commerce
   -----------------------------------------------------------------------------------------
   based on:
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(gv_queue.php,v 1.2.2.1 2003/04/27); www.oscommerce.com

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


define('HEADING_TITLE', 'Cola de liberaci&oacute;n de vales');

define('TABLE_HEADING_CUSTOMERS', 'Clientes');
define('TABLE_HEADING_ORDERS_ID', 'Orden no.');
define('TABLE_HEADING_VOUCHER_VALUE', 'Valor del cup&oacute;n');
define('TABLE_HEADING_DATE_PURCHASED', 'Fecha del pedido');
define('TABLE_HEADING_ACTION', 'Acci&oacute;n');

define('TEXT_REDEEM_COUPON_MESSAGE_HEADER', 'Usted ha pedido recientemente un vale en nuestra tienda online, ' . "\n"
                                          . 'que no se activ&oacute; inmediatamente por razones de seguridad.' . "\n"
                                          . 'Este cr&eacute;dito est&aacute; ahora a su disposici&oacute;n. Ahora tambi&eacute;n puedes visitar nuestra tienda online' . "\n"
                                          . 'y enviar una cantidad parcial de su regalo por correo electr&oacute;nico a alguien' . "\n\n");

define('TEXT_REDEEM_COUPON_MESSAGE_AMOUNT', 'El vale que pidi&oacute; tiene un valor de %s' . "\n\n");

define('TEXT_REDEEM_COUPON_MESSAGE_BODY', '');
define('TEXT_REDEEM_COUPON_MESSAGE_FOOTER', '');
define('TEXT_REDEEM_COUPON_SUBJECT', 'Comprar un bono');
?>