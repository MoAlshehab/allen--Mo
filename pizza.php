<?php
$aantal="";
$soort="";
if(isset($_POST["submit"])){
$soort= $_POST["soort"];
$aantal= $_POST["aantal"];


}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizza formulier</title>
    <link rel="stylesheet" type="text/css" href="pizza.css">
</head>
<body>

</form>
<div class="b"> <h5> Margherita pizza </h5>
Tomatensaus, mozzarella en met knoflookolie 
op de rand van de pizza. Tip! Ook lekker met oregano.
 <h5>Funghi pizza </h5>
 Tomatensaus, mozzarella, champignons & pizzakruiden
Let op: de beschikbaarheid van producten kan per winkel verschillen.
 <h5>Marina pizza </h5>
 Het beste van twee werelden op één pizza. Bestel de Double 
 tasty en stel je eigen pizza samen. Eén pizza, twee smaken.
 <h5>Hawai pizza </h5>
 Tomatensaus, mozzarella, ham (kalkoen),
  ananas en extra mozzarella en knoflookolie op de rand.
 <h5> Quattro Formaggi pizza </h5>
 Tomatensaus, mozzarella, champignons, parmezaan flakes,
  truffeltapenade, peterselie en knoflookolie op de rand.</div>








<div class="c">
<hr>
<h1> 👇Hier onder mag je je pizza kiezen👇 </h1>
  Welke pizza kies je ? 
 <form method="post" >
<select name="soort">
Welke pizza kies je ? 
        <option value="niks"<?php if($soort=='niks'){ echo "selected";} ?>>Maak uw Keuze</option>
        <option value="Marghrita"<?php if($soort=='Margherita'){ echo "selected";} ?>> Margherita  | €12,50 </option>
        <option value="Funghi"<?php if($soort=='Funghi'){ echo "selected";} ?>>Funghi  | €12,50 </option>
        <option value="Marina"<?php if($soort=='Marina'){ echo "selected";} ?> >Marina |  €13,95 </option>
        <option value="hawai"<?php if($soort=='hawai'){ echo "selected";} ?>>Hawai | €11,50 </option>
        <option value="Quattro Formaggi"<?php if($soort=='Quattro Formaggi'){ echo "selected";} ?> > Quattro Formaggi |€14,50 </option>
</select> 
<form method="post">
 Aantal <select name="aantal">
 <option  value="0"<?php if($aantal=='0'){ echo "selected";} ?>> 0</option>
<option  value="1"<?php if($aantal=='1'){ echo "selected";} ?>> 1</option>
 <option   value="2"<?php if($aantal=='2'){ echo "selected";} ?>> 2</option>
 <option   value="3"<?php if($aantal=='3'){ echo "selected";} ?>> 3</option>
 <option   value="4"<?php if($aantal=='4'){ echo "selected";} ?>> 4</option>
 <option  value="5"<?php if($aantal=='5'){ echo "selected";} ?>> 5</option>
 <br>
 <input type="submit" name="submit" value="Akkoord"/> 
 </select> <br><br> 
 <input type="radio" name="m" id="t"/> <label for="t"> Bezorgen</label> 
     <input type="radio" name="m" id="t1"/> <label for="t1"> Afhalen</label>  
 <br>


</div>
 </form> 

 <div class="a">
    
    <form method="GET">
    
    Naam:<br>
    <input type="text" name="data"  placeholder="Uw naam" required/><br><br> <br> 
    Achternaam:<br>
    <input type="text" name="dat1"  placeholder="Uw achternaam" required/><br><br> <br> 
    Postcode:<br>
    <input type="text" name="dat2"  placeholder="Uw postcode" required/><br><br> <br> 
    Woonplaats:<br>
    <input type="text" name="dat3"  placeholder="Uw plaats" required/><br><br> <br> 
    E-mail:<br>
    <input type="text" name="dat4"/><br><br> <br> 
    Bestellen Datum <br> <input type="date"  name="dat5" />  <br> <br> 

     <input type="checkbox" id="mo"/> <label for="mo"> Wil je een E-mail ontvagen </label><br>
     
     <input type="submit" name="submit" value="Bestellen"/> 
     <input type="submit" name="submit" value="Akkoord"/> 
     </div>
    </form>
    
    <?php
     if(isset($_GET["data"])){
        echo $_GET["data"];
        echo"<br>";
        echo $_GET["dat1"];
        echo"<br>";
         echo $_GET["dat2"];
         echo"<br>";
         echo $_GET["dat3"];
         echo"<br>";
         echo $_GET["dat4"];
         echo"<br>";
         echo $_GET["dat5"];
     
    
    
        }
    
    
    
    
    ?>

 <?php 
 switch($aantal){
    case '0':
        echo  "U moet nog aantal pizza kiezen ";
        break; 
    case '1':
    echo  "U hebt ".$aantal ." keer";
    break; 
  case '2':
    echo  "U hebt ".$aantal ." keer";
 break; 
        
 case '3':
 echo  "U hebt ".$aantal ." keer";
 break; 
            
 case '4':
echo  "U hebt ".$aantal ." keer ";
 break; 
               
 case '5':
 echo "U hebt ".$aantal ." keer";
break; }
?>
<?php
    switch($soort){
        case 'Marghrita':
        echo ' pizza margeritadie kost €12,50';
        break;


    case'Funghi':
        echo " pizza funghi besteld en die kost €12,50";
        break;
   
    case 'Marina':
        echo "  pizza Marian besteld die kost €13,95";
        break;
   case 'hawai':
        echo " pizza Hawai besteld die kost €11,50";
        break;

case 'Quattro Formaggi':
    echo " pizza Quattro Formaggi besteld die kost €14,50";

    break;

    case 'niks':
        echo " Sorry,U moet nog een pizza kiezen ";

        break;
}
?>

</body>
</html>