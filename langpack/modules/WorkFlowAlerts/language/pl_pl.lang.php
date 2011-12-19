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
  'LBL_MODULE_NAME' => 'Lista odbiorców ostrzeżeń',
  'LBL_MODULE_TITLE' => 'Odbiorcy ostrzeżeń: Strona główna',
  'LBL_SEARCH_FORM_TITLE' => 'Szukanie odbiorców prac do wykonania',
  'LBL_LIST_FORM_TITLE' => 'Lista odbiorców',
  'LBL_NEW_FORM_TITLE' => 'Utwórz odbiorcę prac do wykonania',

  'LBL_LIST_USER_TYPE' => 'Typ użytkownika',
  'LBL_LIST_ARRAY_TYPE' => 'Typ działania',
  'LBL_LIST_RELATE_TYPE' => 'Połączone działania',
  'LBL_LIST_ADDRESS_TYPE' => 'Typ adresu',
  'LBL_LIST_FIELD_VALUE' => 'Użytkownik',
  'LBL_LIST_REL_MODULE1' => 'Moduł podległy',
  'LBL_LIST_REL_MODULE2' => 'Podległy moduł modułu podległego:',
  'LBL_LIST_WHERE_FILTER' => 'Status',
  
  'LBL_USER_TYPE' => 'Typ użytkownika',
  'LBL_ARRAY_TYPE' => 'Typ akcji:',
  'LBL_RELATE_TYPE' => 'Typ zależności:',
  'LBL_WHERE_FILTER' => 'Status:',
  'LBL_FIELD_VALUE' => 'Wybrany użytkownik',
  'LBL_REL_MODULE1' => 'Moduł podległy:',
  'LBL_REL_MODULE2' => 'Podległy moduł modułu podległego:',
  'LBL_CUSTOM_USER' => 'Własny użytkownik',
  
  'LNK_NEW_WORKFLOW' => 'Utwórz pracę do wykonania',
  'LNK_WORKFLOW' => 'Obiekty pracy do wykonania',
  'LBL_LIST_STATEMENT' => 'Odbiorcy ostrzeżeń:',
  'LBL_LIST_STATEMENT_CONTENT' => 'Wyślij ostrzeżenie do następującego użytkownika: ',
  
  /////////New UI Labels
  
  'LBL_ALERT_CURRENT_USER' => 			'Użytkownik przydzielony do modułu docelowego ',
  'LBL_ALERT_CURRENT_USER_TITLE' =>'Użytkownik przydzielony do modułu docelowego',
  'LBL_ALERT_REL_USER' => 				'Użytkownik przydzielony do modułu podległego',
  'LBL_ALERT_REL_USER_TITLE' => 		'Użytkownik przydzielony do modułu podległego',
  'LBL_ALERT_REL_USER_CUSTOM' => 		'Użytkownik przydzielony do modułu podległego ',
  'LBL_ALERT_REL_USER_CUSTOM_TITLE' => 	'Użytkownik przydzielony do modułu podległego',
  'LBL_ALERT_TRIG_USER_CUSTOM' => 		'Użytkownik przydzielony do modułu docelowego ',
  'LBL_ALERT_TRIG_USER_CUSTOM_TITLE' => 'Użytkownik przydzielony do modułu docelowego;',
  'LBL_ALERT_SPECIFIC_USER' => 			'Określony ',
  'LBL_ALERT_SPECIFIC_USER_TITLE' => 	'Określony użytkownik',
  'LBL_ALERT_SPECIFIC_TEAM' => 			'Wszyscy użytkownicy w określonym  ',
  'LBL_ALERT_SPECIFIC_TEAM_TITLE' => 	'Wszyscy użytkownicy w określonym zespole',
  'LBL_ALERT_SPECIFIC_ROLE' => 			'Wszyscy użytkownicy w określonej',
  'LBL_ALERT_SPECIFIC_ROLE_TITLE' => 	'Wszyscy użytkownicy w określonej roli',
  'LBL_ALERT_LOGIN_USER_TITLE' => 		'Zalogowani użytkownicy w czasie wykonania',
  'LBL_RECORD' => 'Moduł',
  'LBL_TEAM' => 'Zespół',
  'LBL_USER' => 'Użytkownik',
  'LBL_USER_MANAGER' => 'Manager zespołu',
  'LBL_ROLE' => 'rola',
  
  
  'LBL_SEND_EMAIL' => 'Wyślij email do: ',
  'LBL_USER1' => ' który stworzył rekord',
  'LBL_USER2' => ' który ostatnio zmodyfikował rekord',
  'LBL_USER3' => 'Bieżący ',
  'LBL_USER3b' => ' systemu.',
  'LBL_USER4' => ' który jest przydzielony do rekordu',
  'LBL_USER5' => ' który jest przydzielony do rekordu',
  
  'LBL_ADDRESS_TO' => 'do:',
  'LBL_ADDRESS_CC' => 'cc:',
  'LBL_ADDRESS_BCC' => 'bcc:',
  'LBL_ADDRESS_TYPE' => 'użyj adresów ',
  'LBL_ADDRESS_TYPE_TARGET' => 'typ',
  
  
  'LBL_ALERT_REL1' => 'Moduł podległy: ',
  'LBL_ALERT_REL2' => 'Moduł podległy do podległego: ',
  
  'LBL_NEXT_BUTTON' => 'Nastepny',
  'LBL_PREVIOUS_BUTTON' => 'Poprzedni',
  
	'LBL_BLANK' => '',
	
	'NTC_REMOVE_ALERT_USER' => 'Czy na pewno chcesz usunąć tego odbiorcę ostrzeżenia?',
	

	
	//rel_user_custom
	
	'LBL_REL_CUSTOM_STRING' => 'Wybierz własny adres email i nazwy pól',
	'LBL_REL_CUSTOM' => 'Wybierz pole własny adres email',
	'LBL_REL_CUSTOM2' => 'Pole ',
	'LBL_AND' => 'i nazwę Pola:',
	'LBL_REL_CUSTOM3' => 'Pole',
	'LBL_FILTER_CUSTOM' => '(Dodatkowy filtr) Filruj podległy moduł przez określony:',
	'LBL_FIELD' => 'Pole',
	'LBL_SPECIFIC_FIELD' => 'pole',
	'LBL_FILTER_BY' => '(Dodatkowy filtr) Filruj podległy moduł przez ',
	
	
	//Invite Labels
	  'LBL_MODULE_NAME_INVITE' => 'Lista zaproszonych',
	  'LBL_LIST_STATEMENT_INVITE' => 'Zaproszeni na spotkanie/rozmowę tel.:',

	'LBL_SELECT_VALUE' => 'Musisz wybrać prawidłową wartość.',
	'LBL_SELECT_NAME' => 'Musisz określić własne pole nazwa',
	'LBL_SELECT_EMAIL' => 'Musisz określić własne pole adres e-mail',
	'LBL_SELECT_FILTER' => 'Musisz określić pole do filtrowania przez',
	'LBL_SELECT_NAME_EMAIL' => 'Musisz określić pola nazwa i adres e-mail',
);


?>
