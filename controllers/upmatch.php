<?php 
  require 'fontions.php';
  require '../inc/db.php';
  $method = $_SERVER['REQUEST_METHOD'];
  if(!session_status()){
    if ($method == 'POST' ) {
      if(!isset($_SESSION['connecter'])){
         $sql = 'UPDATE `matchs` SET `but1`=?,`but2`=?,`status`=? WHERE `equipe1`=? AND `equipe2`=?';
         $query=$pdo->prepare($sql);
         $query->execute([$_POST['but1'], $_POST['but2'],1,$_POST['equipe1'],$_POST['equipe2']]);
         up_classement($pdo,$_POST['equipe1']);
         up_classement($pdo,$_POST['equipe2']);
         json_response(true);
                }else{
        echo json_response(false);
      }
     
  }else{
    echo json_response(false);
  }
  }else{
    echo json_response(false);
  }
  
  ?>