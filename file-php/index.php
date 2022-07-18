<!doctype html>
<html>
<head>
    <!-- decoder, judul, viewport, dan style -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SENKO SHELTER</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../style/style-index.css" >
</head>
<?php
    session_start();
    include "loading.html";
    if($_SESSION) {
        $akun = '<a href="tabel-data-shelter.php">' . $_SESSION['username'] . '</a>';
    }
    else {
        $akun = '<a href="login-shelter.php"> BELUM LOGIN! </a>';
    }
?>
<body>
    <div id="mrosot"></div>
    <div id="header">
        <div id="menu">
            <h3> MENU </h3>
            <ul id="index-list">
                <li class="item"><a href="#who"> TENTANG KAMI </a> <br> </li>
                <li class="item"><a href="#awal-mula"> AWAL MULA </a> <br> </li>
                <li class="item"><a href="#fitur"> FITUR </a> <br> </li>
                <li class="item"><a href="#register-login"> REGISTER/LOGIN </a> <br> </li>
                <li class="item"><a href="#about"> ABOUT DEV </a> </li>
            </ul>
        </div>
    </div>
    
    <div id="slogan">
        <div class="logo-ani">
            <img src="../picture/t-pose-senko.png">
        </div>
        <div id="kata-slogan">
            <h1> SENKO SHELTER </h1>
            <p>"Mangan Ora Mangan Sing Penting Kumpul"</p>
            <h4> <?php echo $akun; ?> </h4>
        </div>
        <div class="logo-ani logo-ani2">
            <img src="../picture/t-pose-senko.png">
        </div>
    </div>
    
    <div id="who">
        <img src="../picture/6607.png">
        <h2> Who We Are?? </h2>
        <p> SENKO SHELTER adalah sebuah wadah kecil nan hangat yang dibuat agar para penikmat buku dari berbagai strata sosial 
        dapat bersenda gurau satu sama lain tanpa harus memikirkan perbedaan kasta, golongan, atau apapun itu. 
        Pastilah keinginan semua orang untuk mempunyai sebuah tempat, baik untuk bercerita tentang kehidupan, menyalurkan hobi, 
        atau hanya sekedar melepas penat setelah seharian menjadi budak korporat. </p>
    </div>
    
    <div id="awal-mula">
        <img src="../picture/workplace-1245776_640.jpg">
        <h2> Awal Mula </h2>
        <p> Terlahir dari ide sebuah tim, yang mempunyai sebuah keinginan sama, yaitu menciptakan <i> circle </i> dimana manusia yang 
        berbeda pun diperlakukan setara, tanpa diskriminasi, dan mendapat tempat yang sama. X, sang pencetus ide, pun bersama dengan 6 
        rekannya membangun SENKO SHELTER dengan usaha keras, demi menciptakan nirvana dunia itu. Dan pada Februari 2020, dibukalah SENKO SHELTER 
        untuk umum, sebagai perwujudan atas keinginan tim. </p>
    </div>
    
    <div id="fitur">
        <h2> FITUR </h2>
        <p> SENKO SHELTER diatas tentu hanya sebuah fasilitas ghoib, karena ini adalah sebuah web trial kepunyaan seorang bocah ingusan, yang bahkan 
        belum bisa JS DOM. Dan berikut, beberapa fitur simple nan tidak berguna dari web ini. </p>
        <div class="fitur-item">
            <div class="item item1">
                <img src="../picture/ice_screenshot_20210410-194000.png" >
                <h3> TABEL DATA </h3>
            </div>
            <div class="item item2">
                <img src="../picture/ice_screenshot_20210410-194041.png" >
                <h3> RANDOM QUOTES </h3>
            </div>
        </div>
    </div>
    
    <div id="register-login">
        <h5> KEREN BANG UDAH BACA <br> SEKARANG, REGISTER </h5>
        <form action="register-shelter.php"> <button class="item"> REGISTER </button> </form>
        
        <p> Atau Sudah Punya Akun?? </p>
        <form action="login-shelter.php"> <button class="item"> LOGIN </button> </form>
    </div>
    
    <div id="about">
        <p class="profil">Hanya Seorang Murid SMK, Yang Dengan Bodohnya Mencintai Wanita Yang Telah Pergi.<br>
        Ada Yang Pergi Ke Alam Baka Karena Dimakar, Ada Yang Pergi Bersama Pria Lain.</p>
        <p class="foot">ChikoHakles' Project @2021 <br> Made At Calon Rumah Kita, While Menanti Kamu Setiap Malam.</p>
    </div>
</body>
</html>