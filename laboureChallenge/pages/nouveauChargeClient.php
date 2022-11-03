<?php
    require_once('../pages/layout/header.php');
    require_once('../pages/layout/head.php');
    require_once("../pages/connexiondb.php");
    require_once('connexiondb.php');
   
    $requeteC="select * from  ChargeClient";
    $resultatC=$pdo->query($requeteC);

?>

        
        <div class="container">
                       
             <div class="panel panel-primary barRecherche">
                <div class="panel-heading">Les infos du nouveau chargé clientèle :</div>
                <div class="panel-body">
                    <form method="post" action="insertChargeClient.php" class="form"  enctype="multipart/form-data">
						
                        <div class="form-group">
                             <label for="nom">Nom :</label>
                            <input type="text" name="nom" placeholder="Nom" class="form-control"/>
                        </div>
                        <div class="form-group">
                             <label for="prenom">Prénom :</label>
                            <input type="text" name="prenom" placeholder="Prénom" class="form-control"/>
                        </div>
				        <button type="submit" class="btn btn-success">
                            <span class="glyphicon glyphicon-save"></span>
                            Enregistrer
                        </button> 
                      
					</form>
                </div>
            </div>   
        </div> 