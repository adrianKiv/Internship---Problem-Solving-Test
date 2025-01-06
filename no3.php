<?php

function imbang($s) {
    // Stack nyimpen bracket buka
    $stack = [];

    // Peta pasangan bracket
    $kurung = [
        '(' => ')',
        '[' => ']',
        '{' => '}',
    ];

    // Loop cek semua karakter dalam string
    for ($i = 0; $i < strlen($s); $i++) {
        $c = $s[$i];

        // Jika karakter adalah bracket buka
        if (isset($kurung[$c])) {
            // masukan bracket buka ke stack
            array_push($stack, $c);
        } elseif (in_array($c, $kurung)) {
            // Jika karakter adalah bracket tutup
            if (empty($stack) || $kurung[array_pop($stack)] !== $c) {
                return "NO";
            }
        }
    }

    // Jika stack kosong, maka bracket seimbang
    return empty($stack) ? "YES" : "NO";
}

// Input string bracket
echo "Input: ";
$input = trim(fgets(STDIN));

// Hasil pemeriksaan
$result = imbang($input);
echo $result;

?>
