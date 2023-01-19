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
                    <h4 class="mt-1 fw-bolder">Welcome back <i class="bi bi-quote"></i><?php echo $_SESSION['name']; ?><i class="bi bi-quote"></i> <span>&#128075;</span></h4>
                </div>
                <a href="#modal-song" data-bs-toggle="modal" class="btn btn-modal" onclick="addSong()">Add New Song</a>
            </div>
        </div>
        <!-- TASK MODAL -->
        <?php
            include("include/model.php");
        ?>

        <?php
            include_once 'code/lyrics.php';
            $chansons = new Lyrics();
            $songs = $chansons->displaySong();
        ?>

        <table id="data-table" class="display dataTable mb-3" style="width: 100%" aria-describedby="example_info">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Artist</th>
                    <th>Album</th>
                    <th>year</th>
                    <th>Lyrics</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            <?php
                foreach ($songs as $song) {
            ?>
                    <tr class="odd" id = "<?= $song['id'];?>" title = "<?= $song['title'];?>" 
            artist = "<?= $song['artist'];?>" album = "<?= $song['album'];?>" year = "<?= $song['year']; ?>" lyrics = "<?= $song['lyrics']; ?>">
                        <td class="sorting_1"><?= $song['title'];?></td>
                        <td class=""><?= $song['artist'];?></td>
                        <td class=""><?= $song['album'];?></td>
                        <td class=""><?= $song['year']; ?></td>
                        <td class=""><?= $song['lyrics']; ?></td>
                        <td>
                            <div class="d-flex fs-3">
                                <a href="#modal-song" data-bs-toggle="modal" class="btn btn-warning me-3" onclick="editSong(<?= $song['id'];?>)"><i class="bi bi-pencil-square users-icon text-white"></i></a>
                                <a href="code/lyricsController.php?id= <?= $song['id'] ?>" class="btn btn-danger text-dark"><i class="bi bi-trash3 users-icon text-white"></i></a>
                            </div>
                        </td>
                    </tr>
            <?php
                }
            ?>
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