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

//task1_1
function task1_1(array $strings, $print = false)
{
    $str = '';
    if (!$print) {
        for ($i = 0; $i < sizeof($strings); $i++) {
            echo '<p>' . $strings[$i] . '</p>';
        }
    } else {
        $str = implode('', $strings);
    }
    return $str;

}

//task2
function task2(...$arg)
{
    $result = $arg[1];
    $output = $arg[1];
    $chr = $arg[0];
    for ($i = 2; $i < sizeof($arg); $i++) {
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
        if ($i < sizeof($arg)) {
            $output .= $chr . (string)$arg[$i];
        } else {
            $output .= (string)$arg[$i];
        }
    }
    return "Результат: $output = $result";
}

// task2_1

function task2_1(...$arg)
{
    $chr = array_shift($arg);
    $result = $arg[0];
    for ($i = 1; $i < sizeof($arg); $i++) {
        switch ($chr) {
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
                if ($i === 0) {
                    $result = $arg[$i];
                } else {
                    $result /= $arg[$i];
                }
                break;
        }
    }
    $output = implode($chr, $arg);
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

//task3_1
function task3_1(int $row, int $col)
{
    if ($row < 1 || $col < 1) {
        echo 'Минимальный размер таблицы 1 х 1';
        return;
    }
    echo '<table>';
    for ($i = 1; $i <= $row; $i++) {
        echo '<tr>';
        for ($j = 1; $j <= $col; $j++) {
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

//task6_1
function task6_1($file, $str)
{
    file_put_contents($file, $str);
}