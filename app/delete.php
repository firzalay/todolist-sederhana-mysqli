<?php

require 'functions.php';

$id = $_GET['id'];

if (delete_todo($id) > 0) {
    echo 
    "<script>
        alert('Data already deleted!')
        document.location.href = '../index.php'
    </script>";
} else {
    echo "<script>alert('Data cant be deleted!')</script>";
}
