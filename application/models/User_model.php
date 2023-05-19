<?php
class User_model extends CI_Model
{
    public function get_unique_username($username)
    {
        $query = $this->db->get_where('users', array('username' => $username));
        return $query->num_rows() === 0;
    }

    public function get_unique_email($email)
    {
        $query = $this->db->get_where('users', array('email' => $email));
        return $query->num_rows() === 0;
    }

    public function verify_user($user_data)
    {
        $username = $user_data['username'];
        $password = $user_data['password'];

        $query = $this->db->get_where('users', array(
            'username' => $username,
            'password' => $password,
        ));
        if ($query->num_rows() > 0) {
            return $query->row();
        } else {
            return FALSE;
        }
    }

    public function get_all()
    {
        // code to retrieve all records goes here
    }

    public function get($id)
    {
        // code to retrieve a single record by ID goes here
    }

    public function create($form_data)
    {
        $this->db->insert('users', $form_data);
    }

    public function update($id, $data)
    {
        // code to update an existing record by ID goes here
    }

    public function delete($id)
    {
        // code to delete a record by ID goes here
    }
}
