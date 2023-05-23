<?php
class Password_controller extends CI_Controller
{
    public function show_password_manager()
    {
        $user_id = $this->session->userdata('id');
        $passwords = $this->password_model->get_PasswordsByUsers($user_id);
        exit(json_encode($passwords));
    }

    public function addKeys()
    {
        $this->form_validation->set_rules('email', 'Email Address', 'required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('link', 'Link', 'required');
        $this->form_validation->set_rules('tag', 'Tag', 'required');

        if ($this->form_validation->run() == FALSE) {
            $json_response['form_errors'] = $this->form_validation->error_array();
            exit(json_encode($json_response));
        } else {

            // Get the password from input
            $password = $this->input->post('password');

            // Hash the password using password_hash()
            // $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

            $data = array(
                'user_id' => $this->session->userdata('id'),
                'username_email' => $this->input->post('email'),
                'password' => $password,
                'url' => $this->input->post('link'),
                'tag' => $this->input->post('tag')
            );

            $result = $this->password_model->insertKeys($data);

            if ($result) {
                $json_response['message'] = 'New keys added successfully';
                exit(json_encode($json_response));
            } else {
                $json_response['message'] = 'Something went wrong.';
                exit(json_encode($json_response));
            }
        }
    }

    public function show_edit($id)
    {

        $show_edit_value = $this->password_model->get_show_edit($id);
        exit(json_encode($show_edit_value));
    }

    public function update($id)
    {
        $user_id = $this->session->userdata('id');

        $data = array(
            'id' => $id,
            'user_id' => $user_id,
            'username_email' => $this->input->post('email'),
            'password' => $this->input->post('password'),
            'url' => $this->input->post('link'),
            'tag' => $this->input->post('tag')
        );

        $result = $this->password_model->update_key($data);
        exit(json_encode($result));
    }

    public function delete($id)
    {
        $this->password_model->delete_key($id);
        $json_response['message'] = 'Key successfull deleted.';
        exit(json_encode($json_response));
    }
}
