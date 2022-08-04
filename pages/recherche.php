<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include $_SERVER["DOCUMENT_ROOT"] . '/Cn-app/includes/_head.php'; ?>
    <meta description="">
    <title>Page de recherche</title>
    <link rel="stylesheet" href="/Cn-app/assets/css/recherche.css"/>
</head>
    <body class="text-center">
    <?php include $_SERVER["DOCUMENT_ROOT"] . '/Cn-app/partials/_header.php'; ?>
    <?php include $_SERVER["DOCUMENT_ROOT"] . '/Cn-app/partials/_all_series_slider.php'; ?>
    <div class="content">
        <div class="container-fluid">
    
        
            <form class="mb-5">
                <div class="row">
                    <div class="col-2">
                        <a href="/Cn-app/index">
                            <img src="/Cn-app/assets/imgs/icono/arrow-left.png" class="picto" alt="Picto d'une flèche gauche">
                        </a>
                        
                    </div>
                    <div class="col-8">
                        <h1 style="color: white ">Recherche</h1>
                    </div>
                    <div class="col-12 d-flex justify-content-center">
                        <input type="recherche" class="form-control" placeholder="Teen titans">
                    </div>
                </div>
            </form>

            <!--Filtre par catégories-->
            <div class="bars">
                <div class="bar_droite"></div>
                <div class="bar_gauche"></div>
            </div>
            <p><b>Filtrer par catégories</b></p>
            
            <!--Boutons filtre-->
            <div class="groupeBtn">
                <button type="button" class="btn btn-primary btn-lg my-3">Classiques</button>
                <button type="button" class="btn btn-lg btn-outline-dark">Cultes</button>
                <button type="button" class="btn btn-lg btn-outline-dark">Nouveautés</button>
            </div>
            <a href="#" class="btn my-2"><b>GO!</b></a>
        </div>
    </div>
    <!--NAVIGATION BAS-->
    <div class="container video_jeux">
        <div class="col-6 video"> 
            <a class="lien_video" href="#"> VIDÉOS</a> 
        </div>
        <div class="col-6 jeux"> 
            <a class="lien_jeux" href="#"> JEUX</a> 
        </div>
    </div>
        <?php include $_SERVER["DOCUMENT_ROOT"] . '/Cn-app/includes/_scripts.php'; ?>
        <script src="/Cn-app/assets/js/home.js"></script>
    </body>
</html> 