<?php

    $link = mysqli_connect("localhost", "root", "", );


    if($link === false){
        die("Error: Could not connect" . mysqli_connect_error());
    }

    $pat_first = mysqli_real_escape_string($link, $_REQUEST['pat_last']);
    $pat_last = mysqli_real_escape_string($link, $_REQUEST['pat_last']);
    $age = mysqli_real_escape_string($link, $_REQUEST['age']);
    $gender = mysqli_real_escape_string($link, $_REQUEST['gender']);
    $date = mysqli_real_escape_string($link, $_REQUEST['date']);
    $center = mysqli_real_escape_string($link, $_REQUEST['center']);
    $manu = mysqli_real_escape_string($link, $_REQUEST['manu']);
    $doc_first = mysqli_real_escape_string($link, $_REQUEST['doc_first']);
    $doc_last = mysqli_real_escape_string($link, $_REQUEST['doc_last']);
    $dosage = mysqli_real_escape_string($link, $_REQUEST['dosage']);

    echo $pat_first;
    echo $pat_last;
    echo $age;
    echo $gender;
    echo $date;
    echo $center;
    echo $manu;
    echo $doc_first;
    echo $doc_last;
    echo $dosage;
    
?>