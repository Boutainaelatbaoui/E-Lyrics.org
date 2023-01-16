<!DOCTYPE html>
<html lang="en">
<?php
    $title = "Sign Up | E-Lyrics";
    include("include/head.php");
    ?>
<body>
    <section class="vh-100">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col">
                        <div class="card-form mb-3 m-auto">
                            <div class="row">
                                <div class="col">
                                    <img src="assets/image/lyrics-2.jpg" class="img-fluid img-form" id="img" alt="Music" min-height="200px">
                                </div>
                                <div class="col second-card">
                                    <div class="mx-5">
                                    <div class="d-flex justify-content-center align-items-center mt-3 mb-4">
                                            <span class="logo">
                                                E-Lyrics<span class="logo-point">...</span>
                                            </span>
                                    </div>
                                    <form class="card-form">
                                        <div class="mb-3">
                                            <label for="user-name" class="form-label">Name</label>
                                            <input type="text" name="username" class="form-control" id="user-name">
                                        </div>
                                        <div class="mb-3">
                                            <label for="email" class="form-label">Email address</label>
                                            <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
                                        </div>
                                        <div class="mb-3">
                                            <label for="password" class="form-label">Password</label>
                                            <input type="password" name="password" class="form-control" id="password">
                                        </div>
                                        <div class="mb-4">
                                            <label for="confirm-password" class="form-label">Repeat your password</label>
                                            <input type="password" name="confirm-password" class="form-control" id="confirm-password">
                                        </div>
                                        <div class="d-grid d-block mb-4 text-center">
                                            <button type="submit" name="sign" class="btn main-btn text-white">Create account</button>
                                        </div>
                                    </form>
                                    <p class="mb-3 text-center text-form">Already have an account? <button class="btn second-btn btn-sm">
                                            <a href="login.php" class="text-decoration-none text-white text-center">Login</a></button></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
</body>
</html>