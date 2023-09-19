<?php
require_once __DIR__ .'/movie_demo.php';
// definisco le classi 
class Movie {
public $titolo ;
public $produttore;
public $genere;
public $anno_produzione;
public $durata;
public $distribuzione;

// creo costruttore 
function __construct($_titolo,$_produttore,$_genere,$_anno_produzione,$_durata,$_distribuzione){
$this->titolo = $_titolo;
$this->produttore = $_produttore;
$this->genere = $_genere;
$this->anno_produzione = $_anno_produzione;
$this->durata = $_durata;
$this->distribuzione = $_distribuzione;

}

// creo metodo d'istanza
function getMainInfo (){
    return $this->  anno_produzione . " " . $this->durata  ;
}
}






?>


