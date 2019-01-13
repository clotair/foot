
    <header class="tete" id="apphead">

<div class="menu">
  <div class="petite">
          <div id="logo"><a href="/">ACTUFOOT</a></div>
          <img class="men" id="menu" src="/footapp2/assets/menu.png" width="40" height="40">
  </div>

   <div class="navbar">
       <ul class="nav-menu">
       <?php if(!empty( $_SESSION['connecter'])){
           if(isset($_GET['manage']))
           echo '<li ><a href="" id="manage" class="active">Manage</a></li>';
           else
           echo '<li ><a href="" id="manage" >Manage</a></li>';
        }
        
        ?>
        <?php
            if(!$_GET)
            echo '<li ><a href="" id="match" class="active">Match</a></li>';
            else
            echo '<li ><a href="" id="match" >Match</a></li>';
        ?>
        
        <li ><a href="" id="classement">Classement</a></li>
        <?php if(empty($_SESSION['connecter']))
            echo "<li class='dec'><a href='' id='admin'>Admin</a></li>";
            else
            echo "<li class='dec'><a href='/footapp2/controllers/deconnexion.php' >Deconnexion</a></li>";
        ?>          
       </ul>
  
    </div>
    
</div>
  
<div class="overley" id="content">

  </div>
</header>

    <style type="text/css">
        <?php include('header.css');?>
    </style>
    
   
  
  