<!-- TODO: validate with w3c -->
<!-- TODO: add w3c validate badge at footer -->
<!-- TODO: open account with wikipedia -->
<!-- TODO: contribute at least one page in wikipedia before going hostel -->
<!-- TODO: Donate 500 rupees to wikipedia from your account -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form</title>
  <link rel="stylesheet" href="index.css">
</head>

<body>
  <?php
    include 'includes/dbConnectionOpen.php';
    $sql = "SELECT * from form WHERE ID = '$id'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
  ?>
  <header>
    <?php include 'includes/_menu.php'; ?>
  </header>
  <main>
    <section>
      <div id="form-box">
        <form name="user-form" method="post" action="insert.php">
          <fieldset>
            <legend>Personal Details</legend>
            <div class="form-row">
              <label for="first-name">
                First Name<sup class="mandatory-field">*</sup>
              </label>
              <input
                type="text"
                id="first-name"
                name="first-name"
                size="25"
                autofocus
                value="<?php echo $row['FirstName']?>"
                required>
            </div>
            <div class="form-row">
              <label for="last-name">
                Last Name<sup class="mandatory-field">*</sup>
              </label>
              <input 
                type="text" 
                id="last-name" 
                name="last-name" 
                size="25"
                value="<?php echo $row['LastName']?>"
                required>
            </div>
            <div class="form-row">
              <label for="dob">
                Date of Birth<sup class="mandatory-field">*</sup>
              </label>
              <input
                type="date" 
                name="dob" 
                id="dob" 
                value="<?php echo $row['DOB']?>"
                required>
            </div>
            <div class="form-row">
              <label for="gender">
                Gender
              </label>
              <select 
                id="gender" 
                name="gender"
                value="<?php echo $row['Gender']?>">
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Other">Other</option>
              </select>
            </div>
          </fieldset>
          <fieldset>
            <legend>Contact Details</legend>
            <div class="form-row">
              <label for="phone">
                Phone Number
              </label>
              <input
                type="text"
                id="phone"
                name="phone"
                placeholder="1234567890"
                maxlength="10"
                value="<?php echo $row['Phone']?>"
              >
            </div>
            <div class="form-row">
              <label for="email">
                Email ID<sup class="mandatory-field">*</sup>
              </label>
              <input
                type="email"
                id="email"
                name="email"
                placeholder="example@email.com"
                value="<?php echo $row['Email']?>"
                required>
            </div>
            <div class="form-row">
              <label for="address">
                Address
              </label>
              <input 
                type="text" 
                id="address" 
                name="address"
                value="<?php echo $row['FirstName']?>">
            </div>
            <div class="form-row">
              <label for="state">
                State
              </label>
              <input 
                type="text" 
                id="state" 
                name="state" 
                value="<?php echo $row['State']?>">
            </div>
            <div class="form-row">
              <label for="country">
                Country
              </label>
              <input 
                type="text" 
                id="country" 
                name="country"
                value="<?php echo $row['Country']?>">
            </div>
            <div class="form-row">
              <label for="pincode">
                Pincode
              </label>
              <input 
                type="text" 
                id="pincode" 
                name="pincode" 
                maxlength="10"
                value="<?php echo $row['Pincode']?>">
            </div>
          </fieldset>
          <div class="footer">
            <button type="submit" onclick="validate()">Submit</button>
          </div>
          <input class="hidden-form-field" type="text" name="id" value="<?php echo $id ?>"/>
        </form>
      </div>
    </section>
  </main>
  <footer>
      <?php include "includes/_footer.php"; ?>
  </footer>
  <script src="index.js"></script>
  <?php include 'includes/dbConnectionClose.php'; ?>
</body>
</html>