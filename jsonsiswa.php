<?php

$array = Array (
    "0" => Array (
        "id" => "1",
        "nama" => "Mayla Zida Rahma Izzati",
        "asal" => "Tulungagung",
        "kelas" => "XI RPL 5"

    ),
    "1" => Array (
        "id" => "2",
        "nama" => "Nanda Safira",
        "asal" => "Pasuruan",
        "kelas" => "XI RPL 5"
    ),
    
    "2" => Array (
        "id" => "3",
        "nama" => "Reny Lia Septianingsih",
        "asal" => "Probolinggo",
        "kelas" => "XI RPL 3"
    ),
    "3" => Array (
        "id" => "4",
        "nama" => "Salsabila Siti Mubarani",
        "asal" => "Sidoarjo",
        "kelas" => "XI RPL 5"
    ),
    "4" => Array (
        "id" => "5",
        "nama" => "Dewi Ayu Alamanda",
        "asal" => "Malang",
        "kelas" => "XI RPL 1"
    ),
    "5" => Array (
        "id" => "6",
        "nama" => "Amalia Yuna Puspita",
        "asal" => "Pagak",
        "kelas" => "XI RPL 5"
    )
);

$json = json_encode(array('siswa' => $array));
 
echo $json;
?>