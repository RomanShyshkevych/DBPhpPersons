<?php
class Person
{
	private $id, $firstName, $lastName, $age;
	private $phones;
	
	function __construct($id, $firstName, $lastName, $age, $phones)
    {
        $this->id = $id;
		$this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->age = $age;
		$this->phones = $phones;
    }
	function getId()
    {
        return $this->id;
    }
	function getFirstName()
    {
        return $this->firstName;
    }
	function getLastName()
    {
        return $this->lastName;
    }
	function getAge()
    {
        return $this->age;
    }
	function getPhones()
    {
        return $this->phones;
    }
}
?>