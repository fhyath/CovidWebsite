<?php
    include_once 'db.php';
    // $result = mysqli_query($conn,"SELECT * FROM patient WHERE userid='" . $_GET['userid'] . "'");
    // $row= mysqli_fetch_array($result);
 //   $id = $_GET['id'];
    // echo $id;

    if(count($_POST)>0) {
        mysqli_query($conn,"UPDATE patient set first_name='".$_POST["patFirst"]."' 
        ,last_name='" . $_POST['patLast'] . "' , age='" . $_POST['age'] . "' , gender='" . $_POST['gender'] . "'  
        , center_id='" . $_POST['center'] . "' , vaccine_manufacturer_id='" . $_POST['manu'] . "' 
        , dosage_no='" . $_POST['dosage'] . "' WHERE patient_id='" . $_GET['id'] . "'"); 
        $message = "Record Modified Successfully";
        // echo $message;
        // echo $_POST["patFirst"];
        }
    $result = mysqli_query($conn,"SELECT * FROM patient WHERE patient_id='" . $_GET['id'] . "'");
   // echo $_GET['id'];
   $row = $result->fetch_array(MYSQLI_ASSOC);
//    print_r($row);
    // echo $row;



    // if(count($_POST)>0) {
    //     mysqli_query($conn,"UPDATE patient set userid='" . $_POST['userid'] . "', first_name='" 
    //     . $_POST['first_name'] . "', last_name='" . $_POST['last_name'] . "', city_name='" 
    //     . $_POST['city_name'] . "' ,email='" . $_POST['email'] . "' WHERE userid='" . $_POST['userid'] . "'");
    //     $message = "Record Modified Successfully";
    //     }
    //     $result = mysqli_query($conn,"SELECT * FROM employee WHERE userid='" . $_GET['userid'] . "'");
    //     $row= mysqli_fetch_array($result);
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
                <a class="nav-link" href="index.php">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="patient.php">Add Patient</a>
              </li>
  
              <li class="nav-item active">
                <a class="nav-link" href="searchDB.php">Search / Update Database</a>
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
            <h1>Update Database</h1>
            <p><a href="index.html">Home</a> / <span>Update Database</span></p>
          </div>
        </div>
      </div>
    </div>

<div class="testbox">
      <form action="" method ="post">
        <div class="banner1">
          <h1 class ="form1">Update Patient Information</h1>
        </div>
        <br/>
          <!-- <legend>Patient Information</legend> -->
          <div class="item">
            <label for="patFirst"> First Name<span>*</span></label>
            <input id="fnpatFirstame" type="text" name="patFirst" value="<?php echo $row['first_name']; ?>" required/>
          </div>
          <div class="item">
            <label for="patLast"> Last Name<span>*</span></label>
            <input id="patLast" type="text" name="patLast" value="<?php echo $row['last_name']; ?>"required/>
          </div>
          <div class="item">
            <label for="age">Age<span class ="qspan">*</span></label>
            <input id="age" type="text" name="age" value="<?php echo $row['age']; ?>"required/>
          </div>
          <div class="question">
            <label>Gender<span class = "qspan">*</span></label>
            <div class="question-answer">
              <div>
                <input type="radio" value="M" id="radio_1" name="gender" value="0" <?=($row['gender'] == "M")?'checked':''?> required/>
                <label for="radio_1" class="radio"><span class ="ans">Male</span></label>
              </div>
              <div>
                <input  type="radio" value="F" id="radio_2" name="gender" value="0" <?=($row['gender'] == "F")?'checked':''?>/>
                <label for="radio_2" class="radio"><span class ="ans">Female</span></label>
              </div>
            </div>
          </div>

            <div class="item">
            <p>Center <span class ="qspan">*</span></p>
            <select required name="center">
              <option selected value="" disabled selected></option>
              <option value="1" value="0" <?=($row['center_id'] == 1)?'selected':''?>>CVS Pharmacy</option>
              <option value="2" value="0" <?=($row['center_id'] == 2)?'selected':''?>>Ontario Clinic</option>
              <option value="3" value="0" <?=($row['center_id'] == 3)?'selected':''?>>Mexico City Clinic</option>
              <option value="4" value="0" <?=($row['center_id'] == 4)?'selected':''?>>Paris Clinic</option>
              <option value="5" value="0" <?=($row['center_id'] == 5)?'selected':''?>>Great Britain Clinic</option>
              <option value="6" value="0" <?=($row['center_id'] == 6)?'selected':''?>>Moscow Clinic</option>
              <option value="7" value="0" <?=($row['center_id'] == 7)?'selected':''?> >Beijing Clinic</option>
              <option value="8" value="0" <?=($row['center_id'] == 8)?'selected':''?>> South Africa Clinic</option>
              <option value="9" value="0" <?=($row['center_id'] == 9)?'selected':''?>>Rio Clinic</option>
              <option value="10" value="0" <?=($row['center_id'] == 10)?'selected':''?>>Sydney Clinic</option>
            </select>
          </div>
          <div class="item">
            <p>Vaccine Manufacturer <span class ="qspan">*</span></p>
            <select name="manu"required>
              <option selected value="" disabled selected></option>
              <option value="2" value="0" <?=($row['vaccine_manufacturer_id'] == 2)?'selected':''?>>Moderna</option>
              <option value="1" value="0" <?=($row['vaccine_manufacturer_id'] == 1)?'selected':''?>>Pfizer</option>
              <option value="3" value="0" <?=($row['vaccine_manufacturer_id'] == 3)?'selected':''?>>Johnson & Johnson</option>
            </select>
          </div>

          <div class="question">
            <label>Dosage Number <span class ="qspan">*</span></label>
            <div class="question-answer">
              <div>
                <input type="radio" value="1" id="radio_3" name="dosage" value="0" <?=($row['dosage_no'] == 1)?'checked':''?>/>
                <label for="radio_3" class="radio"><span class ="ans">1</span></label>
              </div>
              <div>
                <input  type="radio" value="2" id="radio_4" name="dosage" value="0" <?=($row['dosage_no'] == 2)?'checked':''?>/>
                <label for="radio_4" class="radio"><span class ="ans">2</span></label>
              </div>
            </div>
          </div>
          <div class="btn-block">
        <button type="submit" href="searchDB.php">Submit</button> 
        </div>
    </form>
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
