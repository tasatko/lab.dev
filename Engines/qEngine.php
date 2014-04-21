<?php

namespace Engines;

class qEngine {

    private $statusOn = "false";
    private $clockWise = "true";
    
    public function getStatusOn() {
        return $this->statusOn;
    }
    
    public function setStatusOn($status = false) {
        $this->statusOn = $status;
    }
    
    public function getClockWise() {
        return $this->clockWise;
    }
    
    public function setClockWise($status = true) {
        $this->clockWise = $status;
    }
}
