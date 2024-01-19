<?php 
    session_start();
    require_once('../models/reportDb.php');

    if(isset($_POST['submit'])){

        $name = $_POST['name'];
        $test = $_POST['test'];
        $disease = $_POST['disease'];
        $review = $_POST['review'];
       
    


        if($name != null && $test != null && $disease != null && $review != null)
           
            {
                $a=['name'=>$name,'test'=>$test,'disease'=>$disease,'review'=>$review];
                
                add($a);
               
                
                echo "Success!!";
                header('location: ../views/viewReport.php');
               
            }
        

     else{
            echo "Please fill up all the information!";
        }
        

    }

    else{
        echo "Invalid";
    }