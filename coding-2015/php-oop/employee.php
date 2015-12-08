<?php
include_once "person.php";

class Employee extends Person {

  public function set_name($new_name) {

    if ($new_name == "Stefan Sucks") {
      $this->name = $new_name;
    } else if($new_name == "Johnny Fingers") {
      parent::set_name($new_name);
    } else {
      $this->name = $new_name;
    }

  }

  function __construct($employee_name) {
    $this->set_name($employee_name);
  }
}
