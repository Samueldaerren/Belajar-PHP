<?php
    $angka = 80; 

    $nilai = ($angka >= 75) ? 'Kompeten' : 'Belum';
    $color = ($angka >= 75) ? 'green' : 'red';

    echo "Nilai kompetensi: {$angka} <span style='color: {$color};'>($nilai)</span>";