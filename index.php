<?php

error_reporting(-1);

$arr = [1, 2, 3, 7, 31, 4, 1, 8, 6];
//посчитать длину массива
var_dump(count($arr));
echo '<br>';

//переместить первые 4 элемента массива в конец массива

//получить сумму 4,5,6 элемента
$sum = array_sum(array_slice($arr, 3, 3, true));
echo "Сумма  елементов :{$sum}";


$firstArr = [
    'one' => 1,
    'two' => 2,
    'three' => 3,
    'foure' => 5,
    'five' => 12,
];
$secondArr = [
    'one' => 1,
    'seven' => 22,
    'three' => 32,
    'foure' => 5,
    'five' => 13,
    'six' => 37,
];
//найти все элементы которые отсутствуют в первом массиве и присутствуют во втором
$result = count(array_diff($firstArr, $secondArr));
print_r($result);
echo '<br>';

//найти все элементы которые присутствую в первом и отсутствуют во втором

//найти все элементы значения которых совпадают
$count = count(array_intersect($firstArr, $secondArr));
print_r($count);
echo '<br>';

//найти все элементы значения которых отличается


$firstArr = [
    'one' => 1,
    'two' => [
        'one' => 1,
        'seven' => 22,
        'three' => 32,
    ],
    'three' => [
        'one' => 1,
        'two' => 2,
    ],
    'foure' => 5,
    'five' => [
        'three' => 32,
        'foure' => 5,
        'five' => 12,
    ],
];
//получить все вторые элементы вложенных массивов

//получить общее количество элементов в массиве

//получить сумму всех значений в массиве