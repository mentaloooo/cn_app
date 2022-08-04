<?php
    //prod
    $bdd = new PDO('mysql:host=localhost;dbname=cn-watch;charset=utf8', "root", "", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
    $request = $bdd->query('SELECT COUNT(*) AS total FROM account WHERE email=\'' . $_POST["email"] . '\' AND password=\'' .$_POST["password"] .'\'');
    $account_found = $request->fetch();
    $request->closeCursor();
    if ($account_found["total"] >0){
        session_start();
        $_SESSION["account_email"] = $_POST["email"];
/*      $user_id_request=$bdd->query('SELECT * FROM account WHERE email=\'' . $_POST["email"] . '\' AND password=\'' .$_POST["password"] .'\'');
        $id_found = $user_id_request->fetch();
        $user_id_request->closeCursor();
        $_SESSION["user_id"] = $pseudo_id_found["id"];
        */
        echo "Success";
    }else{
        echo "Failed";
    }
?>