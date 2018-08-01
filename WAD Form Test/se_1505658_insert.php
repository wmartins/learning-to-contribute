<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "uecs2094_ptest";
$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname) or die($conn->connect_error);
$errors = [];
$request= "";

if(isset($_POST['submit']))
{
  $studentID = $conn->real_escape_string($_POST['studentId']);
  $name = $conn->real_escape_string($_POST['name']);
  $email = $conn->real_escape_string($_POST['email']);
  $name = test_input($name);
  $studentId = test_input($studentID);
  $email = test_input($email);

  if(empty($_POST['name'])||empty($_POST['studentId'])||empty($_POST['email'])){
    array_push($errors,"Please fill out this fields");
  }
  else{
    $name = $conn->real_escape_string($_POST['name']);
    $studentID = $conn->real_escape_string($_POST['studentId']);
    $email = $conn->real_escape_string($_POST['email']);
    $name = test_input($name);
    $studentId = test_input($studentID);
    $email = test_input($email);
    $user_check_query = "SELECT * FROM se_1505408_student WHERE studentId ='$studentId' OR email='$email' LIMIT 1";
    $result = $conn->query($user_check_query);
    if($student = $result->fetch_assoc()){
      if ($student['studentId'] === $studentId) {
        array_push($errors, "Student Id already exists");
      }
      if ($student['email'] === $email) {
        array_push($errors, "Email already exists");
      }
    }
    if(count($errors) ==0){
      $stmt = $conn->prepare("INSERT INTO se_1505408_student(studentId, name, email) VALUES(?,?,?)");
      $stmt->bind_param("sss",$studentId, $name, $email);
      $stmt->execute();
      $request = "The record is entered successfully";
      $conn->close();
    }
  }
}

function test_input($data){
  trim($data);
  stripslashes($data);
  htmlspecialchars($data);
  return $data;
}

 ?>
