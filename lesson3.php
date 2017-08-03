<?php
$animals = ['Africa' => ['Crocodilia godzilia', 'Hippopotamus amphibius',],
    'North America' => ['Ursus arctos horribilis', 'Procyon lotor',],
    'South America' => ['Lama glama', 'Folivora',],
    'Antarctica' => ['Orcinus orca', 'Ommatophoca rossii',],
    'Eurasia' => ['Vulpes shmulpes', 'Canis lupus',]
];
$arr_first = array();
$arr_second = array();
$fant_an = array();
foreach ($animals as $cont => $animal) {
    foreach ($animal as $anim) {
        if (str_word_count($anim) == 2) {         //найдены названия из 2 слов
            $double = explode(' ', $anim);
            $arr_first[$cont][] = $double [0];
            $arr_second[] = $double [1];
        }
    }
}
shuffle($arr_second);
$i = 0;
foreach ($arr_first as $cont => $first) {
    foreach ($first as $value) {
        $fant_an[$cont][] = $value . ' ' . $arr_second[$i];
        $i++;
    }
}
foreach ($fant_an as $cont => $monstr) {
    echo "<h2>$cont</h2> " . PHP_EOL;
    foreach ($monstr as $val) {
        if (next($monstr)) {            //ставим зпт, если есть еще тварь
            echo $val . ', ';
        } else {
            echo $val . '.';
        }
    }
}