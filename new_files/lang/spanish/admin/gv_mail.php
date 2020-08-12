<?php
/* -----------------------------------------------------------------------------------------
   $Id: gv_mail.php 899 2005-04-29 02:40:57Z hhgag $

   XT-Commerce - community made shopping
   http://www.xt-commerce.com

   Copyright (c) 2003 XT-Commerce
   -----------------------------------------------------------------------------------------
   based on:
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(gv_mail.php,v 1.5.2.2 2003/04/27); www.oscommerce.com

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

define('HEADING_TITLE', 'ENVIO DE VALES DE DESCUENTO');
define('HEADING_COUPON_TITLE', 'Env&iacute;e el cup&oacute;n a los clientes');
define('TEXT_CUSTOMER_GROUP', 'Grupo de clientes:');
define('TEXT_SELECT_CUSTOMER_GROUP', 'Grupo de clientes seleccionados');
define('TEXT_CUSTOMER', 'Cliente:');
define('TEXT_SUBJECT', 'Asunto:');
define('TEXT_FROM', 'Enviado por:');
define('TEXT_TO', 'Para E-mail:');
define('TEXT_AMOUNT', 'Valor:');
define('TEXT_MESSAGE', 'Mensaje:');
define('TEXT_SINGLE_EMAIL', '<span class="smallText">Usar este campo para poner una direcci&oacute;n E-Mail, si no, por favor use el campo '.TEXT_CUSTOMER.'</span>');
define('TEXT_SELECT_CUSTOMER', 'Seleccionar cliente');
define('TEXT_ALL_CUSTOMERS', 'Todos los clientes');
define('TEXT_NEWSLETTER_CUSTOMERS', 'A todos los abonados de bolet&iacute;n de noticias');

define('NOTICE_EMAIL_SENT_TO', 'Aviso: E-Mail a sido enviado a: %s');
define('ERROR_NO_CUSTOMER_SELECTED', 'Error: No se ha seleccionado el cliente.');
define('ERROR_NO_AMOUNT_SELECTED', 'Error: No se ha introducido el valor.');

define('TEXT_GV_WORTH', 'El valor del vale es de ');
define('TEXT_TO_REDEEM', 'Para canjear su vale, pulse el enlace m&aacute;s abajo. Por favor ap&uacute;ntense para su seguridad el c&oacute;digo del vale.');
define('TEXT_WHICH_IS', 'Su c&oacute;digo del vale es: ');
define('TEXT_IN_CASE', ' Si hubiese alg&uacute;n problema al canjear el vale.');
define('TEXT_OR_VISIT', 'visite nuestra p&aacute;gina web ');
define('TEXT_ENTER_CODE', ' y introduzca el c&oacute;digo manualmente ');

define ('TEXT_REDEEM_COUPON_MESSAGE_HEADER', 'Usted compro hace poco un vale de descuento en nuestra tienda on-line, el cual por razones de seguridad no pudo ser activado. Este vale ya est&aacute; disponible desde este momento.');
define ('TEXT_REDEEM_COUPON_MESSAGE_AMOUNT', "\n\n" . 'El valor del vale es de %s');
define ('TEXT_REDEEM_COUPON_MESSAGE_BODY', "\n\n" . 'Desde su cuenta personal, usted ya puede enviar el vale a la persona que desee.');
define ('TEXT_REDEEM_COUPON_MESSAGE_FOOTER', "\n\n");
define('COUPON_INFO', "\nCantidad del cup&oacute;n: "); 
define('COUPON_FREE_SHIPPING', 'Env&iacute;o gratuito');
define('COUPON_MINORDER_INFO', "\nOrden m&iacute;nima del cup&oacute;n: ");
define('COUPON_RESTRICT_INFO', "\nEste cup&oacute;n s&oacute;lo es v&aacute;lido para ciertos productos!"); 
?>