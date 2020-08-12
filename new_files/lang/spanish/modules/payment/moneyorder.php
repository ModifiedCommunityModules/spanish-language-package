<?php
/* -----------------------------------------------------------------------------------------
   $Id: moneyorder.php 12038 2019-07-30 10:00:53Z GTB $   

   XT-Commerce - community made shopping
   http://www.xt-commerce.com

   Copyright (c) 2003 XT-Commerce
   -----------------------------------------------------------------------------------------
   based on: 
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(moneyorder.php,v 1.8 2003/02/16); www.oscommerce.com 
   (c) 2003	 nextcommerce (moneyorder.php,v 1.4 2003/08/13); www.nextcommerce.org

   Released under the GNU General Public License 
   ---------------------------------------------------------------------------------------*/

  define('MODULE_PAYMENT_MONEYORDER_TEXT_TITLE', 'Cheque/Giro postal');
  define('MODULE_PAYMENT_MONEYORDER_TEXT_DESCRIPTION', 'Haga el pago a nombre de:&nbsp;' . (defined('MODULE_PAYMENT_MONEYORDER_PAYTO') ? nl2br(MODULE_PAYMENT_MONEYORDER_PAYTO) : '') . '<br />Prop&oacute;sito del pago: %s<br /><br />Enviar a:<br /><br />' . nl2br(STORE_OWNER) . '<br /><br />' . '&iexcl;Su pedido no se enviar&aacute; hasta que recibamos el pago!');
  define('MODULE_PAYMENT_MONEYORDER_TEXT_EMAIL_FOOTER', "Haga el pago a nombre de: ". (defined('MODULE_PAYMENT_MONEYORDER_PAYTO') ? MODULE_PAYMENT_MONEYORDER_PAYTO : '') . "\nProp&oacute;sito del pago: %s\n\nEnviar a:\n" . STORE_OWNER . "\n\n" . 'Su pedido no se enviar&aacute; hasta que recibamos el pago');
  if (defined('MODULE_PAYMENT_MONEYORDER_SUCCESS') && MODULE_PAYMENT_MONEYORDER_SUCCESS == 'True') {
    define('MODULE_PAYMENT_MONEYORDER_TEXT_INFO', 'Enviamos su pedido despu&eacute;s de recibir el pago. Recibir&aacute; los datos de la cuenta en el &uacute;ltimo paso del proceso de compra.');
  } else {
    define('MODULE_PAYMENT_MONEYORDER_TEXT_INFO','Enviamos su pedido despu&eacute;s de recibir el pago. Recibir&aacute; los datos de la cuenta por correo electr&oacute;nico cuando su pedido haya sido confirmado.');
  }
  define('MODULE_PAYMENT_MONEYORDER_STATUS_TITLE' , 'Habilitar el m&oacute;dulo de cheques/giros');
  define('MODULE_PAYMENT_MONEYORDER_STATUS_DESC' , '&iquest;Quiere aceptar pagos con cheque o giro postal?');
  define('MODULE_PAYMENT_MONEYORDER_ALLOWED_TITLE' , 'Zonas permitidas');
  define('MODULE_PAYMENT_MONEYORDER_ALLOWED_DESC' , 'Por favor, introduzca las zonas <b>separadas</b> a las que se les debe permitir usar este m&oacute;dulo (por ejemplo, AT,DE (d&eacute;jelas vac&iacute;as si quiere permitir todas las zonas))');
  define('MODULE_PAYMENT_MONEYORDER_PAYTO_TITLE' , 'Hacerlo pagable a:');
  define('MODULE_PAYMENT_MONEYORDER_PAYTO_DESC' , '&iquest;A qui&eacute;n se deben hacer los pagos?');
  define('MODULE_PAYMENT_MONEYORDER_SORT_ORDER_TITLE' , 'Ordenar el orden de exhibici&oacute;n.');
  define('MODULE_PAYMENT_MONEYORDER_SORT_ORDER_DESC' , 'Ordenar el orden de exhibici&oacute;n. El m&aacute;s bajo se muestra primero.');
  define('MODULE_PAYMENT_MONEYORDER_ZONE_TITLE' , 'Zona de pago');
  define('MODULE_PAYMENT_MONEYORDER_ZONE_DESC' , 'Si se selecciona una zona, s&oacute;lo se debe habilitar este m&eacute;todo de pago para esa zona.');
  define('MODULE_PAYMENT_MONEYORDER_ORDER_STATUS_ID_TITLE' , 'Establecer el estado de la orden');
  define('MODULE_PAYMENT_MONEYORDER_ORDER_STATUS_ID_DESC' , 'Ponga el estado de los pedidos realizados con este m&oacute;dulo de pago a este valor');
  define('MODULE_PAYMENT_MONEYORDER_SUCCESS_TITLE' , 'Mostrar los datos bancarios');
  define('MODULE_PAYMENT_MONEYORDER_SUCCESS_DESC' , '&iquest;Mostrar los datos bancarios sobre el &eacute;xito de la compra?');
?>