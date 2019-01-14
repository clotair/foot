<section class="tout rpoule present">
    <a name="jour1"></a>
    <h1 >Premiere Journee</h1>

   <div class=" groupmatch" id="matchj1a">
      <h2>GROUPE A</h2>
      
    </div> 
    <div class="groupmatch" id="matchj1b">
        <h2>GROUPE B</h2>
      
    </div>
    <div class="groupmatch" id="matchj1c">
        <h2>GROUPE C</h2>
      
    </div>
    <div class="groupmatch" id="matchj1d">
        <h2>GROUPE D</h2>
      <app-match *ngFor="let match of gp4_j1|async" [idmacht]="match"></app-match>
    </div>
    <a id="jour2"></a>
    <h1 >Deuxieme Journee</h1>
  
    <div class="groupmatch" id="matchj2a">
        <h2>GROUPE A</h2>
        
      </div>
      <div class="groupmatch" id="matchj2b">
          <h2>GROUPE B</h2>
        
      </div>
      <div class="groupmatch" id="matchj2c">
          <h2>GROUPE C</h2>
        
      </div>
      <div class="groupmatch" id="matchj2d">
          <h2>GROUPE D</h2>
        
      </div>
    <a name="jour3"></a>
    <h1 >Troisieme Journee</h1>
  
    <div class="groupmatch" id="matchj3a">
        <h2>GROUPE A</h2>
        
      </div>
      <div class="groupmatch" id="matchj3ab">
          <h2>GROUPE B</h2>
        <app-match *ngFor="let match of gp2_j3|async" [idmacht]="match"></app-match>
      </div>
      <div class="groupmatch" id="matchj3c">
          <h2>GROUPE C</h2>
        <app-match *ngFor="let match of gp3_j3|async" [idmacht]="match"></app-match>
      </div>
      <div class="groupmatch" id="matchj3d">
          <h2>GROUPE D</h2>
        <app-match *ngFor="let match of gp4_j3|async" [idmacht]="match"></app-match>
      </div>
  </section>
  <style>
    <?php include('poule.css')?>
  </style>
  