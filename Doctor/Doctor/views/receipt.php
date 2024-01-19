<?php
session_start();

 // Retrieve values from $_POST
 $name = $_POST['name'];
 $gender = $_POST['gender'];
 $degree = $_POST['degree'];
 $field = $_POST['field'];
 $schedule = $_POST['schedule'];
//   $result = getTotal();
 // Retrieve other form values

  // Generate HTML code for receipt
  $html = "
    <h2>Check</h2>
    <p>Name: $name</p>
    <p>Gender: $gender</p>
    <p>Medical Degree: $degree</p>
    <p>Medical Field: $field</p>
    <p>Schedule Time: $schedule</p>
 
    
  ";

  // Echo generated HTML code
  echo $html;
?>


