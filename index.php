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
                <a href="#modal-song" data-bs-toggle="modal" class="btn btn-modal" onclick="addSong()">Add New Song</a>
            </div>
        </div>
        <!-- TASK MODAL -->
        <?php
            include("include/model.php");
        ?>

        <table id="data-table" class="display dataTable" style="width: 100%" aria-describedby="example_info">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Artist</th>
                    <th>Album</th>
                    <th>Time</th>
                    <th>Lyrics</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                    <tr class="odd">
                        <td class="sorting_1"></td>
                        <td class=""></td>
                        <td class=""></td>
                        <td class=""></td>
                        <td class=""></td>
                        <td>
                            <div class="d-flex fs-3">
                                <a href="#modal-song" data-bs-toggle="modal" class="btn btn-warning me-3" onclick="editSong()"><i class="bi bi-pencil-square users-icon text-white"></i></a>
                                <a href="" class="btn btn-danger text-dark"><i class="bi bi-trash3 users-icon text-white"></i></a>
                            </div>
                        </td>
                    </tr>
            </tbody>
        </table>
    </main> 
    <!-- ================== BEGIN core-js ================== -->
    <?php
        include("include/scripts.php");
    ?>
	<!-- ================== END core-js ================== -->
</body>
</html>