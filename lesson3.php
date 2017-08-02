<?php
$cont=[	'Africa' 		=> ['Crocodilia godzilia','Hippopotamus amphibius',],
		'North America'	=> ['Ursus arctos horribilis','Procyon lotor',],
		'South America'	=> ['Lama glama','Folivora',],
		'Antarctica'	=> ['Orcinus orca','Ommatophoca rossii',],
		'Eurasia'		=> ['Vulpes shmulpes','Canis lupus',]
];
$arr_first = array();
$arr_second = array();
$shuf=array();
foreach ($cont as $k=> $v):
	foreach ($v as $i) {
		if (str_word_count($i)==2) {         //найдены названия из 2 слов
			$double = explode(' ', $i);	
			$arr_first[$k][] = $double [0] ;
			$arr_second[] = $double [1];
		}
	}	
endforeach;
shuffle($arr_second);
$z=0;
foreach ($arr_first as $k => $v) {

	foreach ($v as $value) {
		
		$shuf[$k][]=$value.' '.$arr_second[$z];
		$z++;

	}	
}

foreach ($shuf as $k => $v) {
	echo "<h2>$k</h2> ".PHP_EOL;
	foreach ($v as $val) {
		
			if (next($v)) {			//ставим зпт, если есть еще тварь
				echo $val.', ';
			}else {
				echo $val.'.';
			}
		
	}
}