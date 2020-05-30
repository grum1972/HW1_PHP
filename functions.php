<?php
// task1
function task1($arr, $print = false)
{
    $str = '';
    if (!$print) {
        for ($i = 0; $i < sizeof($arr); $i++) {
            echo '<p>' . $arr[$i] . '</p>';
        }
    } else {
        for ($i = 0; $i < sizeof($arr); $i++) {
            $str .= $arr[$i];
        }
    }
    return $str;
}

//task2
function task2(...$arg)
{
    if ($arg === '+' || $arg === '-') {
        $result = 0;
    } else {
        $result = 1;
    }
    $output = '';
    $chr = $arg[0];
    for ($i = 1; $i < sizeof($arg); $i++) {
        switch ($arg[0]) {
            case '+':
                $result += $arg[$i];
                break;
            case '-':
                $result -= $arg[$i];
                break;
            case '*':
                $result *= $arg[$i];
                break;
            case '/':
                if ($i === 1) {
                    $result = $arg[$i];
                } else {
                    $result /= $arg[$i];
                }
                break;
        }
        if ($i > 1 && $i < sizeof($arg)) {
            $output .= $chr . (string)$arg[$i];
        } else {
            $output .= (string)$arg[$i];
        }
    }
    return "Результат: $output = $result";
}

//task3
function task3($arg1, $arg2)
{
    if (!is_int($arg1) || !is_int($arg2)) {
        echo 'Один из аргументов не целое число !!!';
        return;
    } elseif ($arg1 < 1 || $arg2 < 1) {
        echo 'Один из аргументов  меньше 1';
        return;
    }
    echo '<table>';
    for ($i = 1; $i <= $arg1; $i++) {
        echo '<tr>';
        for ($j = 1; $j <= $arg2; $j++) {
            $el = $i * $j;
            echo "<td>$el</td>";
        }
    }
    echo '</tr>';
    echo '</table>';
}

//task4
function task4()
{
    echo date("d.m.Y H:m") . '<br>';
    echo '<br>';
    echo mktime(0, 0, 0, 02, 24, 2016) . '<br>';
    echo '<br>';
    echo date("d.m.Y H:m:s", mktime(0, 0, 0, 02, 24, 2016));
}

//task5
function task5($str, $search, $replace)
{
    return str_replace($search, $replace, $str);
}

//task6
function task6($file)
{
    echo file_get_contents($file);
}