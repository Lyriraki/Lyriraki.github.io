<!DOCTYPE html>
<html>
<head>
    <title>Keluaran FORM</title>
    <link rel="stylesheet" href="css/hasil.css">
</head>
<body>
    <div class="bg">
    <h1>Hasil Pendaftaran</h1>
        <div class="data">
            <?php
                echo "Nama : ". $_GET['nama']. "</br>";
                echo "Password : ". $_GET['password']. "</br>";
                echo "Jenis Kelamin : ". $_GET['Jenis_Kelamin']. "</br>";
                echo "Keahlian :". $_GET['Keahlian']. "</br>";
                echo "Tempat Lahir : ". $_GET['Tempat']. "</br>";
                echo "Deskripsi Diri : ". $_GET['Deskripsi']. "</br>";
            ?>
        </div>
    </div>
</body>
</html>