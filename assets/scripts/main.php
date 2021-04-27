<?php
# William Garrity
# 4/22/2021
# This program contains the functions getNeededDates(), determineDays(), convertDateFormat(), and determineSchedule() which helps to determine what the current day type is, the next 5 day types, as well as the current day's schedule.

include "tables.php"; # contains the schedules

define('DATE_FORMAT', "l, F j, Y");
define('DISPLAY_FORMAT', "l, F jS");

define('BOOLEAN_REMOTE', false);

# function determines the current date, formats it, then determines the dates for the next 5 days, then formats thoes dates to the format of the dates stored in the DB, stores it all in an array, then returns that array. You can also customize the number of dates this function puts out.
function getNeededDates($num_dates, $date_format = DATE_FORMAT){
    
    # variable the stores the current date
    $current_date = new DateTime();
    
    # formats the current date with the format specified (either set in the function or the default)
    $current_date_formatted = $current_date->format($date_format);
    
    # creates a new array called and sets the 0th index to be the current date formatted
    $all_dates = [$current_date_formatted];
    
    # this for loop will run 5 times, starting from 1 and stopping when it hits $num_dates + 1. Starts at 1 so that 1 day is added on later
    for ($i = 1; $i < $num_dates + 1; $i++){
        # sets $fresh_current_date to the current date so that the calculations below won't be messed up
        $fresh_current_date = clone $current_date;
        
        # sets #added_date to $i days after the current date ($i depends on what part of the loop the for loop is at, that is also why $i starts at one so that 1 day is added)
        $added_date = $fresh_current_date->add(new DateInterval("P{$i}D"));
        
        # pushed $added_date to the array with it formatted
        array_push($all_dates, $added_date->format($date_format));
    }
    
    # returns the array that was created in this function
    return $all_dates;

}

# function that takes an array of dates (going to be used in conjunction with the getNeededDates function), and goes through the database to find the entries for thoes dates given, then combines all entries into one array called $day_and_type which is returned
function determineDays($db_file, $date_array, $date_format = DATE_FORMAT, $display_format = DISPLAY_FORMAT){
    # empty array for use later
    $day_and_type = [];
    
    # opens the sqlite database using PDO
    $pdo = new PDO("sqlite:{$db_file}");
    
    # stmt stores the prepared statement which will select all collumns from the table Days where the date matches the date given in the variable $date, which is binded to the :date thingy
    $stmt = $pdo->prepare("SELECT * FROM Days WHERE Date = :date");
    $stmt->bindParam(':date', $date);
    
    # for every $date in $date array
    foreach ($date_array as $date){
        # executes the statement with the date variable, and then sets the output of it to a Key Pair (date => type of day array)
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_KEY_PAIR);
        
        # fetches the result of the statement and stores it in $result
        $result = $stmt->fetchAll();
        
        # for every $date and $type_of_day in the result 
        foreach ($result as $date => $type_of_day){
            
            # formats the date into the display format using the function below, changes the date into the format Weekday, Month Day[th] so that it can be used to get the right day display on the main page
            $formatted_date = convertDateFormat($date, $date_format, $display_format);
            
            # appends the $formatted_date and $type_of_day to the $day_and_type variable
            $day_and_type[$formatted_date] = $type_of_day;
        }
        
    }
    
    # closed the PDO session
    $pdo = null;
    
    # returns the associative array $day_and_type
    return $day_and_type;
}


# this function easily converts one date string format to another
function convertDateFormat($date, $old_date_format, $new_date_format){
    # takes the given date and converts it into a DateTime object using the old format
    $new_date = DateTime::createFromFormat($old_date_format, $date);
    
    # takes the DateTime object and formats it into the new date format
    $new_date_formatted = $new_date->format($new_date_format);

    #returns the new formatted date
    return $new_date_formatted;
}

