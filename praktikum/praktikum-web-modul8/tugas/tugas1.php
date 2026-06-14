<?php
function cekGanjil($angka){
    if($angka % 2 != 0){
        return true;
    }else{
        return false;
    }
}

$jumlah = 0;

for($i = 10; $i <= 123456; $i++){
    if(cekGanjil($i)){
        $jumlah++;
    }
}

echo "Jumlah bilangan ganjil antara 10 sampai 123456 adalah : " . $jumlah;
?>