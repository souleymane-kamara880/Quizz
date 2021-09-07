<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <?php 

        $identifiant = 'admin';
        $mdp = 'admin';

        if(isset($_POST) && !empty($_POST['identifiant']) && !empty($_POST['mdp']))
        {
            if(($_POST['identifiant'])=== $identifiant && ($_POST['mdp'])=== $mdp)//le bon identifiant est "admin"
            {

                    $erroridentification = 'identifaint exact !!!';
                    $errormotdepass = 'Mot de passe exact !!!';
                    header("Location: accueil.php"); 
            }
            else
            {
                    $erroridentification = 'Indentifiant incorrect'; 
                    $errormotdepass = 'Mot de passe incorrect';
            }
        }

        ?>
</body>
</html>