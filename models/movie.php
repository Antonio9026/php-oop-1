<?php

// definisco le classi 
class Movie
{
    public $titolo;
    public $produttore;
    public $genere;
    public $anno_produzione;
    public $durata;
    public $distribuzione;

    // creo costruttore 
    function __construct($_titolo, $_produttore, $_genere, $_anno_produzione, $_durata, $_distribuzione)
    {
        $this->titolo = $_titolo;
        $this->produttore = $_produttore;
        $this->genere = $_genere;
        $this->anno_produzione = $_anno_produzione;
        $this->durata = $_durata;
        $this->distribuzione = $_distribuzione;
    }

    // creo metodo d'istanza
    public function getMainInfo()
    {
        return  "anno: " . $this->anno_produzione . " " . "durata: " . $this->durata;
    }


    public function getHtml()
    {
        return ' 
    <div class="card">
         <h2 >Titolo: $this->titolo  </h2>
         <p >Produtore: $this->produttore </p>
         <p>Genere:  $this->genere </p>
         <p>Distribuito da:   $this->distribuzione  </p>
         <p>info:  {$this->getMainInfo()}  </p>
    </div>';
    }
    public function printHtml() {
?>

        <div class="card">
            <h2>Titolo: <?php echo $this->titolo  ?> </h2>
            <p>Produtore: <?php echo $this->produttore ?></p>
            <p>Genere: <?php echo $this->genere ?></p>
            <p>Distribuito da: <?php echo $this->distribuzione  ?></p>
            <p>info: <?php echo $this->getMainInfo()  ?></p>
        </div>

<?php
    }
}







?>