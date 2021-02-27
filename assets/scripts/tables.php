<?php
# William Garrity
# 2/15/2021
# This PHP script just stores the 12 different schedules that the site can display


# remote schedules
$remote_ab_middle = '<table class="schedule-table">
                        
                        <tr>
                            <th>Time</th>
                            <th>A Day</th>
                        </tr>
                        
                        <tr>
                            <td>7:35 - 8:20</td>
                            <td class="periodset-1g1">Period 1 - Remote</td>
                        </tr>
                        
                        <tr>
                            <td>8:25 - 9:10</td>
                            <td class="periodset-1g1">Period 2 - Remote</td>
                        </tr>
                        
                        <tr>
                            <td>9:15 - 10:01</td>
                            <td class="periodset-1g1">Period 3 - Remote</td>
                        </tr>
                        
                        <tr>
                            <td>10:01 - 12:07</td>
                            <td class="organizeset">Lunch and Organize Block</td>
                        </tr>
                        
                        <tr>
                            <td>12:07 - 12:52</td>
                            <td class="periodset-2">Period 4 - Remote</td>
                        </tr>
                        
                        <tr>
                            <td>12:55 - 1:40</td>
                            <td class="periodset-2">Period 5 - Remote</td>
                        </tr>
                        
                        <tr>
                            <td>1:43 - 2:28</td>
                            <td class="periodset-2">Period 6 - Remote</td>
                        </tr>
                        
                    </table>';
$remote_ab_high = '<table class="schedule-table">
                        
                        <tr>
                            <th>Time</th>
                            <th>A Day</th>
                        </tr>
                        
                        <tr>
                            <td>7:25 - 8:10</td>
                            <td class="periodset-1g1">Period 1 - Remote</td>
                        </tr>
                        
                        <tr>
                            <td>8:15 - 9:00</td>
                            <td class="periodset-1g1">Period 2 - Remote</td>
                        </tr>
                        
                        <tr>
                            <td>9:05 - 9:52</td>
                            <td class="periodset-1g1">Period 3 - Remote</td>
                        </tr>
                        
                        <tr>
                            <td>9:52 - 11:55</td>
                            <td class="organizeset">Lunch and Organize Block</td>
                        </tr>
                        
                        <tr>
                            <td>11:55 - 12:40</td>
                            <td class="periodset-2">Period 4 - Remote</td>
                        </tr>
                        
                        <tr>
                            <td>12:45 - 1:30</td>
                            <td class="periodset-2">Period 5 - Remote</td>
                        </tr>
                        
                        <tr>
                            <td>1:35 - 2:20</td>
                            <td class="periodset-2">Period 6 - Remote</td>
                        </tr>
                        
                    </table>';

$remote_cd_middle = '<table class="schedule-table">
                        
                        <tr>
                            <th>Time</th>
                            <th>A Day</th>
                        </tr>
                        
                        <tr>
                            <td>7:35 - 8:20</td>
                            <td class="periodset-2">Period 4 - Remote</td>
                        </tr>
                        
                        <tr>
                            <td>8:25 - 9:10</td>
                            <td class="periodset-2">Period 5 - Remote</td>
                        </tr>
                        
                        <tr>
                            <td>9:15 - 10:01</td>
                            <td class="periodset-2">Period 6 - Remote</td>
                        </tr>
                        
                        <tr>
                            <td>10:01 - 12:07</td>
                            <td class="organizeset">Lunch and Organize Block</td>
                        </tr>
                        
                        <tr>
                            <td>12:07 - 12:52</td>
                            <td class="periodset-1g1">Period 1 - Remote</td>
                        </tr>
                        
                        <tr>
                            <td>12:55 - 1:40</td>
                            <td class="periodset-1g1">Period 2 - Remote</td>
                        </tr>
                        
                        <tr>
                            <td>1:43 - 2:28</td>
                            <td class="periodset-1g1">Period 3 - Remote</td>
                        </tr>
                        
                    </table>';
