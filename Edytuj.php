<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="jquery.min.js"></script>

    <title>Star</title>
</head>
<?php
   session_start(); 
   
?>
<body>
    <div class="grid">
        <div class="box boxpaski"> 
            
        </div>
        <div class="box box1">
            <p onclick="window.location.href='index.php'" class="glowny_napis"> 
            KATALOG GWIAZD
            </p>
        </div>
        <div class="box boxpaski">
            <br/>
            <?php
            if(isset($_SESSION['login'])){
            echo $_SESSION['login'];
            ?>
            
            <br/>
            <button onclick="window.location.href='wyloguj.php'">Wyloguj</button>
            <?php
            }else{
                header("Location:index.php");
            }
            ?>
  
    </div>
    <?php

$servername = "localhost";
$username = "root";
$password = "";
$idzmiany = $_GET["Gwiazdy"];


// Create connection
$conn = new mysqli($servername, $username, $password,"LukaszKolendaDB");
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM wpis WHERE Title='$idzmiany'";
$conn->query($sql);
$result = mysqli_query($conn,$sql);
      $row  = mysqli_fetch_array($result);
      
      if(is_array($row)) {
         
        $tytul = $row['Title'];
        $opis = $row['Description'];
        $zdjoncko = $row['Photo'];

      }else {
         header("Location:index.php");
      }


    ?>
    <div id="artykul" class="artykul">
<center>
    <form method="Post" action="edytujusun2.php" id="usrform">

         <p id="tytul_art1" style="Color:White" class="tytul_art"><?php echo $tytul ?></p>
         <input type="text" name="tytul_art" id="tytul_art" hidden="true" value="<?php echo $tytul ?>">

         <textarea name="opis"><?php echo $opis ?></textarea></br>

         URL obrazka: <input type="text" style="Color:Black" name="obrazek" value="<?php echo $zdjoncko ?>" id="tytul_art"></br></br>
         <button type="Submit" name="action" Value="Update" class="submitedit">Zapisz</button> 
         <button type="Submit" name="action" Value="Delete" class="submitedit">Usuń</button>
</form>
</center>
</div>
<div>
    <br/>
    <br/>
    <br/>
<img id="zdj1" src='<?php echo $zdjoncko ?>'/>
    </div>
    </div>
</body>
<?php
$conn -> close();
?>