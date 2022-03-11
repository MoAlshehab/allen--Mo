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
        .parallex{
            background-image: url("img/pizza.png");
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
}
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
            transform: translate(-50%, -50%);
        }
        .lamista{
            font-size: 55px;
        }
        h2{
            color: black;
            font-family: sans-serif;
            text-align: center;
            margin-top: 25px;
            text-shadow: 2px 2px grey;
            font-size: 50px;
        }
        h3{
            font-size: 30px;
            text-align: center;
            margin-top: 25px;
        }
        hr{ 
            background-color: black;
            margin-left: 375px;
            width: 800px;
        }
        .menu{
            width: 450px;
            margin: auto;
        }
        label {
            display: inline-block;
            width: 200px;
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
        margin: 4px 150px;
        cursor: pointer;
        -webkit-transition-duration: 0.4s;
        transition-duration: 0.4s;
        margin-top: 25px;
        }
        .button1 {
        box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
        }
        .button2:hover {
        box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
        }
    </style>
    <?php include 'Rpizza.php'; ?>
</head>
<body>
<div class="pizza">
    <img src="./img/pizza.png" width="100%" height="500">
</div>
<div class="lamista">
    <h1>La Mista</h1>
</div>
<div class="main">
    <h2>Menu</h2>
    <br><hr><br><br><br><br>
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
</body>
</html>