<?php
class Father{
	public $name;//创建了一个公有属性$name
	public $age;//创建了一个公有属性$age
	
	public function __construct($name,$age){ //构造方法（构造函数）
		$this->name=$name;//初始化属性
		$this->age=$age;//初始化属性
	}
	
	public function jump(){//创建了一个公有方法jump
		echo '我能跳三米';
	}
	public function work(){//创建了一个公有方法work
		echo '我认真工作';
	}
}
class Son extends Father{
	public $height;//创建了一个公有属性$height
	public $weight;//创建了一个公有属性$weight

	public function __construct($name,$age,$height,$weight){ //构造方法（构造函数）
		parent::__construct($name,$age);//用parent实现对父类的属性继承（不用再写一遍代码），并且要带上形参$name,$age
		$this->height=$height;//初始化属性
		$this->weight=$weight;//初始化属性
	}

	public function jump(){//创建了一个公有方法jump
		echo '我能跳5米'; //继承父类后完全重写，保留父类的方法
	}
	public function work(){//创建了一个公有方法work
		parent::work(); //继承父类后不完全重写，保留父类的方法
		echo '而且还可以谈恋爱';//继承父类的方法后，重写了属于自己的方法
	}

}
$ming=new Son('小明',20,80,200);//创建一个对象$min,并且不能忘记传递参数（实参）：'小明',20,80,200
$ming->jump();//调用方法jump
$ming->work();//调用方法work

$a=new Father('小红',19);//创建一个对象$Father,并且不能忘记传递参数（实参）：'小红',19
$a->jump();//调用方法jump
$a->work();//调用方法work

?>
