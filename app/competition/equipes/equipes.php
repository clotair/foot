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
  




  
    </div>
 
    <div  class="photo">
        <div id="prev"><img class="jolieimage"/></div>
        <div class="buttonCo">
            <button class="buttonCe" type="button" id="buttonph">photo</button>
        </div>
          <input type="file" id="file"  name="equipe_photo"  />
 
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

