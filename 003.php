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
        self::imVertebrate();
    }
    //DOMANDA PER FRANCESCO: SELF è IL MODO GIUSTO PER RICHIAMARLO CON SE STESSO??

    protected function imVertebrate()
    {
        echo "Sono un animale vertebrato";
    }
}

class WarmBlooded extends Vertebrate
{
    public function __construct()
    {
        parent::imVertebrate();
        self::imWarmBlooded();
    }
    protected function imWarmBlooded()
    {
        echo "Sono un animale a sangue caldo";
    }
}
