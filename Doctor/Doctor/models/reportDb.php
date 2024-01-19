<?php 
    require_once('db.php');

    function add($a){
        $con = getConnection();
        $sql = "insert into report values('', '{$a['name']}', '{$a['test']}', '{$a['disease']}','{$a['review']}')";
        $status = mysqli_query($con, $sql);
        if($status !=null)
        {
            return true;
        }
         else 
         return false;
    }

    function getReport()
    {
        $con = getConnection();
        $sql = "select * from report";
        $status = mysqli_query($con, $sql);
        return $status;
    }


    function update($a)
    {
        $con = getConnection();
        $sql="update report set name='{$a['name']}', test='{$a['test']}', disease='{$a['disease']}', review='{$a['review']}' where id='{$a['id']}'";
       
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

    function Report_info($id)
    {
        $con = getConnection();
        $sql = "select * from report where id='{$id}'";
        $status = mysqli_query($con, $sql);
        $row=mysqli_fetch_assoc($status);
        return $row;

    }

    

?>