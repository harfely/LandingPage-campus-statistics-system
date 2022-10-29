<?php
session_start();include "koneksi.php"; // masukan konekasi DB
// ambil variable ID dari URL
$id = $_GET['id'];
//Proses query hapus data
$del=mysqli_query($koneksi,"DELETE from konsultasi where id='$id'");
if($del){
$_SESSION['pesan'] = '<font color=green>OK, 1 data berhasil dihapus.</font>';
header("location:data.php"); // kembali ke tampil data
}else{
echo "Gagal hapus data!";
}?>