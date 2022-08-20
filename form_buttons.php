<?php


include_once 'db.php';

if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    exit();
}

// get everything from gpios table
$sql = "SELECT * FROM gpios";
$result = $mysqli->query($sql);
$mysqli->close();


// create array from 1 to 8
$gpios = array();
for ($i = 1; $i <= 8; $i++) {
    $gpios[$i] = 0;
}



// print out table
while ($row = $result->fetch_assoc()) {

    $status = 0;

    // convert status to number
    if ($row['status'] == 1) {
        $status = 1;
    }

    $gpios[$row['gpio_nr']] = $status;

}

foreach ($gpios as $gpio => $status) {
    echo '<button type="button" class="btn btn-secondary';

    if ($status == 1) {
        echo ' btn-success';
    }
    
    echo ' btn-lg">' . $gpio . '</button>' . "\n";
}



?>