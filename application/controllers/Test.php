<?php
class Test extends CI_Controller {

    public function index(){
        
        $this->load->view('test');
        
          
    }

    public function insert(){
        $this->User_model->insertex(1, 'hello');
    }

    public function update()
    {
        $this->User_model->updateex(2,'hi');
    }

    public function delete()
    {
        $this->User_model->deleteex('hi');
    }

    public function select()
    {
       $result=$this->User_model->selectex();
        
        echo "<pre>";
        print_r ($result);
        
        echo "</pre>";
        
    }
    
}

?>