<?php
include 'layout/function.php';

$id = $_GET['id'];

$user = new user();

if($user->deleteStudentByid($id)){
    header('location:view.php');
}
?>