<?php

namespace App;

class Db
{
    private $dbh;

    public function __construct()
    {
        $this->dbh = DbConnect::get();
    }



}
