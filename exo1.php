<h1>Exercice 1</h1>
<h2>Créer une fonction personnalisée convertirMajRouge() permettant de transformer une chaîne de
caractère passée en argument en majuscules et en rouge.
Vous devrez appeler la fonction comme suit : convertirMajRouge($texte) ;</h2>

<?php
$texte = "Mon texte en paramètre";

echo afficherTexteCouleur($texte, 'red');

function afficherTexteCouleur($texte, $color){
    $result = "<p style = 'color:$color'>".mb_strtoupper($texte)."</p>";
    return $result;
}


?>