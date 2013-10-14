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
        
        $this->data['page']['title'] = "Styles";
        $this->data['page']['subtitle'] = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed fringilla, turpis et condimentum sagittis, odio mi mollis purus, eget posuere ante nulla a neque.";
        
	    /* ----------------------------------------------------------- */
    	/* Define View                                                 */
    	/* ----------------------------------------------------------- */
    	
        $this->twig->display('pages/styleguide/index.php', $this->data);
        
    }
	
    public function components() {
        
        $this->data['page']['title'] = "Components";
        $this->data['page']['subtitle'] = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed fringilla, turpis et condimentum sagittis, odio mi mollis purus, eget posuere ante nulla a neque.";
        
	    /* ----------------------------------------------------------- */
    	/* Define View                                                 */
    	/* ----------------------------------------------------------- */
    	
        $this->twig->display('pages/styleguide/components.php', $this->data);
        
    }
	
    public function grid() {
        
        $this->data['page']['title'] = "Grid";
        $this->data['page']['subtitle'] = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed fringilla, turpis et condimentum sagittis, odio mi mollis purus, eget posuere ante nulla a neque.";
        
	    /* ----------------------------------------------------------- */
    	/* Define View                                                 */
    	/* ----------------------------------------------------------- */
    	
        $this->twig->display('pages/styleguide/grid.php', $this->data);
        
    }
	
    public function selectbox() {
        
        $this->data['page']['title'] = "Select";
        $this->data['page']['subtitle'] = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed fringilla, turpis et condimentum sagittis, odio mi mollis purus, eget posuere ante nulla a neque.";
        
	    /* ----------------------------------------------------------- */
    	/* Define View                                                 */
    	/* ----------------------------------------------------------- */
    	
        $this->twig->display('pages/styleguide/select.php', $this->data);
        
    }
	
}