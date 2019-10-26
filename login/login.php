<?php

    session_start();

    $error = ""; 


    if (array_key_exists("logout", $_GET)) {


        unset($_SESSION);
        setcookie("id", "", time() - 60*60);
        $_COOKIE["id"] = "";  
        
        session_destroy();
        
        
    } else if ((array_key_exists("id", $_SESSION) AND $_SESSION['id']) OR (array_key_exists("id", $_COOKIE) AND $_COOKIE['id'])) {
        
       header("Location: ../index.php");
        
    }

    if (array_key_exists("submit", $_POST)) {
        
        include("connection.php");
     
                       
        if (!$_POST['email']) {
            
            $error .= "An email address is required<br>";
            
        } 
        
        if (!$_POST['password']) {
            
            $error .= "A password is required<br>";
            
        } 
        
        if ($error != "") {
            
            $error = "<p>There were error(s) in your form:</p>".$error;
            
        } else {
            
       
                    $myemail=$_POST['email'];

                    $query = "SELECT * FROM brownieUsers WHERE email = '$myemail'";

                
                    $result = mysqli_query($connect, $query);
                
                    $row = mysqli_fetch_array($result);
                
                    if (isset($row)) {

                        $checkpass=$_POST['password'];
                        
                        
                        $hashedPassword = md5($checkpass);
                        
                        

                        if ($hashedPassword == $row['browniepassword']) {

                            $_SESSION['id'] = $row['id'];
                            
                            if (isset($_POST['stayLoggedIn']) AND $_POST['stayLoggedIn'] == '1') {

                                setcookie("id", $row['id'], time() + 60*60*24*365);

                            } 

                            header("Location: ../index.php");
                                
                        } else {
                            
                            $error = "That email/password combination could not be found.";
                            
                        }
                        
                    } else {
                        
                        $error = "That email/password combination could not be found.";
                        
                    }
                    
                }
            
        
        
        
    }


?>

<?php include("header.php"); ?>


        <div class="container" id="homaPageContainer">

            <img scr="background.jpg">

            <h1>Brownie Commande</h1>

            <p><strong> La prise de commandes facile</strong></p>
            <div id="error"><?php 
            if ($error !="") {
                echo "there is error";
                echo '<div class="alert alert-info" role="alert">'.$error.'</div>';
            }
            ?>
            </div>



            


            <form method="post" id="logInForm">
                <div class="form-group">

                    <p>Loggez vous en utilisant votre email et votre mot de passe</p>

                    <input class="form-control" type="email" name="email" placeholder="Your Email">

                </div>

                <div class="form-group">

                    <input class="form-control" type="password" name="password" placeholder="Password">

                </div>

                <div class="form-group form-check">

                    <input class="form-check-input" type="checkbox" name="stayLoggedIn" value=1>
                    <label class="form-check-label" for="exampleCheck1">Rester en ligne</label>

                </div>

                

                <!--<input class="form-control" type="hidden" name="signUp" value="0">-->

                

                        
                 <button class="btn btn-success" type="submit" name="submit" value="Log In!">Log In</button>

                 <!--<p  class="toggleFormsStyle" ><a  class="toggleForms" >Sign Up</a></p>-->

            </form>
            
    </div> 

        

        
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript">
       /* $(".toggleForms").click(function(){

            $("#signUpForm").toggle();
            $("#logInForm").toggle();
        });*/

        $('#diary').bind('input propertychange', function() {


            $.ajax({
            method: "POST",
            url: "updatedatabase.php",
            data: {content: $("#diary").val() }
            });

                        
        });
    </script>



  </body>
</html>


         
