<?php

namespace Doors;

class insideDoor extends theDoor {

    public function __construct($doorIsClosed = true) {
        $this->doorIsClosed = $doorIsClosed;
    }

    public function __toString() {
        return json_encode(array($this->doorIsClosed));
    }

    public function openTheDoor() {
        if ($this->checkTheDoor()) {
            $this->doorIsClosed = false;
        }  else {
            return false;
        }
    }

    public function closeTheDoor() {
        if (!$this->checkTheDoor()) {
            $this->doorIsClosed = true;
        }  else {
            return false;
        }
    }

    protected function checkTheDoor() {
        return $this->doorIsClosed;
    }

}