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
	  <form action="cartphp.php" method="post"> 
	  	<div class="container">
        <div class="dropdown">
            <button id="butt">Category</button>
            <div class="dropdown-content">
            <a href="Tubs.php">Tubs</a>
            <a href="cones.php">Cones</a>
            <a href="Bars.php">Bars</a>
            </div>
        </div>
          <table style="width:100%; margin:20px; margin-right:10%;">
            <tr>
              <th>   </th>
              <th> Category </th>
              <th> Description </th>
              <th> Price </th>
              <th> Quantity </th> 
            </tr>
            <tr>
              <th><img src="./img/chcolate.jpg" class="picart1"></th>
              <th> Tubs </th>
              <th> chcolate </th>
              <th> 13 LY.D </th>
              <th><input type="text" name="p1" value="1" min="1" max="10"></th>
              <th> <button >add cart</button> </th>
            </tr>
            <tr>
              <th><img src="./img/strawberries-tubs.jpg" class="picart1"></th>
              <th> Tubs </th>
              <th> Strawberries </th>
              <th> 13 LY.D </th>
              <th><input type="text" name="p2" value="1" min="1" max="10"></th>
              <th> <button >add cart</button> </th>
            </tr>
            <tr>
              <th><img src="./img/bars-chocolate.jpg" class="picart1"></th>
              <th> Bars </th>
              <th> chocolate </th>
              <th> 4 LY.D </th>
              <th><input type="text" name="p3" value="1" min="1" max="10"></th>
              <th> <button >add cart</button> </th>
            </tr>
            <tr>
              <th><img src="./img/fistachio-bars.jpg" class="picart1"></th>
              <th> Bars </th>
              <th> Pistachio </th>
              <th> 4 LY.D </th>
              <th><input type="text" name="p4" value="1" min="1" max="10"></th>
              <th> <button >add cart</button> </th>
            </tr>
            <tr>
              <th><img src="./img/oreo ice cream.jpg" class="picart1"></th>
              <th> cones </th>
              <th> oreo ice cream</th>
              <th> 3 LY.D </th>
              <th><input type="text" name="p5" value="1" min="1" max="10"></th>
              <th> <button >add cart</button> </th>
            </tr>
            <tr>
              <th><img src="./img/strawberries-cones.jpg" class="picart1"></th>
              <th> cones </th>
              <th> Strawberries </th>
              <th> 3 LY.D </th>
              <th><input type="text" name="p6" value="1" min="1" max="10"></th>
              <th> <button >add cart</button> </th>
            </tr>
            <tr>
              <th><img src="./img/marshmallow ice cream.jpg" class="picart1"></th>
              <th> cones </th>
              <th> marshmallow ice cream </th>
              <th> 3 LY.D </th>
              <th><input type="text" value="1" min="1" max="10"></th>
              <th> <button >add cart</button> </th>
            </tr>
          </table>
         

      </div>
	 </form>
  </main>
  <footer>
    <div id="footer">
		  <h4>© 2022-2023 GELATO </h4>
	    </div>
   </footer>
</html>
