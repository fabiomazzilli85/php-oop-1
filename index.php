<?php
class Production
{
    public $titolo;
    public $lingua;
    public $voto;
    // Queste sono le istanze: titolo, lingua, voto.

    public function __construct($titolo, $lingua, $voto) {
        $this->titolo = $titolo;
        $this->lingua = $lingua;
        $this->voto = $voto;
    }
    // Questo è il costruttore.

    public function setTitolo($titolo)
    {
        $this->titolo = $titolo;
    }
    // Imposto il titolo del film

    public function getTitolo()
    {
        return $this->titolo;
    }
    // Ottengo il titolo del film

    public function setLingua($lingua)
    {
        $this->lingua = $lingua;
    }
    // Imposto la lingua del film
    public function getLingua()
    {
        return $this->lingua;
    }
    // Ottengo la lingua del film.

    public function setVoto($voto)
    {
        if ($voto >= 1 && $voto <= 10) {
            $this->voto = $voto;
        } else {
            echo "Mi dispiace ma il voto deve essere compreso tra 1 e 10.";
        }
    }
    // Imposto il voto del film e con la logica IF / ELSE mi accerto che venga restituito il voto se esso è compreso tra 1 e 10, altrimenti stampo la scritta.

    public function getVoto()
    {
        return $this->voto;
    }
    // Ottengo il voto del film.
}

$production1 = new Production("Il Padrino", "Inglese", 10);
echo "Titolo: " . $production1->getTitolo() . "<br>";
echo "Lingua: " . $production1->getLingua() . "<br>";
echo "Voto: " . $production1->getVoto() . "<br>";

$production2 = new Production("Il Padrino - parte II", "Inglese", 9);
echo "Titolo: " . $production2->getTitolo() . "<br>";
echo "Lingua: " . $production2->getLingua() . "<br>";
echo "Voto: " . $production2->getVoto() . "<br>";

$production3 = new Production("Il Padrino - parte III", "Inglese", 4);
echo "Titolo: " . $production3->getTitolo() . "<br>";
echo "Lingua: " . $production3->getLingua() . "<br>";
echo "Voto: " . $production3->getVoto() . "<br>";

?>
