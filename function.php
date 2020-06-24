<?php

/**
 * @return string
 */
function showSomething()
{
    return 'SOMETHING';
}

/**
 * @param $args
 * @param bool $needReturn
 * @return string|null
 */
function task1($args, $needReturn = false)
{
    if ($needReturn) {
        echo implode(' ', $args) . '<br>';
    } else {
        foreach ($args as $str) {
            echo "<p> $str </p>";
        }
    }

    return null;
}

/**
 * @param mixed ...$args
 * @return mixed|string
 */
function task2(...$args)
{
    $operation = $args[0];
    unset($args[0]);
    $result = $args[1];
    unset($args[1]);

    foreach ($args as $value) {
        switch ($operation) {
            case '+':
                $result += $value;
                break;
            case '-':
                $result -= $value;
                break;
            case '*':
                $result *= $value;
                break;
            case '/':
                if ($value == 0) {
                    return 'На 0 делить нельзя';
                }
                $result /= $value;
                break;
            default:
                return 'Первый аргумент может быть только + - * /';
        }
    }

    return $result;
}

/**
 * @param $col
 * @param $rows
 * @return string
 */
function task3($col, $rows)
{
    if ($col < 1 || $rows < 1) {
        return 'Введите целое число';
    }

    echo '<table border="1" style = "padding: 10px;">';

    for ($i = 1; $i <= $col; $i++) {
        echo '<tr>';
        for ($j = 1; $j <= $rows; $j++) {
            echo '<td style = "padding: 5px; text-align: center;">' . $j * $i . '</td>';
        }
        echo '</tr>';
    }

    echo '</table>';
}

/**
 * @param $zone
 */
function task4($zone)
{
    date_default_timezone_set($zone);
    echo date('d.m.Y H:i') . '<br>';
}

/**
 * @param $name
 */
function task6($name)
{
    echo file_get_contents($name);
}
