<?php
require_once 'shared/database.php'


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Task</title>
    <style>

    form {
    padding: 15px;
    width: 50%;
    margin: 30px auto;
    border-radius: 5px;
    box-shadow: 0px 0px 9px #0000;
    background-color: #bf42f5;
    border: 1px whitesmoke;
    }

    h2 {
    text-align: center;
    font-family: helvetica;
    text-transform: uppercase;
    }

    input {
        width: 65%;
        height: 45px;
        border: none;
        border-radius: 10px;
        font-size: 16px;
    }

    button {
        width: 15%;
        height: 45px; 
        border-radius: 10px;
        border-color: #666;
        color: whitesmoke;
        background-color: #42a1f5;
        font-size: 16px;
    }

    </style>

</head>

    <?php
    $task = "";

    $id = $_GET['id'];
    $sql = "SELECT * FROM task WHERE id = $id";
    $result = mysqli_query($conn, $sql);

    $task = mysqli_fetch_assoc($result);
    $task = $task['task'];

    //post query
    if (isset($_POST['update'])) {
        $task = $_POST['task'] ?? '';

        $sql = "UPDATE task SET id=$id, task = '$task' WHERE id=$id";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            header("location: index.php");
        }else {
            die('Invalid query!!');
        }
    }

    //return $result;
    mysqli_free_result($result);
    
 ?>

<body>
    <div>
        <h2>Update task</h2>
        <form method="post">
            <input type="text" name="task" value="<?php echo "$task"; ?>" placeholder="Update task" required>
            <button type="update" name="update">Update</button>
        </form>

    </div>
    
</body>
</html>