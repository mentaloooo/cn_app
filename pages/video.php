<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include $_SERVER["DOCUMENT_ROOT"] . '/Cn-app/includes/_head.php'; ?>
    <meta description="">
    <title></title>
    <style>
        video {
            width: 100%;
            bottom: 90vh;
            z-index: 5; 
        }
        .content{
            position: absolute;
            bottom:0;

            height: 89vh;
            background: rgb(0,0,0);
            background: linear-gradient(0deg, rgba(0,0,0,1) 0%, rgba(0,0,0,1) 50%, rgba(0,0,0,0.11808473389355745) 100%);
            color: white;
        }
        h2 {
            font-weight:bold;
        }
        h3 {
            font-size: 1.1em;
            font-weight: bold;
        }
    </style>
</head>
    <body>
        <!--todo: dl l'episode-->
        <?php 
            include $_SERVER["DOCUMENT_ROOT"] . '/Cn-app/partials/_all_series_slider.php';
            $bdd = new PDO('mysql:host=localhost;dbname=cn-watch;charset=utf8', "root", "", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
            $request_episode = $bdd->query('SELECT * FROM episode WHERE id=' . $_GET['id']);
            $episode = $request_episode->fetch();
        ?>
        <div class="content">
            <video controls width="250" poster=<?='/Cn-app/assets/imgs/screen_episodes/' . $_GET['serie_name'] . '/s' . $episode['season_num'] . '_e' .$episode['episode_num']?>>
                <source src=<?='/Cn-app' . $episode['link']?> type='video/mp4'></source>
            </video>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <h1 class="mb-3"><?=$_GET['serie_name']?></h1>
                        <h2><?=$episode["name"]?></h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6"><?='Saison ' .  $episode['season_num'] . '- Ep '.  $episode['episode_num'] ?></div>
                    <div class="col-6 text-right">Durée : 25 min</div>
                </div>
                <div class="row mt-3">
                    <div class="col-12">
                        <h3>Résumé : </h3>
                        <p>
                            Les cookies vendus par les scouts sont enfin 
                            arrivés ! Malheureusement, les seuls qui soient 
                            mangeables sont ceux des boîtes vertes. La bagarre pour ces délicieux cookies fait donc rage. 
                        </p>
                    </div>
                   
                </div>
            </div>
           
            
        </div>
        
        <?php include  $_SERVER["DOCUMENT_ROOT"] . '/Cn-app/partials/_video_game_bot_menu.php' ?>
        
        <?php include $_SERVER["DOCUMENT_ROOT"] . '/Cn-app/includes/_scripts.php'; ?>
        <script src="/Cn-app/assets/js/main.js"></script>
        <?php $request_episode ->closeCursor();
        ?>
    </body>
</html> 