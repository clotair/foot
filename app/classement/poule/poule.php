<?php 
<<<<<<< HEAD
    /*require 'inc/db.php';
=======
    require 'inc/db.php';
$method = $_SERVER['REQUEST_METHOD'];
>>>>>>> 54fbda5bcc89e6beeb5fdaa6fc38a8043c32baf9
    function query ( $pdo, $query, $parameters=[]) {  
    
        $query = $pdo->prepare($query);
        $query->execute($parameters);
        return $query;
        
    }
<<<<<<< HEAD
    $sql=$pdo->prepare('SELECT `equipe1` FROM `matchs` WHERE `polue`=?');
    $A=$sql->execute(['A']);
    $equipe1 = $A->fetch();
    $B=$sql->execute(['B']);
    $equipe2 = $B->fetch();
    $C=$sql->execute(['C']);
    $equipe3 = $C->fetch();
    $D=$sql->execute(['D']);
    $equipe4 = $D->fetch();
    $sql=$pdo->prepare('SELECT * FROM `matchs` WHERE `polue`=?');
    $A=$sql->execute(['A']);
    $matchA = $A->fetch();
    $B=$sql->execute(['B']);
    $matchB = $B->fetch();
    $C=$sql->execute(['C']);
    $matchC = $C->fetch();
    $D=$sql->execute(['D']);
    $matchD = $D->fetch();
    foreach($matchA as $macth){
        switch($match->equipe1){
            case $equipe1[0]:
                if($macth->but1<$match->but2){
                    $equipe1[0]-
                }else{
                    if($macth->but1<$match->but2){

                    }else{

                    }
                }
            break;
            case $equipe1[1]:
            break;
            case $equipe1[2]:
            break;
            case $equipe1[3]:
            break;
        }
    }*/
=======
<<<<<<< HEAD
 if ($method == 'GET') {
     resultat1=[];
     resultat2=[];
 $score = query($pdo, 'SELECT `equipe1`, `equipe2`, `but1`, `but2` , `status` FROM `matchs` WHERE `poule`=:poul ORDER BY `jour`', [':poul'=>'A'])->fetchAll(PDO::FETCH_ASSOC);
     for ($i=0;$i< count($score); $i++){
        if($score[i]['status']==1){
            $resultat1['P'] = $resultat2['G'] =  $resultat2['P'] = $resultat1['G'] = 0;
                if( !($resultat2['N'] = $resultat1['N'] = $score[i]['but1'] == $score[i]['but2'] ? 1 : 0)) {
                $resultat1['P'] = $resultat2['G'] = ( $resultat2['P'] = $resultat1['G'] = $score[i]['but1'] > $score[i]['but2'] ? 1 : 0 ) ? 0 : 1;
                }
     if( !( $resultat2['pts'] = $resultat1['pts'] = $resultat1['N']) ) {
                    $resultat1['pts'] = $score[i]['but1'] > $score[i]['but2'] ? 3 : 0 ;   
                    $resultat2['pts'] = $score[i]['but1'] < $score[i]['but2'] ? 3 : 0 ;   
                }
     }
        
 } else {
       echo json_response("false",400);
    }
             
=======

>>>>>>> 99e1d0573b1ae5f4211778eb3996fa00e8579b29
>>>>>>> 54fbda5bcc89e6beeb5fdaa6fc38a8043c32baf9
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