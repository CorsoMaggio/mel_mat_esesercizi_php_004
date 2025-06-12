<?php
//classe azienda
//nome
//sede
//numero dipendenti

class Company
{
    //attributi
    public string $companyName;
    public string $location;
    public int $employeesNumber;


    public function __construct($companyName, $location, $employeesNumber = 0)
    {
        $this->companyName = $companyName;
        $this->location = $location;
        $this->employeesNumber = $employeesNumber;
    }
    public function describeCompany()
    {
        if ($this->employeesNumber > 0) {
            echo "L'ufficio \"$this->companyName\" con sede in $this->location ha ben $this->employeesNumber dipendenti.\n";
        } elseif ($this->employeesNumber <= 0) {
            echo "L'ufficio \"$this->companyName\" con sede in $this->location non ha dipendenti.\n";
        }
    }
}

$company1 = new Company('Accenture', 'Italia', 5400);
$company2 = new Company('DXC Tech', 'Illinois', 200);
$company3 = new Company('Barilla', 'Italia', 60);
$company4 = new Company('Immobiliare.it', 'Italia', 321);
$company5 = new Company('Pornhub', 'Canada');

// var_dump($company1);
// var_dump($company2);
// var_dump($company3);
// var_dump($company4);
// var_dump($company5);
$company1->describeCompany();
$company5->describeCompany();
