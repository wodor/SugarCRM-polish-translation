<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 * The contents of this file are subject to the SugarCRM Professional Subscription
 * Agreement ("License") which can be viewed at
 * http://www.sugarcrm.com/crm/products/sugar-professional-eula.html
 * By installing or using this file, You have unconditionally agreed to the
 * terms and conditions of the License, and You may not use this file except in
 * compliance with the License.  Under the terms of the license, You shall not,
 * among other things: 1) sublicense, resell, rent, lease, redistribute, assign
 * or otherwise transfer Your rights to the Software, and 2) use the Software
 * for timesharing or service bureau purposes such as hosting the Software for
 * commercial gain and/or for the benefit of a third party.  Use of the Software
 * may be subject to applicable fees and any use of the Software without first
 * paying applicable fees is strictly prohibited.  You do not have the right to
 * remove SugarCRM copyrights from the source code or user interface.
 *
 * All copies of the Covered Code must include on each user interface screen:
 *  (i) the "Powered by SugarCRM" logo and
 *  (ii) the SugarCRM copyright notice
 * in the same form as they appear in the distribution.  See full license for
 * requirements.
 *
 * Your Warranty, Limitations of liability and Indemnity are expressly stated
 * in the License.  Please refer to the License for the specific language
 * governing these rights and limitations under the License.  Portions created
 * by SugarCRM are Copyright (C) 2004-2007 SugarCRM, Inc.; All Rights Reserved.
 ********************************************************************************/
