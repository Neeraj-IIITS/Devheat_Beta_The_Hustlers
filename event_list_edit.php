<?php
    include "css/db_conn_el.php";
    $id = $_GET['id'];

    if(isset($_POST['submit'])) {
        $name = $_POST ['name'];
        $date = $_POST ['date'];
        $link = $_POST ['link'];

        $sql = "UPDATE `list` SET `name`='$name',`date`='$date',`link`='$link' WHERE id=$id";

        $result = mysqli_query($conn, $sql);

        if($result) {
            header("Location: event_list_index.php?msg=Data updated successfully");
        } else {
            echo "Failed: " . mysqli_error($conn);
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Event List</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
    
    <div class="container">
        <div class="text-center mb-4">
            <h3>Edit Event Information</h3>
            <p class="text-muted">Click update after changing the information</p>
        </div>

        <?php
            $sql = "SELECT * FROM `list` WHERE id = $id LIMIT 1";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);
        ?>

        <div class="container d-flex justify-content-center">
            <form action="" method="post" style="width: 50vw; min-width:300px">
                <div class="row mb-3">
                    <div class="col">
                    <label class="form-label">Name:</label>
                    <input type="text" class="form-control" name="name" value="<?php echo $row['name'] ?>">
                    </div>

                    <div class="col">
                    <label class="form-label">Date:</label>
                    <input type="text" class="form-control" name="date" value="<?php echo $row['date'] ?>">
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label">Link:</label>
                    <input type="text" class="form-control" name="link" value="<?php echo $row['link'] ?>">
                </div>

                <div>
                    <button type="submit" class="btn btn-success" name="submit">Update</button>
                    <a href="event_list_index.php" class="btn btn-danger">Cancel</a>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</body>
</html>