<?php
$nilai = [80,78,72,84,92,88];

foreach ($nilai as $key => $value) {
    echo"<b> $value, </b>";
}
echo"<br>nilai besar:".max($nilai);
echo"<br>nilai kecil:".min($nilai);

echo"nilai kecil - besar:";
sort($nilai);
foreach ($nilai as $beruntut) {
    echo"$beruntut,";
}

echo"nilai besar - kecil:";
rsort($nilai);
foreach ($nilai as $beruntut) {
    echo"$beruntut,";
}

echo"rata-rata keseluruhan nilai:";
$jumnilai =round(array_sum($nilai) / 6);
echo"$jumnilai";