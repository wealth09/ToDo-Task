<?php
require_once 'shared/database.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <title>Task</title>
</head>
<body>

<header>
    <i class="bi bi-list" style="font-size: 40px; color: white; position: relative;"></i> 
    <h2>Teqpace ToDo</h2>
</header>

<div class="container">
    <table class="table">

 <?php
    $sql = "SELECT * FROM task";
    $result = mysqli_query($conn, $sql);
    if(!$result) {
        die('query error!');
    }
    ?>

<?php while ($task = mysqli_fetch_assoc($result)) {?>
        <tr>
            <td><?php echo $task['id']; ?></td>
            <td><?php echo $task['task']; ?></td>
            <td>
                <a class="" href="<?php echo 'delete.php?id=' . $task['id']; ?>"><i class="bi bi-trash3" style=""></i></i></a>
                <a class="" href="<?php echo 'edit_task.php?id=' . $task['id']; ?>"><i class="bi bi-pencil-square"></i></a>
            </td>
        </tr>
        <?php }?>

    </table>

    <button><a class="btn" href="<?php echo "create_task.php"?>">+ New Task</a></button>

</div>








<footer>

</footer>    
</body>
</html>