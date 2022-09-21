<?php
/* -----------------------------------------------------------------------------------------
   $Id: dhl.php 14308 2022-04-13 11:43:36Z GTB $

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   -----------------------------------------------------------------------------------------
   Released under the GNU General Public License
   ---------------------------------------------------------------------------------------*/

  define('MODULE_DHL_TEXT_TITLE', 'Conexión con DHL');
  define('MODULE_DHL_TEXT_DESCRIPTION', 'Imprimir etiquetas de DHL.');

  define('MODULE_DHL_STATUS_TITLE', 'Estatus');
  define('MODULE_DHL_STATUS_DESC', 'Módulo de activación');
  define('MODULE_DHL_USER_TITLE', '<hr noshade>Usuario');
  define('MODULE_DHL_USER_DESC', 'Usuario del Portal del Cliente Comercial de DHL');
  define('MODULE_DHL_SIGNATURE_TITLE', 'Contraseña');
  define('MODULE_DHL_SIGNATURE_DESC', 'Contraseña del Portal del Cliente Comercial de DHL');
  define('MODULE_DHL_EKP_TITLE', 'EKP');
  define('MODULE_DHL_EKP_DESC', 'Número de cliente de DHL');
  define('MODULE_DHL_ACCOUNT_TITLE', 'Cuenta');
  define('MODULE_DHL_ACCOUNT_DESC', 'ID de la cuenta, formato ISO2:ID separado por coma (estándar WORLD:01).<br>Si "Warenpost" tiene un ID diferente, añada PK (paquete) o WP (Warenpost). Ejemplo: WORLD:01PK,WORLD:02WP');
  define('MODULE_DHL_PREFIX_TITLE', 'Prefijo de referencia del remitente');
  define('MODULE_DHL_PREFIX_DESC', 'Introduzca un prefijo para la referencia del remitente. El número de pedido se añadirá automáticamente.');
  define('MODULE_DHL_WEIGHT_CN23_TITLE', 'Peso CN23');
  define('MODULE_DHL_WEIGHT_CN23_DESC', 'Introduzca el peso del producto para la declaración de aduana si no se almacena ninguno con el producto.');

  define('MODULE_DHL_NOTIFICATION_TITLE', '<hr noshade>Notificación');
  define('MODULE_DHL_NOTIFICATION_DESC', 'Establecer la notificación a través de DHL preseleccionada por defecto<br>El cliente será notificado por DHL por correo electrónico sobre el envío.<br><b>Nota:</b> Para ello, el cliente debe disponer de una declaración de consentimiento para la divulgación de la dirección de correo electrónico.');
  define('MODULE_DHL_STATUS_UPDATE_TITLE', 'Notificación &amp; Actualizar estado');
  define('MODULE_DHL_STATUS_UPDATE_DESC', 'El cliente recibirá una notificación por correo que incluirá la información de seguimiento y el pedido pasará a este estado.');
  define('MODULE_DHL_CODING_TITLE', 'Codificación');
  define('MODULE_DHL_CODING_DESC', 'Fijar la codificación preseleccionada por defecto');
  define('MODULE_DHL_PRODUCT_TITLE', 'Producto');
  define('MODULE_DHL_PRODUCT_DESC', '¿Qué producto debe preseleccionarse por defecto?');
  define('MODULE_DHL_DISPLAY_LABEL_TITLE', 'Mostrar etiqueta');
  define('MODULE_DHL_DISPLAY_LABEL_DESC', '¿Debe aparecer la etiqueta de DHL (popup) después de la generación?');
  define('MODULE_DHL_RETOURE_TITLE', 'Etiqueta de devolución');
  define('MODULE_DHL_RETOURE_DESC', '¿Debe generarse también una etiqueta de devolución?');
  define('MODULE_DHL_PERSONAL_TITLE', 'Personalmente');
  define('MODULE_DHL_PERSONAL_DESC', 'Establecer Personalmente preseleccionado por defecto');
  define('MODULE_DHL_BULKY_TITLE', 'Productos voluminosos');
  define('MODULE_DHL_BULKY_DESC', 'Establecer las mercancías voluminosas preseleccionadas por defecto');
  define('MODULE_DHL_NO_NEIGHBOUR_TITLE', 'No hay entrega al vecino');
  define('MODULE_DHL_NO_NEIGHBOUR_DESC', 'Establecer la preselección de "No Neighbour Delivery" por defecto');
  define('MODULE_DHL_PARCEL_OUTLET_TITLE', 'Parcel Outlet Routing');
  define('MODULE_DHL_PARCEL_OUTLET_DESC', 'Ruta de salida de paquetes');
  define('MODULE_DHL_AVS_TITLE', 'Comprobación visual de la edad');
  define('MODULE_DHL_AVS_DESC', 'Establecer la comprobación de la edad visual preseleccionada por defecto (0 está desactivado)');
  define('MODULE_DHL_IDENT_TITLE', 'Comprobación de identidad');
  define('MODULE_DHL_IDENT_DESC', 'Establecer la comprobación de identidad preseleccionada por defecto (0 está desactivado)');
  define('MODULE_DHL_PREMIUM_TITLE', 'Premium');
  define('MODULE_DHL_PREMIUM_DESC', 'Establecer Premium preseleccionado por defecto');
  define('MODULE_DHL_ENDORSEMENT_TITLE', 'Endoso');
  define('MODULE_DHL_ENDORSEMENT_DESC', '¿Cómo se deben gestionar los paquetes internacionales si no se pueden entregar?');

  define('MODULE_DHL_COMPANY_TITLE', '<hr noshade>Datos del cliente<br/>');
  define('MODULE_DHL_COMPANY_DESC', 'Empresa:');
  define('MODULE_DHL_FIRSTNAME_TITLE', '');
  define('MODULE_DHL_FIRSTNAME_DESC', 'Nombre:');
  define('MODULE_DHL_LASTNAME_TITLE', '');
  define('MODULE_DHL_LASTNAME_DESC', 'Apellido:');
  define('MODULE_DHL_ADDRESS_TITLE', '');
  define('MODULE_DHL_ADDRESS_DESC', 'Dirección:');
  define('MODULE_DHL_POSTCODE_TITLE', '');
  define('MODULE_DHL_POSTCODE_DESC', 'Código postal:');
  define('MODULE_DHL_CITY_TITLE', '');
  define('MODULE_DHL_CITY_DESC', 'Ciudad:');
  define('MODULE_DHL_TELEPHONE_TITLE', '');
  define('MODULE_DHL_TELEPHONE_DESC', 'Teléfono:');

  define('MODULE_DHL_ACCOUNT_OWNER_TITLE', '<hr noshade>Datos bancarios<br/>');
  define('MODULE_DHL_ACCOUNT_OWNER_DESC', 'Titular de la cuenta:');
  define('MODULE_DHL_ACCOUNT_NUMBER_TITLE', '');
  define('MODULE_DHL_ACCOUNT_NUMBER_DESC', 'Número de cuenta:');
  define('MODULE_DHL_BANK_CODE_TITLE', '');
  define('MODULE_DHL_BANK_CODE_DESC', 'Número de banco:');
  define('MODULE_DHL_BANK_NAME_TITLE', '');
  define('MODULE_DHL_BANK_NAME_DESC', 'Nombre del banco:');
  define('MODULE_DHL_IBAN_TITLE', '');
  define('MODULE_DHL_IBAN_DESC', 'IBAN:');
  define('MODULE_DHL_BIC_TITLE', '');
  define('MODULE_DHL_BIC_DESC', 'BIC:');
