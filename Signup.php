<!DOCTYPE html>
<html lang="en">
    <head>
        <title> Gelato </title>
        <link rel="stylesheet" type="text/css" href="style.css">
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
        <form action="singupphp.php" method="Post">
        <div class="main-container">
            <br> <br> <br> <br> 
               <h2>Create New Account</h2>
            <!--Step 1:Adding HTML-->
                <div class="container">
                    <input type="text" name="email" size="size" maxlength="length"  placeholder=" Enter your email" required='required'>
                    <input type="text" name="fname" size="size" maxlength="length" placeholder="Enter your first name"required="required">
                    <input type="text" name="lname" size="size" maxlength="length" placeholder="Enter your last name " required="required">
                    <input type="text" name="address" size="size" maxlength="length" placeholder="Address" required="required">
                    <input type="text" name="phone" size="size" maxlength="length" placeholder="Phone number" required="required">
                    <input type="password"  name="psw" size="size" maxlength="length" placeholder="password" required="required">
                    <input type="password"  name="psw-repeat" size="size" maxlength="length"placeholder="Confirm password" required="required">     
                    <button type="submit" class="signupbtn">CREATE ACCOUNT</button>
                </div>
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