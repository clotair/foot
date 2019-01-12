
    <header class="tete" id="apphead">

      <div class="menu">
        <div class="petite">
                <div id="logo"><a routerLink="/acceuil">ACTUFOOT</a></div>
                <img class="men" id="menu" src="/assets/menu.png" width="40" height="40">
        </div>

         <div class="navbar">
             <ul class="nav-menu">
              <li ><a href="/competition" id="manage" *ngIf="connecter">Manage</a></li>
              <li ><a href="/resultat" id="match" class="active">Match</a></li>
              <li ><a href="/classement" id="classement">Classement</a></li>
              <li class="dec"><a href="/connexion" id="admin">Admin</a></li>
                 
             </ul>
        
          </div>
          
      </div>
        
      <div class="overley" id="content">
  
        </div>
    </header>
    <style type="text/css">
        <?php include('header.css');?>
    </style>
    
  