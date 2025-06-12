<?php
//classe azienda
//nome
//sede
//numero dipendenti

class Company
{
    //attributi
    public string $companyName;
    public string $companyState;
    public int $employeesNumber;


    public function __construct($companyName, $companyState, $employeesNumber = 0)
    {
        $this->companyName = $companyName;
        $this->companyState = $companyState;
        $this->employeesNumber = $employeesNumber;
    }
}

$company1 = new Company('Accenture', 'Italia');
$company2 = new Company('DXC Tech', 'Illinois');
$company3 = new Company('Accenture', 'Italia');
var_dump($company1);
