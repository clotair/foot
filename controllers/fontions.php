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
            500 => '500 Internal Server Error',
            
            );
        // ok, validation error, or failure
        header('Status: '.$status[$code]);
        // return the encoded json
        return json_encode(array(
            'status' => $code < 302, // success or not?
            'message' => $message
            ));
    };
    function go_to_manage(){
        echo "<script src='footapp2/controllers/navigation.php?manage=true'></script>";
    }
    function query ( $pdo, $query, $parameters=[]) {  
    
        $query = $pdo->prepare($query);
        $query->execute($parameters);
        return $query;
        
    }
    function up_classement($pdo,$equipe){
        $sql ='SELECT `equipe1`, `but1`, `equipe2`, `but2`, `status` FROM `matchs` WHERE `equipe1`=? OR `equipe2`=?';
          $query=$pdo->prepare($sql);
          $query->execute([$equipe,$equipe]);
          $matchs = $query->fetchAll();
          $butpour = 0;
          $butcontre = 0;
          $points = 0;
          $matchjouer = 0;
          $matchgagner = 0;
          $matchperdue = 0;
          $matchnull = 0;
          $points = 0;
          foreach ($matchs as $match) {
            
              if($match['status']==1){
                $matchjouer +=1;
                if($match['equipe1']==$equipe){
                  $butpour += $match['but1'];
                  $butcontre += $match['but2'];
                  if($match['but1']>$match['but2']){
                    $matchgagner+=1;
                    $points += 3;
                  }else{
                    if($match['but1']<$match['but2']){
                      $matchperdue += 1;
                    }else{
                      $matchnull +=1;
                      $points += 1;
                    }
                  }
                }else{
                    $butpour += $match['but2'];
                    $butcontre += $match['but1'];
                    if($match['but2']>$match['but1']){
                        $matchgagner+=1;
                        $points += 3;
                      }else{
                        if($match['but2']<$match['but1']){
                          $matchperdue += 1;
                        }else{
                          $matchnull +=1;
                          $points += 1;
                        }
                      }
                }
              }
              
          }
          $sql='UPDATE `classements` SET `jouer`=?,`gagner`=?,`perdu`=?,`null`=?,`points`=?,`butpour`=?,`butcontre`=?,`diffbut`=? WHERE `nom`=?';
          $query=$pdo->prepare($sql);
          $query->execute([$matchjouer,$matchgagner,$matchperdue,$matchnull,$points,$butpour,$butcontre,$butpour-$butcontre,$equipe]);

    }
?>