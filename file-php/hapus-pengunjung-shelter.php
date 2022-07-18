<?php
    
    $kunci = $_GET['kunci'];
    $connect = mysqli_connect('localhost', 'root', '', 'db_akun_shelter');
    $delete = "DELETE FROM kunjungan WHERE kunci='$kunci'";
        
    $query = mysqli_query($connect, "SELECT * FROM kunjungan WHERE kunci='$kunci'");
    $arrquery = mysqli_fetch_array($query);
    $folder = "../upload/";
    
    mysqli_query($connect, $delete);
    
    if ($arrquery['profil'] != '' && file_exists($folder . $arrquery['profil'])) {
        unlink($folder . $arrquery['profil']);
    }
    
    header("location:tabel-data-shelter.php");
    
?>