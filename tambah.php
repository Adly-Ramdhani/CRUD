<?php

    require 'controller.php';

    if (isset($_POST["submit"])) {

        if (tambah($_POST) > 0) {
            echo "
                    <script>
                        alert('Data Anda berhasi dimasukkan');
                        document.location.href = 'data.php';
                    </script>
                ";
        } else {
            echo "
                    <script>
                        alert('Data Anda gagal dimasukan');
                        document.location.href = 'data.php';
                    </script>
                ";
        }
    }
    
    ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Input Data Siswa</title>
    <style>
       html{
            height: 100%;
           }

        body{
               margin: 0;
               padding:0 ;
            font-family:sans-serif ;
             background: linear-gradient(#096096B4 ,#93BFCF);

            }
        .mb-3{
            width: 100%;
    padding: 10px 0;
    font-size: 16px;
    color:black;
    margin-bottom: 30px ;
    border: none;
    border-bottom: 1px solid #FFFF;
    outline: none;
    background: transparent;
        }
    </style>
</head>
<body>
    <ul>
        <form action="" method="post">
        <div class="position-absolute top-50 start-50 translate-middle">
        <div class="d-flex justify-content-center">
        <div class="card" style="width: 30rem;">
        <div class ="card-body">
        <h3>Masukkan Data</h3>
    <div class="box">
    <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" class="form-control" id="" name="nama">
        </div>
    <div class="mb-3">
        <label for="nis" class="form-label">NIS</label>
        <input type="text" class="form-control" id="" name="nis">
        </div>
    <div class="mb-3">
        <label for="rayon" class="form-label">Rayon</label>
        <input type="text" class="form-control" id="" name="rayon">
        </div>
    <div class="mb-3">
        <label for="rombel" class="form-label">Rombel</label>
        <input type="text" class="form-control" id="" name="rombel">
        </div>
    <div class="mb-3">
        <label for="status" class="form-label">Status</label>
        <input type="text" class="form-control" id="" name="status">
        </div>
    <div class="mb-3">
        <label for="gambar" class="form-label">Gambar</label>
        <input type="file" class="form-control" id="" name="gambar">
        </div>
        </div>
            <button type="submit" name="submit">Masukkan Data Anda</button>
        </form>
    </ul>
</body>
</html>