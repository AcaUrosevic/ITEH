<?php

class Prijava{
    public $id;
    public $predmet;
    public $katedra;
    public $sala;
    public $datum;

    public function __construct($id = null, $predmet = null, $katedra = null, $sala = null, $datum = null)
    {
        $this->id = $id;
        $this->predmet = $predmet;
        $this->katedra = $katedra;
        $this->sala = $sala;
        $this->datum = $datum;
    }
    public static function getAll(mysqli $conn) {
        $queryString = "SELECT * from prijave";
        return $conn->query($queryString);
    }
    public static function deleteById($id,mysqli $conn){
        $query = "DELETE from prijave where id = '$id'";
        return $conn->query($query);
    }
    public static function add(Prijava $prijava,mysqli $conn){
        $query_str = "INSERT INTO prijave(predmet, katedra, sala, datum) VALUES ('$prijava->predmet', '$prijava->katedra', '$prijava->sala', '$prijava->datum')";
        return $conn->query($query_str);
    }
    public static function update(Prijava $prijava,mysqli $conn){
        $query = "UPDATE prijave 
                    set predmet = '$prijava->predmet', katedra = '$prijava->katedra', sala = '$prijava->sala', datum = '$prijava->datum'
                    where id = '$prijava->id'";
        return $conn->query($query);
    }
}