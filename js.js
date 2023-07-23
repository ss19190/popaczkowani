
var cena
var cena_masy = 4.99;
var cena_nadzienia = 0.00;
var cena_polewy = 0.00;
var cena_posypki = 0.00;

function zmianaCeny(){
    cena = cena_masy + cena_nadzienia + cena_polewy + cena_posypki;
    var cena_p = document.getElementById("cena_id");
    cena_p.value = cena;
    
}

function zmianaMasy()
 {
       var old_elem = document.getElementById("donut_masa");
       var new_elem = document.createElement("img");

     var masa = document.querySelector('input[name="masa"]:checked').value;
     
     switch(masa){
         case "tradycyjna": 
             new_elem.src = "pics/masa zwykla.png";
             cena_masy = 4.99;
             break;
             
         case "kakaowa":
             new_elem.src = "pics/masa czekolada.png";
             cena_masy = 5.99;
             break;
             
         case "dyniowa":
             new_elem.src = "pics/masa dynia.png";
             cena_masy = 7.99;
             break;
             
         case "wege":
             new_elem.src = "pics/masa vege.png";
             cena_masy = 9.99;
             break;
     }
     
  old_elem.replaceWith(new_elem);
      new_elem.setAttribute("id","donut_masa")
     
     zmianaCeny();
     
 }

function zmianaPolewy(){
    var old_elem = document.getElementById("donut_polewa");
  
  var new_elem = document.createElement("img");
     
     var polewa = document.querySelector('input[name="wierzch"]:checked').value;
     
     switch(polewa){
         case "brak": 
             new_elem.removeAttribute("src");
             cena_polewy = 0.00;
             break;
             
         case "cukier_puder":
             new_elem.src = "pics/polewa2.png";
             cena_polewy = 0.99;
             break;
             
         case "lukier":
             new_elem.src = "pics/polewa3.png";
             cena_polewy = 1.99;
             break;
             
         case "czekolada":
             new_elem.src = "pics/polewa4.png";
             cena_polewy = 3.99;
             break;
             
             case "wisnia":
             cena_polewy = 2.99;
             new_elem.src = "pics/polewa5.png";
             break;
     }
     
  old_elem.replaceWith(new_elem);
      new_elem.setAttribute("id","donut_polewa")
     new_elem.setAttribute("class","donut_absolute")
    zmianaCeny();
}

function zmianaNadzienia(){
    var old_elem = document.getElementById("donut_nadzienie");
  
  var new_elem = document.createElement("img");
     
     var nadzienie = document.querySelector('input[name="nadzienie"]:checked').value;
     
     switch(nadzienie){
             
         case "brak":
             new_elem.removeAttribute("src");
             cena_nadzienia = 0.00;
             break;
             
         case "czekolada": 
             new_elem.src = "pics/czekolada.png";
             cena_nadzienia = 1.99;
             break;
             
         case "roza":
             new_elem.src = "pics/rozaowoc.png";
             cena_nadzienia = 3.99;
             break;
             
         case "dzem_truskawka":
             new_elem.src = "pics/truskawka.png";
             cena_nadzienia = 2.99;
             break;

             case "dzem_wisnia":
             new_elem.src = "pics/wisnia.png";
             cena_nadzienia = 5.99;
             break;
             
         case "banan":
             new_elem.src = "pics/banan.png";
             cena_nadzienia = 1.99;
             break;
             
         case "dynia":
             new_elem.src = "pics/dynia.png";
             cena_nadzienia = 2.99;
             break;
     }
     
  old_elem.replaceWith(new_elem);
      new_elem.setAttribute("id","donut_nadzienie")
    zmianaCeny();
}


function zmianaPosypki(){
    var old_elem = document.getElementById("donut_posypka");
  
  var new_elem = document.createElement("img");
     
     var posypka = document.querySelector('input[name="posypka"]:checked').value;
     
     switch(posypka){
             
             case "brak":
             new_elem.removeAttribute("src");
             cena_posypki = 0.00;
             break;
             
         case "skorka": 
             new_elem.src = "pics/skorkapomaranczy.png";
             cena_posypki = 5.99;
             break;
             
         case "wiorki_czekolada":
             new_elem.src = "pics/wiorkiczekoladowe.png";
             cena_posypki = 2.99;
             break;
             
         case "wiorki_kokos":
             new_elem.src = "pics/wiorkikokosowe.png";
             cena_posypki = 1.99;
             break;

             case "orzeszki":
             new_elem.src = "pics/orzeszki.png";
             cena_posypki = 2.99;
             break;
             
             case "teczowa":
             new_elem.src = "pics/teczarender.png";
             cena_posypki = 0.01;
             break;
     }
     
  old_elem.replaceWith(new_elem);
      new_elem.setAttribute("id","donut_posypka")
    zmianaCeny();
}

function dodanieVege(){
    
       var old_elem = document.getElementById("donut_vege");
       var new_elem = document.createElement("img");
  
     
     var masa = document.querySelector('input[name="masa"]:checked').value;
     
     switch(masa){
         case "tradycyjna": 
             new_elem.removeAttribute("src");
             break;
             
         case "kakaowa":
             new_elem.removeAttribute("src");
             break;
             
         case "dyniowa":
             new_elem.removeAttribute("src");
             break;
             
         case "wege":
             new_elem.src = "pics/vegan.png"
             break;
     }
    
     old_elem.replaceWith(new_elem);
     new_elem.setAttribute("id", "donut_vege");

}
