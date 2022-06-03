<?php

//create connection class
class connection{
    public $servername="localhost";
    public $username="username";
    public $password="";
    public $connection;

    //connect construct
    function __construct(){
        $connection= new mysqli($this->servername,$this->username,$this->passowrd);
    }
}