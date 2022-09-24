<?php
include_once("../config.php");
session_start();
if(isset($_POST["login"]))
{
    if((isset($_POST["full_name"])) && (isset($_POST["email"])) && (isset($_POST["password"])))
        {
            $key='mykey';
            $full_name=$_POST["full_name"];
            $email=$_POST["email"];
            $password=hash_hmac('sha256',$_POST["password"],$key);   
            $email_check=mysqli_num_rows(mysqli_query($conn,"SELECT `email` FROM `login` WHERE email='$email'"));
            if($email_check==0)
            {
                echo"<script>alert('Email Not Registered');</script>";
            }
            else
            {
                $sql="SELECT * FROM `login` WHERE email='$email'";
                $result = mysqli_query($conn, $sql);
                $row=mysqli_fetch_assoc($result);
                if($full_name==$row['full_name'])
                {
                    if(!strcmp($password,$row['password']))
                    {
                        header("Location:../dashboard.php");
                        die;
                    }
                    else
                    {
                        echo"<script>alert('Incorrect Username or Password');</script>";
                        echo $email;
                        echo "<br>";
                        echo $full_name;
                        echo "<br>";
                        echo $password;
                    }
                }
                else
                {
                    echo"<script>alert('incorrect username');</script>";
                }
            }
        }
}
?>