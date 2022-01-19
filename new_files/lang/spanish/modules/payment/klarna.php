<?php
/* -----------------------------------------------------------------------------------------
   $Id: klarna.php 13152 2021-01-12 11:53:34Z GTB $

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   -----------------------------------------------------------------------------------------
   Released under the GNU General Public License
   ---------------------------------------------------------------------------------------*/

$lang_array = array(
  'MODULE_PAYMENT_'.$klarna_code.'_TEXT_TITLE' => '',
  'MODULE_PAYMENT_'.$klarna_code.'_TEXT_DESCRIPTION' => 'Antes de poder configurar los m&eacute;todos de pago de Klarna Payments, es necesario abrir una cuenta de comerciante con Klarna. A continuaci&oacute;n, recibir&aacute; la informaci&oacute;n y los datos de acceso necesarios para configurar la cuenta. Si ya tiene un n&uacute;mero de cliente de Klarna pero no est&aacute; en el esquema Kxxxxxx, env&iacute;e un correo electr&oacute;nico a <a href="mailto:vertrieb@klarna.com">vertrieb@klarna.com</a>.<br /><br />
    <img src="../lang/english/admin/images/icon.gif" border="0" />
    <a href="https://www.klarna.com/uk/business/" target="_blank" style="text-decoration: underline; font-weight: bold;">Crear una cuenta Klarna ahora.</a>
    <img src="images/icon_popup.gif" border="0" />',
  'MODULE_PAYMENT_'.$klarna_code.'_TEXT_INFO' => '',
  'MODULE_PAYMENT_'.$klarna_code.'_ALLOWED_TITLE' => 'Zonas permitidas',
  'MODULE_PAYMENT_'.$klarna_code.'_ALLOWED_DESC' => 'Por favor, introduzca las zonas <b>por separado</b> a las que se debe permitir el uso de este m&oacute;dulo (por ejemplo, AT,DE (d&eacute;jelo vac&iacute;o si quiere permitir todas las zonas))',
  'MODULE_PAYMENT_'.$klarna_code.'_STATUS_TITLE' => 'Habilitar m&oacute;dulo',
  'MODULE_PAYMENT_'.$klarna_code.'_STATUS_DESC' => '&iquest;Desea aceptar pagos a trav&eacute;s de este m&oacute;dulo?',
  'MODULE_PAYMENT_'.$klarna_code.'_SORT_ORDER_TITLE' => 'Orden de clasificaci&oacute;n',
  'MODULE_PAYMENT_'.$klarna_code.'_SORT_ORDER_DESC' => 'Orden de visualizaci&oacute;n. El m&aacute;s bajo se muestra primero.',
  'MODULE_PAYMENT_'.$klarna_code.'_ZONE_TITLE' => 'Zona de pago',
  'MODULE_PAYMENT_'.$klarna_code.'_ZONE_DESC' => 'Si se elige una zona, el m&eacute;todo de pago ser&aacute; v&aacute;lido s&oacute;lo para esta zona.',
  'MODULE_PAYMENT_'.$klarna_code.'_ORDER_STATUS_ID_TITLE' => 'Establecer el estado del pedido',
  'MODULE_PAYMENT_'.$klarna_code.'_ORDER_STATUS_ID_DESC' => 'Establecer el estado de los pedidos realizados con este m&oacute;dulo de pago a este valor',
  'MODULE_PAYMENT_'.$klarna_code.'_CAPTURE_TITLE' => 'Activar',
  'MODULE_PAYMENT_'.$klarna_code.'_CAPTURE_DESC' => '&iquest;La orden se activa autom&aacute;ticamente?',

  'MODULE_PAYMENT_'.$klarna_code.'_TEXT_ERROR_HEADING' => 'Klarna',
  'MODULE_PAYMENT_'.$klarna_code.'_TEXT_ERROR_MESSAGE' => 'El pago fue cancelado.',

  'MODULE_PAYMENT_'.$klarna_code.'_TEXT_VERSION' => '<b>Versi&oacute;n del m&oacute;dulo</b><br/>',

  'MODULE_PAYMENT_KLARNA_MERCHANT_ID_TITLE' => 'Nombre de usuario',
  'MODULE_PAYMENT_KLARNA_MERCHANT_ID_DESC' => 'Nombre de usuario de la API de Klarna',
  'MODULE_PAYMENT_KLARNA_SHARED_SECRET_TITLE' => 'Contrase&ntilde;a',
  'MODULE_PAYMENT_KLARNA_SHARED_SECRET_DESC' => 'Contrase&ntilde;a de la API de Klarna',
  'MODULE_PAYMENT_KLARNA_MODE_TITLE' => 'Modo',
  'MODULE_PAYMENT_KLARNA_MODE_DESC' => 'Klarna Fashion',
);
