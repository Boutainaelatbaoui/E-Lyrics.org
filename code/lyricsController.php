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

    if (isset($_GET['id'])) {
        extract($_GET);
        $song = new Lyrics();
        $song->setId($id);
        $song->deleteSong();
        header('location:../index.php');
    }

    if (isset($_POST['update'])) {
        // extract($_POST);
        // var_dump($_POST);
        // die();
        $id     = $_POST["id"];
        $title  = $_POST["title"];
        $year   = $_POST["year"];
        $lyrics = $_POST["lyrics"];
        $artist = $_POST["artist"];
        $album  = $_POST["album"];

        $song = new Lyrics($title, $album, $year, $lyrics, $artist);
        $song->setId($id);
        $song->updateSong();
        header('location:../index.php');
    }