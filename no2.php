<?php

function itungrank($rscore, $gitsScores) {
    // Urutkan skor dari besar ke kecil
    rsort($rscore);

    // Array untuk menyimpan skor unik dan rankingnya
    $nilairank = [];
    $rank = 1;

    // Beri peringkat ke skor unik
    foreach ($rscore as $score) {
        if (!in_array($score, array_keys($nilairank))) {
            $nilairank[$score] = $rank;
        }
        $rank++;
    }

    $ranks = [];

    // Hitung ranking untuk setiap skor GITS
    foreach ($gitsScores as $gitsScore) {
        $gitsRank = 1;
        foreach ($nilairank as $score => $rank) {
            if ($gitsScore < $score) {
                $gitsRank++;
            } else {
                break;
            }
        }
        $ranks[] = $gitsRank;
    }

    return $ranks;
}

// Input jumlah pemain dan skor mereka
echo "Input jumlah pemain: ";
$n = (int)trim(fgets(STDIN));
echo "Input skor pemain : ";
$rscore = array_map('intval', explode(" ", fgets(STDIN)));

// Input jumlah permainan dan skor GITS
echo "Input jumlah permainan GITS: ";
$m = (int)trim(fgets(STDIN));
echo "Input skor GITS : ";
$gitsScores = array_map('intval', explode(" ", fgets(STDIN)));

// Hitung ranking
$ranks = itungrank($rscore, $gitsScores);

// Output ranking GITS
echo "Ranking GITS: ";
echo implode(" ", $ranks);

?>
