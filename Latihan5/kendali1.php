<?php
// $_GET
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
    
    <title>GET</title>
</head>
<body>
<h1>Daftar Mahasiswa</h1>
<?php foreach( $mahasiswa as $mhs ) : ?>
    <li>
    <a href="kendali2.php?nama=<?= $mhs["nama"];?>&nrp=<?= $mhs["nrp"];?>&email=<?= $mhs["email"];?>&jurusan=<?= $mhs["jurusan"];?>&gambar=<?= $mhs["gambar"];?>"><?= $mhs["nama"]; ?></a>
    </li>
<?php endforeach; ?> 
</body>
</html>