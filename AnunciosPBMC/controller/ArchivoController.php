<?php
	
	class ArchivoController{

		public $ruta_archivo_guardar;
		public $mes_archivo;
		public $archivo_escritura;

	

	public function __construct(){

		$this->ruta_archivo_guardar = "../config/cumpleanios.txt";
		
		if (touch($this->ruta_archivo_guardar)){
			$this->archivo_escritura = fopen($this->ruta_archivo_guardar,"w+");
		}


	}

	public function guardarRegistroCumpleanios($registro_cumpleaniero){

		fwrite($this->archivo_escritura, $registro_cumpleaniero);
	}

	public function cerrarArchivo(){

		fclose($this->archivo_escritura);
	}

	/*
	$mes_actual = date('m');


	echo $mes_actual;

	$archivo_cumpleanios = "../cumpleanios.txt";
	$archivo_cumpleanios2 = "cumpleanios2.txt";
	if(touch($archivo_cumpleanios)&&touch($archivo_cumpleanios2)){
		//
		$archivoID = fopen($archivo_cumpleanios, "r");
		$archivo_escritura = fopen($archivo_cumpleanios2,"w+");
		//
		while(!feof($archivoID)){
			$linea = fgets($archivoID, 1024);
			
			fwrite($archivo_escritura, $linea);
			print $linea."\n";
			
		}
		//
		fclose($archivoID);
	}
	*/
	
	/*
	function leer_fichero_completo($nombre_fichero){
		//abrimos el archivo de texto y obtenemos el identificador
		$fichero_texto = fopen ($nombre_fichero, "r");
		//obtenemos de una sola vez todo el contenido del fichero
		//OJO! Debido a filesize(), sólo funcionará con archivos de texto
		$contenido_fichero = fread($fichero_texto, filesize($nombre_fichero));
		return $contenido_fichero;
	 }*/
	}
?>