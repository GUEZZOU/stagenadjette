<?php
    require_once('../pages/layout/header.php');
    require_once('../pages/layout/head.php');
    require_once("../pages/connexiondb.php");
?>
<?php
if(isset($_POST['submit'])){
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $date= $_POST['date'];
    $montant= $_POST['montant'];
    if(!empty($nom) && !empty($prenom ) && !empty($date) && !empty($montant))
    {
        $requete =  $pdo->prepare('INSERT INTO chargeclient (nom, prenom, montant, date) VALUES(:nom,:prenom,:montant,:date)');
        $requete->bindValue(':nom',$nom);
        $requete->bindValue(':prenom',$prenom);
        $requete->bindValue(':date',$date);
        $requete->bindValue(':montant',$montant);
        $result=$requete ->execute();
        if(! $result){
            echo"probleme est survenu";
        }else{
            echo"
              <script type=\"text/javascript\"> alert('bien enregistrer . identifiant:".$pdo->lastInsertId()."')</script>";
        }
     }else
     {
        echo"tous les champs  sont requis!";
    }
}
 ?>

        
        <div class="container">
                       
             <div class="panel panel-primary barRecherche">
                <div class="panel-heading">Les infos du nouveau chargé clientèle :</div>
                <div class="panel-body">
                    <form method="post" action="insertEffectifChargeClient.php" class="form"  enctype="multipart/form-data">
						
                        <div class="form-group">
                             <label for="nom">Nom :</label>
                            <input type="text" name="nom" placeholder="Nom" class="form-control"/>
                        </div>
                        <div class="form-group">
                             <label for="prenom">Prénom :</label>
                            <input type="text" name="prenom" placeholder="Prénom" class="form-control"/>
                        </div>
                        <div class="form-group">
                             <label for="date">Date :</label>
                            <input type="date" name="date" placeholder="date" class="form-control"/>
                        </div>
                        <div class="form-group">
                             <label for="montant">Honoraire :</label>
                            <input type="number" name="montant" placeholder="" class="form-control"/>
                        </div>
                        <input type="submit" name="submit" id="" value=" Enregistrer"class="btn btn-success"></span> </input><br>
					</form>
                </div>
            </div>   
        </div> 