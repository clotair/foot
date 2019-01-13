<section class="tout finale" hidden>
    <h1> Finale</h1>
    <article *ngFor="let match of matchs|async" class="groupmatch">
      <app-match  [idmacht]="match.matchs[0]"></app-match>
    </article>
    
</section>
<style type="text/css">
  <?php include('finale.css')?>
</style>