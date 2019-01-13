

<?php include("elements/header/header.php");?>
<section>
  <div class="competition " hidden>
    <?php include('competition/index.php');?>
  </div>
  <div class="resultat pageN" >
    <?php include('resultat/index.php');?>
  </div>

  <div class="classement" hidden>
    <?php include('classement/index.php');?>
  </div>
</section>
<?php include("elements/footer/footer.php");?>