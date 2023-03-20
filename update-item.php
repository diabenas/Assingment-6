<?php
 session_start();
 include_once 'database.php';
 if(empty($_SESSION['uname']))
 {
     header("Location: login.php");
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
        <form  method="post">
          <br> <br>

            <table style="width:100%; margin:20px; margin-right:10%;" class="tab1" >
            <tr>
              <th>   </th>
              <th> Item id </th>
              <th> Category </th>
              <th> name item</th>
              <th> Description </th>
              <th> Price </th>
              <th> Quantity </th> 
            </tr>
            <tr>
            <?php 
             $sql= "SELECT itemid, categoryid, nameitem, priceitem,descriptionitem,itemqua FROM items  ";
             $result = $conn->query($sql);
             if (!$result) {
              echo "<p>Unable to execute the query.</p> ";
              echo $query;
              die($conn->error);
            }
             while($row = $result->fetch_array(MYSQLI_ASSOC)){
              ?>
              <th> </th>
              <th> <?php echo $row['itemid'];  ?> </th>
             <th> <?php echo $row['categoryid'];  ?> </th>
             <th> <?php echo $row['nameitem'];  ?></th>
             <th>  <?php echo $row['descriptionitem'];  ?>  </th> 
             <th>  <?php echo $row['priceitem'];  ?> </th>
             <th> <?php echo $row['itemqua'];  ?> </th>
             <td><a href="edit.php?iditem=<?php echo $row['itemid']; ?>">Edit</a></td>
          <td><a href="delete-item.php?iditem=<?php echo $row['itemid']; ?>">Delete</a></td>
            </tr> 
            
            <?php
            }
                ?>
        </form>
    </main>

</html>