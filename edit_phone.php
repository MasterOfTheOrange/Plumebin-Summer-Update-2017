<!DOCTYPE html>
<html lang="en">
<head>
  <title>Plumebin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="master.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
    <body style="margin: 20px; background-color: #fcc329;" align="center">



<div class="navbar navbar-default navbar-fixed-top text-center" id="bot" style="box-shadow: 0px 2px 5px #888888; border-bottom-right-radius: 10px;
border-bottom-left-radius: 10px; background-color: #9a2afc;">
    <div>
        <a href='settings.php'><span style="color: #a01064;" class="glyphicon glyphicon-chevron-left" aria-hidden="true" id='backButton'></span></a>
    </div>
</div>


    <h1 style="color: #a01064;">Phone Number Settings</h1>
    <hr>


    <h3 style="color: #a01064;">What is your phone number?</h3>

    <form action="edit_phone.php" method="post">
      <input type="text" name="phone_number" class="form-control" placeholder="10-digit number" style="width: 40%; display: inline-block; color: #0eccb5; background-color: #f7e8c0;">
      <input type="submit" name="submit" class="btn btn-primary" value="Save Number" style="display: inline-block; background-color: #9a2afc; color: #00ff25;">

    </form>


    <h6 style="color: #a01064;">Phone numbers are used to receive Plumebin Notifications</h6>



    <?php
        mysql_connect('localhost', 'emilio2', 'k421k421');;
        mysql_select_db('spade');
        session_start();
        $user = $_SESSION['username'];
        if (isset($_POST['submit'])) {
          if (is_numeric($_POST['phone_number']) AND strlen($_POST['phone_number']) == 10) {
            $phone_number = $_POST['phone_number'];
            $query = "UPDATE $user SET phone_number='$phone_number' WHERE username='$user'";
            if (mysql_query($query)) {
              print "<script>alert('You phone number has been successfully been linked with Plumebin')</script>";
              header("Location: you.php");
            } else {
              print "<script>alert('Something went wrong while linking your number, please try again.')</script>";
              print mysql_error();
            }
          } else {
            print "<script>alert('You must enter a 10-digit, numeric number')</script>";
          }
        }
    ?>


</body>
</html>
