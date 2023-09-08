<?php
    require("class/User.php");
    $user = new User($db);
    if(isset($_SESSION)){
        $user->Logout();
        session_destroy();
        header("Location: /");
    }else {
        header("Location: /");
    }

?>