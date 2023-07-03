<?php
define('SITE_URL','http://localhost/PRO') ;
define('LOCALHOST','localhost');
 define('DB_USERNAME','root');
 define('DB_PASSWORD','');
 define('DB_NAME','caretaker');
 $conn = mysqli_connect(LOCALHOST,DB_USERNAME,DB_PASSWORD) or die(mysqli_error($conn));
 $db_select = mysqli_select_db($conn,DB_NAME) or die(mysqli_error($conn));
 ?>
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Admin</title>
    <link rel="stylesheet" href="../css/admin.css">
   
</head>
<body>
  <!-- menu section -->
  <div class="menu">

<div class="wrapper">
        <ul>
        <li><a href="index.php">HOME</a></li>
                <li><a href="manageadmin.php">ADMIN</a></li>
                <li><a href="managestaff.php">STAFF DATA</a></li>
                <li><a href="query.php">CITIZEN</a></li>
                <li><a href="query.php">QUERY</a></li>
                <li><a href="logout.php">LOG OUT</a></li>
        </ul>
    </div>

</div>

<?php 
// get the id of selected admin
$Id=$_GET['Id'];

// create sql query to get details
$sql="SELECT * FROM Admin WHERE Id=$Id";
//
$res=mysqli_query($conn,$sql);

?>
<div class="main">
    <div class="wrapper">
        <h1>UPDATE ADMIN</h1><br>
        
       
        <form action="" method="POST">
            <table class="tbl-30">
                <tr>
                    <td>Full Name:</td>
                    <td><input type="text" name="fullname" value=""></td>
                </tr>
                <tr>
                    <td>Username:</td>
                    <td><input type="text" name="username" value=""></td>
                </tr>
               
                <tr>
                    <td colspan="2">
                        <input type="hidden" name="Id" value="<?php echo $Id?>">
                        <input type="submit" name="submit" value="update" class="btn-primary">
                        
                    </td>
                </tr>
            </table>
        </form>
        <a href="manageadmin.php"><button class="btn-primary">DONE</button><a>
    </div>
</div>
<?php
//check whwther the submit button is clicked or not
if(isset($_POST['submit'])){
    // get all the values from form to update
    $Id=$_POST['Id'];
    $fullname=$_POST['fullname'];
    $username=$_POST['username'];
    
    //create sql query to update admin
    $sql="UPDATE Admin SET
    fullname='$fullname',
    username='$username'
    WHERE Id='$Id'
    ";
    //EXECUTE QUERY
    $res=mysqli_query($conn,$sql);
    
}


?>
<!-- footer section -->
<div class="footer">
<div class="wrapper">
          <p>Developed by Team Zero

          </p>
        </div>


    </div>
</body>
</html>