/*ESERCIZIO1 php lez03

<?php


class Company {

public $name;
public $location;
public $tot_employees = 0;

public function __construct($name, $location) {
    $this->name = $name;
    $this->location = $location;
}

public function stampaDipendenti() {
    if ($this->location === "Italia" && $this->tot_employees > 0) {
        echo "L'ufficio {$this->name} con sede in Italia ha ben {$this->tot_employees} dipendenti" . PHP_EOL;
    } else {
        echo "L'ufficio {$this->name} con sede in Italia non ha dipendenti" . PHP_EOL;
    }
}

public function calcolaSpesaAnnuale($costoDipendente) {
    $spesaAnnuale = $this->tot_employees * $costoDipendente;
    echo "La spesa annuale per l'ufficio {$this->name} è di: {$spesaAnnuale}" . PHP_EOL;
}

public static function calcolaSpesaTotale($aziende) {
    $spesaTotale = 0;
    foreach ($aziende as $azienda) {
        $spesaTotale += $azienda->tot_employees;
    }
    return $spesaTotale;
}

public static function stampaSpesaTotale($aziende) {
    $spesaTotale = Company::calcolaSpesaTotale($aziende);
    echo "La spesa totale per tutte le aziende è di: {$spesaTotale}" . PHP_EOL;
}
}

// Creazione di 5 istanze di aziende diverse
$azienda1 = new Company("Aulab", "Italia");
$azienda2 = new Company("Google", "USA");
$azienda3 = new Company("Microsoft", "USA");
$azienda4 = new Company("Amazon", "USA");
$azienda5 = new Company("Facebook", "USA");

// Impostazione del numero di dipendenti per Aulab
$azienda1->tot_employees = 50;

// Stampa delle informazioni sui dipendenti di Aulab
$azienda1->stampaDipendenti();

// Impostazione del costo annuale per dipendente
$costoDipendente = 10000;

// Calcolo e stampa della spesa annuale per ogni azienda
$azienda1->calcolaSpesaAnnuale($costoDipendente);
$azienda2->calcolaSpesaAnnuale($costoDipendente);
$azienda3->calcolaSpesaAnnuale($costoDipendente);
$azienda4->calcolaSpesaAnnuale($costoDipendente);
$azienda5->calcolaSpesaAnnuale($costoDipendente);

// Calcolo e stampa della spesa totale per tutte le aziende
Company::stampaSpesaTotale([$azienda1, $azienda2, $azienda3, $azienda4, $azienda5]);




/*ESERCIZIO2
class Continent {
    public $nameContinent;

    public function __construct($continent) {
        $this->nameContinent = $continent;
    }
}

class Country extends Continent {
    public $nameCountry;

    public function __construct($continent, $country) {
        parent::__construct($continent);
        $this->nameCountry = $country;
    }
}

class Region extends Country {
    public $nameRegion;

    public function __construct($continent, $country, $region) {
        parent::__construct($continent, $country);
        $this->nameRegion = $region;
    }
}

class Province extends Region {
    public $nameProvince;

    public function __construct($continent, $country, $region, $province) {
        parent::__construct($continent, $country, $region);
        $this->nameProvince = $province;
    }
}

class City extends Province {
    public $nameCity;

    public function __construct($continent, $country, $region, $province, $city) {
        parent::__construct($continent, $country, $region, $province);
        $this->nameCity = $city;
    }
}

class Street extends City {
    public $nameStreet;

    public function __construct($continent, $country, $region, $province, $city, $street) {
        parent::__construct($continent, $country, $region, $province, $city);
        $this->nameStreet = $street;
    }

    public function getMyCurrentLocation() {
        echo "Mi trovo in {$this->nameContinent}, {$this->nameCountry}, {$this->nameRegion}, {$this->nameProvince}, {$this->nameCity}, {$this->nameStreet}" . PHP_EOL;
    }
}

// Istanzia un nuovo oggetto $myLocation
$myLocation = new Street("Europa", "Italia", "Puglia", "BA", "Bari", "Strada San Giorgio Martire 2D");

// Richiama il metodo getMyCurrentLocation()
$myLocation->getMyCurrentLocation();

?>



ESERCIZIO4

<?php

class Car
{
    private $num_telaio;

    public function __construct($num){
        $this->num_telaio = $num;
    }

    public function get_num_telaio(){
        return $this->num_telaio;
    }
}

class Fiat extends Car
{
    protected $license;
    protected $name;

    public function __construct($num, $license, $name){
        parent::__construct($num);
        $this->license = $license;
        $this->name = $name;
    }

    public function get_license(){
        return $this->license;
    }

    public function get_name(){
        return $this->name;
    }

}

$car = new Fiat("1234", "ND 123 OJ", "Punto");

echo "La mia macchina è " . $car->get_name() . " con targa " . $car->get_license() . " e numero di Telaio" . $car->get_num_telaio();