<?php
$data = [
    [
        'nama' => 'Andi',
        'tahun' => 2008,
    ],
    [
        'nama' => 'Beni',
        'tahun' => 2001,
    ],
    [
        'nama' => 'Dani',
        'tahun' => 2004,
    ],
    [
        'nama' => 'Eko',
        'tahun' => 2006,
    ]
];

echo "<ol>";
foreach ($data as $orang) {
    if ($orang['tahun'] % 4 == 0 && ($orang['tahun'] % 100 != 0 || $orang['tahun'] % 400 == 0)) {
        $tahun = $orang['tahun'];
        echo "<li>" . $orang['nama'] . " : lahir pada tahun kabisat  $tahun  </li>";
    } else {
        $tahun = $orang['tahun'];
        echo "<li>" . $orang['nama'] . " : lahir bukan pada tahun kabisat  $tahun  </li>";
    }
}
echo "</ol>";