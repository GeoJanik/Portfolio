<?php

namespace portfolio\model;

// Connection DB 
class Manager
{
    protected function dbConnect()
    {
        $db = new \PDO('mysql:host=db5002854922.hosting-data.io;dbname=dbs2285527;charset=utf8', 'dbu1921394', 'portfolioGeoJanik');
        return $db;
    }
}
