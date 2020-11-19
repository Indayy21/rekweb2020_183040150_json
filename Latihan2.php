<?php

$mahasiswa = [
    [
    "nama" => "Sandhika Galih",
    "nrp" => "043040023",
    "email" => "Sandhikagalih@unpas.ac.id"
],

[
    "nama" => "Erik Doank",
    "nrp" => "023040001",
    "email" => "Erik@gmail.com" 
]
];

$data = json_encode($mahasiswa);
echo $data;

?>