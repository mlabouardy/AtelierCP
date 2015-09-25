<?php

include 'Workshop.php';

class ListOfWorkshops{
	private $listOfWorkshops;
	
	public function __construct() {
		$this->listOfWorkshops = array();
	}
	
	public function __destruct(){
		unset($this->listOfWorkshops);
	}
	
	public function addWorkshop($workshop) {
		$this->listOfWorkshops[] = $workshop;
	}
	
	public function getListOfWorkshops() {
		return $this->listOfWorkshops;
	}
	
	public function keys() {
		return array_keys($this->listOfWorkshops->items );
	}
	
	public function numberOfWorkshops() {
		return count ( $this->listOfWorkshops );
	}
	
	public function printAllWorkshops() {
		foreach ( $this->listOfWorkshops as $workshop ) {
			echo $workshop->getID() . " " . $workshop->getName() . "<br/>";
		}
	}
	
}