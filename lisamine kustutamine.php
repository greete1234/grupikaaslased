<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" type="text/css" />
    <title>Grupikaaslased</title>
</head>



<header><h1>Grupikaaslased</h1></header>

<body>

<?php

include 'mysql.php';
include 'menu.php';
require 'functions/function.php';

home();   

?>

<!-- Andmete lisamine -->
 <form action='' method='post'>
   <ul>
        <li>
        <label for="Eesnimi">Eesnimi</label>
        <input type="text" name="Eesnimi" required>
        <label for="Perenimi">Perenimi</label>
        <input type="text" name="Perenimi">
        <label for="Sünniaasta">Sünniaasta</label>
        <input type="text" name="Sünniaasta" required>
        </li>
        <li><?php add_button($conn); ?></li>
    </ul>
    
</form>   
 
<!-- Andmete kustutamine -->   
<form action='' method='post'>
        <ul>
        <li>
        <label for="PARAM">Veerg</label>
        <input type="text" name="PARAM" required>           
        <label for="ID">Sisesta väärtus</label>
        <input type="text" name="ID" required>        
        </li>
        <li><?php delete_button($conn); ?></li>
    </ul>
    </form>
    
    
</body>    
    

<footer> &copy; Greete Raadik MS16 </footer>



</html>