$remote_cd_high = '<table class="schedule-table">
                        
                        <tr>
                            <th>Time</th>
                            <th>A Day</th>
                        </tr>
                        
                        <tr>
                            <td>7:25 - 8:10</td>
                            <td class="periodset-2">Period 4 - Remote</td>
                        </tr>
                        
                        <tr>
                            <td>8:15 - 9:00</td>
                            <td class="periodset-2">Period 5 - Remote</td>
                        </tr>
                        
                        <tr>
                            <td>9:05 - 9:52</td>
                            <td class="periodset-2">Period 6 - Remote</td>
                        </tr>
                        
                        <tr>
                            <td>9:52 - 11:55</td>
                            <td class="organizeset">Lunch and Organize Block</td>
                        </tr>
                        
                        <tr>
                            <td>11:55 - 12:40</td>
                            <td class="periodset-1g1">Period 1 - Remote</td>
                        </tr>
                        
                        <tr>
                            <td>12:45 - 1:30</td>
                            <td class="periodset-1g1">Period 2 - Remote</td>
                        </tr>
                        
                        <tr>
                            <td>1:35 - 2:20</td>
                            <td class="periodset-1g1">Period 3 - Remote</td>
                        </tr>
                        
                    </table>';


# hybrid schedules
$hybrid_a_middle = '<table class="schedule-table">
                        
                        <tr>
                            <th>Time</th>
                            <th>Group 1</th>
                            <th>Group 2</th>
                        </tr>
                        
                        <tr>
                            <td>7:35 - 8:23</td>
                            <td class="periodset-1g1">Period 1 - In Person</td>
                            <td class="periodset-1g2" rowspan="3">Asynchronous Block</td>
                        </tr>
                        
                        <tr>
                            <td>8:25 - 9:13</td>
                            <td class="periodset-1g1">Period 2 - In Person</td>
                        </tr>
                        
                        <tr>
                            <td>9:15 - 10:01</td>
                            <td class="periodset-1g1">Period 3 - In Person</td>
                        </tr>
                        
                        <tr>
                            <td>10:01 - 12:05</td>
                            <td class="organizeset" colspan="2">Lunch and Organize Block</td>
                        </tr>
                        
                        <tr>
                            <td>12:05 - 12:52</td>
                            <td class="periodset-2" colspan="2">Period 4 - Remote</td>
                        </tr>
                        
                        <tr>
                            <td>12:54 - 1:40</td>
                            <td class="periodset-2" colspan="2">Period 5 - Remote</td>
                        </tr>
                        
                        <tr>
                            <td>1:42 - 2:28</td>
                            <td class="periodset-2" colspan="2">Period 6 - Remote</td>
                        </tr>
                        
                    </table>';
$hybrid_a_high = '<table class="schedule-table">
                        
                        <tr>
                            <th>Time</th>
                            <th>Green/Purple</th>
                            <th>Gold/Generals</th>
                        </tr>
                        
                        <tr>
                            <td>7:25 - 8:10</td>
                            <td class="periodset-1g1">Period 1 - In Person</td>
                            <td class="periodset-1g2" rowspan="2">Asynchronous Block</td>
                        </tr>
                        
                        <tr>
                            <td>8:15 - 9:00</td>
                            <td class="periodset-1g1">Period 2 - In Person</td>
                        </tr>
                        
                        <tr>
                            <td>9:05 - 9:52</td>
                            <td class="periodset-1g1">Period 3 - In Person</td>
                            <td class="periodset-1g2">PE/Health</td>
                        </tr>
                        
                        <tr>
                            <td>9:52 - 11:55</td>
                            <td class="organizeset" colspan="2">Lunch and Organize Block</td>
                        </tr>
                        
                        <tr>
                            <td>11:55 - 12:40</td>
                            <td class="periodset-2" colspan="2">Period 4 - Remote</td>
                        </tr>
                        
                        <tr>
                            <td>12:45 - 1:30</td>
                            <td class="periodset-2" colspan="2">Period 5 - Remote</td>
                        </tr>
                        
                        <tr>
                            <td>1:35 - 2:20</td>
                            <td class="periodset-2" colspan="2">Period 6 - Remote</td>
                        </tr>
                        
                    </table>';

