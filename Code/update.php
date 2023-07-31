<?php
include 'layout/header.php';
include 'layout/code.php';    

$user = new user();
$id = $_GET['id'];

$result = $user->updateUserSearchByid($id);
$fetch = $result ->fetch_assoc();
$fname = $fetch['first_name'];
$lname = $fetch['last_name'];
$email = $fetch['email'];
$_SESSION['studentemail'] = $email;
$address = $fetch['address'];
$age = $fetch['age'];
$gender = $fetch['gender'];
$pnumber = $fetch['phone_number'];
$dob = $fetch['date_of_birth'];
$school = $fetch['school_id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Student</title>
</head>
<body>
<section class="vh-100 bg-image"
  style="">
  <div class="mask d-flex align-items-center h-150 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card mb-4 mt-4" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Update Student</h2>
              <?php if (isset($_SESSION['response'])) { ?>
                    <div class="alert alert-<?php echo $_SESSION['res_type']; ?>">
                        <?php echo $_SESSION['response']; ?>
                    </div>
                    <?php unset($_SESSION['response']); ?>
                <?php } ?>
              <form action="layout/code.php" id="student" method="post" enctype="multipart/form-data">
                    <div class="row">
                      <div class="col-md-6 mb-4">
                      <input type="hidden" value="<?php echo $id; ?>" name="id">
                        <div class="form-outline">
                          <label class="form-label" for="fname">First name</label>
                          <input type="text" id="fname" name="fname" value="<?php echo $fname; ?>" class="form-control form-control-lg" />    
                          <label for="fname" class="error"></label><br>            
                        </div>
                      </div>
                      <div class="col-md-6 mb-4">
                        <div class="form-outline">
                          <label class="form-label" for="lname">Last name</label>
                          <input type="text" id="lname" name="lname" value="<?php echo $lname; ?>" class="form-control form-control-lg" />
                        </div>
                      </div>
                    </div>

                    <div class="form-outline mb-4">
                      <label class="form-label" for="email">Email ID</label>
                      <input type="text" id="email" name="email" value="<?php echo $email; ?>" class="form-control form-control-lg" />
                    </div>

                    <div class="d-md-flex justify-content-start align-items-center">
                        <h6 class="mb-0 me-4">Gender: </h6>

                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="gender"  <?php if($gender == "female"){ echo "checked";} ?> value="Female" />
                          <label class="form-check-label" for="gender">Female</label>
                        </div>

                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="gender"  <?php if($gender == "male"){ echo "checked";} ?> value="Male" />
                          <label class="form-check-label" for="gender">Male</label>
                        </div>

                        <div class="form-check form-check-inline ">
                          <input class="form-check-input" type="radio" name="gender" <?php if($gender == "other"){ echo "checked";} ?> value="Other" />
                          <label class="form-check-label" for="gender">Other</label>
                        </div><br>
                      
                    </div> <label for="gender" class="error"></label>


                    <div class="form-outline mb-4 mt-3">
                      <label class="form-label" for="age">Age</label>
                      <input type="number" id="age" name="age" value="<?php echo $age; ?>" class="form-control form-control-lg" />
                    </div>

                    <div class="form-outline mb-4">
                      <label class="form-label">Date of Birth<span class="required-star">*</span></label> 
                      <input class="form-control form-control-lg" type="date"  value="<?php echo $dob; ?>" name="dob">
                    </div>

                    <div class="form-outline mb-4">
                      <label class="form-label" for="monumber">Mobile Number</label>
                      <input type="number" id="monumber" name="monumber" value="<?php echo $pnumber; ?>" class="form-control form-control-lg" />
                    </div>
                      
                    <div class="form-outline mb-4">
                      <label class="form-label" for="add">Address</label>
                      <input type="text" id="add" name="add" value="<?php echo $address; ?>" class="form-control form-control-lg" />
                    </div>

                    <div class="form-outline mb-4">
                        <label class="form-label">School : <span class="required-star">*</span></label><br>  
                          <select name="school" class="col-10 form-select" id="country-dropdown">
                            <option value="0">Select</option>
                            <?php
                                $result = $user->fetchSchoolData();
                                while($row = mysqli_fetch_array($result)) {
                            ?>
                                <option value="<?php echo $row['school_id'];?>" <?php if($school == $row['school_id']){ echo "selected";} ?>><?php echo $row['name'];?></option>
                              <?php
                                }
                            ?>
                          </select>
                        <label for="country" class="error"></label>
                    </div>

                    <div class="d-flex justify-content-center pt-1 mb-4">
                      <button type="submit" name="update_student" class="btn btn-warning btn-lg ms-2">Submit</button>
                    </div>
                </form>
            </div>
          </div>
        </div> 
      </div>
    </div>
  </div>
</section>
<?php include 'layout/footer.php'; ?>
</body>
</html>