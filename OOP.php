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
        echo " Ciao mi chiamo \"$this->firstName\" $this->lastName.";
    }
}
//istanziare un oggetto
$person1 = new Person('Melania', 'Matacena', 28);



//EREDITARIETA': TRAMANDARE AI PRIOPRI FIGLI AIA CARATTERISTICHE CHE DEBITI;
class Student extends Person
{
    public float $avg;

    public function __construct($firstName, $lastName, $age, $avg)
    {
        parent::__construct($firstName, $lastName, $age);
        $this->avg = $avg;
    }
    //Abstract class
    public function sayHello()
    {
        echo "Buongiorno, mi chiamo $this->firstName $this->lastName \n";
    }
}


class Teacher extends Person
{
    public float $salary;

    public function __construct($firstName, $lastName, $age, $salary)
    {
        parent::__construct($firstName, $lastName, $age);
        $this->salary = $salary;
    }
}

$persona = new Person('Tizio', 'Caio', 90);
$studente = new Student('Marco', 'Caio', 90, 78.9);
$docente = new Teacher('Enrico', 'Caio', 90, 1000);

// var_dump($persona);
// var_dump($studente);
// var_dump($docente);

$studente->sayHello();
$docente->sayHello();
