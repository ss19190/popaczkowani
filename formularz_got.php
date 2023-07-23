<?php
session_start();
?>

<!DOCTYPE>
<html lang="pl">

<head>

  <meta charset="UTF-8">
  
  <title>Popączkowani</title>
  
  <link rel="stylesheet" type="text/css" href="css/formularz_css.css"/>
    <script src="js.js"></script>
  
  
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <!--Favicon w ikonie strony-->

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">
  <link rel="icon" type="image/png" sizes="16x16"  href="pics/favicon-16x16.png">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="theme-color" content="#ffffff">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap" rel="stylesheet">
  
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">

    
<?php

include 'connection.php';


?>
    
</head>

<body>

    
    <?php
    
        $id_paczka;
    
        switch($_POST['paczek']){
            case 'hiszpanski':
                $id_paczka = 1;
                break;
                
                case 'holenderski':
                $id_paczka = 2;
                break;
                
                case 'berlinski':
                $id_paczka = 3;
                break;
                
                case 'bi':
                $id_paczka = 4;
                break;
                
                case 'gy':
                $id_paczka = 5;
                break;
                
                case 'lesb':
                $id_paczka = 6;
                break;
                
                case 'pan':
                $id_paczka = 7;
                break;
                
                case 'trans':
                $id_paczka = 8;
                break;
                
                case 'tecza':
                $id_paczka = 9;
                break;
                
        }
    
    $_SESSION["idpaczka"] = $id_paczka;

       ?>



  <div class="website">
  
  <div class="baner">
  
  <img id="logo" src="pics/logo.png">
  
  </div>
  
  <div class="menu">
    
	<ul>
       <li><a href="index.html" class="element">Strona Główna</a></li>
	   <li><a href="donut_maker.html" class="element">Donut Maker</a></li>
	   <li><a href="menu.html" class="element">Menu</a></li>
	   <li><a href="kontakt.html" class="element">Kontakt</a></li>
	   <li><a href="o_nas.html" class="element">O Nas</a></li>
	</ul>
	   
  </div>
  
  <div class="content fade">
  
   <form class="zamowienie" method="POST" action="koniec_got.php">
    
       <h1>Podaj informacje do złożenia zamówienia</h1>
       
       Imię:<br/> <input type="text" name="imie" required><br/><br/>
       Nazwisko:<br/> <input type="text" name="nazwisko" required><br/><br/>
       Adres e-mail:<br/> <input type="email" name="adres_email" required><br/><br/>
       Numer telefonu {123456789}:<br/> <input type="tel" name="numer_tel" pattern="[0-9]{9}" required><br/><br/>
       Podaj datę odbioru zamówienia: <br/> <input type="date" name="data" id="data" required><br/><br/>
       Podaj godzinę odbioru zamówienia: <br/> <input type="time" name="czas" min="9:30" max="20:30" required> <br/><br/>
       Podaj ilość tych pączków: <br/> <input type="number" name="ilosc" required min="1" value="1"><br/><br/>
       Wybierz piekarnię do odbioru zamówienia:<br/><br/>

       <input type="radio" name="miasto" checked="checked" value="sosnowiec">Sosnowiec<br/><br/>
       <input type="radio" name="miasto" value="dabrowa">Dąbrowa Górnicza<br/><br/>
       <input type="radio" name="miasto" value="grodziec">Grodziec<br/><br/>
       <input type="radio" name="miasto" value="katowice">Katowice<br/><br/>
       <input type="radio" name="miasto" value="myslowice">Mysłowice<br/><br/>
       <input type="radio" name="miasto" value="czestochowa">Częstochowa<br/><br/>
       <input type="radio" name="miasto" value="gliwice">Gliwice<br/><br/>
       <input type="radio" name="miasto" value="zabrze">Zabrze<br/><br/>
       <input type="radio" name="miasto" value="rybnik">Rybnik
       <br/><br/>
       <button type="submit" class="button1">Złóż zamówienie</button>&nbsp;&nbsp;&nbsp;
	<button type="reset" class="button1">Wyczyść dane</button>
      
    </form>
  
  <div class="footer">
      
      <div class="godziny">
        <h3>Godziny otwarcia</h3> 
      <p> Poniedziałek - Piątek : 8<sup>00</sup> - 22.00<sup>00</sup> </p>
        <p> Sobota : 9<sup>30</sup> - 20<sup>30</sup> </p>
        <p> Niedziela : Nieczynne</p>
      
      </div>
      
      <div class="info">
        <h3>Informacje kontaktowe</h3> 
      <p>SNJ Sp.z o.o <br/>
          ul. Jagiellońska 100
          43-432 Sosnowiec
          </p>
      <p>Numer tel. : 544 789 006</p>
      <p>adres e-mail: popaczkowani.donuty@gmail.com</p>
      </div>
      
  </div>
 
  </div>
    </div>
    
    <script>
        
 window.onbeforeunload = function () {
  return 'Are you really want to perform the action?';}
    </script>
    
<?php mysqli_close($link); ?>
    
    
</body>
    


</html>

