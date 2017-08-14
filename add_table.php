<?php
mysql_connect('localhost', 'emilio2', 'k421k421');
mysql_select_db('spade');
$query = "SELECT * FROM users";
if ($r = mysql_query($query)) {
    while ($row = mysql_fetch_array($r)) {
        $users = $row['username'];
        $q = "ALTER TABLE $users
        ADD set_color TEXT";
        mysql_query($q);
    }
}




?>
