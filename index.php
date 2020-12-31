<?php

# William Garrity
# 12/30/2020
# Purpose of this PHP code is to grab the day types from the assets/scripts/main.php script and display it on this site

# sets the location of the sqlite database file
$database_location = "assets/db/abcd-database.db";

# sets how many extra dates to fetch
$extra_dates = 5;

# includes the functions and code from the script main.php in the scripts directory of the assets directory
include "assets/scripts/main.php";

?>
<!DOCTYPE html>
<html lang="">

<head>
	<meta charset="utf-8">
	<title>Is Today an A, B, C, or D Day?</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="assets/css/main.css">
</head>

<body>
	
    <header>
        Is Today an A, B, C, or D Day?
    </header>
    
	<main>
		
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
		
        <div class="schedules">
                
                <div class="middle-schedule">
                    
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
                
                <div class="high-schedule">
                    
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
                
            </div>
        
        <div class="upcomming-header">
                5 Days Ahead
        </div>
        
		<div class="upcomming">
			
            
			<div class="day-container container-smaller">
				<div class="day">
					<?=$formatted_needed_dates[1];?>
				</div>
				<div class="letter letter-smaller">
					<?=$date_types[$formatted_needed_dates[1]]?>
				</div>
			</div>
			<div class="day-container container-smaller">
				<div class="day">
					<?=$formatted_needed_dates[2];?>
				</div>
				<div class="letter letter-smaller">
					<?=$date_types[$formatted_needed_dates[2]]?>
				</div>
			</div>
			<div class="day-container container-smaller">
				<div class="day">
					<?=$formatted_needed_dates[3];?>
				</div>
				<div class="letter letter-smaller">
					<?=$date_types[$formatted_needed_dates[3]]?>
				</div>
			</div>
			<div class="day-container container-smaller">
				<div class="day">
					<?=$formatted_needed_dates[4];?>
				</div>
				<div class="letter letter-smaller">
					<?=$date_types[$formatted_needed_dates[4]]?>
				</div>
			</div>
			<div class="day-container container-smaller">
				<div class="day">
					<?=$formatted_needed_dates[5];?>
				</div>
				<div class="letter letter-smaller">
					<?=$date_types[$formatted_needed_dates[5]]?>
				</div>
			</div>
			
		</div>
		
	</main>
    
    <footer>
        
        <div id="created-by">Site Created by William Garrity</div>
        <div id="see-schedules"><a href="schedules.html">See Full Schedules</a></div>
        <div id="embed">Embed This Site</div>
        
    </footer>
	
</body>

</html>