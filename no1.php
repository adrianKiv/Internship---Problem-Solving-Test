<?php

function sloane($n) {
    $urut = [];

    for ($i = 1; $i <= $n; $i++) {
        $urut[] = ($i * ($i - 1)) / 2 + 1;
    }

    return $urut;
}

// Meminta input dari pengguna
echo "Input: ";
$handle = fopen ("php://stdin","r");
$n = intval(fgets($handle));

// Validasi input
if ($n <= 0) {
    echo "Masukkan angka positif yang lebih besar dari 0.\n";
    exit;
}

// Menghasilkan dan mencetak deret
$urut = sloane($n);

echo "Output: ";
echo implode("-", $urut) . "\n";
