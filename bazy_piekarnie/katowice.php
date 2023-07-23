<!DOCTYPE>
<html>

<head>

  <meta charset="UTF-8"/>
  
  <title>Popączkowani</title>
  
  <link rel="stylesheet" type="text/css" href="../css/donut_css.css"/>
  
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

</head>

<body>

  <div class="website">
  
      <div class="baner">
  
  <img id="logo" src="../pics/logo.png">
  
  </div>
        <div class="menu">
    
	<ul>
       <li><a href="../index.html" class="element">Strona Główna</a></li>
	   <li><a href="../donut_maker.html" class="element">Donut Maker</a></li>
	   <li><a href="../menu.html" class="element">Menu</a></li>
	   <li><a href="../kontakt.html" class="element">Kontakt</a></li>
	   <li><a href="../o_nas.html" class="element">O Nas</a></li>
	</ul>
	   
  </div>
      
      
  <div class="content fade">
  
   <div class="lewy fade">
       <p>Kliknij <a href="../robione_paczki_spis.php" target="_blank">tutaj</a> aby zobaczyć szczegóły wykonania pączków.</p>
       <p>Kliknij <a href="katowice_data.php" target="_self">tutaj</a> aby wyszukać zamówienia według daty.</p>
       <p>Pusta ramka oznacza brak wybranego pączka</p>
        <table border="1">
            <th>ID Zamówienia</th>
            <th>Data odbioru</th>
            <th>Godzina odbioru</th>
            <th>Imię</th>
            <th>Nazwisko</th>
            <th>ID robionego pączka</th>
            <th>Rodzaj gotowego pączka</th>
            <th>Ilość</th>
            <th>Koszt</th>
        
        <?php
            
include '../connection.php';

mysqli_set_charset($link, "utf8");

// Check connection
if ($link -> connect_errno) {
  echo "Failed to connect to MySQL: " . $link -> connect_error;
  exit();
}
        
        $zapytanie = "SELECT `zamowienia`.`ID`, `zamowienia`.`Data_zamowienia`, `zamowienia`.`Godz_zamowienia`, `klienci`.`Imie`, `klienci`.`Nazwisko`,
        IF(`zamowienia`.`IDPaczka_rob` IS NOT NULL, `zamowienia`.`IDPaczka_rob`, '') AS warunek1,
        IF(`zamowienia`.`IDPaczka_got` IS NOT NULL, `gotowe_paczki`.`Rodzaj_paczka`, '') AS warunek2
        , `zamowienia`.`Ilosc`, `zamowienia`.`Koszt`
        FROM `zamowienia` INNER JOIN `klienci` ON zamowienia.IDKlienta = klienci.ID LEFT JOIN `gotowe_paczki` ON `zamowienia`.`IDPaczka_got` = `gotowe_paczki`.`ID`
        WHERE `zamowienia`.`IDPiekarni` = '4';";
        
        mysqli_query($link, $zapytanie);
        
                $result = $link->query($zapytanie);
        
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_row()) {
                echo "<tr>";
                
                echo "<td>".$row[0]."</td>";
                echo "<td>".$row[1]."</td>";
                echo "<td>".$row[2]."</td>";
                echo "<td>".$row[3]."</td>";
                echo "<td>".$row[4]."</td>";
                echo "<td>".$row[5]."</td>";
                echo "<td>".$row[6]."</td>";
                echo "<td>".$row[7]."</td>";
                echo "<td>".$row[8]."</td>";
                
                echo "</tr>";
            }
              }
        
        mysqli_close($link); 
        ?>
        </table>
   </div>
        
       
   </div>
  
    
      
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

</body>
</html>
