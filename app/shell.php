

<?php include("elements/header/header.php");?>
<section class="container">
<?php       
      if(isset($_GET['page'])){

    
            switch($_GET['page']){
                case 'manage':
                echo '<div class="competition pageN">';
                if(!empty( $_SESSION['connecter'])){
                  include('competition/competition.php');
                  
                }
                break;
                case 'competition':
                break;
                case 'classement':
                break;
                case 'resultat':
                break;
                default:
                echo '<div class="competition" hidden>';
                if(!empty( $_SESSION['connecter'])){
                  include('competition/competition.php');
                  
                }
                echo '</div>';
                echo  '<div class="resultat pageN" >';
                 include("resultat/index.php");
                echo '</div>
            
              <div class="classementA" hidden>';
                 include('classement/index.php');
              echo '</div>
              <div class="admin" hidden>';
                 include('connexion/connexion.php');
              echo '</div>';
                break;
            }
          }else{
            echo '<div class="competition" hidden>';
            if(!empty( $_SESSION['connecter'])){
              include('competition/competition.php');
              
            }
            echo '</div>';
            echo  '<div class="resultat pageN" >';
                 include("resultat/index.php");
                echo '</div>
            
              <div class="classementA" hidden>';
                 include('classement/index.php');
              echo '</div>
              <div class="admin" hidden>';
                 include('connexion/connexion.php');
              echo '</div>';
          }
?>



</section>
