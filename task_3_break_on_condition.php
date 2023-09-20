<!-- Task 3: Break on Condition -->
<?php
$first = 0;
$second = 1;

for ($i = 1; $i <= 10; $i++) {
    $fibonacci = $first;
    echo $fibonacci . " ";

    $next = $first + $second;
    $first = $second;
    $second = $next;

    if ($fibonacci > 100) {
        break;
    }
}
?>