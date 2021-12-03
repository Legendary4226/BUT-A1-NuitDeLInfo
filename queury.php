<?php
$db = new PDO(
    'mysql:host=185.142.53.173;dbname=VYRAJ',
    'Vyraj',
    'Vyraj'
);
function dict2queury_personnes($map, $table) {
    $tmp = "SELECT * FROM $table WHERE ";
    foreach($map as $key => $value) {
        $tmp += "$key = '$value' AND";
    }
    $tmp = rtrim($tmp , "AND");
    $queury = $db->prepare($tmp);
    $dp->execute();
    $resultat = $query->fetchAll();
    return $resultat;
} 
?>