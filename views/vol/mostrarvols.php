
<?php @session_start(); ?>
 <?php
  /* if($_SESSION['rol'] == 'admin'){
while ($row = $vols->fetch_assoc()) {

  echo '<div class="card im" style="width: 50rem;">';
  echo "<img src='views/vol/img/" .$row['foto']."'   class='card-img-top' alt='Card image cap'>";
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
  echo "<img src='views/vol/img/" .$row['foto']."'   class='card-img-top' alt='Card image cap' width=\"50\" height=\"750\">";
  echo '<ul class="list-group list-group-flush">';
  echo "<li class='list-group-item'></li>" . $row['origen'] ." - ". $row['desti'];
  echo "<li class='list-group-item'></li>" . $row['preu'] . "€";
  echo "</ul>";
  echo ' <div class="card-body">';
  echo "<a  class='btn btn-primary' href='index.php?controller=reserva&action=insertarreserves&codi=".$row['codi']."'><i class='bi bi-calendar2-plus'></i></a>";
  echo ' </div>';
  echo ' </div>';
   }
  }*/
?> 
 <div class="row">
<?php while($row = $vols->fetch_assoc()){?>

<div class="card col-md-6 col-lg-4 col-xl-3">
  <img class="card-img-top" src="views/vol/img/<?php echo $row['foto'];?>" alt="Card image cap">
  <div class="card-body">
	<h5 class="card-title"><?php echo $row['origen'] . " -> " . $row['desti'];?></h5>
	<p class="card-text">Preu: <?php echo $row['preu'];?> €</p>
	<p class="card-text">Places: <?php echo $row['nombre_places'];?></p>
  <?php if($_SESSION['rol'] == 'admin'){?>
   
	<a href="index.php?controller=vol&action=modificarvols&codi=<?php echo $row['codi'];?>" class="btn btn-primary"><i class="bi bi-pencil-square"></i></a>
	<a href="index.php?controller=vol&action=eliminarvols&codi=<?php echo $row['codi'];?>" class="btn btn-primary"><i class="bi bi-trash"></i></a>
  <?php }?>
  <a href="index.php?controller=reserva&action=insertarreserves&codi=<?php echo $row['codi'];?>" class="btn btn-primary"><i class="bi bi-calendar2-plus"></i></a>
  </div>
</div>

<?php } ?>
</div>