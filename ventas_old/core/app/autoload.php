<?php

// esta funcion elimina el hecho de estar agregando los modelos manualmente
/* function __autoload($modelname){
	if(Model::exists($modelname)){
		include Model::getFullPath($modelname);
	} 
} */

spl_autoload_register(function($modelname){
	if(Model::exists($modelname)){
		include Model::getFullPath($modelname);
	} 
});

?>