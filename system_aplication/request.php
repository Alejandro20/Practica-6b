<?php
    class Request{
        
        static private $question=array();
        static private $cont;
        static private $accion;
        static private $totalquestion;
        static private $parameter=array();
        static private $parameters;
        static function retrieve(){	
            self::$question =  explode('/',$_SERVER['REQUEST_URI']); 
            return self::$question;    
        }
        static function getCount(){	//cuenta los elementos del Array
            $totalquestion = count(self::$question);
            if($totalquestion == 3){
                echo "Controlador";
            }else{
               self::$cont = self::$question[1];
               return self::$cont; 
            } 
        }

        static function getParams(){	//los parammetros que sean impares
            $totalquestion = count(self::$question);
            $cont3=0;
            if($totalquestion >= 5){
                if($totalquestion % 3 == 0){
    	            for($cont2=3;$cont2 < $totalquestion;$cont2++){ 
    	            	self::$parameter[$cont3]= self::$question[$cont2];
           				$cont3++;  
    	            }
                    return self::$parameter;
            	}else{
            		echo "Parametros erroneos";
            	}
            }else{
                echo "Parameteros correctos";
            }
        }

          static function getAction(){  //Coge la action
            $totalquestion = count(self::$question);
            if($totalquestion >= 5){
                self::$accion = self::$question[3];
                return self::$accion; 
            }else{
                echo "Accion";
            }  
        }
    }
?>