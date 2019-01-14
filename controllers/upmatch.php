<?php 
  require 'fontions.php';
  require '../inc/db.php';
  $method = $_SERVER['REQUEST_METHOD'];
  if ($method == 'POST') {
      if(!isset($_SESSION['connecter'])){
         $sql = 'UPDATE `matchs` SET `but1`=:bu1,`but2`=:bu2,`status`=:stat WHERE `equipe1`=:eq1 AND `equipe2`=:eq2';
         $query=$pdo->prepare($sql);
         $query->execute(array('bu1'=>$_POST['but1'], 'bu2'=>$_POST['but2'],'stat'=1,'eq1'=$_POST['equipe1'],'eq2'=$_POST['equipe2']);
         echo 'true';
      }else{
        echo 'false';
      }
     
  }
  ?>