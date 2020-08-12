<?php
/* -----------------------------------------------------------------------------------------
   $Id: eustandardtransfer.php 11934 2019-07-20 07:36:03Z GTB $

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   -----------------------------------------------------------------------------------------
   based on:
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(ptebanktransfer.php,v 1.4.1 2003/09/25 19:57:14); www.oscommerce.com
   (c) 2003 xtCommerce www.xt-commerce.com

   Released under the GNU General Public License
   ---------------------------------------------------------------------------------------*/

  define('MODULE_PAYMENT_EUSTANDARDTRANSFER_TEXT_TITLE', 'Transferencia bancaria est&aacute;ndar de la UE');
  define('MODULE_PAYMENT_EUSTANDARDTRANSFER_TEXT_DESCRIPTION', 
          '<br />El m&eacute;todo de pago m&aacute;s barato y sencillo dentro de la UE es la transferencia bancaria est&aacute;ndar de la UE usando el IBAN y el BIC.' .
          '<br />Por favor, utilice los siguientes detalles para transferir el valor total de su pedido:<br />' .
          (defined('MODULE_PAYMENT_EUSTANDARDTRANSFER_BANKNAM') ? '<br />Nombre del banco: ' . MODULE_PAYMENT_EUSTANDARDTRANSFER_BANKNAM : '') .
          (defined('MODULE_PAYMENT_EUSTANDARDTRANSFER_BRANCH')  ? '<br />Beneficiario: ' . MODULE_PAYMENT_EUSTANDARDTRANSFER_BRANCH : '') .
          (defined('MODULE_PAYMENT_EUSTANDARDTRANSFER_ACCNAM')  ? '<br />El c&oacute;digo del banco: ' . MODULE_PAYMENT_EUSTANDARDTRANSFER_ACCNAM : '') .
          (defined('MODULE_PAYMENT_EUSTANDARDTRANSFER_ACCNUM')  ? '<br />N&uacute;mero de cuenta..: ' . MODULE_PAYMENT_EUSTANDARDTRANSFER_ACCNUM : '') .
          (defined('MODULE_PAYMENT_EUSTANDARDTRANSFER_ACCIBAN') ? '<br />IBAN: ' . MODULE_PAYMENT_EUSTANDARDTRANSFER_ACCIBAN : '') .
          (defined('MODULE_PAYMENT_EUSTANDARDTRANSFER_BANKBIC') ? '<br />BIC/SWIFT: ' . MODULE_PAYMENT_EUSTANDARDTRANSFER_BANKBIC : '') .
          '<br />Prop&oacute;sito del pago: %s'.
          '<br /><br />Su pedido no ser&aacute; enviado hasta que recibamos su pago en la cuenta mencionada.<br />');

  if (defined('MODULE_PAYMENT_EUSTANDARDTRANSFER_SUCCESS') && MODULE_PAYMENT_EUSTANDARDTRANSFER_SUCCESS == 'True') {
    define('MODULE_PAYMENT_EUSTANDARDTRANSFER_TEXT_INFO', 'Por favor, transfiera el total de la factura a nuestra cuenta bancaria. Recibir&aacute; los datos de la cuenta en el &uacute;ltimo paso de la comprobaci&oacute;n.');
  } else {
    define('MODULE_PAYMENT_EUSTANDARDTRANSFER_TEXT_INFO', 'Por favor, transfiera el total de la factura a nuestra cuenta bancaria. Recibir&aacute; los datos de la cuenta por correo electr&oacute;nico cuando su pedido haya sido confirmado.');
  }
  define('MODULE_PAYMENT_EUSTANDARDTRANSFER_STATUS_TITLE', 'Permitir el pago por transferencia bancaria');
  define('MODULE_PAYMENT_EUSTANDARDTRANSFER_STATUS_DESC', '&iquest;Quiere aceptar pagos por transferencia bancaria?');
  
  define('MODULE_PAYMENT_EUSTANDARDTRANSFER_BRANCH_TITLE', 'Beneficiario');
  define('MODULE_PAYMENT_EUSTANDARDTRANSFER_BRANCH_DESC', 'La cuenta del beneficiario.');

  define('MODULE_PAYMENT_EUSTANDARDTRANSFER_BANKNAM_TITLE', 'Nombre del banco');
  define('MODULE_PAYMENT_EUSTANDARDTRANSFER_BANKNAM_DESC', 'El nombre completo de su banco');

  define('MODULE_PAYMENT_EUSTANDARDTRANSFER_ACCNAM_TITLE', 'El c&oacute;digo del banco');
  define('MODULE_PAYMENT_EUSTANDARDTRANSFER_ACCNAM_DESC', 'El c&oacute;digo bancario de su cuenta.');

  define('MODULE_PAYMENT_EUSTANDARDTRANSFER_ACCNUM_TITLE', 'Cuenta bancaria No.');
  define('MODULE_PAYMENT_EUSTANDARDTRANSFER_ACCNUM_DESC', 'Su n&uacute;mero de cuenta.');

  define('MODULE_PAYMENT_EUSTANDARDTRANSFER_ACCIBAN_TITLE', 'Cuenta bancaria IBAN');
  define('MODULE_PAYMENT_EUSTANDARDTRANSFER_ACCIBAN_DESC', 'Identificaci&oacute;n de cuenta internacional.<br />(pregunte a su banco si no lo sabe)');

  define('MODULE_PAYMENT_EUSTANDARDTRANSFER_BANKBIC_TITLE', 'Banco Bic');
  define('MODULE_PAYMENT_EUSTANDARDTRANSFER_BANKBIC_DESC', 'Identificaci&oacute;n bancaria internacional.<br />(pregunte a su banco si no lo sabe.)');

  define('MODULE_PAYMENT_EUSTANDARDTRANSFER_SORT_ORDER_TITLE', 'M&oacute;dulo Orden de clasificaci&oacute;n de la pantalla');
  define('MODULE_PAYMENT_EUSTANDARDTRANSFER_SORT_ORDER_DESC', 'Ordenar el orden de exhibici&oacute;n. El m&aacute;s bajo se muestra primero.');

  define('MODULE_PAYMENT_EUSTANDARDTRANSFER_ALLOWED_TITLE', 'Zonas permitidas');
  define('MODULE_PAYMENT_EUSTANDARDTRANSFER_ALLOWED_DESC', 'Por favor, introduzca las zonas <b>por separado</b> en las que se debe permitir el uso de este m&oacute;dulo. (e. g. AT,DE (d&eacute;jelo vac&iacute;o si quiere permitir todas las zonas))');

  define('MODULE_PAYMENT_EUSTANDARDTRANSFER_ZONE_TITLE', 'Zona de pago');
  define('MODULE_PAYMENT_EUSTANDARDTRANSFER_ZONE_DESC', 'Si se selecciona una zona, s&oacute;lo se debe habilitar este m&eacute;todo de pago para esa zona.');
  
  define('MODULE_PAYMENT_EUSTANDARDTRANSFER_ORDER_STATUS_ID_TITLE', 'Establecer el estado de la orden');
  define('MODULE_PAYMENT_EUSTANDARDTRANSFER_ORDER_STATUS_ID_DESC', 'Ponga el estado de los pedidos realizados con este m&oacute;dulo de pago a este valor.');

  define('MODULE_PAYMENT_EUSTANDARDTRANSFER_SUCCESS_TITLE', 'Mostrar los datos bancarios');
  define('MODULE_PAYMENT_EUSTANDARDTRANSFER_SUCCESS_DESC', '&iquest;Mostrar los datos bancarios sobre el &eacute;xito de la compra?');
?>