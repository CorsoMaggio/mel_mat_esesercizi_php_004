<?php
/*Utilizzando i principi di OOP e di Ereditarietà, creare una struttura a classi come segue:

+-|Continent 
+-----------|Country 
+--------------------|Region 
+---------------------------|Province 
+------------------------------------|City
+------------------------------------------|Street
Continent genitore con figlio Country, con a sua volta un figlio Region, con a sua volta un figlio Province, con a sua volta un figlio City e infine un figlio Street:

Ogni classe avrà un attributo public del tipo:

$nameContinent: 
$nameCountry; 
$nameRegion: 
$nameProvince: 
$nameCity:
$nameStreet:
La prima classe Genitore sarà strutturata come segue:

class Continent
{
  public $nameContinent;

  public function __construct($continent)
  {
    $this->nameContinent = $continent;
  }
}
Voglio istanziare un nuovo oggetto chiamato $myLocation, subito dopo richiamare un metodo pubblico getMyCurrentLocation() che mi stampi a video :

"Mi trovo in Europa, Italia, Puglia, Ba, Monopoli, Via Roma"*/
class Continent
{
    public $nameContinent;

    public function __construct($continent)
    {
        $this->nameContinent = $continent;
    }
}

class Country extends Continent
{
    public $nameCountry;


    public function __construct($continent, $country)
    {
        parent::__construct($continent);
        $this->nameCountry = $country;
    }
}

class Region extends Country
{
    public $nameRegion;


    public function __construct($continent, $country, $region)
    {
        parent::__construct($continent, $country);
        $this->nameRegion = $region;
    }
}

class Province extends Region
{
    public $nameProvince;


    public function __construct($continent, $country, $region, $province)
    {
        parent::__construct($continent, $country, $region);
        $this->nameProvince = $province;
    }
}

class Province extends Region
{
    public $nameProvince;


    public function __construct($continent, $country, $region, $province)
    {
        parent::__construct($continent, $country, $region);
        $this->nameProvince = $province;
    }
}
