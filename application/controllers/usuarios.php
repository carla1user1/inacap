<?php
//navegador
class usuarios extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->model('usuarios_model');
        $this->load->helper('url');
        
    }
    public function index(){
        $data["usuario"]=  $this->usuarios_model->list_all();
     
        // llamar vista index
        $this->load->view('usuarios_index',$data);
    }
    public function nuevo(){
        $this->load->view('usuario_nuevo');
    }
    public function save(){
        $nombre=$this->input->post('nombre');
        $apepat=$this->input->post('apepat');
        $this->usuarios_model->save($nombre,$apepat);
        redirect('usuarios');
    }
    
    public function delete($usuario_id){
        $this->usuarios_model->delete($usuario_id);
            redirect('usuarios');
    
    }
    
    public function detail($usuario_id){
        $data["usuario"]=  $this->usuarios_model->find_by_id($usuario_id);
        $this->load->view('usuario_detail',$data);
        
    }
}