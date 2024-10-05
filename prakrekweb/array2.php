<?php
// Membuat array
$array_data = [
    "nama" => "Halaand",
    "band" => "Perunggu",
    "genre" => "Dangdut",
    "album" => ["Jaran Goyang", "Kapusen"]
];

// Mengubah array menjadi JSON
$json_data = json_encode($array_data);

// Menampilkan JSON
echo $json_data;
?>