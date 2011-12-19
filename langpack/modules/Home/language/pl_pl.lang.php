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
 * pl_pl.lang.php,v for SugarCRM 4.5.1->>
 * Translator: Krzysztof Morawski
 * All Rights Reserved.
 * Any bugs report welcome: krzysiek<at>kmmgroup<dot>pl
 * Contributor(s): ______________________________________..
 ********************************************************************************/

$mod_strings = array (
  'LBL_MODULE_NAME' => 'Strona główna',
  'LBL_NEW_FORM_TITLE' => 'Nowy kontakt',
  'LBL_FIRST_NAME' => 'Imię:',
  'LBL_LAST_NAME' => 'Nazwisko:',
  'LBL_LIST_LAST_NAME' => 'Nazwisko',
  'LBL_PHONE' => 'Telefon:',
  'LBL_EMAIL_ADDRESS' => 'Email:',
  'LBL_MY_PIPELINE_FORM_TITLE' => 'Moje zestawienia',
  'LBL_PIPELINE_FORM_TITLE' => 'Zestawienia etapow sprzedaży',
  'LBL_CAMPAIGN_ROI_FORM_TITLE' => 'Kampanie zwrotu z inwestycji (ROI)',
  'LBL_MY_CLOSED_OPPORTUNITIES_GAUGE' => 'Mój wskaźnik zamkniętych tematów',
  'LNK_NEW_CONTACT' => 'Utwórz: kontakt',
  'LNK_NEW_ACCOUNT' => 'Klienta',
  'LNK_NEW_OPPORTUNITY' => 'Temat',

  'LNK_NEW_QUOTE' => 'Oferty',

  'LNK_NEW_LEAD' => 'Wizytówkę',
  'LNK_NEW_CASE' => 'Sprawę',
  'LNK_NEW_NOTE' => 'Notatkę lub załącznik',
  'LNK_NEW_CALL' => 'Rozmowy telefoniczne',
  'LNK_NEW_EMAIL' => 'Archiwum poczty',
  'LNK_COMPOSE_EMAIL' => 'Napisz email',
  'LNK_NEW_MEETING' => 'Spotkania',
  'LNK_NEW_TASK' => 'Zadanie',
  'LNK_NEW_BUG' => 'Zgłoś błąd',
  'LBL_ADD_BUSINESSCARD' => 'Kontakt z wizytówki',
  'ERR_ONE_CHAR' => 'Wprowadź co najmniej jedną literę, lub cyfrę, aby przeszukać ...',
  'LBL_OPEN_TASKS' => 'Moje otwarte sprawy',
  'LBL_SEARCH_RESULTS' => 'Wyniki szukania',
  'LBL_SEARCH_RESULTS_IN' => 'w', 
  'LNK_NEW_SEND_EMAIL' => 'Napisz email',
  'LBL_NO_RESULTS_IN_MODULE' => '-- Brak wyników --',
  'LBL_NO_RESULTS' => '<h2>Nie było wyników wyszukiwania. Przeszukaj jeszcze raz.</h2><br>',
  'LBL_NO_RESULTS_TIPS' => '<h3>Podpowiedź:</h3><ul><li>Upewnij się, że wybrałeś odpowiednią kategorię powyżej</li><li>Określ swoje kryteria wyszukiwania.</li><li>Jeżeli nadal nie możesz otrzymać żadnych wyników, spróbuj zaawansowanego wyszukiwania w tym module.</li></ul>',
  
  'LBL_RELOAD_PAGE' => '<a href="javascript: window.location.reload()">Przeładuj okno</a> aby użyć tej Belki.',
  'LBL_ADD_DASHLETS' => 'Dodaj belkę',
  'LBL_ADD_PAGE' => 'Dodaj stronę',
  'LBL_DELETE_PAGE' => 'Usuń stronę',
  'LBL_CHANGE_LAYOUT' => 'Zmień wygląd',
  'LBL_RENAME_PAGE' => 'Zmień nazwę strony',
  'LBL_CLOSE_DASHLETS' => 'Zamknij',
  'LBL_CLOSE_SITEMAP' => 'Zamknij',
  'LBL_OPTIONS' => 'Opcje', 
  // dashlet search fields
  'LBL_TODAY'=>'Dziś',
  'LBL_YESTERDAY' => 'Wczoraj', 
  'LBL_TOMORROW'=>'Jutro',
  'LBL_LAST_WEEK'=>'W ostatnim tygodniu',
  'LBL_NEXT_WEEK'=>'W następnym tygodniu',
  'LBL_LAST_7_DAYS'=>'Ostatnie 7 dni',
  'LBL_NEXT_7_DAYS'=>'Następne 7 dni',
  'LBL_LAST_MONTH'=>'Ostatni miesiąc',
  'LBL_NEXT_MONTH'=>'Następny miesiąc',
  'LBL_LAST_QUARTER'=>'Ostatni kwartał',
  'LBL_THIS_QUARTER'=>'Ten kwartał',
  'LBL_LAST_YEAR'=>'Ostatni rok',
  'LBL_NEXT_YEAR'=>'Następny rok',
  'LBL_THIS_MONTH' => 'Ten miesiąc',
  'LBL_THIS_YEAR' => 'Ten rok',
  'LBL_LAST_30_DAYS' => 'Ostatnie 30 dni',
  'LBL_NEXT_30_DAYS' => 'Następne 30 dni',
  'LBL_THIS_MONTH' => 'Tego miesiąca',
  'LBL_THIS_YEAR' => 'Tego Roku',
  'LBL_LAST_30_DAYS' => 'Ostatnie 30 Dni',
  'LBL_NEXT_30_DAYS' => 'Następne 30 dni',
  'LBL_MODULES' => 'Moduły',
  'LBL_CHARTS' => 'Wykresy',
  'LBL_TOOLS' => 'Narzędzia',
  'LBL_SEARCH_RESULTS' => 'Wyniki wyszukiwania',
  
  // Dashlet Categories
  'dashlet_categories_dom' => array(
  'Module Views' => 'Widok modułu',
  'Portal' => 'Portal',
  'Charts' => 'Wykresy',
  'Tools' => 'Narzędzia',
  'Miscellaneous' => 'Inne'),
  'LBL_MAX_DASHLETS_REACHED' => 'Osiągnąłeś maksymalną liczbe belek przewidzianą dla Ciebie przez administratora. Usuń belkę, aby dodać inne.',
  'LBL_ADDING_DASHLET' => 'Dodaję belkę ...',
  'LBL_ADDED_DASHLET' => 'Belka została dodana',
  'LBL_REMOVE_DASHLET_CONFIRM' => 'Czy na pewno chcesz usunąć tę belkę?',
  'LBL_REMOVING_DASHLET' => 'Usuwam belkę ...',
  'LBL_REMOVED_DASHLET' => 'Belka została usunięta',
  'LBL_DASHLET_CONFIGURE_GENERAL' => 'Ogólnie',
  'LBL_DASHLET_CONFIGURE_FILTERS' => 'Filtry',
  'LBL_DASHLET_CONFIGURE_MY_ITEMS_ONLY' => 'Tylko moje elementy',
  'LBL_DASHLET_CONFIGURE_TITLE' => 'Tytuł',
  'LBL_DASHLET_CONFIGURE_DISPLAY_ROWS' => 'Wyświetl wiersze',
//  'LBL_DASHLET_CONFIGURE_MY_ITEMS_ONLY' => 'My Items Only',

  'LBL_DASHLET_DELETE' => 'Usuń zakładkę',
  'LBL_DASHLET_REFRESH' => 'Odśwież zakładke',
  'LBL_DASHLET_EDIT' => 'Edytuj zakładkę', 

  'LBL_TRAINING_TITLE' => 'Trening',

  'LBL_CREATING_NEW_PAGE' => 'Utwórz nową stronę...',
  'LBL_NEW_PAGE_FEEDBACK' => 'Możesz utworzyć nową stornę. Możesz dodać zawartość przy pomocy opcji Dodaj zakładkę.',
  'LBL_DELETE_PAGE_CONFIRM' => 'Czy na pewno chcesz usunąć tę stronę?',
  'LBL_SAVING_PAGE_TITLE' => 'Zapisuje tytuł strony..',  
  'LBL_RETRIEVING_PAGE' => 'Naprawiam stronę...',
  
  // Default out-of-box names for tabs
  'LBL_HOME_PAGE_1_NAME' => 'Mój Sugar',
  'LBL_HOME_PAGE_2_NAME' => 'Strona sprzedaży',
  'LBL_HOME_PAGE_3_NAME' => 'Strona marketingu i wsparcia',
  
  'LBL_CLOSE_SITEMAP' =>'Zamknij',
  
  'LBL_SEARCH' => 'Szukaj',
  'LBL_CLEAR' => 'Wyczyść', 
  
  'LBL_BASIC_CHARTS' => 'Podstawowe wykresy',
  'LBL_REPORT_CHARTS' => 'Raporty wykresów',
  
  'LBL_MY_FAVORITE_REPORT_CHARTS' => 'Moje ulubione raporty',
  'LBL_GLOBAL_REPORT_CHARTS' => 'Raporty głównego zespołu',
  'LBL_MY_TEAM_REPORT_CHARTS' => 'Raporty mojego zespołu',
  'LBL_MY_SAVED_REPORT_CHARTS' => 'Moje zapisane raporty',
  
  'LBL_DASHLET_SEARCH' => 'Znajdź zakładkę',

//ABOUT page
  'LBL_VERSION' => 'Wersja',
  'LBL_BUILD' => 'Build',
  'LBL_VIEWLICENSE_COM' => '<P>This program is free software; you can redistribute it and/or modify it under the terms of the <a href="LICENSE.txt" target="_blank" class="body"> GNU General Public License version 3</a> as published by the Free Software Foundation including the additional permission set forth in the source code header.</P>',
  'LBL_ADD_TERM_COM' => '<P>The interactive user interfaces in modified source and object code versions of this program must display Appropriate Legal Notices, as required under Section 5 of the GNU General Public License version 3. In accordance with Section 7(b) of the GNU General Public License version 3, these Appropriate Legal Notices must retain the display of the &quot;Powered by SugarCRM&quot; logo. If the display of the logo is not reasonably feasible for technical reasons, the Appropriate Legal Notices must display the words &quot;Powered by SugarCRM&quot;.</P>',
  'LBL_SUGAR_COMMUNITY_EDITION' => 'Sugar Community Edition',
  'LBL_SUGAR_PROFESSIONAL' => "Sugar Professional",
  'LBL_SUGAR_ENTERPRISE' => "Sugar Enterprise",
  'LBL_AND' => "i",
  'LBL_ARE' => "są",
  'LBL_TRADEMARKS' => 'znaki towarowe',
  'LBL_OF' => 'z',
  'LBL_FOUNDERS' => 'Fundatorzy',
  'LBL_JOIN_SUGAR_COMMUNITY' => 'Przyłącz się do Sugar Community',
  'LBL_SUBSCRIBE_SUGARBUZZ' => 'Subskrybuj newsletter SugarBuzz',
  'LBL_DETAILS_SUGARFORGE' => 'Wspieraj i projektuj rozszerzenia Sugar',
  'LBL_DETAILS_SUGAREXCHANGE' => 'Kupuj i sprzedawaj certyfikowane rozszerzenia Sugar',
  'LBL_TRAINING' => 'Trening',
  'LBL_DETAILS_TRAINING' => 'Dowiedz się więcej o Sugar, używając interaktywnych poradników dostępnych online',
  'LBL_FORUMS' => 'Forum',
  'LBL_DETAILS_FORUMS' => 'Podyskutuj z ekspertami społeczności, użytkownikami i programistami',
  'LBL_WIKI' => 'Wiki',
  'LBL_DETAILS_WIKI' => 'Przeszukuj bazę wiedzy tematów pomocy',
  'LBL_DEVSITE' => 'Strona progamistów',
  'LBL_DETAILS_DEVSITE' => 'Odkryj zasoby, poradniki i pomocne linki, aby przyspieszyć swoje umiejetności w projektowaniu Sugar',
  'LBL_GET_SUGARCRM_RSS' => 'Przejrzyj SugarCRM RSS',
  'LBL_SUGARCRM_NEWS' => 'Nowości SugarCRM',
  'LBL_SUGARCRM_TRAINING_NEWS' => 'Nowości w treningu SugarCRM',
  'LBL_SUGARCRM_FORUMS' => 'Forum SugarCRM',
  'LBL_SUGARFORGE_NEWS' => 'Nowości SugarForge',
  'LBL_ALL_NEWS' => 'Wszystkie nowości',
  'LBL_LINK_CURRENT_CONTRIBUTORS' => 'Kliknij ten link, aby zobaczyć bieżącą listę programistów Sugar!',
  'LBL_SOURCE_CODE' => 'Kod źródłowy',
  'LBL_SOURCE_SUGAR' => 'Sugar - The world\'s most popular sales force automation application created by SugarCRM Inc.',
  'LBL_SOURCE_XTEMPLATE' => 'XTemplate - A template engine for PHP created by Barnabás Debreceni',
  'LBL_SOURCE_LOG4PHP' => 'Log4php - A PHP port of Log4j, the most popular Java logging framework, created by Ceki Gülcü',
  'LBL_SOURCE_NUSOAP' => 'NuSOAP - A set of PHP classes that allow developers to create and consume web services created by NuSphere Corporation and Dietrich Ayala',
  'LBL_SOURCE_JSCALENDAR' => 'JS Calendar - A calendar for entering dates created by Mihai Bazon',
  'LBL_SOURCE_PHPPDF' => 'PHP PDF - A library for creating PDF documents created by Wayne Munro',
  'LBL_SOURCE_DOMIT' => 'DOMIT! - An xml parser for PHP based on the Document Object Model (DOM) Level 2 Spec.',
  'LBL_SOURCE_DOMITRSS' => 'DOMIT RSS - An RSS feed parser based on the DOMIT pure PHP XML parser.',
  'LBL_SOURCE_PNGBEHAVIOR' => 'PNG Behavior - Adds support for PNG graphic format to Internet Explorer.',
  'LBL_SOURCE_JSONPHP' => 'JSON.php - A PHP script to convert to and from JSON data format by Michal Migurski.',
  'LBL_SOURCE_JSON' => 'JSON.js - A JSON parser and JSON stringifier in JavaScript.',
  'LBL_SOURCE_HTTP_WEBDAV_SERVER' => 'HTTP_WebDAV_Server - A WebDAV Server Implementation in PHP.',
  'LBL_SOURCE_JS_O_LAIT' => 'JavaScript O Lait - A library of reusable modules and components to enhance JavaScript by Jan-Klaas Kollhof.',
  'LBL_SOURCE_PCLZIP' => 'PclZip - library offers compression and extraction functions for Zip formatted archives by Vincent Blavet',
  'LBL_SOURCE_SMARTY' => 'Smarty - A template engine for PHP.',
  'LBL_SOURCE_OVERLIBMWS' => 'Overlibmws - JavaScript library for client-side windowing.',
  'LBL_SOURCE_WICK' => 'WICK: Web Input Completion Kit - JavaScript type ahead control',
  'LBL_SOURCE_YAHOO_UI_LIB' => 'Yahoo! User Interface Library - The UI Library Utilities facilitate the implementation of rich client-side features.',
  'LBL_SOURCE_PHPMAILER' => 'PHPMailer - A full featured email transfer class for PHP',
  'LBL_SOURCE_CRYPT_BLOWFISH' => 'Crypt_Blowfish - Allows for quick two-way blowfish encryption without requiring the MCrypt PHP extension.',
  'LBL_SOURCE_PHP_COMPAT' => 'PHP_Compat - Provides missing functionality for older versions of PHP.',
  'LBL_SOURCE_HTML_SAFE' => 'HTML_Safe - A parser that strips down all potentially dangerous content within HTML',
  'LBL_SOURCE_XML_HTMLSAX3' => 'XML_HTMLSax3 - A SAX parser for HTML and other badly formed XML documents',
  'LBL_SOURCE_YAHOO_UI_LIB_EXT' => 'Yahoo! UI Extensions Library - Extensions to the Yahoo! User Interface Library by Jack Slocum',
  'LBL_SOURCE_JSMIN' => 'JSMin - filter which removes comments and unnecessary whitespace from JavaScript files.',
  'LBL_SOURCE_SWFOBJECT' => 'SWFObject - Javascript Flash Player detection and embed script.',
  'LBL_SOURCE_TINYMCE' => 'TinyMCE - A WYSIWYG editor control for web browsers that enables the user to edit HTML contents',
  'LBL_SOURCE_EXT' => 'Ext - A client-side JavaScript framework for building web applications.',

);


?>
