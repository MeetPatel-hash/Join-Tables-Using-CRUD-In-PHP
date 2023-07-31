<?php
session_start();
require_once 'header.php';
include 'function.php';

$user = new user();

// Student Registration page
if (isset($_POST['student_submit'])) {  
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $email = $_POST['email'];
  $gender = isset($_POST['gender']) ? $_POST['gender'] : '';
  $age = $_POST['age'];
  $number = $_POST['monumber'];
  $address = isset($_POST['add']) ? $_POST['add'] : '';
  $school = $_POST['school'];
  $dob = date("Y-m-d", strtotime($_POST['dob']));    
       
    if($fname == ''|| $lname == '' || $email == '' || $gender == '' ||$age == '' || $number == '' || $address == '' || $school == '0'){
      $_SESSION['response'] = "Please fill required field!";
      $_SESSION['res_type'] = "danger";
      header('location:../students.php');
    }else{
      $query = $user->emailStudentsearch($email);
    
      $emailcount = $query->num_rows;
    
      if($emailcount > 0){
        $_SESSION['response'] = "Email already exits";
        $_SESSION['res_type'] = "danger";
        header('location:../students.php');
      }else{
          $sql=$user->insertStudent($fname,$lname,$email,$gender,$age,$dob,$address,$number,$school);
          $last_id =mysqli_insert_id($user->mysqli);
  
          if($sql){
              $user_query = $user->studentSearchbyid($last_id);
              $user_fetch = $user_query->fetch_assoc();
              $_SESSION['response'] ="Hi, ".$user_fetch['first_name'] ." ". $user_fetch['last_name']." Your account is create.";
              $_SESSION['res_type'] = "success";
            header('location:../students.php');
          }else{
              echo $user->mysqli->error;
          }
      } 
  }   
      
}

//School Registration page
if (isset($_POST['school_submit'])) {  
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['pass'];
    $pass =password_hash($password,PASSWORD_BCRYPT);
    $monumber = $_POST['monumber'];
    $add = $_POST['add'];
    $pname = $_POST['pname'];
      
      if($name == ''|| $email == '' || $password == '' || $monumber == '' ||$add == '' || $pname == ''){
        $_SESSION['response'] = "Please fill required field!";
        $_SESSION['res_type'] = "danger";
        header('location:../school.php');
      }else{
        $query = $user->emailSchoolsearch($email);
      
        $emailcount = $query->num_rows;
      
        if($emailcount > 0){
          $_SESSION['response'] = "Email already exits";
          $_SESSION['res_type'] = "danger";
          header('location:../school.php');
        }else{
            $sql=$user->insertSchool($name,$email,$pass,$add,$monumber,$pname);
            $last_id =mysqli_insert_id($user->mysqli);
    
            if($sql){
                $user_query = $user->SchoolSearchbyid($last_id);
                $user_fetch = $user_query->fetch_assoc();
                $_SESSION['schoolname'] = $user_fetch['name'];
                $_SESSION['response'] = "Hi, ".$_SESSION['schoolname']." Your account is create.";
                $_SESSION['res_type'] = "success";
                header('location:../school.php');
            }else{
                echo $user->mysqli->error;
            }
        } 
    }           
}

//Login Page
if(isset($_POST['login'])){
    $email = $_POST['loginemail'];
    $password = $_POST['loginpass'];
    $query = $user->loginSchoolemail($email);
    $email_count = $query -> num_rows;

    if($email =='' && $password ==''){
      $_SESSION['response'] = "Please enter email or password";
      $_SESSION['res_type'] = "danger";
      header('location:../login.php');
    }else{
        if($email =='' || $password ==''){
          $_SESSION['response'] = "Please enter valid email or password";
          $_SESSION['res_type'] = "danger";
          header('location:../login.php');
        }else{
            if($email_count){
                $email_pass = $query -> fetch_assoc();
                $_SESSION['loginschoolname'] = $email_pass['school_id'];
                $last_id = $email_pass['id'];  
                $db_pass= $email_pass['password'];
                $pass_decode= password_verify($password,$db_pass);
                    if($pass_decode){  
                      header('location:../view.php');
                    }else{
                      $_SESSION['response'] = "Please enter valid password.";
                      $_SESSION['res_type'] = "danger";
                      header('location:../login.php');
                    }     
            }else{
              $_SESSION['response'] = "Please enter valid email.";
              $_SESSION['res_type'] = "danger";
              header('location:../login.php');
            }
        }
    }
}

//Update Student page
if (isset($_POST['update_student'])) {  
  $id = $_POST['id'];
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $email = $_POST['email'];
  $gender = isset($_POST['gender']) ? $_POST['gender'] : '';
  $age = $_POST['age'];
  $number = $_POST['monumber'];
  $address = isset($_POST['add']) ? $_POST['add'] : '';
  $school = $_POST['school'];
  $dob = date("Y-m-d", strtotime($_POST['dob']));    
       
    if($fname == ''|| $lname == '' || $email == '' || $gender == '' ||$age == '' || $number == '' || $address == '' || $school == '0'){
      $_SESSION['response'] = "Please fill required field!";
      $_SESSION['res_type'] = "danger";
      header('location:../update.php?id='.$id);
    }else{
      $query = $user->emailStudentsearch($email);
    
      $emailcount = $query->num_rows;
    
      if($_SESSION['studentemail'] == $email || !$emailcount){
        $sql = $user->updateStudent($fname,$lname,$email,$gender,$age,$dob,$address,$number,$school,$id);
      }else{
        $_SESSION['response'] = "Email is already exit";
        $_SESSION['res_type'] = "danger";
        header('location:../update.php?id='.$id);
      }
    
      if($sql){
            header('location:../view.php');
      }else{
        echo $user->mysqli ->error;
      }
    }        
}




?>