<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 * The contents of this file are subject to the SugarCRM Public License Version
 * 1.1.3 ("License"); You may not use this file except in compliance with the
 * License. You may obtain a copy of the License at http://www.sugarcrm.com/SPL
 * Software distributed under the License is distributed on an "AS IS" basis,
 * WITHOUT WARRANTY OF ANY KIND, either express or implied.  See the License
 * for the specific language governing rights and limitations under the
 * License.
 *
 * All copies of the Covered Code must include on each user interface screen:
 *    (i) the "Powered by SugarCRM" logo and
 *    (ii) the SugarCRM copyright notice
 * in the same form as they appear in the distribution.  See full license for
 * requirements.
 *
 * The Original Code is: SugarCRM Open Source
 * The Initial Developer of the Original Code is SugarCRM, Inc.
 * Portions created by SugarCRM are Copyright (C) 2004-2005 SugarCRM, Inc.;
 * All Rights Reserved.
 * Contributor(s): ______________________________________.
 ********************************************************************************/

/*********************************************************************************
 * pl_pl.lang.ext.php,v for SugarCRM 4.5.1-->>
 * Translator: Krzysztof Morawski
 * All Rights Reserved.
 * Any bugs report welcome: krzysiek<at>kmmgroup<dot>pl
 * Contributor(s): ______________________________________..
 ********************************************************************************/
