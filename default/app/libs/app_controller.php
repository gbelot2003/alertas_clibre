<?php
/**
 * @see Controller nuevo controller
 */
require_once CORE_PATH . 'kumbia/controller.php';

/**
 * Controlador principal que heredan los controladores
 *
 * Todas las controladores heredan de esta clase en un nivel superior
 * por lo tanto los metodos aqui definidos estan disponibles para
 * cualquier controlador.
 *
 * @category Kumbia
 * @package Controller
 */
class AppController extends Controller
{

    final protected function initialize()
    {
        $this->siteTitle = NULL; 
        $this->navbar = true;
        $this->reportesBar = NULL;
        $this->estadisticas = NULL;
    	// Instancias de clases para menu
    	$this->inicio = NULL; // index_controller
        $this->reportes = NULL;
        $this->rep_menu = NULL; // menu en reportes_controller 
        //$this->localpath = "/home/ajax/www/ktheme/default/public"; //generar ruta de graficas de informe
        //$this->localpath = 'C:\xampp\htdocs\ktheme\default\public'; //generar informes
        $this->localpath = "/home/ajax/www/alertas_clibre/default/public";

        View::template('bootstrap');
    }

    final protected function finalize()
    {

    }

}
