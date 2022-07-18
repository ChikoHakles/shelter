<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
    * {
    box-sizing: border-box;
    font-family: Arial, Helvetica, sans-serif;
    }
    
    body {
    display: grid;
    margin: 0;
    font-family: Arial, Helvetica, sans-serif;
    height: auto;
    }
    
    /* Style the top navigation bar */
    .topnav {
    overflow: hidden;
    background-color: #333;
    position: relative;
    height: auto;
    grid-template-columns: 75% 25%;
    }
    
    /* Style the topnav links */
    .topnav a {
    float: left;
    display: block;
    color: #f2f2f2;
    text-align: center;
    padding: 24px 16px;
    text-decoration: none;
    grid-column: 1/2;
    }
    
    /* Change color on hover */
    .topnav a:hover {
    background-color: #00b300;
    color: black;
    }
    
    /* Style the content */
    .content {
    padding: 10px;
    position: relative;
    min-height: 100%;
    }
    
    .topnav h4 {
        float: right;
        margin-top: 23px;
        margin-right: 20px;
        margin-bottom: 10px;
        font-family: "arial", sans-serif;
        color: white;
        grid-column: 2/3;
    }
    
    </style>
</head>
<?php
    session_start();
    include "loading.html";
    if(!$_SESSION['username']) {
        header("location:index.php");
    }
    function disableButton(){
        if ($_SESSION['level'] != 'momod'){
            echo 'title="Fitur ini hanya untuk admin :ehe:"';
            echo 'disabled';
        }  
    }
?>
<body>

<div class="topnav">
    <a href="index.php"> HOME </a>
    <a href="pengunjung-shelter.php">TAMBAH DATA</a>
    <a href="tabel-data-shelter.php">TABEL DATA</a>
    <a href="quotes-shelter.php"> QUOTES </a>
    <a href="logout-shelter.php" onclick="javascript: alert('Kamu Akan Logout!');">LOG OUT</a>
    <h4> <?php echo $_SESSION['username']; ?> </h4>
</div>

</body>
</html>
