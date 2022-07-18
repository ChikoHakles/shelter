<?php

    $username = $_POST['username'];
    $pass1 = $_POST['pass1'];
    $pass2 = $_POST['pass2'];
    
    // cek kesamaan password1

    if($pass1 == $pass2) {
        
        $konek = mysqli_connect("localhost","root","","db_akun_shelter");
    
        // perlu dibuat sembarang pengacak (gw off in, jadiin cateten doang)
    
        //$pengacak = "NDJS3289JSKS190JISJI";
    
        // mengenkripsi password dengan md5() dan pengacak (gw off in juga)
    
        //$pass1 = md5($pengacak. md5($pass1) . $pengacak);
    
        // menyimpan username dan password terenkripsi ke database

        $query = "INSERT INTO akun VALUES('$username','$pass1','singgah')";
        $hasil = mysqli_query($konek,$query);

        // menampilkan keterangan pendaftaran

        if ($hasil){
            echo "<script> alert('Halo $username, akun udh jadi. Pindah gih ke login'); document.location.href='login-shelter.php'; </script>";
        }
        else if($username = mysqli_fetch_array(mysqli_query($konek, "SELECT username FROM akun"))){
            echo "<script> alert('Username ini sudah terpakai. Silahkan cari nama lain'); history.go(-1); </script>";
        }
    }
    else {
        echo "<script> alert('isi password nya 2 kali kan tuh, samain'); history.go(-1); </script>";
    }
?>