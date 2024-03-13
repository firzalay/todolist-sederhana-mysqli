<?php
require 'connection.php';

function query($query)
{
    global $connection;

    $rows = [];
    $result = mysqli_query($connection, $query);
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

function add_todo($data)
{
    global $connection;

    $title = htmlspecialchars($data["title"]);

    $query = "INSERT INTO todos (title) VALUES ('$title')";

    mysqli_query($connection, $query);

    return mysqli_affected_rows($connection);
}

function delete_todo($id) {
    global $connection;

    $query = "DELETE FROM todos WHERE id = '$id'";

    mysqli_query($connection, $query);

    return mysqli_affected_rows($connection);
}
