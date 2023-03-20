<?php

session_start();
include 'database.php';
 if(isset($_POST['name']) && isset($_POST['password'])){
  function validate($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  $uname = validate($_POST['name']);
  $pass = validate($_POST['password']);

  if(empty($uname)){
    header("Location: login.php?error=User Name is required");
    exit();
  }
  else if(empty($pass)){
    header("Location: login.php?error=password is required");
    exit();
  }
  else{
   $sql= "SELECT * FROM user WHERE email='$uname'";
   $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result) === 1){
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_assoc($result);
      if($row['email'] === "$uname" && $row['password'] === "$pass"){
        
        $_SESSION['iduser']= $row['id'];
        $_SESSION['uname']= $uname;
        $_SESSION['pass']=$pass; 
        $_SESSION['fname'] = $row['fname'];
        $_SESSION['address']= $row['address'];
        $_SESSION['phone']=$row['phone'];
        $_SESSION['lname'] = $row['lname'];
        $_SESSION['job']= $row['job'];
        header("Location: pagehome.php");
       // exit();
      }else{
        //echo($sql);
        //echo "Data Entry Error";
        header("Location: woring.php");
       
        //exit();
    }
    
    }
    
  }
}

?>
 