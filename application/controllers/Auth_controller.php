<?php
class Auth_controller extends CI_Controller
{

    public function homepage()
    {
        $this->load->view('templates/header');
        $this->load->view('pages/home');
        $this->load->view('templates/footer');
    }

    public function show_login()
    {
        $data['title'] = 'Log in';

        $this->load->view('templates/header');
        $this->load->view('auth/login', $data);
        $this->load->view('templates/footer');
    }

    public function show_signup()
    {
        $data['title'] = 'Sign up';

        $this->load->view('templates/header');
        $this->load->view('auth/sign-up', $data);
        $this->load->view('templates/footer');
    }

    public function show_dashboard()
    {
        $data['title'] = 'Manager';

        $this->load->view('templates/header');
        $this->load->view('auth/dashboard', $data);
        $this->load->view('templates/footer');
    }


    public function login()
    {
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == FALSE) {
            $json_response['form_errors'] = $this->form_validation->error_array();
            exit(json_encode($json_response));
        } else {
            $user_data = array(
                'email' => $this->input->post('email'),
                'password' => $this->input->post('password'),
            );

            $auth_user = $this->user_model->verify_user($user_data);

            if ($auth_user) {
                $this->session->set_userdata($auth_user);
                $this->session->set_userdata('is_logged_in', true);
                $json_response['success'] = true;
                $json_response['redirect_url'] = base_url('dashboard');
            } else {
                $json_response['error'] = 'Invalid email or password';
            }

            exit(json_encode($json_response));
        }
    }

    public function signup()
    {

        $this->form_validation->set_rules('firstname', 'First Name', 'required');
        $this->form_validation->set_rules('lastname', 'Last Name', 'required');
        $this->form_validation->set_rules('username', 'User Name', 'required|callback_is_unique_username');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|callback_is_unique_email');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[8]|max_length[255]');
        $this->form_validation->set_rules('confirmpassword', 'Confirm Password', 'required|matches[password]');

        if ($this->form_validation->run() == FALSE) {
            $json_response['form_errors'] = $this->form_validation->error_array();
            exit(json_encode($json_response));
        } else {
            $enc_password = password_hash($this->input->post('password'), PASSWORD_BCRYPT);

            $form_data = array(
                'first_name' => $this->input->post('firstname'),
                'last_name' => $this->input->post('lastname'),
                'username' => $this->input->post('username'),
                'email' => $this->input->post('email'),
                'password' => $enc_password,
            );
            $this->user_model->create($form_data);

            $json_response['message'] = 'You are now registered! Please Login';
            exit(json_encode($json_response));
        }
    }

    public function is_unique_username()
    {
        $username = $this->input->post('username');
        $is_unique = $this->user_model->get_unique_username($username);

        if (!$is_unique) {
            $this->form_validation->set_message('is_unique_username', 'The username is already taken');
            return FALSE;
        }
        return TRUE;
    }

    public function is_unique_email()
    {
        $email = $this->input->post('email');
        $is_unique_email = $this->user_model->get_unique_email($email);

        if (!$is_unique_email) {
            $this->form_validation->set_message('is_unique_email', 'The email is already taken');
            return FALSE;
        }
        return TRUE;
    }

    public function logout()
    {
        $session_data = array('user_id', 'email', 'password', "is_logged_in");
        $this->session->unset_userdata($session_data);

        $this->session->sess_destroy();
        $this->session->set_flashdata('logout', 'You have successfully logged out');


        redirect('login');
    }


    public function show($id)
    {
        // code to retrieve a single record by ID from the model and pass it to a view goes here
    }

    public function create()
    {
        // code to display a form for creating a new record goes here
    }

    public function store()
    {
        // code to process the form submission and create a new record in the model goes here
    }

    public function edit($id)
    {
        // code to retrieve a single record by ID from the model, display a form for editing it, and pass the record data to the form goes here
    }

    public function update($id)
    {
        // code to process the form submission and update an existing record in the model goes here
    }

    public function delete($id)
    {
        // code to delete a record by ID from the model goes here
    }
}
