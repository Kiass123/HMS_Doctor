<?php 
    session_start();
    require_once('../models/prescriptionDB.php');

    if(isset($_REQUEST['update'])){

        $name = $_POST['name'];
        $test = $_POST['test'];
        $disease = $_POST['disease'];
        $medicine = $_POST['medicine'];
        $id=$_POST['id'];
        


        if($name != null && $test != null && $disease != null && $medicine != null )
           
            {
                $a=['id'=>$id,'name'=>$name,'test'=>$test,'disease'=>$disease,'medicine'=>$medicine];
                
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