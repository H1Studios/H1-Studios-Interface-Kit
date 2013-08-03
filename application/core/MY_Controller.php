<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class BASE_Controller extends CI_Controller {
	
	public $data;
    
    public function __construct() {
    	
        parent::__construct();
        
    	/* ----------------------------------------------------------- */
    	/* Define global page attributes                               */
    	/* ----------------------------------------------------------- */
    	
        $this->data['title'] = "Socialist";
        $this->data['subtitle'] = "- Organizing The Things You Love";
        $this->data['description'] = "";
        
        $this->data['page'] = array();
        
    	$this->twig->add_function('resource_url');
    	$this->twig->add_function('base_url');
        
    }
    
}
?>
