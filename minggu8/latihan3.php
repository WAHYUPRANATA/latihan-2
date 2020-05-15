<?php
//array multidimensi
$hewan=[
            ["nama"=>"Elang",
            "jenis"=>"Unggas",
            "makanan"=>"Omnivora",
            "gambar"=>"1.jpg"
            ],
            ["nama"=>"Chetah",
            "jenis"=>"kucing",
            "makanan"=>"Omnivora",
            "gambar"=>"2.jpg"
            ],
            ["nama"=>"singa",
            "jenis"=>"kucing",
            "makanan"=>"Omnivora",
            "gambar"=>"3.jpg"
            ],
            ["nama"=>"Penguin",
            "jenis"=>"Unggas",
            "makanan"=>"Omnivora",
            "gambar"=>"4.jpg"
            ],
            ["nama"=>"Ular",
            "jenis"=>"reptil",
            "makanan"=>"Omnivora",
            "gambar"=>"5.jpg"
            ],
        ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATA HEWAN</title>
</head>
<body>
    <h1>DATA HEWAN</h1>
    <?php foreach($hewan as $h):?>
        
        <ul>
            <li>
                <img src="img/<?=$h["gambar"];?>">
            </li>
            <li>NAMA    :<?= $h["nama"]?></li>
            <li>JENIS    :<?= $h["jenis"]?></li>
            <li>MAKANAN:<?= $h["makanan"]?></li>
           
        </ul>
       
    <?php endforeach; ?>    
</body>
</html>