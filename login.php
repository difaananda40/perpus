<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sensus | Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans+Narrow" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <?php
        // include koneksi
        include 'koneksi.php';

        // cek apakah sudah login
        session_start();
        if(isset($_SESSION['status'])){
            header('location: index.php');
        }

        // cek login
        if(isset($_POST['login'])){
            $nama  = $_POST['nama'];

            $cari = mysqli_query($konek, "SELECT * FROM petugas
                                          WHERE nama = '$nama'
            ");

            $cek = mysqli_num_rows($cari);

            if($cek > 0){
                $data = mysqli_fetch_assoc($cari);
                $_SESSION['status'] = true;
                $_SESSION['kode_petugas'] = $data['kode_petugas'];
                $_SESSION['nama'] = $data['nama'];
                header('location: index.php');
            }
            else {
                var_dump($mysql_error($konek));
                die($cek);
                header('location: login.php');
            }
        }

    ?>
</head>
<style>
    body{
        background-color: #ededed;
        font-family: 'PT Sans Narrow';
    }

    .kontainer{
        width: 350px;
        height: 450px;
        background-color: white;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        position: absolute;
    }

    .judul{
        font-size: 30px;
        text-align: center;
        margin-top: 80px;
        margin-bottom: 25px;
        font-weight: bold;
    }


    .form input{
        font-family: inherit;
        font-size: 15px;
        display: block;
        margin: auto;
        border: none;
        outline: none;
        border-bottom: 2px solid lightgray;
        margin-top: 10px;
        padding: 8px;
        width: 150px;
        transition: border 0.3s ease-in-out;
    }

    .form input:focus{
        border-bottom: 2px solid rgb(101, 16, 180);
    }

    .form button{
        font-family: inherit;
        font-size: 17px;
        display: block;
        margin: auto;
        margin-top: 30px;
        border: none;
        outline: none;
        padding: 10px;
        width: 166px;
        border-radius: 20px;
        /* background-color: rgb(145, 46, 238); */
        background-image: linear-gradient(
            to right,
            rgb(156, 63, 243), rgb(101, 16, 180));
        color: white;
        cursor: pointer;
    }

</style>
<body>
    <div class="kontainer">
        <p class="judul">
            Selamat Datang<br>
            Perpustakaan Daerah
        </p>
        <form class="form" method="post">
            <input type="text" name="nama" placeholder="Nama Petugas">
            <button type="submit" name="login">LOGIN</button>
        </form>
    </div>
</body>
</html>