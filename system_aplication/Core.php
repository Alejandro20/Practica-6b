<?php

require "/system_aplication/request.php";
class Core{
	static function init(){
		//echo 'Core en funcionament';
			echo var_dump(Request::retrieve());
			echo"</br>";
            echo('Controller: ');
            print_r(Request::getCount()); 
            echo"</br>";
            echo('Parms: ');
            print_r(Request::getParams());
			echo"</br>";
            echo('Action: ');
            print_r(Request::getAction());


	}
}