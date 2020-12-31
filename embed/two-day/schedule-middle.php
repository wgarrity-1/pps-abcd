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
	<title>One Day with Middle School Schedule</title>
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
    
    <div class="schedule">
        
        <div class="schedule-header">
            Middle School Schedule:
        </div>
        <table class="schedule-table">

            <tr>
                <th>Time</th>
                <th>A Day</th>
            </tr>

            <tr>
                <td>7:35 - 8:20</td>
                <?=$todays_schedule['b1']?>
            </tr>

            <tr>
                <td>8:25 - 9:10</td>
                <?=$todays_schedule['b2']?>
            </tr>

            <tr>
                <td>9:15 - 10:01</td>
                <?=$todays_schedule['b3']?>
            </tr>

            <tr>
                <td>10:01 - 12:07</td>
                <?=$todays_schedule['lunch']?>
            </tr>

            <tr>
                <td>12:07 - 12:52</td>
                <?=$todays_schedule['b4']?>
            </tr>

            <tr>
                <td>12:55 - 1:40</td>
                <?=$todays_schedule['b5']?>
            </tr>

            <tr>
                <td>1:43 - 2:28</td>
                <?=$todays_schedule['b6']?>
            </tr>

        </table>
    </div>
    
</body>

</html>