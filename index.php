<?php
//Задача № 1 Вывести на экран N случайных чисел (каждое с новой строки) из диапазона [-21, 35]
function random_output($counter=0)
{
  if($counter<=0){
    echo "Число повторений(N) отрицательное,отсутсвует или равно 0.<br/>";
  }
  else {
    for ($i=0; $i <$counter ; $i++) {
        echo (rand(-21, 35))."<br/>";
    }
  }

}

random_output(10);

//Задача № 2 Вывести на экран сумму N случайных чисел.
function random_sum_output()
{
  $number1= rand();
  $number2= rand();
  $sum = $number1+$number2;
  echo $sum."<br/>";
  }

random_sum_output();

//Задача № 3 Вывести на экран N случайных чисел (каждое с новой строки). Для каждого числа, начиная со второго, рядом выводить - больше ли оно предыдущего или меньше.

function random_output_plus($counter=0)
{
  if($counter<=0){
    echo "Число повторений(N) отрицательное,отсутсвует или равно 0.<br/>";
  }
  else {
    for ($i=0; $i < $counter ; $i++) {
        $numberIter=rand(-101,101);
        if($i==0){
          echo $numberIter." Начальное <br/>";
          $number_before=$numberIter;
        }
        elseif ($numberIter>$number_before) {
        echo $numberIter." Больше <br/>";
        $number_before=$numberIter;
        }
        else {
        echo $numberIter." Меньше <br/>";
          $number_before=$numberIter;
        }


    }
  }

}

random_output_plus(10);

//Задача № 4 Вывести на экран n-ное число Фибоначчи.

function fibonachi_numbers($maxValue=0){
  if($maxValue>0){
    $numberF=0;
    $numberS=1;
    $counter=0;
    echo $numberF."<br/>";
    echo $numberS."<br/>";
        while ($counter < $maxValue) {
          $counter=$numberF+$numberS;
          if($counter>$maxValue){
            break;
          }else {
            echo $counter."<br/>";
            $numberF=$numberS;
            $numberS=$counter;
          }
        }
      }
  else {
    echo "Ваше значение:".$maxValue." НЕВЕРНО, число должно быть строго больше 0";
  }
}
fibonachi_numbers(100);



 //Задача № 5 Дано некоторое число длиной от 1 до 5 цифр - вывести его цифры в обратном порядке.
function backNumbers($value=512)
{
  $calculate = 0;
  $num=0;
  echo $value." =  <br/>";
  while ($value > 0) {
    $num = $value % 10;
    $value = intdiv($value,10);
    $calculate= $calculate*10+$num;
  }
  $calculate=$calculate."";
for ($i=0; $i <iconv_strlen($calculate) ; $i++) {
  echo $calculate[$i]."<br/>";
}

}
backNumbers(2312312);

//Задача № 6 Дано некоторое число длиной от 1 до 5 символов, вывести все его "нечётные" цифры в обратном порядке
echo "<br/>";

function backNumbersEven($value=512)
{
  $calculate = 0;
  $num=0;
  echo $value." =  <br/>";
  while ($value > 0) {
    $num = $value % 10;
    $value = intdiv($value,10);
    $calculate= $calculate*10+$num;
  }
  $calculate=$calculate."";
  $countNum = 0;
for ($i = 0; $i < iconv_strlen($calculate); $i++) {
  if ($calculate[$i] % 2 !== 0){
    echo $calculate[$i]."<br/>";
    $countNum++;
  }
}

if ($countNum == 0){
  echo "Нечетных цифр не обнаружено!";
}

}
backNumbersEven(1231231);

//Задача №7 Задать массив из 7-ми элементов через предварительное описание типа,
// заполнить его случайными значениями в одном цикле,
// а в другом цикле вывести эти значения на экран.
function buildArray($arraySize = 1){
  $Myarray = [];
  for ($i = 0; $i < $arraySize ; $i++) {
    $Myarray[$i] = rand(1,999);
  }

  for ($j = 0; $j < count($Myarray) ; $j++) {
    echo $Myarray[$j]."<br/>";
  }
}
buildArray(10);


echo "<h1>№8</h1>";
//Задача №8  Задать двумерный массив размерностью m на n (MxN) элементов
// (m и n вынести в область определения констант),
// заполнить его случайными значениями и вывести
// их на экран уже после того, как весь массив будет
// заполнен (т.е. заполнять и выводить в разных группах циклов).
$M = 4;
$N = 5;
function build_two_dimensional_array(){
  $SuperArray = [];
  global $M;
  global $N;

for ($i = 0; $i < $M; $i++)   {
  $SuperArray[$i] = [];
  for ($j = 0; $j <$N ; $j++) {
    $SuperArray[$i][$j] = rand(1,100);
  }
}

foreach ($SuperArray as $key ) {
  echo "<br/>";
  foreach ($key as $final ) {
    echo $final."<br/>";
    }
  }
}

build_two_dimensional_array();

echo "<h1>№9</h1>";
//Задача №9 Задайте случайным образом массив из N элементов.
// Выведите его на экран "ёлочкой".

function fir_tree($arraySize = 1){
  $treeArray = [];
  for ($i = 0; $i < $arraySize; $i++) {
    $treeArray[$i] = rand(1,9);
  }
$count = 0;
$Chars = 0;
  for ($j = 0; $j < count($treeArray); $j++) {
    echo $treeArray[$j];
    $count = $count + 1;
  if($count > $Chars){
        echo "<br/>";
        $count = 0;
        $Chars += 1;
    }
  }
}
fir_tree(10);
echo "<h1>№9 Второй вариант</h1>";
//Второй вариант - сделайте то же самое, но не используйте массив: у вас есть переменная N,
//выведете на экран, все числа до N,
function fir_tree_numbers($numberN = 100){
$count = 0;
$chars = 0;
  for ($j = 0; $j <= $numberN; $j++) {
    echo $j.",";
    $count = $count + 1;
    if($count > $chars){
        echo "<br/>";
        $count = 0;
        $chars += 1;
    }
  }
}
fir_tree_numbers(100);
echo "<h1>№10</h1>";
//Задача №10 Задайте случайным образом массив из N элементов (целых чисел).
// Найдите максимальное число и напечатайте его.
function maxNumberInArray($value=10)
{
  for ($i = 0; $i < $value ; $i++) {
    $Myarray[$i] = rand(1,999);
  }
  $numberMax=$Myarray[0];
  for ($j=0; $j < count($Myarray); $j++) {
    if($numberMax<$Myarray[$j]){
      $numberMax=$Myarray[$j];
    }
  }
  echo $numberMax."";
}
maxNumberInArray(10);


echo "<h1>№11</h1>";

//Задача №11 Задайте случайным образом массив из 20-ти элементов (целых чисел).
//Найдите минимальное число и напечатайте его.
define("N",20);
function minNumberInArray()
{
  for ($i = 0; $i < N ; $i++) {
    $Myarray[$i] = rand(1,999);
  }
  $numberMin=$Myarray[0];
  for ($j=0; $j < count($Myarray); $j++) {
    if($numberMin>$Myarray[$j]){
      $numberMin=$Myarray[$j];
    }
  }
  echo $numberMin."";
}
minNumberInArray(10);
 ?>
