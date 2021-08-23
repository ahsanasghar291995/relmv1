<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Main extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('main_model');
    }
    function login_validation()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('email', 'email', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');
        if ($this->form_validation->run()) {
            //true
            $email = $this->input->post('email');
            $password = $this->input->post('password');

            $this->load->model('main_model');
            if ($this->main_model->can_login($email, $password)) {
                $session_data = array(
                    'email' => $email,
                    'password' => $password
                );

                $this->session->set_userdata($session_data);
                //print_r($session_data['last_url']);
                //print_r($_SESSION);
                $newurl = $_SESSION['last_url'];
                if ($newurl == "") {
                    redirect(base_url() . 'index.php/main/dashboard');
                    //print_r($_SESSION);
                } else {
                    redirect($newurl);
                }
                //echo $_SERVER['HTTP_REFERER'];
                //echo "<br>";
                //print_r($_SESSION);
            } else {
                $this->session->set_flashdata('error', 'Invalid Email or Password');
                redirect(base_url() . 'index.php/main/pageone');
            }
        } else {

            $this->session->set_flashdata('error', 'Please enter email or password');
            redirect(base_url() . 'index.php/main/pageone');
        }
    }
    function admin()
    {
        // $this->load->view('header');
        $this->load->model('main_model');
        $data['data'] = $this->main_model->display_records();
        $this->load->view('admin', $data);
        // $this->load->view('footer');
    }
    public function fetch_email()
    {
        if ($this->input->post('email')) {
            echo $this->main_model->fetch_email($this->input->post('email'));
        }
    }
    function update_records_pagetwo()
    {
        $id = $this->db->query("Select id from login ORDER BY id DESC LIMIT 1;");
        foreach ($id->result() as $row) {
            //echo $row->id;
        }


        $data = array(
            'pets' => $this->input->post('pets'),
            'cleanliness' => $this->input->post('cleanliness'),
            'noise_level' => $this->input->post('noise_level'),
            'coed_living' => $this->input->post('co-ed_living'),
            'life_style' => $this->input->post('life_style'),
            'dietary_habits' => $this->input->post('dietary_habits'),
            'sleep_schedule' => $this->input->post('sleep_schedule'),
            'frequency_of_guests' => $this->input->post('frequency_of_guests')
        );
        $this->load->model('main_model');
        $this->main_model->can_update_pagetwo($row->id, $data);
        redirect(base_url() . 'index.php/main/matching');
    }
    function update_records_pagethree()
    {
        $id = $this->db->query("Select id from login ORDER BY id DESC LIMIT 1;");
        foreach ($id->result() as $row) {
            //echo $row->id;
        }
        if (
            $this->input->post('lifestyle_entertainment') == NULL
            || $this->input->post('education_studentlife') == NULL


        ) {
            $this->session->set_flashdata('error', 'Please select all the options.');
            redirect(base_url() . 'index.php/main/pagethree');
        } else {


            $data = array(
                'lifestyle_entertainment' => implode(",", $this->input->post('lifestyle_entertainment')),
                'education_studentlife' => implode(",", $this->input->post('education_studentlife')),
                'health_fitness' => implode(",", $this->input->post('health_fitness')),
                'business_entrepreneurship' => implode(",", $this->input->post('business_entrepreneurship')),
                'social_interest_housing' => implode(",", $this->input->post('social_interest_housing')),
                'sports_recreation' => implode(",", $this->input->post('sports_recreation')),
                'creative_performers' => implode(",", $this->input->post('creative_performers'))
            );
            $this->load->model('main_model');
            $this->main_model->can_update_pagethree($row->id, $data);
            redirect(base_url() . 'index.php/main/matching');
        }
    }
    function update_value_pagefour()
    {
        $id = $this->db->query("Select id from login ORDER BY id DESC LIMIT 1;");
        foreach ($id->result() as $row) {
            //echo $row->id;
        }
        $data = array(
            'rank_priority_amenities' => implode(",", $this->input->post('checkboxvalue'))
        );
        $this->load->model('main_model');
        $this->main_model->can_update_pagesix($row->id, $data);
        redirect(base_url() . 'index.php/main/matching');
    }
    function update_personal_info()
    {
        //$id = $this->db->query("Select id from login ORDER BY id DESC LIMIT 1;");
        //foreach ($id->result() as $row) {
        //echo $row->id;
        //}
        $email = $this->input->post('email');
        $query = $this->db->query("select id from login where email='$email'");
        if ($query->num_rows() > 0) {
            $this->session->set_flashdata('error', 'email is taken. please use another one.');
            redirect(base_url() . 'index.php/main/pagetwo_replace');
        } else {

            $data = array(
                'name' => $this->input->post('name'),
                'sex' => $this->input->post('sex'),
                'birthdate' => $this->input->post('birthdate'),
                'email' => $this->input->post('email'),
                'login_password' => $this->input->post('password'),
                'desired_city' => 'Null',
                'desired_movein_date' => $this->input->post('desired_movein_date'),
                'relationship_status' => $this->input->post('relationship_status'),
                'fluent_languages_spoken' => $this->input->post('fluent_languages_spoken')
            );
            $data2 = array(
                'email' => $this->input->post('email'),
                'password' => $this->input->post('password')
            );

            $this->load->model('main_model');
            $this->main_model->can_update_personal_info($data);
            $this->main_model->can_login($data2);
            redirect(base_url() . 'index.php/main/screenthree');
        }
    }
    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index()
    {
        redirect(base_url() . 'index.php/main/pageone');
    }
    public function pageone()
    {
        $contents['login_url'] = $this->googleplus->loginURL();
        $this->load->view('header');
        $this->load->view('pageone', $contents);
        $this->load->view('footer');
    }
    public function pagetwo()
    {
        $this->load->view('header');
        $this->load->view('pagetwo');
        $this->load->view('footer');
    }
    public function pagethree()
    {
        $this->load->view('header');
        $this->load->view('pagethree');
        $this->load->view('footer');
    }
    public function pagefour()
    {
        $this->load->view('header');
        $this->load->view('pagefour');
        $this->load->view('footer');
    }
    public function pagefive()
    {
        $this->load->view('header');
        $this->load->view('pagefive');
        $this->load->view('footer');
    }
    public function pagesix()
    {
        $this->load->view('header');
        $this->load->view('pagesix');
        $this->load->view('footer');
    }
    public function pageseven()
    {
        $this->load->view('header');
        $this->load->view('pageseven');
        $this->load->view('footer');
    }
    public function pagesevenloggedin($data)
    {
        $this->load->view('header');
        $this->load->view('pagesevenloggedin', $data);
        $this->load->view('footer');
    }
    public function findpageseven()
    {
        $pagenumber = $this->uri->segment('3');
        if ($pagenumber == 2) {
            $pagenumber = "pagetwo";
        }
        if ($pagenumber == 22) {
            $pagenumber = "pagetwo_replace";
        }
        if ($pagenumber == 3) {
            $pagenumber = "pagethree";
        }
        if ($pagenumber == 4) {
            $pagenumber = "pagefour";
        }
        if ($pagenumber == 5) {
            $pagenumber = "pagefive";
        }
        if ($pagenumber == 6) {
            $pagenumber = "pagesix";
        }
        $data = array('pagetwo' => $pagenumber);


        $this->load->view('header');
        $this->load->view('pageseven', $data);
        $this->load->view('footer');
    }
    public function pagetwo_replace()
    {
        if (isset($_GET['code'])) {

            $this->googleplus->getAuthenticate();
            $this->session->set_userdata('user_profile', $this->googleplus->getUserInfo());

            $contents['user_profile'] = $this->session->userdata('user_profile');
            $contents['data'] = $this->googleplus->getUserInfo();
            $email = $contents['data']["email"];
            $data = array(
                'email' => $contents['data']["email"],
                'password' => $contents['data']["given_name"],
                'pets' => 'Null',
                'cleanliness' => 'Null',
                'noise_level' => 'Null',
                'coed_living' => 'Null',
                'life_style' => 'Null',
                'dietary_habits' => 'Null',
                'sleep_schedule' => 'Null',
                'frequency_of_guests' => 'Null',
            );
            $query = $this->db->query("select id from login where email='$email'");
            if ($query->num_rows() > 0) {
                //redirect(base_url() . 'index.php/main/pagesevenloggedin');
                //$this->pagesevenloggedin();
                $queryone = $this->db->query("select * from login where email='$email'");
                //echo $queryone->num_rows();
                $j = 0;
                $array = array();
                foreach ($queryone->result() as $row) {
                    $mail = $row->email;
                    $tableone[$j] = $row->pets;
                    $one = $row->pets;
                    $tabletwo[$j] = $row->cleanliness;
                    $two = $row->cleanliness;
                    $tablethree[$j] = $row->noise_level;
                    $three = $row->noise_level;
                    $tablefour[$j] = $row->coed_living;
                    $four = $row->coed_living;
                    $tablefive[$j] = $row->life_style;
                    $five = $row->life_style;
                    $tablesix[$j] = $row->dietary_habits;
                    $six = $row->dietary_habits;
                    $tableseven[$j] = $row->sleep_schedule;
                    $seven = $row->sleep_schedule;
                    $tableeight[$j] = $row->frequency_of_guests;
                    $eight = $row->frequency_of_guests;
                    $j++;
                    //echo $tableone;
                }
                array_push($array, $one, $two, $three, $four, $five, $six, $seven, $eight);
                //print_r($array);


                $querytwo = $this->db->query("select * from login where email!='$email'");
                //echo $countrows = $querytwo->num_rows();
                $i = 0;
                $total = 0;
                foreach ($querytwo->result() as $key) {
                    $arraytwo = array();
                    $profile[$i]    =   $key->pets;
                    $newone = $key->pets;
                    $profiletwo[$i]    =   $key->cleanliness;
                    $newtwo = $key->cleanliness;
                    $profilethree[$i]    =   $key->noise_level;
                    $newthree = $key->noise_level;
                    $profilefour[$i]    =   $key->coed_living;
                    $newfour = $key->coed_living;
                    $profilefive[$i]    =   $key->life_style;
                    $newfive = $key->life_style;
                    $profilesix[$i]    =   $key->dietary_habits;
                    $newsix = $key->dietary_habits;
                    $profileseven[$i]    =   $key->sleep_schedule;
                    $newseven = $key->sleep_schedule;
                    $profileeight[$i]    =   $key->frequency_of_guests;
                    $neweight = $key->frequency_of_guests;

                    array_push($arraytwo, $newone, $newtwo, $newthree, $newfour, $newfive, $newsix, $newseven, $neweight);
                    //print_r($arraytwo);
                    $resultone = array_intersect($array, $arraytwo);
                    //print_r($resultone);
                    $resultcount = count($resultone);
                    //print_r(sizeof($resultone));

                    $i++;
                    if ($total < $resultcount) {
                        $total = $resultcount;
                        //echo "<br>";
                        //echo $mail;
                        $usermail = $mail;
                        //echo $key->id;
                        $matchingid = $key->id;
                        //echo $key->email;
                        $matchinguser = $key->email;
                        //echo "<br>";
                    }
                }
                $total = ($total / 8) * 100;
                $percent = "%";
                //echo $total . $percent;
                if ($total == 0) {
                    $data['mail'] = "no one";
                    $data['id'] = "";
                    $data['matchinguser'] = "no one";
                    $data['matchingresult'] = $total;
                }
                if ($total != 0) {
                    $data['mail'] = $usermail;
                    $data['id'] = $matchingid;
                    $data['matchinguser'] = $matchinguser;
                    $data['matchingresult'] = $total;
                }

                //echo $count;
                //$this->load->view('header');
                //$this->load->view('pagesevenloggedin', $data);
                //$this->load->view('footer');
                $this->pagesevenloggedin($data);
            } else {

                $this->load->model('main_model');
                $this->main_model->can_login($data);
            }
        }
        $this->load->view('header');
        $this->load->view('pagetwo_replace');
        $this->load->view('footer');
    }
    public function credits()
    {
        $this->load->view('header');
        $this->load->view('credits');
        $this->load->view('footer');
    }
    public function groups()
    {
        $this->load->view('header');
        $this->load->view('groups');
        $this->load->view('footer');
    }
    public function firstadminpage()
    {
        $this->load->view('header');
        $this->load->view('firstadminpage');
        $this->load->view('footer');
    }
    public function secondadminpage()
    {
        // $this->load->view('header');
        $this->load->model('main_model');
        $data['data'] = $this->main_model->display_records_personal_info();
        $this->load->view('secondadminpage', $data);
        // $this->load->view('footer');
    }
    public function matching()
    {
        $this->load->view('header');
        $this->load->view('matching');
        $this->load->view('footer');
    }
    public function list_property_pageone()
    {
        $this->load->view('header');
        $this->load->view('list_property_pageone');
        $this->load->view('footer');
    }
    public function list_property_pagetwo()
    {
        $this->load->view('header');
        $this->load->view('list_property_pagetwo');
        $this->load->view('footer');
    }
    public function list_property_pagethree()
    {
        $this->load->view('header');
        $this->load->view('list_property_pagethree');
        $this->load->view('footer');
    }
    public function list_property_pagefour()
    {
        $this->load->view('header');
        $this->load->view('list_property_pagefour');
        $this->load->view('footer');
    }
    public function list_property_pagefive()
    {
        $this->load->view('header');
        $this->load->view('list_property_pagefive');
        $this->load->view('footer');
    }
    public function list_property_finalpage()
    {
        //echo $this->uri->segment(3);
        $this->load->view('header');
        $this->load->view('list_property_finalpage');
        $this->load->view('footer');
    }
    public function cowork_lister()
    {
        $this->load->view('header');
        $this->load->view('cowork_lister');
        $this->load->view('footer');
    }
    public function car_lister()
    {
        $this->load->view('header');
        $this->load->view('car_lister');
        $this->load->view('footer');
    }
    public function screenthree()
    {
        $this->load->view('header');
        $this->load->view('screenthree');
        $this->load->view('footer');
    }
    public function password_reset()
    {
        $this->load->view('header');
        $this->load->view('password_reset');
        $this->load->view('footer');
    }
    public function check_update_password()
    {
        $email = $this->input->post('email');
        $old_password = $this->input->post('old_password');
        $new_password = $this->input->post('new_password');
        $data = array(
            'login_password' => $this->input->post('new_password')
        );
        $query = $this->db->query("Select * from personal_info where email=`$email`");
        if ($query->num_rows > 0) {
            //foreach ($query->result as $res) {
            //    if ($res->login_password == $old_password) {
            //        $old_password = $new_password;
            //    }
            //}
            $this->load->model('main_model');
            $this->main_model->update_password($data, $email);
            redirect(base_url() . 'index.php/main/pageone');
        }
    }
    public function code_generator()
    {
        $this->load->view('header');
        $this->load->view('code_generator');
        $this->load->view('footer');
    }
    public function new_pagethree()
    {
        $this->load->model("main_model");
        //$result['data'] = $this->main_model->get_personal_information();
        $useremail = $_SESSION['email'];
        $userpassword = $_SESSION['password'];
        $result['data'] = $this->main_model->get_all_information($useremail, $userpassword);
        $this->load->view("header");
        $this->load->view("new_pagethree", $result);
        $this->load->view("footer");
    }
    public function list_property_finalpage2()
    {
        $this->load->view("header");
        $this->load->view("list_property_finalpage2");
        $this->load->view("footer");
    }
    public function list_property_finalpage3()
    {
        $this->load->view("header");
        $this->load->view("list_property_finalpage3");
        $this->load->view("footer");
    }

    public function add_personal_information()
    {
        $useremail = $_SESSION['email'];
        $fname = $this->input->post("fname");
        $lname = $this->input->post("lname");
        $email = $this->input->post("email");
        $password = $this->input->post("password");
        $confirm_password = $this->input->post("confirm_password");
        $birthdate = $this->input->post("birthdate");
        $cc = $this->input->post("cc");
        $hc = $this->input->post("hc");
        $pp = $this->input->post("image");
        $pp2 = $this->input->post("image");
        $rs = $this->input->post("relationship_status");
        $fls = $this->input->post("fluent_languages_spoken");
        //echo $fls;
        //echo "<br>";
        //print_r($_SESSION);
        //echo $_SESSION['__ci_last_regenerate'];

        $config['upload_path'] = './assets/upload/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = 2000;
        $config['max_width'] = 1500;
        $config['max_height'] = 1500;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('image')) {
            $error = array('error' => $this->upload->display_errors());
            //echo "ERROR";
            //print_r($error);
            redirect(base_url() . 'index.php/main/pagetwo_replace');
        } else {
            $data = array('image_metadata' => $this->upload->data());
            $upload_data = $this->upload->data(); //Returns array of containing all of the data related to the file you uploaded.
            $file_name = $upload_data['file_name'];

            //$this->load->view('files/upload_result', $data);
            $data2 = array(
                'first_name' => $fname,
                'last_name' => $lname,
                'email' => $email,
                'password' => $password,
                'confirm_password' => $confirm_password,
                'birthdate' => $birthdate,
                'current_city' => $cc,
                'home_city' => $hc,
                'profile_picture' => $file_name,
                'relationship_status' => $rs,
                'fluent_languages_spoken' => $fls,
                'is_active' => 1,
            );
            $session_data = array(
                'email' => $email,
                'password' => $password
            );

            $this->session->set_userdata($session_data);
            $this->load->model("main_model");
            $this->main_model->update_personal_information($data2);
            redirect(base_url() . 'index.php/main/new_pagethree');
            //$this->new_pagethree();
        }
    }

    public function update_all_information()
    {
        $useremail = $_SESSION['email'];

        $s1 = $this->input->post("skill1");
        $s2 = $this->input->post("skill2");
        $s3 = $this->input->post("skill3");
        $s4 = $this->input->post("skill4");
        $s5 = $this->input->post("skill5");
        $s6 = $this->input->post("skill6");
        $o1 = $this->input->post("objective1");
        $o2 = $this->input->post("objective2");
        $o3 = $this->input->post("objective3");
        $d = $this->input->post("description");
        $le = implode(",", $this->input->post("lifestyle_entertainment"));
        $es = implode(",", $this->input->post("education_studentlife"));
        $hf = implode(",", $this->input->post("health_fitness"));
        $be = implode(",", $this->input->post("business_entrepreneurship"));
        $sih = implode(",", $this->input->post("special_interest_housing"));
        $sr = implode(",", $this->input->post("sports_recreation"));
        $cp = implode(",", $this->input->post("creative_performers"));



        $data = array(
            'skill1' => $s1,
            'skill2' => $s2,
            'skill3' => $s3,
            'skill4' => $s4,
            'skill5' => $s5,
            'skill6' => $s6,
            'objective1' => $o1,
            'objective2' => $o2,
            'objective3' => $o3,
            'description' => $d,
            'lifestyle_entertainment' => $le,
            'education_studentlife' => $es,
            'health_fitness' => $hf,
            'business_entrepreneurship' => $be,
            'special_interest_housing' => $sih,
            'sports_recreation' => $sr,
            'creative_performers' => $cp
        );
        $this->load->model("main_model");
        $this->main_model->update_all_information($useremail, $data);
        redirect(base_url() . 'index.php/main/pageone');
    }
    public function dashboard()
    {
        $this->load->library('session');
        $newdata = array(
            'logged_in' => TRUE
        );
        $useremail = $_SESSION['email'];

        $userpassword = $_SESSION['password'];
        $this->session->set_userdata($newdata);
        //print_r($_SESSION);
        //echo "<br>";
        //echo $_SESSION['logged_in'];
        $this->load->model('main_model');
        $result['data'] = $this->main_model->get_all_information($useremail, $userpassword);
        $this->load->view("header");
        $this->load->view("dashboard", $result);
        $this->load->view("footer");
    }

    public function update_property()
    {
        $useremail = $_SESSION['email'];
        $config['upload_path'] = './assets/upload/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = 20000;
        $config['max_width'] = 15000;
        $config['max_height'] = 15000;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload("file")) {
            $error = array('error' => $this->upload->display_errors());
            //print_r($error);
            //echo "ERROR";
            //print_r($error);
            redirect(base_url() . 'index.php/main/list_property_finalpage');
        } else {
            $data = array('image_metadata' => $this->upload->data());
            $upload_data = $this->upload->data(); //Returns array of containing all of the data related to the file you uploaded.
            $file_name = $upload_data['file_name'];
            //print_r($file_name);
            //print_r($data);

            //$this->load->view('files/upload_result', $data);
            $data = array(
                'property_pictures' => $file_name,
                'listing_type' => implode(",", $this->input->post("listing_type")),
                'room_in' => implode(",", $this->input->post("room_in")),
                'furnishings' => implode(",", $this->input->post("furnishings")),
                'home_features' => implode(",", $this->input->post("checkboxvalue")),
                'bed' => $this->input->post("bed"),
                'bath' => $this->input->post("bath"),
                'pets' => $this->input->post("pets"),
                'sq_feet' => $this->input->post("sq_feet"),
                'monthly_rent' => $this->input->post("monthly_rent"),
                'lease_term' => $this->input->post("lease_term"),
                'laundary' => $this->input->post("laundary"),
                'parking' => $this->input->post("parking"),
                'amenities' => $this->input->post("amenities"),
                'property_description' => $this->input->post("description"),
                'property_location' => $this->input->post("location_name"),
            );

            $this->load->model("main_model");
            $this->main_model->update_property($useremail, $data);
            if ($_SESSION['logged_in'] == 1) {
                redirect(base_url() . 'index.php/main/dashboard');
            }
            if ($_SESSION['logged_in'] != 1) {
                redirect(base_url() . 'index.php/main/new_pagethree');
            }
        }
    }

    public function update_car()
    {
        $useremail = $_SESSION['email'];
        $config['upload_path'] = './assets/upload/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = 20000;
        $config['max_width'] = 15000;
        $config['max_height'] = 15000;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload("file")) {
            $error = array('error' => $this->upload->display_errors());
            redirect(base_url() . 'index.php/main/list_property_finalpage2');
        } else {
            $data = array('image_metadata' => $this->upload->data());
            $upload_data = $this->upload->data();
            $file_name = $upload_data['file_name'];

            $data = array(
                'car_pictures' => $file_name,
                'car_type' => $this->input->post("car_type"),
                'car_year' => $this->input->post("car_year"),
                'car_status' => $this->input->post("car_status"),
                'car_condition' => $this->input->post("car_condition"),
                'car_location_name' => $this->input->post("location_name"),
                'car_make' => $this->input->post("car_make"),

                'car_model' => $this->input->post("car_model"),
                'car_mileage' => $this->input->post("car_mileage"),
                'car_price' => $this->input->post("car_price"),
                'car_paint' => $this->input->post("car_paint"),
                'car_size' => $this->input->post("car_size"),

                'car_drive' => $this->input->post("car_drive"),
                'car_transmission' => $this->input->post("car_transmission"),
                'car_fuel' => $this->input->post("car_fuel"),
                'car_cylinders' => $this->input->post("car_cylinders"),
                'car_description' => $this->input->post("car_description"),
            );

            $this->load->model("main_model");
            $this->main_model->update_car($useremail, $data);
            if ($_SESSION['logged_in'] == 1) {
                redirect(base_url() . 'index.php/main/dashboard');
            }
            if ($_SESSION['logged_in'] != 1) {
                redirect(base_url() . 'index.php/main/new_pagethree');
            }
        }
    }

    public function update_cowork()
    {
        $useremail = $_SESSION['email'];
        $config['upload_path'] = './assets/upload/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = 20000;
        $config['max_width'] = 15000;
        $config['max_height'] = 15000;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload("file")) {
            $error = array('error' => $this->upload->display_errors());
            redirect(base_url() . 'index.php/main/list_property_finalpage2');
        } else {
            $data = array('image_metadata' => $this->upload->data());
            $upload_data = $this->upload->data();
            $file_name = $upload_data['file_name'];
            $data = array(
                'cowork_pictures' => $file_name,
                'cowork_location_name' => $this->input->post("location_name"),
                'cowork_sq_feet' => $this->input->post("cowork_sq_feet"),
                'cowork_desks' => $this->input->post("cowork_desks"),
                'cowork_conf_room' => $this->input->post("cowork_conf_room"),
                'cowork_pets' => $this->input->post("cowork_pets"),
                'cowork_restroom' => $this->input->post("cowork_restroom"),
                'cowork_shared_office' => $this->input->post("cowork_shared_office")
            );

            $this->load->model("main_model");
            $this->main_model->update_cowork($useremail, $data);
            if ($_SESSION['logged_in'] == 1) {
                redirect(base_url() . 'index.php/main/dashboard');
            }
            if ($_SESSION['logged_in'] != 1) {
                redirect(base_url() . 'index.php/main/new_pagethree');
            }
        }
    }

    public function send_mail()
    {
        $useremail = $this->input->post("email");
        $randomnumber = rand(100000, 999999);
        $userpassword = array(
            'password' => $randomnumber,
            'confirm_password' => $randomnumber
        );
        $to = $useremail;
        $subject = 'RELM PASSWORD UPDATE';
        $from = 'admin@relm.co';

        // To send HTML mail, the Content-type header must be set
        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

        // Create email headers
        $headers .= 'From: ' . $from . "\r\n" .
            'Reply-To: ' . $from . "\r\n" .
            'X-Mailer: PHP/' . phpversion();

        // Compose a simple HTML email message
        $message = '<html><body>';
        $message .= '<h1 style="color:gray;">Hi ' . $useremail . '</h1>';
        $message .= '<p style="color:gray;font-size:18px;">Your 6 digit password is this from now:</p>';

        $message .= '<p style="color:gray;font-size:18px;">' . $randomnumber . '</p>';
        $message .= '</body></html>';

        // Sending email
        if (mail($to, $subject, $message, $headers)) {
            $this->load->model("main_model");
            $this->main_model->generate_password($useremail, $userpassword);
            echo 'Your mail has been sent successfully.';
            redirect(base_url() . 'index.php/main/pageone');
        } else {
            echo 'Unable to send email. Please try again.';
        }
    }
}
