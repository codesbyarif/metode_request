<?php 

$mahasiswa = [

    [
        "nim" => "10510016",
        "nama" => "Muhammad Arif",
        "jurusan" => "Sistem Informasi",
        "email" => "arif@stimata.ac.id",
        "gambar" => "arif.jpg"
    ],
    [
        "nim" => "10510017",
        "nama" => "Amirul",
        "jurusan" => "DKV",
        "email" => "amirul@stimata.ac.id",
        "gambar" => "amir.jpg"
    ]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan GET</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>
        <?php foreach ($mahasiswa as $mhs): ?>
            <li>
                <a href="latihan2.php?nama=<?= $mhs["nama"];?>&nim=<?= $mhs["nim"]; ?>&jurusan=<?= $mhs["jurusan"];?> &email=<?= $mhs["email"];?>&gambar=<?=$mhs["gambar"];?>"><?=$mhs["nama"]?></a>
            </li><?php endforeach;?>

    </ul>
</body>
</html>