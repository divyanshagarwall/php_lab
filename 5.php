<?php
for ($i = 1; $i <= 150; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {

        echo "FULLSTACK" . "<br>";
    } elseif ($i % 5 == 0) {
        echo "BACKEND" . "<br>";
    } elseif ($i % 3 == 0) {
        echo "FRONTEND" . "<br>";
    } else {
        echo "<br>";
    }
}
?>