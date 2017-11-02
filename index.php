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

/*

 出題モードを設定して、実行すると過去問が1題づつ出題される
 
 選べる項目
 ・難易度
 ・分野
 ・年度
 ・出題問題数
 ・形式（4択、ox)
 ・時間制限あり、なし


*/

// インスタンスを作成
$kakomon_obj_a = new kakomon;

// getter/setter
$kakomon_obj_a->setYear("2015");
echo $kakomon_obj_a->getYear();


class Kakomon
{
	 //
	 private $year;
	 
	 //
	 public function __construct(){
		 // インスタンス生成時に自動的にコール
		 // デフォルトを設定する
	 }
	 
	 // getter/setter
	 public function setYear($year){
		 $this->year = (string)filter_var($year);
	 }
	 public function getYear($year){
		 return $this->year;
	 }
}
// /class kakomon


?>
