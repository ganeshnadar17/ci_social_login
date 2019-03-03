<?php

// session_start(); //we need to start session in order to access it through CI

Class User_Authentication extends CI_Controller
{
    
    public function __construct()
    {
        parent::__construct();
        $this->load->library('google');
        $this->load->helper('url');
        
        // Load form helper library
        $this->load->helper('form');
        
        // Load form validation library
        $this->load->library('form_validation');
        
        // Load session library
        $this->load->library('session');
        
        // Load database
        $this->load->model('login_database');
    }
    
    // Show login page
    public function index()
    {
        // $data['google_login_url'] = $this->google->get_login_url();
        // $this->load->view('login_form', $data);

        $this->load->view('subscribe_popup');
    }
    
    // Show registration page
    public function user_registration_show()
    {
        $data['google_login_url'] = $this->google->get_login_url();
        $this->load->view('registration_form', $data);
    }
    
    // Validate and store registration data in database
    public function new_user_registration()
    {
        
        // Check validation for user input in SignUp form
        $this->form_validation->set_rules('user_email', 'Email', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        if ($this->form_validation->run() == FALSE) {
            $data['google_login_url'] = $this->google->get_login_url();
            $this->load->view('registration_form', $data);
        } else {
            $data   = array(
                'username' => $this->input->post('user_email'),
                'password' => $this->input->post('password'),
                'status'   => 1,
                'ip'        => $this->input->ip_address()
            );
            $result = $this->login_database->registration_insert($data);
            if ($result == TRUE) {
                $username = $this->input->post('user_email');
                $result   = $this->login_database->read_user_information($username);
                $session_data = array(
                    'username' => $result[0]->username
                );
                // Add user data in session
                $this->session->set_userdata('logged_in', $session_data);
                $this->load->view('admin_page');
            } else {
                $data['message_display'] = 'Username already exist!';
                $data['google_login_url'] = $this->google->get_login_url();
                $this->load->view('registration_form', $data);
            }
        }
    }
    
    // Check for user login process
    public function user_login_process()
    {
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        
        if ($this->form_validation->run() == FALSE) {
            if (isset($this->session->userdata['logged_in'])) {
                // $data['google_login_url'] = $this->google->get_login_url();
                $this->load->view('admin_page');
            } else {
                $data['google_login_url'] = $this->google->get_login_url();
                $this->load->view('login_form', $data);
            }
        } else {
            $data   = array(
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password')
            );
            $result = $this->login_database->login($data);
            if ($result == TRUE) {
                
                $username = $this->input->post('username');
                $result   = $this->login_database->read_user_information($username);
                if ($result != false) {
                    $session_data = array(
                        'username' => $result[0]->username
                    );
                    // Add user data in session
                    $this->session->set_userdata('logged_in', $session_data);
                    // $data['username'] = $result['username'];
                    $this->load->view('admin_page');
                }
            } else {
                $data = array(
                    'error_message' => 'Invalid Username or Password'
                );
                $data['google_login_url'] = $this->google->get_login_url();
                $this->load->view('login_form', $data);
            }
        }
    }
    
    // Logout from admin page
    public function logout()
    {
        
        // Removing session data
        $sess_array = array(
            'username' => ''
        );
        $this->session->unset_userdata('logged_in', $sess_array);
        $data['message_display'] = 'Successfully Logout';
        $data['google_login_url'] = $this->google->get_login_url();
        $this->load->view('login_form', $data);
    }

    public function oauth2callback(){
    	$google_data=$this->google->validate();
            $data   = array(
                'user_name' => $google_data['name'],
                'user_email' => $google_data['email'],
                'user_password' => $google_data['name']
            );

            print_r($data);
            $result = $this->login_database->registration_insert($data);

            print_r($result);
            exit();
            if ($result == TRUE) {
                $data['message_display'] = 'Registration Successfully !';
                $session_data=array(
                'name'=>$google_data['name'],
                'email'=>$google_data['email'],
                'source'=>'google',
                'profile_pic'=>$google_data['profile_pic'],
                'link'=>$google_data['link'],
                'sess_logged_in'=>1
                );
            $this->session->set_userdata($session_data);
            $this->load->view('profile');
            } else {
                $data['message_display'] = 'Username already exist!';
                $data['google_login_url'] = $this->google->get_login_url();
                $this->load->view('registration_form', $data);
            }
    }
}

?>