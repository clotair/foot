
    <header class="tete" id="apphead">

<div class="menu">
  <div class="petite">
          <div id="logo"><a href="/">ACTUFOOT</a></div>
          <img class="men" id="menu" src="/footapp2/assets/menu.png" width="40" height="40">
  </div>

   <div class="navbar">
       <ul class="nav-menu">
       <?php if(!empty( $_SESSION['connecter'])){
           echo '<li ><a href="" id="manage" >Manage</a></li>';
       }
        
        ?>
        
        <li ><a href="" id="match" class="active">Match</a></li>
        <li ><a href="" id="classement">Classement</a></li>
        <li class="dec"><a href="" id="admin">Admin</a></li>
           
       </ul>
  
    </div>
    
</div>
  
<div class="overley" id="content">

  </div>
</header>

    <style type="text/css">
        <?php include('header.css');?>
    </style>
    
   
  
  