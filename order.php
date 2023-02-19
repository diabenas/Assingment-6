<?php
session_start();
  // create short variable names
  $pr1=0;
  $pr2=0;
  $pr3=0;
  $pr4=0;
  
  if(!empty($_POST['pr1']))
  $pr1 = $_POST['pr1'];

  if(!empty($_POST['pr2']))
  $pr2 = $_POST['pr2'];

  if(!empty($_POST['pr3']))
  $pr3 = $_POST['pr3'];
  if(!empty($_POST['pr4']))
  $pr4 = $_POST['pr4'];



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
			<h3 id="top2"> <a href="cartphp.php"><img src="./img/shopping cart.png"alt="shoppingcart"></a></h3>
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
          <br> <br> <br>
    <h1>Order Results</h1> 
    <?php
    echo "<p>Order processed at ";
    echo date('Y-m-d h:i:sa');
    echo "</p>";

    echo '<p>Your order is as follows: </p>';

    echo htmlspecialchars($pr1).'Vanilla <br />';
    echo htmlspecialchars($pr2).' Chocolate<br />';
    echo htmlspecialchars($pr3).'Strawberry<br />';
    echo htmlspecialchars($pr4).'Cookies Cream <br />';

    $total = 0;
    $total = $pr1 + $pr2 + $pr3 + $pr4 ;
    echo "<p>Items ordered: ".$total."<br />";
    $totalamount = 0.00;

    define('p1', 3);
    define('p2', 4);
    define('p3', 6);
    define('p4',5);

    $totalamount = $pr1 * p1
                 + $pr2 * p2
                 + $pr3 * p3
                 + $pr4 * p4;

    echo "Subtotal: LYD".number_format($totalamount,2)."<br />";
    
    //$taxrate = 0.10;  // local sales tax is 10%
   // $totalamount = $totalamount * (1 + $taxrate);
    echo "Total including tax: LYD".number_format($totalamount,2)."</p>";
    ?>  
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