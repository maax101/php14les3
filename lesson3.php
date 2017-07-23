<?php

$cont = (
	array(
		'Africa' => array('Crocodilia','Hippopotamus amphibius',),
		'North America'=> array('Ursus arctos','Procyon lotor',),
		'South America'=> array('Lama glama','Folivora',),
		'Antarctica'=> array('Orcinus orca','Ommatophoca rossii',),
		'Eurasia'=> array( 'Vulpes','Canis lupus',)
	)
	//создан массив континетов и соотв зверей
);
foreach ($cont as $k => $v) {
	foreach ($v as $all) {
	
		if (strpos ($all,' ')) {  //строка. если есть " "

		 	// массив. присвоить в arr_d значение животное из 2 слов
		 	//$arr_d [$k][] = explode(' ', $all);
			$double = explode(' ', $all);
			//print_r ($double);
		 	$arr_first[$k][] = $double [0] ;
			$arr_second[$k][] = $double [1];			
		} 	
	}		
}
echo '<pre>';
//print_r($arr_d);
//print_r ($arr_first);
shuffle ($arr_second);
//print_r ($arr_second ) ;

foreach ($arr_first as $k=>$v){
	echo "<h2>$k</h2> ".PHP_EOL;
	foreach ($v as $val){
		echo $val.PHP_EOL;
	}	
}
