<?php

$server = "localhost";
$user = "root";
$pass = "";

$conn = new mysqli($server, $user, $pass);

// Andmebaasist andmete pärimine (kõik korraga)

function my_query($conn){
$sql = "SELECT ID, Eesnimi, Perenimi, Sünniaasta, Pilt, Sisestamise aeg FROM grupp16.kaaslased";
$result = $conn->query($sql);
    
if ($result->num_rows > 0){
    while($row = $result->fetch_assoc()) {
        echo "<br>ID: ".$row["ID"].
              " Eesnimi:  ".$row["Eesnimi"].
              " Perenimi: ".$row["Perenimi"].
              " Sünniaasta: ".$row["Sünniaasta"].
              " Pilt: ".$row["Pilt"].
              " ja Sisestamise aeg: ".$row["Sisestamise aeg"]."<br>";
    }
    
} else {echo "Andmebaas on tühi!";}

}

// Kõigi andmete näitamise nupp
function show_button($conn){
    echo "<input type='submit' name='show' value='Näita kõiki'>";
    if(isset($_POST['show'])){
        my_query($conn);
    }
}


// Andmebaasist otsimine parameetrite järgi
function search_by($conn){
    $sql = "SELECT * FROM grupp16.kaaslased WHERE ".
        $_GET['PARAM']."='".$_GET['ID']."'";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0){
    while($row = $result->fetch_assoc()) {
        echo "<br>ID: ".$row["ID"].
              " Eesnimi:  ".$row["Eesnimi"].
              " Perenimi: ".$row["Perenimi"].
              " Sünniaasta: ".$row["Sünniaasta"].
              " Pilt: ".$row["Pilt"].
              " ja Sisestamise aeg: ".$row["Sisestamise aeg"]."<br>";
    }} else {echo "Sellist kirjet ei ole!";}
}


// Parameetri järgi otsimise nupp
function search_by_button($conn){
    echo "<input type='submit' name='search' value='Otsi parameetri järgi'>";
    if(isset($_GET['search'])){
        if ($_GET['ID']==null OR $_GET['PARAM']==null){
            echo "Palun täida kõik lahtrid!";
        } else {search_by($conn);}
    }
}


// Andmete sisestamine
function my_insert($conn){
    
    if ($_POST['Eesnimi']==null OR $_POST['Perenimi']==null ){
        
    echo "Eesnimi ja perenimi on kohustuslikud"; } else {
    $sql = "INSERT INTO grupp16.kaaslased (Eesnimi, Perenimi, Sünniaasta) VALUES('".
        $_POST['Eesnimi']."','".
        $_POST['Perenimi']."','".
        $_POST['Sünniaasta']."')";
        htmlspecialchars($sql);
        $result = $conn->query($sql);
     }
}

// Andmete sisestamise nupp
function add_button($conn){
    echo "<input type='submit' name='add' value='Lisa kirje'>";
    if(isset($_POST['add'])){
        my_insert($conn);
    }
}

// Andmete kustutamine
function my_delete($conn){
    $sql = "DELETE FROM grupp16.kaaslased WHERE ".
        $_POST['PARAM']."='".$_POST['ID']."'";
    $result = $conn->query($sql);
}

// Andmete kustutamise nupp
function delete_button($conn){
    echo "<input type='submit' name='delete' value='Kustuta kirje'>";
    if(isset($_POST['delete'])){
        my_delete($conn);
    }
}

function my_close($conn){
$conn->close();
    
}

?>