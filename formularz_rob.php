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

    
		$masa;
		$nadzienie;
		$polewa;
		$posypka;
		$cena = $_POST['cena'];
       
		switch($_POST['masa']){
				case "tradycyjna":
				$masa = 1;
				break;
				
				case "kakaowa":
				$masa = 2;
				break;
				
				case "dyniowa":
				$masa = 3;
				break;
				
				case "wege":
				$masa = 4;
				break;
		}
		
		switch($_POST['nadzienie']){
			case "brak":
			$nadzienie = 1;
			break;
			
			case "czekolada":
			$nadzienie = 2;
			break;
			
			case "roza":
			$nadzienie = 3;
			break;
			
			case "dzem_truskawka":
			$nadzienie = 4;
			break;
			
			case "dzem_wisnia":
			$nadzienie = 5;
			break;
                
            case "banan":
                $nadzienie = 6;
                break;
                
            case "dynia":
                $nadzienie = 7;
                break;
		}
		
		switch($_POST['wierzch']){
			case "brak":
			$polewa = 1;
			break;
			
			case "cukier_puder":
			$polewa = 2;
			break;
			
			case "lukier":
			$polewa = 3;
			break;
			
			case "czekolada":
			$polewa = 4;
			break;
			
			case "wisnia":
			$polewa = 5;
			break;
		}
		
		switch($_POST['posypka']){
			case "brak":
			$posypka = 1;
			break;
			
			case "skorka":
			$posypka = 2;
			break;
			
			case "wiorki_czekolada":
			$posypka = 3;
			break;
			
			case "wiorki_kokos":
			$posypka = 4;
			break;
			
			case "orzeszki":
			$posypka = 5;
			break;
			
			case "teczowa":
			$posypka = 6;
			break;
		}
      	
       
		$zapytanie = "INSERT INTO robione_paczki VALUES ('','$masa', '$nadzienie', '$polewa', '$posypka', '$cena')";

       $pytanie = mysqli_query($link, $zapytanie);

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
  
   <form class="zamowienie" method="POST" action="koniec_rob.php">
    
       <h1>Podaj informacje do złożenia zamówienia</h1>
       
       Imię:<br/> <input type="text" name="imie" required><br/><br/>
       Nazwisko:<br/> <input type="text" name="nazwisko" required><br/><br/>
       Adres e-mail:<br/> <input type="email" name="adres_email" required><br/><br/>
       Numer telefonu {123456789}:<br/> <input type="tel" name="numer_tel" pattern="[0-9]{9}" required><br/><br/>
       Podaj datę odbioru zamówienia: <br/> <input type="date" name="data" id="data" required><br/><br/>
       Podaj godzinę odbioru zamówienia: <br/> <input type="time" name="czas" min="9:30" max="20:30" required> <br/><br/>
       Podaj ilość tych pączków: <br/> <input type="number" name="ilosc" required min="1" value="1"><br/><br/>
       Wybierz piekarnię do odbioru zamówienia:<br/><br/>

       <input type="radio" name="miasto" checked="checked" value="sosnowiec">Sosnowiec, ul. Żabia 15<br/><br/>
       <input type="radio" name="miasto" value="dabrowa">Dąbrowa Górnicza, ul. Cytrynowa 3<br/><br/>
       <input type="radio" name="miasto" value="grodziec">Grodziec, ul. Konopnicka 13<br/><br/>
       <input type="radio" name="miasto" value="katowice">Katowice, ul. Koperkowa 34<br/><br/>
       <input type="radio" name="miasto" value="myslowice">Mysłowice, ul. Miodowa 1<br/><br/>
       <input type="radio" name="miasto" value="czestochowa">Częstochowa, ul. Waszkowa 23<br/><br/>
       <input type="radio" name="miasto" value="gliwice">Gliwice, ul. Białucha 35<br/><br/>
       <input type="radio" name="miasto" value="zabrze">Zabrze, ul. Imbirowa 138<br/><br/>
       <input type="radio" name="miasto" value="rybnik">Rybnik, ul. Szewczykowa 1
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

