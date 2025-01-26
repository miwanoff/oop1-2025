<?php

require_once( "Employee.php") ;

class Company{
	private $name;
	private $employees = [];	
	public function get_name() {
		return $this->name;
	}	
	public function set_name($name) {
		$this->name = $name;
	}	
	public function get_employees() {
		return $this->employees;
	}	
	public function set_employees(array $employees) {
		$this->employees = $employees;
	}	
	public function set_employee($i, $employee) {
		$this->employees[$i] = $employee;
	}	
	public function get_employee($i) {
		return $this->employees[$i];
	}	
	public function add_employee($employee) {
		$this->employees[] = $employee;
	}
}