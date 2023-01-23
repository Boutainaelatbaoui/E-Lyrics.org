<!DOCTYPE html>
<html lang="en">
<?php
    $title = "Login | E-Lyrics";
    include("include/head.php");
    include('code/admin.php'); 
    if(isset($_SESSION['name'])){
        header('location: index.php');
    }
?>
<body>
    <section class="vh-100">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col">
                        <div class="card-form mb-3 m-auto">
                            <div class="row">
                                <div class="col second-card">
                                    <div class="mx-5">
                                    <div class="d-flex justify-content-center align-items-center mt-3 mb-4">
                                            <span class="logo">
                                                E-Lyrics<span class="logo-point">...</span>
                                            </span>
                                    </div>
                                    <div class="text-center mb-5">
                                        <div>
                                            <h4 class="login-text">Hey, Hello <span>&#128075;</span></h4>
                                        </div>
                                        <div>
                                            <h5 class="login-detail">Please Enter Your Details</h5>
                                        </div>
                                    </div>
                                    <?php if (isset($_SESSION['message'])): ?>
                                        <div class="alert alert-info alert-dismissible fade show" role="alert">
                                        <strong>Success!</strong>
                                            <?php 
                                                echo $_SESSION['message']; 
                                                unset($_SESSION['message']);
                                            ?>
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>
                                        <?php elseif (isset($_SESSION['message1'])): ?>
                                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                        <strong>warning!</strong>
                                            <?php 
                                                echo $_SESSION['message1']; 
                                                unset($_SESSION['message1']);
                                            ?>
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>
                                    <?php endif ?>
                                    <form class="card-form" action="./code/admincontroller.php" method="POST" novalidate>
                                        <div class="mb-3">
                                            <label for="email" class="form-label">Email address</label>
                                            <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
                                            <div id="email-validation" class="validation"></div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="password" class="form-label">Password</label>
                                            <input type="password" name="password" class="form-control" id="password">
                                            <div id="password-validation" class="validation"></div>
                                        </div>
                                        <div class="d-grid d-block mb-4">
                                            <button type="submit" name="login" class="btn main-btn text-white" id="login">Sign in</button>
                                        </div>
                                    </form>
                                    <p class="mb-3 text-center text-form fs-6 mb-3">Don't have an account? <button class="btn second-btn btn-sm">
                                            <a href="registration.php" class="text-decoration-none text-white text-center">Sign Up</a></button></p>
                                    </div>
                                </div>
                                <div class="col d-none d-lg-block">
                                    <img src="assets/image/lyrics-3.jpg" class="img-fluid img-form" id="img" alt="Music" min-height="200px">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script src="./assets/js/validationLogin.js"></script>
</body>
</html>