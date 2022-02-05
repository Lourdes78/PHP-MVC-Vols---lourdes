<table class="table">
 <tr>
    <th>Origen</th>
    <th>Destí</th>
    <th>Data Anada</th>
    <th>Data Tornada</th>
    <th>Nº Places</th>
    <th>Preu vol</th>
    <th>Preu total</th>
    <th>Data ticket</th>
 </tr>
<?php
@session_start();
if(!isset($_SESSION['usuari'])){
    header("Location: views/usuaris/login.php");
 }
    while($row = $resultat->fetch_assoc()){
        if($_SESSION['rol'] == 'admin'|| $_SESSION['codi']==$row['codi']){
        echo "<tr>";
        echo "<td>".$row['origen']."</td>";
        echo "<td>".$row['desti']."</td>";
        echo "<td>".$row['data_anada']."</td>";
        echo "<td>".$row['data_tornada']."</td>";
        echo "<td>".$row['n_places']."</td>";
        echo "<td>".$row['preu']."</td>";
        echo "<td>".$row['total']."</td>";
        echo "<td>".$row['data_ticket']."</td>";
        echo "</tr>";
    }
    else{
        echo "VOSTÉ NO TÉ CAP TICKET A MOSTRAR POT FER UNA RESERVA <a href='index.php?controller=VOL&action=mostrarvols'>AQUÍ</a> ";
    }
}
?>


</table>