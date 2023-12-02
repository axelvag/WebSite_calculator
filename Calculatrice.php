<!doctype html>
<!-- calculatrice.php -->
<html>
	<head>
		<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="style.css">
    <title> Une petite calculatrice </title>
		<style type="text/css"> 
		p { color: blue; }
    h1 { color: grey; font-size: 40px; }
    h3 {text-align: center;}
    a {text-align: center;}
    body {width: 600px; margin:auto;}
    .question { background-color: #FFFFFF; }
    
    .calculatrice {
    text-align: center;
    height:350px;
    background-color: #00BFFF;
	  border-radius: 50px;
    color: white;
    flex: 0 0 30%;
    padding: 20px;
    }
    
    .textehaut
    {
    background-color: #CEECF5;
    }
    
    .resultat
    {
    text-align: center;
  
    background-color: #CEECF5;
    }
    
    .titre
    {
    text-align: center;
    border: 3px solid #013ADF; 
    }

    .reset
    {
    text-align: center;
    }

    
		</style>
	</head>
	
	<?php 
	$retour = 0;
  if(isset($_GET['reponse']))
  {
    if (!strcmp($_GET['operateur'],"plus"))
      $retour = floatval($_GET['nombre1']) + floatval($_GET['nombre2']);
    if (!strcmp($_GET['operateur'],"moins"))
      $retour = floatval($_GET['nombre1']) - floatval($_GET['nombre2']);
    if (!strcmp($_GET['operateur'],"multiplie"))
      $retour = floatval($_GET['nombre1']) * floatval($_GET['nombre2']);
    if (!strcmp($_GET['operateur'],"divise"))
      $retour = floatval($_GET['nombre1']) / floatval($_GET['nombre2']);
  }
	?>
            
	<body>
    <div class="titre">
      <h1>Calculatrice</h1>
    </div>
    <br/>
    <div class="textehaut">
      <p>Une petite calculatrice minimaliste pour pratiquer la programmation web!</p>
      <p>Vous ne pouvez faire qu'une opération entre deux nombres.</p>
    </div>
    <br/>
    <div class="calculatrice">
      <form name="nom" method="get" action="calculatrice.php">
        <a>
          <h3>Entrez deux nombres et l'opération choisie:</h3>
        </a>
        
          <h3>nombre1:</h3>
          
          <input type="text" name="nombre1" placeholder="entrez un nombre" size="30" maxlength="20" />
        
        <br/>
        <br/>
        <a>
          <select name="operateur">
            <option value="plus" SELECTED="">+</option>
            <option value="moins">-</option>
            <option value="multiplie">x</option>
            <option value="divise">÷</option>
          </select>
        </a>
        <a>
          <h3>nombre2:</h3>
          <input type="text" name="nombre2" placeholder="entrez un nombre" size="30" maxlength="20" />
        </a>
        <br/>
        <br/>
        <input type="submit" name="reponse" value="calculer" />
        <div class="resultat">
          <p>Le résultat
            <?php
            if(isset($_GET['reponse']))
            { 
              echo "de";
              echo " ";
              echo $_GET["nombre1"];
              echo " ";
              echo $_GET["operateur"];
              echo " ";
              echo $_GET["nombre2"];
              echo " ";
              echo "est";
              echo " ";
              echo $retour;
            }
             ?>
          </p>
        </div>
      </form>
    </div>
    <br/>
    <div class="textehaut">
      <p>Les paramètres transmis au serveur via le formulaire sont:
      <br/>nombre1 =&nbsp;
      <?php 
      if(isset($_GET['reponse']))
        echo $_GET["nombre1"]; ?>
      <br/>choix =&nbsp;
      <?php
      if(isset($_GET['reponse']))
        echo $_GET["operateur"]; ?>
      <br/>nombre2 =&nbsp;
      <?php 
      if(isset($_GET['reponse']))
        echo $_GET["nombre2"]; ?>
      <br/>action =&nbsp;
      <?php 
      if(isset($_GET['reponse']))
        echo "calculer"; ?>
      
    </div>
    <div class="reset">
    <a href="https://lifasr2.univ-lyon1.fr/axel.vaganay/calculatrice.php"><input type="reset" name="recharge" value="reset" /></a>
    </div>
	</body>
</html>