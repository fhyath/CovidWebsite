<?php
        include_once 'db.php';
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">


    <title>Covid Vaccine Tracker</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-host-cloud.css">
    <link rel="stylesheet" href="assets/css/owl.css">

  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index.php"><h2>Covid <em>Database</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="index.php">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="patient.php">Add Patient</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="searchDB.php">Search / Update Database</a>
              </li>
            </ul>
          </div>
          <!-- <div class="functional-buttons">
            <ul>
              <li><a href="#">Log in</a></li>
              <li><a href="#">Sign Up</a></li>
            </ul>
          </div> -->
        </div>
      </nav>
    </header>
    <style>
      html, body { height: 100%;   } 
      .banner{
        /* height: 930px; */
        height:100%;
      }
    </style>
    <!-- Page Content -->
    <!-- Banner Starts Here -->

    <style>
      p{
        font-family:calibri;
        text-align: justify;
        text-justify: inter-word;
      }

      </style>
    <div class="banner">
      <div class="container">

        <div class="row">
          <div class="col-md-8 offset-md-2">
            <div class="header-text caption" >
              <h2 style = "color:white; font-size:50pt;">COVID Vaccine Database</h2>
              <p style = "color:white; font-size:15pt;">This website is designed to be used by Covid-19 vaccine administrators. When a vaccine is administered to a patient, their info is entered and stored in the database. 
                                                          The number of vaccinations is also tracked and incremented when a patient is added to the database. Additionally, the database can be queried to find patients and their information. <br><br>
                                                          <strong >By Sage Phan and Furqaan Hyath<strong></p>
              </div>
            </div>
          </div>
      </div>
    </div>




    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/accordions.js"></script>


    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>

  </body>
</html>