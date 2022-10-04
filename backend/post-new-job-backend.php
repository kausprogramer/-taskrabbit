<?php
session_start();
include_once("../config.php");

if(isset($_POST["submit"]))
{   
    $job_title=$_POST["job_title"];
    $job_description=$_POST["job_description"];
    $job_catagory=$_POST["job_catagory"];
    $job_type=$_POST["job_type"];
    $job_level=$_POST["job_level"];
    $salary_from=$_POST["salary_from"];
    $salary_to=$_POST["salary_to"];
    $salary_postfix=$_POST["salary_postfix"];
    $job_url=$_POST["job_url"];
    $email=$_POST["email"];
    $deadline=$_POST["deadline"];
    $location=$_POST["location"];
    $id=$_SESSION["id"];
    $sql="INSERT INTO `jobs`(`owner_id`, `job_title`, `job_description`, `job_catagory`, `job_type`, `job_level`, `salary_from`, `salary_to`, `salary_postfix`, `url`, `email`, `deadline`, `location`) VALUES ('$id',`$job_title`, `$job_description`, `$job_catagory`, `$job_type`, `$job_level`, `$salary_from`, `$salary_to`, `$salary_postfix`, `$job_url`, `$email`, `$deadline`, `$location`)";
    $result=mysqli_query($conn, $sql);
    if($result)
    {
        header("location:../jobs.php");
    }
    else{
        echo $id;
    }
}
?>