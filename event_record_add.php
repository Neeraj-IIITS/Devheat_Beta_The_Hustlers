<?php
    include "css/db_conn_er.php";

    if(isset($_POST['submit'])) {
        $name = $_POST ['name'];
        $_1st = $_POST ['1st'];
        $_2nd = $_POST ['2nd'];
        $_3rd = $_POST ['3rd'];

        $sql = "INSERT INTO `record`(`id`, `name`, `1st`, `2nd`, `3rd`) VALUES (null,'$name','$_1st','$_2nd', '$_3rd')";

        $result = mysqli_query($conn, $sql);

        if($result) {
            header ("Location: event_record_index.php?msg=New record created successfully");
        } else {
            echo "Failed: " . mysqli_error($conn);
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link href="css/style_sheet.css" rel="stylesheet"/>
    <title>Add New Record</title>
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous"> -->
</head>
<body>

    <!-- <div class="container">
        <div class="text-center mb-4">
            <h3>Add New Record</h3>
            <p class="text-muted">Complete the form below to add the new record</p>
        </div>

        <div class="container d-flex justify-content-center">
            <form action="" method="post" style="width: 50vw; min-width:300px">
                <div class="row mb-3">
                    <div class="col">
                    <label class="form-label">Name:</label>
                    <input type="text" class="form-control" name="name" placeholder="Enter Event Name">
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
                    <a href="event_record_index.php" class="btn btn-danger">Cancel</a>
                </div>
            </form>
        </div>
    </div> -->

    <section class="text-gray-600 body-font relative" style="user-select: auto;">
            <div class="container px-5 py-24 mx-auto" style="user-select: auto;">
                <div class="flex flex-col text-center w-full mb-12" style="user-select: auto;">
                    <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900" style="user-select: auto;">Add New Record</h1> 
                    <p class="lg:w-2/3 mx-auto leading-relaxed text-base" style="user-select: auto;">Complete the form below to add new record</p>
                </div>
                <form action="" method="POST">
                    <div class="lg:w-1/2 md:w-2/3 mx-auto" style="user-select: auto;">
                        <div class="flex flex-wrap -m-2" style="user-select: auto;">
                            <div class="p-2 w-1/2" style="user-select: auto;">
                                <div class="relative" style="user-select: auto;">
                                    <label for="name" class="leading-7 text-sm text-gray-600" style="user-select: auto;">Name:</label>                   
                                    <input type="text" id="name" name="name" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" style="user-select: auto;" placeholder="Enter Event Name">
                                </div>
                            </div>
                            <div class="p-2 w-1/2" style="user-select: auto;">
                                <div class="relative" style="user-select: auto;">
                                    <label for="1st" class="leading-7 text-sm text-gray-600" style="user-select: auto;">Enter 1st Winner</label>
                                    <input type="text" id="1st" name="1st" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" style="user-select: auto;" placeholder="Enter your Email">
                                </div>
                            </div>

                            <div class="p-2 w-1/2" style="user-select: auto;">
                                <div class="relative" style="user-select: auto;">
                                    <label for="2nd" class="leading-7 text-sm text-gray-600" style="user-select: auto;">Enter 2nd Winner</label>
                                    <input type="text" id="2nd" name="2nd" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" style="user-select: auto;" placeholder="Enter your Email">
                                </div>
                            </div>

                            <div class="p-2 w-1/2" style="user-select: auto;">
                                <div class="relative" style="user-select: auto;">
                                    <label for="2nd" class="leading-7 text-sm text-gray-600" style="user-select: auto;">Enter 2nd Winner</label>
                                    <input type="text" id="2nd" name="2nd" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" style="user-select: auto;" placeholder="Enter your Email">
                                </div>
                            </div>
                            
                            <div class="p-2 w-full" style="user-select: auto;">
                                <button  type="submit" name="submit" class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg btn btn-success" style="user-select: auto;">Add</button>&nbsp;
                                <a href="event_record_index.php" class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg" style="user-select: auto;">Cancel</a>
                            </div>
                        

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</body>
</html>
