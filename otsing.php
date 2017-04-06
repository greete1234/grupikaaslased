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
 
 <!-- kõigi kirjete näitamine -->  
 <form action='' method='post'>
    <ul>
        <li><?php show_button($conn); ?></li>
    </ul>
    </form>
 
<!-- parameetri järgi otsimine -->
<form action='' method='get'>
    <ul>
       <li>
        <label for="PARAM">Veerg</label>
        <input type="text" name="PARAM" required>           
       </li>
       <li>
        <label for="ID">Väärtus</label>
        <input type="text" name="ID" required>           
       </li>
       <li><?php search_by_button($conn); ?></li> 
    </ul>
</form>       

</body>    
    

<footer> &copy; Greete Raadik MS16 </footer>



</html>