$hybrid_b_middle = '<table class="schedule-table">
                        
                        <tr>
                            <th>Time</th>
                            <th>Group 1</th>
                            <th>Group 2</th>
                        </tr>
                        
                        <tr>
                            <td>7:35 - 8:23</td>
                            <td class="periodset-1g1" rowspan="3">Asynchronous Block</td>
                            <td class="periodset-1g2">Period 1 - In Person</td>
                        </tr>
                        
                        <tr>
                            <td>8:25 - 9:13</td>
                            <td class="periodset-1g2">Period 2 - In Person</td>
                        </tr>
                        
                        <tr>
                            <td>9:15 - 10:01</td>
                            <td class="periodset-1g2">Period 3 - In Person</td>
                        </tr>
                        
                        <tr>
                            <td>10:01 - 12:05</td>
                            <td class="organizeset" colspan="2">Lunch and Organize Block</td>
                        </tr>
                        
                        <tr>
                            <td>12:05 - 12:52</td>
                            <td class="periodset-2" colspan="2">Period 4 - Remote</td>
                        </tr>
                        
                        <tr>
                            <td>12:54 - 1:40</td>
                            <td class="periodset-2" colspan="2">Period 5 - Remote</td>
                        </tr>
                        
                        <tr>
                            <td>1:42 - 2:28</td>
                            <td class="periodset-2" colspan="2">Period 6 - Remote</td>
                        </tr>
                        
                    </table>';
$hybrid_b_high = '<table class="schedule-table">
                        
                        <tr>
                            <th>Time</th>
                            <th>Green/Purple</th>
                            <th>Gold/Generals</th>
                        </tr>
                        
                        <tr>
                            <td>7:25 - 8:10</td>
                            <td class="periodset-1g1" rowspan="2">Asynchronous Block</td>
                            <td class="periodset-1g2">Period 1 - In Person</td>
                        </tr>
                        
                        <tr>
                            <td>8:15 - 9:00</td>
                            <td class="periodset-1g2">Period 2 - In Person</td>
                        </tr>
                        
                        <tr>
                            <td>9:05 - 9:52</td>
                            <td class="periodset-1g1">PE/Health</td>
                            <td class="periodset-1g2">Period 3 - In Person</td>
                        </tr>
                        
                        <tr>
                            <td>9:52 - 11:55</td>
                            <td class="organizeset" colspan="2">Lunch and Organize Block</td>
                        </tr>
                        
                        <tr>
                            <td>11:55 - 12:40</td>
                            <td class="periodset-2" colspan="2">Period 4 - Remote</td>
                        </tr>
                        
                        <tr>
                            <td>12:45 - 1:30</td>
                            <td class="periodset-2" colspan="2">Period 5 - Remote</td>
                        </tr>
                        
                        <tr>
                            <td>1:35 - 2:20</td>
                            <td class="periodset-2" colspan="2">Period 6 - Remote</td>
                        </tr>
                        
                    </table>';

$hybrid_c_middle = '<table class="schedule-table">
                        
                        <tr>
                            <th>Time</th>
                            <th>Group 1</th>
                            <th>Group 2</th>
                        </tr>
                        
                        <tr>
                            <td>7:35 - 8:23</td>
                            <td class="periodset-1g1">Period 4 - In Person</td>
                            <td class="periodset-1g2" rowspan="3">Asynchronous Block</td>
                        </tr>
                        
                        <tr>
                            <td>8:25 - 9:13</td>
                            <td class="periodset-1g1">Period 5 - In Person</td>
                        </tr>
                        
                        <tr>
                            <td>9:15 - 10:01</td>
                            <td class="periodset-1g1">Period 6 - In Person</td>
                        </tr>
                        
                        <tr>
                            <td>10:01 - 12:05</td>
                            <td class="organizeset" colspan="2">Lunch and Organize Block</td>
                        </tr>
                        
                        <tr>
                            <td>12:05 - 12:52</td>
                            <td class="periodset-2" colspan="2">Period 1 - Remote</td>
                        </tr>
                        
                        <tr>
                            <td>12:54 - 1:40</td>
                            <td class="periodset-2" colspan="2">Period 2 - Remote</td>
                        </tr>
                        
                        <tr>
                            <td>1:42 - 2:28</td>
                            <td class="periodset-2" colspan="2">Period 3 - Remote</td>
                        </tr>
                        
                    </table>';
