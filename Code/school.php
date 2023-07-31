<?php
include 'layout/header.php';
include 'layout/code.php';    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School</title>
</head>
<body>
<section style="background-color: #8fc4b7;height: 1250px;">
  <div class="container py-5 h-100" style="margin-top: -20px;">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-8 col-xl-6">
        <div class="card rounded-3">
          <img src="img/img3.webp"
            class="w-100" style="border-top-left-radius: .3rem; border-top-right-radius: .3rem;"
            alt="Sample photo">
          <div class="card-body p-4 p-md-5 school-card">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">School Registration</h3>
            <?php if (isset($_SESSION['response'])) { ?>
                    <div class="alert alert-<?php echo $_SESSION['res_type']; ?>">
                        <?php echo $_SESSION['response']; ?>
                    </div>
                    <?php unset($_SESSION['response']); ?>
            <?php } ?> 
            <form action="layout/code.php" id="school" method="post">
              <div class="form-outline mb-3">
                <label class="form-label" for="name">School Name</label>
                <input type="text" id="name" name="name" class="form-control" />
                <label for="name" type="hidden" class="error mb-3"></label>
              </div>

              <div class="form-outline mb-3">
                    <label class="form-label">Your Email <span class="required-star">*</span></label>  
                    <input type="text" name="email" name="email" class="form-control"/>
                    <label for="email" class="error"></label>
              </div>

              <div class="form-outline mb-3">
                   <label class="form-label" for="pass">Password <span class="required-star">*</span></label>  
                   <input type="password" id="pass" name="pass" id="pass" class="form-control">
                   <label for="pass" class="error"></label>
              </div>

              <div class="form-outline mb-3">
                  <label class="form-label" for="add">Address</label>
                  <input type="text" id="add" name="add" class="form-control " />
                  <label for="add" class="error"></label>
              </div>

              <div class="form-outline mb-3">
                  <label class="form-label" for="monumber">Mobile Number</label>
                  <input type="text" id="monumber" name="monumber" class="form-control " />
                  <label for="monumber" class="error"></label>
              </div>

              <div class="form-outline mb-3">
                <label class="form-label" for="pname">Principal Name</label>
                <input type="text" id="pname" name="pname" class="form-control " />
              </div>

              <button type="submit" name="school_submit" class="btn btn-success btn-lg mb-4">Submit</button>

            </form>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>   
<?php include 'layout/footer.php'; ?>
</body>
</html>