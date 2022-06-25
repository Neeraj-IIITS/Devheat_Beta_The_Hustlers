<?php
    include "css/db_conn_cl.php";
    $id = $_GET['id'];
    $sql = "DELETE FROM `list` WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header("Location: contest_list_index.php?msg=Record deleted successfully");
    }
    else {
        echo "Failed: " . mysqli_error($conn);
    }
?>