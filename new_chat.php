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
<body style="background-color: #fcc329;" align="center">



<div class="navbar navbar-default navbar-fixed-top text-center" id="bot" style="box-shadow: 0px 2px 5px #888888; border-bottom-right-radius: 10px;
border-bottom-left-radius: 10px; background-color: #9a2afc;">
    <div>

        <a href='chat.php'><span style="color: #a01064;" class="glyphicon glyphicon-chevron-left" aria-hidden="true" id='backButton'></span></a>


    </div>
</div>











        <form action="new_chat.php" method="post">
            <br>
            <br>
            <h1 style='color: #a01064; font-family: sans-serif'>Enter the username of the user you want to start a conversation with</h1>
            <input type="text" name="chat_req" style = 'color: #0eccb5; background-color: #f7e8c0; border: 2px solid black; outline: none; margin-top: 110px; height: 40px; width: 200px; font-size: 30px; text-align: center' placeholder="Username">
            <br>
            <br>
            <input type="submit" name="submit" value="Search" style = 'background-color: transparent; color: #37c912; border: none; outline: none; font-size: 26px;'>
            <hr style='width: 150px;'>

            <br>
        </form>
        <?php
        session_start();
        mysql_connect('localhost', 'emilio2', 'k421k421');;
        mysql_select_db('spade');
        $user = $_SESSION['username'];
        //finds name
        $query = "SELECT * FROM users";
        if ($r = mysql_query($query)) {
            while ($row = mysql_fetch_array($r)) {
                if (isset($_POST['submit'])) {
                    if (strtolower($row['username']) == strtolower($_POST['chat_req'])) {
                        print "<form action = 'chat.php' method='post'><input style = 'color: #a01064; background-color: transparent; border: none; font-size: 35px; text-decoration: underline;' type ='submit' name ='user_req' value = '" . $row['username'] . "'></form>";
                    } else {
                        //no users exist
                    }
                }
            }
        }
        ?>
    </body>
</html>
