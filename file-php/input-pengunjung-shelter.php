<?php
    
    //ambil data yang dimasukkan di form
    
    $tanggal = $_POST['tanggal'];
    $nama = $_POST['nama'];
    $id = $_POST['id'];
    $verifikasi = $_POST['verifikasi'];
    $profil = rand(0, 999).$_FILES['profil']['name'];
    
    $type = $_FILES['profil']['type'];
    $ekstensi = ['image/jpg', 'image/png', 'image/gif'];
    $folder = "../upload/";
    
    //buat variabel connect ke database
    
    $connect = mysqli_connect('localhost', 'root', '', 'db_akun_shelter');
    
    $query = "SELECT kunci FROM kunjungan";
    
    $q = mysqli_query($connect, $query);
    
    $jumlah = mysqli_num_rows($q);
    
    $array = mysqli_fetch_array($q);
    
    if($jumlah <= 0) {
        $kunci = 1;
    }
    else {
        $kunci = max(array($query));
    }
    
    //pernyataan, jika tidak terisi semua, maka akan muncul alert untuk mengulang
    
    if ($_POST['tanggal']='' || $_POST['nama']=='' || $_POST['id']=='' || $_POST['verifikasi']='') {
        
        echo "<script> alert('TOLONG ISI SEMUA DATA!'); history.go(-1); </script>";
        
    }
    
    else if (!in_array($type, $ekstensi) && $type != '') {
        
        echo "<script> alert('MAAF JENIS GAMBAR HARUS JPG/PNG/GIF'); history.go(-1); </script>";
        
    }
    
    //jika terisi semua, maka variabel connect dan insert diatas akan dijalankan
    
    else {
        
        if ($_FILES['profil']['name'] == '') {
            $profil = '';
        }
        
        //buat variabel memasukkan data ke tabel
        
        $insert = "INSERT INTO kunjungan VALUES('$kunci', '$tanggal', '$profil', '$nama', '$id', '$verifikasi')";
    
        $input = mysqli_query($connect, $insert);
        
        if ($input) {
        
            move_uploaded_file($_FILES['profil']['tmp_name'], $folder . $profil);
            echo "<script> alert('DATA BERHASIL DITAMBAHKAN!'); document.location.href='tabel-data-shelter.php'; </script>";
        
        }
        else {
        
            echo "<script> alert('DATA GAGAL DITAMBAHKAN!'); history.go(-1); </script>";
        
        }
    
    }
?>