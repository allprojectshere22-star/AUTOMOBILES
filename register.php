<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="register.css">
    <title>NEXGEN-Register</title>
</head>
<body>
    <h2>REGISTER-NexGen Automobiles</h2>
    
    <form action="submit_form.php" method="POST"> 

        <section id="forms">

            <label for="uname">Username*</label>
            <input type="text" id="uname" name="Username" required> </input><br><br>

            <label for="pwd">Password*</label>
            <input type="password" id="pwd" name="Password" required> </input><br><br>

            <label for="email">Email Id*</label>
            <input type="email" id="email" name="email" required><br><br>

            <label for="phone">Phone Number*</label>
            <input type="tel" id="phone" name="phone" required><br><br>

            <label for="City">City:</label>
            <input type="text" id="City" name="City"><br><br>

            <label for="state">State:</label>
            <input type="text" id="state" name="State"><br><br>              
              
     
            <fieldset><legend>Feedback</legend>
                <textarea cols="70" rows="6" placeholder="Enter your Feedback here..."></textarea>
               </fieldset><br><br>
            

               <center><button type="submit">NexGen-Register</button>
               <button type="reset">Clear</button></center>

               
    </section>

</form>
</body>
</html>