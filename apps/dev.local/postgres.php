<?php
// Connecting, selecting database
$dbconn = pg_connect("host=database port=5432 dbname=db user=root password=changeme")
    or die('Could not connect: ' . pg_last_error());

// Performing SQL query
$query = 'SELECT title FROM localdev.hello';
$result = pg_query($query) or die('Query failed: ' . pg_last_error());

// Printing results in HTML
while ($line = pg_fetch_array($result, null, PGSQL_ASSOC)) {
    echo "<h1>";
    foreach ($line as $col_value) {
        echo "$col_value";
    }
    echo "</h1>";
}

// Free resultset
pg_free_result($result);

// Closing connection
pg_close($dbconn);
?>