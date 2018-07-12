<?php
namespace App\Classes;

class User
{
    protected $isAdmin;

    /**
     * @param bool $value
     */
    public final function setAdmin (bool $value) : void
    {
        $this->isAdmin = (bool) $value;
    }

    /**
     * @return bool
     */
    public final function isAdmin () : bool
    {
        return (bool) $this->isAdmin;
    }
}