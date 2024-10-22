<?php
function VienasSkaicius($x) {
    while ($x != 1) {
        echo $x . "<br>"; 
        if ($x % 2 == 0) {
            $x = $x / 2;
        } else {
            $x = 3 * $x + 1;
        }
    }
    echo "1<br>"; 
}

function IntervaloSkaicius($skaiciai) {
    foreach ($skaiciai as $skai) {
        VienasSkaicius($skai);
        echo "<br>"; 
    }
}
?>