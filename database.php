<?php

$conn = mysqli_connect('localhost', 'Enas', '1234diab', 'ice-creamdataase');
if(!$conn)
{
    echo "error: " . mysqli_connect_error();
} else{
   // echo "Welcomein database ice_cream.";
}

?>