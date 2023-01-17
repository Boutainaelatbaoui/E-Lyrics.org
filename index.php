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
    <div class="offcanvas offcanvas-start sidebar-nav" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header">

        <button type="button" class="btn-close close-offcanvas" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body p-0">
        <nav class="navbar-dark px-4">
            <ul class="navbar-nav sidebar-text mt-4">
                <li>
                    <a href="dashboard.php" class="nav-link active mt-2">
                        <span class="me-4"><i class="bi bi-grid-1x2-fill"></i></span>
                        <span>Dashboard</span>
                    </a>
                </li>
                    <a href="stations.php" class="nav-link active mt-2">
                        <span class="me-4"><i class="bi bi-signpost-2"></i></span>
                        <span>Songs</span>
                    </a>
                </li>
            </ul>
        </nav>
        <div class="position-absolute bottom-0">
            <img src="assets/img/juicy-team-analyzes-graphs-and-diagrams.gif" alt="Team" class="img-fluid img-gif ps-1">
        </div>
    </div>
</div>
    
</body>
</html>