<?php 

require_once __DIR__ . '/models/movie.php';

require_once __DIR__ . '/db.php';

// $movies = [
//   $fightClub = new Movie('Fight Club', 'David Fincher', 'Genre A'),
//   $pulpFiction = new Movie('Pulp Fiction', 'Quentin Tarantino', 'Genre B'),
//   $aranciaMeccanica = new Movie('Arancia Meccanica', 'Stanley Kubrick', 'Genre C'),
// ]

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

<!-- table ----------------------------------------------------------------------------------->
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
<!-- table ----------------------------------------------------------------------------------->
    <?php
      require_once __DIR__ .'/partials/Footer.php'
    ?>
  </div>

</body>
</html>

