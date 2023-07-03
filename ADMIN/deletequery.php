
<?php


define('SITE_URL','http://localhost/PRO') ;
define('LOCALHOST','localhost');
 define('DB_USERNAME','root');
 define('DB_PASSWORD','');
 define('DB_NAME','caretaker');
 $conn = mysqli_connect(LOCALHOST,DB_USERNAME,DB_PASSWORD) or die(mysqli_error($conn));
 $db_select = mysqli_select_db($conn,DB_NAME) or die(mysqli_error($conn));
 

//1 get the id of query to be deleted
 $Id=$_GET['Id'] ;
// 2 create sql query to delete query
$sql="DELETE FROM query WHERE Id=$Id";
// execute the query
$res=mysqli_query($conn,$sql);
//heck thw query  executed sucessfully or not
if($res==TRUE)
{
    echo"Query deleted sucuessfully";
}
else{

    echo"Query deleted failed";

}
//3 redirect to query 

 ?>
 <!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pop</title>
   
</head>
<body>


    <div class="img">
        <img src="sucess.webp" alt="photo" class="img-responsive img-curve">
    </div>
    <div class="pop">
   
    <a href="query.php"><button>OK</button></a>
</div>
</body>
</html>