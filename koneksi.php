<?php
 class koneksi{
    function getKoneksi(){
        return new PDO("mysql:host=localhost;dbname=PPDB1",'root','');
    }
 }
    

