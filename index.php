<?php

error_reporting(-1);

$arr = [1, 2, 3, 7, 31, 4, 1, 8, 6];
//посчитать длину массива

echo "Длина массива :".(count($arr));
echo '<br>';

//переместить первые 4 элемента массива в конец массива
array_push($arr,'1','2','3','7');
unset($arr[0],$arr[1],$arr[2],$arr[3]);
echo '<pre>';
print_r($arr);
echo '</pre>';


//получить сумму 4,5,6 элемента

$sum = $arr[3]+$arr[4]+$arr[5];
echo "Сумма  елементов :{$sum}";
echo '<br>';


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

$result = array_diff(array_keys($secondArr),array_keys($firstArr));
echo '<pre>';
print_r($result);
echo '</pre>';
echo '<br>';

//найти все элементы которые присутствую в первом и отсутствуют во втором

$result = array_diff(array_keys($firstArr),array_keys($secondArr));
echo '<pre>';
print_r($result);
echo '</pre>';
echo '<br>';

//найти все элементы значения которых совпадают

$count = count(array_intersect($firstArr, $secondArr));
echo "Элементы значения которых совпадают : {$count}";
echo '<br>';

//найти все элементы значения которых отличается

$result = array_diff_assoc($firstArr, $secondArr);
echo '<pre>';
var_dump($result);
echo '</pre>';
echo '<br>';

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

foreach ($firstArr as $item) {
    if (!is_array($item)) {
        continue;
    }
    $second_item = $item[array_keys($item)[1]];
    echo '<pre>';
    var_dump(array_keys($item)[1]);
    var_dump($second_item);
    echo '</pre>';
}
echo '<br>';

//получить общее количество элементов в массиве

$mass=count($firstArr, COUNT_RECURSIVE);
echo "Общее количество елементов в массиве: {$mass}";
echo '<br>';

//получить сумму всех значений в массиве

function sumArr($firstArr) {
    $sum = 0;
    foreach($firstArr as $v) {
        if (is_array($v)) {
            $sum += sumArr($v);
        } else {
            $sum += $v;
        }
    }
    return $sum;
}
$s=sumArr($firstArr);
echo "сумма всех значений в массиве :{$s}";
echo '<br>';