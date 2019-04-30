<!DOCTYPE html>
    <html>
        <head>
        <meta charset='utf-8'>
            <title>Prince Hotel</title>
            <link rel="stylesheet" type="text/css" href="AI.css"/>  
        </head>
        <body>
            <div id="upper">
                <ul class='list'>
                    <li><a href="#">Help</a></li>
                    <li>
                        <?php if (isset($_SESSION['username'])) : ?>
                        <li><a href="index.php">Welcome,<?php echo $_SESSION['username']; ?></a></li>
                         
                        <?php else: ?>
                    <li><a href="signin.php">Log-in</a></li>
                    <li><a href="signup.php">Sign-up</a></li>
                        <?php endif ?>
                    </li>
                    <li><a href="#">Reserve</a></li>
                </ul>
                </div>
            <div id='bgk'>
                <h2 class='heading'><b>Prince AI's Luxury Hotel</b>
                </h2>
            </div>
<div id="navigation">
            <ul class="menu">
                <li><a href="#">Overview</a></li>
                <li><a href="#">Rooms</a></li>
                <li><a href="offerings.php">Lodging</a></li>
                <li><a href="#">Meetings</a></li>
                <li><a href="#">Employees</a></li>
            </ul>
            
</div>
        
        
        </body> 

    


    
    </html>
