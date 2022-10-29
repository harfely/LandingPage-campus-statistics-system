 <style type="text/css">
        *{
            font-family : "Trebuchet MS";
        }
        h1{
            text-transform : uppercase ;
            color : white ;
        }
        table{
            border : 5px solid #ddeeee; 
            border-collapse : collapse ;
            border-spacing :0; 
            width : 90%;
            margin : 10px; 
        }
        table thead th{
            background-color: #ddefef;
            border: 3px solid #ddeeee; 
            color : #336b6b;
            padding : 10px;
        }
        table tbody td{
            padding : 5px;
            color : white;
            font-family: 'Handlee', cursive;
        }
        a{
            background-color : #000; 
            color : #fff; 
            padding : 2px;
            text-decoration : none; 
        }
    </style>
    <!DOCTYPE html>
<html>
<head>
<link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Handlee&display=swap" rel="stylesheet">
<title>Portal</title>
<style>
    *form{
        font-family: "Trebuchet MS";
    }
    body{
        background-color : #455a64; 
    }
    h2{
        font-family: 'Courgette', cursive;
        text-transform : uppercase ;
        color : white;
        font-size: 45px;
    }
    a{
        text-align: center;
        text-decoration: none;
        margin-left : auto;
        margin-right: auto; 
        color: #263238;
        background-color:#1e88e5;
        padding: 1px;
        font-size: 15px;
        border-radius : 5px;
        shadow : 20%;
    }
</style>
</head>

<body style="padding:15px;">
<center>
    <h2>Sharing Portal</h2>
    <a href="konsultasi.php"> +Tambah data </a><br><br> 
</center>


<?php 
session_start(); // untuk notifikasi pesan
echo $_SESSION['pesan'];
session_destroy();
?>

<table border="1">
<tr><th align="center" style="color:white;">ID</th>
<td width="400" align="center">Username</td>
<td width="300" align="center">Email</td>
<td width="200" align="center">Info</td>
<td width="150" align="center">Phone Number</td>
<td width="200" align="center">Description Self</td>
<td width="150" align="center">My Picture</td>
<td width="500" align="center">Action</td>
<td></td>
</tr>

<?php
include "koneksi.php";
$data = mysqli_query($koneksi,"SELECT * from konsultasi order by id desc");
while($d = mysqli_fetch_array($data)){?>
<tr>
<td><?php echo $d['id'];?></td>
<td><?php echo $d['username'];?></td>
<td><?php echo $d['email'];?></td>
<td><?php echo $d['info'];?></td>
<td><?php echo $d['no_hp'];?></td>
<td><?php echo $d['deskripsi_pribaadi'];?></td>
<td><?php echo $d['gambar_aboutme'];?></td>
<td><center><a href="edit.php?id=<?php echo $d['id']; ?>">Edit</a>
<a href="javascript:del(<?php echo $d['id'];?>)">Hapus</a>
<a href="index.php?id=<?php echo $id['id'];?>">Lihat</a> </center></td>
</tr>
<?php
};
?>
</table>
<script language="JavaScript" type="text/javascript">
function del(id){
if (confirm("yakin akan menghapus data ini?")){
window.location.href = 'hapus.php?id=' + id;
}}
</script>
</body>
</html>