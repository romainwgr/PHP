<?php
$taillemdp = (int)readline('Saisissez le nombre de caractères: ');
while($taillemdp<=6){
    echo "Attention ce mot de passe n'est pas sécurisé, veuillez ajouter des caractères \n";
    $taillemdp = (int)readline('Saisissez le nombre de caractères: ');
}
echo "Mot de passe sécurisé\n";
$mdp='';
$random = 'abcdefghijklmnopqrstuvwxyz1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZ()%$*&é-_çà=+';
while(strlen($mdp)!=$taillemdp){
    $i = $random[rand(0,strlen($random) -1)];
    $mdp .=$i;
}
echo "Voici un mot de passe généré aléatoirement et sécurisé: \n$mdp \n";
?>