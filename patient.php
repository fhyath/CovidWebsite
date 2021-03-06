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

    <link href="style.css" rel="stylesheet">


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
          <a class="navbar-brand" href="index.php"><h2>COVID <em>Database</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="index.php">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="patient.html">Add Patient</a>
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

    <!-- Page Content -->
    <!-- Heading Starts Here -->
    <div class="page-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>Add Patient to Database</h1>
            <p><a href="index.html">Home</a> / <span>Add A Patient</span></p>
          </div>
        </div>
      </div>
    </div>

    <div class="testbox">
      <form action="submit.php" method ="post">
        <div class="banner1">
          <h1 class ="form1">New Patient</h1>
        </div>
        <br/>
        <fieldset>
          <legend>Patient Information</legend>
          <div class="item">
            <label for="patFirst"> First Name<span>*</span></label>
            <input id="fnpatFirstame" type="text" name="patFirst" required/>
          </div>
          <div class="item">
            <label for="patLast"> Last Name<span>*</span></label>
            <input id="patLast" type="text" name="patLast" required/>
          </div>
          <div class="item">
            <label for="age">Age<span class ="qspan">*</span></label>
            <input id="age" type="text" name="age" required/>
          </div>
          <div>
          <div class="question">
            <label>Gender<span class = "qspan">*</span></label>
            <div class="question-answer">
              <div>
                <input type="radio" value="M" id="radio_1" name="gender" required/>
                <label for="radio_1" class="radio"><span class ="ans">Male</span></label>
              </div>
              <div>
                <input  type="radio" value="F" id="radio_2" name="gender"/>
                <label for="radio_2" class="radio"><span class ="ans">Female</span></label>
              </div>
            </div>
          </div>
        </fieldset>
        <br/>
        <fieldset>
          <legend>Appointment Information</legend>
          <div class="item">
            <label for="date1">Date<span>*</span></label>
            <input id="date1" type="date" name="date1" required/>
            <i class="fas fa-calendar-alt"></i>
          </div>
          <div class="item">
            <p>Center <span class ="qspan">*</span></p>
            <select required name="center">
              <option selected value="" disabled selected></option>
              <option value="1" >CVS Pharmacy</option>
              <option value="2">Ontario Clinic</option>
              <option value="3">Mexico City Clinic</option>
              <option value="4" >Paris Clinic</option>
              <option value="5">Great Britain Clinic</option>
              <option value="6">Moscow Clinic</option>
              <option value="7" >Beijing Clinic</option>
              <option value="8">South Africa Clinic</option>
              <option value="9">Rio Clinic</option>
              <option value="10" >Sydney Clinic</option>
            </select>
          </div>
          <div class="item">
            <p>Vaccine Manufacturer <span class ="qspan">*</span></p>
            <select name="manu"required>
              <option selected value="" disabled selected></option>
              <option value="2" >Moderna</option>
              <option value="1">Pfizer</option>
              <option value="3">Johnson & Johnson</option>
            </select>
          </div>
        </fieldset>
        <br/>
 
            <fieldset>
            <legend>Administrator</legend>
            <!-- <div class="item">
              <label for="docFirst"> First Name<span class ="qspan">*</span></label>
              <input id="docFirst" type="text" name="docFirst" required/>
            </div>
            <div class="item">
              <label for="docLast"> Last Name<span class ="qspan">*</span></label>
              <input id="docLast" type="text" name="docLast" required/>
            </div>
 -->
            <div class="item">
            <p>Doctor<span class ="qspan">*</span></p>
            <select name = "doctor" required>
              <option selected value="" disabled selected></option>
              <option value="1">Dr. Jim Bob</option>
              <option value="2">Dr. Con Jon</option>
              <option value="3">Dr. Wilson Ball</option>
              <option value="4">Dr. Jean Howe</option>
              <option value="5">Dr. Sara One</option>
              <option value="6">Dr. Nathan Drake</option>
              <option value="7">Dr. Leonard Church</option>
              <option value="8">Dr. Laverius Tucker</option>
              <option value="9">Dr. Solanum Nomai</option>
              <option value="10" >Dr. Rex Bot</option>
            </select>
          </div>

          <div class="question">
            <label>Dosage Number <span class ="qspan">*</span></label>
            <div class="question-answer">
              <div>
                <input type="radio" value="1" id="radio_3" name="dosage" required/>
                <label for="radio_3" class="radio"><span class ="ans">1</span></label>
              </div>
              <div>
                <input  type="radio" value="2" id="radio_4" name="dosage"/>
                <label for="radio_4" class="radio"><span class ="ans">2</span></label>
              </div>
            </div>
          </div>
        </fieldset>
        <div class="btn-block">
          <button type="submit" href="submit.php">Submit</button>
        </div>
      </form>
    </div>

    


    <!-- Footer Ends Here -->

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