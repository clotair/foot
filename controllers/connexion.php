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
        $_SESSION['connecter'] = true;
        if(!session_status()){
            session_start();
        }
       echo json_response("true");
        
    }
             else {
       echo json_response("false");
    }
        }
    }
    
    
?>