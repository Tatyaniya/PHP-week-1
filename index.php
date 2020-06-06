<?php

require "function.php";

const TEST_CONSTANTA = 'asd';

$userName = "Igor";

if ($a == 1) {
    echo 'hi<br>';
}

echo '<br>';

// hw 1-1

echo "Задача 1-1 <br>";

$name = 'Татьяна';
$age = 47;

echo "Меня зовут: $name <br>";
echo "Мне $age лет <br>";
echo '“!|/’”\ <br>';
echo "<br>";

// hw 1-2
echo "Задача 1-2 <br>";

const TOTAL = 80;
const PENS = 23;
const KAR = 40;

const PAINTS = TOTAL - (PENS + KAR);

echo 'На школьной выставке ' . TOTAL . ' рисунков. ' . PENS . ' из них выполнены фломастерами, '
    . KAR . ' карандашами, а ' . PAINTS . ' — красками.<br>';
echo "<br>";

// hw 1-3
echo "Задача 1-3 <br>";

$age = 58;
const AGE_START = 1;
const AGE_WORK_MIN = 18;
const AGE_WORK_MAX = 65;

if ($age >= AGE_WORK_MIN && $age <= AGE_WORK_MAX) {
    echo "Вам еще работать и работать<br>";
} elseif ($age > AGE_WORK_MAX) {
    echo "Вам пора на пенсию<br>";
} elseif ($age > AGE_START && $age < AGE_WORK_MIN) {
    echo "Вам ещё рано работать<br>";
} else {
    echo "Неизвестный возраст<br>";
}

echo "<br>";

// hw 1-4
echo "Задача 1-4 <br>";

$day = 3;
switch ($day) {
    case 1:
    case 2:
    case 3:
    case 4:
    case 5:
        echo "Это рабочий день<br>";
        break;
    case 6:
    case 7:
        echo "Это выходной день<br>";
        break;
    default:
        echo "Неизвестный день <br>";
}

echo "<br>";

// hw 1-5
echo "Задача 1-5 <br>";

$bmv = [
    'model' => 'X5',
    'speed' => 120,
    'doors' => 5,
    'year' => '2015'
];

$toyota = [
    'model' => 'AA',
    'speed' => 105,
    'doors' => 4,
    'year' => '2018'
];

$opel = [
    'model' => 'Omega',
    'speed' => 100,
    'doors' => 4,
    'year' => '2014'
];

$cars = ['bmv' => $bmv, 'toyota' => $toyota, 'opel' => $opel];

foreach ($cars as $key => $value) {
    echo 'CAR ' . $key . '<br>';
    echo implode(' ', $value) . '<br>';
}

echo '<br>';

// hw 1-6
echo "Задача 1-6 <br>";

echo '<table border="1" style = "padding: 10px;">';

for ($i = 1; $i <= 10; $i++) {
    echo '<tr>';
    for ($j = 1; $j <= 10; $j++) {
        echo '<td style = "padding: 5px; text-align: center;">';

        $result = $i * $j;

        if (($i % 2 === 0) && ($j % 2 === 0)) {
            echo "($result)";
        } elseif (($i % 2 !== 0) && ($j % 2 !== 0)) {
            echo "[$result]";
        } else {
            echo "$result";
        }
        echo '</td>';
    }
    echo '</tr>';
}

echo '</table>';

echo '<br>';

// hw 2-1
echo "Задача 2-1 <br>";

$arrayStr = [
    'Lorem ipsum dolor sit amet consectetur',
    'adipisicing elit. Error molestiae',
    'aut animi doloribus aliquid dolor eaque consequatur',
    'iusto numquam',
    'vitae magnam temporibus nisi'
];

task1($arrayStr, true);

echo '<br>';

// hw 2-2
echo "Задача 2-2 <br>";

echo task2('*', 10, 22, 2) . '<br>';

echo '<br>';

// hw 2-3
echo "Задача 2-3 <br>";

task3(7, 10);

echo '<br>';

// hw 2-4
echo "Задача 2-4 <br>";

task4('Europe/Kiev');

echo strtotime('24.02.2016 00:00:00') . '<br>';
echo date('d.m.Y H:i:s', 1456264800) . '<br>';

echo '<br>';

// hw 2-5
echo "Задача 2-5 <br>";

$string1 = 'Карл у Клары украл Кораллы';
echo str_ireplace('К', '', $string1) . '<br>';

echo '<br>';

$string2 = 'Две бутылки лимонада';
echo str_ireplace('Две', 'Три', $string2) . '<br>';

echo '<br>';

// hw 2-6
echo "Задача 2-6 <br>";

fopen('text.txt', 'w+');
file_put_contents('text.txt', 'Hello again!');

task6('text.txt');
echo '<br>';


$foo = 'bar';
$bar = 'Hello world' . '<br>';
echo ${$foo};

echo '<br>';
