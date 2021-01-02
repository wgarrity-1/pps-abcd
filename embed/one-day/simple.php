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
    
    <style>
        
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap');

        :root {
            --main-color: #5f0c1f;
        }

        html, body{
            margin: 0px;
            height: 100%;
        }

        body {
            font-family: 'Roboto', sans-serif;
            display: flex;
            align-items: center;
        }

        .day-container {
            margin-right: 20px;
            box-sizing: border-box;
            display: flex;
            flex-direction: column;
            background-color: var(--main-color);
            color: white;
            padding: 20px;
            border-radius: 20px;
            align-items: center;
            justify-content: center;
            font-size: 1.3rem;
            width: 100%;
            height: 100%;
            text-align: center;
        }

        .letter {
            font-size: 2.5rem;
        }

        
    </style>
    
</head>

<body>
    

    <div class="day-container" style="margin-right: 0px;">
        <div class="day">
            <?=$formatted_needed_dates[0];?>
        </div>
        <div class="letter">
            <?=$date_types[$formatted_needed_dates[0]]?>
        </div>
    </div>
    
</body>

</html>