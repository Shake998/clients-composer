<?php

include 'DBconn.php';

class Client extends DBconn{

    function getSalesByClient($name) {
        $result = $this->connect()->query('SELECT * FROM clients WHERE name LIKE "%' . $name .'%"');

        return $result;
    }
    function getSalesByDate($date) {
        $result = $this->connect()->query('SELECT * FROM clients WHERE date >   "' . $date .'"');

        return $result;
    }
    function getAllSales() {
        $result = $this->connect()->query('SELECT * FROM clients');

        return $result;
    }
    
}
?>