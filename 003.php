<?php

/*Creare una struttura a Classi sfruttando l’ereditarietà e seguendo queste semplici regole:

1)Le classi NON devono avere attributi;

2)Ogni classe avrà un metodo specifico PROTECTED per stampare la sua specializzazione (Attenti all’overwrite);

Non Potete realizzare metodi definiti dall’utente PUBLIC per stampare il risultato, l’unico metodo PUBLIC ammesso è il Costruttore;
Esempio di Output:

$magikarp = new Fish();

//Nel terminale visaulizzerete:

Sono un animale Vertebrato
Sono un animale a Sangue Freddo
Splash!

//---------------------

$serpente = new Reptile();

//Nel terminale visaulizzerete:

Sono un animale Vertebrato
Sono un animale a Sangue Freddo
Sono un Serepnte
*/
abstract class Vertebrate
{
    public function __construct()
    {
        $this->imVertebrate();
    }
    //DOMANDA PER FRANCESCO: SELF è IL MODO GIUSTO PER RICHIAMARLO CON SE STESSO??

    protected function imVertebrate()
    {
        echo "Sono un animale vertebrato.\n";
    }
}

class WarmBlooded extends Vertebrate
{
    public function __construct()
    {
        parent::__construct();
        $this->imWarmBlooded();
    }
    protected function imWarmBlooded()
    {
        echo "Sono un animale a sangue caldo.\n";
    }
}
class ColdBlooded extends Vertebrate
{
    public function __construct()
    {
        parent::__construct();
        $this->imColdBlooded();
    }
    protected function imColdBlooded()
    {
        echo "Sono un animale a sangue freddo.\n";
    }
}
class Fish extends ColdBlooded
{
    public function __construct()
    {
        parent::__construct();
        $this->imFish();
    }
    protected function imFish()
    {
        echo "Sono un pesce.\n Spero di evolvermi presto in un Gyarados.\n";
    }
}
class Reptile extends ColdBlooded
{
    public function __construct()
    {
        parent::__construct();
        $this->imReptile();
    }
    protected function imReptile()
    {
        echo "Sono un rettile e parlo serpentese.\n LE TARTARUGHE NON SONO ANFIBI!!\n";
    }
}

class Amphibian extends ColdBlooded
{
    public function __construct()
    {
        parent::__construct();
        $this->imAmphibian();
    }
    protected function imAmphibian()
    {
        echo "Sono un anfibio.\n NON SONO UNA TARTARUGA.\n";
    }
}
class Mammal extends WarmBlooded
{
    public function __construct()
    {
        parent::__construct();
        $this->imMammal();
    }
    protected function imMammal()
    {
        echo "Roarrrrr.\n";
    }
}

class Bird extends WarmBlooded
{
    public function __construct()
    {
        parent::__construct();
        $this->imBird();
    }
    protected function imBird()
    {
        echo "Chip chip.\n";
    }
}


$lion = new Mammal;
$hummingbird = new Bird;
$magikarp = new Fish;
$turtle = new Reptile;
$frog = new Amphibian;
