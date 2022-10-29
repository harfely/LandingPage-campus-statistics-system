<?php include('koneksi.php')?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Handlee&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="INDEX.css">
    <title>Tambah Data</title>
    <style type="text/css">
        *form{
            font-family: "Trebuchet MS";
        }
        body{
            background-image: url('foto/developer.jpg');
            background-size: cover;
            width: 100%;
            height: 840px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        h1{
            font-family: 'Courgette', cursive;
            text-transform : uppercase ;
            color : #fff;
            margin-top : -200px;
        }
        .base{
            width: 400px;
            padding : 20px;
            margin-left : auto;
            margin-right: auto; 
            background-color : #bdbdbd;
            border-radius: 15px;
            shadow: 20%;
        }
        label{
            margin-top:10px;
            float : left; 
            text-align: left;
            width : 100%;
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
            font-family: 'Satisfy', cursive;
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
    <center>
        <h1>Create Now</h1> <br>
        <form  method="POST" action="proses_tambahkonsultasi.php" enctype="multipart/form-data">
        <section class="base">
            <div>
                <label for="">Username</label>
                <input class="text" type="text" name="username" placeholder="Your Name" required="" autofocus="" /> 
            </div>
            <div>
                <label for="">Email</label>
                <input class="text" type="email" name="email"  placeholder="Your Email" required="" autofocus="" /> 
            </div>
            <div>
                <label for="">Info</label>
                <input class="text" type="text" name="info" placeholder="Your Address,City,COuntry" required="" autofocus="" /> 
            </div>
            <div>
                <label for="">Phone NUmber</label>
                <input class="text" type="text" name="no_hp" placeholder="Your Phone Number" required="" autofocus="" /> 
            </div>
            <div>
                <label for="">Description Self</label>
                <input  class="text"  type="text" name="deskripsi_pribadi" placeholder="Your DEscription Self" required="" autofocus="" /> 
            </div>
            <div>
                <label for="">Picture(Me)</label>
                <input  class="text"  type="file" name="gambar_aboutme"  placeholder="Your Name" required="" autofocus="" /> 
            </div>
            <div>
                <button class="button" type="submit">Save Editing</button>
            </div>
        </section>
    </form>
    </center>
</body>
</html>
