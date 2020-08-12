<?php
/* --------------------------------------------------------------
   $Id: create_account.php 985 2005-06-17 22:35:22Z mz $   

   XT-Commerce - community made shopping
   http://www.xt-commerce.com

   Copyright (c) 2003 XT-Commerce
   --------------------------------------------------------------
   based on: 
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(create_account.php,v 1.13 2003/05/19); www.oscommerce.com 
   (c) 2003	 nextcommerce (create_account.php,v 1.4 2003/08/14); www.nextcommerce.org

   Released under the GNU General Public License 
   --------------------------------------------------------------*/

define('NAVBAR_TITLE', 'Crear una cuenta');

define('HEADING_TITLE', 'Cuenta de cliente Admin');

define('TEXT_ORIGIN_LOGIN', '<span class="col-red"><small><b>ATENCI&oacute;N:</b></small></span> Si ya tienes una cuenta, por favor entra en ella <a href="%s"><u><b>aqu&iacute;</b></u></a> an.');

define('EMAIL_SUBJECT', 'Bienvenido a ' . STORE_NAME);
define('EMAIL_GREET_MR', 'Estimado Se&ntilde;or ' . stripslashes($HTTP_POST_VARS['lastname']) . ',' . "\n\n");
define('EMAIL_GREET_MS', 'Querida se&ntilde;ora ' . stripslashes($HTTP_POST_VARS['lastname']) . ',' . "\n\n");
define('EMAIL_GREET_NONE', 'Estimado Se&ntilde;or ' . stripslashes($HTTP_POST_VARS['firstname']) . ',' . "\n\n");
define('EMAIL_WELCOME', 'Bienvenido a <b>' . STORE_NAME . '</b>.' . "\n\n");
define('EMAIL_TEXT', 'Ahora puede usar nuestro <b>Servicio en l&iacute;nea</b> ahora. El servicio ofrece entre otras cosas:' . "\n\n" . '<li><b>Carro de la compra del cliente</b> - Cada art&iacute;culo permanece registrado hasta que se paga en la caja, o se retira el art&iacute;culo del carrito de la compra..' . "\n" . '<li><b>Libreta de direcciones</b> - Ahora podemos enviar los art&iacute;culos a la direcci&oacute;n que ha elegido. La manera perfecta de enviar un regalo de cumplea&ntilde;os.' . "\n" . '<li><b>Ordenes previas</b> - Siempre puedes comprobar tus pedidos anteriores.' . "\n" . '<li><b>Opiniones sobre los art&iacute;culos</b> - Comparta su opini&oacute;n sobre nuestros art&iacute;culos con otros clientes.' . "\n\n");
define('EMAIL_CONTACT', 'Si tiene preguntas sobre nuestro servicio de atenci&oacute;n al cliente, por favor cont&aacute;ctenos: ' . STORE_OWNER_EMAIL_ADDRESS . '.' . "\n\n");
define('EMAIL_WARNING', '<b>Atenci&oacute;n:</b> Esta direcci&oacute;n de correo electr&oacute;nico nos la dio un cliente. Si no se ha registrado, por favor env&iacute;e un e-mail a ' . STORE_OWNER_EMAIL_ADDRESS . '.' . "\n");
define('ENTRY_PAYMENT_UNALLOWED','No se permiten m&oacute;dulos de pago:');
define('ENTRY_SHIPPING_UNALLOWED','No se permiten m&oacute;dulos de env&iacute;o:');
?>