<?php
//OOP
//creazione di una classe
//((DICHIARAZIONE))
//creo la classe//IN INGLESE-SINGOLARE-PRIMA LETTERA MAIUSCOLA
class Person
{
    //ATTRIBUTI=vARIABILE
    //Nome,Cognome, Età
    public string $firstName;
    public string $lastName;
    public int $age;

    //estrazione, incapsulamento, astrazione

    //COSTRUTTORE
    public function __construct($firstName, $lastName, $age)
    {
        $this->firstName = $firstName; //puntatore freccetta, punta a quell'esatto blocco di memoria
        $this->lastName = $lastName; //this attributo=variabile
        $this->age = $age;
    }
    //METODI=FUNZIONI
    //user function
    public function sayHello()
    {
        echo " Ciao mi chiamo $this->firstName $this->lastName.";
    }
}
//istanziare un oggetto
$person1 = new Person('Melania', 'Matacena', 28);
