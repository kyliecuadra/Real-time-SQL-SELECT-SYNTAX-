<?php
require("db_connection.php");
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$query = $_POST['query'];

//Do your MySQL search here, something like:
$result = mysqli_query($con, $query) or die (mysqli_error($con));
$i=1;
$headerWritten = false;

echo "<table style='text-align: center;'>";

while ($query_result = mysqli_fetch_assoc($result)) {
    // Write header
    if(!$headerWritten) {
        echo "<tr>";
        foreach ($query_result as $columns => $rows) {
            echo "<th>".$columns."</th>";
        }
        echo "</tr>";

        $headerWritten = true;
    }

    // Write rows
    echo "<tr>";
    foreach ($query_result as $colums => $rows) {
        echo "<td>$rows</td>";
    }
    echo "</tr>";

}

echo "</table>";
?>