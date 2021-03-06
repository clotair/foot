<div class="overl" (click)="back()">
 
</div>
<article class="contain" *ngIf="equipes |async as eq">
    <header >
      <img src="/images/{{eq.equipe.banniere}}"/>
    </header>
    <main class="stats">
      <h1>{{eq.equipe.nom}}</h1>
      
      <table class="table">
        <thead>
          <tr>
            <th>Match jouer</th>
            <th>Match ganer</th>
            <th>Match perdue</th>
            <th>Match null</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>{{eq.stats.win.length+eq.stats.lose.length + eq.stats.null.length}}</td>
            <td>{{eq.stats.win.length}}</td>
            <td>{{eq.stats.lose.length}}</td>
            <td>{{eq.stats.null.length}}</td>
          </tr>
          <tr *ngFor="let mtch of eq.stats.win">
            <td><a  href="/stat/equipe/{{mtch.adversaire._id}}" >{{mtch.adversaire.nom}}</a></td>
            <td class="succes">{{mtch.butp}} - {{mtch.butc}}</td>
            <td></td>
            <td></td>
          </tr>
          <tr *ngFor="let mtch of eq.stats.null">
              <td><a href="/stat/equipe/{{mtch.adversaire._id}}" >{{mtch.adversaire.nom}}</a></td>
              <td></td>
              <td></td>
              <td class="null">{{mtch.but}} - {{mtch.but}}</td>
          </tr>
          <tr *ngFor="let mtch of eq.stats.lose">
              <td><a href="/stat/equipe/{{mtch.adversaire._id}}">{{mtch.adversaire.nom}}</a></td>
              <td></td>
              <td class="lose">{{mtch.butc}} - {{mtch.butp}}</td>
              <td></td>
          </tr>
        </tbody>
      </table>
    </main>
    <footer></footer>
</article>
<style type="text/css">
  <?php include('info_equipe.css')?>
</style>