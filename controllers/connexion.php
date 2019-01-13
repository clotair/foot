<?php 
  require 'fontions.php';
  require '../inc/db.php';
  $method = $_SERVER['REQUEST_METHOD'];




    if ($method=='POST'){
        if (!empty($_POST['nom'])){
            if($_POST['nom'] == $adminuser and $_POST['password'] == $adminpass ) {
        session_start();
        $_SESSION['user'] = $adminuser;
        $_SESSION['pass'] = $adminpass;
       echo json_response("true");
        
    }
             else {
       echo json_response("false");
    }
        }
    }
    
    
  /*if(isset($_POST['nom']){
      echo 'require nom';
  }else{
      $req = $pdo->prepare('SELECT * FORM users WHERE nom=?')
      $rep->execute([$_POST['nom']])
      $password = $req->fetch()
      if(!($password&& isset($_POST['password']){
          echo json_reponse(200,'true')
      }else{
          if($password){
              if($_POST){
                echo json_reponse(200,'false')
              }else{
                  if($password==$_POST['password']){
                    echo json_reponse(200,'true')
                  }
              }
          }else{
              if($_POST['password']){
                echo json_reponse(200,'true')
              }else{
                echo json_reponse(200,'false')
              }
          }
      }  )
      
  }*/
?>