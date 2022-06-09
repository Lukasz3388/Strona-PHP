<?php
$servername = "localhost";
$username = "root";
$password = "";
$opis = $_POST["opis"];
$tytul = $_POST["tytul_art"];
$obrazek = $_POST["obrazek"];
// Create connection
$conn = new mysqli($servername, $username, $password,"LukaszKolendaDB");
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "Insert into wpis Values (NULL,'$tytul','$opis','$obrazek')";
$conn->query($sql);
$conn -> close();
header("Location: index.php");
?>