<?php 
    if(isset($_POST["submitButton"])) {
        echo "Form was submitted";
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
                    <h3>Sign In</h3>
                    <span>to continue to Nyaflix</span>
                </div>
                <form method="POST">
                    <input type="text" name="username" placeholder="Username" required>
                    <input type="password" name="password" placeholder="Password" required> 
                    <input type="submit" name="submitButton" value="SUBMIT">
                </form>

                <a href="register.php" class="signInMessage">Need an account? Sign Up here</a>
            </div> 
        </div>
    </body>
    
</html>