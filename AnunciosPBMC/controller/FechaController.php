<?php
    class FechaController{

        public $fecha_actual;
        public $dia_actual; 
        public $mes_actual;

        public function __construct()
        {
            $this->fecha_actual = date('d-m-Y');
            $this->mes_actual = date('m');
            $this->dia_actual = date('d');
        }

        public static function obtenerNombreMesActual (){
            
            $mes_actual = date('F');

            switch ($mes_actual) {
                case 'January':
                    $nombre_mes_actual = 'ENERO';
                    break;
                case 'February':
                    $nombre_mes_actual = 'FEBRERO';
                    break;    
                case 'March':
                    $nombre_mes_actual = 'MARZO';
                    break;    
                case 'April':
                    $nombre_mes_actual = 'ABRIL';
                    break;    
                case 'May':
                    $nombre_mes_actual = 'MAYO';
                    break;    
                case 'June':
                    $nombre_mes_actual = 'JUNIO';
                    break;    
                case 'July':
                    $nombre_mes_actual = 'JULIO';
                    break;    
                case 'August':
                    $nombre_mes_actual = 'AGOSTO';
                    break;    
                case 'September':
                    $nombre_mes_actual = 'SEPTIEMBRE';
                    break;    
                case 'October':
                    $nombre_mes_actual = 'OCTUBRE';
                    break;    
                case 'November':
                    $nombre_mes_actual = 'NOVIEMBRE';
                    break;    
                case 'December':
                    $nombre_mes_actual = 'DICIEMBRE';
                    break;    
                                                                                                                                                                                                                                                                                                     
                default:
                    # code...
                    break;
            }

            return $nombre_mes_actual;
        }

        public static function obtenerDiaActual(){

            $dia_actual = date('d');

            return $dia_actual;
        }

        public static function obtenerNumeroMesActual(){

            $mes_actual = date('m');
            
            return $mes_actual;
        }
    }

?>