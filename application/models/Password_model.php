<?php
class Password_model extends CI_Model
{
    public function get_PasswordsByUsers($user_id)
    {
        $this->db->where('user_id', $user_id);
        $query = $this->db->get('password_manager');
        return $query->result_array();
    }

    public function insertKeys($data)
    {
        return $this->db->insert('password_manager', $data);
    }

    public function get_show_edit($id)
    {

        $this->db->where('id', $id);
        $query = $this->db->get('password_manager');
        return $query->row_array();
    }

    public function update_key($data)
    {
        $id = $data['id'];

        $this->db->where('id', $id);
        return $this->db->update('password_manager', $data);
    }

    public function delete_key($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('password_manager');
        return true;
    }
}
