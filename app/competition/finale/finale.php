<section class="finale" hidden>
    <h1>Finale</h1>
    <article *ngFor="let match of matchs|async">

      <app-match  [idmacht]="match.matchs[0]"></app-match>
    </article>
    
</section>