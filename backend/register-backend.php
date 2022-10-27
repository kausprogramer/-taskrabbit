<?php
    include '../config.php';
    if(isset($_POST["register"]))
    {
        if((isset($_POST["full_name"])) && (isset($_POST["email"])) && (isset($_POST["password"])))
        {
            $key='mykey';
            $full_name=$_POST["full_name"];
            $email=$_POST["email"];
            $number=$_POST["number"];
            $password=hash_hmac('sha256',$_POST["password"],$key);   
            $email_check=mysqli_num_rows(mysqli_query($conn,"SELECT email FROM `users` WHERE email = '$email'"));

            if($email_check==0)
            {
            
                $sql= "INSERT INTO `users`(`full_name`, `email`, `password`,`number`) VALUES ('$full_name','$email','$password','$number')";
                $result=mysqli_query($conn, $sql);
                if($result)
                {
                    // echo"<script>alert('Registered successfully');</script>";
                    header("location:../login.php");
                    // header("Location: index.php");
                }
                else
                {
                    // echo"<script>alert('Registeration Unsuccessful');</script>";
                    header("location:../login.php");
                }
            }
            else{
                // echo "<script>alert('Email already registered!')</script>";   
                header("location:../register.php?email_check=1.php");
            }
        }
        else
        {
            echo"<script>alert('Fill All The Fields Of The Form');</script>";
        }
    }

?>