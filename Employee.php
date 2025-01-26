<?php
class Employee
{
    public $surname;
    public $name;
    private $age;

    // Відкриті  методи
    public function get_age()
    {
        return $this->age;
    }
    public function set_age($val)
    {
        $val = intval($val);
        if ($val >= 18 && $val <= 65) {
            $this->age = $val;
            return true;
        } else {
            return false;
        }

    }

    public function get_info()
    {
        return $this->surname . " " . $this->name;
    }

    public function get_full_info()
    {
        return "{$this->get_info()} {$this->get_age()}";
    }
}