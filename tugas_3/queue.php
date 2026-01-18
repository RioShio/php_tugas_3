<?php
$queue = [];

array_push($queue, "A");
array_push($queue, "B");
array_push($queue, "C");

array_shift($queue);

echo "Isi Queue:<br>";
foreach ($queue as $data) {
    echo $data . "<br>";
}
?>
