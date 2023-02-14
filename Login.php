<?php
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> Gelato </title>
        <link rel="stylesheet" type="text/css" href="style.css">
		<link rel="Signup" href="Signup.php">

    </head>
	<form>
		<header id="hr">
			<p id="img"> <img src="./img/Gelato.logo.png" alt="gelato" > </p>
		    <h1 id="top">Gelato</h1>
	    </header>

         <body>   
             <nav id="navbar">
	      	    <ul class="navcontent">
			        <li><a href="pagehome.php">Home</a></li>
	     	        <li><a href="AboutUs.php">AboutUs</a></li>
			        <li><a href="Prices.php">Prices</a></li>
			        <li><a href="ContactUs.php">ContactUs</a></li>
		       </ul>
            </nav>
         </body>
    </form>
	<main id="main">
	  <form action="loginphp.php" method="post">
		<div class ="content">
			<div class="log">
				<br> <br> <br> <br> <br> 
				<h1>Online Store Login</h1>
			</div>
			<div class="form">
				
				<h4>If you have an account with us, please log in.</h4>
				<div class="input_outer">
					
					<input type="text" name="name"size="30"placeholder=" Please enter user name"required="required">
				</div>
				<div class="input_outer">
					<i class="fa fa-key" aria-hidden="true"></i>
					<input type="password" name="password"size="30" placeholder="Please enter password" required="required">
				</div>
			</div>
			<div>
			 <button type="submit" >Login</button>
			</div>
			
		    <h3><a href="Signup.php"> Create a new account </a></h3>
		</div>
		<div class="prices">
		    <h3 ><a href="Prices.php">View products</a></h3>
		    <h3 ><a href="ContactUs.php">contact us</a></h3>
			<h3><a href="faqs-page.php">FAQS</a></h3>
		</div>
		<div class="columns large">
			<div class="social-media">
				<a href="https://www.facebook.com/photo/?fbid=111189458508164&set=a.111210545172722&__cft__[0]=AZXfLrX3Hp3WRPLYWBcTWVwv0jcfMOyQVQ9t-2egNgOaAX_rHiY1hGalaws6EY6OyW6-zwFvLuuqBqFprjIn71x1iAUnFV7e97RZ-iJGCh8PhCjT9q5rtG5f7KCY7w4aheU6_fEMVHQS7Ys0ulI2XKXBML3xJP5h1Ged6K_GmVAFIQ&__tn__=EH-R"><img src="./img/logo face.png" alt="face"></a>
			    <a href="https://myaccount.google.com/u/1/?tab=kk"><img src="./img/google.png" alt="google"></a>
				<h3><img src="./img/logo watsap.png" alt="wats"> 0925438756 </h3>
			</div>
		</div>
      </form>
   </main>
   <footer>
	<div id="footer">
		<h4>© 2022-2023 GELATO </h4>
	  </div>
   </footer>
</html>