<?php
require 'controller.php';
 $students = mysqli_query($conn, "SELECT * FROM siswa");

 if(isset($_POST["cari"])){
   $students = cari($_POST["keyword"]);
 }



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <title>Document</title>
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
        h1{
            text-transform:uppercase;
            color:#096096B4;
        }
        a{
            background-color:#BDCDD6;
            color:#096096B4;
            text-decoration:none ;
            padding:10px;
            font-size: 12px;

            
        }

        table{ 
            border:1px solid #ddee;
            border-collapse: collapse;
            border-spacing:0;
            width:70%;
            margin: 10px auto 10px auto;
        }
        table tr th{
            background-color:#096096B4;
            border: 1px solid #6096B4;
            color: #6096B4;
            padding:10px;
            text-align:center;
            
        }
        table tr td a{
            background-color: #BDCDD6;
            color:#EEE9DA;
            text-decoration:none ;
            font-size: 15px;
            
        }
        table tr td {
            border: 1px solid #6096B4;
            background-color: #BDCDD6;
            padding: 10px;
            text-align:center;
        }


    </style>
</head>
<body>
<nav class="navbar bg-body-tertiary" class="atas">
  <div class="container-fluid">
  <div class="justify-content-center"><h1> Data Siswa</h1></div>
  <a href="tambah.php">+ Tambah Data</a>
    <form class="d-flex" role="search" action="" method="post">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="keyword"
      autofocus autocomplete="off">
      <button class="btn btn-outline-success" type="submit" name="cari">cari</button>
    </form>
  </div>
</nav>
    <br><br>
    <table border ="1">
        <tr>
            <th>NO</th>
            <th>NAMA</th>
            <th>NIS</th>
            <th>RAYON</th>
            <th>ROMBEL</th>
            <th>STATUS</th>
            <th>GAMABR</th>
            <th>AKSI</th>
        </tr>
        <?php $i =1;?>
        <?php foreach ($students as $student):?>
        <tr>
            <td><?= $i?> </td>
            <td><?= $student ["nama"]?></td>
            <td><?= $student ["nis"]?></td>
            <td><?= $student ["rayon"]?></td>
            <td><?= $student ["rombel"]?></td>
            <td><?= $student ["status"]?></td>
            <td><img src="img/<?= $student["gambar"]?>" width="50"></td>
             <td>
                <a href="hapus.php?id=<?=  $student["id"]?>"onlick="return comfirm(yakin data ingin di hapus?)">hapus</a>
                <a href="update.php?id=<?= $student["id"]?>"onlick="return comfirm(yakin data ingin di ubah?)">ubah</a>
            </td>
        </tr>
        <?php $i++; ?>
        <?php endforeach ;?>
    </table>
</body>
</html>