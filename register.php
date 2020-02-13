<?php 
    require_once("includes/classes/FormSanitizer.php");

    if(isset($_POST["submitButton"])) {
        // get data from the input fields
        $firstName = FormSanitizer::sanitizeFormString($_POST["firstName"]);
        $firstName = FormSanitizer::sanitizeFormString($_POST["lastName"]);
        $firstName = FormSanitizer::sanitizeFormUsername($_POST["username"]);
        $firstName = FormSanitizer::sanitizeFormEmail($_POST["email"]);
        $firstName = FormSanitizer::sanitizeFormEmail($_POST["email2"]);
        $firstName = FormSanitizer::sanitizeFormPassword($_POST["password"]);
        $firstName = FormSanitizer::sanitizeFormPassword($_POST["password2"]);
    }
?>
<!DOCTYPE html>

<html>
    <head>
        <title> Welcome to nyaflix </title>
        <link rel="stylesheet" type="text/css" href="assets/style/style.css" />
    </head>

    <body>
        <div class="signInContainer">
            <div class="column" >
                <div class="header">
                    <img src="https://fontmeme.com/permalink/200213/92b415c711f7489e6f4a875327fd9103.png" title="Logo" alt="Stie Logo" />
                    <h3>Sign Up</h3>
                    <span>to continue to Nyaflix</span>
                </div>
                <form method="POST">
                    <input type="text" name="firstName" placeholder="First name" required>
                    <input type="text" name="lastName" placeholder="Last name" required>
                    <input type="text" name="username" placeholder="Username" required>
                    <input type="email" name="email" placeholder="Email" required>
                    <input type="email" name="email2" placeholder="Confirm email" required>
                    <input type="password" name="password" placeholder="Password" required> 
                    <input type="password" name="password2" placeholder="Confirm password" required>
                    <input type="submit" name="submitButton" value="SUBMIT">
                </form>

                <a href="login.php" class="signInMessage">Already have an account? Sign in here</a>
            </div> 
        </div>
    </body>
    
</html>