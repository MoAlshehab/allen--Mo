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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin:0;
        }
        .pizza{
            position: relative;
            width: 100%;
        }
        h1{
            color: white;
            position: absolute;
            top: 35%;
            left: 50%;
            transform: translate(-50%, -50%);`
        }
        .lamista{
            font-size: 55px;
        }
        .bestelling{
            text-align: center;
        }
        h2{
            color: black;
            font-family: sans-serif;
            text-align: center;
            margin-top: 25px;
            text-shadow: 2px 2px grey;
            font-size: 50px;
        }
        hr{
            width: 800px;
            margin-left: 25%;
            background-color: black;
        }
        .menu{
            text-align: center;
        }
        .button {
        background-color: red;
        border: none;
        color: white;
        padding: 10px 25px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
        -webkit-transition-duration: 0.4s;
        transition-duration: 0.4s;
        }
        .button1 {
        box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
        }
        .button2:hover {
        box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
        }
    </style>
</head>
<body>
<div class="pizza">
    <img src="./img/pizza.png" width="100%" height="500">
</div>
<div class="lamista">
    <h1>La Mista</h1>
</div>
<div class="main">
    <h2>Bestelling</h2>
    <br><hr><br><br><br><br>
</div>
    <div class="bestelling">
    <?php 
    if($pizzamargherita > 0){
        echo "Pizza Margherita: Aantal: " . $pizzamargherita . " Prijs:€". ($margheritaprijs * $pizzamargherita);  
        $totaalbedrag += ($margheritaprijs * $pizzamargherita);
    }
    ?>
    <br>
    <?php 
    if($pizzafunghi > 0){
        echo "Pizza Funghi: Aantal: " . $pizzafunghi . " Prijs:€". ($funghiprijs * $pizzafunghi);  
        $totaalbedrag += ($funghiprijs * $pizzafunghi);
    }
    ?>
    <br>
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