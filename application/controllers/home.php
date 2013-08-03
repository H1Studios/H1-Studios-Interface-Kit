<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Home extends BASE_Controller {
	
    public function __construct() {
    	
    	parent::__construct();
        
        $this->data['page']['title'] = "Styleguide";
        $this->data['page']['subtitle'] = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed fringilla, turpis et condimentum sagittis, odio mi mollis purus, eget posuere ante nulla a neque.";
        $this->data['page']['nav'] = 'styleguide';
        
	}
	
    public function index() {
	    
	    /* ----------------------------------------------------------- */
    	/* Define View                                                 */
    	/* ----------------------------------------------------------- */
    	
        $this->twig->display('pages/home/index.php', $this->data);
        
    }
	
}