<?php
    include_once 'db.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
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
              <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="patient.php">Add Patient</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="searchDB.php">Search Database</a>
              </li>
            </ul>
          </div>
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
    <div class="banner">
      <div class="container">

        <div class="row">
          <div class="col-md-8 offset-md-2">
            <div class="header-text caption">
              <h2>Successfully added a patient</h2>
              <style>
                .main-button{

                }
              </style>
              <a class="main-button" href = "patient.php" onMouseOver="this.style.backgroundColor='#00f'"
              onMouseOut="this.style.backgroundColor='#5f61f0'" style = "color:white; background-color:#5f61f0; width:50%; margin:10px;">Add another patient</a><br><br>
              <a class="main-button" href = "searchDB.php" onMouseOver="this.style.backgroundColor='#00f'"
              onMouseOut="this.style.backgroundColor='#5f61f0'" style = "color:white; background-color:#5f61f0; width:50%; margin:10px;">Search Database</a><br><br>
              <a class="main-button" href = "index.php" onMouseOver="this.style.backgroundColor='#00f'"
              onMouseOut="this.style.backgroundColor='#5f61f0'" style = "color:white; background-color:#5f61f0; width:50%; margin:10px;">Home</a>
              </div>
            </div>
          </div>
      </div>
    </div>
    <?php
        // $sql = "Select * FROM patient;";
        // $result = mysqli_query($conn, $sql);

        // $resultCheck = mysqli_num_rows($result);

        // if($resultCheck > 0){
        //     while($row = mysqli_fetch_assoc($result)){
        //         echo $row['first_name'];
        //     }
        // }

        if($conn === false){
            die("Error: Could not connect" . mysqli_connect_error());
          }
       
          $patFirst = mysqli_real_escape_string($conn, $_REQUEST['patFirst']);
          $patLast = mysqli_real_escape_string($conn, $_REQUEST['patLast']);
          $age = mysqli_real_escape_string($conn, $_REQUEST['age']);
          $gender = mysqli_real_escape_string($conn, $_REQUEST['gender']);
          $start_date = mysqli_real_escape_string($conn, $_REQUEST['date1']);
          $center = mysqli_real_escape_string($conn, $_REQUEST['center']);
          $manu = mysqli_real_escape_string($conn, $_REQUEST['manu']);
          $doctor = mysqli_real_escape_string($conn, $_REQUEST['doctor']);
          $dosage = mysqli_real_escape_string($conn, $_REQUEST['dosage']);
       
          if($dosage == "1"){
            $end_date =  date('Y-m-d', strtotime('+21 days', strtotime($start_date)));
          }
          else{
            $end_date = "n/a";
          }
       
          $sql = "INSERT INTO patient (first_name, last_name, age, gender, center_id, doctor_id, vaccine_manufacturer_id, start_date, end_date, dosage_no) 
                VALUES ('$patFirst', '$patLast', '$age', '$gender', '$center', '$doctor', '$manu', '$start_date', '$end_date', '$dosage')";
           
           $update = "UPDATE vaccine_volume
                    set amount = amount +1
                    WHERE '$center' = vaccine_volume.country_id and '$manu' = vaccine_volume.vaccine_manufacturer_id;";  
                    
                    

              // if(mysqli_query($conn, $update)){
              //      echo "Records added successfully.";
              //     } else{
              //     echo "ERROR: Could not able to execute $update. " . mysqli_error($conn);
              //     }

            if(mysqli_query($conn, $sql)){
                    // echo "Records added successfully.";
                } else{
                    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
                }
                
                // Close connection
                mysqli_close($conn);
                


        // if($conn === false){
        //     die("Error: Could not connect" . mysqli_connect_error());
        // }
        // $pat_first = mysqli_real_escape_string($conn, $_REQUEST['patFirst']);
        // $pat_last = mysqli_real_escape_string($conn, $_REQUEST['patLast']);
        // // $age = mysqli_real_escape_string($conn, $_REQUEST['age']);
        // // $gender = mysqli_real_escape_string($conn, $_REQUEST['gender']);

        // $sql = "INSERT INTO patient (first_name, last_name) VALUES ('$pat_first', '$pat_last')";
        // if(mysqli_query($conn, $sql)){
        //     echo "Records added successfully.";
        // } else{
        //     echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
        // }
        
        // // Close connection
        // mysqli_close($conn);

    
 

   ?>

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