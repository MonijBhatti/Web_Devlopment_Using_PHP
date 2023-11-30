<?php

$conncation = mysqli_connect("localhost","root","","15618223036");

  $query = "SELECT * FROM about_details";

  $execute_query =  mysqli_query($conncation ,$query);

  $number_record = mysqli_num_rows($execute_query);
  for ($i=1;  $i <= $number_record; $i++)
  {

   $fetch_data = mysqli_fetch_row($execute_query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./style.css">
    <title>AdminSite</title>
</head>

<body>

    <!-- SIDEBAR -->
    <section id="sidebar">
        <a href="#" class="brand"><img src="./img/logo.png" alt="" class="img"> </a>
         <ul class="side-menu top">
            <li class="divider" data-text="Main">Main</li>
            <li class="active">
                <a href="#">
                    <i class='bx bxs-widget icon'></i>
                    <span class="text">Menu 1</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bxs-widget icon'></i>
                    <span class="text">Menu 2 </span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bxs-widget icon'></i>
                    <span class="text">Menu 3 </span>
                </a>
            </li>
            <li class="divider" data-text="My Social Profiles">My Social Profiles</li>
            <li>
                <a href="https://sites.google.com/view/monij-bhatti/home">
                    <i class='fa fa-google icon'></i>
                    <span class="text">GoogleSite</span>
                </a>
            </li>
            <li>
                <a href="https://www.linkedin.com/in/monijbhatti">
                    <i class='fa fa-linkedin-square icon'></i>
                    <span class="text">Linkedin</span>
                </a>
            </li>
            <li>
                <a href="https://github.com/MonijBhatti">
                    <i class='fa fa-github-square icon'></i>
                    <span class="text">Github</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-file-text icon"></i>
                    <span class="text">Blog</span>
                </a>
            </li>
        </ul>
        
    </section>
    <!-- SIDEBAR -->

    <!-- NAVBAR -->
    <section id="content">
        <!-- NAVBAR -->
        
        <nav id="navbar" >
           <div class="navbar-item"> 
            <i class='bx bx-menu toggle-sidebar'></i>
            <form action="#">
                <div class="form-group">
                    <h1 class="title">Title</h1>
                </div>
            </form>

            <div class="profile">
                <img src="./img/profile.jpg">
            </div>
            <div class="form-group">
                    <h4 class="title">Monij Bhatti</h4>
                </div>
            <!-- <div><span>Rahul Kanjariya</span></div> -->
            </div>
        </nav>
        <!-- NAVBAR -->

        <!-- MAIN -->

        <div class="container">
            <div class="dashboard-item">
                <div id="about-me" class="section-title">
                    <h2>About Me</h2>
                </div>
                <p class="about"><?php echo $fetch_data[1]?></p>
            </div>
            <div class="dashboard-item">
                <div id="my-skillset" class="section-title">
                    <h2>My Skillset</h2>
                </div>
                <div class="btn-group">
                <button class="btn btn-4"><?php  echo $fetch_data[2] ?> </button>
                </div>
                
            </div>
            <div class="dashboard-item">
                <div id="assignments" class="section-title">
                    <h2>Assignments</h2>
                </div>
                <div class="btn-group">
                    <a href="https://github.com/MonijBhatti/Web_Devlopment_Using_PHP/tree/main/Practical%20Exercises/Task_1"><button class="btn btn-1">Task 1</button></a>
                    <a href="https://github.com/MonijBhatti/Web_Devlopment_Using_PHP/tree/main/Practical%20Exercises/Task_2"><button class="btn btn-2">Task 2</button></a>
                    <a href="https://github.com/MonijBhatti/Web_Devlopment_Using_PHP/tree/main/Practical%20Exercises/Task_3"><button class="btn btn-3">Task 3</button></a>
                    <button class="btn btn-4" disabled>Task 4</button>
                    <button class="btn btn-5">Task 5</button>
                    <a href="https://github.com/MonijBhatti/Web_Devlopment_Using_PHP/tree/main/ARRAY%20EXERCISE"><button class="btn btn-6">Array Exercise</button></a>
                    <a href="https://github.com/MonijBhatti/Django_Dependent_DropDown"><button class="btn btn-7">Django Dependent...</button></a>
                </div>
            </div>
            <div class="dashboard-item">
                <div id="project-details" class="section-title">
                    <h2>My Project Details</h2>
                </div>
                <p><?php echo $fetch_data[3]?></p>
            </div>
        </div>
        </main>
        </div>
        </div>
        <div id="footer">
            <img src="./img/logo.png" alt="Footer Logo" width="100">
            <div style="margin: 5px; text-align: start;">
                <p>Developed by &copy; 2023 Monij Bhatti</p>
            </div>
        </div>

    </section>
    <!-- NAVBAR -->



    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="script.js"></script>
</body>

</html>
<?php
  }

?>