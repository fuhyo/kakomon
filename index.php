<?php
 class Kakomon
 {
	 //
	 private $year;
	 public function setYear($year){
		 $this->year = (string)filter_var($year);
	 }
	 public function getYear($year){
		 return $this->year;
	 }
 }
 
 $kakomon_obj_a = new kakomon;
 $kakomon_obj_a->setYear("2015");
 
 echo $kakomon_obj_a->getYear();
?>
