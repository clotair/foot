<?php 

include __DIR__.'/inc/db.php';



function insertequipe($pdo){
    $max = $pdo->query('SELECT COUNT(`id`) FROM `equipe`')->fetch(PDO::FETCH_ASSOC)['COUNT(`id`)'];
$nom=$_POST['nom'];
$logo=$_POST['drap'];
    $poule=["A","B","C","D"];
    if($max<16){
        $m=$max % 4;
$query="INSERT INTO equipe (nom,logo,groupe) VALUES('$nom','$logo','$poule[$m]')";
 $pdo->exec($query);
        if($max==15){
            echo "teams are complited";}
    }}


insertequipe($pdo);
    header('Location: app\competition\equipes\equipes.php');
?>