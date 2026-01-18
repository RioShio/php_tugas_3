<?php
$stack = [];

array_push($stack, 10);
array_push($stack, 20);
array_push($stack, 30);

array_pop($stack);

echo "Isi Stack:<br>";
foreach ($stack as $data) {
    echo $data . "<br>";
}
?>
