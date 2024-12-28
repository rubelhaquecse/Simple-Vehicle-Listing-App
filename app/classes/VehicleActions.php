<?php 


interface vehicleActions {
    public function addVehicle($data);
    public function editVhicle($id, $data);
    public function deleteVehicle($id);
    public function getVehicles();
    
}

?>