<?php

class Model
{
    protected  $db;
    function __construct()
    {
        try {
            $this->db = new PDO('mysql:host=localhost;dbname=stud.dev', 'root', 'root');
        } catch (PDOException $e) {
            die("Error: " . $e->getMessage());
        }
    }

}