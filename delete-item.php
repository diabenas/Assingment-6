<?php
 session_start();
 include_once 'database.php';
 if(empty($_SESSION['uname']))
 {
     header("Location: login.php");
 }
 ?>
 <?php
  try{
   
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
   if(isset($_POST['delete'])) // when click on Update button
     {
        $query ="Delete from items  where itemid='$iditem' ";
        $delete =  $conn->query($query);

    if($delete)
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
  }
  catch(mysqli_sql_exception $exception)
                 {
                    
                    header("Location: update-item.php");
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
        <h3>Delete ITEM </h3>
          <input type="text" name="	cateid" value="<?php echo $row['categoryid'] ?>"  disabled>
          <input type="text" name="name-it" value="<?php echo $row['nameitem'] ?>" disabled>
          <input type="text" name="descr" value="<?php echo $row['descriptionitem'] ?>" disabled>
          <input type="text" name="quan" value="<?php echo $row['itemqua'] ?>" disabled>
          <input type="text" name="Price" value="<?php echo $row['priceitem'] ?>" disabled>

         <input type="submit" name="delete" value="Delete">        
        </form>
    </main>

</html>