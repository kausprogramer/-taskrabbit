<?php
    include '../config.php';
    if(isset($_POST["register"]))
    {
        if((isset($_POST["full_name"])) && (isset($_POST["email"])) && (isset($_POST["password"])))
        {
            $key='mykey';
            $full_name=$_POST["full_name"];
            $email=$_POST["email"];
            $password=hash_hmac('sha256',$_POST["password"],$key);   
            $email_check=mysqli_num_rows(mysqli_query($conn,"SELECT email FROM login Where email = '$email'"));

            if($email_check==0)
            {
            
                $sql= "INSERT INTO `login`(`full_name`, `email`, `password`) VALUES ('$full_name','$email','$password')";
                $result=mysqli_query($conn, $sql);
                if($result)
                {
                    echo"<script>alert('Registered successfully');</script>";
                    // header("Location: index.php");
                }
                else
                {
                    echo"<script>alert('Registeration Unsuccessful');</script>";
                }
            }
        }
        else
        {
            echo"<script>alert('Fill All The Fields Of The Form');</script>";
        }
    }
    2
?>