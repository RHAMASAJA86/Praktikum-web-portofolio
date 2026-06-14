<?php
$total = 0;
for ($i = 2; $i <= 50; $i++) {
    $hasil = $total + $i;
    echo "Jumplah " .$total. " + " .$i. " = " .$hasil. "<br>";
    $total = $hasil;
}

echo "Banyaknya bilangan 2 s/d sampai 50 = " .$total;
?>