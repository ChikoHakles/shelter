<!doctype html>
<html>
<head>
    <!-- decoder, judul, viewport, dan style -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TABEL DATA</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../style/tabel-data-shelter.css" >
</head>
<?php include "header.php";?>
<body>
    <div class="content">
    <h1> DATA KUNJUNGAN SHELTER </h1>
    
    <!-- buat input untuk filter tanggal, dan karena get, walau di href hanya index, akan muncul tanggalnya juga -->
    <h3> FILTER </h3>
    <form method="get">
        <label for="tanggal"> Tanggal: </label>
        <input type="date" name="tanggal"> <br> <br>
        <input type="submit" value="CARI">
        <input type="button" onclick="window.location.href='tabel-data-shelter.php'" value="RESET">
    </form>
    <br>
    <!-- buat tabel untuk data nya -->
    <?php
        
        //buat variabel untuk connect form dengan database
        
        $connect = mysqli_connect('localhost', 'root', '', 'db_akun_shelter');
        
        #jika filter tanggal tadi di klik, maka jalankan code di dalam if
        
        if(isset($_GET['tanggal'])) {
            
            //masukkin filter tanggal yang dipilih ke variabel
            
            $tanggal = $_GET['tanggal'];
            
            //definisikan variabel untuk memilih semua dari tabel kunjungan, tapi hanya jika tanggalnya sama
            
            $query = "SELECT * FROM kunjungan WHERE tanggal = '$tanggal' ORDER BY tanggal DESC";
        
            //buat variabel yang mengambil data dari tabel di database tadi
        
            $ambil = mysqli_query($connect, $query);
        }
        #jika filter tidak di klik, jalankan code di dalam else
        else {
            //definisikan variabel untuk memilih semua dari tabel "kunjungan"
        
            $query = "SELECT * FROM kunjungan ORDER BY tanggal DESC";
        
            //buat variabel yang mengambil data dari tabel di database tadi
        
            $ambil = mysqli_query($connect, $query);
        }
        
        //jika baris tabel lebih dari 0, variabel $no bernilai 1
        
        if(mysqli_num_rows($ambil)> 0) {
            $no = 1;
        }
        else {
            echo "<h1> TIDAK ADA DATA! </h1>";
        }
    
        if(isset($_POST['namaProfil'])) {
            $namaProfil = $_POST['namaProfil'];
            $ambilProfil = mysqli_query($connect, "SELECT * FROM kunjungan WHERE nama='$namaProfil'");
            $show = mysqli_fetch_array($ambilProfil);
            
            echo "<div id=\"profil-container\"><img src=\"../upload/";
            if($show['profil'] != "") {
                echo $show['profil'];
            }
            else{
                echo "default-profil.png";
            }
            echo "\"> <h4 id=\"nama-preview\">" . $show['nama'] . "</h4> <div id=\"info\">"; 
            echo "<table id=\"preview\">";
            echo "<h3> DATA PENGUNJUNG </h3>";
            echo "<tr> <td> Nama: </td> <td>" . $show['nama'] . "</td> </tr>";
            echo "<tr> <td> Id: </td> <td>" . $show['id'] . "</td> </tr>";
            echo "<tr> <td> Verifikasi: </td> <td>" . $show['verifikasi'] . "</td> </tr>";
            echo "</table>";
            echo "</div></div>";
        }
    
        ?>
        <table id="data">
        <!-- buat kepala tabel -->
        <thead>
            <tr>
                <th> No </th>
                <th> Tanggal </th>
                <th> Nama </th>
                <th> ID </th>
                <th> Verifikasi </th>
                <th class="edit-hapus"> Edit </th>
                <th class="edit-hapus"> Hapus </th>
            </tr>
        </thead>
            
        
        <?php while($tampil = mysqli_fetch_array($ambil)) /*perulangan while, sembari membuat variabel $tampil*/ { ?>  
            <tr class="<?php if($no % 2 == 1){echo 'ganjil';}else{echo'genap';}?>" id="<?php echo $tampil['kunci'] ?>" >
                <td> <?php echo $no?> </td>
                <td> <?php echo $tampil['tanggal']?> </td>
                <td> <form method="post"> <button style="border: unset; background: unset; font: unset; text-align: left;" name="namaProfil" value="<?php echo $tampil['nama'];?>"> <?php echo $tampil['nama']?> </button> </form> </td>
                <td> <?php echo $tampil['id']?> </td>
                <td> <?php echo $tampil['verifikasi']?> </td>
                <td> 
                    <form method="get" action="edit-pengunjung-shelter.php">
                        <input type="submit" value="EDIT" <?php disableButton()?>> 
                    <input name="kunci" type="hidden" value="<?php echo $tampil['kunci'];?>">
                    </form>
                </td>
                <td> 
                    <form method="get" action="hapus-pengunjung-shelter.php"> 
                        <input type="submit" value="HAPUS" <?php disableButton() ?> onclick="alert('DATA AKAN DIHAPUS!');">
                    <input name="kunci" type="hidden" value="<?php echo $tampil['kunci'];?>">
                    </form> 
                </td>
                <!-- di edit dan hapus terdapat kunci, yang akan menjadi alamat untuk sebuah row data -->
            </tr>
        
        <!-- deklarasi kalau ada variabel $no lagi, maka nilainya ditambah 1 (++) -->
            
        <?php $no++;?>
        
        <?php } ?>
        
    </table>
    </div>
</body>
</html>