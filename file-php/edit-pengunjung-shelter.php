<!doctype html>
<html>
<head>
    <!-- judul, viewport biar width dinamis, decoder, dan stylesheet -->
    <title> EDIT PENGUNJUNG </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="../style/pengunjung-shelter.css" />
</head>
<?php
    #menambahkan file header
    include "header.php";
    #variabel connect dan query
    $connect = mysqli_connect('localhost', 'root', '', 'db_akun_shelter');
    $kunci = $_GET['kunci']; #kunci ini dari input hidden yang ada di menu shelter
    $query = "SELECT * FROM kunjungan WHERE kunci='$kunci'";
    $ambil = mysqli_query($connect, $query);
    
    #variabel tampil, untuk menampilkan data yang ada di tabel
    #$tampil['tanggal'] maksudnya menampilkan tanggal yang sesuai dengan kunci (1 row yang sama), begitu pula dengan $tampil yang lain
    $tampil = mysqli_fetch_array($ambil);
    #karena bingung bagaimana dengan combobox, jadi array saja semua pilihan di combobox
    $verifikasi = array('Terverifikasi', 'Tidak Terverifikasi');
?>
<body>
    <div id="kotak-tengah">
    <div id="judul">
        <h1> EDIT DATA </h1>
    </div>    
    <img id="foto-profil" width= 100px src="../upload/<?php if ($tampil['profil'] != ''){echo $tampil['profil'];}else{echo '../upload/default-profil.png';} ?>" />
    <form method="post" action="input-edit-pengunjung-shelter.php" enctype="multipart/form-data">
        <table>
         
        <tr>
            <td> Tanggal Berkunjung: </td>
            <td> <input class="isian" type="date" name="tanggal" value="<?php echo $tampil['tanggal']; ?>"> </td>
        </tr>
        
        <tr>
            <td> Nama: </td>
            <td> <input class="isian" type="text" name="nama" Placeholder="Masukkan Nama" maxlength=30 value="<?php echo $tampil['nama'];?>"> </td>
        </tr>
        
        <tr>
            <td> ID: </td>
            <td> <input class="isian" type="number" name="id" Placeholder="Masukkan ID" min="1" max="99999" value="<?php echo $tampil['id'];?>"> </td>
        </tr>
        
        <tr>
            <td> Status Verifikasi: </td>
            <td> <select class="isian" name="verifikasi">
                <?php
                    #untuk setiap string yang ada di array $verifikasi, buat option dengan value string tersebut
                    foreach($verifikasi as $v) {
                        echo "<option value='$v' ";
                        echo $tampil['verifikasi']==$v?'selected="selected"':''; #pilih berdasarkan apa nilai yang keluar dari $tampil
                        echo ">$v</option>";
                    }
                ?>
            </select> </td>
        </tr>
        
        <tr>
            <td> Foto (Opsional): </td>
            <td> <input class="isian" type="file" name="profil" value="<? echo $tampil['profil'] ?>"> </td>
        </tr>
        
        <input type="hidden" name="kunci" value="<?php echo $tampil['kunci'];?>">
       
        </table>
        <input class="submit" type="submit" name="submit" Value="Gass" <?php disableButton() ?>> 
    </form>
    </div>
</body>
