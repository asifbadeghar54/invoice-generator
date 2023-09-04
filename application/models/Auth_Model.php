<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Auth_Model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    public function verifyAdminUsername($id)
    {

        $result = $this->db->where('username', $id)->get('auth');
        return $result;
    }
    
    public function checkPassword()
    {
        $id = $this->session->userdata('admin_member_id');
        $old_password = $this->input->post('old_password');
        $confirm_password = $this->input->post('confirm_password');
        $checkOldPassword = $this->db->where('authId', $id)->where('password', $old_password)->get('auth');
        if ($checkOldPassword->num_rows() > 0) {
            $data = array(
                'password' => $confirm_password,
            );
            $update = $this->db->set($data)->where('authId', $id)->update('auth');
            if ($update) {
                $this->session->unset_userdata('admin_username');
                $this->session->unset_userdata('admin_member_id');
                $this->session->set_flashdata('success', 'password updated successfully login again!!');
                redirect('login');
            }
        } else {
            $this->session->set_flashdata('error', 'old password is incorrect');
            redirect('reset-password');
        }
    }
    // Server
}
