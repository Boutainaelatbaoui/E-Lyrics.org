<?php
    require 'connection.php';

    class Lyrics extends Connection
    {
        public $id;
        public $title;
        public $album;
        public $artist;
        public $year;
        public $lyrics;

        function __construct($title = null, $album = null, $year = null,  $lyrics = null, $artist = null)
        {
            $this->title = $title;
            $this->album = $album;
            $this->artist = $artist;
            $this->year = $year;
            $this->lyrics = $lyrics;
        }

        public function displaySong()
        {
            $sql = "SELECT * FROM `songs`";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetchAll();
            return $result;
        }

        public function saveSong()
        {
                for($i=0; $i<count($this->title); $i++){
                    $sql = "INSERT INTO `songs`(`title`, `album`, `year`, `lyrics`, `artist`) VALUES (?, ?, ?, ?, ?)";
                    $stmt = $this->connect()->prepare($sql);
                    $stmt->execute([$this->title[$i], $this->album[$i], $this->year[$i], $this->lyrics[$i], $this->artist[$i]]);
                }
                
        }

    }



