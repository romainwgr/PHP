<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Générateur de mot de passe</title>
</head>
<body>
<?php
//Gestion des erreurs 

if(isset($_POST['taille'])){
    if(strlen($_POST['taille']<8)){
        $erreur = 'Le mot de passe est trop court et pas sécurisé';
    }
    //pas d'erreur maintenant on récupère les données
    else{
        $taille=$_POST['taille'];
        $mdp='';
        $caractere='abcdefghijklmnopqrstuvwxyz1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZ()%$*&-_=+';
        while(strlen($mdp)!=$taille){
            $i = $caractere[rand(0,strlen($caractere) -1)];
            $mdp.=$i;
        }
    
    }
    
}
?>

    <h1>Générateur de mot de passe </h1>
    <h4>Selectionner le nombre de caractères</h4>
    <form action="" method="post">
        <input type="number" name='taille' value="<?php if(isset($taille)){echo $taille;}?>">
        <input type="submit" value="Valider">
    </form>

<?php //affichage
if(isset($mdp)){
    echo "<p>$mdp</p>";
}
elseif(isset($erreur)){
    echo "<p>$erreur</p>";
}
?>
</body>
</html>



