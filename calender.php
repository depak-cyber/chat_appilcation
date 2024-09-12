<!DOCTYPE html>
<html>
<head>
    <title>Simple Calendar</title>
</head>
<body>
<?php
// Get the current year and month
$year = date("Y");
$month = date("n");

// Define an array of month names for display
$monthNames = array(
    1 => "January",
    2 => "February",
    3 => "March",
    4 => "April",
    5 => "May",
    6 => "June",
    7 => "July",
    8 => "August",
    9 => "September",
    10 => "October",
    11 => "November",
    12 => "December"
);

// Calculate the number of days in the current month
$daysInMonth = cal_days_in_month(CAL_GREGORIAN, $month, $year);
;
// Get the first day of the month
$firstDay = date("w", mktime(0, 0, 0, $month, 1, $year));

/* date("w", ...) is used to extract the day of the week (0 for Sunday, 1 for Monday, and so on).
mktime(0, 0, 0, $month, 1, $year) is a function that constructs a timestamp for a specific date (in this case, the first day of the current month).
 The arguments are hours, minutes, seconds, month, day, and year.  */

// Generate the HTML for the calendar
echo "<h2>" . $monthNames[$month] . " " . $year . "</h2>";
echo "<table>";
echo "
<tr>
<th>Sun</th>
<th>Mon</th>
<th>Tue</th>
<th>Wed</th>
<th>Thu</th>
<th>Fri</th>
<th>Sat</th>
</tr>";
echo "<tr>";

// Fill in blank cells for the days before the first day of the month
for ($i = 0; $i < $firstDay; $i++) {
    echo "<td></td>";
}

// Fill in the days of the month
for ($day = 1; $day <= $daysInMonth; $day++) {
    //echo  $day;
    echo "<td>$day</td>";

    // Start a new row for the next week
    if (($day + $firstDay) % 7 == 0) {
       
        echo "</tr><tr>";
    }
}

// Fill in blank cells for the days after the last day of the month
$remainingDays = 7 - ($day + $firstDay) % 7;
//echo $remainingDays ;
for ($i = 0; $i < $remainingDays; $i++) {
    echo "<td></td>";
  }

echo "</tr>";
echo "</table>";

?>

</body>
</html>