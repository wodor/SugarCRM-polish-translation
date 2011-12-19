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


$mod_strings = array (
  'LBL_MODULE_NAME' => 'Komunikaty zespołów',
  'LBL_MODULE_TITLE' => 'Komunikaty zespolów: Strona główna',
  'LBL_SEARCH_FORM_TITLE' => 'Szukaj komunikatów zespołów',
  'LBL_LIST_FORM_TITLE' => 'Lista komunikatów Zespołów',
  'LBL_PRODUCTTYPE' => 'Komunikaty zespołu',
  'LBL_NOTICES' => 'Komunikaty zespołu',
  'LBL_LIST_NAME' => 'Tytuł',
  'LBL_URL' => 'URL',
  'LBL_URL_TITLE' => 'Temat URL',
  'LBL_LIST_DESCRIPTION' => 'Opis',
  'LBL_NAME' => 'Tytuł',
  'LBL_DESCRIPTION' => 'Opis',
  'LBL_LIST_LIST_ORDER' => 'Zamówienie',
  'LBL_LIST_ORDER' => 'Zamówienie',
  'LBL_DATE_START' => 'Data rozpoczęcia',
  'LBL_DATE_END' => 'Data zakończenia',
  'LBL_STATUS' => 'Status',
  'LNK_NEW_TEAM' => 'Utwórz zespół',
  'LNK_NEW_TEAM_NOTICE' => 'Utwórz komunikat zespołu',
  'LNK_LIST_TEAM' => 'Zespoły',
  'LNK_LIST_TEAMNOTICE' => 'Komunikaty zespolów',
  'LNK_PRODUCT_LIST' => 'Lista cen produktów',
  'LNK_NEW_PRODUCT' => 'Utwórz produkt',
  'LNK_NEW_MANUFACTURER' => 'Producenci',
  'LNK_NEW_SHIPPER' => 'Dostawcy',
  'LNK_NEW_PRODUCT_CATEGORY' => 'Kategorie produktów',
  'LNK_NEW_PRODUCT_TYPE' => 'Lista typów produktów',
  'NTC_DELETE_CONFIRMATION' => 'Czy napewno chcesz usunąć ten rekord?',
  'ERR_DELETE_RECORD' => 'Musisz podać numer rekordu, aby usunąć ten produkt.',
  'NTC_LIST_ORDER' => 'Ustawienie kolejności spowoduje pojawienie sie jej na listach rozwijalnych typów produktów',
  'dom_status' => 
  array (
    'Visible' => 'Widoczne',
    'Hidden' => 'Ukryte',
  ),
  'LBL_TEAM_NOTICE_FEATURES' => 'Cechy:
* Rozszerzone możliwości Interfejsu użytkownika z nowym Kreatorem , łatwym do zmian, intuicyjny design z instrukcjami dla użytkowników, tworzenia raportów krok po kroku.
* Kompleksowy zestaw zdefiniowanych raportów, pozwalający tworzyć użytkownikom z wykorzystaniem różnych modułów i operatorów logicznych.
* Raporty Macierzowe - oferują możliwość grupowania różnych atrybutów w łatwej do edycji siatki. Użytkownicy mogą tworzyć przestawne tabele z możliwością wyświetlania operacji takich jak Suma, Średnia, prezentacje danych w liczbach i procentach.
* Wykonywane w czasie rzeczywistym filtry pozwalają zmieniać atrybuty na bieżąco.',
  'LBL_TEAM_NOTICE_WIRELESS' => 'Nowy mobilny widok aplikacji SugarCRM jest kompromisem pomiędzy użytecznością a mobilnością.
Cechy:
* Rozszerzony interfejs użytkownika zapewnia lepszy widok szczegółów, edycję,  widok listy i połączonych rekordów, jak również dostępność do katalogów zatrudnionych, preferencji przechowywania i ostatnio oglądanych elementów.
* Niezależność aplikacji od urządzeń pozwala na korzystanie z systemu na dowolnym PDA, lub smartfonie, również z Blackberry i iPhone.
* Bogaty w funkcje klient HTML dostarcza przejrzyste prezentacje danych apliakcji SugarCRM przez standardową przeglądarkę www.
* Nowe możliwości wyszukiwania pozwalają użytkownikom szybciej odnajdywać informacje.',
  'LBL_TEAM_NOTICE_DATA_IMPORT' => 'Rozszerzone importowanie danych ułatwia przenoszenie informacji z aplikacji takich jak Excel, Act!, Microsoft Outlook, i Salesforce.com.
Rozszerzenia:
* Poprawiony interfejs użytkownika, zapewniający więcej opcji do szybszego i dokładnego importowania danych do SugarCRM.
* Kontrola jakości danych pozwala administratorom na określenie podczas importu jakie dane mają tworzyć nowe rekordy, a jakie uaktualiniać istniejące. Zmniejsza to ilość duplikowania informacji.
* Import do wszystkich modułów umożliwia przenoszenie danych z innych aplikacji klasy CRM do dowolnego modułu, zmniejszając ilość przepisywanych w obrębie SugarCRM danych.',
  'LBL_TEAM_NOTICE_MODULE_BUILDER' => 'Budowniczy modułów pozwala rozszerzyć możliwości SugarCRM na wiele sposobów.
Rozszerzenia:
* Nowe zależności pozwalają łączyć nowe i istniejące moduły na wiele sposobów.
* Kontrola wersji przechowuje kompletną historię tworzenia modułu i modyfikacji, aby można było odtworzyć ścieżkę tworzenia indywidualnej funkcjonalności.
* Wsparcie dla belek umożliwia wyświetlanie własnych obiektów i funkcjonalności modułów w kontenerze AJAX na stronie głównej.
* Nowe wzory umożliwiają łatwiejszą obróbkę plików i informacji z tematów.',
  'LBL_TEAM_NOTICE_TRACKER' => 'Śledzenie zapewnia teraz poszerzony wgląd w wykorzystanie i osiągi SugarCRM.
Cechy:
* Śledzenie raportów zapewnia wgląd w chwilowe użycie w celu podwyższenia wykorzystania funkcji aplikacji przez użytkowników i widok użycia narzędzi SugarCRM. Użytkownicy mogą oglądać raporty z tygodniowej aktywności w CRM, wyświetlane rekodry i moduły, skumulowany czas zalogowania siebie oraz innych użytkowników swojego zespołu.
* Monitorowanie systemu dostarcza administratoromo informacji jak używany jest system i wyznacza potencjalne punkty stresowe w aplikacji.',



);


?>
