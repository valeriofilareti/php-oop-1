<?php

class Movie {
  public $title;
  public $director;
  public $genre;

  function __construct($_title, $_director, $_genre){
    $this->title = $_title;
    $this->director = $_director;
    $this->genre = $_genre;
  }
  public function getFullMovie(){
    return 'title: ' . $this->title . ', director: ' . $this->director;
  }
}