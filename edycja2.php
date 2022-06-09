<?php
$servername = "localhost";
$username = "root";
$password = "";
// Create connection
$conn = new mysqli($servername, $username, $password,"LukaszKolendaDB");
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$titlearray = array();
$descriptionarray = array();
$photoarray = array();
$i =0;
$sql = "SELECT * FROM wpis";
      $result = mysqli_query($conn,$sql);
      while($row  = $result->fetch_assoc()){
        $titlearray[$i]=$row["Title"];
        $descriptionarray[$i]=$row["Description"];
        $photoarray[$i]=$row["Photo"];
        $i++;
      
      }
?>

<div id="artykul" class="artykul">
<form action="Edytuj.php" method="get" name="edytujphp">
<label style="Color:White" for="gwiazda-select">Wybierz gwiazdę do edytowania:</label>
<select name="Gwiazdy" id="gwiazda-select">
<?php
for($k=0;$k<$i;$k++){
    ?>
    <option value='<?php echo $titlearray[$k] ?>'><?php echo $titlearray[$k] ?></option>
    <?php   
}
?>
</select>
<br/>
<input type="Submit" Value="Edytuj" class="submitedit"/>
</form>
</div>
<?php

$conn -> close();
?>