<?php

// Establish connection to MySQL database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "one_centro";
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch items based on the selected category
$out = '';
if (isset($_POST["projectName"])) {
    $projectName = $_POST["projectName"];
    $fetchPOByName = "SELECT * FROM bd_po WHERE project_name = '$projectName'";
    $fetchPOByName = mysqli_query($conn, $fetchPOByName);
    while ($PO = mysqli_fetch_assoc($fetchPOByName)) {
        $out .= '<option value="' . $PO["id"] . '">' . $PO["project_name"] . '</option>';
    }

    echo '<option value="">Please Select...</option>' . $out;
}

$conn->close();