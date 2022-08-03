<?php
    $db['server']   = "localhost";
    $db['user']     = "root";
    $db['password'] = "";
    $db['dbname']   = 'chamados';    
    $conn = mysql_connect($db['server'], $db['user'], $db['password']);
    mysql_select_db($db['dbname'], $conn);
?>