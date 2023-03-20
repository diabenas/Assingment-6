<?php
  include_once 'database.php';
  session_start();
  ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> Gelato </title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>	
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
   <main>
      <br> <br> <br>
      <h1> Gelato Item Entry Results</h1>
      <?php
      try{
        if (!isset($_POST['cateid']) || !isset($_POST['name-it']) 
         || !isset($_POST['descr']) || !isset($_POST['Price']) || !isset($_POST['quan'])) {
          echo "<p>You have not entered all the required details.<br />
            Please go back and try again.</p>";
          exit;
        }
        // create short variable names
        $cateid=$_POST['cateid'];
        $nameit=$_POST['name-it'];
        $descr=$_POST['descr'];
        $quan=$_POST['quan'];
        $price=$_POST['Price'];
        $price = doubleval($price);
        
        $sql = "INSERT INTO items (categoryid, nameitem, descriptionitem, itemqua , priceitem)  VALUES 
           ( $cateid, '$nameit', '$descr', $quan , $price)" ;
        $result = $conn->query($sql);

    if ($result) {
        echo  "<p>item inserted into the database.</p>";
    } else {
        echo   $conn -> error ;
        echo   "<br/>.The item was not added.";
        echo    "<br/>$sql ";
    }
  
       //close connection
       $conn -> close();
  }
  catch(mysqli_sql_exception $exception)
                 {
                    header("Location: edit item.php");
                    exit;
                 }
      ?>
   </main>
   <!--<footer>
       <div id="footer">
		  <h4>© 2022-2023 GELATO </h4>
	    </div>
   </footer>-->
</html>