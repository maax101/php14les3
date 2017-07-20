<?php

$cont = (
	array(
		'Africa' => array('Crocodilia','Hippopotamus amphibius'),
		'northAm'=> array('Ursus arctos','Procyon lotor'),
		'southAm'=> array('Lama glama','Folivora'),
		'Antarct'=> array('Orcinus orca','Ommatophoca rossii'),
		'Eurasia'=> array( 'Vulpes','Canis lupus')
	)
);
foreach ($cont as $k => $v) {
	foreach ($v as $all) {
		if (strpos ($all,' ')) {
		 	$double = $all;
		 	$arr_d = explode(' ', $double);
		 	$arr_first = array($arr_d [0] );
			$arr_second = array($arr_d [1]);
			
	 		$fant = array_merge($arr_first, $arr_second );
	 			 		
			echo '<pre>';
			print_r($fant) ;


		 } 
 	
		
	}	
	
}

    
