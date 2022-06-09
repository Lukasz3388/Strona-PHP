<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Create database

$sql = "CREATE DATABASE LukaszKolendaDB";
$conn->query($sql);
mysqli_select_db($conn,"LukaszKolendaDB");

//mysqli_select_db($conn,"LukaszKolendaDB");
$sql = "CREATE TABLE wpis 
(id integer primary key NOT NULL AUTO_INCREMENT,
Title Varchar(30),
Description text,
Photo text
);";
$conn->query($sql);
$sql = "CREATE TABLE uzytkownik 
(id integer primary key NOT NULL AUTO_INCREMENT,
Login Varchar(50),
Password Varchar(200)
);";
$conn->query($sql);
$sql = "Insert into wpis Values (NULL,'Gwiazda','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.',
'https://www.urania.edu.pl/sites/default/files/styles/max_1300x800/public/2022-01/Red-Supergiant-scaled.jpg?itok=lS-vhojM')";
$conn->query($sql);
$sql = "Insert into wpis Values (NULL,'Gwiazda nr2','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.',
'https://www.focus.pl/media/cache/default_view/uploads/media/default/0001/39/gwiazda-barnarda-najszybciej-przesuwajaca-sie-gwiazda-po-niebie-co-o-niej-wiemy-fot-esa.jpeg')";
$conn->query($sql);
$conn->close();
?>