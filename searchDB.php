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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

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
          <a class="navbar-brand" href="index.html"><h2>Covid <em>Database</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="index.html">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="patient.html">Add A Patient</a>
              </li>
  
              <li class="nav-item active">
                <a class="nav-link" href="searchDB.php">Search Database</a>
              </li>
            </ul>
          </div>
  
        </div>
      </nav>
    </header>

    <!-- Page Content -->
    <!-- Heading Starts Here -->
    <div class="page-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>Search Database</h1>
            <p><a href="index.html">Home</a> / <span>Search Database</span></p>
          </div>
        </div>
      </div>
    </div>

<!-- code goes here-->

<style> 
    th, td {
      font-family: Roboto, Arial, sans-serif;
       font-size: 14px;
    }
    .form-control{
     
    }
    
</style>

<div class="container " style =" width:100%;">
		<div class="row">
			<div class="col-md-8 col-md-offset-2" style="margin-top: 5%; width:100%;">
				<div class="row">
          <?php

              if(isset($_POST['search'])){
                $searchKey = $_POST['search'];

                $sql = "Select patient.patient_id, patient.first_name, patient.last_name, patient.age, patient.gender, patient.dosage_no, patient.start_date, patient.end_date, doctor.alast_name, center.center_name, 
                vaccine_manufacturers.vaccine_manufacturer, country.country_name
                FROM patient
                JOIN doctor on doctor.doctor_id = patient.doctor_id
                JOIN center on center.center_id = patient.center_id
                JOIN vaccine_manufacturers on vaccine_manufacturers.vaccine_manufacturer_id = patient.vaccine_manufacturer_id
                JOIN country on center.country_id = country.country_id 
                WHERE patient.first_name LIKE '$searchKey%'
                ";
                // $sql = "Select patient_id, first_name, last_name FROM patient WHERE first_name LIKE '$searchKey%'";
              }
              else{
                $sql = "Select patient.patient_id, patient.first_name, patient.last_name, patient.age, patient.gender, patient.dosage_no, patient.start_date, patient.end_date, doctor.alast_name, center.center_name, 
                vaccine_manufacturers.vaccine_manufacturer, country.country_name
                FROM patient
                JOIN doctor on doctor.doctor_id = patient.doctor_id
                JOIN center on center.center_id = patient.center_id
                JOIN vaccine_manufacturers on vaccine_manufacturers.vaccine_manufacturer_id = patient.vaccine_manufacturer_id
                JOIN country on center.country_id = country.country_id;
                ";
                 $searchKey = "";
             }
              $result = mysqli_query($conn, $sql);
              

          ?>
				<form action="" method="POST"> 
					<div class="col-md-6">
						<input type="text" style =" font-size: 13px;" name="search" class='form-control' placeholder="Search" value="<?php echo $searchKey?>" > 
					</div>
					<div class="col-md-6 text-left">
						<button class="btn">Search</button>
					</div>
				</form>

				<br>
				<br>
				</div>
				<table class="table table-bordered" style =" width:100%;">
					<tr>
						<th>Patient ID</th>
						<th>First Name</th>
						<th>Last Name</th>
            <th>Age</th>
            <th>Gender</th>
            <th>Dosage #</th>
            <th>Start Date</th>
            <th>End Date</th>
            <th>Admin Last Name</th>
            <th>Center Name</th>
            <th>Vaccine Manufacturer</th>
            <th>Country</th>


					</tr>
          <?php while($row = mysqli_fetch_object($result)){?>
					<tr>
						<td><?php echo $row->patient_id?> </td>
            <td><?php echo $row->first_name?> </td>
						<td><?php echo $row->last_name?> </td>
						<td><?php echo $row->age?> </td>
            <td><?php echo $row->gender?> </td>
            <td><?php echo $row->dosage_no?> </td>
            <td><?php echo $row->start_date?> </td>
            <td><?php echo $row->end_date?> </td>
            <td><?php echo $row->alast_name?> </td>
            <td><?php echo $row->center_name?> </td>
            <td><?php echo $row->vaccine_manufacturer?> </td>
            <td><?php echo $row->country_name?> </td>
					</tr>
          <?php }?>
				</table>
			</div>
		</div>
	</div>

  <br/>
  <br/>
  <br/>
  <br/>

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