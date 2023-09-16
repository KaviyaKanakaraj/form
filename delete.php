<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form</title>
</head>

<body>
  <header>
    <?php include 'includes/_menu.php'; ?>
  </header>
  <section>
    <div>
      <?php
      include 'includes/dbConnectionOpen.php';

      $ID = $_POST['id'];

      $delete = "DELETE FROM form WHERE ID = $ID";

      mysqli_query($conn, $delete);

      echo "Deleted successfully!";

      include 'includes/dbConnectionClose.php';
      ?>
    </div>
  </section>
  <footer>
    <?php include 'includes/_footer.php'; ?>
  </footer>
</body>

</html>