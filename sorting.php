<?php

$angka = [4,9,7,5,8,9,3];

function sorting($data)
{
    for ($i = 1; $i < count($data); $i++) {
        $pilih = $data[$i];

        //echo "Iterasi ke - $i </br>";
        echo "Data yang dipilih : [$pilih] </br>";

        $j = $i - 1;
        while (($j >= 0) && ($data[$j] > $pilih)) {
            echo join(",", $data) . "</br>";
            echo  "proses sorting </br>";
            $data[$j + 1] = $data[$j];
            $data[$j] = $pilih;
            $j--;
        }
        $data[$j + 1] = $pilih;
        echo join(",", $data) . "</br>";
    }
    return $data;
}
echo "Data Acak : " . join(",", $angka);
echo "\n</br>";
$urutkan = sorting($angka);
echo "\n";
echo "Data Urut : " . join(",", $urutkan);
echo "\n";