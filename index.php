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
 ?>
