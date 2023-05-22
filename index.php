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

$movies = [
  $fightClub = new Movie('Fight Club', 'David Fincher', 'Genre A'),
  $pulpFiction = new Movie('Pulp Fiction', 'Quentin Tarantino', 'Genre B'),
  $aranciaMeccanica = new Movie('Arancia Meccanica', 'Stanley Kubrick', 'Genre C'),
]




?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

  
  <title>Document</title>
</head>
<body>

  <div class="container">
    <table class="table my-5">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Title</th>
          <th scope="col">Director</th>
          <th scope="col">Genre</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($movies as $movie) : ?></php>
        <tr>
          <th scope="row">1</th>
          <td><?php echo $movie -> title ?></td>
          <td><?php echo $movie -> director ?></td>
          <td><?php echo $movie -> genre ?></td>
        </tr>
        <?php endforeach ?>
      </tbody>
    </table>
  </div>

</body>
</html>

