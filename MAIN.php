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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WasteGuard</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
   <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
</head>
<body>
    <div class="scroll-up-btn">
        <i class="fas fa-angle-up"></i>
    </div>
    <nav class="navbar">
        <div class="max-width">
            <div class="logo"><a href="#">W<span>G</span></a></div>
            <ul class="menu">
                <li><a href="#home" class="menu-btn">Home</a></li>
                <li><a href="#Login" class="menu-btn">Login</a></li>
               
                <li><a href="#Staff" class="menu-btn">Staff</a></li>
                <li><a href="#Review" class="menu-btn">Review</a></li>
                <li><a href="#Contact" class="menu-btn">Contact</a></li>
            </ul>
            <div class="menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav>
    <!-- home section start -->
    <section class="home" id="home">
        <div class="max-width">
            <div class="home-content">
            
                <div class="text-2">WasteGuard</div>
                <div class="text-3">We Manage <span class="typing"></span></div>
               
              
            </div>
        </div>
    </section>
    
    <!-- services section start -->
    <section class="services" id="Login">
        <div class="max-width">
            <h2 class="title">Login</h2>
            <div class="serv-content">
             <div class="card">
             <a href="damn/login.php">  <div class="box">
                        <i class="fas fa-user"></i>
                        <div class="text">Citizen</div>
                        <p> For the Users </p>
                    </div>
               </div></a>
                 <a href="stafflogin/login1.php"target="_blank"> <div class="card">
                    <div class="box">
                        <i class="fas fa-truck"></i>
                        <div class="text">Staff</div>
                        <p>Staff 24 hrs</p>
                    </div> </a> 
                </div>
                <a href="comingsoon.html"target="_blank"> <div class="card">
                    <div class="box">
                        <i class="fa fa-search"></i>
                        <div class="text">Premium</div>
                        <p>soon</p>
                    </div> </a> 
                </div>
                </div>
               </div>
            </div>
        </div>
    </section>
   
    <!-- Staff section start -->
    <section class="teams" id="Staff">
        <div class="max-width">
            <h2 class="title">Staff</h2>
            <div class="carousel owl-carousel">
                <div class="card">
                    <div class="box">
                        <img src="a.png" alt="">
                        <div class="text">usha Neupane</div>
                        <p>It's always my pleasure to Serve you .</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="b.png" alt="">
                        <div class="text">Pawan Shahi</div>
                        <p>It's been more than a year working with  tms and we are ready to serve you always.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="c.png" alt="">
                        <div class="text">Priya bhagat</div>
                        <p>We Provide service that is best among best.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="d.png" alt="">
                        <div class="text">Krishal Bahadur Oli</div>
                        <p>Always ready to help.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="e.png" alt="">
                        <div class="text">Prasad Shamrma</div>
                        <p>We are always there</p>
                    </div>
                </div>
            </div>
        </div>
    </section> 
       <!-- Review Section-->
    <section class="teams" id="Review">
        <div class="max-width">
            <h2 class="title">Reviews</h2>
            <div class="carousel owl-carousel">
                <div class="card">
                    <div class="box">
                        <img src="c.png" alt="">
                        <div class="text">Shirshak Shahi</div>
                        <p>It was a pleasant experience ,
                            timely service.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="g.png" alt="">
                        <div class="text">Shyam Adhikari</div>
                        <p>5 star rating .</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="a.png" alt="">
                        <div class="text">Shubham neupane</div>
                        <p>Timely Service.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="i.png" alt="">
                        <div class="text">Yogesh Shahi</div>
                        <p>Best of all time 4 star rating</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="j.png" alt="">
                        <div class="text">kushal Neupane</div>
                        <p>We even want doctors appointment soon.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    <!-- contact section start -->
    <section class="contact" id="Contact">
        <div class="max-width">
            <h2 class="title">Contact Us</h2>
            <div class="contact-content">
                <div class="column left">
                    <div class="text">Keep in Touch</div>
                    <p> We are always happy to take suggestions</p>
                    <div class="icons">
                        <div class="row">
                            <i class="	fas fa-users"></i>
                            <div class="info">
                                <div class="head">Name</div>
                                <div class="sub-title">WasteGuard</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-map-marked-alt"></i>
                            <div class="info">
                                <div class="head">Address</div>
                                <div class="sub-title">Kathmandu, Nepal</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-envelope-open"></i>
                            <div class="info">
                                <div class="head">Email</div>
                                <div class="sub-title">Wasteguard@gmail.com</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-phone"></i>
                            <div class="info">
                                <div class="head">Phone No</div>
                                <div class="sub-title">01-5186354</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column right">
                    <div class="text">Message me</div>
                    <form action="" method="post">
                        <div class="fields">
                            <div class="field name">
                                <input type="text" name="Name" placeholder="Name" class="input-responsive" required>
                            </div>
                            <div class="field email">
                                <input type="email" name="Email" placeholder="E.g. Sushant69@gmail.com" class="input-responsive" required>
                            </div>
                        </div>
                        
                        <div class="field">
                            <input type="tel" name="contact" placeholder="E.g. 9823xxxxxx" class="input-responsive" required>
                        </div>
                        <div class="field">
                            <input type="text" name="Subject" placeholder="Subject and Message" class="input-responsive" required>
                        </div>
                        <!-- <div class="field ">
                          <input type="text" name="Message" placeholder="Message" class="input-responsive" required>-->
                        <div class="button-area">
                            <button type="submit" name="submit" class="btn btn-primary" >Submit</button> 
                        </div>
                    </form>
                    <?php
 if(isset($_POST['submit'])){
    
    $Name = $_POST['Name'];
    $Email = $_POST['Email'];
    $contact = $_POST['contact'];
    $Subject = $_POST['Subject'];
    $Message = $_POST['Message '];
    

    $sql1 = "insert into query set
                  Name = '$Name',
                  Email = '$Email',
                  contact = '$contact',
                  Subject  = '$Subject' ,
                  Message = '$Message'
                 
            ";

    $res1 = mysqli_query($conn, $sql1) or die(mysqli_error($conn));
  
}
?>
                </div>
            </div>
        </div>
    </section>
    <!-- footer section start -->
    <footer>
        <span>Created By <a href="team/team.html"target="_blank">Team Hermanos</a>  <span class="far fa-copyright"></span> All rights reserved of 2023.</span>
    </footer>
    <script src="script.js"></script>
</body>
</html>