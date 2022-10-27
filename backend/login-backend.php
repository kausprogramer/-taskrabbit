<?php
include_once("../config.php");
session_start();
if(isset($_POST["login"]))
{
    if((isset($_POST["email"])) && (isset($_POST["password"])))
        {
            $key='mykey';
            $email=$_POST["email"];
            $password=hash_hmac('sha256',$_POST["password"],$key);   
            $email_check=mysqli_num_rows(mysqli_query($conn,"SELECT `email` FROM `users` WHERE email='$email'"));
            if($email_check==0)
            {
                // echo"<script>alert('Email Not Registered');</script>";
                header("Location: ../login.php?email_check=1");
            }
            else
            {
                $sql="SELECT * FROM `users` WHERE email='$email'";
                $result = mysqli_query($conn, $sql);
                $row=mysqli_fetch_assoc($result);
                
                if($email==$row['email'])
                {
                    if(!strcmp($password,$row['password']))
                    {
                        $_SESSION['username']=$row['email'];
                        $_SESSION["id"]=$row["id"];
                        $_SESSION["full_name"]=$row["full_name"];
                        $_SESSION["number"]=$row["number"];
                        header("Location:../index.php");
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
                    echo"<script>alert('incorrect email');</script>";
                }
            }
        }
}
?>