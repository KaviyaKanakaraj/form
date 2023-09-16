<?php
$update = "UPDATE form 
  SET 
    FirstName = '$FirstName',
    LastName = '$LastName',
    DOB = '$DOB',
    Gender = '$Gender',
    Phone = '$Phone',
    Email = '$Email',
    Address = '$Address',
    State = '$State',
    Country = '$Country',
    Pincode = '$Pincode'
  WHERE
    ID = '$ID'";

  mysqli_query($conn, $update);
?>