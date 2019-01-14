<?php 
  require 'fontions.php';
  require '../inc/db.php';
  $method = $_SERVER['REQUEST_METHOD'];
 $jour='';
function query ( $pdo, $query, $parameters=[]) {  
    
    $query = $pdo->prepare($query);
    $query->execute($parameters);
    return $query;
    
}



   if ($method == 'GET') {
       $jour=$_GET['id'];
   $sql = "SELECT `equipe1` , `but1`, `equipe2`,`but2`, `status` FROM matchs ".($jour?"WHERE  jour=$jour ORDER BY poule ":''); 
       $query=query($pdo, $sql);
  $resultat=$query->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($resultat);
  
   }       else {
       echo json_response("false",400);
    }
        
    
?>