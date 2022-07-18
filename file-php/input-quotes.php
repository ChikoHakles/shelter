<?php
    
    #buat variabel connect
    $connect = mysqli_connect('localhost', 'root', '', 'db_akun_shelter');
    
    #tangkap nilai dari form di tambah-quotes
    $quote = $_POST['quote'];
    $periwayat = $_POST['periwayat'];
    
    #buat variabel untuk input data ke tabel (pakai syntax sql)
    $input = "INSERT INTO quotes VALUES('', '$quote', '$periwayat')";
    
    #buat variabel hasil, yang menjalankan variabel connect dan input
    $hasil = mysqli_query($connect, $input);
    
    #jalankan hasil, dan jika berhasil eksekusi code di dalam if
    if($hasil) {
        echo "<script> alert('Quote Berhasil Ditambahkan!'); history.go(-1) </script>";
    }
    #jika gagal, jalankan code di dalam else
    else {
        echo "<script> alert('Quote Gagal Ditambahkan!'); history.go(-1) </script>";
    }
?>