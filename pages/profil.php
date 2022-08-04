<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include $_SERVER["DOCUMENT_ROOT"] . '/Cn-app/includes/_head.php'; ?>
    <meta description="">
    <title>Mon profil</title>
    <style>
        .profil_picture {
            border-radius: 500px;
        }
        .profil_name {
            display: flex;
            align-items: center;
            font-weight: bold;
        }
        .profil_menu {
            display: flex;
            justify-content: center;
            z-index: 10;
        }
        .item.historique {
            background-color: #009BDF;
        }
        .item.favoris {
            background-color: #FFF15C;
        }
        .item.aimée {
            background-color: #EA3B9A;
        }
        .item.profil {
            background-color: #000000;
        }
        .profil_menu > div {
            padding: 15px;
        }
        .episode_infos{
            height:auto;
            width: 100%;
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
        .profil_content {
            width: 90%;
            margin: auto;
        }
        .profil_content h2 {
            font-family: "LubalinBold", serif;
            font-weight: bold;
        }
        .background{
            background-color: #009BDF;
            position: relative;
            padding-top: 3em;
            padding-bottom: 3em;
            bottom: 35px;
            margin-bottom:-35px;
            z-index: -5;
        }
        .profil_name {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <?php include $_SERVER["DOCUMENT_ROOT"] . '/Cn-app/partials/_header.php'; ?>
    <?php include $_SERVER["DOCUMENT_ROOT"] . '/Cn-app/partials/_all_series_slider.php'; ?>

    <div class="container-fluid mt-4">
        <div class="row">
            <div class="col-4">
                <img class="profil_picture img-fluid" src="/Cn-app/assets/imgs/profils_ico/louis.png" alt="">
            </div>
            <div class="col-8 profil_name ">
                <p class="h2 profil_name">Louis</p>
            </div>
        </div>
    </div>
    
    <div class="profil_menu mt-4">
        <div class="item historique" data-target="historique">
        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 24 24"><path fill="#fff" d="M24 12c0 6.627-5.373 12-12 12s-12-5.373-12-12h2c0 5.514 4.486 10 10 10s10-4.486 10-10-4.486-10-10-10c-2.777 0-5.287 1.141-7.099 2.977l2.061 2.061-6.962 1.354 1.305-7.013 2.179 2.18c2.172-2.196 5.182-3.559 8.516-3.559 6.627 0 12 5.373 12 12zm-13-6v8h7v-2h-5v-6h-2z"/></svg>
        </div>
        <div class="item favoris" data-target="favoris">
            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 24 24"><path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.828 1.48 8.279-7.416-3.967-7.417 3.967 1.481-8.279-6.064-5.828 8.332-1.151z"/></svg>
        </div>
        <div class="item aimée" data-target="aimée">
            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="30" viewBox="0 0 24 24"><path fill="#fff" d="M12 4.435c-1.989-5.399-12-4.597-12 3.568 0 4.068 3.06 9.481 12 14.997 8.94-5.516 12-10.929 12-14.997 0-8.118-10-8.999-12-3.568z"/></svg>
        </div>
        <div class="item profil" data-target="profil">
            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 24 24"><path fill="#fff" d="M20.822 18.096c-3.439-.794-6.64-1.49-5.09-4.418 4.72-8.912 1.251-13.678-3.732-13.678-5.082 0-8.464 4.949-3.732 13.678 1.597 2.945-1.725 3.641-5.09 4.418-3.073.71-3.188 2.236-3.178 4.904l.004 1h23.99l.004-.969c.012-2.688-.092-4.222-3.176-4.935z"/></svg>
        </div>
    </div>
    <div class="background">

        <div class="profil_content">
            <div class="historique">
            <h2 class="my-4">Votre historique</h2>
                <div class="episode mb-3">
                    <div class="fond_noir">
                        <a href=<?='/Cn-app/pages/video?id=' . '1' . "&serie_name=Adventure%20time"  ?>>
                            <img class="img-fluid" src=<?='/Cn-app/assets/imgs/screen_episodes/' . 'adventure-time' . '/s' . '1' . '_e' .'1'?> alt="">
                        </a>
                        <div class="episode_infos">
                            <h2 style="font-size: 1.5em;">Dungeon</h2>
                            <p class="episode_number">Saison 1 Ep 1</p>
                        </div>
                    </div>
                </div>
                <div class="episode">
                    <div class="fond_noir">
                        <a href=<?='/Cn-app/pages/video?id=' . '12' . "&serie_name=Super%20nana"  ?>>
                            <img class="img-fluid" src=<?='/Cn-app/assets/imgs/screen_episodes/' . 'super-nana' . '/s' . '1' . '_e' .'2'?> alt="">
                        </a>
                        <div class="episode_infos">
                            <h2 style="font-size: 1.5em;">Le cadeau</h2>
                            <p class="episode_number">Saison 1 Ep 2</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="favoris">
                <h2 class="my-4">Vos favoris</h2>
                <div class="episode mb-3">
                    <div class="fond_noir">
                        <a href=<?='/Cn-app/pages/video?id=' . '1' . "&serie_name=Adventure%20time"  ?>>
                            <img class="img-fluid" src=<?='/Cn-app/assets/imgs/screen_episodes/' . 'adventure-time' . '/s' . '1' . '_e' .'1'?> alt="">
                        </a>
                        <div class="episode_infos">
                            <h2 style="font-size: 1.5em;">Dungeon</h2>
                            <p class="episode_number">Saison 1 Ep 1</p>
                        </div>
                    </div>
                </div>
                <div class="episode">
                    <div class="fond_noir">
                        <a href=<?='/Cn-app/pages/video?id=' . '12' . "&serie_name=Super%20nana"  ?>>
                            <img class="img-fluid" src=<?='/Cn-app/assets/imgs/screen_episodes/' . 'super-nana' . '/s' . '1' . '_e' .'2'?> alt="">
                        </a>
                        <div class="episode_infos">
                            <h2 style="font-size: 1.5em;">Le cadeau</h2>
                            <p class="episode_number">Saison 1 Ep 2</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="aimée">
            <h2 class="my-4">Aimées</h2>
                <div class="episode mb-3">
                    <div class="fond_noir">
                        <a href=<?='/Cn-app/pages/video?id=' . '1' . "&serie_name=Adventure%20time"  ?>>
                            <img class="img-fluid" src=<?='/Cn-app/assets/imgs/screen_episodes/' . 'adventure-time' . '/s' . '1' . '_e' .'1'?> alt="">
                        </a>
                        <div class="episode_infos">
                            <h2 style="font-size: 1.5em;">Dungeon</h2>
                            <p class="episode_number">Saison 1 Ep 1</p>
                        </div>
                    </div>
                </div>
                <div class="episode">
                    <div class="fond_noir">
                        <a href=<?='/Cn-app/pages/video?id=' . '12' . "&serie_name=Super%20nana"  ?>>
                            <img class="img-fluid" src=<?='/Cn-app/assets/imgs/screen_episodes/' . 'super-nana' . '/s' . '1' . '_e' .'2'?> alt="">
                        </a>
                        <div class="episode_infos">
                            <h2 style="font-size: 1.5em;">Le cadeau</h2>
                            <p class="episode_number">Saison 1 Ep 2</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="profil"></div>
        </div>


    </div>

    <?php include $_SERVER["DOCUMENT_ROOT"] . '/Cn-app/includes/_scripts.php'; ?>
    <?php include  $_SERVER["DOCUMENT_ROOT"] . '/Cn-app/partials/_video_game_bot_menu.php'; ?>
    <script src="/Cn-app/assets/js/main.js"></script>
    <script>
        $(".profil_menu div").click(function(){
            target = $(this).data("target")
            $(".profil_content > div").hide();
            $(".profil_content ." + target).show()
            $(".background").css("background-color", $(".item." + target).css("background-color"))
        })
        $(".item.historique").click()
    </script>
</body>
<html>