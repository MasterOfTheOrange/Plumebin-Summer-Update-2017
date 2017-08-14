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
    <body align="center"; style="margin: 20px; background-color: #fcc329;">


	<nav class="navbar navbar-inverse navbar-fixed-top" style="background-color: white; border: none; box-shadow: 0px 2px 5px #888888;">
  <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand" href="#" style="color: black;">Plumebin is Loading...</a>
    </div>
  </div>
</nav>

<div class="navbar navbar-default navbar-fixed-top text-center" id="bot" style="box-shadow: 0px 2px 5px #888888; border-bottom-right-radius: 10px;
border-bottom-left-radius: 10px; background-color: #9a2afc;">
    <div class="container">

        <a href='welcome.php'><span style="color: #a01064;" style="color: #a01064;" style="color: #a01064;" style="color: #a01064;" style="color: #a01064;" class="glyphicon glyphicon-home" aria-hidden="true" id="alpaca"></span></a>

        <a href='connect.php'><span style="color: #a01064;" style="color: #a01064;" style="color: #a01064;" style="color: #a01064;" class="glyphicon glyphicon-globe" aria-hidden="true" id="alpaca"></span></a>

        <a href='chat.php'><span style="color: #a01064;" style="color: #a01064;" style="color: #a01064;" class="glyphicon glyphicon-comment" aria-hidden="true" id="alpaca"></span></a>

        <a href='notifications.php'><span style="color: #a01064;" style="color: #a01064;" class="glyphicon glyphicon-bell" aria-hidden="true" id="alpaca"></span></a>

        <a href='you.php'><span style="color: #a01064;" class="glyphicon glyphicon-user" aria-hidden="true" id="alpaca"></span></a>


    </div>
</div>


<h2 style='font-family: sans-serif; display: inline; margin-auto: center; text-decoration: underline; color: #a01064;'>Notifications




        <?php
        mysql_connect('localhost', 'emilio2', 'k421k421');;
        mysql_select_db('spade');
        session_start();
        error_reporting(0);
        $user = $_SESSION['username'];
        if (isset($_POST['other_user'])) {
            $_SESSION['found_user'] = $_POST['other_user'];
            header("Location: other_user.php");
        }
        $query = "SELECT * FROM $user ORDER BY date_entered DESC";
        if ($r = mysql_query($query)) {
            while ($row = mysql_fetch_array($r)) {
                if (!empty($row['notifications'])) {
                    if (strpos($row['notifications'], ' ')) {
                        $message = "started a chat with you<br>";
                    } else {
                        $message = "subscribed to you!<br>";
                    }
                    print "<h3><a href='other_user.php?username=" . $row['notifications'] . "'>" . $row['notifications'] . " " . $message . "</a></h3>";
                }
            }
        }
        ?>
        </div>
    </body>
</html>
