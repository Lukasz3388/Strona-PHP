<?php
$servername = "localhost";
$username = "root";
$password = "";
$nazwa = $_POST["Rusername"];
$haslo = sha1($_POST["Rpassword"]);
// Create connection
$conn = new mysqli($servername, $username, $password,"LukaszKolendaDB");
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "Insert into uzytkownik Values (NULL,'$nazwa','$haslo')";
$conn->query($sql);

header("Location: index.php");
?>