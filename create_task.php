<?php
require_once 'shared/database.php';
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
    $id = "";
    $task = "";
    ?>

<body>
    <div>
        <h2>Add new task</h2>
        <form action="add_task.php" method="post">
            <input type="text" name="task" value="<?php echo "$task"; ?>" placeholder="Add new task" required>
            <button type="addtask" name="addtask">Add Task</button>
        </form>

    </div>
    
</body>
</html>