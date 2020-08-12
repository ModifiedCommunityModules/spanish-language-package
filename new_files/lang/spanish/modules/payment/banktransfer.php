<?php
/* -----------------------------------------------------------------------------------------
   $Id: banktransfer.php 12337 2019-10-30 06:50:10Z GTB $   

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   -----------------------------------------------------------------------------------------
   based on: 
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(banktransfer.php,v 1.9 2003/02/18 19:22:15); www.oscommerce.com 
   (c) 2003	 nextcommerce (banktransfer.php,v 1.5 2003/08/13); www.nextcommerce.org
   (c) 2006 xt:Commerce; www.xt-commerce.com

   Released under the GNU General Public License 
   -----------------------------------------------------------------------------------------
   Third Party contributions:
   OSC German Banktransfer v0.85a       	Autor:	Dominik Guder <osc@guder.org>
   
   Released under the GNU General Public License 
   ---------------------------------------------------------------------------------------*/

define('MODULE_PAYMENT_BANKTRANSFER_TEXT_TITLE', 'Transferencia bancaria');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_DESCRIPTION', 'Pagos por transferencia bancaria');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_INFO','');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK', 'Transferencia bancaria');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_EMAIL_FOOTER', ((defined('MODULE_PAYMENT_BANKTRANSFER_URL_NOTE')) ? 'Nota: Puede descargar nuestro formulario de confirmaci&oacute;n de fax desde aqu&iacute;: ' . HTTP_SERVER . DIR_WS_CATALOG . MODULE_PAYMENT_BANKTRANSFER_URL_NOTE : ''));
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK_INFO', ((defined('MODULE_PAYMENT_BANKTRANSFER_IBAN_ONLY') && MODULE_PAYMENT_BANKTRANSFER_IBAN_ONLY != 'True') ? 'Tenga en cuenta que la domiciliaci&oacute;n bancaria sin IBAN/BIC es <b>s&oacute;lo disponible </b> de una <b>cuenta bancaria alemana </b>. Especificando el IBAN/BIC, puede utilizar el sistema de d&eacute;bito directo <b>a trav&eacute;s de la UE</b>.<br/>' : '') . 'Los campos marcados con (*) son obligatorios. Para un IBAN alem&aacute;n, especificar un BIC es opcional.<br/><br/>');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK_OWNER', 'Propietario de la cuenta:*');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK_OWNER_EMAIL', 'Propietario de la cuenta de correo electr&oacute;nico:*');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK_NUMBER', 'N&uacute;mero de cuenta / IBAN:*');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK_IBAN', 'IBAN:*');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK_BLZ', 'C&oacute;digo del banco / BIC:*');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK_BIC', 'BIC:*');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK_NAME', 'Nombre del banco:');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK_FAX', 'Transferencia bancaria El pago se confirmar&aacute; por fax');

// Note these MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK_ERROR_X texts appear also in the URL, so no html-entities are allowed here
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK_ERROR', 'ERROR:');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK_ERROR_1', '&iexcl;El n&uacute;mero de cuenta y el c&oacute;digo bancario no coinciden! Por favor, compru&eacute;belo de nuevo.');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK_ERROR_2', 'No hay un m&eacute;todo de verificaci&oacute;n de plausibilidad disponible para este c&oacute;digo bancario!');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK_ERROR_3', 'El n&uacute;mero de cuenta no puede ser verificado!');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK_ERROR_4', 'El n&uacute;mero de cuenta no puede ser verificado! Por favor, compru&eacute;belo de nuevo.');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK_ERROR_5', '&iexcl;C&oacute;digo bancario no encontrado! Por favor, compru&eacute;belo de nuevo.');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK_ERROR_8', 'C&oacute;digo bancario incorrecto o no se ha introducido ning&uacute;n c&oacute;digo bancario.');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK_ERROR_9', 'No se indica el n&uacute;mero de cuenta.');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK_ERROR_10', 'No se indica el titular de la cuenta.');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK_ERROR_11', 'No se indica el BIC.');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK_ERROR_12', 'No se indica un IBAN v&aacute;lido.');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK_ERROR_13', 'Direcci&oacute;n de correo electr&oacute;nico inv&aacute;lida para informar al propietario de la cuenta.');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK_ERROR_14', 'No hay un pa&iacute;s v&aacute;lido para la SEPA.');

define('MODULE_PAYMENT_BANKTRANSFER_TEXT_NOTE', 'Nota:');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_NOTE2', 'Si no quiere enviar los datos de su <br />cuenta a trav&eacute;s de Internet puede descargar nuestro ');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_NOTE3', 'Formulario de fax');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_NOTE4', ' y nos lo envi&oacute; de vuelta.');

define('JS_BANK_BLZ', '* Por favor, introduzca su c&oacute;digo bancario!\n\n');
define('JS_BANK_NAME', '* Por favor, introduzca su nombre y su banco!\n\n');
define('JS_BANK_NUMBER', '* Por favor, introduzca su n&uacute;mero de cuenta!\n\n');
define('JS_BANK_OWNER', '* Por favor, introduzca el nombre del propietario de la cuenta!\n\n');
define('JS_BANK_OWNER_EMAIL', '* Por favor, introduzca la direcci&oacute;n de correo electr&oacute;nico del propietario de la cuenta!\n\n');

