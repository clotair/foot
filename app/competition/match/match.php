<?php 
    require '../../../inc/db.php';
    function query ( $pdo, $query, $parameters=[]) {  
    
        $query = $pdo->prepare($query);
        $query->execute($parameters);
        return $query;
        
    }
?>
<div   class="formul mcp">

     
          <form     class="form" >
              <div class="box1"><div class="nomequipe1"><?php 
if(!empty($_POST['equipe1'])){
 echo $_POST['equipe1'];
}?></div>
              <div class="logo1">
                  
                  <?php 
if(!empty($_POST['equipe1'])){
    $photo = query($pdo, 'SELECT `logo` FROM `equipe` WHERE nom=?',[$_POST['equipe1']])->fetch();
   echo  '<img class="jolieimage"  src="/footapp2/logo/'.$photo[0].'.png" />';
}?>
              </div></div>
              <div>
              <?php 
if(!empty($_POST['equipe1'])&&empty($_POST['but1'])){
    echo '<input type="number" class="scoreinput"  name="score1" placeholder="score" value="'.$_POST['but1'].'" min="0">';
}else
echo '<input type="number" class="scoreinput"  name="score1" placeholder="score" [value]="0" min="0">';
?>
                  
              </div>
              <div class="vs">VS</div>
              <div>
              <?php 
if(!empty($_POST['equipe1'])){
    echo '<input type="number" class="scoreinput"  name="score1" placeholder="score" value="'.$_POST['but2'].'" min="0">';
}else
echo '<input type="number" class="scoreinput"  name="score1" placeholder="score" value="0" min="0">';
?>             </div>
              
              <div class="box2"><div class="nomequipe2">
                <?php
              if(!empty($_POST['equipe1'])){
   echo  $_POST['equipe2'].'';
}?> 
              </div><div class="logo2">
              <?php 
if(!empty($_POST['equipe2'])){
    $photo = query($pdo, 'SELECT `logo` FROM `equipe` WHERE nom=?',[$_POST['equipe2']])->fetch();
   echo  '<img class="jolieimage"  src="/footapp2/logo/'.$photo[0].'.png" />';
}?>            </div></div>
             
          </form>
     

          <div class="buttonCo">
            <button type="submit" id="send" class="buttonCe" value="Save" (click)="save()">Save</button>
        </div>    
       
           
     
    
  </div>
<style type="text/css">
    <?php include('match.css')?>
</style>