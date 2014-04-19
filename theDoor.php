<?php

namespace Doors;

abstract class theDoor {
    protected $doorIsClosed;
    protected $doorIsLocked;
    protected $doorStatus = null;

    abstract protected function openTheDoor();
    abstract protected function closeTheDoor();
    abstract protected function checkTheDoor();
}