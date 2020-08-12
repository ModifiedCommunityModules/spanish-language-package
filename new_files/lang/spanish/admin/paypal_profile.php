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
  'TEXT_PAYPAL_PROFILE_HEADING_TITLE' => 'Perfil de PayPal',

  'TEXT_PAYPAL_PROFILE_STATUS' => 'Est&aacute;ndar:',
  'TEXT_PAYPAL_PROFILE_STATUS_INFO' => 'Si quieres usar este perfil como predeterminado?<br/><br/><b>Nota:</b> Se puede asignar un perfil separado para cada m&oacute;dulo dependiendo del idioma.',
  
  'TEXT_PAYPAL_PROFILE_NAME' => 'Nombre interno:',
  'TEXT_PAYPAL_PROFILE_NAME_INFO' => '',
  
  'TEXT_PAYPAL_PROFILE_BRAND' => 'Nombre mostrado:',
  'TEXT_PAYPAL_PROFILE_BRAND_INFO' => 'Este nombre se muestra al cliente en PayPal',
  
  'TEXT_PAYPAL_PROFILE_LOGO' => 'URL del logo:',
  'TEXT_PAYPAL_PROFILE_LOGO_INFO' => 'URL completo<br/><br/><b>Nota:</b> Para que el logo se muestre, la URL debe ser especificada con https:// angegeben werden',
  
  'TEXT_PAYPAL_PROFILE_LOCALE' => 'Idioma:',
  'TEXT_PAYPAL_PROFILE_LOCALE_INFO' => '',
  
  'TEXT_PAYPAL_PROFILE_PAGE' => 'P&aacute;gina:',
  'TEXT_PAYPAL_PROFILE_PAGE_INFO' => '<b>Est&aacute;ndar:</b> Ingresa en<br/><br/>Con el pago se preselecciona el pago sin cuenta del cliente.',

  'TEXT_PAYPAL_PROFILE_ADDRESS' => 'Sobrescribir la direcci&oacute;n:',
  'TEXT_PAYPAL_PROFILE_ADDRESS_INFO' => 'En caso de que la direcci&oacute;n de env&iacute;o sea tomada por PayPal?',
  
  'TEXT_PAYPAL_PROFILE_INFO' => 'No hay un perfil de PayPal disponible.<br/><br/> Con un perfil de PayPal puedes:<ul><li>logotizar la p&aacute;gina de PayPal con un logo</li><li>direcci&oacute;n de PayPal para la protecci&oacute;n del comprador</li></ul>',
);


foreach ($lang_array as $key => $val) {
  defined($key) or define($key, $val);
}
?>