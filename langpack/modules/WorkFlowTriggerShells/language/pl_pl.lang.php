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
  'LBL_MODULE_NAME' => 'Warunki',
  'LBL_MODULE_TITLE' => 'Inicjatory prac do wykonania:Strona główna',
  'LBL_MODULE_SECTION_TITLE' => 'Kiedy te waunki są spełnione',
  'LBL_SEARCH_FORM_TITLE' => 'Szukanie inicjatorów procesów do wykonania',
  'LBL_LIST_FORM_TITLE' => 'Lista inicjatorów',
  'LBL_NEW_FORM_TITLE' => 'Utwórz inicjator',
  'LBL_LIST_NAME' => 'Opis',
  'LBL_LIST_VALUE' => 'Wartość',
  'LBL_LIST_TYPE' => 'Typ:',
  'LBL_LIST_EVAL' => 'Eval:',
  'LBL_LIST_FIELD' => 'Pole',
  'LBL_NAME' => 'Nazwa inicjatora',
  'LBL_TYPE' => 'Typ:',
  'LBL_EVAL' => 'Ocena inicjatora:',
  'LBL_SHOW_PAST' => 'Modyfikuj poprzednie wartości:',
  'LBL_SHOW' => 'Pokaż',

  'LNK_NEW_TRIGGER' => 'Utwórz inicjator',
  'LNK_TRIGGER' => 'Inicjatory prac do wykonania',


  'LBL_LIST_STATEMEMT' => 'Inicjator wydarzenia bazujący na następującym: ',
  'LBL_FILTER_LIST_STATEMEMT' => 'Filtruj obiekty bazujące na następującym: ',

  'NTC_REMOVE_TRIGGER' => 'Czy na pewno chcesz usunąć ten inicjator?',



    'LNK_NEW_WORKFLOW' => 'Utwórz pracę do wykonania',
  'LNK_WORKFLOW' => 'Obiekty prac do wykonania',
  'LBL_ALERT_TEMPLATES' => 'Wzory alertów',


//General Labels
  'LBL_TRIGGER' => 'Gdy ',
  'LBL_FIELD' => 'pole',
  'LBL_VALUE' => 'wartość',
  'LBL_RECORD' => 'moduły',
//Specific Lables

	'LBL_COMPARE_SPECIFIC_TITLE' => 'Gdy pole w docelowym module zmieni się na lub z określonej warotści',
	'LBL_COMPARE_SPECIFIC_PART' => 'zmieni się na lub z określonej warotści',
	'LBL_COMPARE_SPECIFIC_PART_TIME' => ' ',


	'LBL_COMPARE_CHANGE_TITLE' => 'Gdy pole w określonym module zmieni się',
	'LBL_COMPARE_CHANGE_PART' => 'zmiany',


	'LBL_COMPARE_COUNT_TITLE' => 'Inicjator określonego wyniku',

	'LBL_COMPARE_ANY_TIME_TITLE' => 'Pole nie zmienia się od określonego okresu czasu',
	'LBL_COMPARE_ANY_TIME_PART2' => 'nie zmienia się od ',
	'LBL_COMPARE_ANY_TIME_PART3' => 'określonego okresu czasu',

	'LBL_FILTER_FIELD_TITLE' => 'Gdy pole w docelowym module zawiera określone wartości',
	'LBL_FILTER_FIELD_PART1' => 'Filtruj przez ',
	'LBL_FILTER_REL_FIELD_TITLE' => 'Gdy zmienia sie moduł docelowy i pole w podległym module zawiera określoną wartość',
	'LBL_FILTER_REL_FIELD_PART1' => 'Określ zależności modułów',

	'LBL_TRIGGER_RECORD_CHANGE_TITLE' => 'Gdy moduł docelowy zmienia się',
	//'LBL_TRIGGER_RECORD_CHANGE_LIST_TITLE' => 'When record changes',

  'LBL_FUTURE_TRIGGER' => 'Określ nowy',



  'LBL_PAST_TRIGGER' => 'Określ stary',


 	////////////////Count Language
 	'LBL_COUNT_TRIGGER1' => 'Suma',
 	'LBL_COUNT_TRIGGER1_2' => 'porównaj do tej wielkości',
 	'LBL_MODULE' => 'moduł',
  	'LBL_COUNT_TRIGGER2' => 'filtruj przez zależności modułów',
 	'LBL_COUNT_TRIGGER2_2' => 'tylko',
 	'LBL_COUNT_TRIGGER3' => 'filtruj szczególnie przez',
 	'LBL_COUNT_TRIGGER4' => 'filtruj przez sekundy',


 	'LBL_NEW_FILTER_BUTTON_KEY' => 'F',
 	'LBL_NEW_FILTER_BUTTON_TITLE' => 'Utwórz filtr [Alt+F]',
 	'LBL_NEW_FILTER_BUTTON_LABEL' => 'Utwórz filtr',

  	'LBL_NEW_TRIGGER_BUTTON_KEY' => 'T',
 	'LBL_NEW_TRIGGER_BUTTON_TITLE' => 'Utwórz inicjator [Alt+T]',
 	'LBL_NEW_TRIGGER_BUTTON_LABEL' => 'Utwórz inicjator',

 	'LBL_LIST_FRAME_SEC' => 'Filtruj: ',
 	'LBL_LIST_FRAME_PRI' => 'Inicjator: ',


 	'LBL_TRIGGER_FILTER_TITLE' => 'Filtry inicjatorów',
 	'LBL_TRIGGER_FORM_TITLE' => 'Zdefiniuj warunki do uruchomienia prac do wykonania',
 	'LBL_FILTER_FORM_TITLE' => 'Zdefiniuj warunki prac do wykonania',

 	'LBL_SPECIFIC_FIELD'=>"'s określone pole",
 	'LBL_APOSTROPHE_S'=>"'s ",
	'LBL_WHEN_VALUE1'=>"Kiedy wartość pola wynosi ",
	'LBL_WHEN_VALUE2'=>"Kiedy wartość z ",

 	'LBL_SELECT_OPTION' => 'Wybierz opcję.',
	'LBL_SELECT_TARGET_FIELD' => 'Wybierz pole docelowe.',
	'LBL_SELECT_TARGET_MOD' => 'Wybierz docelowy moduł podległy.',
	'LBL_SPECIFIC_FIELD_LNK' => 'określone pole',
	'LBL_MUST_SELECT_VALUE' => 'Musisz wybrać wartość dla tego pola',
	
	'LBL_SELECT_AMOUNT' => 'Musisz określić kwotę',
	'LBL_SELECT_1ST_FILTER' => 'Musisz wybrać właściwe pierwszego pola filtru',
	'LBL_SELECT_2ND_FILTER' => 'Musisz wybrać właściwe drugiego pola filtru',
);

$mod_process_order_strings = array(

	'compare_specific' => array('1','2','3'),
	'compare_change' => array('1','2','3'),
	'compare_count' => array('1','2','3')

);




?>
