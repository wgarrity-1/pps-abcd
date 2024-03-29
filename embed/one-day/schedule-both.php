<?php
# William Garrity
# 5/14/2021
# See index.php in the DirectoryRoot for the purpose because this code does basically the same thing


# redirect code, if forking please remove
# redirects to closing page
header("Location: ../closed.html");
die();



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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/embed-main.css">
    
    <!-- CSS Variables Polyfill for IE11 so that this site displays properly on IE11, literally nobody is using IE, or should, but putting this in here just in case that one person who uses IE tries to visit this site gets to see this site work properly. Source code https://github.com/nuxodin/ie11CustomProperties -->
    <script>window.MSInputMethodContext && document.documentMode && document.write('<script src="https://cdn.jsdelivr.net/gh/nuxodin/ie11CustomProperties@4.1.0/ie11CustomProperties.min.js"><\/script>');</script>
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
    
    <div class="schedule">
        
        <div class="schedule-header">
            High School Schedule:
        </div>
        <table class="schedule-table">

            <tr>
                <th>Time</th>
                <th>A Day</th>
            </tr>

            <tr>
                <td>7:25 - 8:10</td>
                <?=$todays_schedule['b1']?>
            </tr>

            <tr>
                <td>8:15 - 9:00</td>
                <?=$todays_schedule['b2']?>
            </tr>

            <tr>
                <td>9:05 - 9:52</td>
                <?=$todays_schedule['b3']?>
            </tr>

            <tr>
                <td>9:52 - 11:55</td>
                <?=$todays_schedule['lunch']?>
            </tr>

            <tr>
                <td>11:55 - 12:40</td>
                <?=$todays_schedule['b4']?>
            </tr>

            <tr>
                <td>12:45 - 1:30</td>
                <?=$todays_schedule['b5']?>
            </tr>

            <tr>
                <td>1:35 - 2:20</td>
                <?=$todays_schedule['b6']?>
            </tr>

        </table>
    </div>
    
</body>

</html>