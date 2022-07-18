<head>
    <!-- judul, jenis decoder, viewport biar width nya dinamis, dan style(gaada style btw) -->
    <title> TAMBAH QUOTES KEREN </title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="" />
</head>
<?php
    #mengikutsertakan file header, yang udh disiapkan buat jadi navigasi fitur
    include "header.php";
?>
<body>
    <!-- instruksi biar jelas -->
    <h1> KETIKKAN QUOTES MU DISINI </h1>
    <!-- buat form quotes dan periwayat, yang kalau input nya di klik bakal ngejalanin input-quotes.php -->
    <form method="post" action="input-quotes.php">
        <!-- form tadi taro di tabel, biar sejajar antar baris dan kolomnya -->
        <table>
            <tr>
                <td> Quote From: </td>
                <td> <input class="inputan" type="text" name="periwayat" placeholder="Nama Yang Ngomong" /> </td>
            </tr>
            <tr>
                <td> Quote: </td>
                <td> <input class="inputan" type="text" name="quote" placeholder="Omongannya" > </td>
            </tr>
            <tr>
                <td> &nbsp; </td>
                <td> <input id="submit" type="submit" value="Inputtt" />
            </tr>
        </table>
    </form>
</body>
</html>