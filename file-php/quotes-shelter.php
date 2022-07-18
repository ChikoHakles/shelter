<html>
    <?php
        #bikin variabel buat menyimpan array berisi nama file stylesheet
        $arrpage = array("../style/quotes-beach.css", "../style/quotes-mercusuar.css", "../style/quotes-animis.css", "../style/quotes-leaves.css");
        #variabel buat memilih satu diantara array $arrpage
        $page = array_rand($arrpage, 1);
    ?>
<head>
    <title> QUOTES SHELTER </title>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="<?php echo $arrpage[$page];?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>
<?php
    #memunculkan file header
    include "header.php";
    
    #buat connect dan query (agar terlihat rapi saat eksekusi mysqli_query)
    $connect = mysqli_connect('localhost', 'root', '', 'db_akun_shelter');
    #ambil 1 dari tabel quotes secara random
    $query = "SELECT * FROM quotes ORDER BY RAND() LIMIT 1";
    $ambil = mysqli_query($connect, $query);
    #tampilkan query yang diambil tadi
    $tampil = mysqli_fetch_array($ambil);
?>
<body>
    <!-- kerangka utama file, mau apapun stylesheet yang terpilih, insya Allah lancar karena kerangkanya sama -->
    <div id="wrapper">
        <div id="pemanis"> </div>
        <h1 id="quote"> "<?php echo $tampil['quote']; ?>" </h1>
        <h3 id="periwayat"> ~ <?php echo $tampil['periwayat']; ?> ~ </h3>
    </div>
    <form> <button onclick="quotes-shelter.php"> QUOTES LAIN </button> </form>
</body>
</html>