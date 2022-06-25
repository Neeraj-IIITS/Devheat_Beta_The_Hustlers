<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link href="css/style_sheet.css" rel="stylesheet"/>
    <title>Event Record</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>
<body>
<header class="text-gray-600 body-font" style="user-select: auto; background-color: rgb(198, 204, 207);">
      <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center" style="user-select: auto;">
        <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0" style="user-select: auto;">
          <img src="image/iiitsurat.png" alt="IIIT Surat" width="45" height="48"/>
          <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5" style="user-select: auto;"></path>
          <span class="ml-3 text-xl" style="user-select: auto;">Event Manager_IIITS</span>
        </a>
        <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center" style="user-select: auto;">
          <a href="home_page.php" class="mr-5 hover:text-gray-900" style="user-select: auto;">Home</a>
          <a href="event_list_index.php" class="mr-5 hover:text-gray-900" style="user-select: auto;">Events</a>
          <a href="contest_list_index.php" class="mr-5 hover:text-gray-900" style="user-select: auto;">Contests</a>
          <a href="home_page.php" class="mr-5 hover:text-gray-900" style="user-select: auto;">Contact Us</a>
        </nav>
      </div>
    </header>

    <div class="container">
        <?php
            if (isset($_GET['msg'])) {
                $msg = $_GET ['msg'];
                echo '<br><div class="alert alert-warning alert-dismissible fade show" role="alert">
                '.$msg.'
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
            }
        ?><br>
        <a href="event_record_add.php" class="btn btn-dark mb-3">Add New</a>

        <table class="table table-hover text-center">
        <thead class="table-dark">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Name</th>
          <th scope="col">1st</th>
          <th scope="col">2nd</th>
          <th scope="col">3rd</th>
        </tr>
      </thead>
      <tbody>
            <?php
                include "css/db_conn_er.php";

                $sql = "Select * FROM `record`";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                    ?>

                    <tr>
                        <td><?php echo $row['id'] ?></td>
                        <td><?php echo $row['name'] ?></td>
                        <td><?php echo $row['1st'] ?></td>
                        <td><?php echo $row['2nd'] ?></td>
                        <td><?php echo $row['3rd'] ?></td>
                        <td>
                            <a href="event_record_edit.php?id=<?php echo $row ['id'] ?>" class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
                            <a href="event_record_delete.php?id=<?php echo $row ['id'] ?>" class="link-dark"><i class="fa-solid fa-trash fs-5"></i></a>
                        </td>
                    </tr>

                    <?php
                }
            ?>
        
        
      </tbody>
    </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</body>
</html>