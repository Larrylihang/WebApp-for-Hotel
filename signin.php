<?php include("server.php");?>
<!DOCTYPE html>
    <html>
        <head>
            <title>Welcome</title>
                <meta charset="utf-8"/>
            <style>
               * {
  margin: 0px;
  padding: 0px;
}
body {
  font-size: 120%;
  background: #F8F8FF;
background-image: url("http://kenyanwallstreet.com/wp-content/uploads/2017/10/Hilton-Hotels.jpg");
    margin-top:200px;
    opacity:0.85;
}

.header {
  width: 30%;
  margin: 50px auto 0px;
  color: #a29061;
  background: #5F9EA0;
  text-align: center;
  border: 1px solid #B0C4DE;
  border-bottom: none;
  border-radius: 10px 10px 0px 0px;
  padding: 20px;
    background-color:#272727;
}
form, .content {
  width: 30%;
  margin: 0px auto;
  padding: 20px;
  border: 1px solid #B0C4DE;
  background: white;
  border-radius: 0px 0px 10px 10px;
}
.input-group {
  margin: 10px 0px 10px 0px;
}
.input-group label {
  display: block;
  text-align: left;
  margin: 3px;
}
.input-group input {
  height: 30px;
  width: 93%;
  padding: 5px 10px;
  font-size: 30px;
  border-radius: 5px;
  border: 1px solid gray;
}
.btn {
  padding: 10px;
  font-size: 15px;
  color: white;
  background: #272727;
  border: none;
  border-radius: 5px;
    color:#a29061;
}
                .btn:hover{
                    background-color: #f0fff0;
                }
.error {
  width: 92%; 
  margin: 0px auto; 
  padding: 10px; 
  border: 1px solid #a94442; 
  color: #a94442; 
  background: #f2dede; 
  border-radius: 5px; 
  text-align: left;
}
.success {
  color: #3c763d; 
  background: #dff0d8; 
  border: 1px solid #3c763d;
  margin-bottom: 20px;
}
   .lable {
        font-size: 25px;
        color:#a29061;
       font-weight: bold;
                }
p {
     font-weight: 100px;
  }
                
               
 </style>
        </head>
            <body>
  <div class="header">
  	<h2>Royal Hotel</h2>
  </div>
	 
  <form method="post" action="signin.php" accept-charset="utf-8"> 
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label class="lable">Username:</label>
  		<input type="text" name="username"  >
  	</div>
  	<div class="input-group">
  		<label class="lable">Password:</label>
  		<input type="password" name="password" >
  	</div>
  	<div class="input-group">
        
  		<button type="submit" class="btn" name="LOG-IN">Log-IN</button>
  	</div>
  	<p>
  		Not yet a member? <a href="signup.php">Sign up</a>
  	</p>
  </form>
</body>
    
    </html>