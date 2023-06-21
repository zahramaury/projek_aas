<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simpan Data</title>
</head>
<body>
    <style>
          body {
            background-color: #FFD4D4;
        }
    </style>
<?php
   $server = mysqli_connect("localhost", "root", "", "donaturnew");

   if ($server) {
       echo "berhasil";
   } else {
       echo "Koneksi gagal";
   }   

    $nama_donatur = $_POST["nama_donatur"];
    $donatur_id = $_POST["donatur_id"];
    $paket = $_POST["paket"];
    $kategori = $_POST["kategori"];
    $nominal_barang = $_POST["nominal_barang"];

    $sql = "insert into wakaf (nama_donatur, donatur_id, paket, kategori, nominal_barang) values 
    ('$nama_donatur', '$donatur_id', '$paket', '$kategori', '$nominal_barang')";

if(mysqli_query($server, $sql)) {
    echo "<script>alert('Penyimpanan berhasil! Tampilkan hasil');window.location = 'index.php';</script>";
} else {
    echo "<script>alert('Penyimpanan gagal! coba lagi.');window.location = 'input.php';</script>";
}
?>
</body>
</html>