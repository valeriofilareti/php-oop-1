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

<?php 
    require_once __DIR__ . '/partials/Head.php';
  ?>
<body>

  <div class="container">

  <?php 
    require_once __DIR__ . '/partials/Header.php';
  ?>


    <table class="table my-5">
      <thead>
        <tr>
          
          <th scope="col">Title</th>
          <th scope="col">Director</th>
          <th scope="col">Genre</th>
        </tr>
      </thead>
      <tbody>

        <?php foreach ($movies as $movie) : ?></php>

        <tr>
          
          <td><?php echo $movie -> title ?></td>
          <td><?php echo $movie -> director ?></td>
          <td><?php echo $movie -> genre ?></td>
        </tr>

        <?php endforeach ?>

      </tbody>
    </table>

    <?php
      require_once __DIR__ .'/partials/Footer.php'
    ?>
  </div>

</body>
</html>

