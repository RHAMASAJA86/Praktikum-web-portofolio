<?php
$hitung = 0;
for ($i = 3; $i <= 127; $i++) {
    if ($i % 6 == 0) {
        echo $i. "<br>";
        $hitung++;
    }
}

echo "Banyaknya kelipatan 6 dari 3 sampai 127 = " . $hitung;
?>