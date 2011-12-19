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

  //module strings.
  'LBL_MODULE_NAME' => 'Prognozy',
  'LNK_NEW_OPPORTUNITY' => 'Utwórz temat',
  'LBL_MODULE_TITLE' => 'Prognozy',
  'LBL_LIST_FORM_TITLE' => 'Przeprowadzone prognozy',
  'LNK_UPD_FORECAST' => 'Roboczy arkusz prognoz',
  'LNK_QUOTA' => 'Przedziały',
  'LNK_FORECAST_LIST' => 'Historia prognoz',
  'LBL_FORECAST_HISTORY' => 'Prognozy: Historia',
  'LBL_FORECAST_HISTORY_TITLE' => 'Prognozy: Historia',
  
  //var defs
  'LBL_TIMEPERIOD_NAME' => 'Okres czasu',
  'LBL_USER_NAME' => 'Nazwa użytkownika',
  'LBL_REPORTS_TO_USER_NAME' => 'Raportuje do',
  
  //forecast table
  'LBL_FORECAST_ID' => 'ID',
  'LBL_FORECAST_TIME_ID' => 'ID Okresu czasu',
  'LBL_FORECAST_TYPE' => 'Typ prognozy',
  'LBL_FORECAST_OPP_COUNT' => 'Tematy',
  'LBL_FORECAST_OPP_WEIGH'=> 'Odmierzona kwota',
  'LBL_FORECAST_OPP_COMMIT' => 'Wykonane kwotowania',
  'LBL_FORECAST_OPP_BEST_CASE'=>'Najlepszy przypadek',
  'LBL_FORECAST_OPP_WORST'=>'Najgorszy przypadek',
  'LBL_FORECAST_USER' => 'Użytkownik',
  'LBL_DATE_COMMITTED'=> 'Data wykonania',
  'LBL_DATE_ENTERED' => 'Data wprowadzenia',
  'LBL_DATE_MODIFIED' => 'Data modyfikacji',
  'LBL_CREATED_BY' => 'Utworzone przez',
  'LBL_DELETED' => 'Usunięte',
  'LBL_MODIFIED_USER_ID'=>'Zmodyfikowane przez',
  
   //Quick Commit labels.
  'LBL_QC_TIME_PERIOD' => 'Okres czasu:',
  'LBL_QC_OPPORTUNITY_COUNT' => 'Liczba tematów:',
  'LBL_QC_WEIGHT_VALUE' => 'Odmierzona wwota:',
  'LBL_QC_COMMIT_VALUE' => 'Wykonane wwotowanie:',
  'LBL_QC_COMMIT_BUTTON' => 'Wykonaj',
  'LBL_QC_WORKSHEET_BUTTON' => 'Roboczy arkusz',
  'LBL_QC_ROLL_COMMIT_VALUE' => 'Wykonaj kwotowanie:',
  'LBL_QC_DIRECT_FORECAST' => 'Moje bezpośrednie prognozy:',
  'LBL_QC_ROLLUP_FORECAST' => 'Moje grupowe prognozy:',
  'LBL_QC_UPCOMING_FORECASTS' => 'Moje prognozy',
  'LBL_QC_LAST_DATE_COMMITTED' => 'Data ostatniego wykonania:',
  'LBL_QC_LAST_COMMIT_VALUE' => 'Ostatnie wykonane kwotowanie:',
  'LBL_QC_HEADER_DELIM'=> 'Do',
  
  //opportunity worksheet list view labels
  'LBL_OW_OPPORTUNITIES' => "Temat",
  'LBL_OW_ACCOUNTNAME' => "Klient",
  'LBL_OW_REVENUE' => "Kwota",
  'LBL_OW_WEIGHTED' => "Odmierzona kwota",
  'LBL_OW_MODULE_TITLE'=> 'Arkusz roboczy tematu',
  'LBL_OW_PROBABILITY'=>'Prawdopodobieństwo',
  'LBL_OW_NEXT_STEP'=>'Następny krok',
  'LBL_OW_DESCRIPTION'=>'Opis',
  'LBL_OW_TYPE'=>'Typ',

  //forecast schedule shortcuts
  'LNK_NEW_TIMEPERIOD' => 'Utwórz okres czasu',
  'LNK_TIMEPERIOD_LIST' => 'Okresy czasu',
  
  //Forecast schedule sub panel list view.
  'LBL_SVFS_FORECASTDATE' => 'Zaplanowana data rozpoczęcia',
  'LBL_SVFS_STATUS' => 'Status',
  'LBL_SVFS_USER' => 'Dla',
  'LBL_SVFS_CASCADE' => 'Przyłaczyć do prognoz?',
  'LBL_SVFS_HEADER' => 'Harmonogram prognoz:',
  
  //Forecast Schedule detail; view.....
   'LB_FS_KEY' => 'ID',
   'LBL_FS_TIMEPERIOD_ID' => 'ID Okresu czasu',
   'LBL_FS_USER_ID' => 'ID Użytkownika',
   'LBL_FS_TIMEPERIOD' => 'Okres czasu',   
   'LBL_FS_START_DATE' => 'Data rozpoczęcia',
   'LBL_FS_END_DATE' => 'Data zakończenia',
   'LBL_FS_FORECAST_START_DATE' => 'Data rozpoczęcia prognozy',
   'LBL_FS_STATUS' => 'Status',
   'LBL_FS_FORECAST_FOR' => 'Zaplanowane dla:',
   'LBL_FS_CASCADE' =>'Kaskadowo?',
   'LBL_FS_MODULE_NAME' => 'Harmonogram prognoz',
   'LBL_FS_CREATED_BY' =>'Utworzone przez',
   'LBL_FS_DATE_ENTERED' => 'Data wprowadzenia',
   'LBL_FS_DATE_MODIFIED' => 'Data modyfikacji',
   'LBL_FS_DELETED' => 'Usunięte',
    
  //forecast worksheet direct reports forecast
  'LBL_FDR_USER_NAME'=>'Raportowanie bezpośrednie',
  'LBL_FDR_OPPORTUNITIES'=>'Tematy w prognozie',
  'LBL_FDR_WEIGH'=>'Odmierzona kwota',
  'LBL_FDR_COMMIT'=>'Wykonane kwotowania',
  'LBL_FDR_DATE_COMMIT'=>'Data wykonania',
  
  //detail view.
  'LBL_DV_HEADER' => 'Prognozy: Akrusz roboczy',
  'LBL_DV_MY_FORECASTS' => 'Moje prognozy',
  'LBL_DV_MY_TEAM' => "Prognozy mojego zespołu" ,
  'LBL_DV_TIMEPERIODS' => 'Okresy czasu:',
  'LBL_DV_FORECAST_PERIOD' => 'Okres trwania prognozy',
  'LBL_DV_FORECAST_OPPORTUNITY' => 'Prognoza tematów',
  'LBL_SEARCH' => 'Wybierz',
  'LBL_SEARCH_LABEL' => 'Wybierz',
  'LBL_COMMIT_HEADER' => 'Wykonaj prognozę',
  'LBL_DV_LAST_COMMIT_DATE' =>'Data ostatniego wykonania:',
  'LBL_DV_LAST_COMMIT_AMOUNT' =>'Ostatnio wykonane kwotowanie:',
  'LBL_DV_FORECAST_ROLLUP' => 'Rowzinięcie prognozy',
  'LBL_DV_TIMEPERIOD' => 'Okres czasu:',
  'LBL_DV_TIMPERIOD_DATES' => 'Zakres danych:',
  
  //list view
  'LBL_LV_TIMPERIOD'=> 'Okres czasu',
  'LBL_LV_TIMPERIOD_START_DATE'=> 'Data rozpoczęcia',
  'LBL_LV_TIMPERIOD_END_DATE'=> 'Data zakończenia',
  'LBL_LV_TYPE'=> 'Typ prognozy',
  'LBL_LV_COMMIT_DATE'=> 'Data wykonania',
  'LBL_LV_OPPORTUNITIES'=> 'Tematy',
  'LBL_LV_WEIGH'=> 'Odmierzona kwota',
  'LBL_LV_COMMIT'=> 'Wykonane kwotowania',
  
  'LBL_COMMIT_NOTE'=> 'Wprowadź kwotę, którą chcesz wykonać dla zadanego okresu czasu',
  
  'LBL_COMMIT_MESSAGE'=> 'Czy chcesz zatwierdzić tę kwotę?',
  'ERR_FORECAST_AMOUNT' => 'Zatwierdzenie kwoty jest konieczne i powinno być liczbą.',
  
  // js error strings
  'LBL_FC_START_DATE' => 'Data rozpoczęcia',
  'LBL_FC_USER' => 'Harmonogram dla',

  'LBL_NO_ACTIVE_TIMEPERIOD'=>'Nie ma aktywnych przedziałów czasowych dla prognoz.',
  'LBL_FDR_ADJ_AMOUNT'=>'Ustawiona kwota',
  'LBL_SAVE_WOKSHEET'=>'Zapisz arkusz',
  'LBL_RESET_WOKSHEET'=>'Usuń arkusz',
  'LBL_SHOW_CHART'=>'Zobacz wykresy',
  'LBL_RESET_CHECK'=>'Wszystkie dane z arkuszy dla wybranych przedziałów czasowych  i zalogowanych użytkowników zostaną usunięte. Czy kontynuować?',
  
  'LB_FS_LIKELY_CASE'=>'Prawdopodobny przypadek',
  'LB_FS_WORST_CASE'=>'Najgorszy przypadek',
  'LB_FS_BEST_CASE'=>'Najlepszy przypadek',
  'LBL_FDR_WK_LIKELY_CASE'=>'Spodziewany prawdopodobny przypadek',
  'LBL_FDR_WK_BEST_CASE'=> 'Spodziewany ajlepszy przypadek',
  'LBL_FDR_WK_WORST_CASE'=>'Spodziewany najgorszy przypadek',
  'LBL_BEST_CASE'=>'Najlepszy przypadek:',
  'LBL_LIKELY_CASE'=>'Prawdopodobny przypadek:',
  'LBL_WORST_CASE'=>'Najgorszy przypadek:',
  'LBL_FDR_C_BEST_CASE'=>'Najlepszy przypadek',
  'LBL_FDR_C_WORST_CASE'=>'Najgorszy przypadek',
  'LBL_FDR_C_LIKELY_CASE'=>'Prawdopodobny przypadek',
  'LBL_QC_LAST_BEST_CASE'=>'Ostatnie wykonane kwotowanie (najlepszy przypadek):',
  'LBL_QC_LAST_LIKELY_CASE'=>'Ostatnie wykonane kwotowanie (prawdopodobny przypadek):',
  'LBL_QC_LAST_WORST_CASE'=>'Ostatnie wykonane kwotowanie (najgorszy przypadek):',
  'LBL_QC_ROLL_BEST_VALUE'=>'Rozwiń wykonane kwotowanie (najlepszy przypadek):',
  'LBL_QC_ROLL_LIKELY_VALUE'=>'Rozwiń wykonane kwotowanie (prawdopodobny przypadek):',
  'LBL_QC_ROLL_WORST_VALUE'=>'Rozwiń wykonane kwotowanie (najgorszy przypadek):',  
  'LBL_QC_COMMIT_BEST_CASE'=>'Wykonaj kwotowanie (najlepszy przypadek):',
  'LBL_QC_COMMIT_LIKELY_CASE'=>'Wykonaj kwotowanie (prawdopodobny przypadek):',
  'LBL_QC_COMMIT_WORST_CASE'=>'Wykonaj kwotowanie (najgorszy przypadek):',
  
  'LBL_FORECAST_FOR'=>'Arkusz prognoz dla: ',
  'LBL_FMT_ROLLUP_FORECAST'=>'(rozwinięcie)',
  'LBL_FMT_DIRECT_FORECAST'=>'(bezpośrednie)',

  //labels used by the chart.
  'LBL_GRAPH_TITLE'=>'Historia prognoz',
  'LBL_GRAPH_QUOTA_ALTTEXT'=>'Przedział dla %s',
  'LBL_GRAPH_COMMIT_ALTTEXT'=>'Wykonane kwotowania dla%s',
  'LBL_GRAPH_OPPS_ALTTEXT'=>'Wartość tematów zamkniętych w %s',

  'LBL_GRAPH_QUOTA_LEGEND'=>'Przedział',
  'LBL_GRAPH_COMMIT_LEGEND'=>'Wykonane prognozy',
  'LBL_GRAPH_OPPS_LEGEND'=>'Zamknięte tematy',
  'LBL_TP_QUOTA'=>'Przedział:',
  'LBL_CHART_FOOTER'=>'Historia prognoz<br/>Przedział vs prognozowana kwota vs zamknięta wartość tematów',
	'LBL_TOTAL_VALUE'=>'Sumy:',
	'LBL_COPY_AMOUNT'=>'Suma kwot',
	'LBL_COPY_WEIGH_AMOUNT'=>'Osiągnięta suma kwot',
	'LBL_WORKSHEET_AMOUNT'=>'Spodziewana suma kwot',
	'LBL_COPY'=>'Kopiuj wartości',
	'LBL_COMMIT_AMOUNT'=>'Suma zatwierdzonych wartości.',
	'LBL_COPY_FROM'=>'Kopiuj wartość z:',
  
  'LBL_CHART_TITLE'=>'Przedział/Wykonane/Aktualne',
);


?>
