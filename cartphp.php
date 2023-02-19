<?php
  session_start();
  if(empty($_SESSION['uname']))
  {
     // echo "hi again";
    header("Location: login.php");
  }
  include 'database.php';
  $p1=0;
  $p2=0;
  $p3=0;
  $p3=0;
  $p4=0;
  $p5=0;
  $p6=0;
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
            <?php
    try {
        if (!isset($_POST['p1']))
            throw new Exception("You need to select quantity");
        $item = $_POST['p1'];
        if (empty($_POST['p1']))
            throw new Exception("You need to enter quantity");
      //  echo ("You selected ");

    }
    //catch exception
    catch (Exception $e) {
       // echo 'Message: ' . $e->getMessage();
    }
    ?>
         </body>
    </form>
 <main id="main">
    <br> <br> <br>
    <h1> My Cart </h1>
    <?php
      $sql="SELECT * FROM shoppingcart JOIN items ON items.itemid = shoppingcart.itemid";
      $result = $conn->query($sql);
      if($result->num_rows>0)
      {
        for($j=1;$row=$result->fetch_assoc();$j++){
            echo "Item: " .$j." <br>";
            echo "flavor:" .$row["name-item"]. "<br>";
            echo  "quantity:" .$row["item-qua"]. "<br>";
        }
      } else if($p1 == 1 && $p2==0 && $p3==0 && $p4==0 && $p5==0 && $p6==0)
      {
        echo "cart is empty";
      }
    ?>
   <?php
   if($p1!=0){
       try{
        $mysqli->begin_transaction();
        $sq="SELECT * FROM items WHERE itemid='1' ";
        $result = $conn->query($sq);
        $row=$result->fetch_assoc();
        if($row["item-qua"] > $p1){
            $sql= "INSERT INTO shoppingcart (itemid,item-qua) VALUES('1','$p1)'";
            if (mysqli_query($conn, $sql)) {
                echo $p1. "Coffe ice cream";
            }
        }
       }
       catch(mysqli_sql_exception $exception)
                 {
                    $mysqli->rollback();
                    header("Location: prices.php");
                 }
}
if($p2!=0){
    try{
     $mysqli->begin_transaction();
     $sq="SELECT * FROM items WHERE itemid='1' ";
     $result = $conn->query($sq);
     $row=$result->fetch_assoc();
     if($row["item-qua"] > $p1){
         $sql= "INSERT INTO shoppingcart (itemid,item-qua) VALUES('1','$p2)'";
         if (mysqli_query($conn, $sql)) {
             echo $p1. "Coffe ice cream";
         }
     }
    }
    catch(mysqli_sql_exception $exception)
              {
                 $mysqli->rollback();
                 header("Location: prices.php");
              }
}
if($p3!=0){
    try{
     $mysqli->begin_transaction();
     $sq="SELECT * FROM items WHERE itemid='1' ";
     $result = $conn->query($sq);
     $row=$result->fetch_assoc();
     if($row["item-qua"] > $p1){
         $sql= "INSERT INTO shoppingcart (itemid,item-qua) VALUES('1','$p3)'";
         if (mysqli_query($conn, $sql)) {
             echo $p1. "Coffe ice cream";
         }
     }
    }
    catch(mysqli_sql_exception $exception)
              {
                 $mysqli->rollback();
                 header("Location: prices.php");
              }
}
if($p4!=0){
    try{
     $mysqli->begin_transaction();
     $sq="SELECT * FROM items WHERE itemid='1' ";
     $result = $conn->query($sq);
     $row=$result->fetch_assoc();
     if($row["item-qua"] > $p1){
         $sql= "INSERT INTO shoppingcart (itemid,item-qua) VALUES('1','$p4)'";
         if (mysqli_query($conn, $sql)) {
             echo $p1. "Coffe ice cream";
         }
     }
    }
    catch(mysqli_sql_exception $exception)
              {
                 $mysqli->rollback();
                 header("Location: prices.php");
              }
}
if($p5!=0){
    try{
     $mysqli->begin_transaction();
     $sq="SELECT * FROM items WHERE itemid='1' ";
     $result = $conn->query($sq);
     $row=$result->fetch_assoc();
     if($row["item-qua"] > $p1){
         $sql= "INSERT INTO shoppingcart (itemid,item-qua) VALUES('1','$p5)'";
         if (mysqli_query($conn, $sql)) {
             echo $p1. "Coffe ice cream";
         }
     }
    }
    catch(mysqli_sql_exception $exception)
              {
                 $mysqli->rollback();
                 header("Location: prices.php");
              }
}
if($p6!=0){
    try{
     $mysqli->begin_transaction();
     $sq="SELECT * FROM items WHERE itemid='1' ";
     $result = $conn->query($sq);
     $row=$result->fetch_assoc();
     if($row["item-qua"] > $p1){
         $sql= "INSERT INTO shoppingcart (itemid,item-qua) VALUES('1','$p6)'";
         if (mysqli_query($conn, $sql)) {
             echo $p1. "Coffe ice cream";
         }
     }
    }
    catch(mysqli_sql_exception $exception)
              {
                 $mysqli->rollback();
                 header("Location: prices.php");
              }
}
   ?>
</main>
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