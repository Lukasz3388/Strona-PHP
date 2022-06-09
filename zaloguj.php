<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$nazwa = $_POST["username"];
$haslo = sha1($_POST["password"]);
// Create connection
$conn = new mysqli($servername, $username, $password,"LukaszKolendaDB");
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM uzytkownik WHERE login = '$nazwa' and password = '$haslo'";
      $result = mysqli_query($conn,$sql);
      $row  = mysqli_fetch_array($result);
      
      if(is_array($row)) {
         
        $_SESSION["id"] = $row['id'];
        $_SESSION["login"] = $nazwa;
        header("Location:index.php");

      }else {
         header("Location:index.php");
      }

$conn->close();
?>