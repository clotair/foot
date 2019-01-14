<?php 
    require '../../../inc/db.php';
    function query ( $pdo, $query, $parameters=[]) {  
    
        $query = $pdo->prepare($query);
        $query->execute($parameters);
        return $query;
        
    }
 if(!empty($_POST['equipe1'])){
    echo '<div class="form mcp1">
            <div class="box1">
                <div class="nomequipe1"><h3>'.$_POST['equipe1'].'</h3></div>
                    <div class="logo1">';
                    $photo = query($pdo, 'SELECT `logo` FROM `equipe` WHERE nom=?',[$_POST['equipe1']])->fetch();
                    echo  '<img class="jolieimage"  src="/footapp2/logo/'.$photo[0].'.png" />';
                    echo '</div>
                </div>
                <div class="score">';
                    if($_POST['jouer'])
                    echo '<b>|</b>';
                    else
                    echo $_POST['but1'];
                    echo '
                </div>
                <div class="vs">VS</div>
                    '.
                '<div class="score">';
                    if($_POST['jouer'])
                    echo '<b>|</b>';
                    else
                    echo $_POST['but1'];
        echo    '</div>';
        echo '<div class="box2">
        <div class="nomequipe2"><h3>'.$_POST['equipe2'].'</h3></div>
        <div class="logo2">';
        $photo = query($pdo, 'SELECT `logo` FROM `equipe` WHERE nom=?',[$_POST['equipe2']])->fetch();
        echo  '<img class="jolieimage"  src="/footapp2/logo/'.$photo[0].'.png" />';
        echo '</div>
    </div>

</div>';

}



?>

<style type="text/css">
        <?php include('match.css');?>
</style>