# function that takes in schedule type (middle or high) and day type, and then returns a schedule in html table format based on the schedule type, day type, and if the district is in remote or not
function determineSchedule($schedule_type, $day_type){
    
    # globals all of the hardcoded schedules
    global $remote_ab_middle, $remote_ab_high, $remote_cd_middle, $remote_cd_high, $hybrid_a_middle, $hybrid_a_high, $hybrid_b_middle, $hybrid_b_high, $hybrid_c_middle, $hybrid_c_high, $hybrid_d_middle, $hybrid_d_high, $cte_junior_ab, $cte_junior_c, $cte_junior_d, $cte_senior_a, $cte_senior_b, $cte_senior_cd, $full_ab_middle, $full_cd_middle, $blank;
    
    # if schedule type is equal to cte_junior or cte_senior (here so that the rest of the if statements are skipped if a cte schedule is requested as they won't be remote or anything)
    if ($schedule_type === 'cte_junior' or $schedule_type === 'cte_senior'){
        
        # if the schedule type is equal to cte_junior
        if ($schedule_type === 'cte_junior'){
            
            # switch statement that returns the right cte junior schedule depending on what day it is
            switch ($day_type){
                
                case 'A':
                case 'B':
                    return $cte_junior_ab;
                    break;
                case 'C':
                    return $cte_junior_c;
                    break;
                case 'D':
                    return $cte_junior_d;
                    break;
                default:
                    return $blank;
                
            }
        
        # if the schedule type is cte_senior
        } else {
            
            # switch statement that returns the right cte senior schedule depending on what day it is
            switch ($day_type){
                
                case 'A':
                    return $cte_senior_a;
                    break;
                case 'B':
                    return $cte_senior_b;
                    break;
                case 'C':
                case 'D':
                    return $cte_senior_cd;
                    break;
                default:
                    return $blank;
                
            }
            
        }
        
    }
    # if the constant BOOLEAN_REMOTE is true (which is set to true if school is remote), give only remote schedules, else give hybrid schedules
    else if (BOOLEAN_REMOTE){
        
        # if the schedule type is middle
        if($schedule_type === 'middle'){
            
            # if the current day is an A or B day, return $remote_ab_middle
            if($day_type === 'A' or $day_type === 'B'){
                return $remote_ab_middle;
                
            # if the current day is an C or D day, return $remote_cd_middle
            } else if($day_type === 'C' or $day_type === 'D'){
                return $remote_cd_middle;
                
            # otherwise, return the blank schedule
            } else{
                return $blank;
                
            }
            
        # if the schedule type is high
        } else if($schedule_type === 'high'){
            
            # if the current day is an A or B day, return $remote_ab_high
            if($day_type === 'A' or $day_type === 'B'){
                return $remote_ab_high;
                
            # if the current day is an C or D day, return #remote_cd_high
            } else if($day_type === 'C' or $day_type === 'D'){
                return $remote_cd_high;
                
            # otherwise, return the $day_off_schedule
            } else{
                return $blank;
                
            }
        }
        
    } else{
        
        # if the schedule type is middle
        if($schedule_type === 'middle'){
            
            # switch statement that returns corresponding schedule based on what type of day it is
            switch($day_type){
                    
                case 'A':
                case 'B':
                    return $full_ab_middle;
                    break;
                case 'C':
                case 'D':
                    return $full_cd_middle;
                    break;
                default:
                    return $blank;
                    
            }
            
        # if the schedule type is high
        } else if($schedule_type === 'high'){
           
            # switch statement that returns corresponding schedule based on what type of day it is
            switch($day_type){
                    
                case 'A':
                    return $hybrid_a_high;
                    break;
                case 'B':
                    return $hybrid_b_high;
                    break;
                case 'C':
                    return $hybrid_c_high;
                    break;
                case 'D':
                    return $hybrid_d_high;
                    break;
                default:
                    return $blank;
                    
            }
           
        }
        
    }
}

# array of favicons
$favicons = [
    "A" => "<link rel='icon' type='image/png' href='assets/favicon/favicon_a.png'>",
    "B" => "<link rel='icon' type='image/png' href='assets/favicon/favicon_b.png'>",
    "C" => "<link rel='icon' type='image/png' href='assets/favicon/favicon_c.png'>",
    "D" => "<link rel='icon' type='image/png' href='assets/favicon/favicon_d.png'>",
    "blank" => "<link rel='icon' type='image/png' href='assets/favicon/favicon_blank.png'>"
];

# function that takes in the type of day and returns a favicon based on the the type of day
function getFavicon($day_type){
    
    # globals the $favicons array
    global $favicons;
    
    # types of days that are going to be shown in the favicon, used so that I don't have to type in a lot of else if statements
    $types_of_days = ["A", "B", "C", "D"];
    
    # if $day_type is in the array $types_of_days
    if(in_array($day_type, $types_of_days)){
        # return the favicon that coresponds to the type of day
        return $favicons[$day_type];
    } else {
        # otherwise, return the blank favicon
        return $favicons["blank"];
    }
    
}

# code to be initialized upon being included

# gets the needed dates from the function getNeededDates and stores the results in $needed_dates
$needed_dates = getNeededDates($extra_dates);

# creates an empty array for formatted needed dates to be displayed below
$formatted_needed_dates = [];

# gets the type of days from the function determineDays and stores the results in #date_types
$date_types = determineDays($database_location, $needed_dates);

# for every $needed_date
foreach ($needed_dates as $date){
    
    # convert them into the proper date format for displaying
    $formatted_date = convertDateFormat($date, DATE_FORMAT, DISPLAY_FORMAT);
    
    # push the result tot he $formatted_needed_dates array
    array_push($formatted_needed_dates, $formatted_date);
}

# gets the favicon from the function getFavicon and puts the result in the variable $favicon
$favicon = getFavicon($date_types[$formatted_needed_dates[0]]);