<?php 
    require_once('db.php');

    function add($a){
        $con = getConnection();
        $sql = "insert into prescription values('', '{$a['name']}', '{$a['test']}', '{$a['disease']}','{$a['medicine']}')";
        $status = mysqli_query($con, $sql);
        if($status !=null)
        {
            return true;
        }
         else 
         return false;
    }

    function getPrescription()
    {
        $con = getConnection();
        $sql = "select * from prescription";
        $status = mysqli_query($con, $sql);
        return $status;
    }

    function Prescription_info($id)
    {
        $con = getConnection();
        $sql = "select * from prescription where id='{$id}'";
        $status = mysqli_query($con, $sql);
        $row=mysqli_fetch_assoc($status);
        return $row;

    }

    function update($a)
    {
        $con = getConnection();
        $sql="update prescription set name='{$a['name']}', test='{$a['test']}', disease='{$a['disease']}', medicine='{$a['medicine']}' where id='{$a['id']}'";
       
        $status = mysqli_query($con, $sql);
        if($status !=null)
        {
            return true;
        }
         else 
         return false;

    }

    function delete($id)
    {
       
            $con = getConnection();
            $sql="DELETE FROM `prescription` WHERE `id` = {$id}";
            
            return mysqli_query($con, $sql);

    }

?>