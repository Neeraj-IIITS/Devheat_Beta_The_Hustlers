<?php
    include "css/db_conn_cr.php";

    if(isset($_POST['submit'])) {
        $name = $_POST ['name'];
        $_1st = $_POST ['1st'];
        $_2nd = $_POST ['2nd'];
        $_3rd = $_POST ['3rd'];

        $sql = "INSERT INTO `record`(`id`, `name`, `1st`, `2nd`, `3rd`) VALUES (null,'$name','$_1st','$_2nd', '$_3rd')";

        $result = mysqli_query($conn, $sql);

        if($result) {
            header ("Location: contest_record_index.php?msg=New record created successfully");
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
    <title>Add Contest Record</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div class="container">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <div class="text-center mb-4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <h3>Add New Record</h3>
            <p class="text-muted">Complete the form below to add the new record</p>
        </div>

        <div class="container d-flex justify-content-center">
            <form action="" method="post" style="width: 50vw; min-width:300px">
                <div class="row mb-3">
                    <div class="col">
                    <label class="form-label">Name:</label>
                    <input type="text" class="form-control" name="name" placeholder="Enter Contest Name">
                    </div>

                    <div class="col">
                    <label class="form-label">1st:</label>
                    <input type="text" class="form-control" name="1st" placeholder="Enter 1st Winner">
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label">2nd:</label>
                    <input type="text" class="form-control" name="2nd" placeholder="Enter 2nd Winner">
                </div>

                <div class="mb-3">
                    <label class="form-label">3rd:</label>
                    <input type="text" class="form-control" name="3rd" placeholder="Enter 3rd Winner">
                </div>

                <div>
                    <button type="submit" class="btn btn-success" name="submit">Add</button>
                    <a href="contest_record_index.php" class="btn btn-danger">Cancel</a>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</body>
</html>