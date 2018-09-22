<?php

class User
{
    /**
     * @var string
     */
    private $username;
    
    /**
     * User constructor.
     *
     * @param string $username
     */
    public function __construct(string $username)
    {
        $this->username = $username;
    }
    
    /**
     * Get the value of the username property.
     *
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }
}

$user = new \User('dreamlabs');

if ($user instanceof \User) {
    echo "OK";
    return;
}

echo "NOK";
