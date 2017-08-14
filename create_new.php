<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Plumebin | Create New Account</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="master.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="movement.js" charset="utf-8"></script>
    </head>
    <body style="background-image: url(http://az616578.vo.msecnd.net/files/2017/05/28/636315403317633044-1104888008_summer-vacation.jpg); background-repeat: no-repeat; background-attachment: fixed; background-size: cover;" align="center">

            <div class="navbar navbar-default navbar-fixed-top text-center" style="box-shadow: 0px 2px 5px #888888; background-color: #4fe2ef;">
                <h1 style="color: #fcfc50;"><img src="SummerP.ico" id="p"> lumebin</h1>
            </div>

        <br>
        <br>

        <div style="background-color: #4fe2ef; width: 500px; margin: 0 auto;" class="well" id="wellbox">

    <form action="create_new.php" method="post">
        <h3 style="color: #ef770e;" class="user">Username</h3>
        <input style="color: #0eccb5; background-color: #f7e8c0; text-align: center; margin: 0 auto;" type="text" name="username" id = 'inp' placeholder="Enter New Username" autofocus="autofocus">
        <br><br><h3 style="color: #ef770e;" class="user">Email</h3>
        <input style="color: #0eccb5; background-color: #f7e8c0; text-align: center; margin: 0 auto;" type="text" name="email" id = 'inp' placeholder="Enter your Email Address">
        <br><br><h3 style="color: #ef770e;" class="user">Phone</h3>
        <input style="color: #0eccb5; background-color: #f7e8c0; text-align: center;" type="text" name="phone_number" id = 'inp' placeholder="10-digit phone number">
        <br><br><h3 style="color: #ef770e;" class="user">Password</h3>
        <input style="color: #0eccb5; background-color: #f7e8c0; text-align: center; margin: 0 auto;" type="password" name="password" id = 'inp' placeholder="Enter your New Password">
        <br><br><h3 style="color: #ef770e;" class = 'pass'>Confirm Password</h3>
        <input style="color: #0eccb5; background-color: #f7e8c0; text-align: center; margin: 0 auto;" type="password" name="confirm" id = 'inp' placeholder="Retype your Password"><br>
        <br>
        <br>
        <h4 style="color: #ef770e; font-family: arial; text-align: center;"></input>Creating an account means agreeing to our</h4></p>
        <h4><a href ='tos.html' style="text-decoration: underline">Terms of Service</h4>
        <br><br>
        <input style="color: #0eccb5; background-color: #f7e8c0;" type="submit" name="submit" value="Create Account" id = 'subd'>

    </form>
        </div>

        <br>

        <a href='about.html'><div style="background-color: #4fe2ef; width: 500px; margin: 0 auto;" class="well" id="wellbox"><h3 style="color: #ef770e;">About Plumebin</h3></div></a>
        </div>

        <br>

        <a href='index.php'><div style="background-color: #4fe2ef; width: 500px; margin: 0 auto;" class="well" id="wellbox"><h3 style="color: #ef770e;">Already have an account? Click here!</h3></div></a>
        </div>


        <?php
session_start();
error_reporting(0);
//encrypts password
$string = $_POST['password'];
$arr = str_split($string);
$blank = array();
foreach ($arr as $key => $value) {
    if ($value == 'a') {
        $blank[] = "!@";
    }
    if ($value == 'b') {
        $blank[] = "G%";
    }
    if ($value == 'c') {
        $blank[] = "XF";
    }
    if ($value == 'd') {
        $blank[] = "CN";
    }
    if ($value == 'e') {
        $blank[] = "EX";
    }
    if ($value == 'f') {
        $blank[] = "%T";
    }
    if ($value == 'g') {
        $blank[] = "ED";
    }
    if ($value == 'h') {
        $blank[] = "F$";
    }
    if ($value == 'i') {
        $blank[] = "4G";
    }
    if ($value == 'j') {
        $blank[] = "BQ";
    }
    if ($value == 'k') {
        $blank[] = "B@";
    }
    if ($value == 'l') {
        $blank[] = "@2";
    }
    if ($value == 'm') {
        $blank[] = "%5";
    }
    if ($value == 'n') {
        $blank[] = "8G";
    }
    if ($value == 'o') {
        $blank[] = "O0";
    }
    if ($value == 'p') {
        $blank[] = "CC";
    }
    if ($value == 'q') {
        $blank[] = "J%";
    }
    if ($value == 'r') {
        $blank[] = "5F";
    }
    if ($value == 's') {
        $blank[] = "1S";
    }
    if ($value == 't') {
        $blank[] = "1&";
    }
    if ($value == 'u') {
        $blank[] = "!M";
    }
    if ($value == 'v') {
        $blank[] = "TT";
    }
    if ($value == 'w') {
        $blank[] = "U8";
    }
    if ($value == 'x') {
        $blank[] = "C+";
    }
    if ($value == 'y') {
        $blank[] = "@$";
    }
    if ($value == 'z') {
        $blank[] = "@#";
    }
    if ($value == ' ') {
        $blank[] = "C&";
    }
    if ($value == '1') {
        $blank[] = "!!";
    }
    if ($value == '2') {
        $blank[] = "@@";
    }
    if ($value == '3') {
        $blank[] = "PJ";
    }
    if ($value == '4') {
        $blank[] = "JD";
    }
    if ($value == '5') {
        $blank[] = "IN";
    }
    if ($value == '6') {
        $blank[] = "@4";
    }
    if ($value == '7') {
        $blank[] = "C$";
    }
    if ($value == '8') {
        $blank[] = "JJ";
    }
    if ($value == '9') {
        $blank[] = "NK";
    }
    if ($value == '0') {
        $blank[] = "##";
    }
}
$final = implode("", $blank);

