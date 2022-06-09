<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="jquery.min.js"></script>
    <script src="js.js"></script>
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

            ?>
            <br/>
        <button onclick="zaloguj()">Logowanie</button>
        <?php
            }
            ?>
            
        </div>
        <div id="reload_page">
        
    </div>
    </div>
    <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
    <?php
    if(isset($_SESSION['login'])){
        ?>
    <button onclick="edytuj(1)" class="edycja" >Nowy</button>
    <button onclick="edytuj(0)" class="edycja" Style="left:120px" >Edytuj</button>
    <?php
    }
    ?>
</body>
<script>
        function zaloguj(){
            getData('reload_page','logowanie.html');
        }

        
        function edytuj(k){
            if(k==0){
            getData('reload_page','edycja2.php');
            }else if(k==1){
            getData('reload_page','dodajelemhtml.php');
            }
            topFunction();
            
        } 
    buttonclick=document.getElementById("myBtn");
    window.onscroll=function(){scrollFunction()};
    function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    buttonclick.style.display = "block";
  } else {
    buttonclick.style.display = "none";
  }
}
function topFunction() {
    document.documentElement.scrollTop = 0;
}   

function ValidateEmail(input) {

var validRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;

if (input.value.match(validRegex)) {

  //alert("Valid email address!");

  document.form1.username.focus();

  return true;

} else {

  alert("Złe dane logowania");

  document.form1.username.focus();

  return false;
}}


</script>
</html>