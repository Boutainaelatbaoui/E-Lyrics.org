<!DOCTYPE html>
<html lang="en">
<?php
    $title = "Dashboard | E-Lyrics";
    include("include/head.php");
    ?>
<body class="dash-body">
    <!-- BEGIN navbar -->
    <?php
        include("include/navbar.php");
    ?>
    <!-- END navbar -->
    <!-- BEGIN Offcanvas -->
    <?php
        include("include/sidebar.php");
    ?>
    <!-- END Offcanvas -->
    <main class="">
        <div class="card welcome-card text-center bx-shadow">
            <div class="card-style"></div>
            <div class="card-body box-card">
                <div class="card-title">
                    <span class="logo">
                        E-Lyrics<span class="logo-point">...</span>
                    </span>
                </div>
                <div class="card-text mb-4">
                    <h4 class="mt-1 fw-bolder">Welcome back <i class="bi bi-quote"></i>Boutaina El Atbaoui<i class="bi bi-quote"></i> <span>&#128075;</span></h4>
                </div>
                <a href="#modal-song" data-bs-toggle="modal" class="btn btn-modal">Add New Song</a>
            </div>
        </div>
        <!-- TASK MODAL -->
        <?php
            include("include/model.php");
        ?>
    </main> 
</body>
</html>