$hybrid_c_high = '<table class="schedule-table">
                        
                        <tr>
                            <th>Time</th>
                            <th>Green/Purple</th>
                            <th>Gold/Generals</th>
                        </tr>
                        
                        <tr>
                            <td>7:25 - 8:10</td>
                            <td class="periodset-1g1">Period 4 - In Person</td>
                            <td class="periodset-1g2" rowspan="2">Asynchronous Block</td>
                        </tr>
                        
                        <tr>
                            <td>8:15 - 9:00</td>
                            <td class="periodset-1g1">Period 5 - In Person</td>
                        </tr>
                        
                        <tr>
                            <td>9:05 - 9:52</td>
                            <td class="periodset-1g1">Period 6 - In Person</td>
                            <td class="periodset-1g2">PE/Health</td>
                        </tr>
                        
                        <tr>
                            <td>9:52 - 11:55</td>
                            <td class="organizeset" colspan="2">Lunch and Organize Block</td>
                        </tr>
                        
                        <tr>
                            <td>11:55 - 12:40</td>
                            <td class="periodset-2" colspan="2">Period 1 - Remote</td>
                        </tr>
                        
                        <tr>
                            <td>12:45 - 1:30</td>
                            <td class="periodset-2" colspan="2">Period 2 - Remote</td>
                        </tr>
                        
                        <tr>
                            <td>1:35 - 2:20</td>
                            <td class="periodset-2" colspan="2">Period 3 - Remote</td>
                        </tr>
                        
                    </table>';

$hybrid_d_middle = '<table class="schedule-table">
                        
                        <tr>
                            <th>Time</th>
                            <th>Group 1</th>
                            <th>Group 2</th>
                        </tr>
                        
                        <tr>
                            <td>7:35 - 8:23</td>
                            <td class="periodset-1g1" rowspan="3">Asynchronous Block</td>
                            <td class="periodset-1g2">Period 4 - In Person</td>
                        </tr>
                        
                        <tr>
                            <td>8:25 - 9:13</td>
                            <td class="periodset-1g2">Period 5 - In Person</td>
                        </tr>
                        
                        <tr>
                            <td>9:15 - 10:01</td>
                            <td class="periodset-1g2">Period 6 - In Person</td>
                        </tr>
                        
                        <tr>
                            <td>10:01 - 12:05</td>
                            <td class="organizeset" colspan="2">Lunch and Organize Block</td>
                        </tr>
                        
                        <tr>
                            <td>12:05 - 12:52</td>
                            <td class="periodset-2" colspan="2">Period 1 - Remote</td>
                        </tr>
                        
                        <tr>
                            <td>12:54 - 1:40</td>
                            <td class="periodset-2" colspan="2">Period 2 - Remote</td>
                        </tr>
                        
                        <tr>
                            <td>1:42 - 2:28</td>
                            <td class="periodset-2" colspan="2">Period 3 - Remote</td>
                        </tr>
                        
                    </table>';
$hybrid_d_high = '<table class="schedule-table">
                        
                        <tr>
                            <th>Time</th>
                            <th>Green/Purple</th>
                            <th>Gold/Generals</th>
                        </tr>
                        
                        <tr>
                            <td>7:25 - 8:10</td>
                            <td class="periodset-1g1" rowspan="2">Asynchronous Block</td>
                            <td class="periodset-1g2">Period 4 - In Person</td>
                        </tr>
                        
                        <tr>
                            <td>8:15 - 9:00</td>
                            <td class="periodset-1g2">Period 5 - In Person</td>
                        </tr>
                        
                        <tr>
                            <td>9:05 - 9:52</td>
                            <td class="periodset-1g1">PE/Health</td>
                            <td class="periodset-1g2">Period 6 - In Person</td>
                        </tr>
                        
                        <tr>
                            <td>9:52 - 11:55</td>
                            <td class="organizeset" colspan="2">Lunch and Organize Block</td>
                        </tr>
                        
                        <tr>
                            <td>11:55 - 12:40</td>
                            <td class="periodset-2" colspan="2">Period 1 - Remote</td>
                        </tr>
                        
                        <tr>
                            <td>12:45 - 1:30</td>
                            <td class="periodset-2" colspan="2">Period 2 - Remote</td>
                        </tr>
                        
                        <tr>
                            <td>1:35 - 2:20</td>
                            <td class="periodset-2" colspan="2">Period 3 - Remote</td>
                        </tr>
                        
                    </table>';


# blank schedule
$blank = "<p class='no-school'>No School!</p>";

