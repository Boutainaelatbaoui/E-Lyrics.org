<?php
        session_start();
        if(!isset($_SESSION['name'])){
            header('location: login.php');
        }
?>
<nav class="navbar navbar-expand-lg fixed-top">
        <div class="container-fluid">
            <!-- offcanvas trigger -->
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                <span class="navbar-toggler-icon" data-bs-target="#offcanvasExample"></span>
            </button>
            <!-- offcanvas trigger -->
            <a class="navbar-brand" href="index.php">
                <span class="logo-dash">
                    E-Lyrics<span class="point-dash">...</span>
                </span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse mt-3 mt-lg-1" id="navbarSupportedContent">
                <ul class="navbar-nav d-flex ms-auto">
                    <!-- <li class="nav-item">
                        <form class="d-flex ms-auto" role="search">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="button-addon2">
                                        <button class="btn btn-outline-danger text-white" type="button" id="button-addon2"><i class="bi bi-search"></i></button>
                                    </div>
                        </form>
                    </li> -->
                    <li class="nav-item dropdown">
                    <a class="nav-link text-white fw-bold mt-2" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <div class="d-flex flex-row mt-2 mt-lg-0">
                            <i class="bi bi-envelope icon-nav fs-4 fw-bolder me-3 me-lg-0"></i>
                            <p class="d-block d-lg-none text-icon mt-2">Messages</p>
                        </div>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-light text-muted">
                        <li><a class="dropdown-item" href="#">Test</a></li>
                        <li><a class="dropdown-item" href="#">Test</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link text-white fw-bold ms-0 ms-lg-3 mt-0 mt-lg-2" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <div class="d-flex flex-row">
                            <i class="bi bi-bell icon-nav fs-4 fw-bolder me-3 me-lg-0"></i>
                            <p class="d-block d-lg-none text-icon mt-2">Notifications</p>
                        </div>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-light text-muted">
                        <li><a class="dropdown-item" href="#">Test</a></li>
                        <li><a class="dropdown-item" href="#">Test</a></li>
                    </ul>
                </li>
                    <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-white fw-bold ms-0 ms-lg-3" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-person-circle fs-2 fw-bolder me-1"></i>
                                <?php echo $_SESSION['name']; ?>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="#">Edit Profile</a></li>
                                <li><a class="dropdown-item" href="#">Settings</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <form action="./code/admincontroller.php" method="POST">
                                    <li><button class="dropdown-item" type="submit" name="logout">Log Out</button></li>
                                </form>
                            </ul>
                        </li>
                
                </ul>
            </div>
        </div>
    </nav>