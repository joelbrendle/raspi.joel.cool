<?php

    if ($_POST && $_POST['action'] == 'form_control') {

        var_dump($_POST);

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
        var_dump($status);

        // update database with new status
        if ($mysqli->connect_errno) {
            echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;

            exit();
        }
        $sql = "UPDATE gpios SET status = '$status' WHERE gpio_nr = '$gpio'";
        $result = $mysqli->query($sql);
        $mysqli->close();

    }

    // return to index.php
    header('Location: index.php');
    exit();

?>