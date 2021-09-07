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
    <div class="card">
        <div class="card-content">
            <p class="title">
                Vueillez Sélectionner les TABLES que vou voulez afficher!
            </p>
            <p class="subtitle">
                <form method="POST">
                    <label >table1 </label> <input type='checkbox' name='valuechoix[]' value='1'><br>
                    <label>table2 </label> <input type='checkbox' name='valuechoix[]' value='2'><br>
                    <label>table3 </label> <input type='checkbox' name='valuechoix[]' value='3'><br>
                    <label>table4 </label> <input type='checkbox' name='valuechoix[]' value='4'><br>
                    <label>table5 </label> <input type='checkbox' name='valuechoix[]' value='5'><br>
                    <label>table6 </label> <input type='checkbox' name='valuechoix[]' value='6'><br>
                    <label>table7 </label> <input type='checkbox' name='valuechoix[]' value='7'><br>
                    <label>table8 </label> <input type='checkbox' name='valuechoix[]' value='8'><br>
                    <label>table9 </label> <input type='checkbox' name='valuechoix[]' value='9'><br>
                    <label>table10 </label> <input type='checkbox' name='valuechoix[]' value='10'><br>
                    <button type='submit'  name='valider' > afficher</button>
                </form>
            </p>
        </div>
        <footer class="card-footer">
            <p class="card-footer-item">
                <span>
                    Vous pouvez choisr un ou plusieurs table!
                </span>
            </p>
        </footer>
    </div>

    <div class="card">
        <div class="card-content">
            <p class="title">
                Les Tables séléctionnées
            </p>
            <p class="subtitle">
            <?php

function multi($val){
    for($i=0;$i<=10;$i++){
            $r=$val*$i;
            echo "$i x $val = $r </br>";
        }
}
if (isset($_POST['valider'])){
    foreach($_POST['valuechoix'] as $valeur) {
    multi($valeur); 
    }
}
?> 
            </p>
        </div>
        <footer class="card-footer">
            
        </footer>
    </div>

    
    
    
</div>




</body>
</html>