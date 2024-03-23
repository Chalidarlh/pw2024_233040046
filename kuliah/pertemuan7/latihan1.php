<?php
//Variable Scope / lingkup variabel
// $x = 10;

// function tampilX()
// {
//     global $x;
//     echo $x;
// }
// tampilX();
// 
?>

//
<hr>

<?php
//SUPERGLOBALS
//bariable global milik PHP
//merupakan Array Associative

//$_GET
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
    ]
];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>
        <?php foreach ($mahasiswa as $mhs) : ?>
            <li>
                <a href="latihan2.php?
                nama=<?= $mhs["nama"]; ?>
                &nrp=<?= $mhs["nrp"]; ?>
                &email<?= $mhs["email"]; ?>
                &jurusan<?= $mhs["jurusan"]; ?>
                &gambar<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>