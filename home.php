<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Plumebin</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="master.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="movement.js" charset="utf-8"></script>
</head>
<body align="center">
  <div class="navbar navbar-default navbar-fixed-top text-center" style="box-shadow: 0px 2px 5px #888888; background-color: #efefef;">
      <h1><img src="favicon.ico" id="p"> lumebin</h1>
  </div>

  <div style="margin-top: 10px" class='well' id="wellbox"><h1>Welcome to Plumebin!</h1>
    <h3>A website that allows you, the user, to communucate and interact with friends and other users from all parts of the globe!</h3>
    <h3>The icons from left to right send you to pages that allow you to check your feed, explore user profiles and communities, chat with others, look at your notifications, and view your profile</h3>
    <h3>You can also create a post or upload photos by clicking on the hand icon that is above the others</h3>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="navbar navbar-default navbar-fixed-bottom text-center" id="bot" style="box-shadow: 0px 2px 5px #888888; border-bottom-right-radius: 10px;
    border-bottom-left-radius: 10px;">
        <div class="container">

            <a href='welcome.php'><span class="glyphicon glyphicon-home" aria-hidden="true" id="alpaca"></span></a>

            <a href='connect.php'><span class="glyphicon glyphicon-globe" aria-hidden="true" id="alpaca"></span></a>

            <a href='chat.php'><span class="glyphicon glyphicon-comment" aria-hidden="true" id="alpaca"></span></a>

            <a href='notifications.php'><span class="glyphicon glyphicon-bell" aria-hidden="true" id="alpaca"></span></a>

            <a href='you.php'><span class="glyphicon glyphicon-user" aria-hidden="true" id="alpaca"></span></a>


        </div>
    </div>
    <a href='user_post.php'><div style="margin: auto; height: 70px; width: 200px; background-color: #6BB9F0; margin-bottom: 67px; border-radius: 10px; text-align: center; box-shadow: 3px 3px 5px #888888;" class="navbar-fixed-bottom">
        <span class="glyphicon glyphicon-hand-up" aria-hidden="true" id="alpaca" style="font-size: 40px; "></span>
</html>
