
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
     <!-- CDN bulma -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

        <div class="text-center aligner"style="color:black;">
        <?php
        if (!isset($_POST['submit'])) {
            @$mult 	= $_GET['mult'];
            Echo 'Table de multiplication de '.$mult.'<br>';
            for ($j = 1; $j <= 10; $j++)
            {
                 echo $mult.' x '.$j.' = '.$mult*$j.'<br>';
            }
        }
        ?>
        </div>
    
                    <div class="container is-widescreen">
                        <div class="columns">
                            <div class="column">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="content">
                <form action="etape1.php"  method="$_GET" class="container pt-3">
                   <h3>Afficher une table de multiplication</h3>
                    <label for="multiplicateur">Merci de selectionner la table que vous voulez consulter:</label>


                                    <div class="field has-addons has-addons-centered">
                                    <p class="control">
                                    <input class="input" type="number" name="number" placeholder="Entrez le numero">
                                    </p>
                                    <p class="control">
                                    <button type="submit" name="mult" class="button is-primary">
                                     voir la table
                                    </button>
                                    </p>
                                    </div> 
                                     <div class="buttons">
                                        <button class="button is-danger" name="reset">Annuler</button>
                                        <!-- <button class="button is-primary" name="validate">Valider</button> -->
                                    </div> 
                   
                    </form>
                        </div>
                    </div>
                </div>
            </div>
            </div>
             </div>
                </form>
</body>
</html>
