<?php
class Employee {

  public $name;
  public $dept;


  function set_name($name) {
    $this->name = $name;
  }
  function set_dept($dept) {
    $this->dept = $dept;
  }
  function get_name() {
    return $this->name;
  }

  function get_dept() {
    return $this->dept;
  }
}

$emp1 = new Employee();
$emp2 = new Employee();
$emp1->set_name('Sudhanshu');
$emp1->set_dept("Tech");
$emp2->set_name('Geetansh');
$emp2->set_dept("Admin");
echo "Employee Name is :- ".$emp1->get_name();
echo "<br>";
echo "Department of employee is :- ".$emp1->get_dept();
echo "<br> <br>";
echo "Employee Name is :- ".$emp2->get_name();
echo "<br>";
echo "Department of employee is :- ".$emp2->get_dept();
?> 



