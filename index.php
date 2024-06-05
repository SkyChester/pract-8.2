<?php
if (isset($_GET['a']) && isset($_GET['b'])) {

    $a = (int) $_GET['a'];
    $b = (int) $_GET['b'];

    $sum = $a + $b;
    $product = $a * $b;
    $difference = $a - $b;
    $quotient = $a / $b;

    echo "Сума: $sum<br>";
    echo "Добуток: $product<br>";
    echo "Різниця: $difference<br>";
    echo "Частка: $quotient<br>";
} else {
    echo "Будь ласка, передайте обидва значення а та b через адресний рядок.";
}
?> 