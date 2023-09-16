<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form</title>
  <link rel="stylesheet" href="listUsers.css">
  <script src="listUsers.js"></script>
</head>

<body>
  <?php
  include 'includes/dbConnectionOpen.php';
  
  $sql = "SELECT * FROM form";
  $result = mysqli_query($conn, $sql);
  include 'includes/dbConnectionClose.php';
  ?>
  <header>
    <?php include 'includes/_menu.php'; ?>
  </header>
  <section>
    <table border="1" cellpadding="15">
      <caption>Users List</caption>
      <thead>
        <tr>
          <th>ID</th>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Date of Birth</th>
          <th>Gender</th>
          <th>Phone Number</th>
          <th>Email ID</th>
          <th>Address</th>
          <th>State</th>
          <th>Country</th>
          <th>Pincode</th>
          <th>Action</th>
        </tr>
        <thead>
          <tbody>
            <?php
        while ($row = mysqli_fetch_assoc($result)) {
          echo '<tr>';
          echo '<td width="20%">';
          echo $row['ID'];
          echo '</td>';
          echo '<td width="20%" align="right">';
          echo $row['FirstName'];
          echo '</td>';
          echo '<td width="20%" align="right">';
          echo $row['LastName'];
          echo '</td>';
          echo '<td width="20%" align="right">';
          echo $row['DOB'];
          echo '</td>';
          echo '<td width="20%" align="right">';
          echo $row['Gender'];
          echo '</td>';
          echo '<td width="20%" align="right">';
          echo $row['Phone'];
          echo '</td>';
          echo '<td width="20%" align="right">';
          echo $row['Email'];
          echo '</td>';
          echo '<td width="20%" align="right">';
          echo $row['Address'];
          echo '</td>';
          echo '<td width="20%" align="right">';
          echo $row['State'];
          echo '</td>';
          echo '<td width="20%" align="right">';
          echo $row['Country'];
          echo '</td>';
          echo '<td width="20%" align="right">';
          echo $row['Pincode'];
          echo '</td>';
          echo '<td width="20%" align="right">';
          echo '<a class="edit-button" href="index.php?id=' . $row["ID"] . '">Edit</a>';
          echo '<button class="delete-button" onclick="return delbtn('.$row["ID"].')">Delete</button>';
          echo '</td>';
          echo '</tr>';
        }
        ?>
      </tbody>
    </table>
  </section>
  <footer>
    <?php include 'includes/_footer.php';?>
  </footer>
</body>
  
</html>