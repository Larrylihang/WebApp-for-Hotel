<?php 
session_start();

if (empty($_SESSION['username']) ){
  	
  	header('location: hotel.php'); exit;
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
<div id="navigation">
            <ul class="menu">
                <li><a href="#">Overview</a></li>
                <li><a href="#">Rooms</a></li>
                <li><a href="offerings.php">Lodging</a></li>
                <li><a href="#">Meetings</a></li>
                <li><a href="facilities.php">Employees</a></li>
            </ul>
            
</div>
            <div id="search-panel">
                
                <form autocomplete="off" class="table">
                   <input type="date" id="date" list="datelist">
                </form>
            
                <form autocomplete="off" class="table">
                    <input type="date" id="date" list="datelist">
                 </form>
                
                <a href="guests.php"><button class='hell'>Viewe Facilities</button></a>
                
                
                  
            </div>
            
                
                <div class="advanced">
                     <img  src="https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1554909887175&di=46bc79163c6be68af38ceeb0fc82a365&imgtype=0&src=http%3A%2F%2Fimg.mp.itc.cn%2Fupload%2F20170414%2F3853b0d543d640c5b6867efde490f58f_th.jpeg" class="jpeg" alt=""/>
          
            </div>
            
            <div class="benefits">
             <h1 align='center'class="advantage">Prince AI's Royal Luxury Hotel</h1>
                <div class="title-border"></div>
                <div class="title-border01"></div>
            </div>
            <div class="title">
               <h2 algin="left" class="conference">Meeting House</h2>
                <P class="introduction">Our hotel has <b>2 Meeting Houses</b>, Which Can Contain 300 Peoples In One Time.<br/>These Kind Of Meeting House Can Be Used Any Formal Conference Or Activities.</P>
                    <img src="https://www.omnihotels.com/-/media/images/hotels/bospar/meetings/bospar-omni-parker-house-rooftop-ball-room-class-room-1.jpg?h=660&amp;la=en&amp;w=1170" class="jpeg01" alt=""/>
            
            </div>
            <div class="fitness">
                <h2 align="left" class="conference">Meeting Room</h2>
                <p class="introduction">
                    Prince AI's Royal Luxury Also Provdes 5 <b>Meeting Room</b> To Our Guests. </br>The Maximum Galleryful Of Each Meeting Romm Is 20 Peoples
                </p>
                    <img src="https://kualalumpurhotels.impiana.com.my/wp-content/uploads/sites/183/2015/08/Biz-Centre.jpg" class="jpeg01" alt=""/>
            </div>
            
            <div class="resturant">
                <h2 align="left" class="conference">Fitness</h2>
                <p class="introduction-to-fitness">The Gym Of Prince AI's Royal Luxury Hotel Has Advanced Fitness Equipments In The World,<br> Which Are Provided Our Guests For Free! There Have 2 Gyms In Hotel.<br/> One is Just Provides<b>Weight-Lifting</b>And Another Gym You Can Enjoy All Of Facilities <br><b>Such AS Push-Up etc.</b> </p>
                <img src="https://cdn-mf0.heartyhosting.com/sites/mensfitness.com/files/styles/gallery_slideshow_image/public/indoor-gym-hotel-workout-1280.jpg?itok=wdXpdoOc" class="jpeg02" alt=""/>
            
            </div>
    

        
       
                 
        </body> 
        
    
    </html>