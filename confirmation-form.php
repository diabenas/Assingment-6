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
			<h2 id="top1"> <a href="Login.php"><img src="./img/login.logo.png" alt="logo"></a></h2>
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
		</form>
         </body>
	<main id="main">
        <div class="wrapp">
            <h2>Payment Form</h2>
            <form method="POST">
                <div class="input-group">
                    <div class="input-box">
                        <input type="text" placeholder="Full Name" required class="name">
                        <i class="fa fa-user icon"></i>
                    </div>
                </div>
                <div id="input-group">
                    <div class="input-box">
                        <input type="email" placeholder="Email Adress" required class="name">
                        <i class="fa fa-envelope icon"></i>
                    </div>
                </div>
                <div class="input-group">
                    <div class="input-box">
                        <h4>Payment Details</h4>
                        <input type="radio" name="pay" id="bc1" checked class="radio">
                        <label for="bc1"><span><i class="fa fa-cc-visa"></i> Credit Card</span></label>
                        <input type="radio" name="pay" id="bc2" class="radio">
                        <label for="bc2"><span><i class="fa fa-cc-paypal"></i> cash</span></label>
                    </div>
                </div>
                <div class="input-group">
                    <div class="input-box">
                        <input type="text" placeholder="Name On Card " required class="name">
                        <i class="fa fa-credit-card icon"></i>
                    </div>
                    <div class="input-box">
                        <input type="tel" placeholder="Credit Card Number" required class="name">
                        <i class="fa fa-user icon"></i>
                    </div>
                </div>
                <div class="input-group">
                    <div class="input-box">
                        <input type="tel" placeholder="City" required class="name">
                        <i class="fa fa-user icon"></i>
                    </div>
                    <div class="input-box">
                        <input type="tel" placeholder="Street" required class="name">
                        <i class="fa fa-user icon"></i>
                    </div>
                </div>
                <div class="input-group">
                    <div class="input-box">
                        <button type="submit">PAY NOW</button>
                    </div>
                </div>
            </form>
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
	</main>
    <footer>
		<div id="footer">
		  <h4>© 2022-2023 GELATO </h4>
	    </div>
	</footer>
</html>