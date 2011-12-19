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
 * by SugarCRM are Copyright (C) 2004-2008 SugarCRM, Inc.; All Rights Reserved.
 ********************************************************************************/


/*********************************************************************************
 * pl_pl.lang.ext.php,v for SugarCRM 4.5.1
 * Translator: Krzysztof Morawski
 * All Rights Reserved.
 * Any bugs report welcome: krzysiek<at>kmmgroup<dot>pl
 * Contributor(s): ______________________________________..
 ********************************************************************************/


$connector_strings = array (
    //licensing information shown in config screen

    'LBL_LICENSING_INFO' => '<table border="0" cellspacing="1"><tr><td valign="top" width="35%" class="dataLabel"><image src="' . getWebPath('modules/Connectors/connectors/sources/ext/soap/hoovers/images/hooversLogo.gif') . '" border="0"></td><td width="65%" valign="top" class="dataLabel">' .
                            'Hoovers&#169; dostarcza za darmo aktualnych informacji o przedsiębiorstwach dla użytkowników produktów SugarCRM.  Aby zasięgnąć pełniejszych informacji i raportów na temat firm, fabryk  i ich kierownictwa, wejdź na stronę <a href="http://www.hoovers.com" target="_blank">http://www.hoovers.com</a>.</td></tr></table>',

    //search mapping information shown in config screen
    'LBL_SEARCH_FIELDS_INFO' => 'Następujące pola są wspierane przez wyszukiwanie  API Hoovers&#169: Nazwa firmy, Miasto, Województwo, Kraj i Kod pocztowy.',
    
    //vardef labels
	'LBL_ID' => 'ID',
	'LBL_NAME' => 'Nazwa firmy',
	/*
	'LBL_DUNS' => 'DUNS',
	'LBL_PARENT_DUNS' => 'Parent DUNS',
    */
	'LBL_STREET' => 'Ulica',
        'LBL_ADDRESS_STREET1' => 'Dodatkowa ulica',
	'LBL_ADDRESS_STREET2' => 'Dodatkowa ulica',
	'LBL_CITY' => 'Miasto',
	'LBL_STATE' => 'Województwo',
	'LBL_COUNTRY' => 'Kraj',
	'LBL_ZIP' => 'Kod pocztowy',
	'LBL_FINSALES' => 'Roczna sprzedaż',
	'LBL_LOCATION_TYPE' => 'Typ lokalizacji',
	'LBL_HQPHONE' => 'Telefon do biura',
        'LBL_COMPANY_TYPE' => 'Typ firmy',
	'LBL_TOTAL_EMPLOYEES' => 'Liczba zatrudnionych',

	
	//Configuration labels
	'hoovers_endpoint' => 'Endpoint URL',
	'hoovers_wsdl' => 'Adres WSDL URL',
	'hoovers_api_key' => 'Klucz API',
);

?>
