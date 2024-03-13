<?php
require './app/functions.php';

$dataTodos = query("SELECT * FROM todos");

if (isset($_POST["submit"])) {
    if (add_todo($_POST) > 0) {
        echo "<script>alert('Data successfully added!')</script>";
        header("Location: index.php");
    } else {
        echo "<script>alert('Data cant be added!')</script>";
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>My Todo List!</title>
</head>

<body>
    <form action="" method="post" class="todo-form">
        <input type="text" class="add-todo" name="title" placeholder="Add your todo!">
        <button type="submit" name="submit"><i class="bi bi-plus-lg"></i></button>
    </form>
    <div class="todo-container">
        <?php foreach ($dataTodos as $dataTodo) : ?>
            <div class="todo">
                <input type="text" class="todo__value" placeholder="(empty)" value="<?= $dataTodo["title"] ?>">
                <div class="action">
                <a class="check-button" href=""><i class="bi bi-check"></i></a>    
                <a class="trash-button" name="delete-button" href="app/delete.php?id=<?= $dataTodo['id'];?>" onclick="confirm('Do you really want to delete this todo?')"><i class="bi bi-trash"></i></a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</body>

</html>