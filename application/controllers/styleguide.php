<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Styleguide extends BASE_Controller {
	
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
    	
        $this->twig->display('pages/styleguide/index.php', $this->data);
        
    }
	
    public function components() {
        
	    /* ----------------------------------------------------------- */
    	/* Define View                                                 */
    	/* ----------------------------------------------------------- */
    	
        $this->twig->display('pages/styleguide/components.php', $this->data);
        
    }
	
}