<?php
try
{
	$conn = new PDO('mysql:host=localhost;dbname=boko;charset=utf8', 'root', '');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

  if(isset($_POST['nom']) AND isset($_POST['user']) AND isset($_POST['mail']) AND isset($_POST['numero'])AND isset($_POST['mdp']) AND isset($_POST['mdpconfig'])){

    $nom = $_POST['nom'];
    $user = $_POST['user'];
    $mail = $_POST['mail'];
    $numero = $_POST['numero'];
    $mdp = $_POST['mdp'];
    $mdpconfig = $_POST['mdpconfig'];


    $req = $conn -> prepare("INSERT INTO utilisateurs(non, nom, user, mail, numero, mdp, mdpconfig) VALUES(?, ?, ?, ?, ?, ?)"); 

    $req->execute(array($nom, $user, $mail,$numero, $mdp, $mdpconfig ));

     


  }






?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="lien/styleform.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="title">Formulaire</div>
        <form action="#" method="POST">
            <div class="usr_detail">
                <div class="input_box">
                    <span class="details"> Full name</span>
                    <input type="text" placeholder="Enter your name" name="nom" required>
                </div>
                <div class="input_box">
                    <span class="details"> Username</span>
                    <input type="text" placeholder="Enter your username" name="user"  required>
                </div>
                <div class="input_box">
                    <span class="details"> Email</span>
                    <input type="text" placeholder="Enter your email" name="mail"  required>
                </div>
                <div class="input_box">
                    <span class="details"> Phone Nunber</span>
                    <input type="text" placeholder="Enter your number" name="numero"  required>
                </div>
                <div class="input_box">
                    <span class="details"> Password</span>
                    <input type="text" placeholder="Enter your password" name="mdp"  required>
                </div>
                <div class="input_box">
                    <span class="details">Confirm Password</span>
                    <input type="text" placeholder="Enter your name" name="mdpconfig"  required>
                </div>
            </div>
            <br><br>
            <div class="button">
                <input type="submit" value="Register">
            </div>    
        </form>
    </div>
</body>
</html>