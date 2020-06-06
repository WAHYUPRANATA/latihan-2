<?php
if(!isset($_POST["submit"])){
    //redirect
    header("Location: latihan3.php");
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Metode POST</title>

</head>
<body>
<a href="latihan3.php">balik kanan wae</a>
    <h1>selamat datang <?= $_POST["nama"];?></h1>
</body>
</html>