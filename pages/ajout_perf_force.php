<?php
require("../config/connexion.php");

$Date_F    = $_GET["Date_F"];
$Traction_F   = $_GET["Traction_F"];
$Dips_F     = $_GET["Dips_F"];

$connexion = mysqli_connect(SERVEUR, LOGIN, PASSE);
if(!$connexion)                         {echo "pas de connexion!";}
if(!mysqli_select_db($connexion,BASE))  {echo "Erreur!";}

$req_ajout_dips_f = "INSERT INTO dips_force VALUES ($Dips_F, \"$Date_F\");";
$req_ajout_Traction_f = "INSERT INTO traction_froce VALUES ($Traction_F, \"$Date_F\");";

mysqli_query($connexion, $req_ajout_Traction_f);
mysqli_query($connexion, $req_ajout_dips_f);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../style/ajout_.css">
    <title>Ajout d'un membre</title> 
</head>
<body>
    <section class = "header">
            <h1>Performance ajouté avec succès ! </h1>
            <form>
        <input class ='button' type="button" value="Retour" onclick="history.go(-1)">
        </form> 
    </section>
    
</body>