<?php
$servername = "localhost";
$username = "root";
$password = "";
$opis = $_POST["opis"];
$tytul = $_POST["tytul_art"];
$obrazek = $_POST["obrazek"];
$action = $_POST["action"];
// Create connection
$conn = new mysqli($servername, $username, $password,"LukaszKolendaDB");
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
if($action=="Delete"){
    $sql = "DELETE FROM wpis WHERE title='$tytul'";
}else if($action=="Update"){
    $sql = "UPDATE wpis 
    SET Description = '$opis',
    Photo = '$obrazek'
    WHERE Title = '$tytul'";
}
$conn->query($sql);
$conn -> close();
header("Location: index.php");
?>