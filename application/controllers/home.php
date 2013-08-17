<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Home extends BASE_Controller {
	
    public function __construct() {
    	
    	parent::__construct();
        
        $this->data['page']['title'] = "Home";
        $this->data['page']['subtitle'] = "";
        $this->data['page']['nav'] = 'home';
        
	}
	
    public function index() {
	    
	    /* ----------------------------------------------------------- */
    	/* Define View                                                 */
    	/* ----------------------------------------------------------- */
    	
        $this->twig->display('pages/styleguide/index.php', $this->data);
        
    }
	
}