<?php

namespace App;

class SingletonSample {
	// メンバー変数
	public $name;
	
	// 唯一のインスタンスを保持する変数
	public static $instance; 
	
	// インスタンスを返すためのメソッド
	public static function getInstance(){
		if(!isset(self::$instance)){
			self::$instance = new SingletonSample();
			echo "a Singleton Sample was created!";			
		}
		return self::$instance;
	}
	
	// メソッドの宣言
    function call() {
        echo "わんわん！";
    }

   function fly() {
        echo "バタバタ";
    }
}
