<?php 
    session_start();
    require_once('../models/reportDb.php');

    if(isset($_REQUEST['update'])){

        $name = $_POST['name'];
        $test = $_POST['test'];
        $disease = $_POST['disease'];
        $review = $_POST['review'];
        $id=$_POST['id'];
        


        if($name != null && $test != null && $disease != null && $review != null )
           
            {
                $a=['id'=>$id,'name'=>$name,'test'=>$test,'disease'=>$disease,'review'=>$review];
                
                update($a);
               
                
                echo "Success!!";
               
            }
        

     else{
            echo "Please fill up all the information!";
        }
        

    }

    else{
        echo "Invalid";
    }