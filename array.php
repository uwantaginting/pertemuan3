<?php
$nilai = array(10,20,30,40,50,10,20);
foreach($nilai as $nilaibaru){
    echo $nilaibaru."<br />";
}
echo "<hr />";
$buah = array(
    "nama" => "Semangka",
    "warna" => "Hijau",
    "rasa" => "Manis"
);
echo "Nama buah adalah ".$buah['nama']."<br />";
echo "Warna buah adalah ".$buah['warna']."<br />";
echo "Rasa buah adalah ".$buah['rasa']."<br />";
?>