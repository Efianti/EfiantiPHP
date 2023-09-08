<?php 
// $mahasiswa = [
//  ["EFIANTI LAKSONO", "0403050022", "eviantilaksono@gmail.com", "Rekayasa Perangkat Lunak"],
//  ["INTAN NUR AISAH", "0403050123", "ntannn@gmail.com", "Rekayasa Perangkat Lunak"],
// ];

//Array associative
//key-nya adalah string yang kita buat sendiri
//definisinya sama seperti array numerik, kecuali

$mahasiswa = [
    [
    "nama" => "EFIANTI LAKSONO",
    "nrp" => "0403050022",
    "email" => "eviantilaksono@gmail.com",
    "jurusan" => "REKAYASA PERANGKAT LUNAK",
    "gambar" => "p2.jpg"
    ],
    [
        "nama" => "INTAN NUR AISAH",
        "nrp" => "0403050123",
        "email" => "ntannn@gmail.com",
        "jurusan" => "REKAYASA  PERANGKAT LUNAK",
        "gambar" => "p1.jpg"
        ]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>
<body>
   <h1>Data Mahasiswa</h1>

   <?php foreach($mahasiswa as $mhs ) : ?>
   
   <ul>
    <li>
        <img src="img/<?= $mhs["gambar"];?>" width="150px">
    </li>
    <li>Nama :<?= $mhs["nama"]; ?></li>
    <li>NRP :<?= $mhs["nrp"]; ?></li>
    <li>Email:<?= $mhs["email"]; ?></li>
    <li>Jurusan :<?= $mhs["jurusan"]; ?></li>
   </ul>
   <?php endforeach; ?>

   
</body>
</html>