/*********************************************************************************

 * Description:  Defines the English language pack for the base application.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/

$mod_strings = array (
	//module
	'LBL_MODULE_NAME' => 'Dokumenty bazy wiedzy',
	'LBL_MODULE_TITLE' => 'Artykuły bazy wiedzy',
	'LNK_NEW_ARTICLE' => 'Utwórz artykuł',
	'LNK_KBDOCUMENT_LIST'=> 'Lista dokumentów',
	'LBL_DOC_REV_HEADER' => 'Wersja dokumentów',
	'LBL_SEARCH_FORM_TITLE'=> 'Wyszukiwanie dokmentów',
	'LBL_KBDOC_TAGS' => 'Znaczniki artykułu:',
	'LBL_KBDOC_BODY' => 'Treść artykułu:',
	'LBL_KBDOC_APPROVED_BY' =>'Zatwierdzający:',
	'LBL_KBDOC_ATTACHMENT' =>'Załącznik dokumentu bazy wiedzy',
	'LBL_KBDOC_ATTS_TITLE' =>'Pobierz załącznik:',	
	'LBL_SEND_EMAIL'  => 'Wyślij wiadomość',
	'LBL_SELECT_TAG_BUTTON_TITLE' => 'Wybierz',
	'LBL_ATTACHMENTS' => 'Załączniki:',
	'LBL_EMBEDED_IMAGES' => 'Użyte obrazy:',
	'LBL_SHOW_ARTICLE_DETAILS' => 'Pokaż więcej szczegółów',
	'LBL_HIDE_ARTICLE_DETAILS' => 'Ukrysz szczegóły',
	'LBL_TAGS' => 'Znaczniki:',
	'LBL_NOT_AN_ADMIN_USER' => 'Nie jest użytkownikiem z prawami administratora',
	'LBL_NOT_A_VALID_FILE' => 'Niewłaściwy plik',
	
	//Tag tree related labels    
    'LBL_SELECT_A_NODE_FROM_TREE' => 'Wybierz wątek z drzewa',
    'LBL_SELECT_A_NODE_FROM_TREE' => 'Stwórz nowy znacznik',
    'LBL_SEARCH'  =>'Szukaj',
    'LBL_NEW_TAG_NAME' => 'Nazwa nowego znacznika:',
	
	//vardef labels	
	'LBL_KBDOCUMENT_ID' => 'ID Dokumentu',
	'LBL_ARTICLE_TITLE' => 'Tytuł:',
	'LBL_ARTICLE_AUTHOR' => 'Autor:',
	'LBL_ARTICLE_APPROVED_BY' =>'Zatwierdzający:',
	'LBL_ARTICLE_BODY' => 'Treść artykułu:',
	'LBL_NAME' => 'Nazwa dokumentu:',
	'LBL_DESCRIPTION' => 'Opis',
	'LBL_CATEGORY' => 'Kategoria',
	'LBL_SUBCATEGORY' => 'Podkategoria',
	'LBL_STATUS' => 'Status',
	'LBL_CREATED_BY'=> 'Stworzone przez',
	'LBL_DATE_ENTERED'=> 'Data wprowadzenia',
    'LBL_DATEENTERED'=> 'Data wprowadzenia:',
	'LBL_DATE_MODIFIED'=> 'Data wodyfikacji',
	'LBL_DELETED' => 'Usunięte',
	'LBL_MODIFIED'=> 'ID Osoby modyfikującej',
	'LBL_MODIFIED_USER' => 'Zmodyfikowane przez',
	'LBL_CREATED'=> 'Stworzone przez',
	'LBL_RELATED_DOCUMENT_ID'=>'ID Dokumentu połączonego',
	'LBL_RELATED_DOCUMENT_REVISION_ID'=>'Id wydania dokumentu połączonego',
	'LBL_IS_TEMPLATE'=>'Jest wzorem',
	'LBL_TEMPLATE_TYPE'=>'Typ dokumentu',
    'LBL_PARENT_TYPE'=>'Typ nadrzedny',
	'LBL_NUMBER'    =>  'LBL_NUMBER',
    'LBL_TEXT_BODY' =>  'LBL_TEXT_BODY',
    'LBL_CREATED_BY_NAME' => 'LBL_CREATED_BY_NAME',
    'LBL_TAG_ID' => 'LBL_TAG_ID',
    'LBL_KBDOCUMENTS_KBTAGS_ID' => 'LBL_KBDOCUMENTS_KBTAGS_ID',

	'LBL_REVISION_NAME' => 'Numer wydania',
	'LBL_KBDOCUMENT_REVISION_NUMBER' => 'Numer wydania dokumentu bazy wiedzy',
	'LBL_MIME' => 'Typ Mime',
	'LBL_REVISION' => 'Wydanie',
	'LBL_DOCUMENT' => 'Połączone dokumenty',
	'LBL_LATEST_REVISION' => 'ID ostatniego wydania',
    'LBL_LATEST_REVISION_NAME' => 'Nazwa ostatniego wydania',
    'LBL_SELECTED_REVISION_NAME' => 'Nazwa wybranego wydania',
	'LBL_CHANGE_LOG'=> 'Dziennik zmian',
	'LBL_ACTIVE_DATE'=> 'Data publikacji',
	'LBL_EXPIRATION_DATE' => 'Data wygaśnięcia',
	'LBL_FILE_EXTENSION'  => 'Rozszerzenie pliku',

    'LBL_KBDOC_TAGS' => 'Znaczniki dokumentu:',
	'LBL_KBDOC_BODY' => 'Treść dokumentu:',
	'LBL_KBDOC_APPROVED_BY' =>'zaaprobowane przez:',
	'LBL_KBDOC_ATTACHMENT' =>'Załącznik dokumentu bazy wiedzy',
	'LBL_KBDOC_ATTS_TITLE' =>'Pobierz załącznik:',

    'LBL_KNOWLEDGE_BASE_SEARCH' => 'Baza wiedzy',
	'LBL_KNOWLEDGE_BASE_ADMIN' => 'Administracja bazą wiedzy',
    'LBL_KNOWLEDGE_BASE_ADMIN_MENU' => 'Administracja bazą wiedzy',

	'LBL_CAT_OR_SUBCAT_UNSPEC'=>'Nieokreślone',
	//document edit and detail view
	'LBL_KBDOC_TAGS' => 'Znaczniki:',
	'LBL_KBDOC_BODY' => 'Treść:',
	'LBL_KBDOC_APPROVED_BY' =>'Zaaprobowane przez:',
	'LBL_KBDOC_ATTACHMENT' =>'Załącznik dokumentu bazy wiedzy',
	'LBL_KBDOC_ATTS_TITLE' =>'Pobierz załącznik:',
	'LBL_DOC_NAME' => 'Nazwa dokumentu:',
	'LBL_FILENAME' => 'Nazwa pliku:',
	'LBL_DOC_VERSION' => 'Wydanie:',
	'LBL_CATEGORY_VALUE' => 'Kateoria:',
	'LBL_SUBCATEGORY_VALUE'=> 'Podkategoria:',
	'LBL_DOC_STATUS'=> 'Status:',
	'LBL_LAST_REV_CREATOR' => 'Wydanie utworzone przez:',
	'LBL_LAST_REV_DATE' => 'data wydania:',
	'LBL_DOWNNLOAD_FILE'=> 'Załączniki:',
	'LBL_DET_RELATED_DOCUMENT'=>'Połączone dokumenty:',
	'LBL_DET_RELATED_DOCUMENT_VERSION'=>'Wydania połączonych dokumentów:',
	'LBL_DET_IS_TEMPLATE'=>'Wzór? :',
	'LBL_DET_TEMPLATE_TYPE'=>'Typ dokumentu:',
	'LBL_IS_EXTERNAL_ARTICLE' => 'Zewnętrzne artykuły? :',
	'LBL_SHOW_TAGS' => 'Pokaż więcej znaczników',
    'LBL_HIDE_TAGS' => 'Ukryj znaczniki',

	'LBL_TEAM'=> 'Zespół:',
//	'LBL_TEAM_ID'=> 'ID zespołu:',

	'LBL_DOC_DESCRIPTION'=>'Opis:',
	'LBL_KBDOC_SUBJECT' =>'Temat:',
	'LBL_DOC_ACTIVE_DATE'=> 'Data publikacji:',
	'LBL_DOC_EXP_DATE'=> 'Data wygaśnięcia:',

	//document list view.
	'LBL_LIST_ARTICLES' => 'Artykuły',
	'LBL_LIST_FORM_TITLE' => 'Lista dokumentów',
	'LBL_LIST_DOCUMENT' => 'Dokument',
	'LBL_LIST_CATEGORY' => 'Kategoria',
	'LBL_LIST_SUBCATEGORY' => 'Podkategoria',
	'LBL_LIST_REVISION' => 'Wydanie',
	'LBL_LIST_LAST_REV_CREATOR' => 'Opublikowane przez',
	'LBL_LIST_LAST_REV_DATE' => 'Data wydania',
	'LBL_LIST_VIEW_DOCUMENT'=>'Widok',
    'LBL_LIST_DOWNLOAD'=> 'Pobierz',
	'LBL_LIST_ACTIVE_DATE' => 'Data publikacji',
	'LBL_LIST_EXP_DATE' => 'Data wygaśnięcia',
	'LBL_LIST_STATUS'=>'Status',
    'LBL_ARTICLE_AUTHOR_LIST' => 'Autor',

    //document list view (for portal)
	'LBL_LIST_MOST_VIEWED' => 'Najczęściej oglądane artykuły',
	'LBL_LIST_MOST_RECENT' => 'Ostatnio oglądane artykuły',

	//document search form.
	'LBL_SF_DOCUMENT' => 'Nazwa dokumentu:',
	'LBL_SF_CATEGORY' => 'Kategoria:',
	'LBL_SF_SUBCATEGORY'=> 'Podkategoria:',
	'LBL_SF_ACTIVE_DATE' => 'Data publikacji:',
	'LBL_SF_EXP_DATE'=> 'Data wygaśnięcia:',

	'DEF_CREATE_LOG' => 'Dokument utworzony',
    
    //kbdocument full text search form.
    'LBL_TAB_SEARCH' => 'Szukaj',
    'LBL_TAB_BROWSE' => 'Przeglądaj',
    'LBL_TAB_ADVANCED' => 'Zaawansowane',
    'LBL_MENU_FTS' => 'Wyszukiwanie w tekście',
    'LBL_FTS_EMPTY_STRING' =>  'Nie można przeprowadzić wyszukiwania w tekście pustego wyrażenia',
    'LBL_SEARCH_WITHIN' => 'Szukaj wewnątrz:',
    'LBL_CONTAINING_THESE_WORDS' => 'Zawierający następujące słowa:',
    'LBL_EXCLUDING_THESE_WORDS' => 'Za wyjątkiem następujących słów:',
    'LBL_UNDER_THIS_TAG' => 'Z użyciem tych znaczników:',
    'LBL_PUBLISHED' => 'Opublikowany:',
    'LBL_EXPIRES' => 'Wygasa:',
    'LBL_TIMES_VIEWED' => 'Liczba wyświetleń:',
    'LBL_ATTACHMENTS' => 'Załączniki:',
    'LBL_SAVE_SEARCH_AS' => 'Zapisz wynik wyszukiwania jako:',
    'LBL_SAVE_SEARCH_AS_HELP' => 'Zapisze określone warunki jako filtr wyszukiwania w bazie wiedzy.',
    'LBL_PREVIOUS_SAVED_SEARCH' => 'Poprzednie wyniki wyszukiwania:',
    'LBL_PREVIOUS_SAVED_SEARCH_HELP' => 'Edytuj lub usuń istniejące wyniki wyszukiwania.',
    'LBL_UPDATE' => 'Aktualizuj',
    'LBL_DELETE' => 'Usuń',
    'LBL_SHOW_OPTIONS' => 'Pokaż więcej opcji',
    'LBL_HIDE_OPTIONS' => 'Ukryj dodatkowe opcje',
    'LBL_AND' => 'i',
    'LBL_SEARCH' => 'Szukaj',
    'LBL_CLEAR' => 'Wyczyść',
    'LBL_LIST_KBDOC_APPROVER_NAME' => 'Nazwa zatwierdzającego',
    'LBL_LIST_VIEWING_FREQUENCY' => 'Ilość wyświetleń',  
    'LBL_ARTICLE_PREVEW_UNAVAILABLE_NO_DOCUMENT' => 'Podgląd nie jest dostępny. Dokument nie został odnaleziony', 'LBL_ARTICLE_PREVEW_UNAVAILABLE_NO_CONTENT' => 'Podgląd nie jest dostępny. Dokument istnieje, ale nie wprowadzono jeszcze żadnej treści.',
    'LBL_UNTAGGED_ARTICLES_NODE' => 'Nieoznaczone artykuły',
    'LBL_TOP_TEN_LIST_TITLE' => '10 najczęściej wyświetlanych artykułów',
    'LBL_SHOW_SYNTAX_HELP' => 'Pokaż pomoc składniową',
    'LBL_HIDE_SYNTAX_HELP' => 'Ukryj pomoc składniową',
    'LBL_MISMATCH_QUOTES_ERR' => 'Twoje zapytanie nie da rezultatów wprowadzone w takiej formie.  Wyrażenie musi zawierać parzystą ilość znaków cudzyslowu. Jeśli chcesz wyszukać wyrażenia zawierające znak cudzysłowu, musisz go poprzedzić znakiem backslah (\").',
    'LBL_SYNTAX_CHEAT_SHEET' => 
        '<B>Pomoc Składniowa Zapytania:</b><P>
        <ol>
<li>Znak (+) wskazuje, że rezultat wyszukiwania "musi spełniać" ten warunek.</li>
<li>Znak (-) wskazuje, że rezultat wyszukiwania "nie może spełniać" tego warunku.  Znak (-) nie jest niezbędny, jeśli wypełniasz pola słowami, które mają zostać wykluczone.</li>
<li>Kilka słów w cudzysłowiu ("przykład1 przykład2") są traktowane jako jeden warunek wyszukiwania. Musi być znak otwierający i zamykający, gdyż inaczej zapytanie nie zostanie wykonane.<br>Aby wyszukać znaki cudzysłowu, muszą one zostać poprzedzone znakiem backslah (\").</li>
<li>Pojedynczy znak (\') - apostrof bedzie szukany tak jak jest i nie musi występowac parami.</li></ol>

        </p>

        <p><b>Przykład: </b><br><br>
        Aby wyszukać wszystkie artykuły ze słowem "Sugar" lub "CRM", które muszą zawierać wyrażenie "Baza Wiedzy" i "cool", ale nie powinny zawierać słowa "demo" lub "czas przeszły," wprowadź następujące zapytanie:<br>&nbsp;&nbsp;&nbsp;&nbsp;Sugar CRM +"Baza Wiedzy" +cool -demo -"Czas Przeszły"</p><br>

        <p><b>Notatka: </b><br>
<ol><li>Wielkość liter nie ma znaczenia.</li>
<li>Zarówno Spacje, jak i przecinki mogą służyć jako znaki przedziału.</li>
<li>Nie oddzielaj spacją znaków (+) i (-) od słów, których dotyczą.</li></ol>
</p>',
        
    //for hovering over tree
    'LBL_CHILD_TAG_IN_TREE_HOVER' => 'Znacznik pochodny',
    'LBL_CHILD_TAGS_IN_TREE_HOVER' => 'Znaczniki pochodne',
    'LBL_ARTICLE_IN_TREE_HOVER' => 'Artykuł',
    'LBL_ARTICLES_IN_TREE_HOVER' => 'Artykuły',
    'LBL_THIS_TAG_CONTAINS_TREE_HOVER' => 'Ten znacznik zawiera',
    
	//error messages
	'ERR_DOC_NAME'=>'Nazwa dokumentu',
	'ERR_DOC_ACTIVE_DATE'=>'Data publikacji',
	'ERR_DOC_EXP_DATE'=> 'Data wygaśnięcia',
	'ERR_FILENAME'=> 'Nazwa pliku',
	'ERR_DOC_VERSION'=> 'Wersja dokumentu',
	'ERR_DELETE_CONFIRM'=> 'Czy chcesz usunąć to wydanie dokumentu?',
	'ERR_DELETE_LATEST_VERSION'=> 'Nie jesteś upoważniony do usunięcia ostatniego wydania tego dokumentu.',
	'LNK_NEW_MAIL_MERGE' => 'Scal wiadomości',
	'LBL_MAIL_MERGE_DOCUMENT' => 'Wzór scalania wiadomości:',

	'LBL_TREE_TITLE' => 'Dokumenty',
	//sub-panel vardefs.
	'LBL_LIST_DOCUMENT_NAME'=>'Nazwa dokumentu',
	'LBL_CONTRACT_NAME'=>'Nazwa kontraktu:',
	'LBL_LIST_IS_TEMPLATE'=>'Wzór?',
	'LBL_LIST_TEMPLATE_TYPE'=>'Typ dokumentu',
	'LBL_LIST_SELECTED_REVISION'=>'Wybrane wydania',
	'LBL_LIST_LATEST_REVISION'=>'Ostatnie wydania',
	'LBL_CASES_SUBPANEL_TITLE'=>'Połączone sprawy',
	'LBL_EMAILS_SUBPANEL_TITLE' => 'Połączone wiadomości',
    'LBL_CONTRACTS_SUBPANEL_TITLE'=>'Połączone kontrakty',
	'LBL_LAST_REV_CREATE_DATE'=>'Data utworzenia ostatniego wydania',
    //'LNK_DOCUMENT_CAT'=>'Document Categories',
    'LBL_KEYWORDS' => 'Słowa kluczowe:',
    'LBL_CASES' =>'Sprawy',
    'LBL_EMAILS' =>'Wiadomości',
    
   //Admin screen messages
    'LBL_DEFAULT_ADMIN_MESSAGE' =>'Wybierz akcję z listy rozwijalnej',
    'LBL_SELECT_PARENT_TAG_MESSAGE' =>'Wybierz znacznik nadrzędny z drzewa',
    'LBL_SELECT_TAG_TO_BE_DELETED_FROM_TREE' => 'Wybierz znacznik(i) do usunięcia z drzewa',
    'LBL_SELECT_TAG_TO_BE_RENAMED_FROM_TREE' =>'Wybierz znacznik z drzewa, aby zmienić jego nazwę',

     //Tag creation messages
    'LBL_TAG_ALREADY_EXISTS' => 'Znacznik już istnieje',
    'LBL_TYPE_THE_NEW_TAG_NAME' => 'Wpisz nową nazwę znacznika',
    'LBL_SAVING_THE_TAG' => 'Zapisz znacznik...',
    'LBL_CREATING_NEW_TAG' => 'Utwórz nowy znacznik...',
    'LBL_TAGS_ROOT_LABEL' => 'Znaczniki',
    'LBL_FAQ_TAG_NOT_RENAME_MESSAGE' => 'Znacznikowi FAQ nie można zmienić nazwy',
    'LBL_SELECT_ARTICLES_TO_BE_MOVED_TO_OTHER_TAG' => 'Najpierw wybierz artykuł ',
    'LBL_SELECT_ARTICLES_TO_APPLY_TAGS' => 'Wybierz rtykuł aby Zatwierdzić Znaczniki',
    'LBL_SELECT_ARTICLES_TO_DELETE'  => 'Najpierw wybierz artykuł ',
    'LBL_SELECT_TAGS_TO_DELETE'  => 'Wybierz znaczniki do usunięcia',
    'LBL_SELECT_A_TAG_FROM_TREE' => 'Wybierz znacznik z drzewa',
    'LBL_SELECT_TAGS_FROM_TREE'  => 'Wybierz znaczniki z drzewa',
    'LBL_MOVING_ARTICLES_TO_TAG' =>'Przesuwanie artykułów do znacznika...',
    'LBL_APPLYING_TAGS_TO_ARTICLES' =>'Zatwierdzanie znaczników na artykule ...',
    'LBL_ROOT_TAG_MESSAGE' => 'Główne znaczniki nie mogą być wybrane/zlinkowane z artykułem',
    'LBL_ROOT_TAG_CAN_NOT_BE_RENAMED' => 'Głównym znacznikom nie można zmienić nazwy',
    'LBL_TYPE_NEW_NODE_NAME'=>'Wpisz nazwę tagu',
    'LBL_SOURCE_AND_TARGET_TAGS_ARE_SAME' => 'Źródłowe i wynikowe znaczniki są takie same',

    //Tag button labels
    'LBL_DELETE_TAG'  => 'Usuń znacznik',
    'LBL_SELECT_TAG'  => 'Wybierz znacznik',
    'LBL_APPLY_TAG'  =>  'Zakceptuj znacznik',
    'LBL_MOVE'  =>   'Przesuń',
    'LBL_LAUNCHING_TAG_BROWSING' => 'Wczytuję przeglądarkę znaczników',
    'LBL_THERE_WAS_AN_ERROR_HANDLING_TAGS' => 'To zapytanie o znacznik zawierało błąd',
    'LBL_ERROR_NOT_A_FILE_INPUT_ELEMENT' =>'Błąd: Brak elementu wprowadzającego plik',
    'LBL_CREATE_NEW_TAG'  => 'Utwórz nowy znacznik',
    'LBL_SEARCH_TAG'  => 'Szukaj',
    'LBL_TAG_NAME'  =>'Nazwa znacznika:',

    'LBL_SELECT_TAGS_TO_DELETE' => 'Wybierz znacznik do usunięcia',
    'LBL_TYPE_TAG_NAME_TO_SEARCH' => 'Wpisz nazwę znacznika do wyszukania',
    'LBL_KB_NOTIFICATION' => 'Dokument został opublikowany',
    'LBL_KB_PUBLISHED_REQUEST' => ' przydzielono Ci dokument w celu zatwierdzenia i publikacji.',
    'LBL_KB_STATUS_BACK_TO_DRAFT' => 'Status dokumentu został zdegradowany do szkicu',
    'LBL_CONTRACTS' => 'Kontrakty',
);
?>
