<?php

	session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> Gelato </title>
        <link rel="stylesheet" type="text/css" href="style.css">
		<link rel="AboutUs"  href="AboutUs.php">
		<link rel="Prices"  href="Prices.php">
		<link rel="ContactUs"  href="ContactUs.php">
		<link rel="Login"  href="Login.php">
		<link rel="Signup" href="Signup.php">
    </head>
	<form>
		<header id="hr">
		    <p id="img"> <img src="./img/Gelato.logo.png" alt="gelato" > </p>
		    <h1 id="top">Gelato</h1>
			<h2 id="top1"> <a href="Login.php"><img src="./img/login.logo.png" alt="logo"></a></h2>
			<h1 id="top2"> <a href="shoppigcart.php"><img src="./img/shopping cart.png"alt="shoppingcart"></a></h3>
			<h2 id="top3"> <a href="logout.php" >logout</a></h2>
	        <h3 id="namei">
            <?php
              echo $_SESSION['uname'];
            ?>
            </h3>
		</header>

         <body>   
             <nav id="navbar">
	      	    <ul class="navcontent">
			        <li><a href="pagehome.php">Home</a></li>
	     	        <li><a href="AboutUs.php">AboutUs</a></li>
			        <li><a href="Prices.php">Prices</a></li>
			        <li><a href="ContactUs.php">ContactUs</a></li>
					<li><a href="profile.php" ><?php echo $_SESSION['uname'];?></a><li>

		       </ul>
            </nav>
		</form>
         </body>
         <main id="main"> 
            <form action="updateprofile.php" method="post">
               <div class="main-container">
				<br> <br> <br> 
                  <h2>  Editing data</h2>
            
                  <div class="container">
                      <input type="text" name="email" value="<?php echo $_SESSION['uname']; ?>" size="size" maxlength="length"  placeholder=" Enter your email" required='required'>
                      <input type="text" name="fname" value="<?php echo $_SESSION['fname']; ?>" size="size" maxlength="length"  placeholder=" Enter your First name"  required='required'>
                      <input type="text" name="lname" value="<?php echo $_SESSION['lname']; ?>" size="size" maxlength="length"  placeholder=" Enter your last name" required='required'>
                      <input type="text"  name="address" value="<?php echo $_SESSION['address']; ?>" size="size" maxlength="length"  placeholder="Address" required='required'>
                      <input type="text" name="phone" value="<?php echo $_SESSION['phone']; ?>" size="size" maxlength="length"  placeholder=" phone number"  required='required'>
                      <input type="password" name="psw" value="<?php echo $_SESSION['pass']; ?>" size="size" maxlength="length"  placeholder="Password"  required='required'>
                      <input type="password" name="psw-repeat" value="<?php echo $_SESSION['pass']; ?>" size="size" maxlength="length"  placeholder="verify your password" required='required'>
                      <button type="submit" class="signupbtn">sing up</button>
                    </div>
               </div>
           </form>

         <div class="columns large">
			<div class="social-media">
				<a href="https://www.facebook.com/photo/?fbid=111189458508164&set=a.111210545172722&__cft__[0]=AZXfLrX3Hp3WRPLYWBcTWVwv0jcfMOyQVQ9t-2egNgOaAX_rHiY1hGalaws6EY6OyW6-zwFvLuuqBqFprjIn71x1iAUnFV7e97RZ-iJGCh8PhCjT9q5rtG5f7KCY7w4aheU6_fEMVHQS7Ys0ulI2XKXBML3xJP5h1Ged6K_GmVAFIQ&__tn__=EH-R"><img src="./img/logo face.png" alt="face"></a>
			    <a href="https://myaccount.google.com/u/1/?tab=kk"><img src="./img/google.png" alt="google"></a>
				<h3><img src="./img/logo watsap.png" alt="wats"> 0925438756 </h3>
			</div>
		</div>
	</main>
	<footer>
		<div id="footer">
		  <h4>© 2022-2023 GELATO </h4>
	    </div>
	</footer>
</html>