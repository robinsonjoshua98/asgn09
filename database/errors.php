<?php
function check_db_connection($connect) {
if (!$connect) {
	die("ERROR: Cannot connect to database " . DB . " on server " . SERVER .  
	" using user name . USER  (".mysqli_connect_errno().
	", ".mysqli_connect_error().")");
    }
}

function check_that_query_runs($result) {
    if (!$result) {
        die("Could not successfully run query ($userQuery) from $db: " .	
            mysqli_error($connect) );
    }
}