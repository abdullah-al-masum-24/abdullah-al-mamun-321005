<?php

namespace App\classes;

class Home
{
    public function __construct() {

        header("location: action.php?page=home");

    }
}