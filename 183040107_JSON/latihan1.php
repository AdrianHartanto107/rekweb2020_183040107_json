<?php

$mahasiswa = [
    "nama" => "Adrian Hartanto",
    "nrp" => "183040107",
    "email" => "adrian@gmail.com",
    [
        "nama" => "Adrian lumban raja",
        "nrp" => "183040104",
        "email" => "lumban@gmail.com"
    ]
];

$data = json_encode($mahasiswa);
echo $data;
