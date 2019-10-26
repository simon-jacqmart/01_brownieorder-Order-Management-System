<?php
    session_start();

    
    if(array_key_exists("id",$_COOKIE)) {

        $_SESSION['id'] = $_COOKIE['id'];
    }

    if(array_key_exists("id",$_SESSION)) {

        

        include("connection.php");



    } else {

        header ("Location: index.php");


    }

    include("header.php");

?>

<nav class="navbar navbar-dark bg-dark">
  <a class="navbar-brand">Brownie Commande</a>
  <!--<form action="index.php?logout=1" method="get" class="form-inline">
   
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Log Out</button>
  </form>-->

<div class="pull-xs-right">
      <a href ='index.php?logout=1'>
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Logout</button></a>
    </div>

  </nav> 

    <div class="container-fluid" id="containerLoggedInPage">


        <p>Vous etes en Ligne</p>

    </div>

<?php
    include("footer.php");
?>