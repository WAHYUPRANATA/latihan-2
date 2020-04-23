<?php
//array multidimensi/array dalam array/array bersarang
$mahasiswa =[
    ["Wahyu Pranata","15.52.0005","teknologi informasi","roytd56@gmail.com"],
    ["Pranata","15.51.0005","teknologi informasi","roy56@gmail.com"],
    ["Wahyu","15.52.0005","teknologi informasi","td56@gmail.com"]
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
  <?php foreach($mahasiswa as $mhs): ?> 
  <ul>
  <?php foreach($mhs as $m): ?>
        <li> <?php echo $m; ?></li>
    <?php endforeach; ?>
  </ul>
  <?php endforeach; ?>
</body>
</html>