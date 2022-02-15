<table class="table">
<tr>
<th>Origen</th>
<th>Destí</th>
<th>Data Anada</th>
<th>Data tornada</th>
<th>Nombre de places</th>
<th>Modificar</th>
<th>Eliminar</th>
<th>Pagar ticket</th>
</tr>
<?php
@session_start();

//if($row['codi_usuari'] == $_SESSION['codi'] || $_SESSION['rol'] == 'usuari' ){


    while($row = $reserves->fetch_assoc()){
        if($_SESSION['rol'] == 'admin')/*||($row['codi_usuari'] == $_SESSION['codi']))*/{
        echo "<tr>";
        echo "<td>".$row['origen']."</td>";
        echo "<td>".$row['desti']."</td>";
        echo "<td>".$row['data_anada']."</td>";
        echo "<td>".$row['data_tornada']."</td>";
        echo "<td>".$row['nombre_places']."</td>";
        echo "<td><a href='index.php?controller=reserva&action=modificar&codi=".$row['codi']."'>Modificar</a></td>";
        echo "<td><a href='index.php?controller=reserva&action=eliminar&codi=".$row['codi']."'>Eliminar</a></td>";
        echo "<td><a href='index.php?controller=ticket&action=pagartickets&codi=".$row['codi']."'>Pagar</a></td>";
        echo "</tr>";
    

    }else if($row['codi_usuari'] == $_SESSION['codi']) {

    while($row = $reserves->fetch_assoc()){
    
        echo "<tr>";
        echo "<td>".$row['origen']."</td>";
        echo "<td>".$row['desti']."</td>";
        echo "<td>".$row['data_anada']."</td>";
        echo "<td>".$row['data_tornada']."</td>";
        echo "<td>".$row['nombre_places']."</td>";
        echo "<td><a href='index.php?controller=reserva&action=modificarreserves&codi='.$row[codi].''>Modificar</a></td>";
        echo "<td><a href='index.php?controller=reserva&action=eliminarreserves&codi='.$row[codi].''>Eliminar</a></td>";
        echo "<td><a href='index.php?controller=ticket&action=pagartickets&codi='.$row[codi].''>Pagar</a></td>";
        echo "</tr>";
    
        }

}

    }



?>
</table>

<?php require_once('config.php'); ?>
<form action="charge.php" method="post">
    <script src="https://checkout.stripe.com/checkout.js" class="stripe-button"
        data-key="<?php echo $stripe['publishable_key']; ?>"
        data-description="Envia un donativo simbolico de 1€"
        data-amount="100"
        data-currency="eur"
        data-locale="es"></script>
</form>