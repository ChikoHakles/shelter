<doctype html>
<html>
<head>
    <title> Pendataan Pengunjung Shelter </title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../style/pengunjung-shelter.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<?php
    include "header.php";
?>
<body>
    <div id="kotak-tengah">
    <div id="judul">
        <h1> PENDATAAN SHELTER </h1>
    </div>
    <form method="post" action="input-pengunjung-shelter.php" enctype="multipart/form-data">
        <table>
            
        <tr>
            <td> Tanggal Berkunjung: </td>
            <td> <input class="isian" type="date" name="tanggal"> </td>
        </tr>
        
        <tr>
            <td> Nama: </td>
            <td> <input class="isian" type="text" name="nama" Placeholder="Masukkan Nama" maxlength=30> </td>
        </tr>
        
        <tr>
            <td> ID: </td>
            <td> <input class="isian" type="number" name="id" Placeholder="Masukkan ID" min="1" max="99999"> </td>
        </tr>
        
        <tr>
            <td> Status Verifikasi: </td>
            <td> <select class="isian" name="verifikasi">
                <option value="Terverifikasi"> Terverifikasi </option>
                <option value="Tidak Terverifikasi"> Tidak </option>
            </select> </td>
        </tr>
        
        <tr>
            <td> Foto (Opsional):
            <td> <input class="isian" type="file" name="profil"> </td>
        </tr>
        
        </table>
        <input class="submit" type="submit" name="submit" Value="Gass" <?php disableButton() ?>>
    </form>
    </div>
</body>
