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

$sql = "SELECT * FROM wpis";
      $result = mysqli_query($conn,$sql);
      while($row  = $result->fetch_assoc()){

      
      
?>
<div id="box1" class="box box3 boxx">
<p class="tekst"> 
    <h1>
    <?php
    echo $row["Title"];
    ?>
    </h1>
    <?php
    echo "<br/>";
    echo "<br/>";
    echo $row["Description"];
    ?>
</p>
      </div>
<div id="box1" >
    <img id="zdj1" src='<?php echo $row["Photo"]; ?>'/>
</div>
<?php
}
$conn -> close();
?>