<?php
$all_animals = ['Africa' => ['Crocodilia godzilia', 'Hippopotamus amphibius',],
    'North America' => ['Ursus arctos horribilis', 'Procyon lotor',],
    'South America' => ['Lama glama', 'Folivora',],
    'Antarctica' => ['Orcinus orca', 'Ommatophoca rossii',],
    'Eurasia' => ['Vulpes shmulpes', 'Canis lupus',],
];
$first_word = array();
$second_word = array();
$fantastic_animals = array();
foreach ($all_animals as $continent => $animals) {
    foreach ($animals as $animal) {
        if (str_word_count($animal) == 2) {         //найдены названия из 2 слов
            $double = explode(' ', $animal);
            $first_word[$continent][] = $double [0];
            $second_word[] = $double [1];
        }
    }
}
shuffle($second_word);
$i = 0;
foreach ($first_word as $continent => $first) {
    foreach ($first as $value) {
        $fantastic_animals[$continent][] = $value . ' ' . $second_word[$i];
        $i++;
    }
}
foreach ($fantastic_animals as $continent => $monster) {
    echo "<h2>$continent</h2> " . PHP_EOL.implode(', ', $monster). PHP_EOL;
}