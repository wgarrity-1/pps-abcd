<?php

# William Garrity
# 2/27/2021
# Purpose of this PHP code is to grab the day types from the assets/scripts/main.php script and display it on this site for CTE students

# sets the location of the sqlite database file
$database_location = "assets/db/abcd-database.db";

# sets how many extra dates to fetch
$extra_dates = 5;

# includes the functions and code from the script main.php in the scripts directory of the assets directory
include "assets/scripts/main.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>CTE Schedule | Is Today an A, B, C, or D Day?</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="assets/css/main.css">
    
    <!-- CSS Variables Polyfill for IE11 so that this site displays properly on IE11, literally nobody is using IE, or should, but putting this in here just in case that one person who uses IE tries to visit this site gets to see this site work properly. Source code https://github.com/nuxodin/ie11CustomProperties -->
    <script>window.MSInputMethodContext && document.documentMode && document.write('<script src="https://cdn.jsdelivr.net/gh/nuxodin/ie11CustomProperties@4.1.0/ie11CustomProperties.min.js"><\/script>');</script>
    
    <?=$favicon?>
    
    <script>
        
        /* Grabbed from Stack Overflow https://stackoverflow.com/questions/1217929/how-to-automatically-reload-a-web-page-at-a-certain-time/1217945#1217945
           Written by Andrew Moore under the Creative Commons CC BY-SA 2.5 license https://creativecommons.org/licenses/by-sa/2.5/
           This script is licensed under those same terms */
        
        function refreshAt(hours, minutes, seconds) {
            var now = new Date();
            var then = new Date();

            if(now.getUTCHours() > hours ||
               (now.getUTCHours() == hours && now.getUTCMinutes() > minutes) ||
                now.getUTCHours() == hours && now.getUTCMinutes() == minutes && now.getUTCSeconds() >= seconds) {
                then.setUTCDate(now.getUTCDate() + 1);
            }
            then.setUTCHours(hours);
            then.setUTCMinutes(minutes);
            then.setUTCSeconds(seconds);

            var timeout = (then.getTime() - now.getTime());
            setTimeout(function() { window.location.reload(true); }, timeout);
        }
        
        /* refresh at 5 minutes after midnight UTC */
        refreshAt(0,5,0);
        
    </script>
</head>

<body>
	
    <header>
        Is Today an A, B, C, or D Day?
    </header>
    
    <nav>
        <a href="index.php">Normal Schedule</a>
        <a href="https://docs.google.com/document/d/10AsMpaTQHgyvpkZ617QAIu6Q960K_rP9PePc6a3BmYY/edit">PPS Schedule Designation Document</a>
        <a href="embed/index.php">Embed This Site</a>
        <a href="https://docs.google.com/forms/d/e/1FAIpQLSe0q4J-G4v-dvZeb01JuLjBRxiyuKWSyGRxKstK6TLBP4LHMA/viewform?usp=sf_link">Contact Form</a>
    </nav>
    
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
                        Junior CTE Schedule:
                    </div>
                    
                    <?=determineSchedule('cte_junior', $date_types[$formatted_needed_dates[0]])?>
                    
                </div>
                
                <div class="high-schedule">
                    
                    <div class="schedule-header">
                        Senior CTE Schedule:
                    </div>
                    
                    <?=determineSchedule('cte_senior', $date_types[$formatted_needed_dates[0]])?>
                    
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
        
    </footer>
	
</body>

</html>