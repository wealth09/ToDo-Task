<?php
require_once 'shared/database.php';
?>

<?php

if (isset($_SERVER['REQUEST_METHOD']) == 'POST' ) {
    $task = $_POST["task"] ?? '';
}

//inserting data into the database system
$sql = "INSERT INTO task(task)" . 
        "VALUE('$task')";
$result = mysqli_query($conn, $sql);

if ($result) {
    header("location: index.php");
    //echo "Task successfully saved!";
} else {
    die('Invalid query!');
}

return $result;
mysqli_free_result($result);

?>