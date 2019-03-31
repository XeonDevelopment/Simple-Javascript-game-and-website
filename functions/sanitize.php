<?php 
function escape($string){
	if(is_array($string)){
        
        //Stops HTML code from being parsed and changes into entity quote
        //EG a space would be pardes as &nbsp;
        
		return htmlentities($string, ENT_QUOTES, 'UTF-8');
	}else{
		return htmlentities($string, ENT_QUOTES, 'UTF-8');
	}
}