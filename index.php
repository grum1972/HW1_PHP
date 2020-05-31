<?php
require_once('functions.php');
// TASK #1
$array = ["string1", "string2", "string3", "string4", "string5"];
echo task1($array, true);
echo '<br>';
print_r(task1($array));
echo task1_1($array, true);
echo '<br><br>';


//TASK #1_1 Use function implode()
echo 'TASK 1 NEW VERSION' . '<br>';
echo '<br>';
echo task1_1($array, true);
echo '<br><br>';

// TASK #2
echo 'TASK 2' . '<br><br>';

echo task2('-', 1, 2, 3, 4, 5) . '<br>';
echo task2('+', 1, 2, 3, 4, 5, 10.0) . '<br>';
echo task2('*', 1, 2, 3, 4, 5) . '<br>';
echo task2('/', 16, 2, 2, 2) . '<br>';
echo '<br>';

// TASK #2_1
echo 'TASK2 NEW VERSION' . '<br><br>';

echo task2_1('-', 1, 2, 3, 4, 5) . '<br>';
echo task2_1('+', 1, 2, 3, 4, 5, 10.0) . '<br>';
echo task2_1('*', 1, 2, 3, 4, 5) . '<br>';
echo task2_1('/', 16, 2, 2, 2) . '<br>';

// TASK #3
echo 'TASK 3' . '<br>';

echo '<br>';
task3(3, 4);
echo '<br>';
task3(1.2, 3); // Аргумент не целое число
echo '<br>';
task3(0, 3); // Аргумент меньше 1
echo '<br><br>';
// TASK #3_1
echo 'TASK 3 NEW VERSION' . '<br><br>';
echo '<br>';
task3_1(3, 4);
echo '<br>';
task3_1(0, 3); // Аргумент меньше 1
echo '<br><br>';
// TASK #4
echo 'TASK 4' . '<br>';
echo '<br><br>';
task4();

// TASK #5
echo 'TASK 5' . '<br>';
echo '<br><br>';
echo task5('Карл у Клары украл Кораллы', 'К', '');
echo '<br>';
echo task5('Две бутылки лимонада', 'Две', 'Три');

//TASK #6
echo 'TASK 6' . '<br>';
echo '<br><br>';
$file = 'test.txt';
$str = 'Hello again!';
task6_1($file,$str);
task6($file);
