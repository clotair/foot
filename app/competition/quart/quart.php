<section class="quart" hidden>
    <h1>Quart de finale</h1>
    <article *ngFor="let match of matchs|async">
      <h2>{{match.nom}}</h2>
      <app-match  [idmacht]="match.matchs[0]"></app-match>
    </article>
    <div class="buttonCo">
        <button (click)="demi()" class="buttonCe prinb">init demi</button>
    </div>
    
</section>
<style>
  <?php include('quart.css')?>
</style>