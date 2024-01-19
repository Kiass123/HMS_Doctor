<?php 
    session_start();
    require_once('../models/prescriptionDB.php');
    

    if(isset($_REQUEST['yes']))
    {
        $id=$_REQUEST['id'];
        if(delete($id)){
        
        echo "Success";
        
        }
        else{ 
            echo "Error";
        }

    }

    else{
        echo "Invalid";
    }