<?php 
  require '../../../controllers/fontions.php';
  require '../../../inc/db.php';
  $method = $_SERVER['REQUEST_METHOD'];
?>
<?php
echo '<div   class="formul mcp">

     
          <form     class="form" >
              <div class="box1"><div class="nomequipe1">';
 echo $_POST['equipe1'];
 echo '</div>
              <div class="logo1">';
              $photo = query($pdo, 'SELECT `logo` FROM `equipe` WHERE nom=?',[$_POST['equipe1']])->fetch();
              echo  '<img class="jolieimage"  src="/footapp2/logo/'.$photo[0].'.png" />';

echo              '</div></div>
              <div>';
              
    echo '<input type="number" class="scoreinput"  name="score1" placeholder="score" [value]="'.$_POST['but1'].'" min="0">';


                  
echo              '</div>
              <div class="vs">VS</div>
              <div>';
    echo '<input type="number" class="scoreinput"  name="score1" placeholder="score" [value]="'.$_POST['but2'].'" min="0">';            
    
echo '</div>';
              
echo              '<div class="box2"><div class="nomequipe2">';
echo $_POST['equipe2'].'</div><div class="logo2">';
$photo = query($pdo, 'SELECT `logo` FROM `equipe` WHERE nom=?',[$_POST['equipe2']])->fetch();
        echo  '<img class="jolieimage"  src="/footapp2/logo/'.$photo[0].'.png" />';
echo              '</div></div>
             
          </form>
     

          <div class="buttonCo">';
    echo         '<button type="button" id="send" class="buttonCe ttt" value="Save" >Save</button>';
    echo    '</div>    
       
           
     
    
  </div>';
  ?>
<style type="text/css">
    <?php include('match.css')?>
</style>