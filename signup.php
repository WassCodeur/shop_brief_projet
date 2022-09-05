<?php
if(isset($_POST['firstname']) && isset($_POST['lastename']) && isset($_POST['pseudo']) && isset($_POST['email']) && isset($_POST['sexe'])) {
    if(!empty($_POST['firstname']) && !empty($_POST['lastename']) && !empty($_POST['pseudo']) && !empty($_POST['email']) && !empty($_POST['sexe'])){
        $firstname = $_POST['firstname'];
        $lastename = $_POST['lastename'];
        $pseudo = $_POST['pseudo'];
        $email = $_POST['email'];
        $sexe = $_POST['sexe'];
        $password = $_POST['password'];
        try {
            $db_shop = new PDO('mysql:host=localhost; dbname=shop;', 'root' ,'');
            
        } catch (\Throwable $th) {
            echo 'connexion echoué';
        }
   
        $select_user = $db_shop->prepare('SELECT pseudo, email FROM usrs');
        
        $select_user->execute();
        $users = $select_user->fetch();
        var_dump($users );
 
        if($users['pseudo'] == $pseudo || $users['email'] == $email) {
            echo 'pseudo ou email deja utilisé';
        }else if($users['pseudo'] != $pseudo || $users['email'] != $email) {
            $insertuser = $db_shop->prepare('INSERT INTO usrs (firstname, last_name, pseudo, email, sexe, password) VALUES (:firstname, :last_name, :pseudo, :email, :sexe, :password)');
            $insertuser->execute([
                'firstname' => $firstname,
                'last_name' => $lastename,
                'pseudo' => $pseudo,
                'email' => $email,
                'sexe' => $sexe,
                'password' => $password
            ]
            );
            header('Location: http://localhost/shop.com/connexion.php');
        }


    
}
}

?>