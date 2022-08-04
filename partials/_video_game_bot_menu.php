<div class="container-fluid video_jeux">
    <div class="col-6 video">
        <a  class="lien_video" href="#">
            VIDÉOS
        </a>
    </div>
    <div class="col-6 jeux">
        <a  class="lien_jeux" href="#">
            JEUX
        </a>
    </div>
</div>
<style>
.video_jeux{
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    position: fixed;;
    bottom: 0;
    padding-left: 0;
    padding-right: 0;
    text-align: center;
}
.video{
    display: flex;
    background-color: white;
    color: black;
    width: 100%;
    text-align: center;
    height: 50px;
    border-top: solid 1px black;
    justify-content: center;
    align-items: center;
}
.lien_video{
    text-decoration: none;
    color: black;
    font-family: "LubalinBold", serif;
}
.lien_jeux{
    text-decoration: none;
    color: white;
    font-family: "LubalinBold", serif;
}
.jeux{
    background-color: black;
    color: white;
    width: 100%;
    text-align: center;
    display: flex;
    justify-content: center;
    align-items: center;

}
</style>
