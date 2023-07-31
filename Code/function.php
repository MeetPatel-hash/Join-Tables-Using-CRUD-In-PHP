<?php

class user{

    private $db_host = "localhost";
    private $db_user = "root";
    private $db_pass = "";
    private $db_name = "jeelkalsariya";
    
    public $mysqli ="";
    private $result = array();
    private $conn = false;

    public function __construct(){
        if(!$this->conn){
            $this->mysqli = new mysqli($this->db_host, $this->db_user, $this->db_pass, $this->db_name);
            $this->conn = true;
            if($this->mysqli->connect_error){
                array_push($this->result,$this->mysqli->connect_error);
                return false;
            }                
        }else{
            return true;
        }
    }

    //Student File
    public function schooldata(){
        $result=mysqli_query($this->mysqli,"SELECT * FROM school");
        return $result;
	}

    public function emailStudentsearch($email){
        $result=mysqli_query($this->mysqli,"SELECT * FROM student where email='$email'");
        return $result;
	}

    public function insertStudent($fname,$lname,$email,$gender,$age,$dob,$address,$number,$school){
        $insert=mysqli_query($this->mysqli,"INSERT INTO student (first_name, last_name, email, gender, age, date_of_birth, address, phone_number, school_id) VALUES ('$fname', '$lname', '$email', '$gender', '$age', '$dob', '$address', '$number', '$school')");
        return $insert;
    }

    public function studentSearchbyid($last_id){
        $result=mysqli_query($this->mysqli,"SELECT * FROM student where id = '$last_id'");
        return $result;
	}

    //School File
    public function emailSchoolsearch($email){
        $result=mysqli_query($this->mysqli,"SELECT * FROM school where email='$email'");
        return $result;
	}

    public function insertSchool($name,$email,$pass,$add,$monumber,$pname){
        $insert=mysqli_query($this->mysqli,"INSERT INTO school (name, email, password, address, phone_number, principal_name) VALUES ('$name', '$email', '$pass', '$add', '$monumber', '$pname')");
        return $insert;
    }

    public function SchoolSearchbyid($last_id){
        $result=mysqli_query($this->mysqli,"SELECT * FROM school where school_id = '$last_id'");
        return $result;
	}

    //Login File
    public function loginSchoolemail($email){
        $result=mysqli_query($this->mysqli,"SELECT *FROM school WHERE email='$email'");
        return $result;
    }
    
    // Update File
    public function updateUserSearchByid($id){
        $result=mysqli_query($this->mysqli,"SELECT * FROM student where id = '$id'");
        return $result;
	}
    
    public function fetchSchoolData(){
        $result=mysqli_query($this->mysqli,"SELECT * FROM school");
        return $result;
	}

    public function updateStudent($fname,$lname,$email,$gender,$age,$dob,$address,$number,$school,$id){
        $updaterecord=mysqli_query($this->mysqli,"UPDATE student SET first_name='$fname', last_name='$lname', email='$email', gender='$gender', age='$age', date_of_birth='$dob', address='$address', phone_number='$number', school_id='$school' WHERE id=$id");
        return $updaterecord;
    }
    
    // Delete File
    public function deleteStudentByid($id){
        $deleterecord=mysqli_query($this->mysqli,"DELETE FROM student WHERE id=$id");    
        return $deleterecord;
    }    

    // fetch-results.php
    public function fetchUser($sql){
        $result = mysqli_query($this->mysqli,"$sql")->fetch_all(MYSQLI_ASSOC);;
        return $result;
    }
    
    public function getStudentRecord(){
        $login = $_SESSION['loginschoolname'];
        $result = mysqli_query($this->mysqli,"SELECT COUNT(*) FROM student where school_id = $login ")->fetch_row()[0];
        return $result;
    }

    public function __destruct(){
        if($this->conn){
            if($this->mysqli->close()){
                $this->conn = false;
                return true;
            }
        }else{
            return false;
        }
    }
}

?>