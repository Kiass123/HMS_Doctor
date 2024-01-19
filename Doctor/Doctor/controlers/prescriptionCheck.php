<?php 
    session_start();
    require_once('../models/prescriptionDB.php');

    if(isset($_POST['submit'])){

        $name = $_POST['name'];
        $test = $_POST['test'];
        $disease = $_POST['disease'];
        $medicine = $_POST['medicine'];
       
    


        if($name != null && $test != null && $disease != null && $medicine != null)
           
            {
                $a=['name'=>$name,'test'=>$test,'disease'=>$disease,'medicine'=>$medicine];
                
                add($a);
               
                
                echo "Success!!";

                header('location: ../views/viewPrescription.php');
               
            }
        

     else{
            echo "Please fill up all the information!";
        }
        

    }

    else{
        echo "Invalid";
    }