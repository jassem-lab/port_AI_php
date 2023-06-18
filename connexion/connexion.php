<?php

$con = mysqli_connect('localhost', 'root');
if ($con) {
    
} else {
    echo "no connection";
}

$db = mysqli_select_db($con, 'majdoub');

?>