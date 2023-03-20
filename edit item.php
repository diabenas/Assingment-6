<?php
 session_start();
 include_once 'database.php';
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
	<form>
		<header id="hr">
			<p id="img"> <img src="./img/Gelato.logo.png" alt="logo"> </p>
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
    </form>
 <main id="main">
    <br> <br><br>
    <h1>Gelato - New Item Entry</h1>
    <form action="insert-item.php" method="post">
        
       <div class="main-container">
        <div class="dropdown">
            <button id="butt">Edititem</button>
          <div class="dropdown-content">
            <a href="edit item.php">insert</a>
            <a href="update-item.php">Edit</a>            
         </div>
        </div>
        
          <div class="container">
              <input type="text"  name="cateid" placeholder="categoryid" maxlength="13" size="13" />
        
              <input type="text" name="name-it" placeholder="name item" maxlength="30" size="30" />
        
              <input type="text"  name="descr" placeholder="discription" maxlength="60" size="30" />
          
              <input type="text"  name="Price" placeholder="price" maxlength="7" size="7" /> 

              <input type="text"  name="quan" placeholder="quantity" maxlength="7" size="7" /> 

           </div>
       </div>
       <button type="submit" class="signupbtn">Add New Item</button>
    </form>
</main>
<footer>
  <div id="footer">
        <h4>© 2022-2023 GELATO </h4>
      </div>
 </footer>
</html>