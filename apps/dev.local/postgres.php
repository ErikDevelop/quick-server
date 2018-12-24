<?php
// Connecting, selecting database
$dbconn = pg_connect("host=localhost dbname=db user=www password=foo")
    or die('Could not connect: ' . pg_last_error());

// Performing SQL query
$query = 'SELECT title FROM localdev.hello';
$result = pg_query($query) or die('Query failed: ' . pg_last_error());

// Printing results in HTML
while ($line = pg_fetch_array($result, null, PGSQL_ASSOC)) {
    echo "\th1\n";
    foreach ($line as $col_value) {
        echo "$col_value";
    }
    echo "\t</h1>\n";
}

// Free resultset
pg_free_result($result);

// Closing connection
pg_close($dbconn);
?>