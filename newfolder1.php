<!DOCTYPE html>
<html>
<head>
    <title>User Registration | PHP</title>
</head>
<body>
    <div>

        <?php
        if(isset($_POST['create']))(
            echo 'User submitted.';
        )
        ?>
    </div>
    <div>
        <form action="newfolder.html" method="POST">
         <div class="container">
          <h1>Registration</h1>
          <p></p>

          <label for="firststname"><b>First Name</b></label>
          <input type="text" name="firstname" required>

          <label for="lastname"><b>last Name</b></label>
          <input type="text" name="lastname" required>

          <label for="email"><b>Email Adress</b></label>
          <input type="email" name="email" required>

          <label for="phonenumber"><b>Phone Number</b></label>
          <input type="text" name="phonenumber" required>

          <label for="password"><b>Password</b></label>
          <input type="password" name="password" required>

          <input type="submit" name"create" value="SIgn Up">
         </div>

        </form>
    </div>
</body>
</html>