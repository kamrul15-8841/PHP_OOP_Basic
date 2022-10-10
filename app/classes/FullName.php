<?php

namespace App\classes;

class FullName
{
    public $fistName;
    public $lastName;
    public $fullName;
    public function __construct($data)
    {
        $this->fistName = $data['first_name'];
        $this->lastName = $data['last_name'];
    }
    //in browser
//    public function index(){
//        $this->fullName = $this->fistName.' '.$this->lastName;
//        echo $this->fullName;
//    }
    //in full name input field
    public function index(){
        $this->fullName = $this->fistName.' '.$this->lastName;
        return $this->fullName;
    }
}