<?php 
    require 'inc/db.php';
    function query ( $pdo, $query, $parameters=[]) {  
    
        $query = $pdo->prepare($query);
        $query->execute($parameters);
        return $query;
        
    }

?>
<section class="classement"	>
    <h1>classement </h1>
    <div *ngFor="let poule of poule1|async" class="grp">
        <table class="table">
            <caption>{{poule.nom |uppercase}}</caption>
            <thead>
                <tr>
                    <th></th> 
                    <th class="eq">Equipe</th>
                    <th>MJ</th>
                    <th class="disp">MG</th>
                    <th class="disp">MP</th>
                    <th class="disp">N</th>
                    <th class="points">Pts</th>
                    <th class="disp">BP</th>
                    <th class="disp">BC</th>
                    <th>DB</th>
                </tr>
            </thead>
            <tbody>
                <tr *ngFor="let equipes of poule.classement; let i = index" [class.promu]="i==0||i==1">
                    <td>{{i+1}}</td> 
                    <td><span><img *ngIf="equipes.banniere" src="/images/`{{equipes.banniere}}`"></span>
                        <span>{{equipes.nom}}</span></td>
                    <td >{{equipes.gagner+equipes.perdue+equipes.Null}}</td>
                    <td class="disp">{{equipes.gagner}}</td>
                    <td class="disp">{{equipes.perdue}}</td>
                    <td class="disp">{{equipes.Null}}</td>
                    <td class="points">{{equipes.points}}</td>
                    <td class="disp">{{equipes.buts_pour}}</td>
                    <td class="disp">{{equipes.buts_contre}}</td>
                    <td>{{equipes.buts_pour-equipes.buts_contre}}</td>
                </tr>
            </tbody>
        </table>
    </div>
</section>
<style type="text/css">
    <?php include('poule.css');?>
</style>