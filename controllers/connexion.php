<?php 
 function json_response($message = null, $code = 200)
 {
     // clear the old headers
     header_remove();
     // set the actual code
     http_response_code($code);
     // set the header to make sure cache is forced
     header("Cache-Control: no-transform,public,max-age=300,s-maxage=900");
     // treat this as json
     header('Content-Type: application/json');
     $status = array(
         200 => '200 OK',
         400 => '400 Bad Request',
         422 => 'Unprocessable Entity',
         500 => '500 Internal Server Error'
         );
     // ok, validation error, or failure
     header('Status: '.$status[$code]);
     // return the encoded json
     return json_encode(array(
         'status' => $code < 300, // success or not?
         'message' => $message
         ));
 }
  require '../inc/db.php';
  
  /*$method = $_SERVER['REQUEST_METHOD'];
  $request = explode('/',trim($_server['PATH_INFO']))
  $input = json_decode(file_get_contents('php://input'),true)
  */
  echo json_response($_POST,200);
  /*
  if(isset($_POST['nom']){
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