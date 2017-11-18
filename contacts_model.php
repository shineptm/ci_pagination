<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contacts_model extends CI_Model {
    
      function __construct() {
          parent::__construct();
          $this->load->database();
    }
    // Count all record of table "contact_info" in database.
      public function record_count() {
        return $this->db->count_all("products");
    }
    
    // Fetch data according to per_page limit.
    public function fetch_data($limit, $start) {
         $this->db->limit($limit, $start);
        $query = $this->db->get("products");

        if ($query->num_rows() > 0) {
            
            foreach ($query->result_array() as $row) {
                 $rows[] = $row;
            }
         
            return $rows;
        }
        return false;
   }
}
?>