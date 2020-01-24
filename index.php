<?php
session_start();
?>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="index.css">
    <title>Générateur Mot de Passe</title>
</head>
<body>
    <div id="container">
        <p id="intro">Cet outil vous aide à construire un mot de passe fort et simple à retenir.
Aucun mot de passe n'est récupéré par le portail SODA.</p>

        <p id="step1">Choisir une phrase que vous retiendrez facilement.
          Pour un mot de passe de 12 caractères ou plus, votre phrase doit contenir :<br/>
          1. Un nombre <br/>
          2. Une majuscule<br/>
          3. Un signe de poncutation ou caractère spécial<br/>
          4. Une douzaine de mots. </p>

            <form action="password.php" method="post">

                    <input type="text" id="window" name="sentence" placeholder="Ecrivez votre phrase">


                <div>
                    <button type="submit" class="myButton" id="bouton" value="Click!">Extraire</button>
                </div>
            </form>


        <div id="error"><?php

                            ?>
        </div>
        Votre phrase
        <div class="window">
          <?php
          if(!empty($_SESSION['string'])){
            echo $_SESSION['string'];
            unset($_SESSION['string']);
          }
           ?>
        </div>
        Votre mot de passe
        <div class="window">
          <?php
          if(!empty($_SESSION['error'])){
          echo $_SESSION['error'];
          unset($_SESSION['error']);
        }elseif(!empty($_SESSION['initiales'])) {
          echo $_SESSION['initiales'];
          unset($_SESSION['initiales']);
        }
          ?>
        </div>
    </div>
</body>

</html>
