
  <div >
    <h3>Joueur</h3>
    <form class="form" style="padding-left: 20px;" (submit)="add()">
        <div class="formgroup">
            <div class="jolielabel">
              <label for="name">NOM</label>
            </div>
       
           <div class="jolieinput">
              <input type="text" id="name" [(ngModel)]="joueur.nom" name="name" required>
           </div>
        </div>
        <div class="formgroup">
            <div class="jolielabel">
                <label for="name">PRENOM</label>
            </div>
            <div class="jolieinput">
                 <input type="text" id="name" [(ngModel)]="joueur.prenom"  name="prenom" required>
            </div>
        </div>
        
        <div class="formgroup">
            <div class="jolielabel">
              <label for="Taille">Taille</label>
            </div>
            <div class="jolieinput">
              <input type="number" id="Taille" [(ngModel)]="joueur.taille"  name="Taille" required>
            </div>
        </div>    
        <div class="formgroup">
            <div class="jolielabel">
              <label for="POID">POID</label>
            </div>
            <div class="jolieinput">
              <input type="number" id="POID" [(ngModel)]="joueur.poids"  name="POID" required>
            </div>
        </div>
        <div class="formgroup">
            <div class="jolielabel">
              <label for="age">Age</label>
            </div>
            <div class="jolieinput">
               <input type="number" id="age" [(ngModel)]="joueur.age"  name="age" >
            </div> 
        </div>
        <div class="formgroup">
            <div class="jolielabel">
              <label for="Dossard">Dossard</label>
            </div> 
        
        </div>
      <div class="buttonCo">
        <button class="buttonCe" type="submit">Ajouter</button>
      </div>
    </form>
  </div>
    
    
    
    
    
    
    