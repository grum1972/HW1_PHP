<?php
require_once('functions.php');
// TASK #1
$array = ["string1", "string2", "string3", "string4", "string5"];
echo task1($array, true);
echo '<br>';
print_r(task1($array));

// TASK #2
echo task2('-', 1, 2, 3, 4, 5) . '<br>';
echo task2('+', 1, 2, 3, 4, 5, 10.0) . '<br>';
echo task2('*', 1, 2, 3, 4, 5) . '<br>';
echo task2('/', 16, 2, 2, 2) . '<br>';

// TASK #3
echo '<br>';
task3(3, 4);
echo '<br>';
task3(1.2, 3); // Аргумент не целое число
echo '<br>';
task3(0, 3); // Аргумент меньше 1

// TASK #4
echo '<br>';
echo '<br>';
task4();

// TASK #5
echo '<br>';
echo '<br>';
echo task5('Карл у Клары украл Кораллы', 'К', '');
echo '<br>';
echo task5('Две бутылки лимонада', 'Две', 'Три');

//TASK #6
echo '<br>';
echo '<br>';
$file = 'test.txt';
$str = 'Hello again!';
file_put_contents($file,$str);
task6($file);
