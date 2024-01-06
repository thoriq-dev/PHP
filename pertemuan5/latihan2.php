<!-- Untuk menampilkan elemen pada sebuah array kepada user -->
<!-- Pada Latihan 1 menampilkan elemen pada sebuah array kepada develop atau debugging kode -->

<?php
$angka = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 1001, 1002, 1003];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2</title>
    <style>
        .kotak {
            width: 50px;
            height: 50px;
            background-color: salmon;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
        }

        .clear {
            clear: both;
        }
    </style>
</head>

<body>
    <!-- Penggunaan menggunakan for -->
    <?php for ($i = 0; $i < count($angka); $i++) { ?>
        <div class="kotak"><?php echo $angka[$i]; ?></div>
    <?php } ?>

    <div class="clear"></div>

    <!-- Penggunaan menggunakan foreach -->
    <?php foreach ($angka as $a) { ?>
        <div class="kotak"><?php echo $a; ?> </div>
    <?php } ?>

    <div class="clear"></div>

    <?php foreach ($angka as $a) : ?>
        <div class="kotak"><?= $a; ?></div>
    <?php endforeach; ?>

</body>

</html>