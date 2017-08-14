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
        <a href='you.php'><span style="color: #a01064;" class="glyphicon glyphicon-chevron-left" aria-hidden="true" id='backButton'></span></a>
    </div>
</div>


    <h1 style="text-align: center; color: #a01064;">Settings</h1>
    <hr>

    <?php
        mysql_connect('localhost', 'emilio2', 'k421k421');;
        mysql_select_db('spade');
        session_start();
        $user = $_SESSION['username'];
        error_reporting(0);
          $query = "SELECT * FROM $user LIMIT 0,1";
          if ($r = mysql_query($query)) {
            while ($row = mysql_fetch_array($r)) {
              if (is_numeric($row['phone_number'])) {
                  print "<p style='color: #a01064;'><b>Your phone number: </b>" . $row['phone_number'] . "<a href='edit_phone.php'>  <span class='glyphicon glyphicon-pencil' aria-hidden='true' style='color: #a01064;'></span></a></p>";
              }
              if (empty($row['phone_number'])) {
                print "<p style='text-align: center; color: #a01064;'><b>Looks like you don't have a phone number to receive notifications, <a href='edit_phone.php'>set one up here.</a></b></p>";
              }
            }
          }
    ?>




    <hr>


    <a style="text-align: center;" href="log_out.php"><div style="color: #00ff25; background-color: #9a2afc;" class="btn btn-danger">Log Out</div></a>


    <?php
  //  script to send messages(make sure error reporting is set to 0):
  /*
    include("public/notify.php");
    notify($config, '7073389858', 'hey guys whats up plumebin.com');
*/
     ?>
</body>
</html>
