<?php
//Array Associative
//definisinya sama seperti array numerik, kecuali
//key-nya adalah string yang kita buat sendiri
$mahasiswa = [
    [
        "nama" => "Chalida Rahma",
        "nrp" => "233040046",
        "email" => "chalidarlh@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "chalida.jpeg"
    ],
    [
        "nama" => "Nurfatimah",
        "nrp" => "233040074",
        "email" => "nurfatimahhh1603z@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "nur.jpeg"
    ],
    [
        "nama" => "Nada Putri",
        "nrp" => "233040038",
        "email" => "putriaqilah05@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "nada.jpeg"
    ],
    [
        "nama" => "Haifa Zahirah",
        "nrp" => "233040051",
        "email" => "haifazahirahr5@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "haifa.jpeg"
    ],
    [
        "nama" => "Faizal Akbar",
        "nrp" => "233040156",
        "email" => "faizalakbarbudiansyah@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "faizal.jpeg"
    ],
    [
        "nama" => "M. Sufi Nadziffa",
        "nrp" => "233040044",
        "email" => "nadziffa123@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "sufi.jpeg"
    ],
    [
        "nama" => "Dafa Al Bani",
        "nrp" => "233040066",
        "email" => "daffaaibani56@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "dapa.jpeg"
    ],
    [
        "nama" => "Reza Nurjaman",
        "nrp" => "233040071",
        "email" => "rezanurjamanr@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "reza.jpeg"
    ],
    [
        "nama" => "M. Wilmar Rizky",
        "nrp" => "233040050",
        "email" => "wilmarardhana9@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "siwil.jpeg"
    ],
    [
        "nama" => "Ziya Tazkiya",
        "nrp" => "210505",
        "email" => "ziyatazkiya@gmail.com",
        "jurusan" => "Keperawatan",
        "gambar" => "ziya.jpeg"
    ],
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>
                <img src="img/<?= $mhs["gambar"]; ?>" alt="">
            </li>
            <li>Nama: <?= $mhs["nama"]; ?></li>
            <li>NRP: <?= $mhs["nrp"]; ?></li>
            <li>Jurusan: <?= $mhs["jurusan"]; ?></li>
            <li>Email: <?= $mhs["email"]; ?></li>
        </ul>
    <?php endforeach; ?>

</body>

</html>