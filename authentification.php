<?php
if( isset($_POST['pseudo']) &&  isset($_POST['password'])){
    if( !empty($_POST['pseudo']) &&  !empty($_POST['password'])){
        try {
            $db_shop = new PDO('mysql:host=localhost; dbname=shop;', 'root' ,'');
            
        } catch (\Throwable $th) {
            echo 'connexion echoué';
        }
        
        $select_user = $db_shop->prepare('SELECT * FROM usrs WHERE pseudo= :pseudo AND password = :password');
        
        $select_user->execute(
            [
                'pseudo' =>$_POST['pseudo'],
                'password' =>$_POST['password'],

            ]
        );
        $user = $select_user->fetch();
        var_dump($user );
    }

    if (!empty($user)) {
        header('Location: http://localhost/shop.com/produit.php');
    }else {
        header('Location: http://localhost/shop.com/connexion.php');
    }
}
?>