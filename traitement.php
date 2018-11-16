<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<header>
  <img src="img/gite.jpeg">
  <nav>
    <li><a href="index.php">Accueil</a></li>
    <li><a href="presentation.php">presentation</a></li>
    <li><a href="contact.php">contact</a></li>
  </nav>
</header>
<article>
  <?php
if (isset($_GET['genre'])) {$genre=$_GET['genre'];}else{$genre="";}
if (isset($_GET['nom'])) {$nom=$_GET['nom'];}else{$nom="";}
if (isset($_GET['prenom'])) {$prenom=$_GET['prenom'];}else{$prenom="";}
if (isset($_GET['ville'])) {$ville=$_GET['ville'];}else{$ville="";}
if (isset($_GET['location'])) {$location=$_GET['location'];}else{$location="";}
if (isset($_GET['message'])) {$message=$_GET['message'];}else{$message="";}
if (isset($_GET['captcha'])) {$captcha=$_GET['captcha'];}else{$captcha="";}

if (($genre!="") &&($nom!="") &&($prenom!="") &&($ville!="") &&($location!="") &&($message!="") &&($captcha!="")) {
  //tout est ok
  if (!($captcha=="blanc"||$captcha=="5"||$captcha=="france")) {
    echo "Le captcha est faux";
  }else{
//     [Monsieur ou Madame] [Nom] [Prénom],
// Nous vous remercions pour votre message : [message]
// Nous vous informerons la réservation de votre location à [ville] pour le montant de [montant]
// Vous vous remercions de verser un acompte de : [20% du montant]
    if($genre=="M"){
      echo "Monsieur ";
    }elseif($genre=="F"){
      echo "Madame";
    }else{
      echo "Sexe inconnu";
    }
    echo $nom." ".$prenom.", <p>Nous vous remercions pour votre message : ".$message."</p>.Nous vous informerons la réservation de votre location à ".$ville." pour le montant de ";
  }
// calcul montant
  if ($location==1) {
    $montant=400;
  }elseif($location==2) {
    $montant=750;
  }elseif ($location==3){
    $montant=1000;
  }

  echo $montant."€";

  //calcul acompte
  $acompte=$montant * 0.2;

  echo "<p>Nous vous remercions de verser un acompte de :".$acompte."€</p>";
}else{
  echo "<strong>Veuillez remplir tous les champs</strong>";
}

   ?>
</article>
<footer>
  <p>15, rue du chat</p>
  <p>contact : 05.34.22.34</p>
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2740.765089568898!2d0.33697311559624804!3d46.611645179131266!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47fdbdc062084c4f%3A0xea22aded7381096!2sISFAC!5e0!3m2!1sfr!2sfr!4v1539606813036" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
  <p>Nous sommes le <?php echo date("d-m-Y");?></p>
</footer>
  </body>
</html>
