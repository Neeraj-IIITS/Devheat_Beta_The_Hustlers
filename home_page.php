<?php
    include "css/db_conn.php";

    if(isset($_POST['submit'])) {
        $name = $_POST ['name'];
        $email = $_POST ['email'];
        $comment = $_POST ['comment'];

        $sql = "INSERT INTO `contact_us`(`id`, `name`,`email`, `comment`) VALUES (null,'$name','$email','$comment')";

        $result = mysqli_query($conn, $sql);

        if($result) {
            header ("Location: home_page.php?msg=New record created successfully");
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
    <title>Event Manager_IIITS</title>
</head>
<body>
    <header class="text-gray-600 body-font" style="user-select: auto; background-color: rgb(198, 204, 207);">
      <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center" style="user-select: auto;">
        <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0" style="user-select: auto;">
          <img src="image/iiitsurat.png" alt="IIIT Surat" width="45" height="48"/>
          <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5" style="user-select: auto;"></path>
          <span class="ml-3 text-xl" style="user-select: auto;">Event Manager_IIITS</span>
        </a>
        <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center" style="user-select: auto; background-color:;">
          <a href="home_page.php" class="mr-5 hover:text-gray-900" style="user-select: auto;">Home</a>
          <a href="#events" class="mr-5 hover:text-gray-900" style="user-select: auto;">Events</a>
          <a href="#contests" class="mr-5 hover:text-gray-900" style="user-select: auto;">Contests</a>
          <a href="#aboutus" class="mr-5 hover:text-gray-900" style="user-select: auto;">Contact Us</a>
        </nav>
      </div>
    </header>
    <section class="text-gray-600 body-font" style="user-select: auto; background-color: rgb(180, 199, 211);">
      <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center" style="user-select: auto;">
        <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center" style="user-select: auto;">
          <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900" style="user-select: auto; color: rgb(66, 79, 228);">About Our Web-Site</h1>
          <h2 class="title-font text-3xl mb-4 font-medium text-gray-600" style="user-select: auto; color: coral;">Events and Contests Manager of 'Indian Institute of Information Technology, Surat.'</h2>
            <p class="mb-8 leading-relaxed" style="user-select: auto; font-size: 20px;"><i>From this site you can access all the events, contests, registeration, previous records and many more of the Indian Institute of Information Technology, Surat [IIIT S].</i></p>
          <div class="flex justify-center" style="user-select: auto;"></div>
        </div>
        <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6" style="user-select: auto;">
          <img class="object-cover object-center rounded" alt="random images" src="https://source.unsplash.com/720x600/?coding,dance,games" style="user-select: auto;"/>
        </div>
      </div>
    </section>
    <div id="events">
    <section class="text-gray-600 body-font" style="user-select: auto; background-color: rgb(214, 234, 249);">
      <div class="container px-5 py-24 mx-auto flex flex-wrap" style="user-select: auto;">
        <div class="flex flex-wrap -m-4" style="user-select: auto;">
          <div class="p-4 lg:w-1/2 md:w-full" style="user-select: auto;">
            <div class="flex border-2 rounded-lg border-gray-200 border-opacity-50 p-8 sm:flex-row flex-col" style="user-select: auto;">
              <div class="w-16 h-16 sm:mr-8 sm:mb-0 mb-4 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 flex-shrink-0" style="user-select: auto;">
                <path class="fa fa-university" style="user-select: auto; font-size: 30px" ></path>
              </div>
              <div class="flex-grow" style="user-select: auto;">
                <h2 class="text-gray-900 text-lg title-font font-medium mb-3" style="user-select: auto; font-size: 25px;"><b><i>Events List</i></b></h2>
                <p class="leading-relaxed text-base" style="user-select: auto;">From this you get to see the multiple events going on in our college in which you can be a part of it...</p>
                <a href="event_list_index.php" class="mt-3 text-indigo-500 inline-flex items-center" style="user-select: auto;">Get More Details
                  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24" style="user-select: auto;">
                    <path d="M5 12h14M12 5l7 7-7 7" style="user-select: auto;"></path>
                  </svg>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="container px-5 py-24 mx-auto flex flex-wrap" style="user-select: auto;">
          <div class="flex flex-wrap -m-4" style="user-select: auto;">
            <div class="p-4 lg:w-1/2 md:w-full" style="user-select: auto;">
              <div class="flex border-2 rounded-lg border-gray-200 border-opacity-50 p-8 sm:flex-row flex-col" style="user-select: auto;">
                <div class="w-16 h-16 sm:mr-8 sm:mb-0 mb-4 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 flex-shrink-0" style="user-select: auto;">
                  <path class="fa fa-book" style="user-select: auto; font-size: 30px" ></path>
                </div>
                <div class="flex-grow" style="user-select: auto;">
                  <h2 class="text-gray-900 text-lg title-font font-medium mb-3" style="user-select: auto; font-size: 25px;"><b><i>Previous Records</i></b></h2>
                  <p class="leading-relaxed text-base" style="user-select: auto;">From this you get to see the previous rocords of the events, so lets have a look in this...</p>
                  <a href="event_record_index.php" class="mt-3 text-indigo-500 inline-flex items-center" style="user-select: auto;">Get More Details
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24" style="user-select: auto;">
                      <path d="M5 12h14M12 5l7 7-7 7" style="user-select: auto;"></path>
                    </svg>
                  </a>
                </div>
              </div>
              <div class="b"><img class="object-cover object-center rounded" alt="Events" src="image/E.png" style="user-select: auto;"/></div>
            </div>
          </div>
          <div id="contests">
            <footer class="a">
            <section class="text-gray-600 body-font" style="user-select: auto; background-color: rgb(214, 234, 249);">
              <div class="container px-5 py-24 mx-auto flex flex-wrap" style="user-select: auto;">
                <div class="flex flex-wrap -m-4" style="user-select: auto;">
                  <div class="p-4 lg:w-1/2 md:w-full" style="user-select: auto;">
                    <div class="flex border-2 rounded-lg border-gray-200 border-opacity-50 p-8 sm:flex-row flex-col" style="user-select: auto;">
                      <div class="w-16 h-16 sm:mr-8 sm:mb-0 mb-4 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 flex-shrink-0" style="user-select: auto;">
                        <path class="fa fa-university" style="user-select: auto; font-size: 30px" ></path>
                      </div>
                      <div class="flex-grow" style="user-select: auto;">
                        <h2 class="text-gray-900 text-lg title-font font-medium mb-3" style="user-select: auto; font-size: 25px;"><b><i>Contests List</i></b></h2>
                        <p class="leading-relaxed text-base" style="user-select: auto;">From this you get to see the multiple contests going on in our college in which you can be a part of it...</p>
                        <a href="contest_list_index.php" class="mt-3 text-indigo-500 inline-flex items-center" style="user-select: auto;">Get More Details
                          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24" style="user-select: auto;">
                            <path d="M5 12h14M12 5l7 7-7 7" style="user-select: auto;"></path>
                          </svg>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="container px-5 py-24 mx-auto flex flex-wrap" style="user-select: auto;">
                  <div class="flex flex-wrap -m-4" style="user-select: auto;">
                    <div class="p-4 lg:w-1/2 md:w-full" style="user-select: auto;">
                      <div class="flex border-2 rounded-lg border-gray-200 border-opacity-50 p-8 sm:flex-row flex-col" style="user-select: auto;">
                        <div class="w-16 h-16 sm:mr-8 sm:mb-0 mb-4 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 flex-shrink-0" style="user-select: auto;">
                          <path class="fa fa-book" style="user-select: auto; font-size: 30px" ></path>
                        </div>
                        <div class="flex-grow" style="user-select: auto;">
                          <h2 class="text-gray-900 text-lg title-font font-medium mb-3" style="user-select: auto; font-size: 25px;"><b><i>Previous Records</i></b></h2>
                          <p class="leading-relaxed text-base" style="user-select: auto;">From this you get to see the previous rocords of the contests, so lets have a look in this...</p>
                          <a href="contest_record_index.php" class="mt-3 text-indigo-500 inline-flex items-center" style="user-select: auto;">Get More Details
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24" style="user-select: auto;">
                              <path d="M5 12h14M12 5l7 7-7 7" style="user-select: auto;"></path>
                            </svg>
                          </a>
                        </div>
                      </div>
                      <div class="c"><img class="object-cover object-center rounded" alt="Contests" src="image/C.png" style="user-select: auto;"/></div>
                    </div>
                  </section>
                </footer>
      <section class="text-gray-600 body-font relative" style="user-select: auto; background-color: rgb(191, 221, 241);">
        <div id="aboutus">
        <div class="container px-5 py-24 mx-auto" style="user-select: auto;">
          <div class="flex flex-col text-center w-full mb-12" style="user-select: auto;">
            <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900" style="user-select: auto;">Contact Us</h1> 
            <p class="lg:w-2/3 mx-auto leading-relaxed text-base" style="user-select: auto;">Feel free to send us your queries.</p>
          </div>
          <form action="" method="POST">
          <div class="lg:w-1/2 md:w-2/3 mx-auto" style="user-select: auto;">
            <div class="flex flex-wrap -m-2" style="user-select: auto;">
              <div class="p-2 w-1/2" style="user-select: auto;">
                <div class="relative" style="user-select: auto;">
                  <label for="name" class="leading-7 text-sm text-gray-600" style="user-select: auto;">Name</label>                   
                <input type="text" id="name" name="name" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" style="user-select: auto;" placeholder="Enter your Name">
                </div>
              </div>
              <div class="p-2 w-1/2" style="user-select: auto;">
                <div class="relative" style="user-select: auto;">
                  <label for="email" class="leading-7 text-sm text-gray-600" style="user-select: auto;">Email</label>
                  <input type="email" id="email" name="email" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" style="user-select: auto;" placeholder="Enter your Email">
                </div>
              </div>
              <div class="p-2 w-full" style="user-select: auto;">
                <div class="relative" style="user-select: auto;">
                  <label for="message" class="leading-7 text-sm text-gray-600" style="user-select: auto;">Message</label>                      
                  <textarea id="comment" name="comment" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out" style="user-select: auto;" placeholder="Enter your Query"></textarea>
                </div>
              </div>
              <div class="p-2 w-full" style="user-select: auto;">
                <button type="submit" name="submit" class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg" style="user-select: auto;">Submit</button>
              </div>
              <div class="p-2 w-full pt-8 mt-8 border-t border-gray-200 text-center" style="user-select: auto;">
                <a class="text-indigo-500" style="user-select: auto;">events.iiitsurat@gmail.com (or) contest.iiitsurat@gmail.com</a>
                  <p class="leading-normal my-5" style="user-select: auto;">Indian Institute of Information Technology, Surat
                        
                    SVNIT Campus
                        
                    Ichchanath, Surat - 395007
                        
                    <br style="user-select: auto;">Gujarat
                  </p><br>
                  <a class="fa fa-facebook-official" style="font-size:40px;" href="https://www.facebook.com/iiitsuratofficial" target="_blank"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <a class="fa fa-twitter" style="font-size:40px" href="https://twitter.com/IIITSurat" target="_blank"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <a class="fa fa-youtube" style="font-size:40px" href="https://www.youtube.com/channel/UC5gvfNru20qMJBnYFPWoiiw" target="_blank"></a>
                </div>
              </div>
          </div>
          </form>
        </div>
      </div>
      </section>   
  </body>
</html> 