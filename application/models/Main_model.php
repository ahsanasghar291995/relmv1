<?php
class Main_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    function can_login($email, $password)
    {
        $query = $this->db->query("SELECT * FROM personal_info where email='$email' and password='$password'");
        if ($query->num_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }
    function can_update_pagetwo($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('login', $data);
    }
    function can_update_pagethree($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('login', $data);
    }
    function can_update_pagesix($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('login', $data);
    }
    function can_update_personal_info($data)
    {
        //$query = $this->db->query("select email,password from login where id = $id");
        $this->db->insert('personal_info', $data);
    }
    function display_records()
    {
        $query = $this->db->query("select * from login");
        return $query->result();
    }
    function display_records_personal_info()
    {
        $query = $this->db->query("select * from personal_info");
        return $query->result();
    }
    function update_password($data, $email)
    {
        $this->db->where('email', $email);
        $this->db->update('personal_info', $data);
    }
    function generate_password($useremail, $userpassword)
    {
        $this->db->where('email', $useremail);
        $this->db->update('personal_info', $userpassword);
    }
    public function update_personal_information($data2)
    {
        $this->db->insert("personal_info", $data2);
    }
    public function get_personal_information()
    {
        $query = $this->db->query("SELECT * FROM personal_info order by id DESC LIMIT 1");
        return $query->result();
    }
    public function update_all_information($useremail, $data)
    {
        $query = $this->db->query("SELECT * from personal_info where email='$useremail' LIMIT 1");
        foreach ($query->result() as $row) {
            $userid = $row->id;
        }

        $this->db->where('id', $userid);
        $this->db->update('personal_info', $data);
    }
    function fetch_email($email)
    {
        $query = $this->db->query("SELECT * from personal_info where email='$email'");
        $output = "";
        foreach ($query->result() as $row) {
            $output .= $row->id . "<br>";
        }
        return $output;
    }
    public function get_all_information($useremail, $userpassword)
    {
        $query = $this->db->query("SELECT * FROM personal_info where email='$useremail' and password='$userpassword'");
        return $query->result();
    }
    public function update_property($useremail, $data)
    {

        $query = $this->db->query("SELECT * from personal_info where email='$useremail' LIMIT 1");
        foreach ($query->result() as $row) {
            $userid = $row->id;
        }

        $this->db->where('id', $userid);
        $this->db->update('personal_info', $data);
    }

    public function update_car($useremail, $data)
    {

        $query = $this->db->query("SELECT * from personal_info where email='$useremail' LIMIT 1");
        foreach ($query->result() as $row) {
            $userid = $row->id;
        }

        $this->db->where('id', $userid);
        $this->db->update('personal_info', $data);
    }

    public function update_cowork($useremail, $data)
    {

        $query = $this->db->query("SELECT * from personal_info where email='$useremail' LIMIT 1");
        foreach ($query->result() as $row) {
            $userid = $row->id;
        }

        $this->db->where('id', $userid);
        $this->db->update('personal_info', $data);
    }
}
