<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <header>
    <?php include 'includes/_menu.php'; ?>
  </header>
  <section>
  <?php
    include 'includes/dbConnectionOpen.php';

    $ID = $_POST['id'];
    $GetID = $_GET['id'];
    $FirstName = $_POST['first-name'];
    $LastName = $_POST['last-name'];
    $DOB = $_POST['dob'];
    $Gender = $_POST['gender'];
    $Phone = $_POST['phone'];
    $Email = $_POST['email'];
    $Address = $_POST['address'];
    $State = $_POST['state'];
    $Country = $_POST['country'];
    $Pincode = intval($_POST['pincode']);

    if ($GetID != '') {
      include 'includes/update.php';
    }
    else {
      $insert = "INSERT INTO 
      form (
        FirstName, 
        LastName, 
        DOB,
        Gender,
        Phone,
        Email,
        Address,
        State,
        Country,
        Pincode
      ) 
      VALUES (
        '$FirstName', 
        '$LastName',
        '$DOB',
        '$Gender',
        '$Phone',
        '$Email',
        '$Address',
        '$State',
        '$Country',
        '$Pincode'
      )";

      mysqli_query($conn, $insert);
    }
    echo "User successfully added";
    include 'includes/dbConnectionClose.php';
  ?>
  </section>
  <footer>
    <?php include 'includes/_footer.php'; ?>
  </footer> 
</body>
</html>














































