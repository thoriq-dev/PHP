<!-- User-Defined Function -->
<!-- 1. Fungsi Harus di definisikan terlebih dahulu -->


<?php
function salam()
{
    return "Selamat Datang, Admin!";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Function PHP</title>
</head>

<body>
    <h1><?php echo salam(); ?></h1>
</body>

</html>