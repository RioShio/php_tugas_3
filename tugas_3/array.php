<?php
$nilai = [80, 75, 90, 85, 70];

$total = 0;

echo "Isi Array: <br>";
foreach ($nilai as $n) {
    echo $n . "<br>";
    $total += $n;
}

$rata = $total / count($nilai);

echo "Total = " . $total . "<br>";
echo "Rata-rata = " . $rata;
?>
