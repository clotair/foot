<section class="demi" hidden>
    <h1>Demi finale</h1>
    <article *ngFor="let match of matchs|async">
      <h2>{{(match.nom=='MATCH 5')?'MATCH 1':'MATCH 2'}}</h2>
      <app-match  [idmacht]="match.matchs[0]"></app-match>
    </article>
    <div class="buttonCo">
        <button (click)="finale()" class="buttonCe prinb">finale</button>
    </div>
    
  </section>
  <style type="text/css">
    <?php include('demi.css') ?>
  </style>