# cte schedules
$cte_junior_ab = '<table class="schedule-table">
                        
                        <tr>
                            <th>Time</th>
                            <th>Green</th>
                            <th>Gold</th>
                        </tr>
                        
                        <tr>
                            <td>7:25 - 8:10</td>
                            <td class="periodset-1-cte-shop" colspan="2">Period 1 - In Person Shop</td>
                        </tr>
                        
                        <tr>
                            <td>8:15 - 9:00</td>
                            <td class="periodset-1-cte-shop" colspan="2">Period 2 - In Person Shop</td>
                        </tr>
                        
                        <tr>
                            <td>9:05 - 9:52</td>
                            <td class="periodset-1-cte-shop" colspan="2">Period 3 - In Person Shop</td>
                        </tr>
                        
                        <tr>
                            <td>9:52 - 11:55</td>
                            <td class="organizeset" colspan="2">Lunch and Organize Block</td>
                        </tr>
                        
                        <tr>
                            <td>11:55 - 12:40</td>
                            <td class="periodset-2" colspan="2">Period 4 - Remote Class</td>
                        </tr>
                        
                        <tr>
                            <td>12:45 - 1:30</td>
                            <td class="periodset-2" colspan="2">Period 5 - Remote Class</td>
                        </tr>
                        
                        <tr>
                            <td>1:35 - 2:20</td>
                            <td class="periodset-2" colspan="2">Period 6 - Remote Class</td>
                        </tr>
                        
                    </table>';
$cte_junior_c = '<table class="schedule-table">
                        
                        <tr>
                            <th>Time</th>
                            <th>Green</th>
                            <th>Gold</th>
                        </tr>
                        
                        <tr>
                            <td>7:25 - 8:10</td>
                            <td class="periodset-1-cte-green">Period 4 - In Person Class</td>
                            <td class="periodset-1-cte-gold" rowspan="2">Asynchronous Block</td>
                        </tr>
                        
                        <tr>
                            <td>8:15 - 9:00</td>
                            <td class="periodset-1-cte-green">Period 5 - In Person Class</td>
                        </tr>
                        
                        <tr>
                            <td>9:05 - 9:52</td>
                            <td class="periodset-1-cte-green">Period 6 - In Person Class</td>
                            <td class="periodset-1-cte-gold">PE/Health</td>
                        </tr>
                        
                        <tr>
                            <td>9:52 - 11:55</td>
                            <td class="organizeset" colspan="2">Lunch and Organize Block</td>
                        </tr>
                        
                        <tr>
                            <td>11:55 - 12:40</td>
                            <td class="periodset-2" colspan="2">Period 1 - Remote Shop</td>
                        </tr>
                        
                        <tr>
                            <td>12:45 - 1:30</td>
                            <td class="periodset-2" colspan="2">Period 2 - Remote Shop</td>
                        </tr>
                        
                        <tr>
                            <td>1:35 - 2:20</td>
                            <td class="periodset-2" colspan="2">Period 3 - Remote Shop</td>
                        </tr>
                        
                    </table>';
$cte_junior_d = '<table class="schedule-table">
                        
                        <tr>
                            <th>Time</th>
                            <th>Green</th>
                            <th>Gold</th>
                        </tr>
                        
                        <tr>
                            <td>7:25 - 8:10</td>
                            <td class="periodset-1-cte-green" rowspan="2">Asynchronous Block</td>
                            <td class="periodset-1-cte-gold">Period 4 - In Person Class</td>
                        </tr>
                        
                        <tr>
                            <td>8:15 - 9:00</td>
                            <td class="periodset-1-cte-gold">Period 5 - In Person Class</td>
                        </tr>
                        
                        <tr>
                            <td>9:05 - 9:52</td>
                            <td class="periodset-1-cte-green">PE/Health</td>
                            <td class="periodset-1-cte-gold">Period 6 - In Person Class</td>
                        </tr>
                        
                        <tr>
                            <td>9:52 - 11:55</td>
                            <td class="organizeset" colspan="2">Lunch and Organize Block</td>
                        </tr>
                        
                        <tr>
                            <td>11:55 - 12:40</td>
                            <td class="periodset-2" colspan="2">Period 1 - Remote Shop</td>
                        </tr>
                        
                        <tr>
                            <td>12:45 - 1:30</td>
                            <td class="periodset-2" colspan="2">Period 2 - Remote Shop</td>
                        </tr>
                        
                        <tr>
                            <td>1:35 - 2:20</td>
                            <td class="periodset-2" colspan="2">Period 3 - Remote Shop</td>
                        </tr>
                        
                    </table>';
