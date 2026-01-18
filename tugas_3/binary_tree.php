<?php
$tree = [
    "data" => "Root",
    "left" => ["data" => "Anak Kiri"],
    "right" => ["data" => "Anak Kanan"]
];

echo "Data Tree:<br>";
echo $tree["data"] . "<br>";
echo $tree["left"]["data"] . "<br>";
echo $tree["right"]["data"] . "<br>";
?>
