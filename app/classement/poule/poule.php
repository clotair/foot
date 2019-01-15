<?php 
    
        require_once 'inc/db.php'; 
     
   
    function query ( $pdo, $query, $parameters=[]) {  
    
        $query = $pdo->prepare($query);
        $query->execute($parameters);
        return $query;
        
    }
    
    $A=query($pdo,'SELECT * FROM `classements` WHERE `groupe`=? ORDER BY `points` ASC',['A']);
    $equipe1 = $A->fetchAll();
    
   
    $B=query($pdo,'SELECT * FROM `classements` WHERE `groupe`=? ORDER BY `points` ASC',['B']);
    $equipe2 = $B->fetchAll();
    $C=query($pdo,'SELECT * FROM `classements` WHERE `groupe`=? ORDER BY `points` ASC',['C']);
    $equipe3 = $C->fetchAll();
    $D=query($pdo,'SELECT * FROM `classements` WHERE `groupe`=? ORDER BY `points` ASC',['D']);
    $equipe4 = $D->fetchAll();

    $poules = array(
        'A' => $equipe1,
        'B' => $equipe2,
        'C' => $equipe3,
        'E' => $equipe4
    )
    
?>
<section class="classement"	>
    <h1>classement </h1>
<?php foreach ($poules as $nom => $poule) {?>
    <div class="grp">
    
        <table class="table">
            <caption>GROUPE  <?php echo $nom;?> </caption>
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
             <?php $i=0;foreach ($poule as $equipe) {?>
                <tr>
                    <td><?php echo ++$i;?></td> 
                    <td>
                    <span>
                    <?php $photo = query($pdo, 'SELECT `logo` FROM `equipe` WHERE nom=?',[$equipe['nom']])->fetch(); 
                     echo '<img  src="/footapp2/logo/'.$photo[0].'.png"/>'?>
                    </span>
                        <span><?php echo $equipe['nom'];?></span></td>
                    <td ><?php echo $equipe['jouer'];?></td>
                    <td class="disp"><?php echo $equipe['gagner'];?></td>
                    <td class="disp"><?php echo $equipe['perdu'];?></td>
                    <td class="disp"><?php echo $equipe['null'];?></td>
                    <td class="points"><?php echo $equipe['points'];?></td>
                    <td class="disp"><?php echo $equipe['butpour'];?></td>
                    <td class="disp"><?php echo $equipe['butcontre'];?></td>
                    <td><?php echo $equipe['diffbut'];?></td>
                </tr>
             <?php }?>
            </tbody>
        </table>
    </div>
    <?php }?>
</section>
<style type="text/css">
    <?php include('poule.css');?>
</style>