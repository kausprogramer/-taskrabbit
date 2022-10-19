<?php 
session_start();
include_once "../config.php";

$job_title = $_POST['job_title'];
$salary = $_POST['salary'];
$industry = $_POST['industry'];
$category = $_POST['category'];
$job_type = $_POST['job_type'];

$address = $_POST['address'];
$city = $_POST['city'];
$state = $_POST['state'];
$country = $_POST['country'];
$zip = $_POST['zip_code'];
$telephone = $_POST['telephone'];
$email = $_POST['email'];

$job_responsibilities = $_POST['job_respon'];

$skill_requirments = $_POST['skills'];

// echo $job_title. "<br>". $salary. "<br>". $industry. "<br>". $category. "<br>". $job_type. "<br>". $address. "<br>". $city. "<br>". $state. "<br>". $country. "<br>". $zip. "<br>". $telephone. "<br>". $email. "<br>". $job_responsibilities. "<br>". $skill_requirments;

$sql = "INSERT INTO jobs (job_title, salary, industry, category, job_type, address, city, state, country, zip_code, telephone, email, job_responsibilities, skill_requirments,by_user) VALUES ('$job_title', '$salary', '$industry', '$category', '$job_type', '$address', '$city', '$state', '$country', '$zip', '$telephone', '$email', '$job_responsibilities', '$skill_requirments','$_SESSION[id]')";
// echo "<br>".$sql;
$result = mysqli_query($conn, $sql);
// echo "<br>".$result;

header("Location: ../dashboard.php");
?>