$mod_strings = array (
	'LBL_SEND_DATE_TIME'						=> 'Wyślij Datę',
	'LBL_IN_QUEUE'								=> 'W kolejce?',
	'LBL_IN_QUEUE_DATE'							=> 'Data kolejkowania',

	'ERR_INT_ONLY_EMAIL_PER_RUN'=>'Tylko wartości liczbowe są dowzolone dla oznaczenia liczby wiadomości wysłanych w jednej serii',

	'LBL_ATTACHMENT_AUDIT'=> ' zostały wysłane.  Nie zostały zduplikowane lokalnie, by nie zajmować miejsca na dysku.',
	'LBL_CONFIGURE_SETTINGS'=>'Konfiguruj',
	'LBL_CUSTOM_LOCATION'=>'Definiowane przez użytkownika',
	'LBL_DEFAULT_LOCATION'=>'Domyślnie',
	'LBL_DISCLOSURE_TITLE'						=> 'Dodaje Stopkę o niejawności do każdej Wiadomości',
	'LBL_DISCLOSURE_TEXT_TITLE'					=> 'Treść Stopki o niejawności',
	'LBL_DISCLOSURE_TEXT_SAMPLE'				=> 'NOTICE: This email message is for the sole use of the intended recipient(s) and may contain confidential and privileged information. Any unauthorized review, use, disclosure, or distribution is prohibited. If you are not the intended recipient, please destroy all copies of the original message and notify the sender so that our address record can be corrected. Thank you.
	<br>Uwaga: Ta wiadomość jest skierowana wyłączenie do użytku określonych odbiorców i może zawierać treści przeznaczone tylko dla nich. Jakiekolwiek nieautoryzowane ujawnianie, używanie, lub dystrybuowanie tych treści jest zabrionione. Jeśli nie jesteś adresatem tej wiadomości, usuń jej wszystkie kopie i powiadom nadawcę, aby poprawił swoją książkę adresową. Dziekujemy',

	'LBL_EMAIL_DEFAULT_CHARSET'=> 'Komponuj wiadomości pocztowe w tym zestawie znaków',
	'LBL_EMAIL_DEFAULT_CLIENT'		=> 'Napisz wiadomowść email, korzystając z tego formatu',
	'LBL_EMAIL_DEFAULT_EDITOR'=> 'Napisz wiadomość, korzystając z tego klienta poczty',
	'LBL_EMAIL_DEFAULT_DELETE_ATTACHMENTS'=> 'Usuń połączone notatki i załączniki połączone z usuniętymi Wiadomościami Pocztowymi.',
	'LBL_EMAIL_GMAIL_DEFAULTS'					=> 'Wypełnij domyślne ustawienia dla Gmail',
	'LBL_EMAIL_PER_RUN_REQ'=>'Liczba wiadomości wysłanych w serii:',
	'LBL_EMAIL_SMTP_SSL'						=> 'Włącz SMTP przez SSL',
	'LBL_EMAIL_USER_TITLE'=> 'Użyj domyślnego adresu email',
	'LBL_EMAILS_PER_RUN'=>'Liczba wiadomości wysyłanych w serii:',
	'LBL_ID'									=> 'Id',
	'LBL_LIST_CAMPAIGN'=> 'Kampania',
	'LBL_LIST_FORM_PROCESSED_TITLE'=>'Trwające',
	'LBL_LIST_FORM_TITLE'=>'Oczekujące',
	'LBL_LIST_FROM_EMAIL'=>'Od adres nadawcy',
	'LBL_LIST_FROM_NAME'=>'Od nazwa',
	'LBL_LIST_IN_QUEUE'=>'W trakcie',
	'LBL_LIST_MESSAGE_NAME'=>'Wiadomość marketingowa',
	'LBL_LIST_RECIPIENT_EMAIL'=>'Adres odbiorcy',
	'LBL_LIST_RECIPIENT_NAME'=>'Nazwa odbiorcy',
	'LBL_LIST_SEND_ATTEMPTS'=>'Próba wysłania',
	'LBL_LIST_SEND_DATE_TIME'=>'Wysłane O',
	'LBL_LIST_USER_NAME'=>'Nazwa użytkownika',
	'LBL_LOCATION_ONLY'=>'Lokalizacja',
	'LBL_LOCATION_TRACK'=>'Lokalizacja pliku śledzenia trwania kampanii (jak campaign_tracker.php)',
	'LBL_CAMP_MESSAGE_COPY'=> 'Zachowaj kopie wiadomości kampanii:',
	'LBL_CAMP_MESSAGE_COPY_DESC'=> 'Czy chcesz zachować kompletną kopię wiadomości wysłanych podczas wszystkich kampanii?  <bold>Zaleca się pozostawienie opcji w domyślnym ustawieniu - Nie</bold>.  Wybierając <bold>Nie</bold>, zachowane zostaną wzory i niezbędne zmienne wiadomości, aby odtworzyć oryginalną wiadomość.',
	'LBL_MAIL_SENDTYPE'=> 'Typ serwera poczty (MTA):',
	'LBL_MAIL_SMTPAUTH_REQ'=> 'Użyj uwierzytelnienia SMTP?',
	'LBL_MAIL_SMTPPASS'=> 'Hasło SMTP:',
	'LBL_MAIL_SMTPPORT'=> 'Port SMTP:',
	'LBL_MAIL_SMTPSERVER'=> 'Nazwa serwera SMTP:',
	'LBL_MAIL_SMTPUSER'=> 'Nazwa użytkownika SMTP:',
	'LBL_MARKETING_ID'=>'Marketing Id',
    'LBL_MODULE_ID'                             => 'Zarządzanie pocztą',
	'LBL_MODULE_NAME'=>'Masowa wysyłka',
	'LBL_CAMP_MODULE_NAME'						=> 'Ustawienia wiadomości kampanii',
	'LBL_MODULE_TITLE' 					=> 'Zarządzanie kolejkowaniem masowej wysyłki',
	'LBL_NOTIFICATION_ON_DESC' => 'Wysyłaj powiadomienie emailem, gdy rekordy są przydzielone.',
	'LBL_NOTIFY_FROMADDRESS' => 'Adres "Od":',
	'LBL_NOTIFY_FROMNAME' => 'Nazwa "Od":',
	'LBL_NOTIFY_ON'=> 'Powiadomienia włączone?',
	'LBL_NOTIFY_SEND_BY_DEFAULT'=> 'Wysyła powiadomienia domyślnie dla nowych Użytkowników?',
	'LBL_NOTIFY_TITLE'=> 'Opcje powiadamiania wiadomości pocztowych',
	'LBL_OLD_ID'=>'Dawne Id',
	'LBL_OUTBOUND_EMAIL_TITLE'=> 'Opcje dla wiadomości wychodzących',
	'LBL_RELATED_ID'=>'Połączone Id',
	'LBL_RELATED_TYPE'=>'Połączony typ',
	'LBL_SAVE_OUTBOUND_RAW'=> 'Zapisz źródło wiadomości wychodzących',
	'LBL_SEARCH_FORM_PROCESSED_TITLE'=>'Przeprowadź poszukiwanie',
	'LBL_SEARCH_FORM_TITLE'=>'Przeszukaj oczekujące',
	'LBL_VIEW_PROCESSED_EMAILS'=>'Obejrzyj trwające wysyłki',
	'LBL_VIEW_QUEUED_EMAILS'=>'Obejrzyj oczekujące wysyłki',
	'TRACKING_ENTRIES_LOCATION_DEFAULT_VALUE'=> 'Wartość zmiennej site_urlw pliku Config.php',
	'TXT_REMOVE_ME_ALT'=>'Aby usunąć siebie z listy wysyłkowej idź do',
	'TXT_REMOVE_ME_CLICK'=>'Kliknij tutaj',
	'TXT_REMOVE_ME'=>'Aby usunąć siebie z tej listy wysyłkowej',
	'LBL_NOTIFY_SEND_FROM_ASSIGNING_USER'		=> 'Czy wysłać powiadomienie z przydzielonego do użytkownika adresu?',

	'LBL_SECURITY_TITLE'=> 'Ustawienia zabezpieczeń wiadomości pocztowych',
	'LBL_SECURITY_DESC'=> 'Poniżej zaznacz elementy, które NIE powinny być dozwolone w poczcie przychodzącej, lub wyświetlane w Module Poczty.',
	'LBL_SECURITY_APPLET'		=> 'Znacznik apletu',
	'LBL_SECURITY_BASE'		=> 'Znaczik podstawowy',
	'LBL_SECURITY_EMBED'		=> 'Znacznik osadzony',
	'LBL_SECURITY_FORM'		=> 'Znacznik formularza',
	'LBL_SECURITY_FRAME'		=> 'Znacznik ramki',
	'LBL_SECURITY_FRAMESET'	=> 'Znacznik zestawu ramek',
	'LBL_SECURITY_IFRAME'		=> 'Znacznik iFrame',
	'LBL_SECURITY_IMPORT'		=> 'Znacznik importu',
	'LBL_SECURITY_LAYER'		=> 'Znacznik warstwy',
	'LBL_SECURITY_LINK'		=> 'Znacznik linku',
	'LBL_SECURITY_OBJECT'		=> 'Znacznik obiektu',
	'LBL_SECURITY_OUTLOOK_DEFAULTS'=> 'Wybierz domyślne minimalne środki bezpieczeństwa Outlooka (błędy na prawidłowo wyświetlonej stronie).',
	'LBL_SECURITY_PRESERVE_RAW'=> 'Zabezpiecz źródła wiadomości, zawierającym potencjalnie niebezpieczną zawartość. Ta opcja zabezpieczy nagłówki wiadomości w bazie danych. Nie pozwala ona na ekpozycję niefiltrowanej zawartości przez SugarCRM UI.<br /><span class="error"></span> Może to prowadzić do obniżenia wydajności systemu.',
	'LBL_SECURITY_SCRIPT'						=> 'Znacznik skryptu',
	'LBL_SECURITY_STYLE'						=> 'Znacznik stylu',
	'LBL_SECURITY_TOGGLE_ALL'					=> 'Zaznacz wszystko',
	'LBL_SECURITY_XMP'							=> 'Znacznik Xmp',
    'LBL_YES'                                   => 'Tak',
    'LBL_NO'                                    => 'Nie',
    'LBL_PREPEND_TEST'                          => '[Test]: ',
'LBL_SEND_ATTEMPTS'			=> 'Próby wysyłki',
);
?>
