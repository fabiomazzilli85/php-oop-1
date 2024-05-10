<?php
class Production
{
    public $titolo;
    public $lingua;
    public $voto;
    // Queste sono le istanze: titolo, lingua, voto.

    public function __construct($titolo, $lingua, $voto)
    {
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

// Aggiungo la classe Movie che eredita da Production. A movie aggiungo due proprietà: ''profitti'' e ''durata''.

class Movie extends Production
{
    public $profitti;
    public $durata;

    public function setProfitti($profitti)
    {
        $this->profitti = $profitti;
    }

    public function getProfitti()
    {
        return $this->profitti;
    }

    public function setDurata($durata)
    {
        $this->durata = $durata;
    }

    public function getDurata()
    {
        return $this->durata;
    }
}


// Esempio de ''Il Padrino''.
$movie1 = new Movie("Il Padrino", "Inglese", 10);
$movie1->setProfitti(20000000);
$movie1->setDurata(180);

// Stampo ''Il Padrino''
"Titolo: " . $movie1->getTitolo() . "<br>";
"Lingua: " . $movie1->getLingua() . "<br>";
"Voto: " . $movie1->getVoto() . "<br>";
"Profitti: $" . $movie1->getProfitti() . "<br>";
"Durata: " . $movie1->getDurata() . " minuti<br>";

// Esempio de ''Il Padrino - Parte II".
$movie2 = new Movie("Il Padrino - Parte II", "Inglese", 10);
$movie2->setProfitti(10000000);
$movie2->setDurata(200);


// Stampo ''Il Padrino - Parte II
"Titolo: " . $movie2->getTitolo() . "<br>";
"Lingua: " . $movie2->getLingua() . "<br>";
"Voto: " . $movie2->getVoto() . "<br>";
"Profitti: $" . $movie2->getProfitti() . "<br>";
"Durata: " . $movie2->getDurata() . " minuti<br>";

// Esempio de ''Il Padrino - Parte III".
$movie3 = new Movie("Il Padrino - Parte III", "Inglese", 4);
$movie3->setProfitti(80000000);
$movie3->setDurata(220);


// Stampo ''Il Padrino - Parte III''
"Titolo: " . $movie3->getTitolo() . "<br>";
"Lingua: " . $movie3->getLingua() . "<br>";
"Voto: " . $movie3->getVoto() . "<br>";
"Profitti: $" . $movie3->getProfitti() . "<br>";
"Durata: " . $movie3->getDurata() . " minuti<br>";


$production1 = new Production("Il Padrino", "Inglese", 10);
"Titolo: " . $production1->getTitolo() . "<br>";
"Lingua: " . $production1->getLingua() . "<br>";
"Voto: " . $production1->getVoto() . "<br>";

$production2 = new Production("Il Padrino - parte II", "Inglese", 9);
"Titolo: " . $production2->getTitolo() . "<br>";
"Lingua: " . $production2->getLingua() . "<br>";
"Voto: " . $production2->getVoto() . "<br>";

$production3 = new Production("Il Padrino - parte III", "Inglese", 4);
"Titolo: " . $production3->getTitolo() . "<br>";
"Lingua: " . $production3->getLingua() . "<br>";
"Voto: " . $production3->getVoto() . "<br>";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="app.css">
    <title>PHP OOP</title>
</head>

<body>

    <main class="container">

        <h1 class="text-center mt-5 mb-5">The Godfather Trilogy</h1>

        <div class="card-flex">
            <div class="card" style="width: 18rem;">
                <img src="./img/logo.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title text-center">Titolo: <?php echo $movie1->getTitolo(); ?></h5>
                    <p class="card-text text-center">Lingua: <?php echo $movie1->getLingua(); ?></p>
                    <p class="card-text text-center">Voto: <?php echo $movie1->getVoto(); ?></p>
                    <p class="card-text text-center">Profitti: $<?php echo $movie1->getProfitti(); ?></p>
                    <p class="card-text text-center">Durata: <?php echo $movie1->getDurata(); ?> minuti</p>
                    <div class="text-center">
                        <a href="#" class="btn btn-outline-danger">Acquista</a>
                    </div>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <img src="./img/logo.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title text-center">Titolo: <?php echo $movie2->getTitolo(); ?></h5>
                    <p class="card-text text-center">Lingua: <?php echo $movie2->getLingua(); ?></p>
                    <p class="card-text text-center">Voto: <?php echo $movie2->getVoto(); ?></p>
                    <p class="card-text text-center">Profitti: $<?php echo $movie2->getProfitti(); ?></p>
                    <p class="card-text text-center">Durata: <?php echo $movie2->getDurata(); ?> minuti</p>
                    <div class="text-center">
                        <a href="#" class="btn btn-outline-danger">Acquista</a>
                    </div>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <img src="./img/logo.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title text-center">Titolo: <?php echo $movie3->getTitolo(); ?></h5>
                    <p class="card-text text-center">Lingua: <?php echo $movie3->getLingua(); ?></p>
                    <p class="card-text text-center">Voto: <?php echo $movie3->getVoto(); ?></p>
                    <p class="card-text text-center">Profitti: $<?php echo $movie3->getProfitti(); ?></p>
                    <p class="card-text text-center">Durata: <?php echo $movie3->getDurata(); ?> minuti</p>
                    <div class="text-center">
                        <a href="#" class="btn btn-outline-danger">Acquista</a>
                    </div>
                </div>
            </div>
        </div>
    </main>

</body>

</html>