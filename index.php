<?php

require "Car.php";
require "Employee.php";
require "Company.php";

$bmw      = new Car("BMW", 'blue');
$mercedes = new Car("Mercedes Benz");
$audi     = new Car("Aaudi", 'red', false);

// $bmw->color     = 'blue';
// $bmw->comp      = "BMW";
// $mercedes->comp = "Mercedes Benz";
// $audi->comp     = "Aaudi";
// $audi->color    = 'red';

// echo $bmw->color;
// echo "\n";
// echo $mercedes->color;
// echo "\n";
// echo $bmw->comp;
// echo "\n";
// echo $mercedes->comp;

$cars = [$bmw, $mercedes, $audi];

for ($i = 0; $i < count($cars); $i++) {
    echo $cars[$i]->comp . " " . $cars[$i]->color . "\n";
    $cars[$i]->show_info();
    if($cars[$i]->hasSunRoof){
        echo "has a SunRoof";
    }
    echo "\n";
}

echo $bmw->beep();
echo "\n";
echo $bmw;
echo "\n";

$emp1          = new Employee();
$emp1->surname = "Борисенко";
$emp1->name    = "Ігор";
$emp2          = new Employee();
$emp2->surname = "Максименко";
$emp2->name    = "Денис";
//$emp->age = 23 ; // Помилка
// Виводимо властивості класу
echo $emp1->surname . " " . $emp1->name . " " . "\n ";

if (! $emp1->set_age(23)) {
    exit("Помилка обчислення віку");
}

echo $emp1->get_full_info(); // Борисов  Ігор  23

//echo $emp1->get_age();
$company = new Company();
$company->set_name("Kit");
$company->set_employees([$emp1, $emp2]);
echo $company->get_name();
print_r($company->get_employees());