$cte_senior_a = '<table class="schedule-table">
                        
                        <tr>
                            <th>Time</th>
                            <th>Green</th>
                            <th>Gold</th>
                        </tr>
                        
                        <tr>
                            <td>7:25 - 8:10</td>
                            <td class="periodset-1-cte-green">Period 1 - In Person Class</td>
                            <td class="periodset-1-cte-gold" rowspan="2">Asynchronous Block</td>
                        </tr>
                        
                        <tr>
                            <td>8:15 - 9:00</td>
                            <td class="periodset-1-cte-green">Period 2 - In Person Class</td>
                        </tr>
                        
                        <tr>
                            <td>9:05 - 9:52</td>
                            <td class="periodset-1-cte-green">Period 3 - In Person Class</td>
                            <td class="periodset-1-cte-gold">PE/Health</td>
                        </tr>
                        
                        <tr>
                            <td>9:52 - 11:55</td>
                            <td class="organizeset" colspan="2">Lunch and Organize Block</td>
                        </tr>
                        
                        <tr>
                            <td>11:55 - 12:40</td>
                            <td class="periodset-2" colspan="2">Period 4 - Remote Shop</td>
                        </tr>
                        
                        <tr>
                            <td>12:45 - 1:30</td>
                            <td class="periodset-2" colspan="2">Period 5 - Remote Shop</td>
                        </tr>
                        
                        <tr>
                            <td>1:35 - 2:20</td>
                            <td class="periodset-2" colspan="2">Period 6 - Remote Shop</td>
                        </tr>
                        
                    </table>';
$cte_senior_b = '<table class="schedule-table">
                        
                        <tr>
                            <th>Time</th>
                            <th>Green</th>
                            <th>Gold</th>
                        </tr>
                        
                        <tr>
                            <td>7:25 - 8:10</td>
                            <td class="periodset-1-cte-green" rowspan="2">Asynchronous Block</td>
                            <td class="periodset-1-cte-gold">Period 1 - In Person Class</td>
                        </tr>
                        
                        <tr>
                            <td>8:15 - 9:00</td>
                            <td class="periodset-1-cte-gold">Period 2 - In Person Class</td>
                        </tr>
                        
                        <tr>
                            <td>9:05 - 9:52</td>
                            <td class="periodset-1-cte-green">PE/Health</td>
                            <td class="periodset-1-cte-gold">Period 3 - In Person Class</td>
                        </tr>
                        
                        <tr>
                            <td>9:52 - 11:55</td>
                            <td class="organizeset" colspan="2">Lunch and Organize Block</td>
                        </tr>
                        
                        <tr>
                            <td>11:55 - 12:40</td>
                            <td class="periodset-2" colspan="2">Period 4 - Remote Shop</td>
                        </tr>
                        
                        <tr>
                            <td>12:45 - 1:30</td>
                            <td class="periodset-2" colspan="2">Period 5 - Remote Shop</td>
                        </tr>
                        
                        <tr>
                            <td>1:35 - 2:20</td>
                            <td class="periodset-2" colspan="2">Period 6 - Remote Shop</td>
                        </tr>
                        
                    </table>';
$cte_senior_cd = '<table class="schedule-table">
                        
                        <tr>
                            <th>Time</th>
                            <th>Green</th>
                            <th>Gold</th>
                        </tr>
                        
                        <tr>
                            <td>7:25 - 8:10</td>
                            <td class="periodset-1-cte-shop" colspan="2">Period 4 - In Person Shop</td>
                        </tr>
                        
                        <tr>
                            <td>8:15 - 9:00</td>
                            <td class="periodset-1-cte-shop" colspan="2">Period 5 - In Person Shop</td>
                        </tr>
                        
                        <tr>
                            <td>9:05 - 9:52</td>
                            <td class="periodset-1-cte-shop" colspan="2">Period 6 - In Person Shop</td>
                        </tr>
                        
                        <tr>
                            <td>9:52 - 11:55</td>
                            <td class="organizeset" colspan="2">Lunch and Organize Block</td>
                        </tr>
                        
                        <tr>
                            <td>11:55 - 12:40</td>
                            <td class="periodset-2" colspan="2">Period 1 - Remote Class</td>
                        </tr>
                        
                        <tr>
                            <td>12:45 - 1:30</td>
                            <td class="periodset-2" colspan="2">Period 2 - Remote Class</td>
                        </tr>
                        
                        <tr>
                            <td>1:35 - 2:20</td>
                            <td class="periodset-2" colspan="2">Period 3 - Remote Class</td>
                        </tr>
                        
                    </table>';