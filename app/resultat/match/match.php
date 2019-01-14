<?php 
 if(!empty($_POST['equipe1'])){
    echo '<div class="form">
            <div class="box1">
                <div class="nomequipe1"><h3>'.$_POST['equipe1'].'</h3></div>
                    <div class="logo1">
                        <img class="jolieimage" src="'.$_POST['photo1'].'"/>
                            
                    </div>
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
                    echo $_POST['but1']
        echo    '</div>'
        '<div class="box2">
        <div class="nomequipe2"><h3>'.$_POST['equipe2'].'</h3></div>
        <div class="logo2">
            <img class="jolieimage" src="'.$_POST['photo2'].'"/>
        </div>
    </div>

</div>';

}



?>

<style type="text/css">
        <?php include('match.css');?>
</style>