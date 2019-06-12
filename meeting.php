<?php 
session_start();

if (empty($_SESSION['username']) ){
  	
  	header('location: signin.php'); 
  }
?>
<!DOCTYPE html>
    <html>
        <head>
        <meta charset='utf-8'>
            <title>Royalhotel.com</title>
            <link rel="stylesheet" type="text/css" href="AI.css"/>  
        </head>
        <body>
            
            <div id="upper">
                <ul class='list'>
                    <li><a href="Lorem ipsum dolor sit amet, consectetaur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua">Help</a></li>
                    <li>
                        <?php if (isset($_SESSION['username'])) : ?>
                        <li><a href="index.php">Welcome,<?php echo $_SESSION['username']; ?></a></li>
                    
                    <li><a href="exit.php">Sign-Out</a></li>
                         
                        <?php else: ?>
                    <a href="signin.php">Log-in</a>
                    <a href="signup.php">Sign-up</a>
                        <?php endif ?>
                    </li>
                    <li><a href="Lorem ipsum dolor sit amet, consectetaur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua">Reserve</a></li>
                </ul>
                </div>
            <div id='bgk'>

                <h2 class='heading'><b>Prince AI's Royal Luxury Hotel</b><img src="http://logonoid.com/images/w-hotels-logo.png"  class="logo-for-hotel" alt=""/>
                </h2>
        
            </div>
            <!--Navigationbar-->
<div id="navigation">
            <ul class="menu">
                <li><a href="index.php">Overview</a></li>
                <li><a href="#">Rooms</a></li>
                <li><a href="offerings.php">Lodging</a></li>
                <li><a href="#">Meetings</a></li>
                <li><a href="facilities.php">Employees</a></li>
            </ul>
</div>
           <div> 
               <div>
            <h2 class="meeting-house">Meeting House</h2>
</div>
            <hr>
                <div class="list-for-meeting-house">
                    <div class="picture-for-meeting-house">
                        <img src="https://www.meetingsbooker.com/images/venues/Alexander-House-Hotel-Utopia-Spa-0-1-2-3-4.jpg
" width="500" height="500" alt=""/>
                    </div>
                    <div class="picture-for-meeting-house">
                        <img src="https://www.meetingsbooker.com/images/venues/Alexander-House-Hotel-Utopia-Spa-0-1-2-3-4.jpg
" width="500" height="500" alt=""/>
                    </div>
</div>


<div>
<h2 class="meeting-room">Meeting Room</h2>
</div>
            <hr>
                <div class="list-for-meeting-room">
                    <div class="picture-for-meeting-room">
                        <img src="https://www.meetingsbooker.com/images/venues/Alexander-House-Hotel-Utopia-Spa-0-1-2-3-4.jpg
" width="500" height="500" alt=""/>
                    </div>
                    <div class="picture-for-meeting-room">
                        <img src="https://www.meetingsbooker.com/images/venues/Alexander-House-Hotel-Utopia-Spa-0-1-2-3-4.jpg
" width="500" height="500" alt=""/>
                    </div>
</div>
</div>

