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
        <?php
        include_once 'code/lyrics.php';
        $songs = new Lyrics();
        ?>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-4 mt-5">
            <div class="col mb-3">
                <div class="card card-statis">
                    <div class="card-body d-flex flex-row justify-content-around align-items-center mt-3 mb-3">
                        <div><i class="bi bi-people fs-2 text-center"></i></div>
                        <div class="text-truncate">
                            <h5 class="card-title">Total Admins</h5>
                            <p class="card-text fs-5"><?php echo ($songs->statisticsCount('id', 'admins')['count']); ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mb-3">
                <div class="card card-statis">
                    <div class="card-body d-flex flex-row justify-content-around align-items-center mt-3 mb-3">
                        <div><i class="bi bi-person-square fs-2 text-center"></i></div>
                        <div class="text-truncate">
                            <h5 class="card-title">Total Artists</h5>
                            <p class="card-text fs-5"></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mb-3">
                <div class="card card-statis">
                    <div class="card-body d-flex flex-row justify-content-around align-items-center mt-3 mb-3">
                        <div><i class="bi bi-blockquote-right fs-2"></i></div>
                        <div class="text-truncate">
                            <h5 class="card-title">Total Titles</h5>
                            <p class="card-text fs-5"></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card card-statis">
                    <div class="card-body d-flex flex-row justify-content-around align-items-center mt-3 mb-3">
                        <div><i class="bi bi-disc fs-2"></i></div>
                        <div class="text-truncate">
                            <h5 class="card-title">Total Albums</h5>
                            <p class="card-text fs-5"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- ================== BEGIN core-js ================== -->
    <?php
    include("include/scripts.php");
    ?>
    <!-- ================== END core-js ================== -->
</body>

</html>