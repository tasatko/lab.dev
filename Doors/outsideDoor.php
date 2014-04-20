<?php

namespace Doors;

class outsideDoor extends theDoor implements Lockable{

    public function __construct($doorIsClosed = true, $doorIsLocked = false) {
        $this->doorIsClosed = $doorIsClosed;
        $this->doorIsLocked = $doorIsLocked;
    }

    public function __toString() {
        return json_encode(array($this->doorIsClosed, $this->doorIsLocked));
    }

    public function openTheDoor() {
        if(!$this->checkTheLock()){
            if ($this->checkTheDoor()) {
                $this->doorIsClosed = false;
            }  else {
                $this->unlockTheDoor();
                $this->openTheDoor();
            }
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

    public function lockTheDoor() {
        if (!$this->checkTheLock()) {
            $this->doorIsLocked = true;
        }  else {
            return false;
        }
    }

    public function unlockTheDoor() {
        if ($this->checkTheLock()) {
            $this->doorIsLocked = false;
        }  else {
            return false;
        }
    }

    public function checkTheLock() {
        return $this->doorIsLocked;
    }
}