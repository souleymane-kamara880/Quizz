<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authentifier</title>
</head>
<body>
<?php
 $_SESSION['tab']=array ('nohine'=> '1', 'alioune'=> '2', 'jules'=> '3', 'Abdou'=> '4');
    if (isset($_POST['verifier'])) {
        $_SESSION['nom'] = $_POST['nom'];
        $_SESSION['pass'] = $_POST['pass'];
        if ($_SESSION['nom'] != "" && $_SESSION['pass'] != "") {
            foreach ($_SESSION['tab'] as $nom => $pass){
                if($_SESSION['nom']==$nom && $_SESSION['pass']==$pass){
                    header("location: etape1.php");
                }
            }
        }
    }
?>
</body>
</html>