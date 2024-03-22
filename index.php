<?php
 echo "nilai saya : 90,75,45,30,58,96,100";
 echo "<br>";
 //nilai terkecil
 $nilai = [90,75,45,30,58,96,100];
 sort ($nilai);
 echo "jika nilai saya terkecil :";
 $sortir = count($nilai);
 for($x = 0; $x < $sortir; $x++){
    echo "$nilai[$x],";
 }

 //nilai dari yang terbesar
 echo "<br>";
 $nilai = [90,75,45,30,58,96,100];
 rsort($nilai);
 echo "jika nilai saya di terbesar :";
 for($x = 0; $x < $sortir; $x++){
    echo "$nilai[$x],";
 }

 //nilai terbesar
 echo "<br>";
 echo "nilai terbesar saya :";
 echo (max($nilai));

//nilai terkecil
echo "<br>";
echo "nilai terkecil saya :";
echo (min($nilai));

//nilai rata rata
echo "<br>";
echo "nilai rata-rata saya :";
$var = array_sum($nilai) / count($nilai);
echo round($var);

//hasil perbaikan
echo "<br>";
echo "nilai setelah melakukan perbaikan untuk nilai" .(min($nilai))."jadi nilai saya sekarang :";
$nilai = [90,75,45,30,58,96,100];
echo $nilai[2]= 75;
echo"<br>";echo"<br>";
echo "sehingga nilai saya sekarang adalah :";
foreach ($nilai as $value){
    echo "$value,";
}
?>