<?php
require_once 'models/reserva.php';
@session_start();
class reservaController
{

    public function mostrarreserves()
    {
        $reserva = new reserva();
        $reserves = $reserva->mostrar();

        require_once 'views/reserva/mostrarreserves.php';
    }
    public function insertarreserves()
    {

        require_once 'views/reserva/insertarreserves.php';
    }
    public function eliminarreserves()
    {
        if (isset($_GET['codi'])) {
            $id = $_GET['codi'];
            $reserva = new reserva();
            $reserva->setCodi($id);
            $reserva->eliminar();
        }
        header('Location: index.php?controller=reserva&action=mostrarreserves');
    }
    public function modificarreserves()
    {
        if (isset($_GET['codi'])) {
            $id = $_GET['codi'];
            $reserva = new reserva();
            $reserva->setCodi($id);
            $r = $reserva->buscar();
            $row = $r->fetch_assoc();
        }
        require_once 'views/reserva/modificarreserves.php';
    }
    public function actualitzarreserves()
    {
        $reserva = new reserva();
        $reserva->setCodi($_POST['codi']);
        $reserva->setCodiUsuari($_POST['codi_usuari']);
        $reserva->setCodiVol($_POST['codi_vol']);
        $reserva->setData_tornada($_POST['data_tornada']);
        $reserva->setDataAnada($_POST['data_anada']);
        $reserva->setNombrePlaces($_POST['nombre_places']);
        $placesvol = $reserva->placesvol(); //100
        if($reserva->getData_tornada() !=null){
            $a = $reserva->disp_anada(); //50 or NULL 
            $b = $reserva->disp_tornada(); //30 OR NULL
            $rowa = $a->fetch_assoc();
            $rowb = $b->fetch_assoc();
            $rowp = $placesvol->fetch_assoc();
            //echo "a) ".$placesvol." ".$a->fetch_assoc()['pa_reserv'].$reserva->getDataAnada();
            //echo "b) ".$placesvol." ".$b->fetch_assoc()['pt_reserv'].$reserva->getData_tornada();
            $totala = $rowp['nombre_places'] - ($rowa['pa_reserv'] + $reserva->getNombrePlaces());
            
            $totalt = $rowp['nombre_places'] - ($rowb['pt_reserv'] + $reserva->getNombrePlaces());
           
            if($totala >=0 and $totalt>=0){
            $reserva->modificar();
            header("Location: index.php?controller=reserva&action=mostrarreserves");
        }
        else{
            
            header("Location: index.php?controller=reserva&action=modificarreserves&codi=".$reserva->getCodiVol()."&error=1");
            
        }
    }
}
    public function guardarreserves(){
        $reserva = new reserva();
        $reserva->setCodiUsuari($_POST['codi_usuari']);
        $reserva->setCodiVol($_POST['codi_vol']);
        $reserva->setData_tornada($_POST['data_tornada']);
        $reserva->setDataAnada($_POST['data_anada']);
        $reserva->setNombrePlaces($_POST['nombre_places']);//50
        $placesvol = $reserva->placesvol(); //100
        if($reserva->getData_tornada() !=null){
            $a = $reserva->disp_anada(); //50 or NULL 
            $b = $reserva->disp_tornada(); //30 OR NULL
            $rowa = $a->fetch_assoc();
            $rowb = $b->fetch_assoc();
            $rowp = $placesvol->fetch_assoc();
            //echo "a) ".$placesvol." ".$a->fetch_assoc()['pa_reserv'].$reserva->getDataAnada();
            //echo "b) ".$placesvol." ".$b->fetch_assoc()['pt_reserv'].$reserva->getData_tornada();
            $totala = $rowp['nombre_places'] - ($rowa['pa_reserv'] + $reserva->getNombrePlaces());
            $totalt = $rowp['nombre_places'] - ($rowb['pt_reserv'] + $reserva->getNombrePlaces());
            if($totala >=0 and $totalt>=0){
            $reserva->insertar();
            header("Location: index.php?controller=reserva&action=mostrarreserves");
        }
        else{
            
            header("Location: index.php?controller=reserva&action=insertarreserves&codi=".$reserva->getCodiVol()."&error=1");
            
        }
    }
    else{
        $a = $reserva->disp_anada();
        echo "a) ".$a->fetch_assoc()['p_disponiblesa'].$reserva->getDataAnada();

    }
        
        
    }
}
