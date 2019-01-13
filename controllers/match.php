<?php 
  require 'fontions.php';
  require '../inc/db.php';
  $method = $_SERVER['REQUEST_METHOD'];
function query ( $pdo, $query, $parameters=[]) {  
    
    $query = $pdo->prepare($query);
    $query->execute($parameters);
    return $query;
    
}



   if ($method == 'GET') {
   $sql = "SELECT * FROM match where jour=1 ORDER BY poule ");
       query($pdo, $sql)
  while ($resultat=$query->fetch()) {
    echo json_encode($resultat);
  }
             else {
       echo json_response("false");
    }
        }
    }