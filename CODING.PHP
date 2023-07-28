<?php
$number = intval($argv[1]);

if ($number < 2) {
    echo "Число должно быть больше 1.\n";
    exit();
}

echo "Вводные множители числа $number: ";

for ($i = 2; $i <= $number; $i++) {
    while ($number % $i === 0) {
        echo "$i ";
        $number /= $i;
    }
}

echo "\n";
?>