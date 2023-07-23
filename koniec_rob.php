<!DOCTYPE>
<html lang="pl">

<head>

  <meta charset="UTF-8"/>
  
  <title>Popączkowani</title>
  
  <link rel="stylesheet" type="text/css" href="css/donut_css.css"/>
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
      <div class="lewy fade">
        <h1>Dziękujemy za złożenie zamówienia!</h1>
          <h2>Podsumowanie zamówienia: </h2>
          <h3>Zamówiony pączek:</h3>
            <?php
      
      $imie = $_POST['imie'];
      $nazwisko = $_POST['nazwisko'];
      $adres_email = $_POST['adres_email'];
      $numer_tel = $_POST['numer_tel'];
      $data = $_POST['data'];
      $czas = $_POST['czas'];
      $piekarnia = $_POST['miasto'];
      $ilosc = $_POST['ilosc'];
      
      switch($piekarnia){
          case "sosnowiec":
              $piekarnia = 1;
              break;
              case "dabrowa":
              $piekarnia = 2;
              break;
              case "grodziec":
              $piekarnia = 3;
              break;
              case "katowice":
              $piekarnia = 4;
              break;
              case "myslowice":
              $piekarnia = 5;
              break;
              case "czestochowa":
              $piekarnia = 6;
              break;
              case "gliwice":
              $piekarnia = 7;
              break;
              case "gliwice":
              $piekarnia = 8;
              break;
              case "zabrze":
              $piekarnia = 9;
              break;
      }
      
      $zapytanie = "INSERT INTO klienci(Imie, Nazwisko, Numer_tel, Adres_email) VALUES ('$imie', '$nazwisko', '$numer_tel', '$adres_email')";
      
      mysqli_query($link, $zapytanie);
      
      $klient;
          
          $sql = "SELECT * FROM klienci";
        $result = $link->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_row()) {
                 $klient = $row[0];
            }
              }

      
      $paczek;
      $cena;
          
          $sql = "SELECT * FROM robione_paczki";
        $result = $link->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_row()) {
                 $paczek = $row[0];
                $cena = $row[5];
            }
              }
      
      $koszt = $cena * $ilosc;
          
      $zapytanie = "INSERT INTO zamowienia(IDKlienta, IDPiekarni, IDPaczka_rob, Ilosc, Data_zamowienia, Godz_zamowienia, Koszt) VALUES ('$klient', '$piekarnia', '$paczek', '$ilosc', '$data', '$czas', '$koszt')";
      
      mysqli_query($link, $zapytanie);
          $masa;
          $nadziesnie;
          $polewa;
          $posypka;
          
          $masaID;
          $nadzienieID;
          $polewaID;
          $posypkaID;
          
          $sql = "SELECT * FROM robione_paczki WHERE ID = $paczek";
        $result = $link->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_row()) {
                 $masaID = $row[1];
                $nadzienieID = $row[2];
                $polewaID = $row[3];
                $posypkaID = $row[4];
            }
              }
          
          $sql = "SELECT rodzaj FROM masy WHERE ID = $masaID";
        $result = $link->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_row()) {
                 $masa = $row[0];
            }
              }
          
          $sql = "SELECT rodzaj FROM nadzienia WHERE ID = $nadzienieID";
        $result = $link->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_row()) {
                 $nadzienie = $row[0];
            }
              }
          
          $sql = "SELECT rodzaj FROM posypki WHERE ID = $posypkaID";
        $result = $link->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_row()) {
                 $posypka = $row[0];
            }
              }
   
          $sql = "SELECT rodzaj FROM polewy WHERE ID = $polewaID";
        $result = $link->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_row()) {
                 $polewa = $row[0];
            }
              }
          
          echo "<p>Masa: ".$masa."<p/>";
          echo "<p>Nadzienie: ".$nadzienie."<p/>";
          echo "<p>Polewa: ".$polewa."<p/>";
          echo "<p>Posypka: ".$posypka."<p/>";
          echo "<p>Cena za pączka: ".$cena." zł<p/><br/><br/>";
          
          $imie;
          $nazwisko;
          $numer_tel;
          $email;
          
          $sql = "SELECT * FROM klienci WHERE ID = $klient";
        $result = $link->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_row()) {
                 $imie = $row[1];
                $nazwisko = $row[2];
                $numer_tel = $row[3];
                $email = $row[4];
            }
              }
          
          echo "<h3>Twoje dane: </h3>";
          echo "<p>Imię: ".$imie."</p>";
          echo "<p>Nazwisko: ".$nazwisko."</p>";
          echo "<p>Numer telefonu: ".$numer_tel."</p>";
          echo "<p>Adres e-mail: ".$email."</p><br/><br/>";
          
          $piekarnia_miasto;
          $piekarnia_ulica;
          
          $sql = "SELECT * FROM piekarnie WHERE ID = $piekarnia";
        $result = $link->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_row()) {
                 $piekarnia_miasto = $row[1];
                $piekarnia_ulica = $row[2];
            }
              }
          
          echo "<h3>Szczegóły odbioru: </h3>";
          echo "<p>Data odbioru: ".$data."</p>";
          echo "<p>Czas odbioru: ".$czas."</p>";
          echo "<p>Adres placówki: ".$piekarnia_miasto.", ".$piekarnia_ulica."</p>";
          echo "<p>Ilość zamówionych pączków tego typu: ".$ilosc."</p>";
          echo "<p>Koszt zamówienia: ".$koszt." zł</p>";
          
          $numerzamowienia;
          
          $sql = "SELECT * FROM zamowienia;";
        $result = $link->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_row()) {
                 $numerzamowienia = $row[0];
            }
              }
          
          
          echo "<h3>Numer twojego zamówienia: ".$numerzamowienia."</h3>";
       ?>
      </div>
   
  
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
</body>
    
<?php mysqli_close($link); ?>

</html>