<?php
    require 'lyrics.php';

    if (isset($_POST['save'])) {
        // extract($_POST);
        $title = $_POST["title"];
        $year = $_POST["year"];
        $lyrics = $_POST["lyrics"];
        $artist = $_POST["artist"];
        $album = $_POST["album"];
        $lyrics = new Lyrics($title, $album, $year, $lyrics, $artist);
        $lyrics->saveSong();     
        header('location:../index.php');
    }