<?php
    include_once 'db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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
        $pat_first = mysqli_real_escape_string($conn, $_REQUEST['patFirst']);
        $pat_last = mysqli_real_escape_string($conn, $_REQUEST['patLast']);
        // $age = mysqli_real_escape_string($conn, $_REQUEST['age']);
        // $gender = mysqli_real_escape_string($conn, $_REQUEST['gender']);

        $sql = "INSERT INTO patient (first_name, last_name) VALUES ('$pat_first', '$pat_last')";
        if(mysqli_query($conn, $sql)){
            echo "Records added successfully.";
        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
        }
        
        // Close connection
        mysqli_close($conn);

    
 
   
   ?>

    
</body>
</html>