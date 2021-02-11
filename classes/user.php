<?php

require('interfaces/UserInterface.php');

class User implements UserInterface
{

    private array $request;

    public function __construct() {
        $this->getRequest($_REQUEST);
    }


    public function getRequest($request) : User    {
        foreach ($_REQUEST as $key => $value){
            $request[$key] = $value;
        }
        return $this;
    }

    public function parseRequest() : void    {
       foreach ($this->request as $key => $value){
           echo "<p> $key : $value</p>";
       }
    }
}