define('MODULE_PAYMENT_BANKTRANSFER_DATABASE_BLZ_TITLE' , 'Utilice la b&uacute;squeda de la base de datos para el c&oacute;digo bancario?');
define('MODULE_PAYMENT_BANKTRANSFER_DATABASE_BLZ_DESC', 'Utilice la base de datos para validar el c&oacute;digo bancario. Por defecto: ("true")?<br/>Aseg&uacute;rate de que los c&oacute;digos bancarios de la base de datos est&eacute;n actualizados!<br/><br/>En "falso" (est&aacute;ndar) se utiliza el archivo blz.csv suministrado que contiene entradas posiblemente obsoletas!');
define('MODULE_PAYMENT_BANKTRANSFER_URL_NOTE_TITLE' , 'Fax-URL');
define('MODULE_PAYMENT_BANKTRANSFER_URL_NOTE_DESC' , 'El archivo de confirmaci&oacute;n de fax. Debe ser localizado en el directorio del cat&aacute;logo');
define('MODULE_PAYMENT_BANKTRANSFER_FAX_CONFIRMATION_TITLE' , 'Permitir la confirmaci&oacute;n por fax');
define('MODULE_PAYMENT_BANKTRANSFER_FAX_CONFIRMATION_DESC' , '&iquest;Quieres permitir la confirmaci&oacute;n por fax?');
define('MODULE_PAYMENT_BANKTRANSFER_SORT_ORDER_TITLE' , 'Orden de visualizaci&oacute;n de la orden');
define('MODULE_PAYMENT_BANKTRANSFER_SORT_ORDER_DESC' , 'Ordenar el orden de exhibici&oacute;n. El m&aacute;s bajo se muestra primero.');
define('MODULE_PAYMENT_BANKTRANSFER_ORDER_STATUS_ID_TITLE' , 'Establecer el estado de la orden');
define('MODULE_PAYMENT_BANKTRANSFER_ORDER_STATUS_ID_DESC' , 'Ponga el estado de los pedidos realizados con este m&oacute;dulo de pago a este valor');
define('MODULE_PAYMENT_BANKTRANSFER_ZONE_TITLE' , 'Zona de pago');
define('MODULE_PAYMENT_BANKTRANSFER_ZONE_DESC' , 'Si se selecciona una zona, s&oacute;lo se debe habilitar este m&eacute;todo de pago para esa zona.');
define('MODULE_PAYMENT_BANKTRANSFER_ALLOWED_TITLE' , 'Zonas permitidas');
define('MODULE_PAYMENT_BANKTRANSFER_ALLOWED_DESC' , 'Por favor, introduzca las zonas <b>separadas</b> a las que se les debe permitir usar este m&oacute;dulo (por ejemplo, AT,DE (d&eacute;jelas vac&iacute;as si quiere permitir todas las zonas))');
define('MODULE_PAYMENT_BANKTRANSFER_STATUS_TITLE' , 'Permitir los pagos por transferencia bancaria');
define('MODULE_PAYMENT_BANKTRANSFER_STATUS_DESC' , '&iquest;Quiere aceptar pagos por transferencia bancaria?');
define('MODULE_PAYMENT_BANKTRANSFER_MIN_ORDER_TITLE' , '&Oacute;rdenes m&iacute;nimas');
define('MODULE_PAYMENT_BANKTRANSFER_MIN_ORDER_DESC' , 'Pedidos m&iacute;nimos para que un cliente vea esta opci&oacute;n.');
define('MODULE_PAYMENT_BANKTRANSFER_IBAN_ONLY_TITLE', 'Modo IBAN');
define('MODULE_PAYMENT_BANKTRANSFER_IBAN_ONLY_DESC', '&iquest;Quiere aceptar s&oacute;lo pagos por transferencia bancaria IBAN?');

// SEPA
define('MODULE_PAYMENT_BANKTRANSFER_CI_TITLE', 'N&uacute;mero de identificaci&oacute;n (CI)');
define('MODULE_PAYMENT_BANKTRANSFER_CI_DESC', 'Ingrese su SEPA-ID');
define('MODULE_PAYMENT_BANKTRANSFER_REFERENCE_PREFIX_TITLE', 'Prefijo para la referencia (opcional)');
define('MODULE_PAYMENT_BANKTRANSFER_REFERENCE_PREFIX_DESC', 'Introduzca un prefijo para la referencia del dado');
define('MODULE_PAYMENT_BANKTRANSFER_DUE_DELAY_TITLE', 'Madurez');
define('MODULE_PAYMENT_BANKTRANSFER_DUE_DELAY_DESC', 'Introduzca el per&iacute;odo (en d&iacute;as) para ejecutar la transferencia bancaria');

define('MODULE_PAYMENT_BANKTRANSFER_TEXT_EXTENDED_DESCRIPTION', '<strong><font color="red">ATENCI&Oacute;N:</font></strong> Por favor, actualice los n&uacute;meros de c&oacute;digo del banco alem&aacute;n!');

define('MODULE_PAYMENT_BANKTRANSFER_TEXT_UPDATE_SUCCESS', 'C&oacute;digos bancarios actualizados: ');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_UPDATE_ERROR', 'Los c&oacute;digos bancarios no pudieron ser actualizados.');
?>