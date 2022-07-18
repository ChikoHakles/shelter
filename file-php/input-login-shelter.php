<html>
<head>
    <title> Go To Menu Gan </title>
</title>
</head>
</html>
<?php
    
    //jalakan sesi
    
    session_start();
    
    #tangkap username dan pass dari form sebelumnya
    $username = $_POST['username'];
    $pass1 = $_POST['pass1'];
    
    #buat variabel connect
    $connect = mysqli_connect('localhost', 'root', '', 'db_akun_shelter');
    
    // mencari password di database
    
    $query = "SELECT * FROM akun WHERE username = '$username' AND pass1 = '$pass1'";
    $hasil = mysqli_query($connect, $query);
    $cek = mysqli_num_rows($hasil);
    $array = mysqli_fetch_array($hasil);
    
    //$pengacak = "NDJS3289JSKS190JISJI";
    
    /* cek kesesuaian password terenkripsi dari form login
    dengan password terenkripsi dari database */
    
    //if (md5($pengacak.md5($password).$pengacak) == $data['password']){
    
    if ($cek == 1) {
        
        // jika sesuai, maka buat session untuk username
            
            $_SESSION['username'] = $username;
            $_SESSION['pass1'] = $pass1;
            $_SESSION['level'] = $array['level'];
            
            // direct ke menu utama halaman
            
            header ("location: tabel-data-shelter.php");
    }
    else {
        echo "<script>
        alert ('LOGIN GAGAL, SILAHKAN KEMBALI'); history.go(-1);
        </script>";
    }
?>