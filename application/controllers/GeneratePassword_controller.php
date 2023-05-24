<?php
class GeneratePassword_controller extends CI_Controller
{
    public function show_generate_password()
    {
        if (!$this->session->userdata('logged_in')) {
            // User is not logged in, redirect to login page
            redirect('login');
        } else {
            $data['title'] = 'Key Generator';

            $this->load->view('templates/header');
            $this->load->view('auth/generate', $data);
            $this->load->view('templates/footer');
        }
    }

    public function generate()
    {
        function random_password()
        {
            $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
            $password = array();
            $alpha_length = strlen($alphabet) - 1;
            for ($i = 0; $i < 12; $i++) {
                $n = rand(0, $alpha_length);
                $password[] = $alphabet[$n];
            }
            return implode($password);
        }
        $password = random_password();
        exit(json_encode($password));
    }
}
