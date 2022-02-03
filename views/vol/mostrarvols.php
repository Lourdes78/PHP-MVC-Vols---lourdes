
<?php @session_start(); ?>
 <?php
  if(!isset($_SESSION['usuari'])){
      header("Location: views/usuaris/login.php");
   }
   else if($_SESSION['rol'] == 'admin'){
while ($row = $vols->fetch_assoc()) {

  echo '<div class="card" style="width: 50rem;">';
  echo "<img src='views/vol/img/" .$row['foto']."'   class='card-img-top' alt='Card image cap' width=\"50\" height=\"750\">";
  echo '<ul class="list-group list-group-flush">';
  echo "<li class='list-group-item'></li>" . $row['origen'] ." - ". $row['desti'];
  echo "<li class='list-group-item'></li>" . $row['preu'] . "€";
  echo "</ul>";
  echo ' <div class="card-body">';
  echo "<a  class='btn btn-primary' href='index.php?controller=vol&action=modificarvols&codi=".$row['codi']."'><i class='bi bi-pencil-square'></i></a>";
  echo "<a  class='btn btn-primary' href='index.php?controller=vol&action=eliminarvols&codi=".$row['codi']."'><i class='bi bi-trash'></i></a>";
  echo "<a  class='btn btn-primary' href='index.php?controller=reserva&action=insertarreserves&codi=".$row['codi']."'><i class='bi bi-calendar2-plus'></i></a>";
  echo ' </div>';
  echo ' </div>';
}
   }
else if($_SESSION['rol'] == 'usuari'){
  while ($row = $vols->fetch_assoc()) {
  echo '<div class="card" style="width: 100rem;">';
  echo "<img src='views/vol/img/" .$row['foto']."' class='card-img-top' alt='Card image cap'width=\"300\" height=\"500\">";
  echo '<ul class="list-group list-group-flush">';
  echo "<li class='list-group-item'></li>" . $row['origen'] ." - ". $row['desti'];
  echo "<li class='list-group-item'></li>" . $row['preu'] . "€";
  echo "</ul>";
  echo ' <div class="card-body">';
  echo "<a  class='btn btn-primary' href='index.php?controller=reserva&action=insertarreserves&codi=".$row['codi']."'><i class='bi bi-calendar2-plus'></i></a>";
  echo ' </div>';
  echo ' </div>';
   }
  }
?> 