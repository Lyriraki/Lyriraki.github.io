<!DOCTYPE html>
<html>
<head>
    <title>Keluaran FORM</title>
</head>
<body>
    <h1>Hasil Pendaftaran</h1>
    <?php
        echo "Nama : ". $_GET['nama']. "</br>";
        echo "Password : ". $_GET['password']. "</br>";
        echo "Jenis Kelamin : ". $_GET['jenisk']. "</br>";
        echo "Keahlian :". $_GET['Keahlian']. "</br>";
        echo "Tempat Lahir : ". $_GET['Tempat']. "</br>";
        echo "Deskripsi Diri : ". $_GET['Deskripsi']. "</br>";
    ?>
    
</body>
</html>