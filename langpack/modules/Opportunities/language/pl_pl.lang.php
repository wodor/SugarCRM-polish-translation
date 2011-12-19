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
 * pl_pl.lang.php,v for SugarCRM 4.5.1-->>
 * Translator: Krzysztof Morawski
 * All Rights Reserved.
 * Any bugs report welcome: krzysiek<at>kmmgroup<dot>pl
 * Contributor(s): ______________________________________..
 ********************************************************************************/



$mod_strings = array (
  'LBL_MODULE_NAME' => 'Tematy',
  'LBL_MODULE_TITLE' => 'Tematy: Strona główna',
  'LBL_SEARCH_FORM_TITLE' => 'Wyszukaj',
  'LBL_VIEW_FORM_TITLE' => 'Widok tematów',
  'LBL_LIST_FORM_TITLE' => 'Lista tematów',
  'LBL_OPPORTUNITY_NAME' => 'Nazwa tematu:',
  'LBL_OPPORTUNITY' => 'Temat:',
  'LBL_NAME' => 'Nazwa Tematu',
  'LBL_INVITEE' => 'Kontakty',
  'LBL_LIST_OPPORTUNITY_NAME' => 'Temat',
  'LBL_LIST_ACCOUNT_NAME' => 'Nazwa klienta',
  'LBL_LIST_AMOUNT' => 'Kwota przychodu',
  'LBL_LIST_DATE_CLOSED' => 'Zakończone',
  'LBL_LIST_SALES_STAGE' => 'Etap sprzedaży',
  'LBL_ACCOUNT_ID'=>'ID klienta',
  'LBL_CURRENCY_ID'=>'ID waluty',
  'LBL_CURRENCY_NAME'=>'Nazwa waluty',
  'LBL_CURRENCY_SYMBOL'=>'Symbol waluty',

  'LBL_TEAM_ID' =>'ID Zespołu',

//DON'T CONVERT THESE THEY ARE MAPPINGS
  'db_sales_stage' => 'LBL_LIST_SALES_STAGE',
  'db_name' => 'LBL_NAME',
  'db_amount' => 'LBL_LIST_AMOUNT',
  'db_date_closed' => 'LBL_LIST_DATE_CLOSED',
//END DON'T CONVERT
  'UPDATE' => 'Temat - Aktualizuj waluty',
  'UPDATE_DOLLARAMOUNTS' => 'Aktualizuj przychody w USD',
  'UPDATE_VERIFY' => 'Weryfikuj kwotę przychodu',
  'UPDATE_VERIFY_TXT' => 'Weryfikuje tylko te wartości, które zapisane są w postaci cyfrowej (cyfry 0-9) oraz w postaci dziesiętnej.',
  'UPDATE_FIX' => 'Napraw przychody',
  'UPDATE_FIX_TXT' => 'Próba naprawienia wartości przychodów poprzez przekształcenie znalezionych wartości do postaci liczbowej. Obecne wartości zostaną zapisane w kopii bezpieczeństwa. Jeśli operacja spowoduje powstanie błędów możesz przywrócić poprzednie wartości z kopii bezpieczeństwa. Nie ponawiaj tej operacji po wykryciu nieprawidłowości. Grozi to nadpisaniem kopii bezpieczeństwa błędnymi danymi!.',
  'UPDATE_DOLLARAMOUNTS_TXT' => 'Aktualizuje przychody z tematów w oparciu o przelicznik do waluty bazowej (USD). Wartości te są używane do sporządzania wykresów oraz zestwień wartości Ofert.',
  'UPDATE_CREATE_CURRENCY' => 'Tworzenie nowej waluty:',
  'UPDATE_VERIFY_FAIL' => 'Błąd weryfikacji rekordu:',
  'UPDATE_VERIFY_CURAMOUNT' => 'Bierzące przychody:',
  'UPDATE_VERIFY_FIX' => 'Running Fix would give',
  'UPDATE_INCLUDE_CLOSE' => 'Dodaj zamknięte rekordy',
  'UPDATE_VERIFY_NEWAMOUNT' => 'Nowy przychód:',
  'UPDATE_VERIFY_NEWCURRENCY' => 'Nowa waluta:',
  'UPDATE_DONE' => 'Zrobione.',
  'UPDATE_BUG_COUNT' => 'Znaleziono błąd, trwa próba naprawienia:',
  'UPDATE_BUGFOUND_COUNT' => 'Znalezione błędy:',
  'UPDATE_COUNT' => 'Rekord zaktualizowany:',
  'UPDATE_RESTORE_COUNT' => 'Odzyskano przychód:',
  'UPDATE_RESTORE' => 'Odzyskiwanie przychodu',
  'UPDATE_RESTORE_TXT' => 'Odzyskiwanie wartości przychodów z kopii bezpieczeństwa.',
  'UPDATE_FAIL' => 'Nie mogę zaktualizować - ',
  'UPDATE_NULL_VALUE' => 'Wartosć przychodu nieznana. Ustawiam na 0 -',
  'UPDATE_MERGE' => 'Połącz waluty',
  'UPDATE_MERGE_TXT' 						=> 'Łączy wiele walut w pojedynczą walutę. Użyj tej funkcji jeśli Twoje dane zawierają różne oznaczenia tej samej waluty np.: PLN, PLZ, ZŁ, zł. ',
  'LBL_ACCOUNT_NAME' => 'Nazwa klienta:',
  'LBL_AMOUNT' => 'Wartość tematu:',
  'LBL_AMOUNT_USDOLLAR' => 'Wartość USD:',
  'LBL_CURRENCY' => 'Waluta:',
  'LBL_DATE_CLOSED' => 'Data zakończenia etapu:',
  'LBL_TYPE' => 'Typ:',
  'LBL_CAMPAIGN' => 'Kampania:',
  'LBL_NEXT_STEP' => 'Następny krok:',
  'LBL_LEAD_SOURCE' => 'Źródło pozyskania:',
  'LBL_SALES_STAGE' => 'Etap sprzedaży:',
  'LBL_PROBABILITY' => 'Szansa (%):',
  'LBL_DESCRIPTION' => 'Opis:',
  'LBL_DUPLICATE' => 'Prawdopodobnie taki temat już istnieje',
  'MSG_DUPLICATE' => 'Utworzenie tego tematu prawdopodobnie spowoduje powstanie duplikatu już istniejącego. Możesz wybrać istniejący temat z listy lub kontynuować klikając [Zapisz]. Operacja ta utworzy nowy temat wykorzystując dane, które wprowadziłeś za pomocą formularza. ',
  'LBL_NEW_FORM_TITLE' => 'Dodaj temat',
  'LNK_NEW_OPPORTUNITY' => 'Dodaj temat',

  'LNK_OPPORTUNITY_REPORTS' => 'Raporty tematów',

  'LNK_OPPORTUNITY_LIST' => 'Tematy',
  'ERR_DELETE_RECORD' => 'Muszisz wybrac rekord, aby usunąć temat.',
  'LBL_TOP_OPPORTUNITIES' => '10 moich najważniejszych tematów',
  'NTC_REMOVE_OPP_CONFIRMATION' => 'Czy na pewno usunąć osoby Kontaktowe z tego tematu?',
	'OPPORTUNITY_REMOVE_PROJECT_CONFIRM' => 'Czy na pewno chcesz usunąć to zadanie z tematu?',
	'LBL_AMOUNT_BACKUP'=>'Wielkość backupu',
	'LBL_DEFAULT_SUBPANEL_TITLE' => 'Tematy',
	'LBL_ACTIVITIES_SUBPANEL_TITLE'=>'Działania',
	'LBL_HISTORY_SUBPANEL_TITLE'=>'Historia',
    'LBL_RAW_AMOUNT'=>'Wstępna Kwota',
	
    'LBL_LEADS_SUBPANEL_TITLE' => 'Wizytówki',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontakty',

    'LBL_QUOTES_SUBPANEL_TITLE' => 'Oferty',

    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projekty',
	    'LBL_ASSIGNED_TO_NAME' => 'Nazwa przydzielonego użytkownika:',

	'LBL_CONTRACTS'=>'Kontrakty',
	'LBL_CONTRACTS_SUBPANEL_TITLE'=>'Kontrakty',

  'LBL_LIST_SALES_STAGE' => 'Etapy sprzedaży',
  'LBL_MY_CLOSED_OPPORTUNITIES' => 'Moje zamknięte tematy',
  'LBL_TOTAL_OPPORTUNITIES' => 'Wszystkie tematy',
  'LBL_CLOSED_WON_OPPORTUNITIES' => 'Tematy zakończone wygraną',
  'LBL_ASSIGNED_TO_ID' =>'Przydzielone do (ID)',
  'LBL_CREATED_ID'=>'Utworzone przez (ID)',
  'LBL_MODIFIED_ID'=>'Zmodyfikowane przez (ID)',
  'LBL_MODIFIED_NAME'=>'Nazwa użytkownika modyfikującego',
   'LBL_CREATED_USER' => 'Użytkownik tworzący',
   'LBL_MODIFIED_USER' => 'Użytkownik modyfikujący',
'LBL_CAMPAIGN_OPPORTUNITY' => 'Kampania',

);

?>
