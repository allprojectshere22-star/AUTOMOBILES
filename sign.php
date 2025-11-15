<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="sign.css">
    <title>NexGen-Sign In</title>
</head>
<body>
    <h2>SIGN IN-NexGen Automobiles</h2>
    <section id="forms">
    <form action="">
    <center><label for="uname"></label>
    <input type="text" id="uname" name="Username" placeholder="Your username" required> </input><br><br>

    <label for="pwd"></label>
    <input type="password" id="pwd" name="Password"placeholder="Password" required> </input><br><br>

    <label for="pwd"></label>
    <input type="password" id="conpwd" name="Password" placeholder="Confirm Password" required> </input><br><br>
    <input type="submit" value="Submit">
    <button class="btn">Submit</button></center>
    </section>
    <?php
// Initialize variables
$password = '';
$confirm_password = '';
$error_message = '';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $password = $_POST['pwd'];
    $confirm_password = $_POST['conpwd'];

    // Validate passwords
    if ($password !== $confirm_password) {
        $error_message = "Passwords don't match, try again.";
    } else {
        // Passwords match, proceed with further processing (e.g., save to database)
        $error_message = "Passwords match!";
        // You can redirect or perform other actions here
    }
}
?>



<!-- Display error message if any -->
<?php if ($error_message): ?>
    <div class="error"><?php echo $error_message; ?></div>
<?php endif; ?>
    <!--<script>
        var password = document.getElementById("pwd")
      ,confirm_password = document.getElementById("conpwd");

function validatePassword(){
  if(pwd.value != conpwd.value) {
    conpwd.setCustomValidity("Passwords Don't Match,Try again");
  } else {
    conpwd.setCustomValidity('');
  }
}

pwd.onchange = validatePassword;
conpwd.onkeyup = validatePassword;
    </script>-->
    </form>
    <center><p>Dont't have a account with us? <a href="register.html"><button>Register</button></a></p></center>

</body>
</html>