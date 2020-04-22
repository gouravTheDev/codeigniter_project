<?php defined('BASEPATH') OR exit('No direct script access allowed'); 
 
class Users extends CI_Controller { 
     
    function __construct() { 
        parent::__construct(); 
         
        // Load form validation ibrary & user model 
        // $this->load->library('form_validation'); 
        $this->load->model('user'); 
         
        // User login status 
        $this->isUserLoggedIn = $this->session->userdata('isUserLoggedIn'); 
    } 
     
    public function index(){ 
       
        // if($this->isUserLoggedIn){ 
        //     // $this->load->view('');
        //     echo "loggedIn";
        // }else{ 
        //     $this->load->view('users/login');
        // } 
    } 
 
    public function studentDashboard(){ 
        $data = array(); 
        if($this->isUserLoggedIn){ 
            $this->load->view('elements/header', $data); 
            $this->load->view('users/studentDashboard', $data);            
            $this->load->view('elements/footer'); 
        }else{ 
            redirect(base_url('users/login')); 
        } 
    }
    public function teacherDashboard(){ 
        $data = array(); 
        if($this->isUserLoggedIn){ 
            $this->load->view('elements/header', $data); 
            $this->load->view('users/teacherDashboard', $data);
            $this->load->view('elements/footer'); 
        }else{ 
            redirect(base_url('users/login')); 
        } 
    } 
    public function managerDashboard(){ 
        $data = array(); 
        if($this->isUserLoggedIn){ 
            $this->load->view('elements/header', $data); 
            $this->load->view('users/managerDashboard', $data);
            $this->load->view('elements/footer'); 
        }else{ 
            redirect(base_url('users/login')); 
        } 
    } 
 
    public function login(){ 
        $data = array();  
         
        // If login request submitted 
        if($this->input->post('loginSubmit')){ 
            $dataPost = array('email' => $this->input->post('email'),
                            'password' => md5($this->input->post('password')),
                            'role'=> $this->input->post('role')
                            );
            if ($this->input->post('role') == 'Lecturer') {
                $checkLogin = $this->user->checkLoginTeacher($dataPost);
            }else if ($this->input->post('role') == 'Student') {
                $checkLogin = $this->user->checkLoginStudent($dataPost);
            }else{
                $checkLogin = $this->user->checkLoginManager($dataPost);
            }
            print_r($checkLogin);
             
            // echo $checkLogin;
            if($checkLogin){ 
                $this->session->set_userdata($checkLogin);
                $this->session->set_userdata('isUserLoggedIn',TRUE);
                if ($_SESSION['role'] == 'Lecturer') {
                    redirect(base_url('users/teacherDashboard'));; 
                }else if($_SESSION['role'] == 'Student'){
                    redirect(base_url('users/studentDashboard'));
                }else{
                    redirect(base_url('users/managerDashboard'));
                }
                 
            }else{ 
                $data['error_msg'] = 'Wrong credentials, please try again.'; 
            } 
        } 
         
        // Load view 
        $this->load->view('elements/header', $data); 
        $this->load->view('users/login', $data); 
        $this->load->view('elements/footer'); 
    } 
 
    public function registration(){ 
        $data = $userData = array(); 
         
        // If registration request is submitted 
        if($this->input->post('signupSubmit')){ 
            $this->form_validation->set_rules('first_name', 'First Name', 'required'); 
            $this->form_validation->set_rules('last_name', 'Last Name', 'required'); 
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email|callback_email_check'); 
            $this->form_validation->set_rules('password', 'password', 'required'); 
            $this->form_validation->set_rules('conf_password', 'confirm password', 'required|matches[password]'); 
 
            $userData = array( 
                'first_name' => strip_tags($this->input->post('first_name')), 
                'last_name' => strip_tags($this->input->post('last_name')), 
                'email' => strip_tags($this->input->post('email')), 
                'password' => md5($this->input->post('password')), 
                'gender' => $this->input->post('gender'), 
                'phone' => strip_tags($this->input->post('phone')) 
            ); 
 
            if($this->form_validation->run() == true){ 
                $insert = $this->user->insert($userData); 
                if($insert){ 
                    $this->session->set_userdata('success_msg', 'Your account registration has been successful. Please login to your account.'); 
                    redirect('users/login'); 
                }else{ 
                    $data['error_msg'] = 'Some problems occured, please try again.'; 
                } 
            }else{ 
                $data['error_msg'] = 'Please fill all the mandatory fields.'; 
            } 
        } 
         
        // Posted data 
        $data['user'] = $userData; 
         
        // Load view 
        $this->load->view('elements/header', $data); 
        $this->load->view('users/registration', $data); 
        $this->load->view('elements/footer'); 
    } 
     
    public function logout(){ 
        $this->session->unset_userdata('isUserLoggedIn'); 
        $this->session->unset_userdata('userId'); 
        $this->session->sess_destroy(); 
        redirect(base_url('users/login'));
    } 
     
     
    // Existing email check during validation 
    public function email_check($str){ 
        $con = array( 
            'returnType' => 'count', 
            'conditions' => array( 
                'email' => $str 
            ) 
        ); 
        $checkEmail = $this->user->getRows($con); 
        if($checkEmail > 0){ 
            $this->form_validation->set_message('email_check', 'The given email already exists.'); 
            return FALSE; 
        }else{ 
            return TRUE; 
        } 
    } 
}