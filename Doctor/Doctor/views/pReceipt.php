<?php
session_start();

  // Retrieve values from $_POST
  $name = $_POST['name'];
  $gender = $_POST['gender'];
  $dob = $_POST['dob'];
  $disease = $_POST['disease'];
  $medical_history = $_POST['medical_history'];
  $lab_result = $_POST['lab_result'];
  $action = $_POST['action'];
//   $result = getTotal();
  // Retrieve other form values

  // Generate HTML code for Receipt
  $html = "
    <h2>Check</h2>
    <p>Name: $name</p>
    <p>Gender: $gender</p>
    <p>Date of Birth: $dob</p>
    <p>Disease: $disease</p>
    <p>Medical History: $medical_history</p>
    <p>Lab Result: $lab_result</p>
    <p>Action: $action</p>
 
    
  ";

  // Echo generated HTML code
  echo $html;
?>
