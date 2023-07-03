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
            <li><a href="managecategory.php">CARETAKER DATA</a></li>
            <li><a href="query.php">QUERY</a></li>
            <li><a href="logout.php">SIGN OUT</a></li>
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
            <input type="number" name="Quantity" class="input-responsive" value="1" required> 
                           
                            <br>
                            <br>
                        <input type="radio" name="gender" value="m">Male
                         <input type="radio" name="gender" value="f">female<br><br><br>
                         <h1>Your Details</h1><br><br>

                    <div class="order-label">Full Name</div>
                    <input type="text" name="Name" placeholder="E.g. Shirshak Shahi" class="input-responsive" required><br><br>

                    <div class="order-label">Phone Number</div>
                    <input type="tel" name="number" placeholder="E.g. 9823xxxxxx" class="input-responsive" required><br><br>

                    <div class="order-label">Email</div>
                    <input type="email" name="email" placeholder="E.g. Shirsu9@gmail.com" class="input-responsive" required><br><br>

                    <div class="order-label">Address</div>
                    <input type="text" name="address" placeholder="address" class="input-responsive" required><br><br>


               
                <tr>
                    <td colspan="2">
                        <input type="hidden" name="Id" value="<?php echo $Id?>">
                        <input type="submit" name="submit" value="update" class="btn-primary">
                        
                    </td>
                </tr>
            </table>
        </form>
        <a href="managecategory.php"><button class="btn-primary">DONE</button><a>
    </div>
</div>
<?php
//check whwther the submit button is clicked or not
if(isset($_POST['submit'])){
    // get all the values from form to update
    $Id=$_POST['Id'];
    $Quantity=$_POST['Quantity'];
    $gender=$_POST['gender'];
    $Name=$_POST['Name'];
    $number=$_POST['number'];
    $email=$_POST['email'];
    $address=$_POST['address'];
    
    
    //create sql query to update admin
    $sql="UPDATE ohno SET

    Quantity='$Quantity',
    gender='$gender',
    Name='$Name',
    number='$number',
    email='$email',
    address='$address'
    
    WHERE Id='$Id'
    ";
    //EXECUTE QUERY
    $res=mysqli_query($conn,$sql);
    
}


?>
<!-- footer section -->
<div class="footer">
<div class="wrapper">
          <p>Developed by Team Hermanos

          </p>
        </div>


    </div>
</body>
</html>