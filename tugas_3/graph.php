<?php
$graph = [
    "A" => ["B", "C"],
    "B" => [],
    "C" => []
];

echo "Hubungan Graph:<br>";
foreach ($graph as $node => $tujuan) {
    echo $node . " terhubung ke: ";
    foreach ($tujuan as $t) {
        echo $t . " ";
    }
    echo "<br>";
}
?>
