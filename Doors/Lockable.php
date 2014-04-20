<?php

namespace Doors;

interface Lockable {

    public function lockTheDoor();
    public function unlockTheDoor();
    public function checkTheLock();

}