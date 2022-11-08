<?php
include_once("../config.php");
session_start();
if(isset($_POST["submit"]))
{
    if($_POST["old_pass"]==$_SESSION["password"])
    {
        $new_pass=$_POST["new_pass"];
        $id=$_SESSION["id"];
        if($_POST["new_pass"]==$_POST["conf_new_pass"])
        {
            $sql="UPDATE `users` SET `password`='$new_pass' WHERE id=$id";
            $result=mysqli_query($conn, $sql);
                if($result)
                {
                    echo "<script>alert('Password changed');</script>";
                    header("location:../pass_reset.php");
                }
        }
        else
        {
            echo "<script>alert('Password not same');</script>";
            header("location:../pass_reset.php");
        }
    }
    else
    {
        echo"<script>alert('Wrong Old Password');</script>";
        header("location:../pass_reset.php");
    }
}
?>