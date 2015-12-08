<?php
class Person {

  var $name;

  function __construct($persons_name) {
    $this->name = $persons_name;
  }

  public function get_name() {
    return $this->name;
  }

  public function set_name($new_name) {
    if (name != "Jimmy Two Guns") {
      $this->name = strtoupper($new_name);
    }
  }

  public function getNamesFromDB(){
  	/*
		query sql untuk mengambil data
		return data berupa array
  	*/
	return array();
  }

}
