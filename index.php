<?php
error_reporting(-1);
//Действия с числами
echo "\t\t Действия с числами \n";
echo '<br>';
// Остаток от деления
$a=7;
$b=3;
$remainder=$a % $b;
echo "Остаток от деления : {$remainder}";
echo '<br>';

//Получение целой части
$one=7;
$two=7.15;
$whole=floor($one+$two);
echo "Целая часть : {$whole}";
echo '<br>';

//Получить корень
$num=25;
$root=sqrt($num);
echo "Квадратный корень 25 равен : {$root}";
echo '<br>';
echo '<hr>';

//Действия со строками
echo "\t\t Действия со строками \n";
echo '<br>';

//Получить 4-е слово из фразы - Десять негритят пошли купаться в море
$word="Десять негритят пошли купаться в море";
$wordFromPhrase=mb_strcut($word,41,16);
echo "4-е слово из фразы : {$wordFromPhrase}";
echo '<br>';

//Получить 17-й символ из фразы - Десять негритят пошли купаться в море
$characterString="Десять негритят пошли купаться в море";
$characterFromPhras=mb_substr($characterString,16,1);
echo "17-й символ : {$characterFromPhras}";
echo '<br>';

//Сделать заглавной первую букву во всех словах фразы - Десять негритят пошли купаться в море
$line="Десять негритят пошли купаться в море";
$result =mb_convert_case($line,MB_CASE_TITLE,"UTF-8");
echo "Заглавные во всех словах  : {$result}";
echo '<br>';

//Посчитать длину строки
$lineLength="Десять негритят пошли купаться в море";
$lineLength=mb_strlen($lineLength);
echo "Длина строки : {$lineLength} символов";
echo '<br>';
echo '<hr>';

//Действия с логическими значениями
echo "\t\t Действия с логическими значениями \n";
echo '<br>';

var_dump(true==1); // Правильно ли утверждение true равно 1 : Правильно
echo '<br>';
var_dump(false===0);//Правильно ли утверждение false тождественно 0 : Нет
echo '<br>';

//Какая строка длиннее three - три
$line1="three";
$line2="три";
$length1=strlen($line1);
$length2=strlen($line2);
if ($length1>$length2) echo "строка {$line1} длиннее";
elseif ($length1<$length2) echo "строка {$line1} длиннее";
else echo "Строки равны";
echo '<br>';

//Какое число больше 125 умножить на 13 плюс 7 или 223 плюс 28 умножить 2
$a=(125*13)+7;
$b=223+(28*2);
if ($a>$b) echo "Первое число больше";
elseif ($a<$b) echo "Второе число больше";
else echo "Числа равны";
