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
<body align="center" style="margin-left: 10px; background-color: #fcc329;">

        <h1 id='nname' style="color: #a01064; text-align: center;">
        <?php
            //connect and stuff
            mysql_connect('localhost', 'emilio2', 'k421k421');
            mysql_select_db('spade');
            session_start();
            error_reporting(0);
            include("public/notify.php");
            //define variables for usernames
            $other_user = $_GET['username'];
            $current_user = $_SESSION['username'];
            $_SESSION['other_user'] = $_GET['username'];
            $other_user_saved = $_SESSION['other_user'];
            $subscribers = 0;
            //gets other users subscribers count
            $query = "SELECT * FROM $other_user_saved";
            if ($r = mysql_query($query)) {
                while ($row = mysql_fetch_array($r)) {
                    $subscribers +=$row['subs_count'];
                }
            }
            print $_GET['username'];
            if ($other_user == $current_user) {
                header("Location: you.php");
            }
            ?>
        </h1>

        <h3>
        <?php
            ?>
            <form action="other_user.php?username=<?php echo $other_user_saved; ?>" method="post">
            <?php
            //checks if you are subscribed or not, and makes the button based on that
            $query = "SELECT * FROM $current_user";
            if ($r = mysql_query($query)) {
                while ($row = mysql_fetch_array($r)) {
                    if ($row['subs'] == $other_user_saved) {
                        $subscribed = true;
                    }
                }
            }
            //if you are subscribed already:
            if ($subscribed) {
                print "<input style='color: #f79825; background-color: #6ce15b; text-align: center;' id='startBtn' type = 'submit' name = 'subscribe' value = 'Subscribed'><br><br>";
            } else {
                print "<input style='color: #f7e524; background-color: #2491f7; text-align: center;' id='startBtn2' type = 'submit' name = 'subscribe' value = 'Subscribe'><br><br>";
            }
            //prints out subscribers
            print "<a href='subs.php'><p style='margin-left: 10px;'>$subscribers Subs</p></a>";
            //ends form
            print "</form>";
            //does the stuff that makes it so when you press subscribe or unsubscribe it works
            if (isset($_POST['subscribe'])) {
                if (!$subscribed) {
                    //subscribing
                    $query = "INSERT INTO $current_user(subs, date_entered) VALUES(
                    '{$other_user}', NOW()
                    )";
                    mysql_query($query);
                    $sub_message = $current_user;
                    $query_two = "INSERT INTO $other_user(subscribed_to_you, subs_count, date_entered, notifications) VALUES(
                    '{$current_user}', '1', NOW(), '{$sub_message}'
                    )";
                    mysql_query($query_two);
                    $location = "other_user.php?username=" . $_GET['username'];
                    header('Location: ' . $location . ' ');

                    // $nu = $_GET['username'];
                    // $nquery = "SELECT * FROM $nu";
                    // if ($r = mysql_query($nquery)) {
                    //   while ($row = mysql_fetch_array($r)) {
                    //     $number = $row['phone_number'];
                    //     notify($config, $number, 'someone subscribed to you on plumebin.com , check your notifications!');
                    //     print mysql_error();
                    //   }
                    // }

                } else {
                    //unsubscribing
                    $delete_query = "DELETE FROM $current_user WHERE subs='$other_user'";
                    mysql_query($delete_query);
                    $qw = "DELETE FROM $other_user WHERE subscribed_to_you='$current_user'";
                    mysql_query($qw);
                    $qt = "DELETE FROM $other_user WHERE notifications='$current_user'";
                    mysql_query($qt);
                    $subscribed = false;
                    $location = "other_user.php?username=" . $other_user;
                    header('Location: ' . $location . ' ');
                }
            }
            print "<hr style='margin: auto;'><br>";
            //gets and prints other users posts
            $query = "SELECT * FROM $other_user_saved ORDER BY date_entered DESC";
            if ($r = mysql_query($query)) {
                while ($row = mysql_fetch_array($r)) {
                    //printing the posts
                    if (!empty($row['posts'])) {
                        $text_date = date_create($row['date_entered']);
                        print "<p style='color: #00ff25; float: left; margin-left: 15px; font-size: 12px;'>" . date_format($text_date, "g:i A") . "</p>";
                        print "<p style='color: #00ff25; float: right; margin-right: 15px; font-size: 12px;'>" . date_format($text_date, "M d, Y") . "</p>";
                        print "<div style='color: #28eafc; background-color: #f9257a; text-align: center;' class='well' id='wellbox'><h3>" . $row['posts'] . "</h3></div>";
                    }
                    if (!empty($row['pictures'])) {
                  print "<div  class='well' id='wellbox'>";
                  print "<img style='width: 100%;' src='data:image/jpeg;base64," . base64_encode($row['pictures']) . "'/><br>";
                  print "</div>";
              }
                }
            }
        ?>

        <form>
        </h3>


               <div class="navbar navbar-default navbar-fixed-top text-center" id="bot" style="box-shadow: 0px 2px 5px #888888; border-bottom-right-radius: 10px;
border-bottom-left-radius: 10px; background-color: #9a2afc;">
    <div class="container">

        <a href='welcome.php'><span style="color: #a01064;" class="glyphicon glyphicon-home" aria-hidden="true" id="alpaca"></span></a>

        <a href='connect.php'><span style="color: #a01064;" class="glyphicon glyphicon-globe" aria-hidden="true" id="alpaca"></span></a>

        <a href='chat.php'><span style="color: #a01064;" class="glyphicon glyphicon-comment" aria-hidden="true" id="alpaca"></span></a>

        <a href='notifications.php'><span style="color: #a01064;" class="glyphicon glyphicon-bell" aria-hidden="true" id="alpaca"></span></a>

        <a href='you.php'><span style="color: #a01064;" class="glyphicon glyphicon-user" aria-hidden="true" id="alpaca"></span></a>


    </div>
</div>


        <div align="center" style="margin: 50px; font-size: 30px; color: #a01064;"><span class="glyphicon glyphicon-book" aria-hidden="true"></span></div>

    </body>
</html>
