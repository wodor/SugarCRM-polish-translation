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
	//module
	'LBL_MODULE_NAME' => 'Dokumenty',
	'LBL_MODULE_TITLE' => 'Dokumenty: Strona główna',
	'LNK_NEW_DOCUMENT' => 'Utwórz dokument',
	'LNK_DOCUMENT_LIST'=> 'Lista dokumentów',
	'LBL_DOC_REV_HEADER' => 'Wersja dokumentu',
	'LBL_SEARCH_FORM_TITLE'=> 'Szukanie dokumentów',
	//vardef labels
	'LBL_DOCUMENT_ID' => 'ID dokumentu',	
	'LBL_NAME' => 'Nazwa dokumentu',
	'LBL_DESCRIPTION' => 'Opis',
	'LBL_CATEGORY' => 'Kategoria',
	'LBL_SUBCATEGORY' => 'Podkategoria',
	'LBL_STATUS' => 'Status', 
	'LBL_CREATED_BY'=> 'Utworzony przez',
	'LBL_DATE_ENTERED'=> 'Data wprowadzenia',
	'LBL_DATE_MODIFIED'=> 'Data modyfikacji',
	'LBL_DELETED' => 'Usunięty',
	'LBL_MODIFIED'=> 'Zmodyfikowany przez ID',
	'LBL_MODIFIED_USER'=> 'Zmodyfikowany przez',
	'LBL_CREATED'=> 'Utworzony przez',
	'LBL_REVISIONS'=>'Wersje',
	'LBL_RELATED_DOCUMENT_ID'=>'ID dokumentów połączonych',
	'LBL_RELATED_DOCUMENT_REVISION_ID'=>'ID wersji dokumentów połączonych',
	'LBL_IS_TEMPLATE'=>'Jest szablonem',
	'LBL_TEMPLATE_TYPE'=>'Typ dokumentu',
	'LBL_ASSIGNED_TO_NAME'=>'Przydzielone do:',
	'LBL_REVISION_NAME' => 'Numer wersji',
	'LBL_MIME' => 'Typ mime',
	'LBL_REVISION' => 'Wersja',
	'LBL_DOCUMENT' => 'Połączone dokumenty',
	'LBL_LATEST_REVISION' => 'Najnowsza wersja',
	'LBL_CHANGE_LOG'=> 'Dziennik zmian',
	'LBL_ACTIVE_DATE'=> 'Data publikacji',
	'LBL_EXPIRATION_DATE' => 'Data wyganiecia',
	'LBL_FILE_EXTENSION'  => 'Rozszerzenie pliku',
	
	'LBL_CAT_OR_SUBCAT_UNSPEC'=>'Niesprecyzowany',
	//quick search
	'LBL_NEW_FORM_TITLE' => 'Nowy dokument',
	//document edit and detail view
	'LBL_DOC_NAME' => 'Nazwa dokumentu:',
	'LBL_FILENAME' => 'Nazwa pliku:',
	'LBL_DOC_VERSION' => 'Wersja:',
	'LBL_CATEGORY_VALUE' => 'Kategoria:',
	'LBL_SUBCATEGORY_VALUE'=> 'Podkategoria:',
	'LBL_DOC_STATUS'=> 'Status:',
	'LBL_LAST_REV_CREATOR' => 'Wersja utworzona przez:',
	'LBL_LAST_REV_DATE' => 'Data wersji:',
	'LBL_DOWNNLOAD_FILE'=> 'Ściągnij plik:',
	'LBL_DET_RELATED_DOCUMENT'=>'Dokumenty połączone:',
	'LBL_DET_RELATED_DOCUMENT_VERSION'=>"Wersja dokumentów połaczonych:",
	'LBL_DET_IS_TEMPLATE'=>'Szkic? :',
	'LBL_DET_TEMPLATE_TYPE'=>'Typ dokumentu:',

	'LBL_TEAM'=> 'Zespół:',

	'LBL_DOC_DESCRIPTION'=>'Opis:',
	'LBL_DOC_ACTIVE_DATE'=> 'Data publikacji:',
	'LBL_DOC_EXP_DATE'=> 'Data wygaśnięcia:',
	
	//document list view.	
	'LBL_LIST_FORM_TITLE' => 'Lista dokumentów',
	'LBL_LIST_DOCUMENT' => 'Dokument',
	'LBL_LIST_CATEGORY' => 'Kategoria',
	'LBL_LIST_SUBCATEGORY' => 'Podkategoria',
	'LBL_LIST_REVISION' => 'Wersja',
	'LBL_LIST_LAST_REV_CREATOR' => 'Opublikowany przez',
	'LBL_LIST_LAST_REV_DATE' => 'Data wersji',
	'LBL_LIST_VIEW_DOCUMENT'=>'Podgląd',
	'LBL_LIST_DOWNLOAD'=> 'Pobierz',
	'LBL_LIST_ACTIVE_DATE' => 'Data publikacji',
	'LBL_LIST_EXP_DATE' => 'Data wygaśnięcia',
	'LBL_LIST_STATUS'=>'Status',

	//document search form.
	'LBL_SF_DOCUMENT' => 'Nazwa dokumentu:',
	'LBL_SF_CATEGORY' => 'Kategoria:',
	'LBL_SF_SUBCATEGORY'=> 'Podkategoria:',
	'LBL_SF_ACTIVE_DATE' => 'Data publikacji:',
	'LBL_SF_EXP_DATE'=> 'Data wygaśnięcia:',
	
	'DEF_CREATE_LOG' => 'Dokument utworzony przez',
	
	//error messages
	'ERR_DOC_NAME'=>'Nazwa dokumentu',
	'ERR_DOC_ACTIVE_DATE'=>'Data publikacji',
	'ERR_DOC_EXP_DATE'=> 'Data wygaśniecia',
	'ERR_FILENAME'=> 'Nazwa pliku',
	'ERR_DOC_VERSION'=> 'Wersja dokumentu',
	'ERR_DELETE_CONFIRM'=> 'Czy chcesz usunąć tę wersję dokumentu?',
	'ERR_DELETE_LATEST_VERSION'=> 'Nie jesteś uprawiony do usunięcia najnowszej wersji dokumentu.',
	'LNK_NEW_MAIL_MERGE' => 'Scalanie poczty',
	'LBL_MAIL_MERGE_DOCUMENT' => 'Szablon scalania poczty:',

	'LBL_TREE_TITLE' => 'Dokumenty',
	//sub-panel vardefs.
	'LBL_LIST_DOCUMENT_NAME'=>'Nazwa dokument',
	'LBL_CONTRACT_NAME'=>'Nazwa kontraktu:',
	'LBL_LIST_IS_TEMPLATE'=>'Szkic?',
	'LBL_LIST_TEMPLATE_TYPE'=>'Typ dokumentu',
	'LBL_LIST_SELECTED_REVISION'=>'Wybrane wersje',
	'LBL_LIST_LATEST_REVISION'=>'Najnowsze wydanie',
	'LBL_CONTRACTS_SUBPANEL_TITLE'=>'Połączone kontrakty',
	'LBL_LAST_REV_CREATE_DATE'=>'Data utworzenia ostatniego wydania',
    //'LNK_DOCUMENT_CAT'=>'Document Categories',
    'LBL_CONTRACTS' => 'Kontrakty',
    'LBL_CREATED_USER' => 'Użytkownik tworzący',
);


?>
