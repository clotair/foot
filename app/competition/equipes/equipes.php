<div class="formulaire equipes">
    <div class="message"></div>
    <h1>Equipe</h1>
<form     class="form"  (submit)=" sendep(fil)" >
<div class="equipe">
    <div class="basique">
        <div class="formgroup">
                <div class="jolielabel">
                    <label for="name">NOM</label>
                </div>
                <div class="jolieinput">
                    <input type="text"    name="nom" required>
                </div>
                
        </div>
        <div class="formgroup">
                <div class="jolielabel">
                    <label for="Represente">Represente:</label>
                </div>
                <div class="jolieinput">
                    <input type="text" id="Represente"  name="represente" >
                </div>
        </div>
  
        <div class="formgroup">
                <div class="jolielabel">
                    <label for="Coach">Coach:</label>
                </div>
                <div class="jolieinput">
                    <input type="text" id="Coach"   name="coach">
                </div>
        </div>



  
</div>
 
    <div  class="photo">
        <div id="prev"><img class="jolieimage"/></div>
        <div class="buttonCo">
            <button class="buttonCe" type="button" id="buttonph">photo</button>
        </div>
          <input type="file" id="file"  name="equipe_photo"  />
 
    </div>
</div>
  
    <div class="joueurInfos">
        <div class="joueur">
                <app-joueur  (nom)="neww($event)"></app-joueur>
        </div>
        <div class="rest"> 
                <h3>Liste joueurs</h3>
                <div style="overflow:auto;height:200px">
                    <ul class="liens">
                        <li *ngFor="let joueur of joueurs" class="button">{{joueur}}</li>
                    </ul>
                </div>
        </div>
    </div>
        <div class="buttonCo prin">
                <button type="submit" class="buttonCe ">Enregistrer</button>
        </div>
    </form>
</div>
<style type="text/css">
    <?php include('equipes.css')?>
</style>

