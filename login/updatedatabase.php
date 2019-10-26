<?php
    session_start();

    if(array_key_exists("content", $_POST)) {
        include("connection.php");


        
        $query = "UPDATE `users` SET `diary` = '".mysqli_real_escape_string($link, $_POST['content'])."' WHERE id = ".mysqli_real_escape_string($link, $_SESSION['id'])." LIMIT 1";
       /* $query = "UPDATE `users` SET password = '".md5(md5(mysqli_insert_id($link)).$_POST['password'])."' WHERE id = ".mysqli_insert_id($link)." LIMIT 1";*/

      
       mysqli_query($link, $query);

        

    }

?>