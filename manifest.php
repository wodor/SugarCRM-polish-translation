<?PHP

// manifest file for information regarding application of new code
$manifest = array(
    // only install on the following regex sugar versions (if empty, no check)
    array (
        'exact_matches' => array (
	),
        'regex_matches' => array (0 => '5\.*\.*?'
	),
    ),
    'name' => 'Polskie Tłumacznie v.4.7',
    'description' => 'Polskie Tłumaczenie aplikacji SugarCRM v.5.2c',
    'author' => 'Krzysztof Morawski',
    'published_date' => '24/03/2009',
    'acceptable_sugar_flavors' =>
      array (

           // Dla OpenSource:
       0 => 'CE',
       1 => 'OS',

//Dla Professional:
	1 => 'PRO',
//Dla Enterprise:
	2 => 'ENT',
      ),
    'version' => '4.7',
    'is_uninstallable' => true,
    'type' => 'langpack',
    'icon' => '',
'copy_files' 		=> array (
		'from_dir' 		=> 'langpack',
		'to_dir' 		=> '.',
		'force_copy'	=> array (
		),
	),
);


?>
