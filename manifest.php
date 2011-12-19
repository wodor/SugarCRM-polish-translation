<?PHP

// manifest file for information regarding application of new code
$manifest = array(
    // only install on the following regex sugar versions (if empty, no check)
    array (
        'exact_matches' => array (
	),
        'regex_matches' => array (
		0 => '6\.*\.*?'
	),
    ),
    'name' => 'Polskie Tłumacznie v.6.4',
    'description' => 'Polskie Tłumaczenie aplikacji SugarCRM v.6.4c',
    'author' => 'Krzysztof Morawski',
    'published_date' => '19/12/2011',
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
    'version' => '6.4',
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
