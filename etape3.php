<?php
session_start();
if(isset($_POST['choisir']))
{
    
    $_SESSION['multiplicateur'] = $_POST['multiplicateur'];
    $_SESSION['nbr']= rand(1,10);
    $_SESSION['res'] = $_SESSION['nbr'] *  $_SESSION['multiplicateur'];
    
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <!-- CDN bulma -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
</head>
<body>
<div class="container">
        <div class="card">
            <div class="card-content">
                <article class="media">
                            <a href="./etape1.php"><button href="" class="button is-large is-fullwidth is-primary is-outlined is-rounded">ETAPE 1</button></a>
                            <a href="./etape2.php"><button onclick="" class="button is-large is-fullwidth is-primary is-outlined is-rounded">ETAPE 2</button></a>
                            <a href="./etape3.php"><button class="button is-large is-fullwidth is-primary is-outlined is-rounded">ETAPE 3</button></a>
                            <a href="./etape4.php"><button class="button is-large is-fullwidth is-primary is-outlined is-rounded">ETAPE 4</button></a>
                </article>
            </div>     
        </div>  
    </div>

    
        <div class="container is-widescreen">
            <div class="columns">
            <form class="container pt-5" method="POST">
                <div class="column">
                    <div class="card">
                        <div class="card-content">
                            <div class="content">
                                <h3>Veuillez choisir une table de multiplication<br> pour commencer le QUIZZ</h3>
                                <div class="field has-addons">
                                    <div class="control is-expanded">
                                        <div class="select is-fullwidth">
                                        <select name="multiplicateur">
                                            <option value="1"></option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                        </select>
                                        </div>
                                    </div>
                                    <div class="control">
                                        <button type="submit" class="button is-primary" name="choisir">Choisir</button>
                                    </div>
                                </div>
                                <div class="buttons">
                                    <button class="button is-danger" name="reset">Annuler</button>        
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </form>
                <form class="container pt-5" method="POST">
                <div class="column">
                    <div class="card">
                        <div class="card-content">
                            <div class="content">

                                <!-- question -->
                                <?php
                                  echo "<p>Donnez le résultat de: ".$_SESSION['nbr']. " X ".$_SESSION['multiplicateur']."</p>";  
                                ?>

                                <div class="field has-addons has-addons-centered">
                                    <p class="control">
                                        <input class="input" type="text" placeholder="Entrez le résultat" name="valsaisie">
                                    </p>
                                    <div class="control">
                                        <button type="submit" class="button is-primary" name="valider">Valider</button>
                                    </div>
                                </div>



                                <?php  
                                    // for ($i = 1; $i <= 10; $i++){
                                        
                                    // }
                                    

                                    if (isset($_POST['valider'])){
                                        $val = $_POST['valsaisie'];
                                        if ($val == $_SESSION['res']){
                                            echo    '<article class="message is-success">
                                                        <div class="message-header">
                                                            <p>Bravo</p>
                                                            <button class="delete" aria-label="delete"></button>
                                                        </div>
                                                        <div class="message-body">
                                                            La réponse est exacte
                                                        </div>
                                                    </article>';
                                            
                                        }elseif  ($val!=$_SESSION['res']){
                                            echo    '<article class="message is-danger">
                                                    <div class="message-header">
                                                        <p>Faux</p>
                                                        <button class="delete" aria-label="delete"></button>
                                                    </div>
                                                    <div class="message-body">
                                                        Désolé la réponse  était : '.$_SESSION['res'].'
                                                    </div>
                                                </article>';
                                            
                                        }
                                    }
                                    
                                ?>  
                            </div>
                        </div>
                    </div>
                </div>
                </form> 
            </div>  
        </div>

</body>
</html>