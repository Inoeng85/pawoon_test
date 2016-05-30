<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users_Model extends CI_Model 
{
    /**
     * Constructor
     *
     * @access public
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }  
	
   /**
     * Get the manufacturers
     *
     * @access public
     * @return array
     */
    public function get_users()
    {
/*         $result = $this->db
        ->select('uuid, nama, alamat')
        ->from('tbl_users')
        ->order_by('nama')
        ->get(); */
		
		$result = $this->db->get('tbl_users');
        
        if ($result->num_rows() > 0)
        {
            return $result->result_array();
        }
        
        return NULL;
    }	
 
}

/* End of file rest_model.php */
/* Location: ./system/models/rest_model.php */