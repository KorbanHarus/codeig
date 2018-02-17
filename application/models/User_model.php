<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

    public function __construct(){
        parent::__construct();
        $this->load->database();
        
    }

    public function insertex($id, $name)
    {
        $data = array('id' => $id, 'name'=> $name );
        $this->db->insert('stud', $data);
        
    }

    public function updateex($id, $name)
    {
        $data = array('id' => $id,'name'=>$name);
        
        $this->db->set($data);
        
        $this->db->where('id',1);
        
        $this->db->update('stud', $data);
        
    }

    public function deleteex($name)
    {
        $this->db->where('name', 'hi');
        $this->db->delete('stud');
    }

    public function selectex(Type $var = null)
    {
        
        $query=$this->db->get('stud');
        return $query->result();
        
    }

}

/* End of file User_model.php */




?>