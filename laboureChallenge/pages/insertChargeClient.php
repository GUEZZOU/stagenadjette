<?php
   //require_once('identifier.php');
    require_once('connexiondb.php');
    $nom=isset($_POST['nom'])?$_POST['nom']:"";
    $prenom=isset($_POST['prenom'])?$_POST['prenom']:"";
    //$civilite=isset($_POST['civilite'])?$_POST['civilite']:"F";
    //$idFiliere=isset($_POST['idFiliere'])?$_POST['idFiliere']:1;

    //$nomPhoto=isset($_FILES['photo']['name']);//?$_FILES['photo']['name']:"";
    //$imageTemp=$_FILES['photo']['tmp_name']
    ///move_uploaded_file($imageTemp,"../images/".$nomPhoto);

    $requete="insert into ChargeClient(nom,prenom) values(?,?))";
    $params=array($nom,$prenom);
    $resultat=$pdo->prepare($requete);
    $resultat->execute($params);
    
    header('location:admin.php');

?>