<!DOCTYPE html>
<html>
<head>
<link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Handlee&display=swap" rel="stylesheet">
<title>Edit data</title>
<style type="text/css">
        *form{
            font-family: "Trebuchet MS";
            margin-top: -100px;
        }
        body{
            background-image: url('foto/jepang.jpg');
            background-size: cover;
            width: 100%;
            height: 840px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        h4{
            font-family: 'Courgette', cursive;
            text-transform : uppercase ;
            color : white;
            font-size: 45px;
        }
        input{
            padding: 6px;
            width : 100%;
            box-sizing : border-box;
            background-color : #d7ccc8;
            border: 2px solid #d7ccc8; 
            outline-color: salmon;
        }
        button{
            background-color : #00838f; 
            color : #fff;
            padding: 15px;
            font-size: 15px;
            border: 0;
            margin-top : 20px;
            border-radius : 15px;
            shadow : 20%;
        }
        .text{
            opacity: 0.9;
            z-index: 1;
        }
    </style>
</head>
<body>

    <?php
    include 'koneksi.php';
    $id = $_GET['id']; // ambil data ID dari URL
    $data = mysqli_query($koneksi,"SELECT * from konsultasi where id='$id'");
    $d = mysqli_fetch_array($data);?>
  
    <form action="update_data.php?id=<?php echo $id ?>" method="post" class="kelas"> 
    ID: <?php echo $d['id']; ?><hr>
    <h4> Edit NOw</h4>
    <input style="margin-bottom:10px;" type="text" name="username" value="<?php echo $d['username']; ?>"><br>
    <input style="margin-bottom:10px;" type="text" name="email" value="<?php echo $d['email']; ?>"><br>
    <input style="margin-bottom:10px;" type="text" name="info" value="<?php echo $d['info']; ?>"><br>
    <input style="margin-bottom:10px;" type="text" name="no_hp" value="<?php echo $d['no_hp']; ?>"><br>
    <input style="margin-bottom:10px;" type="text" name="deskripi_pribadi" value="<?php echo $d['deskripsi_pribadi']; ?>">
    <br>
    <input style="margin-bottom:10px;" type="file" name="gambar_aboutme" value="<?php echo $d['gambar_aboutme']; ?>">
    <br>
<button type="submit">Update</button>
</form>
</body>
</html>


