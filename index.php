<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Plumebin</title>
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
        <br>
        <br>

        <div class="well" id="wellbox" style="margin: 0 auto; background-color: #4fe2ef; width: 300px; margin: 0 auto;">
        <form action="login_handle.php" method="post">
                  <h3 style="color: #ef770e;">Username</h3><input style="color: #0eccb5; background-color: #f7e8c0;" type="text" name = 'username' id = 'inp' placeholder="Enter Username Here">
                  <h3 style="color: #ef770e;">Password</h3><input style="color: #0eccb5; background-color: #f7e8c0;" type="password" name = 'password' id = 'inp' placeholder="Enter Password Here">
                  <br>
                  <br>
                  <br>
                  <input type="submit" name="submit" value="Log In" id="subd" style="color: #0eccb5; background-color: #f7e8c0;">
        </form>
        </div>


        <br>
        <a href="create_new.php"><div style="background-color: #4fe2ef; width: 300px; margin: 0 auto;" class="well" id="wellbox"><h3 style="color: #ef770e;">Create Account</h3></div></a>
        <br>
        <a href='about.html'><div class="well" id="wellbox" style="margin: 0 auto; background-color: #4fe2ef; width: 300px; color: #ef770e;"><h3>About Plumebin</h3></div></a>

        </div>

       <!--
        <script>
        function notifyMe() {
    // Let's check if the browser supports notifications
    if (!("Notification" in window)) {
        alert("This browser does not support desktop notification");
    }

    // Let's check if the user is okay to get some notification
    else if (Notification.permission === "granted") {
        // If it's okay let's create a notification
        var notification = new Notification("Welcome to Plumebin!");
    }

    // Otherwise, we need to ask the user for permission
    // Note, Chrome does not implement the permission static property
    // So we have to check for NOT 'denied' instead of 'default'
    else if (Notification.permission !== 'denied') {
        Notification.requestPermission(function (permission) {

            // Whatever the user answers, we make sure Chrome stores the information
            if (!('permission' in Notification)) {
                Notification.permission = permission;
            }

            // If the user is okay, let's create a notification
            if (permission === "granted") {
                var notification = new Notification("Welcome to Plumebin!");
            }
        });
    }

    // At last, if the user already denied any notification, and you
    // want to be respectful there is no need to bother him any more.
}

        notifyMe();



        </script>
        -->
        <?php
        error_reporting(0);
        session_start();
        if ($_SESSION['username']) {
            header("location: welcome.php");
        }


         ?>
    </body>
</html>
