<?php

class usuarios_model extends CI_model{
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    //mostrar usuarios
    public function list_all(){
        $query=$this->db->query("select * from usuario");
        $result=$query->result_object();
        $this->db->close();
        return $result;
    }
    //guardar usuairos
    public function save($nombre,$apepat){
        $this->db->query("insert into usuario(nombre,apepat) values ('".$nombre."','".$apepat."')");
        $this->db->close();
        
    }
    
    public function delete($usuario_id){
        $this->db->query("delete from usuario where usuario_id='".$usuario_id."'");
        $this->db->close();
        
        
    }
    
    public function find_by_id($usuario_id){
        $query=$this->db->query("select * from usuario where usuario_id='".$usuario_id."'");
        $result=$query->result_object();
        $this->db->close();
        return $result;
    }
}