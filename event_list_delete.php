<?php
    include "css/db_conn_el.php";
    $id = $_GET['id'];
    $sql = "DELETE FROM `list` WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header("Location: event_list_index.php?msg=Record deleted successfully");
    }
    else {
        echo "Failed: " . mysqli_error($conn);
    }
?>