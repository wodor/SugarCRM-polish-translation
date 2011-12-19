<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 * The contents of this file are subject to the SugarCRM Enterprise Subscription
 * Agreement ("License") which can be viewed at
 * http://www.sugarcrm.com/crm/products/sugar-enterprise-eula.html
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

//the left value is the key stored in the db and the right value is the display value
//to translate, only modify the right value in each key/value pair
$app_list_strings = array (
//e.g. auf Deutsch 'Contacts'=>'Contakten',
  'language_pack_name' => 'Polski',
  'moduleList' =>
  array (
    'Home' => 'Strona główna',
    'Bugs' => 'Błędy',
    'Cases' => 'Sprawy',
    'Notes' => 'Notatki',
    'Newsletters' => 'Newslettery',
    'Teams' => 'Zespoły',
    'Users' => 'Użytkownicy',
    'KBDocuments' => 'Baza wiedzy',
    'FAQ' => 'FAQ', 
        ),
  'moduleListSingular' =>
  array (
    'Home' => 'Strona główna',
    'Bugs' => 'Błąd',
    'Cases' => 'Sprawa',
    'Notes' => 'Notatka',
    'Teams' => 'Zespół',
    'Users' => 'Użytkownik'
        ),

  'checkbox_dom'=> array(
  	''=>'',
  	'1'=>'Tak',
  	'2'=>'Nie',
  ),
          
  //e.g. en fran?is 'Analyst'=>'Analyste',
  'account_type_dom' => 
  array (
    '' => '',
    'Analyst' => 'Analityk',
    'Competitor' => 'Konkurencja',
    'Customer' => 'Klient',
    'Integrator' => 'Integrator',
    'Investor' => 'Inwestor',
    'Partner' => 'Partner',
    'Press' => 'Prasa',
    'Prospect' => 'Wizytówka',
    'Reseller' => 'Reseller',
    'Other' => 'Pozostali',
  ),
  //e.g. en espa?l 'Apparel'=>'Ropa',
  'industry_dom' => 
  array (
    '' => '',
    'Apparel' => 'Branża odzieżowa',
    'Banking' => 'Bankowość',
    'Biotechnology' => 'Biotechnologia',
    'Chemicals' => 'Branża chemiczna',
    'Communications' => 'Branża samochodowa',
    'Construction' => 'Budownictwo',
    'Consulting' => 'Consulting',
    'Education' => 'Edukacja, szkolnictwo',
    'Electronics' => 'Branża elektroniczna',
    'Energy' => 'Branża energetyczna',
    'Engineering' => 'Inżynieria',
    'Entertainment' => 'Branża rozrywkowa',
    'Environmental' => 'Ochrona środowiska',
    'Finance' => 'Usługi finansowe',
    'Government' => 'Instytucje publiczne',
    'Healthcare' => 'Ochrona zdrowia',
    'Hospitality' => 'Szpitale',
    'Insurance' => 'Ubezpieczenia',
    'Machinery' => 'Przemysł maszynowy',
    'Manufacturing' => 'Drobna wytwórczość',
    'Media' => 'Media',
    'Not For Profit' => 'Organizacje NonProfit',
    'Recreation' => 'Turystyka i rekreacja',
    'Retail' => 'Detal',
    'Shipping' => 'Spedycja',
    'Technology' => 'Branża IT',
    'Telecommunications' => 'Telekomunikacja',
    'Transportation' => 'Transport',
    'Utilities' => 'Usługi',
    'Other' => 'Pozostali',
  ),
  'industry_dom' => 
  array (
    '' => '',
    'Cold Call' => 'Telemarketing',
    'Existing Customer' => 'Istniejcy Klient',
    'Self Generated' => 'Inicjatywa własna',
    'Emplołyee' => 'Pracownik',
    'Partner' => 'Partner',
    'Public Relations' => 'Public Relations',
    'Direct Mail' => 'Reklama bezporednia',
    'Conference' => 'Uczestnik konferencji',
    'Trade Show' => 'Uczestnik prezentacji',
    'Web Site' => 'Ze strony WWW',
    'Word of mouth' => 'Z polecenia',
    'Email' => 'Z emaila',
    'Campaign'=>'Kampanie',
    'Other' => 'Inne różne',
  ),
  'source_default_key' => 'Self Generated',
  'lead_source_dom' =>
  array (
    '' => '',
    'Cold Call' => 'Telemarketing',
    'Existing Customer' => 'Istniejcy Klient',
    'Self Generated' => 'Inicjatywa własna',
    'Emplołyee' => 'Pracownik',
    'Partner' => 'Partner',
    'Public Relations' => 'Public Relations',
    'Direct Mail' => 'Reklama bezporednia',
    'Conference' => 'Uczestnik konferencji',
    'Trade Show' => 'Uczestnik prezentacji',
    'Web Site' => 'Ze strony WWW',
    'Word of mouth' => 'Z polecenia',
    'Email' => 'Z emaila',
    'Campaign'=>'Kampanie',
    'Other' => 'Inne różne',
  ),
  'opportunity_type_dom' => 
  array (
    '' => '',
    'Existing Business' => 'Istniejcy projekt',
    'New Business' => 'Nowy projekt',
  ),
  //Note:  do not translate opportunity_relationship_type_default_key
//       it is the key for the default opportunity_relationship_type_dom value
  'opportunity_relationship_type_default_key' => 'Primary Decision Maker',
  'opportunity_relationship_type_dom' => 
  array (
    '' => '',
    'Primary Decision Maker' => 'Opiniodawca wstępny',
    'Business Decision Maker' => 'Decydent biznesowy',
    'Business Evaluator' => 'Opiniodawca biznesowy',
    'Technical Decision Maker' => 'Decydent techniczny',
    'Technical Evaluator' => 'Opiniodawca techniczny',
    'Executive Sponsor' => 'Sponsor - gówny decydent',
    'Influencer' => 'Przeciwnik',
    'Other' => 'Inny',
  ),
  //Note:  do not translate case_relationship_type_default_key
//       it is the key for the default case_relationship_type_dom value
  'case_relationship_type_default_key' => 'Primary Contact',
  'case_relationship_type_dom' => 
  array (
    '' => '',
    'Primary Contact' => 'Kontakt podstawowy',
    'Alternate Contact' => 'Kontakt alternatywny',
  ),
  'payment_terms' =>
  array (
  	'' => '', 
	'Net 15' => 'Net 15',
	'Net 30' => 'Net 30',
  ),
  'sales_stage_default_key' => 'Prospecting',
  'sales_stage_dom' => 
  array (
    'Prospecting' => 'Wstępna analiza',
    'Qualification' => 'Klasyfikacja klienta',
    'Needs Analysis' => 'Wymagana analiza',
    'Value Proposition' => 'Pocz. prop. cenowa',
    'Id. Decision Makers' => 'Id. osób decyzyjnych',
    'Perception Analysis' => 'Analiza oferty',
    'Proposal/Price Quote' => 'Propozycja cenowa',
    'Negotiation/Review' => 'Negocjacje',
    'Closed Won' => 'Zakończone sukcesem',
    'Closed Lost' => 'Zakończone porażką',
  ),
  'sales_probability_dom' => // keys must be the same as sales_stage_dom
  array (
    'Prospecting' => '10',
    'Qualification' => '20',
    'Needs Analysis' => '25',
    'Value Proposition' => '30',
    'Id. Decision Makers' => '40',
    'Perception Analysis' => '50',
    'Proposal/Price Quote' => '65',
    'Negotiation/Review' => '80',
    'Closed Won' => '100',
    'Closed Lost' => '0',
  ),
  'activity_dom' =>
  array (
    'Call' => 'Rozmowa tel.',
    'Meeting' => 'Spotkanie',
    'Task' => 'Zadanie',
    'Email' => 'E-mail',
    'Note' => 'Notatka',
  ),
  'salutation_dom' =>
  	array (
    '' => '',
    'Mr.' => 'Sz.Pan',
    'Ms.' => 'Sz.Pani',
    'Mrs.' => 'Sz. Pani',
    'Dr.' => 'Dr.',
    'Prof.' => 'Prof.',
  ),
  //time is in seconds; the greater the time the longer it takes;
  'reminder_max_time'=>3600,
  'reminder_time_options' => array( 60=> '1 minutę przed',
  								  300=> '5 minut przed',
  								  600=> '10 minut przed',
  								  900=> '15 minut przed',
  								  1800=> '30 minut przed',
  								  3600=> '1 godzinę przed',
								 ),

  'task_priority_default' => 'Medium',
  'task_priority_dom' =>
  array (
    'High' => 'Wysoki',
    'Medium' => 'Średni',
    'Low' => 'Niski',
  ),
  'task_status_default' => 'Not Started',
  'task_status_dom' =>
  array (
    'Not Started' => 'Nie rozpoczęte',
    'In Progress' => 'W trakcie',
    'Completed' => 'Zakończone',
    'Pending Input' => 'W kolejce',
    'Deferred' => 'Odroczone',
  ),
  'meeting_status_default' => 'Planned',
  'meeting_status_dom' => 
  array (
    'Planned' => 'Planowane',
    'Held' => 'Wstrzymane',
    'Not Held' => 'Nie wstrzymane',
  ),
  'call_status_default' => 'Planned',
  'call_status_dom' => 
  array (
    'Planned' => 'Planowane',
    'Held' => 'Wstrzymane',
    'Not Held' => 'Nie wstzymane',
  ),
  'call_direction_default' => 'Wychodzące',
  'call_direction_dom' => 
  array (
    'Inbound' => 'Przychodzące',
    'Outbound' => 'Wychodzące',
  ),
  'lead_status_dom' => 
  array (
    '' => '',
    'New' => 'Nowy',
    'Assigned' => 'Przydzielony',
    'In Process' => 'W trakcie',
    'Converted' => 'Przekształcony',
    'Recycled' => 'Odzyskany',
    'Dead' => 'Martwy',
  ),
   'gender_list' =>
  array (
    'male' => 'Mężczyzna',
    'female' => 'Kobieta',
  //Note:  do not translate case_status_default_key
//       it is the key for the default case_status_dom value
  'case_status_default_key' => 'New',
  'case_status_dom' => 
  array (
    'New' => 'Nowy',
    'Assigned' => 'Przydzielony',
    'Closed' => 'Zamknięty',
    'Pending Input' => 'Oczekujący',
    'Rejected' => 'Odrzucony',
    'Duplicate' => 'Powtórzony',
  ),
  'case_priority_default_key' => 'P2',
  'case_priority_dom' => 
  array (
    'P1' => 'Wysoki',
    'P2' => 'Średni',
    'P3' => 'Niski',
  ),
  'user_status_dom' =>
  array (
    'Active' => 'Aktywny',
    'Inactive' => 'Nieaktywny',
  ),
  'employee_status_dom' =>
  array (
    'Active' => 'Aktywny',
    'Terminated' => 'Nie pracuje',
    'Leave of Absence' => 'Nieobecny',
  ),
  'messenger_type_dom' =>
  array (
   '' => '',
    'MSN' => 'MSN',
    'Yahoo!' => 'Yahoo!',
    'AOL' => 'AOL',
    'GG' => 'GG',
  ),

	'project_task_priority_options' => array (
		'High' => 'Wysoki',
		'Medium' => 'Średni',
		'Low' => 'Niski',
	),
    'project_task_priority_default' => 'Medium',

	'project_task_status_options' => array (
		'Not Started' => 'Nie rozpoczęty',
		'In Progress' => 'W realizacji',
		'Completed' => 'Zakończony',
		'Pending Input' => 'Oczekujący',
		'Deferred' => 'Przeoczony',
	),
	'project_task_utilization_options' => array (
		'0' => 'zero',
		'25' => '25',
		'50' => '50',
		'75' => '75',
		'100' => '100',
	),
  //Note:  do not translate record_type_default_key
//       it is the key for the default record_type_module value
  'record_type_default_key' => 'Accounts',
  'record_type_display' => 
  array (
    '' => '',
    'Accounts' => 'Klienci',
    'Opportunities' => 'Tematy',
    'Cases' => 'Sprawy',
    'Leads' => 'Wizytówki',
    'Contacts' => 'Kontakty', // cn (11/22/2005) added to support Emails

    'ProductTemplates' => 'Produkty',
    'Quotes' => 'Wycena',
	
    'Bugs' => 'Błąd',
    'Project' => 'Realizacja',
    'ProjectTask' => 'Zadania projektu',
    'Tasks' => 'Zadanie',
  ),

  'record_type_display_notes' =>
  array (
    'Accounts' => 'Klienci',
	'Contacts' => 'Kontakty',
    'Opportunities' => 'Tematy',
    'Cases' => 'Sprawy',
    'Leads' => 'Wizytówki',
	
    'ProductTemplates' => 'Produkty',
    'Quotes' => 'Oferta',
    'Products' => 'Produkty',
    'Contracts' => 'Kontrakty',
	
    'Bugs' => 'Błąd',
    'Emails' => 'Poczta',
    'Project' => 'Realizacja',
    'ProjectTask' => 'Zadania projektu',
    'Meetings' => 'Spotkanie',
    'Calls' => 'Rozmowa tel.',
  ),


  'product_status_default_key' => 'Ship',
  'product_status_quote_key' => 'Quotes',
  'product_status_dom' =>
  array (
    'Quotes' => 'Wyceniono',
    'Orders' => 'Zamówiono',
    'Ship' => 'Dostarczono',
  ),


  'pricing_formula_default_key' => 'Fixed',
  'pricing_formula_dom' =>
  array (
    'Fixed' => 'Korekta ceny',
    'ProfitMargin' => 'Margines zysku',
    'PercentageMarkup' => 'Marża przy zakupie',
    'PercentageDiscount' => 'Rabat od cennika',
    'IsList' => 'Jak w Cenniku',
  ),
  'product_template_status_dom' =>
  array (
    'Available' => 'Od Ręki',
    'Unavailable' => 'Zapas wyczerpany',
  ),
  'tax_class_dom' =>
  array (
    'Taxable' => 'Opodatkowane',
    'Non-Taxable' => 'Nieopodatkowane',
  ),
  'support_term_dom' =>
  array (
    '+6 months' => '6 m-cy',
    '+1 year' => '1 rok',
    '+2 years' => '2 lata',
  ),


  'quote_type_dom' =>
  array (
    'Quotes' => 'Wycena',
    'Orders' => 'Zamówienie',
  ),
  'default_quote_stage_key' => 'Draft',
  'quote_stage_dom' =>
  array (
    'Draft' => 'Szkic',
    'Negotiation' => 'Negocjacje',
    'Delivered' => 'Dostarczony',
    'On Hold' => 'Wstrzymany',
    'Confirmed' => 'Potwierdzony',
    'Closed Accepted' => 'Zaakceptowany',
    'Closed Lost' => 'Odrzucony',
    'Closed Dead' => 'Zamknięty',
  ),
  'default_order_stage_key' => 'Pending',
  'order_stage_dom' =>
  array (
    'Pending' => 'Oczekujący',
    'Confirmed' => 'Potwierdzony',
    'On Hold' => 'Wstrzymany',
    'Shipped' => 'Dostarczony',
    'Cancelled' => 'Skasowany',
  ),

  //Note:  do not translate quote_relationship_type_default_key
//       it is the key for the default quote_relationship_type_dom value
  'quote_relationship_type_default_key' => 'Primary Decision Maker',
  'quote_relationship_type_dom' =>
  array (
    '' => '',
    'Primary Decision Maker' => 'Opiniodawca wstępny',
    'Business Decision Maker' => 'Decydent biznesowy',
    'Business Evaluator' => 'Opiniodawca biznesowy',
    'Technical Decision Maker' => 'Decydent techniczny',
    'Technical Evaluator' => 'Opiniodawca techniczny',
    'Executive Sponsor' => 'Sponsor - gówny decydent',
    'Influencer' => 'Przeciwnik',
    'Other' => 'Inny',
  ),
  'layouts_dom' =>
  array (
    'Standard' => 'Propozycja',
    'Invoice' => 'Faktura',
    'Terms' => 'Warunki płatności'
  ),

  'issue_priority_default_key' => 'Medium',
  'issue_priority_dom' =>
  array (
    'Urgent' => 'Pilny',
    'High' => 'Wysoki',
    'Medium' => 'Średni',
    'Low' => 'Niski',
  ),
  'issue_resolution_default_key' => '',
  'issue_resolution_dom' =>
  array (
  '' => '',
  'Accepted' => 'Zaakceptowany',
    'Duplicate' => 'Powtórzony',
    'Fixed' => 'Stay',
    'Out of Date' => 'Przeterminowany',
    'Invalid' => 'Niewłaciwy',
    'Later' => 'Spóźniony',
  ),
  'issue_status_default_key' => 'New',
  'issue_status_dom' =>
  array (
    'New' => 'Nowy',
    'Assigned' => 'Przydzielony',
    'Closed' => 'Zamknięty',
    'Pending' => 'Oczekujący',
    'Rejected' => 'Odrzucony',
  ),
   'bug_type_default_key' => 'Bug',
  'bug_type_dom' =>
  array (
    'Defect' => 'Defekt',
    'Feature' => 'Cecha',
  ),

  'source_default_key' => '',
  'source_dom' =>
  array (
	'' => '',
  	'Internal' => 'Wewnętrzny',
  	'Forum' => 'Forum',
  	'Web' => 'Web',
  	'InboundEmail' => 'Poczta'
  ),

  'product_category_default_key' => '',
  'product_category_dom' =>
  array (
	'' => '',
  	'Accounts' => 'Klienci',
  	'Activities' => 'Działania',
  	'Bug Tracker' => 'Śledzenie błędów',
  	'Calendar' => 'Kalendarz',
  	'Calls' => 'Telefony',
  	'Campaigns' => 'Kampanie',
  	'Cases' => 'Sprawy',
  	'Contacts' => 'Kontakty',
  	'Currencies' => 'Kursy',
  	'Dashboard' => 'Zestawienia',
  	'Documents' => 'Dokumenty',
  	'Emails' => 'Poczta email',
  	'Feeds' => 'Kanały',
  	'Forecasts' => 'Prognozy',
  	'Help' => 'Pomoc',
  	'Home' => 'Strona główna',
  	'Leads' => 'Wizytówki',
  	'Meetings' => 'Spotkania',
  	'Notes' => 'Notatki',
  	'Opportunities' => 'Tematy',
  	'Outlook Plugin' => 'Wtyczki Outlook',
  	'Product Catalog' => 'Katalog produktów',
  	'Products' => 'Produkty',
  	'Projects' => 'Projekty',
  	'Quotes' => 'Wyceny',
  	'Releases' => 'Wersje',
  	'RSS' => 'Kanay RSS',
  	'Studio' => 'Studio',
  	'Upgrade' => 'Ulepszenie',
  	'Users' => 'Użytkownicy',
  ),

  /*Added entries 'Queued' and 'Sending' for 4.0 release..*/
  'campaign_status_dom' =>
  array (
    '' => '',
        'Planning' => 'Planowane',
        'Active' => 'Aktywne',
        'Inactive' => 'Nieaktywne',
        'Complete' => 'Zakończone',
        'In Queue' => 'W kolejce',
        'Sending'=> 'Wysłane',
  ),
  'campaign_type_dom' =>
  array (
        '' => '',
        'Telesales' => 'Telesprzedaż',
        'Mail' => 'Poczta',
        'Email' => 'Email',
        'Print' => 'Druk',
        'Web' => 'Web',
        'Radio' => 'Radio',
        'Television' => 'Telewizja',
        ),



  'notifymail_sendtype' =>
  array (
    'sendmail' => 'sendmail',
    'SMTP' => 'SMTP',
  ),
  'dom_timezones' => array('-12'=>'(GMT - 12) International Date Line West',
  							'-11'=>'(GMT - 11) Midway Island, Samoa',
  							'-10'=>'(GMT - 10) Hawaii',
  							'-9'=>'(GMT - 9) Alaska',
  							'-8'=>'(GMT - 8) San Francisco',
  							'-7'=>'(GMT - 7) Phoenix',
  							'-6'=>'(GMT - 6) Saskatchewan',
  							'-5'=>'(GMT - 5) New York',
  							'-4'=>'(GMT - 4) Santiago',
  							'-3'=>'(GMT - 3) Buenos Aires',
  							'-2'=>'(GMT - 2) Mid-Atlantic',
  							'-1'=>'(GMT - 1) Azores',
  							'0'=>'(GMT)',
  							'1'=>'(GMT + 1) Madrid',
  							'2'=>'(GMT + 2) Athens',
  							'3'=>'(GMT + 3) Moscow',
  							'4'=>'(GMT + 4) Kabul',
  							'5'=>'(GMT + 5) Ekaterinburg',
  							'6'=>'(GMT + 6) Astana',
  							'7'=>'(GMT + 7) Bangkok',
  							'8'=>'(GMT + 8) Perth',
  							'9'=>'(GMT + 9) Seol',
  							'10'=>'(GMT + 10) Brisbane',
  							'11'=>'(GMT + 11) Solomone Is.',
  							'12'=>'(GMT + 12) Auckland',
  							),
      'dom_cal_month_long'=>array(
                '0'=>'',
                '1'=>'Styczeń',
                '2'=>'Luty',
                '3'=>'Marzec',
                '4'=>'Kwiecień',
                '5'=>'Maj',
                '6'=>'Czerwiec',
                '7'=>'Lipiec',
                '8'=>'Sierpień',
                '9'=>'Wrzesień',
                '10'=>'Październik',
                '11'=>'Listopad',
                '12'=>'Grudzień',
        ),

         'dom_report_types'=>array(
                'tabular'=>'Wiersze i Kolumny',
                'summary'=>'Suma',
                'detailed_summary'=>'Sumowanie szczegółowe',
                'Matrix' => 'Matryca',
        ),
        'dom_email_types'=>array(
                'out'=>'Wysłane',
                'archived'=>'Zarchiwizowane',
                'draft'=>'Szkic',
		'inbound'=> 'Przychodzące',
        	'campaign'  => 'Kampania'
	)	,
	'dom_email_status' => array (
		'archived'	=> 'Zarchiwizowane',
		'closed'	=> 'Zamkniete',
		'draft'		=> 'Szkicowane',
		'read'		=> 'Przeczytane',
		'replied'	=> 'Z odpowiedzią',
		'sent'		=> 'Wysłane',
		'send_error'	=> 'Wyślij błąd',
		'unread'	=> 'Nieczytane',
	),
		
	'dom_email_server_type' => array(''=> '-- Nie wybrano --',
					'imap'=> 'IMAP',
					'pop3'=> 'POP3',
	),
	'dom_mailbox_type'		=> array(/*''			=> '--Nie wybrano Specified--',*/
'pick'		=> '--Nic--',
'createcase'  => 'Utwórz sprawę',
'bug'		=> 'Utwórz Błąd',
'support'	=> 'Utwórz Sprawę',
'contact'	=> 'Utwórz Kontakt',
'sales'		=> 'Utwórz Wizytówkę',
'task'		=> 'Utwórz Zadanie',			 	'bounce'	=> 'Zwróć, gdy niedoręczone',
	),
	'dom_email_distribution'=> array(''=>  '-- Nie wybrano --',
				 'direct'=> 'Przydziel natychmiast',
				 'roundRobin'	=> 'Każdy w grupie',
				 'leastBusy'	=> 'Pierwszy wolny',
	),
	'dom_email_errors'=> array(1 => 'Możesz wybrać tylko jednego użytkownika, gdy wybrano Dostarczanie Bezpośrednie.',
			2 => 'Kiedy używasz opcji Przydziel Natychmiast, musisz wybrać opcję Tylko Zaznaczone.',
	),
	'dom_email_bool'=> array('bool_true' => 'Tak',
				'bool_false' => 'Nie',
	),
	'dom_int_bool'			=> array(1 => 'Tak',
					 	 0 => 'Nie',
	),
	'dom_switch_bool'		=> array ('on' => 'Tak',
						'off' => 'Nie',
						'' => 'Nie', ),
	'dom_email_link_type'	=> array(''=> 'System Default Mail Client',			'sugar'=> 'Klient Pocztowy SugarCRM',
			'mailto'	=> 'Zewnętrzny Klient Pocztowy'),
	'dom_email_editor_option'=> array(	''			=> 'Domyślny Format Poczty',					'html'		=> 'Poczta w HTML',
	'plain'		=> 'Tekst niesformatowny'),

	
	'schedulers_times_dom'	=> array(	'not run'	=> 'Poprzednie wykonanie, Nie wykonano',				'ready'=> 'Gotowy',						'in progress'	=> 'W trakcie',
	'failed'=> 'Nieudany',
	'completed'=> 'Zakoówzony',
	'no curl' => 'Nie odbywa się. Adres URL niedostępny',
	),

'forecast_schedule_status_dom' =>
array (
    'Active' => 'Aktywny',
    'Inactive' => 'Nieaktywny',
  ),
	'forecast_type_dom' =>
	array (
    'Direct' => 'Bezpośredni',
    'Rollup' => 'Rozwijany',
  ),

	'document_category_dom' =>
	array (
'' => '',
    'Marketing' => 'Marketing',
    'Knowledege Base' => 'Baza Wiedzy',
    'Sales' => 'Sprzedaż',
  ),

'document_subcategory_dom' =>
  	array (
  	'' => '',
    'Marketing Collateral' => 'Marketing Dodatkowy',
    'Product Brochures' => 'Katalogi Produktowe',
	'FAQ' => 'FAQ',
  ),  
  
'document_status_dom' =>
	array (
'Active' => 'Aktywny',
'Draft' => 'Szkic',
'FAQ' => 'FAQ',
'Expired' => 'Wygasły',
'Under Review' => 'W recenzji',
'Pending' => 'Oczekujący',
  ),
  'document_template_type_dom' =>
  array(
  	''=>'',
  	'mailmerge'=>'Scalanie Poczty',
  	'eula'=>'EULA',
  	'nda'=>'NDA',
  	'license'=>'Umowa Licencyjna',
  ),
'dom_meeting_accept_options' =>
array (
'accept' => 'Zaakceptowany',
'decline' => 'Odrzucony',
'tentative' => 'Do Dyskusji',
  ),
'dom_meeting_accept_status' =>
  	array (
	'accept' => 'Zaakceptowany',
	'decline' => 'Odrzucony',
	'tentative' => 'Do Dyskusji',
	'none' => 'Nic',
  ),

  'query_calc_oper_dom' =>
      array (
    '+' => '(+) Plus',
    '-' => '(-) Minus',
    '*' => '(X) Pomnożony przez',
    '/' => '(/) Podzielony przez',
  ), 
  'wflow_type_dom' =>
        array (
    'Normal' => 'Gdy rekord zapisany',
	'Time' => 'Przeterminowane',
  ),
  'mselect_type_dom' =>
        array (
    'Equals' => 'Jest',
	'in' => 'Jest jednym z',
  ),
   'cselect_type_dom' =>
        array (
    'Equals' => 'Jednakowy',
    'Does not Equal' => 'Niejednakowy',
  ),
   'dselect_type_dom' =>
        array (
    'Equals' => 'Equals',
	'Less Than' => 'Mniej niż',
	'More Than' => 'Wiecej niż',
	'Does not Equal' => 'Niejednakowy',
  ),
   'bselect_type_dom' =>
        array (
    'bool_true' => 'Tak',
	'bool_false' => 'Nie',
  ),
    'bopselect_type_dom' =>
        array (
    'Equals' => 'Jednakowe',
  ),
    'tselect_type_dom' =>
        array (
    '0'		=>'0 godzin',
    '14440' => '4 godziny',
    '28800' => '8 godzin',
    '43200' => '12 godzin',
    '86400' => '1 dzień',
    '172800' => '2 dni',
    '259200' => '3 dni',
    '345600' => '4 dni',
    '432000' => '5 dni',
    '604800' => '1 tydzień',
    '1209600' => '2 tygodnie',
    '1814400' => '3 tygodnie',
    '2592000' => '30 dni',
    '5184000' => '60 dni',
    '7776000' => '90 dni',
    '10368000' => '120 dni',
    '12960000' => '150 dni',
    '15552000' => '180 dni',
  ),
      'dtselect_type_dom' =>
        array (
    'More Than' => 'było więcej niż',
    'Less Than' => 'jest mniej niż',
  ),
        'wflow_alert_type_dom' =>
        array (
    'Email' => 'Email',
    'Invite' => 'Zaproszenie',
  ),
        'wflow_source_type_dom' =>
        array (
    'Normal Message' => 'Wiadomość normalna',
    'Custom Template' => 'Własny wzór',
    'System Default' => 'Domyślny systemowy',
  ),
          'wflow_user_type_dom' =>
        array (
    'current_user' => 'Obecny użytkownik',
    'rel_user' => 'Polączeni użytkownicy',
    'rel_user_custom' => 'Połączeni użytkownicy',
    'specific_team' => 'Określony zespół',
    'specific_role' => 'Określona rola',
    'specific_user' => 'Określony użytkownik',
  ),
          'wflow_array_type_dom' =>
        array (
    'future' => 'Nowa wartość',
    'past' => 'Stara wartość',
  ),
          'wflow_relate_type_dom' =>
        array (
    'Self' => 'użytkownik',
    'Manager' => "Zarządzanie użytkownikiami",
  ),
    'wflow_address_type_dom' =>
        array (
    'to' => 'Do:',
    'cc' => 'Do wiadomości:',
    'bcc' => 'Ukryci adresaci:',
  ),
     'wflow_address_type_invite_dom' =>
        array (
    'to' => 'Do:',
    'cc' => 'Do wiadomości:',
    'bcc' => 'Ukryci adresaci:',
    'invite_only' => '(Tylko zaproszeni)',
  ),
     'wflow_address_type_to_only_dom' =>
        array (
    'to' => 'Do:',
  ),  
    'wflow_action_type_dom' =>
        array (
    'update' => 'Uaktualnij rekord',
    'update_rel' => 'Uaktualnij połączone rekordy',
    'new' => 'Nowy rekord',
  ), 
  'wflow_action_datetime_type_dom' =>
        array (
    'Triggered Date' => 'Data zainicjowania',
    'Existing Value' => 'Obecna wartość',
  ),
  'wflow_set_type_dom' =>
        array (
    'Basic' => 'Opcje podstawowe',
    'Advanced' => 'Opcje zaawansowane',
  ),
  'wflow_adv_user_type_dom' =>
  		array (
    'assigned_user_id' => 'użytkownik przydzielony do rekordu inicjującego',
    'modified_user_id' => 'użytkownik ostatnio modyfikujący rekord inicjujący',
    'created_by' => 'Rekord inicjujący stworzony przez użytkownika:',
    'current_user' => 'Zalogowany użytkownik',
  ),
  'wflow_adv_team_type_dom' =>
        array (
    'team_id' => 'Bieżący zespół rekordu inicjującego',
    'current_team' => 'Zalogowany użytkownik należy do zespołu:',
  ), 
  'wflow_adv_enum_type_dom' =>
        array (
    'retreat' => 'Ustaw listę rozwijalną od końca po ',
    'advance' => 'Ustaw listę rozwijalną od początku po ',
  ), 
  'wflow_record_type_dom' =>
        array (
    'All' => 'Nowe i istniejace rekordy',
    'New' => 'Tylko nowe rekordy',
    'Update' => 'Tylko istniejące rekordy',
  ),
  'wflow_rel_type_dom' =>
  		array (
	'all' => 'Wszystkie Połączenia',
	//'first' => 'The first related',
	'filter' => 'Filtuj Połączenia',
  		),
  'wflow_relfilter_type_dom' =>
  		array (
	'all' => 'wszystkie połączenia',
	'any' => 'dowolne połączenia',
  		),
  	//I added the PST, CST, MST, EST denotations here	
  'dom_timezones_extra' => array('-12'=>'(GMT-12) International Date Line West',
  				'-11'=>'(GMT-11) Midway Island, Samoa',
  				'-10'=>'(GMT-10) Hawaii',
  				'-9'=>'(GMT-9) Alaska',
  				'-8'=>'(GMT-8) (PST)',
  				'-7'=>'(GMT-7) (MST)',
  				'-6'=>'(GMT-6) (CST)',
  				'-5'=>'(GMT-5) (EST)',
  				'-4'=>'(GMT-4) Santiago',
  				'-3'=>'(GMT-3) Buenos Aires',
  				'-2'=>'(GMT-2) Mid-Atlantic',
  				'-1'=>'(GMT-1) Azores',
  				'0'=>'(GMT)',
  				'1'=>'(GMT+1) Madrid',
  				'2'=>'(GMT+2) Athens',
  				'3'=>'(GMT+3) Moscow',
  				'4'=>'(GMT+4) Kabul',
  				'5'=>'(GMT+5) Ekaterinburg',
  				'6'=>'(GMT+6) Astana',
  				'7'=>'(GMT+7) Bangkok',
  				'8'=>'(GMT+8) Perth',
  				'9'=>'(GMT+9) Seol',
  				'10'=>'(GMT+10) Brisbane',
  				'11'=>'(GMT+11) Solomone Is.',
  				'12'=>'(GMT+12) Auckland',
  							),

        'wflow_fire_order_dom' => array('alerts_actions'=>'Ostrzeż, potem działaj',
                                    'actions_alerts'=>'Działaj, potem ostrzeż'),



				
  	'duration_intervals' => array('0'=>'00',
  					'15'=>'15',
  					'30'=>'30',
  					'45'=>'45'),						

// deferred
/*// QUEUES MODULE DOMs
'queue_type_dom' => array(
	'Users' => 'Users',

	'Teams' => 'Teams',

	'Mailbox' => 'Mailbox',
),		   
*/

//prospect list type dom
  'prospect_list_type_dom' =>
  array (
    'default' => 'Domyślnie',
    'seed' => 'Seed',
    'exempt' => 'Lista Ograniczeń po Id',
    'exempt_address' => 'Lista Ograniczeń po adresie email',
    'exempt_domain' => 'Lista Ograniczeń po domenie',
    'test' => 'Test',
  ),
  
  'email_marketing_status_dom' => 
  array (
  	'' => '',
  	'active'=>'Aktywny',
  	'inactive'=>'Nieaktywny'
  ),

  'campainglog_activity_type_dom' =>
  array (
  	''=>'',
    'targeted' => 'Wiadomości wysane/niewysane',
    'send error'=>'Wiadomości odrzucone inne',
    'invalid email'=>'Wiadomości odrzucone - niepoprawny adres',
    'link'=>'Click-thru Link',
    'viewed'=>'Wiadomości Obejrzane',
    'removed'=>'Usunięte',
    'lead'=>'Utworzone Wizytówki',
    'contact'=>'Utworzone Kontakty',
    'blocked'=>'Odrzucone z powodu błedu adresata, lub domeny',
  ),

  'campainglog_target_type_dom' =>
  array (
    'Contacts' => 'Kontakty',
    'Users'=>'Użytkownicy',
    'Prospects'=>'Docelowi',
    'Leads'=>'Wizytówki',
  ),



	// Contracts module enums

	'contract_status_dom' => array (
		'notstarted' => 'Nie Rozpoczęty',
		'inprogress' => 'W trakcie',
		'signed' => 'Podpisany',
	),

	'contract_type_dom' => array (
		'type1' => 'Kontrakt Typ 1',
		'type2' => 'Kontrakt Typ 2',
		'type3' => 'Kontrakt Typ 3',
	),

	'contract_payment_frequency_dom' => array (
		'monthly' => 'Miesięcznie',
		'quarterly' => 'Kwartalnie',
		'halfyearly' => 'Półrocznie',
		'yearly' => 'Rocznie',
	),

	'contract_expiration_notice_dom' => array (
		'1' => '1 Dzień',
		'3' => '3 Dni',
		'5' => '5 Dni',
		'7' => '1 Tydzień',
		'14' => '2 Tygodnie',
		'21' => '3 Tygodnie',
		'31' => '1 Miesiąc',
	),


);

$app_strings = array (

	'LBL_LIST_TEAM' => 'Lista Zespołów',
	'LBL_TEAM' => 'Zespół',
	'LBL_TEAM_ID'=>'ID Zespołu:',

	

	'ERR_CREATING_FIELDS' => 'Błąd wypełnienia dodatkowego pola: ',
	'ERR_CREATING_TABLE' => 'Błąd przy utworzeniu tabeli: ',
	'ERR_DECIMAL_SEP_EQ_THOUSANDS_SEP'	=> "Separator dziesiętny nie może używać takiego samego znaku jak separator tysięcy. Zmień wartość.",
	'ERR_DELETE_RECORD' => 'Musi być podany numer rekordu, aby usunąc kontakt.',
	'ERR_EXPORT_DISABLED' => 'Eksport wyłączony.',
	'ERR_EXPORT_TYPE' => 'Błąd podczas eksportu ',
	'ERR_INVALID_AMOUNT' => 'Wprowadźź prawidłową wartość',
'ERR_INVALID_DATE_FORMAT' => 'Format daty musi być następujący: ',
	'ERR_INVALID_DATE' => 'Wprowadźź prawidłową datę',
	'ERR_INVALID_DAY' => 'Wprowadźź prawidłowy dzień',
'ERR_INVALID_EMAIL_ADDRESS' => 'nieprawidłowy format adresu email.',
	'ERR_INVALID_FILE_REFERENCE' => 'Nieprawidłowe odwołanie pliku',
	'ERR_INVALID_HOUR' => 'Wprowadź prawidłową godzinę',
	'ERR_INVALID_MONTH' => 'Wprowadź prawidłowy miesiąc.',
	'ERR_INVALID_TIME' => 'Wprowadź prawidłowy czas.',
'ERR_INVALID_YEAR' => 'Wprowadź poprawny czterocyfrowy format roku.',
	'ERR_NEED_ACTIVE_SESSION' => 'Wymagana jest aktywna sesja, aby wyeksportować zawartość',
    'ERR_NO_HEADER_ID' => 'Tafunkcja nie jest dostępna w tym temacie.',
'ERR_NOT_ADMIN' => "Nieautoryzowany dostęp do modułu administracji.",
	'ERR_MISSING_REQUIRED_FIELDS' => 'Opuszczono wymagane pole:',
	'ERR_INVALID_VALUE' => 'Nieprawidowa wartość',
	'ERR_NO_SUCH_FILE' =>'Plik nie istnieje w Systemie',
	'ERR_NO_SINGLE_QUOTE' => 'Nie mogę użyć pojedynczego znaku kwotowania dla ',
	'ERR_NOTHING_SELECTED' =>'Dokonaj wyboru przed kontynuacją.',
	'ERR_OPPORTUNITY_NAME_DUPE' => 'Temat o nazwie %s już istnieje.  Wprowadź inną nazwę poniżej.',
	'ERR_OPPORTUNITY_NAME_MISSING' => 'Nazwa tematu nie została podana.  Wprowadź nazwę tematu poniżej.',
	'ERR_POTENTIAL_SEGFAULT' => 'Wykryto potencjalny błąd serwera Apache - segmentation fault. Powiadom administratora Twojego systemu, aby potwierdzić ten problem i zgosić go do SugarCRM.',
	'ERR_SELF_REPORTING' => 'użytkownik nie moze raportować do siebie samego.',
	'ERR_SINGLE_QUOTE'	=> 'Użycie liczby pojedynczej jest zabronione w tym polu.  Zmień wartość.',
	'ERR_SQS_NO_MATCH_FIELD' => 'Niepoprawne dane dla pola: ',
	'ERR_SQS_NO_MATCH' =>'Nie pasuje',
    'ERR_ADDRESS_KEY_NOT_SPECIFIED' => 'Określ indeks \'klucza\' w atrybucie displayParams definicji Meta-Danych',
	'ERR_EXISTING_PORTAL_USERNAME'=>'Błąd: Nazwa Portalu została już przydzielona do innego kontaktu.',
	
	'LBL_ACCOUNT'=>'Konto',
	'LBL_ACCOUNTS'=>'Konta',
	'LBL_ACTIVITIES_SUBPANEL_TITLE'=>'Działania',
	'LBL_ACCUMULATED_HISTORY_BUTTON_KEY' => 'H',
	'LBL_ACCUMULATED_HISTORY_BUTTON_LABEL' => 'Zobacz podsumowanie',
'LBL_ACCUMULATED_HISTORY_BUTTON_TITLE' => 'Zobacz podsumowanie [Alt+H]',
	'LBL_ADD_BUTTON_KEY' => 'A',
	'LBL_ADD_BUTTON_TITLE' => 'Dodaj [Alt+A]',
	'LBL_ADD_BUTTON' => 'Dodaj',
	'LBL_ADD_DOCUMENT' => 'Dodaj Dokument',
	'LBL_ADD_TO_PROSPECT_LIST_BUTTON_KEY' => 'L',
'LBL_ADD_TO_PROSPECT_LIST_BUTTON_LABEL' => 'Dodaj do Listy Docelowych',
'LBL_ADD_TO_PROSPECT_LIST_BUTTON_TITLE' => 'Dodaj do Listy Docelowych',
	'LBL_ADDITIONAL_DETAILS_CLOSE_TITLE' => 'Kliknij, aby zamknąć',
	'LBL_ADDITIONAL_DETAILS_CLOSE' => 'Zamknij',
	'LBL_ADDITIONAL_DETAILS' => 'Dodatkowe detale',
	'LBL_ADMIN' => 'Admin',
	'LBL_ALT_HOT_KEY' => 'Alt+',
	'LBL_ARCHIVE' => 'Archiwum',
	'LBL_ASSIGNED_TO_USER'=>'Przydzielone do użytkownika',
	'LBL_ASSIGNED_TO' => 'Przydzielone do:',
	'LBL_BACK' => 'Powrót',
	'LBL_BILL_TO_ACCOUNT'=>'Zafakturuj dla Klienta',
	'LBL_BILL_TO_CONTACT'=>'Zafakturuj dla Kontaktu',
    'LBL_BILLING_ADDRESS'=>'adres do Fakturowania',
    'LBL_BROWSER_TITLE' => 'SugarCRM - Komercyjny Open Source CRM',
	'LBL_BROWSER_TITLE' => 'SugarCRM',
	'LBL_BUGS'=>'Błędy',
	'LBL_BY' => 'przez',
	'LBL_CALLS'=>'Rozmowy Telefoniczne',
	'LBL_CALL'=>'Rozmowa tel.',
'LBL_CAMPAIGNS_SEND_QUEUED' => 'Wyślij oczekującą Pocztę Kampanii',
	'LBL_CANCEL_BUTTON_KEY' => 'X',
	'LBL_CANCEL_BUTTON_LABEL' => 'Kasuj',
	'LBL_CANCEL_BUTTON_TITLE' => 'Kasuj [Alt+X]',
    'LBL_SUBMIT_BUTTON_LABEL' => 'Wyślij',
	'LBL_CASE'=>'Sprawa',
	'LBL_CASES'=>'Sprawy',
	'LBL_CHANGE_BUTTON_KEY' => 'G',
	'LBL_CHANGE_BUTTON_LABEL' => 'Zmień',
	'LBL_CHANGE_BUTTON_TITLE' => 'Zmień[Alt+G]',
	'LBL_CHARSET' => 'UTF-8',
	'LBL_CHECKALL' => 'Zaznacz Wszystko',
    'LBL_CITY' => 'Miasto',
	'LBL_CLEAR_BUTTON_KEY' => 'C',
	'LBL_CLEAR_BUTTON_LABEL' => 'Wyczyść',
	'LBL_CLEAR_BUTTON_TITLE' => 'Wyczyść[Alt+C]',
	'LBL_CLEARALL' => 'Wyczyść wszystko',
	'LBL_CLOSE_WINDOW'=>'Zamknij okno',
	'LBL_CLOSEALL_BUTTON_KEY' => 'Q',
	'LBL_CLOSEALL_BUTTON_LABEL' => 'Zamknij wszystko',
	'LBL_CLOSEALL_BUTTON_TITLE' => 'Zamknij wszystko [Alt+I]',
    'LBL_CLOSE_AND_CREATE_BUTTON_LABEL' => 'Zamknij i utwórz nowy',
'LBL_CLOSE_AND_CREATE_BUTTON_TITLE' => 'Zamknij i utwórz nowy [Alt+C]',
    'LBL_CLOSE_AND_CREATE_BUTTON_KEY' => 'C',
	'LBL_COMPOSE_EMAIL_BUTTON_KEY' => 'L',
	'LBL_COMPOSE_EMAIL_BUTTON_LABEL' => 'Napisz email',
	'LBL_COMPOSE_EMAIL_BUTTON_TITLE' => 'Napisz email [Alt+L]',
	'LBL_CONTACT_LIST' => 'Lista Kontaktów',
	'LBL_CONTACT'=>'Kontakty',
	'LBL_CONTACTS'=>'Kontakty',
	'LBL_CONTRACTS'=>'Kontrakty',
	'LBL_COUNTRY' => 'Kraj:',
	'LBL_CREATE_BUTTON_LABEL' => 'Utwórz',
	'LBL_CREATED_BY_USER'=>'Utworzone przez użytkownika',
	'LBL_CREATED_USER'=>'Utworzone przez użytkownika',
	'LBL_CREATED_ID' => 'Utworzone przez ID użytkownika',
	'LBL_CREATED' => 'Utworzone przez',
	'LBL_CURRENT_USER_FILTER' => 'Tylko moje elementy:',
	'LBL_CURRENCY'=>'Waluta:',
	'LBL_DOCUMENTS'=>'Dokumenty',
	'LBL_DATE_ENTERED' => 'Data utworzenia:',
	'LBL_DATE_MODIFIED' => 'Ostatnia modyfikacja:',
	'LBL_DELETE_BUTTON_KEY' => 'D',
	'LBL_DELETE_BUTTON_LABEL' => 'Usuń',
	'LBL_DELETE_BUTTON_TITLE' => 'Usuń[Alt+D]',
	'LBL_DELETE_BUTTON' => 'Usuń',
	'LBL_DELETE' => 'Usuń',
	'LBL_DELETED'=>'Usunięte',
	'LBL_DIRECT_REPORTS'=>'Raporty Bezpośrednie',
	'LBL_DONE_BUTTON_KEY' => 'X',
	'LBL_DONE_BUTTON_LABEL' => 'Wykonaj',
	'LBL_DONE_BUTTON_TITLE' => 'Wykonaj [Alt+X]',
  'LBL_DST_NEEDS_FIXIN' => 'Aplikacja wymaga użycia funkcji Korekty Czasu zimowego/letniego.  Kliknij <a href="index.php?module=Administration&action=DstFix">Napraw</a> w Panelu Administracyjnym i zatwierdź Korektę Czasu.',
	'LBL_DUPLICATE_BUTTON_KEY' => 'U',
	'LBL_DUPLICATE_BUTTON_LABEL' => 'Duplikuj',
	'LBL_DUPLICATE_BUTTON_TITLE' => 'Duplikuj [Alt+U]',
	'LBL_DUPLICATE_BUTTON' => 'Duplikuj',
	'LBL_EDIT_BUTTON_KEY' => 'E',
	'LBL_EDIT_BUTTON_LABEL' => 'Edytuj',
	'LBL_EDIT_BUTTON_TITLE' => 'Edytuj [Alt+E]',
	'LBL_EDIT_BUTTON' => 'Edytuj',
	'LBL_EDIT_AS_NEW_BUTTON_LABEL' => 'Edytuj jako nowy',
	'LBL_EDIT_AS_NEW_BUTTON_TITLE' => 'Edytuj jako nowy',
	'LBL_VIEW_BUTTON_KEY' => 'V',
	'LBL_VIEW_BUTTON_LABEL' => 'Zobacz',
	'LBL_VIEW_BUTTON_TITLE' => 'Zobacz [Alt+V]',
	'LBL_VIEW_BUTTON' => 'Zobacz',
	'LBL_EMAIL_PDF_BUTTON_KEY' => 'M',
	'LBL_EMAIL_PDF_BUTTON_LABEL' => 'Wyślij jako PDF',
	'LBL_EMAIL_PDF_BUTTON_TITLE' => 'Wyślij jako PDF [Alt+M]',
	'LBL_EMAILS'=>'Poczta',
	'LBL_EMPLOYEES' => 'Pracownicy',
	'LBL_ENTER_DATE' => 'Wprowadź datę',
	'LBL_EXPORT_ALL' => 'Wyeksportuj wszystko',
	'LBL_EXPORT' => 'Wyeksportuj',
    'LBL_GO_BUTTON_LABEL' => 'Naprzód',
	'LBL_HIDE'=>'Ukryj',
	'LBL_ID'=>'ID',
	'LBL_IMPORT_PROSPECTS'=>'Importuj grupę odbiorców',
	'LBL_IMPORT' => 'Import',
    'LBL_IMPORT_STARTED' => 'Import rozpoczęty: ',
'LBL_MISSING_CUSTOM_DELIMITER' => 'Musisz podać własny znak podziału.',  
	'LBL_LAST_VIEWED' => 'Ostatnio oglądane',
	'LBL_LEADS'=>'Wizytówki',
	
	'LBL_LIST_ACCOUNT_NAME' => 'Nazwa Klienta',
	'LBL_LIST_ASSIGNED_USER' => 'użytkownik',
	'LBL_LIST_CONTACT_NAME' => 'Nazwa Kontaktu',
	'LBL_LIST_CONTACT_ROLE' => 'Rola Kontaktu',
	'LBL_LIST_EMAIL' => 'Emali',
	'LBL_LIST_NAME' => 'Nazwa',
	'LBL_LIST_OF' => 'z',
	'LBL_LIST_PHONE' => 'Telefon',
	'LBL_LIST_USER_NAME' => 'Nazwa użytkownika',
	'LBL_LISTVIEW_MASS_UPDATE_CONFIRM' => 'Czy na pewno chcesz poprawić całą listę',
	'LBL_LISTVIEW_NO_SELECTED' => 'Wybierz co najmniej jeden rekord, aby kontynuować',
    'LBL_LISTVIEW_TWO_REQUIRED' => 'Wybierz co najmniej dwa rekordy, aby kontynuować',
    'LBL_LISTVIEW_ALL' => 'Wszystko',
    'LBL_LISTVIEW_NONE' => 'Nic',
	'LBL_LISTVIEW_OPTION_CURRENT' => 'Bieżąca strona',
	'LBL_LISTVIEW_OPTION_ENTIRE' => 'Cała lista',
	'LBL_LISTVIEW_OPTION_SELECTED' => 'Wybrane rekordy',
	'LBL_LISTVIEW_SELECTED_OBJECTS' => 'Wybrane: ',
	
	'LBL_LOCALE_NAME_EXAMPLE_FIRST' => 'Jan',
	'LBL_LOCALE_NAME_EXAMPLE_LAST' => 'Nowak',
	'LBL_LOCALE_NAME_EXAMPLE_SALUTATION' => 'Sz. Pan',
	'LBL_LOCALE_NAME_EXAMPLE_TITLE' => 'Code Monkey Extraordinaire',
	'LBL_LOGIN_TO_ACCESS' => 'Zaloguj się, aby przejść dalej.',
	'LBL_LOGOUT' => 'Wyloguj',
	'LBL_MAILMERGE_KEY' => 'M',
	'LBL_MAILMERGE' => 'Połącz pocztę',
	'LBL_MASS_UPDATE' => 'Masowa aktualizacja',
	'LBL_MEETINGS'=>'Spotkania',
	'LBL_MEETING'=>'Spotkanie',
	'LBL_MEMBERS'=>'Członkowie',
	'LBL_MEMBER_OF'=>'Członek należy do',
	'LBL_MODIFIED_BY_USER'=>'Zmodyfikowane przez użytkownika',
	'LBL_MODIFIED_USER'=>'Zmodyfikowane przez użytkownika',
	'LBL_MODIFIED' => 'Zmodyfikowane przez',
	'LBL_MODIFIED_NAME'=>'Nazwa modyfikującego',
	'LBL_MODIFIED_ID'=>'ID modyfikującego',
	'LBL_MORE' => 'więcej',
	'LBL_MY_ACCOUNT' => 'Moje konto',
	'LBL_NAME' => 'Nazwa',
	'LBL_NEW_BUTTON_KEY' => 'N',
	'LBL_NEW_BUTTON_LABEL' => 'Utwórz',
	'LBL_NEW_BUTTON_TITLE' => 'Utwórz [Alt+N]',
	'LBL_NEXT_BUTTON_LABEL' => 'Następny',
	'LBL_NONE' => '--Nic--',
	'LBL_NOTES'=>'Notatki',
	'LBL_OPENALL_BUTTON_KEY' => 'O',
	'LBL_OPENALL_BUTTON_LABEL' => 'Otwórz wszystko',
	'LBL_OPENALL_BUTTON_TITLE' => 'Otwórz wszystko [Alt+O]',
	'LBL_OPENTO_BUTTON_KEY' => 'T',
	'LBL_OPENTO_BUTTON_LABEL' => 'Otwórz Do: ',
	'LBL_OPENTO_BUTTON_TITLE' => 'Otwórz Do: [Alt+T]',
	'LBL_OPPORTUNITIES'=>'Tematy',
	'LBL_OPPORTUNITY_NAME' => 'Nazwa Tematu',
	'LBL_OPPORTUNITY'=>'Temat',
	'LBL_OR' => 'Lub',
	'LBL_PARENT_TYPE' => 'Typ nadrzędny',
	'LBL_PERCENTAGE_SYMBOL' => '%',
    'LBL_POSTAL_CODE' => 'Kod pocztowy:',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Podstawowy adres miasto:',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Podstawowy adres kraj:',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Podstawowy adres kod pocztowy:',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Podstawowy adres województwo:',
    'LBL_PRIMARY_ADDRESS_STREET_2' => 'Podstawowy adres ulica 2:',
    'LBL_PRIMARY_ADDRESS_STREET_3' => 'Podstawowy adres ulica 3:',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Podstawowy adres ulica:',
    'LBL_PRIMARY_ADDRESS' => 'Podstawowy adres:',
	'LBL_PRODUCT_BUNDLES'=>'Produkty połączone',
	'LBL_PRODUCT_BUNDLES'=>'Produkty połączone',
	'LBL_PRODUCTS'=>'Produkty',
	'LBL_PROJECT_TASKS'=>'Etapy Realizacji',
	'LBL_PROJECTS'=>'Realizacje',
	'LBL_PROJECTS'=>'Realizacje',
	'LBL_QUOTE_TO_OPPORTUNITY_KEY' => 'O',
	'LBL_QUOTE_TO_OPPORTUNITY_LABEL' => 'Utwórz temat z oferty',
	'LBL_QUOTE_TO_OPPORTUNITY_TITLE' => 'Utwórz temat z oferty [Alt+O]',
	'LBL_QUOTES_SHIP_TO'=>'Wyślij ofertę do',
	'LBL_QUOTES'=>'Oferty',
	'LBL_RELATED' => 'Połączony',
	'LBL_RELATED_INFORMATION' => 'Informacje połączone',
	'LBL_RELATED_RECORDS' => 'Połączone rekordy',
	'LBL_REMOVE' => 'Usuń',
	'LBL_REQUIRED_SYMBOL' => '*',
	'LBL_SAVE_BUTTON_KEY' => 'S',
	'LBL_SAVE_BUTTON_LABEL' => 'Zapisz',
	'LBL_SAVE_BUTTON_TITLE' => 'Zapisz [Alt+S]',
    'LBL_SAVE_AS_BUTTON_KEY' => 'A',
    'LBL_SAVE_AS_BUTTON_LABEL' => 'Zapisz jako',
    'LBL_SAVE_AS_BUTTON_TITLE' => 'Zapisz jako [Alt+A]',
    'LBL_FULL_FORM_BUTTON_KEY' => 'F',
    'LBL_FULL_FORM_BUTTON_LABEL' => 'Formularz wypełniony',
    'LBL_FULL_FORM_BUTTON_TITLE' => 'Formularz wypełniony [Alt+F]',
	'LBL_SAVE_NEW_BUTTON_KEY' => 'V',
	'LBL_SAVE_NEW_BUTTON_LABEL' => 'Zapisz i utwórz nowe',
	'LBL_SAVE_NEW_BUTTON_TITLE' => 'Zapisz i utwórz nowe [Alt+V]',
	'LBL_SEARCH_BUTTON_KEY' => 'Q',
	'LBL_SEARCH_BUTTON_LABEL' => 'Szukaj',
	'LBL_SEARCH_BUTTON_TITLE' => 'Szukaj [Alt+Q]',
	'LBL_SEARCH' => 'Szukaj',
	'LBL_SEE_ALL' => 'Zobacz wszystko', 
	'LBL_SELECT_BUTTON_KEY' => 'T',
	'LBL_SELECT_BUTTON_LABEL' => 'Wybierz',
	'LBL_SELECT_BUTTON_TITLE' => 'Wybierz [Alt+T]',
    'LBL_BROWSE_DOCUMENTS_BUTTON_KEY' => 'B',
    'LBL_BROWSE_DOCUMENTS_BUTTON_LABEL' => 'Przeglądaj dokumenty',
    'LBL_BROWSE_DOCUMENTS_BUTTON_TITLE' => 'Przeglądaj dokumenty [Alt+B]',
	'LBL_SELECT_CONTACT_BUTTON_KEY' => 'T',
	'LBL_SELECT_CONTACT_BUTTON_LABEL' => 'Wybierz kontakt',
	'LBL_SELECT_CONTACT_BUTTON_TITLE' => 'Wybierz kontakt [Alt+T]',
    'LBL_GRID_SELECTED_FILE' => 'wybrany plik',
    'LBL_GRID_SELECTED_FILES' => 'wybrane pliki',
	'LBL_SELECT_REPORTS_BUTTON_LABEL' => 'Wybierz z Raportów',
	'LBL_SELECT_REPORTS_BUTTON_TITLE' => 'Wybierz Raport',
	'LBL_SELECT_USER_BUTTON_KEY' => 'U',
	'LBL_SELECT_USER_BUTTON_LABEL' => 'Wybierz użytkownika',
	'LBL_SELECT_USER_BUTTON_TITLE' => 'Wybierz użytkownika [Alt+U]',
'LBL_SERVER_RESPONSE_RESOURCES' => 'Źródła użyte do konstrukcji tej strony (zapytania, pliki)',
	'LBL_SERVER_RESPONSE_TIME_SECONDS' => 'sekundy.',
	'LBL_SERVER_RESPONSE_TIME' => 'Czas odpowiedzi serwera:',
	'LBL_SHIP_TO_ACCOUNT'=>'Wyślij do klienta',
	'LBL_SHIP_TO_CONTACT'=>'Wyślij do kontaktu',
    'LBL_SHIPPING_ADDRESS'=>'Adres dostawy',
	'LBL_SHORTCUTS' => 'Skróty',
	'LBL_SHOW'=>'Pokaż',
	'LBL_SQS_INDICATOR' => '',
    'LBL_STATE' => 'Województwo:',
'LBL_STATUS_UPDATED'=>'Twój status dla tego zdarzenia został uaktualniony!',
	'LBL_STATUS'=>'Status:',
	'LBL_SUBJECT' => 'Temat',,
    'LBL_SYNC' => 'Synchronizacja',
    'LBL_SYNC' => 'Synchronizacja',
	'LBL_TASKS'=>'Zadania',
	'LBL_TEAMS_LINK'=>'Zespoł',
	'LBL_THOUSANDS_SYMBOL' => 'K',
	'LBL_TRACK_EMAIL_BUTTON_KEY' => 'K',
	'LBL_TRACK_EMAIL_BUTTON_LABEL' => 'Archiwizuj email',
	'LBL_TRACK_EMAIL_BUTTON_TITLE' => 'Archiwizuj email [Alt+K]',
	'LBL_UNAUTH_ADMIN' => 'Nieautoryzowany dostęp do modułu Administracji',
	'LBL_UNDELETE_BUTTON_LABEL' => 'Odzyskaj',
	'LBL_UNDELETE_BUTTON_TITLE' => 'Odzyskaj [Alt+D]',
	'LBL_UNDELETE_BUTTON' => 'Odzyskaj',
	'LBL_UNDELETE' => 'Odzyskaj',
	'LBL_UNSYNC' => 'Odsynchronizuj',
	'LBL_UPDATE' => 'Uaktualnij',
	'LBL_USER_LIST' => 'Lista użytkowników',
	'LBL_USERS_SYNC'=>'Synchronizacja użytkowników',
	'LBL_USERS'=>'Użytkownicy',
	'LBL_VERIFY_EMAIL_ADDRESS'=>'Sprawdzanie możliwości duplikacji wprowadzanej wiadomości...',
    'LBL_VERIFY_PORTAL_NAME'=>'Sprawdzanie możliwośći duplikacji wprowadzanego portalu...',
	'LBL_VIEW_PDF_BUTTON_KEY' => 'P',
	'LBL_VIEW_PDF_BUTTON_LABEL' => 'Drukuj jako PDF',
	'LBL_VIEW_PDF_BUTTON_TITLE' => 'Drukuj jako PDF [Alt+P]',
	
	'LNK_ABOUT' => 'O Twórcach',
	'LNK_ADVANCED_SEARCH' => 'Wyszukiwanie zaawansowane',
	'LNK_BASIC_SEARCH' => 'Wyszukiwanie podstawowe',
	'LNK_SAVED_VIEWS' => 'Zapisz wyniki wyszukiwania i wygląd',
	'LNK_DELETE_ALL' => 'kasuj wszystko',
	'LNK_DELETE' => 'kasuj',
	'LNK_EDIT' => 'edytuj',
	'LNK_GET_LATEST'=>'Pobierz najnowsze',
	'LNK_GET_LATEST_TOOLTIP'=>'Zamień na najnowszą wersję',
	'LNK_HELP' => 'Pomoc',
	'LNK_LIST_END' => 'Koniec',
	'LNK_LIST_NEXT' => 'Nastęny',
	'LNK_LIST_PREVIOUS' => 'Poprzedni',
	'LNK_LIST_RETURN' => 'Wróć do listy',
	'LNK_LIST_START' => 'Początek',
	'LNK_LOAD_SIGNED'=>'Podpis',
	'LNK_LOAD_SIGNED_TOOLTIP'=>'Zamień na podpisany dokument',
	'LNK_PRINT' => 'Drukuj',
	'LNK_REMOVE' => 'usuń',
	'LNK_RESUME' => 'Resume',
	'LNK_VIEW_CHANGE_LOG' => 'Zobacz dziennik zmian',
	

	'NTC_CLICK_BACK' => 'Nacinij przycisk "Wstecz" przegldarki i popraw błąd.',
	'NTC_DATE_FORMAT' => '(yyyy-mm-dd)',
	'NTC_DATE_TIME_FORMAT' => '(yyyy-mm-dd 24:00)',
	'NTC_DELETE_CONFIRMATION_MULTIPLE' => 'Czy na pewno chcesz usunąć zaznaczony rekord/rekordy?',
	'NTC_DELETE_CONFIRMATION' => 'Czy na pewno chcesz usunąć ten rekord?',
    'NTC_DELETE_CONFIRMATION_NUM' => 'Czy na pewno chcesz usunąć?',
  	  'NTC_UPDATE_CONFIRMATION_NUM' => 'Czy na pewno chcesz aktualizować?',
   		 'NTC_DELETE_SELECTED_RECORDS' =>' wybrany rekord (rekordy)?',
	'NTC_LOGIN_MESSAGE' => 'Wprowadź nazwę użytkownika i hasło.',
	'NTC_NO_ITEMS_DISPLAY' => 'nic',
	'NTC_REMOVE_CONFIRMATION' => 'Czy na pewno chcesz usunac tę zaleność',
	'NTC_REQUIRED' => 'Wskazuje wymagane pola',
  'NTC_SUPPORT_SUGARCRM' => 'Wesprzyj projekt wpłacając dobrowolny datek korzystając z bezpiecznego systemu PayPal.',
	'NTC_TIME_FORMAT' => '(24:00)',
	'NTC_WELCOME' => 'Witaj',
	'NTC_YEAR_FORMAT' => '(rrrr)',
	'LOGIN_LOGO_ERROR'=> 'Proszę, zamień loga SugarCRM na swoje.',
	'ERROR_FULLY_EXPIRED'=> "Licencja na system SugarCRM dla Twojej firmy wygasła wiecej  niż 30 dni temu i musi zostać odnowiona. Tylko Administrator może sie zalogować",
'ERROR_LICENSE_EXPIRED'=> "Licencja na system SugarCRM dla Twojej firmy musi zostać odnowiona. Tylko administrator może się zalogować",
'ERROR_LICENSE_VALIDATION'=> "Licencja na system SugarCRM dla Twojej firmy musi zostać zatwierdzona. Tylko administrator może się zalogować",
'ERROR_NO_RECORD' => 'Błąd wyszukiwania rekordu.  Został on prawdopodobnie usunięty, lub nie masz uprawnień, aby go zobaczyć',
	'LBL_DUP_MERGE'=>'Wyszukaj duplikaty',
    'LBL_MANAGE_SUBSCRIPTIONS'=>'Zarządzaj subskrybcją',
    'LBL_MANAGE_SUBSCRIPTIONS_FOR'=>'Zarządzaj subskrybcją dla',
    'LBL_SUBSCRIBE'=>'Zasubskrybuj',
    'LBL_UNSUBSCRIBE'=>'Wyłącz subskrybcję',
	// Ajax status strings
	'LBL_LOADING' => 'Ładowanie..',
	'LBL_SEARCHING' => 'Szukanie...',
	'LBL_SAVING_LAYOUT' => 'Zapisz wygląd ...',
    'LBL_SAVED_LAYOUT' => 'Wygląd został zapisany.',
    'LBL_SAVED' => 'Zapisane',
    'LBL_SAVING' => 'Zapisuję',
    'LBL_FAILED' => 'Nie powiodło się!',
    'LBL_DISPLAY_COLUMNS' => 'Wyświetl kolumny',
    'LBL_HIDE_COLUMNS' => 'Ukryj kolumny',
    'LBL_SEARCH_CRITERIA' => 'Kryteria wyszukiwania',
    'LBL_SAVED_VIEWS' => 'Zapisane widoki',
    
    'LBL_NO_RECORDS_FOUND' => '- Znaleziono 0 rekordów -', 
    'LBL_LOGIN_SESSION_EXCEEDED' => 'Serwer jest zbyt obciążony. Spróbuj później.',
    'LBL_CHANGE_PASSWORD' => 'Zmień hasło',
    'LBL_LOGIN_TO_ACCESS' => 'Zaloguj się, aby przejść dalej.',	
);
?>
