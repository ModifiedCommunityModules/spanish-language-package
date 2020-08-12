<?php
/* --------------------------------------------------------------
   $Id: configuration_99.php 3569 2012-08-30 15:39:18Z web28 $

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2016 [www.modified-shop.org]
   --------------------------------------------------------------
   based on:
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(configuration_99.php,v 1.99 2003/05/28); www.oscommerce.com
   (c) 2003 nextcommerce (configuration_99.php,v 1.24 2003/08/24); www.nextcommerce.org
   (c) 2006 XT-Commerce (configuration_99.php)

   Released under the GNU General Public License
   --------------------------------------------------------------
   Third Party contributions:
   Customers Status v3.x (c) 2002-2003 Copyright Elari elari@free.fr | www.unlockgsm.com/dload-osc/ | CVS : http://cvs.sourceforge.net/cgi-bin/viewcvs.cgi/elari/?sortby=date#dirlist

   Released under the GNU General Public License 
   --------------------------------------------------------------*/


// PDFBill NEXT - Change START
define('BOX_CONFIGURATION_99', 'PDFBill Konfiguration');
define('PDF_BILL_LASTNR_TITLE', 'Letzte Rechnungsnummer');
define('PDF_BILL_LASTNR_DESC', 'Die letzte Rechnungsnummer f&uuml;r die automatische Vergabe.');
define('PDF_USE_ORDERID_PREFIX_TITLE', 'Rechnungsnummer Prefix');
define('PDF_USE_ORDERID_PREFIX_DESC', 'Prefix f&uuml;r die Rechnungsnummer, falls die Bestellnummer als Rechnungsnummer verwendet wird.');
define('PDF_USE_ORDERID_TITLE', 'Bestellnummer als Rechnungsnummer');
define('PDF_USE_ORDERID_DESC', 'Durch diese Option wird die Bestellnummer als Rechnungsnummer verwendet.');
define('PDF_CUSTOM_TEXT_TITLE', 'PDF Zusatztext');
define('PDF_CUSTOM_TEXT_DESC', 'Dieser Text wird bei jeder PDF hinzugef&uuml;gt.');
define('PDF_STATUS_COMMENT_TITLE', 'Bestell-PDF Status Kommentar');
define('PDF_STATUS_COMMENT_DESC', 'Kommentar der beim Verschicken einer Rechnung in das System hinzugef&uuml;gt wird.');
define('PDF_STATUS_COMMENT_SLIP_TITLE', 'Lieferschein-PDF Status Kommentar');
define('PDF_STATUS_COMMENT_SLIP_DESC', 'Kommentar der beim Verschicken eines Lieferschein in das System hinzugef&uuml;gt wird.');
define('PDF_FILENAME_SLIP_TITLE', 'Lieferschein Dateiname');
define('PDF_FILENAME_SLIP_DESC', 'Dateiname des Lieferscheins. Leerzeichen werden durch einen Unterstrich ersetzt. Variablen: <strong>{oID}</strong>, <strong>{bill}</strong>, <strong>{cID}</strong>. <strong>Bitte ohne .pdf</strong>.');
define('PDF_MAIL_SUBJECT_TITLE', 'Rechnungs-Mail Betreff');
define('PDF_MAIL_SUBJECT_DESC', 'Geben Sie hier den Betreff f&uuml;r die Rechnungsmail an. <strong>{oID}</strong> dient als Platzhalter f&uuml;r die Bestellnummer.');
define('PDF_MAIL_SUBJECT_SLIP_TITLE', 'Lieferschein-Mail Betreff');
define('PDF_MAIL_SUBJECT_SLIP_DESC', 'Geben Sie hier den Betreff f&uuml;r die Lieferscheinmail an. <strong>{oID}</strong> dient als Platzhalter f&uuml;r die Bestellnummer.');
define('PDF_MAIL_SLIP_COPY_TITLE', 'Lieferschein - Weiterleitungsadresse');
define('PDF_MAIL_SLIP_COPY_DESC', 'Geben Sie hier eine E-Mailaddresse an, wenn Sie eine Kopie erhalten wollen.');
define('PDF_MAIL_BILL_COPY_TITLE', 'Rechnung - Weiterleitungsadresse');
define('PDF_MAIL_BILL_COPY_DESC', 'Geben Sie hier eine E-Mailaddresse an, wenn Sie eine Kopie erhalten wollen.');
define('PDF_FILENAME_TITLE', 'Rechnung Dateiname');
define('PDF_FILENAME_DESC', 'Dateiname der Rechnung. Leerzeichen werden durch einen Unterstrich ersetzt. Variablen: <strong>{oID}</strong>, <strong>{bill}</strong>, <strong>{cID}</strong>. <strong>Bitte ohne .pdf</strong>.');
define('PDF_MASTER_PASS_TITLE', 'PDF Masterpasswort');
define('PDF_MASTER_PASS_DESC', 'Damit Ihre PDF-Rechnungen/Lieferscheine nicht ohne weiteres editiert werden k&ouml;nnen.');
define('PDF_SEND_ORDER_TITLE', 'Rechnungs-PDF automatisch versenden');
define('PDF_SEND_ORDER_DESC', 'Wenn diese Option aktiviert ist, wird die Rechnungs-PDF direkt nach der Bestellung automatisch verschickt.');

