<?php
    $bdd = new PDO('mysql:host=localhost;dbname=cn-watch;charset=utf8', "root", "", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
    $series = $bdd->query('SELECT id,name, ico_link FROM serie');
?>
<style>
    #all_series_slider img{
        margin-right: 15px;
        max-height: 75px;
    }
    #all_series_slider {
        border-bottom: 1px solid #121212;
        position: -webkit-sticky;
        position: sticky;
        top: 8vh;
        z-index: 1000000;
        background-color: white;
    }
</style>
<div id="all_series_slider">
    <?php while ($serie = $series->fetch()){ ?>
        <div class="slide" data-id=<?=$serie['id'];?>>
            <a href=<?='/Cn-app/pages/serie?id=' . $serie['id'];?>>
                <img class="img-fluid" src=<?='/Cn-app' . $serie['ico_link'];?> alt=<?=$serie['name'];?>>
            </a>
        </div>
    <?php } ?>
</div>
<?php $series->closeCursor(); ?>