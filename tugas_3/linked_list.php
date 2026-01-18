<?php
$node1 = ["data" => 10, "next" => null];
$node2 = ["data" => 20, "next" => null];
$node3 = ["data" => 30, "next" => null];

$node1["next"] = $node2;
$node2["next"] = $node3;

$current = $node1;

echo "Isi Linked List:<br>";
while ($current != null) {
    echo $current["data"] . "<br>";
    $current = $current["next"];
}
?>
