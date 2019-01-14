<?php 
  require 'fontions.php';
  require '../inc/db.php';
  $method = $_SERVER['REQUEST_METHOD'];
?>
<?php
echo '<div   class="formul">

     
          <form     class="form" >
              <div class="box1"><div class="nomequipe1">';
 echo $_POST['equipe1'];
 echo '</div>
              <div class="logo1">';
 echo                 '<img class="jolieimage"  src="/images/{{equip?.equipe1?.banniere}}" />';

echo              '</div></div>
              <div>';
              
    echo '<input type="number" class="scoreinput"  name="score1" placeholder="score" [value]="'.$_POST['but1'].'" min="0">';


                  
echo              '</div>
              <div class="vs">VS</div>
              <div>'
    echo '<input type="number" class="scoreinput"  name="score1" placeholder="score" [value]="'.$_POST['but2'].'" min="0">';            
    
echo '</div>';
              
echo              '<div class="box2"><div class="nomequipe2">';
echo $_POST['equipe2'].'</div><div class="logo2">'
echo                '<img class="jolieimage"  src="/images/{{equip?.equipe2?.banniere}}" />';
echo              '</div></div>
             
          </form>
     

          <div class="buttonCo">';
    echo         '<button type="submit" id="send" class="buttonCe" value="Save" (click)="save()">Save</button>';
    echo    '</div>    
       
           
     
    
  </div>';
  ?>
<style type="text/css">
    <?php include('match.css')?>
</style>