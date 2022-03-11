<?php
$pizzamargherita = $_POST['pizzamargherita'];
$pizzafunghi = $_POST['pizzafunghi'];
$pizzamarina = $_POST['pizzamarina'];
$pizzahawai = $_POST['pizzahawai'];
$pizzaquattroformaggi = $_POST['pizzaquattroformaggi'];
$naam = $_POST['naam'];
$adres = $_POST['adres'];
$postcode = $_POST['postcode'];
$plaats = $_POST['plaats'];
$besteldatum = $_POST['besteldatum'];
$margheritaprijs = 12.50;
$funghiprijs = 12.50;
$marinaprijs = 13.95;
$hawaiprijs = 11.50;
$quattroformaggiprijs = 14.50;
$totaalbedrag = 0;
$bezorgkosten = 0;
$bezorgkeuze = $_POST['bezorgkeuze'];
if($bezorgkeuze=="bezorgen"){
    $bezorgkosten = 5;
}
$timestamp = strtotime($besteldatum);
    $day = date('l', $timestamp);
if($day == "Monday"){
$margheritaprijs = 7.5;
$funghiprijs = 7.5;
$marinaprijs = 7.5;
$hawaiprijs = 7.5;
$quattroformaggiprijs = 7.5;
}
?>

<html>
    <body>
</div>
<div class="menu">
    <form method="post" action="adres.php">
    <label for="pizzamargherita">Pizza Margherita  12,50</label>
    <input type="number" id="html" name="pizzamargherita" value="0" min="0"><br><br>
    <label for="pizzafunghi ">Pizza Funghi   12,50</label>
    <input type="number" id="html" name="pizzafunghi" value="0" min="0"><br><br>
    <label for="pizzamarina">Pizza Marina  13,95</label>
    <input type="number" id="html" name="pizzamarina" value="0" mi n="0"><br><br>
    <label for="pizzahawai">Pizza  Hawai  11,50</label>
    <input type="number" name="pizzahawai" value="0" min="0"><br><br>
    <label for="pizzaquattroformaggi">Pizza Quattro Formaggi  14,50</label>
    <input type="number" name="pizzaquattroformaggi" value="0" min="0"><br><br>
</div>
    <div class="main"><br><br><hr></div>
    <div class="main">
    <h3>Adres Gegevens</h3>
    <br><br><br>
    </div>
<div class="menu">
  <label for="fname">Naam en Achternaam:</label><br>
  <input type="text"  name="naam" value="" required ><br>
  <label for="lname">Adres:</label><br>
  <input type="text"  name="adres" value="" required ><br>
  <label for="fname">Postcode:</label><br>
  <input type="text"  name="postcode" value="" required ><br>
  <label for="lname">Plaats:</label><br>
  <input type="text"  name="plaats" value="" required ><br>
  <label for="fname">Besteldatum:</label><br>
  <input type="date"  name="besteldatum"min="<?=date('Y-m-d'); ?>" value="" required ><br>
  <label for="lname">Bezorgen of afhalen:</label><br>
  <input type="radio" name="bezorgkeuze" value="bezorgen">
  <label for="bezorgkeuze">Bezorgen</label><br>
  <input type="radio" name="bezorgkeuze" value="afhalen">
  <label for="bezorgkeuze">Afhalen</label><br>  
  <input class="button" type="submit" value="Bestellen">
    </form>
</div>
<?php 
    if($pizzamarina > 0){
        echo "Pizza Marina: Aantal: " . $pizzamarina . " Prijs:€". ($marinaprijs * $pizzamarina);
        $totaalbedrag += ($marinaprijs * $pizzamarina);  
    }
    ?>
    <br>
    <?php 
    if($pizzahawai > 0){
        echo "Pizza Hawai: Aantal: " . $pizzahawai . " Prijs:€". ($hawaiprijs * $pizzahawai);
        $totaalbedrag += ($hawaiprijs * $pizzahawai);  
    }
    ?>
    <br>
    <?php 
    if($pizzaquattroformaggi > 0){
        echo "PizzaQuattro Formaggi: Aantal: " . $pizzaquattroformaggi . " Prijs:€". ($quattroformaggiprijs * $pizzaquattroformaggi);
        $totaalbedrag += ($quattroformaggiprijs * $pizzaquattroformaggi);   
    }
    ?>
    <br><br>
    <br>
    <?php
    if($bezorgkosten>0){
        echo "Bezorgkosten is: €5";
        $totaalbedrag += $bezorgkosten;
    }
    if($day == "Friday" && $totaalbedrag > 20){
        $kortingbedrag = $totaalbedrag * (0.15);
        echo "<br />Korting op vrijdag boven €20: €". $kortingbedrag;
        echo "<br />";
        echo "<br />Totaal: €". $totaalbedrag;
        $totaalbedrag = $totaalbedrag - $kortingbedrag;
    }
    ?>
    <br>
    <?php echo "Het totaalbedrag met korting is: €" . $totaalbedrag; ?>
    <br>
    <br>
    <?php echo $naam; ?>
    <br>
    <?php echo $adres; ?>
    <br>
    <?php echo $postcode; ?>
    <br>
    <?php echo $plaats; ?>
    <br>
    <?php echo $besteldatum; ?>
    <br><br>
    </div>
    <div class="menu">
    <input class="button" type="submit" value="Bestellen">
    </div>
    <?php
    ?>
</body>
</html>