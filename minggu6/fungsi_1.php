<?php
function salam($waktu,$nama){
    return"selamat $waktu,$nama !";
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
    content="width=device=width,initial=scale=1.0">
 <title>latihan fuction</title>
 <body>
 <h1><?= salam("pagi","eka");?></h1>
 </body>
</head>
</html>