<?php
/*------------------------------------------------------------------------------
   v 1.0 
   XTC-DPD Shipping Module - Contribution for XT-Commerce http://xt-commerce.com
   modified by http://www.hwangelshop.de

   Copyrigt (c) 2004 cigamth
  ------------------------------------------------------------------------------
   $Id: dpd.php 2751 2012-04-12 13:28:06Z Tomcraft1980 $

   XTC-GLS Shipping Module - Contribution for XT-Commerce http://www.xt-commerce.com
   modified by http://www.hhgag.com

   Copyright (c) 2004 H.H.G.
   -----------------------------------------------------------------------------
   based on:
   (c) 2003 Deutsche Post Module
   Original written by Marcel Bossert-Schwab (webmaster@wernich.de), Version 1.2b
   Addon Released under GLSL V2.0 by Gunter Sammet (Gunter@SammySolutions.com)

   Contribution based on:

   osCommerce, Open Source E-Commerce Solutions
   http://www.oscommerce.com

   Copyright (c) 2002 - 2003 osCommerce

   Released under the GNU General Public License

   ---------------------------------------------------------------------------*/
define('MODULE_SHIPPING_DPD_TEXT_TITLE', 'DPD Dynamic Parcel Distribution');
define('MODULE_SHIPPING_DPD_TEXT_DESCRIPTION', 'DPD Dynamic Parcel Distribution - M&oacute;dulo de env&iacute;o mundial');
define('MODULE_SHIPPING_DPD_TEXT_WAY', 'Entrega a');
define('MODULE_SHIPPING_DPD_TEXT_UNITS', 'kg');
define('MODULE_SHIPPING_DPD_INVALID_ZONE', 'Lo siento, este portaaviones no puede entrar en este pa&iacute;s');
define('MODULE_SHIPPING_DPD_UNDEFINED_RATE', 'Los gastos de env&iacute;o no pueden ser calculados por el momento.');
define('MODULE_SHIPPING_DPD_FREE_SHIPPING', 'Env&iacute;o gratuito');
define('MODULE_SHIPPING_DPD_SUBSIDIZED_SHIPPING', 'Subvencionamos el env&iacute;o.');

define('MODULE_SHIPPING_DPD_STATUS_TITLE', 'DPD Dynamic Parcel Distribution');
define('MODULE_SHIPPING_DPD_STATUS_DESC', '&iquest;Le gustar&iacute;a ofrecer el env&iacute;o con el DPD Dynamic Parcel Distribution?');
define('MODULE_SHIPPING_DPD_HANDLING_TITLE', 'Cuota de manejo');
define('MODULE_SHIPPING_DPD_HANDLING_DESC', 'Gastos de tramitaci&oacute;n para este m&eacute;todo de env&iacute;o');
define('MODULE_SHIPPING_DPD_ALLOWED_TITLE' , 'Zonas permitidas');
define('MODULE_SHIPPING_DPD_ALLOWED_DESC' , 'Por favor, introduzca las zonas <p>por separado</b> que deben ser permitidas para utilizar este m&oacute;dulo (por ejemplo, AT, DE (deje en blanco si quiere permitir todas las zonas)');
define('MODULE_SHIPPING_DPD_SORT_ORDER_TITLE', 'Orden de clasificaci&oacute;n');
define('MODULE_SHIPPING_DPD_SORT_ORDER_DESC', 'Ordenar el orden de exhibici&oacute;n. El m&aacute;s bajo se muestra primero.');
define('MODULE_SHIPPING_DPD_TAX_CLASS_TITLE', 'Clase de impuestos');
define('MODULE_SHIPPING_DPD_TAX_CLASS_DESC', 'Utilice la siguiente clase de impuestos en la tarifa de env&iacute;o.');
define('MODULE_SHIPPING_DPD_ZONE_TITLE', 'Zona de env&iacute;o');
define('MODULE_SHIPPING_DPD_ZONE_DESC', 'Si se selecciona una zona, s&oacute;lo se debe habilitar este m&eacute;todo de env&iacute;o para esa zona.');

?>