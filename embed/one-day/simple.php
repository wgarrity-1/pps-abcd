<?php
# William Garrity
# 12/31/2020
# See index.php in the DirectoryRoot for the purpose because this code does basically the same thing

# sets the location of the sqlite database file
$database_location = "../../assets/db/abcd-database.db";

# sets how many extra dates to fetch
$extra_dates = 0;

# includes the fuctions and code from the script main.php in the scripts directory of the assets directory
include "../../assets/scripts/main.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>One Day Simple</title>
    <link rel="stylesheet" href="../../assets/css/embed-main.css">
</head>

<body>
    
    <div class="current">

        <div class="day-container">
            <div class="day">
                <?=$formatted_needed_dates[0];?>
            </div>
            <div class="letter">
                <?=$date_types[$formatted_needed_dates[0]]?>
            </div>
        </div>

    </div>
    
</body>

</html>