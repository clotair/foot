

<?php include("elements/header/header.php");?>
<section class="container">
  <div class="competition " hidden>
    <?php 
      if(!empty( $_SESSION['connecter']))
      include('competition/competition.php');
      ?>
  </div>
  <div class="resultat pageN" >
    <?php include('resultat/resultat.php');?>
  </div>

  <div class="classementA" hidden>
    <?php include('classement/classement.php');?>
  </div>
  <div class="admin" hidden>
    <?php include('connexion/connexion.php');?>
  </div>
</section>
