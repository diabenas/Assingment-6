<?php
include_once 'database.php';
   $email = $_POST['email'];
   $fname = $_POST['fname'];
   $lname = $_POST['lname'];
   $address = $_POST['address'];
   $phone = $_POST['phone'];
   $password = $_POST['psw'];
   $conpsw = $_POST['psw-repeat'];
 //  extract($_POST, EXTR_PREFIX_ALL, 'var');

    if($password == $conpsw )
    {
      
      //execute SQL query and assign the result pointer to variable named $QueryResult
      $sql = "INSERT INTO user (email, fname ,lname , address,phone,password)  VALUES 
       ('$email', '$fname', '$lname',  '$address','$phone','$password')" ;
       if(mysqli_query($conn,$sql))
       {
        echo "welcom to the family";
       }
        else {
           //echo "<p>Successfully added the record.</p>";
            echo "error";
          } 
        //close connection
        //echo "<p>close connection.</p>";
        mysqli_close($conn);
      }
    else{
      echo "<h2>  Error.Please try again. </h2>";
    }
   
   

?>
