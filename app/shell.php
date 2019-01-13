

<?php include("elements/header/header.php");?>
<section class="container">

  `<?php

      if(!empty( $_SESSION['connecter'])){
        if(isset( $_GET['manage']))
        echo '<div class="competition pageN" >';
      else
      echo '<div class="competition" hidden>';
        include('competition/competition.php');
        
      }else{
        echo '<div class="competition" hidden>';
      }
      echo '</div>';
      
    ?>
    <?php
      if(empty( $_GET))
        echo '<div class="resultat pageN" >';
      else
      echo '<div class="resultat hidden" >';
    ?>
    
      <?php include('resultat/index.php');?>
    </div>

    <div class="classementA" hidden>
    <?php include('classement/index.php');?>
    </div>
    <div class="admin" hidden>
      <?php include('connexion/connexion.php');?>
    </div>

</section>
