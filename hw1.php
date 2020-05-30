<?php
// Задание №1
$name = 'Kotov Oleg';
$age = 48;

echo "Меня зовут: $name<br>";
print_r("Мне $age лет");
echo "<br>";
print_r('"!|/\'"\"');
echo "<br>";
echo "<br>";

// Задание №2

const PICTURES = 80;
const PENCIL = 40;
const MARKER = 23;

$paints = PICTURES - PENCIL - MARKER;
print_r("Количество картин нарисованное красками : $paints");
echo "<br>";
echo "<br>";

// Задание №3
$age = 25;
if ($age >= 18 && $age <= 65) {
    print_r('Вам еще работать и работать');
} elseif ($age >= 1 && $age <= 17) {
    print_r('Вам еще рано работать');
} elseif ($age > 65) {
    print_r('Вам пора на пенсию');
} else {
    print_r('Неизвестный возраст');
}
echo "<br>";
echo "<br>";

// Задание №4
$day = 12;
switch ($day) {
    case 1:
    case 2:
    case 3:
    case 4:
    case 5:
        print_r('Это рабочий день');
        break;
    case 6:
    case 7:
        print_r('Это выходной день');
        break;
    default:
        print_r('Неизвестный день');
}
echo "<br>";
echo "<br>";

// Задание №5
$bmw = ['X5', 120, 5, '2015'];
$toyota = ['Camry', 110, 4, '2016'];
$opel = ['Corsa', 100, 4, '2012'];
print_r("CAR bmw \n");
echo "<br>";
print_r("$bmw[0] $bmw[1] $bmw[2] $bmw[3]");
echo '<br>';
echo "<br>";
print_r("CAR toyota \n");
echo "<br>";
print_r("$toyota[0] $toyota[1] $toyota[2] $toyota[3]");
echo '<br>';
echo "<br>";
print_r("CAR opel \n");
echo "<br>";
print_r("$opel[0] $opel[1] $opel[2] $opel[3]");
echo '<br>';
echo "<br>";
$cars = [$bmw, $opel, $toyota];
echo "<pre>";
print_r($cars);
echo "<br>";
echo "<br>";

// Задание №6
echo '<table>';
for ($i = 1; $i <= 10; $i++) {
    echo '<tr>';
    for ($j = 1; $j <= 10; $j++) {
        $el = $i * $j;
        if (($i % 2 === 0) && ($j % 2 === 0)) {
            echo "<td>($el)</td>";
        } elseif (($i % 2 !== 0) && ($j % 2 !== 0)) {
            echo "<td>[$el]</td>";
        } else {
            echo "<td> $el </td>";
        }
    }
    echo '</tr>';
    print_r("\n");
}
echo '</table>';