<?php 
  require 'fontions.php';
  require '../inc/db.php';
  $method = $_SERVER['REQUEST_METHOD'];
 $jour='';




   if ($method == 'GET') {
       $jour=$_GET['id'];
       $equipes = query($pdo, 'SELECT `nom`, `logo` FROM `equipe` ')->fetchAll(PDO::FETCH_ASSOC);
       $logo=[];
foreach($equipes as $equipe) {
        $logo[$equipe['nom']] = "../logo/".$equipe['logo'].".png ";
}
   $sql = "SELECT `equipe1` , `but1`, `equipe2`,`but2`, `status` FROM matchs ".($jour?"WHERE  jour=$jour ORDER BY poule ":''); 
       $query=query($pdo, $sql);
  $resultat=$query->fetchAll(PDO::FETCH_ASSOC);
  header("Cache-Control: no-transform,public,max-age=300,s-maxage=900");
  // treat this as json
  header('Content-Type: application/json');
    echo json_encode($resultat);
    //echo json_encode($logo);
   }       else {
       echo json_response("false",400);
    }
        
    
?>