<!DOCTYPE>
<html>

<head>

  <meta charset="UTF-8"/>
  
  <title>Popączkowani</title>
  
  <link rel="stylesheet" type="text/css" href="css/donut_css.css"/>
  
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
      
              <?php
            
include 'connection.php';

mysqli_set_charset($link, "utf8");

// Check connection
if ($link -> connect_errno) {
  echo "Failed to connect to MySQL: " . $link -> connect_error;
  exit();
}?>
  <div class="content fade">
  
   <div class="lewy fade">
      
        

        
       <?php
       
       echo " <h1>Masy:</h1>
        <table border='1''>
            <th>Rodzaj masy</th>
            <th>Cena</th>";
       
            $zapytanie = "SELECT `masy`.`Rodzaj`, `masy`.`Cena`
FROM `masy`;";
        
        mysqli_query($link, $zapytanie);
        
                $result = $link->query($zapytanie);
        
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_row()) {
                echo "<tr>";
                
                echo "<td>".$row[0]."</td>";
                echo "<td>".$row[1]."</td>";

                
                echo "</tr>";
                
                
            }
            
              }
       echo "</table>"; 
       
       echo " <h1>Nadzienia:</h1>
        <table border='1''>
            <th>Rodzaj nadzienia</th>
            <th>Cena</th>";
       
            $zapytanie = "SELECT `nadzienia`.`Rodzaj`, `nadzienia`.`Cena`
FROM `nadzienia`;";
        
        mysqli_query($link, $zapytanie);
        
                $result = $link->query($zapytanie);
        
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_row()) {
                echo "<tr>";
                
                echo "<td>".$row[0]."</td>";
                echo "<td>".$row[1]."</td>";

                
                echo "</tr>";
                
                
            }
            
              }
       echo "</table>"; 
       
       echo " <h1>Polewy:</h1>
        <table border='1''>
            <th>Rodzaj polewy</th>
            <th>Cena</th>";
       
            $zapytanie = "SELECT `polewy`.`Rodzaj`, `polewy`.`Cena`
FROM `polewy`;";
        
        mysqli_query($link, $zapytanie);
        
                $result = $link->query($zapytanie);
        
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_row()) {
                echo "<tr>";
                
                echo "<td>".$row[0]."</td>";
                echo "<td>".$row[1]."</td>";

                
                echo "</tr>";
                
                
            }
            
              }
       echo "</table>"; 
       
       
       echo " <h1>Posypki:</h1>
        <table border='1''>
            <th>Rodzaj posypki</th>
            <th>Cena</th>";
       
            $zapytanie = "SELECT `posypki`.`Rodzaj`, `posypki`.`Cena`
FROM `posypki`;";
        
        mysqli_query($link, $zapytanie);
        
                $result = $link->query($zapytanie);
        
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_row()) {
                echo "<tr>";
                
                echo "<td>".$row[0]."</td>";
                echo "<td>".$row[1]."</td>";

                
                echo "</tr>";
                
                
            }
            
              }
       echo "</table>"; 
       
        mysqli_close($link); 
        ?>
        
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
