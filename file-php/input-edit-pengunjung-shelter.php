<?php
    
    //ambil data yang dimasukkan di form
    
    $tanggal = $_POST['tanggal'];
    $nama = $_POST['nama'];
    $id = $_POST['id'];
    $verifikasi = $_POST['verifikasi'];
    $kunci = $_POST['kunci'];
    $profil = rand(0, 999)."_".$_FILES['profil']['name'];
    
    $type = $_FILES['profil']['type'];
    $ekstensi = ['image/jpg', 'image/png', 'image/gif', 'image/jpeg'];
    $folder = "../upload/";
    
    //buat variabel connect ke database
    
    $connect = mysqli_connect('localhost', 'root', '', 'db_akun_shelter');
    
    //buat variabel mengganti data di tabel, dan yang diganti hanya yang kuncinya sama
    
    $updatewf = "UPDATE kunjungan SET tanggal='$tanggal', nama='$nama', id='$id', verifikasi='$verifikasi', profil='$profil' WHERE kunci='$kunci'";
    $updatenf = "UPDATE kunjungan SET tanggal='$tanggal', nama='$nama', id='$id', verifikasi='$verifikasi' WHERE kunci='$kunci'";
    
    //pernyataan, jika tidak terisi semua, maka akan muncul alert untuk mengulang
    
    if ($_POST['tanggal']='' || $_POST['nama']=='' || $_POST['id']=='' || $_POST['verifikasi']='') {
        
            echo "<script> alert('TOLONG ISI SEMUA DATA!'); history.go(-1); </script>";
        
    }    
    
    //jika terisi semua, maka variabel connect dan update diatas akan dijalankan
    
    else {
        
        $query = mysqli_query($connect, "SELECT * FROM kunjungan WHERE kunci='$kunci'");
        $arrquery = mysqli_fetch_array($query);
        
        if (!empty($_FILES['profil']['tmp_name'])){
            
            if (in_array(mime_content_type($_FILES['profil']['tmp_name']), $ekstensi)){
                
                if ($arrquery['profil'] != '' && file_exists($folder . $arrquery['profil'])) {
                    unlink($folder . $arrquery['profil']);
                }
                move_uploaded_file($_FILES['profil']['tmp_name'], $folder . $profil);
                mysqli_query($connect, $updatewf);
            
                //jika terhubung, muncul alert berhasil dan direct ke menu shelter
                echo "<script> alert('DATA BERHASIL DIUBAH!'); document.location.href='tabel-data-shelter.php'; </script>";
            
            }
            else {
            
                //jika gagal, muncul alert gagal
                
                echo "<script> alert('DATA GAGAL DIUBAH!'); history.go(-1); </script>";
            }
        }
        else {
            mysqli_query($connect, $updatenf);
            //jika terhubung, muncul alert berhasil dan direct ke menu shelter
            echo "<script> alert('DATA BERHASIL DIUBAH!'); document.location.href='tabel-data-shelter.php'; </script>";
        }
    
    }
?>