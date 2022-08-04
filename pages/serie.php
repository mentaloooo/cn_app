<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include $_SERVER["DOCUMENT_ROOT"] . '/Cn-app/includes/_head.php'; ?>
    <meta description="">
    <title></title>
    <style>
        h1 {
            font-size: 1.3em;
        }
        .episode_infos{
            height:auto;
            width: 92.5%;
            position: absolute;
            bottom: 0%;
            color: white;
            background: rgb(0,0,0);
            background: linear-gradient(0deg, rgba(0,0,0,0.9360119047619048) 0%, rgba(0,0,0,0.7791491596638656) 51%, rgba(0,0,0,0.09007352941176472) 100%);
        }
        .episode_infos h2 {
            font-size: 1.15em;
            font-weight: bold;
            margin-left: 0.3em;
            margin-top: 0.2em;
        }
        .episode_infos p {
            font-size: 0.95em;
            margin-left: 0.3em;
            margin-top: 0.2em;
            padding-bottom: -0.4em;
        }
        .episode {
            position: relative;
        }

    </style>
</head>
    <body>
        <?php 
             include $_SERVER["DOCUMENT_ROOT"] . '/Cn-app/partials/_header.php';
             include $_SERVER["DOCUMENT_ROOT"] . '/Cn-app/partials/_all_series_slider.php';
             $bdd = new PDO('mysql:host=localhost;dbname=cn-watch;charset=utf8', "root", "", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
             $request_serie = $bdd->query('SELECT * FROM serie WHERE id=' . $_GET['id']);
             $serie = $request_serie->fetch();
             
        ?>
        <div>
            <img class="img-fluid" src=<?='/Cn-app/assets/imgs/series_background/' . $serie['name'] . '.png';?> alt="banniere serie" class="">
        </div>
         
        <div class="container-fluid" id="container-fluid">
            <div class="row">
                <div class="col-12 serie_ban d-flex justify-content-center">
                   
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <h1 class="mt-3"><?=$serie['real_name'];?></h1>
                </div>
                <div class="col-2 mt-3">
                    <select name="" id="">
                        <option>Saison 1</option>
                    </select>
                </div>
            </div>
            <div class="row mt-3">
                <?php $episodes = $bdd->query('SELECT * FROM episode WHERE serie_id=' . $_GET['id']);?>
                <?php while ($episode =  $episodes->fetch()){?>
                    <div class="col-sm-6 col-md-4 mb-4 episode">
                        <div class="fond_noir">
                            <a href=<?='/Cn-app/pages/video?id=' . $episode["id"] . "&serie_name=" . str_replace(" ", "%20", $serie['real_name']) ?>>
                                <img class="img-fluid" src=<?='/Cn-app/assets/imgs/screen_episodes/' . $serie['name'] . '/s' . $episode['season_num'] . '_e' .$episode['episode_num']?> alt="">
                            </a>
                            <div class="episode_infos">
                                <h2><?=$episode["name"]?></h2>
                                <p class="episode_number">Saison <?=$episode["season_num"]?> Ep <?=$episode["episode_num"]?></p>
                            </div>


                        </div>
                    </div>
                    
                <?php } ?>
            </div>
        </div>
        <?php include  $_SERVER["DOCUMENT_ROOT"] . '/Cn-app/partials/_video_game_bot_menu.php'; ?>
        <?php include $_SERVER["DOCUMENT_ROOT"] . '/Cn-app/includes/_scripts.php'; ?>
        <script src="/Cn-app/assets/js/main.js"></script>
        
        
        <?php $request_serie->closeCursor(); 
            $episodes -> closeCursor();
        ?>
       
    </body>
</html> 

