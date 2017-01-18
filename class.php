<?php
class Cat
{
	public $color;
	public $strip=true;
	private $temper='evil';//настроение
	private $hungry=true;//голод
	function __construct($col,$str)
	{
		$this->color=$col;
		$this->strip=$str;
	}
	public function getName($name)
	{
		echo "<b>".$name."</b>";
	}
	public function getSound($sound='Meeeaaauuu')
	{
		echo "<h3>".$sound."</h3>";
	}
	private function Hungry($hungry)
	{
		if($hungry){
			$this->getSound();
			$this->temper='evil';
		}
		else
		{
			$this->hungry=false;
			$this->temper='gentle';
		}	
	}
	public function feed()
	{
		$this->Hungry(false);
	}
	public function getHungry()
	{
		return $this->hungry;
	}
	public function getTemper()
	{
		return $this->temper;
	}
	
}

class Player
{
	public $type='MP3';
	public $weigth=50;
	private $playlist=array();
	function __construct($type, $weigth=50)
	{
		$this->type=$type;
		$this->weigth=$weigth;
	}
	public function play()
	{
		foreach ($this->playlist as $key=>$value)
		{
			echo $value."</br>";
		}
	}
	public function next_song()
	{
		return next($this->playlist);
	}
	public function prev_song()
	{
		return  prev($this->playlist);
	}
	public function pause()
	{
		return current($this->playlist);
	}
	public function putMusuc($arr)
	{
		$this->playlist=$arr;
	}
}
class Citizen
{
	private $name;
	private $age;
	private $sex;//m or f
	private $job;
	function __construct($n,$a,$s,$j='workless')
	{
		$this->name=$n;
		$this->age=(int)$a;
		$this->sex=$s;
		$this->job=$j;
	}
	public function sayJob(){
		echo $this->job;
	}
	public function gonewJob($newjob){
		$this->job=$newjob;
		echo"Моя новая работа ".$this->$job;
	}
	public function sayName(){
		echo $this->name;
	}
	public function sayAge(){		
		echo $this->age;
	}
	public function gotoWar(){
		if ($this->sex=='m' && $this->age>18){
		echo "В атаку!УРААААА!";
		}
		else{
		echo"Я буду бороться с врагом у станка!";	
		}
	}
}
class PhotoCamera()
{
	public $brand;
	public $numMp;
	public $removeLens;
	public $color;
	public $weigth;
	function __construct($brand;){
		$this->brand=$type;
		
	};
	public function zoom($str,$x){
		for($i=0,i<$x,$i){
			echo "<big>";
		};
		echo $str;
		
		for($i=0,i<$x,$i){
			echo "<big>";
		};
		
	}
	public getPicture{};
	public flash{};
	public dischargeAcc();
	
}

class Microvave
{
	public $capasity;
	private $power;
	private $timer;
	function __construct($capasity){
		$this->capasity=$capasity;
	};
	public function setPower($power){
		$this->power=$power;
		return true;
	}
	public function setTimer($timer){
		$this->timer=$timer;
		return true;
	}
	private function beep()
	{
		echo"BEEEEEEEP";
	}
	
	public function getcook(){
	if(!empty($this->power)&&!empty($this->timer)){
		echo "Процесс запущен";
		beep();
	}
	elseif (empty($this->power){
		echo "Не установлен уровень мощности";
	}
	elseif (empty($this->timer){
		echo"Не установлено время приготовления";
	}
		
	}	
}	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
}