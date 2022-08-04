<?php
    //prod
    $bdd = new PDO('mysql:host=localhost;dbname=cn-watch;charset=utf8', "root", "", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));

    $request_find_same = $bdd->query('SELECT COUNT(*) AS total from account WHERE email=\'' . $_POST["email"] . '\'');
    $same_email_founded = $request_find_same->fetch();
    $request_find_same-> closeCursor();
    if ($same_email_founded["total"] > 0) {
        echo "Email already used";
    } else {
        $create_account = $bdd ->prepare('INSERT INTO account(name, lastname, password, email, adress, city, zip_code, kind) VALUES (:name, :lastname, :password, :email, :adress, :city, :zip_code, \'free\')');
        if ($create_account) {

            $create_account->bindParam(':name', $_POST["name"], PDO::PARAM_STR);
            $create_account->bindParam(':lastname', $_POST["lastname"], PDO::PARAM_STR);
            $create_account->bindParam(':password', $_POST["password"], PDO::PARAM_STR);
            $create_account->bindParam(':email', $_POST["email"], PDO::PARAM_STR);
            $create_account->bindParam(':adress', $_POST["adress"], PDO::PARAM_STR);
            $create_account->bindParam(':city', $_POST["city"], PDO::PARAM_STR);
            $create_account->bindParam(':zip_code', $_POST["zip_code"], PDO::PARAM_INT);

            $create_account ->execute();
            $errors = $create_account ->errorInfo();
            if ($errors[0]=='00000'){ // no error
                //first profile creation
                $request_find_account = $bdd-> query('SELECT id FROM account WHERE email=\'' . $_POST['email'] .'\'');
                $account = $request_find_account->fetch();
                $request_find_same ->closeCursor();
                $create_first_profile = $bdd->prepare('INSERT INTO profile(pseudo, account_id) VALUES (:pseudo, '. $account["id"].')');
                if ($create_first_profile) {
                    $default_pseudo =  $_POST['name'] .' '. $_POST['lastname'];
                    $create_first_profile->bindParam(':pseudo',$default_pseudo, PDO::PARAM_STR);
                    $create_first_profile ->execute();
                    $errors = $create_first_profile ->errorInfo();
                    if ($errors[0]=='00000') {
                        echo 'success';
                    }
                }
            } else {
                echo '<pre>' . print_r($errors, true) . '</pre>';
            }
        } else {
            echo '<pre>' . print_r($create_account->errorInfo(), true) . '</pre>';
        }
    }
?>