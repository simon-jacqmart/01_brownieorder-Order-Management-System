<?php
    session_start();

    $diaryContent= "";
    if(array_key_exists("id",$_COOKIE)) {

        $_SESSION['id'] = $_COOKIE['id'];
    }

    if(array_key_exists("id",$_SESSION)) {

        

        include("connection.php");
        echo "Vous etes en ligne!";


    } else {

        header ("Location: index.php");


    }

    include("header.php");

?>

<nav class="navbar navbar-dark bg-dark">
  <a class="navbar-brand">Brownie Commande</a>
  <form class="form-inline">

    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Log Out</button>
  </form>
</nav>
    <div class="container-fluid" id="containerLoggedInPage">

        

    </div>

<?php
    include("footer.php");
?>