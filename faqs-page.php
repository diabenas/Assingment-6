<!DOCTYPE html>
<html lang="en">
    <head>
        <title> Gelato </title>
        <link rel="stylesheet" type="text/css" href="style.css">
	<form>
		<header id="hr">
			<p id="img"> <img src="./img/Gelato.logo.png" alt="logo"> </p>
		    <h1 id="top">Gelato</h1>
			<h2 id="top1"> <a href="Login.php"><img src="./img/login.logo.png" alt="logo"></a></h2>
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
         </body>
    </form>
	<main id="main">
        <h1 class="faq-heading">Ice Cream FAQs</h1>
        <section class="faq-container">
            <div class="faq-one">
                <!-- faq question -->
                <h1 class="faq-page">How will my ice cream arrive?</h1>
                <!-- faq answer -->
                <div class="faq-body">
                    <h4>we shipour ice cream next day so that it arrivesin prefect condition on your deorstep.
                        we secure your pints in a specially designed,insulated box,cold-packed with dry ice so that your ice cream stays coll in travsit.
                        Not home when it arrives? Your ice cream's safe in the box for up to 24 hours.
                    </h4>
                </div>
            </div>
            <hr class="hr-line">
            <div class="faq-two">
                <!-- faq question -->
                <h1 class="faq-page">How long will my ice cream stay fresh?</h1>
                <!-- faq answer -->
                <div class="faq-body">
                    <h4>Please enjoy your ice cream by the best by date printed on the bottom of your pint.</h4>
                </div>
            </div>
            <hr class="hr-line">
            <div class="faq-three">
                <!-- faq question -->
                <h1 class="faq-page">I have an allergy. Can I eat your ice cream?</h1>
                <!-- faq answer -->
                <div class="faq-body">
                    <h4>The most up to date allergen information can be found on the back of each product.
                        All of our products are made in a facility that handles dairy, tree nuts, peanuts, wheat, soy and egg. 
                        We take extensive precautions to keep our allergens separate from one another and from our other ingredients, however,
                        if you have a life-threatening allergy, please take precaution when eating our product.
                    </h4>
                </div>
            </div>
        </section>
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