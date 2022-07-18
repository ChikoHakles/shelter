<!doctype html>
<html>
<head>
    <!-- judul, decoder, viewport, dan stylesheet -->
    <title> Pendaftaran Akun Member </title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../style/register-shelter.css" />
</head>
<body>
    <div id="card">
        <!-- buat image, judul form, dan form yang akan mengeksekusi input-akun-shelter.php saat di klik -->
        <img id="form-image" src="../picture/ujung-perpus.jpg" />
        <div id="form-content">
            <div id="judul">
                <h2> REGISTER <br> SHELTER </h2>
                <div class="garis-judul"> </div>
            </div>
            <form id="form" method="post" action="input-akun-shelter.php">
            
                <label> &nbsp;Username </label>
                <br>
                <input class="inputan" name="username" type="text" />
                <div class="garis-form"> </div>
                <br>
                
                <label> &nbsp;Password </label>
                <br>
                <input class="inputan" name="pass1" type="password" />
                <div class="garis-form"> </div>
                <br>
                
                <label> &nbsp;Ulangi Password </label>
                <br>
                <input class="inputan" name="pass2" type="password" />
                <div class="garis-form"> </div>
                <br>
                    
                <input id="submit" type="submit" value="DAFTAR" />
                
                <h3 id="login"> <a href="login-shelter.php"> LOGIN DISINI </a> </h3>
            </form>
        </div>
    </div>
</body>
</html>