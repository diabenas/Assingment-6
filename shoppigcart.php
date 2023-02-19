<?php
  session_start();
  if(empty($_SESSION['uname']))
	{
	   // echo "hi again";
		header("Location: login.php");
	}
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
		<header id="hr">
		    <p id="img"> <img src="./img/Gelato.logo.png" alt="gelato" > </p>
		    <h1 id="top">Gelato</h1>
			<h2 id="top1"> <a href="Login.php"><img src="./img/login.logo.png" alt="logo"></a></h2>
			<h3 id="top2"> <a href="shoppigcart.php"><img src="./img/shopping cart.png"alt="shoppingcart"></a></h3>
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
        <main id="main">
           <form action="order.php" method="post">
            <br> <br> <br>
            <div class="wrapper">
      <h1>Shopping Cart</h1>
      <div  class="project">
        <div class="shop">
          <div class="box">
            <img src="./img/icloo_q.jpg" alt="card__image">
            <div class="conten">
              <h3>Igloo Balou Chocolate Ice Cream</h3>
              <h4>price: 2.5ly.d</h4>
              <div class="product-quantity">
                <p>Quantity<input type="number" value="1" min="1" max="10"></p>
              </div>
              <div class="product-removal">
                <button class="remove-product">
                  Remove
                </button>
              </div>
            </div>
          </div>
          <div class="box">
            <img src="./img/icloo-cookies.jpg" alt="card__image">
            <div class="conten">
              <h3>Igloo Cookies Cream Ice Cream</h3>
              <h4>price: 4ly.d</h4>
              <div class="product-quantity">
                <p>Quantity<input type="number" value="1" min="1" max="10"></p>
              </div>
              <div class="product-removal">
                <button class="remove-product">
                  Remove
                </button>
              </div>
            </div>
        </div>
        <div class="box">
          <img src="./img/igloo-choo.png" alt="card__image">
          <div class="conten">
            <h3>Igloo Chocolate Ice Cream</h3>
            <h4>price: 13ly.d</h4>
            <div class="product-quantity">
              <p>Quantity<input type="number" value="1" min="1" max="10"></p>
            </div>
            <div class="product-removal">
              <button class="remove-product">
                Remove
              </button>
            </div>
          </div>
        </div>
      </div>
      <div class="right-bar">
        <p><span>Shipping</span> <span>15ly.d</span></p>
        <hr>
        <p><span>Total</span> <span>40ly.d</span></p>
        <a href="confirmation-form.html"><i>checkout</i></a>
      </div>
  </div>
     </form>
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