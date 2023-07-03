<?php
  include 'config1.php';
?>

<!DOCTYPE html>
<html>
<head>
  <style>
   

   body {
      background: linear-gradient(135deg, #9EA8B1, #8C7479);
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }

    .h {
      color: #333;
    }

    #d {
      background-color: #c9ccad;
      border-radius: 5px;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.3);
      margin: 0 auto;
      max-width: 400px;
      padding: 20px;
    }

    label {
      display: block;
      font-weight: bold;
      margin-bottom: 5px;
      text-align: left; /* Added to align labels to the left */
    }

    input[type="text"],
    input[type="password"] {
      border: 1px solid #ccc;
      border-radius: 3px;
      box-sizing: border-box;
      font-size: 16px;
      margin-bottom: 10px;
      padding: 10px;
      width: 100%;
    }

    input[type="submit"],
    input[type="button"] {
      background-color: #4CAF50;
      border: none;
      border-radius: 3px;
      color: white;
      cursor: pointer;
      font-size: 16px;
      padding: 10px 20px;
      text-decoration: none;
      transition: background-color 0.3s ease;
    }

    input[type="submit"]:hover,
    input[type="button"]:hover {
      background-color: #45a049;
	  
    }

    #b {
      text-align: center;
    }

    #d {
      display: inline-block;
      text-align: left;
    }
	
	
  </style>
  <title>WasteGuard</title>
</head>
<body id="b">
  <h2 align="center" class="h">WasteGuard</h2>
  <center>
    <div id="d">
      <center>
        <form action="login1.php" method="POST">
        <h2 align="center" class="h">Login</h2>
          <b><label>Username</label>
          <input name="username" type="text" id="form" placeholder="Enter your Username" required></input>
          <b><label>Password</label>
          <input name="password" type="password" id="form" placeholder="Enter your Password" required></input>
          <!button work>
          <input name="login" type="submit" id="button" value="LOGIN"></input>
          
        </form>
      </center>
    </div>
  </center>

  <?php
    if(isset($_POST['login'])){
      $username = $_POST['username'];
      $password = $_POST['password'];
      
      $check = "SELECT * FROM STAFF WHERE username='$username' AND password=MD5('$password')";
      $check_work = mysqli_query($con, $check);
      
      if($check_work){
        if(mysqli_num_rows($check_work) > 0 ){
          echo "
            <script>
              alert('You are Successfully Logged in');
              window.location.href='index.html';
            </script>
          ";
        } else {
          echo "
            <script>
              alert('Password or Email not Found');
              window.location.href='login1.php';
            </script>
          ";
        }
	}
}
