<?php
session_start();
if (!isset($_SESSION['score'])){
    $_SESSION['score']=0;
}
if (!isset($_SESSION['n'])){
    $_SESSION['n']=1;
}else {
    //jhidhifhi
}

?>

<!DOCTYPE html>
<html lang="fr">
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

<div class="container">
            <div class="row">
                <div class="col-md-3">
                <progress class="progress is-primary" id="progress" value="0" max="100"></progress>
                    <?php
                        //  echo  "<b>Score</b> <b>".$_SESSION['score']."/20</b>";
                        //  echo '<progress class="progress is-primary" value="0" max="100">15%</progress>';
                    ?>
                </div>
                <div class="col-md-3 offset-md-6">
                   
                    <p><?php  
                      if(isset($_POST['valider'])){
                        
                        if($_SESSION['result'] == $_POST['reponse']){
                            $_SESSION['score']+=4;
                            $_SESSION['n']+=1;
                            $progress="\n<script>document.getElementById('progress').value +=25</script>\n";
                            // flush();
                            echo $progress;

                            echo "\n<script>";
                            echo "document.getElementById('progress').value +=15\n";
                            echo "</script>";
                            

                            echo    '<article class="message is-success">
                                                        <div class="message-header">
                                                            <p>Bravo</p>
                                                            <button class="delete" aria-label="delete"></button>
                                                        </div>
                                                        <div class="message-body">
                                                            La réponse est exacte
                                                        </div>
                                                    </article>';
                                                    
                            
                        }else {
                            $_SESSION['n']+=1;
                            echo    '<article class="message is-danger">
                                                    <div class="message-header">
                                                        <p>Faux</p>
                                                        <button class="delete" aria-label="delete"></button>
                                                    </div>
                                                    <div class="message-body">
                                                        Désolé la réponse  était : '.$_SESSION['result'].'
                                                    </div>
                                                </article>';
                        }
                        if ($_SESSION['n']>5){
                            $end=true;
                        }
                      } 
                      ?>
                      </p>

                      <?php 
                        if (!isset($end)){?>
                            <h3 class="fw-bolder"> Quesion: <?php echo $_SESSION['n']; ?>
                            <?php }
                      ?>

                </div>
            </div>
            <div class="row">
                <div class="card">
                    <div class="card-content">
                        <div class="content">
                            <!-- <?php echo  "Score".$_SESSION['score']."/20";?>       -->
                            
                            <?php if (!isset($end)) { ?> 
                            <form action="" onsubmit="" method="POST">
                                <div class='form-group'>
                                        <label >
                                        <b> 
                                            <?php
                                                $_SESSION['i']=rand(1,10);
                                                $_SESSION['j']=rand(1,10);
                                                echo  $_SESSION['i'].'  x  '. $_SESSION['j'].'  =';
                                                $_SESSION['result'] = $_SESSION['i'] *  $_SESSION['j']; 

                                            ?>
                                        </b>
                                            </label>
                                            <span><b>REPONSE : </b></span>
                                    <div class="field has-addons has-addons-centered">
                                        <p class="control"> 
                                            <input class="input"  placeholder="Entrez le résultat" type="number"   name="reponse" >
                                        </p>
                                        <p class="control">   
                                            <button type="submit" class="button is-primary" name="valider">valider</button>
                                        </p>    
                                    </div>
                                </div>
                                </form>
                                <?php } ?> 
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 offset-md-6">
                <?php 
                    echo "<p class='fw-bolder'> Score".$_SESSION['score']."/20 </p>";
                    if ($_SESSION['n'] > 5){
                    echo "<p class='text-center'><h1> Jeux terminé </h1></p>";
                    unset($_SESSION['n']);
                    $_SESSION['n']=1;
                    unset($_SESSION['scores']);
                    $_SESSION['score']=0;
                }
                ?>       
            </div>
        </div>

</body>
</html>