<?php

namespace App\Http\Controllers;

use App\SingletonSample;

class HelloController extends Controller {
	function index(){
		$bird  = SingletonSample::getInstance();
	
#		$singletonsample = new SingletonSample;
#		$singletonsample->getInstance():
#		$singletonsample->name = 'ぴーちゃん';
#		echo $singletonsample->name; 
		
		$bird->call();
		$bird->fly();
	}

#function additional($i, $j){
 # if( !is_int($i) || !is_int($j) ) return;
#  if( is_float($i) || is_float($j)) return;
#  if( $i > 999 || $j > 999 ) return;
#  if( $i < -999 || $j < -999 ) return;
#  $result  = $i + $j;
#  if( $result == 777 ) return "Happy";
#  if( $result > 1998 ) return;
#  if( $result < -1998 ) return;
#  return $result;
#}


#class HelloController extends Controller {
#	public function index(){
 #   	return view('hello.index');		
#	}
}