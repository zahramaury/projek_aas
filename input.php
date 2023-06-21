<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Donatur</title>
    <style>
    
    body {
    background: #2F3984;
    display: flex;
    justify-content: center;
    align-items: center;
    height: auto;
}

* {
    font-family: sans-serif;
    box-sizing: border-box;
}

form {
    width: 490px;
    border: 2px solid #ccc;
    padding: 30px;
    background: #fff;
    border-radius: 15px;
   
}

h2 {
    text-align: center;
    margin-bottom: 40px;

}

input {
    display: block;
    border: 2px solid #ccc;
    width: 95%;
    padding: 10px;
    margin: 10px auto;
    border-radius: 5px;
}

label {
    color: #888;
    font-size: 18px;
    padding: 10px;
}

button {
    float: left;
    background: #555;
    padding: 10px 15px;
    color: #fff;
    border-radius: 5px;
    margin-right: 10px;
    border: none;
}

button:hover {
    opacity: .7;
}
    </style>
</head>
<body>
    <form action="simpan.php" method="post">
        <h2>Data Doantur</h2>
        <label for="">Nama</label>
        <input type="text" name = "nama_donatur"><br>

        <label for="">ID</label>
        <input type="number" name = "donatur_id"><br>

        <label for="">Paket</label>
        <input type="text" name = "paket"><br>

        <label for="">Kategori</label>
        <input type="text" name = "kategori"><br>

        <label for="">Nominal / Barang</label>
        <input type="text" name = "nominal_barang"><br>

        <button name = "login" type ="submit">Submit</button>
    </form>
</body>
</html>