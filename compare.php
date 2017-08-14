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

$nu = $_GET['username'];
$nquery = "SELECT * FROM $nu";
if ($r = mysql_query($nquery)) {
  while ($row = mysql_fetch_array($r)) {
    $number = $row['phone_number'];
    notify($config, $number, 'someone subscribed to you on plumebin.com , check your notifications!');
    header('Location: ' . $location . ' ');
    print mysql_error();

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





    $nu = $_GET['username'];
    $nquery = "SELECT * FROM $nu";
    if ($r = mysql_query($nquery)) {
      while ($row = mysql_fetch_array($r)) {
        $number = $row['phone_number'];
        notify($config, $number, 'someone subscribed to you on plumebin.com , check your notifications!');
        print mysql_error();
      }
    }
