<?php
#awali dengan start session, untuk summon session yang sedang berjalan
session_start();
#menghancurkan session yang tadi di summon
session_destroy();
#setelah dihancurkan, akan mengarah ke halaman login
header("location:index.php");

?>