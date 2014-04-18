<?php

class insideDoor {

    private $doorIsClosed;
    private $doorIsLocked;

    public function __toString() {
        return json_encode(array($this->doorIsClosed, $this->doorIsLocked));
    }

    public function __construct($doorIsClosed = true, $doorIsLocked = false) {
        $this->doorIsClosed = $doorIsClosed;
        $this->doorIsLocked = $doorIsLocked;
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

    private function checkTheDoor() {
        return $this->doorIsClosed;
    }

    private function checkTheLock() {
        return $this->doorIsLocked;
    }

}