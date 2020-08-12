<?php
/* -----------------------------------------------------------------------------------------
   $Id$

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   -----------------------------------------------------------------------------------------
   Released under the GNU General Public License
   ---------------------------------------------------------------------------------------*/


$lang_array = array(
  'TEXT_PAYPAL_MODULE_HEADING_TITLE' => 'M&oacute;dulo de PayPal',
  
  'TABLE_HEADING_MODULES' => 'M&oacute;dulo',
  'TABLE_HEADING_FILENAME' => 'Nombre del m&oacute;dulo (para uso interno)',
  'TABLE_HEADING_SORT_ORDER' => 'Clasificaci&oacute;n',
  'TABLE_HEADING_STATUS' => 'Estado',
  'TABLE_HEADING_ACTION' => 'Acci&oacute;n',

  'TABLE_HEADING_WALL_STATUS' => 'La exhibici&oacute;n en la pared de pago',
  'TABLE_HEADING_WALL_DESCRIPTION' => 'Descripci&oacute;n',
  
  'TEXT_PAYPAL_MODULE_PROFILE' => 'Perfil',
  'TEXT_PAYPAL_NO_PROFILE' => 'no hay perfil en la web',
  'TEXT_PAYPAL_STANDARD_PROFILE' => 'Perfil web est&aacute;ndar',
  
  'TEXT_PAYPAL_MODULE_LINK_SUCCESS' => 'Enlace en la caja',
  'TEXT_PAYPAL_MODULE_LINK_SUCCESS_INFO' => 'En caso de que el enlace de pago se muestre en la caja?',

  'TEXT_PAYPAL_MODULE_LINK_ACCOUNT' => 'Enlace en la cuenta',
  'TEXT_PAYPAL_MODULE_LINK_ACCOUNT_INFO' => 'En caso de que el enlace de pago se muestre en la caja?',

  'TEXT_PAYPAL_MODULE_LINK_PRODUCT' => 'Button beim Artikel',
  'TEXT_PAYPAL_MODULE_LINK_PRODUCT_INFO' => 'Soll der PayPal Button in den Artikel Infos angezeigt werden?',

  'TEXT_PAYPAL_MODULE_USE_TABS' => 'Acorde&oacute;n / Tablas',
  'TEXT_PAYPAL_MODULE_USE_TABS_INFO' => 'Utiliza la plantilla Acorde&oacute;n o Pesta&ntilde;as en la caja?',
   'TEXT_PAYPAL_MODULE_SHIPPING_COST' => 'gastos de env&iacute;o provisionales',
  'TEXT_PAYPAL_MODULE_SHIPPING_COST_INFO' => 'Cuant&iacute;a de los gastos de env&iacute;o provisionales.',

  'TEXT_PAYPAL_MODULE_UPSTREAM_PRODUCT' => 'Mostrar en el producto',
  'TEXT_PAYPAL_MODULE_UPSTREAM_PRODUCT_INFO' => 'Mostrar los detalles de la cuota en el producto?',

  'TEXT_PAYPAL_MODULE_UPSTREAM_CART' => 'Mostrar en el carro',
  'TEXT_PAYPAL_MODULE_UPSTREAM_CART_INFO' => 'Mostrar los detalles de la cuota en el carro?',

  'TEXT_PAYPAL_MODULE_UPSTREAM_PAYMENT' => 'Mostrar en la caja',
  'TEXT_PAYPAL_MODULE_UPSTREAM_PAYMENT_INFO' => 'Mostrar los detalles de la cuota durante el pago?',
);


foreach ($lang_array as $key => $val) {
  defined($key) or define($key, $val);
}
?>