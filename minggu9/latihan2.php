<?php
//cek apakah dalal $_GET terdapat data
if(!isset($_GET["nama"])){
    //redirect
    header("Location: latihan1.php");
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mahasiswa</title>
</head>
<body>

<h1>Detail Hewan</h1>
    <ul>
    <li><img src="img/<?= $_GET["gambar"]?>"></li>
    <li><?= $_GET["nama"]?></li>
    <li><?= $_GET["jenis"]?></li>
    <li><?= $_GET["makanan"]?></li>
    </ul>

    <a href="latihan1.php">balik kanan wae</a>
</body>
</html>