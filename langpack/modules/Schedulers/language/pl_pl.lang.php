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
 * pl_pl.lang.php,v for SugarCRM 4.5-->>
 * Translator: Krzysztof Morawski
 * All Rights Reserved.
 * Any bugs report welcome: krzysiek<at>mojsklepik<dot>net
 * Contributor(s): ______________________________________..
 ********************************************************************************/

global $sugar_config;
 
$mod_strings = array (
// OOTB Scheduler Job Names:
	'LBL_OOTB_WORKFLOW'		=> 'Przeprowadź prace do wykonania',
	'LBL_OOTB_REPORTS'		=> 'wykonaj raport z wykonania zaplanowanych zadań',
	'LBL_OOTB_IE'			=> 'Sprawdź skrzynki poczty przychodzącej',
	'LBL_OOTB_BOUNCE'		=> 'Wykonaj nocną wysyłkę odbitej poczty kampanii',
	'LBL_OOTB_CAMPAIGN'		=> 'Wykonaj nocną masową wysyłkę poczty kampanii',
	'LBL_OOTB_PRUNE'		=> 'Oczyść bazę danych 1-go dnia miesiąca',
	'LBL_UPDATE_TRACKER_SESSIONS'	=> 'Uaktualnij tabele sesji śledzenia',
// List Labels
'LBL_LIST_JOB_INTERVAL' => 'Interwał:',
'LBL_LIST_LIST_ORDER' => 'Harmonogramy:',
'LBL_LIST_NAME' => 'Harmonogram:',
'LBL_LIST_RANGE' => 'Zakres:',
'LBL_LIST_REMOVE' => 'Usuń:',
'LBL_LIST_STATUS' => 'Status:',
'LBL_LIST_TITLE' => 'Lista harmonogramów:',
'LBL_LIST_EXECUTE_TIME' => 'Rozpocznie się o:',
// human readable:
'LBL_SUN'		=> 'Niedziela',
'LBL_MON'		=> 'Poniedziałek',
'LBL_TUE'		=> 'Wtorek',
'LBL_WED'		=> 'Środa',
'LBL_THU'		=> 'Czwartek',
'LBL_FRI'		=> 'Piątek',
'LBL_SAT'		=> 'Sobota',
'LBL_ALL'		=> 'Każdego dnia',
'LBL_EVERY_DAY'	=> 'Każdego dnia ',
'LBL_AT_THE'	=> 'O  ',
'LBL_EVERY'		=> 'Każdego ',
'LBL_FROM'		=> 'Od ',
'LBL_ON_THE'	=> 'Co ',
'LBL_RANGE'		=> ' do ',
'LBL_AT' 		=> ' o ',
'LBL_IN'		=> ' w ',
'LBL_AND'		=> ' i ',
'LBL_MINUTES'	=> ' minut ',
'LBL_HOUR'		=> ' godzin',
'LBL_HOUR_SING'	=> ' godzina',
'LBL_MONTH'		=> ' miesiąc',
'LBL_OFTEN'		=> ' Tak często, jak tylko możliwe.',
'LBL_MIN_MARK'	=> ' minut',


// crontabs
'LBL_MINS' => 'minuty',
'LBL_HOURS' => 'godziny',
'LBL_DAY_OF_MONTH' => 'dzień miesiąca',
'LBL_MONTHS' => 'miesiąc',
'LBL_DAY_OF_WEEK' => 'dzień tygodnia',
'LBL_CRONTAB_EXAMPLES' => 'Powyżej użyto notacji crontaba.',
// Labels
'LBL_ALWAYS' => 'Zawsze',
'LBL_CATCH_UP' => 'Przeprowadź, jeżeli przegapiono',
'LBL_CATCH_UP_WARNING' => 'Odznacz, jeżeli to działanie ma potrwać dłuzej.',
'LBL_DATE_TIME_END' => 'Data i czas zakończenia',
'LBL_DATE_TIME_START' => 'Data i czas rozpoczęcia',
'LBL_INTERVAL' => 'Interwał',
'LBL_JOB' => 'Praca',
'LBL_LAST_RUN' => 'Ostanie wykonanie',
'LBL_MODULE_NAME' => 'Harmonogram aplikacji',
'LBL_MODULE_TITLE' => 'Harmonogram',
'LBL_NAME' => 'Nazwa pracy',
'LBL_NEVER' => 'Nigdy',
'LBL_NEW_FORM_TITLE' => 'Nowy harmonogram',
'LBL_PERENNIAL' => 'bez przerwy',
'LBL_SEARCH_FORM_TITLE' => 'Szukanie harmonogramu',
'LBL_SCHEDULER' => 'Harmonogram:',
'LBL_STATUS' => 'Status',
'LBL_TIME_FROM' => 'Aktywny od',
'LBL_TIME_TO' => 'Aktywny do',
'LBL_WARN_CURL_TITLE' => 'Ostrzeżenie cURL:',
'LBL_WARN_CURL' => 'Ostrzeżenie:',
'LBL_WARN_NO_CURL' => 'Ten system nie posiada bibliotek cURL włączonych lub wkompilowanych w moduł PHP (--with-curl=/path/to/curl_library).  Skontaktuj się z Administratorem, aby rozwiązać ten problem.  Bez cURL nie można przeprowadzić harmonogramu.',
'LBL_BASIC_OPTIONS' => 'Podstawowe ustawienia',
'LBL_ADV_OPTIONS'		=> 'Opcje zaawansowane',
'LBL_TOGGLE_ADV' => 'Opcje zaawansowane',
'LBL_TOGGLE_BASIC' => 'Podstawowe ustawienia',
// Links
'LNK_LIST_SCHEDULER' => 'Harmonogramy',
'LNK_NEW_SCHEDULER' => 'Utwórz harmonogram',
'LNK_LIST_SCHEDULED' => 'Zaplanowane prace',



// Messages
'SOCK_GREETING' => "\nTo jest interfejs dla serwisu harmonogramów SugarCRM. \n[ Dostępne komendy demona: start|restart|shutdown|status ]\nAby wyjść, wpisz 'quit'.  Aby wyłączyc serwis, wpisz 'shutdown'.\n",
'ERR_DELETE_RECORD' => 'Musi być podany numer rekordu, aby usunąć ten harmonogram.',
'ERR_CRON_SYNTAX' => 'Niewłaściwa składnia Crona',
'NTC_DELETE_CONFIRMATION' => 'Czy na pewno chcesz usunąć ten rekord?',
'NTC_STATUS' => 'Ustaw status na Nieaktywny, aby usunąć ten harmonogram z listy rozwijalnej harmonogramów',
'NTC_LIST_ORDER' => 'Kolejność wykonywania tego Harmonogramu pojawi się na liście rozwijalnej',
'LBL_CRON_INSTRUCTIONS_WINDOWS' => 'Aby ustawić Harmonogram Windows',
'LBL_CRON_INSTRUCTIONS_LINUX' => 'Aby ustawić Crontab',
'LBL_CRON_LINUX_DESC' => 'Dodaj tę listę do crontaba: ',
'LBL_CRON_WINDOWS_DESC' => 'Utwórz plik wsadowy zawierający te linię: ',
'LBL_NO_PHP_CLI' => 'Jeżeli twój komputer nie ma dostępu do binariów PHP, możesz użyć wget albo curl aby załadować twoje Prace.<br>Dla wget: <b>*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;wget --quiet --non-verbose '.$sugar_config['site_url'].'/cron.php > /dev/null 2>&1</b><br>for curl: <b>*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;curl --silent '.$sugar_config['site_url'].'/cron.php > /dev/null 2>&1', 
// Subpanels
'LBL_JOBS_SUBPANEL_TITLE'	=> 'Aktwyne prace',
'LBL_EXECUTE_TIME'			=> 'Czas wykonania',
// _DOM
'scheduler_status_dom' => 
	array (
	'Active' => 'Aktywny',
	'Inactive' => 'Nieaktywny',
	),
'scheduler_period_dom' => 
	array (
	'min' => 'Minuty',
	'hour' => 'Godziny',
	),
);

?>
