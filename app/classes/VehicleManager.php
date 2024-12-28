<?php 
require_once 'VehicleBase.php';
require_once 'VehicleActions.php';
require_once 'Filehandaler.php';

class VehicleManager extends VehicleBase implements VehicleActions {
    
    use Filehandaler;

    public function addVehicle($data)
    {
        $vehicles = $this->readfile();
        $vehicles[] = $data;
        $this->writefile($vehicles);
        
    }
    
    public function editVhicle($id, $data)
    {
        $vehicles = $this->writefile();
        if(isset($vehicles[$id])){
            $vehicles[$id] = $data;
            $this->writefile($vehicles);
        }
        
    }

    public function deleteVehicle($id)
    {
        $vehicles = $this->readfile();
        if(isset($vehicles[$id])){
            unset($vehicles[$id]);
            $this->writefile(array_values($vehicles));
        }
    }

    public function getVehicles(){
        return $this->readfile();
    }

    public function getDetails()
    {
        return[
            'name' => $this->name,
            'type' => $this->type,
            'price' => $this->price,
            'image' => $this-> image
        ];
    }
}


?>