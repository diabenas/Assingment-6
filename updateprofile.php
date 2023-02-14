<?php
   include 'database.php';
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
		<header id="hr">
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
          <div class="container">
          <?php
            if(count($_POST)>1)
            {
                mysqli_query($conn,"UPDATE user  SET fname='" . $_POST['fname']."',lname='" . $_POST['lname']."',password='" . $_POST['psw']."',address='" . $_POST['address']."',phone='" . $_POST['phone']."',email='" . $_POST['email']."' WHERE email='" . $_SESSION['uname']."'" );
                echo "<h2> Complete editing </h2>";
            }
?>

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
