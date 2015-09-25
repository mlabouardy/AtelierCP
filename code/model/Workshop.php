<?php

/**
 * @author Mohamed Labouardy
 * @email mohamed@labouardy.com
 * @version 1.0
 */
 
class Workshop{
	private $id;
	private $name;
	private $subject;
	private $location;
	private $hours;
	private $laboratory;
	private $animator;
	private $description;
	
	public function __construct($id, $name, $subject, $location, $hours, $laboratory, $animator, $description) {
		$this->id=$id;
		$this->name=$name;
		$this->subject=$subject;
		$this->location=$location;
		$this->hours=$hours;
		$this->laboratory=$laboratory;
		$this->animator=$animator;
		$this->description=$description;
	}
	
	public function __destruct() {}
	
	public function getID(){
		return $this->id;
	}
	
	public function getName(){
		return $this->name;
	}
	
	public function getSubject() {
		return $this->subject;
	}
	
	public function getLocation(){
		return $this->location;
	}
	
	public function getHours(){
		return $this->hours;
	}
	
	public function getAnimator() {
		return $this->animator;
	}
	
	public function getDescription() {
		return $this->description;
	}
	
	public function getLaboratory() {
		return $this->laboratory;
	}
	
	public function setID($id){
		$this->id=$id;
	}
	
	public function setName($name){
		$this->name=$name;
	}
	
	public function setSubject($subject){
		$this->subject=$subject;
	}
	
	public function setLocation($location){
		$this->location=$location;
	}
	
	public function setAnimator($animator){
		$this->animator=$animator;
	}
	
	public function setLaboratory($laboratory){
		$this->laboratory=$laboratory;
	}
	
	public function setHours($hours){
		$this->hours=$hours;
	}
	
	public function setDescription($description){
		$this->description=$description;
	}
	
}