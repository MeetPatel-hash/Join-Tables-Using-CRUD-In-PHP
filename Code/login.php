<?php
include 'layout/header.php';
include 'layout/code.php';    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <div class="wrapper">
        <div class="logo">
            <img src="https://www.freepnglogos.com/uploads/google-logo-png/google-logo-png-logo-google-image-pixabay-6.png" alt="">
        </div>
        <div class="text-center mt-4 name">Login</div>
        <?php if (isset($_SESSION['response'])) { ?>
            <div class="alert alert-<?php echo $_SESSION['res_type']; ?>">
                <?php echo $_SESSION['response']; ?>
            </div>
            <?php unset($_SESSION['response']); ?>
        <?php } ?> 
        <form action="layout/code.php" id="login" method="post">
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="text" name="loginemail" id="loginemail" placeholder="Email">
            </div>
            <label for="loginemail" class="error"></label>
            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key"></span>
                <input type="password" name="loginpass" id="loginpass" placeholder="Password">
            </div>
            <label for="loginpass" class="error"></label>
            <button type="submit" name="login" class="btn mt-3">Login</button>
        </form>
        <div class="text-center fs-6">
            <a href="#">Forget password?</a> or <a href="students.php">Sign up</a>
        </div>
    </div>
<?php include 'layout/footer.php'; ?>
</body>
</html>