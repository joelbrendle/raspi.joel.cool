<?php

    if ($_POST && $_POST['action'] == 'form_control') {

        // get connection details from other file
        require 'db.php';

        if ($mysqli->connect_errno) {
            echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
            exit();
        }

        // get gpio number from form
        $gpio = $_POST['gpio'];

        // get gpio status from database
        $sql = "SELECT status FROM gpios WHERE gpio_nr = '$gpio'";
        $result = $mysqli->query($sql);
        $row = $result->fetch_assoc();
        $status = $row['status'];

        // if status is 1, set to 0, else set to 1
        if ($status == 1) {
            $status = 0;
        } else {
            $status = 1;
        }

        // update database with new status
        if ($mysqli->connect_errno) {
            echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;

            exit();
        }

        $sql = "UPDATE gpios SET status = '$status' WHERE gpio_nr = '$gpio'";
        $result = $mysqli->query($sql);
        $mysqli->close();

    }


    if ($_POST && $_POST['action'] == 'form_motor') {


        // get connection details from other file
        require 'db.php';

        if ($mysqli->connect_errno) {
            echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
            exit();
        }

        $status = 0;
        $speed = 0;
        $direction = 0;

        if ($_POST['status']) {
            if ($_POST['status'] == 'on') {
                $status = 1;
            } else {
                $status = 0;
            }
        }
        if ($_POST['speed']) {
            $speed = $_POST['speed'];
        }
        if ($_POST['direction']) {
            if ($_POST['direction'] == 'clockwise') {
                $direction = 0;
            } else {
                $direction = 1;
            }
        }


        $sql = "UPDATE motor_control SET status = $status, speed = $speed, direction = $direction WHERE id = 1";
        $result = $mysqli->query($sql);
        $mysqli->close();

    }

    // return to index.php (not because of ajax call)
    exit();
?>