define('PDF_USE_CUSTOMER_ID_TITLE', 'Nutze Kunden-ID als Kundennummer');
define('PDF_USE_CUSTOMER_ID_DESC', 'Die Kunden-ID wird als Kundennummer verwendet. Bitte auf false stellen, falls eine Kundennummer vergeben wird.');

define('PDF_STATUS_ID_BILL_TITLE', 'Bestellstatus-ID - Rechnungs-PDF');
define('PDF_STATUS_ID_BILL_DESC', 'Die Bestellstatus-ID finden Sie in der Browserzeile nach <strong>oID=</strong> wenn Sie den Bestellstatus editieren.');
define('PDF_STATUS_ID_SLIP_TITLE', 'Bestellstatus-ID - Lieferschein');
define('PDF_STATUS_ID_SLIP_DESC', 'Die Bestellstatus-ID finden Sie in der Browserzeile nach <strong>oID=</strong> wenn Sie den Bestellstatus editieren.');

define('PDF_PRODUCT_MODEL_LENGTH_TITLE', 'Maximall&auml;nge Artikelnummer');
define('PDF_PRODUCT_MODEL_LENGTH_DESC', 'Anzahl der Zeichen nachdem eine Artikelnummer abgeschnitten wird. Bitte beachten, dass zu Lange Artikelnummer das Layout der PDF zerst&ouml;ren k&ouml;nnen.');
define('PDF_UPDATE_STATUS_TITLE', 'Bestellstatus aktualisieren');
define('PDF_UPDATE_STATUS_DESC', 'Bestellstatus wird nach dem Mailversand der PDF automatisch aktualisiert.');
define('PDF_USE_ORDERID_SUFFIX_TITLE', 'Rechnungsnummer Suffix');
define('PDF_USE_ORDERID_SUFFIX_DESC', 'Suffix f&uuml;r die Rechnungsnummer, falls die Bestellnummer als Rechnungsnummer verwendet wird.');
define('PDF_STATUS_SEND_TITLE', 'Rechnung bei Umstellung auf Bestellstatus versenden');
define('PDF_STATUS_SEND_DESC', '');
define('PDF_STATUS_SEND_ID_TITLE', 'Sende Bestellstatus-ID - Rechnungs-PDF');
define('PDF_STATUS_SEND_ID_DESC', 'Bei Umstellung auf diese ID wird die Rechnung verschickt.');

define('PDF_STATUS_SEND_TITLE', 'Rechnung bei Umstellung auf Bestellstatus versenden');
define('PDF_STATUS_SEND_DESC', '');
define('PDF_STATUS_SEND_ID_TITLE', 'Sende Bestellstatus-ID - Rechnungs-PDF');
define('PDF_STATUS_SEND_ID_DESC', 'Bei Umstellung auf diese ID wird die Rechnung verschickt.');
define('PDF_MAIL_SLIP_FORWARDER_TITLE', 'Lieferschein weiterleiten');
define('PDF_MAIL_SLIP_FORWARDER_DESC', '');
define('PDF_MAIL_SLIP_FORWARDER_NAME_TITLE', 'Logistiker Name');
define('PDF_MAIL_SLIP_FORWARDER_NAME_DESC', 'Geben Sie hier den Namen des Logistikers ein, der den Lieferschein erhält');
define('PDF_MAIL_SLIP_FORWARDER_EMAIL_TITLE', 'Logistikers Email');
define('PDF_MAIL_SLIP_FORWARDER_EMAIL_DESC', 'Geben Sie hier die E-Mail-Addresse des Logistikers ein, der den Lieferschein erhält');
define('PDF_MAIL_SLIP_FORWARDER_SUBJECT_TITLE', 'Betreff Logistiker E-Mails');
define('PDF_MAIL_SLIP_FORWARDER_SUBJECT_DESC', 'Geben Sie hier den Betreff des Logistiker-Emails ein');
define('MODULE_INVOICE_NUMBER_IBN_BILLNR_TITLE', 'N&auml;chste Rechnungsnummer');
define('MODULE_INVOICE_NUMBER_IBN_BILLNR_DESC', 'Nicht &auml;ndern, die Rechnungsnummer wird von System vergeben');
define('MODULE_INVOICE_NUMBER_IBN_BILLNR_FORMAT_TITLE', 'Rechnungsnummer Format');
define('MODULE_INVOICE_NUMBER_IBN_BILLNR_FORMAT_DESC', 'Aufbauschema Rechn.Nr.: {n}=laufende Nummer, {d}=Tag, {m}=Monat, {y}=Jahr,<br />z.B. "100{n}-{d}-{m}-{y}" ergibt "10099-28-02-2007"');
// PDFBill NEXT - Change END

// START - Innergemeinschaftliche Lieferungen
define('PDF_BILL_EU_CUSTOMERS_GROUP_ID_TITLE','Kundengruppe EU H&auml;ndler:');
define('PDF_BILL_EU_CUSTOMERS_GROUP_ID_DESC','<b>Kundengruppen ID (cID)</b> der EU H&auml;ndler - f&uuml;r diese Kunden wird in der Rechnung der Steuerfreihinweis nach &sect; 4 Nr. 1 b Umsatzsteuergesetz (UStG) hinzugef&uuml;gt!<br /><b>Mehrere Eintr&auml;ge mit Komma trennen!</b><br />Die Kundengruppen-ID finden Sie in der Browserzeile nach <strong>cID=</strong> wenn Sie die Kundengruppen editieren.');
// END - Innergemeinschaftliche Lieferungen
?>