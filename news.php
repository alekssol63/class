<?php
class News{
	private $newsName;
	private $text;
	private $dat;//дата
	private $author;
	public function __construct($newsName,$text,$date){
		$this->newsName=$newsName;	
		$this->text=$text;
		$this->dat=$date;
	}
	public function get_newsName(){
		echo $this->newsName;
	}
	public function get_text(){
		echo $this->text;
	}
	public function get_date(){
		echo $this->dat;
	}
	public function get_author(){
		echo $this->text;
	}	
	public function set_newsName($setnewsName){
		$this->newsName=$setnewsName;
	}	
	public function set_text($text){
		$this->text=$text;
	}
	public function set_date($date){
		$this->dat=$date;
	}
	public function set_author($author){
		$this->author=$author;
	}
}