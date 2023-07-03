<?php
include 'config.php';
// Function to validate name
function validateName($name)
{
  // Only allow alphabets and spaces
  return preg_match("/^[a-zA-Z ]*$/", $name);
}


// Function to validate email address format
function validateEmail($email)
{
  return preg_match("/^[a-zA-Z]+@.+\..+$/", $email);
}

// Function to validate password format
function validatePassword($password)
{
  // Password should contain at least one uppercase letter, one lowercase letter, one digit, and one special character
  return preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[^a-zA-Z\d]).{8,}$/", $password);
}

?>

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="style1.css">
  <title>WEB</title>
</head>
<body>
  <h2 align="center" class="h">WasteGuard</h2>
  
  <div id="d">
    <form action="register.php" method="POST">
      <h2 align="center" class="h">Registration</h2>
      <div class="container">
        <label for="name">Name</label>
        <input name="name" type="text" id="name" placeholder="Enter your name" required>
        
        <label for="email">Email</label>
        <input name="email" type="email" id="email" placeholder="Enter your email" required>
        
        <label for="pass">Password</label>
        <input name="pass" type="password" id="pass" placeholder="Enter your Password" required>
        
        <label for="cpass">Confirm Password</label>
        <input name="cpass" type="password" id="cpass" placeholder="Confirm your Password" required>
        
        <div class="button-container">
          <input name="signup" type="submit" value="SIGN UP">
          <a href="login.php" class="back-button">BACK TO LOGIN</a>
        </div>
      </div>
    </form>
    <?php
    // Coding
    
    if(isset($_POST['signup'])){
      
      $name = $_POST['name'];
      $email = $_POST['email'];
      $pass = $_POST['pass'];
      $cpass = $_POST['cpass'];
      
      // Validate name
      if(!preg_match("/^[a-zA-Z ]*$/", $name)){
        echo "
          <script>
          alert('Invalid name format. Only alphabets and spaces are allowed.');
          window.location.href='register.php';
          </script>
        ";
        exit;
      }
      
      // Validate email
      if(!validateEmail($email)){
        echo "
          <script>
          alert('Invalid email format.');
          window.location.href='register.php';
          </script>
        ";
        exit;
      }
      
      // Validate password
      if(!validatePassword($pass)){
        echo "
          <script>
          alert('Invalid password format. The password must contain at least one uppercase letter, one lowercase letter, one digit, and one special character. It should be at least 8 characters long.');
          window.location.href='register.php';
          </script>
        ";
        exit;
      }
      
      // Check if password and confirm password match
      if($pass != $cpass){
        echo "
          <script>
          alert('Password and Confirm Password do not match.');
          window.location.href='register.php';
          </script>
        ";
        exit;
      }
      
      // Check if email is already registered
      $query = "SELECT * FROM user WHERE email='$email'";
      $query_run = mysqli_query($con, $query);
      
      if($query_run && mysqli_num_rows($query_run) > 0){
        echo "
          <script>
          alert('User already registered.');
          window.location.href='login.php';
          </script>
        ";
        exit;
      }
      
      // Insert the user into the database
      $insertion = "INSERT INTO user VALUES('$name', '$email', MD5('$pass'))";
      $insertion_run = mysqli_query($con, $insertion);
      
      if($insertion_run){
        echo "
          <script>
          alert('Registration successful.');
          window.location.href='login.php';
          </script>
        ";
        exit;
      }else{
        echo "
          <script>
          alert('Registration failed.');
          window.location.href='register.php';
          </script>
        ";
        exit;
      }
    }
    ?>
  </div>
</body>
</html>
