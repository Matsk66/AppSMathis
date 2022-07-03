<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../style/styles_force1.css">
  <title>Force 1</title>
</head>
<body>
  <section>
    <h1>Le 5/3/1 pyramide</h1>
  <p>
    <h2>Le 5/3/1 pyramide est une méthode de développement de la force.<br>
Cette méthode est une variante du 5/3/1 classique connu et mis en place par Jim Wendler 
( powerlifter américain ). <br></h2>
  </section>
    
    <article class="mid">
          Voici son déroulement et ses détails : <br>

        Les charges sont calculées sur 90 % de ton max réel. <br><br><br>
    </article>
   
    <article class="trains">
    <?php 
          if (empty($_GET["Traction"]) or empty($_GET["Dips"])) {
          echo " Vous devez saisir des valeurs!";
          } else {
          $Traction = $_GET["Traction"];
          $Dips = $_GET["Dips"];
          $Traction90 = $Traction* 0.9;
          $Dips90 = $Dips* 0.9;
          $Traction70 = $Traction90 * 0.7 ;
          $Traction75 = $Traction90 * 0.75;
          $Traction85 = $Traction90 * 0.85;
          $Traction80 = $Traction90 * 0.80;
          $Traction65 = $Traction90 * 0.65;
          $Traction902 = $Traction90 * 0.9;
          $Traction95 = $Traction90 * 0.95;
          $Traction40 = $Traction90 * 0.4;
          $Traction50 = $Traction90 * 0.5;
          $Traction60 = $Traction90 * 0.6;
          $Dips65 = $Dips90 * 0.65;
          $Dips70 = $Dips90 * 0.7 ;
          $Dips75 = $Dips90 * 0.75;
          $Dips85 = $Dips90 * 0.85;
          $Dips80 = $Dips90 * 0.80;
          $Dips902 = $Dips90 * 0.9;
          $Dips95 = $Dips90 * 0.95;
          $Dips40 = $Dips90 * 0.4;
          $Dips50 = $Dips90 * 0.5;
          $Dips60 = $Dips90 * 0.6;


          echo "<div>
          <b>Séance 1 : <br><br> </b>
        5 répétitions à  $Traction65 kg et $Dips65 kg<br>
        5 répétitions à  $Traction75 kg et $Dips75 kg<br>
        Max répétitions à  $Traction85 kg et $Dips85 kg<br>
        5 répétitions à  $Traction75 kg et $Dips75 kg <br>
        Max répétitions à $Traction65 kg et $Dips65 kg<br><br>
      </div>

      
      <div>
        <b>Séance 2 : <br><br> </b>
      3 répétitions à $Traction70 kg et $Dips70 kg <br>
      3 répétitions à $Traction80 kg et $Dips80 kg <br>
      Max reps à $Traction902 kg et $Dips902 kg <br>
      3 répétitions à $Traction80 kg et $Dips80 kg <br>
      Max reps à $Traction70 kg et $Dips70 kg <br><br>
    </div>

      <div>
        <b>Séance 3 : <br><br> </b>
      5 répétitions à $Traction75 kg et $Dips75 kg <br>
      3 répétitions à $Traction85 kg et $Dips85 kg <br>
      Max répétitions à $Traction95 kg et $Dips95 kg <br>
      3 répétitions à $Traction85 kg et $Dips85 kg <br>
      Max répétitions à $Traction75 kg et $Dips75 kg  <br><br>
    </div>

      <div>
        <b>Séance 4 : Deload  <br><br> </b>
      5 répétitions à $Traction40 kg et $Dips40 kg <br>
      5 répétitions à $Traction50 kg et $Dips50 kg <br>
      5 répétitions à $Traction60 kg et $Dips60 kg <br><br>
    </div>";
          }

        ?>



    </article>
    
    <div class="end">
      Ensuite tu recommences et tu rajoutes + 2kg. <br>
    4 séances = 1 cycle. <br>
    Je te conseil d'en faire 3 pour de meilleurs résultats. </p>
    </div>
    
    <article class = "espace" >
      
    </article>
  

  
</body>
</html>


