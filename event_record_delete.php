<?php
    include "css/db_conn_er.php";
    $id = $_GET['id'];
    $sql = "DELETE FROM `record` WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header("Location: event_record_index.php?msg=Record deleted successfully");
    }
    else {
        echo "Failed: " . mysqli_error($conn);
    }
?>