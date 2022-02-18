<!-- <table class="table">
    <tr>
        <th>Codi</th>
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

    /*while ($row = $resultat->fetch_assoc()) {
        if ($row['codi_usuari'] == $_SESSION['codi'] || $_SESSION['rol'] == 'admin') {
            echo "<tr>";
            echo "<td>" . $row['codi_usuari'] . "</td>";
            echo "<td>" . $row['origen'] . "</td>";
            echo "<td>" . $row['desti'] . "</td>";
            echo "<td>" . $row['data_anada'] . "</td>";
            echo "<td>" . $row['data_tornada'] . "</td>";
            echo "<td>" . $row['n_places'] . "</td>";
            echo "<td>" . $row['preu'] . "</td>";
            echo "<td>" . $row['total'] . "</td>";
            echo "<td>" . $row['data_ticket'] . "</td>";
            echo "</tr>";
        }
    }*/

    ?>
</table> -->
<?php while($row = $resultat->fetch_assoc())
   if ($row['codi_usuari'] == $_SESSION['codi'] || $_SESSION['rol'] == 'admin') {
 {?>
<div class="container mt-5 mb-5">
    <div class="row d-flex justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <!-- <div class="text-left logo p-2 px-5"> <img src="https://i.imgur.com/2zDU056.png" width="50"> </div> -->
                <div class="invoice p-5">
                    <h5>ORDRE CONFIRMADA!</h5> <span class="font-weight-bold d-block mt-4">Hola,<?php echo $row['nom'];?> !!</span> <span>La teva reserva ha quedat registrada!</span>
                    <div class="payment border-top mt-3 mb-3 border-bottom table-responsive">
                        <table class="table table-borderless">
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="py-2"> <span class="d-block text-muted">Data tiquet</span> <span><?php echo $row['data_ticket'];?></span> </div>
                                    </td>
                                    <td>
                                        <div class="py-2"> <span class="d-block text-muted">Reserva No</span> <span><?php echo $row['codi_reserva'];?></span> </div>
                                    </td>
                                    <td>
                                        <div class="py-2"> <span class="d-block text-muted">Pagament</span> <span><img src="https://img.icons8.com/color/48/000000/mastercard.png" width="20" /></span> </div>
                                    </td>
                                    <td>
                                        <div class="py-2"> <span class="d-block text-muted">Adreça de facturació</span> <span><?php echo $row['adreça'];?></span> </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="product border-bottom table-responsive">
                        <table class="table table-borderless">
                            <tbody>
                                <tr>
                                    <td width="20%"> <img src="views/vol/img/<?php echo $row['foto'];?>" width="90"> </td>
                                    <td width="60%"> <span class="font-weight-bold">ORIGEN</span>
                                        <div class="product-qty"> <span class="d-block"><?php echo $row['origen'];?></span> 
                                        <td width="60%"> <span class="font-weight-bold">DESTÍ</span>
                                        <div class="product-qty"> <span class="d-block"><?php echo $row['desti'];?></span> 
                                    
                                    </div>
                                    </td>
                           
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="row d-flex justify-content-end">
                        <div class="col-md-5">
                            <table class="table table-borderless">
                                <tbody class="totals">
                                    <tr>
                                        <td>
                                            <div class="text-left"> <span class="text-muted">PLACES</span> </div>
                                        </td>
                                        <td>
                                            <div class="text-right"> <span><?php echo $row['n_places'];?></span> </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="text-left"> <span class="text-muted">PREU VOL </span> </div>
                                        </td>
                                        <td>
                                            <div class="text-right"> <span><?php echo $row['preu'];?></span> </div>
                                        </td>
                                    </tr>
                                  
                                    <tr class="border-top border-bottom">
                                        <td>
                                            <div class="text-left"> <span class="font-weight-bold">TOTAL</span> </div>
                                        </td>
                                        <td>
                                            <div class="text-right"> <span class="font-weight-bold"><?php echo $row['total'];?></span> </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                  
                    <p class="font-weight-bold mb-0">Gràcies per utilitzar la nostra pàgina de vols!</p> <span>LOUCEL AIRLINES</span>
                </div>
                <div class="d-flex justify-content-between footer p-3"> <span>Need Help? visit our <a href="#"> help center</a></span> <span>12 June, 2020</span> </div>
            </div>
        </div>
    </div>

    <?php } }?>
</div>