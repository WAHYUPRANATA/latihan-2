<?php
$mahasiswa =["Wahyu Pranata","15.52.0005","teknologi informasi","roytd56@gmail.com"];
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
  <ul>
    <?php foreach($mahasiswa as $mhs): ?>
    <li>
    <?php echo $mhs; ?>
    </li>
    <?php endforeach?>
  </ul>
</body>
</html>