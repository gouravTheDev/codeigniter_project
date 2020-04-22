<?php defined('BASEPATH') OR exit('No direct script access allowed'); 
 
class User extends CI_Model{  
    /* 
     * Fetch user data from the database 
     * @param array filter data based on the passed parameters 
     */ 
    function checkLoginTeacher($data = array()){ 
        $this->load->database();
        $email = $data['email'];
        $password = $data['password'];
        $role = $data['role'];
        $query = $this->db->query("SELECT * FROM teachers WHERE EMAIL='$email' AND PASSWORD = '$password'");
        if ($query) {
            $this->session->set_userdata('role','Lecturer');
            return $query->row_array();
        }else{
            return null;
        }

        
    } 

    function checkLoginStudent($data = array()){ 
        $this->load->database();
        $email = $data['email'];
        $password = $data['password'];
        $role = $data['role'];
        $query = $this->db->query("SELECT * FROM students WHERE EMAIL='$email' AND PASSWORD = '$password'");
        if ($query) {
            $this->session->set_userdata('role','Student');
            return $query->row_array();
        }else{
            return null;
        }
    }

    function checkLoginManager($data = array()){ 
        $this->load->database();
        $email = $data['email'];
        $password = $data['password'];
        $role = $data['role'];
        $query = $this->db->query("SELECT * FROM managers WHERE EMAIL='$email' AND PASSWORD = '$password'");

        if ($query) {
            $this->session->set_userdata('role','Manager');
            return $query->row_array();
        }else{
            return null;
        }
    }
     
    /* 
     * Insert user data into the database 
     * @param $data data to be inserted 
     */ 
    public function insert($data = array()) { 
        if(!empty($data)){ 
            // Add created and modified date if not included 
            if(!array_key_exists("created", $data)){ 
                $data['created'] = date("Y-m-d H:i:s"); 
            } 
            if(!array_key_exists("modified", $data)){ 
                $data['modified'] = date("Y-m-d H:i:s"); 
            } 
             
            // Insert member data 
            $insert = $this->db->insert($this->table, $data); 
             
            // Return the status 
            return $insert?$this->db->insert_id():false; 
        } 
        return false; 
    } 
}