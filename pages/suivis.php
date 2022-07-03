<?php
require("../config/connexion.php");

$connexion = mysqli_connect(SERVEUR,LOGIN,PASSE);
if(!$connexion){echo'pas de connexion';}
if(!mysqli_select_db($connexion,BASE)){echo 'ERROR !';}

$req_traction_force = 'SELECT Traction_F, Date_F FROM traction_froce order by Traction_F  DESC limit 5;';
$tractions_force = mysqli_query($connexion, $req_traction_force);

$req_Dips_force = 'SELECT Dips_F, Date_F FROM dips_force  order by Dips_F DESC  limit 5;';
$Dips_force = mysqli_query($connexion, $req_Dips_force);

$req_traction_set = 'SELECT Traction_S, Traction_DS FROM tractions_set order by Traction_S DESC  limit 5;';
$tractions_set = mysqli_query($connexion, $req_traction_set);

$req_dips_set = 'SELECT Dips_S, Dips_SD FROM dips_set  order by Dips_S DESC  limit 5;';
$dips_set = mysqli_query($connexion, $req_dips_set);
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../style/styles_suivis2.css">
  <title>Suivis</title>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
</head>
<body>
  <section class="header">
    <h1> Suivis des performances </h1>
  </section>
  <section class = "perf">
      <nav class ="tractions_f_ul">
        <p> <b>RM Traction :</b>  </p>
        <ul>
    <?php
        while($abc = mysqli_fetch_array($tractions_force)) {
            $tractions_forcesss = $abc["Traction_F"];
            $tractions_forcess    = $abc["Date_F"];
            echo "<li>$tractions_forcesss kg  le $tractions_forcess</li>";
        }
    ?>
        </ul>
    </nav>
    <nav class ="tractions_f_ul">
        <p> <b>RM Dips :</b>  </p>
        <ul>
    <?php
        while($abcd = mysqli_fetch_array($Dips_force)) {
            $dips_forcesss = $abcd["Dips_F"];
            $dips_forcess    = $abcd["Date_F"];
            echo "<li>$dips_forcesss kg  le $dips_forcess</li>";
        }
    ?>
        </ul>
    </nav>

    <nav class ="tractions_f_ul">
        <p> <b>Max Traction :</b>  </p>
        <ul>
    <?php
        while($abcde = mysqli_fetch_array($tractions_set)) {
            $tractions_ss = $abcde["Traction_S"];
            $tractions_sss   = $abcde["Traction_DS"];
            echo "<li>$tractions_ss rep  le $tractions_sss</li>";
        }
    ?>
        </ul>
    </nav>

    <nav class ="tractions_f_ul">
        <p> <b>Max Dips :</b>  </p>
        <ul>
    <?php
        while($abcdef = mysqli_fetch_array($dips_set)) {
            $Dips_sss = $abcdef["Dips_S"];
            $Dips_ss    = $abcdef["Dips_SD"];
            echo "<li>$Dips_sss kg  le $Dips_ss</li>";
        }
    ?>
        </ul>
    </nav>
  </section>



  

  <section class="add">
    <h2> Nouvelle performance </h2>
    <article class=" split">
      <nav class="force">
          <h3> Force </h3>
          <form action="ajout_perf_force.php" method="GET">
          Date : <input type="Date" name="Date_F"/> <br><br>
          Traction : <input type="number" name="Traction_F" placeholder="RM en kg"/> <br><br>
          Dips : <input type="number" name="Dips_F" placeholder="RM en kg"/> <br> <br>
          <input class="submit" type="submit" value="Envoyer" />
        </form> 
          
      </nav>
      <nav class="Set">
        <h3> SET & REP </h3>
        <form action="ajout_perf_set.php" method="GET">
        Date : <input type="Date" name="Date_S"/> <br><br>
        Traction : <input type="number" name="Traction_S" placeholder="Nombre de Rep"/> <br><br>
        Dips : <input type="number" name="Dips_S" placeholder="Nombre de Rep"/> <br> <br>
        <input class="submit" type="submit" value="Envoyer" />
        </form> 
      </nav>
    </article>
  </section>

</body>
</html>