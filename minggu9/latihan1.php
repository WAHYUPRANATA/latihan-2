<?php
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
    <title>latihan GET</title>
</head>
<body>
    <h1>daftar hewan</h1>
    <ul>
        <?php foreach($hewan as $h):?>
            <li>
                <a href="latihan2.php?nama=<?= $h["nama"];?>&jenis=<?= $h["jenis"];?>&makanan=<?= $h["makanan"];?>&gambar=<?= $h["gambar"];?>"><?= $h["nama"];?> </a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