$go = true;
if (isset($_POST['submit'])) {
    if (empty($_POST['username']) OR empty($_POST['password']) OR empty($_POST['confirm']) OR empty($_POST['email']) OR empty($_POST['email']) OR empty($_POST['phone_number'])) {
        print "<script>alert('Please fill out all sections')</script>";
        $go = false;
    }
    $name = $_POST['username'];
    if ($_POST['password'] !== $_POST['confirm']) {
        print "<h3 style = 'color: red; text-align: center; margin-top: 40px; font-family: helvetica; text-transform: uppercase'>passwords do not match up, please try again</h3>";
        $go = false;
    }
    if (preg_match('/\s/', $_POST['username'])){
        print "<h3 style = 'color: red; text-align: center; margin-top: 40px; font-family: helvetica; text-transform: uppercase'>username cannot have spaces in it, please try again</h3>";
        $go = false;
    }
    mysql_connect('localhost', 'emilio2', 'k421k421');;
    mysql_select_db('spade');
    $query = 'CREATE TABLE users(
        username TEXT NOT NULL,
        password TEXT NOT NULL
    )';
    mysql_query($query);
    //checks if username exists
    $user_check = "SELECT * FROM users";
    if ($r = mysql_query($user_check)) {
        while ($row = mysql_fetch_array($r)) {
            if ($_POST['username'] == $row['username']) {
                if (strtolower($_POST['username']) == strtolower($row['username'])) {
                	print "<p style = 'color: red; text-align: center; margin-top: 40px; font-family: helvetica; text-transform: uppercase'>username already exists</p>";
                	$go = false;
            	}
            }
        }
    }
}
if (strlen($_POST['username']) > 20) {
    $go = false;
    print "<p style = 'color: red; text-align: center; margin-top: 40px; font-family: helvetica; text-transform: uppercase'>username is too long, try a new one</p>";
}

if ((strpos($_POST['username'], "666")) OR (strpos($_POST['username'], ".")) OR (strpos($_POST['username'], "admin666"))) {
    $go = false;
    print "<p style = 'color: red; text-align: center; margin-top: 40px; font-family: helvetica; text-transform: uppercase'>we are sorry but you can't put 666 or dots in your username.</p>";
}

if (isset($_POST['submit'])) {
        if ($go) {
            $query22 = 'CREATE TABLE emails(
                email TEXT
            )';
            mysql_query($query22);

            $emails = "INSERT INTO emails(email) VALUES(
                    '{$_POST['email']}'
            )";
            mysql_query($emails);

            $query_two = "INSERT INTO users(username, password) VALUES(
                '{$_POST['username']}', '{$final}'
            )";
            mysql_query($query_two);
            $query_three = "CREATE TABLE $name(
                date_entered DATETIME,
                posts TEXT,
                subscribed_to_you TEXT,
                subs_count INT,
                subs TEXT,
                username TEXT,
                notifications TEXT,
                chats TEXT,
                pictures LONGBLOB,
                picture_name TEXT,
                feed TEXT,
                feed_name TEXT,
                times TEXT,
                feed_pics LONGBLOB
            )";
            mysql_query($query_three);
            $query_128 = "INSERT INTO $name(username, subscribed_to_you) VALUES(
                '{$_POST['username']}', '{$_POST['username']}'
            )";
            mysql_query($query_128);
            $_SESSION['username'] = $_POST['username'];
            header("Location: welcome.php");
        }
    }
?>
    </body>
</html>
