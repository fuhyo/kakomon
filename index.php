<?php
/*
git hub

https://github.com/fuhyo/kakomon
git init
git remote add origin https://github.com/fuhyo/kakomon
git add filename
git commit -m "add new file"
git push origin master

git status
git add [filename]
git commit 


*/
 class Kakomon
 {
	 //
	 private $year;
	 private $hoge;
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
