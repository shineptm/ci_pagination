<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

class Contacts extends CI_Controller {
    
    // Load libraries in Constructor.
     function __construct() {
        parent::__construct();
         $this->load->model('contacts_model');
        $this->load->library('pagination');
    }

    public function index()
	{
		$this->contact_info();
	}
        
    // Set array for PAGINATION LIBRARY, and show view data according to page.
    public function contact_info(){
        $config = array();
        $config["base_url"] = site_url('contacts/contact_info');
        $total_row = $this->contacts_model->record_count();
        $config["total_rows"] = $total_row;
        $config["per_page"] = 20;
        $config['use_page_numbers'] = TRUE;
        $config['num_links'] = $total_row;
        $config['cur_tag_open'] = '&nbsp;&nbsp;<a style="text-decoration: none;">';
        $config['cur_tag_close'] = '</a>&nbsp;&nbsp;';
        $config['next_link'] = '  Next';
        $config['prev_link'] = 'Prev  ';
       
        $this->pagination->initialize($config);
        if($this->uri->segment(3)){
        $page = ($this->uri->segment(3)) ;
          }
        else{
               $page = 1;
        }
        $limit = $config["per_page"];
        $start_from = ($page-1) * $limit; 
        
        $data["results"] = $this->contacts_model->fetch_data($limit, $start_from);
        $str_links = $this->pagination->create_links();
        $data["links"] = explode('&nbsp;',$str_links );
        
        // View data according to array.
        $this->load->view("contacts_view", $data);
        }
   }
?>