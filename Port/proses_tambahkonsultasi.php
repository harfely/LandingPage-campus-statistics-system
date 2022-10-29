<?php
    include ('koneksi.php');

    $username = $_POST['username'];
    $email = $_POST['email'];
    $info = $_POST['info'];
    $no_hp = $_POST['no_hp'];
    $deskripsi_pribadi = $_POST['deskripsi_pribadi'];
    $gambar_aboutme = $_FILES['gambar_aboutme']['name'];



    if($gambar_aboutme != ""){
        $ekstensi_diperbolehkan = array('png','jpg');
        $x = explode('.', $gambar_aboutme);
        $ekstensi = strtolower(end($x));
        $file_tmp = $_FILES['gambar_aboutme']['tmp_name'];
        $angka_acak = rand(1, 999);
        $nama_gambar_baru = $angka_acak. '-' .$gambar_aboutme;

            if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
                move_uploaded_file($file_tmp, 'foto/' .$nama_gambar_baru);

                $query = "INSERT INTO konsultasi (username, email, info, no_hp, deskripsi_pribadi, gambar_aboutme) VALUES ('$username', '$email', '$info', '$no_hp', '$deskripsi_pribadi', '$nama_gambar_baru')";
                $result = mysqli_query($koneksi, $query);

                if(!$result){
                    die("Query Error : ".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
                } else {
                    echo "<script>alert('Data Berhasil Ditambahkan');window.location='data.php'</script>";
                }        
        }else{
             echo "<script>alert('Ekstensi gambar hanya bisa JPG dan PNG!');window.location='konsultasi.php';</script>";
        }
    }else{
        $query = "INSERT INTO konsultasi (username, email, info, no_hp, deskripsi_pribadi) VALUES ('$username', '$email', '$info', '$no_hp', '$deskripsi_pribadi')";
        $result = mysqli_query($koneksi, $query);

        if(!$result){
            die("Query Error : ".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
        } else {
            echo "<script>alert('Data Berhasil Ditambahkan');window.location='data.php'</script>";
        } 
        
   }
?>
