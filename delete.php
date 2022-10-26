<?php
require_once 'shared/database.php';

if (isset($_GET['id'])) {
$id = $_GET['id'];

//delete query
$sql = "DELETE FROM task WHERE id=$id";
$result = mysqli_query($conn, $sql);
if ($result) {
    header("location: index.php");
}
 
return $result;
mysqli_free_result($result);

}
?>