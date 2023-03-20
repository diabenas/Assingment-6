<?php
 session_start();
 include_once 'database.php';
 //$conn =new mysqli('localhost', 'Enas', '1234diab', 'ice-creamdataase');

 if(empty($_SESSION['uname']))
 {
     header("Location: login.php");
 }
 ?>
 <?php

    //$mysqli->begin_transaction();
    $iditem=$_GET['iditem'];
    $query = "SELECT itemid, categoryid, nameitem, priceitem , descriptionitem, itemqua FROM items  WHERE itemid = '$iditem' ";
    $result = $conn->query($query);// fetch data
   if (!$result) 
   {
       echo "<p>Unable to execute the query.</p> ";
       echo $query;
       die ($conn -> error);
   }
   $row = $result->fetch_array(MYSQLI_ASSOC);
   if(isset($_POST['update'])) // when click on Update button
    {
      $iditem= $_POST['iditem'];
      $cateid = $_POST['cateid'];
      $nameit = $_POST['name-it'];
      $descr = $_POST['descr'];
      $quan = $_POST['quan'];
      $Price = $_POST['Price'];
      //echo "jjj";
      $query ="update items set categoryid='$cateid' , nameitem='$nameit' , descriptionitem='$descr' , itemqua='$quan' where  itemid = '$iditem' ";

      $query ="update items set priceitem=$Price where  itemid = '$iditem' ";
 
     $edit =  $conn->query($query);
     if($edit)
     {
         $conn->close();// Close connection
         header("location:update-item.php"); // redirects to all records page
         exit;
     }
     else
     {
         echo "<p>Unable to execute the query.</p> ";
         echo $query;
         die ($conn -> error);
     }    	
 }

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> Gelato </title>
        <link rel="stylesheet" type="text/css" href="style.css">
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
    <main id="main">
        <form  method="POST">
            <br> <br> <br>
        <h3>Edit ITEM </h3>
        <input type="text" name="iditem" value="<?php echo $row['itemid'] ?>"  placeholder="categoryid" Required>
          <input type="text" name="cateid" value="<?php echo $row['categoryid'] ?>"  placeholder="categoryid" Required>
          <input type="text" name="name-it" value="<?php echo $row['nameitem'] ?>" placeholder="name item" Required>
          <input type="text" name="descr" value="<?php echo $row['descriptionitem'] ?>" placeholder="discription" Required>
          <input type="text" name="Price" value="<?php echo $row['priceitem'] ?>" placeholder="price" Required>
          <input type="text" name="quan" value="<?php echo $row['itemqua'] ?>" placeholder="quantity" Required>
          

         <input type="submit" name="update" value="Update">        
        </form>
    </main>

</html>