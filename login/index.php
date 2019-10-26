<?php

    session_start();

    $error = ""; 



    if (array_key_exists("logout", $_GET)) {


        unset($_SESSION);
        setcookie("id", "", time() - 60*60);
        $_COOKIE["id"] = "";  
        
        session_destroy();
        
        
    } else if ((array_key_exists("id", $_SESSION) AND $_SESSION['id']) OR (array_key_exists("id", $_COOKIE) AND $_COOKIE['id'])) {
        
       header("Location: contents.php");
        
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
            
            if ($_POST['signUp'] == '1') {

                $myemail=$_POST["email"];
                $myemail=mysqli_real_escape_string($connect, $myemail);

                $query = "SELECT id FROM brownieUsers WHERE email = '$myemail' LIMIT 1";


                $result = mysqli_query($connect, $query);

                if (mysqli_num_rows($result) > 0) {

                    $error = "That email address is taken.";

                } else {
                    $myemail=$_POST["email"];
                    $myemail=mysqli_real_escape_string($connect, $myemail);
                    echo $myemail;
                    echo "<BR>";
                    $mypass=$_POST["password"];
                    $mypass=mysqli_real_escape_string($connect, $mypass);
                    echo $mypass;
                    echo "<BR>";


                    $query = "INSERT INTO brownieUsers (email, browniepassword) VALUES ('$myemail', '$mypass')";
                    //$sql="INSERT INTO customers (CustomerLN, CustomerFN, CustomerPHONE) VALUES  ('$newcustomerLN','$newcustomerFN','$newcustomerPHONE')";
                    echo  $query;
                    echo "<BR>";
                    

                    if (mysqli_query($connect, $query)) {

                        echo "hello";
                        echo "<BR>";

                       $mypass= md5($mypass);
                       $mypass=mysqli_real_escape_string($connect, $mypass);
                       $query = "UPDATE brownieUsers SET browniepassword= '$mypass' WHERE id = ".mysqli_insert_id($connect)." LIMIT 1";
                        echo $query;
                        echo "<BR>";

                        mysqli_query($connect, $query);

                        $_SESSION['id'] = mysqli_insert_id($connect);
                  

                        if (isset($_POST['stayLoggedIn']) AND $_POST['stayLoggedIn'] == '1') {

                            setcookie("id", mysqli_insert_id($connect), time() + 60*60*24*365);

                        } else {

                            $error = "<p>Could not sign you up - please try again later.</p>";

                        } 

                        //header("Location: contents.php");

                    }

                } 
                
            } else {
                    $myemail=$_POST['email'];
                    echo $myemail;
                    echo "<BR>";
                    $myemail=mysqli_real_escape_string($connect, $myemail);
                    echo $myemail;
                    echo "<BR>";
                    $query = "SELECT * FROM brownieUsers WHERE email = '$myemail'";
                    echo $query;
                    echo "<BR>";
                
                    $result = mysqli_query($connect, $query);
                
                    $row = mysqli_fetch_array($result);
                
                    if (isset($row)) {
                        echo "isset";
                        echo "<BR>";
                        $checkpass=$_POST['password'];
                        echo $checkpass;
                        echo "<BR>";
                        $hashedPassword = md5($checkpass);
                        echo $hashedPassword;
                        echo "<BR>";
                        if ($hashedPassword == $row['browniepassword']) {
                            echo "youpi";
                            $_SESSION['id'] = $row['id'];
                            
                            if (isset($_POST['stayLoggedIn']) AND $_POST['stayLoggedIn'] == '1') {

                                setcookie("id", $row['id'], time() + 60*60*24*365);

                            } 

                            header("Location: contents.php");
                                
                        } else {
                            
                            $error = "That email/password combination could not be found.";
                            
                        }
                        
                    } else {
                        
                        $error = "That email/password combination could not be found.";
                        
                    }
                    
                }
            
        }
        
        
    }


?>

<?php include("header.php"); ?>


        <div class="container" id="homaPageContainer">

            <img scr="background.jpg">

            <h1>Brownie Commande</h1>

            <p><strong> La prise de commandes facile</strong></p>
            <div id="error"><?php if ($error !="") {
            
            echo '<div class="alert alert-info" role="alert">'.$error.'</div>';
            }
            ?></div>


            <form method="post" id="signUpForm">

                <p>Cela vous interesse? Sign up </p>

                <div class="form-group">

                    <input class="form-control" type="email" name="email" placeholder="Your Email">

                </div>

                <div class="form-group">

                    <input class="form-control" type="password" name="password" placeholder="Password">

                </div>

                <div class="form-group form-check">

                    <input class="form-check-input" type="checkbox" name="stayLoggedIn" value=1>
                    <label class="form-check-label" for="exampleCheck1">Rester en ligne</label>

                </div>

                

                <input type="hidden" name="signUp" value="1">

                         
                <button class="btn btn-success" type="submit" name="submit" value="Sign Up!">Sign Up</button>
                
                <p class="toggleFormsStyle" ><a class="toggleForms">Log In</a></p>
                
            </form>
            


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

                

                <input class="form-control" type="hidden" name="signUp" value="0">

                

                        
                 <button class="btn btn-success" type="submit" name="submit" value="Log In!">Log In</button>

                 <p  class="toggleFormsStyle" ><a  class="toggleForms" >Sign Up</a></p>

            </form>
            
        </div>

        <?php include("footer.php"); ?>

         
